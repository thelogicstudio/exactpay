<?php
/**
 * AccountReportDetailsMerchantBusinessProfile
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
 * AccountReportDetailsMerchantBusinessProfile Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountReportDetailsMerchantBusinessProfile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountReportDetails_merchant_businessProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'services_description' => 'string',
        'currently_accepting_payments' => 'bool',
        'current_processor' => 'string',
        'current_gateway' => 'string',
        'acceptance_methods' => '\TheLogicStudio\ExactPay\Model\AccountReportDetailsMerchantBusinessProfileAcceptanceMethods',
        'recurring_services' => 'bool',
        'recurring_services_description' => 'string',
        'refund_policy_description' => 'string',
        'payment_time' => 'string',
        'delivery_timeframe' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'services_description' => null,
        'currently_accepting_payments' => null,
        'current_processor' => null,
        'current_gateway' => null,
        'acceptance_methods' => null,
        'recurring_services' => null,
        'recurring_services_description' => null,
        'refund_policy_description' => null,
        'payment_time' => null,
        'delivery_timeframe' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'services_description' => false,
		'currently_accepting_payments' => false,
		'current_processor' => false,
		'current_gateway' => false,
		'acceptance_methods' => false,
		'recurring_services' => false,
		'recurring_services_description' => false,
		'refund_policy_description' => false,
		'payment_time' => false,
		'delivery_timeframe' => false
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
        'services_description' => 'servicesDescription',
        'currently_accepting_payments' => 'currentlyAcceptingPayments',
        'current_processor' => 'currentProcessor',
        'current_gateway' => 'currentGateway',
        'acceptance_methods' => 'acceptanceMethods',
        'recurring_services' => 'recurringServices',
        'recurring_services_description' => 'recurringServicesDescription',
        'refund_policy_description' => 'refundPolicyDescription',
        'payment_time' => 'paymentTime',
        'delivery_timeframe' => 'deliveryTimeframe'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'services_description' => 'setServicesDescription',
        'currently_accepting_payments' => 'setCurrentlyAcceptingPayments',
        'current_processor' => 'setCurrentProcessor',
        'current_gateway' => 'setCurrentGateway',
        'acceptance_methods' => 'setAcceptanceMethods',
        'recurring_services' => 'setRecurringServices',
        'recurring_services_description' => 'setRecurringServicesDescription',
        'refund_policy_description' => 'setRefundPolicyDescription',
        'payment_time' => 'setPaymentTime',
        'delivery_timeframe' => 'setDeliveryTimeframe'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'services_description' => 'getServicesDescription',
        'currently_accepting_payments' => 'getCurrentlyAcceptingPayments',
        'current_processor' => 'getCurrentProcessor',
        'current_gateway' => 'getCurrentGateway',
        'acceptance_methods' => 'getAcceptanceMethods',
        'recurring_services' => 'getRecurringServices',
        'recurring_services_description' => 'getRecurringServicesDescription',
        'refund_policy_description' => 'getRefundPolicyDescription',
        'payment_time' => 'getPaymentTime',
        'delivery_timeframe' => 'getDeliveryTimeframe'
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
        $this->setIfExists('services_description', $data ?? [], null);
        $this->setIfExists('currently_accepting_payments', $data ?? [], null);
        $this->setIfExists('current_processor', $data ?? [], null);
        $this->setIfExists('current_gateway', $data ?? [], null);
        $this->setIfExists('acceptance_methods', $data ?? [], null);
        $this->setIfExists('recurring_services', $data ?? [], null);
        $this->setIfExists('recurring_services_description', $data ?? [], null);
        $this->setIfExists('refund_policy_description', $data ?? [], null);
        $this->setIfExists('payment_time', $data ?? [], null);
        $this->setIfExists('delivery_timeframe', $data ?? [], null);
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
     * Gets services_description
     *
     * @return string|null
     */
    public function getServicesDescription()
    {
        return $this->container['services_description'];
    }

    /**
     * Sets services_description
     *
     * @param string|null $services_description services_description
     *
     * @return self
     */
    public function setServicesDescription($services_description)
    {
        if (is_null($services_description)) {
            throw new \InvalidArgumentException('non-nullable services_description cannot be null');
        }
        $this->container['services_description'] = $services_description;

        return $this;
    }

    /**
     * Gets currently_accepting_payments
     *
     * @return bool|null
     */
    public function getCurrentlyAcceptingPayments()
    {
        return $this->container['currently_accepting_payments'];
    }

    /**
     * Sets currently_accepting_payments
     *
     * @param bool|null $currently_accepting_payments currently_accepting_payments
     *
     * @return self
     */
    public function setCurrentlyAcceptingPayments($currently_accepting_payments)
    {
        if (is_null($currently_accepting_payments)) {
            throw new \InvalidArgumentException('non-nullable currently_accepting_payments cannot be null');
        }
        $this->container['currently_accepting_payments'] = $currently_accepting_payments;

        return $this;
    }

    /**
     * Gets current_processor
     *
     * @return string|null
     */
    public function getCurrentProcessor()
    {
        return $this->container['current_processor'];
    }

    /**
     * Sets current_processor
     *
     * @param string|null $current_processor current_processor
     *
     * @return self
     */
    public function setCurrentProcessor($current_processor)
    {
        if (is_null($current_processor)) {
            throw new \InvalidArgumentException('non-nullable current_processor cannot be null');
        }
        $this->container['current_processor'] = $current_processor;

        return $this;
    }

    /**
     * Gets current_gateway
     *
     * @return string|null
     */
    public function getCurrentGateway()
    {
        return $this->container['current_gateway'];
    }

    /**
     * Sets current_gateway
     *
     * @param string|null $current_gateway current_gateway
     *
     * @return self
     */
    public function setCurrentGateway($current_gateway)
    {
        if (is_null($current_gateway)) {
            throw new \InvalidArgumentException('non-nullable current_gateway cannot be null');
        }
        $this->container['current_gateway'] = $current_gateway;

        return $this;
    }

    /**
     * Gets acceptance_methods
     *
     * @return \TheLogicStudio\ExactPay\Model\AccountReportDetailsMerchantBusinessProfileAcceptanceMethods|null
     */
    public function getAcceptanceMethods()
    {
        return $this->container['acceptance_methods'];
    }

    /**
     * Sets acceptance_methods
     *
     * @param \TheLogicStudio\ExactPay\Model\AccountReportDetailsMerchantBusinessProfileAcceptanceMethods|null $acceptance_methods acceptance_methods
     *
     * @return self
     */
    public function setAcceptanceMethods($acceptance_methods)
    {
        if (is_null($acceptance_methods)) {
            throw new \InvalidArgumentException('non-nullable acceptance_methods cannot be null');
        }
        $this->container['acceptance_methods'] = $acceptance_methods;

        return $this;
    }

    /**
     * Gets recurring_services
     *
     * @return bool|null
     */
    public function getRecurringServices()
    {
        return $this->container['recurring_services'];
    }

    /**
     * Sets recurring_services
     *
     * @param bool|null $recurring_services recurring_services
     *
     * @return self
     */
    public function setRecurringServices($recurring_services)
    {
        if (is_null($recurring_services)) {
            throw new \InvalidArgumentException('non-nullable recurring_services cannot be null');
        }
        $this->container['recurring_services'] = $recurring_services;

        return $this;
    }

    /**
     * Gets recurring_services_description
     *
     * @return string|null
     */
    public function getRecurringServicesDescription()
    {
        return $this->container['recurring_services_description'];
    }

    /**
     * Sets recurring_services_description
     *
     * @param string|null $recurring_services_description recurring_services_description
     *
     * @return self
     */
    public function setRecurringServicesDescription($recurring_services_description)
    {
        if (is_null($recurring_services_description)) {
            throw new \InvalidArgumentException('non-nullable recurring_services_description cannot be null');
        }
        $this->container['recurring_services_description'] = $recurring_services_description;

        return $this;
    }

    /**
     * Gets refund_policy_description
     *
     * @return string|null
     */
    public function getRefundPolicyDescription()
    {
        return $this->container['refund_policy_description'];
    }

    /**
     * Sets refund_policy_description
     *
     * @param string|null $refund_policy_description refund_policy_description
     *
     * @return self
     */
    public function setRefundPolicyDescription($refund_policy_description)
    {
        if (is_null($refund_policy_description)) {
            throw new \InvalidArgumentException('non-nullable refund_policy_description cannot be null');
        }
        $this->container['refund_policy_description'] = $refund_policy_description;

        return $this;
    }

    /**
     * Gets payment_time
     *
     * @return string|null
     */
    public function getPaymentTime()
    {
        return $this->container['payment_time'];
    }

    /**
     * Sets payment_time
     *
     * @param string|null $payment_time payment_time
     *
     * @return self
     */
    public function setPaymentTime($payment_time)
    {
        if (is_null($payment_time)) {
            throw new \InvalidArgumentException('non-nullable payment_time cannot be null');
        }
        $this->container['payment_time'] = $payment_time;

        return $this;
    }

    /**
     * Gets delivery_timeframe
     *
     * @return string|null
     */
    public function getDeliveryTimeframe()
    {
        return $this->container['delivery_timeframe'];
    }

    /**
     * Sets delivery_timeframe
     *
     * @param string|null $delivery_timeframe delivery_timeframe
     *
     * @return self
     */
    public function setDeliveryTimeframe($delivery_timeframe)
    {
        if (is_null($delivery_timeframe)) {
            throw new \InvalidArgumentException('non-nullable delivery_timeframe cannot be null');
        }
        $this->container['delivery_timeframe'] = $delivery_timeframe;

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


