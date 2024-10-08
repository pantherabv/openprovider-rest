<?php
/**
 * OrderUpdateOrderRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Panthera\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * REST API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Panthera\Openprovider\Model;

use \ArrayAccess;
use \Panthera\Openprovider\ObjectSerializer;

/**
 * OrderUpdateOrderRequest Class Doc Comment
 *
 * @category Class
 * @package  Panthera\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderUpdateOrderRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'orderUpdateOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'approver_email' => 'string',
        'autorenew' => 'string',
        'csr' => 'string',
        'domain_validation_methods' => '\Panthera\Openprovider\Model\OrderSslOrderDomainValidationMethods[]',
        'enable_dns_automation' => 'bool',
        'host_names' => 'string[]',
        'id' => 'int',
        'organization_handle' => 'string',
        'signature_hash_algorithm' => 'string',
        'software_id' => 'string',
        'start_provision' => 'bool',
        'technical_handle' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'approver_email' => null,
        'autorenew' => null,
        'csr' => null,
        'domain_validation_methods' => null,
        'enable_dns_automation' => 'boolean',
        'host_names' => null,
        'id' => 'int32',
        'organization_handle' => null,
        'signature_hash_algorithm' => null,
        'software_id' => null,
        'start_provision' => 'boolean',
        'technical_handle' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'approver_email' => false,
        'autorenew' => false,
        'csr' => false,
        'domain_validation_methods' => false,
        'enable_dns_automation' => false,
        'host_names' => false,
        'id' => false,
        'organization_handle' => false,
        'signature_hash_algorithm' => false,
        'software_id' => false,
        'start_provision' => false,
        'technical_handle' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'approver_email' => 'approver_email',
        'autorenew' => 'autorenew',
        'csr' => 'csr',
        'domain_validation_methods' => 'domain_validation_methods',
        'enable_dns_automation' => 'enable_dns_automation',
        'host_names' => 'host_names',
        'id' => 'id',
        'organization_handle' => 'organization_handle',
        'signature_hash_algorithm' => 'signature_hash_algorithm',
        'software_id' => 'software_id',
        'start_provision' => 'start_provision',
        'technical_handle' => 'technical_handle'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approver_email' => 'setApproverEmail',
        'autorenew' => 'setAutorenew',
        'csr' => 'setCsr',
        'domain_validation_methods' => 'setDomainValidationMethods',
        'enable_dns_automation' => 'setEnableDnsAutomation',
        'host_names' => 'setHostNames',
        'id' => 'setId',
        'organization_handle' => 'setOrganizationHandle',
        'signature_hash_algorithm' => 'setSignatureHashAlgorithm',
        'software_id' => 'setSoftwareId',
        'start_provision' => 'setStartProvision',
        'technical_handle' => 'setTechnicalHandle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approver_email' => 'getApproverEmail',
        'autorenew' => 'getAutorenew',
        'csr' => 'getCsr',
        'domain_validation_methods' => 'getDomainValidationMethods',
        'enable_dns_automation' => 'getEnableDnsAutomation',
        'host_names' => 'getHostNames',
        'id' => 'getId',
        'organization_handle' => 'getOrganizationHandle',
        'signature_hash_algorithm' => 'getSignatureHashAlgorithm',
        'software_id' => 'getSoftwareId',
        'start_provision' => 'getStartProvision',
        'technical_handle' => 'getTechnicalHandle'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('approver_email', $data ?? [], null);
        $this->setIfExists('autorenew', $data ?? [], null);
        $this->setIfExists('csr', $data ?? [], null);
        $this->setIfExists('domain_validation_methods', $data ?? [], null);
        $this->setIfExists('enable_dns_automation', $data ?? [], false);
        $this->setIfExists('host_names', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('organization_handle', $data ?? [], null);
        $this->setIfExists('signature_hash_algorithm', $data ?? [], null);
        $this->setIfExists('software_id', $data ?? [], null);
        $this->setIfExists('start_provision', $data ?? [], null);
        $this->setIfExists('technical_handle', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets approver_email
     *
     * @return string|null
     */
    public function getApproverEmail()
    {
        return $this->container['approver_email'];
    }

    /**
     * Sets approver_email
     *
     * @param string|null $approver_email Email for domain ownership verification. Should start with well-known generic name like admin@, hostmater@, administrator@, etc.
     *
     * @return self
     */
    public function setApproverEmail($approver_email)
    {
        if (is_null($approver_email)) {
            throw new \InvalidArgumentException('non-nullable approver_email cannot be null');
        }
        $this->container['approver_email'] = $approver_email;

        return $this;
    }

    /**
     * Gets autorenew
     *
     * @return string|null
     */
    public function getAutorenew()
    {
        return $this->container['autorenew'];
    }

    /**
     * Sets autorenew
     *
     * @param string|null $autorenew autorenew
     *
     * @return self
     */
    public function setAutorenew($autorenew)
    {
        if (is_null($autorenew)) {
            throw new \InvalidArgumentException('non-nullable autorenew cannot be null');
        }
        $this->container['autorenew'] = $autorenew;

        return $this;
    }

    /**
     * Gets csr
     *
     * @return string|null
     */
    public function getCsr()
    {
        return $this->container['csr'];
    }

    /**
     * Sets csr
     *
     * @param string|null $csr csr
     *
     * @return self
     */
    public function setCsr($csr)
    {
        if (is_null($csr)) {
            throw new \InvalidArgumentException('non-nullable csr cannot be null');
        }
        $this->container['csr'] = $csr;

        return $this;
    }

    /**
     * Gets domain_validation_methods
     *
     * @return \Panthera\Openprovider\Model\OrderSslOrderDomainValidationMethods[]|null
     */
    public function getDomainValidationMethods()
    {
        return $this->container['domain_validation_methods'];
    }

    /**
     * Sets domain_validation_methods
     *
     * @param \Panthera\Openprovider\Model\OrderSslOrderDomainValidationMethods[]|null $domain_validation_methods domain_validation_methods
     *
     * @return self
     */
    public function setDomainValidationMethods($domain_validation_methods)
    {
        if (is_null($domain_validation_methods)) {
            throw new \InvalidArgumentException('non-nullable domain_validation_methods cannot be null');
        }
        $this->container['domain_validation_methods'] = $domain_validation_methods;

        return $this;
    }

    /**
     * Gets enable_dns_automation
     *
     * @return bool|null
     */
    public function getEnableDnsAutomation()
    {
        return $this->container['enable_dns_automation'];
    }

    /**
     * Sets enable_dns_automation
     *
     * @param bool|null $enable_dns_automation enable_dns_automation
     *
     * @return self
     */
    public function setEnableDnsAutomation($enable_dns_automation)
    {
        if (is_null($enable_dns_automation)) {
            throw new \InvalidArgumentException('non-nullable enable_dns_automation cannot be null');
        }
        $this->container['enable_dns_automation'] = $enable_dns_automation;

        return $this;
    }

    /**
     * Gets host_names
     *
     * @return string[]|null
     */
    public function getHostNames()
    {
        return $this->container['host_names'];
    }

    /**
     * Sets host_names
     *
     * @param string[]|null $host_names host_names
     *
     * @return self
     */
    public function setHostNames($host_names)
    {
        if (is_null($host_names)) {
            throw new \InvalidArgumentException('non-nullable host_names cannot be null');
        }
        $this->container['host_names'] = $host_names;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets organization_handle
     *
     * @return string|null
     */
    public function getOrganizationHandle()
    {
        return $this->container['organization_handle'];
    }

    /**
     * Sets organization_handle
     *
     * @param string|null $organization_handle organization_handle
     *
     * @return self
     */
    public function setOrganizationHandle($organization_handle)
    {
        if (is_null($organization_handle)) {
            throw new \InvalidArgumentException('non-nullable organization_handle cannot be null');
        }
        $this->container['organization_handle'] = $organization_handle;

        return $this;
    }

    /**
     * Gets signature_hash_algorithm
     *
     * @return string|null
     */
    public function getSignatureHashAlgorithm()
    {
        return $this->container['signature_hash_algorithm'];
    }

    /**
     * Sets signature_hash_algorithm
     *
     * @param string|null $signature_hash_algorithm signature_hash_algorithm
     *
     * @return self
     */
    public function setSignatureHashAlgorithm($signature_hash_algorithm)
    {
        if (is_null($signature_hash_algorithm)) {
            throw new \InvalidArgumentException('non-nullable signature_hash_algorithm cannot be null');
        }
        $this->container['signature_hash_algorithm'] = $signature_hash_algorithm;

        return $this;
    }

    /**
     * Gets software_id
     *
     * @return string|null
     */
    public function getSoftwareId()
    {
        return $this->container['software_id'];
    }

    /**
     * Sets software_id
     *
     * @param string|null $software_id software_id
     *
     * @return self
     */
    public function setSoftwareId($software_id)
    {
        if (is_null($software_id)) {
            throw new \InvalidArgumentException('non-nullable software_id cannot be null');
        }
        $this->container['software_id'] = $software_id;

        return $this;
    }

    /**
     * Gets start_provision
     *
     * @return bool|null
     */
    public function getStartProvision()
    {
        return $this->container['start_provision'];
    }

    /**
     * Sets start_provision
     *
     * @param bool|null $start_provision start_provision
     *
     * @return self
     */
    public function setStartProvision($start_provision)
    {
        if (is_null($start_provision)) {
            throw new \InvalidArgumentException('non-nullable start_provision cannot be null');
        }
        $this->container['start_provision'] = $start_provision;

        return $this;
    }

    /**
     * Gets technical_handle
     *
     * @return string|null
     */
    public function getTechnicalHandle()
    {
        return $this->container['technical_handle'];
    }

    /**
     * Sets technical_handle
     *
     * @param string|null $technical_handle technical_handle
     *
     * @return self
     */
    public function setTechnicalHandle($technical_handle)
    {
        if (is_null($technical_handle)) {
            throw new \InvalidArgumentException('non-nullable technical_handle cannot be null');
        }
        $this->container['technical_handle'] = $technical_handle;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


