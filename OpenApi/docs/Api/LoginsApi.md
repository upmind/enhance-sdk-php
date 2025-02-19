# Upmind\EnhanceSdk\LoginsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createLogin()**](LoginsApi.md#createLogin) | **POST** /logins | Create a new login |
| [**createOtpSession()**](LoginsApi.md#createOtpSession) | **GET** /login/sessions/sso | Create a new session for login with a one-time-password |
| [**createSession()**](LoginsApi.md#createSession) | **POST** /login/sessions | Create a new session for login |
| [**deleteCurrentSession()**](LoginsApi.md#deleteCurrentSession) | **DELETE** /login/sessions/current | Delete current session |
| [**deleteLoginAvatar()**](LoginsApi.md#deleteLoginAvatar) | **DELETE** /login/avatar | Remove login avatar |
| [**deleteSession()**](LoginsApi.md#deleteSession) | **DELETE** /login/sessions/{session_id} | Delete current session |
| [**deleteSessions()**](LoginsApi.md#deleteSessions) | **DELETE** /login/sessions | Delete sessions |
| [**finishPasswordRecovery()**](LoginsApi.md#finishPasswordRecovery) | **POST** /login/password-recovery | Finish a password recovery |
| [**getCustomerLogins()**](LoginsApi.md#getCustomerLogins) | **GET** /v2/orgs/{org_id}/customers/logins | List customer logins for org |
| [**getLogin()**](LoginsApi.md#getLogin) | **GET** /login | Get login info |
| [**getLoginMemberships()**](LoginsApi.md#getLoginMemberships) | **GET** /login/memberships | Get login memberships |
| [**getLogins()**](LoginsApi.md#getLogins) | **GET** /logins | Query all logins |
| [**getOrgLogins()**](LoginsApi.md#getOrgLogins) | **GET** /orgs/{org_id}/logins | Query logins belonging to organization |
| [**getSessions()**](LoginsApi.md#getSessions) | **GET** /login/sessions | Get all login sessions |
| [**getUiPreferences()**](LoginsApi.md#getUiPreferences) | **GET** /logins/ui-preferences | Get UI prefereces for login |
| [**resendPin()**](LoginsApi.md#resendPin) | **POST** /login/2fa/resend-pin | Resends 2FA sign-in code. |
| [**setCustomerLoginPassword()**](LoginsApi.md#setCustomerLoginPassword) | **PUT** /v2/logins/{login_id}/password | Set password for login |
| [**setLoginAvatar()**](LoginsApi.md#setLoginAvatar) | **PUT** /login/avatar | Set login avatar |
| [**setUiPreferences()**](LoginsApi.md#setUiPreferences) | **POST** /logins/ui-preferences | Set new UI prefereces for login |
| [**startPasswordRecovery()**](LoginsApi.md#startPasswordRecovery) | **PUT** /login/password-recovery | Start a new password recovery for login |
| [**updateLoginInfo()**](LoginsApi.md#updateLoginInfo) | **PATCH** /login | Update login info |
| [**updateUiPreferences()**](LoginsApi.md#updateUiPreferences) | **PATCH** /logins/ui-preferences | Update UI prefereces for login |
| [**validatePasswordRecovery()**](LoginsApi.md#validatePasswordRecovery) | **POST** /login/password-recovery/validate | Validate a password recovery secret |
| [**verify2FA()**](LoginsApi.md#verify2FA) | **POST** /login/2fa | Verifies 2FA sign-in code. |


## `createLogin()`

```php
createLogin($org_id, $login_info): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Create a new login

Creates a login in the realm. The login will be created in the same realm that the organization is in. Session holder must have admin or support privileges in the given organization or any parent thereof.

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The mandatory organization id to denote in which realm to create the login in. The login will be created in the same realm that the organization is in.
$login_info = new \Upmind\EnhanceSdk\Model\LoginInfo(); // \Upmind\EnhanceSdk\Model\LoginInfo

try {
    $result = $apiInstance->createLogin($org_id, $login_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->createLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The mandatory organization id to denote in which realm to create the login in. The login will be created in the same realm that the organization is in. | |
| **login_info** | [**\Upmind\EnhanceSdk\Model\LoginInfo**](../Model/LoginInfo.md)|  | |

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

## `createOtpSession()`

```php
createOtpSession($otp): \Upmind\EnhanceSdk\Model\LoginMemberships
```

Create a new session for login with a one-time-password

Creates a new session for the login in a specific login realm, using a short lived one time password. This creates a session as well, with the difference that realmId is required and any 2FA will be bypassed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$otp = 'otp_example'; // string | Contains a short lived otp for direct login bypassing any 2FA.

try {
    $result = $apiInstance->createOtpSession($otp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->createOtpSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **otp** | **string**| Contains a short lived otp for direct login bypassing any 2FA. | |

### Return type

[**\Upmind\EnhanceSdk\Model\LoginMemberships**](../Model/LoginMemberships.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSession()`

```php
createSession($login_creds, $realm_id): \Upmind\EnhanceSdk\Model\LoginMemberships
```

Create a new session for login

Creates a new session for the login in a specific login realm. By default, the realm in which to look up a given login is dictated by the domain on which the request is made.  If it matches a mapped to a ControlPanel website belonging to an MO or a reseller then that MO or reseller is used as the relam from which to select the login.  If the login exists directly as a member of the chosen realm then that login will be selected in preference to any which exists within the realm itself. The realm derived from the control panel domain can be overridden with the realmId parameter to specify a particular reseller or the MO. The authentication result is a JWT session token and a list detailing the organizations in which login is a member. In case of 2FA, the authentication result is a JWT session token with empty body and 201 http status code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login_creds = new \Upmind\EnhanceSdk\Model\LoginCreds(); // \Upmind\EnhanceSdk\Model\LoginCreds | Login credentials.
$realm_id = 'realm_id_example'; // string | If set with the given realm's id (the parent id of an organization), then the login is authenticated in this realm. See the endpoint description for more info.

try {
    $result = $apiInstance->createSession($login_creds, $realm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->createSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login_creds** | [**\Upmind\EnhanceSdk\Model\LoginCreds**](../Model/LoginCreds.md)| Login credentials. | |
| **realm_id** | **string**| If set with the given realm&#39;s id (the parent id of an organization), then the login is authenticated in this realm. See the endpoint description for more info. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\LoginMemberships**](../Model/LoginMemberships.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCurrentSession()`

```php
deleteCurrentSession()
```

Delete current session

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteCurrentSession();
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->deleteCurrentSession: ', $e->getMessage(), PHP_EOL;
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

## `deleteLoginAvatar()`

```php
deleteLoginAvatar()
```

Remove login avatar

Deletes the user's avatar. The user is implicitly assumed to be the session holder, so no login id is supplied.

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteLoginAvatar();
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->deleteLoginAvatar: ', $e->getMessage(), PHP_EOL;
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

## `deleteSession()`

```php
deleteSession($session_id)
```

Delete current session

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | The id of the login session.

try {
    $apiInstance->deleteSession($session_id);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->deleteSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**| The id of the login session. | |

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

## `deleteSessions()`

```php
deleteSessions()
```

Delete sessions

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteSessions();
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->deleteSessions: ', $e->getMessage(), PHP_EOL;
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

## `finishPasswordRecovery()`

```php
finishPasswordRecovery($secret, $new_password)
```

Finish a password recovery

Finishes the password recovery for the recovery key. This operation only succeeds if the key hasn't expired. If it has, the user must initiate a new password recovery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$secret = 'secret_example'; // string | The secret key for the password recovery.
$new_password = new \Upmind\EnhanceSdk\Model\NewPassword(); // \Upmind\EnhanceSdk\Model\NewPassword | Login's new password.

try {
    $apiInstance->finishPasswordRecovery($secret, $new_password);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->finishPasswordRecovery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **secret** | **string**| The secret key for the password recovery. | |
| **new_password** | [**\Upmind\EnhanceSdk\Model\NewPassword**](../Model/NewPassword.md)| Login&#39;s new password. | |

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

## `getCustomerLogins()`

```php
getCustomerLogins($org_id, $offset, $limit, $sort_order, $sort_by): \Upmind\EnhanceSdk\Model\LoginsListing
```

List customer logins for org

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$offset = 56; // int | The offset from which to return items.
$limit = 56; // int | The maximum number of items to return.
$sort_order = 'sort_order_example'; // string | The direction in which to sort. Possible values are 'asc' and 'desc', defaulting to 'asc'.
$sort_by = 'sort_by_example'; // string | The field by which to sort.

try {
    $result = $apiInstance->getCustomerLogins($org_id, $offset, $limit, $sort_order, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->getCustomerLogins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **offset** | **int**| The offset from which to return items. | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **sort_order** | **string**| The direction in which to sort. Possible values are &#39;asc&#39; and &#39;desc&#39;, defaulting to &#39;asc&#39;. | [optional] |
| **sort_by** | **string**| The field by which to sort. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\LoginsListing**](../Model/LoginsListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLogin()`

```php
getLogin(): \Upmind\EnhanceSdk\Model\Login
```

Get login info

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLogin();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->getLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\Login**](../Model/Login.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoginMemberships()`

```php
getLoginMemberships(): \Upmind\EnhanceSdk\Model\LoginMemberships
```

Get login memberships

Returns a list of info about all organization's the login is a member of. The return value is the same as that of successful session creation.

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLoginMemberships();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->getLoginMemberships: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\LoginMemberships**](../Model/LoginMemberships.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLogins()`

```php
getLogins($realm_id, $offset, $limit, $sort_order, $sort_by): \Upmind\EnhanceSdk\Model\LoginsListing
```

Query all logins

Returns all logins registered in the control panel. Session holder must be an `Owner`, `SuperAdmin`, or `Sysadmin` in the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm_id = 'realm_id_example'; // string | The id of the realm to query. Realm ids map to org ids.
$offset = 56; // int | The offset from which to return items.
$limit = 56; // int | The maximum number of items to return.
$sort_order = 'sort_order_example'; // string | The direction in which to sort. Possible values are 'asc' and 'desc', defaulting to 'asc'.
$sort_by = 'sort_by_example'; // string | The field by which to sort.

try {
    $result = $apiInstance->getLogins($realm_id, $offset, $limit, $sort_order, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->getLogins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm_id** | **string**| The id of the realm to query. Realm ids map to org ids. | [optional] |
| **offset** | **int**| The offset from which to return items. | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **sort_order** | **string**| The direction in which to sort. Possible values are &#39;asc&#39; and &#39;desc&#39;, defaulting to &#39;asc&#39;. | [optional] |
| **sort_by** | **string**| The field by which to sort. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\LoginsListing**](../Model/LoginsListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrgLogins()`

```php
getOrgLogins($org_id, $offset, $limit, $sort_order, $sort_by): \Upmind\EnhanceSdk\Model\LoginsListing
```

Query logins belonging to organization

Returns all logins registered in given organization. Session holder must be an `Owner`, `SuperAdmin` or `Sysadmin` in the org or the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$offset = 56; // int | The offset from which to return items.
$limit = 56; // int | The maximum number of items to return.
$sort_order = 'sort_order_example'; // string | The direction in which to sort. Possible values are 'asc' and 'desc', defaulting to 'asc'.
$sort_by = 'sort_by_example'; // string | The field by which to sort.

try {
    $result = $apiInstance->getOrgLogins($org_id, $offset, $limit, $sort_order, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->getOrgLogins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **offset** | **int**| The offset from which to return items. | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **sort_order** | **string**| The direction in which to sort. Possible values are &#39;asc&#39; and &#39;desc&#39;, defaulting to &#39;asc&#39;. | [optional] |
| **sort_by** | **string**| The field by which to sort. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\LoginsListing**](../Model/LoginsListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSessions()`

```php
getSessions(): \Upmind\EnhanceSdk\Model\SessionsFullListing
```

Get all login sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSessions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->getSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\SessionsFullListing**](../Model/SessionsFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUiPreferences()`

```php
getUiPreferences(): \Upmind\EnhanceSdk\Model\UiPreferences
```

Get UI prefereces for login

The operation allows users to get UI prefereces.

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUiPreferences();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->getUiPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Upmind\EnhanceSdk\Model\UiPreferences**](../Model/UiPreferences.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendPin()`

```php
resendPin($resend_pin)
```

Resends 2FA sign-in code.

On success, standard session with a new pin returned, otherwise 401 Unauthorized is returned with an empty cookie and the session is removed. Note that 2FA can only be used with the session cookie.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resend_pin = new \Upmind\EnhanceSdk\Model\ResendPin(); // \Upmind\EnhanceSdk\Model\ResendPin | Verification details.

try {
    $apiInstance->resendPin($resend_pin);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->resendPin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resend_pin** | [**\Upmind\EnhanceSdk\Model\ResendPin**](../Model/ResendPin.md)| Verification details. | |

### Return type

void (empty response body)

### Authorization

[sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setCustomerLoginPassword()`

```php
setCustomerLoginPassword($login_id, $new_password)
```

Set password for login

This operation allows admins to reset the password for a login.

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login_id = 'login_id_example'; // string | The id of a login.
$new_password = new \Upmind\EnhanceSdk\Model\NewPassword(); // \Upmind\EnhanceSdk\Model\NewPassword | The new unhashed password to set for the login

try {
    $apiInstance->setCustomerLoginPassword($login_id, $new_password);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->setCustomerLoginPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login_id** | **string**| The id of a login. | |
| **new_password** | [**\Upmind\EnhanceSdk\Model\NewPassword**](../Model/NewPassword.md)| The new unhashed password to set for the login | |

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

## `setLoginAvatar()`

```php
setLoginAvatar($avatar)
```

Set login avatar

Sets the user's avatar, overwriting any previous one if one exists. The max allowed size is 200 KiB. The image format may be jpeg, png, and ico. The user is implicitly assumed to be the session holder, so no login id is supplied.

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$avatar = '/path/to/file.txt'; // \SplFileObject

try {
    $apiInstance->setLoginAvatar($avatar);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->setLoginAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **avatar** | **\SplFileObject****\SplFileObject**|  | [optional] |

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

## `setUiPreferences()`

```php
setUiPreferences($new_ui_preferences)
```

Set new UI prefereces for login

The operation allows users to set a new UI prefereces.

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_ui_preferences = new \Upmind\EnhanceSdk\Model\NewUiPreferences(); // \Upmind\EnhanceSdk\Model\NewUiPreferences

try {
    $apiInstance->setUiPreferences($new_ui_preferences);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->setUiPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_ui_preferences** | [**\Upmind\EnhanceSdk\Model\NewUiPreferences**](../Model/NewUiPreferences.md)|  | |

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

## `startPasswordRecovery()`

```php
startPasswordRecovery($email_address, $realm_id)
```

Start a new password recovery for login

Initiates a new password recovery for the given email address, or fails silently (returning a `200 Ok`) if no login corresponded to the email. Note that only logins who are registered may initiate a password recovery. Users who were invited by an org member and haven't finished their signup may not start a recovery.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email_address = new \Upmind\EnhanceSdk\Model\EmailAddress(); // \Upmind\EnhanceSdk\Model\EmailAddress | Login's email address.
$realm_id = 'realm_id_example'; // string | If set, the login is looked up in the specified realm. If unset then the chosen realm will be based on the control panel hostname.

try {
    $apiInstance->startPasswordRecovery($email_address, $realm_id);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->startPasswordRecovery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_address** | [**\Upmind\EnhanceSdk\Model\EmailAddress**](../Model/EmailAddress.md)| Login&#39;s email address. | |
| **realm_id** | **string**| If set, the login is looked up in the specified realm. If unset then the chosen realm will be based on the control panel hostname. | [optional] |

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

## `updateLoginInfo()`

```php
updateLoginInfo($update_login): \Upmind\EnhanceSdk\Model\UpdateLoginResult
```

Update login info

Updates some or all login information and credentials. Only the currently authenticated login may do this (thus there is no explicit login id in the input). If the email or password are to be updated, the current password must be provided. In order to disable MFA, a user has to validate the PIN code required by the enabled method. If users want to switch to a different MFA method, they need to disable MFA and enable the desired MFA method.

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_login = new \Upmind\EnhanceSdk\Model\UpdateLogin(); // \Upmind\EnhanceSdk\Model\UpdateLogin

try {
    $result = $apiInstance->updateLoginInfo($update_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->updateLoginInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_login** | [**\Upmind\EnhanceSdk\Model\UpdateLogin**](../Model/UpdateLogin.md)|  | |

### Return type

[**\Upmind\EnhanceSdk\Model\UpdateLoginResult**](../Model/UpdateLoginResult.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUiPreferences()`

```php
updateUiPreferences($update_ui_preferences)
```

Update UI prefereces for login

The operation allows users to update UI prefereces.

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


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_ui_preferences = new \Upmind\EnhanceSdk\Model\UpdateUiPreferences(); // \Upmind\EnhanceSdk\Model\UpdateUiPreferences

try {
    $apiInstance->updateUiPreferences($update_ui_preferences);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->updateUiPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_ui_preferences** | [**\Upmind\EnhanceSdk\Model\UpdateUiPreferences**](../Model/UpdateUiPreferences.md)|  | |

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

## `validatePasswordRecovery()`

```php
validatePasswordRecovery($secret): \Upmind\EnhanceSdk\Model\ValidatedPasswordRecovery
```

Validate a password recovery secret

Returns the obfuscated email address belonging to the user initiating the password recovery if the secret is correct and hasn't expired yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$secret = 'secret_example'; // string | The secret key for the password recovery.

try {
    $result = $apiInstance->validatePasswordRecovery($secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->validatePasswordRecovery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **secret** | **string**| The secret key for the password recovery. | |

### Return type

[**\Upmind\EnhanceSdk\Model\ValidatedPasswordRecovery**](../Model/ValidatedPasswordRecovery.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verify2FA()`

```php
verify2FA($login2_fa)
```

Verifies 2FA sign-in code.

On success, standard session with cookie is returned, otherwise 401 Unauthorized is returned with an empty cookie and the session is removed. Note that 2FA can only be used with the session cookie.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');


$apiInstance = new Upmind\EnhanceSdk\Api\LoginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$login2_fa = new \Upmind\EnhanceSdk\Model\Login2FA(); // \Upmind\EnhanceSdk\Model\Login2FA | Verification details.

try {
    $apiInstance->verify2FA($login2_fa);
} catch (Exception $e) {
    echo 'Exception when calling LoginsApi->verify2FA: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login2_fa** | [**\Upmind\EnhanceSdk\Model\Login2FA**](../Model/Login2FA.md)| Verification details. | |

### Return type

void (empty response body)

### Authorization

[sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
