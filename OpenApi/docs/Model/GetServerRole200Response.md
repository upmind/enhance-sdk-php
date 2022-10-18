# # GetServerRole200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | [**\Upmind\EnhanceSdk\Model\ServerRoleState**](ServerRoleState.md) |  |
**settings** | [**\Upmind\EnhanceSdk\Model\RoleServiceSettings**](RoleServiceSettings.md) |  |
**usage** | **int** |  |
**mailbox_count** | **int** |  |
**failed_delivery_count** | **int** |  |
**mtacd** | [**\Upmind\EnhanceSdk\Model\ServiceInfo**](ServiceInfo.md) |  |
**imapcd** | [**\Upmind\EnhanceSdk\Model\ServiceInfo**](ServiceInfo.md) |  |
**spamcd** | [**\Upmind\EnhanceSdk\Model\ServiceInfo**](ServiceInfo.md) |  |
**websites_count** | **int** | The number of websites whose DNS zones are assigned to be on this dns role. |
**snapshots_count** | **int** |  |
**last24h_snapshots_count** | **int** |  |
**bkupd** | [**\Upmind\EnhanceSdk\Model\ServiceInfo**](ServiceInfo.md) |  |
**mysql_stats** | **object** |  |
**mysqlcd** | [**\Upmind\EnhanceSdk\Model\ServiceInfo**](ServiceInfo.md) |  |
**apachecd** | [**\Upmind\EnhanceSdk\Model\ServiceInfo**](ServiceInfo.md) |  |
**phpcds** | [**\Upmind\EnhanceSdk\Model\ServiceInfo[]**](ServiceInfo.md) |  | [optional]
**filerd** | [**\Upmind\EnhanceSdk\Model\ServiceInfo**](ServiceInfo.md) |  |
**sshcd** | [**\Upmind\EnhanceSdk\Model\ServiceInfo**](ServiceInfo.md) |  |
**screenshotd** | [**\Upmind\EnhanceSdk\Model\ServiceInfo**](ServiceInfo.md) |  |
**ftpcd** | [**\Upmind\EnhanceSdk\Model\ServiceInfo**](ServiceInfo.md) |  |
**nginxcd** | [**\Upmind\EnhanceSdk\Model\ServiceInfo**](ServiceInfo.md) |  |
**zones_count** | **int** |  |
**dnscd** | [**\Upmind\EnhanceSdk\Model\ServiceInfo**](ServiceInfo.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
