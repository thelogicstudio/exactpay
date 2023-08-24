# # PutUpdateAccountById400Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**issues** | [**\TheLogicStudio\ExactPay\Model\ZodError[]**](ZodError.md) | List of documented issues that occurred during validation. | [optional]
**name** | **string** | The error type. It has a fixed value of &#x60;ZodError&#x60; for &#x60;400 Bad Request&#x60;. | [optional] [default to 'ZodError']
**errors** | [**\TheLogicStudio\ExactPay\Model\BadRequestX2ContextErrorErrorsInner[]**](BadRequestX2ContextErrorErrorsInner.md) | List of errors that the the submitted entity contains. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
