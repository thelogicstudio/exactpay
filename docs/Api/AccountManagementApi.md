# TheLogicStudio\ExactPay\AccountManagementApi

All URIs are relative to https://api.exactpaysandbox.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountRegisterApplePayDomains()**](AccountManagementApi.md#accountRegisterApplePayDomains) | **POST** /account/{accountId}/apple-pay | Register Domain for Apple Pay |
| [**deregisterApplePayDomains()**](AccountManagementApi.md#deregisterApplePayDomains) | **DELETE** /account/{accountId}/apple-pay | Deregister Apple Pay Domains |
| [**listApplePayDomains()**](AccountManagementApi.md#listApplePayDomains) | **GET** /account/{accountId}/apple-pay | List Apple Pay Domains |
| [**organizationOrganizationIdAccountAccountIdGet()**](AccountManagementApi.md#organizationOrganizationIdAccountAccountIdGet) | **GET** /organization/{organizationId}/account/{accountId} | Retrieve Account by ID |
| [**organizationOrganizationIdAccountGet()**](AccountManagementApi.md#organizationOrganizationIdAccountGet) | **GET** /organization/{organizationId}/account | List Accounts |
| [**organizationOrganizationIdAccountSearchGet()**](AccountManagementApi.md#organizationOrganizationIdAccountSearchGet) | **GET** /organization/{organizationId}/account/search | Query Accounts |
| [**putUpdateAccountById()**](AccountManagementApi.md#putUpdateAccountById) | **PUT** /organization/{organizationId}/account/{accountId} | Update Account |


## `accountRegisterApplePayDomains()`

```php
accountRegisterApplePayDomains($account_id, $apple_pay_domains): \TheLogicStudio\ExactPay\Model\ApplePayDomains
```

Register Domain for Apple Pay

This endpoint allows you to register one or more of your domains for use with Apple Pay &amp; ExactJS.  Please [read our guide](./docs/ExactJS-ApplePay) on the setup steps required before you can use this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$apple_pay_domains = new \TheLogicStudio\ExactPay\Model\ApplePayDomains(); // \TheLogicStudio\ExactPay\Model\ApplePayDomains | An array of domains you wish to use with Apple Pay &amp; ExactJS.

try {
    $result = $apiInstance->accountRegisterApplePayDomains($account_id, $apple_pay_domains);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->accountRegisterApplePayDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **apple_pay_domains** | [**\TheLogicStudio\ExactPay\Model\ApplePayDomains**](../Model/ApplePayDomains.md)| An array of domains you wish to use with Apple Pay &amp;amp; ExactJS. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\ApplePayDomains**](../Model/ApplePayDomains.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deregisterApplePayDomains()`

```php
deregisterApplePayDomains($account_id, $apple_pay_domains): \TheLogicStudio\ExactPay\Model\ApplePayDomains
```

Deregister Apple Pay Domains

This endpoint allows you to deregister one or more domains which you have previously registered for Apple Pay &amp; ExactJS.  Once a domain is successfully deregistered, Apple Pay will instantly stop working on that domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$apple_pay_domains = new \TheLogicStudio\ExactPay\Model\ApplePayDomains(); // \TheLogicStudio\ExactPay\Model\ApplePayDomains | An array of domains you no longer wish to use with Apple Pay &amp; ExactJS.

try {
    $result = $apiInstance->deregisterApplePayDomains($account_id, $apple_pay_domains);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->deregisterApplePayDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **apple_pay_domains** | [**\TheLogicStudio\ExactPay\Model\ApplePayDomains**](../Model/ApplePayDomains.md)| An array of domains you no longer wish to use with Apple Pay &amp;amp; ExactJS. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\ApplePayDomains**](../Model/ApplePayDomains.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listApplePayDomains()`

```php
listApplePayDomains($account_id): \TheLogicStudio\ExactPay\Model\ApplePayDomains
```

List Apple Pay Domains

This endpoint allows you to retrieve a list of your domains which are registered for Apple Pay &amp; ExactJS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.

try {
    $result = $apiInstance->listApplePayDomains($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->listApplePayDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\ApplePayDomains**](../Model/ApplePayDomains.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationOrganizationIdAccountAccountIdGet()`

```php
organizationOrganizationIdAccountAccountIdGet($organization_id, $account_id): \TheLogicStudio\ExactPay\Model\AccountWithGateway
```

Retrieve Account by ID

Retrieve a list of properties associated with a specific merchant account by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.

try {
    $result = $apiInstance->organizationOrganizationIdAccountAccountIdGet($organization_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->organizationOrganizationIdAccountAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\AccountWithGateway**](../Model/AccountWithGateway.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationOrganizationIdAccountGet()`

```php
organizationOrganizationIdAccountGet($organization_id): \TheLogicStudio\ExactPay\Model\AccountWithoutGateway[]
```

List Accounts

Retrieve a list of accounts underneath an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.

try {
    $result = $apiInstance->organizationOrganizationIdAccountGet($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->organizationOrganizationIdAccountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\AccountWithoutGateway[]**](../Model/AccountWithoutGateway.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationOrganizationIdAccountSearchGet()`

```php
organizationOrganizationIdAccountSearchGet($organization_id, $q): \TheLogicStudio\ExactPay\Model\AccountWithoutGateway[]
```

Query Accounts

Retrieve a segmented list of merchant accounts under a parent organization that meet the filtered criteria requirements.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$q = 'q_example'; // string | Search text on name, dbaName, phone, email and onlinePresence fields

try {
    $result = $apiInstance->organizationOrganizationIdAccountSearchGet($organization_id, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->organizationOrganizationIdAccountSearchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **q** | **string**| Search text on name, dbaName, phone, email and onlinePresence fields | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\AccountWithoutGateway[]**](../Model/AccountWithoutGateway.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putUpdateAccountById()`

```php
putUpdateAccountById($organization_id, $account_id, $updatable_account)
```

Update Account

Update a specific Merchant Account for the given Organization and Account identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AccountManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$account_id = 6151ffdbefd963001c6c9d2d; // string | The Account identifier. Represents the Merchant that this operation is going to be executed for.
$updatable_account = new \TheLogicStudio\ExactPay\Model\UpdatableAccount(); // \TheLogicStudio\ExactPay\Model\UpdatableAccount

try {
    $apiInstance->putUpdateAccountById($organization_id, $account_id, $updatable_account);
} catch (Exception $e) {
    echo 'Exception when calling AccountManagementApi->putUpdateAccountById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **account_id** | **string**| The Account identifier. Represents the Merchant that this operation is going to be executed for. | |
| **updatable_account** | [**\TheLogicStudio\ExactPay\Model\UpdatableAccount**](../Model/UpdatableAccount.md)|  | |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
