<?php
/**
 * AccountRegisterApplePayDomains400ResponseIssuesInner
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
 * AccountRegisterApplePayDomains400ResponseIssuesInner Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountRegisterApplePayDomains400ResponseIssuesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'accountRegisterApplePayDomains_400_response_issues_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'path' => 'string[]',
        'message' => 'string',
        'type' => 'string',
        'minimum' => 'float',
        'maximum' => 'float',
        'expected' => 'string',
        'received' => 'string',
        'inclusive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'path' => null,
        'message' => null,
        'type' => null,
        'minimum' => null,
        'maximum' => null,
        'expected' => null,
        'received' => null,
        'inclusive' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'code' => false,
		'path' => false,
		'message' => false,
		'type' => false,
		'minimum' => false,
		'maximum' => false,
		'expected' => false,
		'received' => false,
		'inclusive' => false
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
        'code' => 'code',
        'path' => 'path',
        'message' => 'message',
        'type' => 'type',
        'minimum' => 'minimum',
        'maximum' => 'maximum',
        'expected' => 'expected',
        'received' => 'received',
        'inclusive' => 'inclusive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'path' => 'setPath',
        'message' => 'setMessage',
        'type' => 'setType',
        'minimum' => 'setMinimum',
        'maximum' => 'setMaximum',
        'expected' => 'setExpected',
        'received' => 'setReceived',
        'inclusive' => 'setInclusive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'path' => 'getPath',
        'message' => 'getMessage',
        'type' => 'getType',
        'minimum' => 'getMinimum',
        'maximum' => 'getMaximum',
        'expected' => 'getExpected',
        'received' => 'getReceived',
        'inclusive' => 'getInclusive'
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

    public const CODE_INVALID_TYPE = 'invalid_type';
    public const CODE_TOO_SMALL = 'too_small';
    public const CODE_TOO_BIG = 'too_big';
    public const TYPE__ARRAY = 'array';
    public const EXPECTED__ARRAY = 'array';
    public const RECEIVED_STRING = 'string';
    public const RECEIVED_NUMBER = 'number';
    public const RECEIVED_OBJECT = 'object';
    public const RECEIVED_BOOLEAN = 'boolean';
    public const RECEIVED_NULL = 'null';
    public const RECEIVED_UNDEFINED = 'undefined';
    public const RECEIVED_NAN = 'nan';
    public const RECEIVED_INTEGER = 'integer';
    public const RECEIVED_FLOAT = 'float';
    public const RECEIVED_DATE = 'date';
    public const RECEIVED_BIGINT = 'bigint';
    public const RECEIVED_MAP = 'map';
    public const RECEIVED_SET = 'set';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_INVALID_TYPE,
            self::CODE_TOO_SMALL,
            self::CODE_TOO_BIG,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__ARRAY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExpectedAllowableValues()
    {
        return [
            self::EXPECTED__ARRAY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReceivedAllowableValues()
    {
        return [
            self::RECEIVED_STRING,
            self::RECEIVED_NUMBER,
            self::RECEIVED_OBJECT,
            self::RECEIVED_BOOLEAN,
            self::RECEIVED_NULL,
            self::RECEIVED_UNDEFINED,
            self::RECEIVED_NAN,
            self::RECEIVED_INTEGER,
            self::RECEIVED_FLOAT,
            self::RECEIVED_DATE,
            self::RECEIVED_BIGINT,
            self::RECEIVED_MAP,
            self::RECEIVED_SET,
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('minimum', $data ?? [], null);
        $this->setIfExists('maximum', $data ?? [], null);
        $this->setIfExists('expected', $data ?? [], null);
        $this->setIfExists('received', $data ?? [], null);
        $this->setIfExists('inclusive', $data ?? [], null);
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

        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'code', must be one of '%s'",
                $this->container['code'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getExpectedAllowableValues();
        if (!is_null($this->container['expected']) && !in_array($this->container['expected'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'expected', must be one of '%s'",
                $this->container['expected'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReceivedAllowableValues();
        if (!is_null($this->container['received']) && !in_array($this->container['received'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'received', must be one of '%s'",
                $this->container['received'],
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Validation error code. The retrieved value will drive which extra fields will be shown.
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $allowedValues = $this->getCodeAllowableValues();
        if (!in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'code', must be one of '%s'",
                    $code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string[]|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string[]|null $path Field location in the request body.
     *
     * @return self
     */
    public function setPath($path)
    {
        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message Message explaining the validation error.
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of the data failing validation. It is only retrieved when `code = too_small` or `code = too_big`.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets minimum
     *
     * @return float|null
     */
    public function getMinimum()
    {
        return $this->container['minimum'];
    }

    /**
     * Sets minimum
     *
     * @param float|null $minimum The expected minimum length/value. It is only retrieved when `code = too_small`.
     *
     * @return self
     */
    public function setMinimum($minimum)
    {
        if (is_null($minimum)) {
            throw new \InvalidArgumentException('non-nullable minimum cannot be null');
        }
        $this->container['minimum'] = $minimum;

        return $this;
    }

    /**
     * Gets maximum
     *
     * @return float|null
     */
    public function getMaximum()
    {
        return $this->container['maximum'];
    }

    /**
     * Sets maximum
     *
     * @param float|null $maximum The expected maximum length/value. It is only retrieved when `code = too_big`.
     *
     * @return self
     */
    public function setMaximum($maximum)
    {
        if (is_null($maximum)) {
            throw new \InvalidArgumentException('non-nullable maximum cannot be null');
        }
        $this->container['maximum'] = $maximum;

        return $this;
    }

    /**
     * Gets expected
     *
     * @return string|null
     */
    public function getExpected()
    {
        return $this->container['expected'];
    }

    /**
     * Sets expected
     *
     * @param string|null $expected Expected field type. It is only retrieved when `code = invalid_type`.
     *
     * @return self
     */
    public function setExpected($expected)
    {
        if (is_null($expected)) {
            throw new \InvalidArgumentException('non-nullable expected cannot be null');
        }
        $allowedValues = $this->getExpectedAllowableValues();
        if (!in_array($expected, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'expected', must be one of '%s'",
                    $expected,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['expected'] = $expected;

        return $this;
    }

    /**
     * Gets received
     *
     * @return string|null
     */
    public function getReceived()
    {
        return $this->container['received'];
    }

    /**
     * Sets received
     *
     * @param string|null $received Field type received. It is only retrieved when `code = invalid_type`.
     *
     * @return self
     */
    public function setReceived($received)
    {
        if (is_null($received)) {
            throw new \InvalidArgumentException('non-nullable received cannot be null');
        }
        $allowedValues = $this->getReceivedAllowableValues();
        if (!in_array($received, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'received', must be one of '%s'",
                    $received,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['received'] = $received;

        return $this;
    }

    /**
     * Gets inclusive
     *
     * @return bool|null
     */
    public function getInclusive()
    {
        return $this->container['inclusive'];
    }

    /**
     * Sets inclusive
     *
     * @param bool|null $inclusive Whether the minimum or maximum is included in the range of acceptable values. It is only retrieved when `code = too_small` or `code = too_big`.
     *
     * @return self
     */
    public function setInclusive($inclusive)
    {
        if (is_null($inclusive)) {
            throw new \InvalidArgumentException('non-nullable inclusive cannot be null');
        }
        $this->container['inclusive'] = $inclusive;

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


