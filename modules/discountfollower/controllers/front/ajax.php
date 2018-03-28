<?php
/**
 * 2017 Terranet
 *
 * NOTICE OF LICENSE
 *
 * @author    Terranet
 * @copyright 2017 Terranet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class DiscountFollowerAjaxModuleFrontController extends ModuleFrontController
{

//    public function postProcess()
//    {
//        return parent::postProcess();
//    }

    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        $response = array();
        $general_configuration = $this->module->getGlobalConfiguration();

        if (Tools::isSubmit('action')) {
            switch (Tools::getValue('action')) {
                case 'email_verification':
                    $email = Tools::getValue('email');
                    $id_product = Tools::getValue('id_product');
                    $free = Tools::getValue('free');
                    $response['resolved'] = 0;
                    if ($free == 1) {
                        if (FollowList::forceConnection($email, $id_product)) {
                            $this->context->smarty->assign(array(
                                'follow_page' => $this->context->link->getModuleLink('discountfollower', 'followlist', array(), true)
                            ));
                            $response['success_content'] = $this->context->smarty->fetch(_PS_MODULE_DIR_ . 'discountfollower/views/templates/hook/success_added.tpl');
                            $response['resolved'] = 1;
                        }
                        $response['action'] = 'free_customer';
                    } else {
                        if (FollowList::createVerificationKey($email, $id_product)) {
                            $response['message'] = $this->trans('The inquiry is successfully sent!', array(), 'Modules.Discountfollower.Shop');
                            $response['resolved'] = 1;
                        }
                        $response['action'] = 'send_verification';
                    }
                    break;
                case 'remove_item':
                    $id_product = Tools::getValue('id_product');
                    $response['resolved'] = 0;
                    if (Validate::isInt($id_product) && $id_product > 0) {
                        $email = FollowList::authCustomer();
                        if ($fw_customer_data = FollowList::getIfExistCustomer($email)) {
                            $DWList = new FollowList($fw_customer_data['id_df_customer']);
                            if ($DWList->getIfExistProductInFollow($id_product)) {
                                if ($DWList->removeProductFromFollower($id_product)) {
                                    $response['resolved'] = 1;
                                }
                                $response['action'] = 'remove_item';
                            }
                        }
                    }
                    break;
                case 'only_auth':
                    $email = Tools::getValue('email');
                    $mail_confirmed = (bool)Configuration::get('DISCOUNTFOLLOWER_MAIL_REQUIRED', false);
                    $response['resolved'] = 0;
                    if ($mail_confirmed === true) {
                        if (FollowList::createVerificationKey($email)) {
                            $response['message'] = $this->trans('The inquiry is successfully sent! Please confirm your mail box.', array(), 'Modules.Discountfollower.Shop');
                            $response['resolved'] = 1;
                        }
                        $response['action'] = 'send_verification';
                    } else {
                        if (FollowList::forceConnection($email)) {
                            $this->context->smarty->assign(array(
                                'follow_page' => $this->context->link->getModuleLink('discountfollower', 'followlist', array(), true)
                            ));
                            $response['success_content'] = $this->context->smarty->fetch(_PS_MODULE_DIR_ . 'discountfollower/views/templates/hook/success_added.tpl');
                            $response['resolved'] = 1;
                        }
                        $response['action'] = 'free_customer';
                    }
                    break;
            }

            ob_end_clean();
            header('Content-Type: application/json');
            die(Tools::jsonEncode(array(
                'response' => $response
            )));
        }

        $id_shop = (int)$this->context->shop->id;
        $id_lang = (int)$this->context->language->id;
        $id_product = (int)Tools::getValue('id_product', false);

        if ($this->context->customer->isLogged()) {
            $email = $this->context->customer->email;
            $id_customer = (int)$this->context->customer->id;
            if (!Validate::isInt($id_product)) {
                ob_end_clean();
                header('Content-Type: application/json');
                die(Tools::jsonEncode(array(
                    'error' => 1
                )));
            }
            if ($fw_customer_data = FollowList::getIfExistCustomer($email)) {
                $DWList = new FollowList($fw_customer_data['id_df_customer']);
                // IF no exist PRODUCT
                if ($DWList->getIfExistProductInFollow($id_product)) {
                    $response['resolved'] = 0;
                    if ($DWList->removeProductFromFollower($id_product)) {
                        $response['resolved'] = 1;
                    }
                    $response['action'] = 'removed';
                    // IF exist AND NEED REMOVE -> PRODUCT
                } else {
                    $response['resolved'] = 0;
                    if ($DWList->addProductInFollower($id_product, $id_lang)) {
                        $response['resolved'] = 1;
                        $this->context->smarty->assign(array(
                            'follow_page' => $this->context->link->getModuleLink('discountfollower', 'followlist', array(), true)
                        ));
                        $response['success_content'] = $this->context->smarty->fetch(_PS_MODULE_DIR_ . 'discountfollower/views/templates/hook/success_added.tpl');
                    }
                    $response['action'] = 'added';
                }
            } else {
                // IF no exist user
                $response['resolved'] = 0;
                $DWList = new FollowList();
                $DWList->id_shop = $id_shop;
                $DWList->id_customer = $id_customer;
                $DWList->email = $email;
                $DWList->id_lang = $id_lang;
                $DWList->add(true);
                if ($DWList->addProductInFollower($id_product, $id_lang)) {
                    $response['resolved'] = 1;
                }
                $response['action'] = 'created_and_added';
            }
        } elseif (!$general_configuration['DISCOUNTFOLLOWER_AUTH_REQUIRED']) {
            $auth = true;
            if (!isset($this->context->cookie->email)
                || empty($this->context->cookie->email)
                || !Validate::isEmail($this->context->cookie->email)
                || !isset($this->context->cookie->df_vefirication_email)
                || (strtotime($this->context->cookie->df_vefirication_email) <= strtotime(date('Y-m-d H:i:s')))
            ) {
                $auth = false;
            }
            if ($auth === true && ($fw_customer_data = FollowList::getIfExistCustomer($this->context->cookie->email))) {
                $DWList = new FollowList($fw_customer_data['id_df_customer']);
                if ($DWList->getIfExistProductInFollow($id_product)) {
                    $response['resolved'] = 0;
                    if ($DWList->removeProductFromFollower($id_product)) {
                        $response['resolved'] = 1;
                    }
                    $response['action'] = 'removed';
                } else {
                    $response['resolved'] = 0;
                    if ($DWList->addProductInFollower($id_product, $id_lang)) {
                        $response['resolved'] = 1;
                        $this->context->smarty->assign(array(
                            'follow_page' => $this->context->link->getModuleLink('discountfollower', 'followlist', array(), true)
                        ));
                        $response['success_content'] = $this->context->smarty->fetch(_PS_MODULE_DIR_ . 'discountfollower/views/templates/hook/success_added.tpl');
                    }
                    $response['action'] = 'added';
                }
            } else {
                if ($general_configuration['DISCOUNTFOLLOWER_MAIL_REQUIRED']) {
                    $response['resolved'] = 0;
                    $response['action'] = 'validation_email';
                    $this->context->smarty->assign(array(
                        'request_free_mail' => 0,
                        'request_mail' => 1
                    ));
                    $response['content'] = $this->context->smarty->fetch(_PS_MODULE_DIR_ . 'discountfollower/views/templates/hook/df_request_mail.tpl');
                } else {
                    $response['resolved'] = 0;
                    $response['action'] = 'request_free_email';
                    $this->context->smarty->assign(array(
                        'request_free_mail' => 1,
                        'request_mail' => 0
                    ));
                    $response['content'] = $this->context->smarty->fetch(_PS_MODULE_DIR_ . 'discountfollower/views/templates/hook/df_request_mail.tpl');
                }
            }
        } else {
            $response['resolved'] = 0;
            $response['action'] = 'authorization';
        }

        ob_end_clean();
        header('Content-Type: application/json');
        die(Tools::jsonEncode(array(
            'response' => $response
        )));
    }
}
