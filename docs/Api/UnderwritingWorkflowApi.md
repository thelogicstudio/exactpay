# TheLogicStudio\ExactPay\UnderwritingWorkflowApi

All URIs are relative to https://api.exactpaysandbox.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteWorkflowById()**](UnderwritingWorkflowApi.md#deleteWorkflowById) | **DELETE** /organization/{organizationId}/onboarding-workflow/{workflowId} | Delete Workflow |
| [**disableWorkflowById()**](UnderwritingWorkflowApi.md#disableWorkflowById) | **PUT** /organization/{organizationId}/onboarding-workflow/{workflowId}/disable | Disable Workflow |
| [**enableWorkflowById()**](UnderwritingWorkflowApi.md#enableWorkflowById) | **PUT** /organization/{organizationId}/onboarding-workflow/{workflowId}/enable | Enable Workflow |
| [**getListWorkflows()**](UnderwritingWorkflowApi.md#getListWorkflows) | **GET** /organization/{organizationId}/onboarding-workflow | List Underwriting Workflows |
| [**getRetrieveWorkflow()**](UnderwritingWorkflowApi.md#getRetrieveWorkflow) | **GET** /organization/{organizationId}/onboarding-workflow/{workflowId} | Retrieve Workflow |
| [**postCreateWorkflow()**](UnderwritingWorkflowApi.md#postCreateWorkflow) | **POST** /organization/{organizationId}/onboarding-workflow | Create Workflow |
| [**putUpdateWorkflow()**](UnderwritingWorkflowApi.md#putUpdateWorkflow) | **PUT** /organization/{organizationId}/onboarding-workflow/{workflowId} | Update Workflow |
| [**setDefaultWorkflowById()**](UnderwritingWorkflowApi.md#setDefaultWorkflowById) | **PUT** /organization/{organizationId}/onboarding-workflow/{workflowId}/default | Set Default Workflow |


## `deleteWorkflowById()`

```php
deleteWorkflowById($organization_id, $workflow_id)
```

Delete Workflow

Delete a specific Workflow by Organization and Workflow identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\UnderwritingWorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$workflow_id = 61f2e8593a0a3076d01a71ef; // string | The Workflow identifier.

try {
    $apiInstance->deleteWorkflowById($organization_id, $workflow_id);
} catch (Exception $e) {
    echo 'Exception when calling UnderwritingWorkflowApi->deleteWorkflowById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **workflow_id** | **string**| The Workflow identifier. | |

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

## `disableWorkflowById()`

```php
disableWorkflowById($organization_id, $workflow_id)
```

Disable Workflow

Disable a specific Workflow by Organization and Workflow identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\UnderwritingWorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$workflow_id = 61f2e8593a0a3076d01a71ef; // string | The Workflow identifier.

try {
    $apiInstance->disableWorkflowById($organization_id, $workflow_id);
} catch (Exception $e) {
    echo 'Exception when calling UnderwritingWorkflowApi->disableWorkflowById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **workflow_id** | **string**| The Workflow identifier. | |

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

## `enableWorkflowById()`

```php
enableWorkflowById($organization_id, $workflow_id)
```

Enable Workflow

Enable a specific Workflow by Organization and Workflow identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\UnderwritingWorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$workflow_id = 61f2e8593a0a3076d01a71ef; // string | The Workflow identifier.

try {
    $apiInstance->enableWorkflowById($organization_id, $workflow_id);
} catch (Exception $e) {
    echo 'Exception when calling UnderwritingWorkflowApi->enableWorkflowById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **workflow_id** | **string**| The Workflow identifier. | |

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

## `getListWorkflows()`

```php
getListWorkflows($organization_id, $skip, $limit, $sort): \TheLogicStudio\ExactPay\Model\UnderwritingWorkflowResponse[]
```

List Underwriting Workflows

Retrieve a list of Underwriting Workflows for the given Organization identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\UnderwritingWorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$sort = createdAt:asc; // string | Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.

try {
    $result = $apiInstance->getListWorkflows($organization_id, $skip, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnderwritingWorkflowApi->getListWorkflows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **sort** | **string**| Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). To sort by a &#x60;fieldName&#x60;, use the &#x60;fieldName:&#x60; followed by the sort order. To sort by fields in the nested object, use &#x60;objectName.fieldName&#x60; followed by the sort order. Sorting can be done by multiple fields by providing the &#x60;fieldNames&#x60; with sort direction as comma-separated values. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\UnderwritingWorkflowResponse[]**](../Model/UnderwritingWorkflowResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRetrieveWorkflow()`

```php
getRetrieveWorkflow($organization_id, $workflow_id): \TheLogicStudio\ExactPay\Model\UnderwritingWorkflowResponse
```

Retrieve Workflow

Retrieve a specific Underwriting Workflow for the given Organization and Workflow identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\UnderwritingWorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$workflow_id = 61f2e8593a0a3076d01a71ef; // string | The Workflow identifier.

try {
    $result = $apiInstance->getRetrieveWorkflow($organization_id, $workflow_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnderwritingWorkflowApi->getRetrieveWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **workflow_id** | **string**| The Workflow identifier. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\UnderwritingWorkflowResponse**](../Model/UnderwritingWorkflowResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCreateWorkflow()`

```php
postCreateWorkflow($organization_id, $post_create_workflow_request): \TheLogicStudio\ExactPay\Model\PostCreateWorkflow201Response
```

Create Workflow

Create a new Underwriting Workflow for the Organization to evaluate Onboarding Applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\UnderwritingWorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$post_create_workflow_request = new \TheLogicStudio\ExactPay\Model\PostCreateWorkflowRequest(); // \TheLogicStudio\ExactPay\Model\PostCreateWorkflowRequest

try {
    $result = $apiInstance->postCreateWorkflow($organization_id, $post_create_workflow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnderwritingWorkflowApi->postCreateWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **post_create_workflow_request** | [**\TheLogicStudio\ExactPay\Model\PostCreateWorkflowRequest**](../Model/PostCreateWorkflowRequest.md)|  | |

### Return type

[**\TheLogicStudio\ExactPay\Model\PostCreateWorkflow201Response**](../Model/PostCreateWorkflow201Response.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putUpdateWorkflow()`

```php
putUpdateWorkflow($organization_id, $workflow_id, $underwriting_workflow_request)
```

Update Workflow

Update Underwriting Workflow properties for the given Organization and Workflow identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\UnderwritingWorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$workflow_id = 61f2e8593a0a3076d01a71ef; // string | The Workflow identifier.
$underwriting_workflow_request = new \TheLogicStudio\ExactPay\Model\UnderwritingWorkflowRequest(); // \TheLogicStudio\ExactPay\Model\UnderwritingWorkflowRequest

try {
    $apiInstance->putUpdateWorkflow($organization_id, $workflow_id, $underwriting_workflow_request);
} catch (Exception $e) {
    echo 'Exception when calling UnderwritingWorkflowApi->putUpdateWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **workflow_id** | **string**| The Workflow identifier. | |
| **underwriting_workflow_request** | [**\TheLogicStudio\ExactPay\Model\UnderwritingWorkflowRequest**](../Model/UnderwritingWorkflowRequest.md)|  | |

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

## `setDefaultWorkflowById()`

```php
setDefaultWorkflowById($organization_id, $workflow_id)
```

Set Default Workflow

Set a specific Workflow as the default to process the new Onboarding for the given Organization and Workflow identifiers. The current default Workflow will lose the defaulted assignment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\UnderwritingWorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$workflow_id = 61f2e8593a0a3076d01a71ef; // string | The Workflow identifier.

try {
    $apiInstance->setDefaultWorkflowById($organization_id, $workflow_id);
} catch (Exception $e) {
    echo 'Exception when calling UnderwritingWorkflowApi->setDefaultWorkflowById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **workflow_id** | **string**| The Workflow identifier. | |

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
