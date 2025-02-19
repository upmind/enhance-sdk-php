# # Subscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**plan_id** | **int** |  |
**plan_name** | **string** |  |
**subscriber_id** | **string** |  |
**vendor_id** | **string** |  |
**status** | [**\Upmind\EnhanceSdk\Model\Status**](Status.md) |  |
**suspended_by** | **string** |  | [optional]
**resources** | [**\Upmind\EnhanceSdk\Model\UsedResource[]**](UsedResource.md) | A list of used resources. |
**allowances** | [**\Upmind\EnhanceSdk\Model\Allowance[]**](Allowance.md) |  |
**selections** | [**\Upmind\EnhanceSdk\Model\Selection[]**](Selection.md) |  |
**dedicated_servers** | [**\Upmind\EnhanceSdk\Model\SubscriptionDedicatedServersInfo**](SubscriptionDedicatedServersInfo.md) |  | [optional]
**plan_type** | [**\Upmind\EnhanceSdk\Model\PlanType**](PlanType.md) |  |
**allowed_php_versions** | [**\Upmind\EnhanceSdk\Model\PhpVersion[]**](PhpVersion.md) |  |
**default_php_version** | [**\Upmind\EnhanceSdk\Model\PhpVersion**](PhpVersion.md) |  |
**redis_allowed** | **bool** |  |
**server_groups** | [**\Upmind\EnhanceSdk\Model\ServerGroup[]**](ServerGroup.md) | If this field is present, the customer is allowed to chose from the server groups listed here when creating a website. | [optional]
**preinstall_wordpress_theme** | **string** | :&gt; When WordPress is installed on a website under this plan, the chosen theme will be preinstalled. | [optional]
**friendly_name** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
