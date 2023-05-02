# Upmind\EnhanceSdk\SettingsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSettings()**](SettingsApi.md#createSettings) | **POST** /settings | Create settings |
| [**deleteGlobalServiceSetting()**](SettingsApi.md#deleteGlobalServiceSetting) | **DELETE** /settings/service/{setting_kind}/{setting_key} | Delete a single global service setting |
| [**deleteOrchdLoginPolicyEmailBlacklist()**](SettingsApi.md#deleteOrchdLoginPolicyEmailBlacklist) | **DELETE** /settings/orchd/login-policy/email-blacklist | Delete an orchd login policy email blacklist |
| [**deleteOrchdLoginPolicyEmailWhitelist()**](SettingsApi.md#deleteOrchdLoginPolicyEmailWhitelist) | **DELETE** /settings/orchd/login-policy/email-whitelist | Delete an orchd login policy email whitelist |
| [**deleteOrchdLoginPolicyIpBlacklist()**](SettingsApi.md#deleteOrchdLoginPolicyIpBlacklist) | **DELETE** /settings/orchd/login-policy/ip-blacklist | Delete an orchd login policy ip blacklist |
| [**deleteOrchdLoginPolicyIpWhitelist()**](SettingsApi.md#deleteOrchdLoginPolicyIpWhitelist) | **DELETE** /settings/orchd/login-policy/ip-whitelist | Delete an orchd login policy ip whitelist |
| [**deleteOrchdLoginPolicyTemporaryEmailBlacklist()**](SettingsApi.md#deleteOrchdLoginPolicyTemporaryEmailBlacklist) | **DELETE** /settings/orchd/login-policy/temporary/email-blacklist | Delete an orchd login policy temporary email blacklist |
| [**deleteOrchdLoginPolicyTemporaryEmailWhitelist()**](SettingsApi.md#deleteOrchdLoginPolicyTemporaryEmailWhitelist) | **DELETE** /settings/orchd/login-policy/temporary/email-whitelist | Delete an orchd login policy temporary email whitelist |
| [**deleteOrchdLoginPolicyTemporaryIpBlacklist()**](SettingsApi.md#deleteOrchdLoginPolicyTemporaryIpBlacklist) | **DELETE** /settings/orchd/login-policy/temporary/ip-blacklist | Delete an orchd login policy temporary ip blacklist |
| [**deleteOrchdLoginPolicyTemporaryIpWhitelist()**](SettingsApi.md#deleteOrchdLoginPolicyTemporaryIpWhitelist) | **DELETE** /settings/orchd/login-policy/temporary/ip-whitelist | Delete an orchd login policy temporary ip whitelist |
| [**deleteSetting()**](SettingsApi.md#deleteSetting) | **DELETE** /settings/{name} | Remove the specified setting |
| [**getDockerRegistry()**](SettingsApi.md#getDockerRegistry) | **GET** /settings/registry | Gets the Docker registry credentials. |
| [**getGlobalServiceSetting()**](SettingsApi.md#getGlobalServiceSetting) | **GET** /settings/service/{setting_kind} | Get the value for a particular global service setting |
| [**getOrchdLogSettings()**](SettingsApi.md#getOrchdLogSettings) | **GET** /settings/orchd/logs | Get the orchd log settings |
| [**getOrchdLoginPolicyEmailBlacklist()**](SettingsApi.md#getOrchdLoginPolicyEmailBlacklist) | **GET** /settings/orchd/login-policy/email-blacklist | Get the orchd login policy email blacklist |
| [**getOrchdLoginPolicyEmailWhitelist()**](SettingsApi.md#getOrchdLoginPolicyEmailWhitelist) | **GET** /settings/orchd/login-policy/email-whitelist | Get the orchd login policy email whitelist |
| [**getOrchdLoginPolicyIpBlacklist()**](SettingsApi.md#getOrchdLoginPolicyIpBlacklist) | **GET** /settings/orchd/login-policy/ip-blacklist | Get the orchd login policy ip blacklist |
| [**getOrchdLoginPolicyIpWhitelist()**](SettingsApi.md#getOrchdLoginPolicyIpWhitelist) | **GET** /settings/orchd/login-policy/ip-whitelist | Get the orchd login policy ip whitelist |
| [**getOrchdLoginPolicySettings()**](SettingsApi.md#getOrchdLoginPolicySettings) | **GET** /settings/orchd/login-policy/settings | Get the orchd login policy settings |
| [**getOrchdLoginPolicyTemporaryEmailBlacklist()**](SettingsApi.md#getOrchdLoginPolicyTemporaryEmailBlacklist) | **GET** /settings/orchd/login-policy/temporary/email-blacklist | Get the orchd login policy temporary email blacklist |
| [**getOrchdLoginPolicyTemporaryEmailWhitelist()**](SettingsApi.md#getOrchdLoginPolicyTemporaryEmailWhitelist) | **GET** /settings/orchd/login-policy/temporary/email-whitelist | Get the orchd login policy temporary email whitelist |
| [**getOrchdLoginPolicyTemporaryIpBlacklist()**](SettingsApi.md#getOrchdLoginPolicyTemporaryIpBlacklist) | **GET** /settings/orchd/login-policy/temporary/ip-blacklist | Get the orchd login policy temporary ip blacklist |
| [**getOrchdLoginPolicyTemporaryIpWhitelist()**](SettingsApi.md#getOrchdLoginPolicyTemporaryIpWhitelist) | **GET** /settings/orchd/login-policy/temporary/ip-whitelist | Get the orchd login policy temporary ip whitelist |
| [**getSetting()**](SettingsApi.md#getSetting) | **GET** /settings/{name} | Get the specified setting |
| [**getSettings()**](SettingsApi.md#getSettings) | **GET** /settings | Get all current settings |
| [**setDockerRegistry()**](SettingsApi.md#setDockerRegistry) | **PUT** /settings/registry | Updates the Docker registry credentials. |
| [**setGlobalServiceSetting()**](SettingsApi.md#setGlobalServiceSetting) | **PUT** /settings/service/{setting_kind}/{setting_key} | Set a single global service setting |
| [**setOrchdLogSettings()**](SettingsApi.md#setOrchdLogSettings) | **PUT** /settings/orchd/logs | Set the orchd log settings |
| [**setOrchdLoginPolicyEmailBlacklist()**](SettingsApi.md#setOrchdLoginPolicyEmailBlacklist) | **PUT** /settings/orchd/login-policy/email-blacklist | Set the orchd login policy email blacklist as a whole |
| [**setOrchdLoginPolicyEmailWhitelist()**](SettingsApi.md#setOrchdLoginPolicyEmailWhitelist) | **PUT** /settings/orchd/login-policy/email-whitelist | Set the orchd login policy email whitelist as a whole |
| [**setOrchdLoginPolicyIpBlacklist()**](SettingsApi.md#setOrchdLoginPolicyIpBlacklist) | **PUT** /settings/orchd/login-policy/ip-blacklist | Set the orchd login policy ip blacklist as a whole |
| [**setOrchdLoginPolicyIpWhitelist()**](SettingsApi.md#setOrchdLoginPolicyIpWhitelist) | **PUT** /settings/orchd/login-policy/ip-whitelist | Set the orchd login policy ip whitelist as a whole |
| [**setOrchdLoginPolicySettings()**](SettingsApi.md#setOrchdLoginPolicySettings) | **PUT** /settings/orchd/login-policy/settings | Set a single orchd login policy setting |
| [**setOrchdLoginPolicyTemporaryEmailBlacklist()**](SettingsApi.md#setOrchdLoginPolicyTemporaryEmailBlacklist) | **PUT** /settings/orchd/login-policy/temporary/email-blacklist | Set the orchd login policy temporary whitelist as a whole |
| [**setOrchdLoginPolicyTemporaryEmailWhitelist()**](SettingsApi.md#setOrchdLoginPolicyTemporaryEmailWhitelist) | **PUT** /settings/orchd/login-policy/temporary/email-whitelist | Set the orchd login policy temporary email whitelist as a whole |
| [**setOrchdLoginPolicyTemporaryIpBlacklist()**](SettingsApi.md#setOrchdLoginPolicyTemporaryIpBlacklist) | **PUT** /settings/orchd/login-policy/temporary/ip-blacklist | Set the orchd login policy temporary ip blacklist as a whole |
| [**setOrchdLoginPolicyTemporaryIpWhitelist()**](SettingsApi.md#setOrchdLoginPolicyTemporaryIpWhitelist) | **PUT** /settings/orchd/login-policy/temporary/ip-whitelist | Set the orchd login policy temporary ip whitelist as a whole |
| [**updateSetting()**](SettingsApi.md#updateSetting) | **PUT** /settings/{name} | Create or update the specified setting |


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
$setting_kind = new \Upmind\EnhanceSdk\Model\SettingKind(); // SettingKind | The type of setting being applied
$setting_key = 'setting_key_example'; // string | A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - myhostname - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup

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
| **setting_kind** | [**SettingKind**](../Model/.md)| The type of setting being applied | |
| **setting_key** | **string**| A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - myhostname - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup | |

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

## `deleteOrchdLoginPolicyTemporaryEmailBlacklist()`

```php
deleteOrchdLoginPolicyTemporaryEmailBlacklist($orchd_login_policy_temporary_email_list)
```

Delete an orchd login policy temporary email blacklist

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
$orchd_login_policy_temporary_email_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList

try {
    $apiInstance->deleteOrchdLoginPolicyTemporaryEmailBlacklist($orchd_login_policy_temporary_email_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->deleteOrchdLoginPolicyTemporaryEmailBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_temporary_email_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList**](../Model/OrchdLoginPolicyTemporaryEmailList.md)|  | |

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

## `deleteOrchdLoginPolicyTemporaryEmailWhitelist()`

```php
deleteOrchdLoginPolicyTemporaryEmailWhitelist($orchd_login_policy_temporary_email_list)
```

Delete an orchd login policy temporary email whitelist

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
$orchd_login_policy_temporary_email_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList

try {
    $apiInstance->deleteOrchdLoginPolicyTemporaryEmailWhitelist($orchd_login_policy_temporary_email_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->deleteOrchdLoginPolicyTemporaryEmailWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_temporary_email_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList**](../Model/OrchdLoginPolicyTemporaryEmailList.md)|  | |

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

## `deleteOrchdLoginPolicyTemporaryIpBlacklist()`

```php
deleteOrchdLoginPolicyTemporaryIpBlacklist($orchd_login_policy_temporary_ip_list)
```

Delete an orchd login policy temporary ip blacklist

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
$orchd_login_policy_temporary_ip_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList

try {
    $apiInstance->deleteOrchdLoginPolicyTemporaryIpBlacklist($orchd_login_policy_temporary_ip_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->deleteOrchdLoginPolicyTemporaryIpBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_temporary_ip_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList**](../Model/OrchdLoginPolicyTemporaryIpList.md)|  | |

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

## `deleteOrchdLoginPolicyTemporaryIpWhitelist()`

```php
deleteOrchdLoginPolicyTemporaryIpWhitelist($orchd_login_policy_temporary_ip_list)
```

Delete an orchd login policy temporary ip whitelist

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
$orchd_login_policy_temporary_ip_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList

try {
    $apiInstance->deleteOrchdLoginPolicyTemporaryIpWhitelist($orchd_login_policy_temporary_ip_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->deleteOrchdLoginPolicyTemporaryIpWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_temporary_ip_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList**](../Model/OrchdLoginPolicyTemporaryIpList.md)|  | |

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

## `getDockerRegistry()`

```php
getDockerRegistry(): \Upmind\EnhanceSdk\Model\DockerRegistry
```

Gets the Docker registry credentials.

Gets the Docker registry credentials.

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
    $result = $apiInstance->getDockerRegistry();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getDockerRegistry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\DockerRegistry**](../Model/DockerRegistry.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

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
$setting_kind = new \Upmind\EnhanceSdk\Model\SettingKind(); // SettingKind | The type of setting being applied

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
| **setting_kind** | [**SettingKind**](../Model/.md)| The type of setting being applied | |

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

## `getOrchdLoginPolicyTemporaryEmailBlacklist()`

```php
getOrchdLoginPolicyTemporaryEmailBlacklist(): \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList
```

Get the orchd login policy temporary email blacklist

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
    $result = $apiInstance->getOrchdLoginPolicyTemporaryEmailBlacklist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getOrchdLoginPolicyTemporaryEmailBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList**](../Model/OrchdLoginPolicyTemporaryEmailList.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrchdLoginPolicyTemporaryEmailWhitelist()`

```php
getOrchdLoginPolicyTemporaryEmailWhitelist(): \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList
```

Get the orchd login policy temporary email whitelist

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
    $result = $apiInstance->getOrchdLoginPolicyTemporaryEmailWhitelist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getOrchdLoginPolicyTemporaryEmailWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList**](../Model/OrchdLoginPolicyTemporaryEmailList.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrchdLoginPolicyTemporaryIpBlacklist()`

```php
getOrchdLoginPolicyTemporaryIpBlacklist(): \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList
```

Get the orchd login policy temporary ip blacklist

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
    $result = $apiInstance->getOrchdLoginPolicyTemporaryIpBlacklist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getOrchdLoginPolicyTemporaryIpBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList**](../Model/OrchdLoginPolicyTemporaryIpList.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrchdLoginPolicyTemporaryIpWhitelist()`

```php
getOrchdLoginPolicyTemporaryIpWhitelist(): \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList
```

Get the orchd login policy temporary ip whitelist

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
    $result = $apiInstance->getOrchdLoginPolicyTemporaryIpWhitelist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getOrchdLoginPolicyTemporaryIpWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList**](../Model/OrchdLoginPolicyTemporaryIpList.md)

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

## `setDockerRegistry()`

```php
setDockerRegistry($docker_registry)
```

Updates the Docker registry credentials.

Sets the Docker registry credentials, overwriting any previous one if one exists.

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
$docker_registry = new \Upmind\EnhanceSdk\Model\DockerRegistry(); // \Upmind\EnhanceSdk\Model\DockerRegistry

try {
    $apiInstance->setDockerRegistry($docker_registry);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setDockerRegistry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **docker_registry** | [**\Upmind\EnhanceSdk\Model\DockerRegistry**](../Model/DockerRegistry.md)|  | [optional] |

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
$setting_kind = new \Upmind\EnhanceSdk\Model\SettingKind(); // SettingKind | The type of setting being applied
$setting_key = 'setting_key_example'; // string | A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - myhostname - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup
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
| **setting_kind** | [**SettingKind**](../Model/.md)| The type of setting being applied | |
| **setting_key** | **string**| A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - myhostname - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup | |
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

## `setOrchdLoginPolicyEmailBlacklist()`

```php
setOrchdLoginPolicyEmailBlacklist($orchd_login_policy_email_list)
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
    $apiInstance->setOrchdLoginPolicyEmailBlacklist($orchd_login_policy_email_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setOrchdLoginPolicyEmailBlacklist: ', $e->getMessage(), PHP_EOL;
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

## `setOrchdLoginPolicyEmailWhitelist()`

```php
setOrchdLoginPolicyEmailWhitelist($orchd_login_policy_email_list)
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
    $apiInstance->setOrchdLoginPolicyEmailWhitelist($orchd_login_policy_email_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setOrchdLoginPolicyEmailWhitelist: ', $e->getMessage(), PHP_EOL;
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

## `setOrchdLoginPolicyIpBlacklist()`

```php
setOrchdLoginPolicyIpBlacklist($orchd_login_policy_ip_list)
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
    $apiInstance->setOrchdLoginPolicyIpBlacklist($orchd_login_policy_ip_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setOrchdLoginPolicyIpBlacklist: ', $e->getMessage(), PHP_EOL;
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

## `setOrchdLoginPolicyIpWhitelist()`

```php
setOrchdLoginPolicyIpWhitelist($orchd_login_policy_ip_list)
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
    $apiInstance->setOrchdLoginPolicyIpWhitelist($orchd_login_policy_ip_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setOrchdLoginPolicyIpWhitelist: ', $e->getMessage(), PHP_EOL;
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

## `setOrchdLoginPolicySettings()`

```php
setOrchdLoginPolicySettings($orchd_login_policy_settings)
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
    $apiInstance->setOrchdLoginPolicySettings($orchd_login_policy_settings);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setOrchdLoginPolicySettings: ', $e->getMessage(), PHP_EOL;
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

## `setOrchdLoginPolicyTemporaryEmailBlacklist()`

```php
setOrchdLoginPolicyTemporaryEmailBlacklist($orchd_login_policy_temporary_email_list)
```

Set the orchd login policy temporary whitelist as a whole

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
$orchd_login_policy_temporary_email_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList

try {
    $apiInstance->setOrchdLoginPolicyTemporaryEmailBlacklist($orchd_login_policy_temporary_email_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setOrchdLoginPolicyTemporaryEmailBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_temporary_email_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList**](../Model/OrchdLoginPolicyTemporaryEmailList.md)|  | |

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

## `setOrchdLoginPolicyTemporaryEmailWhitelist()`

```php
setOrchdLoginPolicyTemporaryEmailWhitelist($orchd_login_policy_temporary_email_list)
```

Set the orchd login policy temporary email whitelist as a whole

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
$orchd_login_policy_temporary_email_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList

try {
    $apiInstance->setOrchdLoginPolicyTemporaryEmailWhitelist($orchd_login_policy_temporary_email_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setOrchdLoginPolicyTemporaryEmailWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_temporary_email_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryEmailList**](../Model/OrchdLoginPolicyTemporaryEmailList.md)|  | |

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

## `setOrchdLoginPolicyTemporaryIpBlacklist()`

```php
setOrchdLoginPolicyTemporaryIpBlacklist($orchd_login_policy_temporary_ip_list)
```

Set the orchd login policy temporary ip blacklist as a whole

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
$orchd_login_policy_temporary_ip_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList

try {
    $apiInstance->setOrchdLoginPolicyTemporaryIpBlacklist($orchd_login_policy_temporary_ip_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setOrchdLoginPolicyTemporaryIpBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_temporary_ip_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList**](../Model/OrchdLoginPolicyTemporaryIpList.md)|  | |

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

## `setOrchdLoginPolicyTemporaryIpWhitelist()`

```php
setOrchdLoginPolicyTemporaryIpWhitelist($orchd_login_policy_temporary_ip_list)
```

Set the orchd login policy temporary ip whitelist as a whole

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
$orchd_login_policy_temporary_ip_list = new \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList(); // \Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList

try {
    $apiInstance->setOrchdLoginPolicyTemporaryIpWhitelist($orchd_login_policy_temporary_ip_list);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->setOrchdLoginPolicyTemporaryIpWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orchd_login_policy_temporary_ip_list** | [**\Upmind\EnhanceSdk\Model\OrchdLoginPolicyTemporaryIpList**](../Model/OrchdLoginPolicyTemporaryIpList.md)|  | |

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
