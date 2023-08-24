# # OnboardingCreateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** | The Unique identifier assigned to the Onboarding Application. Keep this as a reference to talk to our Customer Support team if you have any questions regarding this Application. | [optional]
**status** | **string** | Current status of the Onboarding Application. | [optional]
**created_at** | **string** | The date and time when the Onboarding Application is submitted. | [optional]
**principals** | [**\TheLogicStudio\ExactPay\Model\PrincipalCreateOnboardingResponse[]**](PrincipalCreateOnboardingResponse.md) | List of Principals added to the Business in Exact Payment system. | [optional]
**token_value_raw** | **string** | This Onboarding Token value can be used to [Upload Documents](/operations/uploadDocumentByToken), allowing a Merchant to authenticate and upload documentation for the Onboarding Application. This token expires 10 minutes from the submission of the Onboarding Application. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
