<?php
/**
 * SoftDescriptor
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
 * OpenAPI Generator version: 7.0.1
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
 * SoftDescriptor Class Doc Comment
 *
 * @category Class
 * @description Override business information which would normally appear on a customer&#39;s statement, making it easier for customers to identify transactions.
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SoftDescriptor implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SoftDescriptor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dba_name' => 'string',
        'street' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postal_code' => 'string',
        'country_code' => 'string',
        'mcc' => 'string',
        'merchant_contact_info' => 'string',
        'auth_type_indicator' => 'string',
        'tax_id' => 'string',
        'mvv_maid' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'submerchant_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dba_name' => null,
        'street' => null,
        'city' => null,
        'state' => null,
        'postal_code' => null,
        'country_code' => null,
        'mcc' => null,
        'merchant_contact_info' => null,
        'auth_type_indicator' => '/\A[AF]/z/',
        'tax_id' => null,
        'mvv_maid' => null,
        'phone' => null,
        'email' => null,
        'submerchant_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dba_name' => false,
		'street' => false,
		'city' => false,
		'state' => false,
		'postal_code' => false,
		'country_code' => false,
		'mcc' => false,
		'merchant_contact_info' => false,
		'auth_type_indicator' => false,
		'tax_id' => false,
		'mvv_maid' => false,
		'phone' => false,
		'email' => false,
		'submerchant_id' => false
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
        'dba_name' => 'dbaName',
        'street' => 'street',
        'city' => 'city',
        'state' => 'state',
        'postal_code' => 'postalCode',
        'country_code' => 'countryCode',
        'mcc' => 'mcc',
        'merchant_contact_info' => 'merchantContactInfo',
        'auth_type_indicator' => 'authTypeIndicator',
        'tax_id' => 'taxId',
        'mvv_maid' => 'mvvMaid',
        'phone' => 'phone',
        'email' => 'email',
        'submerchant_id' => 'submerchantId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dba_name' => 'setDbaName',
        'street' => 'setStreet',
        'city' => 'setCity',
        'state' => 'setState',
        'postal_code' => 'setPostalCode',
        'country_code' => 'setCountryCode',
        'mcc' => 'setMcc',
        'merchant_contact_info' => 'setMerchantContactInfo',
        'auth_type_indicator' => 'setAuthTypeIndicator',
        'tax_id' => 'setTaxId',
        'mvv_maid' => 'setMvvMaid',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'submerchant_id' => 'setSubmerchantId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dba_name' => 'getDbaName',
        'street' => 'getStreet',
        'city' => 'getCity',
        'state' => 'getState',
        'postal_code' => 'getPostalCode',
        'country_code' => 'getCountryCode',
        'mcc' => 'getMcc',
        'merchant_contact_info' => 'getMerchantContactInfo',
        'auth_type_indicator' => 'getAuthTypeIndicator',
        'tax_id' => 'getTaxId',
        'mvv_maid' => 'getMvvMaid',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'submerchant_id' => 'getSubmerchantId'
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
        $this->setIfExists('dba_name', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('mcc', $data ?? [], null);
        $this->setIfExists('merchant_contact_info', $data ?? [], null);
        $this->setIfExists('auth_type_indicator', $data ?? [], null);
        $this->setIfExists('tax_id', $data ?? [], null);
        $this->setIfExists('mvv_maid', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('submerchant_id', $data ?? [], null);
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

        if (!is_null($this->container['country_code']) && !preg_match("/^[A-Z]{3}$/", $this->container['country_code'])) {
            $invalidProperties[] = "invalid value for 'country_code', must be conform to the pattern /^[A-Z]{3}$/.";
        }

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
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street Street name of the merchant's address.
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City name of the merchant's address.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

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
     * @param string|null $state The two-digit country subdivision code where the merchant is located. Refer to the two-digit country subdivision code defined in ISO 3166-2 for the countries listed in ISO 3166-1.
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
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code The postal code where the merchant is located. Five-digit (example: 33558) or nine-digit (33558-3321) format is acceptable for the USA. Six digit(A0A 0A0) or (A0A0A0) format is acceptable for Canada.
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code 3-character alphabetical country code according to ISO 3166-1, for example, USA, CAN etc.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }

        if ((!preg_match("/^[A-Z]{3}$/", ObjectSerializer::toString($country_code)))) {
            throw new \InvalidArgumentException("invalid value for \$country_code when calling SoftDescriptor., must conform to the pattern /^[A-Z]{3}$/.");
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets mcc
     *
     * @return string|null
     */
    public function getMcc()
    {
        return $this->container['mcc'];
    }

    /**
     * Sets mcc
     *
     * @param string|null $mcc Merchant category code (MCC) is a four-digit number which describes a business's primary business activities. Please refer to the endpoint [Merchant Category Codes](https://dev.exactpay.dev/api#/operations/listMerchantCategoryCodes) to get the list of acceptable MCC codes by Exact Payments.
     *
     * @return self
     */
    public function setMcc($mcc)
    {
        if (is_null($mcc)) {
            throw new \InvalidArgumentException('non-nullable mcc cannot be null');
        }
        $this->container['mcc'] = $mcc;

        return $this;
    }

    /**
     * Gets merchant_contact_info
     *
     * @return string|null
     */
    public function getMerchantContactInfo()
    {
        return $this->container['merchant_contact_info'];
    }

    /**
     * Sets merchant_contact_info
     *
     * @param string|null $merchant_contact_info Phone number of the merchant.
     *
     * @return self
     */
    public function setMerchantContactInfo($merchant_contact_info)
    {
        if (is_null($merchant_contact_info)) {
            throw new \InvalidArgumentException('non-nullable merchant_contact_info cannot be null');
        }
        $this->container['merchant_contact_info'] = $merchant_contact_info;

        return $this;
    }

    /**
     * Gets auth_type_indicator
     *
     * @return string|null
     */
    public function getAuthTypeIndicator()
    {
        return $this->container['auth_type_indicator'];
    }

    /**
     * Sets auth_type_indicator
     *
     * @param string|null $auth_type_indicator F = Final Amount (amount is not expected to change for settlement). P = Pre-Authorization / Estimated Amount (amount may change between auth and settlement). Elavon only
     *
     * @return self
     */
    public function setAuthTypeIndicator($auth_type_indicator)
    {
        if (is_null($auth_type_indicator)) {
            throw new \InvalidArgumentException('non-nullable auth_type_indicator cannot be null');
        }
        $this->container['auth_type_indicator'] = $auth_type_indicator;

        return $this;
    }

    /**
     * Gets tax_id
     *
     * @return string|null
     */
    public function getTaxId()
    {
        return $this->container['tax_id'];
    }

    /**
     * Sets tax_id
     *
     * @param string|null $tax_id The Tax Identifier of the merchant.
     *
     * @return self
     */
    public function setTaxId($tax_id)
    {
        if (is_null($tax_id)) {
            throw new \InvalidArgumentException('non-nullable tax_id cannot be null');
        }
        $this->container['tax_id'] = $tax_id;

        return $this;
    }

    /**
     * Gets mvv_maid
     *
     * @return string|null
     */
    public function getMvvMaid()
    {
        return $this->container['mvv_maid'];
    }

    /**
     * Sets mvv_maid
     *
     * @param string|null $mvv_maid Merchant Verification Value.
     *
     * @return self
     */
    public function setMvvMaid($mvv_maid)
    {
        if (is_null($mvv_maid)) {
            throw new \InvalidArgumentException('non-nullable mvv_maid cannot be null');
        }
        $this->container['mvv_maid'] = $mvv_maid;

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
     * @param string|null $phone Phone number of the merchant.
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
     * @param string|null $email Email of the merchant.
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
     * Gets submerchant_id
     *
     * @return string|null
     */
    public function getSubmerchantId()
    {
        return $this->container['submerchant_id'];
    }

    /**
     * Sets submerchant_id
     *
     * @param string|null $submerchant_id Identification number of the submerchant.
     *
     * @return self
     */
    public function setSubmerchantId($submerchant_id)
    {
        if (is_null($submerchant_id)) {
            throw new \InvalidArgumentException('non-nullable submerchant_id cannot be null');
        }
        $this->container['submerchant_id'] = $submerchant_id;

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


