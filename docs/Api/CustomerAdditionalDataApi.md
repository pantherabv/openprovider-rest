# OpenAPI\Client\CustomerAdditionalDataApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getData()**](CustomerAdditionalDataApi.md#getData) | **GET** /v1beta/domains/additional-data/customers | Get data |


## `getData()`

```php
getData($domain_name, $domain_extension): \OpenAPI\Client\Model\CustomerGetDataResponse
```

Get data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomerAdditionalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = 'domain_name_example'; // string | Domain name without extension.
$domain_extension = 'domain_extension_example'; // string | Domain extension.

try {
    $result = $apiInstance->getData($domain_name, $domain_extension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAdditionalDataApi->getData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_name** | **string**| Domain name without extension. | [optional] |
| **domain_extension** | **string**| Domain extension. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomerGetDataResponse**](../Model/CustomerGetDataResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
