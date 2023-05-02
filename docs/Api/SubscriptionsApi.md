# Upmind\EnhanceSdk\SubscriptionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**calculateResourceUsage()**](SubscriptionsApi.md#calculateResourceUsage) | **PUT** /orgs/{org_id}/subscriptions/{subscription_id}/calculate-resource-usage | Re-Calculates all subscription resources |
| [**createCustomerSubscription()**](SubscriptionsApi.md#createCustomerSubscription) | **POST** /orgs/{org_id}/customers/{customer_org_id}/subscriptions | Create a subscriptions for a customer |
| [**deleteSubscription()**](SubscriptionsApi.md#deleteSubscription) | **DELETE** /orgs/{org_id}/subscriptions/{subscription_id} | Delete subscription |
| [**getCustomerSubscriptions()**](SubscriptionsApi.md#getCustomerSubscriptions) | **GET** /orgs/{org_id}/customers/{customer_org_id}/subscriptions | Get customer subscriptions |
| [**getSubscription()**](SubscriptionsApi.md#getSubscription) | **GET** /orgs/{org_id}/subscriptions/{subscription_id} | Get subscription |
| [**getSubscriptionsToParent()**](SubscriptionsApi.md#getSubscriptionsToParent) | **GET** /orgs/{org_id}/subscriptions | Get subscriptions to parent |
| [**updateSubscription()**](SubscriptionsApi.md#updateSubscription) | **PATCH** /orgs/{org_id}/subscriptions/{subscription_id} | Update subscription |


## `calculateResourceUsage()`

```php
calculateResourceUsage($org_id, $subscription_id): \Upmind\EnhanceSdk\Model\UsedResourcesFullListing
```

Re-Calculates all subscription resources

Recursively Re-Calculates organization's subscription resources. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$subscription_id = 3.4; // float | The id of the subscription.

try {
    $result = $apiInstance->calculateResourceUsage($org_id, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->calculateResourceUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **subscription_id** | **float**| The id of the subscription. | |

### Return type

[**\Upmind\EnhanceSdk\Model\UsedResourcesFullListing**](../Model/UsedResourcesFullListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCustomerSubscription()`

```php
createCustomerSubscription($org_id, $customer_org_id, $new_subscription): \Upmind\EnhanceSdk\Model\NewResourceId
```

Create a subscriptions for a customer

Creates a subscription for customer to the org's plan. Only a reseller org or the MO may subscribe another org to one of its plans. If the organization is a reseller (and thus not the MO), it needs to have a suitable subscription to a reseller plan of its parent. It is verified that the reseller's reseller subscription has quota left to create the new subscription (because the new subscription draws from the reseller's reseller subscription). After this call, the sold resources are recorded in the reseller subscription by increasing each sold resource's usage by the sold amount. In combination with the quota check, this is how it is ensured that the reseller doesn't sell more resources than it has paid for. The MO may optionally override the package default servers or server group. All resources of this subscription will then be created on those servers. Otherwise the subscribed to plan's servers are used, or if those aren't defined either, the usual website placement rules are used every time a website is created under this subscription. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

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


$apiInstance = new Upmind\EnhanceSdk\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$customer_org_id = 'customer_org_id_example'; // string | The organization id of the organization's customer.
$new_subscription = new \Upmind\EnhanceSdk\Model\NewSubscription(); // \Upmind\EnhanceSdk\Model\NewSubscription | Subscription details.

try {
    $result = $apiInstance->createCustomerSubscription($org_id, $customer_org_id, $new_subscription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createCustomerSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **customer_org_id** | **string**| The organization id of the organization&#39;s customer. | |
| **new_subscription** | [**\Upmind\EnhanceSdk\Model\NewSubscription**](../Model/NewSubscription.md)| Subscription details. | |

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

## `deleteSubscription()`

```php
deleteSubscription($org_id, $subscription_id, $force)
```

Delete subscription

Soft or force deletes the subscription and its resources. All resources under the subscription (websites, customers in case of a reseller) will be deleted too. If the subscription is soft-deleted (or marked as deleted), its data is not removed.  For removing all data and metadata, pass the `force=true` query parameter. This can only be done by a privileged MO member. In this case, all data is wiped, so use carefully. If the `force` parameter is set, session holder must be an MO Owner, SuperAdmin, or Support member, otherwise it suffices for them to be such a member in a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$subscription_id = 3.4; // float | The id of the subscription.
$force = false; // bool

try {
    $apiInstance->deleteSubscription($org_id, $subscription_id, $force);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **subscription_id** | **float**| The id of the subscription. | |
| **force** | **bool**|  | [optional] [default to false] |

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

## `getCustomerSubscriptions()`

```php
getCustomerSubscriptions($org_id, $customer_org_id, $offset, $limit, $sort_by, $sort_order): \Upmind\EnhanceSdk\Model\SubscriptionsListing
```

Get customer subscriptions

Lists a customer's subscriptions to packages belonging to the selected organization.

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


$apiInstance = new Upmind\EnhanceSdk\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$customer_org_id = 'customer_org_id_example'; // string | The organization id of the organization's customer.
$offset = 56; // int | The offset from which to return items.
$limit = 56; // int | The maximum number of items to return.
$sort_by = 'sort_by_example'; // string | The field by which to sort.
$sort_order = 'sort_order_example'; // string | The direction in which to sort. Possible values are 'asc' and 'desc', defaulting to 'asc'.

try {
    $result = $apiInstance->getCustomerSubscriptions($org_id, $customer_org_id, $offset, $limit, $sort_by, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getCustomerSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **customer_org_id** | **string**| The organization id of the organization&#39;s customer. | |
| **offset** | **int**| The offset from which to return items. | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **sort_by** | **string**| The field by which to sort. | [optional] |
| **sort_order** | **string**| The direction in which to sort. Possible values are &#39;asc&#39; and &#39;desc&#39;, defaulting to &#39;asc&#39;. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\SubscriptionsListing**](../Model/SubscriptionsListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscription()`

```php
getSubscription($org_id, $subscription_id): \Upmind\EnhanceSdk\Model\Subscription
```

Get subscription

Queries the organization's subscription. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$subscription_id = 3.4; // float | The id of the subscription.

try {
    $result = $apiInstance->getSubscription($org_id, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **subscription_id** | **float**| The id of the subscription. | |

### Return type

[**\Upmind\EnhanceSdk\Model\Subscription**](../Model/Subscription.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionsToParent()`

```php
getSubscriptionsToParent($org_id, $offset, $limit, $sort_by, $sort_order): \Upmind\EnhanceSdk\Model\SubscriptionsListing
```

Get subscriptions to parent

Lists subscriptions to the packages of the parent organization to which the currently selected organization is subscribed.

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


$apiInstance = new Upmind\EnhanceSdk\Api\SubscriptionsApi(
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

try {
    $result = $apiInstance->getSubscriptionsToParent($org_id, $offset, $limit, $sort_by, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionsToParent: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Upmind\EnhanceSdk\Model\SubscriptionsListing**](../Model/SubscriptionsListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscription()`

```php
updateSubscription($org_id, $subscription_id, $update_subscription)
```

Update subscription

Updates the organization's subscription. This endpoint is used to update the subscription's status and suspension, by a parent organization admin.

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


$apiInstance = new Upmind\EnhanceSdk\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$subscription_id = 3.4; // float | The id of the subscription.
$update_subscription = new \Upmind\EnhanceSdk\Model\UpdateSubscription(); // \Upmind\EnhanceSdk\Model\UpdateSubscription

try {
    $apiInstance->updateSubscription($org_id, $subscription_id, $update_subscription);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **subscription_id** | **float**| The id of the subscription. | |
| **update_subscription** | [**\Upmind\EnhanceSdk\Model\UpdateSubscription**](../Model/UpdateSubscription.md)|  | |

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
