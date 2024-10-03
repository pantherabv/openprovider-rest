# Panthera\Openprovider\CsrApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCsr()**](CsrApi.md#createCsr) | **POST** /v1beta/ssl/csr | Create csr |
| [**decodeCsr()**](CsrApi.md#decodeCsr) | **POST** /v1beta/ssl/csr/decode | Decode csr |


## `createCsr()`

```php
createCsr($body): \Panthera\Openprovider\Model\CsrCreateCsrResponse
```

Create csr

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Panthera\Openprovider\Api\CsrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Panthera\Openprovider\Model\CsrCreateCsrRequest(); // \Panthera\Openprovider\Model\CsrCreateCsrRequest

try {
    $result = $apiInstance->createCsr($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CsrApi->createCsr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Panthera\Openprovider\Model\CsrCreateCsrRequest**](../Model/CsrCreateCsrRequest.md)|  | |

### Return type

[**\Panthera\Openprovider\Model\CsrCreateCsrResponse**](../Model/CsrCreateCsrResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `decodeCsr()`

```php
decodeCsr($body): \Panthera\Openprovider\Model\CsrDecodeCsrResponse
```

Decode csr

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Panthera\Openprovider\Api\CsrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Panthera\Openprovider\Model\CsrDecodeCsrRequest(); // \Panthera\Openprovider\Model\CsrDecodeCsrRequest

try {
    $result = $apiInstance->decodeCsr($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CsrApi->decodeCsr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Panthera\Openprovider\Model\CsrDecodeCsrRequest**](../Model/CsrDecodeCsrRequest.md)|  | |

### Return type

[**\Panthera\Openprovider\Model\CsrDecodeCsrResponse**](../Model/CsrDecodeCsrResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
