# Upmind\EnhanceSdk\InvitesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptInvite()**](InvitesApi.md#acceptInvite) | **POST** /invites/{invite_id} | Accept invite |
| [**createInvite()**](InvitesApi.md#createInvite) | **POST** /orgs/{org_id}/invites | Create invite |
| [**validateInvite()**](InvitesApi.md#validateInvite) | **POST** /invites/{invite_id}/validate | Validate invite |


## `acceptInvite()`

```php
acceptInvite($invite_id, $accept_invite_body)
```

Accept invite

Accepts the invite. There are four cases that need to be handled: No login session is present, user is newly invited and does not yet have a password. The password submitted in the body is set on the new user and the login's member is marked as active within the organization. A session is created and set in the returned cookie. No login session is present but user already exists and has a password. The password submitted in the request body is used to validate the login and the login's member is marked as active within the organization. A session is created and set in the returned cookie. A login session is present for the user to whom the invite belongs. The user is marked active within the organisation to which it was invited. A login session is present for a login to whom the invite does not belong, resulting in an error.

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


$apiInstance = new Upmind\EnhanceSdk\Api\InvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invite_id = 'invite_id_example'; // string | The id of the invite.
$accept_invite_body = new \Upmind\EnhanceSdk\Model\AcceptInviteBody(); // \Upmind\EnhanceSdk\Model\AcceptInviteBody | Login credentials.

try {
    $apiInstance->acceptInvite($invite_id, $accept_invite_body);
} catch (Exception $e) {
    echo 'Exception when calling InvitesApi->acceptInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invite_id** | **string**| The id of the invite. | |
| **accept_invite_body** | [**\Upmind\EnhanceSdk\Model\AcceptInviteBody**](../Model/AcceptInviteBody.md)| Login credentials. | [optional] |

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

## `createInvite()`

```php
createInvite($org_id, $new_invite)
```

Create invite

Issues an invite for the user with the given email. The user may or may not have an account in the realm that the organization is in: If the user is not registered yet, a pending login entry is created for them along with a pending member entry, and the login is \"activated\" once the user accepts the invite. In this case they need to supply a password. If the user is already registered, their existing login is linked to a pending member entry that gets \"activated\" once the user accepts the invite. The sent out invite contains the following URL: http://{control_panel_domain}/invites/{invite_key}?email={user_email} Where control panel domain is the domain name of the reseller's or the MO's control panel, the invite key is randomly generated, and the user email is the email address to which the invite is sent (and can be used by the API consumer e.g. for display purposes). If the invite is issued for the same organization and email more than once, the invite email is simply sent out again, with a different invite token. The routine will fail if the login already has membership in the organization. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\InvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$new_invite = new \Upmind\EnhanceSdk\Model\NewInvite(); // \Upmind\EnhanceSdk\Model\NewInvite | Invite details.

try {
    $apiInstance->createInvite($org_id, $new_invite);
} catch (Exception $e) {
    echo 'Exception when calling InvitesApi->createInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **new_invite** | [**\Upmind\EnhanceSdk\Model\NewInvite**](../Model/NewInvite.md)| Invite details. | |

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

## `validateInvite()`

```php
validateInvite($invite_id): \Upmind\EnhanceSdk\Model\InviteValidation
```

Validate invite

Validates the invite. If successful, it returns the invite details: the organization's id and name, and the to-be-member's role. No session required.

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


$apiInstance = new Upmind\EnhanceSdk\Api\InvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invite_id = 'invite_id_example'; // string | The id of the invite.

try {
    $result = $apiInstance->validateInvite($invite_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitesApi->validateInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invite_id** | **string**| The id of the invite. | |

### Return type

[**\Upmind\EnhanceSdk\Model\InviteValidation**](../Model/InviteValidation.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [sessionCookie](../../README.md#sessionCookie)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
