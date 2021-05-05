<?php
/**
 * BidMessage
 *
 * PHP version 5
 *
 * @category Class
 * @package  Criteo\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API Transition Swagger
 *
 * This is used to help Criteo clients transition from MAPI to Criteo API
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Criteo\Marketing\Model;

use \ArrayAccess;
use \Criteo\Marketing\ObjectSerializer;

/**
 * BidMessage Class Doc Comment
 *
 * @category Class
 * @package  Criteo\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BidMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BidMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bid_value' => 'double',
        'bid_currency' => 'string',
        'bid_type' => 'string',
        'bid_is_pending' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bid_value' => 'double',
        'bid_currency' => null,
        'bid_type' => null,
        'bid_is_pending' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bid_value' => 'bidValue',
        'bid_currency' => 'bidCurrency',
        'bid_type' => 'bidType',
        'bid_is_pending' => 'bidIsPending'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bid_value' => 'setBidValue',
        'bid_currency' => 'setBidCurrency',
        'bid_type' => 'setBidType',
        'bid_is_pending' => 'setBidIsPending'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bid_value' => 'getBidValue',
        'bid_currency' => 'getBidCurrency',
        'bid_type' => 'getBidType',
        'bid_is_pending' => 'getBidIsPending'
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

    const BID_TYPE_UNKNOWN = 'Unknown';
    const BID_TYPE_CPC = 'CPC';
    const BID_TYPE_COS = 'COS';
    const BID_TYPE_CPO = 'CPO';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBidTypeAllowableValues()
    {
        return [
            self::BID_TYPE_UNKNOWN,
            self::BID_TYPE_CPC,
            self::BID_TYPE_COS,
            self::BID_TYPE_CPO,
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
        $this->container['bid_value'] = isset($data['bid_value']) ? $data['bid_value'] : null;
        $this->container['bid_currency'] = isset($data['bid_currency']) ? $data['bid_currency'] : null;
        $this->container['bid_type'] = isset($data['bid_type']) ? $data['bid_type'] : null;
        $this->container['bid_is_pending'] = isset($data['bid_is_pending']) ? $data['bid_is_pending'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBidTypeAllowableValues();
        if (!is_null($this->container['bid_type']) && !in_array($this->container['bid_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bid_type', must be one of '%s'",
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
     * Gets bid_value
     *
     * @return double|null
     */
    public function getBidValue()
    {
        return $this->container['bid_value'];
    }

    /**
     * Sets bid_value
     *
     * @param double|null $bid_value bid_value
     *
     * @return $this
     */
    public function setBidValue($bid_value)
    {
        $this->container['bid_value'] = $bid_value;

        return $this;
    }

    /**
     * Gets bid_currency
     *
     * @return string|null
     */
    public function getBidCurrency()
    {
        return $this->container['bid_currency'];
    }

    /**
     * Sets bid_currency
     *
     * @param string|null $bid_currency bid_currency
     *
     * @return $this
     */
    public function setBidCurrency($bid_currency)
    {
        $this->container['bid_currency'] = $bid_currency;

        return $this;
    }

    /**
     * Gets bid_type
     *
     * @return string|null
     */
    public function getBidType()
    {
        return $this->container['bid_type'];
    }

    /**
     * Sets bid_type
     *
     * @param string|null $bid_type bid_type
     *
     * @return $this
     */
    public function setBidType($bid_type)
    {
        $allowedValues = $this->getBidTypeAllowableValues();
        if (!is_null($bid_type) && !in_array($bid_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'bid_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bid_type'] = $bid_type;

        return $this;
    }

    /**
     * Gets bid_is_pending
     *
     * @return bool|null
     */
    public function getBidIsPending()
    {
        return $this->container['bid_is_pending'];
    }

    /**
     * Sets bid_is_pending
     *
     * @param bool|null $bid_is_pending bid_is_pending
     *
     * @return $this
     */
    public function setBidIsPending($bid_is_pending)
    {
        $this->container['bid_is_pending'] = $bid_is_pending;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
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

