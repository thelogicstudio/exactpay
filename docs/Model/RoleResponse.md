# # RoleResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**account_id** | **string** | Unique identifier of the current PayFac | [optional]
**name** | **string** |  | [optional]
**description** | **string** | Describes the purpose of what this role was created for. | [optional]
**permissions** | **string[]** | Is the list of available permissions for the current role, each permission represents specific actions within the system. | [optional]
**inherited_permissions** | **string[]** | Is the list of permissions inherited from other PayFac which is a parent. | [optional]
**parent_role_ids** | **string[]** | Represents the role id in the parent organization from which the permissions will be inherited. | [optional]
**ancestor_role_ids** | **string[]** | Represents the role id in the an upper organization in the hierarchy (not the parent) from which the permissions will be inherited. | [optional]
**grantable_role_ids** | **string[]** | Represents the role id of the roles that can be granted for the new users. | [optional]
**created_at** | **\DateTime** | Date when the Role was created. | [optional]
**updated_at** | **\DateTime** | Date when the Role was updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
