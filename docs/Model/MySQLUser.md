# # MySQLUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**db_id** | **string** |  |
**username** | **string** |  |
**access_hosts** | **string[]** |  |
**auth_plugin** | [**\Upmind\EnhanceSdk\Model\MySQLAuthPlugin**](MySQLAuthPlugin.md) |  |
**grants** | **object** | Table names mapped to a list of privileges on that table. The wildcard \&quot;*\&quot; means the privileges are granted for all tables. |
**created_at** | **string** |  |
**is_ephemeral** | **bool** | A flag which marks short-lived mysql accounts. If an account is created as ephemeral, it will be deleted few hours after it&#39;s been created. Throwaway accounts are useful for phpMyAdmin logins. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
