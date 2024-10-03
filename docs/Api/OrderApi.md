# OpenAPI\Client\OrderApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelOrder()**](OrderApi.md#cancelOrder) | **POST** /v1beta/ssl/orders/{id}/cancel | Cancel order |
| [**createOrder()**](OrderApi.md#createOrder) | **POST** /v1beta/ssl/orders | Create order |
| [**getOrder()**](OrderApi.md#getOrder) | **GET** /v1beta/ssl/orders/{id} | Get order |
| [**listOrders()**](OrderApi.md#listOrders) | **GET** /v1beta/ssl/orders | List orders |
| [**reissueOrder()**](OrderApi.md#reissueOrder) | **POST** /v1beta/ssl/orders/{id}/reissue | Reissue order |
| [**renewOrder()**](OrderApi.md#renewOrder) | **POST** /v1beta/ssl/orders/{id}/renew | Renew order |
| [**updateOrder()**](OrderApi.md#updateOrder) | **PUT** /v1beta/ssl/orders/{id} | Update order |


## `cancelOrder()`

```php
cancelOrder($id, $body): \OpenAPI\Client\Model\OrderCancelOrderResponse
```

Cancel order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object id
$body = new \OpenAPI\Client\Model\OrderCancelOrderRequest(); // \OpenAPI\Client\Model\OrderCancelOrderRequest

try {
    $result = $apiInstance->cancelOrder($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object id | |
| **body** | [**\OpenAPI\Client\Model\OrderCancelOrderRequest**](../Model/OrderCancelOrderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderCancelOrderResponse**](../Model/OrderCancelOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($body): \OpenAPI\Client\Model\OrderCreateOrderResponse
```

Create order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OrderCreateOrderRequest(); // \OpenAPI\Client\Model\OrderCreateOrderRequest

try {
    $result = $apiInstance->createOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\OrderCreateOrderRequest**](../Model/OrderCreateOrderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderCreateOrderResponse**](../Model/OrderCreateOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($id): \OpenAPI\Client\Model\OrderGetOrderResponse
```

Get order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object id

try {
    $result = $apiInstance->getOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object id | |

### Return type

[**\OpenAPI\Client\Model\OrderGetOrderResponse**](../Model/OrderGetOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrders()`

```php
listOrders($limit, $offset, $order_by_common_name, $order_by_order_date, $order_by_active_date, $order_by_expiration_date, $order_by_status, $order_by_product_name, $common_name_pattern, $status, $contact_handle, $show_expiring): \OpenAPI\Client\Model\OrderListOrdersResponse
```

List orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Search query limit.
$offset = 56; // int | Search query offset.
$order_by_common_name = 'order_by_common_name_example'; // string | desc/asc.
$order_by_order_date = 'desc'; // string | desc/asc.
$order_by_active_date = 'order_by_active_date_example'; // string | desc/asc.
$order_by_expiration_date = 'order_by_expiration_date_example'; // string | desc/asc.
$order_by_status = 'order_by_status_example'; // string | desc/asc.
$order_by_product_name = 'order_by_product_name_example'; // string | desc/asc.
$common_name_pattern = 'common_name_pattern_example'; // string | Certificate common name pattern. Wildcard (*) can be used.
$status = array('status_example'); // string[] | Array of order statuses.
$contact_handle = 'contact_handle_example'; // string | Contact handle.
$show_expiring = True; // bool | Indicates, whether to return only certificates that are expiring within 30 days.

try {
    $result = $apiInstance->listOrders($limit, $offset, $order_by_common_name, $order_by_order_date, $order_by_active_date, $order_by_expiration_date, $order_by_status, $order_by_product_name, $common_name_pattern, $status, $contact_handle, $show_expiring);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Search query limit. | [optional] [default to 100] |
| **offset** | **int**| Search query offset. | [optional] |
| **order_by_common_name** | **string**| desc/asc. | [optional] |
| **order_by_order_date** | **string**| desc/asc. | [optional] [default to &#39;desc&#39;] |
| **order_by_active_date** | **string**| desc/asc. | [optional] |
| **order_by_expiration_date** | **string**| desc/asc. | [optional] |
| **order_by_status** | **string**| desc/asc. | [optional] |
| **order_by_product_name** | **string**| desc/asc. | [optional] |
| **common_name_pattern** | **string**| Certificate common name pattern. Wildcard (*) can be used. | [optional] |
| **status** | [**string[]**](../Model/string.md)| Array of order statuses. | [optional] |
| **contact_handle** | **string**| Contact handle. | [optional] |
| **show_expiring** | **bool**| Indicates, whether to return only certificates that are expiring within 30 days. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderListOrdersResponse**](../Model/OrderListOrdersResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reissueOrder()`

```php
reissueOrder($id, $body): \OpenAPI\Client\Model\OrderReissueOrderResponse
```

Reissue order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object id
$body = new \OpenAPI\Client\Model\OrderReissueOrderRequest(); // \OpenAPI\Client\Model\OrderReissueOrderRequest

try {
    $result = $apiInstance->reissueOrder($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->reissueOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object id | |
| **body** | [**\OpenAPI\Client\Model\OrderReissueOrderRequest**](../Model/OrderReissueOrderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderReissueOrderResponse**](../Model/OrderReissueOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renewOrder()`

```php
renewOrder($id, $body): \OpenAPI\Client\Model\OrderRenewOrderResponse
```

Renew order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object id
$body = new \OpenAPI\Client\Model\OrderRenewOrderRequest(); // \OpenAPI\Client\Model\OrderRenewOrderRequest

try {
    $result = $apiInstance->renewOrder($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->renewOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object id | |
| **body** | [**\OpenAPI\Client\Model\OrderRenewOrderRequest**](../Model/OrderRenewOrderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderRenewOrderResponse**](../Model/OrderRenewOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($id, $body): \OpenAPI\Client\Model\OrderUpdateOrderResponse
```

Update order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object id
$body = new \OpenAPI\Client\Model\OrderUpdateOrderRequest(); // \OpenAPI\Client\Model\OrderUpdateOrderRequest

try {
    $result = $apiInstance->updateOrder($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object id | |
| **body** | [**\OpenAPI\Client\Model\OrderUpdateOrderRequest**](../Model/OrderUpdateOrderRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OrderUpdateOrderResponse**](../Model/OrderUpdateOrderResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
