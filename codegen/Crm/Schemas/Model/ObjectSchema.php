<?php
/**
 * ObjectSchema
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Schemas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Schemas
 *
 * The CRM uses schemas to define how custom objects should store and represent information in the HubSpot CRM. Schemas define details about an object's type, properties, and associations. The schema can be uniquely identified by its **object type ID**.
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Schemas\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Schemas\ObjectSerializer;

/**
 * ObjectSchema Class Doc Comment
 *
 * @category Class
 * @description Defines an object schema, including its properties and associations.
 * @package  HubSpot\Client\Crm\Schemas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ObjectSchema implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ObjectSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'labels' => '\HubSpot\Client\Crm\Schemas\Model\ObjectTypeDefinitionLabels',
        'required_properties' => 'string[]',
        'searchable_properties' => 'string[]',
        'primary_display_property' => 'string',
        'secondary_display_properties' => 'string[]',
        'archived' => 'bool',
        'id' => 'string',
        'fully_qualified_name' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'object_type_id' => 'string',
        'properties' => '\HubSpot\Client\Crm\Schemas\Model\Property[]',
        'associations' => '\HubSpot\Client\Crm\Schemas\Model\AssociationDefinition[]',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'labels' => null,
        'required_properties' => null,
        'searchable_properties' => null,
        'primary_display_property' => null,
        'secondary_display_properties' => null,
        'archived' => null,
        'id' => null,
        'fully_qualified_name' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'object_type_id' => null,
        'properties' => null,
        'associations' => null,
        'name' => null
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
        'labels' => 'labels',
        'required_properties' => 'requiredProperties',
        'searchable_properties' => 'searchableProperties',
        'primary_display_property' => 'primaryDisplayProperty',
        'secondary_display_properties' => 'secondaryDisplayProperties',
        'archived' => 'archived',
        'id' => 'id',
        'fully_qualified_name' => 'fullyQualifiedName',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'object_type_id' => 'objectTypeId',
        'properties' => 'properties',
        'associations' => 'associations',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'labels' => 'setLabels',
        'required_properties' => 'setRequiredProperties',
        'searchable_properties' => 'setSearchableProperties',
        'primary_display_property' => 'setPrimaryDisplayProperty',
        'secondary_display_properties' => 'setSecondaryDisplayProperties',
        'archived' => 'setArchived',
        'id' => 'setId',
        'fully_qualified_name' => 'setFullyQualifiedName',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'object_type_id' => 'setObjectTypeId',
        'properties' => 'setProperties',
        'associations' => 'setAssociations',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'labels' => 'getLabels',
        'required_properties' => 'getRequiredProperties',
        'searchable_properties' => 'getSearchableProperties',
        'primary_display_property' => 'getPrimaryDisplayProperty',
        'secondary_display_properties' => 'getSecondaryDisplayProperties',
        'archived' => 'getArchived',
        'id' => 'getId',
        'fully_qualified_name' => 'getFullyQualifiedName',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'object_type_id' => 'getObjectTypeId',
        'properties' => 'getProperties',
        'associations' => 'getAssociations',
        'name' => 'getName'
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
        $this->container['labels'] = $data['labels'] ?? null;
        $this->container['required_properties'] = $data['required_properties'] ?? null;
        $this->container['searchable_properties'] = $data['searchable_properties'] ?? null;
        $this->container['primary_display_property'] = $data['primary_display_property'] ?? null;
        $this->container['secondary_display_properties'] = $data['secondary_display_properties'] ?? null;
        $this->container['archived'] = $data['archived'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['fully_qualified_name'] = $data['fully_qualified_name'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['object_type_id'] = $data['object_type_id'] ?? null;
        $this->container['properties'] = $data['properties'] ?? null;
        $this->container['associations'] = $data['associations'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
        }
        if ($this->container['required_properties'] === null) {
            $invalidProperties[] = "'required_properties' can't be null";
        }
        if ($this->container['searchable_properties'] === null) {
            $invalidProperties[] = "'searchable_properties' can't be null";
        }
        if ($this->container['secondary_display_properties'] === null) {
            $invalidProperties[] = "'secondary_display_properties' can't be null";
        }
        if ($this->container['archived'] === null) {
            $invalidProperties[] = "'archived' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['fully_qualified_name'] === null) {
            $invalidProperties[] = "'fully_qualified_name' can't be null";
        }
        if ($this->container['object_type_id'] === null) {
            $invalidProperties[] = "'object_type_id' can't be null";
        }
        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
        }
        if ($this->container['associations'] === null) {
            $invalidProperties[] = "'associations' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets labels
     *
     * @return \HubSpot\Client\Crm\Schemas\Model\ObjectTypeDefinitionLabels
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \HubSpot\Client\Crm\Schemas\Model\ObjectTypeDefinitionLabels $labels labels
     *
     * @return self
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets required_properties
     *
     * @return string[]
     */
    public function getRequiredProperties()
    {
        return $this->container['required_properties'];
    }

    /**
     * Sets required_properties
     *
     * @param string[] $required_properties The names of properties that should be **required** when creating an object of this type.
     *
     * @return self
     */
    public function setRequiredProperties($required_properties)
    {
        $this->container['required_properties'] = $required_properties;

        return $this;
    }

    /**
     * Gets searchable_properties
     *
     * @return string[]
     */
    public function getSearchableProperties()
    {
        return $this->container['searchable_properties'];
    }

    /**
     * Sets searchable_properties
     *
     * @param string[] $searchable_properties Names of properties that will be indexed for this object type in by HubSpot's product search.
     *
     * @return self
     */
    public function setSearchableProperties($searchable_properties)
    {
        $this->container['searchable_properties'] = $searchable_properties;

        return $this;
    }

    /**
     * Gets primary_display_property
     *
     * @return string|null
     */
    public function getPrimaryDisplayProperty()
    {
        return $this->container['primary_display_property'];
    }

    /**
     * Sets primary_display_property
     *
     * @param string|null $primary_display_property The name of the primary property for this object. This will be displayed as primary on the HubSpot record page for this object type.
     *
     * @return self
     */
    public function setPrimaryDisplayProperty($primary_display_property)
    {
        $this->container['primary_display_property'] = $primary_display_property;

        return $this;
    }

    /**
     * Gets secondary_display_properties
     *
     * @return string[]
     */
    public function getSecondaryDisplayProperties()
    {
        return $this->container['secondary_display_properties'];
    }

    /**
     * Sets secondary_display_properties
     *
     * @param string[] $secondary_display_properties The names of secondary properties for this object. These will be displayed as secondary on the HubSpot record page for this object type.
     *
     * @return self
     */
    public function setSecondaryDisplayProperties($secondary_display_properties)
    {
        $this->container['secondary_display_properties'] = $secondary_display_properties;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool $archived archived
     *
     * @return self
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
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
     * @param string $id A unique ID for this schema's object type. Will be defined as {meta-type}-{unique ID}.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets fully_qualified_name
     *
     * @return string
     */
    public function getFullyQualifiedName()
    {
        return $this->container['fully_qualified_name'];
    }

    /**
     * Sets fully_qualified_name
     *
     * @param string $fully_qualified_name An assigned unique ID for the object, including portal ID and object name.
     *
     * @return self
     */
    public function setFullyQualifiedName($fully_qualified_name)
    {
        $this->container['fully_qualified_name'] = $fully_qualified_name;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at When the object schema was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at When the object schema was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets object_type_id
     *
     * @return string
     */
    public function getObjectTypeId()
    {
        return $this->container['object_type_id'];
    }

    /**
     * Sets object_type_id
     *
     * @param string $object_type_id object_type_id
     *
     * @return self
     */
    public function setObjectTypeId($object_type_id)
    {
        $this->container['object_type_id'] = $object_type_id;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \HubSpot\Client\Crm\Schemas\Model\Property[]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \HubSpot\Client\Crm\Schemas\Model\Property[] $properties Properties defined for this object type.
     *
     * @return self
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets associations
     *
     * @return \HubSpot\Client\Crm\Schemas\Model\AssociationDefinition[]
     */
    public function getAssociations()
    {
        return $this->container['associations'];
    }

    /**
     * Sets associations
     *
     * @param \HubSpot\Client\Crm\Schemas\Model\AssociationDefinition[] $associations Associations defined for a given object type.
     *
     * @return self
     */
    public function setAssociations($associations)
    {
        $this->container['associations'] = $associations;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name A unique name for the schema's object type.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


