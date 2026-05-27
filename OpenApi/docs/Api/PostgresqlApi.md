# Upmind\EnhanceSdk\PostgresqlApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebsitePostgresqlDb()**](PostgresqlApi.md#createWebsitePostgresqlDb) | **POST** /orgs/{org_id}/websites/{website_id}/postgresql-dbs | Create a PostgreSQL database for website |
| [**createWebsitePostgresqlUser()**](PostgresqlApi.md#createWebsitePostgresqlUser) | **POST** /orgs/{org_id}/websites/{website_id}/postgresql-users | Create website PostgreSQL database user |
| [**deleteWebsitePostgresqlDb()**](PostgresqlApi.md#deleteWebsitePostgresqlDb) | **DELETE** /orgs/{org_id}/websites/{website_id}/postgresql-dbs/{db_name} | Delete website PostgreSQL database |
| [**deleteWebsitePostgresqlUser()**](PostgresqlApi.md#deleteWebsitePostgresqlUser) | **DELETE** /orgs/{org_id}/websites/{website_id}/postgresql-users/{username} | Delete website PostgreSQL database user |
| [**getWebsitePostgresqlDbs()**](PostgresqlApi.md#getWebsitePostgresqlDbs) | **GET** /orgs/{org_id}/websites/{website_id}/postgresql-dbs | Get website PostgreSQL databases |
| [**getWebsitePostgresqlUsers()**](PostgresqlApi.md#getWebsitePostgresqlUsers) | **GET** /orgs/{org_id}/websites/{website_id}/postgresql-users | Get website PostgreSQL database users |
| [**grantPostgresqlUserDbPrivileges()**](PostgresqlApi.md#grantPostgresqlUserDbPrivileges) | **POST** /orgs/{org_id}/websites/{website_id}/postgresql-users/{username}/privileges | Grant privileges on a specific database |
| [**revokePostgresqlUserDbPrivileges()**](PostgresqlApi.md#revokePostgresqlUserDbPrivileges) | **DELETE** /orgs/{org_id}/websites/{website_id}/postgresql-users/{username}/privileges/{db_name} | Remove privileges on this database |
| [**updateWebsitePostgresqlUser()**](PostgresqlApi.md#updateWebsitePostgresqlUser) | **PATCH** /orgs/{org_id}/websites/{website_id}/postgresql-users/{username} | Update website PostgreSQL database user |


## `createWebsitePostgresqlDb()`

```php
createWebsitePostgresqlDb($org_id, $website_id, $new_my_sqldb)
```

Create a PostgreSQL database for website

Creates a new PostgreSQL database for the given website. The supplied name must conform to the following regular expression: `^[0-9a-z$_]+$`. That is, a name may only contain alphanumerical characters, dollar signs, and underscores. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PostgresqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$new_my_sqldb = new \Upmind\EnhanceSdk\Model\NewMySQLDB(); // \Upmind\EnhanceSdk\Model\NewMySQLDB | New database details.

try {
    $apiInstance->createWebsitePostgresqlDb($org_id, $website_id, $new_my_sqldb);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlApi->createWebsitePostgresqlDb: ', $e->getMessage(), PHP_EOL;
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

## `createWebsitePostgresqlUser()`

```php
createWebsitePostgresqlUser($org_id, $website_id, $new_postgresql_user)
```

Create website PostgreSQL database user

Creates a new MySQL database user for the given website database. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PostgresqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$new_postgresql_user = new \Upmind\EnhanceSdk\Model\NewPostgresqlUser(); // \Upmind\EnhanceSdk\Model\NewPostgresqlUser | New user details.

try {
    $apiInstance->createWebsitePostgresqlUser($org_id, $website_id, $new_postgresql_user);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlApi->createWebsitePostgresqlUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **new_postgresql_user** | [**\Upmind\EnhanceSdk\Model\NewPostgresqlUser**](../Model/NewPostgresqlUser.md)| New user details. | |

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

## `deleteWebsitePostgresqlDb()`

```php
deleteWebsitePostgresqlDb($org_id, $website_id, $db_name)
```

Delete website PostgreSQL database

Delete website's PostgreSQL database. NOTE: All data will be lost after this endpoint returns. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PostgresqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$db_name = 'db_name_example'; // string | The name of the database.

try {
    $apiInstance->deleteWebsitePostgresqlDb($org_id, $website_id, $db_name);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlApi->deleteWebsitePostgresqlDb: ', $e->getMessage(), PHP_EOL;
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

## `deleteWebsitePostgresqlUser()`

```php
deleteWebsitePostgresqlUser($org_id, $website_id, $username)
```

Delete website PostgreSQL database user

Delete website's PostgreSQL database user. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PostgresqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$username = 'username_example'; // string | The user of the database user.

try {
    $apiInstance->deleteWebsitePostgresqlUser($org_id, $website_id, $username);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlApi->deleteWebsitePostgresqlUser: ', $e->getMessage(), PHP_EOL;
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

## `getWebsitePostgresqlDbs()`

```php
getWebsitePostgresqlDbs($org_id, $website_id): \Upmind\EnhanceSdk\Model\MySQLDBsFullListing
```

Get website PostgreSQL databases

Returns all PostgreSQL databases belonging to the given website. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PostgresqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsitePostgresqlDbs($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlApi->getWebsitePostgresqlDbs: ', $e->getMessage(), PHP_EOL;
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

## `getWebsitePostgresqlUsers()`

```php
getWebsitePostgresqlUsers($org_id, $website_id): \Upmind\EnhanceSdk\Model\PostgresqlUsersFullListing
```

Get website PostgreSQL database users

Returns all PostgreSQL users belonging to the given website database. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PostgresqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsitePostgresqlUsers($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlApi->getWebsitePostgresqlUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\PostgresqlUsersFullListing**](../Model/PostgresqlUsersFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `grantPostgresqlUserDbPrivileges()`

```php
grantPostgresqlUserDbPrivileges($org_id, $website_id, $username, $body)
```

Grant privileges on a specific database

This will grant the Postgresql user full super admin privileges on the given database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PostgresqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$username = 'username_example'; // string | The user of the database user.
$body = 'body_example'; // string | Database name

try {
    $apiInstance->grantPostgresqlUserDbPrivileges($org_id, $website_id, $username, $body);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlApi->grantPostgresqlUserDbPrivileges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **username** | **string**| The user of the database user. | |
| **body** | **string**| Database name | |

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

## `revokePostgresqlUserDbPrivileges()`

```php
revokePostgresqlUserDbPrivileges($org_id, $website_id, $username, $db_name)
```

Remove privileges on this database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PostgresqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$username = 'username_example'; // string | The user of the database user.
$db_name = 'db_name_example'; // string | The name of the database.

try {
    $apiInstance->revokePostgresqlUserDbPrivileges($org_id, $website_id, $username, $db_name);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlApi->revokePostgresqlUserDbPrivileges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **username** | **string**| The user of the database user. | |
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

## `updateWebsitePostgresqlUser()`

```php
updateWebsitePostgresqlUser($org_id, $website_id, $username, $postgresql_user_update)
```

Update website PostgreSQL database user

Updates website's PostgreSQL database user's password (username update coming later). Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PostgresqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$username = 'username_example'; // string | The user of the database user.
$postgresql_user_update = new \Upmind\EnhanceSdk\Model\PostgresqlUserUpdate(); // \Upmind\EnhanceSdk\Model\PostgresqlUserUpdate | User update details.

try {
    $apiInstance->updateWebsitePostgresqlUser($org_id, $website_id, $username, $postgresql_user_update);
} catch (Exception $e) {
    echo 'Exception when calling PostgresqlApi->updateWebsitePostgresqlUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **username** | **string**| The user of the database user. | |
| **postgresql_user_update** | [**\Upmind\EnhanceSdk\Model\PostgresqlUserUpdate**](../Model/PostgresqlUserUpdate.md)| User update details. | |

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
