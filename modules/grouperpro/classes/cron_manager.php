<?php
/**
 * 2016 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2016 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class GrouperCronManager
{
    public function cronGeneration($Grouper = 0)
    {
        $active = Configuration::get('GROUPER_CRON');
        if ($active) {
            if (empty($Grouper) || $Grouper == 0) {
                $filterFields = Db::getInstance()->executeS('SELECT `id_grouperpro` FROM `' . _DB_PREFIX_ . 'grouperpro`');
            } else {
                $filterFields = Db::getInstance()->executeS('SELECT `id_grouperpro` FROM `' . _DB_PREFIX_ . 'grouperpro` WHERE `id_grouperpro`=' . (int)$Grouper);
            }
            if ($filterFields && !empty($filterFields)) {
                foreach ($filterFields as $filterField) {
                    if (!empty($filterField['id_grouperpro'])) {
                        $this->GenerationGroup($filterField['id_grouperpro']);
                    }
                }
            }
        }
    }

    public function generationGroup($id_group)
    {
        $filterField = Db::getInstance()->executeS('SELECT * FROM `' . _DB_PREFIX_ . 'grouperpro` WHERE `id_grouperpro` = ' . (int)$id_group);

        if (!empty($filterField[0]['filter']) && !empty($filterField[0]['id_group'])) {
            $filterJsDec = json_decode($filterField[0]['filter']);

            if (!empty($filterJsDec) && count($filterJsDec) > 0) {
                $QCustomer = array();
                if (!empty($filterJsDec->birthday_from)) {
                    $QCustomer[] = 'birthday <= "' . pSQL(Date('Y-m-d', strtotime("-" . $filterJsDec->birthday_from . " year"))) . '"';
                }
                if (!empty($filterJsDec->birthday_to)) {
                    $QCustomer[] = 'birthday >= "' . pSQL(Date('Y-m-d', strtotime("-" . $filterJsDec->birthday_to . " year"))) . '"';
                }

                if (!empty($filterJsDec->id_gender) && $filterJsDec->id_gender != 'all') {
                    $QCustomer[] = 'id_gender = "' . pSQL($filterJsDec->id_gender) . '"';
                }
                if (!empty($filterJsDec->registration_from)) {
                    $QCustomer[] = 'date_add >= "' . pSQL($filterJsDec->registration_from) . '"';
                }
                if (!empty($filterJsDec->registration_to)) {
                    $QCustomer[] = 'date_add <= "' . pSQL($filterJsDec->registration_to) . '"';
                }
                if (!empty($filterJsDec->last_login)) {
                    $QCustomer[] = 'date_upd >= "' . pSQL($filterJsDec->last_login) . '"';
                }
                if (!empty($filterJsDec->auth_active)) {
                    if ($filterJsDec->auth_active == 1) {
                        $QCustomer[] = 'active = "1"';
                    } else {
                        $QCustomer[] = 'active = "0"';
                    }
                }
                if (!empty($filterJsDec->newsletter)) {
                    if ($filterJsDec->newsletter == 1) {
                        $QCustomer[] = 'newsletter = "1"';
                    } else {
                        $QCustomer[] = 'newsletter = "0"';
                    }
                }
                if (!empty($filterJsDec->optin)) {
                    if ($filterJsDec->optin == 1) {
                        $QCustomer[] = 'optin = "1"';
                    } else {
                        $QCustomer[] = 'optin = "0"';
                    }
                }
                if (!empty($filterJsDec->id_default_group)) {
                    $QCustomer[] = 'id_default_group IN ('.implode(',', array_map('intval', $filterJsDec->id_default_group)).')';
                }
                if (!empty($filterJsDec->user_language)) {
                    $QCustomer[] = 'id_lang IN ('.implode(',', array_map('intval', $filterJsDec->user_language)).')';
                }
                if (!empty($filterJsDec->id_shop)) {
                    $QCustomer[] = 'id_shop IN
                     ('.implode(',', array_map('intval', $filterJsDec->id_shop)).')';
                }

                $WHERE = (!empty($QCustomer)) ? 'WHERE ' . join(' AND ', $QCustomer) : '';

                $resultCustomer = Db::getInstance()->executeS('SELECT `id_customer` FROM `' . _DB_PREFIX_ . 'customer`  ' . $WHERE);

                $customer_ids = array();
                if (!empty($resultCustomer)) {
                    foreach ($resultCustomer as $item) {
                        $customer_ids[] = $item['id_customer'];
                    }
                }

                if (!empty($filterJsDec->groupBox)) {
                    $WHERE_GROUP = array();
                    foreach ($filterJsDec->groupBox as $item) {
                        $WHERE_GROUP[] = $item;
                    }
                    if (!empty($WHERE_GROUP)) {
                        $WHERE_RESULT_GROUP = 'WHERE id_group IN (' . join(', ', $WHERE_GROUP) . ')';
                        $resultCustomerGroup = Db::getInstance()->executeS('SELECT `id_customer` FROM `' . _DB_PREFIX_ . 'customer_group`  ' . $WHERE_RESULT_GROUP);
                    }
                    $CustomerArr = array();
                    if (!empty($resultCustomerGroup)) {
                        foreach ($resultCustomerGroup as $CustomerData) {
                            $CustomerArr[] = $CustomerData['id_customer'];
                        }
                    }
                    if (!empty($CustomerArr)) {
                        if (!empty($customer_ids)) {
                            foreach ($customer_ids as $key => $customer_id) {
                                if (!in_array($customer_id, $CustomerArr)) {
                                    unset($customer_ids[$key]);
                                }
                            }
                        }
                    }
                }

                if (!empty($filterJsDec->user_location) && is_array($filterJsDec->user_location)) {
                    $CountryUid = $filterJsDec->user_location;
                    $WHERE_RESULT_COUNTRY = 'WHERE id_country IN (' . join(', ', $CountryUid) . ')';
                    $resultCustomerCountry = Db::getInstance()->executeS('SELECT `id_customer` FROM `' . _DB_PREFIX_ . 'address`  ' . $WHERE_RESULT_COUNTRY . ' GROUP BY `id_customer`');
                    $CustomerArr = array();
                    if (!empty($resultCustomerCountry)) {
                        foreach ($resultCustomerCountry as $CustomerData) {
                            $CustomerArr[] = $CustomerData['id_customer'];
                        }
                    }
                    if (!empty($CustomerArr)) {
                        if (!empty($customer_ids)) {
                            foreach ($customer_ids as $key => $customer_id) {
                                if (!in_array($customer_id, $CustomerArr)) {
                                    unset($customer_ids[$key]);
                                }
                            }
                        }
                    } else {
                        if (!empty($WHERE_RESULT_COUNTRY)) {
                            $customer_ids = array();
                        }
                    }
                }

// Order filter:
                $orderFiltered = false;
                $orderFilteredActive = true;

                $QOrder = array('current_st' => '', 'qty' => '', 'id_carrier' => '', 'id_shop' => '');

                $qtyCondition = array();

                if (!empty($filterJsDec->order_to) || Validate::isInt($filterJsDec->order_to)) {
                    if ($filterJsDec->order_to > 0) {
                        $qtyCondition[] = 'qty <= ' . $filterJsDec->order_to;
                    } else {
                        $orderFilteredActive = false;
                    }
                }

                if (!empty($filterJsDec->id_shop) && is_array($filterJsDec->id_shop)) {
                    $id_shop = array();
                    foreach ($filterJsDec->id_shop as $id_shop_uid) {
                        if (is_numeric($id_shop_uid) && $id_shop_uid > 0) {
                            $id_shop[] = (int)$id_shop_uid;
                        }
                    }
                    $QOrder['id_shop'] = ' AND `id_shop` IN (' . join(',', $id_shop) . ') ';
                }

                $filteredByOrdersLists = array();
                if ($orderFilteredActive  && count($customer_ids)) {
                    if (!empty($filterJsDec->order_status) && is_array($filterJsDec->order_status)) {
                        $order_state = array();
                        foreach ($filterJsDec->order_status as $order_st) {
                            if (is_numeric($order_st) && $order_st > 0) {
                                $order_state[] = (int)$order_st;
                            }
                        }
                        $QOrder['current_st'] = ' AND `current_state` IN (' . join(',', $order_state) . ') ';
                    }

                    if (!empty($filterJsDec->order_from) && is_numeric($filterJsDec->order_from) && $filterJsDec->order_from > 0) {
                        $qtyCondition[] = 'qty >= ' . $filterJsDec->order_from;
                    }

                    if (isset($qtyCondition) && !empty($qtyCondition)) {
                        $QOrder['qty'] = ' HAVING ' . join(' AND ', $qtyCondition);
                    }

                    $resultCustomerOrderState = false;
                    if (!empty($QOrder['current_st']) || !empty($QOrder['id_shop']) || !empty($QOrder['qty'])) {
                        $resultCustomerOrderState = Db::getInstance()->executeS('SELECT `id_customer`, count(id_customer) AS qty 
                        FROM `' . _DB_PREFIX_ . 'orders` 
                        WHERE `id_customer` IN (' . join(',', $customer_ids) . ')'
                            . $QOrder['current_st']
                            . $QOrder['id_shop']
                            .' GROUP BY id_customer '
                            . $QOrder['qty']);
                        $orderFiltered = true;
                    }

                    if ($resultCustomerOrderState && count($resultCustomerOrderState) > 0) {
                        foreach ($resultCustomerOrderState as $item) {
                            if (isset($item['id_customer']) && !empty($item['id_customer']) && Validate::isInt($item['id_customer'])) {
                                $filteredByOrdersLists[] = $item['id_customer'];
                            }
                        }
                    }
                } elseif (count($customer_ids)) {
                    $resultCustomerOrderState = Db::getInstance()->executeS('SELECT `id_customer`, count(id_customer) AS qty 
                    FROM `' . _DB_PREFIX_ . 'orders` 
                    WHERE `id_customer` IN (' . join(',', $customer_ids) . ')'
                        .' GROUP BY id_customer '
                        . $QOrder['id_shop']);
                    if ($resultCustomerOrderState && count($resultCustomerOrderState) > 0) {
                        foreach ($resultCustomerOrderState as $item) {
                            if (isset($item['id_customer']) && !empty($item['id_customer']) && Validate::isInt($item['id_customer'])) {
                                $filteredByOrdersLists[] = $item['id_customer'];
                            }
                        }
                    }
                    $filteredByOrdersLists = array_filter($customer_ids, function ($data) use ($filteredByOrdersLists) {
                        if (!in_array($data, $filteredByOrdersLists)) {
                            return $data;
                        }
                    });
                    $orderFiltered = true;
                }

                $resultCustomerOrderSumState = false;
                if (count($customer_ids)) {
                    // sum filter
                    $sumCondition = $sumWhereCondition = array();
                    if (!empty($filterJsDec->order_sum_from) && Validate::isInt($filterJsDec->order_sum_from)) {
                        $sumCondition[] = 'SUM(total_paid) >= ' . $filterJsDec->order_sum_from;
                    }
                    if (!empty($filterJsDec->order_sum_to) && Validate::isInt($filterJsDec->order_sum_to)) {
                        $sumCondition[] = 'SUM(total_paid) <= ' . $filterJsDec->order_sum_to;
                    }
                    $sumWhereCondition['having'] = '';
                    if (isset($sumCondition) && !empty($sumCondition)) {
                        $sumWhereCondition['having'] = 'HAVING ' . join(' AND ', $sumCondition);
                    }
                    $sumWhereCondition['where'] = '';
                    if (!empty($filterJsDec->order_currency) && is_array($filterJsDec->order_currency)) {
                        $order_currency = array();
                        foreach ($filterJsDec->order_currency as $order_st) {
                            if (is_numeric($order_st) && $order_st > 0) {
                                $order_currency[] = (int)$order_st;
                            }
                        }
                        $sumWhereCondition['where'] = ' AND `id_currency` IN(' . implode(',', array_map('intval', $order_currency)) . ')';
                    }
                    if (!empty($filterJsDec->order_sum_status) && is_array($filterJsDec->order_sum_status)) {
                        $order_state = array();
                        foreach ($filterJsDec->order_sum_status as $order_st) {
                            if (is_numeric($order_st) && $order_st > 0) {
                                $order_state[] = (int)$order_st;
                            }
                        }
                        $sumWhereCondition['where'] .= ' AND `current_state` IN(' . implode(',', array_map('intval', $order_state)) . ') ';
                    }

                    if (!empty($sumWhereCondition['where']) || !empty($sumWhereCondition['having'])) {
                        $resultCustomerOrderSumState = Db::getInstance()->executeS('SELECT `id_customer` FROM `' . _DB_PREFIX_ . 'orders`
                                                WHERE `id_customer` IN (' . join(',', $customer_ids) . ') '
                            . $sumWhereCondition['where']
                            . ' GROUP BY `id_customer` '
                            . $sumWhereCondition['having']);
                        $orderFiltered = true;
                    }
                }

                if ($resultCustomerOrderSumState && count($resultCustomerOrderSumState) > 0) {
                    foreach ($resultCustomerOrderSumState as $item) {
                        if (isset($item['id_customer']) && !empty($item['id_customer']) && Validate::isInt($item['id_customer'])) {
                            $filteredByOrdersLists[] = $item['id_customer'];
                        }
                    }
                }

                if ($orderFiltered) {
                    $filteredByOrdersLists = array_unique($filteredByOrdersLists);
                    $customer_ids = array_filter($customer_ids, function ($data) use ($filteredByOrdersLists) {
                        if (in_array($data, $filteredByOrdersLists)) {
                            return $data;
                        }
                    });
                }

                $group_update = (int)$filterField[0]['id_group'];
                if ($group_update > 0) {
                    $this->updateGroup($group_update, $customer_ids);
                }
            }
        }

        return 1;
    }

    public function updateGroup($id_group, $list)
    {
        if (!empty($id_group)) {
            $this->cleanGroups($id_group);
        }
        if ($list && !empty($list)) {
            $this->addGroups($id_group, $list);

            return 1;
        } else {
            return 0;
        }
    }

    public function cleanGroups($id_group)
    {
        return Db::getInstance()->delete('customer_group', 'id_group = ' . (int)$id_group);
    }

    public function addGroups($id_group, $lists)
    {
        foreach ($lists as $id_customer) {
            Db::getInstance()->insert('customer_group', array('id_customer' => (int)$id_customer, 'id_group' => (int)$id_group), false, true, Db::INSERT_IGNORE);
        }
    }
}
