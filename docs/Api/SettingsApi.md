# Upmind\EnhanceSdk\SettingsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSettings()**](SettingsApi.md#createSettings) | **POST** /settings | Create settings |
| [**deleteGlobalServiceSetting()**](SettingsApi.md#deleteGlobalServiceSetting) | **DELETE** /settings/service/{setting_kind}/{setting_key} | Delete a single global service setting |
| [**deleteSetting()**](SettingsApi.md#deleteSetting) | **DELETE** /settings/{name} | Remove the specified setting |
| [**getDockerRegistry()**](SettingsApi.md#getDockerRegistry) | **GET** /settings/registry | Gets the Docker registry credentials. |
| [**getGlobalServiceSetting()**](SettingsApi.md#getGlobalServiceSetting) | **GET** /settings/service/{setting_kind} | Get the value for a particular global service setting |
| [**getOrchdLogSettings()**](SettingsApi.md#getOrchdLogSettings) | **GET** /settings/orchd/logs | Get the orchd log settings |
| [**getSetting()**](SettingsApi.md#getSetting) | **GET** /settings/{name} | Get the specified setting |
| [**getSettings()**](SettingsApi.md#getSettings) | **GET** /settings | Get all current settings |
| [**setDockerRegistry()**](SettingsApi.md#setDockerRegistry) | **PUT** /settings/registry | Updates the Docker registry credentials. |
| [**setGlobalServiceSetting()**](SettingsApi.md#setGlobalServiceSetting) | **PUT** /settings/service/{setting_kind}/{setting_key} | Set a single global service setting |
| [**setOrchdLogSettings()**](SettingsApi.md#setOrchdLogSettings) | **PUT** /settings/orchd/logs | Set the orchd log settings |
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


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


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

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

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


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_kind = new \Upmind\EnhanceSdk\Model\SettingKind(); // SettingKind | The type of setting being applied
$setting_key = 'setting_key_example'; // string | A key for updating an existing setting

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
| **setting_key** | **string**| A key for updating an existing setting | |

### Return type

[**\Upmind\EnhanceSdk\Model\Outcome**](../Model/Outcome.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


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

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

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


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


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

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

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


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


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

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

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


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


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

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

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


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


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

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

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


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


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

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

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


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


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

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

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


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_kind = new \Upmind\EnhanceSdk\Model\SettingKind(); // SettingKind | The type of setting being applied
$setting_key = 'setting_key_example'; // string | A key for updating an existing setting
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
| **setting_key** | **string**| A key for updating an existing setting | |
| **service_setting_value** | [**\Upmind\EnhanceSdk\Model\ServiceSettingValue**](../Model/ServiceSettingValue.md)|  | |

### Return type

[**\Upmind\EnhanceSdk\Model\Outcome**](../Model/Outcome.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

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


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


$apiInstance = new Upmind\EnhanceSdk\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orchd_log_settings = 'orchd_log_settings_example'; // \Upmind\EnhanceSdk\Model\OrchdLogSettings

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

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

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


// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


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

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
