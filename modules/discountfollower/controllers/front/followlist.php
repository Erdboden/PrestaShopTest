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

class DiscountFollowerFollowListModuleFrontController extends ModuleFrontController
{
    private $message = '';

    public function __construct()
    {
        parent::__construct();
        $this->context = Context::getContext();

        if (Tools::isSubmit('unsubscribe') && Tools::getValue('unsubscribe')) {
            if (FollowList::setDisabledUnsubscribeCustomer(Tools::getValue('unsubscribe'))) {
                Tools::redirect('index');
            }
        }
    }

    public function postProcess()
    {
        if (Tools::isSubmit('logout') && Tools::getValue('logout') == 1) {
            $this->context->cookie->df_vefirication_email = '';
            $this->context->cookie->email = '';
            unset($this->context->cookie->df_vefirication_email);
            unset($this->context->cookie->email);
            $logout_url = $this->context->link->getPageLink('index', true, null, "mylogout");
            Tools::redirect($logout_url);
        }

        if (Tools::isSubmit('verification')) {
            $this->message = $this->module->confirmEmail(Tools::getValue('verification'));
        } elseif (isset($this->context->cookie->follow_message) && !empty($this->context->cookie->follow_message)) {
            $this->message = $this->context->cookie->follow_message;
            $this->context->cookie->follow_message = '';
            unset($this->context->cookie->follow_message);
        }
    }

    public function initContent()
    {
        parent::initContent();

        if (Tools::isSubmit('verification')) {
            $this->context->smarty->assign('message', $this->message);
            $this->setTemplate('module:discountfollower/views/templates/front/verification_execution.tpl');
            return '';
        }

        if ($id_df_customer = FollowList::authCustomer()) {
        } else {
            $this->context->smarty->assign(
                array(
                    'message' => $this->trans('You\'r need you need sign in.', array(), 'Modules.Discountfollower.Shop'),
                    'dfollower_url' => $this->context->link->getModuleLink('discountfollower', 'ajax'),
                    'required_auth' => (bool)Configuration::get('DISCOUNTFOLLOWER_AUTH_REQUIRED', false)
                )
            );
            $this->setTemplate('module:discountfollower/views/templates/front/undefined_customer.tpl');
            return '';
        }

        $this->context->smarty->assign(array(
            'follow_logout' => $this->context->link->getModuleLink('discountfollower', 'followlist', array('logout' => 1)),
            'follow_email' => FollowList::getAuthEmail(),
            'listing' => FollowList::getListing(),
            'dfollower_url' => $this->context->link->getModuleLink('discountfollower', 'ajax')
        ));

        $this->setTemplate('module:discountfollower/views/templates/front/public_page.tpl');
    }
}
