<?php
/**
 * SettingsTransactionFee
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
 * SettingsTransactionFee Class Doc Comment
 *
 * @category Class
 * @package  Panthera\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SettingsTransactionFee implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'settingsTransactionFee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bank' => 'float',
        'credit_card' => 'float',
        'ideal' => 'float',
        'paypal' => 'float',
        'western_union' => 'float',
        'yandex' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bank' => 'double',
        'credit_card' => 'double',
        'ideal' => 'double',
        'paypal' => 'double',
        'western_union' => 'double',
        'yandex' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bank' => false,
        'credit_card' => false,
        'ideal' => false,
        'paypal' => false,
        'western_union' => false,
        'yandex' => false
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
        'bank' => 'bank',
        'credit_card' => 'credit_card',
        'ideal' => 'ideal',
        'paypal' => 'paypal',
        'western_union' => 'western_union',
        'yandex' => 'yandex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank' => 'setBank',
        'credit_card' => 'setCreditCard',
        'ideal' => 'setIdeal',
        'paypal' => 'setPaypal',
        'western_union' => 'setWesternUnion',
        'yandex' => 'setYandex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank' => 'getBank',
        'credit_card' => 'getCreditCard',
        'ideal' => 'getIdeal',
        'paypal' => 'getPaypal',
        'western_union' => 'getWesternUnion',
        'yandex' => 'getYandex'
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
        $this->setIfExists('bank', $data ?? [], null);
        $this->setIfExists('credit_card', $data ?? [], null);
        $this->setIfExists('ideal', $data ?? [], null);
        $this->setIfExists('paypal', $data ?? [], null);
        $this->setIfExists('western_union', $data ?? [], null);
        $this->setIfExists('yandex', $data ?? [], null);
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
     * Gets bank
     *
     * @return float|null
     */
    public function getBank()
    {
        return $this->container['bank'];
    }

    /**
     * Sets bank
     *
     * @param float|null $bank bank
     *
     * @return self
     */
    public function setBank($bank)
    {
        if (is_null($bank)) {
            throw new \InvalidArgumentException('non-nullable bank cannot be null');
        }
        $this->container['bank'] = $bank;

        return $this;
    }

    /**
     * Gets credit_card
     *
     * @return float|null
     */
    public function getCreditCard()
    {
        return $this->container['credit_card'];
    }

    /**
     * Sets credit_card
     *
     * @param float|null $credit_card credit_card
     *
     * @return self
     */
    public function setCreditCard($credit_card)
    {
        if (is_null($credit_card)) {
            throw new \InvalidArgumentException('non-nullable credit_card cannot be null');
        }
        $this->container['credit_card'] = $credit_card;

        return $this;
    }

    /**
     * Gets ideal
     *
     * @return float|null
     */
    public function getIdeal()
    {
        return $this->container['ideal'];
    }

    /**
     * Sets ideal
     *
     * @param float|null $ideal ideal
     *
     * @return self
     */
    public function setIdeal($ideal)
    {
        if (is_null($ideal)) {
            throw new \InvalidArgumentException('non-nullable ideal cannot be null');
        }
        $this->container['ideal'] = $ideal;

        return $this;
    }

    /**
     * Gets paypal
     *
     * @return float|null
     */
    public function getPaypal()
    {
        return $this->container['paypal'];
    }

    /**
     * Sets paypal
     *
     * @param float|null $paypal paypal
     *
     * @return self
     */
    public function setPaypal($paypal)
    {
        if (is_null($paypal)) {
            throw new \InvalidArgumentException('non-nullable paypal cannot be null');
        }
        $this->container['paypal'] = $paypal;

        return $this;
    }

    /**
     * Gets western_union
     *
     * @return float|null
     */
    public function getWesternUnion()
    {
        return $this->container['western_union'];
    }

    /**
     * Sets western_union
     *
     * @param float|null $western_union western_union
     *
     * @return self
     */
    public function setWesternUnion($western_union)
    {
        if (is_null($western_union)) {
            throw new \InvalidArgumentException('non-nullable western_union cannot be null');
        }
        $this->container['western_union'] = $western_union;

        return $this;
    }

    /**
     * Gets yandex
     *
     * @return float|null
     */
    public function getYandex()
    {
        return $this->container['yandex'];
    }

    /**
     * Sets yandex
     *
     * @param float|null $yandex yandex
     *
     * @return self
     */
    public function setYandex($yandex)
    {
        if (is_null($yandex)) {
            throw new \InvalidArgumentException('non-nullable yandex cannot be null');
        }
        $this->container['yandex'] = $yandex;

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


