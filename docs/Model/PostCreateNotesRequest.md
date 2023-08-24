# # PostCreateNotesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** | The unique identifier created for the new Note. | [optional] [readonly]
**user** | **string** | The identifier of the User who created the Note for the Onboarding Application. | [optional] [readonly]
**user_name** | **string** | The Name of the User who created the Note for the Onboarding Application. | [optional] [readonly]
**account** | **string** | The Organization identifier associated with the Onboarding Application used to create the Note. | [optional] [readonly]
**note** | **string** | The content of the Note posted. |
**onboarding** | **string** | The Onboarding Application identifier associated with this Note. | [optional] [readonly]
**created_at** | **\DateTime** | The date and time when the Note was created. | [optional] [readonly]
**updated_at** | **\DateTime** | The date and time when the Note was last updated. | [optional] [readonly]
**__v** | **int** | The version number of the Note. Everytime the Document Request is updated the version number will be incremented. | [optional] [readonly]
**onboarding_is_deleted** | **bool** | Set to &#x60;true&#x60; if you&#39;re creating a Note for an already deleted Onboarding Application. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
