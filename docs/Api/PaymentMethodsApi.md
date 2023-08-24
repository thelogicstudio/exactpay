# TheLogicStudio\ExactPay\PaymentMethodsApi

All URIs are relative to https://api.exactpaysandbox.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountDeletePaymentMethod()**](PaymentMethodsApi.md#accountDeletePaymentMethod) | **DELETE** /account/{accountId}/payment-method/{paymentToken} | Delete a Payment Method for a given Account |
| [**accountGetPaymentMethod()**](PaymentMethodsApi.md#accountGetPaymentMethod) | **GET** /account/{accountId}/payment-method/{paymentToken} | Retrieve a Payment Method for a given Account |
| [**accountPostPaymentMethod()**](PaymentMethodsApi.md#accountPostPaymentMethod) | **POST** /account/{accountId}/payment-method | Create Payment Method for a given Account |
| [**accountPostVerifyMicrodeposits()**](PaymentMethodsApi.md#accountPostVerifyMicrodeposits) | **POST** /account/{accountId}/payment-method/{payment-token}/verify | Verify micro-deposits on an ACH Payment Method for a given Account |
| [**deletePaymentMethod()**](PaymentMethodsApi.md#deletePaymentMethod) | **DELETE** /payment-method/{paymentToken} | Delete a Payment Method |
| [**getPaymentMethod()**](PaymentMethodsApi.md#getPaymentMethod) | **GET** /payment-method/{paymentToken} | Retrieve a Payment Method |
| [**postPaymentMethod()**](PaymentMethodsApi.md#postPaymentMethod) | **POST** /payment-method | Create Payment Method |
| [**postVerifyMicrodeposits()**](PaymentMethodsApi.md#postVerifyMicrodeposits) | **POST** /payment-method/{payment-token}/verify | Verify micro-deposits on an ACH Payment Method |


## `accountDeletePaymentMethod()`

```php
accountDeletePaymentMethod($account_id, $payment_token)
```

Delete a Payment Method for a given Account

API to allow an Organization to delete a Payment Method for a merchant (accountId).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$payment_token = 9085c19f-88e9-4fbf-93cf-5ceec221146c; // string | Payment token Identifier.

try {
    $apiInstance->accountDeletePaymentMethod($account_id, $payment_token);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->accountDeletePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **payment_token** | **string**| Payment token Identifier. | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountGetPaymentMethod()`

```php
accountGetPaymentMethod($account_id, $payment_token): \TheLogicStudio\ExactPay\Model\PaymentMethod
```

Retrieve a Payment Method for a given Account

API to allow an Organization to retrieve a Payment Method of a specific merchant (accountId).  Please note that the Organization(partner) needs to authenticate using the partner or org token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$payment_token = 9085c19f-88e9-4fbf-93cf-5ceec221146c; // string | Payment token Identifier.

try {
    $result = $apiInstance->accountGetPaymentMethod($account_id, $payment_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->accountGetPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **payment_token** | **string**| Payment token Identifier. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountPostPaymentMethod()`

```php
accountPostPaymentMethod($account_id, $create_payment_method): \TheLogicStudio\ExactPay\Model\PaymentMethod
```

Create Payment Method for a given Account

API to allow an Organization to create a payment token (Payment Method) for a merchant (accountId).  Note that if you are storing card information, the field `card.tokenType` can be set to various values which control where the card data will be stored. `platform` means that Exact Payments will store the card, and this is of no additional charge. `network` means that the card will be stored with a card network provider, and as an added benefit will be updated should the card be renewed or the meta data for the card change. In order to use `network` as the card token type, this feature must be enabled on your account.  If you are storing ACH related account information, then the data will only be stored on the `platform`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$create_payment_method = new \TheLogicStudio\ExactPay\Model\CreatePaymentMethod(); // \TheLogicStudio\ExactPay\Model\CreatePaymentMethod | Country code must be in CAPS

try {
    $result = $apiInstance->accountPostPaymentMethod($account_id, $create_payment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->accountPostPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **create_payment_method** | [**\TheLogicStudio\ExactPay\Model\CreatePaymentMethod**](../Model/CreatePaymentMethod.md)| Country code must be in CAPS | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountPostVerifyMicrodeposits()`

```php
accountPostVerifyMicrodeposits($account_id, $payment_token, $micro_deposit_verification_request): \TheLogicStudio\ExactPay\Model\AchPaymentMethod
```

Verify micro-deposits on an ACH Payment Method for a given Account

API for an Organization to verify micro-deposits on an ACH Payment Method for a merchant (accountId).  Before using an ACH Payment Method, the customer must verify ownership of the account. We send two small deposits to the bank account and the account owner will need to confirm the amounts received in their account.  The amounts can then be submitted through this endpoint to complete account verification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$payment_token = 9085c19f-88e9-4fbf-93cf-5ceec221146c; // string | Payment token Identifier.
$micro_deposit_verification_request = new \TheLogicStudio\ExactPay\Model\MicroDepositVerificationRequest(); // \TheLogicStudio\ExactPay\Model\MicroDepositVerificationRequest

try {
    $result = $apiInstance->accountPostVerifyMicrodeposits($account_id, $payment_token, $micro_deposit_verification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->accountPostVerifyMicrodeposits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **payment_token** | **string**| Payment token Identifier. | |
| **micro_deposit_verification_request** | [**\TheLogicStudio\ExactPay\Model\MicroDepositVerificationRequest**](../Model/MicroDepositVerificationRequest.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\AchPaymentMethod**](../Model/AchPaymentMethod.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePaymentMethod()`

```php
deletePaymentMethod($payment_token)
```

Delete a Payment Method

API to allow a merchant to delete a Payment Method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_token = 9085c19f-88e9-4fbf-93cf-5ceec221146c; // string | Payment token Identifier.

try {
    $apiInstance->deletePaymentMethod($payment_token);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->deletePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_token** | **string**| Payment token Identifier. | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentMethod()`

```php
getPaymentMethod($payment_token): \TheLogicStudio\ExactPay\Model\CustomerOrPaymentMethod
```

Retrieve a Payment Method

API to allow a merchant to retrieve a specific Payment Method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_token = 9085c19f-88e9-4fbf-93cf-5ceec221146c; // string | Payment token Identifier.

try {
    $result = $apiInstance->getPaymentMethod($payment_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->getPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_token** | **string**| Payment token Identifier. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\CustomerOrPaymentMethod**](../Model/CustomerOrPaymentMethod.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPaymentMethod()`

```php
postPaymentMethod($create_payment_method): \TheLogicStudio\ExactPay\Model\PaymentMethod
```

Create Payment Method

API to allow a merchant to create a payment token (Payment Method).  Note that if you are storing card information, the field `card.tokenType` can be set to various values which control where the card data will be stored. `platform` means that Exact Payments will store the card, and this is of no additional charge. `network` means that the card will be stored with a card network provider, and as an added benefit will be updated should the card be renewed or the meta data for the card change. In order to use `network` as the card token type, this feature must be enabled on your account.  If you are storing ACH related account information, then the data will only be stored on the `platform`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_payment_method = new \TheLogicStudio\ExactPay\Model\CreatePaymentMethod(); // \TheLogicStudio\ExactPay\Model\CreatePaymentMethod

try {
    $result = $apiInstance->postPaymentMethod($create_payment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->postPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_payment_method** | [**\TheLogicStudio\ExactPay\Model\CreatePaymentMethod**](../Model/CreatePaymentMethod.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postVerifyMicrodeposits()`

```php
postVerifyMicrodeposits($payment_token, $micro_deposit_verification_request): \TheLogicStudio\ExactPay\Model\AchPaymentMethod
```

Verify micro-deposits on an ACH Payment Method

API for a merchant to verify micro-deposits on an ACH Payment Method.  Before using an ACH Payment Method, the customer must verify ownership of the account. We send two small deposits to the bank account and the account owner will need to confirm the amounts received in their account.  The amounts can then be submitted through this endpoint to complete account verification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_token = 9085c19f-88e9-4fbf-93cf-5ceec221146c; // string | Payment token Identifier.
$micro_deposit_verification_request = new \TheLogicStudio\ExactPay\Model\MicroDepositVerificationRequest(); // \TheLogicStudio\ExactPay\Model\MicroDepositVerificationRequest

try {
    $result = $apiInstance->postVerifyMicrodeposits($payment_token, $micro_deposit_verification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentMethodsApi->postVerifyMicrodeposits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_token** | **string**| Payment token Identifier. | |
| **micro_deposit_verification_request** | [**\TheLogicStudio\ExactPay\Model\MicroDepositVerificationRequest**](../Model/MicroDepositVerificationRequest.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\AchPaymentMethod**](../Model/AchPaymentMethod.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
