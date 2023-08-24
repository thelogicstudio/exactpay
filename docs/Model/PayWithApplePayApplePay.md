# # PayWithApplePayApplePay

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cardholder** | **string** | Card holder name. | [optional]
**number** | **string** | Card number. |
**expiry_month** | **string** | Two-digit expiration month for the card. |
**expiry_year** | **string** | Four-digit expiration year for the card. |
**transaction_id** | **string** | The transaction ID returned by Apple Pay. |
**cryptogram** | **string** | The cryptogram returned by Apple Pay. Note: if the response from Apple contains an &#x60;eciIndicator&#x60; value, you MUST pass this value to us using the &#x60;ecommerce_flag&#x60; attribute in the &#x60;options&#x60; request element. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
