<?php
/**
 * SeDomainDomain
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SeDomainDomain Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SeDomainDomain implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'se_domainDomain';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bundle' => 'bool',
        'domain_name' => 'string',
        'expiration_date' => 'string',
        'id' => 'int',
        'is_active' => 'bool',
        'order_id' => 'int',
        'products' => '\OpenAPI\Client\Model\SeDomainProducts',
        'records' => '\OpenAPI\Client\Model\SeDomainRecords',
        'reseller_id' => 'int',
        'smtp_password' => 'string',
        'user_email' => 'string',
        'user_password' => 'string',
        'with_outgoing_filter' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bundle' => 'boolean',
        'domain_name' => null,
        'expiration_date' => null,
        'id' => 'int32',
        'is_active' => 'boolean',
        'order_id' => 'int32',
        'products' => null,
        'records' => null,
        'reseller_id' => 'int32',
        'smtp_password' => null,
        'user_email' => null,
        'user_password' => null,
        'with_outgoing_filter' => 'boolean'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bundle' => false,
        'domain_name' => false,
        'expiration_date' => false,
        'id' => false,
        'is_active' => false,
        'order_id' => false,
        'products' => false,
        'records' => false,
        'reseller_id' => false,
        'smtp_password' => false,
        'user_email' => false,
        'user_password' => false,
        'with_outgoing_filter' => false
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
        'bundle' => 'bundle',
        'domain_name' => 'domain_name',
        'expiration_date' => 'expiration_date',
        'id' => 'id',
        'is_active' => 'is_active',
        'order_id' => 'order_id',
        'products' => 'products',
        'records' => 'records',
        'reseller_id' => 'reseller_id',
        'smtp_password' => 'smtp_password',
        'user_email' => 'user_email',
        'user_password' => 'user_password',
        'with_outgoing_filter' => 'with_outgoing_filter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bundle' => 'setBundle',
        'domain_name' => 'setDomainName',
        'expiration_date' => 'setExpirationDate',
        'id' => 'setId',
        'is_active' => 'setIsActive',
        'order_id' => 'setOrderId',
        'products' => 'setProducts',
        'records' => 'setRecords',
        'reseller_id' => 'setResellerId',
        'smtp_password' => 'setSmtpPassword',
        'user_email' => 'setUserEmail',
        'user_password' => 'setUserPassword',
        'with_outgoing_filter' => 'setWithOutgoingFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bundle' => 'getBundle',
        'domain_name' => 'getDomainName',
        'expiration_date' => 'getExpirationDate',
        'id' => 'getId',
        'is_active' => 'getIsActive',
        'order_id' => 'getOrderId',
        'products' => 'getProducts',
        'records' => 'getRecords',
        'reseller_id' => 'getResellerId',
        'smtp_password' => 'getSmtpPassword',
        'user_email' => 'getUserEmail',
        'user_password' => 'getUserPassword',
        'with_outgoing_filter' => 'getWithOutgoingFilter'
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
        $this->setIfExists('bundle', $data ?? [], null);
        $this->setIfExists('domain_name', $data ?? [], null);
        $this->setIfExists('expiration_date', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('order_id', $data ?? [], null);
        $this->setIfExists('products', $data ?? [], null);
        $this->setIfExists('records', $data ?? [], null);
        $this->setIfExists('reseller_id', $data ?? [], null);
        $this->setIfExists('smtp_password', $data ?? [], null);
        $this->setIfExists('user_email', $data ?? [], null);
        $this->setIfExists('user_password', $data ?? [], null);
        $this->setIfExists('with_outgoing_filter', $data ?? [], null);
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
     * Gets expiration_date
     *
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string|null $expiration_date expiration_date
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        if (is_null($expiration_date)) {
            throw new \InvalidArgumentException('non-nullable expiration_date cannot be null');
        }
        $this->container['expiration_date'] = $expiration_date;

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
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int|null $order_id order_id
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        if (is_null($order_id)) {
            throw new \InvalidArgumentException('non-nullable order_id cannot be null');
        }
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \OpenAPI\Client\Model\SeDomainProducts|null
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \OpenAPI\Client\Model\SeDomainProducts|null $products products
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
     * Gets records
     *
     * @return \OpenAPI\Client\Model\SeDomainRecords|null
     */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
     * Sets records
     *
     * @param \OpenAPI\Client\Model\SeDomainRecords|null $records records
     *
     * @return self
     */
    public function setRecords($records)
    {
        if (is_null($records)) {
            throw new \InvalidArgumentException('non-nullable records cannot be null');
        }
        $this->container['records'] = $records;

        return $this;
    }

    /**
     * Gets reseller_id
     *
     * @return int|null
     */
    public function getResellerId()
    {
        return $this->container['reseller_id'];
    }

    /**
     * Sets reseller_id
     *
     * @param int|null $reseller_id reseller_id
     *
     * @return self
     */
    public function setResellerId($reseller_id)
    {
        if (is_null($reseller_id)) {
            throw new \InvalidArgumentException('non-nullable reseller_id cannot be null');
        }
        $this->container['reseller_id'] = $reseller_id;

        return $this;
    }

    /**
     * Gets smtp_password
     *
     * @return string|null
     */
    public function getSmtpPassword()
    {
        return $this->container['smtp_password'];
    }

    /**
     * Sets smtp_password
     *
     * @param string|null $smtp_password smtp_password
     *
     * @return self
     */
    public function setSmtpPassword($smtp_password)
    {
        if (is_null($smtp_password)) {
            throw new \InvalidArgumentException('non-nullable smtp_password cannot be null');
        }
        $this->container['smtp_password'] = $smtp_password;

        return $this;
    }

    /**
     * Gets user_email
     *
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->container['user_email'];
    }

    /**
     * Sets user_email
     *
     * @param string|null $user_email user_email
     *
     * @return self
     */
    public function setUserEmail($user_email)
    {
        if (is_null($user_email)) {
            throw new \InvalidArgumentException('non-nullable user_email cannot be null');
        }
        $this->container['user_email'] = $user_email;

        return $this;
    }

    /**
     * Gets user_password
     *
     * @return string|null
     */
    public function getUserPassword()
    {
        return $this->container['user_password'];
    }

    /**
     * Sets user_password
     *
     * @param string|null $user_password user_password
     *
     * @return self
     */
    public function setUserPassword($user_password)
    {
        if (is_null($user_password)) {
            throw new \InvalidArgumentException('non-nullable user_password cannot be null');
        }
        $this->container['user_password'] = $user_password;

        return $this;
    }

    /**
     * Gets with_outgoing_filter
     *
     * @return bool|null
     */
    public function getWithOutgoingFilter()
    {
        return $this->container['with_outgoing_filter'];
    }

    /**
     * Sets with_outgoing_filter
     *
     * @param bool|null $with_outgoing_filter with_outgoing_filter
     *
     * @return self
     */
    public function setWithOutgoingFilter($with_outgoing_filter)
    {
        if (is_null($with_outgoing_filter)) {
            throw new \InvalidArgumentException('non-nullable with_outgoing_filter cannot be null');
        }
        $this->container['with_outgoing_filter'] = $with_outgoing_filter;

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


