<?php
/**
 * OnboardingMerchant
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
 * OnboardingMerchant Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OnboardingMerchant implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OnboardingMerchant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => '\TheLogicStudio\ExactPay\Model\UpdatableBusinessName',
        'business_registration_number' => 'string',
        'dba_name' => '\TheLogicStudio\ExactPay\Model\UpdatableDbaName',
        'established_date' => '\DateTime',
        'number_of_employees' => 'float',
        'telephone' => '\TheLogicStudio\ExactPay\Model\UpdatableBusinessPhone',
        'email' => 'string',
        'online_presence' => '\TheLogicStudio\ExactPay\Model\UpdatableBusinessOnlinePresence',
        'facebook' => '\TheLogicStudio\ExactPay\Model\UpdatableBusinessFacebook',
        'twitter' => '\TheLogicStudio\ExactPay\Model\UpdatableBusinessTwitter',
        'linked_in' => '\TheLogicStudio\ExactPay\Model\UpdatableBusinessLinkedIn',
        'entity_type' => 'string',
        'anticipated_trans_amounts' => '\TheLogicStudio\ExactPay\Model\AnticipatedTransAmounts',
        'mcc' => 'string',
        'address' => '\TheLogicStudio\ExactPay\Model\UpdatableMerchantAddress',
        'banking_details' => '\TheLogicStudio\ExactPay\Model\BankingDetails',
        'business_profile' => '\TheLogicStudio\ExactPay\Model\BusinessProfile',
        'principal' => '\TheLogicStudio\ExactPay\Model\Principal[]',
        'terms_n_conditions' => '\TheLogicStudio\ExactPay\Model\OnboardingTermsNConditions'
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
        'business_registration_number' => null,
        'dba_name' => null,
        'established_date' => 'date-time',
        'number_of_employees' => null,
        'telephone' => null,
        'email' => 'email',
        'online_presence' => null,
        'facebook' => null,
        'twitter' => null,
        'linked_in' => null,
        'entity_type' => null,
        'anticipated_trans_amounts' => null,
        'mcc' => null,
        'address' => null,
        'banking_details' => null,
        'business_profile' => null,
        'principal' => null,
        'terms_n_conditions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
		'business_registration_number' => false,
		'dba_name' => false,
		'established_date' => false,
		'number_of_employees' => false,
		'telephone' => false,
		'email' => false,
		'online_presence' => false,
		'facebook' => false,
		'twitter' => false,
		'linked_in' => false,
		'entity_type' => false,
		'anticipated_trans_amounts' => false,
		'mcc' => false,
		'address' => false,
		'banking_details' => false,
		'business_profile' => false,
		'principal' => false,
		'terms_n_conditions' => false
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
        'name' => 'name',
        'business_registration_number' => 'businessRegistrationNumber',
        'dba_name' => 'dbaName',
        'established_date' => 'establishedDate',
        'number_of_employees' => 'numberOfEmployees',
        'telephone' => 'telephone',
        'email' => 'email',
        'online_presence' => 'onlinePresence',
        'facebook' => 'facebook',
        'twitter' => 'twitter',
        'linked_in' => 'linkedIn',
        'entity_type' => 'entityType',
        'anticipated_trans_amounts' => 'anticipatedTransAmounts',
        'mcc' => 'mcc',
        'address' => 'address',
        'banking_details' => 'bankingDetails',
        'business_profile' => 'businessProfile',
        'principal' => 'principal',
        'terms_n_conditions' => 'termsNConditions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'business_registration_number' => 'setBusinessRegistrationNumber',
        'dba_name' => 'setDbaName',
        'established_date' => 'setEstablishedDate',
        'number_of_employees' => 'setNumberOfEmployees',
        'telephone' => 'setTelephone',
        'email' => 'setEmail',
        'online_presence' => 'setOnlinePresence',
        'facebook' => 'setFacebook',
        'twitter' => 'setTwitter',
        'linked_in' => 'setLinkedIn',
        'entity_type' => 'setEntityType',
        'anticipated_trans_amounts' => 'setAnticipatedTransAmounts',
        'mcc' => 'setMcc',
        'address' => 'setAddress',
        'banking_details' => 'setBankingDetails',
        'business_profile' => 'setBusinessProfile',
        'principal' => 'setPrincipal',
        'terms_n_conditions' => 'setTermsNConditions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'business_registration_number' => 'getBusinessRegistrationNumber',
        'dba_name' => 'getDbaName',
        'established_date' => 'getEstablishedDate',
        'number_of_employees' => 'getNumberOfEmployees',
        'telephone' => 'getTelephone',
        'email' => 'getEmail',
        'online_presence' => 'getOnlinePresence',
        'facebook' => 'getFacebook',
        'twitter' => 'getTwitter',
        'linked_in' => 'getLinkedIn',
        'entity_type' => 'getEntityType',
        'anticipated_trans_amounts' => 'getAnticipatedTransAmounts',
        'mcc' => 'getMcc',
        'address' => 'getAddress',
        'banking_details' => 'getBankingDetails',
        'business_profile' => 'getBusinessProfile',
        'principal' => 'getPrincipal',
        'terms_n_conditions' => 'getTermsNConditions'
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

    public const ENTITY_TYPE_LLC = 'LLC';
    public const ENTITY_TYPE_ORG = 'Org';
    public const ENTITY_TYPE_SOLE_PROP = 'Sole prop';
    public const ENTITY_TYPE_NON___PROFIT = 'Non - Profit';
    public const ENTITY_TYPE_PUBLIC_CORP = 'Public Corp';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntityTypeAllowableValues()
    {
        return [
            self::ENTITY_TYPE_LLC,
            self::ENTITY_TYPE_ORG,
            self::ENTITY_TYPE_SOLE_PROP,
            self::ENTITY_TYPE_NON___PROFIT,
            self::ENTITY_TYPE_PUBLIC_CORP,
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
        $this->setIfExists('business_registration_number', $data ?? [], null);
        $this->setIfExists('dba_name', $data ?? [], null);
        $this->setIfExists('established_date', $data ?? [], null);
        $this->setIfExists('number_of_employees', $data ?? [], null);
        $this->setIfExists('telephone', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('online_presence', $data ?? [], null);
        $this->setIfExists('facebook', $data ?? [], null);
        $this->setIfExists('twitter', $data ?? [], null);
        $this->setIfExists('linked_in', $data ?? [], null);
        $this->setIfExists('entity_type', $data ?? [], null);
        $this->setIfExists('anticipated_trans_amounts', $data ?? [], null);
        $this->setIfExists('mcc', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('banking_details', $data ?? [], null);
        $this->setIfExists('business_profile', $data ?? [], null);
        $this->setIfExists('principal', $data ?? [], null);
        $this->setIfExists('terms_n_conditions', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['business_registration_number'] === null) {
            $invalidProperties[] = "'business_registration_number' can't be null";
        }
        if ((mb_strlen($this->container['business_registration_number']) > 9)) {
            $invalidProperties[] = "invalid value for 'business_registration_number', the character length must be smaller than or equal to 9.";
        }

        if ((mb_strlen($this->container['business_registration_number']) < 9)) {
            $invalidProperties[] = "invalid value for 'business_registration_number', the character length must be bigger than or equal to 9.";
        }

        if (!preg_match("/^[0-9]+$/", $this->container['business_registration_number'])) {
            $invalidProperties[] = "invalid value for 'business_registration_number', must be conform to the pattern /^[0-9]+$/.";
        }

        if ($this->container['dba_name'] === null) {
            $invalidProperties[] = "'dba_name' can't be null";
        }
        if ($this->container['established_date'] === null) {
            $invalidProperties[] = "'established_date' can't be null";
        }
        if ($this->container['number_of_employees'] === null) {
            $invalidProperties[] = "'number_of_employees' can't be null";
        }
        if (($this->container['number_of_employees'] < 1)) {
            $invalidProperties[] = "invalid value for 'number_of_employees', must be bigger than or equal to 1.";
        }

        if ($this->container['telephone'] === null) {
            $invalidProperties[] = "'telephone' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['online_presence'] === null) {
            $invalidProperties[] = "'online_presence' can't be null";
        }
        if ($this->container['entity_type'] === null) {
            $invalidProperties[] = "'entity_type' can't be null";
        }
        $allowedValues = $this->getEntityTypeAllowableValues();
        if (!is_null($this->container['entity_type']) && !in_array($this->container['entity_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'entity_type', must be one of '%s'",
                $this->container['entity_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['mcc'] === null) {
            $invalidProperties[] = "'mcc' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['principal'] === null) {
            $invalidProperties[] = "'principal' can't be null";
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
     * @return \TheLogicStudio\ExactPay\Model\UpdatableBusinessName
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \TheLogicStudio\ExactPay\Model\UpdatableBusinessName $name name
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
     * Gets business_registration_number
     *
     * @return string
     */
    public function getBusinessRegistrationNumber()
    {
        return $this->container['business_registration_number'];
    }

    /**
     * Sets business_registration_number
     *
     * @param string $business_registration_number Tax identifier of the Business.
     *
     * @return self
     */
    public function setBusinessRegistrationNumber($business_registration_number)
    {
        if (is_null($business_registration_number)) {
            throw new \InvalidArgumentException('non-nullable business_registration_number cannot be null');
        }
        if ((mb_strlen($business_registration_number) > 9)) {
            throw new \InvalidArgumentException('invalid length for $business_registration_number when calling OnboardingMerchant., must be smaller than or equal to 9.');
        }
        if ((mb_strlen($business_registration_number) < 9)) {
            throw new \InvalidArgumentException('invalid length for $business_registration_number when calling OnboardingMerchant., must be bigger than or equal to 9.');
        }
        if ((!preg_match("/^[0-9]+$/", ObjectSerializer::toString($business_registration_number)))) {
            throw new \InvalidArgumentException("invalid value for \$business_registration_number when calling OnboardingMerchant., must conform to the pattern /^[0-9]+$/.");
        }

        $this->container['business_registration_number'] = $business_registration_number;

        return $this;
    }

    /**
     * Gets dba_name
     *
     * @return \TheLogicStudio\ExactPay\Model\UpdatableDbaName
     */
    public function getDbaName()
    {
        return $this->container['dba_name'];
    }

    /**
     * Sets dba_name
     *
     * @param \TheLogicStudio\ExactPay\Model\UpdatableDbaName $dba_name dba_name
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
     * Gets established_date
     *
     * @return \DateTime
     */
    public function getEstablishedDate()
    {
        return $this->container['established_date'];
    }

    /**
     * Sets established_date
     *
     * @param \DateTime $established_date Business Established Date. It must be a valid date and the date can't be in the future.
     *
     * @return self
     */
    public function setEstablishedDate($established_date)
    {
        if (is_null($established_date)) {
            throw new \InvalidArgumentException('non-nullable established_date cannot be null');
        }
        $this->container['established_date'] = $established_date;

        return $this;
    }

    /**
     * Gets number_of_employees
     *
     * @return float
     */
    public function getNumberOfEmployees()
    {
        return $this->container['number_of_employees'];
    }

    /**
     * Sets number_of_employees
     *
     * @param float $number_of_employees Number of employees of the Business. The value must be a non-negative number.
     *
     * @return self
     */
    public function setNumberOfEmployees($number_of_employees)
    {
        if (is_null($number_of_employees)) {
            throw new \InvalidArgumentException('non-nullable number_of_employees cannot be null');
        }

        if (($number_of_employees < 1)) {
            throw new \InvalidArgumentException('invalid value for $number_of_employees when calling OnboardingMerchant., must be bigger than or equal to 1.');
        }

        $this->container['number_of_employees'] = $number_of_employees;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return \TheLogicStudio\ExactPay\Model\UpdatableBusinessPhone
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param \TheLogicStudio\ExactPay\Model\UpdatableBusinessPhone $telephone telephone
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
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Contact Email of the Business.
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
     * @return \TheLogicStudio\ExactPay\Model\UpdatableBusinessOnlinePresence
     */
    public function getOnlinePresence()
    {
        return $this->container['online_presence'];
    }

    /**
     * Sets online_presence
     *
     * @param \TheLogicStudio\ExactPay\Model\UpdatableBusinessOnlinePresence $online_presence online_presence
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
     * @return \TheLogicStudio\ExactPay\Model\UpdatableBusinessFacebook|null
     */
    public function getFacebook()
    {
        return $this->container['facebook'];
    }

    /**
     * Sets facebook
     *
     * @param \TheLogicStudio\ExactPay\Model\UpdatableBusinessFacebook|null $facebook facebook
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
     * @return \TheLogicStudio\ExactPay\Model\UpdatableBusinessTwitter|null
     */
    public function getTwitter()
    {
        return $this->container['twitter'];
    }

    /**
     * Sets twitter
     *
     * @param \TheLogicStudio\ExactPay\Model\UpdatableBusinessTwitter|null $twitter twitter
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
     * @return \TheLogicStudio\ExactPay\Model\UpdatableBusinessLinkedIn|null
     */
    public function getLinkedIn()
    {
        return $this->container['linked_in'];
    }

    /**
     * Sets linked_in
     *
     * @param \TheLogicStudio\ExactPay\Model\UpdatableBusinessLinkedIn|null $linked_in linked_in
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
     * Gets entity_type
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param string $entity_type Entity type of the Business.
     *
     * @return self
     */
    public function setEntityType($entity_type)
    {
        if (is_null($entity_type)) {
            throw new \InvalidArgumentException('non-nullable entity_type cannot be null');
        }
        $allowedValues = $this->getEntityTypeAllowableValues();
        if (!in_array($entity_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'entity_type', must be one of '%s'",
                    $entity_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets anticipated_trans_amounts
     *
     * @return \TheLogicStudio\ExactPay\Model\AnticipatedTransAmounts|null
     */
    public function getAnticipatedTransAmounts()
    {
        return $this->container['anticipated_trans_amounts'];
    }

    /**
     * Sets anticipated_trans_amounts
     *
     * @param \TheLogicStudio\ExactPay\Model\AnticipatedTransAmounts|null $anticipated_trans_amounts anticipated_trans_amounts
     *
     * @return self
     */
    public function setAnticipatedTransAmounts($anticipated_trans_amounts)
    {
        if (is_null($anticipated_trans_amounts)) {
            throw new \InvalidArgumentException('non-nullable anticipated_trans_amounts cannot be null');
        }
        $this->container['anticipated_trans_amounts'] = $anticipated_trans_amounts;

        return $this;
    }

    /**
     * Gets mcc
     *
     * @return string
     */
    public function getMcc()
    {
        return $this->container['mcc'];
    }

    /**
     * Sets mcc
     *
     * @param string $mcc Merchant category code (MCCs) is a four-digit numbers that describe a business's primary business activities. Refer to the endpoint [Merchant Category Codes](/operations/listMerchantCategoryCodes) to get the list of acceptable MCC codes by Exact Payments.
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
     * Gets address
     *
     * @return \TheLogicStudio\ExactPay\Model\UpdatableMerchantAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \TheLogicStudio\ExactPay\Model\UpdatableMerchantAddress $address address
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
     * Gets banking_details
     *
     * @return \TheLogicStudio\ExactPay\Model\BankingDetails|null
     */
    public function getBankingDetails()
    {
        return $this->container['banking_details'];
    }

    /**
     * Sets banking_details
     *
     * @param \TheLogicStudio\ExactPay\Model\BankingDetails|null $banking_details banking_details
     *
     * @return self
     */
    public function setBankingDetails($banking_details)
    {
        if (is_null($banking_details)) {
            throw new \InvalidArgumentException('non-nullable banking_details cannot be null');
        }
        $this->container['banking_details'] = $banking_details;

        return $this;
    }

    /**
     * Gets business_profile
     *
     * @return \TheLogicStudio\ExactPay\Model\BusinessProfile|null
     */
    public function getBusinessProfile()
    {
        return $this->container['business_profile'];
    }

    /**
     * Sets business_profile
     *
     * @param \TheLogicStudio\ExactPay\Model\BusinessProfile|null $business_profile business_profile
     *
     * @return self
     */
    public function setBusinessProfile($business_profile)
    {
        if (is_null($business_profile)) {
            throw new \InvalidArgumentException('non-nullable business_profile cannot be null');
        }
        $this->container['business_profile'] = $business_profile;

        return $this;
    }

    /**
     * Gets principal
     *
     * @return \TheLogicStudio\ExactPay\Model\Principal[]
     */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
     * Sets principal
     *
     * @param \TheLogicStudio\ExactPay\Model\Principal[] $principal The details for the Principal owners of the Business.
     *
     * @return self
     */
    public function setPrincipal($principal)
    {
        if (is_null($principal)) {
            throw new \InvalidArgumentException('non-nullable principal cannot be null');
        }
        $this->container['principal'] = $principal;

        return $this;
    }

    /**
     * Gets terms_n_conditions
     *
     * @return \TheLogicStudio\ExactPay\Model\OnboardingTermsNConditions|null
     */
    public function getTermsNConditions()
    {
        return $this->container['terms_n_conditions'];
    }

    /**
     * Sets terms_n_conditions
     *
     * @param \TheLogicStudio\ExactPay\Model\OnboardingTermsNConditions|null $terms_n_conditions terms_n_conditions
     *
     * @return self
     */
    public function setTermsNConditions($terms_n_conditions)
    {
        if (is_null($terms_n_conditions)) {
            throw new \InvalidArgumentException('non-nullable terms_n_conditions cannot be null');
        }
        $this->container['terms_n_conditions'] = $terms_n_conditions;

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


