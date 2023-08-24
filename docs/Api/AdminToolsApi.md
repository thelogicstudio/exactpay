# TheLogicStudio\ExactPay\AdminToolsApi

All URIs are relative to https://api.exactpaysandbox.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getListNotes()**](AdminToolsApi.md#getListNotes) | **GET** /organization/{organizationId}/onboarding/{onboardingId}/note | List Notes |
| [**organizationOrganizationIdOnboardingOnboardingIdRecheckPut()**](AdminToolsApi.md#organizationOrganizationIdOnboardingOnboardingIdRecheckPut) | **PUT** /organization/{organizationId}/onboarding/{onboardingId}/recheck | Process Workflow |
| [**organizationOrganizationIdOnboardingOnboardingIdRetryRulePut()**](AdminToolsApi.md#organizationOrganizationIdOnboardingOnboardingIdRetryRulePut) | **PUT** /organization/{organizationId}/onboarding/{onboardingId}/retry-rule | Process Verification |
| [**organizationOrganizationIdOnboardingOnboardingIdStatusPut()**](AdminToolsApi.md#organizationOrganizationIdOnboardingOnboardingIdStatusPut) | **PUT** /organization/{organizationId}/onboarding/{onboardingId}/status | Update Onboarding Status |
| [**postCreateNotes()**](AdminToolsApi.md#postCreateNotes) | **POST** /organization/{organizationId}/onboarding/{onboardingId}/note | Add Note |


## `getListNotes()`

```php
getListNotes($organization_id, $onboarding_id, $skip, $limit, $sort): \TheLogicStudio\ExactPay\Model\OnboardingNote[]
```

List Notes

Retrieve a list of Notes for the given Organization and Onboarding identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AdminToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$sort = createdAt:asc; // string | Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.

try {
    $result = $apiInstance->getListNotes($organization_id, $onboarding_id, $skip, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminToolsApi->getListNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **sort** | **string**| Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). To sort by a &#x60;fieldName&#x60;, use the &#x60;fieldName:&#x60; followed by the sort order. To sort by fields in the nested object, use &#x60;objectName.fieldName&#x60; followed by the sort order. Sorting can be done by multiple fields by providing the &#x60;fieldNames&#x60; with sort direction as comma-separated values. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\OnboardingNote[]**](../Model/OnboardingNote.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`, `plain/text`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationOrganizationIdOnboardingOnboardingIdRecheckPut()`

```php
organizationOrganizationIdOnboardingOnboardingIdRecheckPut($organization_id, $onboarding_id)
```

Process Workflow

Manually request all verifications in an underwriting workflow to be performed outside of the initial onboarding process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AdminToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.

try {
    $apiInstance->organizationOrganizationIdOnboardingOnboardingIdRecheckPut($organization_id, $onboarding_id);
} catch (Exception $e) {
    echo 'Exception when calling AdminToolsApi->organizationOrganizationIdOnboardingOnboardingIdRecheckPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |

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

## `organizationOrganizationIdOnboardingOnboardingIdRetryRulePut()`

```php
organizationOrganizationIdOnboardingOnboardingIdRetryRulePut($organization_id, $onboarding_id, $onboarding_retry_rule_request)
```

Process Verification

Manually request an underwriting workflow verification to be performed outside of the initial onboarding workflow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AdminToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$onboarding_retry_rule_request = {"ruleName":"High Risk MCC"}; // \TheLogicStudio\ExactPay\Model\OnboardingRetryRuleRequest | ruleName is an existing rule name in the workflow assigned to a merchant application

try {
    $apiInstance->organizationOrganizationIdOnboardingOnboardingIdRetryRulePut($organization_id, $onboarding_id, $onboarding_retry_rule_request);
} catch (Exception $e) {
    echo 'Exception when calling AdminToolsApi->organizationOrganizationIdOnboardingOnboardingIdRetryRulePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **onboarding_retry_rule_request** | [**\TheLogicStudio\ExactPay\Model\OnboardingRetryRuleRequest**](../Model/OnboardingRetryRuleRequest.md)| ruleName is an existing rule name in the workflow assigned to a merchant application | |

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

## `organizationOrganizationIdOnboardingOnboardingIdStatusPut()`

```php
organizationOrganizationIdOnboardingOnboardingIdStatusPut($organization_id, $onboarding_id, $update_onboarding_status_request)
```

Update Onboarding Status

Manually update the merchant onboarding application status after being automatically determined by the decision engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AdminToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$update_onboarding_status_request = {"status":"inProgress"}; // \TheLogicStudio\ExactPay\Model\UpdateOnboardingStatusRequest | The new status and the change reason

try {
    $apiInstance->organizationOrganizationIdOnboardingOnboardingIdStatusPut($organization_id, $onboarding_id, $update_onboarding_status_request);
} catch (Exception $e) {
    echo 'Exception when calling AdminToolsApi->organizationOrganizationIdOnboardingOnboardingIdStatusPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **update_onboarding_status_request** | [**\TheLogicStudio\ExactPay\Model\UpdateOnboardingStatusRequest**](../Model/UpdateOnboardingStatusRequest.md)| The new status and the change reason | |

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

## `postCreateNotes()`

```php
postCreateNotes($organization_id, $onboarding_id, $post_create_notes_request): \TheLogicStudio\ExactPay\Model\OnboardingNote
```

Add Note

Create a Note for a specific Onboarding Application for the given Organization and Onboarding Application identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\AdminToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$post_create_notes_request = new \TheLogicStudio\ExactPay\Model\PostCreateNotesRequest(); // \TheLogicStudio\ExactPay\Model\PostCreateNotesRequest

try {
    $result = $apiInstance->postCreateNotes($organization_id, $onboarding_id, $post_create_notes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminToolsApi->postCreateNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **post_create_notes_request** | [**\TheLogicStudio\ExactPay\Model\PostCreateNotesRequest**](../Model/PostCreateNotesRequest.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\OnboardingNote**](../Model/OnboardingNote.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`, `plain/text`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
