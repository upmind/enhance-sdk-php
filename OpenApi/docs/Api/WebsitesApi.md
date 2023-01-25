# Upmind\EnhanceSdk\WebsitesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authorizeWebsiteSshKey()**](WebsitesApi.md#authorizeWebsiteSshKey) | **POST** /orgs/{org_id}/websites/{website_id}/ssh/keys | Authorize a new SSH key. |
| [**authorizeWebsiteSshPassword()**](WebsitesApi.md#authorizeWebsiteSshPassword) | **POST** /orgs/{org_id}/websites/{website_id}/ssh/password | Authorize a new SSH password for website. |
| [**createFtpUser()**](WebsitesApi.md#createFtpUser) | **POST** /orgs/{org_id}/websites/{website_id}/ftp/users | Creates a new FTP user for a given website |
| [**createPreviewDomain()**](WebsitesApi.md#createPreviewDomain) | **POST** /orgs/{org_id}/websites/{website_id}/preview | Create a preview domain |
| [**createWebsite()**](WebsitesApi.md#createWebsite) | **POST** /orgs/{org_id}/websites | Create a new website or clone an existing one. |
| [**createWebsiteDomainAlias()**](WebsitesApi.md#createWebsiteDomainAlias) | **POST** /orgs/{org_id}/websites/{website_id}/domains | Create website domain alias |
| [**createWebsiteDomainLetsencryptCerts()**](WebsitesApi.md#createWebsiteDomainLetsencryptCerts) | **POST** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/letsencrypt | Generate and setup letsencrypt ssl certificates for website&#39;s domain |
| [**createWebsiteMySQLDB()**](WebsitesApi.md#createWebsiteMySQLDB) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-dbs | Create a MySQL database for website |
| [**deleteFtpUser()**](WebsitesApi.md#deleteFtpUser) | **DELETE** /orgs/{org_id}/websites/{website_id}/ftp/users/{user_id} | Deletes given FTP user |
| [**deleteUserCrontab()**](WebsitesApi.md#deleteUserCrontab) | **DELETE** /orgs/{org_id}/websites/{website_id}/crontab | Delete user&#39;s crontab |
| [**deleteWebsite()**](WebsitesApi.md#deleteWebsite) | **DELETE** /orgs/{org_id}/websites/{website_id} | Delete website |
| [**deleteWebsiteDomainMapping()**](WebsitesApi.md#deleteWebsiteDomainMapping) | **DELETE** /orgs/{org_id}/websites/{website_id}/domains/{domain_id} | Delete website domain mapping |
| [**deleteWebsiteSetting()**](WebsitesApi.md#deleteWebsiteSetting) | **DELETE** /orgs/{org_id}/websites/{website_id}/settings/{setting_kind}/{setting_key} | Delete a single override setting |
| [**deleteWebsiteSslCert()**](WebsitesApi.md#deleteWebsiteSslCert) | **DELETE** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id} | Deletes given ssl certificate |
| [**deleteWebsites()**](WebsitesApi.md#deleteWebsites) | **DELETE** /orgs/{org_id}/websites | Delete websites |
| [**enableWebsiteSslCert()**](WebsitesApi.md#enableWebsiteSslCert) | **PUT** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id}/domains/{domain_id} | Enables already stored certificate for a given domain |
| [**getFtpUsers()**](WebsitesApi.md#getFtpUsers) | **GET** /orgs/{org_id}/websites/{website_id}/ftp/users | Returns all ftp users data for a given website |
| [**getScreenshotTimestamp()**](WebsitesApi.md#getScreenshotTimestamp) | **GET** /orgs/{org_id}/websites/{website_id}/screenshot/timestamp | Get last screeshot file&#39;s Timestamp |
| [**getSiteAccessToken()**](WebsitesApi.md#getSiteAccessToken) | **POST** /orgs/{org_id}/websites/{website_id}/access-tokens | Get an access token for the given website |
| [**getUserCrontab()**](WebsitesApi.md#getUserCrontab) | **GET** /orgs/{org_id}/websites/{website_id}/crontab | Get user&#39;s crontab |
| [**getWebsite()**](WebsitesApi.md#getWebsite) | **GET** /orgs/{org_id}/websites/{website_id} | Get website |
| [**getWebsiteBackupStatus()**](WebsitesApi.md#getWebsiteBackupStatus) | **GET** /orgs/{org_id}/websites/{website_id}/status/backup | Get the status of an ongoing website backup operation |
| [**getWebsiteCgroupLimits()**](WebsitesApi.md#getWebsiteCgroupLimits) | **GET** /orgs/{org_id}/websites/{website_id}/cgroup_limits | Get the active cgroup limits for a website |
| [**getWebsiteClonesStatus()**](WebsitesApi.md#getWebsiteClonesStatus) | **GET** /orgs/{org_id}/websites/{website_id}/status/clones/{domain} | Get the status of the clone operation of a given website |
| [**getWebsiteDomainDnsQuery()**](WebsitesApi.md#getWebsiteDomainDnsQuery) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-query | Recursively query Dns servers for given domain |
| [**getWebsiteDomainMapping()**](WebsitesApi.md#getWebsiteDomainMapping) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id} | Returns website domain mapping |
| [**getWebsiteDomainMappingDnsStatus()**](WebsitesApi.md#getWebsiteDomainMappingDnsStatus) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/dns-status | Returns website domain mapping DNS status |
| [**getWebsiteDomainMappings()**](WebsitesApi.md#getWebsiteDomainMappings) | **GET** /orgs/{org_id}/websites/{website_id}/domains | Get website&#39;s mapped domains |
| [**getWebsiteHtaccessIpsRule()**](WebsitesApi.md#getWebsiteHtaccessIpsRule) | **GET** /orgs/{org_id}/websites/{website_id}/htaccess/ips | Returns current rules of blocked/whitelisted IPs |
| [**getWebsiteHtaccessRewrites()**](WebsitesApi.md#getWebsiteHtaccessRewrites) | **GET** /orgs/{org_id}/websites/{website_id}/htaccess | Reads chains of rewrite rules |
| [**getWebsiteMetrics()**](WebsitesApi.md#getWebsiteMetrics) | **GET** /orgs/{org_id}/websites/{website_id}/metrics | Get website metrics |
| [**getWebsiteMySQLDBs()**](WebsitesApi.md#getWebsiteMySQLDBs) | **GET** /orgs/{org_id}/websites/{website_id}/mysql-dbs | Get website MySQL databases |
| [**getWebsiteServerDomains()**](WebsitesApi.md#getWebsiteServerDomains) | **GET** /orgs/{org_id}/websites/{website_id}/server_domains | Fetch website server domains |
| [**getWebsiteSetting()**](WebsitesApi.md#getWebsiteSetting) | **GET** /orgs/{org_id}/websites/{website_id}/settings/{setting_kind} | Get the value for a particular setting |
| [**getWebsiteSshKeys()**](WebsitesApi.md#getWebsiteSshKeys) | **GET** /orgs/{org_id}/websites/{website_id}/ssh/keys | Get website&#39;s authorized SSH keys |
| [**getWebsiteSslCert()**](WebsitesApi.md#getWebsiteSslCert) | **GET** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id} | Fetches a single SSL cert |
| [**getWebsiteSslCerts()**](WebsitesApi.md#getWebsiteSslCerts) | **GET** /orgs/{org_id}/websites/{website_id}/ssl | Returns all certificates data with domain mappings for a given website |
| [**getWebsites()**](WebsitesApi.md#getWebsites) | **GET** /orgs/{org_id}/websites | Get websites |
| [**pushWebsiteLive()**](WebsitesApi.md#pushWebsiteLive) | **POST** /orgs/{org_id}/websites/{website_id}/push-live | Making a staging website live |
| [**setWebsiteCgroupLimits()**](WebsitesApi.md#setWebsiteCgroupLimits) | **PUT** /orgs/{org_id}/websites/{website_id}/cgroup_limits | Set the active cgroup limits for a website (Master org only) |
| [**setWebsiteSetting()**](WebsitesApi.md#setWebsiteSetting) | **PUT** /orgs/{org_id}/websites/{website_id}/settings/{setting_kind}/{setting_key} | Set a single override setting |
| [**takeScreenshot()**](WebsitesApi.md#takeScreenshot) | **POST** /orgs/{org_id}/websites/{website_id}/screenshot/take | Sends command to take website screenshot |
| [**unauthorizeWebsiteSshKey()**](WebsitesApi.md#unauthorizeWebsiteSshKey) | **DELETE** /orgs/{org_id}/websites/{website_id}/ssh/keys/{key_id} | Unauthorize the public SSH key with the given ID. |
| [**updateFtpUser()**](WebsitesApi.md#updateFtpUser) | **PATCH** /orgs/{org_id}/websites/{website_id}/ftp/users/{user_id} | Update given FTP user |
| [**updateUserCrontab()**](WebsitesApi.md#updateUserCrontab) | **PATCH** /orgs/{org_id}/websites/{website_id}/crontab | Update user&#39;s crontab |
| [**updateWebsite()**](WebsitesApi.md#updateWebsite) | **PATCH** /orgs/{org_id}/websites/{website_id} | Update website |
| [**updateWebsiteDomainMapping()**](WebsitesApi.md#updateWebsiteDomainMapping) | **PATCH** /orgs/{org_id}/websites/{website_id}/domains/{domain_id} | Update website domain mapping |
| [**updateWebsiteHtaccessIpsRule()**](WebsitesApi.md#updateWebsiteHtaccessIpsRule) | **PUT** /orgs/{org_id}/websites/{website_id}/htaccess/ips | Sets a rule over provided ips - either block or allow |
| [**updateWebsiteHtaccessRewrites()**](WebsitesApi.md#updateWebsiteHtaccessRewrites) | **PATCH** /orgs/{org_id}/websites/{website_id}/htaccess | Updates rewrite rules |
| [**updateWebsitePrimaryDomain()**](WebsitesApi.md#updateWebsitePrimaryDomain) | **PUT** /orgs/{org_id}/websites/{website_id}/domains/primary | Update primary domain mapping |
| [**updateWebsiteSshKey()**](WebsitesApi.md#updateWebsiteSshKey) | **PATCH** /orgs/{org_id}/websites/{website_id}/ssh/keys/{key_id} | Update an existing website public SSH key. |
| [**uploadWebsiteSslCerts()**](WebsitesApi.md#uploadWebsiteSslCerts) | **POST** /orgs/{org_id}/websites/{website_id}/ssl | Upload custom ssl certificate, key and optional fullchain for a given website |
| [**validateWebsiteOperation()**](WebsitesApi.md#validateWebsiteOperation) | **POST** /orgs/{org_id}/websites/{website_id}/validate-operation | Validate whether a website operation is allowed |


## `authorizeWebsiteSshKey()`

```php
authorizeWebsiteSshKey($org_id, $website_id, $new_ssh_key, $sanitize): \Upmind\EnhanceSdk\Model\NewSshKeyId
```

Authorize a new SSH key.

This operation will authorize the given public SSH key by appending its content to the website's .ssh/authorized_keys file.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$new_ssh_key = new \Upmind\EnhanceSdk\Model\NewSshKey(); // \Upmind\EnhanceSdk\Model\NewSshKey | The public SSH key to authorize.
$sanitize = false; // bool | If set to true, the SSH keys with unrecognized comments will be sanitized by changing the comment to a valid format that can be used to store metadata. If any of the keys requires sanitization the content of the authorized_keys file will be edited accordingly before returning the set of keys. If instead set to false, only the SSH keys that are recognized as valid (that is, contain valid metadata in their comments), will be returned, all the other keys will be skipped.

try {
    $result = $apiInstance->authorizeWebsiteSshKey($org_id, $website_id, $new_ssh_key, $sanitize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->authorizeWebsiteSshKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **new_ssh_key** | [**\Upmind\EnhanceSdk\Model\NewSshKey**](../Model/NewSshKey.md)| The public SSH key to authorize. | |
| **sanitize** | **bool**| If set to true, the SSH keys with unrecognized comments will be sanitized by changing the comment to a valid format that can be used to store metadata. If any of the keys requires sanitization the content of the authorized_keys file will be edited accordingly before returning the set of keys. If instead set to false, only the SSH keys that are recognized as valid (that is, contain valid metadata in their comments), will be returned, all the other keys will be skipped. | [optional] [default to false] |

### Return type

[**\Upmind\EnhanceSdk\Model\NewSshKeyId**](../Model/NewSshKeyId.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authorizeWebsiteSshPassword()`

```php
authorizeWebsiteSshPassword($org_id, $website_id, $new_password)
```

Authorize a new SSH password for website.

This operation will authorize the given SSH password for the website's unix user. this request will replace the existing password for the user if already set.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$new_password = new \Upmind\EnhanceSdk\Model\NewPassword(); // \Upmind\EnhanceSdk\Model\NewPassword | The SSH password to authorize.

try {
    $apiInstance->authorizeWebsiteSshPassword($org_id, $website_id, $new_password);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->authorizeWebsiteSshPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **new_password** | [**\Upmind\EnhanceSdk\Model\NewPassword**](../Model/NewPassword.md)| The SSH password to authorize. | |

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

## `createFtpUser()`

```php
createFtpUser($org_id, $website_id, $new_ftp_user, $create_home): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Creates a new FTP user for a given website

Endpoint for creating a new FTP user. NOTE: user.account well get appended with website's primary domain. i.e. `username` will become `username@domain.com` Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$new_ftp_user = new \Upmind\EnhanceSdk\Model\NewFtpUser(); // \Upmind\EnhanceSdk\Model\NewFtpUser | FTP User
$create_home = True; // bool | If set to true we will try to crete a new home_dir for the user if does not exist.

try {
    $result = $apiInstance->createFtpUser($org_id, $website_id, $new_ftp_user, $create_home);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->createFtpUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **new_ftp_user** | [**\Upmind\EnhanceSdk\Model\NewFtpUser**](../Model/NewFtpUser.md)| FTP User | |
| **create_home** | **bool**| If set to true we will try to crete a new home_dir for the user if does not exist. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\NewResourceUuid**](../Model/NewResourceUuid.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPreviewDomain()`

```php
createPreviewDomain($org_id, $website_id): string
```

Create a preview domain

Creates a preview domain for the given website and returns its full domain.  If a preview domain already exists, returns that instead.  Will error if a preview domain cannot be created. Returns 200 if an existing preview domain is returned and 201 if one has been created.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->createPreviewDomain($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->createPreviewDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebsite()`

```php
createWebsite($org_id, $new_website, $clone_from, $kind): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Create a new website or clone an existing one.

Creates or clone a website under the organization. If the org is the MO, the request need not contain a subscription ID, but if it's a customer and the session holder is not an MO admin, the subscription to which to attach the website must be supplied. If the website to be created is 'staging' kind then the subscription must include stagingWebsites resource > 1.  If 'normal' then the subscription must include websites > 1. If the website to be created is a control panel, the reseller's subscription id must match the reseller subscription. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$new_website = new \Upmind\EnhanceSdk\Model\NewWebsite(); // \Upmind\EnhanceSdk\Model\NewWebsite | New website details. If the organization is the MO, they need not have a subscription to create a website. In all other cases organization needs to be subscribed to a plan that allows creating websites.
$clone_from = 'clone_from_example'; // string | The ID of the website to clone. Note that a website cannot be cloned from another website if the kind parameter is specified and different from `normal`.
$kind = new \Upmind\EnhanceSdk\Model\WebsiteKind(); // WebsiteKind | The kind of a *special* website that needs to be created. Whether this website is to be a *control panel* website or a *phpMyAdmin* website. Note: in order to create a new *phpMyAdmin* website the control panel website needs to be created first, since the new phpMyAdmin website will be under the control panel domain.

try {
    $result = $apiInstance->createWebsite($org_id, $new_website, $clone_from, $kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->createWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **new_website** | [**\Upmind\EnhanceSdk\Model\NewWebsite**](../Model/NewWebsite.md)| New website details. If the organization is the MO, they need not have a subscription to create a website. In all other cases organization needs to be subscribed to a plan that allows creating websites. | |
| **clone_from** | **string**| The ID of the website to clone. Note that a website cannot be cloned from another website if the kind parameter is specified and different from &#x60;normal&#x60;. | [optional] |
| **kind** | [**WebsiteKind**](../Model/.md)| The kind of a *special* website that needs to be created. Whether this website is to be a *control panel* website or a *phpMyAdmin* website. Note: in order to create a new *phpMyAdmin* website the control panel website needs to be created first, since the new phpMyAdmin website will be under the control panel domain. | [optional] |

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
    echo 'Exception when calling WebsitesApi->createWebsiteDomainAlias: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
    echo 'Exception when calling WebsitesApi->createWebsiteDomainLetsencryptCerts: ', $e->getMessage(), PHP_EOL;
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

## `createWebsiteMySQLDB()`

```php
createWebsiteMySQLDB($org_id, $website_id, $new_my_sqldb): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Create a MySQL database for website

Creates a new MySQL database for the given website. The supplied name must conform to the following regular expression: `^[0-9a-z$_]+$`. That is, a name may only contain alphanumerical characters, dollar signs, and underscores. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$new_my_sqldb = new \Upmind\EnhanceSdk\Model\NewMySQLDB(); // \Upmind\EnhanceSdk\Model\NewMySQLDB | New database details.

try {
    $result = $apiInstance->createWebsiteMySQLDB($org_id, $website_id, $new_my_sqldb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->createWebsiteMySQLDB: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **new_my_sqldb** | [**\Upmind\EnhanceSdk\Model\NewMySQLDB**](../Model/NewMySQLDB.md)| New database details. | |

### Return type

[**\Upmind\EnhanceSdk\Model\NewResourceUuid**](../Model/NewResourceUuid.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFtpUser()`

```php
deleteFtpUser($org_id, $website_id, $user_id, $delete_home)
```

Deletes given FTP user

Endpoint for deleting FTP user for a given website. User homeDir can only be deleted if it is a subdir for the website home. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$user_id = 'user_id_example'; // string | The id of an FTP user.
$delete_home = True; // bool | If set to true we will try to delete the homeDir for the user. User homeDir can only be deleted if it is a subdir for the website home.

try {
    $apiInstance->deleteFtpUser($org_id, $website_id, $user_id, $delete_home);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->deleteFtpUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **user_id** | **string**| The id of an FTP user. | |
| **delete_home** | **bool**| If set to true we will try to delete the homeDir for the user. User homeDir can only be deleted if it is a subdir for the website home. | [optional] |

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

## `deleteUserCrontab()`

```php
deleteUserCrontab($org_id, $website_id)
```

Delete user's crontab

Delete user's crontab. Remove crontab file from disk.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $apiInstance->deleteUserCrontab($org_id, $website_id);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->deleteUserCrontab: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

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

## `deleteWebsite()`

```php
deleteWebsite($org_id, $website_id, $force)
```

Delete website

Mark a website as deleted, which does not remove its data, or force remove all its data. For removing all data and metadata belonging to a website (including DB records), pass the `force=true` query parameter. This can only be done by a privileged MO member. In this case, all data is wiped, so use carefully. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$force = false; // bool

try {
    $apiInstance->deleteWebsite($org_id, $website_id, $force);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->deleteWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **force** | **bool**|  | [optional] [default to false] |

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
    echo 'Exception when calling WebsitesApi->deleteWebsiteDomainMapping: ', $e->getMessage(), PHP_EOL;
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

## `deleteWebsiteSetting()`

```php
deleteWebsiteSetting($org_id, $website_id, $setting_kind, $setting_key)
```

Delete a single override setting

Delete a single website level service setting

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$setting_kind = new \Upmind\EnhanceSdk\Model\SettingKind(); // SettingKind | The type of setting being applied
$setting_key = 'setting_key_example'; // string | A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - myhostname - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup

try {
    $apiInstance->deleteWebsiteSetting($org_id, $website_id, $setting_kind, $setting_key);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->deleteWebsiteSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **setting_kind** | [**SettingKind**](../Model/.md)| The type of setting being applied | |
| **setting_key** | **string**| A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - myhostname - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup | |

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



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
    echo 'Exception when calling WebsitesApi->deleteWebsiteSslCert: ', $e->getMessage(), PHP_EOL;
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

## `deleteWebsites()`

```php
deleteWebsites($org_id, $uuid_listing)
```

Delete websites

This operation can only be done by a logged in superadmin or owner of the organization or its parent organization(s).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$uuid_listing = new \Upmind\EnhanceSdk\Model\UuidListing(); // \Upmind\EnhanceSdk\Model\UuidListing | The ids of the websites to delete.

try {
    $apiInstance->deleteWebsites($org_id, $uuid_listing);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->deleteWebsites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **uuid_listing** | [**\Upmind\EnhanceSdk\Model\UuidListing**](../Model/UuidListing.md)| The ids of the websites to delete. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
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



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
    echo 'Exception when calling WebsitesApi->enableWebsiteSslCert: ', $e->getMessage(), PHP_EOL;
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

## `getFtpUsers()`

```php
getFtpUsers($org_id, $website_id): \Upmind\EnhanceSdk\Model\FtpUsersFullListing
```

Returns all ftp users data for a given website

Endpoint for retreaving ftp users for a given website Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getFtpUsers($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getFtpUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\FtpUsersFullListing**](../Model/FtpUsersFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScreenshotTimestamp()`

```php
getScreenshotTimestamp($org_id, $website_id): \Upmind\EnhanceSdk\Model\UnixTimestamp
```

Get last screeshot file's Timestamp

Returns Unix Timestamp for the last screenshot png file, if no screenshot found returns undefined

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getScreenshotTimestamp($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getScreenshotTimestamp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\UnixTimestamp**](../Model/UnixTimestamp.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSiteAccessToken()`

```php
getSiteAccessToken($org_id, $website_id): string
```

Get an access token for the given website

Request an access token for the given website. Note that access tokens may only be requested for normal websites, not for control panel websites. The access token is returned as an encrypted JWT in the response body. Session holder must either be a parent organization admin, or be a member with Site Access role of the given organization.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getSiteAccessToken($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getSiteAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserCrontab()`

```php
getUserCrontab($org_id, $website_id): \Upmind\EnhanceSdk\Model\CrontabFullListing
```

Get user's crontab

Get user's crontab. Only editable parts of crontab is returned.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getUserCrontab($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getUserCrontab: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\CrontabFullListing**](../Model/CrontabFullListing.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsite()`

```php
getWebsite($org_id, $website_id): \Upmind\EnhanceSdk\Model\Website
```

Get website

Returns detailed information about a single website. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsite($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\Website**](../Model/Website.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteBackupStatus()`

```php
getWebsiteBackupStatus($org_id, $website_id): \Upmind\EnhanceSdk\Model\BackupStatus
```

Get the status of an ongoing website backup operation

Returns the status of the currently ongoing backup or restore, if any. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsiteBackupStatus($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getWebsiteBackupStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\BackupStatus**](../Model/BackupStatus.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteCgroupLimits()`

```php
getWebsiteCgroupLimits($org_id, $website_id): \Upmind\EnhanceSdk\Model\CgroupLimits
```

Get the active cgroup limits for a website

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsiteCgroupLimits($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getWebsiteCgroupLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\CgroupLimits**](../Model/CgroupLimits.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteClonesStatus()`

```php
getWebsiteClonesStatus($org_id, $website_id, $domain): \Upmind\EnhanceSdk\Model\WebsiteCloneStatus
```

Get the status of the clone operation of a given website

Websites can be cloned, and cloning is a blocking operation that may require a considerable amount of time depending on the size of the website to clone as well as of the state of the network. This endpoint provides a way to query what is the current status of the clone operation of a given source website, given its ID and the new domain of the cloned website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain = 'domain_example'; // string | The unique domain of the cloned website

try {
    $result = $apiInstance->getWebsiteClonesStatus($org_id, $website_id, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getWebsiteClonesStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain** | **string**| The unique domain of the cloned website | |

### Return type

[**\Upmind\EnhanceSdk\Model\WebsiteCloneStatus**](../Model/WebsiteCloneStatus.md)

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
    echo 'Exception when calling WebsitesApi->getWebsiteDomainDnsQuery: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
    echo 'Exception when calling WebsitesApi->getWebsiteDomainMapping: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
    echo 'Exception when calling WebsitesApi->getWebsiteDomainMappingDnsStatus: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
    echo 'Exception when calling WebsitesApi->getWebsiteDomainMappings: ', $e->getMessage(), PHP_EOL;
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

## `getWebsiteHtaccessIpsRule()`

```php
getWebsiteHtaccessIpsRule($org_id, $website_id): \Upmind\EnhanceSdk\Model\RequireIpsRule
```

Returns current rules of blocked/whitelisted IPs

Allowlisting or blocklisting IPs via .htaccess is done using Require ip rule. This endpoint reads the rules from the .htaccess in the website's public_html. Note that this is not the same .htaccess that is used for writing redirect rules. In future this endpoint might be merged with the htaccess endpoint to allow writing rewrite rules and ip allow lists to any website directory.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsiteHtaccessIpsRule($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getWebsiteHtaccessIpsRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\RequireIpsRule**](../Model/RequireIpsRule.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteHtaccessRewrites()`

```php
getWebsiteHtaccessRewrites($org_id, $website_id): \Upmind\EnhanceSdk\Model\RewriteChainFullListing
```

Reads chains of rewrite rules

Rewrites are `RewriteRule`s in website's .htaccess. We use terminology \"rewrite chain\" to refer to 0 or more `RewriteCond`s directive ended by a `RewriteRule`. To identify a rewrite chain in the .htaccess file, we use line numbers. Line numbers serve two purposes. It acts loosely as an identifier, i.e. if you want to remove some chain or replace it by another, you would use the same line number you received when you read the `GET` endpoint. Second purpose is that of ordering. If you want some chain to be above another in the file, you have to make sure that the line number is less.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsiteHtaccessRewrites($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getWebsiteHtaccessRewrites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\RewriteChainFullListing**](../Model/RewriteChainFullListing.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteMetrics()`

```php
getWebsiteMetrics($org_id, $website_id, $start, $end, $granularity): \Upmind\EnhanceSdk\Model\WebsiteMetricsFullListing
```

Get website metrics

Returns website metrics between the optional start and end date. Defaults to last 24 hours. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start datetime UTC.
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End datetime UTC.
$granularity = 'granularity_example'; // string | Takes one of `hour`, `day`, defaults to `day`

try {
    $result = $apiInstance->getWebsiteMetrics($org_id, $website_id, $start, $end, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getWebsiteMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **start** | **\DateTime**| Start datetime UTC. | [optional] |
| **end** | **\DateTime**| End datetime UTC. | [optional] |
| **granularity** | **string**| Takes one of &#x60;hour&#x60;, &#x60;day&#x60;, defaults to &#x60;day&#x60; | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\WebsiteMetricsFullListing**](../Model/WebsiteMetricsFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteMySQLDBs()`

```php
getWebsiteMySQLDBs($org_id, $website_id): \Upmind\EnhanceSdk\Model\MySQLDBsFullListing
```

Get website MySQL databases

Returns all MySQL databases belonging to the given website. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsiteMySQLDBs($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getWebsiteMySQLDBs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\MySQLDBsFullListing**](../Model/MySQLDBsFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteServerDomains()`

```php
getWebsiteServerDomains($org_id, $website_id): \Upmind\EnhanceSdk\Model\WebsiteServerDomains
```

Fetch website server domains

This endpoint will return the server domain for the application, email and database roles to which this website is assigned.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsiteServerDomains($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getWebsiteServerDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\WebsiteServerDomains**](../Model/WebsiteServerDomains.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteSetting()`

```php
getWebsiteSetting($org_id, $website_id, $setting_kind): mixed
```

Get the value for a particular setting

Returns the value for a particular setting as a JSON object

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$setting_kind = new \Upmind\EnhanceSdk\Model\SettingKind(); // SettingKind | The type of setting being applied

try {
    $result = $apiInstance->getWebsiteSetting($org_id, $website_id, $setting_kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getWebsiteSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
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

## `getWebsiteSshKeys()`

```php
getWebsiteSshKeys($org_id, $website_id, $sanitize): \Upmind\EnhanceSdk\Model\SshKeyFullListing
```

Get website's authorized SSH keys

Returns a list of authorized public SSH keys. Invalid SSH keys entries in the authorized_keys file will be ignored. If the authorized_keys file does not exists, an empty set will be returned.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$sanitize = false; // bool | If set to true, the SSH keys with unrecognized comments will be sanitized by changing the comment to a valid format that can be used to store metadata. If any of the keys requires sanitization the content of the authorized_keys file will be edited accordingly before returning the set of keys. If instead set to false, only the SSH keys that are recognized as valid (that is, contain valid metadata in their comments), will be returned, all the other keys will be skipped.

try {
    $result = $apiInstance->getWebsiteSshKeys($org_id, $website_id, $sanitize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getWebsiteSshKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **sanitize** | **bool**| If set to true, the SSH keys with unrecognized comments will be sanitized by changing the comment to a valid format that can be used to store metadata. If any of the keys requires sanitization the content of the authorized_keys file will be edited accordingly before returning the set of keys. If instead set to false, only the SSH keys that are recognized as valid (that is, contain valid metadata in their comments), will be returned, all the other keys will be skipped. | [optional] [default to false] |

### Return type

[**\Upmind\EnhanceSdk\Model\SshKeyFullListing**](../Model/SshKeyFullListing.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

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



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
    echo 'Exception when calling WebsitesApi->getWebsiteSslCert: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
    echo 'Exception when calling WebsitesApi->getWebsiteSslCerts: ', $e->getMessage(), PHP_EOL;
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

## `getWebsites()`

```php
getWebsites($org_id, $offset, $limit, $sort_by, $sort_order, $search, $recursion, $plan_id, $subscription_id, $status, $is_suspended, $roles, $servers, $kind, $show_deleted, $show_aliases): \Upmind\EnhanceSdk\Model\WebsitesListing
```

Get websites

Returns all websites belonging to the organization. The results may optionally be sorted and paginated. If the recursive flag is set, the websites of customers of reseller customers are returned as well recursively, up to an optional max depth value. Session holder must be at least a `SuperAdmin` in this org or a parent org, or must have access to at least one website in this org. If the member is not an admin but has access to one or more websites, only those websites are returned.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
$search = 'search_example'; // string | Limit the result set to the resources whose names, partially and case insensitively, match the specified search term. E.g. for websites, this is their domain or tag, for databases the database name, for emails the email address or mailbox name, etc. A website will also be returned if the search term exactly matches the website's uuid.
$recursion = new \Upmind\EnhanceSdk\Model\Recursion(); // Recursion | If set to directCustomers then websites belonging to direct customers of the orgId will be returned.  If set to infinite then websites belonging to customers of customers (and so on) will be returned.  If unset then no recursion will be performed.
$plan_id = 56; // int | Limit the result set to resources under subscriptions to the plan.
$subscription_id = 56; // int | Limit the result set to resources under subscription.
$status = new \Upmind\EnhanceSdk\Model\WebsiteStatus(); // WebsiteStatus | Limit the result set to websites with the specified status. Only applicable if `recursive` is set to true.
$is_suspended = True; // bool | Limit the result set to websites which are currently suspended or not suspended.
$roles = array(new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\ServerRole()); // \Upmind\EnhanceSdk\Model\ServerRole[] | Limit the result set to websites having one of these roles assigned to a server.
$servers = array('servers_example'); // string[] | Limit the result set to websites having one of the selected roles (or all roles) on one of these servers.
$kind = new \Upmind\EnhanceSdk\Model\WebsiteKind(); // WebsiteKind | Limit the results to websites of the specified type.
$show_deleted = True; // bool | Filters out deleted websites, which are otherwise returned in the result. Defaults to `showDeleted=true` if not set. Can only be set by MO, if set by others, a 403 is returned.
$show_aliases = True; // bool | Includes domain aliases in search results and listings in addition to the website's primary domain.

try {
    $result = $apiInstance->getWebsites($org_id, $offset, $limit, $sort_by, $sort_order, $search, $recursion, $plan_id, $subscription_id, $status, $is_suspended, $roles, $servers, $kind, $show_deleted, $show_aliases);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->getWebsites: ', $e->getMessage(), PHP_EOL;
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
| **search** | **string**| Limit the result set to the resources whose names, partially and case insensitively, match the specified search term. E.g. for websites, this is their domain or tag, for databases the database name, for emails the email address or mailbox name, etc. A website will also be returned if the search term exactly matches the website&#39;s uuid. | [optional] |
| **recursion** | [**Recursion**](../Model/.md)| If set to directCustomers then websites belonging to direct customers of the orgId will be returned.  If set to infinite then websites belonging to customers of customers (and so on) will be returned.  If unset then no recursion will be performed. | [optional] |
| **plan_id** | **int**| Limit the result set to resources under subscriptions to the plan. | [optional] |
| **subscription_id** | **int**| Limit the result set to resources under subscription. | [optional] |
| **status** | [**WebsiteStatus**](../Model/.md)| Limit the result set to websites with the specified status. Only applicable if &#x60;recursive&#x60; is set to true. | [optional] |
| **is_suspended** | **bool**| Limit the result set to websites which are currently suspended or not suspended. | [optional] |
| **roles** | [**\Upmind\EnhanceSdk\Model\ServerRole[]**](../Model/\Upmind\EnhanceSdk\Model\ServerRole.md)| Limit the result set to websites having one of these roles assigned to a server. | [optional] |
| **servers** | [**string[]**](../Model/string.md)| Limit the result set to websites having one of the selected roles (or all roles) on one of these servers. | [optional] |
| **kind** | [**WebsiteKind**](../Model/.md)| Limit the results to websites of the specified type. | [optional] |
| **show_deleted** | **bool**| Filters out deleted websites, which are otherwise returned in the result. Defaults to &#x60;showDeleted&#x3D;true&#x60; if not set. Can only be set by MO, if set by others, a 403 is returned. | [optional] |
| **show_aliases** | **bool**| Includes domain aliases in search results and listings in addition to the website&#39;s primary domain. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\WebsitesListing**](../Model/WebsitesListing.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pushWebsiteLive()`

```php
pushWebsiteLive($org_id, $website_id)
```

Making a staging website live

Validates that the operation is allowed for the website. Session holder must be at least a `SuperAdmin` in the org which owns the website, or a parent org. If the website is not owned by the MO, the subscription must have sufficient available 'websites' resource

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $apiInstance->pushWebsiteLive($org_id, $website_id);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->pushWebsiteLive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

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

## `setWebsiteCgroupLimits()`

```php
setWebsiteCgroupLimits($org_id, $website_id, $cgroup_limits)
```

Set the active cgroup limits for a website (Master org only)

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$cgroup_limits = new \Upmind\EnhanceSdk\Model\CgroupLimits(); // \Upmind\EnhanceSdk\Model\CgroupLimits | Cgroup limits.

try {
    $apiInstance->setWebsiteCgroupLimits($org_id, $website_id, $cgroup_limits);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->setWebsiteCgroupLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **cgroup_limits** | [**\Upmind\EnhanceSdk\Model\CgroupLimits**](../Model/CgroupLimits.md)| Cgroup limits. | |

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

## `setWebsiteSetting()`

```php
setWebsiteSetting($org_id, $website_id, $setting_kind, $setting_key, $service_setting_value)
```

Set a single override setting

Set or replace a single website level service setting

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$setting_kind = new \Upmind\EnhanceSdk\Model\SettingKind(); // SettingKind | The type of setting being applied
$setting_key = 'setting_key_example'; // string | A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - myhostname - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup
$service_setting_value = new \Upmind\EnhanceSdk\Model\ServiceSettingValue(); // \Upmind\EnhanceSdk\Model\ServiceSettingValue

try {
    $apiInstance->setWebsiteSetting($org_id, $website_id, $setting_kind, $setting_key, $service_setting_value);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->setWebsiteSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **setting_kind** | [**SettingKind**](../Model/.md)| The type of setting being applied | |
| **setting_key** | **string**| A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - myhostname - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup | |
| **service_setting_value** | [**\Upmind\EnhanceSdk\Model\ServiceSettingValue**](../Model/ServiceSettingValue.md)|  | |

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

## `takeScreenshot()`

```php
takeScreenshot($org_id, $website_id)
```

Sends command to take website screenshot

Sends Command to screenshotd service, to take website screenshot immediately

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $apiInstance->takeScreenshot($org_id, $website_id);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->takeScreenshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

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

## `unauthorizeWebsiteSshKey()`

```php
unauthorizeWebsiteSshKey($org_id, $website_id, $key_id)
```

Unauthorize the public SSH key with the given ID.

This operation will unauthorize the given public SSH key by deleting its content from the website's .ssh/authorized_keys file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$key_id = 'key_id_example'; // string | The unique ID of the SSH key within the same authorized_keys file.

try {
    $apiInstance->unauthorizeWebsiteSshKey($org_id, $website_id, $key_id);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->unauthorizeWebsiteSshKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **key_id** | **string**| The unique ID of the SSH key within the same authorized_keys file. | |

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

## `updateFtpUser()`

```php
updateFtpUser($org_id, $website_id, $user_id, $ftp_user_update)
```

Update given FTP user

Endpoint for updating FTP user for a given website We only allow user's homeDir and password to be updated. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$user_id = 'user_id_example'; // string | The id of an FTP user.
$ftp_user_update = new \Upmind\EnhanceSdk\Model\FtpUserUpdate(); // \Upmind\EnhanceSdk\Model\FtpUserUpdate | FTP User

try {
    $apiInstance->updateFtpUser($org_id, $website_id, $user_id, $ftp_user_update);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->updateFtpUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **user_id** | **string**| The id of an FTP user. | |
| **ftp_user_update** | [**\Upmind\EnhanceSdk\Model\FtpUserUpdate**](../Model/FtpUserUpdate.md)| FTP User | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserCrontab()`

```php
updateUserCrontab($org_id, $website_id, $update_crontab_full_listing)
```

Update user's crontab

Update user's crontab. Note that users are able to update only cron expressions and environment variables.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$update_crontab_full_listing = new \Upmind\EnhanceSdk\Model\UpdateCrontabFullListing(); // \Upmind\EnhanceSdk\Model\UpdateCrontabFullListing | List of crontab expressions to be inserted into user's crontab. To identify a crontab expressions in the crontab file, we use line numbers.

try {
    $apiInstance->updateUserCrontab($org_id, $website_id, $update_crontab_full_listing);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->updateUserCrontab: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **update_crontab_full_listing** | [**\Upmind\EnhanceSdk\Model\UpdateCrontabFullListing**](../Model/UpdateCrontabFullListing.md)| List of crontab expressions to be inserted into user&#39;s crontab. To identify a crontab expressions in the crontab file, we use line numbers. | |

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

## `updateWebsite()`

```php
updateWebsite($org_id, $website_id, $update_website)
```

Update website

Updates the website. It may be used to enable or disable a specific version of PHP for a website, in which case a corresponding `PhpCd` instance is installed or uninstalled on the same server of the website. When enabling the website PHP it is also possible to specify whether the SSH daemon will need to be enabled in the `PhpCd` service at startup, via the `ssh` boolean flag. Moreover, if PHP is already enabled for a website, it is possible to enable or disable its SSH by only specifying the `ssh` flag. The endpoint is also responsible for assigning tags to a website. Note that the input overwrites all existing tags, so when adding a new tag, the `tags` property also has to include existing tags that are to be kept. Only a parent organization or MO admin may suspend websites. The website may be moved to another subscription, if that subscription has enough quota to accommodate the new website, unless the MO is performing the action, in which case they may move any website off a subscription or to a subscription that doesn't necessary have quota left. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$update_website = new \Upmind\EnhanceSdk\Model\UpdateWebsite(); // \Upmind\EnhanceSdk\Model\UpdateWebsite | Website update details.

try {
    $apiInstance->updateWebsite($org_id, $website_id, $update_website);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->updateWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **update_website** | [**\Upmind\EnhanceSdk\Model\UpdateWebsite**](../Model/UpdateWebsite.md)| Website update details. | |

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
    echo 'Exception when calling WebsitesApi->updateWebsiteDomainMapping: ', $e->getMessage(), PHP_EOL;
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

## `updateWebsiteHtaccessIpsRule()`

```php
updateWebsiteHtaccessIpsRule($org_id, $website_id, $require_ips_rule)
```

Sets a rule over provided ips - either block or allow

Allowlisting or blocklisting IPs via .htaccess is done using Require ip rule. This endpoint puts the rule (creating .htaccess if it doesn't exist in process) into the public_html/.htaccess file. Note that this is not the same .htaccess that is used for writing redirect rules. In future this endpoint might be merged with the htaccess endpoint to allow writing rewrite rules and ip allow lists to any website directory.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$require_ips_rule = new \Upmind\EnhanceSdk\Model\RequireIpsRule(); // \Upmind\EnhanceSdk\Model\RequireIpsRule | List of ips and a rule which should apply to them - either block all these ips or allow only these ips.

try {
    $apiInstance->updateWebsiteHtaccessIpsRule($org_id, $website_id, $require_ips_rule);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->updateWebsiteHtaccessIpsRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **require_ips_rule** | [**\Upmind\EnhanceSdk\Model\RequireIpsRule**](../Model/RequireIpsRule.md)| List of ips and a rule which should apply to them - either block all these ips or allow only these ips. | |

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

## `updateWebsiteHtaccessRewrites()`

```php
updateWebsiteHtaccessRewrites($org_id, $website_id, $update_rewrite_chain_full_listing)
```

Updates rewrite rules

Rewrites are `RewriteRule`s in website's .htaccess file. We use terminology \"rewrite chain\" to refer to 0 or more `RewriteCond`s directive ended by `RewriteRule`.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$update_rewrite_chain_full_listing = new \Upmind\EnhanceSdk\Model\UpdateRewriteChainFullListing(); // \Upmind\EnhanceSdk\Model\UpdateRewriteChainFullListing | List of rewrite chains to be inserted into the .htaccess file. To identify a rewrite chain in the .htaccess file, we use line numbers. Line numbers serve two purposes. It acts loosely as an identifier, i.e. if you want to remove some chain or replace it by another, you would use the same line number you received when you read the `GET` endpoint. Second purpose is that of ordering. If you want some chain to be above another in the file, you have to make sure that the line number is less. To delete a rewrite chain, just send a line number without any additional information for a single `RewriteChain` object.

try {
    $apiInstance->updateWebsiteHtaccessRewrites($org_id, $website_id, $update_rewrite_chain_full_listing);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->updateWebsiteHtaccessRewrites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **update_rewrite_chain_full_listing** | [**\Upmind\EnhanceSdk\Model\UpdateRewriteChainFullListing**](../Model/UpdateRewriteChainFullListing.md)| List of rewrite chains to be inserted into the .htaccess file. To identify a rewrite chain in the .htaccess file, we use line numbers. Line numbers serve two purposes. It acts loosely as an identifier, i.e. if you want to remove some chain or replace it by another, you would use the same line number you received when you read the &#x60;GET&#x60; endpoint. Second purpose is that of ordering. If you want some chain to be above another in the file, you have to make sure that the line number is less. To delete a rewrite chain, just send a line number without any additional information for a single &#x60;RewriteChain&#x60; object. | |

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
    echo 'Exception when calling WebsitesApi->updateWebsitePrimaryDomain: ', $e->getMessage(), PHP_EOL;
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

## `updateWebsiteSshKey()`

```php
updateWebsiteSshKey($org_id, $website_id, $key_id, $ssh_key_update)
```

Update an existing website public SSH key.

This operation will update the given public SSH key value, and/or its associated friendly name. An error will be returned if none of the expected arguments of the request body is specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$key_id = 'key_id_example'; // string | The unique ID of the SSH key within the same authorized_keys file.
$ssh_key_update = new \Upmind\EnhanceSdk\Model\SshKeyUpdate(); // \Upmind\EnhanceSdk\Model\SshKeyUpdate | The public SSH key updatable fields.

try {
    $apiInstance->updateWebsiteSshKey($org_id, $website_id, $key_id, $ssh_key_update);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->updateWebsiteSshKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **key_id** | **string**| The unique ID of the SSH key within the same authorized_keys file. | |
| **ssh_key_update** | [**\Upmind\EnhanceSdk\Model\SshKeyUpdate**](../Model/SshKeyUpdate.md)| The public SSH key updatable fields. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

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



$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
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
    echo 'Exception when calling WebsitesApi->uploadWebsiteSslCerts: ', $e->getMessage(), PHP_EOL;
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

## `validateWebsiteOperation()`

```php
validateWebsiteOperation($org_id, $website_id, $website_operation_validation): \Upmind\EnhanceSdk\Model\ValidationResult
```

Validate whether a website operation is allowed

Validates that the operation is allowed for the website. Currently this is only for verifying whether a website may be moved to another subscription, but this could later be expanded with other actions that can be verified. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\WebsitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$website_operation_validation = new \Upmind\EnhanceSdk\Model\WebsiteOperationValidation(); // \Upmind\EnhanceSdk\Model\WebsiteOperationValidation

try {
    $result = $apiInstance->validateWebsiteOperation($org_id, $website_id, $website_operation_validation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsitesApi->validateWebsiteOperation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **website_operation_validation** | [**\Upmind\EnhanceSdk\Model\WebsiteOperationValidation**](../Model/WebsiteOperationValidation.md)|  | |

### Return type

[**\Upmind\EnhanceSdk\Model\ValidationResult**](../Model/ValidationResult.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
