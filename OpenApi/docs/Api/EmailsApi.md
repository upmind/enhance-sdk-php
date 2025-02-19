# Upmind\EnhanceSdk\EmailsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebsiteEmail()**](EmailsApi.md#createWebsiteEmail) | **POST** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/emails | Create an email under website&#39;s domain |
| [**createWebsiteEmailAutoresponder()**](EmailsApi.md#createWebsiteEmailAutoresponder) | **POST** /orgs/{org_id}/websites/{website_id}/emails/{email_id}/autoresponder | Create new website email autoresponder |
| [**deleteWebsiteEmail()**](EmailsApi.md#deleteWebsiteEmail) | **DELETE** /orgs/{org_id}/websites/{website_id}/emails/{email_id} | Delete website email |
| [**deleteWebsiteEmailAutoresponder()**](EmailsApi.md#deleteWebsiteEmailAutoresponder) | **DELETE** /orgs/{org_id}/websites/{website_id}/emails/{email_id}/autoresponder | Delete website email autoresponder |
| [**getDomainEmailAuth()**](EmailsApi.md#getDomainEmailAuth) | **GET** /orgs/{org_id}/domains/{domain_id}/email-auth | Get email authentication preferences |
| [**getDomainLocalRemote()**](EmailsApi.md#getDomainLocalRemote) | **GET** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/local_remote | Get the current local/remote status |
| [**getEmailSpamThresholds()**](EmailsApi.md#getEmailSpamThresholds) | **GET** /emails/{email_id}/spam_thresholds | Get spam thresholds for an email address |
| [**getEmails()**](EmailsApi.md#getEmails) | **GET** /orgs/{org_id}/emails | Get org emails |
| [**getWebsiteEmail()**](EmailsApi.md#getWebsiteEmail) | **GET** /orgs/{org_id}/websites/{website_id}/emails/{email_id} | Get website email |
| [**getWebsiteEmailAutoresponder()**](EmailsApi.md#getWebsiteEmailAutoresponder) | **GET** /orgs/{org_id}/websites/{website_id}/emails/{email_id}/autoresponder | Get website email autoresponder |
| [**getWebsiteEmailClientConf()**](EmailsApi.md#getWebsiteEmailClientConf) | **GET** /orgs/{org_id}/websites/{website_id}/emails/{email_id}/client-conf | Get website email client configuration |
| [**getWebsiteEmails()**](EmailsApi.md#getWebsiteEmails) | **GET** /orgs/{org_id}/websites/{website_id}/emails | Get website emails |
| [**setDomainLocalRemote()**](EmailsApi.md#setDomainLocalRemote) | **PUT** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/local_remote | Update email local/remote status |
| [**setEmailSpamThresholds()**](EmailsApi.md#setEmailSpamThresholds) | **PUT** /emails/{email_id}/spam_thresholds | Set spam thresholds for an email address |
| [**updateDomainEmailAuth()**](EmailsApi.md#updateDomainEmailAuth) | **PUT** /orgs/{org_id}/domains/{domain_id}/email-auth | Update email authentication preferences |
| [**updateWebsiteEmail()**](EmailsApi.md#updateWebsiteEmail) | **PATCH** /orgs/{org_id}/websites/{website_id}/emails/{email_id} | Update website email |
| [**validateDomainEmailAuth()**](EmailsApi.md#validateDomainEmailAuth) | **GET** /orgs/{org_id}/domains/{domain_id}/email-auth/validate | Validate email authentication DNS records |


## `createWebsiteEmail()`

```php
createWebsiteEmail($org_id, $website_id, $domain_id, $new_email): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Create an email under website's domain

Creates a new email under the given website. The email may have a mailbox or it may be a forwarder, which means it merely serves to forward incoming emails to the specified email addresses. If a password is supplied, a mailbox is created. Otherwise, forwarders must be specified as an email must always have a delivery route. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$new_email = new \Upmind\EnhanceSdk\Model\NewEmail(); // \Upmind\EnhanceSdk\Model\NewEmail | New email details.

try {
    $result = $apiInstance->createWebsiteEmail($org_id, $website_id, $domain_id, $new_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->createWebsiteEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |
| **new_email** | [**\Upmind\EnhanceSdk\Model\NewEmail**](../Model/NewEmail.md)| New email details. | |

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

## `createWebsiteEmailAutoresponder()`

```php
createWebsiteEmailAutoresponder($org_id, $website_id, $email_id, $new_autoresponder): \Upmind\EnhanceSdk\Model\NewResourceId
```

Create new website email autoresponder

Creates a new autoresponder for the given email. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$email_id = 'email_id_example'; // string | The id of the email.
$new_autoresponder = new \Upmind\EnhanceSdk\Model\NewAutoresponder(); // \Upmind\EnhanceSdk\Model\NewAutoresponder | Autoresponder details.

try {
    $result = $apiInstance->createWebsiteEmailAutoresponder($org_id, $website_id, $email_id, $new_autoresponder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->createWebsiteEmailAutoresponder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **email_id** | **string**| The id of the email. | |
| **new_autoresponder** | [**\Upmind\EnhanceSdk\Model\NewAutoresponder**](../Model/NewAutoresponder.md)| Autoresponder details. | |

### Return type

[**\Upmind\EnhanceSdk\Model\NewResourceId**](../Model/NewResourceId.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebsiteEmail()`

```php
deleteWebsiteEmail($org_id, $website_id, $email_id)
```

Delete website email

Deletes the email belonging to the given website. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$email_id = 'email_id_example'; // string | The id of the email.

try {
    $apiInstance->deleteWebsiteEmail($org_id, $website_id, $email_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->deleteWebsiteEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **email_id** | **string**| The id of the email. | |

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

## `deleteWebsiteEmailAutoresponder()`

```php
deleteWebsiteEmailAutoresponder($org_id, $website_id, $email_id)
```

Delete website email autoresponder

Deletes the autoresponder belonging to the given website email. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$email_id = 'email_id_example'; // string | The id of the email.

try {
    $apiInstance->deleteWebsiteEmailAutoresponder($org_id, $website_id, $email_id);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->deleteWebsiteEmailAutoresponder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **email_id** | **string**| The id of the email. | |

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

## `getDomainEmailAuth()`

```php
getDomainEmailAuth($org_id, $domain_id): \Upmind\EnhanceSdk\Model\EmailAuth
```

Get email authentication preferences

Fetch DKIM setting for the mailboxes on a given domain.

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


$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$domain_id = 'domain_id_example'; // string | The id of the domain.

try {
    $result = $apiInstance->getDomainEmailAuth($org_id, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getDomainEmailAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **domain_id** | **string**| The id of the domain. | |

### Return type

[**\Upmind\EnhanceSdk\Model\EmailAuth**](../Model/EmailAuth.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainLocalRemote()`

```php
getDomainLocalRemote($org_id, $website_id, $domain_id): \Upmind\EnhanceSdk\Model\LocalRemoteBody
```

Get the current local/remote status

Fetches the current status of the domain, whether it is treated as local or remote by the MTA

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


$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.

try {
    $result = $apiInstance->getDomainLocalRemote($org_id, $website_id, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getDomainLocalRemote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |

### Return type

[**\Upmind\EnhanceSdk\Model\LocalRemoteBody**](../Model/LocalRemoteBody.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailSpamThresholds()`

```php
getEmailSpamThresholds($email_id): \Upmind\EnhanceSdk\Model\SpamThresholds
```

Get spam thresholds for an email address

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


$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | The id of the email.

try {
    $result = $apiInstance->getEmailSpamThresholds($email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailSpamThresholds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_id** | **string**| The id of the email. | |

### Return type

[**\Upmind\EnhanceSdk\Model\SpamThresholds**](../Model/SpamThresholds.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmails()`

```php
getEmails($org_id, $offset, $limit, $sort_by, $sort_order, $search, $recursive, $max_depth, $status, $domain_id, $plan_id, $subscription_id, $include_internal, $show_deleted): \Upmind\EnhanceSdk\Model\EmailsListing
```

Get org emails

Returns all emails belonging to this organization. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$offset = 56; // int | The offset from which to return items.
$limit = 56; // int | The maximum number of items to return.
$sort_by = 'sort_by_example'; // string | The field by which to sort.
$sort_order = 'sort_order_example'; // string | The direction in which to sort. Possible values are 'asc' and 'desc', defaulting to 'asc'.
$search = 'search_example'; // string | Limit the result set to the resources whose names, partially and case insensitively, match the specified search term. E.g. for websites, this is their domain or tag, for databases the database name, for emails the email address or mailbox name, etc. A website will also be returned if the search term exactly matches the website's uuid.
$recursive = True; // bool | If set to true, the endpoint will return resources in some hierarchy recursively, that is, several or all levels of the hierarchy, depending on whether `maxDepth` is set. E.g. for customers this means direct and indirect customers are returned. For websites, this returns websites of all direct and indirect customers.
$max_depth = 56; // int | If recursive is set to true, this can be specified to limit the recursion depth. By default there is no recursion bound.
$status = new \Upmind\EnhanceSdk\Model\\Upmind\EnhanceSdk\Model\WebsiteStatus(); // \Upmind\EnhanceSdk\Model\WebsiteStatus | Limit the result set to emails with the specified status. Only applicable if `recursive` is set to true.
$domain_id = 'domain_id_example'; // string | Limit the result set to emails under domain.
$plan_id = 56; // int | Limit the result set to resources under subscriptions to the plan.
$subscription_id = 56; // int | Limit the result set to resources under subscription.
$include_internal = false; // bool | Include internal emails in response
$show_deleted = True; // bool | Filters out deleted emails, which are otherwise returned in the result. Defaults to `showDeleted=true` if not set. Can only be set by MO, if set by others, a 403 is returned.

try {
    $result = $apiInstance->getEmails($org_id, $offset, $limit, $sort_by, $sort_order, $search, $recursive, $max_depth, $status, $domain_id, $plan_id, $subscription_id, $include_internal, $show_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmails: ', $e->getMessage(), PHP_EOL;
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
| **recursive** | **bool**| If set to true, the endpoint will return resources in some hierarchy recursively, that is, several or all levels of the hierarchy, depending on whether &#x60;maxDepth&#x60; is set. E.g. for customers this means direct and indirect customers are returned. For websites, this returns websites of all direct and indirect customers. | [optional] |
| **max_depth** | **int**| If recursive is set to true, this can be specified to limit the recursion depth. By default there is no recursion bound. | [optional] |
| **status** | [**\Upmind\EnhanceSdk\Model\WebsiteStatus**](../Model/.md)| Limit the result set to emails with the specified status. Only applicable if &#x60;recursive&#x60; is set to true. | [optional] |
| **domain_id** | **string**| Limit the result set to emails under domain. | [optional] |
| **plan_id** | **int**| Limit the result set to resources under subscriptions to the plan. | [optional] |
| **subscription_id** | **int**| Limit the result set to resources under subscription. | [optional] |
| **include_internal** | **bool**| Include internal emails in response | [optional] [default to false] |
| **show_deleted** | **bool**| Filters out deleted emails, which are otherwise returned in the result. Defaults to &#x60;showDeleted&#x3D;true&#x60; if not set. Can only be set by MO, if set by others, a 403 is returned. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\EmailsListing**](../Model/EmailsListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteEmail()`

```php
getWebsiteEmail($org_id, $website_id, $email_id): \Upmind\EnhanceSdk\Model\EmailDetailed
```

Get website email

Returns details about the given email belonging to the given website. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$email_id = 'email_id_example'; // string | The id of the email.

try {
    $result = $apiInstance->getWebsiteEmail($org_id, $website_id, $email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getWebsiteEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **email_id** | **string**| The id of the email. | |

### Return type

[**\Upmind\EnhanceSdk\Model\EmailDetailed**](../Model/EmailDetailed.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteEmailAutoresponder()`

```php
getWebsiteEmailAutoresponder($org_id, $website_id, $email_id): \Upmind\EnhanceSdk\Model\Autoresponder
```

Get website email autoresponder

Returns autoresponders configured for the given email. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$email_id = 'email_id_example'; // string | The id of the email.

try {
    $result = $apiInstance->getWebsiteEmailAutoresponder($org_id, $website_id, $email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getWebsiteEmailAutoresponder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **email_id** | **string**| The id of the email. | |

### Return type

[**\Upmind\EnhanceSdk\Model\Autoresponder**](../Model/Autoresponder.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteEmailClientConf()`

```php
getWebsiteEmailClientConf($org_id, $website_id, $email_id): object
```

Get website email client configuration

Returns the client configuration for the given email. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$email_id = 'email_id_example'; // string | The id of the email.

try {
    $result = $apiInstance->getWebsiteEmailClientConf($org_id, $website_id, $email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getWebsiteEmailClientConf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **email_id** | **string**| The id of the email. | |

### Return type

**object**

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteEmails()`

```php
getWebsiteEmails($org_id, $website_id, $offset, $limit, $sort_by, $sort_order, $search, $include_internal): \Upmind\EnhanceSdk\Model\EmailsListing
```

Get website emails

Returns all emails belonging to a website. The results may optionally be sorted and paginated. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$offset = 56; // int | The offset from which to return items.
$limit = 56; // int | The maximum number of items to return.
$sort_by = 'sort_by_example'; // string | The field by which to sort.
$sort_order = 'sort_order_example'; // string | The direction in which to sort. Possible values are 'asc' and 'desc', defaulting to 'asc'.
$search = 'search_example'; // string | Limit the result set to the resources whose names, partially and case insensitively, match the specified search term. E.g. for websites, this is their domain or tag, for databases the database name, for emails the email address or mailbox name, etc. A website will also be returned if the search term exactly matches the website's uuid.
$include_internal = false; // bool | Include internal emails in response

try {
    $result = $apiInstance->getWebsiteEmails($org_id, $website_id, $offset, $limit, $sort_by, $sort_order, $search, $include_internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getWebsiteEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **offset** | **int**| The offset from which to return items. | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **sort_by** | **string**| The field by which to sort. | [optional] |
| **sort_order** | **string**| The direction in which to sort. Possible values are &#39;asc&#39; and &#39;desc&#39;, defaulting to &#39;asc&#39;. | [optional] |
| **search** | **string**| Limit the result set to the resources whose names, partially and case insensitively, match the specified search term. E.g. for websites, this is their domain or tag, for databases the database name, for emails the email address or mailbox name, etc. A website will also be returned if the search term exactly matches the website&#39;s uuid. | [optional] |
| **include_internal** | **bool**| Include internal emails in response | [optional] [default to false] |

### Return type

[**\Upmind\EnhanceSdk\Model\EmailsListing**](../Model/EmailsListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setDomainLocalRemote()`

```php
setDomainLocalRemote($org_id, $website_id, $domain_id, $local_remote_body)
```

Update email local/remote status

Sets the MTA to treat this domain as either local or remote.

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


$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$local_remote_body = new \Upmind\EnhanceSdk\Model\LocalRemoteBody(); // \Upmind\EnhanceSdk\Model\LocalRemoteBody

try {
    $apiInstance->setDomainLocalRemote($org_id, $website_id, $domain_id, $local_remote_body);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->setDomainLocalRemote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |
| **local_remote_body** | [**\Upmind\EnhanceSdk\Model\LocalRemoteBody**](../Model/LocalRemoteBody.md)|  | |

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

## `setEmailSpamThresholds()`

```php
setEmailSpamThresholds($email_id, $spam_thresholds)
```

Set spam thresholds for an email address

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


$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email_id = 'email_id_example'; // string | The id of the email.
$spam_thresholds = new \Upmind\EnhanceSdk\Model\SpamThresholds(); // \Upmind\EnhanceSdk\Model\SpamThresholds | Spam thresholds.

try {
    $apiInstance->setEmailSpamThresholds($email_id, $spam_thresholds);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->setEmailSpamThresholds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email_id** | **string**| The id of the email. | |
| **spam_thresholds** | [**\Upmind\EnhanceSdk\Model\SpamThresholds**](../Model/SpamThresholds.md)| Spam thresholds. | |

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

## `updateDomainEmailAuth()`

```php
updateDomainEmailAuth($org_id, $domain_id, $email_auth_update)
```

Update email authentication preferences

Update DKIM setting for the mailboxes on a given domain.

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


$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$email_auth_update = new \Upmind\EnhanceSdk\Model\EmailAuthUpdate(); // \Upmind\EnhanceSdk\Model\EmailAuthUpdate | Email auth details.

try {
    $apiInstance->updateDomainEmailAuth($org_id, $domain_id, $email_auth_update);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateDomainEmailAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **domain_id** | **string**| The id of the domain. | |
| **email_auth_update** | [**\Upmind\EnhanceSdk\Model\EmailAuthUpdate**](../Model/EmailAuthUpdate.md)| Email auth details. | |

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

## `updateWebsiteEmail()`

```php
updateWebsiteEmail($org_id, $website_id, $email_id, $update_email)
```

Update website email

Updates the given email belonging to the given website. The email may have a mailbox or it may be a forwarder, which means it merely serves to forward incoming emails to the specified email addresses. If `hasMailbox` is set to false, the mailbox is deleted if it hadn't existed before, and vice versa. The email must either have a mailbox or forwarders an it must always have a delivery route. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$email_id = 'email_id_example'; // string | The id of the email.
$update_email = new \Upmind\EnhanceSdk\Model\UpdateEmail(); // \Upmind\EnhanceSdk\Model\UpdateEmail | Email update details.

try {
    $apiInstance->updateWebsiteEmail($org_id, $website_id, $email_id, $update_email);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateWebsiteEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **email_id** | **string**| The id of the email. | |
| **update_email** | [**\Upmind\EnhanceSdk\Model\UpdateEmail**](../Model/UpdateEmail.md)| Email update details. | |

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

## `validateDomainEmailAuth()`

```php
validateDomainEmailAuth($org_id, $domain_id): \Upmind\EnhanceSdk\Model\EmailAuthValidation
```

Validate email authentication DNS records

Validate DKIM and SPF.

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


$apiInstance = new Upmind\EnhanceSdk\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$domain_id = 'domain_id_example'; // string | The id of the domain.

try {
    $result = $apiInstance->validateDomainEmailAuth($org_id, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->validateDomainEmailAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **domain_id** | **string**| The id of the domain. | |

### Return type

[**\Upmind\EnhanceSdk\Model\EmailAuthValidation**](../Model/EmailAuthValidation.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
