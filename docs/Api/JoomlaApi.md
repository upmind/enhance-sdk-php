# Upmind\EnhanceSdk\JoomlaApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createJoomlaUser()**](JoomlaApi.md#createJoomlaUser) | **POST** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/joomla/users | Create website Joomla user |
| [**deleteJoomlaUser()**](JoomlaApi.md#deleteJoomlaUser) | **DELETE** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/joomla/users/{username} | Delete a joomla user |
| [**getJoomlaInfo()**](JoomlaApi.md#getJoomlaInfo) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/joomla/info |  |
| [**getJoomlaUsers()**](JoomlaApi.md#getJoomlaUsers) | **GET** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/joomla/users |  |
| [**resetJoomlaUserPassword()**](JoomlaApi.md#resetJoomlaUserPassword) | **PUT** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/joomla/users/{username}/password | Set the password for a given username |
| [**updateJoomlaEmailAddress()**](JoomlaApi.md#updateJoomlaEmailAddress) | **PUT** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/joomla/users/{username}/email | Update the email address for a given username |
| [**updateJoomlaUsername()**](JoomlaApi.md#updateJoomlaUsername) | **PUT** /orgs/{org_id}/websites/{website_id}/apps/{app_id}/joomla/users/{username}/username | Update the username for a given username |


## `createJoomlaUser()`

```php
createJoomlaUser($org_id, $website_id, $app_id, $new_joomla_user)
```

Create website Joomla user

Add a user admin user to a Joomla installation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\JoomlaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$new_joomla_user = new \Upmind\EnhanceSdk\Model\NewJoomlaUser(); // \Upmind\EnhanceSdk\Model\NewJoomlaUser

try {
    $apiInstance->createJoomlaUser($org_id, $website_id, $app_id, $new_joomla_user);
} catch (Exception $e) {
    echo 'Exception when calling JoomlaApi->createJoomlaUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **new_joomla_user** | [**\Upmind\EnhanceSdk\Model\NewJoomlaUser**](../Model/NewJoomlaUser.md)|  | |

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

## `deleteJoomlaUser()`

```php
deleteJoomlaUser($org_id, $website_id, $app_id, $username)
```

Delete a joomla user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\JoomlaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$username = 'username_example'; // string | Joomla username

try {
    $apiInstance->deleteJoomlaUser($org_id, $website_id, $app_id, $username);
} catch (Exception $e) {
    echo 'Exception when calling JoomlaApi->deleteJoomlaUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **username** | **string**| Joomla username | |

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

## `getJoomlaInfo()`

```php
getJoomlaInfo($org_id, $website_id, $app_id): \Upmind\EnhanceSdk\Model\JoomlaInfo
```



Get Joomla installation info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\JoomlaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.

try {
    $result = $apiInstance->getJoomlaInfo($org_id, $website_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JoomlaApi->getJoomlaInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |

### Return type

[**\Upmind\EnhanceSdk\Model\JoomlaInfo**](../Model/JoomlaInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJoomlaUsers()`

```php
getJoomlaUsers($org_id, $website_id, $app_id): \Upmind\EnhanceSdk\Model\JoomlaUsersFullListing
```



List all users of a Joomla installation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\JoomlaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.

try {
    $result = $apiInstance->getJoomlaUsers($org_id, $website_id, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JoomlaApi->getJoomlaUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |

### Return type

[**\Upmind\EnhanceSdk\Model\JoomlaUsersFullListing**](../Model/JoomlaUsersFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetJoomlaUserPassword()`

```php
resetJoomlaUserPassword($org_id, $website_id, $app_id, $username, $body)
```

Set the password for a given username

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\JoomlaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$username = 'username_example'; // string | Joomla username
$body = 'body_example'; // string

try {
    $apiInstance->resetJoomlaUserPassword($org_id, $website_id, $app_id, $username, $body);
} catch (Exception $e) {
    echo 'Exception when calling JoomlaApi->resetJoomlaUserPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **username** | **string**| Joomla username | |
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

## `updateJoomlaEmailAddress()`

```php
updateJoomlaEmailAddress($org_id, $website_id, $app_id, $username, $body)
```

Update the email address for a given username

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\JoomlaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$username = 'username_example'; // string | Joomla username
$body = 'body_example'; // string

try {
    $apiInstance->updateJoomlaEmailAddress($org_id, $website_id, $app_id, $username, $body);
} catch (Exception $e) {
    echo 'Exception when calling JoomlaApi->updateJoomlaEmailAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **username** | **string**| Joomla username | |
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

## `updateJoomlaUsername()`

```php
updateJoomlaUsername($org_id, $website_id, $app_id, $username, $body)
```

Update the username for a given username

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\JoomlaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$app_id = 'app_id_example'; // string | The id of the app.
$username = 'username_example'; // string | Joomla username
$body = 'body_example'; // string

try {
    $apiInstance->updateJoomlaUsername($org_id, $website_id, $app_id, $username, $body);
} catch (Exception $e) {
    echo 'Exception when calling JoomlaApi->updateJoomlaUsername: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **app_id** | **string**| The id of the app. | |
| **username** | **string**| Joomla username | |
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
