# Upmind\EnhanceSdk\AppsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebsiteApp()**](AppsApi.md#createWebsiteApp) | **POST** /orgs/{org_id}/websites/{website_id}/apps | Create website applications |
| [**createWebsitePersistentApp()**](AppsApi.md#createWebsitePersistentApp) | **POST** /websites/{website_id}/apps/persistent | Create a persistent application |
| [**deleteWebsiteApp()**](AppsApi.md#deleteWebsiteApp) | **DELETE** /orgs/{org_id}/websites/{website_id}/apps/{app_id} | Delete website app |
| [**deleteWebsitePersistentApp()**](AppsApi.md#deleteWebsitePersistentApp) | **DELETE** /websites/{website_id}/apps/persistent/{app_id} | Delete a persistent app |
| [**getGlobalInstallableApps()**](AppsApi.md#getGlobalInstallableApps) | **GET** /utils/installable-apps | Get all installable applications |
| [**getInstallableApps()**](AppsApi.md#getInstallableApps) | **GET** /orgs/{org_id}/subscriptions/{subscription_id}/installable-apps | Get installable website applications |
| [**getPossibleNodeVersions()**](AppsApi.md#getPossibleNodeVersions) | **GET** /websites/{website_id}/apps/node/possible_versions | Get possible versions of node to install from nvm |
| [**getWebsiteApps()**](AppsApi.md#getWebsiteApps) | **GET** /orgs/{org_id}/websites/{website_id}/apps | Get website applications |
| [**getWebsitePersistentAppLog()**](AppsApi.md#getWebsitePersistentAppLog) | **GET** /websites/{website_id}/apps/persistent/{app_id} | Get the log for a persistent app |
| [**getWebsitePersistentApps()**](AppsApi.md#getWebsitePersistentApps) | **GET** /websites/{website_id}/apps/persistent | Get website persistent applications |
| [**installNodeVersion()**](AppsApi.md#installNodeVersion) | **POST** /websites/{website_id}/apps/node/versions | Install a specific version of Node with NVM |
| [**installNvm()**](AppsApi.md#installNvm) | **POST** /websites/{website_id}/apps/node | Install nvm and default stable node to this website |
| [**listInstalledNodeVersions()**](AppsApi.md#listInstalledNodeVersions) | **GET** /websites/{website_id}/apps/node/versions | List installed Node versions with NVM |
| [**setDefaultNodeVersion()**](AppsApi.md#setDefaultNodeVersion) | **PUT** /websites/{website_id}/apps/node/versions/default | Set default node version |
| [**updateWebsitePersistentApp()**](AppsApi.md#updateWebsitePersistentApp) | **PATCH** /websites/{website_id}/apps/persistent/{app_id} | Update a persistent application |


## `createWebsiteApp()`

```php
createWebsiteApp($org_id, $website_id, $new_website_app): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Create website applications

Creates a new application for website. Note that if the installed app is WordPress, this endpoint will enable PHP for the website if it isn't already. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$new_website_app = new \Upmind\EnhanceSdk\Model\NewWebsiteApp(); // \Upmind\EnhanceSdk\Model\NewWebsiteApp

try {
    $result = $apiInstance->createWebsiteApp($org_id, $website_id, $new_website_app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->createWebsiteApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **new_website_app** | [**\Upmind\EnhanceSdk\Model\NewWebsiteApp**](../Model/NewWebsiteApp.md)|  | |

### Return type

[**\Upmind\EnhanceSdk\Model\NewResourceUuid**](../Model/NewResourceUuid.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebsitePersistentApp()`

```php
createWebsitePersistentApp($website_id, $persistent_app)
```

Create a persistent application

Create an application that will be started automatically within the website container and restarted if it fails.  Set a port to proxy from the web server to the running application.

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


$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$website_id = 'website_id_example'; // string | The id of the website.
$persistent_app = new \Upmind\EnhanceSdk\Model\PersistentApp(); // \Upmind\EnhanceSdk\Model\PersistentApp

try {
    $apiInstance->createWebsitePersistentApp($website_id, $persistent_app);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->createWebsitePersistentApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **website_id** | **string**| The id of the website. | |
| **persistent_app** | [**\Upmind\EnhanceSdk\Model\PersistentApp**](../Model/PersistentApp.md)|  | |

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

## `deleteWebsiteApp()`

```php
deleteWebsiteApp($org_id, $website_id, $app_id, $backup_before_operation)
```

Delete website app

Deletes an existing website app. Unless `backupBeforeOperation=false` query param is sent, it runs a website backup before deleting the app. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$backup_before_operation = True; // bool | Whether a backup should be ran before the endpoint operation is executed.

try {
    $apiInstance->deleteWebsiteApp($org_id, $website_id, $app_id, $backup_before_operation);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->deleteWebsiteApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **backup_before_operation** | **bool**| Whether a backup should be ran before the endpoint operation is executed. | [optional] |

### Return type

void (empty response body)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebsitePersistentApp()`

```php
deleteWebsitePersistentApp($website_id, $app_id)
```

Delete a persistent app

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


$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.

try {
    $apiInstance->deleteWebsitePersistentApp($website_id, $app_id);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->deleteWebsitePersistentApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |

### Return type

void (empty response body)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGlobalInstallableApps()`

```php
getGlobalInstallableApps(): \Upmind\EnhanceSdk\Model\InstallableWebsiteAppsFullListing
```

Get all installable applications

Returns all installable applications. Note that what apps can be installed on a website is ultimately decided by customer's subscription. See operationId `getInstallableApps`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getGlobalInstallableApps();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getGlobalInstallableApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\InstallableWebsiteAppsFullListing**](../Model/InstallableWebsiteAppsFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstallableApps()`

```php
getInstallableApps($org_id, $subscription_id): \Upmind\EnhanceSdk\Model\InstallableWebsiteAppsFullListing
```

Get installable website applications

Returns all installable applications under the subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$subscription_id = 3.4; // float | The id of the subscription.

try {
    $result = $apiInstance->getInstallableApps($org_id, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getInstallableApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **subscription_id** | **float**| The id of the subscription. | |

### Return type

[**\Upmind\EnhanceSdk\Model\InstallableWebsiteAppsFullListing**](../Model/InstallableWebsiteAppsFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPossibleNodeVersions()`

```php
getPossibleNodeVersions($website_id): string[]
```

Get possible versions of node to install from nvm

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


$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getPossibleNodeVersions($website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getPossibleNodeVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **website_id** | **string**| The id of the website. | |

### Return type

**string[]**

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteApps()`

```php
getWebsiteApps($org_id, $website_id): \Upmind\EnhanceSdk\Model\WebsiteAppsFullListing
```

Get website applications

Returns all applications installed on this website. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsiteApps($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getWebsiteApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\WebsiteAppsFullListing**](../Model/WebsiteAppsFullListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsitePersistentAppLog()`

```php
getWebsitePersistentAppLog($website_id, $app_id): string
```

Get the log for a persistent app

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


$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.

try {
    $result = $apiInstance->getWebsitePersistentAppLog($website_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getWebsitePersistentAppLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |

### Return type

**string**

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsitePersistentApps()`

```php
getWebsitePersistentApps($website_id): \Upmind\EnhanceSdk\Model\ListedPersistentApp[]
```

Get website persistent applications

List all persistent applications belonging to this website

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


$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsitePersistentApps($website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getWebsitePersistentApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\ListedPersistentApp[]**](../Model/ListedPersistentApp.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installNodeVersion()`

```php
installNodeVersion($website_id, $body)
```

Install a specific version of Node with NVM

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


$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$website_id = 'website_id_example'; // string | The id of the website.
$body = 'body_example'; // string

try {
    $apiInstance->installNodeVersion($website_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->installNodeVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **website_id** | **string**| The id of the website. | |
| **body** | **string**|  | |

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

## `installNvm()`

```php
installNvm($website_id)
```

Install nvm and default stable node to this website

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


$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $apiInstance->installNvm($website_id);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->installNvm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **website_id** | **string**| The id of the website. | |

### Return type

void (empty response body)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInstalledNodeVersions()`

```php
listInstalledNodeVersions($website_id): string[]
```

List installed Node versions with NVM

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


$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->listInstalledNodeVersions($website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->listInstalledNodeVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **website_id** | **string**| The id of the website. | |

### Return type

**string[]**

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setDefaultNodeVersion()`

```php
setDefaultNodeVersion($website_id, $body)
```

Set default node version

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


$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$website_id = 'website_id_example'; // string | The id of the website.
$body = 'body_example'; // string

try {
    $apiInstance->setDefaultNodeVersion($website_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->setDefaultNodeVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **website_id** | **string**| The id of the website. | |
| **body** | **string**|  | |

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

## `updateWebsitePersistentApp()`

```php
updateWebsitePersistentApp($website_id, $app_id, $update_persistent_app)
```

Update a persistent application

Update settings for this application, for example startMode

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


$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$update_persistent_app = new \Upmind\EnhanceSdk\Model\UpdatePersistentApp(); // \Upmind\EnhanceSdk\Model\UpdatePersistentApp

try {
    $apiInstance->updateWebsitePersistentApp($website_id, $app_id, $update_persistent_app);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->updateWebsitePersistentApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **update_persistent_app** | [**\Upmind\EnhanceSdk\Model\UpdatePersistentApp**](../Model/UpdatePersistentApp.md)|  | |

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
