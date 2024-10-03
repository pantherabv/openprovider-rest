<?php
/**
 * CsrCreateCsrRequest
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
 * CsrCreateCsrRequest Class Doc Comment
 *
 * @category Class
 * @package  Panthera\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CsrCreateCsrRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'csrCreateCsrRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bits' => 'int',
        'common_name' => 'string',
        'country' => 'string',
        'email' => 'string',
        'locality' => 'string',
        'organization' => 'string',
        'signature_hash_algorithm' => 'string',
        'state' => 'string',
        'subject_alternative_name' => 'string[]',
        'unit' => 'string',
        'with_config' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bits' => 'int32',
        'common_name' => null,
        'country' => null,
        'email' => null,
        'locality' => null,
        'organization' => null,
        'signature_hash_algorithm' => null,
        'state' => null,
        'subject_alternative_name' => null,
        'unit' => null,
        'with_config' => 'boolean'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bits' => false,
        'common_name' => false,
        'country' => false,
        'email' => false,
        'locality' => false,
        'organization' => false,
        'signature_hash_algorithm' => false,
        'state' => false,
        'subject_alternative_name' => false,
        'unit' => false,
        'with_config' => false
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
        'bits' => 'bits',
        'common_name' => 'common_name',
        'country' => 'country',
        'email' => 'email',
        'locality' => 'locality',
        'organization' => 'organization',
        'signature_hash_algorithm' => 'signature_hash_algorithm',
        'state' => 'state',
        'subject_alternative_name' => 'subject_alternative_name',
        'unit' => 'unit',
        'with_config' => 'with_config'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bits' => 'setBits',
        'common_name' => 'setCommonName',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'locality' => 'setLocality',
        'organization' => 'setOrganization',
        'signature_hash_algorithm' => 'setSignatureHashAlgorithm',
        'state' => 'setState',
        'subject_alternative_name' => 'setSubjectAlternativeName',
        'unit' => 'setUnit',
        'with_config' => 'setWithConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bits' => 'getBits',
        'common_name' => 'getCommonName',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'locality' => 'getLocality',
        'organization' => 'getOrganization',
        'signature_hash_algorithm' => 'getSignatureHashAlgorithm',
        'state' => 'getState',
        'subject_alternative_name' => 'getSubjectAlternativeName',
        'unit' => 'getUnit',
        'with_config' => 'getWithConfig'
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
        $this->setIfExists('bits', $data ?? [], null);
        $this->setIfExists('common_name', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('locality', $data ?? [], null);
        $this->setIfExists('organization', $data ?? [], null);
        $this->setIfExists('signature_hash_algorithm', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('subject_alternative_name', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('with_config', $data ?? [], false);
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
     * Gets bits
     *
     * @return int|null
     */
    public function getBits()
    {
        return $this->container['bits'];
    }

    /**
     * Sets bits
     *
     * @param int|null $bits bits
     *
     * @return self
     */
    public function setBits($bits)
    {
        if (is_null($bits)) {
            throw new \InvalidArgumentException('non-nullable bits cannot be null');
        }
        $this->container['bits'] = $bits;

        return $this;
    }

    /**
     * Gets common_name
     *
     * @return string|null
     */
    public function getCommonName()
    {
        return $this->container['common_name'];
    }

    /**
     * Sets common_name
     *
     * @param string|null $common_name common_name
     *
     * @return self
     */
    public function setCommonName($common_name)
    {
        if (is_null($common_name)) {
            throw new \InvalidArgumentException('non-nullable common_name cannot be null');
        }
        $this->container['common_name'] = $common_name;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string|null $locality locality
     *
     * @return self
     */
    public function setLocality($locality)
    {
        if (is_null($locality)) {
            throw new \InvalidArgumentException('non-nullable locality cannot be null');
        }
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string|null $organization organization
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        if (is_null($organization)) {
            throw new \InvalidArgumentException('non-nullable organization cannot be null');
        }
        $this->container['organization'] = $organization;

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
     * @param string|null $signature_hash_algorithm Redundant field, can be used as 'sha2'.
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
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets subject_alternative_name
     *
     * @return string[]|null
     */
    public function getSubjectAlternativeName()
    {
        return $this->container['subject_alternative_name'];
    }

    /**
     * Sets subject_alternative_name
     *
     * @param string[]|null $subject_alternative_name subject_alternative_name
     *
     * @return self
     */
    public function setSubjectAlternativeName($subject_alternative_name)
    {
        if (is_null($subject_alternative_name)) {
            throw new \InvalidArgumentException('non-nullable subject_alternative_name cannot be null');
        }
        $this->container['subject_alternative_name'] = $subject_alternative_name;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string|null $unit unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        if (is_null($unit)) {
            throw new \InvalidArgumentException('non-nullable unit cannot be null');
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets with_config
     *
     * @return bool|null
     */
    public function getWithConfig()
    {
        return $this->container['with_config'];
    }

    /**
     * Sets with_config
     *
     * @param bool|null $with_config with_config
     *
     * @return self
     */
    public function setWithConfig($with_config)
    {
        if (is_null($with_config)) {
            throw new \InvalidArgumentException('non-nullable with_config cannot be null');
        }
        $this->container['with_config'] = $with_config;

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


