# Upmind\EnhanceSdk\SettingsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addOrchdLoginPolicyEmailBlacklist()**](SettingsApi.md#addOrchdLoginPolicyEmailBlacklist) | **PUT** /settings/orchd/login-policy/email-blacklist | Set the orchd login policy email blacklist as a whole |
| [**addOrchdLoginPolicyEmailWhitelist()**](SettingsApi.md#addOrchdLoginPolicyEmailWhitelist) | **PUT** /settings/orchd/login-policy/email-whitelist | Set the orchd login policy email whitelist as a whole |
| [**addOrchdLoginPolicyIpBlacklist()**](SettingsApi.md#addOrchdLoginPolicyIpBlacklist) | **PUT** /settings/orchd/login-policy/ip-blacklist | Set the orchd login policy ip blacklist as a whole |
| [**addOrchdLoginPolicyIpWhitelist()**](SettingsApi.md#addOrchdLoginPolicyIpWhitelist) | **PUT** /settings/orchd/login-policy/ip-whitelist | Set the orchd login policy ip whitelist as a whole |
| [**addOrchdLoginPolicySettings()**](SettingsApi.md#addOrchdLoginPolicySettings) | **PUT** /settings/orchd/login-policy/settings | Set a single orchd login policy setting |
| [**createBackupRemoteStorageS3()**](SettingsApi.md#createBackupRemoteStorageS3) | **POST** /v2/settings/backup/remote_storage/s3 | Create S3 object storage settings at platform level. |
| [**createSettings()**](SettingsApi.md#createSettings) | **POST** /settings | Create settings |
| [**deleteBackupRemoteStorageS3()**](SettingsApi.md#deleteBackupRemoteStorageS3) | **DELETE** /v2/settings/backup/remote_storage/s3 | Delete S3 object storage settings at platform level. |
| [**deleteGlobalServiceSetting()**](SettingsApi.md#deleteGlobalServiceSetting) | **DELETE** /settings/service/{setting_kind}/{setting_key} | Delete a single global service setting |
| [**deleteOrchdLoginPolicyEmailBlacklist()**](SettingsApi.md#deleteOrchdLoginPolicyEmailBlacklist) | **DELETE** /settings/orchd/login-policy/email-blacklist | Delete an orchd login policy email blacklist |
| [**deleteOrchdLoginPolicyEmailWhitelist()**](SettingsApi.md#deleteOrchdLoginPolicyEmailWhitelist) | **DELETE** /settings/orchd/login-policy/email-whitelist | Delete an orchd login policy email whitelist |
| [**deleteOrchdLoginPolicyIpBlacklist()**](SettingsApi.md#deleteOrchdLoginPolicyIpBlacklist) | **DELETE** /settings/orchd/login-policy/ip-blacklist | Delete an orchd login policy ip blacklist |
| [**deleteOrchdLoginPolicyIpWhitelist()**](SettingsApi.md#deleteOrchdLoginPolicyIpWhitelist) | **DELETE** /settings/orchd/login-policy/ip-whitelist | Delete an orchd login policy ip whitelist |
| [**deleteSetting()**](SettingsApi.md#deleteSetting) | **DELETE** /settings/{name} | Remove the specified setting |
| [**getBackupRemoteStorageS3()**](SettingsApi.md#getBackupRemoteStorageS3) | **GET** /v2/settings/backup/remote_storage/s3 | Get S3 object storage settings at platform level. |
| [**getDemoMode()**](SettingsApi.md#getDemoMode) | **GET** /v2/settings/demo_mode | Get the demo mode status of the orchd service |
| [**getGlobalServiceSetting()**](SettingsApi.md#getGlobalServiceSetting) | **GET** /settings/service/{setting_kind} | Get the value for a particular global service setting |
| [**getOrchdLogSettings()**](SettingsApi.md#getOrchdLogSettings) | **GET** /settings/orchd/logs | Get the orchd log settings |
| [**getOrchdLoginPolicyEmailBlacklist()**](SettingsApi.md#getOrchdLoginPolicyEmailBlacklist) | **GET** /settings/orchd/login-policy/email-blacklist | Get the orchd login policy email blacklist |
| [**getOrchdLoginPolicyEmailWhitelist()**](SettingsApi.md#getOrchdLoginPolicyEmailWhitelist) | **GET** /settings/orchd/login-policy/email-whitelist | Get the orchd login policy email whitelist |
| [**getOrchdLoginPolicyIpBlacklist()**](SettingsApi.md#getOrchdLoginPolicyIpBlacklist) | **GET** /settings/orchd/login-policy/ip-blacklist | Get the orchd login policy ip blacklist |
| [**getOrchdLoginPolicyIpWhitelist()**](SettingsApi.md#getOrchdLoginPolicyIpWhitelist) | **GET** /settings/orchd/login-policy/ip-whitelist | Get the orchd login policy ip whitelist |
| [**getOrchdLoginPolicySettings()**](SettingsApi.md#getOrchdLoginPolicySettings) | **GET** /settings/orchd/login-policy/settings | Get the orchd login policy settings |
| [**getProhibitedDomains()**](SettingsApi.md#getProhibitedDomains) | **GET** /settings/orchd/prohibited_domains | Get the platform level prohibited domains as a newline separated list |
| [**getSetting()**](SettingsApi.md#getSetting) | **GET** /settings/{name} | Get the specified setting |
| [**getSettings()**](SettingsApi.md#getSettings) | **GET** /settings | Get all current settings |
| [**setGlobalServiceSetting()**](SettingsApi.md#setGlobalServiceSetting) | **PUT** /settings/service/{setting_kind}/{setting_key} | Set a single global service setting |
| [**setOrchdLogSettings()**](SettingsApi.md#setOrchdLogSettings) | **PUT** /settings/orchd/logs | Set the orchd log settings |
| [**setProhibitedDomains()**](SettingsApi.md#setProhibitedDomains) | **PUT** /settings/orchd/prohibited_domains | Set the platform level prohibited domains |
| [**updateBackupRemoteStorageS3()**](SettingsApi.md#updateBackupRemoteStorageS3) | **PATCH** /v2/settings/backup/remote_storage/s3 | Update S3 object storage settings at platform level. |
| [**updateSetting()**](SettingsApi.md#updateSetting) | **PUT** /settings/{name} | Create or update the specified setting |


## `addOrchdLoginPolicyEmailBlacklist()`

```php
addOrchdLoginPolicyEmailBlacklist($orchd_login_policy_email_list)
```

Set the orchd login policy email blacklist as a whole

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orchd_login_policy_email_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList

try {
    $apiInstance->addOrchdLoginPolicyEmailBlacklist($orchd_login_policy_email_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->addOrchdLoginPolicyEmailBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_email_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList**](../Model/OrchdLoginPolicyEmailList.md)|  | |

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

## `addOrchdLoginPolicyEmailWhitelist()`

```php
addOrchdLoginPolicyEmailWhitelist($orchd_login_policy_email_list)
```

Set the orchd login policy email whitelist as a whole

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orchd_login_policy_email_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList

try {
    $apiInstance->addOrchdLoginPolicyEmailWhitelist($orchd_login_policy_email_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->addOrchdLoginPolicyEmailWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_email_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList**](../Model/OrchdLoginPolicyEmailList.md)|  | |

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

## `addOrchdLoginPolicyIpBlacklist()`

```php
addOrchdLoginPolicyIpBlacklist($orchd_login_policy_ip_list)
```

Set the orchd login policy ip blacklist as a whole

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orchd_login_policy_ip_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList

try {
    $apiInstance->addOrchdLoginPolicyIpBlacklist($orchd_login_policy_ip_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->addOrchdLoginPolicyIpBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_ip_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList**](../Model/OrchdLoginPolicyIpList.md)|  | |

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

## `addOrchdLoginPolicyIpWhitelist()`

```php
addOrchdLoginPolicyIpWhitelist($orchd_login_policy_ip_list)
```

Set the orchd login policy ip whitelist as a whole

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orchd_login_policy_ip_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList

try {
    $apiInstance->addOrchdLoginPolicyIpWhitelist($orchd_login_policy_ip_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->addOrchdLoginPolicyIpWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_ip_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList**](../Model/OrchdLoginPolicyIpList.md)|  | |

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

## `addOrchdLoginPolicySettings()`

```php
addOrchdLoginPolicySettings($orchd_login_policy_settings)
```

Set a single orchd login policy setting

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orchd_login_policy_settings = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicySettings(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicySettings

try {
    $apiInstance->addOrchdLoginPolicySettings($orchd_login_policy_settings);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->addOrchdLoginPolicySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_settings** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicySettings**](../Model/OrchdLoginPolicySettings.md)|  | |

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

## `createBackupRemoteStorageS3()`

```php
createBackupRemoteStorageS3($create_backup_remote_storage_s3)
```

Create S3 object storage settings at platform level.

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_backup_remote_storage_s3 = new \Upmind\EnhanceSdk\Model\CreateBackupRemoteStorageS3(); // \Upmind\EnhanceSdk\Model\CreateBackupRemoteStorageS3

try {
    $apiInstance->createBackupRemoteStorageS3($create_backup_remote_storage_s3);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->createBackupRemoteStorageS3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_backup_remote_storage_s3** | [**\Upmind\EnhanceSdk\Model\CreateBackupRemoteStorageS3**](../Model/CreateBackupRemoteStorageS3.md)|  | |

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

## `createSettings()`

```php
createSettings($setting)
```

Create settings

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting = array(new \Upmind\EnhanceSdk\Model\Setting()); // \Upmind\EnhanceSdk\Model\Setting[]

try {
    $apiInstance->createSettings($setting);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->createSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setting** | [**\Upmind\EnhanceSdk\Model\Setting[]**](../Model/Setting.md)|  | |

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

## `deleteBackupRemoteStorageS3()`

```php
deleteBackupRemoteStorageS3()
```

Delete S3 object storage settings at platform level.

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteBackupRemoteStorageS3();
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->deleteBackupRemoteStorageS3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `deleteGlobalServiceSetting()`

```php
deleteGlobalServiceSetting($setting_kind, $setting_key): \Upmind\EnhanceSdk\Model\Outcome
```

Delete a single global service setting

Delete a single global service setting value

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_kind = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\SettingKind(); // \Upmind\EnhanceSdk\Model\SettingKind | The type of setting being applied
$setting_key = 'setting_key_example'; // string | A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup - default_dns_ttl

try {
    $result = $apiInstance->deleteGlobalServiceSetting($setting_kind, $setting_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->deleteGlobalServiceSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setting_kind** | [**\Upmind\EnhanceSdk\Model\SettingKind**](../Model/.md)| The type of setting being applied | |
| **setting_key** | **string**| A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup - default_dns_ttl | |

### Return type

[**\Upmind\EnhanceSdk\Model\Outcome**](../Model/Outcome.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrchdLoginPolicyEmailBlacklist()`

```php
deleteOrchdLoginPolicyEmailBlacklist($orchd_login_policy_email_list)
```

Delete an orchd login policy email blacklist

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orchd_login_policy_email_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList

try {
    $apiInstance->deleteOrchdLoginPolicyEmailBlacklist($orchd_login_policy_email_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->deleteOrchdLoginPolicyEmailBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_email_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList**](../Model/OrchdLoginPolicyEmailList.md)|  | |

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

## `deleteOrchdLoginPolicyEmailWhitelist()`

```php
deleteOrchdLoginPolicyEmailWhitelist($orchd_login_policy_email_list)
```

Delete an orchd login policy email whitelist

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orchd_login_policy_email_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList

try {
    $apiInstance->deleteOrchdLoginPolicyEmailWhitelist($orchd_login_policy_email_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->deleteOrchdLoginPolicyEmailWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_email_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList**](../Model/OrchdLoginPolicyEmailList.md)|  | |

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

## `deleteOrchdLoginPolicyIpBlacklist()`

```php
deleteOrchdLoginPolicyIpBlacklist($orchd_login_policy_ip_list)
```

Delete an orchd login policy ip blacklist

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orchd_login_policy_ip_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList

try {
    $apiInstance->deleteOrchdLoginPolicyIpBlacklist($orchd_login_policy_ip_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->deleteOrchdLoginPolicyIpBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_ip_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList**](../Model/OrchdLoginPolicyIpList.md)|  | |

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

## `deleteOrchdLoginPolicyIpWhitelist()`

```php
deleteOrchdLoginPolicyIpWhitelist($orchd_login_policy_ip_list)
```

Delete an orchd login policy ip whitelist

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orchd_login_policy_ip_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList

try {
    $apiInstance->deleteOrchdLoginPolicyIpWhitelist($orchd_login_policy_ip_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->deleteOrchdLoginPolicyIpWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_ip_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList**](../Model/OrchdLoginPolicyIpList.md)|  | |

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

## `deleteSetting()`

```php
deleteSetting($name)
```

Remove the specified setting

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the resource.

try {
    $apiInstance->deleteSetting($name);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->deleteSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the resource. | |

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

## `getBackupRemoteStorageS3()`

```php
getBackupRemoteStorageS3(): \Upmind\EnhanceSdk\Model\BackupRemoteStorageS3
```

Get S3 object storage settings at platform level.

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBackupRemoteStorageS3();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getBackupRemoteStorageS3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\BackupRemoteStorageS3**](../Model/BackupRemoteStorageS3.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDemoMode()`

```php
getDemoMode(): \Upmind\EnhanceSdk\Model\DemoMode
```

Get the demo mode status of the orchd service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getDemoMode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getDemoMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\DemoMode**](../Model/DemoMode.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGlobalServiceSetting()`

```php
getGlobalServiceSetting($setting_kind): mixed
```

Get the value for a particular global service setting

Returns the value for a particular global service setting as a JSON object

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_kind = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\SettingKind(); // \Upmind\EnhanceSdk\Model\SettingKind | The type of setting being applied

try {
    $result = $apiInstance->getGlobalServiceSetting($setting_kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getGlobalServiceSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setting_kind** | [**\Upmind\EnhanceSdk\Model\SettingKind**](../Model/.md)| The type of setting being applied | |

### Return type

**mixed**

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrchdLogSettings()`

```php
getOrchdLogSettings(): \Upmind\EnhanceSdk\Model\OrchdLogSettings
```

Get the orchd log settings

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrchdLogSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getOrchdLogSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\OrchdLogSettings**](../Model/OrchdLogSettings.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrchdLoginPolicyEmailBlacklist()`

```php
getOrchdLoginPolicyEmailBlacklist(): \Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList
```

Get the orchd login policy email blacklist

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrchdLoginPolicyEmailBlacklist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getOrchdLoginPolicyEmailBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList**](../Model/OrchdLoginPolicyEmailList.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrchdLoginPolicyEmailWhitelist()`

```php
getOrchdLoginPolicyEmailWhitelist(): \Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList
```

Get the orchd login policy email whitelist

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrchdLoginPolicyEmailWhitelist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getOrchdLoginPolicyEmailWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyEmailList**](../Model/OrchdLoginPolicyEmailList.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrchdLoginPolicyIpBlacklist()`

```php
getOrchdLoginPolicyIpBlacklist(): \Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList
```

Get the orchd login policy ip blacklist

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrchdLoginPolicyIpBlacklist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getOrchdLoginPolicyIpBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList**](../Model/OrchdLoginPolicyIpList.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrchdLoginPolicyIpWhitelist()`

```php
getOrchdLoginPolicyIpWhitelist(): \Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList
```

Get the orchd login policy ip whitelist

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrchdLoginPolicyIpWhitelist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getOrchdLoginPolicyIpWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyIpList**](../Model/OrchdLoginPolicyIpList.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrchdLoginPolicySettings()`

```php
getOrchdLoginPolicySettings(): \Upmind\EnhanceSdk\Model\OrchdLoginPolicySettings
```

Get the orchd login policy settings

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrchdLoginPolicySettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getOrchdLoginPolicySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\OrchdLoginPolicySettings**](../Model/OrchdLoginPolicySettings.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProhibitedDomains()`

```php
getProhibitedDomains(): string
```

Get the platform level prohibited domains as a newline separated list

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProhibitedDomains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getProhibitedDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getSetting()`

```php
getSetting($name): \Upmind\EnhanceSdk\Model\Setting
```

Get the specified setting

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the resource.

try {
    $result = $apiInstance->getSetting($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the resource. | |

### Return type

[**\Upmind\EnhanceSdk\Model\Setting**](../Model/Setting.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSettings()`

```php
getSettings(): \Upmind\EnhanceSdk\Model\SettingsFullListing
```

Get all current settings

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\SettingsFullListing**](../Model/SettingsFullListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setGlobalServiceSetting()`

```php
setGlobalServiceSetting($setting_kind, $setting_key, $service_setting_value): \Upmind\EnhanceSdk\Model\Outcome
```

Set a single global service setting

Set or replace a single global service setting

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_kind = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\SettingKind(); // \Upmind\EnhanceSdk\Model\SettingKind | The type of setting being applied
$setting_key = 'setting_key_example'; // string | A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup - default_dns_ttl
$service_setting_value = new \Upmind\EnhanceSdk\Model\ServiceSettingValue(); // \Upmind\EnhanceSdk\Model\ServiceSettingValue

try {
    $result = $apiInstance->setGlobalServiceSetting($setting_kind, $setting_key, $service_setting_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setGlobalServiceSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setting_kind** | [**\Upmind\EnhanceSdk\Model\SettingKind**](../Model/.md)| The type of setting being applied | |
| **setting_key** | **string**| A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup - default_dns_ttl | |
| **service_setting_value** | [**\Upmind\EnhanceSdk\Model\ServiceSettingValue**](../Model/ServiceSettingValue.md)|  | |

### Return type

[**\Upmind\EnhanceSdk\Model\Outcome**](../Model/Outcome.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setOrchdLogSettings()`

```php
setOrchdLogSettings($orchd_log_settings)
```

Set the orchd log settings

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orchd_log_settings = new \Upmind\EnhanceSdk\Model\OrchdLogSettings(); // \Upmind\EnhanceSdk\Model\OrchdLogSettings

try {
    $apiInstance->setOrchdLogSettings($orchd_log_settings);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setOrchdLogSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_log_settings** | [**\Upmind\EnhanceSdk\Model\OrchdLogSettings**](../Model/OrchdLogSettings.md)|  | |

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

## `setProhibitedDomains()`

```php
setProhibitedDomains($body)
```

Set the platform level prohibited domains

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->setProhibitedDomains($body);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setProhibitedDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `updateBackupRemoteStorageS3()`

```php
updateBackupRemoteStorageS3($update_backup_remote_storage_s3)
```

Update S3 object storage settings at platform level.

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_backup_remote_storage_s3 = new \Upmind\EnhanceSdk\Model\UpdateBackupRemoteStorageS3(); // \Upmind\EnhanceSdk\Model\UpdateBackupRemoteStorageS3

try {
    $apiInstance->updateBackupRemoteStorageS3($update_backup_remote_storage_s3);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateBackupRemoteStorageS3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_backup_remote_storage_s3** | [**\Upmind\EnhanceSdk\Model\UpdateBackupRemoteStorageS3**](../Model/UpdateBackupRemoteStorageS3.md)|  | |

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

## `updateSetting()`

```php
updateSetting($name, $update_setting_request)
```

Create or update the specified setting

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


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the resource.
$update_setting_request = new \Upmind\EnhanceSdk\Model\UpdateSettingRequest(); // \Upmind\EnhanceSdk\Model\UpdateSettingRequest

try {
    $apiInstance->updateSetting($name, $update_setting_request);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the resource. | |
| **update_setting_request** | [**\Upmind\EnhanceSdk\Model\UpdateSettingRequest**](../Model/UpdateSettingRequest.md)|  | |

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
