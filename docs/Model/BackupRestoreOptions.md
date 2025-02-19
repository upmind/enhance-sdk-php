# # BackupRestoreOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**restore_files** | **bool** | If set to false, the backup restoration will not include the website home directory. | [optional] [default to true]
**restore_emails** | **string[]** |  | [optional]
**restore_all_emails** | **bool** | Restore all the mailboxes from this backup.  Overrides the &#x60;restoreEmails&#x60; property. | [optional]
**restore_databases** | **string[]** | The list of databases names that need to be restored. If this list is not specified all the databases found in the backup snapshot will be restored, otherwise if this list is specified as empty, no database will be restored. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
