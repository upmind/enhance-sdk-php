# Upmind\EnhanceSdk\DnsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDefaultDnsRecord()**](DnsApi.md#createDefaultDnsRecord) | **POST** /v2/settings/dns/default-records | Create a default DNS record |
| [**createDnsThirdPartyProvider()**](DnsApi.md#createDnsThirdPartyProvider) | **POST** /dns/third-party-providers | Create new third party provider. |
| [**createWebsiteDomainDnsZoneRecord()**](DnsApi.md#createWebsiteDomainDnsZoneRecord) | **POST** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone/records | Create a new dns record for website domain |
| [**deleteDefaultDnsRecord()**](DnsApi.md#deleteDefaultDnsRecord) | **DELETE** /v2/settings/dns/default-records/{record_id} | Delete a default DNS record |
| [**deleteDnsThirdPartyProvider()**](DnsApi.md#deleteDnsThirdPartyProvider) | **DELETE** /dns/third-party-providers/{provider_id} | Deletes a third party dns provider. |
| [**deleteWebsiteDomainDnsZoneRecord()**](DnsApi.md#deleteWebsiteDomainDnsZoneRecord) | **DELETE** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone/records/{record_id} | Delete dns zone record |
| [**disableDomainDnsSec()**](DnsApi.md#disableDomainDnsSec) | **DELETE** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone/dnssec | Disable DNSSEC on this domain |
| [**enableDomainDnsSec()**](DnsApi.md#enableDomainDnsSec) | **POST** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone/dnssec | Enable DNSSEC on this domain |
| [**getDnsThirdPartyProviders()**](DnsApi.md#getDnsThirdPartyProviders) | **GET** /dns/third-party-providers | Lists all third party providers. |
| [**getWebsiteDomainDnsZone()**](DnsApi.md#getWebsiteDomainDnsZone) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone | Get a dns zone for given domain |
| [**listDefaultDnsRecords()**](DnsApi.md#listDefaultDnsRecords) | **GET** /v2/settings/dns/default-records | List default DNS records |
| [**updateDefaultDnsRecord()**](DnsApi.md#updateDefaultDnsRecord) | **PATCH** /v2/settings/dns/default-records/{record_id} | Update a default DNS record |
| [**updateWebsiteDomainDnsZone()**](DnsApi.md#updateWebsiteDomainDnsZone) | **PATCH** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone | Updates a dns zone SOA for website domain |
| [**updateWebsiteDomainDnsZoneRecord()**](DnsApi.md#updateWebsiteDomainDnsZoneRecord) | **PATCH** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-zone/records/{record_id} | Updates a dns record for given domain |


## `createDefaultDnsRecord()`

```php
createDefaultDnsRecord($new_default_dns_record): string
```

Create a default DNS record

Creates a default record at a platform level which will be added to all newly created DNS zones.  In the value you can use $$origin$$ which will be substituted for the origin domain.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_default_dns_record = new \Upmind\EnhanceSdk\Model\NewDefaultDnsRecord(); // \Upmind\EnhanceSdk\Model\NewDefaultDnsRecord

try {
    $result = $apiInstance->createDefaultDnsRecord($new_default_dns_record);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->createDefaultDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_default_dns_record** | [**\Upmind\EnhanceSdk\Model\NewDefaultDnsRecord**](../Model/NewDefaultDnsRecord.md)|  | |

### Return type

**string**

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDnsThirdPartyProvider()`

```php
createDnsThirdPartyProvider($new_dns_third_party_provider)
```

Create new third party provider.

This operation can only be done by an MO admin. Third party providers are notified about changes to dns zones within Enhance. This endpoint creates a new provider which is going to be notified on provided URL about dns updates. Please not that after adding a new provider using this endpoint, the provider will initially receive a request to delete all its current data and then Enhance will send a request with all existing dns zones.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_dns_third_party_provider = new \Upmind\EnhanceSdk\Model\NewDnsThirdPartyProvider(); // \Upmind\EnhanceSdk\Model\NewDnsThirdPartyProvider | Url where the updates are sent and map of header names to their values.

try {
    $apiInstance->createDnsThirdPartyProvider($new_dns_third_party_provider);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->createDnsThirdPartyProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_dns_third_party_provider** | [**\Upmind\EnhanceSdk\Model\NewDnsThirdPartyProvider**](../Model/NewDnsThirdPartyProvider.md)| Url where the updates are sent and map of header names to their values. | |

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

## `createWebsiteDomainDnsZoneRecord()`

```php
createWebsiteDomainDnsZoneRecord($org_id, $website_id, $domain_id, $new_dns_record): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Create a new dns record for website domain

Creates a new dns record for a website's domain dns zone. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$new_dns_record = new \Upmind\EnhanceSdk\Model\NewDnsRecord(); // \Upmind\EnhanceSdk\Model\NewDnsRecord | New dns record details.

try {
    $result = $apiInstance->createWebsiteDomainDnsZoneRecord($org_id, $website_id, $domain_id, $new_dns_record);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->createWebsiteDomainDnsZoneRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |
| **new_dns_record** | [**\Upmind\EnhanceSdk\Model\NewDnsRecord**](../Model/NewDnsRecord.md)| New dns record details. | |

### Return type

[**\Upmind\EnhanceSdk\Model\NewResourceUuid**](../Model/NewResourceUuid.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDefaultDnsRecord()`

```php
deleteDefaultDnsRecord($record_id)
```

Delete a default DNS record

Delete a default DNS record.  Will not remove from existing zones.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$record_id = 'record_id_example'; // string

try {
    $apiInstance->deleteDefaultDnsRecord($record_id);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->deleteDefaultDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **record_id** | **string**|  | |

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

## `deleteDnsThirdPartyProvider()`

```php
deleteDnsThirdPartyProvider($provider_id)
```

Deletes a third party dns provider.

This operation can only be done by an MO admin. Third party providers are notified about changes to dns zones within Enhance. This endpoint removes an existing provider. After this endpoint resolves, no new dns zones are going to be replicated to the provider.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_id = 56; // int | The id of the third party provider which can be obtained by querying the GET /dns/third-party-providers endpoint.

try {
    $apiInstance->deleteDnsThirdPartyProvider($provider_id);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->deleteDnsThirdPartyProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **int**| The id of the third party provider which can be obtained by querying the GET /dns/third-party-providers endpoint. | |

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

## `deleteWebsiteDomainDnsZoneRecord()`

```php
deleteWebsiteDomainDnsZoneRecord($org_id, $website_id, $domain_id, $record_id)
```

Delete dns zone record

Deletes a dns zone record for given domain. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$record_id = 'record_id_example'; // string | The id of the record.

try {
    $apiInstance->deleteWebsiteDomainDnsZoneRecord($org_id, $website_id, $domain_id, $record_id);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->deleteWebsiteDomainDnsZoneRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |
| **record_id** | **string**| The id of the record. | |

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

## `disableDomainDnsSec()`

```php
disableDomainDnsSec($org_id, $website_id, $domain_id)
```

Disable DNSSEC on this domain

Will disable DNSSEC on this domain.  The DS records must be removed from the upstream DNS provider first to avoid downtime.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.

try {
    $apiInstance->disableDomainDnsSec($org_id, $website_id, $domain_id);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->disableDomainDnsSec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |

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

## `enableDomainDnsSec()`

```php
enableDomainDnsSec($org_id, $website_id, $domain_id): string
```

Enable DNSSEC on this domain

Will enable DNSSEC and return the relevant DS records

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


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.

try {
    $result = $apiInstance->enableDomainDnsSec($org_id, $website_id, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->enableDomainDnsSec: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |

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

## `getDnsThirdPartyProviders()`

```php
getDnsThirdPartyProviders(): \Upmind\EnhanceSdk\Model\DnsThirdPartyProvider[]
```

Lists all third party providers.

This operation can only be done by an MO admin. Third party providers are notified about changes to dns zones within Enhance. This endpoint lists all registered URLs which listen to these changes.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDnsThirdPartyProviders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->getDnsThirdPartyProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\DnsThirdPartyProvider[]**](../Model/DnsThirdPartyProvider.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteDomainDnsZone()`

```php
getWebsiteDomainDnsZone($org_id, $website_id, $domain_id): \Upmind\EnhanceSdk\Model\DnsZone
```

Get a dns zone for given domain

Returns details about the dns zone of given domain. Returns Soa record and all other records. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.

try {
    $result = $apiInstance->getWebsiteDomainDnsZone($org_id, $website_id, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->getWebsiteDomainDnsZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |

### Return type

[**\Upmind\EnhanceSdk\Model\DnsZone**](../Model/DnsZone.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDefaultDnsRecords()`

```php
listDefaultDnsRecords(): \Upmind\EnhanceSdk\Model\DefaultDnsRecord[]
```

List default DNS records

Lists the DNS records which will be added to all newly created DNS zones.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDefaultDnsRecords();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->listDefaultDnsRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\DefaultDnsRecord[]**](../Model/DefaultDnsRecord.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDefaultDnsRecord()`

```php
updateDefaultDnsRecord($record_id, $update_default_dns_record)
```

Update a default DNS record

Updates a default DNS record, all fields are optional.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$record_id = 'record_id_example'; // string
$update_default_dns_record = new \Upmind\EnhanceSdk\Model\UpdateDefaultDnsRecord(); // \Upmind\EnhanceSdk\Model\UpdateDefaultDnsRecord

try {
    $apiInstance->updateDefaultDnsRecord($record_id, $update_default_dns_record);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->updateDefaultDnsRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **record_id** | **string**|  | |
| **update_default_dns_record** | [**\Upmind\EnhanceSdk\Model\UpdateDefaultDnsRecord**](../Model/UpdateDefaultDnsRecord.md)|  | |

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

## `updateWebsiteDomainDnsZone()`

```php
updateWebsiteDomainDnsZone($org_id, $website_id, $domain_id, $update_dns_zone)
```

Updates a dns zone SOA for website domain

Partially updates dns zone SOA record for existing zone. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$update_dns_zone = new \Upmind\EnhanceSdk\Model\UpdateDnsZone(); // \Upmind\EnhanceSdk\Model\UpdateDnsZone | Fields to update.

try {
    $apiInstance->updateWebsiteDomainDnsZone($org_id, $website_id, $domain_id, $update_dns_zone);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->updateWebsiteDomainDnsZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |
| **update_dns_zone** | [**\Upmind\EnhanceSdk\Model\UpdateDnsZone**](../Model/UpdateDnsZone.md)| Fields to update. | |

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

## `updateWebsiteDomainDnsZoneRecord()`

```php
updateWebsiteDomainDnsZoneRecord($org_id, $website_id, $domain_id, $record_id, $update_dns_record)
```

Updates a dns record for given domain

Partially updates a dns record for existing zone. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$record_id = 'record_id_example'; // string | The id of the record.
$update_dns_record = new \Upmind\EnhanceSdk\Model\UpdateDnsRecord(); // \Upmind\EnhanceSdk\Model\UpdateDnsRecord | Fields to update.

try {
    $apiInstance->updateWebsiteDomainDnsZoneRecord($org_id, $website_id, $domain_id, $record_id, $update_dns_record);
} catch (Exception $e) {
    echo 'Exception when calling DnsApi->updateWebsiteDomainDnsZoneRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |
| **record_id** | **string**| The id of the record. | |
| **update_dns_record** | [**\Upmind\EnhanceSdk\Model\UpdateDnsRecord**](../Model/UpdateDnsRecord.md)| Fields to update. | |

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
