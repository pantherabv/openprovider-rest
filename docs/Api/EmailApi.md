# Panthera\Openprovider\EmailApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEmail()**](EmailApi.md#createEmail) | **POST** /v1beta/emails | Create email |
| [**deleteEmail()**](EmailApi.md#deleteEmail) | **DELETE** /v1beta/emails/{id} | Delete email |
| [**listEmails()**](EmailApi.md#listEmails) | **GET** /v1beta/emails | List emails |
| [**updateEmail()**](EmailApi.md#updateEmail) | **PUT** /v1beta/emails/{id} | Update email |


## `createEmail()`

```php
createEmail($body): \Panthera\Openprovider\Model\EmailCreateEmailResponse
```

Create email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Panthera\Openprovider\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Panthera\Openprovider\Model\EmailCreateEmailRequest(); // \Panthera\Openprovider\Model\EmailCreateEmailRequest

try {
    $result = $apiInstance->createEmail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->createEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Panthera\Openprovider\Model\EmailCreateEmailRequest**](../Model/EmailCreateEmailRequest.md)|  | |

### Return type

[**\Panthera\Openprovider\Model\EmailCreateEmailResponse**](../Model/EmailCreateEmailResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmail()`

```php
deleteEmail($id): \Panthera\Openprovider\Model\EmailDeleteEmailResponse
```

Delete email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Panthera\Openprovider\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object ID

try {
    $result = $apiInstance->deleteEmail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->deleteEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object ID | |

### Return type

[**\Panthera\Openprovider\Model\EmailDeleteEmailResponse**](../Model/EmailDeleteEmailResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmails()`

```php
listEmails($id, $name, $group, $limit, $offset, $is_system): \Panthera\Openprovider\Model\EmailListEmailsResponse
```

List emails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Panthera\Openprovider\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object ID.
$name = 'name_example'; // string | Template name.
$group = 'group_example'; // string | Email template type. There are several types of ICANN emails that can be customized in Openprovider: -errp (Expired Registration Recovery policy emails) -foa (Form of Authorization emails for domain transfers approval rejection) -ive (Information verification emails, such emails used to verify email address of the customer) -tcn (Trademark Claims Notification emails) -wdrp (Whois Data Reminder Policy emails).
$limit = 56; // int | Output limit.
$offset = 56; // int | Output offset.
$is_system = True; // bool | Is system.

try {
    $result = $apiInstance->listEmails($id, $name, $group, $limit, $offset, $is_system);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->listEmails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object ID. | [optional] |
| **name** | **string**| Template name. | [optional] |
| **group** | **string**| Email template type. There are several types of ICANN emails that can be customized in Openprovider: -errp (Expired Registration Recovery policy emails) -foa (Form of Authorization emails for domain transfers approval rejection) -ive (Information verification emails, such emails used to verify email address of the customer) -tcn (Trademark Claims Notification emails) -wdrp (Whois Data Reminder Policy emails). | [optional] |
| **limit** | **int**| Output limit. | [optional] |
| **offset** | **int**| Output offset. | [optional] |
| **is_system** | **bool**| Is system. | [optional] |

### Return type

[**\Panthera\Openprovider\Model\EmailListEmailsResponse**](../Model/EmailListEmailsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmail()`

```php
updateEmail($id, $body): \Panthera\Openprovider\Model\EmailUpdateEmailResponse
```

Update email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Panthera\Openprovider\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Object ID
$body = new \Panthera\Openprovider\Model\EmailUpdateEmailRequest(); // \Panthera\Openprovider\Model\EmailUpdateEmailRequest

try {
    $result = $apiInstance->updateEmail($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->updateEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Object ID | |
| **body** | [**\Panthera\Openprovider\Model\EmailUpdateEmailRequest**](../Model/EmailUpdateEmailRequest.md)|  | |

### Return type

[**\Panthera\Openprovider\Model\EmailUpdateEmailResponse**](../Model/EmailUpdateEmailResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
