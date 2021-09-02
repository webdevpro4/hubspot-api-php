<?php
/**
 * ActionLabels
 *
 * PHP version 7.3
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
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
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
 * ActionLabels Class Doc Comment
 *
 * @category Class
 * @description User-facing labels for this custom workflow action.
 * @package  HubSpot\Client\Automation\Actions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ActionLabels implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActionLabels';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'input_field_labels' => 'array<string,string>',
        'input_field_descriptions' => 'array<string,string>',
        'action_name' => 'string',
        'action_description' => 'string',
        'app_display_name' => 'string',
        'action_card_content' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'input_field_labels' => null,
        'input_field_descriptions' => null,
        'action_name' => null,
        'action_description' => null,
        'app_display_name' => null,
        'action_card_content' => null
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
        'input_field_labels' => 'inputFieldLabels',
        'input_field_descriptions' => 'inputFieldDescriptions',
        'action_name' => 'actionName',
        'action_description' => 'actionDescription',
        'app_display_name' => 'appDisplayName',
        'action_card_content' => 'actionCardContent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'input_field_labels' => 'setInputFieldLabels',
        'input_field_descriptions' => 'setInputFieldDescriptions',
        'action_name' => 'setActionName',
        'action_description' => 'setActionDescription',
        'app_display_name' => 'setAppDisplayName',
        'action_card_content' => 'setActionCardContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'input_field_labels' => 'getInputFieldLabels',
        'input_field_descriptions' => 'getInputFieldDescriptions',
        'action_name' => 'getActionName',
        'action_description' => 'getActionDescription',
        'app_display_name' => 'getAppDisplayName',
        'action_card_content' => 'getActionCardContent'
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
        $this->container['input_field_labels'] = $data['input_field_labels'] ?? null;
        $this->container['input_field_descriptions'] = $data['input_field_descriptions'] ?? null;
        $this->container['action_name'] = $data['action_name'] ?? null;
        $this->container['action_description'] = $data['action_description'] ?? null;
        $this->container['app_display_name'] = $data['app_display_name'] ?? null;
        $this->container['action_card_content'] = $data['action_card_content'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['action_name'] === null) {
            $invalidProperties[] = "'action_name' can't be null";
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
     * Gets input_field_labels
     *
     * @return array<string,string>|null
     */
    public function getInputFieldLabels()
    {
        return $this->container['input_field_labels'];
    }

    /**
     * Sets input_field_labels
     *
     * @param array<string,string>|null $input_field_labels A map of input field names to the user-facing labels.
     *
     * @return self
     */
    public function setInputFieldLabels($input_field_labels)
    {
        $this->container['input_field_labels'] = $input_field_labels;

        return $this;
    }

    /**
     * Gets input_field_descriptions
     *
     * @return array<string,string>|null
     */
    public function getInputFieldDescriptions()
    {
        return $this->container['input_field_descriptions'];
    }

    /**
     * Sets input_field_descriptions
     *
     * @param array<string,string>|null $input_field_descriptions A map of input field names to descriptions for the fields. These will show up as tooltips when users are editing your action.
     *
     * @return self
     */
    public function setInputFieldDescriptions($input_field_descriptions)
    {
        $this->container['input_field_descriptions'] = $input_field_descriptions;

        return $this;
    }

    /**
     * Gets action_name
     *
     * @return string
     */
    public function getActionName()
    {
        return $this->container['action_name'];
    }

    /**
     * Sets action_name
     *
     * @param string $action_name The name of this custom action. This is what will show up when users are selecting an action in the workflows app.
     *
     * @return self
     */
    public function setActionName($action_name)
    {
        $this->container['action_name'] = $action_name;

        return $this;
    }

    /**
     * Gets action_description
     *
     * @return string|null
     */
    public function getActionDescription()
    {
        return $this->container['action_description'];
    }

    /**
     * Sets action_description
     *
     * @param string|null $action_description A description for this custom action. This will show up in the action editor along with the input fields.
     *
     * @return self
     */
    public function setActionDescription($action_description)
    {
        $this->container['action_description'] = $action_description;

        return $this;
    }

    /**
     * Gets app_display_name
     *
     * @return string|null
     */
    public function getAppDisplayName()
    {
        return $this->container['app_display_name'];
    }

    /**
     * Sets app_display_name
     *
     * @param string|null $app_display_name The name to be displayed at the top of the action editor in the workflows app.
     *
     * @return self
     */
    public function setAppDisplayName($app_display_name)
    {
        $this->container['app_display_name'] = $app_display_name;

        return $this;
    }

    /**
     * Gets action_card_content
     *
     * @return string|null
     */
    public function getActionCardContent()
    {
        return $this->container['action_card_content'];
    }

    /**
     * Sets action_card_content
     *
     * @param string|null $action_card_content The label to be displayed in the action card of the workflow editor once this custom action has been added to a workflow.
     *
     * @return self
     */
    public function setActionCardContent($action_card_content)
    {
        $this->container['action_card_content'] = $action_card_content;

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


