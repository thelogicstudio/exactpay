# TheLogicStudio\ExactPay\APIHealthCheckApi

All URIs are relative to https://api.exactpaysandbox.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiHealthCheck()**](APIHealthCheckApi.md#apiHealthCheck) | **GET** /status | Retrieve Status |


## `apiHealthCheck()`

```php
apiHealthCheck(): \TheLogicStudio\ExactPay\Model\ApiHealthCheck200Response
```

Retrieve Status

A method in which you can check wether or not the Exact Payments service is operational.  Used correctly, this can proactively notify your merchants on the very rare occasion that the Exact Payments service is not operational

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new TheLogicStudio\ExactPay\Api\APIHealthCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiHealthCheck();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIHealthCheckApi->apiHealthCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\TheLogicStudio\ExactPay\Model\ApiHealthCheck200Response**](../Model/ApiHealthCheck200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
