# # Merchant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**principal** | [**\TheLogicStudio\ExactPay\Model\UpdatablePrincipal[]**](UpdatablePrincipal.md) | The details for the Principal owner(s) of the Business. | [optional]
**name** | **string** | The Name of the Business. | [optional]
**business_registration_number** | **string** | Tax identifier of the Business. | [optional]
**dba_name** | **string** | Doing Business As Name. | [optional]
**established_date** | **\DateTime** | Business Established Date. | [optional]
**number_of_employees** | **float** | Number of Employees of the Business. | [optional]
**telephone** | **string** | Telephone Number of the Business. USA phone number can&#39;t start with 0 0r 1. The value must be a valid number string. | [optional]
**email** | **string** | Contact Email of the Business. | [optional]
**online_presence** | **string** | Website URL of the Business. | [optional]
**facebook** | **string** | Facebook link of the Business. | [optional]
**twitter** | **string** | Twitter link of the Business. | [optional]
**linked_in** | **string** | LinkedIn link of the Business. | [optional]
**entity_type** | **string** | Entity type of the Business. | [optional]
**anticipated_trans_amounts** | [**\TheLogicStudio\ExactPay\Model\UpdatableAnticipatedTransAmounts**](UpdatableAnticipatedTransAmounts.md) |  | [optional]
**mcc** | **string** | The business classification drives the [Merchant Category Codes](/operations/listMerchantCategoryCodes) selection. Prohibited or high-risk MCC codes are identified by Exact and are marked accordingly. Prohibited accounts are immediately declined while onboarding. | [optional]
**address** | [**\TheLogicStudio\ExactPay\Model\MerchantAddress**](MerchantAddress.md) |  | [optional]
**business_profile** | [**\TheLogicStudio\ExactPay\Model\UpdatableBusinessProfile**](UpdatableBusinessProfile.md) |  | [optional]
**terms_n_conditions** | [**\TheLogicStudio\ExactPay\Model\MerchantTermsNConditions**](MerchantTermsNConditions.md) |  | [optional]
**banking_details** | [**\TheLogicStudio\ExactPay\Model\UpdatableBankingDetails**](UpdatableBankingDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
