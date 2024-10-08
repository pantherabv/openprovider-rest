<?php
/**
 * PriceGetPriceResponseData
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
 * PriceGetPriceResponseData Class Doc Comment
 *
 * @category Class
 * @package  Panthera\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PriceGetPriceResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'priceGetPriceResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_premium' => 'bool',
        'is_promotion' => 'bool',
        'membership_price' => '\Panthera\Openprovider\Model\DomainPriceGroup',
        'price' => '\Panthera\Openprovider\Model\DomainPriceGroup',
        'promotion_data' => '\Panthera\Openprovider\Model\PricePromotionData',
        'tier_price' => '\Panthera\Openprovider\Model\DomainPriceGroup'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_premium' => 'boolean',
        'is_promotion' => 'boolean',
        'membership_price' => null,
        'price' => null,
        'promotion_data' => null,
        'tier_price' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_premium' => false,
        'is_promotion' => false,
        'membership_price' => false,
        'price' => false,
        'promotion_data' => false,
        'tier_price' => false
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
        'is_premium' => 'is_premium',
        'is_promotion' => 'is_promotion',
        'membership_price' => 'membership_price',
        'price' => 'price',
        'promotion_data' => 'promotion_data',
        'tier_price' => 'tier_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_premium' => 'setIsPremium',
        'is_promotion' => 'setIsPromotion',
        'membership_price' => 'setMembershipPrice',
        'price' => 'setPrice',
        'promotion_data' => 'setPromotionData',
        'tier_price' => 'setTierPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_premium' => 'getIsPremium',
        'is_promotion' => 'getIsPromotion',
        'membership_price' => 'getMembershipPrice',
        'price' => 'getPrice',
        'promotion_data' => 'getPromotionData',
        'tier_price' => 'getTierPrice'
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
        $this->setIfExists('is_premium', $data ?? [], null);
        $this->setIfExists('is_promotion', $data ?? [], null);
        $this->setIfExists('membership_price', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('promotion_data', $data ?? [], null);
        $this->setIfExists('tier_price', $data ?? [], null);
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
     * Gets is_premium
     *
     * @return bool|null
     */
    public function getIsPremium()
    {
        return $this->container['is_premium'];
    }

    /**
     * Sets is_premium
     *
     * @param bool|null $is_premium is_premium
     *
     * @return self
     */
    public function setIsPremium($is_premium)
    {
        if (is_null($is_premium)) {
            throw new \InvalidArgumentException('non-nullable is_premium cannot be null');
        }
        $this->container['is_premium'] = $is_premium;

        return $this;
    }

    /**
     * Gets is_promotion
     *
     * @return bool|null
     */
    public function getIsPromotion()
    {
        return $this->container['is_promotion'];
    }

    /**
     * Sets is_promotion
     *
     * @param bool|null $is_promotion is_promotion
     *
     * @return self
     */
    public function setIsPromotion($is_promotion)
    {
        if (is_null($is_promotion)) {
            throw new \InvalidArgumentException('non-nullable is_promotion cannot be null');
        }
        $this->container['is_promotion'] = $is_promotion;

        return $this;
    }

    /**
     * Gets membership_price
     *
     * @return \Panthera\Openprovider\Model\DomainPriceGroup|null
     */
    public function getMembershipPrice()
    {
        return $this->container['membership_price'];
    }

    /**
     * Sets membership_price
     *
     * @param \Panthera\Openprovider\Model\DomainPriceGroup|null $membership_price membership_price
     *
     * @return self
     */
    public function setMembershipPrice($membership_price)
    {
        if (is_null($membership_price)) {
            throw new \InvalidArgumentException('non-nullable membership_price cannot be null');
        }
        $this->container['membership_price'] = $membership_price;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Panthera\Openprovider\Model\DomainPriceGroup|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Panthera\Openprovider\Model\DomainPriceGroup|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets promotion_data
     *
     * @return \Panthera\Openprovider\Model\PricePromotionData|null
     */
    public function getPromotionData()
    {
        return $this->container['promotion_data'];
    }

    /**
     * Sets promotion_data
     *
     * @param \Panthera\Openprovider\Model\PricePromotionData|null $promotion_data promotion_data
     *
     * @return self
     */
    public function setPromotionData($promotion_data)
    {
        if (is_null($promotion_data)) {
            throw new \InvalidArgumentException('non-nullable promotion_data cannot be null');
        }
        $this->container['promotion_data'] = $promotion_data;

        return $this;
    }

    /**
     * Gets tier_price
     *
     * @return \Panthera\Openprovider\Model\DomainPriceGroup|null
     */
    public function getTierPrice()
    {
        return $this->container['tier_price'];
    }

    /**
     * Sets tier_price
     *
     * @param \Panthera\Openprovider\Model\DomainPriceGroup|null $tier_price tier_price
     *
     * @return self
     */
    public function setTierPrice($tier_price)
    {
        if (is_null($tier_price)) {
            throw new \InvalidArgumentException('non-nullable tier_price cannot be null');
        }
        $this->container['tier_price'] = $tier_price;

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


