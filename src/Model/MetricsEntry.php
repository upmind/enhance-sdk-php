<?php
/**
 * MetricsEntry
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * orchd
 *
 * orchd API docs
 *
 * The version of the OpenAPI document: 12.3.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Upmind\EnhanceSdk\Model;

use \ArrayAccess;
use \Upmind\EnhanceSdk\ObjectSerializer;

/**
 * MetricsEntry Class Doc Comment
 *
 * @category Class
 * @description Each Metrics entry represts an hourly window of banwidth usage Note: depending upon the polling time, most recent hour values might not       be complete yet and are subject to change if fetched at a later time.
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MetricsEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MetricsEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'datetime' => '\DateTime',
        'bytes_received' => 'float',
        'bytes_sent' => 'float',
        'unique_hits' => 'float',
        'bot_hits' => 'float',
        'total_hits' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'datetime' => 'date-time',
        'bytes_received' => null,
        'bytes_sent' => null,
        'unique_hits' => null,
        'bot_hits' => null,
        'total_hits' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'datetime' => false,
        'bytes_received' => false,
        'bytes_sent' => false,
        'unique_hits' => false,
        'bot_hits' => false,
        'total_hits' => false
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
        'datetime' => 'datetime',
        'bytes_received' => 'bytesReceived',
        'bytes_sent' => 'bytesSent',
        'unique_hits' => 'uniqueHits',
        'bot_hits' => 'botHits',
        'total_hits' => 'totalHits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'datetime' => 'setDatetime',
        'bytes_received' => 'setBytesReceived',
        'bytes_sent' => 'setBytesSent',
        'unique_hits' => 'setUniqueHits',
        'bot_hits' => 'setBotHits',
        'total_hits' => 'setTotalHits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'datetime' => 'getDatetime',
        'bytes_received' => 'getBytesReceived',
        'bytes_sent' => 'getBytesSent',
        'unique_hits' => 'getUniqueHits',
        'bot_hits' => 'getBotHits',
        'total_hits' => 'getTotalHits'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('datetime', $data ?? [], null);
        $this->setIfExists('bytes_received', $data ?? [], null);
        $this->setIfExists('bytes_sent', $data ?? [], null);
        $this->setIfExists('unique_hits', $data ?? [], null);
        $this->setIfExists('bot_hits', $data ?? [], null);
        $this->setIfExists('total_hits', $data ?? [], null);
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

        if ($this->container['datetime'] === null) {
            $invalidProperties[] = "'datetime' can't be null";
        }
        if ($this->container['bytes_received'] === null) {
            $invalidProperties[] = "'bytes_received' can't be null";
        }
        if ($this->container['bytes_sent'] === null) {
            $invalidProperties[] = "'bytes_sent' can't be null";
        }
        if ($this->container['unique_hits'] === null) {
            $invalidProperties[] = "'unique_hits' can't be null";
        }
        if ($this->container['bot_hits'] === null) {
            $invalidProperties[] = "'bot_hits' can't be null";
        }
        if ($this->container['total_hits'] === null) {
            $invalidProperties[] = "'total_hits' can't be null";
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
     * Gets datetime
     *
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->container['datetime'];
    }

    /**
     * Sets datetime
     *
     * @param \DateTime $datetime Time at the beginning of the unit for this bandwidth consumption entry
     *
     * @return self
     */
    public function setDatetime($datetime)
    {
        if (is_null($datetime)) {
            throw new \InvalidArgumentException('non-nullable datetime cannot be null');
        }
        $this->container['datetime'] = $datetime;

        return $this;
    }

    /**
     * Gets bytes_received
     *
     * @return float
     */
    public function getBytesReceived()
    {
        return $this->container['bytes_received'];
    }

    /**
     * Sets bytes_received
     *
     * @param float $bytes_received bytes_received
     *
     * @return self
     */
    public function setBytesReceived($bytes_received)
    {
        if (is_null($bytes_received)) {
            throw new \InvalidArgumentException('non-nullable bytes_received cannot be null');
        }
        $this->container['bytes_received'] = $bytes_received;

        return $this;
    }

    /**
     * Gets bytes_sent
     *
     * @return float
     */
    public function getBytesSent()
    {
        return $this->container['bytes_sent'];
    }

    /**
     * Sets bytes_sent
     *
     * @param float $bytes_sent bytes_sent
     *
     * @return self
     */
    public function setBytesSent($bytes_sent)
    {
        if (is_null($bytes_sent)) {
            throw new \InvalidArgumentException('non-nullable bytes_sent cannot be null');
        }
        $this->container['bytes_sent'] = $bytes_sent;

        return $this;
    }

    /**
     * Gets unique_hits
     *
     * @return float
     */
    public function getUniqueHits()
    {
        return $this->container['unique_hits'];
    }

    /**
     * Sets unique_hits
     *
     * @param float $unique_hits unique_hits
     *
     * @return self
     */
    public function setUniqueHits($unique_hits)
    {
        if (is_null($unique_hits)) {
            throw new \InvalidArgumentException('non-nullable unique_hits cannot be null');
        }
        $this->container['unique_hits'] = $unique_hits;

        return $this;
    }

    /**
     * Gets bot_hits
     *
     * @return float
     */
    public function getBotHits()
    {
        return $this->container['bot_hits'];
    }

    /**
     * Sets bot_hits
     *
     * @param float $bot_hits bot_hits
     *
     * @return self
     */
    public function setBotHits($bot_hits)
    {
        if (is_null($bot_hits)) {
            throw new \InvalidArgumentException('non-nullable bot_hits cannot be null');
        }
        $this->container['bot_hits'] = $bot_hits;

        return $this;
    }

    /**
     * Gets total_hits
     *
     * @return float
     */
    public function getTotalHits()
    {
        return $this->container['total_hits'];
    }

    /**
     * Sets total_hits
     *
     * @param float $total_hits total_hits
     *
     * @return self
     */
    public function setTotalHits($total_hits)
    {
        if (is_null($total_hits)) {
            throw new \InvalidArgumentException('non-nullable total_hits cannot be null');
        }
        $this->container['total_hits'] = $total_hits;

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


