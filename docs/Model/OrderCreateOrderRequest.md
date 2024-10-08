# # OrderCreateOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approver_email** | **string** | Email for domain ownership verification. Should start with well-known generic name like admin@, hostmater@, administrator@, etc. | [optional]
**autorenew** | **string** |  | [optional] [default to 'off']
**csr** | **string** |  | [optional]
**domain_amount** | **int** |  | [optional]
**domain_validation_methods** | [**\Panthera\Openprovider\Model\OrderSslOrderDomainValidationMethods[]**](OrderSslOrderDomainValidationMethods.md) |  | [optional]
**enable_dns_automation** | **bool** |  | [optional] [default to false]
**host_names** | **string[]** |  | [optional]
**organization_handle** | **string** |  | [optional]
**period** | **int** |  | [optional]
**product_id** | **int** |  | [optional]
**signature_hash_algorithm** | **string** |  | [optional]
**software_id** | **string** |  | [optional]
**start_provision** | **bool** |  | [optional] [default to false]
**technical_handle** | **string** |  | [optional]
**wildcard_domain_amount** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
