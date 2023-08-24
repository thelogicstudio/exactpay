# # ApplicationTokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Application Token identifier in Exact Payments system. | [optional]
**label** | **string** | Free text to quickly identify the created Application Token. | [optional]
**type** | **string** | Determines the type of the token. This endpoint only retrieves Application Tokens. For more details, check our [guide](https://developer.exactpay.com/docs/Authentication). | [optional] [default to 'application']
**allowed_permissions** | [**\TheLogicStudio\ExactPay\Model\Permissions[]**](Permissions.md) | Operations that can be performed with the Application Tokens. | [optional]
**created_at** | **\DateTime** | The date and time when the Application Token was created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
