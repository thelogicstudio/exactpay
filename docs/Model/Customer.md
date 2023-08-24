# # Customer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the given Customer. | [optional]
**name** | **string** | Name of the customer. | [optional]
**email** | **string** | Email of the customer. | [optional]
**phone** | **string** | Phone number of the customer. | [optional]
**token** | **string** | Customer token can be used as a &#x60;Payment Method Token&#x60;. It will always be associated to the Customer&#39;s default Payment Method when linked. | [optional]
**addresses** | [**\TheLogicStudio\ExactPay\Model\CustomerAddress[]**](CustomerAddress.md) |  | [optional]
**created_at** | **\DateTime** | The date and time when the Customer was created. | [optional]
**updated_at** | **\DateTime** | The date and time when the Customer was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
