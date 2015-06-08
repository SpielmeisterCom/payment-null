<?php
namespace PHPCommerce\Payment\Service\Gateway;
use PHPCommerce\Payment\PaymentGatewayType;

class NullPaymentGatewayConfigurationImpl implements NullPaymentGatewayConfiguration {
    /**
     * @var int
     */
    protected $failureReportingThreshold = 1;

    /**
     * @var bool
     */
    protected $performAuthorizeAndCapture = true;

    /**
     * @return String
     */
    public function getTransparentRedirectUrl() {
        return "/null-checkout/process";
    }

    /**
     * @return String
     */
    public function getTransparentRedirectReturnUrl() {
        return "/null-checkout/return";
    }

    /**
     * @return bool
     */
    public function isPerformAuthorizeAndCapture() {
        return true;
    }

    /**
     * @param bool $performAuthorizeAndCapture
     * @return void
     */
    public function setPerformAuthorizeAndCapture($performAuthorizeAndCapture) {
        $this->performAuthorizeAndCapture = $performAuthorizeAndCapture;
    }

    /**
     * @return int
     */
    public function getFailureReportingThreshold() {
        return $this->failureReportingThreshold;
    }


    /**
     *
     * @param int $failureReportingThreshold
     * @return void
     */
    public function setFailureReportingThreshold($failureReportingThreshold) {
        $this->failureReportingThreshold = $failureReportingThreshold;
    }

    /**
     * @return bool
     */
    public function handlesAuthorize() {
        return true;
    }


    /**
     * @return bool
     */
    public function handlesCapture() {
        return false;
    }

    /**
     * @return bool
     */
    public function handlesAuthorizeAndCapture() {
        return true;
    }

    /**
     * @return bool
     */
    public function handlesReverseAuthorize() {
        return false;
    }


    /**
     * @return bool
     */
    public function handlesVoid() {
        return false;
    }

    /**
     * @return bool
     */
    public function handlesRefund() {
        return false;
    }

    /**
     * @return bool
     */
    public function handlesPartialCapture() {
        return false;
    }

    /**
     * @return bool
     */
    public function handlesMultipleShipment() {
        return false;
    }

    /**
     * @return bool
     */
    public function handlesRecurringPayment() {
        return false;
    }

    /**
     * @return bool
     */
    public function handlesSavedCustomerPayment() {
        return false;
    }

    /**
     * @return bool
     */
    public function handlesMultiplePayments() {
        return false;
    }

    /**
     * @return PaymentGatewayType
     */
    public function getGatewayType() {
        return NullPaymentGatewayType::NULL_GATEWAY;
    }
}
