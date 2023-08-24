# # ReferencedPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | Total amount including all surcharges, taxes etc. in smallest currency unit, for example, in cents. |
**surcharge_amount** | **int** | Surcharge amount, in smallest currency unit, for example, in cents. This is assumed to already be included in the amount. | [optional]
**authorization** | **string** | Authorization code given in the original payment response. |
**soft_descriptor** | [**\TheLogicStudio\ExactPay\Model\SoftDescriptor**](SoftDescriptor.md) |  | [optional]
**reference** | [**\TheLogicStudio\ExactPay\Model\Reference**](Reference.md) |  | [optional]
**options** | [**\TheLogicStudio\ExactPay\Model\PaymentOptions**](PaymentOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
