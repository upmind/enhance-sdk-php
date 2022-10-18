# Upmind\EnhanceSdk\WebsiteApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWebsiteLogs()**](WebsiteApi.md#getWebsiteLogs) | **GET** /orgs/{org_id}/websites/{website_id}/logs | Get website status logs |


## `getWebsiteLogs()`

```php
getWebsiteLogs($org_id, $website_id, $since, $until, $limit, $flush): \Upmind\EnhanceSdk\Model\WebsiteLogsFullListing
```

Get website status logs

Websites are being monitored. Returns the logs which enhance gathered about the website status over time. Limit defaults to 50. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\WebsiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return resources which have been created on or after provided date.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only return resources which have been created earlier than provided date.
$limit = 56; // int | The maximum number of items to return.
$flush = True; // bool | If true, then we do extra job of flushing cache in relevant places before gathering logs. This makes the operation more expensive and only makes sense using if latest logs are necessary. If false, logs newer than a few minutes may not be in the result.

try {
    $result = $apiInstance->getWebsiteLogs($org_id, $website_id, $since, $until, $limit, $flush);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebsiteApi->getWebsiteLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **since** | **\DateTime**| Only return resources which have been created on or after provided date. | [optional] |
| **until** | **\DateTime**| Only return resources which have been created earlier than provided date. | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **flush** | **bool**| If true, then we do extra job of flushing cache in relevant places before gathering logs. This makes the operation more expensive and only makes sense using if latest logs are necessary. If false, logs newer than a few minutes may not be in the result. | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\WebsiteLogsFullListing**](../Model/WebsiteLogsFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
