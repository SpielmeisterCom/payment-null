<?php
namespace PHPCommerce\Payment\Service\Gateway;
use PHPCommerce\Payment\Service\PaymentGatewayConfiguration;

interface NullPaymentGatewayConfiguration extends PaymentGatewayConfiguration {

    /**
     * @return String
     */
    public function getTransparentRedirectUrl();

    /**
     * @return String
     */
    public function getTransparentRedirectReturnUrl();

}
