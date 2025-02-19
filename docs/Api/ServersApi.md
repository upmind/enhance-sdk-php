# Upmind\EnhanceSdk\ServersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**configureServer()**](ServersApi.md#configureServer) | **PATCH** /servers/{server_id} | Configure a server |
| [**createServerDomain()**](ServersApi.md#createServerDomain) | **POST** /servers/{server_id}/domains | Create a domain which is mapped to a server |
| [**createServerGroup()**](ServersApi.md#createServerGroup) | **POST** /servers/groups | Creates a new server group |
| [**createServerNetworkInterfaceIp()**](ServersApi.md#createServerNetworkInterfaceIp) | **POST** /servers/{server_id}/interfaces/{interface}/ips | Create server network interface secondary IP |
| [**createSlave()**](ServersApi.md#createSlave) | **POST** /servers/slaves | Create a slave node |
| [**deleteServerDomain()**](ServersApi.md#deleteServerDomain) | **DELETE** /servers/{server_id}/domains/{domain_id} | Delete a mapped server domain |
| [**deleteServerFromGroup()**](ServersApi.md#deleteServerFromGroup) | **DELETE** /servers/{server_id}/group | Delete server from group |
| [**deleteServerGroup()**](ServersApi.md#deleteServerGroup) | **DELETE** /servers/groups/{group_id} | Deletes an existing server group |
| [**deleteServerNetworkInterfaceIp()**](ServersApi.md#deleteServerNetworkInterfaceIp) | **DELETE** /servers/{server_id}/interfaces/{interface}/ips/{ip} | Delete server network interface secondary IP |
| [**deleteServerPrimaryIpv6()**](ServersApi.md#deleteServerPrimaryIpv6) | **DELETE** /v2/servers/{server_id}/primary-ipv6 | Deletes/unsets the primary IPv6 address for a server. |
| [**deleteServiceSetting()**](ServersApi.md#deleteServiceSetting) | **DELETE** /servers/{server_id}/settings/{setting_kind}/{setting_key} | Delete a single override setting |
| [**deleteSlave()**](ServersApi.md#deleteSlave) | **DELETE** /servers/{server_id} | Delete a (slave) server |
| [**enableFsQuotaLimits()**](ServersApi.md#enableFsQuotaLimits) | **POST** /servers/{server_id}/fs_quota_limits | Enable FS quota limits on the server |
| [**getAppcdVersion()**](ServersApi.md#getAppcdVersion) | **GET** /servers/{server_id}/appcd/version | Get the version of the running appcd |
| [**getClientIp()**](ServersApi.md#getClientIp) | **GET** /client_ip | Reflect back the IP of the API consumer |
| [**getControlPanelRoleInfo()**](ServersApi.md#getControlPanelRoleInfo) | **GET** /servers/master/roles/control | Get master server control panel role info |
| [**getDatabaseRoleMysqlKind()**](ServersApi.md#getDatabaseRoleMysqlKind) | **GET** /v2/servers/{server_id}/database-role | Gets the MySQL kind for a given server. |
| [**getFsQuotaStatus()**](ServersApi.md#getFsQuotaStatus) | **GET** /servers/{server_id}/fs_quota_limits | Get whether FS quota was enabled on the server |
| [**getHttpdStatus()**](ServersApi.md#getHttpdStatus) | **GET** /servers/{server_id}/roles/{role}/httpd_status | Get status of a running httpd server. |
| [**getInstallCmd()**](ServersApi.md#getInstallCmd) | **GET** /servers/install-cmd | Get slave installation command |
| [**getMysqlMyCnf()**](ServersApi.md#getMysqlMyCnf) | **GET** /v2/servers/{server_id}/my-cnf | Download my.cnf for a given server |
| [**getOwaspRulesVersion()**](ServersApi.md#getOwaspRulesVersion) | **GET** /v2/servers/{server_id}/owasp | Get the current and available version of the OWASP rules |
| [**getRegistrationKey()**](ServersApi.md#getRegistrationKey) | **GET** /servers/registration-key | Get slave registration key |
| [**getServerDiskUsage()**](ServersApi.md#getServerDiskUsage) | **GET** /servers/{server_id}/disk-usage | Get server disk usage |
| [**getServerFpmSettings()**](ServersApi.md#getServerFpmSettings) | **GET** /servers/{server_id}/php/fpm | Get php-fpm config for all the websites on a server |
| [**getServerGroups()**](ServersApi.md#getServerGroups) | **GET** /servers/groups | Returns all server groups |
| [**getServerHostnameWebsite()**](ServersApi.md#getServerHostnameWebsite) | **GET** /servers/{server_id}/domains | Get domains which are mapped to a server |
| [**getServerInfo()**](ServersApi.md#getServerInfo) | **GET** /servers/{server_id} | Get server info |
| [**getServerIowait()**](ServersApi.md#getServerIowait) | **GET** /servers/{server_id}/iowait | Get server iowait |
| [**getServerLoad()**](ServersApi.md#getServerLoad) | **GET** /servers/{server_id}/load | Get server system load |
| [**getServerMemoryUsage()**](ServersApi.md#getServerMemoryUsage) | **GET** /servers/{server_id}/memory-usage | Get server memory usage |
| [**getServerModSecurityConfig()**](ServersApi.md#getServerModSecurityConfig) | **GET** /v2/servers/{server_id}/modsec_conf | Get mod security config |
| [**getServerModSecurityStatus()**](ServersApi.md#getServerModSecurityStatus) | **GET** /v2/servers/{server_id}/modsec_status | Get mod security status for a server |
| [**getServerNetworkInterfaces()**](ServersApi.md#getServerNetworkInterfaces) | **GET** /servers/{server_id}/interfaces | Get server network interfaces |
| [**getServerNetworkStats()**](ServersApi.md#getServerNetworkStats) | **GET** /servers/{server_id}/network-stats | Get server network stats |
| [**getServerRole()**](ServersApi.md#getServerRole) | **GET** /servers/{server_id}/roles/{role} | Get server role info |
| [**getServerRoles()**](ServersApi.md#getServerRoles) | **GET** /servers/{server_id}/roles | Get server roles info |
| [**getServerStats()**](ServersApi.md#getServerStats) | **GET** /servers/{server_id}/historic-stats | Get Server stats |
| [**getServerStatus()**](ServersApi.md#getServerStatus) | **GET** /servers/{server_id}/status | Get server status |
| [**getServerUptime()**](ServersApi.md#getServerUptime) | **GET** /servers/{server_id}/uptime | Get server uptime in seconds |
| [**getServers()**](ServersApi.md#getServers) | **GET** /servers | Get installed servers |
| [**getServiceSetting()**](ServersApi.md#getServiceSetting) | **GET** /servers/{server_id}/settings/{setting_kind} | Get the value for a particular setting |
| [**getSystemPackageUpdateInfo()**](ServersApi.md#getSystemPackageUpdateInfo) | **GET** /servers/{server_id}/packages/update | Returns a map of upgradable packages. |
| [**getWebserverKind()**](ServersApi.md#getWebserverKind) | **GET** /servers/{server_id}/webserver | Get web server |
| [**getWebsiteFpmSettings()**](ServersApi.md#getWebsiteFpmSettings) | **GET** /servers/{server_id}/php/fpm/{website_id} | Get php-fpm config for the specified website |
| [**initAllServers()**](ServersApi.md#initAllServers) | **POST** /servers/init | Attempts to initialize all roles |
| [**installDatabaseRole()**](ServersApi.md#installDatabaseRole) | **PUT** /v2/servers/{server_id}/database-role | Enables the database role on a given ServerUuid |
| [**installServerRole()**](ServersApi.md#installServerRole) | **PUT** /servers/{server_id}/roles/{role} | Install server role |
| [**resetServerModSecurityConfig()**](ServersApi.md#resetServerModSecurityConfig) | **DELETE** /v2/servers/{server_id}/modsec_conf | Delete custom mod_security config and reset to default |
| [**resetWebServerConfig()**](ServersApi.md#resetWebServerConfig) | **POST** /servers/{server_id}/webserver/config/reset | Reset the config for the web server to default. |
| [**restartMysql()**](ServersApi.md#restartMysql) | **POST** /v2/servers/{server_id}/database-role/restart | Restart MySQL gracefully |
| [**saveMysqlMyCnf()**](ServersApi.md#saveMysqlMyCnf) | **PUT** /v2/servers/{server_id}/my-cnf | Save a new my.cnf |
| [**setLiteSpeedAdminPassword()**](ServersApi.md#setLiteSpeedAdminPassword) | **POST** /servers/{server_id}/webserver/litespeed/password | Set a new LiteSpeed admin password. |
| [**setServerDecommissioned()**](ServersApi.md#setServerDecommissioned) | **PUT** /servers/{server_id}/decommissioned | Set server to decommissioned |
| [**setServerModSecurityConfig()**](ServersApi.md#setServerModSecurityConfig) | **PUT** /v2/servers/{server_id}/modsec_conf | Set mod security config |
| [**setServerModSecurityStatus()**](ServersApi.md#setServerModSecurityStatus) | **PUT** /v2/servers/{server_id}/modsec_status | Set mod security status for a server |
| [**setServerStatus()**](ServersApi.md#setServerStatus) | **POST** /servers/{server_id}/status | Set the status of one server. |
| [**setServiceSetting()**](ServersApi.md#setServiceSetting) | **PUT** /servers/{server_id}/settings/{setting_kind}/{setting_key} | Set a single service setting |
| [**setServiceStatus()**](ServersApi.md#setServiceStatus) | **POST** /servers/{server_id}/services/{service_id}/status | Set the status of one service installed in the server specified. |
| [**setWebserverKind()**](ServersApi.md#setWebserverKind) | **PUT** /servers/{server_id}/webserver | Set the web server kind for one server. |
| [**uninstallServerRole()**](ServersApi.md#uninstallServerRole) | **DELETE** /servers/{server_id}/roles/{role} | Uninstall a server role |
| [**updateOwaspRules()**](ServersApi.md#updateOwaspRules) | **POST** /v2/servers/{server_id}/owasp | Upgrade OWASP rules |
| [**updateServerGroup()**](ServersApi.md#updateServerGroup) | **PUT** /servers/groups/{group_id} | Updates an existing server group&#39;s name |
| [**updateServerPrimaryIp()**](ServersApi.md#updateServerPrimaryIp) | **PUT** /servers/{server_id}/primary-ip | Updates the primary IP of the server in the database and in-memory metadata. This operation will not affect the IP used for service communication until the next restart of orchd. The new IP will be used for creation of new resources such as websites on this server but existing websites will not have their IP changed. |
| [**updateServerPrimaryIpv6()**](ServersApi.md#updateServerPrimaryIpv6) | **PUT** /v2/servers/{server_id}/primary-ipv6 | Updates or sets the primary ipv6 address of the server.  This endpoint will not change existing websites&#39; DNS but the new record will be applied to all future zones. |
| [**updateServerRole()**](ServersApi.md#updateServerRole) | **PATCH** /servers/{server_id}/roles/{role} | Update server role |
| [**updateService()**](ServersApi.md#updateService) | **PUT** /servers/{server_id}/services/{service_id}/update | Special endpoint to update a particular stopped service to its latest version. |
| [**updateSystemPackage()**](ServersApi.md#updateSystemPackage) | **PUT** /servers/{server_id}/packages/update | Updates a system package to its latest version. |
| [**validateRegistrationKey()**](ServersApi.md#validateRegistrationKey) | **POST** /servers/registration-key/validate | Validate slave registration key |


## `configureServer()`

```php
configureServer($server_id, $server_conf)
```

Configure a server

Configures a server with roles to enable or disable, a friendly name to give (for identification purposes), and/or to assign server to a group. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$server_conf = new \Upmind\EnhanceSdk\Model\ServerConf(); // \Upmind\EnhanceSdk\Model\ServerConf

try {
    $apiInstance->configureServer($server_id, $server_conf);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->configureServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **server_conf** | [**\Upmind\EnhanceSdk\Model\ServerConf**](../Model/ServerConf.md)|  | |

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

## `createServerDomain()`

```php
createServerDomain($server_id, $body): \Upmind\EnhanceSdk\Model\WebsiteAndDomainUuid
```

Create a domain which is mapped to a server

Maps a hostname to a server by creating a special kind of website with kind `ServerHostname`.  This can be used for POP/IMAP/SMTP as well as HTTP. LetsEncrypt certificates will be issued if the DNS resolves.  Only one server hostname website will be created, additional domains will be added as aliases.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$body = 'body_example'; // string

try {
    $result = $apiInstance->createServerDomain($server_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->createServerDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **body** | **string**|  | |

### Return type

[**\Upmind\EnhanceSdk\Model\WebsiteAndDomainUuid**](../Model/WebsiteAndDomainUuid.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createServerGroup()`

```php
createServerGroup($new_server_group): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Creates a new server group

Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_server_group = new \Upmind\EnhanceSdk\Model\NewServerGroup(); // \Upmind\EnhanceSdk\Model\NewServerGroup | The name of the new server group.

try {
    $result = $apiInstance->createServerGroup($new_server_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->createServerGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_server_group** | [**\Upmind\EnhanceSdk\Model\NewServerGroup**](../Model/NewServerGroup.md)| The name of the new server group. | |

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

## `createServerNetworkInterfaceIp()`

```php
createServerNetworkInterfaceIp($server_id, $interface, $new_server_ip)
```

Create server network interface secondary IP

Creates a new secondary IP address for the server's network interface. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$interface = 'interface_example'; // string | The name of the network interface
$new_server_ip = new \Upmind\EnhanceSdk\Model\NewServerIp(); // \Upmind\EnhanceSdk\Model\NewServerIp

try {
    $apiInstance->createServerNetworkInterfaceIp($server_id, $interface, $new_server_ip);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->createServerNetworkInterfaceIp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **interface** | **string**| The name of the network interface | |
| **new_server_ip** | [**\Upmind\EnhanceSdk\Model\NewServerIp**](../Model/NewServerIp.md)|  | |

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

## `createSlave()`

```php
createSlave($key, $slave_registration)
```

Create a slave node

This endpoint is called by the slave server installation script and not by the API. Only included for completeness.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The secret registration key
$slave_registration = new \Upmind\EnhanceSdk\Model\SlaveRegistration(); // \Upmind\EnhanceSdk\Model\SlaveRegistration

try {
    $apiInstance->createSlave($key, $slave_registration);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->createSlave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The secret registration key | |
| **slave_registration** | [**\Upmind\EnhanceSdk\Model\SlaveRegistration**](../Model/SlaveRegistration.md)|  | |

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

## `deleteServerDomain()`

```php
deleteServerDomain($server_id, $domain_id)
```

Delete a mapped server domain

Deletes a server domain mapping and the domain itself.  Does not delete associated SSLs.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$domain_id = 'domain_id_example'; // string | The id of the domain.

try {
    $apiInstance->deleteServerDomain($server_id, $domain_id);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->deleteServerDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
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

## `deleteServerFromGroup()`

```php
deleteServerFromGroup($server_id)
```

Delete server from group

Deletes a server from the server group it is in, if any. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $apiInstance->deleteServerFromGroup($server_id);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->deleteServerFromGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

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

## `deleteServerGroup()`

```php
deleteServerGroup($group_id)
```

Deletes an existing server group

Does not delete servers in the group, but instead simply unlinks those servers from this group. These servers, if any, will end up not being in any group after this call succeeds. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | The id of the server group.

try {
    $apiInstance->deleteServerGroup($group_id);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->deleteServerGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| The id of the server group. | |

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

## `deleteServerNetworkInterfaceIp()`

```php
deleteServerNetworkInterfaceIp($server_id, $interface, $ip)
```

Delete server network interface secondary IP

Deletes a secondary IP address from the server's network interface. Fails if the IP address is the primary address of the server. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$interface = 'interface_example'; // string | The name of the network interface
$ip = 'ip_example'; // string | The IP address in quad dot notation

try {
    $apiInstance->deleteServerNetworkInterfaceIp($server_id, $interface, $ip);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->deleteServerNetworkInterfaceIp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **interface** | **string**| The name of the network interface | |
| **ip** | **string**| The IP address in quad dot notation | |

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

## `deleteServerPrimaryIpv6()`

```php
deleteServerPrimaryIpv6($server_id)
```

Deletes/unsets the primary IPv6 address for a server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $apiInstance->deleteServerPrimaryIpv6($server_id);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->deleteServerPrimaryIpv6: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

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

## `deleteServiceSetting()`

```php
deleteServiceSetting($server_id, $setting_kind, $setting_key): \Upmind\EnhanceSdk\Model\Outcome
```

Delete a single override setting

Delete a single service setting value

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$setting_kind = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\SettingKind(); // \Upmind\EnhanceSdk\Model\SettingKind | The type of setting being applied
$setting_key = 'setting_key_example'; // string | A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - myhostname - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup

try {
    $result = $apiInstance->deleteServiceSetting($server_id, $setting_kind, $setting_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->deleteServiceSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **setting_kind** | [**\Upmind\EnhanceSdk\Model\SettingKind**](../Model/.md)| The type of setting being applied | |
| **setting_key** | **string**| A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - myhostname - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup | |

### Return type

[**\Upmind\EnhanceSdk\Model\Outcome**](../Model/Outcome.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSlave()`

```php
deleteSlave($server_id)
```

Delete a (slave) server

Removes a given server from the Enhance cluster. The server to be removed may only be a slave server as the master server cannot be removed (the error code `invalid_argument` is returned in such a case). Moreover, the server cannot be deleted if it has any data (such as running/suspended website, emails, etc) on it. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $apiInstance->deleteSlave($server_id);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->deleteSlave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

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

## `enableFsQuotaLimits()`

```php
enableFsQuotaLimits($server_id)
```

Enable FS quota limits on the server

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $apiInstance->enableFsQuotaLimits($server_id);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->enableFsQuotaLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

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

## `getAppcdVersion()`

```php
getAppcdVersion($server_id): string
```

Get the version of the running appcd

Returns the version of the running appcd instance on this server.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getAppcdVersion($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getAppcdVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

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

## `getClientIp()`

```php
getClientIp(): string
```

Reflect back the IP of the API consumer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getClientIp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getClientIp: ', $e->getMessage(), PHP_EOL;
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

## `getControlPanelRoleInfo()`

```php
getControlPanelRoleInfo($fetch_processes): \Upmind\EnhanceSdk\Model\ControlRoleInfo
```

Get master server control panel role info

Returns information about the control panel role. This includes generic information about the role as well as each control panel service (such as authd). Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fetch_processes = True; // bool | Should we fetch service processes.

try {
    $result = $apiInstance->getControlPanelRoleInfo($fetch_processes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getControlPanelRoleInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fetch_processes** | **bool**| Should we fetch service processes. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\ControlRoleInfo**](../Model/ControlRoleInfo.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDatabaseRoleMysqlKind()`

```php
getDatabaseRoleMysqlKind($server_id, $mysql_kind): \Upmind\EnhanceSdk\Model\MysqlKind
```

Gets the MySQL kind for a given server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_id = 'server_id_example'; // string | The UUID of the server
$mysql_kind = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\MysqlKind(); // \Upmind\EnhanceSdk\Model\MysqlKind

try {
    $result = $apiInstance->getDatabaseRoleMysqlKind($server_id, $mysql_kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getDatabaseRoleMysqlKind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **mysql_kind** | [**\Upmind\EnhanceSdk\Model\MysqlKind**](../Model/.md)|  | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\MysqlKind**](../Model/MysqlKind.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFsQuotaStatus()`

```php
getFsQuotaStatus($server_id): \Upmind\EnhanceSdk\Model\FsQuotaStatus
```

Get whether FS quota was enabled on the server

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getFsQuotaStatus($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getFsQuotaStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\FsQuotaStatus**](../Model/FsQuotaStatus.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHttpdStatus()`

```php
getHttpdStatus($server_id, $role): \Upmind\EnhanceSdk\Model\HttpdStatus
```

Get status of a running httpd server.

`httpd` exposes some server stats through https://httpd.apache.org/docs/2.4/mod/mod_status.html API. Complete response from `httpd` is returned as a string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_id = 'server_id_example'; // string | The UUID of the server
$role = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\ServerRole(); // \Upmind\EnhanceSdk\Model\ServerRole | The role of the server.

try {
    $result = $apiInstance->getHttpdStatus($server_id, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getHttpdStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **role** | [**\Upmind\EnhanceSdk\Model\ServerRole**](../Model/.md)| The role of the server. | |

### Return type

[**\Upmind\EnhanceSdk\Model\HttpdStatus**](../Model/HttpdStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstallCmd()`

```php
getInstallCmd(): \Upmind\EnhanceSdk\Model\InstallCmd
```

Get slave installation command

Returns the install script that can be used to register more servers in the Enhance cluster. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInstallCmd();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getInstallCmd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\InstallCmd**](../Model/InstallCmd.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMysqlMyCnf()`

```php
getMysqlMyCnf($server_id): string
```

Download my.cnf for a given server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getMysqlMyCnf($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getMysqlMyCnf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

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

## `getOwaspRulesVersion()`

```php
getOwaspRulesVersion($server_id): \Upmind\EnhanceSdk\Model\OwaspVersion
```

Get the current and available version of the OWASP rules

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getOwaspRulesVersion($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getOwaspRulesVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\OwaspVersion**](../Model/OwaspVersion.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRegistrationKey()`

```php
getRegistrationKey(): string
```

Get slave registration key

Key may be used to install yet more servers in the Enhance cluster. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRegistrationKey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getRegistrationKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getServerDiskUsage()`

```php
getServerDiskUsage($server_id): \Upmind\EnhanceSdk\Model\ServerDiskUsage
```

Get server disk usage

Returns disk usage of all disks on the given server. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getServerDiskUsage($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerDiskUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\ServerDiskUsage**](../Model/ServerDiskUsage.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerFpmSettings()`

```php
getServerFpmSettings($server_id): \Upmind\EnhanceSdk\Model\WebsitePhpSettings[]
```

Get php-fpm config for all the websites on a server

Returns a list of php-fpm settings for each website on the server. Settings are queried from the running PHP instance for each website. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getServerFpmSettings($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerFpmSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\WebsitePhpSettings[]**](../Model/WebsitePhpSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerGroups()`

```php
getServerGroups(): \Upmind\EnhanceSdk\Model\ServerGroups
```

Returns all server groups

Each group object has a list of ids of the servers that are part of this group. Note that pagination may not be applied so this endpoint always returns all server groups. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getServerGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\ServerGroups**](../Model/ServerGroups.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerHostnameWebsite()`

```php
getServerHostnameWebsite($server_id): \Upmind\EnhanceSdk\Model\ServerHostnameWebsite
```

Get domains which are mapped to a server

Returns the server hostname website for this server

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getServerHostnameWebsite($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerHostnameWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\ServerHostnameWebsite**](../Model/ServerHostnameWebsite.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerInfo()`

```php
getServerInfo($server_id): \Upmind\EnhanceSdk\Model\ServerInfo
```

Get server info

Returns info about the selected server, if it exists. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getServerInfo($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\ServerInfo**](../Model/ServerInfo.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerIowait()`

```php
getServerIowait($server_id): \Upmind\EnhanceSdk\Model\ServerIowait
```

Get server iowait

Returns system iowait of the given server in number of elapsed seconds since power-on. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getServerIowait($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerIowait: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\ServerIowait**](../Model/ServerIowait.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerLoad()`

```php
getServerLoad($server_id): \Upmind\EnhanceSdk\Model\ServerLoad
```

Get server system load

Returns one minute system load of the given server. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getServerLoad($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerLoad: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\ServerLoad**](../Model/ServerLoad.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerMemoryUsage()`

```php
getServerMemoryUsage($server_id): \Upmind\EnhanceSdk\Model\ServerMemoryUsage
```

Get server memory usage

Returns RAM and swap space usage on the given server. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getServerMemoryUsage($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerMemoryUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\ServerMemoryUsage**](../Model/ServerMemoryUsage.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerModSecurityConfig()`

```php
getServerModSecurityConfig($server_id): string
```

Get mod security config

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getServerModSecurityConfig($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerModSecurityConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

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

## `getServerModSecurityStatus()`

```php
getServerModSecurityStatus($server_id): \Upmind\EnhanceSdk\Model\ModSecStatus
```

Get mod security status for a server

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getServerModSecurityStatus($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerModSecurityStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\ModSecStatus**](../Model/ModSecStatus.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerNetworkInterfaces()`

```php
getServerNetworkInterfaces($server_id): \Upmind\EnhanceSdk\Model\ServerNetworkInterfaces
```

Get server network interfaces

Returns the network interfaces of the given server. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getServerNetworkInterfaces($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerNetworkInterfaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\ServerNetworkInterfaces**](../Model/ServerNetworkInterfaces.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerNetworkStats()`

```php
getServerNetworkStats($server_id): \Upmind\EnhanceSdk\Model\ServerNetworkStats
```

Get server network stats

Returns network stats of the given server. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getServerNetworkStats($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerNetworkStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\ServerNetworkStats**](../Model/ServerNetworkStats.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerRole()`

```php
getServerRole($server_id, $role, $fetch_processes): \Upmind\EnhanceSdk\Model\GetServerRole200Response
```

Get server role info

Returns information about the given role on the server. This includes generic information about the role as well as each service in the role. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$role = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\ServerRole(); // \Upmind\EnhanceSdk\Model\ServerRole | The role of the server.
$fetch_processes = True; // bool | Should we fetch service processes.

try {
    $result = $apiInstance->getServerRole($server_id, $role, $fetch_processes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **role** | [**\Upmind\EnhanceSdk\Model\ServerRole**](../Model/.md)| The role of the server. | |
| **fetch_processes** | **bool**| Should we fetch service processes. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\GetServerRole200Response**](../Model/GetServerRole200Response.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerRoles()`

```php
getServerRoles($server_id, $fetch_processes): \Upmind\EnhanceSdk\Model\RolesInfo
```

Get server roles info

Returns all configured roles of the given server. This includes generic information about the role as well as each service in the role. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$fetch_processes = True; // bool | Should we fetch service processes.

try {
    $result = $apiInstance->getServerRoles($server_id, $fetch_processes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **fetch_processes** | **bool**| Should we fetch service processes. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\RolesInfo**](../Model/RolesInfo.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerStats()`

```php
getServerStats($server_id, $start, $end): \Upmind\EnhanceSdk\Model\ServerStatsFullListing
```

Get Server stats

Returns server stats between the optional start and end date. Defaults to last 24 hours. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_id = 'server_id_example'; // string | The UUID of the server
$start = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Start datetime UTC.
$end = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | End datetime UTC.

try {
    $result = $apiInstance->getServerStats($server_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **start** | **\DateTime**| Start datetime UTC. | [optional] |
| **end** | **\DateTime**| End datetime UTC. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\ServerStatsFullListing**](../Model/ServerStatsFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerStatus()`

```php
getServerStatus($server_id): \Upmind\EnhanceSdk\Model\ServerStatus
```

Get server status

Returns system (online or offline) status of the given server. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getServerStatus($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\ServerStatus**](../Model/ServerStatus.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServerUptime()`

```php
getServerUptime($server_id): \Upmind\EnhanceSdk\Model\ServerUptime
```

Get server uptime in seconds

Returns system iowait of the given server. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getServerUptime($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServerUptime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\ServerUptime**](../Model/ServerUptime.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServers()`

```php
getServers($offset, $limit, $sort_order, $sort_by): \Upmind\EnhanceSdk\Model\ServersListing
```

Get installed servers

Returns a list of all servers in this Enhance cluster (including the master server and all slaves). The result set of servers may optionally be sorted, paginated, as well as grouped by a server's group id. If not grouped, the returned items are a flat list of server resource objects, whereas if grouped, the returned items are an object (map) of list of servers mapped to their group ids. Grouping is applied after pagination and sorting, and in the latter case the servers within one group will be sorted. Therefore, if paginated, the last group in items, i.e. the group on the \"border\", may not contain all servers belonging to that group if the given limit was such as would be exceeded if all its servers were included. In such a case, the remaining servers of the group are returned in the next batch. Example: Assume servers server1, server2, server3, server4, server5 and groups group1, group2, where group1 contains server1 and group2 contains server2, server3, and server4 is not in a group. If the request specifies an offset of 0 and a limit of 2, then the returned structure may be as follows: ```json {     items: {         group1_id: [             server1,         ],         group2_id: [             server2,         ],     },     total: 4 } ``` Then, in the next request, if offset is changed to 2, the returned items may be: ```json {     items: {         group2_id: [             server3,         ],         \"ungrouped\": [             server4         ],     },     total: 4 } ``` Containing the rest of group2's servers as well as the ungrouped servers. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int | The offset from which to return items.
$limit = 56; // int | The maximum number of items to return.
$sort_order = 'sort_order_example'; // string | The direction in which to sort. Possible values are 'asc' and 'desc', defaulting to 'asc'.
$sort_by = 'sort_by_example'; // string | The field by which to sort.

try {
    $result = $apiInstance->getServers($offset, $limit, $sort_order, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| The offset from which to return items. | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **sort_order** | **string**| The direction in which to sort. Possible values are &#39;asc&#39; and &#39;desc&#39;, defaulting to &#39;asc&#39;. | [optional] |
| **sort_by** | **string**| The field by which to sort. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\ServersListing**](../Model/ServersListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getServiceSetting()`

```php
getServiceSetting($server_id, $setting_kind): mixed
```

Get the value for a particular setting

Returns the value for a particular setting as a JSON object

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$setting_kind = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\SettingKind(); // \Upmind\EnhanceSdk\Model\SettingKind | The type of setting being applied

try {
    $result = $apiInstance->getServiceSetting($server_id, $setting_kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getServiceSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **setting_kind** | [**\Upmind\EnhanceSdk\Model\SettingKind**](../Model/.md)| The type of setting being applied | |

### Return type

**mixed**

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSystemPackageUpdateInfo()`

```php
getSystemPackageUpdateInfo($server_id, $system_package_name): \Upmind\EnhanceSdk\Model\UpgradableSystemPackage
```

Returns a map of upgradable packages.

Map of upgradable system packages is returned along with latest Version if the package update is available.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$system_package_name = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\SystemPackageName(); // \Upmind\EnhanceSdk\Model\SystemPackageName

try {
    $result = $apiInstance->getSystemPackageUpdateInfo($server_id, $system_package_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getSystemPackageUpdateInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **system_package_name** | [**\Upmind\EnhanceSdk\Model\SystemPackageName**](../Model/.md)|  | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\UpgradableSystemPackage**](../Model/UpgradableSystemPackage.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebserverKind()`

```php
getWebserverKind($server_id): \Upmind\EnhanceSdk\Model\WebserverKind
```

Get web server

Fetches the current web server kind for this server.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getWebserverKind($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getWebserverKind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\WebserverKind**](../Model/WebserverKind.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteFpmSettings()`

```php
getWebsiteFpmSettings($server_id, $website_id): \Upmind\EnhanceSdk\Model\PhpIni
```

Get php-fpm config for the specified website

Returns a list of php-fpm settings for specified website on the server. Settings are queried from the running PHP instance for each website. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_id = 'server_id_example'; // string | The UUID of the server
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsiteFpmSettings($server_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->getWebsiteFpmSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\PhpIni**](../Model/PhpIni.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initAllServers()`

```php
initAllServers()
```

Attempts to initialize all roles

Attempts to initialize roles and other resources on all servers. Manual initialization (via this endpoint) shouldn't be necessary as usually even if some slave server is unavailable to `orchd` in the beginning, `orchd` periodically retries the role initialization. However, if something needs a manual intervention, then calling this endpoint is helpful to identify further issue and hasten up the full availability of `orchd`. This endpoint can be called multiple times and it will initialize resources at most once. Once this endpoint returns 200, there is no point in calling it again. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->initAllServers();
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->initAllServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `installDatabaseRole()`

```php
installDatabaseRole($server_id, $mysql_kind)
```

Enables the database role on a given ServerUuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_id = 'server_id_example'; // string | The UUID of the server
$mysql_kind = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\MysqlKind(); // \Upmind\EnhanceSdk\Model\MysqlKind

try {
    $apiInstance->installDatabaseRole($server_id, $mysql_kind);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->installDatabaseRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **mysql_kind** | [**\Upmind\EnhanceSdk\Model\MysqlKind**](../Model/.md)|  | [optional] |

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

## `installServerRole()`

```php
installServerRole($server_id, $role, $new_backup_role)
```

Install server role

Installs a role on the server. The backup role takes additional parameters, but all other roles take no parameters. The block device size is optional and defaults to 100 GiB if not set. In this case, the mount point has to be the absolute path where the backup volume should be mounted. If there is already a valid btrfs backup volume mounted at this path, besides installing the `bkupd` service, this is a noop. In the case of an existing mount point, it is verified that it has at least the block device size bytes available. The block device is an absolute path that may or may not exist. If it exists, the block device size is used to verify if the device has at least the specified space available, if it doesn't exist, a loopback device is created with the this size. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$role = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\ServerRole(); // \Upmind\EnhanceSdk\Model\ServerRole | The role of the server.
$new_backup_role = new \Upmind\EnhanceSdk\Model\NewBackupRole(); // \Upmind\EnhanceSdk\Model\NewBackupRole | Information for the backup role.

try {
    $apiInstance->installServerRole($server_id, $role, $new_backup_role);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->installServerRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **role** | [**\Upmind\EnhanceSdk\Model\ServerRole**](../Model/.md)| The role of the server. | |
| **new_backup_role** | [**\Upmind\EnhanceSdk\Model\NewBackupRole**](../Model/NewBackupRole.md)| Information for the backup role. | [optional] |

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

## `resetServerModSecurityConfig()`

```php
resetServerModSecurityConfig($server_id)
```

Delete custom mod_security config and reset to default

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $apiInstance->resetServerModSecurityConfig($server_id);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->resetServerModSecurityConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

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

## `resetWebServerConfig()`

```php
resetWebServerConfig($server_id)
```

Reset the config for the web server to default.

Will reset the config for the running web server to \"known good\" defaults.  Currently only available for LiteSpeed.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $apiInstance->resetWebServerConfig($server_id);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->resetWebServerConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

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

## `restartMysql()`

```php
restartMysql($server_id)
```

Restart MySQL gracefully

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $apiInstance->restartMysql($server_id);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->restartMysql: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

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

## `saveMysqlMyCnf()`

```php
saveMysqlMyCnf($server_id, $body)
```

Save a new my.cnf

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_id = 'server_id_example'; // string | The UUID of the server
$body = 'body_example'; // string | New my.cnf to be applied

try {
    $apiInstance->saveMysqlMyCnf($server_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->saveMysqlMyCnf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **body** | **string**| New my.cnf to be applied | |

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

## `setLiteSpeedAdminPassword()`

```php
setLiteSpeedAdminPassword($server_id, $body)
```

Set a new LiteSpeed admin password.

Will reset the LiteSpeed or OpenLiteSpeed admin password.  The username is always \"admin\".

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$body = 'body_example'; // string

try {
    $apiInstance->setLiteSpeedAdminPassword($server_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->setLiteSpeedAdminPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **body** | **string**|  | |

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

## `setServerDecommissioned()`

```php
setServerDecommissioned($server_id)
```

Set server to decommissioned

If a server was decommissioned outside of Enhance, set its status to decommissioned.  This will remove the server from any status checks, will prevent website placement and will enable websites to be moved from it to another server using backups if available.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $apiInstance->setServerDecommissioned($server_id);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->setServerDecommissioned: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

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

## `setServerModSecurityConfig()`

```php
setServerModSecurityConfig($server_id, $body)
```

Set mod security config

This config is included in the web server config when mod_security is enabled.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$body = 'body_example'; // string

try {
    $apiInstance->setServerModSecurityConfig($server_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->setServerModSecurityConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **body** | **string**|  | |

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

## `setServerModSecurityStatus()`

```php
setServerModSecurityStatus($server_id, $mod_sec_status)
```

Set mod security status for a server

If enabled, all websites on this server by default will have mod security enabled, unless explicitly disabled.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$mod_sec_status = new \Upmind\EnhanceSdk\Model\ModSecStatus(); // \Upmind\EnhanceSdk\Model\ModSecStatus

try {
    $apiInstance->setServerModSecurityStatus($server_id, $mod_sec_status);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->setServerModSecurityStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **mod_sec_status** | [**\Upmind\EnhanceSdk\Model\ModSecStatus**](../Model/ModSecStatus.md)|  | |

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

## `setServerStatus()`

```php
setServerStatus($server_id, $set_server_status)
```

Set the status of one server.

Set the status of one server by rebooting it for example.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$set_server_status = new \Upmind\EnhanceSdk\Model\SetServerStatus(); // \Upmind\EnhanceSdk\Model\SetServerStatus | The action to be taken for a specific server. When rebooting a server if the reboot is graceful before the server itself is rebooted all the installed services which make use of an underlying daemon will be asked to shutdown the daemon in question (such as mysqld, httpd or pdns). If the reboot is forced the underlying daemon stop will be forced as well. Note: Primary server reboots are never allowed. The server reboot will only happens 1 minute after the request is sent.

try {
    $apiInstance->setServerStatus($server_id, $set_server_status);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->setServerStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **set_server_status** | [**\Upmind\EnhanceSdk\Model\SetServerStatus**](../Model/SetServerStatus.md)| The action to be taken for a specific server. When rebooting a server if the reboot is graceful before the server itself is rebooted all the installed services which make use of an underlying daemon will be asked to shutdown the daemon in question (such as mysqld, httpd or pdns). If the reboot is forced the underlying daemon stop will be forced as well. Note: Primary server reboots are never allowed. The server reboot will only happens 1 minute after the request is sent. | |

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

## `setServiceSetting()`

```php
setServiceSetting($server_id, $setting_kind, $setting_key, $service_setting_value): \Upmind\EnhanceSdk\Model\Outcome
```

Set a single service setting

Set or replace a single service level override setting

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$setting_kind = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\SettingKind(); // \Upmind\EnhanceSdk\Model\SettingKind | The type of setting being applied
$setting_key = 'setting_key_example'; // string | A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - myhostname - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup
$service_setting_value = new \Upmind\EnhanceSdk\Model\ServiceSettingValue(); // \Upmind\EnhanceSdk\Model\ServiceSettingValue

try {
    $result = $apiInstance->setServiceSetting($server_id, $setting_kind, $setting_key, $service_setting_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->setServiceSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **setting_kind** | [**\Upmind\EnhanceSdk\Model\SettingKind**](../Model/.md)| The type of setting being applied | |
| **setting_key** | **string**| A key for updating an existing setting, some known values are - hard_delete_after_secs - letsencrypt_enabled - myhostname - org_websites_same_server - screenshot_driver_pool_size - screenshot_interval - sged_smtp - smtp_smart_host - website_backup | |
| **service_setting_value** | [**\Upmind\EnhanceSdk\Model\ServiceSettingValue**](../Model/ServiceSettingValue.md)|  | |

### Return type

[**\Upmind\EnhanceSdk\Model\Outcome**](../Model/Outcome.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setServiceStatus()`

```php
setServiceStatus($server_id, $service_id, $set_service_status)
```

Set the status of one service installed in the server specified.

Set the status of one service by restarting it for example.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$service_id = 'service_id_example'; // string | The UUID of the service
$set_service_status = new \Upmind\EnhanceSdk\Model\SetServiceStatus(); // \Upmind\EnhanceSdk\Model\SetServiceStatus | The action to be taken for a specific service.

try {
    $apiInstance->setServiceStatus($server_id, $service_id, $set_service_status);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->setServiceStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **service_id** | **string**| The UUID of the service | |
| **set_service_status** | [**\Upmind\EnhanceSdk\Model\SetServiceStatus**](../Model/SetServiceStatus.md)| The action to be taken for a specific service. | |

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

## `setWebserverKind()`

```php
setWebserverKind($server_id, $set_webserver_kind)
```

Set the web server kind for one server.

Changes the web server kind for this server.  This will rebuild any application containers if required.  It may be a long running operation.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$set_webserver_kind = new \Upmind\EnhanceSdk\Model\SetWebserverKind(); // \Upmind\EnhanceSdk\Model\SetWebserverKind

try {
    $apiInstance->setWebserverKind($server_id, $set_webserver_kind);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->setWebserverKind: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **set_webserver_kind** | [**\Upmind\EnhanceSdk\Model\SetWebserverKind**](../Model/SetWebserverKind.md)|  | |

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

## `uninstallServerRole()`

```php
uninstallServerRole($server_id, $role)
```

Uninstall a server role

Uninstalls role from server, if role has no websites assigned to it. If the role to be uninstalled is the control panel application role, the request returns an error, since this role may only be disabled but not uninstalled (since it is required to serve the control panel). Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$role = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\ServerRole(); // \Upmind\EnhanceSdk\Model\ServerRole | The role of the server.

try {
    $apiInstance->uninstallServerRole($server_id, $role);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->uninstallServerRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **role** | [**\Upmind\EnhanceSdk\Model\ServerRole**](../Model/.md)| The role of the server. | |

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

## `updateOwaspRules()`

```php
updateOwaspRules($server_id)
```

Upgrade OWASP rules

Will update the owasp rules to the latest version.  If the current version is the latest, it will be reinstalled.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $apiInstance->updateOwaspRules($server_id);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->updateOwaspRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |

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

## `updateServerGroup()`

```php
updateServerGroup($group_id, $server_group_update)
```

Updates an existing server group's name

Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | The id of the server group.
$server_group_update = new \Upmind\EnhanceSdk\Model\ServerGroupUpdate(); // \Upmind\EnhanceSdk\Model\ServerGroupUpdate | Server group info.

try {
    $apiInstance->updateServerGroup($group_id, $server_group_update);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->updateServerGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| The id of the server group. | |
| **server_group_update** | [**\Upmind\EnhanceSdk\Model\ServerGroupUpdate**](../Model/ServerGroupUpdate.md)| Server group info. | |

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

## `updateServerPrimaryIp()`

```php
updateServerPrimaryIp($server_id, $body)
```

Updates the primary IP of the server in the database and in-memory metadata. This operation will not affect the IP used for service communication until the next restart of orchd. The new IP will be used for creation of new resources such as websites on this server but existing websites will not have their IP changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_id = 'server_id_example'; // string | The UUID of the server
$body = 'body_example'; // string

try {
    $apiInstance->updateServerPrimaryIp($server_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->updateServerPrimaryIp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **body** | **string**|  | |

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

## `updateServerPrimaryIpv6()`

```php
updateServerPrimaryIpv6($server_id, $body)
```

Updates or sets the primary ipv6 address of the server.  This endpoint will not change existing websites' DNS but the new record will be applied to all future zones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$server_id = 'server_id_example'; // string | The UUID of the server
$body = 'body_example'; // string

try {
    $apiInstance->updateServerPrimaryIpv6($server_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->updateServerPrimaryIpv6: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **body** | **string**|  | |

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

## `updateServerRole()`

```php
updateServerRole($server_id, $role, $update_server_role_request)
```

Update server role

Updates role and role state. A role, if activated on a server, may be in a state of enabled or disabled. If enabled, it means that new resources (e.g. websites for the application role) may be installed on the server, but if it's disabled, existing resources (e.g. websites) are kept but no new resources may be added. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$role = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\ServerRole(); // \Upmind\EnhanceSdk\Model\ServerRole | The role of the server.
$update_server_role_request = new \Upmind\EnhanceSdk\Model\UpdateServerRoleRequest(); // \Upmind\EnhanceSdk\Model\UpdateServerRoleRequest | Info for updating the server role.

try {
    $apiInstance->updateServerRole($server_id, $role, $update_server_role_request);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->updateServerRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **role** | [**\Upmind\EnhanceSdk\Model\ServerRole**](../Model/.md)| The role of the server. | |
| **update_server_role_request** | [**\Upmind\EnhanceSdk\Model\UpdateServerRoleRequest**](../Model/UpdateServerRoleRequest.md)| Info for updating the server role. | |

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

## `updateService()`

```php
updateService($server_id, $service_id)
```

Special endpoint to update a particular stopped service to its latest version.

This endpoint should not be used to for updates in general. Useful to update/recover from a broken/stopped service from previous update. NOTE: if service is already running, no changes are made.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$service_id = 'service_id_example'; // string | The UUID of the service

try {
    $apiInstance->updateService($server_id, $service_id);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->updateService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **service_id** | **string**| The UUID of the service | |

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

## `updateSystemPackage()`

```php
updateSystemPackage($server_id, $system_package, $system_package_name)
```

Updates a system package to its latest version.

Can only update installed package to its latest version.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | The UUID of the server
$system_package = new \Upmind\EnhanceSdk\Model\SystemPackage(); // \Upmind\EnhanceSdk\Model\SystemPackage | Package to be updated.
$system_package_name = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\SystemPackageName(); // \Upmind\EnhanceSdk\Model\SystemPackageName

try {
    $apiInstance->updateSystemPackage($server_id, $system_package, $system_package_name);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->updateSystemPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| The UUID of the server | |
| **system_package** | [**\Upmind\EnhanceSdk\Model\SystemPackage**](../Model/SystemPackage.md)| Package to be updated. | |
| **system_package_name** | [**\Upmind\EnhanceSdk\Model\SystemPackageName**](../Model/.md)|  | [optional] |

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

## `validateRegistrationKey()`

```php
validateRegistrationKey($key): \Upmind\EnhanceSdk\Model\ValidationResult
```

Validate slave registration key

Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\ServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = 'key_example'; // string | The secret registration key

try {
    $result = $apiInstance->validateRegistrationKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServersApi->validateRegistrationKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The secret registration key | |

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
