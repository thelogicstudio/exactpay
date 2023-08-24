# # ZodError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Validation error code. The retrieved value will drive which extra fields will be shown. | [optional]
**path** | **string[]** | Field location in the request body. | [optional]
**message** | **string** | Message explaining the validation error. | [optional]
**expected** | **string** | Expected field type. It is only retrieved when &#x60;code &#x3D; invalid_type&#x60;. | [optional]
**received** | **string** | Field type received. It is only retrieved when &#x60;code &#x3D; invalid_type&#x60;. | [optional]
**keys** | **string[]** | The list of unsupported fields. It is only retrieved when &#x60;code &#x3D; unrecognized_keys&#x60;. | [optional]
**union_errors** | **object[]** | A field supporting more than one possible value type or string value will retrieve this array property of objects with the same shape as this definition. It is only retrieved when &#x60;code &#x3D; invalid_union&#x60;. | [optional]
**options** | **string[]** | The set of acceptable string values for this field. It is only retrieved when &#x60;code &#x3D; invalid_enum_value. | [optional]
**validation** | **string** | String-specific format validator failed. It is only retrieved when &#x60;code &#x3D; invalid_string&#x60;. | [optional]
**type** | **string** | The type of the data failing validation. It is only retrieved when &#x60;code &#x3D; too_small&#x60; or &#x60;code &#x3D; too_big&#x60;. | [optional]
**minimum** | **float** | The expected minimum length/value. It is only retrieved when &#x60;code &#x3D; too_small&#x60;. | [optional]
**maximum** | **float** | The expected maximum length/value. It is only retrieved when &#x60;code &#x3D; too_big&#x60;. | [optional]
**inclusive** | **bool** | Whether the minimum or maximum is included in the range of acceptable values. It is only retrieved when &#x60;code &#x3D; too_small&#x60; or &#x60;code &#x3D; too_big&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
