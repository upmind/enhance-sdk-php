# Upmind\EnhanceSdk\MysqlApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrRestoreWebsiteMySQLDBBackup()**](MysqlApi.md#createOrRestoreWebsiteMySQLDBBackup) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-dbs/{db_id}/backups | Create or restore website MySQL database backup |
| [**createWebsiteMySQLDB()**](MysqlApi.md#createWebsiteMySQLDB) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-dbs | Create a MySQL database for website |
| [**createWebsiteMySQLUser()**](MysqlApi.md#createWebsiteMySQLUser) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-users | Create website MySQL database user |
| [**createWebsiteMySQLUserAccessHosts()**](MysqlApi.md#createWebsiteMySQLUserAccessHosts) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-users/{user_id}/access-hosts | Create website MySQL database user access hosts |
| [**createWebsiteMySQLUserPrivileges()**](MysqlApi.md#createWebsiteMySQLUserPrivileges) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-users/{user_id}/privileges | Create website MySQL database user privileges |
| [**deleteWebsiteMySQLDB()**](MysqlApi.md#deleteWebsiteMySQLDB) | **DELETE** /orgs/{org_id}/websites/{website_id}/mysql-dbs/{db_id} | Delete website MySQL database |
| [**deleteWebsiteMySQLUser()**](MysqlApi.md#deleteWebsiteMySQLUser) | **DELETE** /orgs/{org_id}/websites/{website_id}/mysql-users/{user_id} | Delete website MySQL database user |
| [**deleteWebsiteMySQLUserAccessHosts()**](MysqlApi.md#deleteWebsiteMySQLUserAccessHosts) | **DELETE** /orgs/{org_id}/websites/{website_id}/mysql-users/{user_id}/access-hosts | Delete website MySQL database user access hosts |
| [**deleteWebsiteMySQLUserPrivileges()**](MysqlApi.md#deleteWebsiteMySQLUserPrivileges) | **DELETE** /orgs/{org_id}/websites/{website_id}/mysql-users/{user_id}/privileges | Delete website MySQL database user privileges |
| [**downloadSql()**](MysqlApi.md#downloadSql) | **GET** /orgs/{org_id}/websites/{website_id}/mysql-dbs/{db_id}/sql | Takes a backup of given database and returns it gziped |
| [**getOrgMySQLDBs()**](MysqlApi.md#getOrgMySQLDBs) | **GET** /orgs/{org_id}/mysql-dbs | Get org&#39;s MySQL databases |
| [**getPhpMyAdminSSOUrl()**](MysqlApi.md#getPhpMyAdminSSOUrl) | **GET** /orgs/{org_id}/websites/{website_id}/mysql-dbs/{db_id}/sso | Get phpMyAdmin SSO URL |
| [**getWebsiteMySQLDBs()**](MysqlApi.md#getWebsiteMySQLDBs) | **GET** /orgs/{org_id}/websites/{website_id}/mysql-dbs | Get website MySQL databases |
| [**getWebsiteMySQLUsers()**](MysqlApi.md#getWebsiteMySQLUsers) | **GET** /orgs/{org_id}/websites/{website_id}/mysql-users | Get website MySQL database users |
| [**updateWebsiteMySQLUser()**](MysqlApi.md#updateWebsiteMySQLUser) | **PUT** /orgs/{org_id}/websites/{website_id}/mysql-users/{user_id} | Update website MySQL database user |
| [**uploadSql()**](MysqlApi.md#uploadSql) | **POST** /orgs/{org_id}/websites/{website_id}/mysql-dbs/{db_id}/sql | Uploads sql file and executes it against db |


## `createOrRestoreWebsiteMySQLDBBackup()`

```php
createOrRestoreWebsiteMySQLDBBackup($org_id, $website_id, $db_id, $action, $filename)
```

Create or restore website MySQL database backup

Create or restore website MySQL database backup. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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
$db_id = 'db_id_example'; // string | The id of the database.
$action = 'create'; // string | The action to take.
$filename = 'filename_example'; // string | The filename of the backup file. Only applicable if the backup action is `restore`, otherwise this is ignored.

try {
    $apiInstance->createOrRestoreWebsiteMySQLDBBackup($org_id, $website_id, $db_id, $action, $filename);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->createOrRestoreWebsiteMySQLDBBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **db_id** | **string**| The id of the database. | |
| **action** | **string**| The action to take. | [optional] [default to &#39;create&#39;] |
| **filename** | **string**| The filename of the backup file. Only applicable if the backup action is &#x60;restore&#x60;, otherwise this is ignored. | [optional] |

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



$apiInstance = new Upmind\EnhanceSdk\Api\MysqlApi(
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

[**\Upmind\EnhanceSdk\Model\NewResourceUuid**](../Model/NewResourceUuid.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebsiteMySQLUser()`

```php
createWebsiteMySQLUser($org_id, $website_id, $new_my_sql_user): \Upmind\EnhanceSdk\Model\NewResourceUuid
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
    $result = $apiInstance->createWebsiteMySQLUser($org_id, $website_id, $new_my_sql_user);
    print_r($result);
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

[**\Upmind\EnhanceSdk\Model\NewResourceUuid**](../Model/NewResourceUuid.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebsiteMySQLUserAccessHosts()`

```php
createWebsiteMySQLUserAccessHosts($org_id, $website_id, $db_id, $user_id, $my_sql_user_access_hosts)
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
$db_id = 'db_id_example'; // string | The id of the database.
$user_id = 'user_id_example'; // string | The id of the database user.
$my_sql_user_access_hosts = new \Upmind\EnhanceSdk\Model\MySQLUserAccessHosts(); // \Upmind\EnhanceSdk\Model\MySQLUserAccessHosts | User access hosts.

try {
    $apiInstance->createWebsiteMySQLUserAccessHosts($org_id, $website_id, $db_id, $user_id, $my_sql_user_access_hosts);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->createWebsiteMySQLUserAccessHosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **db_id** | **string**| The id of the database. | |
| **user_id** | **string**| The id of the database user. | |
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

## `createWebsiteMySQLUserPrivileges()`

```php
createWebsiteMySQLUserPrivileges($org_id, $website_id, $user_id, $my_sql_user_grants)
```

Create website MySQL database user privileges

Adds for the given user new privileges to website's MySQL database. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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
$user_id = 'user_id_example'; // string | The id of the database user.
$my_sql_user_grants = new \Upmind\EnhanceSdk\Model\MySQLUserGrants(); // \Upmind\EnhanceSdk\Model\MySQLUserGrants | User privilege grants.

try {
    $apiInstance->createWebsiteMySQLUserPrivileges($org_id, $website_id, $user_id, $my_sql_user_grants);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->createWebsiteMySQLUserPrivileges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **user_id** | **string**| The id of the database user. | |
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

## `deleteWebsiteMySQLDB()`

```php
deleteWebsiteMySQLDB($org_id, $website_id, $db_id)
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
$db_id = 'db_id_example'; // string | The id of the database.

try {
    $apiInstance->deleteWebsiteMySQLDB($org_id, $website_id, $db_id);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->deleteWebsiteMySQLDB: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **db_id** | **string**| The id of the database. | |

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
deleteWebsiteMySQLUser($org_id, $website_id, $user_id)
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
$user_id = 'user_id_example'; // string | The id of the database user.

try {
    $apiInstance->deleteWebsiteMySQLUser($org_id, $website_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->deleteWebsiteMySQLUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **user_id** | **string**| The id of the database user. | |

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
deleteWebsiteMySQLUserAccessHosts($org_id, $website_id, $db_id, $user_id, $my_sql_user_access_hosts)
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
$db_id = 'db_id_example'; // string | The id of the database.
$user_id = 'user_id_example'; // string | The id of the database user.
$my_sql_user_access_hosts = new \Upmind\EnhanceSdk\Model\MySQLUserAccessHosts(); // \Upmind\EnhanceSdk\Model\MySQLUserAccessHosts | User access hosts.

try {
    $apiInstance->deleteWebsiteMySQLUserAccessHosts($org_id, $website_id, $db_id, $user_id, $my_sql_user_access_hosts);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->deleteWebsiteMySQLUserAccessHosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **db_id** | **string**| The id of the database. | |
| **user_id** | **string**| The id of the database user. | |
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

## `deleteWebsiteMySQLUserPrivileges()`

```php
deleteWebsiteMySQLUserPrivileges($org_id, $website_id, $user_id, $my_sql_user_grants)
```

Delete website MySQL database user privileges

Removes from the given user privileges to website's MySQL database. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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
$user_id = 'user_id_example'; // string | The id of the database user.
$my_sql_user_grants = new \Upmind\EnhanceSdk\Model\MySQLUserGrants(); // \Upmind\EnhanceSdk\Model\MySQLUserGrants | User privilege grants.

try {
    $apiInstance->deleteWebsiteMySQLUserPrivileges($org_id, $website_id, $user_id, $my_sql_user_grants);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->deleteWebsiteMySQLUserPrivileges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **user_id** | **string**| The id of the database user. | |
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

## `downloadSql()`

```php
downloadSql($org_id, $website_id, $db_id): \SplFileObject
```

Takes a backup of given database and returns it gziped

Performs a database backup into an sql, gzips the sql and sends the compressed binary as body.

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
$db_id = 'db_id_example'; // string | The id of the database.

try {
    $result = $apiInstance->downloadSql($org_id, $website_id, $db_id);
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
| **db_id** | **string**| The id of the database. | |

### Return type

**\SplFileObject**

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrgMySQLDBs()`

```php
getOrgMySQLDBs($org_id, $offset, $limit, $sort_by, $sort_order, $search): \Upmind\EnhanceSdk\Model\MySQLDBsListing
```

Get org's MySQL databases

Returns all MySQL databases belonging to the given organization. The results may optionally be filtered. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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
$offset = 56; // int | The offset from which to return items.
$limit = 56; // int | The maximum number of items to return.
$sort_by = 'sort_by_example'; // string | The field by which to sort.
$sort_order = 'sort_order_example'; // string | The direction in which to sort. Possible values are 'asc' and 'desc', defaulting to 'asc'.
$search = 'search_example'; // string | Limit the result set to the resources whose names, partially and case insensitively, match the specified search term. E.g. for websites, this is their domain or tag, for databases the database name, for emails the email address or mailbox name, etc. A website will also be returned if the search term exactly matches the website's uuid.

try {
    $result = $apiInstance->getOrgMySQLDBs($org_id, $offset, $limit, $sort_by, $sort_order, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->getOrgMySQLDBs: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Upmind\EnhanceSdk\Model\MySQLDBsListing**](../Model/MySQLDBsListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhpMyAdminSSOUrl()`

```php
getPhpMyAdminSSOUrl($org_id, $website_id, $db_id): string
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
$db_id = 'db_id_example'; // string | The id of the database.

try {
    $result = $apiInstance->getPhpMyAdminSSOUrl($org_id, $website_id, $db_id);
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
| **db_id** | **string**| The id of the database. | |

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

## `updateWebsiteMySQLUser()`

```php
updateWebsiteMySQLUser($org_id, $website_id, $user_id, $my_sql_user_update)
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
$user_id = 'user_id_example'; // string | The id of the database user.
$my_sql_user_update = new \Upmind\EnhanceSdk\Model\MySQLUserUpdate(); // \Upmind\EnhanceSdk\Model\MySQLUserUpdate | User update details.

try {
    $apiInstance->updateWebsiteMySQLUser($org_id, $website_id, $user_id, $my_sql_user_update);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->updateWebsiteMySQLUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **user_id** | **string**| The id of the database user. | |
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
uploadSql($org_id, $website_id, $db_id, $sql, $force)
```

Uploads sql file and executes it against db

Uploads an sql file which is then executed against given db. Allowed file types are '.sql', '.gz' and '.zip'. The gzip-ed file must be a valid sql. The zip archive may contain only one '.sql' file, however the file can be within a directory. If the force flag is set to true (default is false), the SQL execution will not stop when an error is raised (corresponds to the --force option of mysql cli). The max allowed size is 100 MB.

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
$db_id = 'db_id_example'; // string | The id of the database.
$sql = "/path/to/file.txt"; // \SplFileObject | Upload either a raw sql file (must be utf8 valid string) or .zip or .gz file with the sql string.
$force = false; // bool

try {
    $apiInstance->uploadSql($org_id, $website_id, $db_id, $sql, $force);
} catch (Exception $e) {
    echo 'Exception when calling MysqlApi->uploadSql: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **db_id** | **string**| The id of the database. | |
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
