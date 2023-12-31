<?php
/**
 * MastercardRulePrincipalOptions
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
 * MastercardRulePrincipalOptions Class Doc Comment
 *
 * @category Class
 * @description Contains the fields in the merchants principal match portion of the [Master Card Match API](https://developer.mastercard.com/match/documentation/api-reference) Response that will be evaluated as part of the criteria.
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MastercardRulePrincipalOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MastercardRulePrincipalOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string[]',
        'address' => 'string[]',
        'phone_number' => 'string[]',
        'national_id' => 'string[]',
        'drivers_license' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'address' => null,
        'phone_number' => null,
        'national_id' => null,
        'drivers_license' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'address' => false,
		'phone_number' => false,
		'national_id' => false,
		'drivers_license' => false
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
        'name' => 'Name',
        'address' => 'Address',
        'phone_number' => 'PhoneNumber',
        'national_id' => 'NationalId',
        'drivers_license' => 'DriversLicense'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'address' => 'setAddress',
        'phone_number' => 'setPhoneNumber',
        'national_id' => 'setNationalId',
        'drivers_license' => 'setDriversLicense'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'address' => 'getAddress',
        'phone_number' => 'getPhoneNumber',
        'national_id' => 'getNationalId',
        'drivers_license' => 'getDriversLicense'
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

    public const NAME_M00 = 'M00';
    public const NAME_M01 = 'M01';
    public const NAME_M02 = 'M02';
    public const ADDRESS_M00 = 'M00';
    public const ADDRESS_M01 = 'M01';
    public const ADDRESS_M02 = 'M02';
    public const PHONE_NUMBER_M00 = 'M00';
    public const PHONE_NUMBER_M01 = 'M01';
    public const PHONE_NUMBER_M02 = 'M02';
    public const NATIONAL_ID_M00 = 'M00';
    public const NATIONAL_ID_M01 = 'M01';
    public const NATIONAL_ID_M02 = 'M02';
    public const DRIVERS_LICENSE_M00 = 'M00';
    public const DRIVERS_LICENSE_M01 = 'M01';
    public const DRIVERS_LICENSE_M02 = 'M02';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_M00,
            self::NAME_M01,
            self::NAME_M02,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddressAllowableValues()
    {
        return [
            self::ADDRESS_M00,
            self::ADDRESS_M01,
            self::ADDRESS_M02,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPhoneNumberAllowableValues()
    {
        return [
            self::PHONE_NUMBER_M00,
            self::PHONE_NUMBER_M01,
            self::PHONE_NUMBER_M02,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNationalIdAllowableValues()
    {
        return [
            self::NATIONAL_ID_M00,
            self::NATIONAL_ID_M01,
            self::NATIONAL_ID_M02,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDriversLicenseAllowableValues()
    {
        return [
            self::DRIVERS_LICENSE_M00,
            self::DRIVERS_LICENSE_M01,
            self::DRIVERS_LICENSE_M02,
        ];
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('national_id', $data ?? [], null);
        $this->setIfExists('drivers_license', $data ?? [], null);
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

        if (!is_null($this->container['name']) && (count($this->container['name']) > 3)) {
            $invalidProperties[] = "invalid value for 'name', number of items must be less than or equal to 3.";
        }

        if (!is_null($this->container['name']) && (count($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['address']) && (count($this->container['address']) > 3)) {
            $invalidProperties[] = "invalid value for 'address', number of items must be less than or equal to 3.";
        }

        if (!is_null($this->container['address']) && (count($this->container['address']) < 1)) {
            $invalidProperties[] = "invalid value for 'address', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['phone_number']) && (count($this->container['phone_number']) > 3)) {
            $invalidProperties[] = "invalid value for 'phone_number', number of items must be less than or equal to 3.";
        }

        if (!is_null($this->container['phone_number']) && (count($this->container['phone_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'phone_number', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['national_id']) && (count($this->container['national_id']) > 3)) {
            $invalidProperties[] = "invalid value for 'national_id', number of items must be less than or equal to 3.";
        }

        if (!is_null($this->container['national_id']) && (count($this->container['national_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'national_id', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['drivers_license']) && (count($this->container['drivers_license']) > 3)) {
            $invalidProperties[] = "invalid value for 'drivers_license', number of items must be less than or equal to 3.";
        }

        if (!is_null($this->container['drivers_license']) && (count($this->container['drivers_license']) < 1)) {
            $invalidProperties[] = "invalid value for 'drivers_license', number of items must be greater than or equal to 1.";
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
     * Gets name
     *
     * @return string[]|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string[]|null $name The list of values to match for this specific field in the response from Master Card Match API.  *M00* represents No Match, *M01* represents a Partial Match and *M02* represents an Exact Match.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $allowedValues = $this->getNameAllowableValues();
        if (array_diff($name, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if ((count($name) > 3)) {
            throw new \InvalidArgumentException('invalid value for $name when calling MastercardRulePrincipalOptions., number of items must be less than or equal to 3.');
        }
        if ((count($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling MastercardRulePrincipalOptions., number of items must be greater than or equal to 1.');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string[]|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string[]|null $address The list of values to match for this specific field in the response from Master Card Match API.  *M00* represents No Match, *M01* represents a Partial Match and *M02* represents an Exact Match.
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $allowedValues = $this->getAddressAllowableValues();
        if (array_diff($address, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'address', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if ((count($address) > 3)) {
            throw new \InvalidArgumentException('invalid value for $address when calling MastercardRulePrincipalOptions., number of items must be less than or equal to 3.');
        }
        if ((count($address) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address when calling MastercardRulePrincipalOptions., number of items must be greater than or equal to 1.');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string[]|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string[]|null $phone_number The list of values to match for this specific field in the response from Master Card Match API.  *M00* represents No Match, *M01* represents a Partial Match and *M02* represents an Exact Match.
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $allowedValues = $this->getPhoneNumberAllowableValues();
        if (array_diff($phone_number, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'phone_number', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if ((count($phone_number) > 3)) {
            throw new \InvalidArgumentException('invalid value for $phone_number when calling MastercardRulePrincipalOptions., number of items must be less than or equal to 3.');
        }
        if ((count($phone_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling MastercardRulePrincipalOptions., number of items must be greater than or equal to 1.');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets national_id
     *
     * @return string[]|null
     */
    public function getNationalId()
    {
        return $this->container['national_id'];
    }

    /**
     * Sets national_id
     *
     * @param string[]|null $national_id The list of values to match for this specific field in the response from Master Card Match API.  *M00* represents No Match, *M01* represents a Partial Match and *M02* represents an Exact Match.
     *
     * @return self
     */
    public function setNationalId($national_id)
    {
        if (is_null($national_id)) {
            throw new \InvalidArgumentException('non-nullable national_id cannot be null');
        }
        $allowedValues = $this->getNationalIdAllowableValues();
        if (array_diff($national_id, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'national_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if ((count($national_id) > 3)) {
            throw new \InvalidArgumentException('invalid value for $national_id when calling MastercardRulePrincipalOptions., number of items must be less than or equal to 3.');
        }
        if ((count($national_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $national_id when calling MastercardRulePrincipalOptions., number of items must be greater than or equal to 1.');
        }
        $this->container['national_id'] = $national_id;

        return $this;
    }

    /**
     * Gets drivers_license
     *
     * @return string[]|null
     */
    public function getDriversLicense()
    {
        return $this->container['drivers_license'];
    }

    /**
     * Sets drivers_license
     *
     * @param string[]|null $drivers_license The list of values to match for this specific field in the response from Master Card Match API.  *M00* represents No Match, *M01* represents a Partial Match and *M02* represents an Exact Match.
     *
     * @return self
     */
    public function setDriversLicense($drivers_license)
    {
        if (is_null($drivers_license)) {
            throw new \InvalidArgumentException('non-nullable drivers_license cannot be null');
        }
        $allowedValues = $this->getDriversLicenseAllowableValues();
        if (array_diff($drivers_license, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'drivers_license', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        if ((count($drivers_license) > 3)) {
            throw new \InvalidArgumentException('invalid value for $drivers_license when calling MastercardRulePrincipalOptions., number of items must be less than or equal to 3.');
        }
        if ((count($drivers_license) < 1)) {
            throw new \InvalidArgumentException('invalid length for $drivers_license when calling MastercardRulePrincipalOptions., number of items must be greater than or equal to 1.');
        }
        $this->container['drivers_license'] = $drivers_license;

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


