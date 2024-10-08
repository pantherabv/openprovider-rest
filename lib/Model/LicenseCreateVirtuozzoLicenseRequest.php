<?php
/**
 * LicenseCreateVirtuozzoLicenseRequest
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
 * LicenseCreateVirtuozzoLicenseRequest Class Doc Comment
 *
 * @category Class
 * @package  Panthera\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LicenseCreateVirtuozzoLicenseRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'licenseCreateVirtuozzoLicenseRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attached_keys' => 'string[]',
        'comment' => 'string',
        'ip_address_binding' => 'string',
        'items' => 'string[]',
        'parent_key_id' => 'int',
        'pcs_capacity' => 'int',
        'period' => 'int',
        'restrict_ip_binding' => 'bool',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attached_keys' => null,
        'comment' => null,
        'ip_address_binding' => null,
        'items' => null,
        'parent_key_id' => 'int32',
        'pcs_capacity' => 'int32',
        'period' => 'int32',
        'restrict_ip_binding' => 'boolean',
        'title' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'attached_keys' => false,
        'comment' => false,
        'ip_address_binding' => false,
        'items' => false,
        'parent_key_id' => false,
        'pcs_capacity' => false,
        'period' => false,
        'restrict_ip_binding' => false,
        'title' => false
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
        'attached_keys' => 'attached_keys',
        'comment' => 'comment',
        'ip_address_binding' => 'ip_address_binding',
        'items' => 'items',
        'parent_key_id' => 'parent_key_id',
        'pcs_capacity' => 'pcs_capacity',
        'period' => 'period',
        'restrict_ip_binding' => 'restrict_ip_binding',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attached_keys' => 'setAttachedKeys',
        'comment' => 'setComment',
        'ip_address_binding' => 'setIpAddressBinding',
        'items' => 'setItems',
        'parent_key_id' => 'setParentKeyId',
        'pcs_capacity' => 'setPcsCapacity',
        'period' => 'setPeriod',
        'restrict_ip_binding' => 'setRestrictIpBinding',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attached_keys' => 'getAttachedKeys',
        'comment' => 'getComment',
        'ip_address_binding' => 'getIpAddressBinding',
        'items' => 'getItems',
        'parent_key_id' => 'getParentKeyId',
        'pcs_capacity' => 'getPcsCapacity',
        'period' => 'getPeriod',
        'restrict_ip_binding' => 'getRestrictIpBinding',
        'title' => 'getTitle'
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
        $this->setIfExists('attached_keys', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('ip_address_binding', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('parent_key_id', $data ?? [], null);
        $this->setIfExists('pcs_capacity', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('restrict_ip_binding', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
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
     * Gets attached_keys
     *
     * @return string[]|null
     */
    public function getAttachedKeys()
    {
        return $this->container['attached_keys'];
    }

    /**
     * Sets attached_keys
     *
     * @param string[]|null $attached_keys attached_keys
     *
     * @return self
     */
    public function setAttachedKeys($attached_keys)
    {
        if (is_null($attached_keys)) {
            throw new \InvalidArgumentException('non-nullable attached_keys cannot be null');
        }
        $this->container['attached_keys'] = $attached_keys;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets ip_address_binding
     *
     * @return string|null
     */
    public function getIpAddressBinding()
    {
        return $this->container['ip_address_binding'];
    }

    /**
     * Sets ip_address_binding
     *
     * @param string|null $ip_address_binding ip_address_binding
     *
     * @return self
     */
    public function setIpAddressBinding($ip_address_binding)
    {
        if (is_null($ip_address_binding)) {
            throw new \InvalidArgumentException('non-nullable ip_address_binding cannot be null');
        }
        $this->container['ip_address_binding'] = $ip_address_binding;

        return $this;
    }

    /**
     * Gets items
     *
     * @return string[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param string[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets parent_key_id
     *
     * @return int|null
     */
    public function getParentKeyId()
    {
        return $this->container['parent_key_id'];
    }

    /**
     * Sets parent_key_id
     *
     * @param int|null $parent_key_id parent_key_id
     *
     * @return self
     */
    public function setParentKeyId($parent_key_id)
    {
        if (is_null($parent_key_id)) {
            throw new \InvalidArgumentException('non-nullable parent_key_id cannot be null');
        }
        $this->container['parent_key_id'] = $parent_key_id;

        return $this;
    }

    /**
     * Gets pcs_capacity
     *
     * @return int|null
     */
    public function getPcsCapacity()
    {
        return $this->container['pcs_capacity'];
    }

    /**
     * Sets pcs_capacity
     *
     * @param int|null $pcs_capacity pcs_capacity
     *
     * @return self
     */
    public function setPcsCapacity($pcs_capacity)
    {
        if (is_null($pcs_capacity)) {
            throw new \InvalidArgumentException('non-nullable pcs_capacity cannot be null');
        }
        $this->container['pcs_capacity'] = $pcs_capacity;

        return $this;
    }

    /**
     * Gets period
     *
     * @return int|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int|null $period period
     *
     * @return self
     */
    public function setPeriod($period)
    {
        if (is_null($period)) {
            throw new \InvalidArgumentException('non-nullable period cannot be null');
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets restrict_ip_binding
     *
     * @return bool|null
     */
    public function getRestrictIpBinding()
    {
        return $this->container['restrict_ip_binding'];
    }

    /**
     * Sets restrict_ip_binding
     *
     * @param bool|null $restrict_ip_binding restrict_ip_binding
     *
     * @return self
     */
    public function setRestrictIpBinding($restrict_ip_binding)
    {
        if (is_null($restrict_ip_binding)) {
            throw new \InvalidArgumentException('non-nullable restrict_ip_binding cannot be null');
        }
        $this->container['restrict_ip_binding'] = $restrict_ip_binding;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

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


