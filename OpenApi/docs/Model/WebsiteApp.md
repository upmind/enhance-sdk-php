# # WebsiteApp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**app** | [**\Upmind\EnhanceSdk\Model\WebsiteAppKind**](WebsiteAppKind.md) |  |
**path** | **string** | The path is only present if the app is installed in the root instead of a subfolder. For example if a customer installs Wordpress at &#39;/blog&#39;, then the path will be present and equal to &#39;blog&#39;. But if they install WP in website root, instead of returning &#39;/&#39; or empty string, this property is omitted. | [optional]
**default_wp_user_id** | **int** | Only present if default was set by the user. Otherwise, this field isn&#39;t there. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
