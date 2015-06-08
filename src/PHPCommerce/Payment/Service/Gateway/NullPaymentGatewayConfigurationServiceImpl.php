<?php
namespace PHPCommerce\Payment\Service\Gateway;
use PHPCommerce\Payment\Service\PaymentGatewayConfigurationService;

class NullPaymentGatewayConfigurationServiceImpl implements PaymentGatewayConfigurationService {
    protected $configuration;

    protected $transactionService;

    protected $rollbackService;

    /**
     * @param NullPaymentGatewayConfiguration $configuration
     */
    public function setConfiguration($configuration) {
        $this->configuration = $configuration;
    }

    /**
     * @param PaymentGatewayTransactionService $transactionService
     */
    public function setTransactionService($transactionService) {
        $this->transactionService = $transactionService;
    }

    /**
     * @param PaymentGatewayRollbackService $rollbackService
     */
    public function setRollbackService($rollbackService) {
        $this->rollbackService = $rollbackService;
    }


    /**
     * @return PaymentGatewayConfiguration
     */
    public function getConfiguration() {
        return $this->configuration;
    }

    /**
     * @return PaymentGatewayTransactionService
     */
    public function getTransactionService() {
        return $this->transactionService;
    }

    /**
     * @return PaymentGatewayTransactionConfirmationService
     */
    public function getTransactionConfirmationService() {
        return null;
    }

    /**
     * @return PaymentGatewayReportingService
     */
    public function getReportingService() {
        return null;
    }

    /**
     * @return PaymentGatewayCreditCardService
     */
    public function getCreditCardService() {
        return null;
    }

    /**
     * @return PaymentGatewayCustomerService
     */
    public function getCustomerService() {
        return null;
    }

    /**
     * @return PaymentGatewaySubscriptionService
     */
    public function getSubscriptionService() {
        return null;
    }

    /**
     * @return PaymentGatewayFraudService
     */
    public function getFraudService() {
        return null;
    }

    /**
     * @return PaymentGatewayHostedService
     */
    public function getHostedService() {
        return null;
    }

    /**
     * @return PaymentGatewayRollbackService
     */
    public function getRollbackService() {
        return rollbackService;
    }

    /**
     * @return PaymentGatewayWebResponseService
     */
    public function getWebResponseService() {
        return null;
    }

    /**
     * @return PaymentGatewayTransparentRedirectService
     */
    public function getTransparentRedirectService() {
        return null;
    }

    /**
     * @return TRCreditCardExtensionHandler
     */
    public function getCreditCardExtensionHandler() {
        return null;
    }

    /**
     * @return PaymentGatewayFieldExtensionHandler
     */
    public function getFieldExtensionHandler() {
        return null;
    }

    /**
     * @return CreditCardTypesExtensionHandler
     */
    public function getCreditCardTypesExtensionHandler() {
        return null;
    }
}
