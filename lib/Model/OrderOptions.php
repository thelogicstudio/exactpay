<?php
/**
 * OrderOptions
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
 * OrderOptions Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ecommerce_flag' => 'string',
        'customer_ip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ecommerce_flag' => null,
        'customer_ip' => 'ipv4'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ecommerce_flag' => false,
		'customer_ip' => false
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
        'ecommerce_flag' => 'ecommerceFlag',
        'customer_ip' => 'customerIp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ecommerce_flag' => 'setEcommerceFlag',
        'customer_ip' => 'setCustomerIp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ecommerce_flag' => 'getEcommerceFlag',
        'customer_ip' => 'getCustomerIp'
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

    public const ECOMMERCE_FLAG__1 = '1';
    public const ECOMMERCE_FLAG__2 = '2';
    public const ECOMMERCE_FLAG__3 = '3';
    public const ECOMMERCE_FLAG__4 = '4';
    public const ECOMMERCE_FLAG__5 = '5';
    public const ECOMMERCE_FLAG__6 = '6';
    public const ECOMMERCE_FLAG__7 = '7';
    public const ECOMMERCE_FLAG__8 = '8';
    public const ECOMMERCE_FLAG_R = 'R';
    public const ECOMMERCE_FLAG_I = 'I';
    public const ECOMMERCE_FLAG_X = 'X';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEcommerceFlagAllowableValues()
    {
        return [
            self::ECOMMERCE_FLAG__1,
            self::ECOMMERCE_FLAG__2,
            self::ECOMMERCE_FLAG__3,
            self::ECOMMERCE_FLAG__4,
            self::ECOMMERCE_FLAG__5,
            self::ECOMMERCE_FLAG__6,
            self::ECOMMERCE_FLAG__7,
            self::ECOMMERCE_FLAG__8,
            self::ECOMMERCE_FLAG_R,
            self::ECOMMERCE_FLAG_I,
            self::ECOMMERCE_FLAG_X,
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
        $this->setIfExists('ecommerce_flag', $data ?? [], null);
        $this->setIfExists('customer_ip', $data ?? [], null);
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

        $allowedValues = $this->getEcommerceFlagAllowableValues();
        if (!is_null($this->container['ecommerce_flag']) && !in_array($this->container['ecommerce_flag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ecommerce_flag', must be one of '%s'",
                $this->container['ecommerce_flag'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['ecommerce_flag']) && (mb_strlen($this->container['ecommerce_flag']) > 1)) {
            $invalidProperties[] = "invalid value for 'ecommerce_flag', the character length must be smaller than or equal to 1.";
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
     * Gets ecommerce_flag
     *
     * @return string|null
     */
    public function getEcommerceFlag()
    {
        return $this->container['ecommerce_flag'];
    }

    /**
     * Sets ecommerce_flag
     *
     * @param string|null $ecommerce_flag Used to classify the style of transaction being performed. 2 = Recurring, 3 = Installment.
     *
     * @return self
     */
    public function setEcommerceFlag($ecommerce_flag)
    {
        if (is_null($ecommerce_flag)) {
            throw new \InvalidArgumentException('non-nullable ecommerce_flag cannot be null');
        }
        $allowedValues = $this->getEcommerceFlagAllowableValues();
        if (!in_array($ecommerce_flag, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ecommerce_flag', must be one of '%s'",
                    $ecommerce_flag,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($ecommerce_flag) > 1)) {
            throw new \InvalidArgumentException('invalid length for $ecommerce_flag when calling OrderOptions., must be smaller than or equal to 1.');
        }

        $this->container['ecommerce_flag'] = $ecommerce_flag;

        return $this;
    }

    /**
     * Gets customer_ip
     *
     * @return string|null
     */
    public function getCustomerIp()
    {
        return $this->container['customer_ip'];
    }

    /**
     * Sets customer_ip
     *
     * @param string|null $customer_ip Customer IP address.
     *
     * @return self
     */
    public function setCustomerIp($customer_ip)
    {
        if (is_null($customer_ip)) {
            throw new \InvalidArgumentException('non-nullable customer_ip cannot be null');
        }
        $this->container['customer_ip'] = $customer_ip;

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


