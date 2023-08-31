# # PaymentMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Indicates the type of Payment Method stored in Exact Payments Vault, &#x60;card&#x60; value will be returned for Card Payment Methods. | [optional]
**token** | **string** | This is the token value that can be used for future Payments. | [optional]
**billing_details** | [**\TheLogicStudio\ExactPay\Model\BillingDetailsSchema**](BillingDetailsSchema.md) |  | [optional]
**card** | [**\TheLogicStudio\ExactPay\Model\CardDetailsSchema**](CardDetailsSchema.md) |  | [optional]
**created_at** | **\DateTime** | The date and time when the Payment Method was created. | [optional]
**updated_at** | **\DateTime** | The date and time when the Payment Method was last updated. | [optional]
**label** | **string** | When attached to a customer, a Payment Method can be differentiated by label rather than just its last 4-digits representation. This will allow the customers to identify their Payment Methods easily. | [optional]
**is_default** | **bool** | Indicates whether this is the default Payment Method associated with the Customer or not. | [optional]
**ach** | [**\TheLogicStudio\ExactPay\Model\AchDetailsSchema**](AchDetailsSchema.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
