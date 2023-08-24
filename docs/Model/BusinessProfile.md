# # BusinessProfile

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**services_description** | **string** | The description of the Product or services provided by the business. |
**currently_accepting_payments** | **bool** | Whether the business is currently accepting the Payments or not. If &#x60;true&#x60; then &#x60;currentProcessor&#x60;, &#x60;currentGateway&#x60; and &#x60;reasonForLeaving&#x60; field values are required. |
**current_processor** | **string** | Current Processor with whom the business is having contract with. This field value is required only when &#x60;currentlyAcceptingPayments&#x60; field value is &#x60;true&#x60;. | [optional]
**current_gateway** | **string** | Current gateway with whom the business is having contract with. This field value is required only when &#x60;currentlyAcceptingPayments&#x60; field value is &#x60;true&#x60;. | [optional]
**reason_for_leaving** | **string** | Reason for leaving current processor/gateway. This field value is required only when &#x60;currentlyAcceptingPayments&#x60; field value is &#x60;true&#x60;. | [optional]
**acceptance_methods** | [**\TheLogicStudio\ExactPay\Model\AcceptanceMethods**](AcceptanceMethods.md) |  |
**recurring_services** | **bool** | Whether the business provides any recurring services or not. If &#x60;true&#x60; then &#x60;recurringServicesDescription&#x60; field value is required. |
**recurring_services_description** | **string** | The description of the recurring services provided by the business. This field value is required only when &#x60;recurringServices&#x60; field value is &#x60;true&#x60;. | [optional]
**refund_policy_description** | **string** | Refund policy. |
**payment_time** | **string** | The time at which the customer makes the payment to the business. | [optional]
**delivery_timeframe** | **string** | Delivery time frame that the business has for its products. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
