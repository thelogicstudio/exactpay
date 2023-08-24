# # CreatePayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | Total amount including all surcharges, taxes etc. in smallest currency unit, for example, in cents. |
**surcharge_amount** | **int** | Surcharge amount, in smallest currency unit, for example, in cents. This is assumed to already be included in the amount. | [optional]
**tax_amount** | **int** | Level 2 tax value, included in total amount, in smallest currency units, for example, in cents in USD. Sales tax in the US, or PST for Canadian merchants. | [optional]
**capture** | **bool** | Set this to false if you only want to authorize for the amount. Defaults to true. | [optional]
**payment_method** | [**\TheLogicStudio\ExactPay\Model\PaymentMethodChoice**](PaymentMethodChoice.md) |  |
**customer** | [**\TheLogicStudio\ExactPay\Model\BillingCustomer**](BillingCustomer.md) |  | [optional]
**reference** | [**\TheLogicStudio\ExactPay\Model\Reference**](Reference.md) |  | [optional]
**stored_credentials** | [**\TheLogicStudio\ExactPay\Model\StoredCredentials**](StoredCredentials.md) |  | [optional]
**soft_descriptor** | [**\TheLogicStudio\ExactPay\Model\SoftDescriptor**](SoftDescriptor.md) |  | [optional]
**level3** | [**\TheLogicStudio\ExactPay\Model\Level3**](Level3.md) |  | [optional]
**three_d_secure** | [**\TheLogicStudio\ExactPay\Model\ThreeDSecure**](ThreeDSecure.md) |  | [optional]
**options** | [**\TheLogicStudio\ExactPay\Model\PaymentOptions**](PaymentOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
