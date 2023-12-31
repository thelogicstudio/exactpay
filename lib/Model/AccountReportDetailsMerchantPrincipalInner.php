<?php
/**
 * AccountReportDetailsMerchantPrincipalInner
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
 * AccountReportDetailsMerchantPrincipalInner Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountReportDetailsMerchantPrincipalInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountReportDetails_merchant_principal_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'title' => 'string',
        'telephone' => 'string',
        'email' => 'string',
        'date_of_birth' => 'string',
        'current_ownership_years' => 'float',
        'current_ownership_months' => 'float',
        'drivers_license' => 'string',
        'drivers_license_state' => 'string',
        'ssn' => 'string',
        'percent_of_ownership' => 'float',
        'address' => '\TheLogicStudio\ExactPay\Model\AccountReportDetailsMerchantPrincipalInnerAddress',
        '_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'first_name' => null,
        'last_name' => null,
        'title' => null,
        'telephone' => null,
        'email' => null,
        'date_of_birth' => null,
        'current_ownership_years' => null,
        'current_ownership_months' => null,
        'drivers_license' => null,
        'drivers_license_state' => null,
        'ssn' => null,
        'percent_of_ownership' => null,
        'address' => null,
        '_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'first_name' => false,
		'last_name' => false,
		'title' => false,
		'telephone' => false,
		'email' => false,
		'date_of_birth' => false,
		'current_ownership_years' => false,
		'current_ownership_months' => false,
		'drivers_license' => false,
		'drivers_license_state' => false,
		'ssn' => false,
		'percent_of_ownership' => false,
		'address' => false,
		'_id' => false
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
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'title' => 'title',
        'telephone' => 'telephone',
        'email' => 'email',
        'date_of_birth' => 'dateOfBirth',
        'current_ownership_years' => 'currentOwnershipYears',
        'current_ownership_months' => 'currentOwnershipMonths',
        'drivers_license' => 'driversLicense',
        'drivers_license_state' => 'driversLicenseState',
        'ssn' => 'ssn',
        'percent_of_ownership' => 'percentOfOwnership',
        'address' => 'address',
        '_id' => '_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'title' => 'setTitle',
        'telephone' => 'setTelephone',
        'email' => 'setEmail',
        'date_of_birth' => 'setDateOfBirth',
        'current_ownership_years' => 'setCurrentOwnershipYears',
        'current_ownership_months' => 'setCurrentOwnershipMonths',
        'drivers_license' => 'setDriversLicense',
        'drivers_license_state' => 'setDriversLicenseState',
        'ssn' => 'setSsn',
        'percent_of_ownership' => 'setPercentOfOwnership',
        'address' => 'setAddress',
        '_id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'title' => 'getTitle',
        'telephone' => 'getTelephone',
        'email' => 'getEmail',
        'date_of_birth' => 'getDateOfBirth',
        'current_ownership_years' => 'getCurrentOwnershipYears',
        'current_ownership_months' => 'getCurrentOwnershipMonths',
        'drivers_license' => 'getDriversLicense',
        'drivers_license_state' => 'getDriversLicenseState',
        'ssn' => 'getSsn',
        'percent_of_ownership' => 'getPercentOfOwnership',
        'address' => 'getAddress',
        '_id' => 'getId'
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
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('telephone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('current_ownership_years', $data ?? [], null);
        $this->setIfExists('current_ownership_months', $data ?? [], null);
        $this->setIfExists('drivers_license', $data ?? [], null);
        $this->setIfExists('drivers_license_state', $data ?? [], null);
        $this->setIfExists('ssn', $data ?? [], null);
        $this->setIfExists('percent_of_ownership', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('_id', $data ?? [], null);
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
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string|null $telephone telephone
     *
     * @return self
     */
    public function setTelephone($telephone)
    {
        if (is_null($telephone)) {
            throw new \InvalidArgumentException('non-nullable telephone cannot be null');
        }
        $this->container['telephone'] = $telephone;

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
     * Gets date_of_birth
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param string|null $date_of_birth date_of_birth
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        if (is_null($date_of_birth)) {
            throw new \InvalidArgumentException('non-nullable date_of_birth cannot be null');
        }
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets current_ownership_years
     *
     * @return float|null
     */
    public function getCurrentOwnershipYears()
    {
        return $this->container['current_ownership_years'];
    }

    /**
     * Sets current_ownership_years
     *
     * @param float|null $current_ownership_years current_ownership_years
     *
     * @return self
     */
    public function setCurrentOwnershipYears($current_ownership_years)
    {
        if (is_null($current_ownership_years)) {
            throw new \InvalidArgumentException('non-nullable current_ownership_years cannot be null');
        }
        $this->container['current_ownership_years'] = $current_ownership_years;

        return $this;
    }

    /**
     * Gets current_ownership_months
     *
     * @return float|null
     */
    public function getCurrentOwnershipMonths()
    {
        return $this->container['current_ownership_months'];
    }

    /**
     * Sets current_ownership_months
     *
     * @param float|null $current_ownership_months current_ownership_months
     *
     * @return self
     */
    public function setCurrentOwnershipMonths($current_ownership_months)
    {
        if (is_null($current_ownership_months)) {
            throw new \InvalidArgumentException('non-nullable current_ownership_months cannot be null');
        }
        $this->container['current_ownership_months'] = $current_ownership_months;

        return $this;
    }

    /**
     * Gets drivers_license
     *
     * @return string|null
     */
    public function getDriversLicense()
    {
        return $this->container['drivers_license'];
    }

    /**
     * Sets drivers_license
     *
     * @param string|null $drivers_license drivers_license
     *
     * @return self
     */
    public function setDriversLicense($drivers_license)
    {
        if (is_null($drivers_license)) {
            throw new \InvalidArgumentException('non-nullable drivers_license cannot be null');
        }
        $this->container['drivers_license'] = $drivers_license;

        return $this;
    }

    /**
     * Gets drivers_license_state
     *
     * @return string|null
     */
    public function getDriversLicenseState()
    {
        return $this->container['drivers_license_state'];
    }

    /**
     * Sets drivers_license_state
     *
     * @param string|null $drivers_license_state drivers_license_state
     *
     * @return self
     */
    public function setDriversLicenseState($drivers_license_state)
    {
        if (is_null($drivers_license_state)) {
            throw new \InvalidArgumentException('non-nullable drivers_license_state cannot be null');
        }
        $this->container['drivers_license_state'] = $drivers_license_state;

        return $this;
    }

    /**
     * Gets ssn
     *
     * @return string|null
     */
    public function getSsn()
    {
        return $this->container['ssn'];
    }

    /**
     * Sets ssn
     *
     * @param string|null $ssn ssn
     *
     * @return self
     */
    public function setSsn($ssn)
    {
        if (is_null($ssn)) {
            throw new \InvalidArgumentException('non-nullable ssn cannot be null');
        }
        $this->container['ssn'] = $ssn;

        return $this;
    }

    /**
     * Gets percent_of_ownership
     *
     * @return float|null
     */
    public function getPercentOfOwnership()
    {
        return $this->container['percent_of_ownership'];
    }

    /**
     * Sets percent_of_ownership
     *
     * @param float|null $percent_of_ownership percent_of_ownership
     *
     * @return self
     */
    public function setPercentOfOwnership($percent_of_ownership)
    {
        if (is_null($percent_of_ownership)) {
            throw new \InvalidArgumentException('non-nullable percent_of_ownership cannot be null');
        }
        $this->container['percent_of_ownership'] = $percent_of_ownership;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \TheLogicStudio\ExactPay\Model\AccountReportDetailsMerchantPrincipalInnerAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \TheLogicStudio\ExactPay\Model\AccountReportDetailsMerchantPrincipalInnerAddress|null $address address
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
     * Gets _id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     *
     * @param string|null $_id _id
     *
     * @return self
     */
    public function setId($_id)
    {
        if (is_null($_id)) {
            throw new \InvalidArgumentException('non-nullable _id cannot be null');
        }
        $this->container['_id'] = $_id;

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


