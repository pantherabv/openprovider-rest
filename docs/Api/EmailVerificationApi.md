# OpenAPI\Client\EmailVerificationApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listDomainEmailVerifications()**](EmailVerificationApi.md#listDomainEmailVerifications) | **GET** /v1beta/customers/verifications/emails/domains | List domain email verifications |
| [**restartEmailVerification()**](EmailVerificationApi.md#restartEmailVerification) | **POST** /v1beta/customers/verifications/emails/restart | Restart email verification |
| [**startEmailVerification()**](EmailVerificationApi.md#startEmailVerification) | **POST** /v1beta/customers/verifications/emails/start | Start email verification |


## `listDomainEmailVerifications()`

```php
listDomainEmailVerifications($domain_id, $domain, $email, $handle, $status, $description, $is_suspended, $response_type, $response_to, $limit, $offset): \OpenAPI\Client\Model\EmailListDomainVerificationsResponse
```

List domain email verifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_id = 56; // int | The domain id.
$domain = 'domain_example'; // string | The domain.
$email = 'email_example'; // string | The email.
$handle = 'handle_example'; // string | The handle.
$status = 'status_example'; // string | The status.
$description = 'description_example'; // string | The description.
$is_suspended = True; // bool | Is suspended.
$response_type = 'response_type_example'; // string | The type.
$response_to = 'response_to_example'; // string | The to.
$limit = 56; // int | The limit.
$offset = 56; // int | The offset.

try {
    $result = $apiInstance->listDomainEmailVerifications($domain_id, $domain, $email, $handle, $status, $description, $is_suspended, $response_type, $response_to, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailVerificationApi->listDomainEmailVerifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_id** | **int**| The domain id. | [optional] |
| **domain** | **string**| The domain. | [optional] |
| **email** | **string**| The email. | [optional] |
| **handle** | **string**| The handle. | [optional] |
| **status** | **string**| The status. | [optional] |
| **description** | **string**| The description. | [optional] |
| **is_suspended** | **bool**| Is suspended. | [optional] |
| **response_type** | **string**| The type. | [optional] |
| **response_to** | **string**| The to. | [optional] |
| **limit** | **int**| The limit. | [optional] |
| **offset** | **int**| The offset. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmailListDomainVerificationsResponse**](../Model/EmailListDomainVerificationsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restartEmailVerification()`

```php
restartEmailVerification($body): \OpenAPI\Client\Model\EmailRestartEmailVerificationResponse
```

Restart email verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EmailRestartEmailVerificationRequest(); // \OpenAPI\Client\Model\EmailRestartEmailVerificationRequest

try {
    $result = $apiInstance->restartEmailVerification($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailVerificationApi->restartEmailVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\EmailRestartEmailVerificationRequest**](../Model/EmailRestartEmailVerificationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EmailRestartEmailVerificationResponse**](../Model/EmailRestartEmailVerificationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startEmailVerification()`

```php
startEmailVerification($body): \OpenAPI\Client\Model\EmailStartEmailVerificationResponse
```

Start email verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EmailStartEmailVerificationRequest(); // \OpenAPI\Client\Model\EmailStartEmailVerificationRequest

try {
    $result = $apiInstance->startEmailVerification($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailVerificationApi->startEmailVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\EmailStartEmailVerificationRequest**](../Model/EmailStartEmailVerificationRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EmailStartEmailVerificationResponse**](../Model/EmailStartEmailVerificationResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
