<?php
/**
 * PatchAdSet
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
 * PatchAdSet Class Doc Comment
 *
 * @category Class
 * @description ad set patch model
 * @package  Criteo\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PatchAdSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PatchAdSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'scheduling' => '\Criteo\Marketing\Model\PatchAdSetScheduling',
        'bidding' => '\Criteo\Marketing\Model\PatchAdSetBidding',
        'targeting' => '\Criteo\Marketing\Model\AdSetTargeting',
        'budget' => '\Criteo\Marketing\Model\PatchAdSetBudget'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'scheduling' => null,
        'bidding' => null,
        'targeting' => null,
        'budget' => null
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
        'name' => 'name',
        'scheduling' => 'scheduling',
        'bidding' => 'bidding',
        'targeting' => 'targeting',
        'budget' => 'budget'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'scheduling' => 'setScheduling',
        'bidding' => 'setBidding',
        'targeting' => 'setTargeting',
        'budget' => 'setBudget'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'scheduling' => 'getScheduling',
        'bidding' => 'getBidding',
        'targeting' => 'getTargeting',
        'budget' => 'getBudget'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['scheduling'] = isset($data['scheduling']) ? $data['scheduling'] : null;
        $this->container['bidding'] = isset($data['bidding']) ? $data['bidding'] : null;
        $this->container['targeting'] = isset($data['targeting']) ? $data['targeting'] : null;
        $this->container['budget'] = isset($data['budget']) ? $data['budget'] : null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the ad set
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets scheduling
     *
     * @return \Criteo\Marketing\Model\PatchAdSetScheduling|null
     */
    public function getScheduling()
    {
        return $this->container['scheduling'];
    }

    /**
     * Sets scheduling
     *
     * @param \Criteo\Marketing\Model\PatchAdSetScheduling|null $scheduling scheduling
     *
     * @return $this
     */
    public function setScheduling($scheduling)
    {
        $this->container['scheduling'] = $scheduling;

        return $this;
    }

    /**
     * Gets bidding
     *
     * @return \Criteo\Marketing\Model\PatchAdSetBidding|null
     */
    public function getBidding()
    {
        return $this->container['bidding'];
    }

    /**
     * Sets bidding
     *
     * @param \Criteo\Marketing\Model\PatchAdSetBidding|null $bidding bidding
     *
     * @return $this
     */
    public function setBidding($bidding)
    {
        $this->container['bidding'] = $bidding;

        return $this;
    }

    /**
     * Gets targeting
     *
     * @return \Criteo\Marketing\Model\AdSetTargeting|null
     */
    public function getTargeting()
    {
        return $this->container['targeting'];
    }

    /**
     * Sets targeting
     *
     * @param \Criteo\Marketing\Model\AdSetTargeting|null $targeting targeting
     *
     * @return $this
     */
    public function setTargeting($targeting)
    {
        $this->container['targeting'] = $targeting;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return \Criteo\Marketing\Model\PatchAdSetBudget|null
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param \Criteo\Marketing\Model\PatchAdSetBudget|null $budget budget
     *
     * @return $this
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


