# # BankingDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bank_name** | **string** | Name of the Bank where the business holds the Demand Deposit Account(DDA) or the Current Account to which they wanted to receive the funds via ACH. |
**routing_number** | **string** | 9-digit Routing Number for the Organization or Account based in USA (or) 3-digit Institution number for the Organization or Account based in Canada. The value must be a non-negative number string. |
**dda_number** | **string** | Demand Deposit Account (or) Checking Account number. The value must be a non-negative number string. |
**bank_number** | **string** | A bank transit number is a unique 5-digit number used to identify the bank branch in Canada. This is only applicable for businesses based in Canada. The value must be a non-negative number string. | [optional]
**plaid_access_token** | **string** | Plaid Access Token for the bank account verified through Plaid integration. When the Plaid access token is provided, the bank account will be added as a Verified Funding Source. Otherwise, the bank account will be added as Unverified Funding Source. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
