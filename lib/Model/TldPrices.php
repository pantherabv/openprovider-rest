<?php
/**
 * TldPrices
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
 * TldPrices Class Doc Comment
 *
 * @category Class
 * @package  Panthera\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TldPrices implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'tldPrices';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'create_price' => '\Panthera\Openprovider\Model\TldPrice',
        'domicile_price' => '\Panthera\Openprovider\Model\TldPrice',
        'max_period' => 'int',
        'min_period' => 'int',
        'renew_price' => '\Panthera\Openprovider\Model\TldPrice',
        'reseller_price' => '\Panthera\Openprovider\Model\TldPriceWithPromoInfo',
        'restore_price' => '\Panthera\Openprovider\Model\TldPrice',
        'setup_price' => '\Panthera\Openprovider\Model\TldPrice',
        'soft_restore_price' => '\Panthera\Openprovider\Model\TldPrice',
        'trade_price' => '\Panthera\Openprovider\Model\TldPrice',
        'transfer_price' => '\Panthera\Openprovider\Model\TldPrice',
        'update_price' => '\Panthera\Openprovider\Model\TldPrice'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'create_price' => null,
        'domicile_price' => null,
        'max_period' => 'int32',
        'min_period' => 'int32',
        'renew_price' => null,
        'reseller_price' => null,
        'restore_price' => null,
        'setup_price' => null,
        'soft_restore_price' => null,
        'trade_price' => null,
        'transfer_price' => null,
        'update_price' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'create_price' => false,
        'domicile_price' => false,
        'max_period' => false,
        'min_period' => false,
        'renew_price' => false,
        'reseller_price' => false,
        'restore_price' => false,
        'setup_price' => false,
        'soft_restore_price' => false,
        'trade_price' => false,
        'transfer_price' => false,
        'update_price' => false
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
        'create_price' => 'create_price',
        'domicile_price' => 'domicile_price',
        'max_period' => 'max_period',
        'min_period' => 'min_period',
        'renew_price' => 'renew_price',
        'reseller_price' => 'reseller_price',
        'restore_price' => 'restore_price',
        'setup_price' => 'setup_price',
        'soft_restore_price' => 'soft_restore_price',
        'trade_price' => 'trade_price',
        'transfer_price' => 'transfer_price',
        'update_price' => 'update_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_price' => 'setCreatePrice',
        'domicile_price' => 'setDomicilePrice',
        'max_period' => 'setMaxPeriod',
        'min_period' => 'setMinPeriod',
        'renew_price' => 'setRenewPrice',
        'reseller_price' => 'setResellerPrice',
        'restore_price' => 'setRestorePrice',
        'setup_price' => 'setSetupPrice',
        'soft_restore_price' => 'setSoftRestorePrice',
        'trade_price' => 'setTradePrice',
        'transfer_price' => 'setTransferPrice',
        'update_price' => 'setUpdatePrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_price' => 'getCreatePrice',
        'domicile_price' => 'getDomicilePrice',
        'max_period' => 'getMaxPeriod',
        'min_period' => 'getMinPeriod',
        'renew_price' => 'getRenewPrice',
        'reseller_price' => 'getResellerPrice',
        'restore_price' => 'getRestorePrice',
        'setup_price' => 'getSetupPrice',
        'soft_restore_price' => 'getSoftRestorePrice',
        'trade_price' => 'getTradePrice',
        'transfer_price' => 'getTransferPrice',
        'update_price' => 'getUpdatePrice'
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
        $this->setIfExists('create_price', $data ?? [], null);
        $this->setIfExists('domicile_price', $data ?? [], null);
        $this->setIfExists('max_period', $data ?? [], null);
        $this->setIfExists('min_period', $data ?? [], null);
        $this->setIfExists('renew_price', $data ?? [], null);
        $this->setIfExists('reseller_price', $data ?? [], null);
        $this->setIfExists('restore_price', $data ?? [], null);
        $this->setIfExists('setup_price', $data ?? [], null);
        $this->setIfExists('soft_restore_price', $data ?? [], null);
        $this->setIfExists('trade_price', $data ?? [], null);
        $this->setIfExists('transfer_price', $data ?? [], null);
        $this->setIfExists('update_price', $data ?? [], null);
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
     * Gets create_price
     *
     * @return \Panthera\Openprovider\Model\TldPrice|null
     */
    public function getCreatePrice()
    {
        return $this->container['create_price'];
    }

    /**
     * Sets create_price
     *
     * @param \Panthera\Openprovider\Model\TldPrice|null $create_price create_price
     *
     * @return self
     */
    public function setCreatePrice($create_price)
    {
        if (is_null($create_price)) {
            throw new \InvalidArgumentException('non-nullable create_price cannot be null');
        }
        $this->container['create_price'] = $create_price;

        return $this;
    }

    /**
     * Gets domicile_price
     *
     * @return \Panthera\Openprovider\Model\TldPrice|null
     */
    public function getDomicilePrice()
    {
        return $this->container['domicile_price'];
    }

    /**
     * Sets domicile_price
     *
     * @param \Panthera\Openprovider\Model\TldPrice|null $domicile_price domicile_price
     *
     * @return self
     */
    public function setDomicilePrice($domicile_price)
    {
        if (is_null($domicile_price)) {
            throw new \InvalidArgumentException('non-nullable domicile_price cannot be null');
        }
        $this->container['domicile_price'] = $domicile_price;

        return $this;
    }

    /**
     * Gets max_period
     *
     * @return int|null
     */
    public function getMaxPeriod()
    {
        return $this->container['max_period'];
    }

    /**
     * Sets max_period
     *
     * @param int|null $max_period max_period
     *
     * @return self
     */
    public function setMaxPeriod($max_period)
    {
        if (is_null($max_period)) {
            throw new \InvalidArgumentException('non-nullable max_period cannot be null');
        }
        $this->container['max_period'] = $max_period;

        return $this;
    }

    /**
     * Gets min_period
     *
     * @return int|null
     */
    public function getMinPeriod()
    {
        return $this->container['min_period'];
    }

    /**
     * Sets min_period
     *
     * @param int|null $min_period min_period
     *
     * @return self
     */
    public function setMinPeriod($min_period)
    {
        if (is_null($min_period)) {
            throw new \InvalidArgumentException('non-nullable min_period cannot be null');
        }
        $this->container['min_period'] = $min_period;

        return $this;
    }

    /**
     * Gets renew_price
     *
     * @return \Panthera\Openprovider\Model\TldPrice|null
     */
    public function getRenewPrice()
    {
        return $this->container['renew_price'];
    }

    /**
     * Sets renew_price
     *
     * @param \Panthera\Openprovider\Model\TldPrice|null $renew_price renew_price
     *
     * @return self
     */
    public function setRenewPrice($renew_price)
    {
        if (is_null($renew_price)) {
            throw new \InvalidArgumentException('non-nullable renew_price cannot be null');
        }
        $this->container['renew_price'] = $renew_price;

        return $this;
    }

    /**
     * Gets reseller_price
     *
     * @return \Panthera\Openprovider\Model\TldPriceWithPromoInfo|null
     */
    public function getResellerPrice()
    {
        return $this->container['reseller_price'];
    }

    /**
     * Sets reseller_price
     *
     * @param \Panthera\Openprovider\Model\TldPriceWithPromoInfo|null $reseller_price reseller_price
     *
     * @return self
     */
    public function setResellerPrice($reseller_price)
    {
        if (is_null($reseller_price)) {
            throw new \InvalidArgumentException('non-nullable reseller_price cannot be null');
        }
        $this->container['reseller_price'] = $reseller_price;

        return $this;
    }

    /**
     * Gets restore_price
     *
     * @return \Panthera\Openprovider\Model\TldPrice|null
     */
    public function getRestorePrice()
    {
        return $this->container['restore_price'];
    }

    /**
     * Sets restore_price
     *
     * @param \Panthera\Openprovider\Model\TldPrice|null $restore_price restore_price
     *
     * @return self
     */
    public function setRestorePrice($restore_price)
    {
        if (is_null($restore_price)) {
            throw new \InvalidArgumentException('non-nullable restore_price cannot be null');
        }
        $this->container['restore_price'] = $restore_price;

        return $this;
    }

    /**
     * Gets setup_price
     *
     * @return \Panthera\Openprovider\Model\TldPrice|null
     */
    public function getSetupPrice()
    {
        return $this->container['setup_price'];
    }

    /**
     * Sets setup_price
     *
     * @param \Panthera\Openprovider\Model\TldPrice|null $setup_price setup_price
     *
     * @return self
     */
    public function setSetupPrice($setup_price)
    {
        if (is_null($setup_price)) {
            throw new \InvalidArgumentException('non-nullable setup_price cannot be null');
        }
        $this->container['setup_price'] = $setup_price;

        return $this;
    }

    /**
     * Gets soft_restore_price
     *
     * @return \Panthera\Openprovider\Model\TldPrice|null
     */
    public function getSoftRestorePrice()
    {
        return $this->container['soft_restore_price'];
    }

    /**
     * Sets soft_restore_price
     *
     * @param \Panthera\Openprovider\Model\TldPrice|null $soft_restore_price soft_restore_price
     *
     * @return self
     */
    public function setSoftRestorePrice($soft_restore_price)
    {
        if (is_null($soft_restore_price)) {
            throw new \InvalidArgumentException('non-nullable soft_restore_price cannot be null');
        }
        $this->container['soft_restore_price'] = $soft_restore_price;

        return $this;
    }

    /**
     * Gets trade_price
     *
     * @return \Panthera\Openprovider\Model\TldPrice|null
     */
    public function getTradePrice()
    {
        return $this->container['trade_price'];
    }

    /**
     * Sets trade_price
     *
     * @param \Panthera\Openprovider\Model\TldPrice|null $trade_price trade_price
     *
     * @return self
     */
    public function setTradePrice($trade_price)
    {
        if (is_null($trade_price)) {
            throw new \InvalidArgumentException('non-nullable trade_price cannot be null');
        }
        $this->container['trade_price'] = $trade_price;

        return $this;
    }

    /**
     * Gets transfer_price
     *
     * @return \Panthera\Openprovider\Model\TldPrice|null
     */
    public function getTransferPrice()
    {
        return $this->container['transfer_price'];
    }

    /**
     * Sets transfer_price
     *
     * @param \Panthera\Openprovider\Model\TldPrice|null $transfer_price transfer_price
     *
     * @return self
     */
    public function setTransferPrice($transfer_price)
    {
        if (is_null($transfer_price)) {
            throw new \InvalidArgumentException('non-nullable transfer_price cannot be null');
        }
        $this->container['transfer_price'] = $transfer_price;

        return $this;
    }

    /**
     * Gets update_price
     *
     * @return \Panthera\Openprovider\Model\TldPrice|null
     */
    public function getUpdatePrice()
    {
        return $this->container['update_price'];
    }

    /**
     * Sets update_price
     *
     * @param \Panthera\Openprovider\Model\TldPrice|null $update_price update_price
     *
     * @return self
     */
    public function setUpdatePrice($update_price)
    {
        if (is_null($update_price)) {
            throw new \InvalidArgumentException('non-nullable update_price cannot be null');
        }
        $this->container['update_price'] = $update_price;

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


