# Upmind\EnhanceSdk\DomainsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkDomain()**](DomainsApi.md#checkDomain) | **POST** /orgs/{org_id}/domains/check | Check if a domain can be created |
| [**createDomain()**](DomainsApi.md#createDomain) | **POST** /orgs/{org_id}/domains | Create domain |
| [**createWebsiteDomainAlias()**](DomainsApi.md#createWebsiteDomainAlias) | **POST** /orgs/{org_id}/websites/{website_id}/domains | Create website domain alias |
| [**createWebsiteDomainLetsencryptCerts()**](DomainsApi.md#createWebsiteDomainLetsencryptCerts) | **POST** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/letsencrypt | Generate and setup letsencrypt ssl certificates for website&#39;s domain |
| [**deleteDomain()**](DomainsApi.md#deleteDomain) | **DELETE** /orgs/{org_id}/domains/{domain_id} | Delete domain |
| [**deleteWebsiteDomainMapping()**](DomainsApi.md#deleteWebsiteDomainMapping) | **DELETE** /orgs/{org_id}/websites/{website_id}/domains/{domain_id} | Delete website domain mapping |
| [**getDomains()**](DomainsApi.md#getDomains) | **GET** /orgs/{org_id}/domains | Get domains |
| [**getWebsiteDomainDnsQuery()**](DomainsApi.md#getWebsiteDomainDnsQuery) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-query | Recursively query Dns servers for given domain |
| [**getWebsiteDomainMapping()**](DomainsApi.md#getWebsiteDomainMapping) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id} | Returns website domain mapping |
| [**getWebsiteDomainMappingDnsStatus()**](DomainsApi.md#getWebsiteDomainMappingDnsStatus) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-status | Returns website domain mapping DNS status |
| [**getWebsiteDomainMappings()**](DomainsApi.md#getWebsiteDomainMappings) | **GET** /orgs/{org_id}/websites/{website_id}/domains | Get website&#39;s mapped domains |
| [**updateWebsiteDomainMapping()**](DomainsApi.md#updateWebsiteDomainMapping) | **PATCH** /orgs/{org_id}/websites/{website_id}/domains/{domain_id} | Update website domain mapping |
| [**updateWebsitePrimaryDomain()**](DomainsApi.md#updateWebsitePrimaryDomain) | **PUT** /orgs/{org_id}/websites/{website_id}/domains/primary | Update primary domain mapping |


## `checkDomain()`

```php
checkDomain($org_id, $new_domain): \Upmind\EnhanceSdk\Model\DomainInUseStatus
```

Check if a domain can be created

An organisation can perform a pre-flight check to see if a domain can be added.  This is useful for form validation.  It will return a status indicating if the domain is in use and, if so, whether it is on the current organisation or another.  If it is in use on the current organisation we will also return the websiteId the domain belongs to.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$new_domain = new \Upmind\EnhanceSdk\Model\NewDomain(); // \Upmind\EnhanceSdk\Model\NewDomain | Domain details.

try {
    $result = $apiInstance->checkDomain($org_id, $new_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->checkDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **new_domain** | [**\Upmind\EnhanceSdk\Model\NewDomain**](../Model/NewDomain.md)| Domain details. | |

### Return type

[**\Upmind\EnhanceSdk\Model\DomainInUseStatus**](../Model/DomainInUseStatus.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDomain()`

```php
createDomain($org_id, $new_domain): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Create domain

The MO may create domains without a subscription but all other customers need to pass with this request an id of one of their subscriptions to a plan that allows creating domain names.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$new_domain = new \Upmind\EnhanceSdk\Model\NewDomain(); // \Upmind\EnhanceSdk\Model\NewDomain | Domain details.

try {
    $result = $apiInstance->createDomain($org_id, $new_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->createDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **new_domain** | [**\Upmind\EnhanceSdk\Model\NewDomain**](../Model/NewDomain.md)| Domain details. | |

### Return type

[**\Upmind\EnhanceSdk\Model\NewResourceUuid**](../Model/NewResourceUuid.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebsiteDomainAlias()`

```php
createWebsiteDomainAlias($org_id, $website_id, $new_domain_alias): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Create website domain alias

Creates a domain alias for the website. This operation creates the domain resource and the mapping between the domain and the website. It counts towards the website's subscription's domain alias quota and may only be performed if there is quota left. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$new_domain_alias = new \Upmind\EnhanceSdk\Model\NewDomainAlias(); // \Upmind\EnhanceSdk\Model\NewDomainAlias | Domain details.

try {
    $result = $apiInstance->createWebsiteDomainAlias($org_id, $website_id, $new_domain_alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->createWebsiteDomainAlias: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **new_domain_alias** | [**\Upmind\EnhanceSdk\Model\NewDomainAlias**](../Model/NewDomainAlias.md)| Domain details. | |

### Return type

[**\Upmind\EnhanceSdk\Model\NewResourceUuid**](../Model/NewResourceUuid.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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



$apiInstance = new Upmind\EnhanceSdk\Api\DomainsApi(
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
    echo 'Exception when calling DomainsApi->createWebsiteDomainLetsencryptCerts: ', $e->getMessage(), PHP_EOL;
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

## `deleteDomain()`

```php
deleteDomain($org_id, $domain_id)
```

Delete domain

Deletes a domain. Only privileged org members or parent org admins may do this.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$domain_id = 'domain_id_example'; // string | The id of the domain.

try {
    $apiInstance->deleteDomain($org_id, $domain_id);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->deleteDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **domain_id** | **string**| The id of the domain. | |

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

## `deleteWebsiteDomainMapping()`

```php
deleteWebsiteDomainMapping($org_id, $website_id, $domain_id)
```

Delete website domain mapping

Deletes the domain mapping and decrements the domain alias quota usage in the website's subscription, if applicable. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.

try {
    $apiInstance->deleteWebsiteDomainMapping($org_id, $website_id, $domain_id);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->deleteWebsiteDomainMapping: ', $e->getMessage(), PHP_EOL;
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

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomains()`

```php
getDomains($org_id, $offset, $limit, $sort_by, $sort_order): \Upmind\EnhanceSdk\Model\DomainsListing
```

Get domains

Lists the domains belonging to this organization.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$offset = 56; // int | The offset from which to return items.
$limit = 56; // int | The maximum number of items to return.
$sort_by = 'sort_by_example'; // string | The field by which to sort.
$sort_order = 'sort_order_example'; // string | The direction in which to sort. Possible values are 'asc' and 'desc', defaulting to 'asc'.

try {
    $result = $apiInstance->getDomains($org_id, $offset, $limit, $sort_by, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **offset** | **int**| The offset from which to return items. | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **sort_by** | **string**| The field by which to sort. | [optional] |
| **sort_order** | **string**| The direction in which to sort. Possible values are &#39;asc&#39; and &#39;desc&#39;, defaulting to &#39;asc&#39;. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\DomainsListing**](../Model/DomainsListing.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteDomainDnsQuery()`

```php
getWebsiteDomainDnsQuery($org_id, $website_id, $domain_id, $resolve_depth): \Upmind\EnhanceSdk\Model\DnsQueryOutcome
```

Recursively query Dns servers for given domain

Returns details about the dns servers of given domain. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$resolve_depth = 'resolve_depth_example'; // string | DNS query resolve depth, defaults to `short` if not provided. `short` -> takes the shortest path to resolve domain IP. `detailed` -> queries and returns output from all found Authoritative name servers. `queryAllTldNs` -> queries and returns results from all TLD name servers (very expensive).

try {
    $result = $apiInstance->getWebsiteDomainDnsQuery($org_id, $website_id, $domain_id, $resolve_depth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getWebsiteDomainDnsQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |
| **resolve_depth** | **string**| DNS query resolve depth, defaults to &#x60;short&#x60; if not provided. &#x60;short&#x60; -&gt; takes the shortest path to resolve domain IP. &#x60;detailed&#x60; -&gt; queries and returns output from all found Authoritative name servers. &#x60;queryAllTldNs&#x60; -&gt; queries and returns results from all TLD name servers (very expensive). | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\DnsQueryOutcome**](../Model/DnsQueryOutcome.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteDomainMapping()`

```php
getWebsiteDomainMapping($org_id, $website_id, $domain_id): \Upmind\EnhanceSdk\Model\DomainMapping
```

Returns website domain mapping

Returns a domain by its id that is mapped to this website. Requires login to have admin privileges in this org. Since only the MO can create standalone domains, session holder must be at least a `SuperAdmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.

try {
    $result = $apiInstance->getWebsiteDomainMapping($org_id, $website_id, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getWebsiteDomainMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |

### Return type

[**\Upmind\EnhanceSdk\Model\DomainMapping**](../Model/DomainMapping.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteDomainMappingDnsStatus()`

```php
getWebsiteDomainMappingDnsStatus($org_id, $website_id, $domain_id): \Upmind\EnhanceSdk\Model\DnsStatus
```

Returns website domain mapping DNS status

Returns an indication of whether the domain correctly resolves to the server this website is on.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.

try {
    $result = $apiInstance->getWebsiteDomainMappingDnsStatus($org_id, $website_id, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getWebsiteDomainMappingDnsStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |

### Return type

[**\Upmind\EnhanceSdk\Model\DnsStatus**](../Model/DnsStatus.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteDomainMappings()`

```php
getWebsiteDomainMappings($org_id, $website_id, $with_ssl): \Upmind\EnhanceSdk\Model\DomainMappingsFullListing
```

Get website's mapped domains

Returns a list of domains that are mapped to this website. Requires login to have admin privileges in this org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$with_ssl = True; // bool | If set to true, domains are returned with applicable ssl certificates.

try {
    $result = $apiInstance->getWebsiteDomainMappings($org_id, $website_id, $with_ssl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getWebsiteDomainMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **with_ssl** | **bool**| If set to true, domains are returned with applicable ssl certificates. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\DomainMappingsFullListing**](../Model/DomainMappingsFullListing.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebsiteDomainMapping()`

```php
updateWebsiteDomainMapping($org_id, $website_id, $domain_id, $domain_mapping_update)
```

Update website domain mapping

Partially updates the domain mapping. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$domain_mapping_update = new \Upmind\EnhanceSdk\Model\DomainMappingUpdate(); // \Upmind\EnhanceSdk\Model\DomainMappingUpdate

try {
    $apiInstance->updateWebsiteDomainMapping($org_id, $website_id, $domain_id, $domain_mapping_update);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->updateWebsiteDomainMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |
| **domain_mapping_update** | [**\Upmind\EnhanceSdk\Model\DomainMappingUpdate**](../Model/DomainMappingUpdate.md)|  | |

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

## `updateWebsitePrimaryDomain()`

```php
updateWebsitePrimaryDomain($org_id, $website_id, $new_primary_domain_mapping)
```

Update primary domain mapping

This operation can only be done by a logged in superadmin or owner of the organization or its parent organization(s). Domain and website has to belong to this organization.

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


$apiInstance = new Upmind\EnhanceSdk\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$new_primary_domain_mapping = new \Upmind\EnhanceSdk\Model\NewPrimaryDomainMapping(); // \Upmind\EnhanceSdk\Model\NewPrimaryDomainMapping | Domain mapping details.

try {
    $apiInstance->updateWebsitePrimaryDomain($org_id, $website_id, $new_primary_domain_mapping);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->updateWebsitePrimaryDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **new_primary_domain_mapping** | [**\Upmind\EnhanceSdk\Model\NewPrimaryDomainMapping**](../Model/NewPrimaryDomainMapping.md)| Domain mapping details. | |

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
