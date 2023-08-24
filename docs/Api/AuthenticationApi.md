# TheLogicStudio\ExactPay\AuthenticationApi

All URIs are relative to https://api.exactpaysandbox.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createApplicationToken()**](AuthenticationApi.md#createApplicationToken) | **POST** /application/{applicationId}/token | Create Application Token |
| [**createUserToken()**](AuthenticationApi.md#createUserToken) | **POST** /token | Create User Token |
| [**deleteApplicationToken()**](AuthenticationApi.md#deleteApplicationToken) | **DELETE** /application/{applicationId}/token/{tokenId} | Delete Application Token |
| [**queryApplicationToken()**](AuthenticationApi.md#queryApplicationToken) | **GET** /application/{applicationId}/token | Query Application Tokens |


## `createApplicationToken()`

```php
createApplicationToken($application_id, $create_application_token_request): \TheLogicStudio\ExactPay\Model\ApplicationToken
```

Create Application Token

Create a new Application Token for non-human users, like external APIs or User Interfaces to access our API under the session account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = admin-pwa; // string | Application ID calling the API. Specify your assigned Application ID, otherwise, use the default value if you are not assigned any Application ID. If you're building your own application, refer to our [guide](https://developer.exactpay.com/docs/authentication) on how to get an Application ID.
$create_application_token_request = new \TheLogicStudio\ExactPay\Model\CreateApplicationTokenRequest(); // \TheLogicStudio\ExactPay\Model\CreateApplicationTokenRequest

try {
    $result = $apiInstance->createApplicationToken($application_id, $create_application_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->createApplicationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**| Application ID calling the API. Specify your assigned Application ID, otherwise, use the default value if you are not assigned any Application ID. If you&#39;re building your own application, refer to our [guide](https://developer.exactpay.com/docs/authentication) on how to get an Application ID. | |
| **create_application_token_request** | [**\TheLogicStudio\ExactPay\Model\CreateApplicationTokenRequest**](../Model/CreateApplicationTokenRequest.md)|  | |

### Return type

[**\TheLogicStudio\ExactPay\Model\ApplicationToken**](../Model/ApplicationToken.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUserToken()`

```php
createUserToken($create_user_token_request, $x_application_id): \TheLogicStudio\ExactPay\Model\UserToken
```

Create User Token

Creates a User Token that can be used to authorize calls to other API endpoints in our application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TheLogicStudio\ExactPay\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_user_token_request = new \TheLogicStudio\ExactPay\Model\CreateUserTokenRequest(); // \TheLogicStudio\ExactPay\Model\CreateUserTokenRequest
$x_application_id = admin-pwa; // string | Application ID calling the API. Specify your assigned Application ID, otherwise, use the default value or leave it empty if you aren't assigned any Application ID. It can be specified in the header or in the body. If you're building your own application, refer to our [guide](https://developer.exactpay.com/docs/authentication) on how to get an Application ID.

try {
    $result = $apiInstance->createUserToken($create_user_token_request, $x_application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->createUserToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_user_token_request** | [**\TheLogicStudio\ExactPay\Model\CreateUserTokenRequest**](../Model/CreateUserTokenRequest.md)|  | |
| **x_application_id** | **string**| Application ID calling the API. Specify your assigned Application ID, otherwise, use the default value or leave it empty if you aren&#39;t assigned any Application ID. It can be specified in the header or in the body. If you&#39;re building your own application, refer to our [guide](https://developer.exactpay.com/docs/authentication) on how to get an Application ID. | [optional] [default to &#39;admin-pwa&#39;] |

### Return type

[**\TheLogicStudio\ExactPay\Model\UserToken**](../Model/UserToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApplicationToken()`

```php
deleteApplicationToken($application_id, $token_id)
```

Delete Application Token

Delete a specific Application Token by the given Application Identifier under the session account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = admin-pwa; // string | Application ID calling the API. Specify your assigned Application ID, otherwise, use the default value if you are not assigned any Application ID. If you're building your own application, refer to our [guide](https://developer.exactpay.com/docs/authentication) on how to get an Application ID.
$token_id = 623cddcad82a8effbb0b9845; // string | Application Token Identifier .

try {
    $apiInstance->deleteApplicationToken($application_id, $token_id);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->deleteApplicationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**| Application ID calling the API. Specify your assigned Application ID, otherwise, use the default value if you are not assigned any Application ID. If you&#39;re building your own application, refer to our [guide](https://developer.exactpay.com/docs/authentication) on how to get an Application ID. | |
| **token_id** | **string**| Application Token Identifier . | |

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

## `queryApplicationToken()`

```php
queryApplicationToken($application_id, $skip, $sort, $limit): \TheLogicStudio\ExactPay\Model\ApplicationTokenResponse[]
```

Query Application Tokens

Query Application Tokens for non-human users, like external APIs or User Interfaces to access our API under the session account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = admin-pwa; // string | Application ID calling the API. Specify your assigned Application ID, otherwise, use the default value if you are not assigned any Application ID. If you're building your own application, refer to our [guide](https://developer.exactpay.com/docs/authentication) on how to get an Application ID.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
$sort = createdAt:asc; // string | Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.

try {
    $result = $apiInstance->queryApplicationToken($application_id, $skip, $sort, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->queryApplicationToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_id** | **string**| Application ID calling the API. Specify your assigned Application ID, otherwise, use the default value if you are not assigned any Application ID. If you&#39;re building your own application, refer to our [guide](https://developer.exactpay.com/docs/authentication) on how to get an Application ID. | |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |
| **sort** | **string**| Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). To sort by a &#x60;fieldName&#x60;, use the &#x60;fieldName:&#x60; followed by the sort order. To sort by fields in the nested object, use &#x60;objectName.fieldName&#x60; followed by the sort order. Sorting can be done by multiple fields by providing the &#x60;fieldNames&#x60; with sort direction as comma-separated values. | [optional] |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |

### Return type

[**\TheLogicStudio\ExactPay\Model\ApplicationTokenResponse[]**](../Model/ApplicationTokenResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
