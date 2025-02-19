# Upmind\EnhanceSdk\WordpressApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateWordpressTheme()**](WordpressApi.md#activateWordpressTheme) | **POST** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/themes/{theme}/activate | Activate a WordPress theme |
| [**createWordpressUser()**](WordpressApi.md#createWordpressUser) | **POST** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users | Create website WordPress user |
| [**deleteWordpressPlugin()**](WordpressApi.md#deleteWordpressPlugin) | **DELETE** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/plugins/{plugin} | Delete website WordPress plugin |
| [**deleteWordpressTheme()**](WordpressApi.md#deleteWordpressTheme) | **DELETE** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/themes/{theme} | Delete a WordPress theme |
| [**deleteWordpressUser()**](WordpressApi.md#deleteWordpressUser) | **DELETE** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users/{user_id} | Delete WordPress user |
| [**getDefaultWpSsoUser()**](WordpressApi.md#getDefaultWpSsoUser) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users/default |  |
| [**getWordPressMaintenanceMode()**](WordpressApi.md#getWordPressMaintenanceMode) | **GET** /v2/apps/{app_id}/wordpress/maintenance-mode | Gets the MaintenanceMode for a WordPress installation |
| [**getWordPressSiteurl()**](WordpressApi.md#getWordPressSiteurl) | **GET** /v2/apps/{app_id}/wordpress/url | Fetches the site URL for a WordPress installation |
| [**getWordpressAppVersion()**](WordpressApi.md#getWordpressAppVersion) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/version | Get WordPress version |
| [**getWordpressConfig()**](WordpressApi.md#getWordpressConfig) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/wp-config/{wp_option} | Get the WP config value for a given option |
| [**getWordpressInstallations()**](WordpressApi.md#getWordpressInstallations) | **GET** /orgs/{org_id}/websites/{website_id}/apps/wordpress | Trigger discovery of WP installations |
| [**getWordpressLatestVersion()**](WordpressApi.md#getWordpressLatestVersion) | **GET** /utils/wordpress/latest | Get WordPress latest available version |
| [**getWordpressPlugins()**](WordpressApi.md#getWordpressPlugins) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/plugins | Get website WordPress plugins |
| [**getWordpressSettings()**](WordpressApi.md#getWordpressSettings) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress | Get Wordpress application settings |
| [**getWordpressThemes()**](WordpressApi.md#getWordpressThemes) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/themes | Get website WordPress themes |
| [**getWordpressUserSsoUrl()**](WordpressApi.md#getWordpressUserSsoUrl) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users/{user_id}/sso | Get SSO URL for a WP user |
| [**getWordpressUsers()**](WordpressApi.md#getWordpressUsers) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users |  |
| [**installWordpressPlugin()**](WordpressApi.md#installWordpressPlugin) | **POST** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/plugins | Install a plugin |
| [**installWordpressTheme()**](WordpressApi.md#installWordpressTheme) | **POST** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/themes | Install a WordPress theme |
| [**setDefaultWpSsoUser()**](WordpressApi.md#setDefaultWpSsoUser) | **PUT** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users/default | Set WP user as the default SSO user for that website. |
| [**setWordPressMaintenanceMode()**](WordpressApi.md#setWordPressMaintenanceMode) | **PUT** /v2/apps/{app_id}/wordpress/maintenance-mode | Sets the MaintenanceMode for a WordPress installation |
| [**setWordPressSiteurl()**](WordpressApi.md#setWordPressSiteurl) | **PUT** /v2/apps/{app_id}/wordpress/url | Sets the site URL for a WordPress installation |
| [**setWordpressConfig()**](WordpressApi.md#setWordpressConfig) | **PUT** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/wp-config | Set a single value of a wp-config.php entry. |
| [**setWordpressThemeAutoUpdateStatus()**](WordpressApi.md#setWordpressThemeAutoUpdateStatus) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/themes/{theme}/auto_update | Set WordPress theme auto-update status |
| [**updateWordpressAppVersion()**](WordpressApi.md#updateWordpressAppVersion) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/version | Update website WP app to specific version or latest |
| [**updateWordpressPluginSettings()**](WordpressApi.md#updateWordpressPluginSettings) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/plugins/{plugin} | Updates website WordPress plugin settings |
| [**updateWordpressPluginToLatest()**](WordpressApi.md#updateWordpressPluginToLatest) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/plugins/{plugin}/version | Updates website WordPress plugin to latest version |
| [**updateWordpressSettings()**](WordpressApi.md#updateWordpressSettings) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress | Update Wordpress app settings |
| [**updateWordpressTheme()**](WordpressApi.md#updateWordpressTheme) | **POST** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/themes/{theme}/update | Update a WordPress theme |
| [**updateWordpressUser()**](WordpressApi.md#updateWordpressUser) | **PATCH** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/wordpress/users/{user_id} | Update WordPress user |


## `activateWordpressTheme()`

```php
activateWordpressTheme($org_id, $website_id, $app_id, $theme)
```

Activate a WordPress theme

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
$theme = 'theme_example'; // string | The name of the wordpress theme (not file name!).

try {
    $apiInstance->activateWordpressTheme($org_id, $website_id, $app_id, $theme);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->activateWordpressTheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **theme** | **string**| The name of the wordpress theme (not file name!). | |

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

## `deleteWordpressTheme()`

```php
deleteWordpressTheme($org_id, $website_id, $app_id, $theme)
```

Delete a WordPress theme

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
$theme = 'theme_example'; // string | The name of the wordpress theme (not file name!).

try {
    $apiInstance->deleteWordpressTheme($org_id, $website_id, $app_id, $theme);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->deleteWordpressTheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **theme** | **string**| The name of the wordpress theme (not file name!). | |

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

## `getDefaultWpSsoUser()`

```php
getDefaultWpSsoUser($org_id, $website_id, $app_id): \Upmind\EnhanceSdk\Model\WpUser
```



Return previously set default Wordpress SSO user. If WP users exist but none were set to be default, returns 404. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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
    $result = $apiInstance->getDefaultWpSsoUser($org_id, $website_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->getDefaultWpSsoUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |

### Return type

[**\Upmind\EnhanceSdk\Model\WpUser**](../Model/WpUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWordPressMaintenanceMode()`

```php
getWordPressMaintenanceMode($app_id): \Upmind\EnhanceSdk\Model\MaintenanceModeStatus
```

Gets the MaintenanceMode for a WordPress installation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = 'app_id_example'; // string | The id of the app.

try {
    $result = $apiInstance->getWordPressMaintenanceMode($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->getWordPressMaintenanceMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The id of the app. | |

### Return type

[**\Upmind\EnhanceSdk\Model\MaintenanceModeStatus**](../Model/MaintenanceModeStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWordPressSiteurl()`

```php
getWordPressSiteurl($app_id): string
```

Fetches the site URL for a WordPress installation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = 'app_id_example'; // string | The id of the app.

try {
    $result = $apiInstance->getWordPressSiteurl($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->getWordPressSiteurl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The id of the app. | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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

## `getWordpressConfig()`

```php
getWordpressConfig($org_id, $website_id, $app_id, $wp_option): \Upmind\EnhanceSdk\Model\WordpressConfig
```

Get the WP config value for a given option

Returns the value of a wp-config.php entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$wp_option = 'wp_option_example'; // string | The wordpress config option.

try {
    $result = $apiInstance->getWordpressConfig($org_id, $website_id, $app_id, $wp_option);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->getWordpressConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **wp_option** | **string**| The wordpress config option. | |

### Return type

[**\Upmind\EnhanceSdk\Model\WordpressConfig**](../Model/WordpressConfig.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWordpressInstallations()`

```php
getWordpressInstallations($org_id, $website_id): \Upmind\EnhanceSdk\Model\WpInstallation[]
```

Trigger discovery of WP installations

WP installations that were made manually (aside from invoking) orchd APIs aren't immediately discovered by orchd. Invoking this endpoint triggers the discovery and adds installation info to the database.

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

try {
    $result = $apiInstance->getWordpressInstallations($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->getWordpressInstallations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\WpInstallation[]**](../Model/WpInstallation.md)

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
getWordpressThemes($org_id, $website_id, $app_id, $refresh_cache): \Upmind\EnhanceSdk\Model\WpThemesFullListing
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
$refresh_cache = True; // bool | If set to true, it will bypass internal caching.

try {
    $result = $apiInstance->getWordpressThemes($org_id, $website_id, $app_id, $refresh_cache);
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
| **refresh_cache** | **bool**| If set to true, it will bypass internal caching. | [optional] |

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

## `getWordpressUserSsoUrl()`

```php
getWordpressUserSsoUrl($org_id, $website_id, $app_id, $user_id, $should_redirect): string
```

Get SSO URL for a WP user

Session holder must have write access to the website

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
$should_redirect = True; // bool | If set to true, the endpoint will send a 307 redirect to the SSO URL.

try {
    $result = $apiInstance->getWordpressUserSsoUrl($org_id, $website_id, $app_id, $user_id, $should_redirect);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->getWordpressUserSsoUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **user_id** | **int**| The id of the wordpress user. | |
| **should_redirect** | **bool**| If set to true, the endpoint will send a 307 redirect to the SSO URL. | [optional] |

### Return type

**string**

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

## `installWordpressPlugin()`

```php
installWordpressPlugin($org_id, $website_id, $app_id, $install_wp_plugin, $refresh_cache)
```

Install a plugin

Adds a specific plugin to a WordPress installation. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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
$install_wp_plugin = new \Upmind\EnhanceSdk\Model\InstallWpPlugin(); // \Upmind\EnhanceSdk\Model\InstallWpPlugin
$refresh_cache = True; // bool | If set to true, it will bypass internal caching.

try {
    $apiInstance->installWordpressPlugin($org_id, $website_id, $app_id, $install_wp_plugin, $refresh_cache);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->installWordpressPlugin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **install_wp_plugin** | [**\Upmind\EnhanceSdk\Model\InstallWpPlugin**](../Model/InstallWpPlugin.md)|  | |
| **refresh_cache** | **bool**| If set to true, it will bypass internal caching. | [optional] |

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

## `installWordpressTheme()`

```php
installWordpressTheme($org_id, $website_id, $app_id, $install_wp_theme_request, $refresh_cache)
```

Install a WordPress theme

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
$install_wp_theme_request = new \Upmind\EnhanceSdk\Model\InstallWpThemeRequest(); // \Upmind\EnhanceSdk\Model\InstallWpThemeRequest
$refresh_cache = True; // bool | If set to true, it will bypass internal caching.

try {
    $apiInstance->installWordpressTheme($org_id, $website_id, $app_id, $install_wp_theme_request, $refresh_cache);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->installWordpressTheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **install_wp_theme_request** | [**\Upmind\EnhanceSdk\Model\InstallWpThemeRequest**](../Model/InstallWpThemeRequest.md)|  | |
| **refresh_cache** | **bool**| If set to true, it will bypass internal caching. | [optional] |

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

## `setDefaultWpSsoUser()`

```php
setDefaultWpSsoUser($org_id, $website_id, $app_id, $body)
```

Set WP user as the default SSO user for that website.

Idempotently set WP user as the default SSO user for that website. User needs to exist. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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
$body = 3.4; // float

try {
    $apiInstance->setDefaultWpSsoUser($org_id, $website_id, $app_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->setDefaultWpSsoUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **body** | **float**|  | |

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

## `setWordPressMaintenanceMode()`

```php
setWordPressMaintenanceMode($app_id, $body)
```

Sets the MaintenanceMode for a WordPress installation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = 'app_id_example'; // string | The id of the app.
$body = 'body_example'; // string

try {
    $apiInstance->setWordPressMaintenanceMode($app_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->setWordPressMaintenanceMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The id of the app. | |
| **body** | **string**|  | |

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

## `setWordPressSiteurl()`

```php
setWordPressSiteurl($app_id, $body)
```

Sets the site URL for a WordPress installation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = 'app_id_example'; // string | The id of the app.
$body = 'body_example'; // string

try {
    $apiInstance->setWordPressSiteurl($app_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->setWordPressSiteurl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **app_id** | **string**| The id of the app. | |
| **body** | **string**|  | |

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

## `setWordpressConfig()`

```php
setWordpressConfig($org_id, $website_id, $app_id, $wordpress_config)
```

Set a single value of a wp-config.php entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Upmind\EnhanceSdk\Api\WordpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$wordpress_config = new \Upmind\EnhanceSdk\Model\WordpressConfig(); // \Upmind\EnhanceSdk\Model\WordpressConfig

try {
    $apiInstance->setWordpressConfig($org_id, $website_id, $app_id, $wordpress_config);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->setWordpressConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **wordpress_config** | [**\Upmind\EnhanceSdk\Model\WordpressConfig**](../Model/WordpressConfig.md)|  | |

### Return type

void (empty response body)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setWordpressThemeAutoUpdateStatus()`

```php
setWordpressThemeAutoUpdateStatus($org_id, $website_id, $app_id, $theme, $body)
```

Set WordPress theme auto-update status

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
$theme = 'theme_example'; // string | The name of the wordpress theme (not file name!).
$body = True; // bool

try {
    $apiInstance->setWordpressThemeAutoUpdateStatus($org_id, $website_id, $app_id, $theme, $body);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->setWordpressThemeAutoUpdateStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **theme** | **string**| The name of the wordpress theme (not file name!). | |
| **body** | **bool**|  | |

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

## `updateWordpressAppVersion()`

```php
updateWordpressAppVersion($org_id, $website_id, $app_id)
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

try {
    $apiInstance->updateWordpressAppVersion($org_id, $website_id, $app_id);
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

## `updateWordpressTheme()`

```php
updateWordpressTheme($org_id, $website_id, $app_id, $theme)
```

Update a WordPress theme

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
$theme = 'theme_example'; // string | The name of the wordpress theme (not file name!).

try {
    $apiInstance->updateWordpressTheme($org_id, $website_id, $app_id, $theme);
} catch (Exception $e) {
    echo 'Exception when calling WordpressApi->updateWordpressTheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **theme** | **string**| The name of the wordpress theme (not file name!). | |

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
