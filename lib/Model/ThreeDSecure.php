<?php
/**
 * ThreeDSecure
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
 * ThreeDSecure Class Doc Comment
 *
 * @category Class
 * @description Merchants/Customers to complete an additional verification step with the card issuer when paying.
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ThreeDSecure implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ThreeDSecure';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'program_protocol' => 'int',
        'directory_server_transaction_id' => 'string',
        'cavv' => 'string',
        'xid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'program_protocol' => null,
        'directory_server_transaction_id' => null,
        'cavv' => null,
        'xid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'program_protocol' => false,
		'directory_server_transaction_id' => false,
		'cavv' => false,
		'xid' => false
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
        'program_protocol' => 'programProtocol',
        'directory_server_transaction_id' => 'directoryServerTransactionId',
        'cavv' => 'cavv',
        'xid' => 'xid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'program_protocol' => 'setProgramProtocol',
        'directory_server_transaction_id' => 'setDirectoryServerTransactionId',
        'cavv' => 'setCavv',
        'xid' => 'setXid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'program_protocol' => 'getProgramProtocol',
        'directory_server_transaction_id' => 'getDirectoryServerTransactionId',
        'cavv' => 'getCavv',
        'xid' => 'getXid'
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

    public const PROGRAM_PROTOCOL_1 = 1;
    public const PROGRAM_PROTOCOL_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProgramProtocolAllowableValues()
    {
        return [
            self::PROGRAM_PROTOCOL_1,
            self::PROGRAM_PROTOCOL_2,
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
        $this->setIfExists('program_protocol', $data ?? [], null);
        $this->setIfExists('directory_server_transaction_id', $data ?? [], null);
        $this->setIfExists('cavv', $data ?? [], null);
        $this->setIfExists('xid', $data ?? [], null);
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

        $allowedValues = $this->getProgramProtocolAllowableValues();
        if (!is_null($this->container['program_protocol']) && !in_array($this->container['program_protocol'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'program_protocol', must be one of '%s'",
                $this->container['program_protocol'],
                implode("', '", $allowedValues)
            );
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
     * Gets program_protocol
     *
     * @return int|null
     */
    public function getProgramProtocol()
    {
        return $this->container['program_protocol'];
    }

    /**
     * Sets program_protocol
     *
     * @param int|null $program_protocol Program protocol value.
     *
     * @return self
     */
    public function setProgramProtocol($program_protocol)
    {
        if (is_null($program_protocol)) {
            throw new \InvalidArgumentException('non-nullable program_protocol cannot be null');
        }
        $allowedValues = $this->getProgramProtocolAllowableValues();
        if (!in_array($program_protocol, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'program_protocol', must be one of '%s'",
                    $program_protocol,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['program_protocol'] = $program_protocol;

        return $this;
    }

    /**
     * Gets directory_server_transaction_id
     *
     * @return string|null
     */
    public function getDirectoryServerTransactionId()
    {
        return $this->container['directory_server_transaction_id'];
    }

    /**
     * Sets directory_server_transaction_id
     *
     * @param string|null $directory_server_transaction_id Identification number of  directory server transaction.
     *
     * @return self
     */
    public function setDirectoryServerTransactionId($directory_server_transaction_id)
    {
        if (is_null($directory_server_transaction_id)) {
            throw new \InvalidArgumentException('non-nullable directory_server_transaction_id cannot be null');
        }
        $this->container['directory_server_transaction_id'] = $directory_server_transaction_id;

        return $this;
    }

    /**
     * Gets cavv
     *
     * @return string|null
     */
    public function getCavv()
    {
        return $this->container['cavv'];
    }

    /**
     * Sets cavv
     *
     * @param string|null $cavv Cavv value for `threeDSecure`.
     *
     * @return self
     */
    public function setCavv($cavv)
    {
        if (is_null($cavv)) {
            throw new \InvalidArgumentException('non-nullable cavv cannot be null');
        }
        $this->container['cavv'] = $cavv;

        return $this;
    }

    /**
     * Gets xid
     *
     * @return string|null
     */
    public function getXid()
    {
        return $this->container['xid'];
    }

    /**
     * Sets xid
     *
     * @param string|null $xid Identification value for the `threeDSecure`.
     *
     * @return self
     */
    public function setXid($xid)
    {
        if (is_null($xid)) {
            throw new \InvalidArgumentException('non-nullable xid cannot be null');
        }
        $this->container['xid'] = $xid;

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


