# OpenAPI\Client\NsGroupServiceApi

All URIs are relative to https://api.openprovider.eu, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createGroup()**](NsGroupServiceApi.md#createGroup) | **POST** /v1beta/dns/nameservers/groups | Create group |
| [**deleteGroup()**](NsGroupServiceApi.md#deleteGroup) | **DELETE** /v1beta/dns/nameservers/groups/{ns_group} | Delete group |
| [**getGroup()**](NsGroupServiceApi.md#getGroup) | **GET** /v1beta/dns/nameservers/groups/{ns_group} | Get group |
| [**listGroups()**](NsGroupServiceApi.md#listGroups) | **GET** /v1beta/dns/nameservers/groups | List groups |
| [**updateGroup()**](NsGroupServiceApi.md#updateGroup) | **PUT** /v1beta/dns/nameservers/groups/{ns_group} | Update group |


## `createGroup()`

```php
createGroup($body): \OpenAPI\Client\Model\NsGroupCreateGroupResponse
```

Create group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NsGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\NsGroupCreateGroupRequest(); // \OpenAPI\Client\Model\NsGroupCreateGroupRequest

try {
    $result = $apiInstance->createGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NsGroupServiceApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\NsGroupCreateGroupRequest**](../Model/NsGroupCreateGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NsGroupCreateGroupResponse**](../Model/NsGroupCreateGroupResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGroup()`

```php
deleteGroup($ns_group): \OpenAPI\Client\Model\NsGroupGroupBoolResponse
```

Delete group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NsGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ns_group = 'ns_group_example'; // string | Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.

try {
    $result = $apiInstance->deleteGroup($ns_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NsGroupServiceApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ns_group** | **string**| Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains. | |

### Return type

[**\OpenAPI\Client\Model\NsGroupGroupBoolResponse**](../Model/NsGroupGroupBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGroup()`

```php
getGroup($ns_group, $id): \OpenAPI\Client\Model\NsGroupGetGroupResponse
```

Get group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NsGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ns_group = 'ns_group_example'; // string | Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
$id = 56; // int | Nameserver group ID.

try {
    $result = $apiInstance->getGroup($ns_group, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NsGroupServiceApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ns_group** | **string**| Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains. | |
| **id** | **int**| Nameserver group ID. | [optional] |

### Return type

[**\OpenAPI\Client\Model\NsGroupGetGroupResponse**](../Model/NsGroupGetGroupResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listGroups()`

```php
listGroups($limit, $offset, $order_by_ns_group, $order_by_domain_count, $order_by_ns_count, $with_domain_count, $with_ns_count, $ns_group_pattern, $ns_name_pattern, $ns_ip_pattern): \OpenAPI\Client\Model\NsGroupListGroupsResponse
```

List groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NsGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 100; // int | Limits the number of objects in the output.
$offset = 56; // int | Used to retrieve all objects from a certain offset up to the limit. (default value: 0).
$order_by_ns_group = 'asc'; // string | Sorting type (asc/desc).
$order_by_domain_count = 'order_by_domain_count_example'; // string | Sorting type (asc/desc).
$order_by_ns_count = 'order_by_ns_count_example'; // string | Sorting type (asc/desc).
$with_domain_count = True; // bool | Indicates if number of domains associated with the NS group should be returned.
$with_ns_count = True; // bool | Indicates if number of nameservers associated with the NS group should be returned.
$ns_group_pattern = 'ns_group_pattern_example'; // string | NS group name pattern. Wildcard (*) can be used.
$ns_name_pattern = 'ns_name_pattern_example'; // string | Nameserver name pattern. Wildcard (*) can be used.
$ns_ip_pattern = 'ns_ip_pattern_example'; // string | Nameserver IP address pattern. Wildcard (*) can be used.

try {
    $result = $apiInstance->listGroups($limit, $offset, $order_by_ns_group, $order_by_domain_count, $order_by_ns_count, $with_domain_count, $with_ns_count, $ns_group_pattern, $ns_name_pattern, $ns_ip_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NsGroupServiceApi->listGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects in the output. | [optional] [default to 100] |
| **offset** | **int**| Used to retrieve all objects from a certain offset up to the limit. (default value: 0). | [optional] |
| **order_by_ns_group** | **string**| Sorting type (asc/desc). | [optional] [default to &#39;asc&#39;] |
| **order_by_domain_count** | **string**| Sorting type (asc/desc). | [optional] |
| **order_by_ns_count** | **string**| Sorting type (asc/desc). | [optional] |
| **with_domain_count** | **bool**| Indicates if number of domains associated with the NS group should be returned. | [optional] |
| **with_ns_count** | **bool**| Indicates if number of nameservers associated with the NS group should be returned. | [optional] |
| **ns_group_pattern** | **string**| NS group name pattern. Wildcard (*) can be used. | [optional] |
| **ns_name_pattern** | **string**| Nameserver name pattern. Wildcard (*) can be used. | [optional] |
| **ns_ip_pattern** | **string**| Nameserver IP address pattern. Wildcard (*) can be used. | [optional] |

### Return type

[**\OpenAPI\Client\Model\NsGroupListGroupsResponse**](../Model/NsGroupListGroupsResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroup()`

```php
updateGroup($ns_group, $body): \OpenAPI\Client\Model\NsGroupGroupBoolResponse
```

Update group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NsGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ns_group = 'ns_group_example'; // string | Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
$body = new \OpenAPI\Client\Model\NsGroupUpdateGroupRequest(); // \OpenAPI\Client\Model\NsGroupUpdateGroupRequest

try {
    $result = $apiInstance->updateGroup($ns_group, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NsGroupServiceApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ns_group** | **string**| Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains. | |
| **body** | [**\OpenAPI\Client\Model\NsGroupUpdateGroupRequest**](../Model/NsGroupUpdateGroupRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NsGroupGroupBoolResponse**](../Model/NsGroupGroupBoolResponse.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
