# TheLogicStudio\ExactPay\DocumentManagementApi

All URIs are relative to https://api.exactpaysandbox.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDocumentRequest()**](DocumentManagementApi.md#createDocumentRequest) | **POST** /organization/{organizationId}/onboarding/{onboardingId}/document-request | Request Document |
| [**deleteDocumentById()**](DocumentManagementApi.md#deleteDocumentById) | **DELETE** /organization/{organizationId}/onboarding/{onboardingId}/document/{documentId} | Delete Document |
| [**deleteDocumentRequestById()**](DocumentManagementApi.md#deleteDocumentRequestById) | **DELETE** /organization/{organizationId}/onboarding/{onboardingId}/document-request/{documentRequestId} | Delete Document Request |
| [**getDocumentById()**](DocumentManagementApi.md#getDocumentById) | **GET** /organization/{organizationId}/onboarding/{onboardingId}/document/{documentId}/download | Download Document |
| [**getDocuments()**](DocumentManagementApi.md#getDocuments) | **GET** /organization/{organizationId}/onboarding/{onboardingId}/document | List Uploaded Documents |
| [**getDownloadAllDocuments()**](DocumentManagementApi.md#getDownloadAllDocuments) | **GET** /organization/{organizationId}/onboarding/{onboardingId}/document/download | Download All Documents |
| [**getListDocumentRequests()**](DocumentManagementApi.md#getListDocumentRequests) | **GET** /organization/{organizationId}/onboarding/{onboardingId}/document-request | List Document Requests |
| [**getRetrieveDocument()**](DocumentManagementApi.md#getRetrieveDocument) | **GET** /organization/{organizationId}/onboarding/{onboardingId}/document/{documentId} | Retrieve Document |
| [**getRetrieveDocumentRequest()**](DocumentManagementApi.md#getRetrieveDocumentRequest) | **GET** /organization/{organizationId}/onboarding/{onboardingId}/document-request/{documentRequestId} | Retrieve Document Request |
| [**listDocumentRequestByToken()**](DocumentManagementApi.md#listDocumentRequestByToken) | **GET** /document-request/{documentRequestToken} | List Document Requests by Token |
| [**putUpdateDocumentTypeById()**](DocumentManagementApi.md#putUpdateDocumentTypeById) | **PUT** /organization/{organizationId}/onboarding/{onboardingId}/document/{documentId} | Update Document Type |
| [**updateDocumentRequest()**](DocumentManagementApi.md#updateDocumentRequest) | **PUT** /organization/{organizationId}/onboarding/{onboardingId}/document-request/{documentRequestId} | Update Document Request |
| [**uploadDocument()**](DocumentManagementApi.md#uploadDocument) | **POST** /organization/{organizationId}/onboarding/{onboardingId}/document | Upload Document |
| [**uploadDocumentByToken()**](DocumentManagementApi.md#uploadDocumentByToken) | **POST** /document/{token} | Upload Document using Token |


## `createDocumentRequest()`

```php
createDocumentRequest($organization_id, $onboarding_id, $create_document_request_request): \TheLogicStudio\ExactPay\Model\OnboardingDocumentRequestCreate
```

Request Document

Create a Document Request asking the Organization or Account for additional verification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$create_document_request_request = new \TheLogicStudio\ExactPay\Model\CreateDocumentRequestRequest(); // \TheLogicStudio\ExactPay\Model\CreateDocumentRequestRequest

try {
    $result = $apiInstance->createDocumentRequest($organization_id, $onboarding_id, $create_document_request_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->createDocumentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **create_document_request_request** | [**\TheLogicStudio\ExactPay\Model\CreateDocumentRequestRequest**](../Model/CreateDocumentRequestRequest.md)|  | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\OnboardingDocumentRequestCreate**](../Model/OnboardingDocumentRequestCreate.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDocumentById()`

```php
deleteDocumentById($organization_id, $onboarding_id, $document_id)
```

Delete Document

Delete an uploaded document associated with a specific document ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$document_id = 61e8607bd569a196900527c5; // string | The Document identifier.

try {
    $apiInstance->deleteDocumentById($organization_id, $onboarding_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->deleteDocumentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **document_id** | **string**| The Document identifier. | |

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

## `deleteDocumentRequestById()`

```php
deleteDocumentRequestById($organization_id, $onboarding_id, $document_request_id)
```

Delete Document Request

Delete a Document Request for an Onboarding Application for the given Organization, Onboarding, and Document Request identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$document_request_id = 61e8607bd569a196900527c5; // string | The Document Request identifier.

try {
    $apiInstance->deleteDocumentRequestById($organization_id, $onboarding_id, $document_request_id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->deleteDocumentRequestById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **document_request_id** | **string**| The Document Request identifier. | |

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

## `getDocumentById()`

```php
getDocumentById($organization_id, $onboarding_id, $document_id, $onboarding_is_deleted): \SplFileObject
```

Download Document

Download a specific Document for the given Organization, Onboarding Application, and Document identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$document_id = 61e8607bd569a196900527c5; // string | The Document identifier.
$onboarding_is_deleted = false; // bool | Indicates whether to download the Document for deleted Onboarding or not. If not sent, it will download the Document for currently active Onboardings under your Organization.

try {
    $result = $apiInstance->getDocumentById($organization_id, $onboarding_id, $document_id, $onboarding_is_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->getDocumentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **document_id** | **string**| The Document identifier. | |
| **onboarding_is_deleted** | **bool**| Indicates whether to download the Document for deleted Onboarding or not. If not sent, it will download the Document for currently active Onboardings under your Organization. | [optional] [default to false] |

### Return type

**\SplFileObject**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/zip`, `text/plain`, `plain/text`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocuments()`

```php
getDocuments($organization_id, $onboarding_id, $limit, $skip, $sort): \TheLogicStudio\ExactPay\Model\Document[]
```

List Uploaded Documents

Retrieve a list of Documents for the given Organization and Onboarding Application identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
$sort = createdAt:asc; // string | Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.

try {
    $result = $apiInstance->getDocuments($organization_id, $onboarding_id, $limit, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->getDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |
| **sort** | **string**| Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). To sort by a &#x60;fieldName&#x60;, use the &#x60;fieldName:&#x60; followed by the sort order. To sort by fields in the nested object, use &#x60;objectName.fieldName&#x60; followed by the sort order. Sorting can be done by multiple fields by providing the &#x60;fieldNames&#x60; with sort direction as comma-separated values. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\Document[]**](../Model/Document.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`, `plain/text`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDownloadAllDocuments()`

```php
getDownloadAllDocuments($organization_id, $onboarding_id, $onboarding_is_deleted): \SplFileObject
```

Download All Documents

Download all Documents for the given Organization and Onboarding Application identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$onboarding_is_deleted = false; // bool | Indicates whether to download all of the Documents for deleted Onboarding or not. If not sent, it will download all the Documents for currently active Onboardings under your Organization.

try {
    $result = $apiInstance->getDownloadAllDocuments($organization_id, $onboarding_id, $onboarding_is_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->getDownloadAllDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **onboarding_is_deleted** | **bool**| Indicates whether to download all of the Documents for deleted Onboarding or not. If not sent, it will download all the Documents for currently active Onboardings under your Organization. | [optional] [default to false] |

### Return type

**\SplFileObject**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/zip`, `text/plain`, `plain/text`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListDocumentRequests()`

```php
getListDocumentRequests($organization_id, $onboarding_id, $limit, $skip, $sort): \TheLogicStudio\ExactPay\Model\OnboardingDocumentRequestResponse[]
```

List Document Requests

Retrieve a list of Document Requests for the given Organization and Onboarding Application identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$limit = 20; // int | The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set.
$skip = 10; // int | The number of records to be skipped per call. By default, starts with `0` and you should provide the current value plus the `$limit` value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records.
$sort = createdAt:asc; // string | Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, `asc` (ascending) or `desc` (descending). To sort by a `fieldName`, use the `fieldName:` followed by the sort order. To sort by fields in the nested object, use `objectName.fieldName` followed by the sort order. Sorting can be done by multiple fields by providing the `fieldNames` with sort direction as comma-separated values.

try {
    $result = $apiInstance->getListDocumentRequests($organization_id, $onboarding_id, $limit, $skip, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->getListDocumentRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **limit** | **int**| The maximum number of items to retrieve within the current page of results. Defaults to 100 if not set. | [optional] [default to 100] |
| **skip** | **int**| The number of records to be skipped per call. By default, starts with &#x60;0&#x60; and you should provide the current value plus the &#x60;$limit&#x60; value in subsequent calls to retrieve following sets of values (pages). So it will skip the number of records on the previous page and bring the next set of records. | [optional] [default to 0] |
| **sort** | **string**| Sets the sort order if the field names are passed. Sorting can be done by multiple fields in the specified order, &#x60;asc&#x60; (ascending) or &#x60;desc&#x60; (descending). To sort by a &#x60;fieldName&#x60;, use the &#x60;fieldName:&#x60; followed by the sort order. To sort by fields in the nested object, use &#x60;objectName.fieldName&#x60; followed by the sort order. Sorting can be done by multiple fields by providing the &#x60;fieldNames&#x60; with sort direction as comma-separated values. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\OnboardingDocumentRequestResponse[]**](../Model/OnboardingDocumentRequestResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`, `plain/text`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRetrieveDocument()`

```php
getRetrieveDocument($organization_id, $onboarding_id, $document_id): \TheLogicStudio\ExactPay\Model\Document
```

Retrieve Document

Retrieve a specific uploaded Document for the given Organization and Onboarding Application identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$document_id = 61e8607bd569a196900527c5; // string | The Document identifier.

try {
    $result = $apiInstance->getRetrieveDocument($organization_id, $onboarding_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->getRetrieveDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **document_id** | **string**| The Document identifier. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\Document**](../Model/Document.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`, `plain/text`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRetrieveDocumentRequest()`

```php
getRetrieveDocumentRequest($organization_id, $onboarding_id, $document_request_id): \TheLogicStudio\ExactPay\Model\OnboardingDocumentRequestResponse
```

Retrieve Document Request

Retrieve a specific Document Request for the given Organization and Onboarding Application identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$document_request_id = 61e8607bd569a196900527c5; // string | The Document Request identifier.

try {
    $result = $apiInstance->getRetrieveDocumentRequest($organization_id, $onboarding_id, $document_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->getRetrieveDocumentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **document_request_id** | **string**| The Document Request identifier. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\OnboardingDocumentRequestResponse**](../Model/OnboardingDocumentRequestResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`, `plain/text`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDocumentRequestByToken()`

```php
listDocumentRequestByToken($document_request_token): \TheLogicStudio\ExactPay\Model\ListDocumentRequestByToken200ResponseInner[]
```

List Document Requests by Token

List the Document Requests associated with the Token found in the Upload Document link URL sent via the Document Request email using [Request Document](/operations/createDocumentRequest) API endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TheLogicStudio\ExactPay\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_request_token = 3f31724149044b384a8c7545f8070aed960d92d154d9fbe4c4deb311203bcfba79eb723ed212226b6f738ed397f6889f8f193a6232e658a65156aa1f66ae83e2f9886aa65a6d19c5f327256ccf38b3a7; // string | The Onboarding Application Document Request Token. The Token can be found in the Upload Document link URL sent via the Document Request email using [Request Document](/operations/createDocumentRequest) API endpoint.

try {
    $result = $apiInstance->listDocumentRequestByToken($document_request_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->listDocumentRequestByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_request_token** | **string**| The Onboarding Application Document Request Token. The Token can be found in the Upload Document link URL sent via the Document Request email using [Request Document](/operations/createDocumentRequest) API endpoint. | |

### Return type

[**\TheLogicStudio\ExactPay\Model\ListDocumentRequestByToken200ResponseInner[]**](../Model/ListDocumentRequestByToken200ResponseInner.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putUpdateDocumentTypeById()`

```php
putUpdateDocumentTypeById($organization_id, $onboarding_id, $document_id, $put_update_document_type_by_id_request)
```

Update Document Type

Update the `type` of a specific Document for the given Organization, Onboarding Application, and Document identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$document_id = 61e8607bd569a196900527c5; // string | The Document identifier.
$put_update_document_type_by_id_request = new \TheLogicStudio\ExactPay\Model\PutUpdateDocumentTypeByIdRequest(); // \TheLogicStudio\ExactPay\Model\PutUpdateDocumentTypeByIdRequest

try {
    $apiInstance->putUpdateDocumentTypeById($organization_id, $onboarding_id, $document_id, $put_update_document_type_by_id_request);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->putUpdateDocumentTypeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **document_id** | **string**| The Document identifier. | |
| **put_update_document_type_by_id_request** | [**\TheLogicStudio\ExactPay\Model\PutUpdateDocumentTypeByIdRequest**](../Model/PutUpdateDocumentTypeByIdRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `plain/text`, `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDocumentRequest()`

```php
updateDocumentRequest($organization_id, $onboarding_id, $document_request_id, $onboarding_document_request_update)
```

Update Document Request

Update a Document Request for an Onboarding Application for the given Organization, Onboarding, and Document Request identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$document_request_id = 61e8607bd569a196900527c5; // string | The Document Request identifier.
$onboarding_document_request_update = new \TheLogicStudio\ExactPay\Model\OnboardingDocumentRequestUpdate(); // \TheLogicStudio\ExactPay\Model\OnboardingDocumentRequestUpdate

try {
    $apiInstance->updateDocumentRequest($organization_id, $onboarding_id, $document_request_id, $onboarding_document_request_update);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->updateDocumentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **document_request_id** | **string**| The Document Request identifier. | |
| **onboarding_document_request_update** | [**\TheLogicStudio\ExactPay\Model\OnboardingDocumentRequestUpdate**](../Model/OnboardingDocumentRequestUpdate.md)|  | [optional] |

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

## `uploadDocument()`

```php
uploadDocument($organization_id, $onboarding_id, $name, $type, $files, $document_request, $onboarding_is_deleted, $principal): \TheLogicStudio\ExactPay\Model\UploadDocumentResponse
```

Upload Document

Upload a Document for an Onboarding Application for the given Organization and Onboarding identifiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\ExactPay\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\ExactPay\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 63efb229903e470516491e7c; // string | The Organization identifier.
$onboarding_id = 6154ce01387b94001cd87ada; // string | The Onboarding Application identifier.
$name = 'name_example'; // string | The Name of the Document being uploaded.
$type = new \TheLogicStudio\ExactPay\Model\DocumentUploadType(); // \TheLogicStudio\ExactPay\Model\DocumentUploadType
$files = "/path/to/file.txt"; // \SplFileObject | The binary data of the Document being uploaded. The following file types are supported `bmp`,`csv`,`doc`,`docx`,`jpg`,`pdf`,`png`,`rtf`,`txt`,`xls` and `xlsx`. An HTTP `500 Internal Server Error` code with a JSON response will be returned when the Document is not uploaded.
$document_request = 'document_request_example'; // string | The Document Request identifier if you are uploading the Document in response to a Document Request you created.
$onboarding_is_deleted = 'onboarding_is_deleted_example'; // string | A boolean string. To upload a Document for soft deleted Onboarding, pass \\\"true\\\". This field is not required if you upload a Document for the active Onboarding.
$principal = 'principal_example'; // string | The unique identifier of the Principal you are uploading the Document for. This field is required if you upload the Document to one of the Principals added in the Onboarding Application.

try {
    $result = $apiInstance->uploadDocument($organization_id, $onboarding_id, $name, $type, $files, $document_request, $onboarding_is_deleted, $principal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->uploadDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| The Organization identifier. | |
| **onboarding_id** | **string**| The Onboarding Application identifier. | |
| **name** | **string**| The Name of the Document being uploaded. | |
| **type** | [**\TheLogicStudio\ExactPay\Model\DocumentUploadType**](../Model/DocumentUploadType.md)|  | |
| **files** | **\SplFileObject****\SplFileObject**| The binary data of the Document being uploaded. The following file types are supported &#x60;bmp&#x60;,&#x60;csv&#x60;,&#x60;doc&#x60;,&#x60;docx&#x60;,&#x60;jpg&#x60;,&#x60;pdf&#x60;,&#x60;png&#x60;,&#x60;rtf&#x60;,&#x60;txt&#x60;,&#x60;xls&#x60; and &#x60;xlsx&#x60;. An HTTP &#x60;500 Internal Server Error&#x60; code with a JSON response will be returned when the Document is not uploaded. | |
| **document_request** | **string**| The Document Request identifier if you are uploading the Document in response to a Document Request you created. | [optional] |
| **onboarding_is_deleted** | **string**| A boolean string. To upload a Document for soft deleted Onboarding, pass \\\&quot;true\\\&quot;. This field is not required if you upload a Document for the active Onboarding. | [optional] |
| **principal** | **string**| The unique identifier of the Principal you are uploading the Document for. This field is required if you upload the Document to one of the Principals added in the Onboarding Application. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\UploadDocumentResponse**](../Model/UploadDocumentResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `plain/text`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadDocumentByToken()`

```php
uploadDocumentByToken($token, $name, $type, $files, $principal): \TheLogicStudio\ExactPay\Model\UploadDocumentResponse
```

Upload Document using Token

Upload a Document for an Onboarding Application using the Token value returned in [Create Onboarding](/operations/createOnboarding) response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TheLogicStudio\ExactPay\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 36a146e1022364c9ee0afe602d3a9d31f32886b2e1680405092970d8feb7040abbd829a8900bae14e38580c71af8cb13020703a6549a12bcf6a5ce0cde95788cb160a6425d31e63391b97c2c9b20980b; // string | The Onboarding Token returned in [Create Onboarding](/operations/createOnboarding) response. This token is valid only for 10 mintues after the Onboarding Application is submitted.
$name = 'name_example'; // string | The Name of the Document being uploaded.
$type = new \TheLogicStudio\ExactPay\Model\DocumentUploadType(); // \TheLogicStudio\ExactPay\Model\DocumentUploadType
$files = "/path/to/file.txt"; // \SplFileObject | The binary data of the Document being uploaded. The following file types are supported `bmp`,`csv`,`doc`,`docx`,`jpg`,`pdf`,`png`,`rtf`,`txt`,`xls` and `xlsx`. An HTTP `500 Internal Server Error` code with a JSON response will be returned when the Document is not uploaded.
$principal = 'principal_example'; // string | The unique identifier of the Principal you are uploading the Document for. This field is required if you upload the Document to one of the Principals added in the Onboarding Application.

try {
    $result = $apiInstance->uploadDocumentByToken($token, $name, $type, $files, $principal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->uploadDocumentByToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| The Onboarding Token returned in [Create Onboarding](/operations/createOnboarding) response. This token is valid only for 10 mintues after the Onboarding Application is submitted. | |
| **name** | **string**| The Name of the Document being uploaded. | |
| **type** | [**\TheLogicStudio\ExactPay\Model\DocumentUploadType**](../Model/DocumentUploadType.md)|  | |
| **files** | **\SplFileObject****\SplFileObject**| The binary data of the Document being uploaded. The following file types are supported &#x60;bmp&#x60;,&#x60;csv&#x60;,&#x60;doc&#x60;,&#x60;docx&#x60;,&#x60;jpg&#x60;,&#x60;pdf&#x60;,&#x60;png&#x60;,&#x60;rtf&#x60;,&#x60;txt&#x60;,&#x60;xls&#x60; and &#x60;xlsx&#x60;. An HTTP &#x60;500 Internal Server Error&#x60; code with a JSON response will be returned when the Document is not uploaded. | |
| **principal** | **string**| The unique identifier of the Principal you are uploading the Document for. This field is required if you upload the Document to one of the Principals added in the Onboarding Application. | [optional] |

### Return type

[**\TheLogicStudio\ExactPay\Model\UploadDocumentResponse**](../Model/UploadDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`, `plain/text`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
