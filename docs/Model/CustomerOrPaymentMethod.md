# # CustomerOrPaymentMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [optional]
**token** | **string** |  | [optional]
**billing_details** | [**\TheLogicStudio\ExactPay\Model\BillingDetailsSchema**](BillingDetailsSchema.md) |  | [optional]
**card** | [**\TheLogicStudio\ExactPay\Model\CardDetailsSchema**](CardDetailsSchema.md) |  | [optional]
**created_at** | **string** |  | [optional]
**updated_at** | **string** |  | [optional]
**label** | **string** | When attached to a customer, a Payment Method can be differentiated by label rather than just its last 4-digits representation. This will allow the customers to identify their Payment Methods easily. | [optional]
**is_default** | **bool** | Indicates whether this is the default Payment Method associated with the Customer or not. | [optional]
**ach** | [**\TheLogicStudio\ExactPay\Model\AchDetailsSchema**](AchDetailsSchema.md) |  | [optional]
**customer_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
