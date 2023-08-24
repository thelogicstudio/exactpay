# # Dwolla

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_classification** | [**\TheLogicStudio\ExactPay\Model\BusinessClassification**](BusinessClassification.md) |  | [optional]
**id** | **string** | The Customer Identifier received from Dwolla for the onboarded Account. This field will be populated when the merchant is onboarded with Dwolla for ACH Payment processing. | [optional]
**status** | **string** | Status of Onboarding with Dwolla when ACH Payment is enabled for the onboarded Account. When ACH Payment enablement is not needed for the Account or the onboarded entity is an Organization then the status will be updated as &#x60;na&#x60; (Not Applicable). | [optional]
**created_at** | **string** | The date and time when the Account is created or verified with Dwolla. | [optional]
**document_needed** | **string** | The documentation needed for Dwolla to verify the identity of the Business or the Owner&#39;s information. This field will be populated when the Dwolla&#39;s Onboarding status is &#x60;verification_document_needed&#x60;. | [optional]
**type** | **string** | The customer type as provisioned by Dwolla for the Account when the merchant is Onboarded with Dwolla. | [optional]
**beneficial_ownership_certify_status** | **string** | The certification status of the Beneficial Owner (Principal) with Dwolla. This field will be populated when the Beneficial Owner&#39;s certification status is set or updated in Dwolla&#39;s system. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
