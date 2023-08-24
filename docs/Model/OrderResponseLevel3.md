# # OrderResponseLevel3

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tax_amount** | **int** | In smallest currency units, for example, in cents. | [optional]
**tax_rate** | **int** | Tax rate of the Order. | [optional]
**alt_tax_amount** | **int** | In smallest currency units, for example, in cents. | [optional]
**alt_tax_id** | **string** |  | [optional]
**duty_amount** | **int** | In smallest currency units, for example, in cents. | [optional]
**freight_amount** | **int** | In smallest currency units, for example, in cents. | [optional]
**discount_amount** | **int** | In smallest currency units, for example, in cents. | [optional]
**ship_from_zip** | **string** | The postal code where the customer is located. Five-digit (example: 33558) or nine-digit (33558-3321) format is acceptable for the USA. Six digit(A0A 0A0) or (A0A0A0) format is acceptable for Canada. | [optional]
**ship_to** | [**\TheLogicStudio\ExactPay\Model\OrderResponseLevel3ShipTo**](OrderResponseLevel3ShipTo.md) |  | [optional]
**line_items** | [**\TheLogicStudio\ExactPay\Model\OrderResponseLevel3LineItemsInner[]**](OrderResponseLevel3LineItemsInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
