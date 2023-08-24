# # SoftDescriptor

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dba_name** | **string** | Doing Business As Name. | [optional]
**street** | **string** | Street name of the merchant&#39;s address. | [optional]
**city** | **string** | City name of the merchant&#39;s address. | [optional]
**state** | **string** | The two-digit country subdivision code where the merchant is located. Refer to the two-digit country subdivision code defined in ISO 3166-2 for the countries listed in ISO 3166-1. | [optional]
**postal_code** | **string** | The postal code where the merchant is located. Five-digit (example: 33558) or nine-digit (33558-3321) format is acceptable for the USA. Six digit(A0A 0A0) or (A0A0A0) format is acceptable for Canada. | [optional]
**country_code** | **string** | 3-character alphabetical country code according to ISO 3166-1, for example, USA, CAN etc. | [optional]
**mcc** | **string** | Merchant category code (MCC) is a four-digit number which describes a business&#39;s primary business activities. Please refer to the endpoint [Merchant Category Codes](https://dev.exactpay.dev/api#/operations/listMerchantCategoryCodes) to get the list of acceptable MCC codes by Exact Payments. | [optional]
**merchant_contact_info** | **string** | Phone number of the merchant. | [optional]
**auth_type_indicator** | **string** | F &#x3D; Final Amount (amount is not expected to change for settlement). P &#x3D; Pre-Authorization / Estimated Amount (amount may change between auth and settlement). Elavon only | [optional]
**tax_id** | **string** | The Tax Identifier of the merchant. | [optional]
**mvv_maid** | **string** | Merchant Verification Value. | [optional]
**phone** | **string** | Phone number of the merchant. | [optional]
**email** | **string** | Email of the merchant. | [optional]
**submerchant_id** | **string** | Identification number of the submerchant. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
