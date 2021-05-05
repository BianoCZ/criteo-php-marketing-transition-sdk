<?php
/**
 * ReadAdSetSchedule
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
 * ReadAdSetSchedule Class Doc Comment
 *
 * @category Class
 * @description ad set schedule read model
 * @package  Criteo\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReadAdSetSchedule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReadAdSetSchedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start_date' => '\Criteo\Marketing\Model\NillableDateTime',
        'end_date' => '\Criteo\Marketing\Model\NillableDateTime',
        'activation_status' => 'string',
        'delivery_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'start_date' => null,
        'end_date' => null,
        'activation_status' => null,
        'delivery_status' => null
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
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'activation_status' => 'activationStatus',
        'delivery_status' => 'deliveryStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'activation_status' => 'setActivationStatus',
        'delivery_status' => 'setDeliveryStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'activation_status' => 'getActivationStatus',
        'delivery_status' => 'getDeliveryStatus'
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

    const ACTIVATION_STATUS_ON = 'on';
    const ACTIVATION_STATUS_OFF = 'off';
    const DELIVERY_STATUS_DRAFT = 'draft';
    const DELIVERY_STATUS_INACTIVE = 'inactive';
    const DELIVERY_STATUS_LIVE = 'live';
    const DELIVERY_STATUS_NOT_LIVE = 'notLive';
    const DELIVERY_STATUS_PAUSING = 'pausing';
    const DELIVERY_STATUS_PAUSED = 'paused';
    const DELIVERY_STATUS_SCHEDULED = 'scheduled';
    const DELIVERY_STATUS_ENDED = 'ended';
    const DELIVERY_STATUS_NOT_DELIVERING = 'notDelivering';
    const DELIVERY_STATUS_ARCHIVED = 'archived';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActivationStatusAllowableValues()
    {
        return [
            self::ACTIVATION_STATUS_ON,
            self::ACTIVATION_STATUS_OFF,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryStatusAllowableValues()
    {
        return [
            self::DELIVERY_STATUS_DRAFT,
            self::DELIVERY_STATUS_INACTIVE,
            self::DELIVERY_STATUS_LIVE,
            self::DELIVERY_STATUS_NOT_LIVE,
            self::DELIVERY_STATUS_PAUSING,
            self::DELIVERY_STATUS_PAUSED,
            self::DELIVERY_STATUS_SCHEDULED,
            self::DELIVERY_STATUS_ENDED,
            self::DELIVERY_STATUS_NOT_DELIVERING,
            self::DELIVERY_STATUS_ARCHIVED,
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
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['activation_status'] = isset($data['activation_status']) ? $data['activation_status'] : null;
        $this->container['delivery_status'] = isset($data['delivery_status']) ? $data['delivery_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getActivationStatusAllowableValues();
        if (!is_null($this->container['activation_status']) && !in_array($this->container['activation_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'activation_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDeliveryStatusAllowableValues();
        if (!is_null($this->container['delivery_status']) && !in_array($this->container['delivery_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'delivery_status', must be one of '%s'",
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
     * Gets start_date
     *
     * @return \Criteo\Marketing\Model\NillableDateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \Criteo\Marketing\Model\NillableDateTime|null $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \Criteo\Marketing\Model\NillableDateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \Criteo\Marketing\Model\NillableDateTime|null $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets activation_status
     *
     * @return string|null
     */
    public function getActivationStatus()
    {
        return $this->container['activation_status'];
    }

    /**
     * Sets activation_status
     *
     * @param string|null $activation_status Activation status of the ad set, i.e. whether the consumer wants it to deliver
     *
     * @return $this
     */
    public function setActivationStatus($activation_status)
    {
        $allowedValues = $this->getActivationStatusAllowableValues();
        if (!is_null($activation_status) && !in_array($activation_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'activation_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['activation_status'] = $activation_status;

        return $this;
    }

    /**
     * Gets delivery_status
     *
     * @return string|null
     */
    public function getDeliveryStatus()
    {
        return $this->container['delivery_status'];
    }

    /**
     * Sets delivery_status
     *
     * @param string|null $delivery_status Delivery status of the delivery of the ad set, i.e. whether the ad set is delivering
     *
     * @return $this
     */
    public function setDeliveryStatus($delivery_status)
    {
        $allowedValues = $this->getDeliveryStatusAllowableValues();
        if (!is_null($delivery_status) && !in_array($delivery_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'delivery_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['delivery_status'] = $delivery_status;

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

