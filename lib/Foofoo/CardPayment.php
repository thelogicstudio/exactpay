<?php
/**
 * CardPayment
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
 * CardPayment Class Doc Comment
 *
 * @category Class
 * @description The response structure returned after a card payment. Not all attributes are relevant for all Payments, and attributes which are not relevant will not be returned.
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CardPayment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'account_id' => 'string',
        'type' => 'string',
        'status' => 'string',
        'approved' => 'bool',
        'captured' => 'bool',
        'capture_details' => '\TheLogicStudio\ExactPay\Foofoo\CaptureDetails',
        'voided' => 'bool',
        'void_details' => '\TheLogicStudio\ExactPay\Foofoo\VoidDetails',
        'refunded' => 'bool',
        'refund_details' => '\TheLogicStudio\ExactPay\Foofoo\RefundDetails',
        'settled' => 'bool',
        'settled_at' => 'string',
        'funded' => 'bool',
        'funded_at' => 'string',
        'authorization' => 'string',
        'amount' => 'float',
        'surcharge_amount' => 'float',
        'currency_code' => 'string',
        'created_at' => 'string',
        'sent_to_bank' => 'bool',
        'bank_response' => '\TheLogicStudio\ExactPay\Foofoo\BankResponse',
        'exact_response' => '\TheLogicStudio\ExactPay\Foofoo\ExactResponse',
        'reference' => '\TheLogicStudio\ExactPay\Foofoo\Reference',
        'receipt' => 'string',
        'payment_method_details' => '\TheLogicStudio\ExactPay\Foofoo\CreditCardDetails',
        'options' => '\TheLogicStudio\ExactPay\Foofoo\PaymentOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'account_id' => null,
        'type' => null,
        'status' => null,
        'approved' => null,
        'captured' => null,
        'capture_details' => null,
        'voided' => null,
        'void_details' => null,
        'refunded' => null,
        'refund_details' => null,
        'settled' => null,
        'settled_at' => null,
        'funded' => null,
        'funded_at' => null,
        'authorization' => null,
        'amount' => null,
        'surcharge_amount' => null,
        'currency_code' => null,
        'created_at' => null,
        'sent_to_bank' => null,
        'bank_response' => null,
        'exact_response' => null,
        'reference' => null,
        'receipt' => null,
        'payment_method_details' => null,
        'options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'account_id' => false,
		'type' => false,
		'status' => false,
		'approved' => false,
		'captured' => false,
		'capture_details' => false,
		'voided' => false,
		'void_details' => false,
		'refunded' => false,
		'refund_details' => false,
		'settled' => false,
		'settled_at' => false,
		'funded' => false,
		'funded_at' => false,
		'authorization' => false,
		'amount' => false,
		'surcharge_amount' => false,
		'currency_code' => false,
		'created_at' => false,
		'sent_to_bank' => false,
		'bank_response' => false,
		'exact_response' => false,
		'reference' => false,
		'receipt' => false,
		'payment_method_details' => false,
		'options' => false
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
        'id' => 'id',
        'account_id' => 'accountId',
        'type' => 'type',
        'status' => 'status',
        'approved' => 'approved',
        'captured' => 'captured',
        'capture_details' => 'captureDetails',
        'voided' => 'voided',
        'void_details' => 'voidDetails',
        'refunded' => 'refunded',
        'refund_details' => 'refundDetails',
        'settled' => 'settled',
        'settled_at' => 'settledAt',
        'funded' => 'funded',
        'funded_at' => 'fundedAt',
        'authorization' => 'authorization',
        'amount' => 'amount',
        'surcharge_amount' => 'surchargeAmount',
        'currency_code' => 'currencyCode',
        'created_at' => 'createdAt',
        'sent_to_bank' => 'sentToBank',
        'bank_response' => 'bankResponse',
        'exact_response' => 'exactResponse',
        'reference' => 'reference',
        'receipt' => 'receipt',
        'payment_method_details' => 'paymentMethodDetails',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'account_id' => 'setAccountId',
        'type' => 'setType',
        'status' => 'setStatus',
        'approved' => 'setApproved',
        'captured' => 'setCaptured',
        'capture_details' => 'setCaptureDetails',
        'voided' => 'setVoided',
        'void_details' => 'setVoidDetails',
        'refunded' => 'setRefunded',
        'refund_details' => 'setRefundDetails',
        'settled' => 'setSettled',
        'settled_at' => 'setSettledAt',
        'funded' => 'setFunded',
        'funded_at' => 'setFundedAt',
        'authorization' => 'setAuthorization',
        'amount' => 'setAmount',
        'surcharge_amount' => 'setSurchargeAmount',
        'currency_code' => 'setCurrencyCode',
        'created_at' => 'setCreatedAt',
        'sent_to_bank' => 'setSentToBank',
        'bank_response' => 'setBankResponse',
        'exact_response' => 'setExactResponse',
        'reference' => 'setReference',
        'receipt' => 'setReceipt',
        'payment_method_details' => 'setPaymentMethodDetails',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'account_id' => 'getAccountId',
        'type' => 'getType',
        'status' => 'getStatus',
        'approved' => 'getApproved',
        'captured' => 'getCaptured',
        'capture_details' => 'getCaptureDetails',
        'voided' => 'getVoided',
        'void_details' => 'getVoidDetails',
        'refunded' => 'getRefunded',
        'refund_details' => 'getRefundDetails',
        'settled' => 'getSettled',
        'settled_at' => 'getSettledAt',
        'funded' => 'getFunded',
        'funded_at' => 'getFundedAt',
        'authorization' => 'getAuthorization',
        'amount' => 'getAmount',
        'surcharge_amount' => 'getSurchargeAmount',
        'currency_code' => 'getCurrencyCode',
        'created_at' => 'getCreatedAt',
        'sent_to_bank' => 'getSentToBank',
        'bank_response' => 'getBankResponse',
        'exact_response' => 'getExactResponse',
        'reference' => 'getReference',
        'receipt' => 'getReceipt',
        'payment_method_details' => 'getPaymentMethodDetails',
        'options' => 'getOptions'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('approved', $data ?? [], null);
        $this->setIfExists('captured', $data ?? [], null);
        $this->setIfExists('capture_details', $data ?? [], null);
        $this->setIfExists('voided', $data ?? [], null);
        $this->setIfExists('void_details', $data ?? [], null);
        $this->setIfExists('refunded', $data ?? [], null);
        $this->setIfExists('refund_details', $data ?? [], null);
        $this->setIfExists('settled', $data ?? [], null);
        $this->setIfExists('settled_at', $data ?? [], null);
        $this->setIfExists('funded', $data ?? [], null);
        $this->setIfExists('funded_at', $data ?? [], null);
        $this->setIfExists('authorization', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('surcharge_amount', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('sent_to_bank', $data ?? [], null);
        $this->setIfExists('bank_response', $data ?? [], null);
        $this->setIfExists('exact_response', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('receipt', $data ?? [], null);
        $this->setIfExists('payment_method_details', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Payment identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id Account identifier.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }
        $this->container['account_id'] = $account_id;

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
     * @param string|null $type The type of Payment.
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The current status of the Payment.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

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
     * @param bool|null $approved Whether or not the Payment was approved.
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
     * @param bool|null $captured Whether or not the amount was captured.
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
     * @return \TheLogicStudio\ExactPay\Foofoo\CaptureDetails|null
     */
    public function getCaptureDetails()
    {
        return $this->container['capture_details'];
    }

    /**
     * Sets capture_details
     *
     * @param \TheLogicStudio\ExactPay\Foofoo\CaptureDetails|null $capture_details capture_details
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
     * @param bool|null $voided Whether or not the payment has been voided.
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
     * @return \TheLogicStudio\ExactPay\Foofoo\VoidDetails|null
     */
    public function getVoidDetails()
    {
        return $this->container['void_details'];
    }

    /**
     * Sets void_details
     *
     * @param \TheLogicStudio\ExactPay\Foofoo\VoidDetails|null $void_details void_details
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
     * @param bool|null $refunded Whether or not the payment has been refunded.
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
     * @return \TheLogicStudio\ExactPay\Foofoo\RefundDetails|null
     */
    public function getRefundDetails()
    {
        return $this->container['refund_details'];
    }

    /**
     * Sets refund_details
     *
     * @param \TheLogicStudio\ExactPay\Foofoo\RefundDetails|null $refund_details refund_details
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
     * @param bool|null $settled Whether or not the Payment has been settled.
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
     * @param string|null $settled_at It shows the date and time when the transaction was settled.
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
     * Gets funded
     *
     * @return bool|null
     */
    public function getFunded()
    {
        return $this->container['funded'];
    }

    /**
     * Sets funded
     *
     * @param bool|null $funded Whether or not the Payment has been funded.
     *
     * @return self
     */
    public function setFunded($funded)
    {
        if (is_null($funded)) {
            throw new \InvalidArgumentException('non-nullable funded cannot be null');
        }
        $this->container['funded'] = $funded;

        return $this;
    }

    /**
     * Gets funded_at
     *
     * @return string|null
     */
    public function getFundedAt()
    {
        return $this->container['funded_at'];
    }

    /**
     * Sets funded_at
     *
     * @param string|null $funded_at It shows the date and time when the transaction was funded.
     *
     * @return self
     */
    public function setFundedAt($funded_at)
    {
        if (is_null($funded_at)) {
            throw new \InvalidArgumentException('non-nullable funded_at cannot be null');
        }
        $this->container['funded_at'] = $funded_at;

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
     * @param string|null $authorization Authorization Identification of the Payment.
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
     * @param float|null $amount Total amount including all surcharges, taxes etc. in smallest currency unit, for example, in cents.
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
     * Gets surcharge_amount
     *
     * @return float|null
     */
    public function getSurchargeAmount()
    {
        return $this->container['surcharge_amount'];
    }

    /**
     * Sets surcharge_amount
     *
     * @param float|null $surcharge_amount The surcharge amount for the Payment, in smallest currency unit, for example, in cents.
     *
     * @return self
     */
    public function setSurchargeAmount($surcharge_amount)
    {
        if (is_null($surcharge_amount)) {
            throw new \InvalidArgumentException('non-nullable surcharge_amount cannot be null');
        }
        $this->container['surcharge_amount'] = $surcharge_amount;

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
     * @param string|null $currency_code It shows the currency in which the Payment was processed.
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
     * @param string|null $created_at Date and time when the Payment was created.
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
     * @param bool|null $sent_to_bank Whether or not the Payment passed our internal validation and was sent for processing.
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
     * Gets bank_response
     *
     * @return \TheLogicStudio\ExactPay\Foofoo\BankResponse|null
     */
    public function getBankResponse()
    {
        return $this->container['bank_response'];
    }

    /**
     * Sets bank_response
     *
     * @param \TheLogicStudio\ExactPay\Foofoo\BankResponse|null $bank_response bank_response
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
     * @return \TheLogicStudio\ExactPay\Foofoo\ExactResponse|null
     */
    public function getExactResponse()
    {
        return $this->container['exact_response'];
    }

    /**
     * Sets exact_response
     *
     * @param \TheLogicStudio\ExactPay\Foofoo\ExactResponse|null $exact_response exact_response
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
     * Gets reference
     *
     * @return \TheLogicStudio\ExactPay\Foofoo\Reference|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param \TheLogicStudio\ExactPay\Foofoo\Reference|null $reference reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets receipt
     *
     * @return string|null
     */
    public function getReceipt()
    {
        return $this->container['receipt'];
    }

    /**
     * Sets receipt
     *
     * @param string|null $receipt Receipt of the Payment, if the 'options.generateReceipt' was specified.
     *
     * @return self
     */
    public function setReceipt($receipt)
    {
        if (is_null($receipt)) {
            throw new \InvalidArgumentException('non-nullable receipt cannot be null');
        }
        $this->container['receipt'] = $receipt;

        return $this;
    }

    /**
     * Gets payment_method_details
     *
     * @return \TheLogicStudio\ExactPay\Foofoo\CreditCardDetails|null
     */
    public function getPaymentMethodDetails()
    {
        return $this->container['payment_method_details'];
    }

    /**
     * Sets payment_method_details
     *
     * @param \TheLogicStudio\ExactPay\Foofoo\CreditCardDetails|null $payment_method_details payment_method_details
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
     * Gets options
     *
     * @return \TheLogicStudio\ExactPay\Foofoo\PaymentOptions|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \TheLogicStudio\ExactPay\Foofoo\PaymentOptions|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

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


