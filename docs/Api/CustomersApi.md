# TheLogicStudio\ExactPay\CustomersApi

All URIs are relative to https://api.exactpaysandbox.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountDeleteCustomerCustomerIdPaymentMethodToken()**](CustomersApi.md#accountDeleteCustomerCustomerIdPaymentMethodToken) | **DELETE** /account/{accountId}/customer/{customerId}/payment-method/{paymentToken} | Delete Payment Method Associated with Customer by Token (Partner context) |
| [**accountDeleteCustomerId()**](CustomersApi.md#accountDeleteCustomerId) | **DELETE** /account/{accountId}/customer/{customerId} | Delete Customer by ID (Partner context) |
| [**accountGetCustomer()**](CustomersApi.md#accountGetCustomer) | **GET** /account/{accountId}/customer | Query Customers (Partner context) |
| [**accountGetCustomerCustomerIdPaymentMethodToken()**](CustomersApi.md#accountGetCustomerCustomerIdPaymentMethodToken) | **GET** /account/{accountId}/customer/{customerId}/payment-method/{paymentToken} | Get Payment Method Associated with Customer by Token (Partner context) |
| [**accountGetCustomerCustomerIdPayments()**](CustomersApi.md#accountGetCustomerCustomerIdPayments) | **GET** /account/{accountId}/customer/{customerId}/payments | Get Customer Payments (Partner context) |
| [**accountGetCustomerDefaultPaymentMethod()**](CustomersApi.md#accountGetCustomerDefaultPaymentMethod) | **GET** /account/{accountId}/customer/{customerId}/payment-method/default | Get Default Payment Method Associated to a Customer (Partner context) |
| [**accountGetCustomerId()**](CustomersApi.md#accountGetCustomerId) | **GET** /account/{accountId}/customer/{customerId} | Get Customer by ID (Partner context) |
| [**accountGetCustomerIdPaymentMethod()**](CustomersApi.md#accountGetCustomerIdPaymentMethod) | **GET** /account/{accountId}/customer/{customerId}/payment-method | Query Payment Methods of a Customer (Partner context) |
| [**accountGetCustomerTokenPaymentMethod()**](CustomersApi.md#accountGetCustomerTokenPaymentMethod) | **GET** /account/{accountId}/customer-token/{customerToken}/payment-method | Query Payment Methods for Customer by customer token (Partner context) |
| [**accountPostCustomer()**](CustomersApi.md#accountPostCustomer) | **POST** /account/{accountId}/customer | Create Customer (Partner context) |
| [**accountPostCustomerIdPaymentMethod()**](CustomersApi.md#accountPostCustomerIdPaymentMethod) | **POST** /account/{accountId}/customer/{customerId}/payment-method | Attach Payment Method to a Customer (Partner context) |
| [**accountPutCustomerId()**](CustomersApi.md#accountPutCustomerId) | **PUT** /account/{accountId}/customer/{customerId} | Update Customer by ID (Partner context) |
| [**deleteCustomerCustomerIdPaymentMethodToken()**](CustomersApi.md#deleteCustomerCustomerIdPaymentMethodToken) | **DELETE** /customer/{customerId}/payment-method/{paymentToken} | Delete Payment Method Associated with Customer by Token (Sub-merchant context) |
| [**deleteCustomerId()**](CustomersApi.md#deleteCustomerId) | **DELETE** /customer/{customerId} | Delete Customer by ID (Sub-merchant context) |
| [**getCustomer()**](CustomersApi.md#getCustomer) | **GET** /customer | Query customers (Sub-merchant context) |
| [**getCustomerCustomerIdPaymentMethodToken()**](CustomersApi.md#getCustomerCustomerIdPaymentMethodToken) | **GET** /customer/{customerId}/payment-method/{paymentToken} | Get Payment Method Associated with Customer by Token (Sub-merchant context) |
| [**getCustomerCustomerIdPayments()**](CustomersApi.md#getCustomerCustomerIdPayments) | **GET** /customer/{customerId}/payments | Get Customer Payments (Sub-merchant context) |
| [**getCustomerId()**](CustomersApi.md#getCustomerId) | **GET** /customer/{customerId} | Get Customer by ID (Sub-merchant context) |
| [**getCustomerIdPaymentMethod()**](CustomersApi.md#getCustomerIdPaymentMethod) | **GET** /customer/{customerId}/payment-method | Query Payment Methods of a Customer (Sub-merchant context) |
| [**getCustomerTokenPaymentMethod()**](CustomersApi.md#getCustomerTokenPaymentMethod) | **GET** /customer-token/{customerToken}/payment-method | Query Payment Methods for Customer by customer token (Sub-merchant context) |
| [**postCustomer()**](CustomersApi.md#postCustomer) | **POST** /customer | Create Customer for (Sub-merchant context) |
| [**postCustomerIdPaymentMethod()**](CustomersApi.md#postCustomerIdPaymentMethod) | **POST** /customer/{customerId}/payment-method | Attach Payment Method to a Customer (Sub-merchant context) |
| [**putCustomerId()**](CustomersApi.md#putCustomerId) | **PUT** /customer/{customerId} | Update Customer by ID (Sub-merchant context) |


## `accountDeleteCustomerCustomerIdPaymentMethodToken()`

```php
accountDeleteCustomerCustomerIdPaymentMethodToken($account_id, $customer_id, $payment_token)
```

Delete Payment Method Associated with Customer by Token (Partner context)

In order to unlink a Payment Method from a Customer the following call can be made.\\ It is meant to be invoked by an Organization (Partner) for a given Merchant (`accountId`) in the request URI.\\ Please note that the Organization (Partner) needs to authenticate using the Partner or Organization token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.
$payment_token = 9085c19f-88e9-4fbf-93cf-5ceec221146c; // string | Payment token Identifier.

try {
    $apiInstance->accountDeleteCustomerCustomerIdPaymentMethodToken($account_id, $customer_id, $payment_token);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->accountDeleteCustomerCustomerIdPaymentMethodToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |
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

## `accountDeleteCustomerId()`

```php
accountDeleteCustomerId($account_id, $customer_id)
```

Delete Customer by ID (Partner context)

On occasion it is necessary for an API consumer to delete Customers. The following call supports this use case.\\ It is meant to be invoked by a Organization (Partner) to fetch the list of all Customers for a given Merchant (`accountId`) in the request URI.\\ Please note that the Organization (Partner) needs to authenticate using the Partner or Organization token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.

try {
    $apiInstance->accountDeleteCustomerId($account_id, $customer_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->accountDeleteCustomerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |

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

## `accountGetCustomer()`

```php
accountGetCustomer($account_id, $limit, $skip, $sort): \TheLogicStudio\ExactPay\Model\Customer[]
```

Query Customers (Partner context)

Returns the list of Customers under a given Merchant.\\ It is meant to be invoked by a Organization (Partner) to fetch the list of all Customers for a given Merchant (`accountId`) in the request URI.\\ Please note that the Organization (Partner) needs to authenticate using the Partner or Organization token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
$sort = createdAt:asc; // string | Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.

try {
    $result = $apiInstance->accountGetCustomer($account_id, $limit, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->accountGetCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |
| **sort** | **string**| Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). To sort by a &#x60;fieldName&#x60;, use the &#x60;fieldName:&#x60; followed by the sort order. To sort by fields in the nested object, use &#x60;objectName.fieldName&#x60; followed by the sort order. Sorting can be done by multiple fields by providing the &#x60;fieldNames&#x60; with sort direction as comma-separated values. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Customer[]**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountGetCustomerCustomerIdPaymentMethodToken()`

```php
accountGetCustomerCustomerIdPaymentMethodToken($account_id, $customer_id, $payment_token): \TheLogicStudio\ExactPay\Model\PaymentMethod
```

Get Payment Method Associated with Customer by Token (Partner context)

To retrieve a Payment Method as well as ensure it is associated with a Customer the following call can be used.\\ It is meant to be invoked by an Organization (Partner) for a given Merchant (`accountId`) in the request URI.\\ Please note that the Organization (Partner) needs to authenticate using the Partner or Organization token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.
$payment_token = 9085c19f-88e9-4fbf-93cf-5ceec221146c; // string | Payment token Identifier.

try {
    $result = $apiInstance->accountGetCustomerCustomerIdPaymentMethodToken($account_id, $customer_id, $payment_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->accountGetCustomerCustomerIdPaymentMethodToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |
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

## `accountGetCustomerCustomerIdPayments()`

```php
accountGetCustomerCustomerIdPayments($account_id, $customer_id, $sort, $limit, $skip): \TheLogicStudio\ExactPay\Model\Payment[]
```

Get Customer Payments (Partner context)

In order to fetch Payments performed by a Customer, the following endpoint can be called.\\ It is meant to be invoked by an Organization (Partner) for a given Merchant (`accountId`) in the request URI.\\ Please note that the Organization (Partner) needs to authenticate using the Partner or Organization token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.
$sort = createdAt:asc; // string | Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.

try {
    $result = $apiInstance->accountGetCustomerCustomerIdPayments($account_id, $customer_id, $sort, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->accountGetCustomerCustomerIdPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |
| **sort** | **string**| Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). To sort by a &#x60;fieldName&#x60;, use the &#x60;fieldName:&#x60; followed by the sort order. To sort by fields in the nested object, use &#x60;objectName.fieldName&#x60; followed by the sort order. Sorting can be done by multiple fields by providing the &#x60;fieldNames&#x60; with sort direction as comma-separated values. | [optional] |
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

## `accountGetCustomerDefaultPaymentMethod()`

```php
accountGetCustomerDefaultPaymentMethod($account_id, $customer_id): \TheLogicStudio\ExactPay\Model\PaymentMethod
```

Get Default Payment Method Associated to a Customer (Partner context)

You can associate multiple Payment Methods to a single Customer; however, only one of those can be used as default. This endpoint will allow you to retrieve the Payment Method marked as default for the specified Customer.\\ It is meant to be invoked by an Organization (Partner) for a given merchant (`accountId`) in the request URI.\\ Please note that the Organization (Partner) needs to authenticate using the Partner or Organization token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.

try {
    $result = $apiInstance->accountGetCustomerDefaultPaymentMethod($account_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->accountGetCustomerDefaultPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |

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

## `accountGetCustomerId()`

```php
accountGetCustomerId($account_id, $customer_id): \TheLogicStudio\ExactPay\Model\Customer
```

Get Customer by ID (Partner context)

For fetching singular Customer objects API consumers can issue a call to the following endpoint. If the id provided in the path exists it will be returned in the response body.\\ It is meant to be invoked by a Organization (Partner) to fetch the list of all Customers for a given Merchant (`accountId`) in the request URI.\\ Please note that the Organization (Partner) needs to authenticate using the Partner or Organization token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.

try {
    $result = $apiInstance->accountGetCustomerId($account_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->accountGetCustomerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\Customer**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountGetCustomerIdPaymentMethod()`

```php
accountGetCustomerIdPaymentMethod($account_id, $customer_id): \TheLogicStudio\ExactPay\Model\PaymentMethod[]
```

Query Payment Methods of a Customer (Partner context)

To query payment methods associated with a Customer the following call can be used. Note that because card information is encrypted, query string filtering is not supported. That said $limit and $skip can still be used for pagination.\\ It is meant to be invoked by a Organization (Partner) to fetch the list of all Customers for a given Merchant (`accountId`) in the request URI.\\ Please note that the Organization (Partner) needs to authenticate using the Partner or Organization token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.

try {
    $result = $apiInstance->accountGetCustomerIdPaymentMethod($account_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->accountGetCustomerIdPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\PaymentMethod[]**](../Model/PaymentMethod.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountGetCustomerTokenPaymentMethod()`

```php
accountGetCustomerTokenPaymentMethod($account_id, $customer_token): \TheLogicStudio\ExactPay\Model\PaymentMethod[]
```

Query Payment Methods for Customer by customer token (Partner context)

This route takes the Customer Token instead of an ID to enable users to list Payment Methods associated with a Customer when they do not have the Customer's ID.\\ It is meant to be invoked by a Organization (Partner) to fetch the list of all Customers for a given Merchant (`accountId`) in the request URI.\\ Please note that the Organization (Partner) needs to authenticate using the Partner or Organization token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$customer_token = 62d9be95cb27b92e42c9b0c1; // string | Represents the token associated to the customer. This can be used as a regular Payment Method and will use the default Payment Method linked to the Customer.

try {
    $result = $apiInstance->accountGetCustomerTokenPaymentMethod($account_id, $customer_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->accountGetCustomerTokenPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **customer_token** | **string**| Represents the token associated to the customer. This can be used as a regular Payment Method and will use the default Payment Method linked to the Customer. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\PaymentMethod[]**](../Model/PaymentMethod.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountPostCustomer()`

```php
accountPostCustomer($account_id, $new_customer): \TheLogicStudio\ExactPay\Model\Customer
```

Create Customer (Partner context)

Creates a new Customer inside the platform. A Customer can later be associated with certain Payment Methods.\\ It is meant to be invoked by a Organization (Partner) to fetch the list of all Customers for a given Merchant (`accountId`) in the request URI.\\ Please note that the Organization (Partner) needs to authenticate using the Partner or Organization token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$new_customer = new \TheLogicStudio\ExactPay\Model\NewCustomer(); // \TheLogicStudio\ExactPay\Model\NewCustomer

try {
    $result = $apiInstance->accountPostCustomer($account_id, $new_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->accountPostCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **new_customer** | [**\TheLogicStudio\ExactPay\Model\NewCustomer**](../Model/NewCustomer.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Customer**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountPostCustomerIdPaymentMethod()`

```php
accountPostCustomerIdPaymentMethod($account_id, $customer_id, $link_token_to_customer): \TheLogicStudio\ExactPay\Model\PaymentMethod
```

Attach Payment Method to a Customer (Partner context)

This API associates a Payment Method with a Customer.\\ It is meant to be invoked by a Partner to associate the Payment Method to a specific Customer under the specified Sub-Merchant as identified by the `customerId` and `accountId` parameters in the request URI.\\ Please note that the Partner needs to authenticate using the Partner or Organization token when making this API call.\\ Please note that the Payment Method is represented by a Token returned earlier as a response to the POST method of the resource endpoint: `/account/{accountId}/payment-method`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.
$link_token_to_customer = new \TheLogicStudio\ExactPay\Model\LinkTokenToCustomer(); // \TheLogicStudio\ExactPay\Model\LinkTokenToCustomer

try {
    $result = $apiInstance->accountPostCustomerIdPaymentMethod($account_id, $customer_id, $link_token_to_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->accountPostCustomerIdPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |
| **link_token_to_customer** | [**\TheLogicStudio\ExactPay\Model\LinkTokenToCustomer**](../Model/LinkTokenToCustomer.md)|  | [optional] |

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

## `accountPutCustomerId()`

```php
accountPutCustomerId($account_id, $customer_id, $update_customer)
```

Update Customer by ID (Partner context)

It is necessary for API consumers to update Customer details from time to time. This can be achieved with the following call.\\ It is meant to be invoked by a Organization (Partner) to fetch the list of all Customers for a given Merchant (`accountId`) in the request URI.\\ Please note that the Organization (Partner) needs to authenticate using the Partner or Organization token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.
$update_customer = new \TheLogicStudio\ExactPay\Model\UpdateCustomer(); // \TheLogicStudio\ExactPay\Model\UpdateCustomer

try {
    $apiInstance->accountPutCustomerId($account_id, $customer_id, $update_customer);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->accountPutCustomerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |
| **update_customer** | [**\TheLogicStudio\ExactPay\Model\UpdateCustomer**](../Model/UpdateCustomer.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomerCustomerIdPaymentMethodToken()`

```php
deleteCustomerCustomerIdPaymentMethodToken($customer_id, $payment_token)
```

Delete Payment Method Associated with Customer by Token (Sub-merchant context)

In order to unlink a Payment Method from a Customer, the following call can be made.\\ Please note that there is no need to provide the `accountId` in the request URI, since the Merchant needs to provide the Account token to limit the scope for their own Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.
$payment_token = 9085c19f-88e9-4fbf-93cf-5ceec221146c; // string | Payment token Identifier.

try {
    $apiInstance->deleteCustomerCustomerIdPaymentMethodToken($customer_id, $payment_token);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomerCustomerIdPaymentMethodToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |
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

## `deleteCustomerId()`

```php
deleteCustomerId($customer_id)
```

Delete Customer by ID (Sub-merchant context)

On occasion it is necessary for an API consumer to delete Customers. The following call supports this use case.\\ Please note that there is no need to provide the `accountId` in the request URI, since the merchant needs to provide the account token to limit the scope for their own Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.

try {
    $apiInstance->deleteCustomerId($customer_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |

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

## `getCustomer()`

```php
getCustomer($limit, $skip, $sort): \TheLogicStudio\ExactPay\Model\Customer[]
```

Query customers (Sub-merchant context)

This API returns the list of customers for a given Merchant. It is meant to be invoked by a merchant to fetch the list of their own customers.\\ Please note that there is no need to provide the (`accountId`) in the request URI, since the Merchant needs to provide the Account token to limit the scope for their own Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
$sort = createdAt:asc; // string | Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.

try {
    $result = $apiInstance->getCustomer($limit, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |
| **sort** | **string**| Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). To sort by a &#x60;fieldName&#x60;, use the &#x60;fieldName:&#x60; followed by the sort order. To sort by fields in the nested object, use &#x60;objectName.fieldName&#x60; followed by the sort order. Sorting can be done by multiple fields by providing the &#x60;fieldNames&#x60; with sort direction as comma-separated values. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Customer[]**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerCustomerIdPaymentMethodToken()`

```php
getCustomerCustomerIdPaymentMethodToken($customer_id, $payment_token): \TheLogicStudio\ExactPay\Model\PaymentMethod
```

Get Payment Method Associated with Customer by Token (Sub-merchant context)

To retrieve a Payment Method as well as ensure it is associated with a Customer, the following call can be used.\\ Please note that there is no need to provide the `accountId` in the request URI, since the Merchant needs to provide the Account token to limit the scope for their own Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.
$payment_token = 9085c19f-88e9-4fbf-93cf-5ceec221146c; // string | Payment token Identifier.

try {
    $result = $apiInstance->getCustomerCustomerIdPaymentMethodToken($customer_id, $payment_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerCustomerIdPaymentMethodToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |
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

## `getCustomerCustomerIdPayments()`

```php
getCustomerCustomerIdPayments($customer_id, $sort, $limit, $skip): \TheLogicStudio\ExactPay\Model\Payment[]
```

Get Customer Payments (Sub-merchant context)

In order to fetch Payments performed by a Customer, the following endpoint can be called.\\ Please note that there is no need to provide the (`accountId`) in the request URI, since the Merchant needs to provide the Account token to limit the scope for their own Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.
$sort = createdAt:asc; // string | Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.

try {
    $result = $apiInstance->getCustomerCustomerIdPayments($customer_id, $sort, $limit, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerCustomerIdPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |
| **sort** | **string**| Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). To sort by a &#x60;fieldName&#x60;, use the &#x60;fieldName:&#x60; followed by the sort order. To sort by fields in the nested object, use &#x60;objectName.fieldName&#x60; followed by the sort order. Sorting can be done by multiple fields by providing the &#x60;fieldNames&#x60; with sort direction as comma-separated values. | [optional] |
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

## `getCustomerId()`

```php
getCustomerId($customer_id): \TheLogicStudio\ExactPay\Model\Customer
```

Get Customer by ID (Sub-merchant context)

For fetching singular Customer objects API consumers can issue a call to the following endpoint. If the id provided in the path exists it will be returned in the response body.\\ Please note that there is no need to provide the `accountId` in the request URI, since the Merchant needs to provide the Account token to limit the scope for their own Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.

try {
    $result = $apiInstance->getCustomerId($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\Customer**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerIdPaymentMethod()`

```php
getCustomerIdPaymentMethod($customer_id): \TheLogicStudio\ExactPay\Model\PaymentMethod[]
```

Query Payment Methods of a Customer (Sub-merchant context)

To query Payment Methods associated with a Customer the following call can be used. Note that because card information is encrypted, query string filtering is not supported. That said $limit and $skip can still be used for pagination.\\ Please note that the Sub-Merchant needs to provide the Account authentication token when making this API call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.

try {
    $result = $apiInstance->getCustomerIdPaymentMethod($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerIdPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\PaymentMethod[]**](../Model/PaymentMethod.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerTokenPaymentMethod()`

```php
getCustomerTokenPaymentMethod($customer_token): \TheLogicStudio\ExactPay\Model\PaymentMethod[]
```

Query Payment Methods for Customer by customer token (Sub-merchant context)

This route takes the Customer token instead of an ID to enable users to list Payment Methods associated with a Customer when they do not have the Customer's ID.\\ Please note that there is no need to provide the (`accountId`) in the request URI, since the Merchant needs to provide the Account token to limit the scope for their own Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_token = 62d9be95cb27b92e42c9b0c1; // string | Represents the token associated to the customer. This can be used as a regular Payment Method and will use the default Payment Method linked to the Customer.

try {
    $result = $apiInstance->getCustomerTokenPaymentMethod($customer_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerTokenPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_token** | **string**| Represents the token associated to the customer. This can be used as a regular Payment Method and will use the default Payment Method linked to the Customer. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\PaymentMethod[]**](../Model/PaymentMethod.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCustomer()`

```php
postCustomer($new_customer): \TheLogicStudio\ExactPay\Model\Customer
```

Create Customer for (Sub-merchant context)

Creates a new Customer inside the platform. A Customer can later be associated with certain Payment Methods. The customer will be associated to the Merchant Account making the request.\\ Please note that there is no need to provide the (`accountId`) in the request URI, since the Merchant needs to provide the Account token to limit the scope for their own Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_customer = new \TheLogicStudio\ExactPay\Model\NewCustomer(); // \TheLogicStudio\ExactPay\Model\NewCustomer

try {
    $result = $apiInstance->postCustomer($new_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_customer** | [**\TheLogicStudio\ExactPay\Model\NewCustomer**](../Model/NewCustomer.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Customer**](../Model/Customer.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCustomerIdPaymentMethod()`

```php
postCustomerIdPaymentMethod($customer_id, $link_payment_method): \TheLogicStudio\ExactPay\Model\PaymentMethod
```

Attach Payment Method to a Customer (Sub-merchant context)

This API associates a Payment Method with a Customer. It is meant to be invoked by a Sub-Merchant to associate the Payment Method to a specific Customer as identified by the `customerId` parameter in the request URI.\\ Please note that the Sub-Merchant needs to provide the Account authentication token when making this API call.\\ Please note that the Payment Method in the request is represented by a token returned earlier as a response to the POST method of the resource endpoint: `/payment-method`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.
$link_payment_method = new \TheLogicStudio\ExactPay\Model\LinkPaymentMethod(); // \TheLogicStudio\ExactPay\Model\LinkPaymentMethod

try {
    $result = $apiInstance->postCustomerIdPaymentMethod($customer_id, $link_payment_method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postCustomerIdPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |
| **link_payment_method** | [**\TheLogicStudio\ExactPay\Model\LinkPaymentMethod**](../Model/LinkPaymentMethod.md)|  | [optional] |

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

## `putCustomerId()`

```php
putCustomerId($customer_id, $new_customer)
```

Update Customer by ID (Sub-merchant context)

It is necessary for API consumers to update Customer details from time to time. This can be achieved with the following call.\\ Please note that there is no need to provide the `accountId` in the request URI, since the merchant needs to provide the account token to limit the scope for their own Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 62d9be95cb27b92e42c9b0c0; // string | The Customer identifier. Represents the Customer that this operation is going to be executed for.
$new_customer = new \TheLogicStudio\ExactPay\Model\NewCustomer(); // \TheLogicStudio\ExactPay\Model\NewCustomer

try {
    $apiInstance->putCustomerId($customer_id, $new_customer);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->putCustomerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **string**| The Customer identifier. Represents the Customer that this operation is going to be executed for. | |
| **new_customer** | [**\TheLogicStudio\ExactPay\Model\NewCustomer**](../Model/NewCustomer.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
