# # StoredCredentials

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**indicator** | **string** | For Visa/Discover: &#39;1&#39; &#x3D; First time transaction, &#39;S&#39; &#x3D; subsequent transaction. For Mastercard merchants should send &#39;S&#39; and do not need to separately identify first and subsequent transactions. | [optional]
**initiation** | **string** | &#39;M&#39; &#x3D; Merchant initiated, &#39;C&#39; &#x3D; Cardholder initiated. | [optional]
**schedule** | **string** | &#39;U&#39; &#x3D; Unscheduled, &#39;S&#39; &#x3D; Scheduled. | [optional]
**payment_id** | **string** | Only for Visa and Discover. The paymentId of the original authorization. | [optional]
**protectbuy_indicator** | **string** | Only for Discover. If the original authorization was ProtectBuy, then send &#39;Y&#39; in subsequent transactions. (Please avoid using protectbuyIndicator with the original authorization) If ProtectBuy was not used, don&#39;t include this field. If using protectbuyIndicator field, please ensure you send together with paymentId and originalAmount. | [optional]
**original_amount** | **int** | Only for Discover. Approved amount in the original authorization. In smallest currency units, for example, in cents in USD | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
