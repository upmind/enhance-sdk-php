# Upmind\EnhanceSdk\DomainApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**enableWebsiteSslCert()**](DomainApi.md#enableWebsiteSslCert) | **PUT** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id}/domains/{domain_id} | Enables already stored certificate for a given domain |


## `enableWebsiteSslCert()`

```php
enableWebsiteSslCert($org_id, $website_id, $cert_id, $domain_id, $force_ssl)
```

Enables already stored certificate for a given domain

Endpoint for applying SSl certificates for a given website's domain. Sets or updates the exiting cert mapping for the given domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\DomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$cert_id = 'cert_id_example'; // string | The id of the ssl certificate.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$force_ssl = True; // bool | Forced redirect to SSL for the given domain

try {
    $apiInstance->enableWebsiteSslCert($org_id, $website_id, $cert_id, $domain_id, $force_ssl);
} catch (Exception $e) {
    echo 'Exception when calling DomainApi->enableWebsiteSslCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **cert_id** | **string**| The id of the ssl certificate. | |
| **domain_id** | **string**| The id of the domain. | |
| **force_ssl** | **bool**| Forced redirect to SSL for the given domain | [optional] |

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
