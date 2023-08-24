# TheLogicStudio\ExactPay\PaymentsApi

All URIs are relative to https://api.exactpaysandbox.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountCapturePayment()**](PaymentsApi.md#accountCapturePayment) | **POST** /account/{accountId}/payments/{paymentId}/capture | Capture an existing authorization for a given Account |
| [**accountGetPayment()**](PaymentsApi.md#accountGetPayment) | **GET** /account/{accountId}/payments/{paymentId} | Get details of a specific Payment for a given Account |
| [**accountGetPayments()**](PaymentsApi.md#accountGetPayments) | **GET** /account/{accountId}/payments | Get Payments for a given Account |
| [**accountPostPayment()**](PaymentsApi.md#accountPostPayment) | **POST** /account/{accountId}/payments | Create Payment for a given Account |
| [**accountRefundPayment()**](PaymentsApi.md#accountRefundPayment) | **POST** /account/{accountId}/payments/{paymentId}/refund | Refund a specific Payment for a given Account |
| [**accountVoidPayment()**](PaymentsApi.md#accountVoidPayment) | **POST** /account/{accountId}/payments/{paymentId}/void | Void a specific Payment for a given Account |
| [**capturePayment()**](PaymentsApi.md#capturePayment) | **POST** /payments/{paymentId}/capture | Capture an existing authorization |
| [**getPayment()**](PaymentsApi.md#getPayment) | **GET** /payments/{paymentId} | Get details of a specific Payment |
| [**getPayments()**](PaymentsApi.md#getPayments) | **GET** /payments | Get Payments |
| [**postPayment()**](PaymentsApi.md#postPayment) | **POST** /payments | Create Payment |
| [**refundPayment()**](PaymentsApi.md#refundPayment) | **POST** /payments/{paymentId}/refund | Refund a specific payment |
| [**voidPayment()**](PaymentsApi.md#voidPayment) | **POST** /payments/{paymentId}/void | Void a specific Payment |


## `accountCapturePayment()`

```php
accountCapturePayment($account_id, $payment_id, $referenced_payment): \TheLogicStudio\ExactPay\Model\Payment
```

Capture an existing authorization for a given Account

API for an Organization to capture an existing authorization for a merchant (accountId). Note that ACH transactions are not able to be captured as they do not support pre-authorization.  Please note that the Organization(partner) needs to authenticate using the partner or org token.  Capture completes the transaction so that it can be funded. Captures can be for less, same or more than the original authorization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$payment_id = 62d831a97a3bf768f9e15b68; // string
$referenced_payment = new \TheLogicStudio\ExactPay\Model\ReferencedPayment(); // \TheLogicStudio\ExactPay\Model\ReferencedPayment

try {
    $result = $apiInstance->accountCapturePayment($account_id, $payment_id, $referenced_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->accountCapturePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **payment_id** | **string**|  | |
| **referenced_payment** | [**\TheLogicStudio\ExactPay\Model\ReferencedPayment**](../Model/ReferencedPayment.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Payment**](../Model/Payment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountGetPayment()`

```php
accountGetPayment($account_id, $payment_id): \TheLogicStudio\ExactPay\Model\Payment
```

Get details of a specific Payment for a given Account

API for an Organization to retrieve the details of a specific Payment for a specific merchant (accountId).  Please note that the Organization(partner) needs to authenticate using the partner or org token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$payment_id = 62d831a97a3bf768f9e15b68; // string

try {
    $result = $apiInstance->accountGetPayment($account_id, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->accountGetPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **payment_id** | **string**|  | |

### Return type

[**\TheLogicStudio\ExactPay\Model\Payment**](../Model/Payment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountGetPayments()`

```php
accountGetPayments($account_id, $sort, $limit, $skip): \TheLogicStudio\ExactPay\Model\Payment[]
```

Get Payments for a given Account

API for an Organization to fetch a list of Payments for a specific merchant (accountId).  Please note that the Organization(partner) needs to authenticate using the partner or org token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$sort = -name; // string | Sets the sort order If an object is passed, values allowed are asc, desc, ascending, descending, 1, and -1. If a string is passed, it must be a space delimited list of path names. The sort order of each path is ascending unless the path name is prefixed with - which will be treated as descending.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.

try {
    $result = $apiInstance->accountGetPayments($account_id, $sort, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->accountGetPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **sort** | **string**| Sets the sort order If an object is passed, values allowed are asc, desc, ascending, descending, 1, and -1. If a string is passed, it must be a space delimited list of path names. The sort order of each path is ascending unless the path name is prefixed with - which will be treated as descending. | [optional] |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Payment[]**](../Model/Payment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountPostPayment()`

```php
accountPostPayment($account_id, $create_payment): \TheLogicStudio\ExactPay\Model\Payment
```

Create Payment for a given Account

API for an Organization to create a Payment on behalf of a merchant (accountId).  Please note that the Organization(partner) needs to authenticate using the partner or organization token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$create_payment = new \TheLogicStudio\ExactPay\Model\CreatePayment(); // \TheLogicStudio\ExactPay\Model\CreatePayment

try {
    $result = $apiInstance->accountPostPayment($account_id, $create_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->accountPostPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **create_payment** | [**\TheLogicStudio\ExactPay\Model\CreatePayment**](../Model/CreatePayment.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Payment**](../Model/Payment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountRefundPayment()`

```php
accountRefundPayment($account_id, $payment_id, $referenced_payment): \TheLogicStudio\ExactPay\Model\Payment
```

Refund a specific Payment for a given Account

API for an Organization to refund a specific Payment for a merchant (accountId). Note that ACH transactions are not refundable.  Please note that the Organization(partner) needs to authenticate using the partner or org token.  Refunds typically happen after a batch closes and refunds a partial or whole amount of the transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$payment_id = 62d831a97a3bf768f9e15b68; // string
$referenced_payment = new \TheLogicStudio\ExactPay\Model\ReferencedPayment(); // \TheLogicStudio\ExactPay\Model\ReferencedPayment

try {
    $result = $apiInstance->accountRefundPayment($account_id, $payment_id, $referenced_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->accountRefundPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **payment_id** | **string**|  | |
| **referenced_payment** | [**\TheLogicStudio\ExactPay\Model\ReferencedPayment**](../Model/ReferencedPayment.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Payment**](../Model/Payment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountVoidPayment()`

```php
accountVoidPayment($account_id, $payment_id, $referenced_payment): \TheLogicStudio\ExactPay\Model\Payment
```

Void a specific Payment for a given Account

API for an Organization to void a specific Payment for a merchant (accountId).  Please note that the Organization(partner) needs to authenticate using the partner or org token.  Note that ACH transactions are not voidable. Voids typically happen before a batch closes and removes the transaction from the batch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$payment_id = 62d831a97a3bf768f9e15b68; // string
$referenced_payment = new \TheLogicStudio\ExactPay\Model\ReferencedPayment(); // \TheLogicStudio\ExactPay\Model\ReferencedPayment

try {
    $result = $apiInstance->accountVoidPayment($account_id, $payment_id, $referenced_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->accountVoidPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **payment_id** | **string**|  | |
| **referenced_payment** | [**\TheLogicStudio\ExactPay\Model\ReferencedPayment**](../Model/ReferencedPayment.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Payment**](../Model/Payment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `capturePayment()`

```php
capturePayment($payment_id, $referenced_payment): \TheLogicStudio\ExactPay\Model\Payment
```

Capture an existing authorization

API for a merchant to capture an existing authorization. Note that ACH transactions are not able to be captured as they do not support pre-authorization.  Capture completes the transaction so that it can be funded. Captures can be for less, same or more than the original authorization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 62d831a97a3bf768f9e15b68; // string
$referenced_payment = new \TheLogicStudio\ExactPay\Model\ReferencedPayment(); // \TheLogicStudio\ExactPay\Model\ReferencedPayment

try {
    $result = $apiInstance->capturePayment($payment_id, $referenced_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->capturePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **string**|  | |
| **referenced_payment** | [**\TheLogicStudio\ExactPay\Model\ReferencedPayment**](../Model/ReferencedPayment.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Payment**](../Model/Payment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayment()`

```php
getPayment($payment_id): \TheLogicStudio\ExactPay\Model\Payment
```

Get details of a specific Payment

API for a merchant to retrieve the details of a specific Payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 62d831a97a3bf768f9e15b68; // string

try {
    $result = $apiInstance->getPayment($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **string**|  | |

### Return type

[**\TheLogicStudio\ExactPay\Model\Payment**](../Model/Payment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayments()`

```php
getPayments($sort, $limit, $skip): \TheLogicStudio\ExactPay\Model\Payment[]
```

Get Payments

API for a merchant to fetch a list of Payments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = -name; // string | Sets the sort order If an object is passed, values allowed are asc, desc, ascending, descending, 1, and -1. If a string is passed, it must be a space delimited list of path names. The sort order of each path is ascending unless the path name is prefixed with - which will be treated as descending.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.

try {
    $result = $apiInstance->getPayments($sort, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sort** | **string**| Sets the sort order If an object is passed, values allowed are asc, desc, ascending, descending, 1, and -1. If a string is passed, it must be a space delimited list of path names. The sort order of each path is ascending unless the path name is prefixed with - which will be treated as descending. | [optional] |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Payment[]**](../Model/Payment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayment()`

```php
postPayment($create_payment): \TheLogicStudio\ExactPay\Model\Payment
```

Create Payment

API for a merchant to create a Payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_payment = new \TheLogicStudio\ExactPay\Model\CreatePayment(); // \TheLogicStudio\ExactPay\Model\CreatePayment

try {
    $result = $apiInstance->postPayment($create_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->postPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_payment** | [**\TheLogicStudio\ExactPay\Model\CreatePayment**](../Model/CreatePayment.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Payment**](../Model/Payment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundPayment()`

```php
refundPayment($payment_id, $referenced_payment): \TheLogicStudio\ExactPay\Model\Payment
```

Refund a specific payment

API for a merchant to refund a specific payment. Note that ACH transactions are not refundable. Refunds typically happen after a batch closes and refunds a partial or whole amount of the transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 62d831a97a3bf768f9e15b68; // string
$referenced_payment = new \TheLogicStudio\ExactPay\Model\ReferencedPayment(); // \TheLogicStudio\ExactPay\Model\ReferencedPayment

try {
    $result = $apiInstance->refundPayment($payment_id, $referenced_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->refundPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **string**|  | |
| **referenced_payment** | [**\TheLogicStudio\ExactPay\Model\ReferencedPayment**](../Model/ReferencedPayment.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Payment**](../Model/Payment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidPayment()`

```php
voidPayment($payment_id, $referenced_payment): \TheLogicStudio\ExactPay\Model\Payment
```

Void a specific Payment

API for a merchant to void a specific Payment. Note that ACH transactions are not voidable. Voids typically happen before a batch closes and removes the transaction from the batch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 62d831a97a3bf768f9e15b68; // string
$referenced_payment = new \TheLogicStudio\ExactPay\Model\ReferencedPayment(); // \TheLogicStudio\ExactPay\Model\ReferencedPayment

try {
    $result = $apiInstance->voidPayment($payment_id, $referenced_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->voidPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_id** | **string**|  | |
| **referenced_payment** | [**\TheLogicStudio\ExactPay\Model\ReferencedPayment**](../Model/ReferencedPayment.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Payment**](../Model/Payment.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
