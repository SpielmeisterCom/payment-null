<?php
namespace PHPCommerce\Payment\Service\Gateway;
use PHPCommerce\Payment\Dto\PaymentRequestDTO;
use PHPCommerce\Payment\Dto\PaymentResponseDTO;
use PHPCommerce\Payment\PaymentTransactionType;
use PHPCommerce\Payment\PaymentType;
use PHPCommerce\Payment\Service\PaymentGatewayRollbackService;
use PHPCommerce\Payment\Service\Exception\PaymentException;

class NullPaymentGatewayRollbackServiceImpl implements PaymentGatewayRollbackService {
    /**
     * @param PaymentRequestDTO $transactionToBeRolledBack
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function rollbackAuthorize(PaymentRequestDTO $transactionToBeRolledBack)
    {
        $responseDto = new PaymentResponseDTO(PaymentType::$CREDIT_CARD, NullPaymentGatewayType::$NULL_GATEWAY);
        $responseDto->rawResponse("rollback authorize - successful")
        ->successful(true)
        ->paymentTransactionType(PaymentTransactionType::$REVERSE_AUTH)
        ->amount(new Money($transactionToBeRolledBack->getTransactionTotal()));

        return $responseDto;
    }

    /**
     * @param PaymentRequestDTO $transactionToBeRolledBack
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function rollbackCapture(PaymentRequestDTO $transactionToBeRolledBack)
    {
        throw new PaymentException("The Rollback Capture method is not supported for this module");
    }

    /**
     * @param PaymentRequestDTO $transactionToBeRolledBack
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function rollbackAuthorizeAndCapture(PaymentRequestDTO $transactionToBeRolledBack)
    {
        $responseDto = new PaymentResponseDTO(PaymentType::$CREDIT_CARD, NullPaymentGatewayType::$NULL_GATEWAY);
        $responseDto->rawResponse("rollback authorize and capture - successful")
        ->successful(true)
        ->paymentTransactionType(PaymentTransactionType::$VOID)
        ->amount(new Money($transactionToBeRolledBack->getTransactionTotal()));

        return $responseDto;
    }

    /**
     * @param PaymentRequestDTO $transactionToBeRolledBack
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function rollbackRefund(PaymentRequestDTO $transactionToBeRolledBack)
    {
        throw new PaymentException("The Rollback Refund method is not supported for this module");
    }
}