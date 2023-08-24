# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | Amount in smallest currency unit, for example, in cents, including all surcharges, taxes etc. |
**surcharge_amount** | **int** | The surcharge amount in smallest currency units, for example, in cents in USD This is assumed to already be included in the amount. | [optional]
**tax_amount** | **int** | The tax amount in smallest currency units, for example, in cents in USD This is assumed to already be included in the amount. Sales tax in the US, or PST for Canadian merchants. | [optional]
**capture** | **bool** | Set this to false if you only want to authorize for the amount when the order is paid. Defaults to true. | [optional]
**description** | **string** | A description of the order. | [optional]
**reference** | [**\TheLogicStudio\ExactPay\Model\Reference**](Reference.md) |  |
**billing** | [**\TheLogicStudio\ExactPay\Model\BillingCustomer**](BillingCustomer.md) |  | [optional]
**soft_descriptor** | [**\TheLogicStudio\ExactPay\Model\SoftDescriptor**](SoftDescriptor.md) |  | [optional]
**level3** | [**\TheLogicStudio\ExactPay\Model\Level3**](Level3.md) |  | [optional]
**options** | [**\TheLogicStudio\ExactPay\Model\OrderOptions**](OrderOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
