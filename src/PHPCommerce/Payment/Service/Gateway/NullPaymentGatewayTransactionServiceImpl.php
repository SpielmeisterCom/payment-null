<?php
namespace PHPCommerce\Payment\Service\Gateway;
use PHPCommerce\Payment\Dto\PaymentRequestDTO;
use PHPCommerce\Payment\Dto\PaymentResponseDTO;
use PHPCommerce\Payment\Service\PaymentGatewayTransactionService;
use PHPCommerce\Payment\Service\Exception\PaymentException;
use PHPCommerce\Payment\PaymentType;

class NullPaymentGatewayTransactionServiceImpl implements PaymentGatewayTransactionService {

    /**
     * @param PaymentRequestDTO $paymentRequestDTO
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function authorize(PaymentRequestDTO $paymentRequestDTO)
    {
        return new PaymentResponseDTO(PaymentType::$THIRD_PARTY_ACCOUNT, NullPaymentGatewayType::$NULL_GATEWAY);
    }

    /**
     * @param PaymentRequestDTO $paymentRequestDTO
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function capture(PaymentRequestDTO $paymentRequestDTO)
    {
        return new PaymentResponseDTO(PaymentType::$THIRD_PARTY_ACCOUNT, NullPaymentGatewayType::$NULL_GATEWAY);
    }

    /**
     * @param PaymentRequestDTO $paymentRequestDTO
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function authorizeAndCapture(PaymentRequestDTO $paymentRequestDTO)
    {
        return new PaymentResponseDTO(PaymentType::$THIRD_PARTY_ACCOUNT, NullPaymentGatewayType::$NULL_GATEWAY);
    }

    /**
     * @param PaymentRequestDTO $paymentRequestDTO
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function reverseAuthorize(PaymentRequestDTO $paymentRequestDTO)
    {
        return new PaymentResponseDTO(PaymentType::$THIRD_PARTY_ACCOUNT, NullPaymentGatewayType::$NULL_GATEWAY);
    }

    /**
     * @param PaymentRequestDTO $paymentRequestDTO
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function refund(PaymentRequestDTO $paymentRequestDTO)
    {
        return new PaymentResponseDTO(PaymentType::$THIRD_PARTY_ACCOUNT, NullPaymentGatewayType::$NULL_GATEWAY);
    }

    /**
     * @param PaymentRequestDTO $paymentRequestDTO
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function voidPayment(PaymentRequestDTO $paymentRequestDTO)
    {
        return new PaymentResponseDTO(PaymentType::$THIRD_PARTY_ACCOUNT, NullPaymentGatewayType::$NULL_GATEWAY);
    }
}