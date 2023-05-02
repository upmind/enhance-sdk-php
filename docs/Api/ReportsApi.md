# Upmind\EnhanceSdk\ReportsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLoginPolicyBlockedIps()**](ReportsApi.md#getLoginPolicyBlockedIps) | **GET** /reports/orchd/login-policy/blocked-ips | Get blocked ips |
| [**getLoginPolicyBlockedLogins()**](ReportsApi.md#getLoginPolicyBlockedLogins) | **GET** /reports/orchd/login-policy/blocked-logins | Get blocked logins |


## `getLoginPolicyBlockedIps()`

```php
getLoginPolicyBlockedIps(): array<string,\Upmind\EnhanceSdk\Model\Blocked>
```

Get blocked ips

Returns a list of all currently active blocked ips.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLoginPolicyBlockedIps();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getLoginPolicyBlockedIps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**array<string,\Upmind\EnhanceSdk\Model\Blocked>**](../Model/Blocked.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoginPolicyBlockedLogins()`

```php
getLoginPolicyBlockedLogins(): array<string,\Upmind\EnhanceSdk\Model\Blocked>
```

Get blocked logins

Returns a list of all currently active blocked logins and ips.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLoginPolicyBlockedLogins();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getLoginPolicyBlockedLogins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**array<string,\Upmind\EnhanceSdk\Model\Blocked>**](../Model/Blocked.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
