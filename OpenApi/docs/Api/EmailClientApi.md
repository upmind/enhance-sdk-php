# Upmind\EnhanceSdk\EmailClientApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEmailAutoresponder()**](EmailClientApi.md#createEmailAutoresponder) | **POST** /email-client/autoresponders | Create new email autoresponder |
| [**deleteEmailAutoresponder()**](EmailClientApi.md#deleteEmailAutoresponder) | **DELETE** /email-client/autoresponders/{autoresponder_id} | Delete email autoresponder |
| [**getEmailAutoresponders()**](EmailClientApi.md#getEmailAutoresponders) | **GET** /email-client/autoresponders | Get email account autoresponders |
| [**getEmailForwarders()**](EmailClientApi.md#getEmailForwarders) | **GET** /email-client/forwarders | Returns email account&#39;s forwarders |
| [**getEmailPublicIp()**](EmailClientApi.md#getEmailPublicIp) | **GET** /email-client/public-ip | Returns public Ip Address of the email server |
| [**updateEmailAutoresponder()**](EmailClientApi.md#updateEmailAutoresponder) | **PUT** /email-client/autoresponders/{autoresponder_id} | Update email autoresponder |
| [**updateEmailForwarders()**](EmailClientApi.md#updateEmailForwarders) | **PUT** /email-client/forwarders | Updates email account&#39;s forwarders |
| [**updateEmailPassword()**](EmailClientApi.md#updateEmailPassword) | **PUT** /email-client/password | Updates email account&#39;s password |


## `createEmailAutoresponder()`

```php
createEmailAutoresponder($authorization, $address, $password, $new_autoresponder): \Upmind\EnhanceSdk\Model\NewResourceId
```

Create new email autoresponder

Creates a new autoresponder for the given email. Client must send Authorization token, email address and its current password for authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\EmailClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$address = 'address_example'; // string
$password = 'password_example'; // string
$new_autoresponder = new \Upmind\EnhanceSdk\Model\NewAutoresponder(); // \Upmind\EnhanceSdk\Model\NewAutoresponder | Autoresponder details.

try {
    $result = $apiInstance->createEmailAutoresponder($authorization, $address, $password, $new_autoresponder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailClientApi->createEmailAutoresponder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**|  | |
| **address** | **string**|  | |
| **password** | **string**|  | |
| **new_autoresponder** | [**\Upmind\EnhanceSdk\Model\NewAutoresponder**](../Model/NewAutoresponder.md)| Autoresponder details. | |

### Return type

[**\Upmind\EnhanceSdk\Model\NewResourceId**](../Model/NewResourceId.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailAutoresponder()`

```php
deleteEmailAutoresponder($authorization, $address, $password, $autoresponder_id)
```

Delete email autoresponder

Deletes the autoresponder belonging to the given email account. Client must send Authorization token, email address and its current   password for authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\EmailClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$address = 'address_example'; // string
$password = 'password_example'; // string
$autoresponder_id = 56; // int | The id of the autoresponder.

try {
    $apiInstance->deleteEmailAutoresponder($authorization, $address, $password, $autoresponder_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailClientApi->deleteEmailAutoresponder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**|  | |
| **address** | **string**|  | |
| **password** | **string**|  | |
| **autoresponder_id** | **int**| The id of the autoresponder. | |

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

## `getEmailAutoresponders()`

```php
getEmailAutoresponders($authorization, $address, $password): \Upmind\EnhanceSdk\Model\AutorespondersFullListing
```

Get email account autoresponders

Returns autoresponders configured for the given email. Client must send Authorization token, email address and its current password for authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\EmailClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$address = 'address_example'; // string
$password = 'password_example'; // string

try {
    $result = $apiInstance->getEmailAutoresponders($authorization, $address, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailClientApi->getEmailAutoresponders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**|  | |
| **address** | **string**|  | |
| **password** | **string**|  | |

### Return type

[**\Upmind\EnhanceSdk\Model\AutorespondersFullListing**](../Model/AutorespondersFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailForwarders()`

```php
getEmailForwarders($authorization, $address, $password): \Upmind\EnhanceSdk\Model\ForwardersFullListing
```

Returns email account's forwarders

Returns forwarders list for the given email account. Client must send Authorization token, email address and its current password for authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\EmailClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$address = 'address_example'; // string
$password = 'password_example'; // string

try {
    $result = $apiInstance->getEmailForwarders($authorization, $address, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailClientApi->getEmailForwarders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**|  | |
| **address** | **string**|  | |
| **password** | **string**|  | |

### Return type

[**\Upmind\EnhanceSdk\Model\ForwardersFullListing**](../Model/ForwardersFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailPublicIp()`

```php
getEmailPublicIp($authorization, $address, $password): \Upmind\EnhanceSdk\Model\EmailPublicIp
```

Returns public Ip Address of the email server

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\EmailClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$address = 'address_example'; // string
$password = 'password_example'; // string

try {
    $result = $apiInstance->getEmailPublicIp($authorization, $address, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailClientApi->getEmailPublicIp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**|  | |
| **address** | **string**|  | |
| **password** | **string**|  | |

### Return type

[**\Upmind\EnhanceSdk\Model\EmailPublicIp**](../Model/EmailPublicIp.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailAutoresponder()`

```php
updateEmailAutoresponder($authorization, $address, $password, $autoresponder_id, $update_autoresponder)
```

Update email autoresponder

Updates the autoresponder belonging to the given email account. Client must send Authorization token, email address and its current password for authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\EmailClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$address = 'address_example'; // string
$password = 'password_example'; // string
$autoresponder_id = 56; // int | The id of the autoresponder.
$update_autoresponder = new \Upmind\EnhanceSdk\Model\UpdateAutoresponder(); // \Upmind\EnhanceSdk\Model\UpdateAutoresponder | Autoresponder update details.

try {
    $apiInstance->updateEmailAutoresponder($authorization, $address, $password, $autoresponder_id, $update_autoresponder);
} catch (Exception $e) {
    echo 'Exception when calling EmailClientApi->updateEmailAutoresponder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**|  | |
| **address** | **string**|  | |
| **password** | **string**|  | |
| **autoresponder_id** | **int**| The id of the autoresponder. | |
| **update_autoresponder** | [**\Upmind\EnhanceSdk\Model\UpdateAutoresponder**](../Model/UpdateAutoresponder.md)| Autoresponder update details. | |

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

## `updateEmailForwarders()`

```php
updateEmailForwarders($authorization, $address, $password, $email_forwarders_update)
```

Updates email account's forwarders

Accepts forwarders list in body. Client must send Authorization token, email address and its current password for authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\EmailClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$address = 'address_example'; // string
$password = 'password_example'; // string
$email_forwarders_update = new \Upmind\EnhanceSdk\Model\EmailForwardersUpdate(); // \Upmind\EnhanceSdk\Model\EmailForwardersUpdate

try {
    $apiInstance->updateEmailForwarders($authorization, $address, $password, $email_forwarders_update);
} catch (Exception $e) {
    echo 'Exception when calling EmailClientApi->updateEmailForwarders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**|  | |
| **address** | **string**|  | |
| **password** | **string**|  | |
| **email_forwarders_update** | [**\Upmind\EnhanceSdk\Model\EmailForwardersUpdate**](../Model/EmailForwardersUpdate.md)|  | |

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

## `updateEmailPassword()`

```php
updateEmailPassword($authorization, $address, $password, $email_password_update)
```

Updates email account's password

Accepts a new password in body. Client must send Authorization token, email address and its current password for authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\EmailClientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'authorization_example'; // string
$address = 'address_example'; // string
$password = 'password_example'; // string
$email_password_update = new \Upmind\EnhanceSdk\Model\EmailPasswordUpdate(); // \Upmind\EnhanceSdk\Model\EmailPasswordUpdate

try {
    $apiInstance->updateEmailPassword($authorization, $address, $password, $email_password_update);
} catch (Exception $e) {
    echo 'Exception when calling EmailClientApi->updateEmailPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**|  | |
| **address** | **string**|  | |
| **password** | **string**|  | |
| **email_password_update** | [**\Upmind\EnhanceSdk\Model\EmailPasswordUpdate**](../Model/EmailPasswordUpdate.md)|  | |

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
