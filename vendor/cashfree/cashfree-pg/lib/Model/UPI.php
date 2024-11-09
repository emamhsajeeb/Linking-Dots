<?php
/**
 * Upi
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
 * Upi Class Doc Comment
 *
 * @category Class
 * @description UPI collect payment method object
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Upi implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Upi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channel' => 'string',
        'upi_id' => 'string',
        'upi_redirect_url' => 'bool',
        'upi_expiry_minutes' => 'float',
        'authorize_only' => 'bool',
        'authorization' => '\Cashfree\Model\UPIAuthorizeDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channel' => null,
        'upi_id' => null,
        'upi_redirect_url' => null,
        'upi_expiry_minutes' => null,
        'authorize_only' => null,
        'authorization' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'channel' => false,
		'upi_id' => false,
		'upi_redirect_url' => false,
		'upi_expiry_minutes' => false,
		'authorize_only' => false,
		'authorization' => false
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
        'channel' => 'channel',
        'upi_id' => 'upi_id',
        'upi_redirect_url' => 'upi_redirect_url',
        'upi_expiry_minutes' => 'upi_expiry_minutes',
        'authorize_only' => 'authorize_only',
        'authorization' => 'authorization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel' => 'setChannel',
        'upi_id' => 'setUpiId',
        'upi_redirect_url' => 'setUpiRedirectUrl',
        'upi_expiry_minutes' => 'setUpiExpiryMinutes',
        'authorize_only' => 'setAuthorizeOnly',
        'authorization' => 'setAuthorization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel' => 'getChannel',
        'upi_id' => 'getUpiId',
        'upi_redirect_url' => 'getUpiRedirectUrl',
        'upi_expiry_minutes' => 'getUpiExpiryMinutes',
        'authorize_only' => 'getAuthorizeOnly',
        'authorization' => 'getAuthorization'
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

    public const CHANNEL_LINK = 'link';
    public const CHANNEL_COLLECT = 'collect';
    public const CHANNEL_QRCODE = 'qrcode';
    public const CHANNEL_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChannelAllowableValues()
    {
        return [
            self::CHANNEL_LINK,
            self::CHANNEL_COLLECT,
            self::CHANNEL_QRCODE,
            self::CHANNEL_UNKNOWN_DEFAULT_OPEN_API,
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
        $this->setIfExists('channel', $data ?? [], null);
        $this->setIfExists('upi_id', $data ?? [], null);
        $this->setIfExists('upi_redirect_url', $data ?? [], null);
        $this->setIfExists('upi_expiry_minutes', $data ?? [], null);
        $this->setIfExists('authorize_only', $data ?? [], null);
        $this->setIfExists('authorization', $data ?? [], null);
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

        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        $allowedValues = $this->getChannelAllowableValues();
        if (!is_null($this->container['channel']) && !in_array($this->container['channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'channel', must be one of '%s'",
                $this->container['channel'],
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
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string $channel Specify the channel through which the payment must be processed. Can be one of [\"link\", \"collect\", \"qrcode\"]
     *
     * @return self
     */
    public function setChannel($channel)
    {
        if (is_null($channel)) {
            throw new \InvalidArgumentException('non-nullable channel cannot be null');
        }
        $allowedValues = $this->getChannelAllowableValues();
        if (!in_array($channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'channel', must be one of '%s'",
                    $channel,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets upi_id
     *
     * @return string|null
     */
    public function getUpiId()
    {
        return $this->container['upi_id'];
    }

    /**
     * Sets upi_id
     *
     * @param string|null $upi_id Customer UPI VPA to process payment.  ### Important This is a required parameter for channel = `collect`
     *
     * @return self
     */
    public function setUpiId($upi_id)
    {
        if (is_null($upi_id)) {
            throw new \InvalidArgumentException('non-nullable upi_id cannot be null');
        }
        $this->container['upi_id'] = $upi_id;

        return $this;
    }

    /**
     * Gets upi_redirect_url
     *
     * @return bool|null
     */
    public function getUpiRedirectUrl()
    {
        return $this->container['upi_redirect_url'];
    }

    /**
     * Sets upi_redirect_url
     *
     * @param bool|null $upi_redirect_url use this if you want cashfree to show a loader. Sample response below. It is only supported for collect `action:collect` will be returned with `data.url` having the link for redirection
     *
     * @return self
     */
    public function setUpiRedirectUrl($upi_redirect_url)
    {
        if (is_null($upi_redirect_url)) {
            throw new \InvalidArgumentException('non-nullable upi_redirect_url cannot be null');
        }
        $this->container['upi_redirect_url'] = $upi_redirect_url;

        return $this;
    }

    /**
     * Gets upi_expiry_minutes
     *
     * @return float|null
     */
    public function getUpiExpiryMinutes()
    {
        return $this->container['upi_expiry_minutes'];
    }

    /**
     * Sets upi_expiry_minutes
     *
     * @param float|null $upi_expiry_minutes The UPI request will be valid for this expiry minutes. This parameter is only applicable for a UPI collect payment. The default value is 5 minutes. You should keep the minimum as 5 minutes, and maximum as 15 minutes
     *
     * @return self
     */
    public function setUpiExpiryMinutes($upi_expiry_minutes)
    {
        if (is_null($upi_expiry_minutes)) {
            throw new \InvalidArgumentException('non-nullable upi_expiry_minutes cannot be null');
        }
        $this->container['upi_expiry_minutes'] = $upi_expiry_minutes;

        return $this;
    }

    /**
     * Gets authorize_only
     *
     * @return bool|null
     */
    public function getAuthorizeOnly()
    {
        return $this->container['authorize_only'];
    }

    /**
     * Sets authorize_only
     *
     * @param bool|null $authorize_only For one time mandate on UPI. Set this as authorize_only = true. Please note that you can only use the \"collect\" channel if you are sending a one time mandate request
     *
     * @return self
     */
    public function setAuthorizeOnly($authorize_only)
    {
        if (is_null($authorize_only)) {
            throw new \InvalidArgumentException('non-nullable authorize_only cannot be null');
        }
        $this->container['authorize_only'] = $authorize_only;

        return $this;
    }

    /**
     * Gets authorization
     *
     * @return \Cashfree\Model\UPIAuthorizeDetails|null
     */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
     * Sets authorization
     *
     * @param \Cashfree\Model\UPIAuthorizeDetails|null $authorization authorization
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

