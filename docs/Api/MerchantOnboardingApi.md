# TheLogicStudio\ExactPay\MerchantOnboardingApi

All URIs are relative to https://api.exactpaysandbox.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOnboarding()**](MerchantOnboardingApi.md#createOnboarding) | **POST** /organization/{organizationId}/onboarding | Create Onboarding Application |
| [**deleteOnboardingById()**](MerchantOnboardingApi.md#deleteOnboardingById) | **DELETE** /organization/{organizationId}/onboarding/{onboardingId} | Delete Onboarding |
| [**listFilterOptions()**](MerchantOnboardingApi.md#listFilterOptions) | **GET** /organization/{organizationId}/onboarding/filters | List Filter Options |
| [**listMerchantCategoryCodes()**](MerchantOnboardingApi.md#listMerchantCategoryCodes) | **GET** /mcc | List Merchant Category Codes |
| [**listOnboardingByOrganization()**](MerchantOnboardingApi.md#listOnboardingByOrganization) | **GET** /organization/{organizationId}/onboarding | List Onboardings by Organization |
| [**listOnboardings()**](MerchantOnboardingApi.md#listOnboardings) | **GET** /onboarding | List Onboardings |
| [**retrieveOnboardingById()**](MerchantOnboardingApi.md#retrieveOnboardingById) | **GET** /organization/{organizationId}/onboarding/{onboardingId} | Retrieve Onboarding |
| [**searchOnboardingByBusinessName()**](MerchantOnboardingApi.md#searchOnboardingByBusinessName) | **GET** /onboarding/search/{businessName} | Search Onboarding by Business Name |
| [**searchOnboardingByOrganizationIdAndBusinessName()**](MerchantOnboardingApi.md#searchOnboardingByOrganizationIdAndBusinessName) | **GET** /organization/{organizationId}/onboarding/search/{businessName} | Search Onboarding by Organization identifier and Business Name |


## `createOnboarding()`

```php
createOnboarding($organization_id, $onboarding_request): \TheLogicStudio\ExactPay\Model\OnboardingCreateResponse
```

Create Onboarding Application

Create a new Onboarding Application for the new Account or Sub Organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TheLogicStudio\ExactPay\Api\MerchantOnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_request = new \TheLogicStudio\ExactPay\Model\OnboardingRequest(); // \TheLogicStudio\ExactPay\Model\OnboardingRequest

try {
    $result = $apiInstance->createOnboarding($organization_id, $onboarding_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOnboardingApi->createOnboarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_request** | [**\TheLogicStudio\ExactPay\Model\OnboardingRequest**](../Model/OnboardingRequest.md)|  | |

### Return type

[**\TheLogicStudio\ExactPay\Model\OnboardingCreateResponse**](../Model/OnboardingCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOnboardingById()`

```php
deleteOnboardingById($organization_id, $onboarding_id)
```

Delete Onboarding

Delete a specific Onboarding Application for the given Organization and Onboarding Identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\MerchantOnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Identifier of the Organization that created the specific Onboarding.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Identifier of the Onboarding Application which you want to delete.

try {
    $apiInstance->deleteOnboardingById($organization_id, $onboarding_id);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOnboardingApi->deleteOnboardingById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Identifier of the Organization that created the specific Onboarding. | |
| **onboarding_id** | **string**| The Identifier of the Onboarding Application which you want to delete. | |

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

## `listFilterOptions()`

```php
listFilterOptions($organization_id, $is_deleted): \TheLogicStudio\ExactPay\Model\FilterOnboardings
```

List Filter Options

Retrieve a list of options that can be used as a filter when retrieving the Onboarding Applications associated to the given Organization Identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\MerchantOnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$is_deleted = false; // bool | Indicates whether to bring the allowed Organizations for deleted Onboarding or not. If not sent, it will bring the allowed Organizations for currently active Onboardings under your Organization into the system.

try {
    $result = $apiInstance->listFilterOptions($organization_id, $is_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOnboardingApi->listFilterOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **is_deleted** | **bool**| Indicates whether to bring the allowed Organizations for deleted Onboarding or not. If not sent, it will bring the allowed Organizations for currently active Onboardings under your Organization into the system. | [optional] [default to false] |

### Return type

[**\TheLogicStudio\ExactPay\Model\FilterOnboardings**](../Model/FilterOnboardings.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMerchantCategoryCodes()`

```php
listMerchantCategoryCodes(): \TheLogicStudio\ExactPay\Model\Mcc[]
```

List Merchant Category Codes

Retrieve the list of Merchant Category Codes supported by Exact Payments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TheLogicStudio\ExactPay\Api\MerchantOnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listMerchantCategoryCodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOnboardingApi->listMerchantCategoryCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TheLogicStudio\ExactPay\Model\Mcc[]**](../Model/Mcc.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOnboardingByOrganization()`

```php
listOnboardingByOrganization($organization_id, $skip, $limit, $sort, $select): \TheLogicStudio\ExactPay\Model\OnboardingWithoutPrincipal[]
```

List Onboardings by Organization

Retrieve the list of Onboarding Applications associated for the given Organization Identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\MerchantOnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$sort = createdAt:asc; // string | Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.
$select = createdAt,status,merchant.name; // string | Allows users to select specific fields they want to retrieve in the response object. It is a comma-separated list of items. To `$select` by fields in the nested object, use `objectName` or `objectName.fieldName`.

try {
    $result = $apiInstance->listOnboardingByOrganization($organization_id, $skip, $limit, $sort, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOnboardingApi->listOnboardingByOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **sort** | **string**| Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). To sort by a &#x60;fieldName&#x60;, use the &#x60;fieldName:&#x60; followed by the sort order. To sort by fields in the nested object, use &#x60;objectName.fieldName&#x60; followed by the sort order. Sorting can be done by multiple fields by providing the &#x60;fieldNames&#x60; with sort direction as comma-separated values. | [optional] |
| **select** | **string**| Allows users to select specific fields they want to retrieve in the response object. It is a comma-separated list of items. To &#x60;$select&#x60; by fields in the nested object, use &#x60;objectName&#x60; or &#x60;objectName.fieldName&#x60;. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\OnboardingWithoutPrincipal[]**](../Model/OnboardingWithoutPrincipal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOnboardings()`

```php
listOnboardings($skip, $limit, $sort, $select): \TheLogicStudio\ExactPay\Model\OnboardingWithoutPrincipal[]
```

List Onboardings

Retrieve the list of Onboarding Applications under the session account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\MerchantOnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$sort = createdAt:asc; // string | Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.
$select = createdAt,status,merchant.name; // string | Allows users to select specific fields they want to retrieve in the response object. It is a comma-separated list of items. To `$select` by fields in the nested object, use `objectName` or `objectName.fieldName`.

try {
    $result = $apiInstance->listOnboardings($skip, $limit, $sort, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOnboardingApi->listOnboardings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **sort** | **string**| Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). To sort by a &#x60;fieldName&#x60;, use the &#x60;fieldName:&#x60; followed by the sort order. To sort by fields in the nested object, use &#x60;objectName.fieldName&#x60; followed by the sort order. Sorting can be done by multiple fields by providing the &#x60;fieldNames&#x60; with sort direction as comma-separated values. | [optional] |
| **select** | **string**| Allows users to select specific fields they want to retrieve in the response object. It is a comma-separated list of items. To &#x60;$select&#x60; by fields in the nested object, use &#x60;objectName&#x60; or &#x60;objectName.fieldName&#x60;. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\OnboardingWithoutPrincipal[]**](../Model/OnboardingWithoutPrincipal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveOnboardingById()`

```php
retrieveOnboardingById($organization_id, $onboarding_id): \TheLogicStudio\ExactPay\Model\OnboardingWithPrincipalResponse
```

Retrieve Onboarding

Retrieve a specific Onboarding Application for the given Organization and Onboarding identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\MerchantOnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.

try {
    $result = $apiInstance->retrieveOnboardingById($organization_id, $onboarding_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOnboardingApi->retrieveOnboardingById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\OnboardingWithPrincipalResponse**](../Model/OnboardingWithPrincipalResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchOnboardingByBusinessName()`

```php
searchOnboardingByBusinessName($business_name, $skip, $limit, $sort): \TheLogicStudio\ExactPay\Model\OnboardingWithoutPrincipal[]
```

Search Onboarding by Business Name

Retrieve the list of Onboarding Applications submitted under your Organization matching the Business Name provided as a search parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\MerchantOnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_name = ACME; // string | The text to match with the Business Name of the Organization or Account.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$sort = createdAt:asc; // string | Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.

try {
    $result = $apiInstance->searchOnboardingByBusinessName($business_name, $skip, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOnboardingApi->searchOnboardingByBusinessName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_name** | **string**| The text to match with the Business Name of the Organization or Account. | |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **sort** | **string**| Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). To sort by a &#x60;fieldName&#x60;, use the &#x60;fieldName:&#x60; followed by the sort order. To sort by fields in the nested object, use &#x60;objectName.fieldName&#x60; followed by the sort order. Sorting can be done by multiple fields by providing the &#x60;fieldNames&#x60; with sort direction as comma-separated values. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\OnboardingWithoutPrincipal[]**](../Model/OnboardingWithoutPrincipal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchOnboardingByOrganizationIdAndBusinessName()`

```php
searchOnboardingByOrganizationIdAndBusinessName($organization_id, $business_name, $skip, $limit, $sort): \TheLogicStudio\ExactPay\Model\OnboardingWithoutPrincipal[]
```

Search Onboarding by Organization identifier and Business Name

Retrieve the list of Onboarding Applications matching the Business Name provided as a search parameter for the given Organization identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\MerchantOnboardingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$business_name = ACME; // string | The text to match with the Business Name of the Organization or Account.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$sort = createdAt:asc; // string | Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.

try {
    $result = $apiInstance->searchOnboardingByOrganizationIdAndBusinessName($organization_id, $business_name, $skip, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantOnboardingApi->searchOnboardingByOrganizationIdAndBusinessName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **business_name** | **string**| The text to match with the Business Name of the Organization or Account. | |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **sort** | **string**| Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). To sort by a &#x60;fieldName&#x60;, use the &#x60;fieldName:&#x60; followed by the sort order. To sort by fields in the nested object, use &#x60;objectName.fieldName&#x60; followed by the sort order. Sorting can be done by multiple fields by providing the &#x60;fieldNames&#x60; with sort direction as comma-separated values. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\OnboardingWithoutPrincipal[]**](../Model/OnboardingWithoutPrincipal.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
