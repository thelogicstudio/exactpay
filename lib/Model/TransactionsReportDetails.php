<?php
/**
 * TransactionsReportDetails
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
 * TransactionsReportDetails Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionsReportDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionsReportDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account' => 'string',
        'approved' => 'bool',
        'captured' => 'bool',
        'capture_details' => '\TheLogicStudio\ExactPay\Model\TransactionsReportDetailsCaptureDetails',
        'refunded' => 'bool',
        'refund_details' => '\TheLogicStudio\ExactPay\Model\TransactionsReportDetailsCaptureDetails',
        'voided' => 'bool',
        'void_details' => '\TheLogicStudio\ExactPay\Model\TransactionsReportDetailsCaptureDetails',
        'settled' => 'bool',
        'settled_at' => 'string',
        'payment_id' => 'string',
        'authorization' => 'string',
        'amount' => 'float',
        'currency_code' => 'string',
        'sent_to_bank' => 'bool',
        'payment_method_details' => '\TheLogicStudio\ExactPay\Model\TransactionsReportDetailsPaymentMethodDetails',
        'bank_response' => '\TheLogicStudio\ExactPay\Model\TransactionsReportDetailsBankResponse',
        'exact_response' => '\TheLogicStudio\ExactPay\Model\TransactionsReportDetailsBankResponse',
        'ecommerce_flag' => 'string',
        'created_at' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account' => null,
        'approved' => null,
        'captured' => null,
        'capture_details' => null,
        'refunded' => null,
        'refund_details' => null,
        'voided' => null,
        'void_details' => null,
        'settled' => null,
        'settled_at' => null,
        'payment_id' => null,
        'authorization' => null,
        'amount' => null,
        'currency_code' => null,
        'sent_to_bank' => null,
        'payment_method_details' => null,
        'bank_response' => null,
        'exact_response' => null,
        'ecommerce_flag' => null,
        'created_at' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account' => false,
		'approved' => false,
		'captured' => false,
		'capture_details' => false,
		'refunded' => false,
		'refund_details' => false,
		'voided' => false,
		'void_details' => false,
		'settled' => false,
		'settled_at' => false,
		'payment_id' => false,
		'authorization' => false,
		'amount' => false,
		'currency_code' => false,
		'sent_to_bank' => false,
		'payment_method_details' => false,
		'bank_response' => false,
		'exact_response' => false,
		'ecommerce_flag' => false,
		'created_at' => false,
		'type' => false
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
        'account' => 'account',
        'approved' => 'approved',
        'captured' => 'captured',
        'capture_details' => 'captureDetails',
        'refunded' => 'refunded',
        'refund_details' => 'refundDetails',
        'voided' => 'voided',
        'void_details' => 'voidDetails',
        'settled' => 'settled',
        'settled_at' => 'settledAt',
        'payment_id' => 'paymentId',
        'authorization' => 'authorization',
        'amount' => 'amount',
        'currency_code' => 'currencyCode',
        'sent_to_bank' => 'sentToBank',
        'payment_method_details' => 'paymentMethodDetails',
        'bank_response' => 'bankResponse',
        'exact_response' => 'exactResponse',
        'ecommerce_flag' => 'ecommerceFlag',
        'created_at' => 'createdAt',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'approved' => 'setApproved',
        'captured' => 'setCaptured',
        'capture_details' => 'setCaptureDetails',
        'refunded' => 'setRefunded',
        'refund_details' => 'setRefundDetails',
        'voided' => 'setVoided',
        'void_details' => 'setVoidDetails',
        'settled' => 'setSettled',
        'settled_at' => 'setSettledAt',
        'payment_id' => 'setPaymentId',
        'authorization' => 'setAuthorization',
        'amount' => 'setAmount',
        'currency_code' => 'setCurrencyCode',
        'sent_to_bank' => 'setSentToBank',
        'payment_method_details' => 'setPaymentMethodDetails',
        'bank_response' => 'setBankResponse',
        'exact_response' => 'setExactResponse',
        'ecommerce_flag' => 'setEcommerceFlag',
        'created_at' => 'setCreatedAt',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'approved' => 'getApproved',
        'captured' => 'getCaptured',
        'capture_details' => 'getCaptureDetails',
        'refunded' => 'getRefunded',
        'refund_details' => 'getRefundDetails',
        'voided' => 'getVoided',
        'void_details' => 'getVoidDetails',
        'settled' => 'getSettled',
        'settled_at' => 'getSettledAt',
        'payment_id' => 'getPaymentId',
        'authorization' => 'getAuthorization',
        'amount' => 'getAmount',
        'currency_code' => 'getCurrencyCode',
        'sent_to_bank' => 'getSentToBank',
        'payment_method_details' => 'getPaymentMethodDetails',
        'bank_response' => 'getBankResponse',
        'exact_response' => 'getExactResponse',
        'ecommerce_flag' => 'getEcommerceFlag',
        'created_at' => 'getCreatedAt',
        'type' => 'getType'
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
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('approved', $data ?? [], null);
        $this->setIfExists('captured', $data ?? [], null);
        $this->setIfExists('capture_details', $data ?? [], null);
        $this->setIfExists('refunded', $data ?? [], null);
        $this->setIfExists('refund_details', $data ?? [], null);
        $this->setIfExists('voided', $data ?? [], null);
        $this->setIfExists('void_details', $data ?? [], null);
        $this->setIfExists('settled', $data ?? [], null);
        $this->setIfExists('settled_at', $data ?? [], null);
        $this->setIfExists('payment_id', $data ?? [], null);
        $this->setIfExists('authorization', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('sent_to_bank', $data ?? [], null);
        $this->setIfExists('payment_method_details', $data ?? [], null);
        $this->setIfExists('bank_response', $data ?? [], null);
        $this->setIfExists('exact_response', $data ?? [], null);
        $this->setIfExists('ecommerce_flag', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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
     * Gets account
     *
     * @return string|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string|null $account account
     *
     * @return self
     */
    public function setAccount($account)
    {
        if (is_null($account)) {
            throw new \InvalidArgumentException('non-nullable account cannot be null');
        }
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets approved
     *
     * @return bool|null
     */
    public function getApproved()
    {
        return $this->container['approved'];
    }

    /**
     * Sets approved
     *
     * @param bool|null $approved approved
     *
     * @return self
     */
    public function setApproved($approved)
    {
        if (is_null($approved)) {
            throw new \InvalidArgumentException('non-nullable approved cannot be null');
        }
        $this->container['approved'] = $approved;

        return $this;
    }

    /**
     * Gets captured
     *
     * @return bool|null
     */
    public function getCaptured()
    {
        return $this->container['captured'];
    }

    /**
     * Sets captured
     *
     * @param bool|null $captured captured
     *
     * @return self
     */
    public function setCaptured($captured)
    {
        if (is_null($captured)) {
            throw new \InvalidArgumentException('non-nullable captured cannot be null');
        }
        $this->container['captured'] = $captured;

        return $this;
    }

    /**
     * Gets capture_details
     *
     * @return \TheLogicStudio\ExactPay\Model\TransactionsReportDetailsCaptureDetails|null
     */
    public function getCaptureDetails()
    {
        return $this->container['capture_details'];
    }

    /**
     * Sets capture_details
     *
     * @param \TheLogicStudio\ExactPay\Model\TransactionsReportDetailsCaptureDetails|null $capture_details capture_details
     *
     * @return self
     */
    public function setCaptureDetails($capture_details)
    {
        if (is_null($capture_details)) {
            throw new \InvalidArgumentException('non-nullable capture_details cannot be null');
        }
        $this->container['capture_details'] = $capture_details;

        return $this;
    }

    /**
     * Gets refunded
     *
     * @return bool|null
     */
    public function getRefunded()
    {
        return $this->container['refunded'];
    }

    /**
     * Sets refunded
     *
     * @param bool|null $refunded refunded
     *
     * @return self
     */
    public function setRefunded($refunded)
    {
        if (is_null($refunded)) {
            throw new \InvalidArgumentException('non-nullable refunded cannot be null');
        }
        $this->container['refunded'] = $refunded;

        return $this;
    }

    /**
     * Gets refund_details
     *
     * @return \TheLogicStudio\ExactPay\Model\TransactionsReportDetailsCaptureDetails|null
     */
    public function getRefundDetails()
    {
        return $this->container['refund_details'];
    }

    /**
     * Sets refund_details
     *
     * @param \TheLogicStudio\ExactPay\Model\TransactionsReportDetailsCaptureDetails|null $refund_details refund_details
     *
     * @return self
     */
    public function setRefundDetails($refund_details)
    {
        if (is_null($refund_details)) {
            throw new \InvalidArgumentException('non-nullable refund_details cannot be null');
        }
        $this->container['refund_details'] = $refund_details;

        return $this;
    }

    /**
     * Gets voided
     *
     * @return bool|null
     */
    public function getVoided()
    {
        return $this->container['voided'];
    }

    /**
     * Sets voided
     *
     * @param bool|null $voided voided
     *
     * @return self
     */
    public function setVoided($voided)
    {
        if (is_null($voided)) {
            throw new \InvalidArgumentException('non-nullable voided cannot be null');
        }
        $this->container['voided'] = $voided;

        return $this;
    }

    /**
     * Gets void_details
     *
     * @return \TheLogicStudio\ExactPay\Model\TransactionsReportDetailsCaptureDetails|null
     */
    public function getVoidDetails()
    {
        return $this->container['void_details'];
    }

    /**
     * Sets void_details
     *
     * @param \TheLogicStudio\ExactPay\Model\TransactionsReportDetailsCaptureDetails|null $void_details void_details
     *
     * @return self
     */
    public function setVoidDetails($void_details)
    {
        if (is_null($void_details)) {
            throw new \InvalidArgumentException('non-nullable void_details cannot be null');
        }
        $this->container['void_details'] = $void_details;

        return $this;
    }

    /**
     * Gets settled
     *
     * @return bool|null
     */
    public function getSettled()
    {
        return $this->container['settled'];
    }

    /**
     * Sets settled
     *
     * @param bool|null $settled settled
     *
     * @return self
     */
    public function setSettled($settled)
    {
        if (is_null($settled)) {
            throw new \InvalidArgumentException('non-nullable settled cannot be null');
        }
        $this->container['settled'] = $settled;

        return $this;
    }

    /**
     * Gets settled_at
     *
     * @return string|null
     */
    public function getSettledAt()
    {
        return $this->container['settled_at'];
    }

    /**
     * Sets settled_at
     *
     * @param string|null $settled_at settled_at
     *
     * @return self
     */
    public function setSettledAt($settled_at)
    {
        if (is_null($settled_at)) {
            throw new \InvalidArgumentException('non-nullable settled_at cannot be null');
        }
        $this->container['settled_at'] = $settled_at;

        return $this;
    }

    /**
     * Gets payment_id
     *
     * @return string|null
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     *
     * @param string|null $payment_id payment_id
     *
     * @return self
     */
    public function setPaymentId($payment_id)
    {
        if (is_null($payment_id)) {
            throw new \InvalidArgumentException('non-nullable payment_id cannot be null');
        }
        $this->container['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Gets authorization
     *
     * @return string|null
     */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
     * Sets authorization
     *
     * @param string|null $authorization authorization
     *
     * @return self
     */
    public function setAuthorization($authorization)
    {
        if (is_null($authorization)) {
            throw new \InvalidArgumentException('non-nullable authorization cannot be null');
        }
        $this->container['authorization'] = $authorization;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code currency_code
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        if (is_null($currency_code)) {
            throw new \InvalidArgumentException('non-nullable currency_code cannot be null');
        }
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets sent_to_bank
     *
     * @return bool|null
     */
    public function getSentToBank()
    {
        return $this->container['sent_to_bank'];
    }

    /**
     * Sets sent_to_bank
     *
     * @param bool|null $sent_to_bank sent_to_bank
     *
     * @return self
     */
    public function setSentToBank($sent_to_bank)
    {
        if (is_null($sent_to_bank)) {
            throw new \InvalidArgumentException('non-nullable sent_to_bank cannot be null');
        }
        $this->container['sent_to_bank'] = $sent_to_bank;

        return $this;
    }

    /**
     * Gets payment_method_details
     *
     * @return \TheLogicStudio\ExactPay\Model\TransactionsReportDetailsPaymentMethodDetails|null
     */
    public function getPaymentMethodDetails()
    {
        return $this->container['payment_method_details'];
    }

    /**
     * Sets payment_method_details
     *
     * @param \TheLogicStudio\ExactPay\Model\TransactionsReportDetailsPaymentMethodDetails|null $payment_method_details payment_method_details
     *
     * @return self
     */
    public function setPaymentMethodDetails($payment_method_details)
    {
        if (is_null($payment_method_details)) {
            throw new \InvalidArgumentException('non-nullable payment_method_details cannot be null');
        }
        $this->container['payment_method_details'] = $payment_method_details;

        return $this;
    }

    /**
     * Gets bank_response
     *
     * @return \TheLogicStudio\ExactPay\Model\TransactionsReportDetailsBankResponse|null
     */
    public function getBankResponse()
    {
        return $this->container['bank_response'];
    }

    /**
     * Sets bank_response
     *
     * @param \TheLogicStudio\ExactPay\Model\TransactionsReportDetailsBankResponse|null $bank_response bank_response
     *
     * @return self
     */
    public function setBankResponse($bank_response)
    {
        if (is_null($bank_response)) {
            throw new \InvalidArgumentException('non-nullable bank_response cannot be null');
        }
        $this->container['bank_response'] = $bank_response;

        return $this;
    }

    /**
     * Gets exact_response
     *
     * @return \TheLogicStudio\ExactPay\Model\TransactionsReportDetailsBankResponse|null
     */
    public function getExactResponse()
    {
        return $this->container['exact_response'];
    }

    /**
     * Sets exact_response
     *
     * @param \TheLogicStudio\ExactPay\Model\TransactionsReportDetailsBankResponse|null $exact_response exact_response
     *
     * @return self
     */
    public function setExactResponse($exact_response)
    {
        if (is_null($exact_response)) {
            throw new \InvalidArgumentException('non-nullable exact_response cannot be null');
        }
        $this->container['exact_response'] = $exact_response;

        return $this;
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
     * @param string|null $ecommerce_flag ecommerce_flag
     *
     * @return self
     */
    public function setEcommerceFlag($ecommerce_flag)
    {
        if (is_null($ecommerce_flag)) {
            throw new \InvalidArgumentException('non-nullable ecommerce_flag cannot be null');
        }
        $this->container['ecommerce_flag'] = $ecommerce_flag;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

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
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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


