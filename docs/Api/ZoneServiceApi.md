# Panthera\Openprovider\ZoneServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createZone()**](ZoneServiceApi.md#createZone) | **POST** /v1beta/dns/zones | Create zone |
| [**deleteZone()**](ZoneServiceApi.md#deleteZone) | **DELETE** /v1beta/dns/zones/{name} | Delete zone |
| [**getZone()**](ZoneServiceApi.md#getZone) | **GET** /v1beta/dns/zones/{name} | Get zone |
| [**listZones()**](ZoneServiceApi.md#listZones) | **GET** /v1beta/dns/zones | List zones |
| [**updateZone()**](ZoneServiceApi.md#updateZone) | **PUT** /v1beta/dns/zones/{name} | Update zone |


## `createZone()`

```php
createZone($body): \Panthera\Openprovider\Model\ZoneZoneBoolResponse
```

Create zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Panthera\Openprovider\Api\ZoneServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Panthera\Openprovider\Model\ZoneCreateZoneRequest(); // \Panthera\Openprovider\Model\ZoneCreateZoneRequest

try {
    $result = $apiInstance->createZone($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneServiceApi->createZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\Panthera\Openprovider\Model\ZoneCreateZoneRequest**](../Model/ZoneCreateZoneRequest.md)|  | |

### Return type

[**\Panthera\Openprovider\Model\ZoneZoneBoolResponse**](../Model/ZoneZoneBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteZone()`

```php
deleteZone($name, $id, $domain_name, $domain_extension, $provider): \Panthera\Openprovider\Model\ZoneZoneBoolResponse
```

Delete zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Panthera\Openprovider\Api\ZoneServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the domain to which DNS zone corresponds
$id = 56; // int | DNS zone ID.
$domain_name = 'domain_name_example'; // string | Domain name without extension.
$domain_extension = 'domain_extension_example'; // string | Domain extension.
$provider = 'provider_example'; // string | Name of the DNS provider. Set provider=sectigo in case of sectigo premium DNS zone should be deleted.

try {
    $result = $apiInstance->deleteZone($name, $id, $domain_name, $domain_extension, $provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneServiceApi->deleteZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the domain to which DNS zone corresponds | |
| **id** | **int**| DNS zone ID. | [optional] |
| **domain_name** | **string**| Domain name without extension. | [optional] |
| **domain_extension** | **string**| Domain extension. | [optional] |
| **provider** | **string**| Name of the DNS provider. Set provider&#x3D;sectigo in case of sectigo premium DNS zone should be deleted. | [optional] |

### Return type

[**\Panthera\Openprovider\Model\ZoneZoneBoolResponse**](../Model/ZoneZoneBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZone()`

```php
getZone($name, $id, $with_records, $with_history, $with_dnskey, $provider): \Panthera\Openprovider\Model\ZoneGetZoneResponse
```

Get zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Panthera\Openprovider\Api\ZoneServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the domain to which DNS zone corresponds
$id = 'id_example'; // string | DNS zone ID.
$with_records = false; // bool | Indicates, whether DNS records should be displayed in output.
$with_history = false; // bool | Indicates, whether DNS zone history should be displayed in output.
$with_dnskey = True; // bool | Indicates, whether DNSSEC keys should be displayed in output.
$provider = 'provider_example'; // string | Name of the DNS provider. Set provider=sectigo in case of only sectigo premium DNS zone should be retrieved.

try {
    $result = $apiInstance->getZone($name, $id, $with_records, $with_history, $with_dnskey, $provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneServiceApi->getZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the domain to which DNS zone corresponds | |
| **id** | **string**| DNS zone ID. | [optional] |
| **with_records** | **bool**| Indicates, whether DNS records should be displayed in output. | [optional] [default to false] |
| **with_history** | **bool**| Indicates, whether DNS zone history should be displayed in output. | [optional] [default to false] |
| **with_dnskey** | **bool**| Indicates, whether DNSSEC keys should be displayed in output. | [optional] |
| **provider** | **string**| Name of the DNS provider. Set provider&#x3D;sectigo in case of only sectigo premium DNS zone should be retrieved. | [optional] |

### Return type

[**\Panthera\Openprovider\Model\ZoneGetZoneResponse**](../Model/ZoneGetZoneResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listZones()`

```php
listZones($limit, $offset, $order_by_creation_date, $order_by_modification_date, $order_by_name, $type, $name_pattern, $with_records, $with_history, $with_dnskey, $provider): \Panthera\Openprovider\Model\ZoneListZonesResponse
```

List zones

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Panthera\Openprovider\Api\ZoneServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Limits the number of objects in the output. (default value: 100, maximum value: 500).
$offset = 56; // int | Used to retrieve all objects from a certain offset up to the. (default value: 0).
$order_by_creation_date = 'desc'; // string | Sorting type (asc/desc).
$order_by_modification_date = 'order_by_modification_date_example'; // string | Sorting type (asc/desc).
$order_by_name = 'order_by_name_example'; // string | Sorting type (asc/desc).
$type = 'type_example'; // string | DNS zone type (master or slave).
$name_pattern = 'name_pattern_example'; // string | DNS zone name pattern. Wildcard (*) can be used.
$with_records = True; // bool | Indicates, whether DNS records should be displayed in output.
$with_history = True; // bool | Indicates, whether DNS zone history should be displayed in output.
$with_dnskey = True; // bool | Indicates, whether DNSSEC keys should be displayed in output.
$provider = 'provider_example'; // string | Name of the DNS provider. Set provider=sectigo in case of only sectigo premium DNS zone should be retrieved.

try {
    $result = $apiInstance->listZones($limit, $offset, $order_by_creation_date, $order_by_modification_date, $order_by_name, $type, $name_pattern, $with_records, $with_history, $with_dnskey, $provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneServiceApi->listZones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects in the output. (default value: 100, maximum value: 500). | [optional] [default to 100] |
| **offset** | **int**| Used to retrieve all objects from a certain offset up to the. (default value: 0). | [optional] |
| **order_by_creation_date** | **string**| Sorting type (asc/desc). | [optional] [default to &#39;desc&#39;] |
| **order_by_modification_date** | **string**| Sorting type (asc/desc). | [optional] |
| **order_by_name** | **string**| Sorting type (asc/desc). | [optional] |
| **type** | **string**| DNS zone type (master or slave). | [optional] |
| **name_pattern** | **string**| DNS zone name pattern. Wildcard (*) can be used. | [optional] |
| **with_records** | **bool**| Indicates, whether DNS records should be displayed in output. | [optional] |
| **with_history** | **bool**| Indicates, whether DNS zone history should be displayed in output. | [optional] |
| **with_dnskey** | **bool**| Indicates, whether DNSSEC keys should be displayed in output. | [optional] |
| **provider** | **string**| Name of the DNS provider. Set provider&#x3D;sectigo in case of only sectigo premium DNS zone should be retrieved. | [optional] |

### Return type

[**\Panthera\Openprovider\Model\ZoneListZonesResponse**](../Model/ZoneListZonesResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateZone()`

```php
updateZone($name, $body): \Panthera\Openprovider\Model\ZoneZoneBoolResponse
```

Update zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Panthera\Openprovider\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Panthera\Openprovider\Api\ZoneServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the domain to which DNS zone corresponds
$body = new \Panthera\Openprovider\Model\ZoneUpdateZoneRequest(); // \Panthera\Openprovider\Model\ZoneUpdateZoneRequest

try {
    $result = $apiInstance->updateZone($name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZoneServiceApi->updateZone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the domain to which DNS zone corresponds | |
| **body** | [**\Panthera\Openprovider\Model\ZoneUpdateZoneRequest**](../Model/ZoneUpdateZoneRequest.md)|  | |

### Return type

[**\Panthera\Openprovider\Model\ZoneZoneBoolResponse**](../Model/ZoneZoneBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
