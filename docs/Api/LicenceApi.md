# Upmind\EnhanceSdk\LicenceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLicenceInfo()**](LicenceApi.md#getLicenceInfo) | **GET** /licence | Get current licence status |
| [**refreshLicence()**](LicenceApi.md#refreshLicence) | **PUT** /licence | Updates licence key if provided, and refresh licence status by calling home servers. NOTE: calling without any licence_key body, only refreshes the current licence status |


## `getLicenceInfo()`

```php
getLicenceInfo(): \Upmind\EnhanceSdk\Model\LicenceInfo
```

Get current licence status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\LicenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLicenceInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenceApi->getLicenceInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\LicenceInfo**](../Model/LicenceInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshLicence()`

```php
refreshLicence($licence_key): \Upmind\EnhanceSdk\Model\LicenceInfo
```

Updates licence key if provided, and refresh licence status by calling home servers. NOTE: calling without any licence_key body, only refreshes the current licence status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\LicenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$licence_key = new \Upmind\EnhanceSdk\Model\LicenceKey(); // \Upmind\EnhanceSdk\Model\LicenceKey

try {
    $result = $apiInstance->refreshLicence($licence_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenceApi->refreshLicence: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **licence_key** | [**\Upmind\EnhanceSdk\Model\LicenceKey**](../Model/LicenceKey.md)|  | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\LicenceInfo**](../Model/LicenceInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
