# # LineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**commodity_code** | **string** | The commodity code used to classify the item. | [optional]
**description** | **string** | Description of the line item. |
**discount_amount** | **int** | The discounted amount for the line item, in smallest currency units, for example, in cents in USD | [optional]
**discount_indicator** | **bool** | Indicator for whether a discount is present on the item or not. | [optional]
**gross_net_indicator** | **bool** | Indicates whether tax is included in the total amount or not. | [optional]
**line_item_total** | **int** | The amount of the item. Normally calculated as price multiplied by quantity, in smallest currency units, for example, in cents in USD |
**product_code** | **string** | The UPC product code for the line item. | [optional]
**quantity** | **int** | Number of units of the item purchased. If present, must be greater than zero. |
**tax_amount** | **int** | The amount of tax charged on the line item, in smallest currency units, for example, in cents in USD | [optional]
**tax_rate** | **float** | The rate of tax charged on the line item. | [optional]
**tax_type** | **string** | The type of tax being applied. | [optional]
**unit_cost** | **float** | The per unit cost of the line item, in smallest currency units, for example, in cents in USD so 13.25 &#x3D; 13 and one quarter cents. |
**unit_of_measure** | **string** | Unit of the measure for the line item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
