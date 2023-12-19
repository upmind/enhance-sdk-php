# # Plan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**name** | **string** |  |
**org_id** | **string** |  |
**resources** | [**\Upmind\EnhanceSdk\Model\Resource[]**](Resource.md) |  |
**allowances** | [**\Upmind\EnhanceSdk\Model\Allowance[]**](Allowance.md) |  |
**selections** | [**\Upmind\EnhanceSdk\Model\Selection[]**](Selection.md) |  |
**subscriptions_count** | **int** | The number of subscriptions to this plan. |
**server_group_id** | **string** | Use serverGroupIds instead | [optional]
**server_group_ids** | **string[]** |  | [optional]
**allow_server_group_selection** | **bool** | Whether the customer can select the server group for their websites. | [optional]
**created_at** | **string** |  |
**plan_type** | [**\Upmind\EnhanceSdk\Model\PlanType**](PlanType.md) |  |
**cgroup_limits** | [**\Upmind\EnhanceSdk\Model\CgroupLimits**](CgroupLimits.md) |  | [optional]
**fs_quota_limit** | [**\Upmind\EnhanceSdk\Model\FsQuotaLimit**](FsQuotaLimit.md) |  | [optional]
**allowed_php_versions** | [**\Upmind\EnhanceSdk\Model\PhpVersion[]**](PhpVersion.md) |  |
**default_php_version** | [**\Upmind\EnhanceSdk\Model\PhpVersion**](PhpVersion.md) |  |
**redis_allowed** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
