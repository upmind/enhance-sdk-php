# Upmind\EnhanceSdk\BackupsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**backupWebsite()**](BackupsApi.md#backupWebsite) | **POST** /orgs/{org_id}/websites/{website_id}/backups | Create a website backup |
| [**deleteWebsiteBackup()**](BackupsApi.md#deleteWebsiteBackup) | **DELETE** /orgs/{org_id}/websites/{website_id}/backups/{backup_id} | Delete a backup |
| [**getWebsiteBackup()**](BackupsApi.md#getWebsiteBackup) | **GET** /orgs/{org_id}/websites/{website_id}/backups/{backup_id} | Get detailed metadata of the website backup |
| [**getWebsiteBackups()**](BackupsApi.md#getWebsiteBackups) | **GET** /orgs/{org_id}/websites/{website_id}/backups | Get all website backups metadata |
| [**getWebsiteRestoreStatus()**](BackupsApi.md#getWebsiteRestoreStatus) | **GET** /orgs/{org_id}/websites/{website_id}/backups/{backup_id}/restore_status | Get the last detailed metadata of the restored website backup. |
| [**restoreWebsite()**](BackupsApi.md#restoreWebsite) | **PUT** /orgs/{org_id}/websites/{website_id}/backups/{backup_id} | Restore website from a backup |


## `backupWebsite()`

```php
backupWebsite($org_id, $website_id, $include_emails, $backup_options): \Upmind\EnhanceSdk\Model\Backup
```

Create a website backup

Creates a new full website backup. This is a long running operation and the request doesn't return until all backups are finished, or an error occurs. If you want to see the backup progress, you can periodically query the backup status via `getWebsiteBackupStatus`. Backups consists of several components, and a component is the smallest granularity of a backup. The components are: backing up of the website's home directory, the website's mysql databases, and the website's emails. The backups may be partial, that is, some out of all backup components may succeeded, but e.g. the backup of the mysql databases may fail. In both cases, the backup snapshot is still created, and the mysql backups are marked as failed for the backup record. Email backups are not done automatically, as they need not be backed up in most cases (due to the expectation that customers would want to backup and then roll back a website after filesystem or database changes, which wouldn't concern emails). Doing so redundantly is time consuming so it is skipped by default, but emails may be backed up if the `includeEmails` query parameter is set to true. If the backup fails altogether, this endpoint still returns a 201 Created, but in this case only the metadata in `orchd`'s db is inserted, no actual backup snapshot is created. This is for information purposes, such a backup, perhaps needless to say, cannot be restored. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$include_emails = false; // bool | The boolean flag used to include emails in the backup.
$backup_options = new \Upmind\EnhanceSdk\Model\BackupOptions(); // \Upmind\EnhanceSdk\Model\BackupOptions

try {
    $result = $apiInstance->backupWebsite($org_id, $website_id, $include_emails, $backup_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->backupWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **include_emails** | **bool**| The boolean flag used to include emails in the backup. | [optional] [default to false] |
| **backup_options** | [**\Upmind\EnhanceSdk\Model\BackupOptions**](../Model/BackupOptions.md)|  | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\Backup**](../Model/Backup.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebsiteBackup()`

```php
deleteWebsiteBackup($org_id, $website_id, $backup_id)
```

Delete a backup

Deletes a backup. If the backup refers to a (partially) successful backup, both its metadata and the backup snapshot on the backup server will be removed, otherwise just the metadata is removed. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$backup_id = 56; // int | The id of the backup.

try {
    $apiInstance->deleteWebsiteBackup($org_id, $website_id, $backup_id);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->deleteWebsiteBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **backup_id** | **int**| The id of the backup. | |

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

## `getWebsiteBackup()`

```php
getWebsiteBackup($org_id, $website_id, $backup_id): \Upmind\EnhanceSdk\Model\BackupDetailed
```

Get detailed metadata of the website backup

Returns detailed information about the backup. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$backup_id = 56; // int | The id of the backup.

try {
    $result = $apiInstance->getWebsiteBackup($org_id, $website_id, $backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getWebsiteBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **backup_id** | **int**| The id of the backup. | |

### Return type

[**\Upmind\EnhanceSdk\Model\BackupDetailed**](../Model/BackupDetailed.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteBackups()`

```php
getWebsiteBackups($org_id, $website_id): \Upmind\EnhanceSdk\Model\BackupsFullListing
```

Get all website backups metadata

Returns a list of all website backups. This includes the backups that were not successful as well, or backups that were only partially successful (e.g. the home directory was backed up but not the databases). Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsiteBackups($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getWebsiteBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\BackupsFullListing**](../Model/BackupsFullListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteRestoreStatus()`

```php
getWebsiteRestoreStatus($org_id, $website_id, $backup_id): \Upmind\EnhanceSdk\Model\RestoreDetailed
```

Get the last detailed metadata of the restored website backup.

Returns the last detailed information about the restored backup. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$backup_id = 56; // int | The id of the backup.

try {
    $result = $apiInstance->getWebsiteRestoreStatus($org_id, $website_id, $backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->getWebsiteRestoreStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **backup_id** | **int**| The id of the backup. | |

### Return type

[**\Upmind\EnhanceSdk\Model\RestoreDetailed**](../Model/RestoreDetailed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreWebsite()`

```php
restoreWebsite($org_id, $website_id, $backup_id, $backup_restore_options)
```

Restore website from a backup

Restores the website's home directory and MySQL databases, and optionally the website's email mailboxes if the `includeEmails` query parameter is set to true. Note that if the website was deleted or any of its entities was deleted through `orchd` (via one or more of the DELETE endpoints), this endpoint does not restore those resources. It may only be used when e.g. one wants to restore the previous state of the mailbox of an existing account (but not a deleted account), or the state of an existing website's home directory. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\BackupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$backup_id = 56; // int | The id of the backup.
$backup_restore_options = new \Upmind\EnhanceSdk\Model\BackupRestoreOptions(); // \Upmind\EnhanceSdk\Model\BackupRestoreOptions | The options used to define what will be restored from the backup snapshot.

try {
    $apiInstance->restoreWebsite($org_id, $website_id, $backup_id, $backup_restore_options);
} catch (Exception $e) {
    echo 'Exception when calling BackupsApi->restoreWebsite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **backup_id** | **int**| The id of the backup. | |
| **backup_restore_options** | [**\Upmind\EnhanceSdk\Model\BackupRestoreOptions**](../Model/BackupRestoreOptions.md)| The options used to define what will be restored from the backup snapshot. | [optional] |

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
