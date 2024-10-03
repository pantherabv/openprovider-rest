# OpenAPI\Client\EasydmarcOrderApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEasyDmarc()**](EasydmarcOrderApi.md#createEasyDmarc) | **POST** /v1beta/easydmarcs | Create easy dmarc |
| [**deleteEasyDmarc()**](EasydmarcOrderApi.md#deleteEasyDmarc) | **DELETE** /v1beta/easydmarcs/{id} | Delete easy dmarc |
| [**getEasyDmarc()**](EasydmarcOrderApi.md#getEasyDmarc) | **GET** /v1beta/easydmarcs | Get easy dmarc |
| [**getEasyDmarcSso()**](EasydmarcOrderApi.md#getEasyDmarcSso) | **GET** /v1beta/easydmarcs/{id}/sso | Get easy dmarc sso |
| [**listEasyDmarc()**](EasydmarcOrderApi.md#listEasyDmarc) | **GET** /v1beta/easydmarcs/list | List easy dmarc |
| [**retryEasyDmarc()**](EasydmarcOrderApi.md#retryEasyDmarc) | **POST** /v1beta/easydmarcs/{id}/retry | Retry easy dmarc |


## `createEasyDmarc()`

```php
createEasyDmarc($body): \OpenAPI\Client\Model\OrderCreateEasyDmarcResponse
```

Create easy dmarc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EasydmarcOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCreateEasyDmarcRequest(); // \OpenAPI\Client\Model\OrderCreateEasyDmarcRequest

try {
    $result = $apiInstance->createEasyDmarc($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasydmarcOrderApi->createEasyDmarc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\OrderCreateEasyDmarcRequest**](../Model/OrderCreateEasyDmarcRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderCreateEasyDmarcResponse**](../Model/OrderCreateEasyDmarcResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEasyDmarc()`

```php
deleteEasyDmarc($id): \OpenAPI\Client\Model\OrderDeleteEasyDmarcResponse
```

Delete easy dmarc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EasydmarcOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Easydmarc id (order number)

try {
    $result = $apiInstance->deleteEasyDmarc($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasydmarcOrderApi->deleteEasyDmarc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Easydmarc id (order number) | |

### Return type

[**\OpenAPI\Client\Model\OrderDeleteEasyDmarcResponse**](../Model/OrderDeleteEasyDmarcResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEasyDmarc()`

```php
getEasyDmarc($domain_name, $domain_extension): \OpenAPI\Client\Model\OrderGetEasyDmarcResponse
```

Get easy dmarc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EasydmarcOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = 'domain_name_example'; // string | Domain name without extension.
$domain_extension = 'domain_extension_example'; // string | Domain extension.

try {
    $result = $apiInstance->getEasyDmarc($domain_name, $domain_extension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasydmarcOrderApi->getEasyDmarc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_name** | **string**| Domain name without extension. | [optional] |
| **domain_extension** | **string**| Domain extension. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderGetEasyDmarcResponse**](../Model/OrderGetEasyDmarcResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEasyDmarcSso()`

```php
getEasyDmarcSso($id, $type): \OpenAPI\Client\Model\OrderGetEasyDmarcSsoResponse
```

Get easy dmarc sso

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EasydmarcOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Easy Dmarc id (order id)
$type = 'type_example'; // string | SSO url on behalf of the customer or reseller.

try {
    $result = $apiInstance->getEasyDmarcSso($id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasydmarcOrderApi->getEasyDmarcSso: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Easy Dmarc id (order id) | |
| **type** | **string**| SSO url on behalf of the customer or reseller. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderGetEasyDmarcSsoResponse**](../Model/OrderGetEasyDmarcSsoResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEasyDmarc()`

```php
listEasyDmarc($limit, $offset, $order_by_id, $status, $domain_name, $domain_extension): \OpenAPI\Client\Model\OrderListEasyDmarcResponse
```

List easy dmarc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EasydmarcOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Search query limit.
$offset = 0; // int | Search query offset.
$order_by_id = 'order_by_id_example'; // string | desc/asc.
$status = array('status_example'); // string[] | Array of order statuses.
$domain_name = 'domain_name_example'; // string | Domain name without extension.
$domain_extension = 'domain_extension_example'; // string | Domain extension.

try {
    $result = $apiInstance->listEasyDmarc($limit, $offset, $order_by_id, $status, $domain_name, $domain_extension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasydmarcOrderApi->listEasyDmarc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Search query limit. | [optional] [default to 100] |
| **offset** | **int**| Search query offset. | [optional] [default to 0] |
| **order_by_id** | **string**| desc/asc. | [optional] |
| **status** | [**string[]**](../Model/string.md)| Array of order statuses. | [optional] |
| **domain_name** | **string**| Domain name without extension. | [optional] |
| **domain_extension** | **string**| Domain extension. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderListEasyDmarcResponse**](../Model/OrderListEasyDmarcResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryEasyDmarc()`

```php
retryEasyDmarc($id, $body): \OpenAPI\Client\Model\OrderRetryEasyDmarcResponse
```

Retry easy dmarc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EasydmarcOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Easydmarc id (order number)
$body = new \OpenAPI\Client\Model\OrderRetryEasyDmarcRequest(); // \OpenAPI\Client\Model\OrderRetryEasyDmarcRequest

try {
    $result = $apiInstance->retryEasyDmarc($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EasydmarcOrderApi->retryEasyDmarc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Easydmarc id (order number) | |
| **body** | [**\OpenAPI\Client\Model\OrderRetryEasyDmarcRequest**](../Model/OrderRetryEasyDmarcRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderRetryEasyDmarcResponse**](../Model/OrderRetryEasyDmarcResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
