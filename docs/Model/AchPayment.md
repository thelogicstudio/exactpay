# # AchPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Payment identifier. | [optional]
**account_id** | **string** | Account identifier. | [optional]
**type** | **string** | The type of Payment. | [optional]
**status** | **string** | The current status of the Payment. | [optional]
**approved** | **bool** | Whether or not the Payment was approved. | [optional]
**captured** | **bool** | Always true for successful ACH payments. | [optional]
**voided** | **bool** | Whether or not the payment has been voided. | [optional]
**void_details** | [**\TheLogicStudio\ExactPay\Model\VoidDetails**](VoidDetails.md) |  | [optional]
**refunded** | **bool** | Whether or not the payment has been refunded. | [optional]
**refund_details** | [**\TheLogicStudio\ExactPay\Model\RefundDetails**](RefundDetails.md) |  | [optional]
**settled** | **bool** | Whether or not the Payment has been settled. | [optional]
**settled_at** | **string** | It shows the date and time when the transaction was settled. | [optional]
**funded** | **bool** | Whether or not the Payment has been funded. | [optional]
**funded_at** | **string** | It shows the date and time when the transaction was funded. | [optional]
**authorization** | **string** | Authorization Identification of the Payment. | [optional]
**amount** | **float** | Total amount including all surcharges, taxes etc. in smallest currency unit, for example, in cents. | [optional]
**currency_code** | **string** | It shows the currency in which the Payment was processed. | [optional]
**created_at** | **string** | Date and time when the Payment was created. | [optional]
**sent_to_bank** | **bool** | Whether or not the Payment passed our internal validation and was sent for processing. | [optional]
**bank_response** | [**\TheLogicStudio\ExactPay\Model\BankResponse**](BankResponse.md) |  | [optional]
**reference** | [**\TheLogicStudio\ExactPay\Model\Reference**](Reference.md) |  | [optional]
**ach** | [**\TheLogicStudio\ExactPay\Model\AchAccountDetails**](AchAccountDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
