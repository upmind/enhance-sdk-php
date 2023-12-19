# # ServerInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**group_id** | **string** |  |
**is_control_panel** | **bool** |  |
**is_configured** | **bool** |  |
**friendly_name** | **string** |  |
**hostname** | **string** |  |
**ips** | [**\Upmind\EnhanceSdk\Model\ServerIp[]**](ServerIp.md) |  |
**disks** | [**\Upmind\EnhanceSdk\Model\Disk[]**](Disk.md) |  | [optional]
**os_usage** | **int** |  | [optional]
**status** | [**\Upmind\EnhanceSdk\Model\NetworkStatus**](NetworkStatus.md) |  | [optional]
**roles** | [**\Upmind\EnhanceSdk\Model\RolesSummary**](RolesSummary.md) |  |
**created_at** | **string** |  |
**controld_version** | **string** |  | [optional]
**dedicated_subscription** | [**\Upmind\EnhanceSdk\Model\DedicatedSubscriptionInfo**](DedicatedSubscriptionInfo.md) |  | [optional]
**is_decommissioned** | **bool** |  |
**ipv6_addr** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
