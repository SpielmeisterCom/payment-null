<?php
namespace PHPCommerce\NullPaymentBundle\Tests;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class NullPaymentGatewayTest extends PHPUnit_Framework_TestCase
{
    /** @var \PHPCommerce\Payment\Service\PaymentGatewayConfigurationService */
    protected $nullPaymentGateway;

    public function setUp() {
        $container   = new ContainerBuilder();
        $loader      = new YamlFileLoader($container, new FileLocator(array(__DIR__ . "/../Resources/config")));
        $loader->load( 'null-payment-gateway.yml');

        $this->nullPaymentGateway = $container->get('phpcommerce.payment.gateway.null.configuration_service');
    }

    public function testAuthorize() {
        $trxService = $this->nullPaymentGateway->getTransactionService();
        $paymentResponse = $trxService->authorize(
            new \PHPCommerce\Payment\Dto\PaymentRequestDTO()
        );
        $this->assertInstanceOf("\\PHPCommerce\\Payment\\Dto\\PaymentResponseDTO", $paymentResponse);

        $this->assertTrue($paymentResponse->isSuccessful());

    }
}