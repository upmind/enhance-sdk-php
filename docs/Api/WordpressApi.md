# Upmind\EnhanceSdk\WordpressApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWordpressUser()**](WordpressApi.md#createWordpressUser) | **POST** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users | Create website WordPress user |
| [**deleteWordpressPlugin()**](WordpressApi.md#deleteWordpressPlugin) | **DELETE** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/plugins/{plugin} | Delete website WordPress plugin |
| [**deleteWordpressUser()**](WordpressApi.md#deleteWordpressUser) | **DELETE** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users/{user_id} | Delete WordPress user |
| [**getWordpressAppVersion()**](WordpressApi.md#getWordpressAppVersion) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/version | Get WordPress version |
| [**getWordpressLatestVersion()**](WordpressApi.md#getWordpressLatestVersion) | **GET** /utils/wordpress/latest | Get WordPress latest available version |
| [**getWordpressPlugins()**](WordpressApi.md#getWordpressPlugins) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/plugins | Get website WordPress plugins |
| [**getWordpressSettings()**](WordpressApi.md#getWordpressSettings) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress | Get Wordpress application settings |
| [**getWordpressThemes()**](WordpressApi.md#getWordpressThemes) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/themes | Get website WordPress themes |
| [**getWordpressUsers()**](WordpressApi.md#getWordpressUsers) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users |  |
| [**updateWordpressAppVersion()**](WordpressApi.md#updateWordpressAppVersion) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/version | Update website WP app to specific version or latest |
| [**updateWordpressPluginSettings()**](WordpressApi.md#updateWordpressPluginSettings) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/plugins/{plugin} | Updates website WordPress plugin settings |
| [**updateWordpressPluginToLatest()**](WordpressApi.md#updateWordpressPluginToLatest) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/plugins/{plugin}/version | Updates website WordPress plugin to latest version |
| [**updateWordpressSettings()**](WordpressApi.md#updateWordpressSettings) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress | Update Wordpress app settings |
| [**updateWordpressUser()**](WordpressApi.md#updateWordpressUser) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users/{user_id} | Update WordPress user |


## `createWordpressUser()`

```php
createWordpressUser($org_id, $website_id, $app_id, $new_wp_user)
```

Create website WordPress user

Creates a new user in this wordpress app. The created user is independent from Enhance logins--it only concerns the wordpress app (which much like Enhance is its own webapp). Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$new_wp_user = new \Upmind\EnhanceSdk\Model\NewWpUser(); // \Upmind\EnhanceSdk\Model\NewWpUser

try {
    $apiInstance->createWordpressUser($org_id, $website_id, $app_id, $new_wp_user);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->createWordpressUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **new_wp_user** | [**\Upmind\EnhanceSdk\Model\NewWpUser**](../Model/NewWpUser.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWordpressPlugin()`

```php
deleteWordpressPlugin($org_id, $website_id, $app_id, $plugin)
```

Delete website WordPress plugin

Deletes the specified wordpress plugin. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$plugin = 'plugin_example'; // string | The name of the wordpress plugin (not file name!).

try {
    $apiInstance->deleteWordpressPlugin($org_id, $website_id, $app_id, $plugin);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->deleteWordpressPlugin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **plugin** | **string**| The name of the wordpress plugin (not file name!). | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWordpressUser()`

```php
deleteWordpressUser($org_id, $website_id, $app_id, $user_id)
```

Delete WordPress user

Deletes an existing user in this wordpress app. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$user_id = 56; // int | The id of the wordpress user.

try {
    $apiInstance->deleteWordpressUser($org_id, $website_id, $app_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->deleteWordpressUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **user_id** | **int**| The id of the wordpress user. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWordpressAppVersion()`

```php
getWordpressAppVersion($org_id, $website_id, $app_id): \Upmind\EnhanceSdk\Model\GetWordpressAppVersion200Response
```

Get WordPress version

Fetches the WordPress version of a running installation in real time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.

try {
    $result = $apiInstance->getWordpressAppVersion($org_id, $website_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->getWordpressAppVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |

### Return type

[**\Upmind\EnhanceSdk\Model\GetWordpressAppVersion200Response**](../Model/GetWordpressAppVersion200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWordpressLatestVersion()`

```php
getWordpressLatestVersion(): \Upmind\EnhanceSdk\Model\WpLatestVersion
```

Get WordPress latest available version

Returns the latest available WordPress version as published by the WordPress APIs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getWordpressLatestVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->getWordpressLatestVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\WpLatestVersion**](../Model/WpLatestVersion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWordpressPlugins()`

```php
getWordpressPlugins($org_id, $website_id, $app_id, $refresh_cache): \Upmind\EnhanceSdk\Model\WpPluginsFullListing
```

Get website WordPress plugins

Returns the plugins installed on wordpress. This is a separate endpoint as it is takes longer to return than the rest of the application endpoints. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$refresh_cache = True; // bool | If set to true, it will bypass internal caching.

try {
    $result = $apiInstance->getWordpressPlugins($org_id, $website_id, $app_id, $refresh_cache);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->getWordpressPlugins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **refresh_cache** | **bool**| If set to true, it will bypass internal caching. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\WpPluginsFullListing**](../Model/WpPluginsFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWordpressSettings()`

```php
getWordpressSettings($org_id, $website_id, $app_id): \Upmind\EnhanceSdk\Model\WpSettings
```

Get Wordpress application settings

Queries an existing Wordpress application's settings. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.

try {
    $result = $apiInstance->getWordpressSettings($org_id, $website_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->getWordpressSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |

### Return type

[**\Upmind\EnhanceSdk\Model\WpSettings**](../Model/WpSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWordpressThemes()`

```php
getWordpressThemes($org_id, $website_id, $app_id): \Upmind\EnhanceSdk\Model\WpThemesFullListing
```

Get website WordPress themes

Returns the themes installed on website's WordPress. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.

try {
    $result = $apiInstance->getWordpressThemes($org_id, $website_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->getWordpressThemes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |

### Return type

[**\Upmind\EnhanceSdk\Model\WpThemesFullListing**](../Model/WpThemesFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWordpressUsers()`

```php
getWordpressUsers($org_id, $website_id, $app_id): \Upmind\EnhanceSdk\Model\WpUsersFullListing
```



Returns the users of this wordpress app. This is a separate endpoint as it is takes longer to return than most other endpoints. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.

try {
    $result = $apiInstance->getWordpressUsers($org_id, $website_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->getWordpressUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |

### Return type

[**\Upmind\EnhanceSdk\Model\WpUsersFullListing**](../Model/WpUsersFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWordpressAppVersion()`

```php
updateWordpressAppVersion($org_id, $website_id, $app_id, $update_wp_app_to_version)
```

Update website WP app to specific version or latest

Updates an existing website Wordpress application's version to given version (defaults to latest). If the installation is already on its latest version, returns 200 without doing any work. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$update_wp_app_to_version = new \Upmind\EnhanceSdk\Model\UpdateWpAppToVersion(); // \Upmind\EnhanceSdk\Model\UpdateWpAppToVersion

try {
    $apiInstance->updateWordpressAppVersion($org_id, $website_id, $app_id, $update_wp_app_to_version);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->updateWordpressAppVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **update_wp_app_to_version** | [**\Upmind\EnhanceSdk\Model\UpdateWpAppToVersion**](../Model/UpdateWpAppToVersion.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWordpressPluginSettings()`

```php
updateWordpressPluginSettings($org_id, $website_id, $app_id, $plugin, $update_wp_plugin)
```

Updates website WordPress plugin settings

Updates the settings for a WP plugin, such as whether the plugin should be active. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$plugin = 'plugin_example'; // string | The name of the wordpress plugin (not file name!).
$update_wp_plugin = new \Upmind\EnhanceSdk\Model\UpdateWpPlugin(); // \Upmind\EnhanceSdk\Model\UpdateWpPlugin

try {
    $apiInstance->updateWordpressPluginSettings($org_id, $website_id, $app_id, $plugin, $update_wp_plugin);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->updateWordpressPluginSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **plugin** | **string**| The name of the wordpress plugin (not file name!). | |
| **update_wp_plugin** | [**\Upmind\EnhanceSdk\Model\UpdateWpPlugin**](../Model/UpdateWpPlugin.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWordpressPluginToLatest()`

```php
updateWordpressPluginToLatest($org_id, $website_id, $app_id, $plugin)
```

Updates website WordPress plugin to latest version

Updates the specified wordpress plugin to its latest version. Does nothing if the plugin is already latest. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$plugin = 'plugin_example'; // string | The name of the wordpress plugin (not file name!).

try {
    $apiInstance->updateWordpressPluginToLatest($org_id, $website_id, $app_id, $plugin);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->updateWordpressPluginToLatest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **plugin** | **string**| The name of the wordpress plugin (not file name!). | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWordpressSettings()`

```php
updateWordpressSettings($org_id, $website_id, $app_id, $update_wp_settings)
```

Update Wordpress app settings

Updates an existing website WP application's settings. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$update_wp_settings = new \Upmind\EnhanceSdk\Model\UpdateWpSettings(); // \Upmind\EnhanceSdk\Model\UpdateWpSettings

try {
    $apiInstance->updateWordpressSettings($org_id, $website_id, $app_id, $update_wp_settings);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->updateWordpressSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **update_wp_settings** | [**\Upmind\EnhanceSdk\Model\UpdateWpSettings**](../Model/UpdateWpSettings.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWordpressUser()`

```php
updateWordpressUser($org_id, $website_id, $app_id, $user_id, $update_wp_user)
```

Update WordPress user

Updates an existing user in this wordpress app. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$user_id = 56; // int | The id of the wordpress user.
$update_wp_user = new \Upmind\EnhanceSdk\Model\UpdateWpUser(); // \Upmind\EnhanceSdk\Model\UpdateWpUser

try {
    $apiInstance->updateWordpressUser($org_id, $website_id, $app_id, $user_id, $update_wp_user);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->updateWordpressUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **user_id** | **int**| The id of the wordpress user. | |
| **update_wp_user** | [**\Upmind\EnhanceSdk\Model\UpdateWpUser**](../Model/UpdateWpUser.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
