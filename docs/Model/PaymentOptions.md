# # PaymentOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ecommerce_flag** | **string** | Used to classify the style of transaction being performed. 2 &#x3D; Recurring, 3 &#x3D; Installment. | [optional]
**third_party_id** | **string** | If you are a Third-Party Processor, this can be used to include your ID when processing. | [optional]
**installment_number** | **string** | The current number for an installment payment, followed by the total number of installments. | [optional]
**customer_ip** | **string** | IP of the customer. | [optional]
**generate_receipt** | **bool** | Whether we should generate a receipt for the customer. Defaults to false. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
