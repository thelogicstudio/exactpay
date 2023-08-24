# # UpdatablePrincipal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | The First Name of the Principal owner of the Business. | [optional]
**last_name** | **string** | The Last Name of the Principal owner of the Business. | [optional]
**title** | [**\TheLogicStudio\ExactPay\Model\TitleValues**](TitleValues.md) |  | [optional]
**telephone** | **string** | Principal&#39;s telephone number. | [optional]
**email** | **string** | The Principal&#39;s email. | [optional]
**current_ownership_years** | **float** | Number of years the Principal&#39;s ownership in the Business. | [optional]
**current_ownership_months** | **float** | Number of months the Principal&#39;s ownership in the Business. | [optional]
**date_of_birth** | **\DateTime** | Birth date of the Principal. | [optional]
**drivers_license** | **string** | Principal&#39;s Driver&#39;s License number. | [optional]
**drivers_license_country** | **string** | Country where the Principal&#39;s Driver&#39;s License was issued. Valid values are three digit alpha country codes as defined in ISO 3166-1 alpha-3. | [optional] [default to 'USA']
**drivers_license_state** | **string** | State or Country Subdivision where the Principal&#39;s Driver&#39;s License was issued. The two-digit country subdivision code values defined in ISO 3166-2 for the countries listed in ISO 3166-1. | [optional]
**ssn** | **string** | Social Security Number (US) or Social Insurance Number (CAN). | [optional]
**ssn_country** | **string** | Country where the Principal&#39;s SSN(USA) or SIN(CAN) was issued. Valid values are three-digit alpha country codes as defined in ISO 3166-1 alpha-3. | [optional] [default to 'USA']
**ssn_country_subdivision** | **string** | State or Country Subdivision where the Principal&#39;s SSN(USA) or SIN(CAN) was issued. The two-digit country subdivision code values defined in ISO 3166-2 for the countries listed in ISO 3166-1. | [optional]
**nationality** | **string** | Nationality of the Principal. Valid values are three-digit alpha country codes as defined in ISO 3166-1 alpha-3. | [optional] [default to 'USA']
**percent_of_ownership** | **float** | Principal&#39;s Percent of ownership in the business. | [optional]
**address** | [**\TheLogicStudio\ExactPay\Model\UpdatableAddress**](UpdatableAddress.md) |  | [optional]
**_id** | **string** | A unique identifier assigned to the Principal by the Exact Payments system. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
