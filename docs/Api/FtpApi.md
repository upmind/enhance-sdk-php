# Upmind\EnhanceSdk\FtpApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFtpUser()**](FtpApi.md#createFtpUser) | **POST** /orgs/{org_id}/websites/{website_id}/ftp/users | Creates a new FTP user for a given website |
| [**deleteFtpUser()**](FtpApi.md#deleteFtpUser) | **DELETE** /orgs/{org_id}/websites/{website_id}/ftp/users/{username} | Deletes given FTP user |
| [**getFtpUsers()**](FtpApi.md#getFtpUsers) | **GET** /orgs/{org_id}/websites/{website_id}/ftp/users | Returns all ftp users data for a given website |
| [**updateFtpUser()**](FtpApi.md#updateFtpUser) | **PATCH** /orgs/{org_id}/websites/{website_id}/ftp/users/{username} | Update given FTP user |


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


// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Upmind\EnhanceSdk\Api\FtpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$new_ftp_user = new \Upmind\EnhanceSdk\Model\NewFtpUser(); // \Upmind\EnhanceSdk\Model\NewFtpUser | FTP User
$create_home = True; // bool | If set to true we will try to crete a new home_dir for the user if does not exist.

try {
    $result = $apiInstance->createFtpUser($org_id, $website_id, $new_ftp_user, $create_home);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FtpApi->createFtpUser: ', $e->getMessage(), PHP_EOL;
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

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFtpUser()`

```php
deleteFtpUser($org_id, $website_id, $username, $delete_home)
```

Deletes given FTP user

Endpoint for deleting FTP user for a given website. User homeDir can only be deleted if it is a subdir for the website home. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\FtpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$username = 'username_example'; // string
$delete_home = True; // bool | If set to true we will try to delete the homeDir for the user. User homeDir can only be deleted if it is a subdir for the website home.

try {
    $apiInstance->deleteFtpUser($org_id, $website_id, $username, $delete_home);
} catch (Exception $e) {
    echo 'Exception when calling FtpApi->deleteFtpUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **username** | **string**|  | |
| **delete_home** | **bool**| If set to true we will try to delete the homeDir for the user. User homeDir can only be deleted if it is a subdir for the website home. | [optional] |

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


// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Upmind\EnhanceSdk\Api\FtpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getFtpUsers($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FtpApi->getFtpUsers: ', $e->getMessage(), PHP_EOL;
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

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFtpUser()`

```php
updateFtpUser($org_id, $website_id, $username, $ftp_user_update)
```

Update given FTP user

Endpoint for updating FTP user for a given website We only allow user's homeDir and password to be updated. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\FtpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$username = 'username_example'; // string
$ftp_user_update = new \Upmind\EnhanceSdk\Model\FtpUserUpdate(); // \Upmind\EnhanceSdk\Model\FtpUserUpdate | FTP User

try {
    $apiInstance->updateFtpUser($org_id, $website_id, $username, $ftp_user_update);
} catch (Exception $e) {
    echo 'Exception when calling FtpApi->updateFtpUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **username** | **string**|  | |
| **ftp_user_update** | [**\Upmind\EnhanceSdk\Model\FtpUserUpdate**](../Model/FtpUserUpdate.md)| FTP User | |

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
