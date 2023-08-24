<?php
/**
 * OnboardingWithPrincipalResponse
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

namespace TheLogicStudio\ExactPay\Model;

use \ArrayAccess;
use \TheLogicStudio\ExactPay\ObjectSerializer;

/**
 * OnboardingWithPrincipalResponse Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\ExactPay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OnboardingWithPrincipalResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OnboardingWithPrincipalResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'merchant' => '\TheLogicStudio\ExactPay\Model\Merchant',
        'status' => 'string',
        'client_ip' => 'string',
        'organization' => 'string',
        'workflow' => 'string',
        'bank_boarding' => '\TheLogicStudio\ExactPay\Model\BankBoarding',
        'status_updated_at' => 'string',
        'approved_at' => 'string',
        'terminated_at' => 'string',
        'closed_at' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'secret' => 'string',
        'kyc_results' => '\TheLogicStudio\ExactPay\Model\KycResults[]',
        '__v' => 'float',
        'account' => 'string',
        'type' => 'string',
        'is_deleted' => 'bool',
        'is_locked' => 'bool',
        'document_request' => '\TheLogicStudio\ExactPay\Model\DocumentRequest[]',
        'documents' => '\TheLogicStudio\ExactPay\Model\Document[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        '_id' => null,
        'merchant' => null,
        'status' => null,
        'client_ip' => null,
        'organization' => null,
        'workflow' => null,
        'bank_boarding' => null,
        'status_updated_at' => null,
        'approved_at' => null,
        'terminated_at' => null,
        'closed_at' => null,
        'created_at' => null,
        'updated_at' => null,
        'secret' => null,
        'kyc_results' => null,
        '__v' => null,
        'account' => null,
        'type' => null,
        'is_deleted' => null,
        'is_locked' => null,
        'document_request' => null,
        'documents' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
		'merchant' => false,
		'status' => false,
		'client_ip' => false,
		'organization' => false,
		'workflow' => false,
		'bank_boarding' => false,
		'status_updated_at' => false,
		'approved_at' => false,
		'terminated_at' => true,
		'closed_at' => true,
		'created_at' => false,
		'updated_at' => false,
		'secret' => false,
		'kyc_results' => false,
		'__v' => false,
		'account' => false,
		'type' => false,
		'is_deleted' => false,
		'is_locked' => false,
		'document_request' => false,
		'documents' => false
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
        '_id' => '_id',
        'merchant' => 'merchant',
        'status' => 'status',
        'client_ip' => 'clientIp',
        'organization' => 'organization',
        'workflow' => 'workflow',
        'bank_boarding' => 'bankBoarding',
        'status_updated_at' => 'statusUpdatedAt',
        'approved_at' => 'approvedAt',
        'terminated_at' => 'terminatedAt',
        'closed_at' => 'closedAt',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'secret' => 'secret',
        'kyc_results' => 'kycResults',
        '__v' => '__v',
        'account' => 'account',
        'type' => 'type',
        'is_deleted' => 'isDeleted',
        'is_locked' => 'isLocked',
        'document_request' => 'documentRequest',
        'documents' => 'documents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'merchant' => 'setMerchant',
        'status' => 'setStatus',
        'client_ip' => 'setClientIp',
        'organization' => 'setOrganization',
        'workflow' => 'setWorkflow',
        'bank_boarding' => 'setBankBoarding',
        'status_updated_at' => 'setStatusUpdatedAt',
        'approved_at' => 'setApprovedAt',
        'terminated_at' => 'setTerminatedAt',
        'closed_at' => 'setClosedAt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'secret' => 'setSecret',
        'kyc_results' => 'setKycResults',
        '__v' => 'setV',
        'account' => 'setAccount',
        'type' => 'setType',
        'is_deleted' => 'setIsDeleted',
        'is_locked' => 'setIsLocked',
        'document_request' => 'setDocumentRequest',
        'documents' => 'setDocuments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'merchant' => 'getMerchant',
        'status' => 'getStatus',
        'client_ip' => 'getClientIp',
        'organization' => 'getOrganization',
        'workflow' => 'getWorkflow',
        'bank_boarding' => 'getBankBoarding',
        'status_updated_at' => 'getStatusUpdatedAt',
        'approved_at' => 'getApprovedAt',
        'terminated_at' => 'getTerminatedAt',
        'closed_at' => 'getClosedAt',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'secret' => 'getSecret',
        'kyc_results' => 'getKycResults',
        '__v' => 'getV',
        'account' => 'getAccount',
        'type' => 'getType',
        'is_deleted' => 'getIsDeleted',
        'is_locked' => 'getIsLocked',
        'document_request' => 'getDocumentRequest',
        'documents' => 'getDocuments'
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

    public const TYPE_ACCOUNT = 'account';
    public const TYPE_ORGANIZATION = 'organization';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ACCOUNT,
            self::TYPE_ORGANIZATION,
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
        $this->setIfExists('_id', $data ?? [], null);
        $this->setIfExists('merchant', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('client_ip', $data ?? [], null);
        $this->setIfExists('organization', $data ?? [], null);
        $this->setIfExists('workflow', $data ?? [], null);
        $this->setIfExists('bank_boarding', $data ?? [], null);
        $this->setIfExists('status_updated_at', $data ?? [], null);
        $this->setIfExists('approved_at', $data ?? [], null);
        $this->setIfExists('terminated_at', $data ?? [], null);
        $this->setIfExists('closed_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('secret', $data ?? [], null);
        $this->setIfExists('kyc_results', $data ?? [], null);
        $this->setIfExists('__v', $data ?? [], null);
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], 'account');
        $this->setIfExists('is_deleted', $data ?? [], null);
        $this->setIfExists('is_locked', $data ?? [], null);
        $this->setIfExists('document_request', $data ?? [], null);
        $this->setIfExists('documents', $data ?? [], null);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets _id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     *
     * @param string|null $_id Onboarding Application identifier.
     *
     * @return self
     */
    public function setId($_id)
    {
        if (is_null($_id)) {
            throw new \InvalidArgumentException('non-nullable _id cannot be null');
        }
        $this->container['_id'] = $_id;

        return $this;
    }

    /**
     * Gets merchant
     *
     * @return \TheLogicStudio\ExactPay\Model\Merchant|null
     */
    public function getMerchant()
    {
        return $this->container['merchant'];
    }

    /**
     * Sets merchant
     *
     * @param \TheLogicStudio\ExactPay\Model\Merchant|null $merchant merchant
     *
     * @return self
     */
    public function setMerchant($merchant)
    {
        if (is_null($merchant)) {
            throw new \InvalidArgumentException('non-nullable merchant cannot be null');
        }
        $this->container['merchant'] = $merchant;

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
     * @param string|null $status The status of the Onboarding Application.
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
     * Gets client_ip
     *
     * @return string|null
     */
    public function getClientIp()
    {
        return $this->container['client_ip'];
    }

    /**
     * Sets client_ip
     *
     * @param string|null $client_ip The IP address of the client who sent the Onboarding Application.
     *
     * @return self
     */
    public function setClientIp($client_ip)
    {
        if (is_null($client_ip)) {
            throw new \InvalidArgumentException('non-nullable client_ip cannot be null');
        }
        $this->container['client_ip'] = $client_ip;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string|null $organization The ID of the Organization who onboarded this Organization or the Account.
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        if (is_null($organization)) {
            throw new \InvalidArgumentException('non-nullable organization cannot be null');
        }
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets workflow
     *
     * @return string|null
     */
    public function getWorkflow()
    {
        return $this->container['workflow'];
    }

    /**
     * Sets workflow
     *
     * @param string|null $workflow The ID of the Workflow used to onboard the Organization or the Account.
     *
     * @return self
     */
    public function setWorkflow($workflow)
    {
        if (is_null($workflow)) {
            throw new \InvalidArgumentException('non-nullable workflow cannot be null');
        }
        $this->container['workflow'] = $workflow;

        return $this;
    }

    /**
     * Gets bank_boarding
     *
     * @return \TheLogicStudio\ExactPay\Model\BankBoarding|null
     */
    public function getBankBoarding()
    {
        return $this->container['bank_boarding'];
    }

    /**
     * Sets bank_boarding
     *
     * @param \TheLogicStudio\ExactPay\Model\BankBoarding|null $bank_boarding bank_boarding
     *
     * @return self
     */
    public function setBankBoarding($bank_boarding)
    {
        if (is_null($bank_boarding)) {
            throw new \InvalidArgumentException('non-nullable bank_boarding cannot be null');
        }
        $this->container['bank_boarding'] = $bank_boarding;

        return $this;
    }

    /**
     * Gets status_updated_at
     *
     * @return string|null
     */
    public function getStatusUpdatedAt()
    {
        return $this->container['status_updated_at'];
    }

    /**
     * Sets status_updated_at
     *
     * @param string|null $status_updated_at The date and time when the status was last updated.
     *
     * @return self
     */
    public function setStatusUpdatedAt($status_updated_at)
    {
        if (is_null($status_updated_at)) {
            throw new \InvalidArgumentException('non-nullable status_updated_at cannot be null');
        }
        $this->container['status_updated_at'] = $status_updated_at;

        return $this;
    }

    /**
     * Gets approved_at
     *
     * @return string|null
     */
    public function getApprovedAt()
    {
        return $this->container['approved_at'];
    }

    /**
     * Sets approved_at
     *
     * @param string|null $approved_at The date and time when the Onboarding Application was approved.
     *
     * @return self
     */
    public function setApprovedAt($approved_at)
    {
        if (is_null($approved_at)) {
            throw new \InvalidArgumentException('non-nullable approved_at cannot be null');
        }
        $this->container['approved_at'] = $approved_at;

        return $this;
    }

    /**
     * Gets terminated_at
     *
     * @return string|null
     */
    public function getTerminatedAt()
    {
        return $this->container['terminated_at'];
    }

    /**
     * Sets terminated_at
     *
     * @param string|null $terminated_at The date and time when the Organization or Account was terminated.
     *
     * @return self
     */
    public function setTerminatedAt($terminated_at)
    {
        if (is_null($terminated_at)) {
            array_push($this->openAPINullablesSetToNull, 'terminated_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('terminated_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['terminated_at'] = $terminated_at;

        return $this;
    }

    /**
     * Gets closed_at
     *
     * @return string|null
     */
    public function getClosedAt()
    {
        return $this->container['closed_at'];
    }

    /**
     * Sets closed_at
     *
     * @param string|null $closed_at The date and time when the Organization or Account was closed.
     *
     * @return self
     */
    public function setClosedAt($closed_at)
    {
        if (is_null($closed_at)) {
            array_push($this->openAPINullablesSetToNull, 'closed_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('closed_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['closed_at'] = $closed_at;

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
     * @param string|null $created_at The date and time when the Onboarding Application was created.
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
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at The date and time when the Onboarding Application was updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets secret
     *
     * @return string|null
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     *
     * @param string|null $secret The secret associated with the Onboarding Application. This field will be available only when the secret is assigned to the Onboarding Application.
     *
     * @return self
     */
    public function setSecret($secret)
    {
        if (is_null($secret)) {
            throw new \InvalidArgumentException('non-nullable secret cannot be null');
        }
        $this->container['secret'] = $secret;

        return $this;
    }

    /**
     * Gets kyc_results
     *
     * @return \TheLogicStudio\ExactPay\Model\KycResults[]|null
     */
    public function getKycResults()
    {
        return $this->container['kyc_results'];
    }

    /**
     * Sets kyc_results
     *
     * @param \TheLogicStudio\ExactPay\Model\KycResults[]|null $kyc_results List of Rules executed or being executed as part of configured Workflow to Onboard the Account.
     *
     * @return self
     */
    public function setKycResults($kyc_results)
    {
        if (is_null($kyc_results)) {
            throw new \InvalidArgumentException('non-nullable kyc_results cannot be null');
        }
        $this->container['kyc_results'] = $kyc_results;

        return $this;
    }

    /**
     * Gets __v
     *
     * @return float|null
     */
    public function getV()
    {
        return $this->container['__v'];
    }

    /**
     * Sets __v
     *
     * @param float|null $__v Version of the Onboarding Application, when ever an Onboarding Application is updated or ran through some process the version value will be incremented
     *
     * @return self
     */
    public function setV($__v)
    {
        if (is_null($__v)) {
            throw new \InvalidArgumentException('non-nullable __v cannot be null');
        }
        $this->container['__v'] = $__v;

        return $this;
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
     * @param string|null $account Account Identifier assigned by Exact Payments systems when the Workflow checks are passed and account created in Exact Payments system.
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
     * @param string|null $type The type of the Onboarded entity.
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
     * Gets is_deleted
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool|null $is_deleted Indicates whether the Onboarding Application is soft deleted/deactivated.
     *
     * @return self
     */
    public function setIsDeleted($is_deleted)
    {
        if (is_null($is_deleted)) {
            throw new \InvalidArgumentException('non-nullable is_deleted cannot be null');
        }
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets is_locked
     *
     * @return bool|null
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     *
     * @param bool|null $is_locked Indicates whether the Onboarding Application is Locked.
     *
     * @return self
     */
    public function setIsLocked($is_locked)
    {
        if (is_null($is_locked)) {
            throw new \InvalidArgumentException('non-nullable is_locked cannot be null');
        }
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets document_request
     *
     * @return \TheLogicStudio\ExactPay\Model\DocumentRequest[]|null
     */
    public function getDocumentRequest()
    {
        return $this->container['document_request'];
    }

    /**
     * Sets document_request
     *
     * @param \TheLogicStudio\ExactPay\Model\DocumentRequest[]|null $document_request List of Document Request sent for the Onboarding Application. This field will be populated only when the Document Requests are made through Exact Payment systems.
     *
     * @return self
     */
    public function setDocumentRequest($document_request)
    {
        if (is_null($document_request)) {
            throw new \InvalidArgumentException('non-nullable document_request cannot be null');
        }
        $this->container['document_request'] = $document_request;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \TheLogicStudio\ExactPay\Model\Document[]|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \TheLogicStudio\ExactPay\Model\Document[]|null $documents List of Documents uploaded for the Onboarding Application. This field will be populated only when the Documents are uploaded through Exact Payment systems.
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        if (is_null($documents)) {
            throw new \InvalidArgumentException('non-nullable documents cannot be null');
        }
        $this->container['documents'] = $documents;

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

