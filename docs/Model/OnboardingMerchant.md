# # OnboardingMerchant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | [**\TheLogicStudio\ExactPay\Model\UpdatableBusinessName**](UpdatableBusinessName.md) |  |
**business_registration_number** | **string** | Tax identifier of the Business. |
**dba_name** | [**\TheLogicStudio\ExactPay\Model\UpdatableDbaName**](UpdatableDbaName.md) |  |
**established_date** | **\DateTime** | Business Established Date. It must be a valid date and the date can&#39;t be in the future. |
**number_of_employees** | **float** | Number of employees of the Business. The value must be a non-negative number. |
**telephone** | [**\TheLogicStudio\ExactPay\Model\UpdatableBusinessPhone**](UpdatableBusinessPhone.md) |  |
**email** | **string** | Contact Email of the Business. |
**online_presence** | [**\TheLogicStudio\ExactPay\Model\UpdatableBusinessOnlinePresence**](UpdatableBusinessOnlinePresence.md) |  |
**facebook** | [**\TheLogicStudio\ExactPay\Model\UpdatableBusinessFacebook**](UpdatableBusinessFacebook.md) |  | [optional]
**twitter** | [**\TheLogicStudio\ExactPay\Model\UpdatableBusinessTwitter**](UpdatableBusinessTwitter.md) |  | [optional]
**linked_in** | [**\TheLogicStudio\ExactPay\Model\UpdatableBusinessLinkedIn**](UpdatableBusinessLinkedIn.md) |  | [optional]
**entity_type** | **string** | Entity type of the Business. |
**anticipated_trans_amounts** | [**\TheLogicStudio\ExactPay\Model\AnticipatedTransAmounts**](AnticipatedTransAmounts.md) |  | [optional]
**mcc** | **string** | Merchant category code (MCCs) is a four-digit numbers that describe a business&#39;s primary business activities. Refer to the endpoint [Merchant Category Codes](/operations/listMerchantCategoryCodes) to get the list of acceptable MCC codes by Exact Payments. |
**address** | [**\TheLogicStudio\ExactPay\Model\UpdatableMerchantAddress**](UpdatableMerchantAddress.md) |  |
**banking_details** | [**\TheLogicStudio\ExactPay\Model\BankingDetails**](BankingDetails.md) |  | [optional]
**business_profile** | [**\TheLogicStudio\ExactPay\Model\BusinessProfile**](BusinessProfile.md) |  | [optional]
**principal** | [**\TheLogicStudio\ExactPay\Model\Principal[]**](Principal.md) | The details for the Principal owners of the Business. |
**terms_n_conditions** | [**\TheLogicStudio\ExactPay\Model\OnboardingTermsNConditions**](OnboardingTermsNConditions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
