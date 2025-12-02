# Upmind\EnhanceSdk\DefaultApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**uploadWebsiteBackup()**](DefaultApi.md#uploadWebsiteBackup) | **POST** /websites/{website_id}/backup/upload | Upload and restore a .tar.gz archive |


## `uploadWebsiteBackup()`

```php
uploadWebsiteBackup($website_id, $body)
```

Upload and restore a .tar.gz archive

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$website_id = 'website_id_example'; // string | The id of the website.
$body = (binary .tar.gz data); // \SplFileObject

try {
    $apiInstance->uploadWebsiteBackup($website_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadWebsiteBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **website_id** | **string**| The id of the website. | |
| **body** | **\SplFileObject****\SplFileObject**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/gzip`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
