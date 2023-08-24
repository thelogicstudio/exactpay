# # OrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Order identifier which is created. | [optional]
**status** | **string** | Status of the Order. | [optional]
**access_token** | [**\TheLogicStudio\ExactPay\Model\OrderResponseAccessToken**](OrderResponseAccessToken.md) |  | [optional]
**amount** | **int** | Amount in smallest currency unit, for example, in cents, including all surcharges, taxes etc. | [optional]
**surcharge_amount** | **int** | Surcharge amount, in smallest currency unit, for example, in cents. This is assumed to already be included in the amount. | [optional]
**tax_amount** | **int** | Tax value included in total amount. Sales tax in the US, or PST for Canadian merchants. The smallest currency units, for example, in cents in USD This is assumed to already be included in the amount. | [optional]
**capture** | **bool** | Set this to false if you only want to authorize for the amount. Defaults to true. | [optional]
**description** | **string** | This will give some description about the order description. | [optional]
**reference** | [**\TheLogicStudio\ExactPay\Model\OrderResponseReference**](OrderResponseReference.md) |  | [optional]
**billing** | [**\TheLogicStudio\ExactPay\Model\OrderResponseBilling**](OrderResponseBilling.md) |  | [optional]
**soft_descriptor** | [**\TheLogicStudio\ExactPay\Model\OrderResponseSoftDescriptor**](OrderResponseSoftDescriptor.md) |  | [optional]
**level3** | [**\TheLogicStudio\ExactPay\Model\OrderResponseLevel3**](OrderResponseLevel3.md) |  | [optional]
**options** | [**\TheLogicStudio\ExactPay\Model\OrderResponseOptions**](OrderResponseOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
