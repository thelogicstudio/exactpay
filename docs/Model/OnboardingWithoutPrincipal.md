# # OnboardingWithoutPrincipal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** | Onboarding Application identifier. | [optional]
**merchant** | [**\TheLogicStudio\ExactPay\Model\MerchantWithoutPrincipal**](MerchantWithoutPrincipal.md) |  | [optional]
**status** | **string** | The status of the Onboarding Application. | [optional]
**status_change_reason** | **string** | Reason for the status change. The reason may be needed when the Onboarding status changes to &#x60;accountClosed&#x60;, &#x60;autoDeclined&#x60;, &#x60;declined&#x60;, &#x60;pended&#x60;, and &#x60;terminated&#x60;. This field will be available only when the status change reason is entered in the system. | [optional]
**status_change_reason_note** | **string** | Notes related to the status change.  This field will be available only when the status change reason note is entered in the system. | [optional]
**client_ip** | **string** | The IP address of the client who sent the Onboarding Application. | [optional]
**organization** | **string** | The Identifier of the Organization under which this Onboarding Application was submitted | [optional]
**workflow** | **string** | The Workflow identifier used to evaluate this Onboarding Application. | [optional]
**bank_boarding** | [**\TheLogicStudio\ExactPay\Model\BankBoarding**](BankBoarding.md) |  | [optional]
**status_updated_at** | **string** | The date and time when the status was last updated. | [optional]
**approved_at** | **string** | The date and time when the Onboarding Application was approved. | [optional]
**terminated_at** | **string** | The date and time when the Organization or Account was terminated. | [optional]
**closed_at** | **string** | The date and time when the Organization or Account was closed. | [optional]
**created_at** | **string** | The date and time when the Onboarding Application was created. | [optional]
**updated_at** | **string** | The date and time when the Onboarding Application was last updated. | [optional]
**secret** | **string** | The secret associated with the Organization or Account. | [optional]
**__v** | **float** | Version of the Onboarding Application, whenever an Onboarding Application is updated or ran through some process the version value will be incremented. | [optional]
**account** | **string** | Account identifier assigned in Exact Payments system. | [optional]
**type** | **string** | The type of the Onboarded entity. | [optional] [default to 'account']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
