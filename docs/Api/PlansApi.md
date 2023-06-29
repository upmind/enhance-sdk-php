# Upmind\EnhanceSdk\PlansApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPlan()**](PlansApi.md#createPlan) | **POST** /orgs/{org_id}/plans | Create plan |
| [**createPlanAllowances()**](PlansApi.md#createPlanAllowances) | **POST** /orgs/{org_id}/plans/{plan_id}/allowances | Create plan allowances |
| [**createPlanResources()**](PlansApi.md#createPlanResources) | **POST** /orgs/{org_id}/plans/{plan_id}/resources | Create plan resources |
| [**createPlanSelections()**](PlansApi.md#createPlanSelections) | **POST** /orgs/{org_id}/plans/{plan_id}/selections | Create plan selections |
| [**deletePlan()**](PlansApi.md#deletePlan) | **DELETE** /orgs/{org_id}/plans/{plan_id} | Delete plan |
| [**deletePlanAllowance()**](PlansApi.md#deletePlanAllowance) | **DELETE** /orgs/{org_id}/plans/{plan_id}/allowances/{name} | Delete plan allowance |
| [**getPlan()**](PlansApi.md#getPlan) | **GET** /orgs/{org_id}/plans/{plan_id} | Get plan |
| [**getPlans()**](PlansApi.md#getPlans) | **GET** /orgs/{org_id}/plans | Get plans |
| [**updatePlan()**](PlansApi.md#updatePlan) | **PATCH** /orgs/{org_id}/plans/{plan_id} | Update plan name |
| [**updatePlanAllowance()**](PlansApi.md#updatePlanAllowance) | **PUT** /orgs/{org_id}/plans/{plan_id}/allowances/{name} | Update plan allowance |
| [**updatePlanResource()**](PlansApi.md#updatePlanResource) | **PUT** /orgs/{org_id}/plans/{plan_id}/resources/{name} | Update plan resource |
| [**updatePlanSelection()**](PlansApi.md#updatePlanSelection) | **PUT** /orgs/{org_id}/plans/{plan_id}/selections/{name} | Update plan selection |


## `createPlan()`

```php
createPlan($org_id, $new_plan): \Upmind\EnhanceSdk\Model\NewResourceId
```

Create plan

Creates a new plan for organization. If the organization is a reseller and not the MO, the reseller must itself have a subscription to a reseller plan. It is verified that the reseller is not trying to create a plan offering more resources than the reseller has available through its reseller plan. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$new_plan = new \Upmind\EnhanceSdk\Model\NewPlan(); // \Upmind\EnhanceSdk\Model\NewPlan | New plan details

try {
    $result = $apiInstance->createPlan($org_id, $new_plan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->createPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **new_plan** | [**\Upmind\EnhanceSdk\Model\NewPlan**](../Model/NewPlan.md)| New plan details | |

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

## `createPlanAllowances()`

```php
createPlanAllowances($org_id, $plan_id, $allowance)
```

Create plan allowances

Creates new allowances for plan. If the organization is a reseller and not the MO, it is verified that the reseller is not trying to update a plan to offer allowances that the reseller doesn't have available in their reseller subscription. Session holder must be at least a `SuperAdmin` in this org or a parent org.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$plan_id = 56; // int | The id of the plan.
$allowance = array(new \Upmind\EnhanceSdk\Model\Allowance()); // \Upmind\EnhanceSdk\Model\Allowance[]

try {
    $apiInstance->createPlanAllowances($org_id, $plan_id, $allowance);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->createPlanAllowances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **plan_id** | **int**| The id of the plan. | |
| **allowance** | [**\Upmind\EnhanceSdk\Model\Allowance[]**](../Model/Allowance.md)|  | |

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

## `createPlanResources()`

```php
createPlanResources($org_id, $plan_id, $resource)
```

Create plan resources

Creates new resources for plan. If the organization is a reseller and not the MO, it is verified that the reseller is not trying to update a plan to offer more of resource than the reseller has available through its reseller subscription. Session holder must be at least a `SuperAdmin` in this org or a parent org.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$plan_id = 56; // int | The id of the plan.
$resource = array(new \Upmind\EnhanceSdk\Model\Resource()); // \Upmind\EnhanceSdk\Model\Resource[]

try {
    $apiInstance->createPlanResources($org_id, $plan_id, $resource);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->createPlanResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **plan_id** | **int**| The id of the plan. | |
| **resource** | [**\Upmind\EnhanceSdk\Model\Resource[]**](../Model/Resource.md)|  | |

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

## `createPlanSelections()`

```php
createPlanSelections($org_id, $plan_id, $selection)
```

Create plan selections

Creates new selections for plan. If the organization is a reseller and not the MO, it is verified that the reseller is not trying to update a plan to offer selections that the reseller doesn't have available in their reseller subscription. Session holder must be at least a `SuperAdmin` in this org or a parent org.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$plan_id = 56; // int | The id of the plan.
$selection = array(new \Upmind\EnhanceSdk\Model\Selection()); // \Upmind\EnhanceSdk\Model\Selection[]

try {
    $apiInstance->createPlanSelections($org_id, $plan_id, $selection);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->createPlanSelections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **plan_id** | **int**| The id of the plan. | |
| **selection** | [**\Upmind\EnhanceSdk\Model\Selection[]**](../Model/Selection.md)|  | |

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

## `deletePlan()`

```php
deletePlan($org_id, $plan_id)
```

Delete plan

Deletes a plan if no subscriptions exist to it. Session holder must be at least a `SuperAdmin` in this org or a parent org.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$plan_id = 56; // int | The id of the plan.

try {
    $apiInstance->deletePlan($org_id, $plan_id);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->deletePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **plan_id** | **int**| The id of the plan. | |

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

## `deletePlanAllowance()`

```php
deletePlanAllowance($org_id, $plan_id, $name)
```

Delete plan allowance

Deletes the plan allowance. Session holder must have admin privileges in this org or a parent. That is, to have Owner or SuperAdmin roles in the current org or a parent, or to have the Support role in a parent. org.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$plan_id = 56; // int | The id of the plan.
$name = 'name_example'; // string | The name of the allowance.

try {
    $apiInstance->deletePlanAllowance($org_id, $plan_id, $name);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->deletePlanAllowance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **plan_id** | **int**| The id of the plan. | |
| **name** | **string**| The name of the allowance. | |

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

## `getPlan()`

```php
getPlan($org_id, $plan_id): \Upmind\EnhanceSdk\Model\Plan
```

Get plan

Returns info on a single plan offered by this organization. Note that the endpoint does not require authentication as anyone should be able to view an organization's plans on offer so that the viewer may decide to subscribe to a plan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$plan_id = 56; // int | The id of the plan.

try {
    $result = $apiInstance->getPlan($org_id, $plan_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->getPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **plan_id** | **int**| The id of the plan. | |

### Return type

[**\Upmind\EnhanceSdk\Model\Plan**](../Model/Plan.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlans()`

```php
getPlans($org_id, $offset, $limit, $sort_by, $sort_order): \Upmind\EnhanceSdk\Model\PlansListing
```

Get plans

Returns the organization's plans, optionally filtered by query parameters. Note that the endpoint does not require authentication as anyone should be able to view an organization's plans on offer so that the viewer may decide to subscribe to a plan.

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


$apiInstance = new Upmind\EnhanceSdk\Api\PlansApi(
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
    $result = $apiInstance->getPlans($org_id, $offset, $limit, $sort_by, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->getPlans: ', $e->getMessage(), PHP_EOL;
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

[**\Upmind\EnhanceSdk\Model\PlansListing**](../Model/PlansListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlan()`

```php
updatePlan($org_id, $plan_id, $update_plan)
```

Update plan name

Updates a plan's name of plan type Session holder must be at least a `SuperAdmin` in this org or a parent org.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$plan_id = 56; // int | The id of the plan.
$update_plan = new \Upmind\EnhanceSdk\Model\UpdatePlan(); // \Upmind\EnhanceSdk\Model\UpdatePlan

try {
    $apiInstance->updatePlan($org_id, $plan_id, $update_plan);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->updatePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **plan_id** | **int**| The id of the plan. | |
| **update_plan** | [**\Upmind\EnhanceSdk\Model\UpdatePlan**](../Model/UpdatePlan.md)|  | |

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

## `updatePlanAllowance()`

```php
updatePlanAllowance($org_id, $plan_id, $name, $allowance)
```

Update plan allowance

Updates the plan allowance. If the organization is a reseller and not the MO, it is verified that the reseller is not trying to update a plan to offer more of allowance than the reseller has available through its reseller subscription. Session holder must be at least a `SuperAdmin` in this org or a parent org.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$plan_id = 56; // int | The id of the plan.
$name = 'name_example'; // string | The name of the allowance.
$allowance = new \Upmind\EnhanceSdk\Model\Allowance(); // \Upmind\EnhanceSdk\Model\Allowance

try {
    $apiInstance->updatePlanAllowance($org_id, $plan_id, $name, $allowance);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->updatePlanAllowance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **plan_id** | **int**| The id of the plan. | |
| **name** | **string**| The name of the allowance. | |
| **allowance** | [**\Upmind\EnhanceSdk\Model\Allowance**](../Model/Allowance.md)|  | |

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

## `updatePlanResource()`

```php
updatePlanResource($org_id, $plan_id, $name, $resource)
```

Update plan resource

Updates the plan resource. If the organization is a reseller and not the MO, it is verified that the reseller is not trying to update a plan to offer more of resource than the reseller has available through its reseller subscription. Session holder must be at least a `SuperAdmin` in this org or a parent org.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$plan_id = 56; // int | The id of the plan.
$name = 'name_example'; // string | The name of the resource.
$resource = new \Upmind\EnhanceSdk\Model\Resource(); // \Upmind\EnhanceSdk\Model\Resource

try {
    $apiInstance->updatePlanResource($org_id, $plan_id, $name, $resource);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->updatePlanResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **plan_id** | **int**| The id of the plan. | |
| **name** | **string**| The name of the resource. | |
| **resource** | [**\Upmind\EnhanceSdk\Model\Resource**](../Model/Resource.md)|  | |

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

## `updatePlanSelection()`

```php
updatePlanSelection($org_id, $plan_id, $name, $selection)
```

Update plan selection

Updates the plan selection. If the organization is a reseller and not the MO, it is verified that the reseller is not trying to update a plan to offer more of selection than the reseller has available through its reseller subscription. Session holder must be at least a `SuperAdmin` in this org or a parent org.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$plan_id = 56; // int | The id of the plan.
$name = 'name_example'; // string | The name of the selection.
$selection = new \Upmind\EnhanceSdk\Model\Selection(); // \Upmind\EnhanceSdk\Model\Selection

try {
    $apiInstance->updatePlanSelection($org_id, $plan_id, $name, $selection);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->updatePlanSelection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **plan_id** | **int**| The id of the plan. | |
| **name** | **string**| The name of the selection. | |
| **selection** | [**\Upmind\EnhanceSdk\Model\Selection**](../Model/Selection.md)|  | |

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
