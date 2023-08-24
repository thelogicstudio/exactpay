# TheLogicStudio\ExactPay\WebhooksApi

All URIs are relative to https://api.exactpaysandbox.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountDeleteWebhook()**](WebhooksApi.md#accountDeleteWebhook) | **DELETE** /account/{accountId}/webhook/{webhookId} | Delete Webhook |
| [**accountDisableWebhook()**](WebhooksApi.md#accountDisableWebhook) | **PUT** /account/{accountId}/webhook/{webhookId}/disable | Disable Webhook |
| [**accountEnableWebhook()**](WebhooksApi.md#accountEnableWebhook) | **PUT** /account/{accountId}/webhook/{webhookId}/enable | Enable Webhook |
| [**accountGetListWebhooks()**](WebhooksApi.md#accountGetListWebhooks) | **GET** /account/{accountId}/webhook | List Webhooks |
| [**accountGetRetrieveWebhook()**](WebhooksApi.md#accountGetRetrieveWebhook) | **GET** /account/{accountId}/webhook/{webhookId} | Retrieve Webhook |
| [**accountPostCreateWebhook()**](WebhooksApi.md#accountPostCreateWebhook) | **POST** /account/{accountId}/webhook | Create Webhook |
| [**accountUpdateWebhook()**](WebhooksApi.md#accountUpdateWebhook) | **PUT** /account/{accountId}/webhook/{webhookId} | Update Webhook |
| [**organizationOrganizationIdWebhookGet()**](WebhooksApi.md#organizationOrganizationIdWebhookGet) | **GET** /organization/{organizationId}/webhook | List Webhooks |
| [**organizationOrganizationIdWebhookPost()**](WebhooksApi.md#organizationOrganizationIdWebhookPost) | **POST** /organization/{organizationId}/webhook | Create Webhook |
| [**organizationOrganizationIdWebhookWebhookIdDelete()**](WebhooksApi.md#organizationOrganizationIdWebhookWebhookIdDelete) | **DELETE** /organization/{organizationId}/webhook/{webhookId} | Delete Webhook |
| [**organizationOrganizationIdWebhookWebhookIdDisablePut()**](WebhooksApi.md#organizationOrganizationIdWebhookWebhookIdDisablePut) | **PUT** /organization/{organizationId}/webhook/{webhookId}/disable | Disable Webhook |
| [**organizationOrganizationIdWebhookWebhookIdEnablePut()**](WebhooksApi.md#organizationOrganizationIdWebhookWebhookIdEnablePut) | **PUT** /organization/{organizationId}/webhook/{webhookId}/enable | Enable Webhook |
| [**organizationOrganizationIdWebhookWebhookIdGet()**](WebhooksApi.md#organizationOrganizationIdWebhookWebhookIdGet) | **GET** /organization/{organizationId}/webhook/{webhookId} | Retrieve Webhook |
| [**organizationOrganizationIdWebhookWebhookIdPut()**](WebhooksApi.md#organizationOrganizationIdWebhookWebhookIdPut) | **PUT** /organization/{organizationId}/webhook/{webhookId} | Update Webhook |


## `accountDeleteWebhook()`

```php
accountDeleteWebhook($account_id, $webhook_id)
```

Delete Webhook

Delete a webhook and its associated properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$webhook_id = 61e8607bd569a196900527c5; // string | The customers webhook definition Id

try {
    $apiInstance->accountDeleteWebhook($account_id, $webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->accountDeleteWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **webhook_id** | **string**| The customers webhook definition Id | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountDisableWebhook()`

```php
accountDisableWebhook($account_id, $webhook_id)
```

Disable Webhook

Disable a webhook notification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$webhook_id = 61e8607bd569a196900527c5; // string | The customers webhook definition Id

try {
    $apiInstance->accountDisableWebhook($account_id, $webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->accountDisableWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **webhook_id** | **string**| The customers webhook definition Id | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountEnableWebhook()`

```php
accountEnableWebhook($account_id, $webhook_id)
```

Enable Webhook

Enable a webhook notification to be sent to requestor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$webhook_id = 61e8607bd569a196900527c5; // string | The customers webhook definition Id

try {
    $apiInstance->accountEnableWebhook($account_id, $webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->accountEnableWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **webhook_id** | **string**| The customers webhook definition Id | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountGetListWebhooks()`

```php
accountGetListWebhooks($account_id, $skip, $limit, $sort): \TheLogicStudio\ExactPay\Model\WebhookResponse[]
```

List Webhooks

Retrieve a list of webhooks created under an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$sort = -name; // string | Sets the sort order If an object is passed, values allowed are asc, desc, ascending, descending, 1, and -1. If a string is passed, it must be a space delimited list of path names. The sort order of each path is ascending unless the path name is prefixed with - which will be treated as descending.

try {
    $result = $apiInstance->accountGetListWebhooks($account_id, $skip, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->accountGetListWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **sort** | **string**| Sets the sort order If an object is passed, values allowed are asc, desc, ascending, descending, 1, and -1. If a string is passed, it must be a space delimited list of path names. The sort order of each path is ascending unless the path name is prefixed with - which will be treated as descending. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\WebhookResponse[]**](../Model/WebhookResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountGetRetrieveWebhook()`

```php
accountGetRetrieveWebhook($account_id, $webhook_id): \TheLogicStudio\ExactPay\Model\WebhookResponse
```

Retrieve Webhook

Retrieve the details associated with an existing webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$webhook_id = 61e8607bd569a196900527c5; // string | The customers webhook definition Id

try {
    $result = $apiInstance->accountGetRetrieveWebhook($account_id, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->accountGetRetrieveWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **webhook_id** | **string**| The customers webhook definition Id | |

### Return type

[**\TheLogicStudio\ExactPay\Model\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountPostCreateWebhook()`

```php
accountPostCreateWebhook($account_id, $webhook_request): \TheLogicStudio\ExactPay\Model\WebhookResponse
```

Create Webhook

Create a new webhook and associate a callback URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$webhook_request = new \TheLogicStudio\ExactPay\Model\WebhookRequest(); // \TheLogicStudio\ExactPay\Model\WebhookRequest | Fields that compose a webhook definition inside Exact Payments ecosystem.

try {
    $result = $apiInstance->accountPostCreateWebhook($account_id, $webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->accountPostCreateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **webhook_request** | [**\TheLogicStudio\ExactPay\Model\WebhookRequest**](../Model/WebhookRequest.md)| Fields that compose a webhook definition inside Exact Payments ecosystem. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountUpdateWebhook()`

```php
accountUpdateWebhook($account_id, $webhook_id, $updatable_webhook_request)
```

Update Webhook

Update the properties of an existing webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$webhook_id = 61e8607bd569a196900527c5; // string | The customers webhook definition Id
$updatable_webhook_request = new \TheLogicStudio\ExactPay\Model\UpdatableWebhookRequest(); // \TheLogicStudio\ExactPay\Model\UpdatableWebhookRequest | Fields that are updatable in the webhook definition.

try {
    $apiInstance->accountUpdateWebhook($account_id, $webhook_id, $updatable_webhook_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->accountUpdateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **webhook_id** | **string**| The customers webhook definition Id | |
| **updatable_webhook_request** | [**\TheLogicStudio\ExactPay\Model\UpdatableWebhookRequest**](../Model/UpdatableWebhookRequest.md)| Fields that are updatable in the webhook definition. | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationOrganizationIdWebhookGet()`

```php
organizationOrganizationIdWebhookGet($organization_id, $skip, $limit, $sort): \TheLogicStudio\ExactPay\Model\WebhookResponse[]
```

List Webhooks

Retrieve a list of webhooks created under an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$sort = -name; // string | Sets the sort order If an object is passed, values allowed are asc, desc, ascending, descending, 1, and -1. If a string is passed, it must be a space delimited list of path names. The sort order of each path is ascending unless the path name is prefixed with - which will be treated as descending.

try {
    $result = $apiInstance->organizationOrganizationIdWebhookGet($organization_id, $skip, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->organizationOrganizationIdWebhookGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **sort** | **string**| Sets the sort order If an object is passed, values allowed are asc, desc, ascending, descending, 1, and -1. If a string is passed, it must be a space delimited list of path names. The sort order of each path is ascending unless the path name is prefixed with - which will be treated as descending. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\WebhookResponse[]**](../Model/WebhookResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationOrganizationIdWebhookPost()`

```php
organizationOrganizationIdWebhookPost($organization_id, $webhook_request): \TheLogicStudio\ExactPay\Model\WebhookResponse
```

Create Webhook

Create a new webhook and associate a callback URL.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$webhook_request = new \TheLogicStudio\ExactPay\Model\WebhookRequest(); // \TheLogicStudio\ExactPay\Model\WebhookRequest | Fields that compose a webhook definition inside Exact Payments ecosystem.

try {
    $result = $apiInstance->organizationOrganizationIdWebhookPost($organization_id, $webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->organizationOrganizationIdWebhookPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **webhook_request** | [**\TheLogicStudio\ExactPay\Model\WebhookRequest**](../Model/WebhookRequest.md)| Fields that compose a webhook definition inside Exact Payments ecosystem. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationOrganizationIdWebhookWebhookIdDelete()`

```php
organizationOrganizationIdWebhookWebhookIdDelete($organization_id, $webhook_id)
```

Delete Webhook

Delete a webhook and its associated properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$webhook_id = 61e8607bd569a196900527c5; // string | The customers webhook definition Id

try {
    $apiInstance->organizationOrganizationIdWebhookWebhookIdDelete($organization_id, $webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->organizationOrganizationIdWebhookWebhookIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **webhook_id** | **string**| The customers webhook definition Id | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationOrganizationIdWebhookWebhookIdDisablePut()`

```php
organizationOrganizationIdWebhookWebhookIdDisablePut($organization_id, $webhook_id)
```

Disable Webhook

Disable a webhook notification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$webhook_id = 61e8607bd569a196900527c5; // string | The customers webhook definition Id

try {
    $apiInstance->organizationOrganizationIdWebhookWebhookIdDisablePut($organization_id, $webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->organizationOrganizationIdWebhookWebhookIdDisablePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **webhook_id** | **string**| The customers webhook definition Id | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationOrganizationIdWebhookWebhookIdEnablePut()`

```php
organizationOrganizationIdWebhookWebhookIdEnablePut($organization_id, $webhook_id)
```

Enable Webhook

Enable a webhook notification to be sent to requestor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$webhook_id = 61e8607bd569a196900527c5; // string | The customers webhook definition Id

try {
    $apiInstance->organizationOrganizationIdWebhookWebhookIdEnablePut($organization_id, $webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->organizationOrganizationIdWebhookWebhookIdEnablePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **webhook_id** | **string**| The customers webhook definition Id | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationOrganizationIdWebhookWebhookIdGet()`

```php
organizationOrganizationIdWebhookWebhookIdGet($organization_id, $webhook_id): \TheLogicStudio\ExactPay\Model\WebhookResponse
```

Retrieve Webhook

Retrieve the details associated with an existing webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$webhook_id = 61e8607bd569a196900527c5; // string | The customers webhook definition Id

try {
    $result = $apiInstance->organizationOrganizationIdWebhookWebhookIdGet($organization_id, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->organizationOrganizationIdWebhookWebhookIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **webhook_id** | **string**| The customers webhook definition Id | |

### Return type

[**\TheLogicStudio\ExactPay\Model\WebhookResponse**](../Model/WebhookResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationOrganizationIdWebhookWebhookIdPut()`

```php
organizationOrganizationIdWebhookWebhookIdPut($organization_id, $webhook_id, $updatable_webhook_request)
```

Update Webhook

Update the properties of an existing webhook.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$webhook_id = 61e8607bd569a196900527c5; // string | The customers webhook definition Id
$updatable_webhook_request = new \TheLogicStudio\ExactPay\Model\UpdatableWebhookRequest(); // \TheLogicStudio\ExactPay\Model\UpdatableWebhookRequest | Fields that are updatable in the webhook definition.

try {
    $apiInstance->organizationOrganizationIdWebhookWebhookIdPut($organization_id, $webhook_id, $updatable_webhook_request);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->organizationOrganizationIdWebhookWebhookIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **webhook_id** | **string**| The customers webhook definition Id | |
| **updatable_webhook_request** | [**\TheLogicStudio\ExactPay\Model\UpdatableWebhookRequest**](../Model/UpdatableWebhookRequest.md)| Fields that are updatable in the webhook definition. | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
