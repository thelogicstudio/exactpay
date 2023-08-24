# # OnboardingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**workflow** | **string** | The Workflow Identifier that will be used to onboard the Application. If the Workflow identifier is not sent (or) the Workflow identifier sent is wrong, then the default Workflow of the Organization that is submitting the Onboarding Application will be used. | [optional]
**client_ip** | **string** | The IP address of the client who sent the Onboarding Application. | [optional]
**type** | **string** | The type of entity being boarded. To onboard a Partner use &#x60;organization&#x60; and to onboard a Merchant use &#x60;account&#x60;. | [optional]
**merchant** | [**\TheLogicStudio\ExactPay\Model\OnboardingMerchant**](OnboardingMerchant.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
