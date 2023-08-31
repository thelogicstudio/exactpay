<?php
/**
 * AccountWithGateway
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Embedded Payments
 *
 * Embedding payments into your software platform can be one of the most powerful value drivers for your customers and your top line. Imagine your software delivering the entire order-to-cash cycle including funding right into the customer’s bank account. We provide low code integration- With just a single API, you can go live with Exact Payments. Onboard customers, automated underwriting, receive webhook notifications when your customers is live and ready to take payments. We have all the payment types your customers want and their buyers need. Credit and debit cards plus ACH payments, Apple Pay, Google Pay, Paypal, recurring payments, card-on-file and more. Dive into our API Reference and add embedded payments with Exact today!
 *
 * The version of the OpenAPI document: 1.0.4
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TheLogicStudio\ExactPay\Model;

use \ArrayAccess;
use \TheLogicStudio\ExactPay\ObjectSerializer;

/**
 * AccountWithGateway Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountWithGateway implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountWithGateway';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'type' => 'string',
        'parent_account_id' => 'string',
        'name' => 'string',
        'dba_name' => 'string',
        'is_live_capable' => 'bool',
        'is_disabled' => 'bool',
        'live_capable_at' => 'string',
        'disabled_at' => 'string',
        'disabled_by_user' => 'string',
        'features' => 'string[]',
        'cascading_features' => 'string[]',
        'created_at' => 'string',
        'updated_at' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'online_presence' => 'string',
        'facebook' => 'string',
        'twitter' => 'string',
        'linked_in' => 'string',
        'address' => '\TheLogicStudio\ExactPay\Model\MerchantAddress',
        'default_merchant_id' => 'string',
        'default_terminal_id' => 'string',
        'default_terminal_gateway_id' => 'string',
        'ach' => '\TheLogicStudio\ExactPay\Model\AccountAch'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'parent_account_id' => null,
        'name' => null,
        'dba_name' => null,
        'is_live_capable' => null,
        'is_disabled' => null,
        'live_capable_at' => null,
        'disabled_at' => null,
        'disabled_by_user' => null,
        'features' => null,
        'cascading_features' => null,
        'created_at' => null,
        'updated_at' => null,
        'phone' => null,
        'email' => 'email',
        'online_presence' => null,
        'facebook' => null,
        'twitter' => null,
        'linked_in' => null,
        'address' => null,
        'default_merchant_id' => null,
        'default_terminal_id' => null,
        'default_terminal_gateway_id' => null,
        'ach' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'type' => false,
		'parent_account_id' => false,
		'name' => false,
		'dba_name' => false,
		'is_live_capable' => false,
		'is_disabled' => false,
		'live_capable_at' => false,
		'disabled_at' => false,
		'disabled_by_user' => false,
		'features' => false,
		'cascading_features' => false,
		'created_at' => false,
		'updated_at' => false,
		'phone' => false,
		'email' => false,
		'online_presence' => false,
		'facebook' => false,
		'twitter' => false,
		'linked_in' => false,
		'address' => false,
		'default_merchant_id' => false,
		'default_terminal_id' => false,
		'default_terminal_gateway_id' => false,
		'ach' => false
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
        'id' => 'id',
        'type' => 'type',
        'parent_account_id' => 'parentAccountId',
        'name' => 'name',
        'dba_name' => 'dbaName',
        'is_live_capable' => 'isLiveCapable',
        'is_disabled' => 'isDisabled',
        'live_capable_at' => 'liveCapableAt',
        'disabled_at' => 'disabledAt',
        'disabled_by_user' => 'disabledByUser',
        'features' => 'features',
        'cascading_features' => 'cascadingFeatures',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'phone' => 'phone',
        'email' => 'email',
        'online_presence' => 'onlinePresence',
        'facebook' => 'facebook',
        'twitter' => 'twitter',
        'linked_in' => 'linkedIn',
        'address' => 'address',
        'default_merchant_id' => 'defaultMerchantId',
        'default_terminal_id' => 'defaultTerminalId',
        'default_terminal_gateway_id' => 'defaultTerminalGatewayId',
        'ach' => 'ach'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'parent_account_id' => 'setParentAccountId',
        'name' => 'setName',
        'dba_name' => 'setDbaName',
        'is_live_capable' => 'setIsLiveCapable',
        'is_disabled' => 'setIsDisabled',
        'live_capable_at' => 'setLiveCapableAt',
        'disabled_at' => 'setDisabledAt',
        'disabled_by_user' => 'setDisabledByUser',
        'features' => 'setFeatures',
        'cascading_features' => 'setCascadingFeatures',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'online_presence' => 'setOnlinePresence',
        'facebook' => 'setFacebook',
        'twitter' => 'setTwitter',
        'linked_in' => 'setLinkedIn',
        'address' => 'setAddress',
        'default_merchant_id' => 'setDefaultMerchantId',
        'default_terminal_id' => 'setDefaultTerminalId',
        'default_terminal_gateway_id' => 'setDefaultTerminalGatewayId',
        'ach' => 'setAch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'parent_account_id' => 'getParentAccountId',
        'name' => 'getName',
        'dba_name' => 'getDbaName',
        'is_live_capable' => 'getIsLiveCapable',
        'is_disabled' => 'getIsDisabled',
        'live_capable_at' => 'getLiveCapableAt',
        'disabled_at' => 'getDisabledAt',
        'disabled_by_user' => 'getDisabledByUser',
        'features' => 'getFeatures',
        'cascading_features' => 'getCascadingFeatures',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'online_presence' => 'getOnlinePresence',
        'facebook' => 'getFacebook',
        'twitter' => 'getTwitter',
        'linked_in' => 'getLinkedIn',
        'address' => 'getAddress',
        'default_merchant_id' => 'getDefaultMerchantId',
        'default_terminal_id' => 'getDefaultTerminalId',
        'default_terminal_gateway_id' => 'getDefaultTerminalGatewayId',
        'ach' => 'getAch'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('parent_account_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('dba_name', $data ?? [], null);
        $this->setIfExists('is_live_capable', $data ?? [], null);
        $this->setIfExists('is_disabled', $data ?? [], null);
        $this->setIfExists('live_capable_at', $data ?? [], null);
        $this->setIfExists('disabled_at', $data ?? [], null);
        $this->setIfExists('disabled_by_user', $data ?? [], null);
        $this->setIfExists('features', $data ?? [], null);
        $this->setIfExists('cascading_features', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('online_presence', $data ?? [], null);
        $this->setIfExists('facebook', $data ?? [], null);
        $this->setIfExists('twitter', $data ?? [], null);
        $this->setIfExists('linked_in', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('default_merchant_id', $data ?? [], null);
        $this->setIfExists('default_terminal_id', $data ?? [], null);
        $this->setIfExists('default_terminal_gateway_id', $data ?? [], null);
        $this->setIfExists('ach', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The identifier of the Account.
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The Type of the entity. For Merchant it always `account`.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets parent_account_id
     *
     * @return string|null
     */
    public function getParentAccountId()
    {
        return $this->container['parent_account_id'];
    }

    /**
     * Sets parent_account_id
     *
     * @param string|null $parent_account_id The identifier of the Organization who onboarded this Account.
     *
     * @return self
     */
    public function setParentAccountId($parent_account_id)
    {
        if (is_null($parent_account_id)) {
            throw new \InvalidArgumentException('non-nullable parent_account_id cannot be null');
        }
        $this->container['parent_account_id'] = $parent_account_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The Name of the Business.
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
     * Gets dba_name
     *
     * @return string|null
     */
    public function getDbaName()
    {
        return $this->container['dba_name'];
    }

    /**
     * Sets dba_name
     *
     * @param string|null $dba_name Doing Business As Name.
     *
     * @return self
     */
    public function setDbaName($dba_name)
    {
        if (is_null($dba_name)) {
            throw new \InvalidArgumentException('non-nullable dba_name cannot be null');
        }
        $this->container['dba_name'] = $dba_name;

        return $this;
    }

    /**
     * Gets is_live_capable
     *
     * @return bool|null
     */
    public function getIsLiveCapable()
    {
        return $this->container['is_live_capable'];
    }

    /**
     * Sets is_live_capable
     *
     * @param bool|null $is_live_capable Indicate whether this Account is Live capable or not.
     *
     * @return self
     */
    public function setIsLiveCapable($is_live_capable)
    {
        if (is_null($is_live_capable)) {
            throw new \InvalidArgumentException('non-nullable is_live_capable cannot be null');
        }
        $this->container['is_live_capable'] = $is_live_capable;

        return $this;
    }

    /**
     * Gets is_disabled
     *
     * @return bool|null
     */
    public function getIsDisabled()
    {
        return $this->container['is_disabled'];
    }

    /**
     * Sets is_disabled
     *
     * @param bool|null $is_disabled Indicate whether this Account is disabled or not.
     *
     * @return self
     */
    public function setIsDisabled($is_disabled)
    {
        if (is_null($is_disabled)) {
            throw new \InvalidArgumentException('non-nullable is_disabled cannot be null');
        }
        $this->container['is_disabled'] = $is_disabled;

        return $this;
    }

    /**
     * Gets live_capable_at
     *
     * @return string|null
     */
    public function getLiveCapableAt()
    {
        return $this->container['live_capable_at'];
    }

    /**
     * Sets live_capable_at
     *
     * @param string|null $live_capable_at The date and time when the Account becomes live capable.
     *
     * @return self
     */
    public function setLiveCapableAt($live_capable_at)
    {
        if (is_null($live_capable_at)) {
            throw new \InvalidArgumentException('non-nullable live_capable_at cannot be null');
        }
        $this->container['live_capable_at'] = $live_capable_at;

        return $this;
    }

    /**
     * Gets disabled_at
     *
     * @return string|null
     */
    public function getDisabledAt()
    {
        return $this->container['disabled_at'];
    }

    /**
     * Sets disabled_at
     *
     * @param string|null $disabled_at The date and time when the Account was created.
     *
     * @return self
     */
    public function setDisabledAt($disabled_at)
    {
        if (is_null($disabled_at)) {
            throw new \InvalidArgumentException('non-nullable disabled_at cannot be null');
        }
        $this->container['disabled_at'] = $disabled_at;

        return $this;
    }

    /**
     * Gets disabled_by_user
     *
     * @return string|null
     */
    public function getDisabledByUser()
    {
        return $this->container['disabled_by_user'];
    }

    /**
     * Sets disabled_by_user
     *
     * @param string|null $disabled_by_user The identifier of the User who disabled this Account.
     *
     * @return self
     */
    public function setDisabledByUser($disabled_by_user)
    {
        if (is_null($disabled_by_user)) {
            throw new \InvalidArgumentException('non-nullable disabled_by_user cannot be null');
        }
        $this->container['disabled_by_user'] = $disabled_by_user;

        return $this;
    }

    /**
     * Gets features
     *
     * @return string[]|null
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param string[]|null $features The feature toggles added to this Account.
     *
     * @return self
     */
    public function setFeatures($features)
    {
        if (is_null($features)) {
            throw new \InvalidArgumentException('non-nullable features cannot be null');
        }
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets cascading_features
     *
     * @return string[]|null
     */
    public function getCascadingFeatures()
    {
        return $this->container['cascading_features'];
    }

    /**
     * Sets cascading_features
     *
     * @param string[]|null $cascading_features The feature toggles added to this Account which can be cascaded to its sub-accounts.
     *
     * @return self
     */
    public function setCascadingFeatures($cascading_features)
    {
        if (is_null($cascading_features)) {
            throw new \InvalidArgumentException('non-nullable cascading_features cannot be null');
        }
        $this->container['cascading_features'] = $cascading_features;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at The date and time when the Account was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at The date and time when the Account was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Telephone Number of the Business. USA phone number can't start with 0 0r 1. The value must be a valid number string.
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
     * @param string|null $email Contact Email of the Business.
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
     * Gets online_presence
     *
     * @return string|null
     */
    public function getOnlinePresence()
    {
        return $this->container['online_presence'];
    }

    /**
     * Sets online_presence
     *
     * @param string|null $online_presence Website URL of the Business.
     *
     * @return self
     */
    public function setOnlinePresence($online_presence)
    {
        if (is_null($online_presence)) {
            throw new \InvalidArgumentException('non-nullable online_presence cannot be null');
        }
        $this->container['online_presence'] = $online_presence;

        return $this;
    }

    /**
     * Gets facebook
     *
     * @return string|null
     */
    public function getFacebook()
    {
        return $this->container['facebook'];
    }

    /**
     * Sets facebook
     *
     * @param string|null $facebook Facebook link of the Business.
     *
     * @return self
     */
    public function setFacebook($facebook)
    {
        if (is_null($facebook)) {
            throw new \InvalidArgumentException('non-nullable facebook cannot be null');
        }
        $this->container['facebook'] = $facebook;

        return $this;
    }

    /**
     * Gets twitter
     *
     * @return string|null
     */
    public function getTwitter()
    {
        return $this->container['twitter'];
    }

    /**
     * Sets twitter
     *
     * @param string|null $twitter Twitter link of the Business.
     *
     * @return self
     */
    public function setTwitter($twitter)
    {
        if (is_null($twitter)) {
            throw new \InvalidArgumentException('non-nullable twitter cannot be null');
        }
        $this->container['twitter'] = $twitter;

        return $this;
    }

    /**
     * Gets linked_in
     *
     * @return string|null
     */
    public function getLinkedIn()
    {
        return $this->container['linked_in'];
    }

    /**
     * Sets linked_in
     *
     * @param string|null $linked_in LinkedIn link of the Business.
     *
     * @return self
     */
    public function setLinkedIn($linked_in)
    {
        if (is_null($linked_in)) {
            throw new \InvalidArgumentException('non-nullable linked_in cannot be null');
        }
        $this->container['linked_in'] = $linked_in;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \TheLogicStudio\ExactPay\Model\MerchantAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \TheLogicStudio\ExactPay\Model\MerchantAddress|null $address address
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
     * Gets default_merchant_id
     *
     * @return string|null
     */
    public function getDefaultMerchantId()
    {
        return $this->container['default_merchant_id'];
    }

    /**
     * Sets default_merchant_id
     *
     * @param string|null $default_merchant_id The Elavon's Merchant identifier for this Account.
     *
     * @return self
     */
    public function setDefaultMerchantId($default_merchant_id)
    {
        if (is_null($default_merchant_id)) {
            throw new \InvalidArgumentException('non-nullable default_merchant_id cannot be null');
        }
        $this->container['default_merchant_id'] = $default_merchant_id;

        return $this;
    }

    /**
     * Gets default_terminal_id
     *
     * @return string|null
     */
    public function getDefaultTerminalId()
    {
        return $this->container['default_terminal_id'];
    }

    /**
     * Sets default_terminal_id
     *
     * @param string|null $default_terminal_id The Elavon's Terminal identifier for this Account.
     *
     * @return self
     */
    public function setDefaultTerminalId($default_terminal_id)
    {
        if (is_null($default_terminal_id)) {
            throw new \InvalidArgumentException('non-nullable default_terminal_id cannot be null');
        }
        $this->container['default_terminal_id'] = $default_terminal_id;

        return $this;
    }

    /**
     * Gets default_terminal_gateway_id
     *
     * @return string|null
     */
    public function getDefaultTerminalGatewayId()
    {
        return $this->container['default_terminal_gateway_id'];
    }

    /**
     * Sets default_terminal_gateway_id
     *
     * @param string|null $default_terminal_gateway_id The Exact Payment's Terminal Gateway identifier for this Account.
     *
     * @return self
     */
    public function setDefaultTerminalGatewayId($default_terminal_gateway_id)
    {
        if (is_null($default_terminal_gateway_id)) {
            throw new \InvalidArgumentException('non-nullable default_terminal_gateway_id cannot be null');
        }
        $this->container['default_terminal_gateway_id'] = $default_terminal_gateway_id;

        return $this;
    }

    /**
     * Gets ach
     *
     * @return \TheLogicStudio\ExactPay\Model\AccountAch|null
     */
    public function getAch()
    {
        return $this->container['ach'];
    }

    /**
     * Sets ach
     *
     * @param \TheLogicStudio\ExactPay\Model\AccountAch|null $ach ach
     *
     * @return self
     */
    public function setAch($ach)
    {
        if (is_null($ach)) {
            throw new \InvalidArgumentException('non-nullable ach cannot be null');
        }
        $this->container['ach'] = $ach;

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


