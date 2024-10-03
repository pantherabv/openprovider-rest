# OpenAPI\Client\DomainTokenApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createToken()**](DomainTokenApi.md#createToken) | **POST** /v1beta/dns/domain-token | Create token |


## `createToken()`

```php
createToken($body): \OpenAPI\Client\Model\DomainTokenCreateTokenResponse
```

Create token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DomainTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DomainTokenCreateTokenRequest(); // \OpenAPI\Client\Model\DomainTokenCreateTokenRequest

try {
    $result = $apiInstance->createToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainTokenApi->createToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DomainTokenCreateTokenRequest**](../Model/DomainTokenCreateTokenRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DomainTokenCreateTokenResponse**](../Model/DomainTokenCreateTokenResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
