<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Admin
 * Date: 19.07.13
 * Time: 13:44
 * To change this template use File | Settings | File Templates.
 */

class SnowCommerce_CustomPaymentMethod_Model_Pay extends Mage_Payment_Model_Method_Abstract //вместо CustomPaymentMethod - имя метода
{
    protected $_code = 'sc_custom_payment'; //в кавычках имя метода
}