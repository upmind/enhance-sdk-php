# # UpdatePlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**plan_type** | [**\Upmind\EnhanceSdk\Model\PlanType**](PlanType.md) |  | [optional]
**cgroup_limits** | [**\Upmind\EnhanceSdk\Model\CgroupLimits**](CgroupLimits.md) |  | [optional]
**fs_quota_limit** | [**\Upmind\EnhanceSdk\Model\FsQuotaLimit**](FsQuotaLimit.md) |  | [optional]
**allowed_php_versions** | [**\Upmind\EnhanceSdk\Model\PhpVersion[]**](PhpVersion.md) |  | [optional]
**default_php_version** | [**\Upmind\EnhanceSdk\Model\PhpVersion**](PhpVersion.md) |  | [optional]
**redis_allowed** | **bool** |  | [optional]
**server_group_ids** | **string[]** | If provided as an empty array, removes all server groups from the plan. | [optional]
**allow_server_group_selection** | **bool** | Whether the customer can select the server group for their websites. | [optional]
**default_server_group_id** | [**\Upmind\EnhanceSdk\Model\UpdatePlanDefaultServerGroupId**](UpdatePlanDefaultServerGroupId.md) |  | [optional]
**preinstall_wordpress_theme** | **string** | :&gt; When WordPress is installed on a website under this plan, the chosen theme will be preinstalled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
