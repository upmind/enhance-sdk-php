# Upmind\EnhanceSdk\InstallApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**controldVersion()**](InstallApi.md#controldVersion) | **GET** /install/compatible_versions/controld | Get the compatible controld version |
| [**getServiceKindLatestVersion()**](InstallApi.md#getServiceKindLatestVersion) | **GET** /install/latest_available_version/{service_kind} | Get the latest available version of a given service kind |
| [**install()**](InstallApi.md#install) | **POST** /install | Create the master organization owner |
| [**orchdStatus()**](InstallApi.md#orchdStatus) | **GET** /status | Get the readiness status of the orchd service |
| [**orchdVersion()**](InstallApi.md#orchdVersion) | **GET** /version | Get the SemVer of the API service |
| [**updateEnhance()**](InstallApi.md#updateEnhance) | **POST** /install/update | Updates all services in the cluster. |
| [**validateInstallation()**](InstallApi.md#validateInstallation) | **POST** /install/validate | Used to validate that the control panel has been initialized. |


## `controldVersion()`

```php
controldVersion(): string
```

Get the compatible controld version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\InstallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->controldVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallApi->controldVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getServiceKindLatestVersion()`

```php
getServiceKindLatestVersion($service_kind): string
```

Get the latest available version of a given service kind

Fetches the latest version of a given service kind from the docker repository.  This version can then be installed using updateEnhance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\InstallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_kind = new \Upmind\EnhanceSdk\Model\ServiceKind(); // ServiceKind | The service type of the role.

try {
    $result = $apiInstance->getServiceKindLatestVersion($service_kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallApi->getServiceKindLatestVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_kind** | [**ServiceKind**](../Model/.md)| The service type of the role. | |

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

## `install()`

```php
install($key, $install): \Upmind\EnhanceSdk\Model\SetupResult
```

Create the master organization owner

Installs the control panel. It creates the master org owner and sets the master org control panel host. This procedure may only be invoked once, when the control panel is first set up. It also authenticates the new login and returns a session token as a convenience step.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\InstallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The secret registration key
$install = new \Upmind\EnhanceSdk\Model\Install(); // \Upmind\EnhanceSdk\Model\Install | Master organization owner details.

try {
    $result = $apiInstance->install($key, $install);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallApi->install: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The secret registration key | |
| **install** | [**\Upmind\EnhanceSdk\Model\Install**](../Model/Install.md)| Master organization owner details. | |

### Return type

[**\Upmind\EnhanceSdk\Model\SetupResult**](../Model/SetupResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orchdStatus()`

```php
orchdStatus(): string
```

Get the readiness status of the orchd service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\InstallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->orchdStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallApi->orchdStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `orchdVersion()`

```php
orchdVersion(): string
```

Get the SemVer of the API service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\InstallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->orchdVersion();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallApi->orchdVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `updateEnhance()`

```php
updateEnhance()
```

Updates all services in the cluster.

Updates the control panel. Checks whether there are any compatible version releases for all deployed services and performs an update if so. This endpoint blocks while the updates are running.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\InstallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->updateEnhance();
} catch (Exception $e) {
    echo 'Exception when calling InstallApi->updateEnhance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `validateInstallation()`

```php
validateInstallation(): \Upmind\EnhanceSdk\Model\ValidationResult
```

Used to validate that the control panel has been initialized.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\InstallApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->validateInstallation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallApi->validateInstallation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\ValidationResult**](../Model/ValidationResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
