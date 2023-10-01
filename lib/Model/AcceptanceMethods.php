<?php
/**
 * AcceptanceMethods
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
 * AcceptanceMethods Class Doc Comment
 *
 * @category Class
 * @description The method by which the business accepts the payments. The total value of all the methods can&#39;t exceed 100 percent.
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AcceptanceMethods implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AcceptanceMethods';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'moto' => 'float',
        'internet' => 'float',
        'swipe' => 'float',
        'keyed' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'moto' => null,
        'internet' => null,
        'swipe' => null,
        'keyed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'moto' => false,
		'internet' => false,
		'swipe' => false,
		'keyed' => false
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
        'moto' => 'moto',
        'internet' => 'internet',
        'swipe' => 'swipe',
        'keyed' => 'keyed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'moto' => 'setMoto',
        'internet' => 'setInternet',
        'swipe' => 'setSwipe',
        'keyed' => 'setKeyed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'moto' => 'getMoto',
        'internet' => 'getInternet',
        'swipe' => 'getSwipe',
        'keyed' => 'getKeyed'
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
        $this->setIfExists('moto', $data ?? [], null);
        $this->setIfExists('internet', $data ?? [], null);
        $this->setIfExists('swipe', $data ?? [], null);
        $this->setIfExists('keyed', $data ?? [], null);
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

        if ($this->container['moto'] === null) {
            $invalidProperties[] = "'moto' can't be null";
        }
        if (($this->container['moto'] > 100)) {
            $invalidProperties[] = "invalid value for 'moto', must be smaller than or equal to 100.";
        }

        if (($this->container['moto'] < 0)) {
            $invalidProperties[] = "invalid value for 'moto', must be bigger than or equal to 0.";
        }

        if ($this->container['internet'] === null) {
            $invalidProperties[] = "'internet' can't be null";
        }
        if (($this->container['internet'] > 100)) {
            $invalidProperties[] = "invalid value for 'internet', must be smaller than or equal to 100.";
        }

        if (($this->container['internet'] < 0)) {
            $invalidProperties[] = "invalid value for 'internet', must be bigger than or equal to 0.";
        }

        if ($this->container['swipe'] === null) {
            $invalidProperties[] = "'swipe' can't be null";
        }
        if (($this->container['swipe'] > 100)) {
            $invalidProperties[] = "invalid value for 'swipe', must be smaller than or equal to 100.";
        }

        if (($this->container['swipe'] < 0)) {
            $invalidProperties[] = "invalid value for 'swipe', must be bigger than or equal to 0.";
        }

        if ($this->container['keyed'] === null) {
            $invalidProperties[] = "'keyed' can't be null";
        }
        if (($this->container['keyed'] > 100)) {
            $invalidProperties[] = "invalid value for 'keyed', must be smaller than or equal to 100.";
        }

        if (($this->container['keyed'] < 0)) {
            $invalidProperties[] = "invalid value for 'keyed', must be bigger than or equal to 0.";
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
     * Gets moto
     *
     * @return float
     */
    public function getMoto()
    {
        return $this->container['moto'];
    }

    /**
     * Sets moto
     *
     * @param float $moto Percentage of payments accepted through MOTO [Mail Order / Telephone Order].
     *
     * @return self
     */
    public function setMoto($moto)
    {
        if (is_null($moto)) {
            throw new \InvalidArgumentException('non-nullable moto cannot be null');
        }

        if (($moto > 100)) {
            throw new \InvalidArgumentException('invalid value for $moto when calling AcceptanceMethods., must be smaller than or equal to 100.');
        }
        if (($moto < 0)) {
            throw new \InvalidArgumentException('invalid value for $moto when calling AcceptanceMethods., must be bigger than or equal to 0.');
        }

        $this->container['moto'] = $moto;

        return $this;
    }

    /**
     * Gets internet
     *
     * @return float
     */
    public function getInternet()
    {
        return $this->container['internet'];
    }

    /**
     * Sets internet
     *
     * @param float $internet Percentage of payments accepted through Online websites. Online payments made through hosted payment pages.
     *
     * @return self
     */
    public function setInternet($internet)
    {
        if (is_null($internet)) {
            throw new \InvalidArgumentException('non-nullable internet cannot be null');
        }

        if (($internet > 100)) {
            throw new \InvalidArgumentException('invalid value for $internet when calling AcceptanceMethods., must be smaller than or equal to 100.');
        }
        if (($internet < 0)) {
            throw new \InvalidArgumentException('invalid value for $internet when calling AcceptanceMethods., must be bigger than or equal to 0.');
        }

        $this->container['internet'] = $internet;

        return $this;
    }

    /**
     * Gets swipe
     *
     * @return float
     */
    public function getSwipe()
    {
        return $this->container['swipe'];
    }

    /**
     * Sets swipe
     *
     * @param float $swipe Percentage of payments accepted through Swipe. Swipe are POS / Payment transactions made through Card reader.
     *
     * @return self
     */
    public function setSwipe($swipe)
    {
        if (is_null($swipe)) {
            throw new \InvalidArgumentException('non-nullable swipe cannot be null');
        }

        if (($swipe > 100)) {
            throw new \InvalidArgumentException('invalid value for $swipe when calling AcceptanceMethods., must be smaller than or equal to 100.');
        }
        if (($swipe < 0)) {
            throw new \InvalidArgumentException('invalid value for $swipe when calling AcceptanceMethods., must be bigger than or equal to 0.');
        }

        $this->container['swipe'] = $swipe;

        return $this;
    }

    /**
     * Gets keyed
     *
     * @return float
     */
    public function getKeyed()
    {
        return $this->container['keyed'];
    }

    /**
     * Sets keyed
     *
     * @param float $keyed Percentage of payments accepted through Keyed in card details. Card payment where a person manually types in the card information.
     *
     * @return self
     */
    public function setKeyed($keyed)
    {
        if (is_null($keyed)) {
            throw new \InvalidArgumentException('non-nullable keyed cannot be null');
        }

        if (($keyed > 100)) {
            throw new \InvalidArgumentException('invalid value for $keyed when calling AcceptanceMethods., must be smaller than or equal to 100.');
        }
        if (($keyed < 0)) {
            throw new \InvalidArgumentException('invalid value for $keyed when calling AcceptanceMethods., must be bigger than or equal to 0.');
        }

        $this->container['keyed'] = $keyed;

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


