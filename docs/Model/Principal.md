# # Principal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | The First Name of the Principal owner of the Business. |
**last_name** | **string** | The Last Name of the Principal owner of the Business. |
**title** | [**\TheLogicStudio\ExactPay\Model\TitleValues**](TitleValues.md) |  |
**telephone** | **string** | Telephone Number of Principal Owner of the Business. USA phone number can&#39;t start with 0 0r 1. The value must be a valid number string. |
**email** | **string** | The Principal&#39;s email. |
**current_ownership_years** | **float** | Number of years the Principal&#39;s ownership in the Business. The value must be a non-negative number. | [optional]
**current_ownership_months** | **float** | Number of months the Principal&#39;s ownership in the Business. The value must be a non-negative number. | [optional]
**date_of_birth** | **\DateTime** | Birth date of the Principal. The Principal must be 18 years or older. |
**drivers_license_country** | **string** | The three-digit country code where the Principal&#39;s driving license was issued. Refer to the three-digit country code defined in ISO 3166-1 alpha-3. | [optional] [default to 'USA']
**drivers_license** | **string** | Principal&#39;s driver license number. |
**drivers_license_state** | **string** | The two-digit country subdivision where the Principal&#39;s driving license was issued. Refer to the two-digit country subdivision code defined in ISO 3166-2 for the countries listed in ISO 3166-1. |
**ssn** | **string** | Principal&#39;s Social Security Number(SSN) for USA or Social Insurance Number(SIN) for Canada. |
**ssn_country** | **string** | The three-digit country code where the Principal&#39;s SSN / SIN was issued. Choose &#x60;USA&#x60; for SSN or &#x60;CAN&#x60; for SIN. Refer to the three-digit country code defined in ISO 3166-1 alpha-3. | [optional] [default to 'USA']
**ssn_country_subdivision** | **string** | The two-digit country subdivision where the Principal&#39;s SSN / SIN was issued. Refer to the two-digit country subdivision code defined in  ISO 3166-2 for the countries listed in ISO 3166-1. |
**percent_of_ownership** | **float** | The percentage of ownership held by the Principal in the business. The value must be a non-negative number. At most, The total ownership rate for all Principals can be 100 percent. |
**address** | [**\TheLogicStudio\ExactPay\Model\PrincipalAddress**](PrincipalAddress.md) |  |
**nationality** | **string** | The nationality of the Principal. | [optional] [default to 'USA']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
