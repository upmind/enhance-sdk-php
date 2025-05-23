<?php
/**
 * MigrationDetails
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
 * MigrationDetails Class Doc Comment
 *
 * @category Class
 * @package  Upmind\EnhanceSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MigrationDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MigrationDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'website_id' => 'string',
        'source_server_id' => 'string',
        'dest_server_id' => 'string',
        'dest_server_name' => 'string',
        'server_role' => '\Upmind\EnhanceSdk\Model\ServerRole',
        'migration_status' => '\Upmind\EnhanceSdk\Model\MigrationStatus',
        'created_at' => 'string',
        'last_updated' => 'string',
        'website_primary_domain' => 'string',
        'percentage_complete' => 'int',
        'session_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'website_id' => 'uuid',
        'source_server_id' => 'uuid',
        'dest_server_id' => 'uuid',
        'dest_server_name' => null,
        'server_role' => null,
        'migration_status' => null,
        'created_at' => null,
        'last_updated' => null,
        'website_primary_domain' => null,
        'percentage_complete' => null,
        'session_id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'website_id' => false,
        'source_server_id' => false,
        'dest_server_id' => false,
        'dest_server_name' => false,
        'server_role' => false,
        'migration_status' => false,
        'created_at' => false,
        'last_updated' => false,
        'website_primary_domain' => false,
        'percentage_complete' => false,
        'session_id' => false
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
        'website_id' => 'websiteId',
        'source_server_id' => 'sourceServerId',
        'dest_server_id' => 'destServerId',
        'dest_server_name' => 'destServerName',
        'server_role' => 'serverRole',
        'migration_status' => 'migrationStatus',
        'created_at' => 'createdAt',
        'last_updated' => 'lastUpdated',
        'website_primary_domain' => 'websitePrimaryDomain',
        'percentage_complete' => 'percentageComplete',
        'session_id' => 'sessionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'website_id' => 'setWebsiteId',
        'source_server_id' => 'setSourceServerId',
        'dest_server_id' => 'setDestServerId',
        'dest_server_name' => 'setDestServerName',
        'server_role' => 'setServerRole',
        'migration_status' => 'setMigrationStatus',
        'created_at' => 'setCreatedAt',
        'last_updated' => 'setLastUpdated',
        'website_primary_domain' => 'setWebsitePrimaryDomain',
        'percentage_complete' => 'setPercentageComplete',
        'session_id' => 'setSessionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'website_id' => 'getWebsiteId',
        'source_server_id' => 'getSourceServerId',
        'dest_server_id' => 'getDestServerId',
        'dest_server_name' => 'getDestServerName',
        'server_role' => 'getServerRole',
        'migration_status' => 'getMigrationStatus',
        'created_at' => 'getCreatedAt',
        'last_updated' => 'getLastUpdated',
        'website_primary_domain' => 'getWebsitePrimaryDomain',
        'percentage_complete' => 'getPercentageComplete',
        'session_id' => 'getSessionId'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('website_id', $data ?? [], null);
        $this->setIfExists('source_server_id', $data ?? [], null);
        $this->setIfExists('dest_server_id', $data ?? [], null);
        $this->setIfExists('dest_server_name', $data ?? [], null);
        $this->setIfExists('server_role', $data ?? [], null);
        $this->setIfExists('migration_status', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('last_updated', $data ?? [], null);
        $this->setIfExists('website_primary_domain', $data ?? [], null);
        $this->setIfExists('percentage_complete', $data ?? [], null);
        $this->setIfExists('session_id', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['website_id'] === null) {
            $invalidProperties[] = "'website_id' can't be null";
        }
        if ($this->container['source_server_id'] === null) {
            $invalidProperties[] = "'source_server_id' can't be null";
        }
        if ($this->container['dest_server_id'] === null) {
            $invalidProperties[] = "'dest_server_id' can't be null";
        }
        if ($this->container['dest_server_name'] === null) {
            $invalidProperties[] = "'dest_server_name' can't be null";
        }
        if ($this->container['server_role'] === null) {
            $invalidProperties[] = "'server_role' can't be null";
        }
        if ($this->container['migration_status'] === null) {
            $invalidProperties[] = "'migration_status' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['last_updated'] === null) {
            $invalidProperties[] = "'last_updated' can't be null";
        }
        if ($this->container['website_primary_domain'] === null) {
            $invalidProperties[] = "'website_primary_domain' can't be null";
        }
        if ($this->container['percentage_complete'] === null) {
            $invalidProperties[] = "'percentage_complete' can't be null";
        }
        if ($this->container['session_id'] === null) {
            $invalidProperties[] = "'session_id' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
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
     * Gets website_id
     *
     * @return string
     */
    public function getWebsiteId()
    {
        return $this->container['website_id'];
    }

    /**
     * Sets website_id
     *
     * @param string $website_id website_id
     *
     * @return self
     */
    public function setWebsiteId($website_id)
    {
        if (is_null($website_id)) {
            throw new \InvalidArgumentException('non-nullable website_id cannot be null');
        }
        $this->container['website_id'] = $website_id;

        return $this;
    }

    /**
     * Gets source_server_id
     *
     * @return string
     */
    public function getSourceServerId()
    {
        return $this->container['source_server_id'];
    }

    /**
     * Sets source_server_id
     *
     * @param string $source_server_id source_server_id
     *
     * @return self
     */
    public function setSourceServerId($source_server_id)
    {
        if (is_null($source_server_id)) {
            throw new \InvalidArgumentException('non-nullable source_server_id cannot be null');
        }
        $this->container['source_server_id'] = $source_server_id;

        return $this;
    }

    /**
     * Gets dest_server_id
     *
     * @return string
     */
    public function getDestServerId()
    {
        return $this->container['dest_server_id'];
    }

    /**
     * Sets dest_server_id
     *
     * @param string $dest_server_id dest_server_id
     *
     * @return self
     */
    public function setDestServerId($dest_server_id)
    {
        if (is_null($dest_server_id)) {
            throw new \InvalidArgumentException('non-nullable dest_server_id cannot be null');
        }
        $this->container['dest_server_id'] = $dest_server_id;

        return $this;
    }

    /**
     * Gets dest_server_name
     *
     * @return string
     */
    public function getDestServerName()
    {
        return $this->container['dest_server_name'];
    }

    /**
     * Sets dest_server_name
     *
     * @param string $dest_server_name dest_server_name
     *
     * @return self
     */
    public function setDestServerName($dest_server_name)
    {
        if (is_null($dest_server_name)) {
            throw new \InvalidArgumentException('non-nullable dest_server_name cannot be null');
        }
        $this->container['dest_server_name'] = $dest_server_name;

        return $this;
    }

    /**
     * Gets server_role
     *
     * @return \Upmind\EnhanceSdk\Model\ServerRole
     */
    public function getServerRole()
    {
        return $this->container['server_role'];
    }

    /**
     * Sets server_role
     *
     * @param \Upmind\EnhanceSdk\Model\ServerRole $server_role server_role
     *
     * @return self
     */
    public function setServerRole($server_role)
    {
        if (is_null($server_role)) {
            throw new \InvalidArgumentException('non-nullable server_role cannot be null');
        }
        $this->container['server_role'] = $server_role;

        return $this;
    }

    /**
     * Gets migration_status
     *
     * @return \Upmind\EnhanceSdk\Model\MigrationStatus
     */
    public function getMigrationStatus()
    {
        return $this->container['migration_status'];
    }

    /**
     * Sets migration_status
     *
     * @param \Upmind\EnhanceSdk\Model\MigrationStatus $migration_status migration_status
     *
     * @return self
     */
    public function setMigrationStatus($migration_status)
    {
        if (is_null($migration_status)) {
            throw new \InvalidArgumentException('non-nullable migration_status cannot be null');
        }
        $this->container['migration_status'] = $migration_status;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
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
     * Gets last_updated
     *
     * @return string
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     *
     * @param string $last_updated last_updated
     *
     * @return self
     */
    public function setLastUpdated($last_updated)
    {
        if (is_null($last_updated)) {
            throw new \InvalidArgumentException('non-nullable last_updated cannot be null');
        }
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets website_primary_domain
     *
     * @return string
     */
    public function getWebsitePrimaryDomain()
    {
        return $this->container['website_primary_domain'];
    }

    /**
     * Sets website_primary_domain
     *
     * @param string $website_primary_domain website_primary_domain
     *
     * @return self
     */
    public function setWebsitePrimaryDomain($website_primary_domain)
    {
        if (is_null($website_primary_domain)) {
            throw new \InvalidArgumentException('non-nullable website_primary_domain cannot be null');
        }
        $this->container['website_primary_domain'] = $website_primary_domain;

        return $this;
    }

    /**
     * Gets percentage_complete
     *
     * @return int
     */
    public function getPercentageComplete()
    {
        return $this->container['percentage_complete'];
    }

    /**
     * Sets percentage_complete
     *
     * @param int $percentage_complete percentage_complete
     *
     * @return self
     */
    public function setPercentageComplete($percentage_complete)
    {
        if (is_null($percentage_complete)) {
            throw new \InvalidArgumentException('non-nullable percentage_complete cannot be null');
        }
        $this->container['percentage_complete'] = $percentage_complete;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string $session_id session_id
     *
     * @return self
     */
    public function setSessionId($session_id)
    {
        if (is_null($session_id)) {
            throw new \InvalidArgumentException('non-nullable session_id cannot be null');
        }
        $this->container['session_id'] = $session_id;

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


