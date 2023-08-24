# # CreateUserTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | User&#39;s email. |
**password** | **string** | User&#39;s password. |
**is_authenticated** | **bool** | Flag to determine if the user is authenticated. | [optional] [readonly]
**mode** | [**\TheLogicStudio\ExactPay\Model\AccountMode**](AccountMode.md) |  | [optional]
**token** | **string** | User identity to allow the user to access other API endpoints. Place this token in the &#x60;Authorization&#x60; header when you call other endpoints. It&#39;s valid for 2 hours. | [optional] [readonly]
**type** | **string** | Determines the type of the token. This endpoint only creates User Tokens. For more details, check our [guide](https://developer.exactpay.com/docs/Authentication). | [optional] [readonly] [default to 'user']
**user** | **mixed** |  | [optional]
**application** | **string** | Application ID calling the API. Specify your assigned Application ID, otherwise, use the default value or leave it empty if you aren&#39;t assigned any Application ID. It can be specified in the header or in the body. If you&#39;re building your own application, refer to our [guide](https://developer.exactpay.com/docs/authentication) on how to get an Application ID. | [optional] [default to 'admin-pwa']
**account** | **mixed** |  | [optional]
**account_type** | **mixed** |  | [optional]
**allowed_permissions** | [**\TheLogicStudio\ExactPay\Model\Permissions[]**](Permissions.md) | Operations that can be performed with the created User Token. | [optional] [readonly]
**allowed_accounts** | **string[]** | List of Organization and Account identifiers that the created User Token has access to. | [optional] [readonly]
**api_version** | **string** | Current API version to use in other API calls. It follows Semantic Versioning standard. Currently the versioning isn&#39;t supported. | [optional] [readonly] [default to '1.0.0']
**expires_at** | **string** | The time when the created User Token expires. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
