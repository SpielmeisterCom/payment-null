# payment-null

This bundle registers a "Null Payment Gateway" configuration in PHPCommerce's `PaymentGatewayConfigurationServiceProvider`.

The null payment gateway can be used for testing purposes. It will just accept any Payment and mark is as valid without

doing anything else.

## Usage

Just include it in your AppKernel for your dev/test environment:

```php
    public function registerBundles() {
        // ...
            $bundles[] = new PHPCommerce\NullPaymentBundle\PHPCommerceNullPaymentBundle();
    }
```