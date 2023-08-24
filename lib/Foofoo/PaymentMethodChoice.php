<?php
/**
 * PaymentMethodChoice
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
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TheLogicStudio\ExactPay\Foofoo;

use \ArrayAccess;
use \TheLogicStudio\ExactPay\ObjectSerializer;

/**
 * PaymentMethodChoice Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentMethodChoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethodChoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'token' => 'string',
        'credit_card' => '\TheLogicStudio\ExactPay\Foofoo\PayWithCreditCardCreditCard',
        'ach' => '\TheLogicStudio\ExactPay\Foofoo\PayWithAchAch',
        'apple_pay' => '\TheLogicStudio\ExactPay\Foofoo\PayWithApplePayApplePay',
        'google_pay' => '\TheLogicStudio\ExactPay\Foofoo\PayWithGooglePayGooglePay',
        'debit_bill_pay' => '\TheLogicStudio\ExactPay\Foofoo\PayWithDebitBillPayDebitBillPay'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'token' => null,
        'credit_card' => null,
        'ach' => null,
        'apple_pay' => null,
        'google_pay' => null,
        'debit_bill_pay' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'token' => false,
		'credit_card' => false,
		'ach' => false,
		'apple_pay' => false,
		'google_pay' => false,
		'debit_bill_pay' => false
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
        'token' => 'token',
        'credit_card' => 'creditCard',
        'ach' => 'ach',
        'apple_pay' => 'applePay',
        'google_pay' => 'googlePay',
        'debit_bill_pay' => 'debitBillPay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'token' => 'setToken',
        'credit_card' => 'setCreditCard',
        'ach' => 'setAch',
        'apple_pay' => 'setApplePay',
        'google_pay' => 'setGooglePay',
        'debit_bill_pay' => 'setDebitBillPay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'token' => 'getToken',
        'credit_card' => 'getCreditCard',
        'ach' => 'getAch',
        'apple_pay' => 'getApplePay',
        'google_pay' => 'getGooglePay',
        'debit_bill_pay' => 'getDebitBillPay'
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
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('credit_card', $data ?? [], null);
        $this->setIfExists('ach', $data ?? [], null);
        $this->setIfExists('apple_pay', $data ?? [], null);
        $this->setIfExists('google_pay', $data ?? [], null);
        $this->setIfExists('debit_bill_pay', $data ?? [], null);
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

        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
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
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token The tokenized payment method to use for Payment.
     *
     * @return self
     */
    public function setToken($token)
    {
        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets credit_card
     *
     * @return \TheLogicStudio\ExactPay\Foofoo\PayWithCreditCardCreditCard|null
     */
    public function getCreditCard()
    {
        return $this->container['credit_card'];
    }

    /**
     * Sets credit_card
     *
     * @param \TheLogicStudio\ExactPay\Foofoo\PayWithCreditCardCreditCard|null $credit_card credit_card
     *
     * @return self
     */
    public function setCreditCard($credit_card)
    {
        if (is_null($credit_card)) {
            throw new \InvalidArgumentException('non-nullable credit_card cannot be null');
        }
        $this->container['credit_card'] = $credit_card;

        return $this;
    }

    /**
     * Gets ach
     *
     * @return \TheLogicStudio\ExactPay\Foofoo\PayWithAchAch|null
     */
    public function getAch()
    {
        return $this->container['ach'];
    }

    /**
     * Sets ach
     *
     * @param \TheLogicStudio\ExactPay\Foofoo\PayWithAchAch|null $ach ach
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
     * Gets apple_pay
     *
     * @return \TheLogicStudio\ExactPay\Foofoo\PayWithApplePayApplePay|null
     */
    public function getApplePay()
    {
        return $this->container['apple_pay'];
    }

    /**
     * Sets apple_pay
     *
     * @param \TheLogicStudio\ExactPay\Foofoo\PayWithApplePayApplePay|null $apple_pay apple_pay
     *
     * @return self
     */
    public function setApplePay($apple_pay)
    {
        if (is_null($apple_pay)) {
            throw new \InvalidArgumentException('non-nullable apple_pay cannot be null');
        }
        $this->container['apple_pay'] = $apple_pay;

        return $this;
    }

    /**
     * Gets google_pay
     *
     * @return \TheLogicStudio\ExactPay\Foofoo\PayWithGooglePayGooglePay|null
     */
    public function getGooglePay()
    {
        return $this->container['google_pay'];
    }

    /**
     * Sets google_pay
     *
     * @param \TheLogicStudio\ExactPay\Foofoo\PayWithGooglePayGooglePay|null $google_pay google_pay
     *
     * @return self
     */
    public function setGooglePay($google_pay)
    {
        if (is_null($google_pay)) {
            throw new \InvalidArgumentException('non-nullable google_pay cannot be null');
        }
        $this->container['google_pay'] = $google_pay;

        return $this;
    }

    /**
     * Gets debit_bill_pay
     *
     * @return \TheLogicStudio\ExactPay\Foofoo\PayWithDebitBillPayDebitBillPay|null
     */
    public function getDebitBillPay()
    {
        return $this->container['debit_bill_pay'];
    }

    /**
     * Sets debit_bill_pay
     *
     * @param \TheLogicStudio\ExactPay\Foofoo\PayWithDebitBillPayDebitBillPay|null $debit_bill_pay debit_bill_pay
     *
     * @return self
     */
    public function setDebitBillPay($debit_bill_pay)
    {
        if (is_null($debit_bill_pay)) {
            throw new \InvalidArgumentException('non-nullable debit_bill_pay cannot be null');
        }
        $this->container['debit_bill_pay'] = $debit_bill_pay;

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

