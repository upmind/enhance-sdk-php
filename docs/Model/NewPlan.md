# # NewPlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**resources** | [**\Upmind\EnhanceSdk\Model\Resource[]**](Resource.md) |  |
**allowances** | [**\Upmind\EnhanceSdk\Model\Allowance[]**](Allowance.md) |  |
**selections** | [**\Upmind\EnhanceSdk\Model\Selection[]**](Selection.md) |  |
**server_group_id** | **string** |  | [optional]
**server_group_ids** | **string[]** |  | [optional]
**allow_server_group_selection** | **bool** |  | [optional]
**plan_type** | [**\Upmind\EnhanceSdk\Model\PlanType**](PlanType.md) |  | [optional]
**cgroup_limits** | [**\Upmind\EnhanceSdk\Model\CgroupLimits**](CgroupLimits.md) |  | [optional]
**fs_quota_limit** | [**\Upmind\EnhanceSdk\Model\FsQuotaLimit**](FsQuotaLimit.md) |  | [optional]
**allowed_php_versions** | [**\Upmind\EnhanceSdk\Model\PhpVersion[]**](PhpVersion.md) |  | [optional]
**default_php_version** | [**\Upmind\EnhanceSdk\Model\PhpVersion**](PhpVersion.md) |  | [optional]
**redis_allowed** | **bool** |  | [optional]
**default_server_group_id** | **string** | If set, servers from this server group are prioritized by placement algorithm. If no server from the default server group is available, servers from other server groups are tried. The defaultServerGroupId will be automatically added to serverGroupIds if they do not contain it or are not provided. | [optional]
**preinstall_wordpress_theme** | **string** | :&gt; When WordPress is installed on a website under this plan, the chosen theme will be preinstalled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
