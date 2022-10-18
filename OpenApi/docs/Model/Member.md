# # Member

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**login_id** | **string** |  |
**is_active** | **bool** |  |
**email** | **string** |  |
**name** | **string** |  |
**roles** | [**\Upmind\EnhanceSdk\Model\Role[]**](Role.md) |  |
**site_accesses** | **string[]** | This field is only present if member has \&quot;SiteAccess\&quot; role. In this case, the list contains the ids of the websites to which member has access. |
**notifications** | **string[]** | The notifications configured for this member. |
**joined_at** | **\DateTime** |  |
**avatar_path** | **string** |  | [optional]
**color_code** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
