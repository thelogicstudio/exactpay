# # WebhookResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | System generated identifier for the webhook definition. | [optional]
**event** | [**\TheLogicStudio\ExactPay\Model\WebhookEventField**](WebhookEventField.md) |  |
**urls** | **string[]** | Is a list of urls in the customer side that will be invoked and notified once an event is triggered. | [optional]
**description** | **string** | Is a description of the purpose of this webhook definition, what the customer will use it for. | [optional]
**account** | **string** | The ID of the Account that this Webhook belongs to. | [optional]
**created_at** | **\DateTime** | Date when the webhook was created. | [optional]
**updated_at** | **\DateTime** | Date when the webhook was updated. | [optional]
**disabled_at** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
