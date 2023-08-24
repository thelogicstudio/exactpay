# # OnboardingWithPrincipalResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** | Onboarding Application identifier. | [optional]
**merchant** | [**\TheLogicStudio\ExactPay\Model\Merchant**](Merchant.md) |  | [optional]
**status** | **string** | The status of the Onboarding Application. | [optional]
**client_ip** | **string** | The IP address of the client who sent the Onboarding Application. | [optional]
**organization** | **string** | The ID of the Organization who onboarded this Organization or the Account. | [optional]
**workflow** | **string** | The ID of the Workflow used to onboard the Organization or the Account. | [optional]
**bank_boarding** | [**\TheLogicStudio\ExactPay\Model\BankBoarding**](BankBoarding.md) |  | [optional]
**status_updated_at** | **string** | The date and time when the status was last updated. | [optional]
**approved_at** | **string** | The date and time when the Onboarding Application was approved. | [optional]
**terminated_at** | **string** | The date and time when the Organization or Account was terminated. | [optional]
**closed_at** | **string** | The date and time when the Organization or Account was closed. | [optional]
**created_at** | **string** | The date and time when the Onboarding Application was created. | [optional]
**updated_at** | **string** | The date and time when the Onboarding Application was updated. | [optional]
**secret** | **string** | The secret associated with the Onboarding Application. This field will be available only when the secret is assigned to the Onboarding Application. | [optional]
**kyc_results** | [**\TheLogicStudio\ExactPay\Model\KycResults[]**](KycResults.md) | List of Rules executed or being executed as part of configured Workflow to Onboard the Account. | [optional]
**__v** | **float** | Version of the Onboarding Application, when ever an Onboarding Application is updated or ran through some process the version value will be incremented | [optional]
**account** | **string** | Account Identifier assigned by Exact Payments systems when the Workflow checks are passed and account created in Exact Payments system. | [optional]
**type** | **string** | The type of the Onboarded entity. | [optional] [default to 'account']
**is_deleted** | **bool** | Indicates whether the Onboarding Application is soft deleted/deactivated. | [optional]
**is_locked** | **bool** | Indicates whether the Onboarding Application is Locked. | [optional]
**document_request** | [**\TheLogicStudio\ExactPay\Model\DocumentRequest[]**](DocumentRequest.md) | List of Document Request sent for the Onboarding Application. This field will be populated only when the Document Requests are made through Exact Payment systems. | [optional]
**documents** | [**\TheLogicStudio\ExactPay\Model\Document[]**](Document.md) | List of Documents uploaded for the Onboarding Application. This field will be populated only when the Documents are uploaded through Exact Payment systems. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
