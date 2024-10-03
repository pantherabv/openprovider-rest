<?php
/**
 * CustomerCustomerAdditionalData
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
 * CustomerCustomerAdditionalData Class Doc Comment
 *
 * @category Class
 * @package  Panthera\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerCustomerAdditionalData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'customerCustomerAdditionalData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attached_files' => '\Panthera\Openprovider\Model\CustomerFile[]',
        'birth_address' => 'string',
        'birth_city' => 'string',
        'birth_country' => 'string',
        'birth_date' => 'string',
        'birth_state' => 'string',
        'birth_zipcode' => 'string',
        'company_registration_city' => 'string',
        'company_registration_number' => 'string',
        'company_registration_subscription_date' => 'string',
        'company_url' => 'string',
        'headquarters_address' => 'string',
        'headquarters_city' => 'string',
        'headquarters_country' => 'string',
        'headquarters_state' => 'string',
        'headquarters_zipcode' => 'string',
        'passport_number' => 'string',
        'social_security_number' => 'string',
        'trading_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attached_files' => null,
        'birth_address' => null,
        'birth_city' => null,
        'birth_country' => null,
        'birth_date' => null,
        'birth_state' => null,
        'birth_zipcode' => null,
        'company_registration_city' => null,
        'company_registration_number' => null,
        'company_registration_subscription_date' => null,
        'company_url' => null,
        'headquarters_address' => null,
        'headquarters_city' => null,
        'headquarters_country' => null,
        'headquarters_state' => null,
        'headquarters_zipcode' => null,
        'passport_number' => null,
        'social_security_number' => null,
        'trading_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'attached_files' => false,
        'birth_address' => false,
        'birth_city' => false,
        'birth_country' => false,
        'birth_date' => false,
        'birth_state' => false,
        'birth_zipcode' => false,
        'company_registration_city' => false,
        'company_registration_number' => false,
        'company_registration_subscription_date' => false,
        'company_url' => false,
        'headquarters_address' => false,
        'headquarters_city' => false,
        'headquarters_country' => false,
        'headquarters_state' => false,
        'headquarters_zipcode' => false,
        'passport_number' => false,
        'social_security_number' => false,
        'trading_name' => false
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
        'attached_files' => 'attached_files',
        'birth_address' => 'birth_address',
        'birth_city' => 'birth_city',
        'birth_country' => 'birth_country',
        'birth_date' => 'birth_date',
        'birth_state' => 'birth_state',
        'birth_zipcode' => 'birth_zipcode',
        'company_registration_city' => 'company_registration_city',
        'company_registration_number' => 'company_registration_number',
        'company_registration_subscription_date' => 'company_registration_subscription_date',
        'company_url' => 'company_url',
        'headquarters_address' => 'headquarters_address',
        'headquarters_city' => 'headquarters_city',
        'headquarters_country' => 'headquarters_country',
        'headquarters_state' => 'headquarters_state',
        'headquarters_zipcode' => 'headquarters_zipcode',
        'passport_number' => 'passport_number',
        'social_security_number' => 'social_security_number',
        'trading_name' => 'trading_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attached_files' => 'setAttachedFiles',
        'birth_address' => 'setBirthAddress',
        'birth_city' => 'setBirthCity',
        'birth_country' => 'setBirthCountry',
        'birth_date' => 'setBirthDate',
        'birth_state' => 'setBirthState',
        'birth_zipcode' => 'setBirthZipcode',
        'company_registration_city' => 'setCompanyRegistrationCity',
        'company_registration_number' => 'setCompanyRegistrationNumber',
        'company_registration_subscription_date' => 'setCompanyRegistrationSubscriptionDate',
        'company_url' => 'setCompanyUrl',
        'headquarters_address' => 'setHeadquartersAddress',
        'headquarters_city' => 'setHeadquartersCity',
        'headquarters_country' => 'setHeadquartersCountry',
        'headquarters_state' => 'setHeadquartersState',
        'headquarters_zipcode' => 'setHeadquartersZipcode',
        'passport_number' => 'setPassportNumber',
        'social_security_number' => 'setSocialSecurityNumber',
        'trading_name' => 'setTradingName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attached_files' => 'getAttachedFiles',
        'birth_address' => 'getBirthAddress',
        'birth_city' => 'getBirthCity',
        'birth_country' => 'getBirthCountry',
        'birth_date' => 'getBirthDate',
        'birth_state' => 'getBirthState',
        'birth_zipcode' => 'getBirthZipcode',
        'company_registration_city' => 'getCompanyRegistrationCity',
        'company_registration_number' => 'getCompanyRegistrationNumber',
        'company_registration_subscription_date' => 'getCompanyRegistrationSubscriptionDate',
        'company_url' => 'getCompanyUrl',
        'headquarters_address' => 'getHeadquartersAddress',
        'headquarters_city' => 'getHeadquartersCity',
        'headquarters_country' => 'getHeadquartersCountry',
        'headquarters_state' => 'getHeadquartersState',
        'headquarters_zipcode' => 'getHeadquartersZipcode',
        'passport_number' => 'getPassportNumber',
        'social_security_number' => 'getSocialSecurityNumber',
        'trading_name' => 'getTradingName'
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
        $this->setIfExists('attached_files', $data ?? [], null);
        $this->setIfExists('birth_address', $data ?? [], null);
        $this->setIfExists('birth_city', $data ?? [], null);
        $this->setIfExists('birth_country', $data ?? [], null);
        $this->setIfExists('birth_date', $data ?? [], null);
        $this->setIfExists('birth_state', $data ?? [], null);
        $this->setIfExists('birth_zipcode', $data ?? [], null);
        $this->setIfExists('company_registration_city', $data ?? [], null);
        $this->setIfExists('company_registration_number', $data ?? [], null);
        $this->setIfExists('company_registration_subscription_date', $data ?? [], null);
        $this->setIfExists('company_url', $data ?? [], null);
        $this->setIfExists('headquarters_address', $data ?? [], null);
        $this->setIfExists('headquarters_city', $data ?? [], null);
        $this->setIfExists('headquarters_country', $data ?? [], null);
        $this->setIfExists('headquarters_state', $data ?? [], null);
        $this->setIfExists('headquarters_zipcode', $data ?? [], null);
        $this->setIfExists('passport_number', $data ?? [], null);
        $this->setIfExists('social_security_number', $data ?? [], null);
        $this->setIfExists('trading_name', $data ?? [], null);
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
     * Gets attached_files
     *
     * @return \Panthera\Openprovider\Model\CustomerFile[]|null
     */
    public function getAttachedFiles()
    {
        return $this->container['attached_files'];
    }

    /**
     * Sets attached_files
     *
     * @param \Panthera\Openprovider\Model\CustomerFile[]|null $attached_files attached_files
     *
     * @return self
     */
    public function setAttachedFiles($attached_files)
    {
        if (is_null($attached_files)) {
            throw new \InvalidArgumentException('non-nullable attached_files cannot be null');
        }
        $this->container['attached_files'] = $attached_files;

        return $this;
    }

    /**
     * Gets birth_address
     *
     * @return string|null
     */
    public function getBirthAddress()
    {
        return $this->container['birth_address'];
    }

    /**
     * Sets birth_address
     *
     * @param string|null $birth_address birth_address
     *
     * @return self
     */
    public function setBirthAddress($birth_address)
    {
        if (is_null($birth_address)) {
            throw new \InvalidArgumentException('non-nullable birth_address cannot be null');
        }
        $this->container['birth_address'] = $birth_address;

        return $this;
    }

    /**
     * Gets birth_city
     *
     * @return string|null
     */
    public function getBirthCity()
    {
        return $this->container['birth_city'];
    }

    /**
     * Sets birth_city
     *
     * @param string|null $birth_city birth_city
     *
     * @return self
     */
    public function setBirthCity($birth_city)
    {
        if (is_null($birth_city)) {
            throw new \InvalidArgumentException('non-nullable birth_city cannot be null');
        }
        $this->container['birth_city'] = $birth_city;

        return $this;
    }

    /**
     * Gets birth_country
     *
     * @return string|null
     */
    public function getBirthCountry()
    {
        return $this->container['birth_country'];
    }

    /**
     * Sets birth_country
     *
     * @param string|null $birth_country birth_country
     *
     * @return self
     */
    public function setBirthCountry($birth_country)
    {
        if (is_null($birth_country)) {
            throw new \InvalidArgumentException('non-nullable birth_country cannot be null');
        }
        $this->container['birth_country'] = $birth_country;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param string|null $birth_date birth_date
     *
     * @return self
     */
    public function setBirthDate($birth_date)
    {
        if (is_null($birth_date)) {
            throw new \InvalidArgumentException('non-nullable birth_date cannot be null');
        }
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets birth_state
     *
     * @return string|null
     */
    public function getBirthState()
    {
        return $this->container['birth_state'];
    }

    /**
     * Sets birth_state
     *
     * @param string|null $birth_state birth_state
     *
     * @return self
     */
    public function setBirthState($birth_state)
    {
        if (is_null($birth_state)) {
            throw new \InvalidArgumentException('non-nullable birth_state cannot be null');
        }
        $this->container['birth_state'] = $birth_state;

        return $this;
    }

    /**
     * Gets birth_zipcode
     *
     * @return string|null
     */
    public function getBirthZipcode()
    {
        return $this->container['birth_zipcode'];
    }

    /**
     * Sets birth_zipcode
     *
     * @param string|null $birth_zipcode birth_zipcode
     *
     * @return self
     */
    public function setBirthZipcode($birth_zipcode)
    {
        if (is_null($birth_zipcode)) {
            throw new \InvalidArgumentException('non-nullable birth_zipcode cannot be null');
        }
        $this->container['birth_zipcode'] = $birth_zipcode;

        return $this;
    }

    /**
     * Gets company_registration_city
     *
     * @return string|null
     */
    public function getCompanyRegistrationCity()
    {
        return $this->container['company_registration_city'];
    }

    /**
     * Sets company_registration_city
     *
     * @param string|null $company_registration_city company_registration_city
     *
     * @return self
     */
    public function setCompanyRegistrationCity($company_registration_city)
    {
        if (is_null($company_registration_city)) {
            throw new \InvalidArgumentException('non-nullable company_registration_city cannot be null');
        }
        $this->container['company_registration_city'] = $company_registration_city;

        return $this;
    }

    /**
     * Gets company_registration_number
     *
     * @return string|null
     */
    public function getCompanyRegistrationNumber()
    {
        return $this->container['company_registration_number'];
    }

    /**
     * Sets company_registration_number
     *
     * @param string|null $company_registration_number company_registration_number
     *
     * @return self
     */
    public function setCompanyRegistrationNumber($company_registration_number)
    {
        if (is_null($company_registration_number)) {
            throw new \InvalidArgumentException('non-nullable company_registration_number cannot be null');
        }
        $this->container['company_registration_number'] = $company_registration_number;

        return $this;
    }

    /**
     * Gets company_registration_subscription_date
     *
     * @return string|null
     */
    public function getCompanyRegistrationSubscriptionDate()
    {
        return $this->container['company_registration_subscription_date'];
    }

    /**
     * Sets company_registration_subscription_date
     *
     * @param string|null $company_registration_subscription_date company_registration_subscription_date
     *
     * @return self
     */
    public function setCompanyRegistrationSubscriptionDate($company_registration_subscription_date)
    {
        if (is_null($company_registration_subscription_date)) {
            throw new \InvalidArgumentException('non-nullable company_registration_subscription_date cannot be null');
        }
        $this->container['company_registration_subscription_date'] = $company_registration_subscription_date;

        return $this;
    }

    /**
     * Gets company_url
     *
     * @return string|null
     */
    public function getCompanyUrl()
    {
        return $this->container['company_url'];
    }

    /**
     * Sets company_url
     *
     * @param string|null $company_url company_url
     *
     * @return self
     */
    public function setCompanyUrl($company_url)
    {
        if (is_null($company_url)) {
            throw new \InvalidArgumentException('non-nullable company_url cannot be null');
        }
        $this->container['company_url'] = $company_url;

        return $this;
    }

    /**
     * Gets headquarters_address
     *
     * @return string|null
     */
    public function getHeadquartersAddress()
    {
        return $this->container['headquarters_address'];
    }

    /**
     * Sets headquarters_address
     *
     * @param string|null $headquarters_address headquarters_address
     *
     * @return self
     */
    public function setHeadquartersAddress($headquarters_address)
    {
        if (is_null($headquarters_address)) {
            throw new \InvalidArgumentException('non-nullable headquarters_address cannot be null');
        }
        $this->container['headquarters_address'] = $headquarters_address;

        return $this;
    }

    /**
     * Gets headquarters_city
     *
     * @return string|null
     */
    public function getHeadquartersCity()
    {
        return $this->container['headquarters_city'];
    }

    /**
     * Sets headquarters_city
     *
     * @param string|null $headquarters_city headquarters_city
     *
     * @return self
     */
    public function setHeadquartersCity($headquarters_city)
    {
        if (is_null($headquarters_city)) {
            throw new \InvalidArgumentException('non-nullable headquarters_city cannot be null');
        }
        $this->container['headquarters_city'] = $headquarters_city;

        return $this;
    }

    /**
     * Gets headquarters_country
     *
     * @return string|null
     */
    public function getHeadquartersCountry()
    {
        return $this->container['headquarters_country'];
    }

    /**
     * Sets headquarters_country
     *
     * @param string|null $headquarters_country headquarters_country
     *
     * @return self
     */
    public function setHeadquartersCountry($headquarters_country)
    {
        if (is_null($headquarters_country)) {
            throw new \InvalidArgumentException('non-nullable headquarters_country cannot be null');
        }
        $this->container['headquarters_country'] = $headquarters_country;

        return $this;
    }

    /**
     * Gets headquarters_state
     *
     * @return string|null
     */
    public function getHeadquartersState()
    {
        return $this->container['headquarters_state'];
    }

    /**
     * Sets headquarters_state
     *
     * @param string|null $headquarters_state headquarters_state
     *
     * @return self
     */
    public function setHeadquartersState($headquarters_state)
    {
        if (is_null($headquarters_state)) {
            throw new \InvalidArgumentException('non-nullable headquarters_state cannot be null');
        }
        $this->container['headquarters_state'] = $headquarters_state;

        return $this;
    }

    /**
     * Gets headquarters_zipcode
     *
     * @return string|null
     */
    public function getHeadquartersZipcode()
    {
        return $this->container['headquarters_zipcode'];
    }

    /**
     * Sets headquarters_zipcode
     *
     * @param string|null $headquarters_zipcode headquarters_zipcode
     *
     * @return self
     */
    public function setHeadquartersZipcode($headquarters_zipcode)
    {
        if (is_null($headquarters_zipcode)) {
            throw new \InvalidArgumentException('non-nullable headquarters_zipcode cannot be null');
        }
        $this->container['headquarters_zipcode'] = $headquarters_zipcode;

        return $this;
    }

    /**
     * Gets passport_number
     *
     * @return string|null
     */
    public function getPassportNumber()
    {
        return $this->container['passport_number'];
    }

    /**
     * Sets passport_number
     *
     * @param string|null $passport_number passport_number
     *
     * @return self
     */
    public function setPassportNumber($passport_number)
    {
        if (is_null($passport_number)) {
            throw new \InvalidArgumentException('non-nullable passport_number cannot be null');
        }
        $this->container['passport_number'] = $passport_number;

        return $this;
    }

    /**
     * Gets social_security_number
     *
     * @return string|null
     */
    public function getSocialSecurityNumber()
    {
        return $this->container['social_security_number'];
    }

    /**
     * Sets social_security_number
     *
     * @param string|null $social_security_number social_security_number
     *
     * @return self
     */
    public function setSocialSecurityNumber($social_security_number)
    {
        if (is_null($social_security_number)) {
            throw new \InvalidArgumentException('non-nullable social_security_number cannot be null');
        }
        $this->container['social_security_number'] = $social_security_number;

        return $this;
    }

    /**
     * Gets trading_name
     *
     * @return string|null
     */
    public function getTradingName()
    {
        return $this->container['trading_name'];
    }

    /**
     * Sets trading_name
     *
     * @param string|null $trading_name trading_name
     *
     * @return self
     */
    public function setTradingName($trading_name)
    {
        if (is_null($trading_name)) {
            throw new \InvalidArgumentException('non-nullable trading_name cannot be null');
        }
        $this->container['trading_name'] = $trading_name;

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


