<?php
$dir = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
$autoload = $dir . '/Pay/Autoload.php';

require_once $autoload;

class ControllerExtensionPaymentPaynlYehhpay extends Pay_Controller_Admin
{
    protected $_paymentOptionId = 1877;
    protected $_paymentMethodName = 'paynl_yehhpay';
    protected $_postPayment = true;
    protected $_defaultLabel = 'Yehhpay';
}
