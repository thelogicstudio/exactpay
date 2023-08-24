# # PayWithDebitBillPayDebitBillPay

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cardholder** | **string** | Card holder name. |
**number** | **string** | Card number. |
**expiry_month** | **string** | Two-digit expiration month for the card. |
**expiry_year** | **string** | Four-digit expiration year for the card. |
**cvd** | **string** | CVV or CVD of the card. | [optional]
**cvd_indicator** | **string** | &#x60;0&#x60; or &#x60;null&#x60; &#x3D; Not Supported (Default), &#x60;1&#x60; &#x3D; Value provided by Cardholder, &#x60;2&#x60; &#x3D; Value provided on card is Illegible, &#x60;9&#x60; &#x3D; Cardholder states data is not available. | [optional] [default to '0']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
