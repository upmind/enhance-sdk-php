# Upmind\EnhanceSdk\OrgsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAccessToken()**](OrgsApi.md#createAccessToken) | **POST** /orgs/{org_id}/access_tokens | Create organisation access token |
| [**createCloudflareApiKey()**](OrgsApi.md#createCloudflareApiKey) | **POST** /orgs/{org_id}/cloudflare | Set CloudFlare API key, org level |
| [**createCustomer()**](OrgsApi.md#createCustomer) | **POST** /orgs/{org_id}/customers | Create a customer organization |
| [**createMember()**](OrgsApi.md#createMember) | **POST** /orgs/{org_id}/members | Create organization member |
| [**createPlan()**](OrgsApi.md#createPlan) | **POST** /orgs/{org_id}/plans | Create plan |
| [**createPlanAllowances()**](OrgsApi.md#createPlanAllowances) | **POST** /orgs/{org_id}/plans/{plan_id}/allowances | Create plan allowances |
| [**createPlanResources()**](OrgsApi.md#createPlanResources) | **POST** /orgs/{org_id}/plans/{plan_id}/resources | Create plan resources |
| [**createPlanSelections()**](OrgsApi.md#createPlanSelections) | **POST** /orgs/{org_id}/plans/{plan_id}/selections | Create plan selections |
| [**createTag()**](OrgsApi.md#createTag) | **POST** /orgs/{org_id}/tags | Create tag |
| [**createWebsiteDomainLetsencryptCerts()**](OrgsApi.md#createWebsiteDomainLetsencryptCerts) | **POST** /orgs/{org_id}/websites/{website_id}/domains/{domain_id}/letsencrypt | Generate and setup letsencrypt ssl certificates for website&#39;s domain |
| [**deleteCloudflareApiKey()**](OrgsApi.md#deleteCloudflareApiKey) | **DELETE** /orgs/{org_id}/cloudflare/{cloudflare_key} | Delete CloudFlare API key, org level |
| [**deleteMember()**](OrgsApi.md#deleteMember) | **DELETE** /orgs/{org_id}/members/{member_id} | Delete organization member |
| [**deleteOrg()**](OrgsApi.md#deleteOrg) | **DELETE** /orgs/{org_id} | Delete organization |
| [**deleteOrgAvatar()**](OrgsApi.md#deleteOrgAvatar) | **DELETE** /orgs/{org_id}/avatar | Remove org avatar |
| [**deleteOwner()**](OrgsApi.md#deleteOwner) | **DELETE** /orgs/{org_id}/owner | Delete organization owner |
| [**deletePlan()**](OrgsApi.md#deletePlan) | **DELETE** /orgs/{org_id}/plans/{plan_id} | Delete plan |
| [**deletePlanAllowance()**](OrgsApi.md#deletePlanAllowance) | **DELETE** /orgs/{org_id}/plans/{plan_id}/allowances/{name} | Delete plan allowance |
| [**deleteWebsiteMySQLUserAccessHosts()**](OrgsApi.md#deleteWebsiteMySQLUserAccessHosts) | **DELETE** /orgs/{org_id}/websites/{website_id}/mysql-users/{user_id}/access-hosts | Delete website MySQL database user access hosts |
| [**deleteWebsiteSslCert()**](OrgsApi.md#deleteWebsiteSslCert) | **DELETE** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id} | Deletes given ssl certificate |
| [**enableWebsiteSslCert()**](OrgsApi.md#enableWebsiteSslCert) | **PUT** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id}/domains/{domain_id} | Enables already stored certificate for a given domain |
| [**getCloudFlareKeyAffectedDomains()**](OrgsApi.md#getCloudFlareKeyAffectedDomains) | **GET** /orgs/{org_id}/cloudflare/{cloudflare_key} | Get affected domains for a CloudFlare key |
| [**getCloudflareApiKeys()**](OrgsApi.md#getCloudflareApiKeys) | **GET** /orgs/{org_id}/cloudflare | Get CloudFlare API keys, org level |
| [**getCustomersAdded()**](OrgsApi.md#getCustomersAdded) | **GET** /orgs/{org_id}/stats/customers/added | Get customers added over a given time period |
| [**getEmails()**](OrgsApi.md#getEmails) | **GET** /orgs/{org_id}/emails | Get org emails |
| [**getMember()**](OrgsApi.md#getMember) | **GET** /orgs/{org_id}/members/{member_id} | Get organization member |
| [**getMembers()**](OrgsApi.md#getMembers) | **GET** /orgs/{org_id}/members | Get organization members |
| [**getOrg()**](OrgsApi.md#getOrg) | **GET** /orgs/{org_id} | Get organization info |
| [**getOrgMemberLogin()**](OrgsApi.md#getOrgMemberLogin) | **GET** /orgs/{org_id}/members/{member_id}/sso | Get a One-Time-Password link for the member |
| [**getPlan()**](OrgsApi.md#getPlan) | **GET** /orgs/{org_id}/plans/{plan_id} | Get plan |
| [**getPlans()**](OrgsApi.md#getPlans) | **GET** /orgs/{org_id}/plans | Get plans |
| [**getTags()**](OrgsApi.md#getTags) | **GET** /orgs/{org_id}/tags | Get tags |
| [**getWebsiteSslCert()**](OrgsApi.md#getWebsiteSslCert) | **GET** /orgs/{org_id}/websites/{website_id}/ssl/{cert_id} | Fetches a single SSL cert |
| [**getWebsiteSslCerts()**](OrgsApi.md#getWebsiteSslCerts) | **GET** /orgs/{org_id}/websites/{website_id}/ssl | Returns all certificates data with domain mappings for a given website |
| [**getWebsitesAdded()**](OrgsApi.md#getWebsitesAdded) | **GET** /orgs/{org_id}/stats/websites/added | Get websites added over a given time period |
| [**setOrgAvatar()**](OrgsApi.md#setOrgAvatar) | **PUT** /orgs/{org_id}/avatar | Set org avatar |
| [**updateCloudflareApiKey()**](OrgsApi.md#updateCloudflareApiKey) | **PUT** /orgs/{org_id}/cloudflare/{cloudflare_key} | Update CloudFlare API key |
| [**updateMember()**](OrgsApi.md#updateMember) | **PUT** /orgs/{org_id}/members/{member_id} | Overwrite organization member settings |
| [**updateOrg()**](OrgsApi.md#updateOrg) | **PATCH** /orgs/{org_id} | Update organization |
| [**updateOwner()**](OrgsApi.md#updateOwner) | **PUT** /orgs/{org_id}/owner | Update organization owner |
| [**updatePlan()**](OrgsApi.md#updatePlan) | **PATCH** /orgs/{org_id}/plans/{plan_id} | Update plan name |
| [**updatePlanAllowance()**](OrgsApi.md#updatePlanAllowance) | **PUT** /orgs/{org_id}/plans/{plan_id}/allowances/{name} | Update plan allowance |
| [**updatePlanResource()**](OrgsApi.md#updatePlanResource) | **PUT** /orgs/{org_id}/plans/{plan_id}/resources/{name} | Update plan resource |
| [**updatePlanSelection()**](OrgsApi.md#updatePlanSelection) | **PUT** /orgs/{org_id}/plans/{plan_id}/selections/{name} | Update plan selection |
| [**uploadWebsiteSslCerts()**](OrgsApi.md#uploadWebsiteSslCerts) | **POST** /orgs/{org_id}/websites/{website_id}/ssl | Upload custom ssl certificate, key and optional fullchain for a given website |


## `createAccessToken()`

```php
createAccessToken($org_id, $new_access_token): \Upmind\EnhanceSdk\Model\NewAccessTokenResponse
```

Create organisation access token

Create an access token with rights within an organisation.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$new_access_token = new \Upmind\EnhanceSdk\Model\NewAccessToken(); // \Upmind\EnhanceSdk\Model\NewAccessToken | Access token details

try {
    $result = $apiInstance->createAccessToken($org_id, $new_access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->createAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **new_access_token** | [**\Upmind\EnhanceSdk\Model\NewAccessToken**](../Model/NewAccessToken.md)| Access token details | |

### Return type

[**\Upmind\EnhanceSdk\Model\NewAccessTokenResponse**](../Model/NewAccessTokenResponse.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCloudflareApiKey()`

```php
createCloudflareApiKey($org_id, $new_cloud_flare_token): string
```

Set CloudFlare API key, org level

Adds a CloudFlare API key for an org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$new_cloud_flare_token = new \Upmind\EnhanceSdk\Model\NewCloudFlareToken(); // \Upmind\EnhanceSdk\Model\NewCloudFlareToken | Key in plain text.

try {
    $result = $apiInstance->createCloudflareApiKey($org_id, $new_cloud_flare_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->createCloudflareApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **new_cloud_flare_token** | [**\Upmind\EnhanceSdk\Model\NewCloudFlareToken**](../Model/NewCloudFlareToken.md)| Key in plain text. | |

### Return type

**string**

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
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
    echo 'Exception when calling OrgsApi->createCustomer: ', $e->getMessage(), PHP_EOL;
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

## `createMember()`

```php
createMember($org_id, $new_member): \Upmind\EnhanceSdk\Model\NewResourceUuid
```

Create organization member

A login for the member needs to exist before establishing membership. On success, the member id is returned. This operation can only be done by a logged in superadmin or owner of the organization or its parent organization(s).

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$new_member = new \Upmind\EnhanceSdk\Model\NewMember(); // \Upmind\EnhanceSdk\Model\NewMember | New member details

try {
    $result = $apiInstance->createMember($org_id, $new_member);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->createMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **new_member** | [**\Upmind\EnhanceSdk\Model\NewMember**](../Model/NewMember.md)| New member details | |

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
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
    echo 'Exception when calling OrgsApi->createPlan: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
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
    echo 'Exception when calling OrgsApi->createPlanAllowances: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
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
    echo 'Exception when calling OrgsApi->createPlanResources: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
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
    echo 'Exception when calling OrgsApi->createPlanSelections: ', $e->getMessage(), PHP_EOL;
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

## `createTag()`

```php
createTag($org_id, $new_tag): \Upmind\EnhanceSdk\Model\NewResourceId
```

Create tag

Creates a new tag for the organization. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$new_tag = new \Upmind\EnhanceSdk\Model\NewTag(); // \Upmind\EnhanceSdk\Model\NewTag | New tag details

try {
    $result = $apiInstance->createTag($org_id, $new_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->createTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **new_tag** | [**\Upmind\EnhanceSdk\Model\NewTag**](../Model/NewTag.md)| New tag details | |

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

## `createWebsiteDomainLetsencryptCerts()`

```php
createWebsiteDomainLetsencryptCerts($org_id, $website_id, $domain_id, $dry_run, $enable)
```

Generate and setup letsencrypt ssl certificates for website's domain

Generates letsencrypt certificates for the domain. This is a longer running task, that will do a complete ssl setup for a given domain. Once completed any given domain will get served over `https`. Given domain must be publicly accessible and being served from our service. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$dry_run = True; // bool | If not set or `dry_run=true` it will only verify domain ownership and get dummy certificates. To enable SSL on domain set `?dry_run=false`.
$enable = True; // bool | Defaults to `enable=true` if not set. To only generate and save certificate in db set `enable=false`. It has no bearing if `dry_run=false` not set.

try {
    $apiInstance->createWebsiteDomainLetsencryptCerts($org_id, $website_id, $domain_id, $dry_run, $enable);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->createWebsiteDomainLetsencryptCerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **domain_id** | **string**| The id of the domain. | |
| **dry_run** | **bool**| If not set or &#x60;dry_run&#x3D;true&#x60; it will only verify domain ownership and get dummy certificates. To enable SSL on domain set &#x60;?dry_run&#x3D;false&#x60;. | [optional] |
| **enable** | **bool**| Defaults to &#x60;enable&#x3D;true&#x60; if not set. To only generate and save certificate in db set &#x60;enable&#x3D;false&#x60;. It has no bearing if &#x60;dry_run&#x3D;false&#x60; not set. | [optional] |

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

## `deleteCloudflareApiKey()`

```php
deleteCloudflareApiKey($org_id, $cloudflare_key)
```

Delete CloudFlare API key, org level

Delete a CloudFlare API key for an org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$cloudflare_key = 'cloudflare_key_example'; // string | The id of a CloudFlare key to be acted upon.

try {
    $apiInstance->deleteCloudflareApiKey($org_id, $cloudflare_key);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->deleteCloudflareApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **cloudflare_key** | **string**| The id of a CloudFlare key to be acted upon. | |

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

## `deleteMember()`

```php
deleteMember($org_id, $member_id)
```

Delete organization member

This operation can only be done by a logged in superadmin or owner of the organization or its parent organization(s).

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$member_id = 'member_id_example'; // string | The id of the member.

try {
    $apiInstance->deleteMember($org_id, $member_id);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->deleteMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **member_id** | **string**| The id of the member. | |

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

## `deleteOrg()`

```php
deleteOrg($org_id, $force)
```

Delete organization

Soft or force deletes the organization and its resources. All resources under the organization (websites, customers in case of a reseller) will be deleted too. If the organization is soft-deleted (or marked as deleted), its data is not removed.  For removing all data and metadata, pass the `force=true` query parameter. This can only be done by a privileged MO member. In this case, all data is wiped, so use carefully. If the `force` parameter is set, session holder must be an MO Owner, SuperAdmin, or Support member, otherwise it suffices for them to be such a member in a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$force = false; // bool

try {
    $apiInstance->deleteOrg($org_id, $force);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->deleteOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
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

## `deleteOrgAvatar()`

```php
deleteOrgAvatar($org_id)
```

Remove org avatar

Deletes the org's avatar. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.

try {
    $apiInstance->deleteOrgAvatar($org_id);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->deleteOrgAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |

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


// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.

try {
    $apiInstance->deleteOwner($org_id);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->deleteOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |

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



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$plan_id = 56; // int | The id of the plan.

try {
    $apiInstance->deletePlan($org_id, $plan_id);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->deletePlan: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
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
    echo 'Exception when calling OrgsApi->deletePlanAllowance: ', $e->getMessage(), PHP_EOL;
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

## `deleteWebsiteMySQLUserAccessHosts()`

```php
deleteWebsiteMySQLUserAccessHosts($org_id, $website_id, $db_id, $user_id, $my_sql_user_access_hosts)
```

Delete website MySQL database user access hosts

Removes from the given user access hosts to website's MySQL database. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$db_id = 'db_id_example'; // string | The id of the database.
$user_id = 'user_id_example'; // string | The id of the database user.
$my_sql_user_access_hosts = new \Upmind\EnhanceSdk\Model\MySQLUserAccessHosts(); // \Upmind\EnhanceSdk\Model\MySQLUserAccessHosts | User access hosts.

try {
    $apiInstance->deleteWebsiteMySQLUserAccessHosts($org_id, $website_id, $db_id, $user_id, $my_sql_user_access_hosts);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->deleteWebsiteMySQLUserAccessHosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **db_id** | **string**| The id of the database. | |
| **user_id** | **string**| The id of the database user. | |
| **my_sql_user_access_hosts** | [**\Upmind\EnhanceSdk\Model\MySQLUserAccessHosts**](../Model/MySQLUserAccessHosts.md)| User access hosts. | |

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

## `deleteWebsiteSslCert()`

```php
deleteWebsiteSslCert($org_id, $website_id, $cert_id)
```

Deletes given ssl certificate

Endpoint for deleting SSl certificate for a given website User can only delete a certificate if it is not enabled for any domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$cert_id = 'cert_id_example'; // string | The id of the ssl certificate.

try {
    $apiInstance->deleteWebsiteSslCert($org_id, $website_id, $cert_id);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->deleteWebsiteSslCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **cert_id** | **string**| The id of the ssl certificate. | |

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

## `enableWebsiteSslCert()`

```php
enableWebsiteSslCert($org_id, $website_id, $cert_id, $domain_id, $force_ssl)
```

Enables already stored certificate for a given domain

Endpoint for applying SSl certificates for a given website's domain. Sets or updates the exiting cert mapping for the given domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$cert_id = 'cert_id_example'; // string | The id of the ssl certificate.
$domain_id = 'domain_id_example'; // string | The id of the domain.
$force_ssl = True; // bool | Forced redirect to SSL for the given domain

try {
    $apiInstance->enableWebsiteSslCert($org_id, $website_id, $cert_id, $domain_id, $force_ssl);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->enableWebsiteSslCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **cert_id** | **string**| The id of the ssl certificate. | |
| **domain_id** | **string**| The id of the domain. | |
| **force_ssl** | **bool**| Forced redirect to SSL for the given domain | [optional] |

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

## `getCloudFlareKeyAffectedDomains()`

```php
getCloudFlareKeyAffectedDomains($org_id, $cloudflare_key): string[]
```

Get affected domains for a CloudFlare key

Get affected domains for an organisation's CloudFlare key

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$cloudflare_key = 'cloudflare_key_example'; // string | The id of a CloudFlare key to be acted upon.

try {
    $result = $apiInstance->getCloudFlareKeyAffectedDomains($org_id, $cloudflare_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getCloudFlareKeyAffectedDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **cloudflare_key** | **string**| The id of a CloudFlare key to be acted upon. | |

### Return type

**string[]**

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCloudflareApiKeys()`

```php
getCloudflareApiKeys($org_id): \Upmind\EnhanceSdk\Model\CloudFlareApiKey[]
```

Get CloudFlare API keys, org level

Returns the CloudFlare API keys for an org (obfuscated for security).

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.

try {
    $result = $apiInstance->getCloudflareApiKeys($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getCloudflareApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |

### Return type

[**\Upmind\EnhanceSdk\Model\CloudFlareApiKey[]**](../Model/CloudFlareApiKey.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomersAdded()`

```php
getCustomersAdded($org_id, $time_interval): \Upmind\EnhanceSdk\Model\ResourceCountByInterval[]
```

Get customers added over a given time period

Returns the number of customers added over a given time period. Includes only direct customers, not customers of customers.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$time_interval = 'time_interval_example'; // string

try {
    $result = $apiInstance->getCustomersAdded($org_id, $time_interval);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getCustomersAdded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **time_interval** | **string**|  | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\ResourceCountByInterval[]**](../Model/ResourceCountByInterval.md)

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
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
$status = new \Upmind\EnhanceSdk\Model\WebsiteStatus(); // WebsiteStatus | Limit the result set to emails with the specified status. Only applicable if `recursive` is set to true.
$domain_id = 'domain_id_example'; // string | Limit the result set to emails under domain.
$plan_id = 56; // int | Limit the result set to resources under subscriptions to the plan.
$subscription_id = 56; // int | Limit the result set to resources under subscription.
$include_internal = false; // bool | Include internal emails in response
$show_deleted = True; // bool | Filters out deleted emails, which are otherwise returned in the result. Defaults to `showDeleted=true` if not set. Can only be set by MO, if set by others, a 403 is returned.

try {
    $result = $apiInstance->getEmails($org_id, $offset, $limit, $sort_by, $sort_order, $search, $recursive, $max_depth, $status, $domain_id, $plan_id, $subscription_id, $include_internal, $show_deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getEmails: ', $e->getMessage(), PHP_EOL;
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
| **status** | [**WebsiteStatus**](../Model/.md)| Limit the result set to emails with the specified status. Only applicable if &#x60;recursive&#x60; is set to true. | [optional] |
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

## `getMember()`

```php
getMember($org_id, $member_id): \Upmind\EnhanceSdk\Model\Member
```

Get organization member

Returns details about this organization member. This operation can only be done by the member itself, a logged in superadmin or owner of the organization or its parent organization(s).

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$member_id = 'member_id_example'; // string | The id of the member.

try {
    $result = $apiInstance->getMember($org_id, $member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **member_id** | **string**| The id of the member. | |

### Return type

[**\Upmind\EnhanceSdk\Model\Member**](../Model/Member.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMembers()`

```php
getMembers($org_id, $offset, $limit, $sort_by, $sort_order, $search, $role, $site_access): \Upmind\EnhanceSdk\Model\MembersListing
```

Get organization members

Returns all (both pending and full) members of the organization. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
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
$role = new \Upmind\EnhanceSdk\Model\Role(); // Role | Return only members with this role.
$site_access = 'site_access_example'; // string | Return only collaborator members that have access to this website. Note that super admins and owners are not returned because they implicitly have access.

try {
    $result = $apiInstance->getMembers($org_id, $offset, $limit, $sort_by, $sort_order, $search, $role, $site_access);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getMembers: ', $e->getMessage(), PHP_EOL;
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
| **role** | [**Role**](../Model/.md)| Return only members with this role. | [optional] |
| **site_access** | **string**| Return only collaborator members that have access to this website. Note that super admins and owners are not returned because they implicitly have access. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\MembersListing**](../Model/MembersListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrg()`

```php
getOrg($org_id): \Upmind\EnhanceSdk\Model\Org
```

Get organization info

Returns basic organization information. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.

try {
    $result = $apiInstance->getOrg($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |

### Return type

[**\Upmind\EnhanceSdk\Model\Org**](../Model/Org.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrgMemberLogin()`

```php
getOrgMemberLogin($org_id, $member_id): string
```

Get a One-Time-Password link for the member

Returns a short lived one time password link for direct log-ins via the users realm. Session holder must be an `Owner`, `SuperAdmin` or `Sysadmin` in the org or the MO.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$member_id = 'member_id_example'; // string | The id of the member.

try {
    $result = $apiInstance->getOrgMemberLogin($org_id, $member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getOrgMemberLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **member_id** | **string**| The id of the member. | |

### Return type

**string**

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

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



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
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
    echo 'Exception when calling OrgsApi->getPlan: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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
    echo 'Exception when calling OrgsApi->getPlans: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTags()`

```php
getTags($org_id): \Upmind\EnhanceSdk\Model\TagsFullListing
```

Get tags

Returns all tags belonging to the organization. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.

try {
    $result = $apiInstance->getTags($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |

### Return type

[**\Upmind\EnhanceSdk\Model\TagsFullListing**](../Model/TagsFullListing.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteSslCert()`

```php
getWebsiteSslCert($org_id, $website_id, $cert_id): \Upmind\EnhanceSdk\Model\SslCertWithData
```

Fetches a single SSL cert

Returns certificate data and mappings for a single certificate belonging to a website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$cert_id = 'cert_id_example'; // string | The id of the ssl certificate.

try {
    $result = $apiInstance->getWebsiteSslCert($org_id, $website_id, $cert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getWebsiteSslCert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **cert_id** | **string**| The id of the ssl certificate. | |

### Return type

[**\Upmind\EnhanceSdk\Model\SslCertWithData**](../Model/SslCertWithData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsiteSslCerts()`

```php
getWebsiteSslCerts($org_id, $website_id): \Upmind\EnhanceSdk\Model\SslCertsFullListing
```

Returns all certificates data with domain mappings for a given website

Endpoint for retreaving SSl certificates for a given website including certificates generated by letsencrypt

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.

try {
    $result = $apiInstance->getWebsiteSslCerts($org_id, $website_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getWebsiteSslCerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |

### Return type

[**\Upmind\EnhanceSdk\Model\SslCertsFullListing**](../Model/SslCertsFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebsitesAdded()`

```php
getWebsitesAdded($org_id, $time_interval, $recursion): \Upmind\EnhanceSdk\Model\ResourceCountByInterval[]
```

Get websites added over a given time period

Returns the number of websites added each day over a given timeframe.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$time_interval = 'time_interval_example'; // string
$recursion = True; // bool

try {
    $result = $apiInstance->getWebsitesAdded($org_id, $time_interval, $recursion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->getWebsitesAdded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **time_interval** | **string**|  | [optional] |
| **recursion** | **bool**|  | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\ResourceCountByInterval[]**](../Model/ResourceCountByInterval.md)

### Authorization

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setOrgAvatar()`

```php
setOrgAvatar($org_id, $avatar)
```

Set org avatar

Sets the org's avatar, overwriting any previous one if one exists. The max allowed size is 200 KiB. The image format may be jpeg, png, and ico. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$avatar = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->setOrgAvatar($org_id, $avatar);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->setOrgAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **avatar** | **\SplFileObject****\SplFileObject**|  | |

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

## `updateCloudflareApiKey()`

```php
updateCloudflareApiKey($org_id, $cloudflare_key, $update_cloud_flare_api_key)
```

Update CloudFlare API key

Update a CloudFlare API key for an org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$cloudflare_key = 'cloudflare_key_example'; // string | The id of a CloudFlare key to be acted upon.
$update_cloud_flare_api_key = new \Upmind\EnhanceSdk\Model\UpdateCloudFlareApiKey(); // \Upmind\EnhanceSdk\Model\UpdateCloudFlareApiKey | Key in plain text.

try {
    $apiInstance->updateCloudflareApiKey($org_id, $cloudflare_key, $update_cloud_flare_api_key);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->updateCloudflareApiKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **cloudflare_key** | **string**| The id of a CloudFlare key to be acted upon. | |
| **update_cloud_flare_api_key** | [**\Upmind\EnhanceSdk\Model\UpdateCloudFlareApiKey**](../Model/UpdateCloudFlareApiKey.md)| Key in plain text. | |

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

## `updateMember()`

```php
updateMember($org_id, $member_id, $update_member)
```

Overwrite organization member settings

Updates member information, such as their roles, site access permissions, and notification settings. This operation can only be done by the logged in superadmin or owner of the organization or its parent organization(s). This operation overwrites existing settings, so all existing values that are meant to be kept should be included in the response body.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$member_id = 'member_id_example'; // string | The id of the member.
$update_member = new \Upmind\EnhanceSdk\Model\UpdateMember(); // \Upmind\EnhanceSdk\Model\UpdateMember | Member settings

try {
    $apiInstance->updateMember($org_id, $member_id, $update_member);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->updateMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **member_id** | **string**| The id of the member. | |
| **update_member** | [**\Upmind\EnhanceSdk\Model\UpdateMember**](../Model/UpdateMember.md)| Member settings | |

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

## `updateOrg()`

```php
updateOrg($org_id, $org_update)
```

Update organization

Updates the given org's name. Session holder must be at least a `SuperAdmin` in this org or a parent org.

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


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 'org_id_example'; // string | The id of the organization.
$org_update = new \Upmind\EnhanceSdk\Model\OrgUpdate(); // \Upmind\EnhanceSdk\Model\OrgUpdate | Organization details.

try {
    $apiInstance->updateOrg($org_id, $org_update);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->updateOrg: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **org_update** | [**\Upmind\EnhanceSdk\Model\OrgUpdate**](../Model/OrgUpdate.md)| Organization details. | |

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


// Configure API key authorization: sessionCookie
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKey('id0', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('id0', 'Bearer');

// Configure Bearer authorization: bearerAuth
$config = Upmind\EnhanceSdk\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
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
    echo 'Exception when calling OrgsApi->updateOwner: ', $e->getMessage(), PHP_EOL;
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

[sessionCookie](../../README.md#sessionCookie), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

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



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
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
    echo 'Exception when calling OrgsApi->updatePlan: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
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
    echo 'Exception when calling OrgsApi->updatePlanAllowance: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
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
    echo 'Exception when calling OrgsApi->updatePlanResource: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
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
    echo 'Exception when calling OrgsApi->updatePlanSelection: ', $e->getMessage(), PHP_EOL;
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

## `uploadWebsiteSslCerts()`

```php
uploadWebsiteSslCerts($org_id, $website_id, $ssl_certs): \Upmind\EnhanceSdk\Model\NewSslCert
```

Upload custom ssl certificate, key and optional fullchain for a given website

Endpoint for uploading custom SSL certificate for a given website. Verifies the cert key and maps to relevant domains that the certificate can be applied to. Returns error if no domain match is found. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\OrgsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$ssl_certs = new \Upmind\EnhanceSdk\Model\SslCerts(); // \Upmind\EnhanceSdk\Model\SslCerts | Cert, private key and optional fullchain.

try {
    $result = $apiInstance->uploadWebsiteSslCerts($org_id, $website_id, $ssl_certs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrgsApi->uploadWebsiteSslCerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **ssl_certs** | [**\Upmind\EnhanceSdk\Model\SslCerts**](../Model/SslCerts.md)| Cert, private key and optional fullchain. | |

### Return type

[**\Upmind\EnhanceSdk\Model\NewSslCert**](../Model/NewSslCert.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
