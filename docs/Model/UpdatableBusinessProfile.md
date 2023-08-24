# # UpdatableBusinessProfile

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**services_description** | **string** | Services description. | [optional]
**currently_accepting_payments** | **bool** | If &#x60;true&#x60;, currentProcessor, currentGateway and reasonForLeaving are required. | [optional]
**current_processor** | **string** | Current Processor. | [optional]
**current_gateway** | **string** | Current gateway. | [optional]
**reason_for_leaving** | **string** | Reason for leaving current processor/gateway. | [optional]
**acceptance_methods** | [**\TheLogicStudio\ExactPay\Model\UpdatableAcceptanceMethods**](UpdatableAcceptanceMethods.md) |  | [optional]
**recurring_services** | **bool** | If &#x60;true&#x60;, recurringServicesDescription is required. | [optional]
**recurring_services_description** | **string** | Recurring Services description. | [optional]
**refund_policy_description** | **string** | Refund policy. | [optional]
**payment_time** | **string** | The time at which the customer makes the payment to the business. | [optional]
**delivery_timeframe** | **string** | The delivery time frame that the business has for its products. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
