<?php
/**
 * SeDomainUpdateDomainRequest
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
 * SeDomainUpdateDomainRequest Class Doc Comment
 *
 * @category Class
 * @package  Panthera\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SeDomainUpdateDomainRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'se_domainUpdateDomainRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aliases' => '\Panthera\Openprovider\Model\SeDomainAliasUpdates',
        'bundle' => 'bool',
        'destinations' => '\Panthera\Openprovider\Model\SeDomainDestination[]',
        'domain_name' => 'string',
        'products' => '\Panthera\Openprovider\Model\SeDomainProducts'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aliases' => null,
        'bundle' => 'boolean',
        'destinations' => null,
        'domain_name' => null,
        'products' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'aliases' => false,
        'bundle' => false,
        'destinations' => false,
        'domain_name' => false,
        'products' => false
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
        'aliases' => 'aliases',
        'bundle' => 'bundle',
        'destinations' => 'destinations',
        'domain_name' => 'domain_name',
        'products' => 'products'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aliases' => 'setAliases',
        'bundle' => 'setBundle',
        'destinations' => 'setDestinations',
        'domain_name' => 'setDomainName',
        'products' => 'setProducts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aliases' => 'getAliases',
        'bundle' => 'getBundle',
        'destinations' => 'getDestinations',
        'domain_name' => 'getDomainName',
        'products' => 'getProducts'
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
        $this->setIfExists('aliases', $data ?? [], null);
        $this->setIfExists('bundle', $data ?? [], null);
        $this->setIfExists('destinations', $data ?? [], null);
        $this->setIfExists('domain_name', $data ?? [], null);
        $this->setIfExists('products', $data ?? [], null);
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
     * Gets aliases
     *
     * @return \Panthera\Openprovider\Model\SeDomainAliasUpdates|null
     */
    public function getAliases()
    {
        return $this->container['aliases'];
    }

    /**
     * Sets aliases
     *
     * @param \Panthera\Openprovider\Model\SeDomainAliasUpdates|null $aliases aliases
     *
     * @return self
     */
    public function setAliases($aliases)
    {
        if (is_null($aliases)) {
            throw new \InvalidArgumentException('non-nullable aliases cannot be null');
        }
        $this->container['aliases'] = $aliases;

        return $this;
    }

    /**
     * Gets bundle
     *
     * @return bool|null
     */
    public function getBundle()
    {
        return $this->container['bundle'];
    }

    /**
     * Sets bundle
     *
     * @param bool|null $bundle bundle
     *
     * @return self
     */
    public function setBundle($bundle)
    {
        if (is_null($bundle)) {
            throw new \InvalidArgumentException('non-nullable bundle cannot be null');
        }
        $this->container['bundle'] = $bundle;

        return $this;
    }

    /**
     * Gets destinations
     *
     * @return \Panthera\Openprovider\Model\SeDomainDestination[]|null
     */
    public function getDestinations()
    {
        return $this->container['destinations'];
    }

    /**
     * Sets destinations
     *
     * @param \Panthera\Openprovider\Model\SeDomainDestination[]|null $destinations destinations
     *
     * @return self
     */
    public function setDestinations($destinations)
    {
        if (is_null($destinations)) {
            throw new \InvalidArgumentException('non-nullable destinations cannot be null');
        }
        $this->container['destinations'] = $destinations;

        return $this;
    }

    /**
     * Gets domain_name
     *
     * @return string|null
     */
    public function getDomainName()
    {
        return $this->container['domain_name'];
    }

    /**
     * Sets domain_name
     *
     * @param string|null $domain_name domain_name
     *
     * @return self
     */
    public function setDomainName($domain_name)
    {
        if (is_null($domain_name)) {
            throw new \InvalidArgumentException('non-nullable domain_name cannot be null');
        }
        $this->container['domain_name'] = $domain_name;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \Panthera\Openprovider\Model\SeDomainProducts|null
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \Panthera\Openprovider\Model\SeDomainProducts|null $products products
     *
     * @return self
     */
    public function setProducts($products)
    {
        if (is_null($products)) {
            throw new \InvalidArgumentException('non-nullable products cannot be null');
        }
        $this->container['products'] = $products;

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


