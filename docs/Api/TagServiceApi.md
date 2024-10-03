# OpenAPI\Client\TagServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTag()**](TagServiceApi.md#createTag) | **POST** /v1beta/tags | Create tag |
| [**deleteTag()**](TagServiceApi.md#deleteTag) | **DELETE** /v1beta/tags | Delete tag |
| [**listTags()**](TagServiceApi.md#listTags) | **GET** /v1beta/tags | List tags |


## `createTag()`

```php
createTag($body): \OpenAPI\Client\Model\TagCreateTagResponse
```

Create tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TagServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\HelperstagTag(); // \OpenAPI\Client\Model\HelperstagTag

try {
    $result = $apiInstance->createTag($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagServiceApi->createTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\HelperstagTag**](../Model/HelperstagTag.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TagCreateTagResponse**](../Model/TagCreateTagResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTag()`

```php
deleteTag($key, $value): \OpenAPI\Client\Model\TagDeleteTagResponse
```

Delete tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TagServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The key of the tag. Allowed values: 'customer'.
$value = 'value_example'; // string | The value of the tag. I.e.: VIP customer.

try {
    $result = $apiInstance->deleteTag($key, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagServiceApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The key of the tag. Allowed values: &#39;customer&#39;. | [optional] |
| **value** | **string**| The value of the tag. I.e.: VIP customer. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TagDeleteTagResponse**](../Model/TagDeleteTagResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTags()`

```php
listTags($key, $value): \OpenAPI\Client\Model\TagListTagsResponse
```

List tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TagServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | The key of the tag. Allowed values: 'customer'.
$value = 'value_example'; // string | The value of the tag. I.e.: VIP customer.

try {
    $result = $apiInstance->listTags($key, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagServiceApi->listTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| The key of the tag. Allowed values: &#39;customer&#39;. | [optional] |
| **value** | **string**| The value of the tag. I.e.: VIP customer. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TagListTagsResponse**](../Model/TagListTagsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
