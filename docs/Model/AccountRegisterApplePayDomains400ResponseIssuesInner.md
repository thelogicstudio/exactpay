# # AccountRegisterApplePayDomains400ResponseIssuesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Validation error code. The retrieved value will drive which extra fields will be shown. | [optional]
**path** | **string[]** | Field location in the request body. | [optional]
**message** | **string** | Message explaining the validation error. | [optional]
**type** | **string** | The type of the data failing validation. It is only retrieved when &#x60;code &#x3D; too_small&#x60; or &#x60;code &#x3D; too_big&#x60;. | [optional]
**minimum** | **float** | The expected minimum length/value. It is only retrieved when &#x60;code &#x3D; too_small&#x60;. | [optional]
**maximum** | **float** | The expected maximum length/value. It is only retrieved when &#x60;code &#x3D; too_big&#x60;. | [optional]
**expected** | **string** | Expected field type. It is only retrieved when &#x60;code &#x3D; invalid_type&#x60;. | [optional]
**received** | **string** | Field type received. It is only retrieved when &#x60;code &#x3D; invalid_type&#x60;. | [optional]
**inclusive** | **bool** | Whether the minimum or maximum is included in the range of acceptable values. It is only retrieved when &#x60;code &#x3D; too_small&#x60; or &#x60;code &#x3D; too_big&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
