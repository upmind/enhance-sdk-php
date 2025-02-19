# Upmind\EnhanceSdk\ImportersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**analyzeImportMigration()**](ImportersApi.md#analyzeImportMigration) | **POST** /v2/orgs/{org_id}/import/{import_migration_id}/analyze | Analyze imported migration |
| [**checkImportMigrationResources()**](ImportersApi.md#checkImportMigrationResources) | **POST** /v2/orgs/{org_id}/import/{import_migration_id}/resource | Check if all resources from the imported migration could be created. |
| [**createImportMigration()**](ImportersApi.md#createImportMigration) | **POST** /v2/orgs/{org_id}/import/{import_migration_id} | Create a new import migration. |
| [**createImportServerSettings()**](ImportersApi.md#createImportServerSettings) | **POST** /orgs/{org_id}/import/server/settings | Create settings for the server import |
| [**deleteImportMigration()**](ImportersApi.md#deleteImportMigration) | **DELETE** /v2/orgs/{org_id}/import/{import_migration_id} | Delete single migration |
| [**deleteImportServerSettings()**](ImportersApi.md#deleteImportServerSettings) | **DELETE** /orgs/{org_id}/import/server/{server_id}/settings | Delete settings for the server import |
| [**getImportMigration()**](ImportersApi.md#getImportMigration) | **GET** /v2/orgs/{org_id}/import/{import_migration_id} | Fetches single migration details |
| [**getImportMigrationData()**](ImportersApi.md#getImportMigrationData) | **GET** /v2/orgs/{org_id}/import/{import_migration_id}/analyze | Get import migration information |
| [**getImportMigrationLog()**](ImportersApi.md#getImportMigrationLog) | **GET** /v2/orgs/{org_id}/import/{import_migration_id}/log | Get the log for an import migration |
| [**getImportMigrations()**](ImportersApi.md#getImportMigrations) | **GET** /v2/orgs/{org_id}/import | List all import migrations |
| [**getImportServerDomainsCached()**](ImportersApi.md#getImportServerDomainsCached) | **GET** /orgs/{org_id}/import/server/{server_id}/cached-domains | Returns cached domains |
| [**getImportServerPullDomains()**](ImportersApi.md#getImportServerPullDomains) | **GET** /orgs/{org_id}/import/server/{server_id}/pull-domains | Pull domains form the remote server. |
| [**getImportServerSettings()**](ImportersApi.md#getImportServerSettings) | **GET** /orgs/{org_id}/import/server/{server_id}/settings | Get settings for the server import |
| [**listImportServerSettings()**](ImportersApi.md#listImportServerSettings) | **GET** /orgs/{org_id}/import/server/settings | List all server import settings |
| [**scanImportMigrations()**](ImportersApi.md#scanImportMigrations) | **GET** /v2/import/scan | Scan for manually uploaded cPanel backups. |
| [**transferCPanelUserAccount()**](ImportersApi.md#transferCPanelUserAccount) | **POST** /orgs/{org_id}/import/server/{server_id}/account/{user_id} | Transfer user account from remote cPanel server |
| [**transferPleskDomain()**](ImportersApi.md#transferPleskDomain) | **POST** /orgs/{org_id}/import/plesk-server/{server_id}/domain | Transfer user account from remote cPanel server |
| [**updateImportServerSettings()**](ImportersApi.md#updateImportServerSettings) | **PATCH** /orgs/{org_id}/import/server/{server_id}/settings | Update settings for the server import |
| [**uploadImportMigration()**](ImportersApi.md#uploadImportMigration) | **POST** /v2/orgs/{org_id}/import/upload/{import_migration_kind} | Upload file for analyzing and processing. |


## `analyzeImportMigration()`

```php
analyzeImportMigration($org_id, $import_migration_id)
```

Analyze imported migration

Analyze import and store results into database.  Note: the endpoint returns immediately, and you have to poll status via `getImportMigration` endpoint. If you want to see detailed error, please call `getImportMigrationLog`.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$import_migration_id = 'import_migration_id_example'; // string | The ID of the import migration being acted upon.

try {
    $apiInstance->analyzeImportMigration($org_id, $import_migration_id);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->analyzeImportMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **import_migration_id** | **string**| The ID of the import migration being acted upon. | |

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

## `checkImportMigrationResources()`

```php
checkImportMigrationResources($org_id, $import_migration_id, $importer_migration_req_body): \Upmind\EnhanceSdk\Model\ResourceCheckError
```

Check if all resources from the imported migration could be created.

Check if all resources from the imported migration could be created.  If all resources could be created, 200 is returned with an empty `ResourceCheckError`. However, if any error occurs, 200 is returned with a non-empty `ResourceCheckError`.  In case of import failure, you can rerun importing by setting forceQueue to true. Before doing so, it's required to remove any already imported resources. Otherwise, the import will fail.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$import_migration_id = 'import_migration_id_example'; // string | The ID of the import migration being acted upon.
$importer_migration_req_body = new \Upmind\EnhanceSdk\Model\ImporterMigrationReqBody(); // \Upmind\EnhanceSdk\Model\ImporterMigrationReqBody

try {
    $result = $apiInstance->checkImportMigrationResources($org_id, $import_migration_id, $importer_migration_req_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->checkImportMigrationResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **import_migration_id** | **string**| The ID of the import migration being acted upon. | |
| **importer_migration_req_body** | [**\Upmind\EnhanceSdk\Model\ImporterMigrationReqBody**](../Model/ImporterMigrationReqBody.md)|  | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\ResourceCheckError**](../Model/ResourceCheckError.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createImportMigration()`

```php
createImportMigration($org_id, $import_migration_id, $importer_migration_req_body)
```

Create a new import migration.

Create a new import migration for a given import type.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$import_migration_id = 'import_migration_id_example'; // string | The ID of the import migration being acted upon.
$importer_migration_req_body = new \Upmind\EnhanceSdk\Model\ImporterMigrationReqBody(); // \Upmind\EnhanceSdk\Model\ImporterMigrationReqBody

try {
    $apiInstance->createImportMigration($org_id, $import_migration_id, $importer_migration_req_body);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->createImportMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **import_migration_id** | **string**| The ID of the import migration being acted upon. | |
| **importer_migration_req_body** | [**\Upmind\EnhanceSdk\Model\ImporterMigrationReqBody**](../Model/ImporterMigrationReqBody.md)|  | [optional] |

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

## `createImportServerSettings()`

```php
createImportServerSettings($org_id, $new_import_server_settings): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Create settings for the server import

Create settings for the server import.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$new_import_server_settings = new \Upmind\EnhanceSdk\Model\NewImportServerSettings(); // \Upmind\EnhanceSdk\Model\NewImportServerSettings

try {
    $result = $apiInstance->createImportServerSettings($org_id, $new_import_server_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->createImportServerSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **new_import_server_settings** | [**\Upmind\EnhanceSdk\Model\NewImportServerSettings**](../Model/NewImportServerSettings.md)|  | |

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

## `deleteImportMigration()`

```php
deleteImportMigration($org_id, $import_migration_id)
```

Delete single migration

Delete a single migration with the uploaded file.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$import_migration_id = 'import_migration_id_example'; // string | The ID of the import migration being acted upon.

try {
    $apiInstance->deleteImportMigration($org_id, $import_migration_id);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->deleteImportMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **import_migration_id** | **string**| The ID of the import migration being acted upon. | |

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

## `deleteImportServerSettings()`

```php
deleteImportServerSettings($org_id, $server_id)
```

Delete settings for the server import

Delete settings for the server import.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $apiInstance->deleteImportServerSettings($org_id, $server_id);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->deleteImportServerSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
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

## `getImportMigration()`

```php
getImportMigration($org_id, $import_migration_id): \Upmind\EnhanceSdk\Model\ImportMigrationEntry
```

Fetches single migration details

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$import_migration_id = 'import_migration_id_example'; // string | The ID of the import migration being acted upon.

try {
    $result = $apiInstance->getImportMigration($org_id, $import_migration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->getImportMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **import_migration_id** | **string**| The ID of the import migration being acted upon. | |

### Return type

[**\Upmind\EnhanceSdk\Model\ImportMigrationEntry**](../Model/ImportMigrationEntry.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImportMigrationData()`

```php
getImportMigrationData($org_id, $import_migration_id): \Upmind\EnhanceSdk\Model\ImporterAnalyzedData
```

Get import migration information

Get analyzed informations about import.  Information contains details about domains, ftp users, databases, crontabs and mailboxes.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$import_migration_id = 'import_migration_id_example'; // string | The ID of the import migration being acted upon.

try {
    $result = $apiInstance->getImportMigrationData($org_id, $import_migration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->getImportMigrationData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **import_migration_id** | **string**| The ID of the import migration being acted upon. | |

### Return type

[**\Upmind\EnhanceSdk\Model\ImporterAnalyzedData**](../Model/ImporterAnalyzedData.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImportMigrationLog()`

```php
getImportMigrationLog($org_id, $import_migration_id): \Upmind\EnhanceSdk\Model\ImportMigrationLogEntry[]
```

Get the log for an import migration

Fetches the import migration log for a single import migration.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$import_migration_id = 'import_migration_id_example'; // string | The ID of the import migration being acted upon.

try {
    $result = $apiInstance->getImportMigrationLog($org_id, $import_migration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->getImportMigrationLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **import_migration_id** | **string**| The ID of the import migration being acted upon. | |

### Return type

[**\Upmind\EnhanceSdk\Model\ImportMigrationLogEntry[]**](../Model/ImportMigrationLogEntry.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImportMigrations()`

```php
getImportMigrations($org_id): \Upmind\EnhanceSdk\Model\ImportMigrationFullListing
```

List all import migrations

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.

try {
    $result = $apiInstance->getImportMigrations($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->getImportMigrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |

### Return type

[**\Upmind\EnhanceSdk\Model\ImportMigrationFullListing**](../Model/ImportMigrationFullListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImportServerDomainsCached()`

```php
getImportServerDomainsCached($org_id, $server_id, $offset, $limit, $sort_order, $search_domain, $sort_by): \Upmind\EnhanceSdk\Model\ImportServerDomainsListing
```

Returns cached domains

Returns cached domains.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$server_id = 'server_id_example'; // string | The UUID of the server
$offset = 56; // int | The offset from which to return items.
$limit = 56; // int | The maximum number of items to return.
$sort_order = 'sort_order_example'; // string | The direction in which to sort. Possible values are 'asc' and 'desc', defaulting to 'asc'.
$search_domain = 'search_domain_example'; // string | Look for a specific domain in the result set.
$sort_by = 'sort_by_example'; // string | The field by which to sort.

try {
    $result = $apiInstance->getImportServerDomainsCached($org_id, $server_id, $offset, $limit, $sort_order, $search_domain, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->getImportServerDomainsCached: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **server_id** | **string**| The UUID of the server | |
| **offset** | **int**| The offset from which to return items. | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **sort_order** | **string**| The direction in which to sort. Possible values are &#39;asc&#39; and &#39;desc&#39;, defaulting to &#39;asc&#39;. | [optional] |
| **search_domain** | **string**| Look for a specific domain in the result set. | [optional] |
| **sort_by** | **string**| The field by which to sort. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\ImportServerDomainsListing**](../Model/ImportServerDomainsListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImportServerPullDomains()`

```php
getImportServerPullDomains($org_id, $server_id): \Upmind\EnhanceSdk\Model\ImportServerDomainsFullListing
```

Pull domains form the remote server.

Pull domains form the remote server, and cache them. To get cached domains, use getImportServerDomainsCached.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getImportServerPullDomains($org_id, $server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->getImportServerPullDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\ImportServerDomainsFullListing**](../Model/ImportServerDomainsFullListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImportServerSettings()`

```php
getImportServerSettings($org_id, $server_id): \Upmind\EnhanceSdk\Model\ImportServerSettings
```

Get settings for the server import

Get settings for the server import. Note: returned data does not contain ssh private key or any passwords/tokens.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$server_id = 'server_id_example'; // string | The UUID of the server

try {
    $result = $apiInstance->getImportServerSettings($org_id, $server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->getImportServerSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **server_id** | **string**| The UUID of the server | |

### Return type

[**\Upmind\EnhanceSdk\Model\ImportServerSettings**](../Model/ImportServerSettings.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listImportServerSettings()`

```php
listImportServerSettings($org_id): \Upmind\EnhanceSdk\Model\ImportServerSettingsFullListing
```

List all server import settings

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.

try {
    $result = $apiInstance->listImportServerSettings($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->listImportServerSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |

### Return type

[**\Upmind\EnhanceSdk\Model\ImportServerSettingsFullListing**](../Model/ImportServerSettingsFullListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `scanImportMigrations()`

```php
scanImportMigrations(): string[]
```

Scan for manually uploaded cPanel backups.

Will scan /var/local/enhance/orchd/importer for files matching cpmove*.tar.gz or backup*.tar.gz and will add them to the importer database for analysis.  An array of migration IDs will be returned. Master organisation only.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->scanImportMigrations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->scanImportMigrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferCPanelUserAccount()`

```php
transferCPanelUserAccount($org_id, $server_id, $user_id, $transfer_user_account_req_body): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Transfer user account from remote cPanel server

Transfer user account from remote cPanel server to Enhance server. It's an async endpoint. To get transfer result, you have to call getImportMigration.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$server_id = 'server_id_example'; // string | The UUID of the server
$user_id = 'user_id_example'; // string | The ID of the remote cPanel user
$transfer_user_account_req_body = new \Upmind\EnhanceSdk\Model\TransferUserAccountReqBody(); // \Upmind\EnhanceSdk\Model\TransferUserAccountReqBody

try {
    $result = $apiInstance->transferCPanelUserAccount($org_id, $server_id, $user_id, $transfer_user_account_req_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->transferCPanelUserAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **server_id** | **string**| The UUID of the server | |
| **user_id** | **string**| The ID of the remote cPanel user | |
| **transfer_user_account_req_body** | [**\Upmind\EnhanceSdk\Model\TransferUserAccountReqBody**](../Model/TransferUserAccountReqBody.md)|  | [optional] |

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

## `transferPleskDomain()`

```php
transferPleskDomain($org_id, $server_id, $transfer_plesk_domain_req_body): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Transfer user account from remote cPanel server

Transfer user account from remote Plesk server to Enhance server. It's an async endpoint. To get transfer result, you have to call getImportMigration.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$server_id = 'server_id_example'; // string | The UUID of the server
$transfer_plesk_domain_req_body = new \Upmind\EnhanceSdk\Model\TransferPleskDomainReqBody(); // \Upmind\EnhanceSdk\Model\TransferPleskDomainReqBody

try {
    $result = $apiInstance->transferPleskDomain($org_id, $server_id, $transfer_plesk_domain_req_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->transferPleskDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **server_id** | **string**| The UUID of the server | |
| **transfer_plesk_domain_req_body** | [**\Upmind\EnhanceSdk\Model\TransferPleskDomainReqBody**](../Model/TransferPleskDomainReqBody.md)|  | [optional] |

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

## `updateImportServerSettings()`

```php
updateImportServerSettings($org_id, $server_id, $update_import_server_settings)
```

Update settings for the server import

Update settings for the server import.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$server_id = 'server_id_example'; // string | The UUID of the server
$update_import_server_settings = new \Upmind\EnhanceSdk\Model\UpdateImportServerSettings(); // \Upmind\EnhanceSdk\Model\UpdateImportServerSettings

try {
    $apiInstance->updateImportServerSettings($org_id, $server_id, $update_import_server_settings);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->updateImportServerSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **server_id** | **string**| The UUID of the server | |
| **update_import_server_settings** | [**\Upmind\EnhanceSdk\Model\UpdateImportServerSettings**](../Model/UpdateImportServerSettings.md)|  | |

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

## `uploadImportMigration()`

```php
uploadImportMigration($org_id, $import_migration_kind, $backup): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Upload file for analyzing and processing.

Uploads an import file. File must be in `tar.gz` format, and only cPanel and Plesk uploads are allowed.  The max allowed size is 100 GB.

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


$apiInstance = new Upmind\EnhanceSdk\Api\ImportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$import_migration_kind = 'import_migration_kind_example'; // string | The type of migration file being uploaded.
$backup = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->uploadImportMigration($org_id, $import_migration_kind, $backup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportersApi->uploadImportMigration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **import_migration_kind** | **string**| The type of migration file being uploaded. | |
| **backup** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\NewResourceUuid**](../Model/NewResourceUuid.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
