<?php
/**
 * ExtensionActionDefinition
 *
 * PHP version 5
 *
 * @category Class
 * @package  HubSpot\Client\Automation\Actions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Custom Workflow Actions
 *
 * Create custom workflow actions
 *
 * The version of the OpenAPI document: v4
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Automation\Actions\Model;

use \ArrayAccess;
use \HubSpot\Client\Automation\Actions\ObjectSerializer;

/**
 * ExtensionActionDefinition Class Doc Comment
 *
 * @category Class
 * @description Configuration for custom workflow action.
 * @package  HubSpot\Client\Automation\Actions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExtensionActionDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExtensionActionDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'revision_id' => 'string',
        'functions' => '\HubSpot\Client\Automation\Actions\Model\ActionFunctionIdentifier[]',
        'action_url' => 'string',
        'published' => 'bool',
        'archived_at' => 'int',
        'input_fields' => '\HubSpot\Client\Automation\Actions\Model\InputFieldDefinition[]',
        'object_request_options' => '\HubSpot\Client\Automation\Actions\Model\ObjectRequestOptions',
        'input_field_dependencies' => 'OneOfSingleFieldDependencyConditionalSingleFieldDependency[]',
        'labels' => 'map[string,\HubSpot\Client\Automation\Actions\Model\ActionLabels]',
        'object_types' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'revision_id' => null,
        'functions' => null,
        'action_url' => null,
        'published' => null,
        'archived_at' => 'int64',
        'input_fields' => null,
        'object_request_options' => null,
        'input_field_dependencies' => null,
        'labels' => null,
        'object_types' => null
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
        'id' => 'id',
        'revision_id' => 'revisionId',
        'functions' => 'functions',
        'action_url' => 'actionUrl',
        'published' => 'published',
        'archived_at' => 'archivedAt',
        'input_fields' => 'inputFields',
        'object_request_options' => 'objectRequestOptions',
        'input_field_dependencies' => 'inputFieldDependencies',
        'labels' => 'labels',
        'object_types' => 'objectTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'revision_id' => 'setRevisionId',
        'functions' => 'setFunctions',
        'action_url' => 'setActionUrl',
        'published' => 'setPublished',
        'archived_at' => 'setArchivedAt',
        'input_fields' => 'setInputFields',
        'object_request_options' => 'setObjectRequestOptions',
        'input_field_dependencies' => 'setInputFieldDependencies',
        'labels' => 'setLabels',
        'object_types' => 'setObjectTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'revision_id' => 'getRevisionId',
        'functions' => 'getFunctions',
        'action_url' => 'getActionUrl',
        'published' => 'getPublished',
        'archived_at' => 'getArchivedAt',
        'input_fields' => 'getInputFields',
        'object_request_options' => 'getObjectRequestOptions',
        'input_field_dependencies' => 'getInputFieldDependencies',
        'labels' => 'getLabels',
        'object_types' => 'getObjectTypes'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['revision_id'] = isset($data['revision_id']) ? $data['revision_id'] : null;
        $this->container['functions'] = isset($data['functions']) ? $data['functions'] : null;
        $this->container['action_url'] = isset($data['action_url']) ? $data['action_url'] : null;
        $this->container['published'] = isset($data['published']) ? $data['published'] : null;
        $this->container['archived_at'] = isset($data['archived_at']) ? $data['archived_at'] : null;
        $this->container['input_fields'] = isset($data['input_fields']) ? $data['input_fields'] : null;
        $this->container['object_request_options'] = isset($data['object_request_options']) ? $data['object_request_options'] : null;
        $this->container['input_field_dependencies'] = isset($data['input_field_dependencies']) ? $data['input_field_dependencies'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['object_types'] = isset($data['object_types']) ? $data['object_types'] : null;
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
        if ($this->container['revision_id'] === null) {
            $invalidProperties[] = "'revision_id' can't be null";
        }
        if ($this->container['functions'] === null) {
            $invalidProperties[] = "'functions' can't be null";
        }
        if ($this->container['action_url'] === null) {
            $invalidProperties[] = "'action_url' can't be null";
        }
        if ($this->container['published'] === null) {
            $invalidProperties[] = "'published' can't be null";
        }
        if ($this->container['input_fields'] === null) {
            $invalidProperties[] = "'input_fields' can't be null";
        }
        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
        }
        if ($this->container['object_types'] === null) {
            $invalidProperties[] = "'object_types' can't be null";
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
     * @param string $id The ID of the custom action.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets revision_id
     *
     * @return string
     */
    public function getRevisionId()
    {
        return $this->container['revision_id'];
    }

    /**
     * Sets revision_id
     *
     * @param string $revision_id revision_id
     *
     * @return $this
     */
    public function setRevisionId($revision_id)
    {
        $this->container['revision_id'] = $revision_id;

        return $this;
    }

    /**
     * Gets functions
     *
     * @return \HubSpot\Client\Automation\Actions\Model\ActionFunctionIdentifier[]
     */
    public function getFunctions()
    {
        return $this->container['functions'];
    }

    /**
     * Sets functions
     *
     * @param \HubSpot\Client\Automation\Actions\Model\ActionFunctionIdentifier[] $functions A list of functions associated with the custom workflow action.
     *
     * @return $this
     */
    public function setFunctions($functions)
    {
        $this->container['functions'] = $functions;

        return $this;
    }

    /**
     * Gets action_url
     *
     * @return string
     */
    public function getActionUrl()
    {
        return $this->container['action_url'];
    }

    /**
     * Sets action_url
     *
     * @param string $action_url The URL that will accept an HTTPS request each time workflows executes the custom action.
     *
     * @return $this
     */
    public function setActionUrl($action_url)
    {
        $this->container['action_url'] = $action_url;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool $published Whether this custom action is published to customers.
     *
     * @return $this
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets archived_at
     *
     * @return int|null
     */
    public function getArchivedAt()
    {
        return $this->container['archived_at'];
    }

    /**
     * Sets archived_at
     *
     * @param int|null $archived_at The date that this custom action was archived, if the custom action is archived.
     *
     * @return $this
     */
    public function setArchivedAt($archived_at)
    {
        $this->container['archived_at'] = $archived_at;

        return $this;
    }

    /**
     * Gets input_fields
     *
     * @return \HubSpot\Client\Automation\Actions\Model\InputFieldDefinition[]
     */
    public function getInputFields()
    {
        return $this->container['input_fields'];
    }

    /**
     * Sets input_fields
     *
     * @param \HubSpot\Client\Automation\Actions\Model\InputFieldDefinition[] $input_fields The list of input fields to display in this custom action.
     *
     * @return $this
     */
    public function setInputFields($input_fields)
    {
        $this->container['input_fields'] = $input_fields;

        return $this;
    }

    /**
     * Gets object_request_options
     *
     * @return \HubSpot\Client\Automation\Actions\Model\ObjectRequestOptions|null
     */
    public function getObjectRequestOptions()
    {
        return $this->container['object_request_options'];
    }

    /**
     * Sets object_request_options
     *
     * @param \HubSpot\Client\Automation\Actions\Model\ObjectRequestOptions|null $object_request_options object_request_options
     *
     * @return $this
     */
    public function setObjectRequestOptions($object_request_options)
    {
        $this->container['object_request_options'] = $object_request_options;

        return $this;
    }

    /**
     * Gets input_field_dependencies
     *
     * @return OneOfSingleFieldDependencyConditionalSingleFieldDependency[]|null
     */
    public function getInputFieldDependencies()
    {
        return $this->container['input_field_dependencies'];
    }

    /**
     * Sets input_field_dependencies
     *
     * @param OneOfSingleFieldDependencyConditionalSingleFieldDependency[]|null $input_field_dependencies A list of dependencies between the input fields. These configure when the input fields should be visible.
     *
     * @return $this
     */
    public function setInputFieldDependencies($input_field_dependencies)
    {
        $this->container['input_field_dependencies'] = $input_field_dependencies;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return map[string,\HubSpot\Client\Automation\Actions\Model\ActionLabels]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param map[string,\HubSpot\Client\Automation\Actions\Model\ActionLabels] $labels The user-facing labels for the custom action.
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets object_types
     *
     * @return string[]
     */
    public function getObjectTypes()
    {
        return $this->container['object_types'];
    }

    /**
     * Sets object_types
     *
     * @param string[] $object_types The object types that this custom action supports.
     *
     * @return $this
     */
    public function setObjectTypes($object_types)
    {
        $this->container['object_types'] = $object_types;

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


