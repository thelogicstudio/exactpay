# # ApplicationToken

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Application Token identifier in Exact Payments system. | [optional] [readonly]
**label** | **string** | Free text to quickly identify the created Application Token. | [optional]
**type** | **string** | Determines the type of the token. This endpoint only creates Application Tokens. For more details, check our [guide](https://developer.exactpay.com/docs/Authentication). | [optional] [readonly] [default to 'application']
**token** | **string** | Application Token used by non-human user to access other API endpoints. Place this token in the &#x60;Authorization&#x60; header when you call other endpoints. It will not expire. | [optional] [readonly]
**permissions** | [**\TheLogicStudio\ExactPay\Model\Permissions[]**](Permissions.md) | Operations that can be performed with the created Application Token. Giving the Application Token more permissions than those assigned to the current user who is creating the Application Token is not allowed. | [optional]
**mode** | **mixed** |  | [optional]
**allowed_permissions** | [**\TheLogicStudio\ExactPay\Model\Permissions[]**](Permissions.md) | Operations that can be performed with the created Application Token. | [optional] [readonly]
**allowed_accounts** | **string[]** | List of Organization and Account identifiers that the created Application Token has access to. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
