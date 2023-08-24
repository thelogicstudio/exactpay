# # Level3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_amount** | **int** | Total amount of tax associated with this transaction, in smallest currency units, for example, in cents in USD | [optional]
**tax_rate** | **float** | Tax rate applied to the item. | [optional]
**alt_tax_amount** | **int** | Total amount of alternate tax associated with this transaction, in smallest currency units, for example, in cents in USD | [optional]
**alt_tax_id** | **string** | Tax ID number for the alternate tax associated with this transaction. | [optional]
**duty_amount** | **int** | Total charges for any import and/or export duties included in this transaction, in smallest currency units, for example, in cents in USD | [optional]
**freight_amount** | **int** | Total freight or shipping and handling charges, in smallest currency units, for example, in cents in USD | [optional]
**discount_amount** | **int** | Total discount applied to this transaction, in smallest currency units, for example, in cents in USD | [optional]
**ship_from_zip** | **string** | The zip/postal code of the location from which the goods were shipped. Five-digit (example: 33558) or nine-digit (33558-3321) format is acceptable for the USA. Six digit(A0A 0A0) or (A0A0A0) format is acceptable for Canada. | [optional]
**ship_to** | [**\TheLogicStudio\ExactPay\Model\ShipTo**](ShipTo.md) |  | [optional]
**line_items** | [**\TheLogicStudio\ExactPay\Model\LineItem[]**](LineItem.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
