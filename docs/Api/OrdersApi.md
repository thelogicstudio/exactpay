# TheLogicStudio\ExactPay\OrdersApi

All URIs are relative to https://api.exactpaysandbox.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountAccountIdOrdersOrderIdGet()**](OrdersApi.md#accountAccountIdOrdersOrderIdGet) | **GET** /account/{accountId}/orders/{orderId} | Get Order Details |
| [**accountAccountIdOrdersOrderIdPut()**](OrdersApi.md#accountAccountIdOrdersOrderIdPut) | **PUT** /account/{accountId}/orders/{orderId} | Update Order |
| [**accountAccountIdOrdersPost()**](OrdersApi.md#accountAccountIdOrdersPost) | **POST** /account/{accountId}/orders | Create Order specifying an account |
| [**ordersGet()**](OrdersApi.md#ordersGet) | **GET** /orders | List Orders |
| [**ordersOrderIdAccessTokenPost()**](OrdersApi.md#ordersOrderIdAccessTokenPost) | **POST** /orders/{orderId}/accessToken | Create New Access Token |
| [**ordersOrderIdResetPut()**](OrdersApi.md#ordersOrderIdResetPut) | **PUT** /orders/{orderId}/reset | Reset Payment Attempts |
| [**ordersPost()**](OrdersApi.md#ordersPost) | **POST** /orders | Create Order |
| [**postAccountAccountIdOrdersOrderIdPay()**](OrdersApi.md#postAccountAccountIdOrdersOrderIdPay) | **POST** /account/{accountId}/orders/{orderId}/pay | Pay for Order with Token |


## `accountAccountIdOrdersOrderIdGet()`

```php
accountAccountIdOrdersOrderIdGet($account_id, $order_id): \TheLogicStudio\ExactPay\Model\OrderResponse
```

Get Order Details

Retrieve a specific Order for the given Account and Order identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$order_id = 55c42605-e4e7-4e0c-801a-4ba7eff1925b; // string | The Order identifier.

try {
    $result = $apiInstance->accountAccountIdOrdersOrderIdGet($account_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->accountAccountIdOrdersOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **order_id** | **string**| The Order identifier. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountAccountIdOrdersOrderIdPut()`

```php
accountAccountIdOrdersOrderIdPut($account_id, $order_id, $order): \TheLogicStudio\ExactPay\Model\OrderResponse
```

Update Order

Update details of an existing Order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$order_id = 55c42605-e4e7-4e0c-801a-4ba7eff1925b; // string | The Order identifier.
$order = new \TheLogicStudio\ExactPay\Model\Order(); // \TheLogicStudio\ExactPay\Model\Order

try {
    $result = $apiInstance->accountAccountIdOrdersOrderIdPut($account_id, $order_id, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->accountAccountIdOrdersOrderIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **order_id** | **string**| The Order identifier. | |
| **order** | [**\TheLogicStudio\ExactPay\Model\Order**](../Model/Order.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountAccountIdOrdersPost()`

```php
accountAccountIdOrdersPost($account_id, $order): \TheLogicStudio\ExactPay\Model\OrderResponse
```

Create Order specifying an account

Create an Order for a specified Account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$order = new \TheLogicStudio\ExactPay\Model\Order(); // \TheLogicStudio\ExactPay\Model\Order

try {
    $result = $apiInstance->accountAccountIdOrdersPost($account_id, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->accountAccountIdOrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **order** | [**\TheLogicStudio\ExactPay\Model\Order**](../Model/Order.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersGet()`

```php
ordersGet($limit, $skip, $to, $from): \TheLogicStudio\ExactPay\Model\OrderSearch
```

List Orders

List all Orders for API key's account, paginated and optionally restricted to a date range. Date range must be no more than six months.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
$to = 2022-12-31T00:00Z; // \DateTime | Datetime to limit the search to, in ISO8601 format. Defaults to today
$from = 2022-01-01T00:00Z; // \DateTime | Datetime to start the search from, in ISO8601 format. Defaults to one month ago. Maximum search window is 6 months.

try {
    $result = $apiInstance->ordersGet($limit, $skip, $to, $from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |
| **to** | **\DateTime**| Datetime to limit the search to, in ISO8601 format. Defaults to today | [optional] |
| **from** | **\DateTime**| Datetime to start the search from, in ISO8601 format. Defaults to one month ago. Maximum search window is 6 months. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\OrderSearch**](../Model/OrderSearch.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersOrderIdAccessTokenPost()`

```php
ordersOrderIdAccessTokenPost($order_id): \TheLogicStudio\ExactPay\Model\OrderAccessToken
```

Create New Access Token

Create a new access token for this Order. This will invalidate any existing access tokens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 55c42605-e4e7-4e0c-801a-4ba7eff1925b; // string | The Order identifier.

try {
    $result = $apiInstance->ordersOrderIdAccessTokenPost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdAccessTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| The Order identifier. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\OrderAccessToken**](../Model/OrderAccessToken.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersOrderIdResetPut()`

```php
ordersOrderIdResetPut($order_id): \TheLogicStudio\ExactPay\Model\OrderResponse
```

Reset Payment Attempts

Reset failed payment attempts count to zero for this Order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 55c42605-e4e7-4e0c-801a-4ba7eff1925b; // string | The Order identifier.

try {
    $result = $apiInstance->ordersOrderIdResetPut($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersOrderIdResetPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| The Order identifier. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersPost()`

```php
ordersPost($order): \TheLogicStudio\ExactPay\Model\OrderResponse
```

Create Order

Create an Order.  Orders are only used with ExactJS so that your customer can pay directly from their browser.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = new \TheLogicStudio\ExactPay\Model\Order(); // \TheLogicStudio\ExactPay\Model\Order

try {
    $result = $apiInstance->ordersPost($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order** | [**\TheLogicStudio\ExactPay\Model\Order**](../Model/Order.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\OrderResponse**](../Model/OrderResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAccountAccountIdOrdersOrderIdPay()`

```php
postAccountAccountIdOrdersOrderIdPay($account_id, $order_id, $pay_order): \TheLogicStudio\ExactPay\Model\PayOrderResponse
```

Pay for Order with Token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$order_id = 55c42605-e4e7-4e0c-801a-4ba7eff1925b; // string | The Order identifier.
$pay_order = {"payment_method":{"token":"f0db7065-be66-4501-b49b-5eb56e265cb1"}}; // \TheLogicStudio\ExactPay\Model\PayOrder

try {
    $result = $apiInstance->postAccountAccountIdOrdersOrderIdPay($account_id, $order_id, $pay_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->postAccountAccountIdOrdersOrderIdPay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **order_id** | **string**| The Order identifier. | |
| **pay_order** | [**\TheLogicStudio\ExactPay\Model\PayOrder**](../Model/PayOrder.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\PayOrderResponse**](../Model/PayOrderResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
