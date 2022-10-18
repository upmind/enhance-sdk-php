# Upmind\EnhanceSdk\AppsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebsiteApp()**](AppsApi.md#createWebsiteApp) | **POST** /orgs/{org_id}/websites/{website_id}/apps | Create website applications |
| [**deleteWebsiteApp()**](AppsApi.md#deleteWebsiteApp) | **DELETE** /orgs/{org_id}/websites/{website_id}/apps/{app_id} | Delete website app |
| [**getGlobalInstallableApps()**](AppsApi.md#getGlobalInstallableApps) | **GET** /utils/installable-apps | Get all installable applications |
| [**getInstallableApps()**](AppsApi.md#getInstallableApps) | **GET** /orgs/{org_id}/subscriptions/{subscription_id}/installable-apps | Get installable website applications |
| [**getWebsiteApps()**](AppsApi.md#getWebsiteApps) | **GET** /orgs/{org_id}/websites/{website_id}/apps | Get website applications |


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



$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

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



$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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



$apiInstance = new Upmind\EnhanceSdk\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
