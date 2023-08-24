# # Account

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** | The identifier of the Account. | [optional] [readonly]
**id** | **string** | The identifier of the Account. | [optional] [readonly]
**type** | **string** | The Type of the entity. For Merchant it always &#x60;account&#x60;. | [optional] [readonly]
**parent_account_id** | **string** | The identifier of the Organization who onboarded this Account. | [optional] [readonly]
**name** | **string** | The Name of the Business. | [optional]
**dba_name** | **string** | Doing Business As Name. | [optional]
**is_live_capable** | **bool** | Indicate whether this Account is Live capable or not. | [optional] [readonly]
**is_disabled** | **bool** | Indicate whether this Account is disabled or not. | [optional] [readonly]
**live_capable_at** | **string** | The date and time when the Account becomes live capable. | [optional] [readonly]
**disabled_at** | **string** | The date and time when the Account was created. | [optional] [readonly]
**disabled_by_user** | **string** | The identifier of the User who disabled this Account. | [optional] [readonly]
**features** | **string[]** | The feature toggles added to this Account. | [optional] [readonly]
**cascading_features** | **string[]** | The feature toggles added to this Account which can be cascaded to its sub-accounts. | [optional] [readonly]
**created_at** | **string** | The date and time when the Account was created. | [optional] [readonly]
**updated_at** | **string** | The date and time when the Account was last updated. | [optional] [readonly]
**phone** | **string** | Telephone Number of the Business. USA phone number can&#39;t start with 0 0r 1. The value must be a valid number string. | [optional]
**email** | **string** | Contact Email of the Business. | [optional]
**online_presence** | **string** | Website URL of the Business. | [optional]
**facebook** | **string** | Facebook link of the Business. | [optional]
**twitter** | **string** | Twitter link of the Business. | [optional]
**linked_in** | **string** | LinkedIn link of the Business. | [optional]
**address** | [**\TheLogicStudio\ExactPay\Model\MerchantAddress**](MerchantAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
