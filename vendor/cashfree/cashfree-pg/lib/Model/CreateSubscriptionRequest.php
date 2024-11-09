<?php
/**
 * CreateSubscriptionRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cashfree Payment Gateway APIs
 *
 * Cashfree's Payment Gateway APIs provide developers with a streamlined pathway to integrate advanced payment processing capabilities into their applications, platforms and websites.
 *
 * The version of the OpenAPI document: 2023-08-01
 * Contact: developers@cashfree.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cashfree\Model;

use \ArrayAccess;
use \Cashfree\ObjectSerializer;

/**
 * CreateSubscriptionRequest Class Doc Comment
 *
 * @category Class
 * @description Request body to create a new subscription.
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateSubscriptionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateSubscriptionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'subscription_id' => 'string',
        'customer_details' => '\Cashfree\Model\SubscriptionCustomerDetails',
        'plan_details' => '\Cashfree\Model\CreateSubscriptionRequestPlanDetails',
        'authorization_details' => '\Cashfree\Model\CreateSubscriptionRequestAuthorizationDetails',
        'subscription_meta' => '\Cashfree\Model\CreateSubscriptionRequestSubscriptionMeta',
        'subscription_expiry_time' => 'string',
        'subscription_first_charge_time' => 'string',
        'subscription_note' => 'string',
        'subscription_tags' => 'object',
        'subscription_payment_splits' => '\Cashfree\Model\SubscriptionPaymentSplitItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'subscription_id' => null,
        'customer_details' => null,
        'plan_details' => null,
        'authorization_details' => null,
        'subscription_meta' => null,
        'subscription_expiry_time' => null,
        'subscription_first_charge_time' => null,
        'subscription_note' => null,
        'subscription_tags' => null,
        'subscription_payment_splits' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'subscription_id' => false,
		'customer_details' => false,
		'plan_details' => false,
		'authorization_details' => false,
		'subscription_meta' => false,
		'subscription_expiry_time' => false,
		'subscription_first_charge_time' => false,
		'subscription_note' => false,
		'subscription_tags' => false,
		'subscription_payment_splits' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'subscription_id' => 'subscription_id',
        'customer_details' => 'customer_details',
        'plan_details' => 'plan_details',
        'authorization_details' => 'authorization_details',
        'subscription_meta' => 'subscription_meta',
        'subscription_expiry_time' => 'subscription_expiry_time',
        'subscription_first_charge_time' => 'subscription_first_charge_time',
        'subscription_note' => 'subscription_note',
        'subscription_tags' => 'subscription_tags',
        'subscription_payment_splits' => 'subscription_payment_splits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subscription_id' => 'setSubscriptionId',
        'customer_details' => 'setCustomerDetails',
        'plan_details' => 'setPlanDetails',
        'authorization_details' => 'setAuthorizationDetails',
        'subscription_meta' => 'setSubscriptionMeta',
        'subscription_expiry_time' => 'setSubscriptionExpiryTime',
        'subscription_first_charge_time' => 'setSubscriptionFirstChargeTime',
        'subscription_note' => 'setSubscriptionNote',
        'subscription_tags' => 'setSubscriptionTags',
        'subscription_payment_splits' => 'setSubscriptionPaymentSplits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subscription_id' => 'getSubscriptionId',
        'customer_details' => 'getCustomerDetails',
        'plan_details' => 'getPlanDetails',
        'authorization_details' => 'getAuthorizationDetails',
        'subscription_meta' => 'getSubscriptionMeta',
        'subscription_expiry_time' => 'getSubscriptionExpiryTime',
        'subscription_first_charge_time' => 'getSubscriptionFirstChargeTime',
        'subscription_note' => 'getSubscriptionNote',
        'subscription_tags' => 'getSubscriptionTags',
        'subscription_payment_splits' => 'getSubscriptionPaymentSplits'
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
        $this->setIfExists('subscription_id', $data ?? [], null);
        $this->setIfExists('customer_details', $data ?? [], null);
        $this->setIfExists('plan_details', $data ?? [], null);
        $this->setIfExists('authorization_details', $data ?? [], null);
        $this->setIfExists('subscription_meta', $data ?? [], null);
        $this->setIfExists('subscription_expiry_time', $data ?? [], null);
        $this->setIfExists('subscription_first_charge_time', $data ?? [], null);
        $this->setIfExists('subscription_note', $data ?? [], null);
        $this->setIfExists('subscription_tags', $data ?? [], null);
        $this->setIfExists('subscription_payment_splits', $data ?? [], null);
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

        if ($this->container['subscription_id'] === null) {
            $invalidProperties[] = "'subscription_id' can't be null";
        }
        if ((mb_strlen($this->container['subscription_id']) > 250)) {
            $invalidProperties[] = "invalid value for 'subscription_id', the character length must be smaller than or equal to 250.";
        }

        if ((mb_strlen($this->container['subscription_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'subscription_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['customer_details'] === null) {
            $invalidProperties[] = "'customer_details' can't be null";
        }
        if ($this->container['plan_details'] === null) {
            $invalidProperties[] = "'plan_details' can't be null";
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
     * Gets subscription_id
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     *
     * @param string $subscription_id A unique ID for the subscription. It can include alphanumeric characters, underscore, dot, hyphen, and space. Maximum characters allowed is 250.
     *
     * @return self
     */
    public function setSubscriptionId($subscription_id)
    {
        if (is_null($subscription_id)) {
            throw new \InvalidArgumentException('non-nullable subscription_id cannot be null');
        }
        if ((mb_strlen($subscription_id) > 250)) {
            throw new \InvalidArgumentException('invalid length for $subscription_id when calling CreateSubscriptionRequest., must be smaller than or equal to 250.');
        }
        if ((mb_strlen($subscription_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $subscription_id when calling CreateSubscriptionRequest., must be bigger than or equal to 1.');
        }

        $this->container['subscription_id'] = $subscription_id;

        return $this;
    }

    /**
     * Gets customer_details
     *
     * @return \Cashfree\Model\SubscriptionCustomerDetails
     */
    public function getCustomerDetails()
    {
        return $this->container['customer_details'];
    }

    /**
     * Sets customer_details
     *
     * @param \Cashfree\Model\SubscriptionCustomerDetails $customer_details customer_details
     *
     * @return self
     */
    public function setCustomerDetails($customer_details)
    {
        if (is_null($customer_details)) {
            throw new \InvalidArgumentException('non-nullable customer_details cannot be null');
        }
        $this->container['customer_details'] = $customer_details;

        return $this;
    }

    /**
     * Gets plan_details
     *
     * @return \Cashfree\Model\CreateSubscriptionRequestPlanDetails
     */
    public function getPlanDetails()
    {
        return $this->container['plan_details'];
    }

    /**
     * Sets plan_details
     *
     * @param \Cashfree\Model\CreateSubscriptionRequestPlanDetails $plan_details plan_details
     *
     * @return self
     */
    public function setPlanDetails($plan_details)
    {
        if (is_null($plan_details)) {
            throw new \InvalidArgumentException('non-nullable plan_details cannot be null');
        }
        $this->container['plan_details'] = $plan_details;

        return $this;
    }

    /**
     * Gets authorization_details
     *
     * @return \Cashfree\Model\CreateSubscriptionRequestAuthorizationDetails|null
     */
    public function getAuthorizationDetails()
    {
        return $this->container['authorization_details'];
    }

    /**
     * Sets authorization_details
     *
     * @param \Cashfree\Model\CreateSubscriptionRequestAuthorizationDetails|null $authorization_details authorization_details
     *
     * @return self
     */
    public function setAuthorizationDetails($authorization_details)
    {
        if (is_null($authorization_details)) {
            throw new \InvalidArgumentException('non-nullable authorization_details cannot be null');
        }
        $this->container['authorization_details'] = $authorization_details;

        return $this;
    }

    /**
     * Gets subscription_meta
     *
     * @return \Cashfree\Model\CreateSubscriptionRequestSubscriptionMeta|null
     */
    public function getSubscriptionMeta()
    {
        return $this->container['subscription_meta'];
    }

    /**
     * Sets subscription_meta
     *
     * @param \Cashfree\Model\CreateSubscriptionRequestSubscriptionMeta|null $subscription_meta subscription_meta
     *
     * @return self
     */
    public function setSubscriptionMeta($subscription_meta)
    {
        if (is_null($subscription_meta)) {
            throw new \InvalidArgumentException('non-nullable subscription_meta cannot be null');
        }
        $this->container['subscription_meta'] = $subscription_meta;

        return $this;
    }

    /**
     * Gets subscription_expiry_time
     *
     * @return string|null
     */
    public function getSubscriptionExpiryTime()
    {
        return $this->container['subscription_expiry_time'];
    }

    /**
     * Sets subscription_expiry_time
     *
     * @param string|null $subscription_expiry_time Expiry date for the subscription.
     *
     * @return self
     */
    public function setSubscriptionExpiryTime($subscription_expiry_time)
    {
        if (is_null($subscription_expiry_time)) {
            throw new \InvalidArgumentException('non-nullable subscription_expiry_time cannot be null');
        }
        $this->container['subscription_expiry_time'] = $subscription_expiry_time;

        return $this;
    }

    /**
     * Gets subscription_first_charge_time
     *
     * @return string|null
     */
    public function getSubscriptionFirstChargeTime()
    {
        return $this->container['subscription_first_charge_time'];
    }

    /**
     * Sets subscription_first_charge_time
     *
     * @param string|null $subscription_first_charge_time Time at which the first charge will be made for the subscription after authorization. Applicable only for PERIODIC plans.
     *
     * @return self
     */
    public function setSubscriptionFirstChargeTime($subscription_first_charge_time)
    {
        if (is_null($subscription_first_charge_time)) {
            throw new \InvalidArgumentException('non-nullable subscription_first_charge_time cannot be null');
        }
        $this->container['subscription_first_charge_time'] = $subscription_first_charge_time;

        return $this;
    }

    /**
     * Gets subscription_note
     *
     * @return string|null
     */
    public function getSubscriptionNote()
    {
        return $this->container['subscription_note'];
    }

    /**
     * Sets subscription_note
     *
     * @param string|null $subscription_note Note for the subscription.
     *
     * @return self
     */
    public function setSubscriptionNote($subscription_note)
    {
        if (is_null($subscription_note)) {
            throw new \InvalidArgumentException('non-nullable subscription_note cannot be null');
        }
        $this->container['subscription_note'] = $subscription_note;

        return $this;
    }

    /**
     * Gets subscription_tags
     *
     * @return object|null
     */
    public function getSubscriptionTags()
    {
        return $this->container['subscription_tags'];
    }

    /**
     * Sets subscription_tags
     *
     * @param object|null $subscription_tags Tags for the subscription.
     *
     * @return self
     */
    public function setSubscriptionTags($subscription_tags)
    {
        if (is_null($subscription_tags)) {
            throw new \InvalidArgumentException('non-nullable subscription_tags cannot be null');
        }
        $this->container['subscription_tags'] = $subscription_tags;

        return $this;
    }

    /**
     * Gets subscription_payment_splits
     *
     * @return \Cashfree\Model\SubscriptionPaymentSplitItem[]|null
     */
    public function getSubscriptionPaymentSplits()
    {
        return $this->container['subscription_payment_splits'];
    }

    /**
     * Sets subscription_payment_splits
     *
     * @param \Cashfree\Model\SubscriptionPaymentSplitItem[]|null $subscription_payment_splits Payment splits for the subscription.
     *
     * @return self
     */
    public function setSubscriptionPaymentSplits($subscription_payment_splits)
    {
        if (is_null($subscription_payment_splits)) {
            throw new \InvalidArgumentException('non-nullable subscription_payment_splits cannot be null');
        }
        $this->container['subscription_payment_splits'] = $subscription_payment_splits;

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

