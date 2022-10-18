# Upmind\EnhanceSdk\LetsencryptApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebsiteDomainLetsencryptCerts()**](LetsencryptApi.md#createWebsiteDomainLetsencryptCerts) | **POST** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/letsencrypt | Generate and setup letsencrypt ssl certificates for website&#39;s domain |


## `createWebsiteDomainLetsencryptCerts()`

```php
createWebsiteDomainLetsencryptCerts($org_id, $website_id, $domain_id, $dry_run, $enable)
```

Generate and setup letsencrypt ssl certificates for website's domain

Generates letsencrypt certificates for the domain. This is a longer running task, that will do a complete ssl setup for a given domain. Once completed any given domain will get served over `https`. Given domain must be publicly accessible and being served from our service. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\LetsencryptApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$dry_run = True; // bool | If not set or `dry_run=true` it will only verify domain ownership and get dummy certificates. To enable SSL on domain set `?dry_run=false`.
$enable = True; // bool | Defaults to `enable=true` if not set. To only generate and save certificate in db set `enable=false`. It has no bearing if `dry_run=false` not set.

try {
    $apiInstance->createWebsiteDomainLetsencryptCerts($org_id, $website_id, $domain_id, $dry_run, $enable);
} catch (Exception $e) {
    echo 'Exception when calling LetsencryptApi->createWebsiteDomainLetsencryptCerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |
| **dry_run** | **bool**| If not set or &#x60;dry_run&#x3D;true&#x60; it will only verify domain ownership and get dummy certificates. To enable SSL on domain set &#x60;?dry_run&#x3D;false&#x60;. | [optional] |
| **enable** | **bool**| Defaults to &#x60;enable&#x3D;true&#x60; if not set. To only generate and save certificate in db set &#x60;enable&#x3D;false&#x60;. It has no bearing if &#x60;dry_run&#x3D;false&#x60; not set. | [optional] |

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
