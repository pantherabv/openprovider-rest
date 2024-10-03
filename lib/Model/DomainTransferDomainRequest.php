<?php
/**
 * DomainTransferDomainRequest
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
 * DomainTransferDomainRequest Class Doc Comment
 *
 * @category Class
 * @package  Panthera\Openprovider
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DomainTransferDomainRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'domainTransferDomainRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accept_premium_fee' => 'float',
        'additional_data' => '\Panthera\Openprovider\Model\DomainTransferAdditionalData',
        'admin_handle' => 'string',
        'at' => 'string',
        'auth_code' => 'string',
        'autorenew' => 'string',
        'billing_handle' => 'string',
        'comments' => 'string',
        'dnssec_keys' => '\Panthera\Openprovider\Model\DomainDnssecKey[]',
        'domain' => '\Panthera\Openprovider\Model\DomainDomain',
        'is_dnssec_enabled' => 'bool',
        'is_private_whois_enabled' => 'bool',
        'name_servers' => '\Panthera\Openprovider\Model\DomainNameserver[]',
        'ns_group' => 'string',
        'ns_template_id' => 'int',
        'ns_template_name' => 'string',
        'owner_handle' => 'string',
        'promo_code' => 'string',
        'reseller_handle' => 'string',
        'roid' => 'string',
        'tech_handle' => 'string',
        'unit' => 'string',
        'use_domicile' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accept_premium_fee' => 'double',
        'additional_data' => null,
        'admin_handle' => null,
        'at' => null,
        'auth_code' => null,
        'autorenew' => null,
        'billing_handle' => null,
        'comments' => null,
        'dnssec_keys' => null,
        'domain' => null,
        'is_dnssec_enabled' => 'boolean',
        'is_private_whois_enabled' => 'boolean',
        'name_servers' => null,
        'ns_group' => null,
        'ns_template_id' => 'int32',
        'ns_template_name' => null,
        'owner_handle' => null,
        'promo_code' => null,
        'reseller_handle' => null,
        'roid' => null,
        'tech_handle' => null,
        'unit' => null,
        'use_domicile' => 'boolean'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'accept_premium_fee' => false,
        'additional_data' => false,
        'admin_handle' => false,
        'at' => false,
        'auth_code' => false,
        'autorenew' => false,
        'billing_handle' => false,
        'comments' => false,
        'dnssec_keys' => false,
        'domain' => false,
        'is_dnssec_enabled' => false,
        'is_private_whois_enabled' => false,
        'name_servers' => false,
        'ns_group' => false,
        'ns_template_id' => false,
        'ns_template_name' => false,
        'owner_handle' => false,
        'promo_code' => false,
        'reseller_handle' => false,
        'roid' => false,
        'tech_handle' => false,
        'unit' => false,
        'use_domicile' => false
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
        'accept_premium_fee' => 'accept_premium_fee',
        'additional_data' => 'additional_data',
        'admin_handle' => 'admin_handle',
        'at' => 'at',
        'auth_code' => 'auth_code',
        'autorenew' => 'autorenew',
        'billing_handle' => 'billing_handle',
        'comments' => 'comments',
        'dnssec_keys' => 'dnssec_keys',
        'domain' => 'domain',
        'is_dnssec_enabled' => 'is_dnssec_enabled',
        'is_private_whois_enabled' => 'is_private_whois_enabled',
        'name_servers' => 'name_servers',
        'ns_group' => 'ns_group',
        'ns_template_id' => 'ns_template_id',
        'ns_template_name' => 'ns_template_name',
        'owner_handle' => 'owner_handle',
        'promo_code' => 'promo_code',
        'reseller_handle' => 'reseller_handle',
        'roid' => 'roid',
        'tech_handle' => 'tech_handle',
        'unit' => 'unit',
        'use_domicile' => 'use_domicile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_premium_fee' => 'setAcceptPremiumFee',
        'additional_data' => 'setAdditionalData',
        'admin_handle' => 'setAdminHandle',
        'at' => 'setAt',
        'auth_code' => 'setAuthCode',
        'autorenew' => 'setAutorenew',
        'billing_handle' => 'setBillingHandle',
        'comments' => 'setComments',
        'dnssec_keys' => 'setDnssecKeys',
        'domain' => 'setDomain',
        'is_dnssec_enabled' => 'setIsDnssecEnabled',
        'is_private_whois_enabled' => 'setIsPrivateWhoisEnabled',
        'name_servers' => 'setNameServers',
        'ns_group' => 'setNsGroup',
        'ns_template_id' => 'setNsTemplateId',
        'ns_template_name' => 'setNsTemplateName',
        'owner_handle' => 'setOwnerHandle',
        'promo_code' => 'setPromoCode',
        'reseller_handle' => 'setResellerHandle',
        'roid' => 'setRoid',
        'tech_handle' => 'setTechHandle',
        'unit' => 'setUnit',
        'use_domicile' => 'setUseDomicile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_premium_fee' => 'getAcceptPremiumFee',
        'additional_data' => 'getAdditionalData',
        'admin_handle' => 'getAdminHandle',
        'at' => 'getAt',
        'auth_code' => 'getAuthCode',
        'autorenew' => 'getAutorenew',
        'billing_handle' => 'getBillingHandle',
        'comments' => 'getComments',
        'dnssec_keys' => 'getDnssecKeys',
        'domain' => 'getDomain',
        'is_dnssec_enabled' => 'getIsDnssecEnabled',
        'is_private_whois_enabled' => 'getIsPrivateWhoisEnabled',
        'name_servers' => 'getNameServers',
        'ns_group' => 'getNsGroup',
        'ns_template_id' => 'getNsTemplateId',
        'ns_template_name' => 'getNsTemplateName',
        'owner_handle' => 'getOwnerHandle',
        'promo_code' => 'getPromoCode',
        'reseller_handle' => 'getResellerHandle',
        'roid' => 'getRoid',
        'tech_handle' => 'getTechHandle',
        'unit' => 'getUnit',
        'use_domicile' => 'getUseDomicile'
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
        $this->setIfExists('accept_premium_fee', $data ?? [], null);
        $this->setIfExists('additional_data', $data ?? [], null);
        $this->setIfExists('admin_handle', $data ?? [], null);
        $this->setIfExists('at', $data ?? [], null);
        $this->setIfExists('auth_code', $data ?? [], null);
        $this->setIfExists('autorenew', $data ?? [], 'default');
        $this->setIfExists('billing_handle', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
        $this->setIfExists('dnssec_keys', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('is_dnssec_enabled', $data ?? [], null);
        $this->setIfExists('is_private_whois_enabled', $data ?? [], null);
        $this->setIfExists('name_servers', $data ?? [], null);
        $this->setIfExists('ns_group', $data ?? [], null);
        $this->setIfExists('ns_template_id', $data ?? [], null);
        $this->setIfExists('ns_template_name', $data ?? [], null);
        $this->setIfExists('owner_handle', $data ?? [], null);
        $this->setIfExists('promo_code', $data ?? [], null);
        $this->setIfExists('reseller_handle', $data ?? [], null);
        $this->setIfExists('roid', $data ?? [], null);
        $this->setIfExists('tech_handle', $data ?? [], null);
        $this->setIfExists('unit', $data ?? [], null);
        $this->setIfExists('use_domicile', $data ?? [], null);
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
     * Gets accept_premium_fee
     *
     * @return float|null
     */
    public function getAcceptPremiumFee()
    {
        return $this->container['accept_premium_fee'];
    }

    /**
     * Sets accept_premium_fee
     *
     * @param float|null $accept_premium_fee accept_premium_fee
     *
     * @return self
     */
    public function setAcceptPremiumFee($accept_premium_fee)
    {
        if (is_null($accept_premium_fee)) {
            throw new \InvalidArgumentException('non-nullable accept_premium_fee cannot be null');
        }
        $this->container['accept_premium_fee'] = $accept_premium_fee;

        return $this;
    }

    /**
     * Gets additional_data
     *
     * @return \Panthera\Openprovider\Model\DomainTransferAdditionalData|null
     */
    public function getAdditionalData()
    {
        return $this->container['additional_data'];
    }

    /**
     * Sets additional_data
     *
     * @param \Panthera\Openprovider\Model\DomainTransferAdditionalData|null $additional_data additional_data
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
     * Gets admin_handle
     *
     * @return string|null
     */
    public function getAdminHandle()
    {
        return $this->container['admin_handle'];
    }

    /**
     * Sets admin_handle
     *
     * @param string|null $admin_handle admin_handle
     *
     * @return self
     */
    public function setAdminHandle($admin_handle)
    {
        if (is_null($admin_handle)) {
            throw new \InvalidArgumentException('non-nullable admin_handle cannot be null');
        }
        $this->container['admin_handle'] = $admin_handle;

        return $this;
    }

    /**
     * Gets at
     *
     * @return string|null
     */
    public function getAt()
    {
        return $this->container['at'];
    }

    /**
     * Sets at
     *
     * @param string|null $at at
     *
     * @return self
     */
    public function setAt($at)
    {
        if (is_null($at)) {
            throw new \InvalidArgumentException('non-nullable at cannot be null');
        }
        $this->container['at'] = $at;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string|null $auth_code auth_code
     *
     * @return self
     */
    public function setAuthCode($auth_code)
    {
        if (is_null($auth_code)) {
            throw new \InvalidArgumentException('non-nullable auth_code cannot be null');
        }
        $this->container['auth_code'] = $auth_code;

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
     * Gets billing_handle
     *
     * @return string|null
     */
    public function getBillingHandle()
    {
        return $this->container['billing_handle'];
    }

    /**
     * Sets billing_handle
     *
     * @param string|null $billing_handle billing_handle
     *
     * @return self
     */
    public function setBillingHandle($billing_handle)
    {
        if (is_null($billing_handle)) {
            throw new \InvalidArgumentException('non-nullable billing_handle cannot be null');
        }
        $this->container['billing_handle'] = $billing_handle;

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
     * Gets dnssec_keys
     *
     * @return \Panthera\Openprovider\Model\DomainDnssecKey[]|null
     */
    public function getDnssecKeys()
    {
        return $this->container['dnssec_keys'];
    }

    /**
     * Sets dnssec_keys
     *
     * @param \Panthera\Openprovider\Model\DomainDnssecKey[]|null $dnssec_keys dnssec_keys
     *
     * @return self
     */
    public function setDnssecKeys($dnssec_keys)
    {
        if (is_null($dnssec_keys)) {
            throw new \InvalidArgumentException('non-nullable dnssec_keys cannot be null');
        }
        $this->container['dnssec_keys'] = $dnssec_keys;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return \Panthera\Openprovider\Model\DomainDomain|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param \Panthera\Openprovider\Model\DomainDomain|null $domain domain
     *
     * @return self
     */
    public function setDomain($domain)
    {
        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets is_dnssec_enabled
     *
     * @return bool|null
     */
    public function getIsDnssecEnabled()
    {
        return $this->container['is_dnssec_enabled'];
    }

    /**
     * Sets is_dnssec_enabled
     *
     * @param bool|null $is_dnssec_enabled is_dnssec_enabled
     *
     * @return self
     */
    public function setIsDnssecEnabled($is_dnssec_enabled)
    {
        if (is_null($is_dnssec_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_dnssec_enabled cannot be null');
        }
        $this->container['is_dnssec_enabled'] = $is_dnssec_enabled;

        return $this;
    }

    /**
     * Gets is_private_whois_enabled
     *
     * @return bool|null
     */
    public function getIsPrivateWhoisEnabled()
    {
        return $this->container['is_private_whois_enabled'];
    }

    /**
     * Sets is_private_whois_enabled
     *
     * @param bool|null $is_private_whois_enabled is_private_whois_enabled
     *
     * @return self
     */
    public function setIsPrivateWhoisEnabled($is_private_whois_enabled)
    {
        if (is_null($is_private_whois_enabled)) {
            throw new \InvalidArgumentException('non-nullable is_private_whois_enabled cannot be null');
        }
        $this->container['is_private_whois_enabled'] = $is_private_whois_enabled;

        return $this;
    }

    /**
     * Gets name_servers
     *
     * @return \Panthera\Openprovider\Model\DomainNameserver[]|null
     */
    public function getNameServers()
    {
        return $this->container['name_servers'];
    }

    /**
     * Sets name_servers
     *
     * @param \Panthera\Openprovider\Model\DomainNameserver[]|null $name_servers name_servers
     *
     * @return self
     */
    public function setNameServers($name_servers)
    {
        if (is_null($name_servers)) {
            throw new \InvalidArgumentException('non-nullable name_servers cannot be null');
        }
        $this->container['name_servers'] = $name_servers;

        return $this;
    }

    /**
     * Gets ns_group
     *
     * @return string|null
     */
    public function getNsGroup()
    {
        return $this->container['ns_group'];
    }

    /**
     * Sets ns_group
     *
     * @param string|null $ns_group ns_group
     *
     * @return self
     */
    public function setNsGroup($ns_group)
    {
        if (is_null($ns_group)) {
            throw new \InvalidArgumentException('non-nullable ns_group cannot be null');
        }
        $this->container['ns_group'] = $ns_group;

        return $this;
    }

    /**
     * Gets ns_template_id
     *
     * @return int|null
     */
    public function getNsTemplateId()
    {
        return $this->container['ns_template_id'];
    }

    /**
     * Sets ns_template_id
     *
     * @param int|null $ns_template_id ns_template_id
     *
     * @return self
     */
    public function setNsTemplateId($ns_template_id)
    {
        if (is_null($ns_template_id)) {
            throw new \InvalidArgumentException('non-nullable ns_template_id cannot be null');
        }
        $this->container['ns_template_id'] = $ns_template_id;

        return $this;
    }

    /**
     * Gets ns_template_name
     *
     * @return string|null
     */
    public function getNsTemplateName()
    {
        return $this->container['ns_template_name'];
    }

    /**
     * Sets ns_template_name
     *
     * @param string|null $ns_template_name ns_template_name
     *
     * @return self
     */
    public function setNsTemplateName($ns_template_name)
    {
        if (is_null($ns_template_name)) {
            throw new \InvalidArgumentException('non-nullable ns_template_name cannot be null');
        }
        $this->container['ns_template_name'] = $ns_template_name;

        return $this;
    }

    /**
     * Gets owner_handle
     *
     * @return string|null
     */
    public function getOwnerHandle()
    {
        return $this->container['owner_handle'];
    }

    /**
     * Sets owner_handle
     *
     * @param string|null $owner_handle owner_handle
     *
     * @return self
     */
    public function setOwnerHandle($owner_handle)
    {
        if (is_null($owner_handle)) {
            throw new \InvalidArgumentException('non-nullable owner_handle cannot be null');
        }
        $this->container['owner_handle'] = $owner_handle;

        return $this;
    }

    /**
     * Gets promo_code
     *
     * @return string|null
     */
    public function getPromoCode()
    {
        return $this->container['promo_code'];
    }

    /**
     * Sets promo_code
     *
     * @param string|null $promo_code promo_code
     *
     * @return self
     */
    public function setPromoCode($promo_code)
    {
        if (is_null($promo_code)) {
            throw new \InvalidArgumentException('non-nullable promo_code cannot be null');
        }
        $this->container['promo_code'] = $promo_code;

        return $this;
    }

    /**
     * Gets reseller_handle
     *
     * @return string|null
     */
    public function getResellerHandle()
    {
        return $this->container['reseller_handle'];
    }

    /**
     * Sets reseller_handle
     *
     * @param string|null $reseller_handle reseller_handle
     *
     * @return self
     */
    public function setResellerHandle($reseller_handle)
    {
        if (is_null($reseller_handle)) {
            throw new \InvalidArgumentException('non-nullable reseller_handle cannot be null');
        }
        $this->container['reseller_handle'] = $reseller_handle;

        return $this;
    }

    /**
     * Gets roid
     *
     * @return string|null
     */
    public function getRoid()
    {
        return $this->container['roid'];
    }

    /**
     * Sets roid
     *
     * @param string|null $roid roid
     *
     * @return self
     */
    public function setRoid($roid)
    {
        if (is_null($roid)) {
            throw new \InvalidArgumentException('non-nullable roid cannot be null');
        }
        $this->container['roid'] = $roid;

        return $this;
    }

    /**
     * Gets tech_handle
     *
     * @return string|null
     */
    public function getTechHandle()
    {
        return $this->container['tech_handle'];
    }

    /**
     * Sets tech_handle
     *
     * @param string|null $tech_handle tech_handle
     *
     * @return self
     */
    public function setTechHandle($tech_handle)
    {
        if (is_null($tech_handle)) {
            throw new \InvalidArgumentException('non-nullable tech_handle cannot be null');
        }
        $this->container['tech_handle'] = $tech_handle;

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
     * Gets use_domicile
     *
     * @return bool|null
     */
    public function getUseDomicile()
    {
        return $this->container['use_domicile'];
    }

    /**
     * Sets use_domicile
     *
     * @param bool|null $use_domicile use_domicile
     *
     * @return self
     */
    public function setUseDomicile($use_domicile)
    {
        if (is_null($use_domicile)) {
            throw new \InvalidArgumentException('non-nullable use_domicile cannot be null');
        }
        $this->container['use_domicile'] = $use_domicile;

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


