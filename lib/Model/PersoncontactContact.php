<?php
/**
 * PersoncontactContact
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
 * PersoncontactContact Class Doc Comment
 *
 * @category Class
 * @package  Panthera\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PersoncontactContact implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'personcontactContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_data' => '\Panthera\Openprovider\Model\ContactAdditionalData',
        'address' => '\Panthera\Openprovider\Model\ContactAddress',
        'api_access_enabled' => 'bool',
        'api_client_ip_list' => '\Panthera\Openprovider\Model\ContactClientIpList',
        'auth_type' => 'string',
        'comments' => 'string',
        'company_name' => 'string',
        'email' => 'string',
        'hash_changed_at' => 'string',
        'id' => 'int',
        'is_active' => 'bool',
        'last_api_call_at' => 'string',
        'last_login_at' => 'string',
        'locale' => 'string',
        'name' => '\Panthera\Openprovider\Model\ContactName',
        'password_change_declined_at' => 'string',
        'password_changed_at' => 'string',
        'phone' => '\Panthera\Openprovider\Model\ContactPhone',
        'rcp_client_ip_list' => '\Panthera\Openprovider\Model\ContactClientIpList',
        'reseller_id' => 'int',
        'role' => 'string',
        'secret_key' => 'string',
        'username' => 'string',
        'vat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_data' => null,
        'address' => null,
        'api_access_enabled' => 'boolean',
        'api_client_ip_list' => null,
        'auth_type' => null,
        'comments' => null,
        'company_name' => null,
        'email' => null,
        'hash_changed_at' => null,
        'id' => 'int32',
        'is_active' => 'boolean',
        'last_api_call_at' => null,
        'last_login_at' => null,
        'locale' => null,
        'name' => null,
        'password_change_declined_at' => null,
        'password_changed_at' => null,
        'phone' => null,
        'rcp_client_ip_list' => null,
        'reseller_id' => 'int32',
        'role' => null,
        'secret_key' => null,
        'username' => null,
        'vat' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'additional_data' => false,
        'address' => false,
        'api_access_enabled' => false,
        'api_client_ip_list' => false,
        'auth_type' => false,
        'comments' => false,
        'company_name' => false,
        'email' => false,
        'hash_changed_at' => false,
        'id' => false,
        'is_active' => false,
        'last_api_call_at' => false,
        'last_login_at' => false,
        'locale' => false,
        'name' => false,
        'password_change_declined_at' => false,
        'password_changed_at' => false,
        'phone' => false,
        'rcp_client_ip_list' => false,
        'reseller_id' => false,
        'role' => false,
        'secret_key' => false,
        'username' => false,
        'vat' => false
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
        'additional_data' => 'additional_data',
        'address' => 'address',
        'api_access_enabled' => 'api_access_enabled',
        'api_client_ip_list' => 'api_client_ip_list',
        'auth_type' => 'auth_type',
        'comments' => 'comments',
        'company_name' => 'company_name',
        'email' => 'email',
        'hash_changed_at' => 'hash_changed_at',
        'id' => 'id',
        'is_active' => 'is_active',
        'last_api_call_at' => 'last_api_call_at',
        'last_login_at' => 'last_login_at',
        'locale' => 'locale',
        'name' => 'name',
        'password_change_declined_at' => 'password_change_declined_at',
        'password_changed_at' => 'password_changed_at',
        'phone' => 'phone',
        'rcp_client_ip_list' => 'rcp_client_ip_list',
        'reseller_id' => 'reseller_id',
        'role' => 'role',
        'secret_key' => 'secret_key',
        'username' => 'username',
        'vat' => 'vat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_data' => 'setAdditionalData',
        'address' => 'setAddress',
        'api_access_enabled' => 'setApiAccessEnabled',
        'api_client_ip_list' => 'setApiClientIpList',
        'auth_type' => 'setAuthType',
        'comments' => 'setComments',
        'company_name' => 'setCompanyName',
        'email' => 'setEmail',
        'hash_changed_at' => 'setHashChangedAt',
        'id' => 'setId',
        'is_active' => 'setIsActive',
        'last_api_call_at' => 'setLastApiCallAt',
        'last_login_at' => 'setLastLoginAt',
        'locale' => 'setLocale',
        'name' => 'setName',
        'password_change_declined_at' => 'setPasswordChangeDeclinedAt',
        'password_changed_at' => 'setPasswordChangedAt',
        'phone' => 'setPhone',
        'rcp_client_ip_list' => 'setRcpClientIpList',
        'reseller_id' => 'setResellerId',
        'role' => 'setRole',
        'secret_key' => 'setSecretKey',
        'username' => 'setUsername',
        'vat' => 'setVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_data' => 'getAdditionalData',
        'address' => 'getAddress',
        'api_access_enabled' => 'getApiAccessEnabled',
        'api_client_ip_list' => 'getApiClientIpList',
        'auth_type' => 'getAuthType',
        'comments' => 'getComments',
        'company_name' => 'getCompanyName',
        'email' => 'getEmail',
        'hash_changed_at' => 'getHashChangedAt',
        'id' => 'getId',
        'is_active' => 'getIsActive',
        'last_api_call_at' => 'getLastApiCallAt',
        'last_login_at' => 'getLastLoginAt',
        'locale' => 'getLocale',
        'name' => 'getName',
        'password_change_declined_at' => 'getPasswordChangeDeclinedAt',
        'password_changed_at' => 'getPasswordChangedAt',
        'phone' => 'getPhone',
        'rcp_client_ip_list' => 'getRcpClientIpList',
        'reseller_id' => 'getResellerId',
        'role' => 'getRole',
        'secret_key' => 'getSecretKey',
        'username' => 'getUsername',
        'vat' => 'getVat'
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
        $this->setIfExists('additional_data', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('api_access_enabled', $data ?? [], null);
        $this->setIfExists('api_client_ip_list', $data ?? [], null);
        $this->setIfExists('auth_type', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('hash_changed_at', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('last_api_call_at', $data ?? [], null);
        $this->setIfExists('last_login_at', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('password_change_declined_at', $data ?? [], null);
        $this->setIfExists('password_changed_at', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('rcp_client_ip_list', $data ?? [], null);
        $this->setIfExists('reseller_id', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
        $this->setIfExists('secret_key', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('vat', $data ?? [], null);
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
     * Gets additional_data
     *
     * @return \Panthera\Openprovider\Model\ContactAdditionalData|null
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     *
     * @param \Panthera\Openprovider\Model\ContactAdditionalData|null $additional_data additional_data
     *
     * @return self
     */
    public function setAdditionalData($additional_data)
    {
        if (is_null($additional_data)) {
            throw new \InvalidArgumentException('non-nullable additional_data cannot be null');
        }
        $this->container['additional_data'] = $additional_data;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Panthera\Openprovider\Model\ContactAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Panthera\Openprovider\Model\ContactAddress|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets api_access_enabled
     *
     * @return bool|null
     */
    public function getApiAccessEnabled()
    {
        return $this->container['api_access_enabled'];
    }

    /**
     * Sets api_access_enabled
     *
     * @param bool|null $api_access_enabled api_access_enabled
     *
     * @return self
     */
    public function setApiAccessEnabled($api_access_enabled)
    {
        if (is_null($api_access_enabled)) {
            throw new \InvalidArgumentException('non-nullable api_access_enabled cannot be null');
        }
        $this->container['api_access_enabled'] = $api_access_enabled;

        return $this;
    }

    /**
     * Gets api_client_ip_list
     *
     * @return \Panthera\Openprovider\Model\ContactClientIpList|null
     */
    public function getApiClientIpList()
    {
        return $this->container['api_client_ip_list'];
    }

    /**
     * Sets api_client_ip_list
     *
     * @param \Panthera\Openprovider\Model\ContactClientIpList|null $api_client_ip_list api_client_ip_list
     *
     * @return self
     */
    public function setApiClientIpList($api_client_ip_list)
    {
        if (is_null($api_client_ip_list)) {
            throw new \InvalidArgumentException('non-nullable api_client_ip_list cannot be null');
        }
        $this->container['api_client_ip_list'] = $api_client_ip_list;

        return $this;
    }

    /**
     * Gets auth_type
     *
     * @return string|null
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param string|null $auth_type auth_type
     *
     * @return self
     */
    public function setAuthType($auth_type)
    {
        if (is_null($auth_type)) {
            throw new \InvalidArgumentException('non-nullable auth_type cannot be null');
        }
        $this->container['auth_type'] = $auth_type;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments comments
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (is_null($comments)) {
            throw new \InvalidArgumentException('non-nullable comments cannot be null');
        }
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (is_null($company_name)) {
            throw new \InvalidArgumentException('non-nullable company_name cannot be null');
        }
        $this->container['company_name'] = $company_name;

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
     * Gets hash_changed_at
     *
     * @return string|null
     */
    public function getHashChangedAt()
    {
        return $this->container['hash_changed_at'];
    }

    /**
     * Sets hash_changed_at
     *
     * @param string|null $hash_changed_at hash_changed_at
     *
     * @return self
     */
    public function setHashChangedAt($hash_changed_at)
    {
        if (is_null($hash_changed_at)) {
            throw new \InvalidArgumentException('non-nullable hash_changed_at cannot be null');
        }
        $this->container['hash_changed_at'] = $hash_changed_at;

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
     * Gets last_api_call_at
     *
     * @return string|null
     */
    public function getLastApiCallAt()
    {
        return $this->container['last_api_call_at'];
    }

    /**
     * Sets last_api_call_at
     *
     * @param string|null $last_api_call_at last_api_call_at
     *
     * @return self
     */
    public function setLastApiCallAt($last_api_call_at)
    {
        if (is_null($last_api_call_at)) {
            throw new \InvalidArgumentException('non-nullable last_api_call_at cannot be null');
        }
        $this->container['last_api_call_at'] = $last_api_call_at;

        return $this;
    }

    /**
     * Gets last_login_at
     *
     * @return string|null
     */
    public function getLastLoginAt()
    {
        return $this->container['last_login_at'];
    }

    /**
     * Sets last_login_at
     *
     * @param string|null $last_login_at last_login_at
     *
     * @return self
     */
    public function setLastLoginAt($last_login_at)
    {
        if (is_null($last_login_at)) {
            throw new \InvalidArgumentException('non-nullable last_login_at cannot be null');
        }
        $this->container['last_login_at'] = $last_login_at;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale locale
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \Panthera\Openprovider\Model\ContactName|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Panthera\Openprovider\Model\ContactName|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets password_change_declined_at
     *
     * @return string|null
     */
    public function getPasswordChangeDeclinedAt()
    {
        return $this->container['password_change_declined_at'];
    }

    /**
     * Sets password_change_declined_at
     *
     * @param string|null $password_change_declined_at password_change_declined_at
     *
     * @return self
     */
    public function setPasswordChangeDeclinedAt($password_change_declined_at)
    {
        if (is_null($password_change_declined_at)) {
            throw new \InvalidArgumentException('non-nullable password_change_declined_at cannot be null');
        }
        $this->container['password_change_declined_at'] = $password_change_declined_at;

        return $this;
    }

    /**
     * Gets password_changed_at
     *
     * @return string|null
     */
    public function getPasswordChangedAt()
    {
        return $this->container['password_changed_at'];
    }

    /**
     * Sets password_changed_at
     *
     * @param string|null $password_changed_at password_changed_at
     *
     * @return self
     */
    public function setPasswordChangedAt($password_changed_at)
    {
        if (is_null($password_changed_at)) {
            throw new \InvalidArgumentException('non-nullable password_changed_at cannot be null');
        }
        $this->container['password_changed_at'] = $password_changed_at;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \Panthera\Openprovider\Model\ContactPhone|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \Panthera\Openprovider\Model\ContactPhone|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets rcp_client_ip_list
     *
     * @return \Panthera\Openprovider\Model\ContactClientIpList|null
     */
    public function getRcpClientIpList()
    {
        return $this->container['rcp_client_ip_list'];
    }

    /**
     * Sets rcp_client_ip_list
     *
     * @param \Panthera\Openprovider\Model\ContactClientIpList|null $rcp_client_ip_list rcp_client_ip_list
     *
     * @return self
     */
    public function setRcpClientIpList($rcp_client_ip_list)
    {
        if (is_null($rcp_client_ip_list)) {
            throw new \InvalidArgumentException('non-nullable rcp_client_ip_list cannot be null');
        }
        $this->container['rcp_client_ip_list'] = $rcp_client_ip_list;

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
     * Gets role
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        if (is_null($role)) {
            throw new \InvalidArgumentException('non-nullable role cannot be null');
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets secret_key
     *
     * @return string|null
     */
    public function getSecretKey()
    {
        return $this->container['secret_key'];
    }

    /**
     * Sets secret_key
     *
     * @param string|null $secret_key secret_key
     *
     * @return self
     */
    public function setSecretKey($secret_key)
    {
        if (is_null($secret_key)) {
            throw new \InvalidArgumentException('non-nullable secret_key cannot be null');
        }
        $this->container['secret_key'] = $secret_key;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets vat
     *
     * @return string|null
     */
    public function getVat()
    {
        return $this->container['vat'];
    }

    /**
     * Sets vat
     *
     * @param string|null $vat vat
     *
     * @return self
     */
    public function setVat($vat)
    {
        if (is_null($vat)) {
            throw new \InvalidArgumentException('non-nullable vat cannot be null');
        }
        $this->container['vat'] = $vat;

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


