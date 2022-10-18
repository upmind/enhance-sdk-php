# Upmind\EnhanceSdk\OwnerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOwner()**](OwnerApi.md#deleteOwner) | **DELETE** /orgs/{org_id}/owner | Delete organization owner |
| [**updateOwner()**](OwnerApi.md#updateOwner) | **PUT** /orgs/{org_id}/owner | Update organization owner |


## `deleteOwner()`

```php
deleteOwner($org_id)
```

Delete organization owner

This operation can only be done by a logged in superadmin of the organization's parent organization (TODO it's unclear as of this writing whether organization owners may delete themselves). The previous owner is demoted to the \"SupperAdmin\" role.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OwnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.

try {
    $apiInstance->deleteOwner($org_id);
} catch (Exception $e) {
    echo 'Exception when calling OwnerApi->deleteOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |

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

## `updateOwner()`

```php
updateOwner($org_id, $org_owner_update)
```

Update organization owner

The new owner must already be a member in the organization before establishing ownership. This operation can only be done by a logged in superadmin of the organization's parent organization, or the owner of the organization. In both cases, the previous owner (if they existed) is demoted to SuperAdmin after this operation.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OwnerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$org_owner_update = new \Upmind\EnhanceSdk\Model\OrgOwnerUpdate(); // \Upmind\EnhanceSdk\Model\OrgOwnerUpdate | Membership id of the to-be owner

try {
    $apiInstance->updateOwner($org_id, $org_owner_update);
} catch (Exception $e) {
    echo 'Exception when calling OwnerApi->updateOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **org_owner_update** | [**\Upmind\EnhanceSdk\Model\OrgOwnerUpdate**](../Model/OrgOwnerUpdate.md)| Membership id of the to-be owner | |

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
