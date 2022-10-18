# Upmind\EnhanceSdk\MetricsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getWebsiteMetrics()**](MetricsApi.md#getWebsiteMetrics) | **GET** /orgs/{org_id}/websites/{website_id}/metrics | Get website metrics |


## `getWebsiteMetrics()`

```php
getWebsiteMetrics($org_id, $website_id, $start, $end, $granularity): \Upmind\EnhanceSdk\Model\WebsiteMetricsFullListing
```

Get website metrics

Returns website metrics between the optional start and end date. Defaults to last 24 hours. Session holder must be at least a `SuperAdmin` in this org or a parent org, or be a member in this org that has access to the website.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Upmind\EnhanceSdk\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_id = 'org_id_example'; // string | The id of the organization.
$website_id = 'website_id_example'; // string | The id of the website.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start datetime UTC.
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End datetime UTC.
$granularity = 'granularity_example'; // string | Takes one of `hour`, `day`, `month` or `year`, defaults to `day`

try {
    $result = $apiInstance->getWebsiteMetrics($org_id, $website_id, $start, $end, $granularity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getWebsiteMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **org_id** | **string**| The id of the organization. | |
| **website_id** | **string**| The id of the website. | |
| **start** | **\DateTime**| Start datetime UTC. | [optional] |
| **end** | **\DateTime**| End datetime UTC. | [optional] |
| **granularity** | **string**| Takes one of &#x60;hour&#x60;, &#x60;day&#x60;, &#x60;month&#x60; or &#x60;year&#x60;, defaults to &#x60;day&#x60; | [optional] |

### Return type

[**\Upmind\EnhanceSdk\Model\WebsiteMetricsFullListing**](../Model/WebsiteMetricsFullListing.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
