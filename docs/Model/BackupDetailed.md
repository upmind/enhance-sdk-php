# # BackupDetailed

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**website_id** | **string** |  |
**started_at** | **string** |  |
**finished_at** | **string** |  | [optional]
**snapshot_dir_name** | **string** |  |
**size** | **int** |  | [optional]
**home_dir_status** | [**\Upmind\EnhanceSdk\Model\OperationStatus**](OperationStatus.md) |  | [optional]
**files_size** | **int** |  | [optional]
**mysql_dbs_status** | [**\Upmind\EnhanceSdk\Model\OperationStatus**](OperationStatus.md) |  | [optional]
**mysql_dbs** | **string[]** |  | [optional]
**mysql_dbs_size** | **int** |  | [optional]
**emails_status** | [**\Upmind\EnhanceSdk\Model\OperationStatus**](OperationStatus.md) |  | [optional]
**emails** | **string[]** | The addresses of the backed up mailboxes. | [optional]
**email_domains** | **string[]** | The domain ids of the backed up mailboxes. | [optional]
**emails_size** | **int** |  | [optional]
**kind** | [**\Upmind\EnhanceSdk\Model\BackupKind**](BackupKind.md) |  |
**description** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
