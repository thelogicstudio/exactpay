<?php
/**
 * BusinessRuleOptionsInner
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
 * BusinessRuleOptionsInner Class Doc Comment
 *
 * @category Class
 * @description The options that will be used to evaluate the Rule.
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BusinessRuleOptionsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BusinessRule_options_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'field' => 'string',
        'operator' => 'string',
        'value1' => '\TheLogicStudio\ExactPay\Model\BusinessRuleOptionsInnerValue1',
        'value2' => '\TheLogicStudio\ExactPay\Model\BusinessRuleOptionsInnerValue2'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'field' => null,
        'operator' => null,
        'value1' => null,
        'value2' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'field' => false,
		'operator' => false,
		'value1' => false,
		'value2' => false
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
        'field' => 'field',
        'operator' => 'operator',
        'value1' => 'value1',
        'value2' => 'value2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'field' => 'setField',
        'operator' => 'setOperator',
        'value1' => 'setValue1',
        'value2' => 'setValue2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'field' => 'getField',
        'operator' => 'getOperator',
        'value1' => 'getValue1',
        'value2' => 'getValue2'
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

    public const FIELD_ADDRESS_COUNTRY = 'merchant.address.country';
    public const FIELD_ADDRESS_COUNTRY_SUBDIVISION = 'merchant.address.countrySubdivision';
    public const FIELD_ESTABLISHED_DATE = 'merchant.establishedDate';
    public const FIELD_NAME = 'merchant.name';
    public const FIELD_DBA_NAME = 'merchant.dbaName';
    public const FIELD_TELEPHONE = 'merchant.telephone';
    public const FIELD_EMAIL = 'merchant.email';
    public const FIELD_ONLINE_PRESENCE = 'merchant.onlinePresence';
    public const FIELD_ADDRESS_LINE1 = 'merchant.address.line1';
    public const FIELD_ADDRESS_CITY = 'merchant.address.city';
    public const FIELD_ADDRESS_POSTAL_CODE = 'merchant.address.postalCode';
    public const FIELD_FACEBOOK = 'merchant.facebook';
    public const FIELD_BUSINESS_REGISTRATION_NUMBER = 'merchant.businessRegistrationNumber';
    public const FIELD_TWITTER = 'merchant.twitter';
    public const FIELD_LINKEDIN = 'merchant.linkedin';
    public const FIELD_BANKING_DETAILS_BANK_NAME = 'merchant.bankingDetails.bankName';
    public const FIELD_BANKING_DETAILS_ROUTING_NUMBER = 'merchant.bankingDetails.routingNumber';
    public const FIELD_ENTITY_TYPE = 'merchant.entityType';
    public const FIELD_PRINCIPAL_ADDRESS_COUNTRY = 'merchant.principal.address.country';
    public const FIELD_PRINCIPAL_ADDRESS_COUNTRY_SUBDIVISION = 'merchant.principal.address.countrySubdivision';
    public const FIELD_PRINCIPAL_FIRST_NAME = 'merchant.principal.firstName';
    public const FIELD_PRINCIPAL_LAST_NAME = 'merchant.principal.lastName';
    public const FIELD_PRINCIPAL_TELEPHONE = 'merchant.principal.telephone';
    public const FIELD_PRINCIPAL_EMAIL = 'merchant.principal.email';
    public const FIELD_PRINCIPAL_ADDRESS_LINE1 = 'merchant.principal.address.line1';
    public const FIELD_PRINCIPAL_ADDRESS_CITY = 'merchant.principal.address.city';
    public const FIELD_PRINCIPAL_ADDRESS_POSTAL_CODE = 'merchant.principal.address.postalCode';
    public const FIELD_PRINCIPAL_PERCENT_OF_OWNERSHIP = 'merchant.principal.percentOfOwnership';
    public const FIELD_MCC = 'merchant.mcc';
    public const FIELD_BUSINESS_PROFILE_DELIVERY_TIMEFRAME = 'merchant.businessProfile.deliveryTimeframe';
    public const FIELD_ANTICIPATED_TRANS_AMOUNTS_AVERAGE_TICKET_SIZE = 'merchant.anticipatedTransAmounts.averageTicketSize';
    public const FIELD_ANTICIPATED_TRANS_AMOUNTS_ANTICIPATED_MONTHLY_VOLUME = 'merchant.anticipatedTransAmounts.anticipatedMonthlyVolume';
    public const FIELD_ANTICIPATED_TRANS_AMOUNTS_MAX_TICKET_SIZE = 'merchant.anticipatedTransAmounts.maxTicketSize';
    public const FIELD_BUSINESS_PROFILE_SERVICES_DESCRIPTION = 'merchant.businessProfile.servicesDescription';
    public const FIELD_BUSINESS_PROFILE_ACCEPTANCE_METHODS_MOTO = 'merchant.businessProfile.acceptanceMethods.moto';
    public const FIELD_BUSINESS_PROFILE_ACCEPTANCE_METHODS_INTERNET = 'merchant.businessProfile.acceptanceMethods.internet';
    public const FIELD_BUSINESS_PROFILE_ACCEPTANCE_METHODS_SWIPE = 'merchant.businessProfile.acceptanceMethods.swipe';
    public const FIELD_BUSINESS_PROFILE_ACCEPTANCE_METHODS_KEYED = 'merchant.businessProfile.acceptanceMethods.keyed';
    public const OPERATOR_STARTS_WITH = 'startsWith';
    public const OPERATOR_ENDS_WITH = 'endsWith';
    public const OPERATOR_EQ = 'eq';
    public const OPERATOR_CONTAINS = 'contains';
    public const OPERATOR_EXCLUDE = 'exclude';
    public const OPERATOR_GT = 'gt';
    public const OPERATOR_GTE = 'gte';
    public const OPERATOR_LT = 'lt';
    public const OPERATOR_LTE = 'lte';
    public const OPERATOR_BETWEEN = 'between';
    public const OPERATOR_IN = 'in';
    public const OPERATOR_INTERSECTION = 'intersection';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFieldAllowableValues()
    {
        return [
            self::FIELD_ADDRESS_COUNTRY,
            self::FIELD_ADDRESS_COUNTRY_SUBDIVISION,
            self::FIELD_ESTABLISHED_DATE,
            self::FIELD_NAME,
            self::FIELD_DBA_NAME,
            self::FIELD_TELEPHONE,
            self::FIELD_EMAIL,
            self::FIELD_ONLINE_PRESENCE,
            self::FIELD_ADDRESS_LINE1,
            self::FIELD_ADDRESS_CITY,
            self::FIELD_ADDRESS_POSTAL_CODE,
            self::FIELD_FACEBOOK,
            self::FIELD_BUSINESS_REGISTRATION_NUMBER,
            self::FIELD_TWITTER,
            self::FIELD_LINKEDIN,
            self::FIELD_BANKING_DETAILS_BANK_NAME,
            self::FIELD_BANKING_DETAILS_ROUTING_NUMBER,
            self::FIELD_ENTITY_TYPE,
            self::FIELD_PRINCIPAL_ADDRESS_COUNTRY,
            self::FIELD_PRINCIPAL_ADDRESS_COUNTRY_SUBDIVISION,
            self::FIELD_PRINCIPAL_FIRST_NAME,
            self::FIELD_PRINCIPAL_LAST_NAME,
            self::FIELD_PRINCIPAL_TELEPHONE,
            self::FIELD_PRINCIPAL_EMAIL,
            self::FIELD_PRINCIPAL_ADDRESS_LINE1,
            self::FIELD_PRINCIPAL_ADDRESS_CITY,
            self::FIELD_PRINCIPAL_ADDRESS_POSTAL_CODE,
            self::FIELD_PRINCIPAL_PERCENT_OF_OWNERSHIP,
            self::FIELD_MCC,
            self::FIELD_BUSINESS_PROFILE_DELIVERY_TIMEFRAME,
            self::FIELD_ANTICIPATED_TRANS_AMOUNTS_AVERAGE_TICKET_SIZE,
            self::FIELD_ANTICIPATED_TRANS_AMOUNTS_ANTICIPATED_MONTHLY_VOLUME,
            self::FIELD_ANTICIPATED_TRANS_AMOUNTS_MAX_TICKET_SIZE,
            self::FIELD_BUSINESS_PROFILE_SERVICES_DESCRIPTION,
            self::FIELD_BUSINESS_PROFILE_ACCEPTANCE_METHODS_MOTO,
            self::FIELD_BUSINESS_PROFILE_ACCEPTANCE_METHODS_INTERNET,
            self::FIELD_BUSINESS_PROFILE_ACCEPTANCE_METHODS_SWIPE,
            self::FIELD_BUSINESS_PROFILE_ACCEPTANCE_METHODS_KEYED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperatorAllowableValues()
    {
        return [
            self::OPERATOR_STARTS_WITH,
            self::OPERATOR_ENDS_WITH,
            self::OPERATOR_EQ,
            self::OPERATOR_CONTAINS,
            self::OPERATOR_EXCLUDE,
            self::OPERATOR_GT,
            self::OPERATOR_GTE,
            self::OPERATOR_LT,
            self::OPERATOR_LTE,
            self::OPERATOR_BETWEEN,
            self::OPERATOR_IN,
            self::OPERATOR_INTERSECTION,
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
        $this->setIfExists('field', $data ?? [], null);
        $this->setIfExists('operator', $data ?? [], null);
        $this->setIfExists('value1', $data ?? [], null);
        $this->setIfExists('value2', $data ?? [], null);
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

        if ($this->container['field'] === null) {
            $invalidProperties[] = "'field' can't be null";
        }
        $allowedValues = $this->getFieldAllowableValues();
        if (!is_null($this->container['field']) && !in_array($this->container['field'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'field', must be one of '%s'",
                $this->container['field'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        $allowedValues = $this->getOperatorAllowableValues();
        if (!is_null($this->container['operator']) && !in_array($this->container['operator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'operator', must be one of '%s'",
                $this->container['operator'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['value1'] === null) {
            $invalidProperties[] = "'value1' can't be null";
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
     * Gets field
     *
     * @return string
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param string $field The field that will be used to evaluate the Rule.
     *
     * @return self
     */
    public function setField($field)
    {
        if (is_null($field)) {
            throw new \InvalidArgumentException('non-nullable field cannot be null');
        }
        $allowedValues = $this->getFieldAllowableValues();
        if (!in_array($field, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'field', must be one of '%s'",
                    $field,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['field'] = $field;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator The operator that will be used to evaluate the Rule\\ startsWith - The field value must start with the value1\\ endsWith - The field value must end with the value1\\ eq - The field value must be equal to the value1\\ contains - The field value must contain the value1\\ exclude - The field value must not contain the value1\\ gt - The field value must be greater than the value1\\ gte - The field value must be greater than or equal to the value1\\ lt - The field value must be less than the value1\\ lte - The field value must be less than or equal to the value1\\ between - The field value must be between the value1 and value2\\ in - The field value must be in the list of values1\\ intersection - The field value must be in the intersection of the list of values1
     *
     * @return self
     */
    public function setOperator($operator)
    {
        if (is_null($operator)) {
            throw new \InvalidArgumentException('non-nullable operator cannot be null');
        }
        $allowedValues = $this->getOperatorAllowableValues();
        if (!in_array($operator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'operator', must be one of '%s'",
                    $operator,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets value1
     *
     * @return \TheLogicStudio\ExactPay\Model\BusinessRuleOptionsInnerValue1
     */
    public function getValue1()
    {
        return $this->container['value1'];
    }

    /**
     * Sets value1
     *
     * @param \TheLogicStudio\ExactPay\Model\BusinessRuleOptionsInnerValue1 $value1 value1
     *
     * @return self
     */
    public function setValue1($value1)
    {
        if (is_null($value1)) {
            throw new \InvalidArgumentException('non-nullable value1 cannot be null');
        }
        $this->container['value1'] = $value1;

        return $this;
    }

    /**
     * Gets value2
     *
     * @return \TheLogicStudio\ExactPay\Model\BusinessRuleOptionsInnerValue2|null
     */
    public function getValue2()
    {
        return $this->container['value2'];
    }

    /**
     * Sets value2
     *
     * @param \TheLogicStudio\ExactPay\Model\BusinessRuleOptionsInnerValue2|null $value2 value2
     *
     * @return self
     */
    public function setValue2($value2)
    {
        if (is_null($value2)) {
            throw new \InvalidArgumentException('non-nullable value2 cannot be null');
        }
        $this->container['value2'] = $value2;

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


