<?php
/**
 * MerchantTermsNConditions
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
 * MerchantTermsNConditions Class Doc Comment
 *
 * @category Class
 * @description Whether the Organization or Account has agreed to the Terms and Conditions. This field will be available in response only when the termsNConditions were sent to exact payments when the Onboarding Application was created.
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantTermsNConditions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Merchant_termsNConditions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exact_payments' => '\DateTime',
        'dwolla' => '\DateTime',
        'notifications' => '\DateTime',
        'dwolla_accepted' => 'bool',
        'exact_payments_accepted' => 'bool',
        'notifications_accepted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'exact_payments' => 'date-time',
        'dwolla' => 'date-time',
        'notifications' => 'date-time',
        'dwolla_accepted' => null,
        'exact_payments_accepted' => null,
        'notifications_accepted' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'exact_payments' => false,
		'dwolla' => false,
		'notifications' => false,
		'dwolla_accepted' => false,
		'exact_payments_accepted' => false,
		'notifications_accepted' => false
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
        'exact_payments' => 'exactPayments',
        'dwolla' => 'dwolla',
        'notifications' => 'notifications',
        'dwolla_accepted' => 'dwollaAccepted',
        'exact_payments_accepted' => 'exactPaymentsAccepted',
        'notifications_accepted' => 'notificationsAccepted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exact_payments' => 'setExactPayments',
        'dwolla' => 'setDwolla',
        'notifications' => 'setNotifications',
        'dwolla_accepted' => 'setDwollaAccepted',
        'exact_payments_accepted' => 'setExactPaymentsAccepted',
        'notifications_accepted' => 'setNotificationsAccepted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exact_payments' => 'getExactPayments',
        'dwolla' => 'getDwolla',
        'notifications' => 'getNotifications',
        'dwolla_accepted' => 'getDwollaAccepted',
        'exact_payments_accepted' => 'getExactPaymentsAccepted',
        'notifications_accepted' => 'getNotificationsAccepted'
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
        $this->setIfExists('exact_payments', $data ?? [], null);
        $this->setIfExists('dwolla', $data ?? [], null);
        $this->setIfExists('notifications', $data ?? [], null);
        $this->setIfExists('dwolla_accepted', $data ?? [], null);
        $this->setIfExists('exact_payments_accepted', $data ?? [], null);
        $this->setIfExists('notifications_accepted', $data ?? [], null);
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
     * Gets exact_payments
     *
     * @return \DateTime|null
     */
    public function getExactPayments()
    {
        return $this->container['exact_payments'];
    }

    /**
     * Sets exact_payments
     *
     * @param \DateTime|null $exact_payments Indicates when the Onboarding Applicant agreed to Exact Payment's terms and conditions. This field will not be populated if Exact termsNConditions.exactPayments field is not sent when submitting the Onboarding Application
     *
     * @return self
     */
    public function setExactPayments($exact_payments)
    {
        if (is_null($exact_payments)) {
            throw new \InvalidArgumentException('non-nullable exact_payments cannot be null');
        }
        $this->container['exact_payments'] = $exact_payments;

        return $this;
    }

    /**
     * Gets dwolla
     *
     * @return \DateTime|null
     */
    public function getDwolla()
    {
        return $this->container['dwolla'];
    }

    /**
     * Sets dwolla
     *
     * @param \DateTime|null $dwolla Indicates when the Onboarding Applicant agreed to [Dwolla's terms and conditions](https://www.dwolla.com/legal/platform-agreement/). This field will not be populated if termsNConditions.dwolla field is not sent when submitting the Onboarding Application
     *
     * @return self
     */
    public function setDwolla($dwolla)
    {
        if (is_null($dwolla)) {
            throw new \InvalidArgumentException('non-nullable dwolla cannot be null');
        }
        $this->container['dwolla'] = $dwolla;

        return $this;
    }

    /**
     * Gets notifications
     *
     * @return \DateTime|null
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param \DateTime|null $notifications Indicates when the Onboarding Applicant agreed to Exact Payment's notification and communication policies. This field will not be populated if Exact termsNConditions.notifications field is not sent when submitting the Onboarding Application
     *
     * @return self
     */
    public function setNotifications($notifications)
    {
        if (is_null($notifications)) {
            throw new \InvalidArgumentException('non-nullable notifications cannot be null');
        }
        $this->container['notifications'] = $notifications;

        return $this;
    }

    /**
     * Gets dwolla_accepted
     *
     * @return bool|null
     */
    public function getDwollaAccepted()
    {
        return $this->container['dwolla_accepted'];
    }

    /**
     * Sets dwolla_accepted
     *
     * @param bool|null $dwolla_accepted Indicates whether the Onboarding Applicant agreed to Exact Payment's terms and conditions or not.
     *
     * @return self
     */
    public function setDwollaAccepted($dwolla_accepted)
    {
        if (is_null($dwolla_accepted)) {
            throw new \InvalidArgumentException('non-nullable dwolla_accepted cannot be null');
        }
        $this->container['dwolla_accepted'] = $dwolla_accepted;

        return $this;
    }

    /**
     * Gets exact_payments_accepted
     *
     * @return bool|null
     */
    public function getExactPaymentsAccepted()
    {
        return $this->container['exact_payments_accepted'];
    }

    /**
     * Sets exact_payments_accepted
     *
     * @param bool|null $exact_payments_accepted Indicates whether the Onboarding Applicant agreed to [Dwolla's terms and conditions](https://www.dwolla.com/legal/platform-agreement/) or not.
     *
     * @return self
     */
    public function setExactPaymentsAccepted($exact_payments_accepted)
    {
        if (is_null($exact_payments_accepted)) {
            throw new \InvalidArgumentException('non-nullable exact_payments_accepted cannot be null');
        }
        $this->container['exact_payments_accepted'] = $exact_payments_accepted;

        return $this;
    }

    /**
     * Gets notifications_accepted
     *
     * @return bool|null
     */
    public function getNotificationsAccepted()
    {
        return $this->container['notifications_accepted'];
    }

    /**
     * Sets notifications_accepted
     *
     * @param bool|null $notifications_accepted Indicates whether the Onboarding Applicant agreed to Exact Payment's notification and communication policies or not.
     *
     * @return self
     */
    public function setNotificationsAccepted($notifications_accepted)
    {
        if (is_null($notifications_accepted)) {
            throw new \InvalidArgumentException('non-nullable notifications_accepted cannot be null');
        }
        $this->container['notifications_accepted'] = $notifications_accepted;

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


