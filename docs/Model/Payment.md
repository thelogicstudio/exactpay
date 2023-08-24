# # Payment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Payment identifier. | [optional]
**account_id** | **string** | Account identifier. | [optional]
**type** | **string** | The type of Payment. | [optional]
**status** | **string** | The current status of the Payment. | [optional]
**approved** | **bool** | Whether or not the Payment was approved. | [optional]
**captured** | **bool** | Always true for successful ACH payments. | [optional]
**capture_details** | [**\TheLogicStudio\ExactPay\Model\CaptureDetails**](CaptureDetails.md) |  | [optional]
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
**surcharge_amount** | **float** | The surcharge amount for the Payment, in smallest currency unit, for example, in cents. | [optional]
**currency_code** | **string** | It shows the currency in which the Payment was processed. | [optional]
**created_at** | **string** | Date and time when the Payment was created. | [optional]
**sent_to_bank** | **bool** | Whether or not the Payment passed our internal validation and was sent for processing. | [optional]
**bank_response** | [**\TheLogicStudio\ExactPay\Model\BankResponse**](BankResponse.md) |  | [optional]
**exact_response** | [**\TheLogicStudio\ExactPay\Model\ExactResponse**](ExactResponse.md) |  | [optional]
**reference** | [**\TheLogicStudio\ExactPay\Model\Reference**](Reference.md) |  | [optional]
**receipt** | **string** | Receipt of the Payment, if the &#39;options.generateReceipt&#39; was specified. | [optional]
**payment_method_details** | [**\TheLogicStudio\ExactPay\Model\CreditCardDetails**](CreditCardDetails.md) |  | [optional]
**options** | [**\TheLogicStudio\ExactPay\Model\PaymentOptions**](PaymentOptions.md) |  | [optional]
**ach** | [**\TheLogicStudio\ExactPay\Model\AchAccountDetails**](AchAccountDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
