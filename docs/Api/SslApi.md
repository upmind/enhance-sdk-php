# Upmind\EnhanceSdk\SslApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteServerSslCert()**](SslApi.md#deleteServerSslCert) | **DELETE** /servers/ssl/{cert_id} | Delete ssl certificate |
| [**deleteWebsiteSslCert()**](SslApi.md#deleteWebsiteSslCert) | **DELETE** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id} | Deletes given ssl certificate |
| [**enableWebsiteSslCert()**](SslApi.md#enableWebsiteSslCert) | **PUT** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id}/domains/{domain_id} | Enables already stored certificate for a given domain |
| [**getServerSslCert()**](SslApi.md#getServerSslCert) | **GET** /servers/ssl/{cert_id} | Fetch a single SSL certificate |
| [**getServerSslCerts()**](SslApi.md#getServerSslCerts) | **GET** /servers/ssl | Returns service SSL certificates data for MO |
| [**getWebsiteSslCert()**](SslApi.md#getWebsiteSslCert) | **GET** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id} | Fetches a single SSL cert |
| [**getWebsiteSslCerts()**](SslApi.md#getWebsiteSslCerts) | **GET** /orgs/{org_id}/websites/{website_id}/ssl | Returns all certificates data with domain mappings for a given website |
| [**uploadServerSslCert()**](SslApi.md#uploadServerSslCert) | **POST** /servers/ssl | Upload SSL certificate for server/service use |
| [**uploadWebsiteSslCerts()**](SslApi.md#uploadWebsiteSslCerts) | **POST** /orgs/{org_id}/websites/{website_id}/ssl | Upload custom ssl certificate, key and optional fullchain for a given website |


## `deleteServerSslCert()`

```php
deleteServerSslCert($cert_id)
```

Delete ssl certificate

Endpoint for deleting service SSl certificate for MO. A Cert can only be deleted if it hasn't been applied to any service yet. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cert_id = 'cert_id_example'; // string | The id of the ssl certificate.

try {
    $apiInstance->deleteServerSslCert($cert_id);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->deleteServerSslCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cert_id** | **string**| The id of the ssl certificate. | |

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

## `deleteWebsiteSslCert()`

```php
deleteWebsiteSslCert($org_id, $website_id, $cert_id)
```

Deletes given ssl certificate

Endpoint for deleting SSl certificate for a given website User can only delete a certificate if it is not enabled for any domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$cert_id = 'cert_id_example'; // string | The id of the ssl certificate.

try {
    $apiInstance->deleteWebsiteSslCert($org_id, $website_id, $cert_id);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->deleteWebsiteSslCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **cert_id** | **string**| The id of the ssl certificate. | |

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



$apiInstance = new Upmind\EnhanceSdk\Api\SslApi(
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
    echo 'Exception when calling SslApi->enableWebsiteSslCert: ', $e->getMessage(), PHP_EOL;
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

## `getServerSslCert()`

```php
getServerSslCert($cert_id): \Upmind\EnhanceSdk\Model\ServiceSslCertWithData
```

Fetch a single SSL certificate

Fetches a single SSL certificate along with its certificate data

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


$apiInstance = new Upmind\EnhanceSdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cert_id = 'cert_id_example'; // string | The id of the ssl certificate.

try {
    $result = $apiInstance->getServerSslCert($cert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->getServerSslCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cert_id** | **string**| The id of the ssl certificate. | |

### Return type

[**\Upmind\EnhanceSdk\Model\ServiceSslCertWithData**](../Model/ServiceSslCertWithData.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerSslCerts()`

```php
getServerSslCerts(): \Upmind\EnhanceSdk\Model\ServiceSslCertsFullListing
```

Returns service SSL certificates data for MO

Endpoint for retreaving all Service SSl certificates for the MO along with service ids if mapped to any.

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


$apiInstance = new Upmind\EnhanceSdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getServerSslCerts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->getServerSslCerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\ServiceSslCertsFullListing**](../Model/ServiceSslCertsFullListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteSslCert()`

```php
getWebsiteSslCert($org_id, $website_id, $cert_id): \Upmind\EnhanceSdk\Model\SslCertWithData
```

Fetches a single SSL cert

Returns certificate data and mappings for a single certificate belonging to a website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$cert_id = 'cert_id_example'; // string | The id of the ssl certificate.

try {
    $result = $apiInstance->getWebsiteSslCert($org_id, $website_id, $cert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->getWebsiteSslCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **cert_id** | **string**| The id of the ssl certificate. | |

### Return type

[**\Upmind\EnhanceSdk\Model\SslCertWithData**](../Model/SslCertWithData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteSslCerts()`

```php
getWebsiteSslCerts($org_id, $website_id): \Upmind\EnhanceSdk\Model\SslCertsFullListing
```

Returns all certificates data with domain mappings for a given website

Endpoint for retreaving SSl certificates for a given website including certificates generated by letsencrypt

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsiteSslCerts($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->getWebsiteSslCerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\SslCertsFullListing**](../Model/SslCertsFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadServerSslCert()`

```php
uploadServerSslCert($ssl_certs): \Upmind\EnhanceSdk\Model\NewSslCert
```

Upload SSL certificate for server/service use

Endpoint for uploading custom SSl certificate for server/secvice. Verifies the key/cert pair returns an error if it is a mismatch. Certificates uploaded via this endpoint belong to the MO. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssl_certs = new \Upmind\EnhanceSdk\Model\SslCerts(); // \Upmind\EnhanceSdk\Model\SslCerts | Cert, private key and optional fullchain.

try {
    $result = $apiInstance->uploadServerSslCert($ssl_certs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->uploadServerSslCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssl_certs** | [**\Upmind\EnhanceSdk\Model\SslCerts**](../Model/SslCerts.md)| Cert, private key and optional fullchain. | |

### Return type

[**\Upmind\EnhanceSdk\Model\NewSslCert**](../Model/NewSslCert.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadWebsiteSslCerts()`

```php
uploadWebsiteSslCerts($org_id, $website_id, $ssl_certs): \Upmind\EnhanceSdk\Model\NewSslCert
```

Upload custom ssl certificate, key and optional fullchain for a given website

Endpoint for uploading custom SSL certificate for a given website. Verifies the cert key and maps to relevant domains that the certificate can be applied to. Returns error if no domain match is found. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\SslApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$ssl_certs = new \Upmind\EnhanceSdk\Model\SslCerts(); // \Upmind\EnhanceSdk\Model\SslCerts | Cert, private key and optional fullchain.

try {
    $result = $apiInstance->uploadWebsiteSslCerts($org_id, $website_id, $ssl_certs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SslApi->uploadWebsiteSslCerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **ssl_certs** | [**\Upmind\EnhanceSdk\Model\SslCerts**](../Model/SslCerts.md)| Cert, private key and optional fullchain. | |

### Return type

[**\Upmind\EnhanceSdk\Model\NewSslCert**](../Model/NewSslCert.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
