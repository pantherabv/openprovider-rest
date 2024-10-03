# OpenAPI\Client\SEDomainApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDomainMixin8()**](SEDomainApi.md#createDomainMixin8) | **POST** /v1beta/spam-expert/domains | Create domain |
| [**deleteDomainMixin8()**](SEDomainApi.md#deleteDomainMixin8) | **DELETE** /v1beta/spam-expert/domains/{domain_name} | Delete domain |
| [**getDomainMixin8()**](SEDomainApi.md#getDomainMixin8) | **GET** /v1beta/spam-expert/domains/{domain_name} | Get domain |
| [**updateDomainMixin8()**](SEDomainApi.md#updateDomainMixin8) | **PUT** /v1beta/spam-expert/domains/{domain_name} | Update domain |


## `createDomainMixin8()`

```php
createDomainMixin8($body): \OpenAPI\Client\Model\ResponseBoolResponse
```

Create domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SEDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\SeDomainCreateDomainRequest(); // \OpenAPI\Client\Model\SeDomainCreateDomainRequest

try {
    $result = $apiInstance->createDomainMixin8($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SEDomainApi->createDomainMixin8: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SeDomainCreateDomainRequest**](../Model/SeDomainCreateDomainRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResponseBoolResponse**](../Model/ResponseBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDomainMixin8()`

```php
deleteDomainMixin8($domain_name, $bundle): \OpenAPI\Client\Model\ResponseBoolResponse
```

Delete domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SEDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = 'domain_name_example'; // string | Domain full name
$bundle = True; // bool | Indicates if old subscriptions backward compatibility is used.

try {
    $result = $apiInstance->deleteDomainMixin8($domain_name, $bundle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SEDomainApi->deleteDomainMixin8: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_name** | **string**| Domain full name | |
| **bundle** | **bool**| Indicates if old subscriptions backward compatibility is used. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ResponseBoolResponse**](../Model/ResponseBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainMixin8()`

```php
getDomainMixin8($domain_name, $with_records, $bundle): \OpenAPI\Client\Model\SeDomainGetDomainResponse
```

Get domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SEDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = 'domain_name_example'; // string | Domain full name
$with_records = false; // bool | Indicates, whether records should be displayed in output.
$bundle = True; // bool | Indicates if old subscriptions backward compatibility is used.

try {
    $result = $apiInstance->getDomainMixin8($domain_name, $with_records, $bundle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SEDomainApi->getDomainMixin8: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_name** | **string**| Domain full name | |
| **with_records** | **bool**| Indicates, whether records should be displayed in output. | [optional] [default to false] |
| **bundle** | **bool**| Indicates if old subscriptions backward compatibility is used. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SeDomainGetDomainResponse**](../Model/SeDomainGetDomainResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDomainMixin8()`

```php
updateDomainMixin8($domain_name, $body): \OpenAPI\Client\Model\ResponseBoolResponse
```

Update domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SEDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = 'domain_name_example'; // string | Domain full name
$body = new \OpenAPI\Client\Model\SeDomainUpdateDomainRequest(); // \OpenAPI\Client\Model\SeDomainUpdateDomainRequest

try {
    $result = $apiInstance->updateDomainMixin8($domain_name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SEDomainApi->updateDomainMixin8: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_name** | **string**| Domain full name | |
| **body** | [**\OpenAPI\Client\Model\SeDomainUpdateDomainRequest**](../Model/SeDomainUpdateDomainRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ResponseBoolResponse**](../Model/ResponseBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
