# Upmind\EnhanceSdk\CustomersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomer()**](CustomersApi.md#createCustomer) | **POST** /orgs/{org_id}/customers | Create a customer organization |
| [**createCustomerSubscription()**](CustomersApi.md#createCustomerSubscription) | **POST** /orgs/{org_id}/customers/{customer_org_id}/subscriptions | Create a subscriptions for a customer |
| [**getCustomerSubscriptions()**](CustomersApi.md#getCustomerSubscriptions) | **GET** /orgs/{org_id}/customers/{customer_org_id}/subscriptions | Get customer subscriptions |
| [**getOrgCustomers()**](CustomersApi.md#getOrgCustomers) | **GET** /orgs/{org_id}/customers | Get organization customers |


## `createCustomer()`

```php
createCustomer($org_id, $new_customer): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Create a customer organization

Once customer is successfully created under parent organization (identified by org_id), the customer organization's id is returned. This operation can only be done by a logged in superadmin or owner of the organization or its parent organization(s).

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


$apiInstance = new Upmind\EnhanceSdk\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$new_customer = new \Upmind\EnhanceSdk\Model\NewCustomer(); // \Upmind\EnhanceSdk\Model\NewCustomer | Customer organization details.

try {
    $result = $apiInstance->createCustomer($org_id, $new_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **new_customer** | [**\Upmind\EnhanceSdk\Model\NewCustomer**](../Model/NewCustomer.md)| Customer organization details. | |

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


$apiInstance = new Upmind\EnhanceSdk\Api\CustomersApi(
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
    echo 'Exception when calling CustomersApi->createCustomerSubscription: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Upmind\EnhanceSdk\Api\CustomersApi(
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
    echo 'Exception when calling CustomersApi->getCustomerSubscriptions: ', $e->getMessage(), PHP_EOL;
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

## `getOrgCustomers()`

```php
getOrgCustomers($org_id, $offset, $limit, $sort_by, $sort_order, $recursive, $max_depth, $status, $plan_id): \Upmind\EnhanceSdk\Model\CustomersListing
```

Get organization customers

Returns the list of customers of a reseller organization. If the recursive flag is set, the customers of reseller customers are returned as well recursively, up to an optional max depth value. Note, for performance it is not checked whether org is a reseller. If it is not, an empty list is returned.

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


$apiInstance = new Upmind\EnhanceSdk\Api\CustomersApi(
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
$recursive = True; // bool | If set to true, the endpoint will return resources in some hierarchy recursively, that is, several or all levels of the hierarchy, depending on whether `maxDepth` is set. E.g. for customers this means direct and indirect customers are returned. For websites, this returns websites of all direct and indirect customers.
$max_depth = 56; // int | If recursive is set to true, this can be specified to limit the recursion depth. By default there is no recursion bound.
$status = 'status_example'; // string | Filters the customers list by its status.
$plan_id = 56; // int | Limit the result set to resources under subscriptions to the plan.

try {
    $result = $apiInstance->getOrgCustomers($org_id, $offset, $limit, $sort_by, $sort_order, $recursive, $max_depth, $status, $plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getOrgCustomers: ', $e->getMessage(), PHP_EOL;
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
| **recursive** | **bool**| If set to true, the endpoint will return resources in some hierarchy recursively, that is, several or all levels of the hierarchy, depending on whether &#x60;maxDepth&#x60; is set. E.g. for customers this means direct and indirect customers are returned. For websites, this returns websites of all direct and indirect customers. | [optional] |
| **max_depth** | **int**| If recursive is set to true, this can be specified to limit the recursion depth. By default there is no recursion bound. | [optional] |
| **status** | **string**| Filters the customers list by its status. | [optional] |
| **plan_id** | **int**| Limit the result set to resources under subscriptions to the plan. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\CustomersListing**](../Model/CustomersListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
