# Upmind\EnhanceSdk\MysqlApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebsiteMySQLDB()**](MysqlApi.md#createWebsiteMySQLDB) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-dbs | Create a MySQL database for website |
| [**createWebsiteMySQLUser()**](MysqlApi.md#createWebsiteMySQLUser) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-users | Create website MySQL database user |
| [**createWebsiteMySQLUserAccessHosts()**](MysqlApi.md#createWebsiteMySQLUserAccessHosts) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-users/{username}/access-hosts | Create website MySQL database user access hosts |
| [**deleteWebsiteMySQLDB()**](MysqlApi.md#deleteWebsiteMySQLDB) | **DELETE** /orgs/{org_id}/websites/{website_id}/mysql-dbs/{db_name} | Delete website MySQL database |
| [**deleteWebsiteMySQLUser()**](MysqlApi.md#deleteWebsiteMySQLUser) | **DELETE** /orgs/{org_id}/websites/{website_id}/mysql-users/{username} | Delete website MySQL database user |
| [**deleteWebsiteMySQLUserAccessHosts()**](MysqlApi.md#deleteWebsiteMySQLUserAccessHosts) | **DELETE** /orgs/{org_id}/websites/{website_id}/mysql-users/{username}/access-hosts | Delete website MySQL database user access hosts |
| [**downloadSql()**](MysqlApi.md#downloadSql) | **GET** /orgs/{org_id}/websites/{website_id}/mysql-dbs/{db_name}/sql | Takes a backup of given database and returns it gziped |
| [**getPhpMyAdminSSOUrl()**](MysqlApi.md#getPhpMyAdminSSOUrl) | **GET** /orgs/{org_id}/websites/{website_id}/mysql-dbs/{db_name}/sso | Get phpMyAdmin SSO URL |
| [**getWebsiteMySQLDBs()**](MysqlApi.md#getWebsiteMySQLDBs) | **GET** /orgs/{org_id}/websites/{website_id}/mysql-dbs | Get website MySQL databases |
| [**getWebsiteMySQLUsers()**](MysqlApi.md#getWebsiteMySQLUsers) | **GET** /orgs/{org_id}/websites/{website_id}/mysql-users | Get website MySQL database users |
| [**setWebsiteMySQLUserPrivileges()**](MysqlApi.md#setWebsiteMySQLUserPrivileges) | **PUT** /orgs/{org_id}/websites/{website_id}/mysql-users/{username}/privileges | Create website MySQL database user privileges |
| [**updateWebsiteMySQLUser()**](MysqlApi.md#updateWebsiteMySQLUser) | **PUT** /orgs/{org_id}/websites/{website_id}/mysql-users/{username} | Update website MySQL database user |
| [**uploadSql()**](MysqlApi.md#uploadSql) | **POST** /v2/websites/{websiteId}/mysql/{db_id}/sql | Uploads sql file and executes it against db |


## `createWebsiteMySQLDB()`

```php
createWebsiteMySQLDB($org_id, $website_id, $new_my_sqldb)
```

Create a MySQL database for website

Creates a new MySQL database for the given website. The supplied name must conform to the following regular expression: `^[0-9a-z$_]+$`. That is, a name may only contain alphanumerical characters, dollar signs, and underscores. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\MysqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$new_my_sqldb = new \Upmind\EnhanceSdk\Model\NewMySQLDB(); // \Upmind\EnhanceSdk\Model\NewMySQLDB | New database details.

try {
    $apiInstance->createWebsiteMySQLDB($org_id, $website_id, $new_my_sqldb);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->createWebsiteMySQLDB: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **new_my_sqldb** | [**\Upmind\EnhanceSdk\Model\NewMySQLDB**](../Model/NewMySQLDB.md)| New database details. | |

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

## `createWebsiteMySQLUser()`

```php
createWebsiteMySQLUser($org_id, $website_id, $new_my_sql_user)
```

Create website MySQL database user

Creates a new MySQL database user for the given website database. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\MysqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$new_my_sql_user = new \Upmind\EnhanceSdk\Model\NewMySQLUser(); // \Upmind\EnhanceSdk\Model\NewMySQLUser | New user details.

try {
    $apiInstance->createWebsiteMySQLUser($org_id, $website_id, $new_my_sql_user);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->createWebsiteMySQLUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **new_my_sql_user** | [**\Upmind\EnhanceSdk\Model\NewMySQLUser**](../Model/NewMySQLUser.md)| New user details. | |

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

## `createWebsiteMySQLUserAccessHosts()`

```php
createWebsiteMySQLUserAccessHosts($org_id, $website_id, $username, $my_sql_user_access_hosts)
```

Create website MySQL database user access hosts

Adds for the given user new access hosts to website's MySQL database. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\MysqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$username = 'username_example'; // string | The user of the database user.
$my_sql_user_access_hosts = new \Upmind\EnhanceSdk\Model\MySQLUserAccessHosts(); // \Upmind\EnhanceSdk\Model\MySQLUserAccessHosts | User access hosts.

try {
    $apiInstance->createWebsiteMySQLUserAccessHosts($org_id, $website_id, $username, $my_sql_user_access_hosts);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->createWebsiteMySQLUserAccessHosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **username** | **string**| The user of the database user. | |
| **my_sql_user_access_hosts** | [**\Upmind\EnhanceSdk\Model\MySQLUserAccessHosts**](../Model/MySQLUserAccessHosts.md)| User access hosts. | |

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

## `deleteWebsiteMySQLDB()`

```php
deleteWebsiteMySQLDB($org_id, $website_id, $db_name)
```

Delete website MySQL database

Delete website's MySQL database. NOTE: All data will be lost after this endpoint returns. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\MysqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$db_name = 'db_name_example'; // string | The name of the database.

try {
    $apiInstance->deleteWebsiteMySQLDB($org_id, $website_id, $db_name);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->deleteWebsiteMySQLDB: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **db_name** | **string**| The name of the database. | |

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

## `deleteWebsiteMySQLUser()`

```php
deleteWebsiteMySQLUser($org_id, $website_id, $username)
```

Delete website MySQL database user

Delete website's MySQL database. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\MysqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$username = 'username_example'; // string | The user of the database user.

try {
    $apiInstance->deleteWebsiteMySQLUser($org_id, $website_id, $username);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->deleteWebsiteMySQLUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **username** | **string**| The user of the database user. | |

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

## `deleteWebsiteMySQLUserAccessHosts()`

```php
deleteWebsiteMySQLUserAccessHosts($org_id, $website_id, $username, $my_sql_user_access_hosts)
```

Delete website MySQL database user access hosts

Removes from the given user access hosts to website's MySQL database. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\MysqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$username = 'username_example'; // string | The user of the database user.
$my_sql_user_access_hosts = new \Upmind\EnhanceSdk\Model\MySQLUserAccessHosts(); // \Upmind\EnhanceSdk\Model\MySQLUserAccessHosts | User access hosts.

try {
    $apiInstance->deleteWebsiteMySQLUserAccessHosts($org_id, $website_id, $username, $my_sql_user_access_hosts);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->deleteWebsiteMySQLUserAccessHosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **username** | **string**| The user of the database user. | |
| **my_sql_user_access_hosts** | [**\Upmind\EnhanceSdk\Model\MySQLUserAccessHosts**](../Model/MySQLUserAccessHosts.md)| User access hosts. | |

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

## `downloadSql()`

```php
downloadSql($org_id, $website_id, $db_name): string
```

Takes a backup of given database and returns it gziped

Performs a database backup into an sql, gzips the sql and returns the file system path for subsequent download with filerd.

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


$apiInstance = new Upmind\EnhanceSdk\Api\MysqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$db_name = 'db_name_example'; // string | The name of the database.

try {
    $result = $apiInstance->downloadSql($org_id, $website_id, $db_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->downloadSql: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **db_name** | **string**| The name of the database. | |

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

## `getPhpMyAdminSSOUrl()`

```php
getPhpMyAdminSSOUrl($org_id, $website_id, $db_name, $should_redirect): string
```

Get phpMyAdmin SSO URL

Fetches a single sign-on URL to access phpMyAdmin for this database without the need to log in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\MysqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$db_name = 'db_name_example'; // string | The name of the database.
$should_redirect = True; // bool | If set to true, the endpoint will send a 307 redirect to the SSO URL.

try {
    $result = $apiInstance->getPhpMyAdminSSOUrl($org_id, $website_id, $db_name, $should_redirect);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->getPhpMyAdminSSOUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **db_name** | **string**| The name of the database. | |
| **should_redirect** | **bool**| If set to true, the endpoint will send a 307 redirect to the SSO URL. | [optional] |

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



$apiInstance = new Upmind\EnhanceSdk\Api\MysqlApi(
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
    echo 'Exception when calling MysqlApi->getWebsiteMySQLDBs: ', $e->getMessage(), PHP_EOL;
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

## `getWebsiteMySQLUsers()`

```php
getWebsiteMySQLUsers($org_id, $website_id): \Upmind\EnhanceSdk\Model\MySQLUsersFullListing
```

Get website MySQL database users

Returns all MySQL users belonging to the given website database. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\MysqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsiteMySQLUsers($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->getWebsiteMySQLUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\MySQLUsersFullListing**](../Model/MySQLUsersFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setWebsiteMySQLUserPrivileges()`

```php
setWebsiteMySQLUserPrivileges($org_id, $website_id, $username, $my_sql_user_grants)
```

Create website MySQL database user privileges

Sets the privileges for a user on a given MySQL database.  This will override their current privileges. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\MysqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$username = 'username_example'; // string | The user of the database user.
$my_sql_user_grants = new \Upmind\EnhanceSdk\Model\MySQLUserGrants(); // \Upmind\EnhanceSdk\Model\MySQLUserGrants | User privilege grants.

try {
    $apiInstance->setWebsiteMySQLUserPrivileges($org_id, $website_id, $username, $my_sql_user_grants);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->setWebsiteMySQLUserPrivileges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **username** | **string**| The user of the database user. | |
| **my_sql_user_grants** | [**\Upmind\EnhanceSdk\Model\MySQLUserGrants**](../Model/MySQLUserGrants.md)| User privilege grants. | |

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

## `updateWebsiteMySQLUser()`

```php
updateWebsiteMySQLUser($org_id, $website_id, $username, $my_sql_user_update)
```

Update website MySQL database user

Updates website's MySQL database user's password (username update coming later). Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\MysqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$username = 'username_example'; // string | The user of the database user.
$my_sql_user_update = new \Upmind\EnhanceSdk\Model\MySQLUserUpdate(); // \Upmind\EnhanceSdk\Model\MySQLUserUpdate | User update details.

try {
    $apiInstance->updateWebsiteMySQLUser($org_id, $website_id, $username, $my_sql_user_update);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->updateWebsiteMySQLUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **username** | **string**| The user of the database user. | |
| **my_sql_user_update** | [**\Upmind\EnhanceSdk\Model\MySQLUserUpdate**](../Model/MySQLUserUpdate.md)| User update details. | |

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

## `uploadSql()`

```php
uploadSql($website_id, $db_name, $sql, $force)
```

Uploads sql file and executes it against db

Uploads an sql file which is then executed against given db. Allowed file types are '.sql', '.gz' and '.zip'. The gzip-ed file must be a valid sql. The zip archive may contain only one '.sql' file, however the file can be within a directory. If the force flag is set to true (default is false), the SQL execution will not stop when an error is raised (corresponds to the --force option of mysql cli). The max allowed size is 500 MB.

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


$apiInstance = new Upmind\EnhanceSdk\Api\MysqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$website_id = 'website_id_example'; // string | The id of the website.
$db_name = 'db_name_example'; // string | The name of the database.
$sql = '/path/to/file.txt'; // \SplFileObject | Upload either a raw sql file (must be utf8 valid string) or .zip or .gz file with the sql string.
$force = false; // bool

try {
    $apiInstance->uploadSql($website_id, $db_name, $sql, $force);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->uploadSql: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **website_id** | **string**| The id of the website. | |
| **db_name** | **string**| The name of the database. | |
| **sql** | **\SplFileObject****\SplFileObject**| Upload either a raw sql file (must be utf8 valid string) or .zip or .gz file with the sql string. | |
| **force** | **bool**|  | [optional] [default to false] |

### Return type

void (empty response body)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
