<?php
/**
 * ActionConfirmationBody
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Extensions\Cards
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CRM cards
 *
 * Allows an app to extend the CRM UI by surfacing custom cards in the sidebar of record pages. These cards are defined up-front as part of app configuration, then populated by external data fetch requests when the record page is accessed by a user.
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Extensions\Cards\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Extensions\Cards\ObjectSerializer;

/**
 * ActionConfirmationBody Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Extensions\Cards
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ActionConfirmationBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActionConfirmationBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'prompt' => 'string',
        'confirm_button_label' => 'string',
        'cancel_button_label' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'prompt' => null,
        'confirm_button_label' => null,
        'cancel_button_label' => null
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
        'prompt' => 'prompt',
        'confirm_button_label' => 'confirmButtonLabel',
        'cancel_button_label' => 'cancelButtonLabel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'prompt' => 'setPrompt',
        'confirm_button_label' => 'setConfirmButtonLabel',
        'cancel_button_label' => 'setCancelButtonLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'prompt' => 'getPrompt',
        'confirm_button_label' => 'getConfirmButtonLabel',
        'cancel_button_label' => 'getCancelButtonLabel'
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
        $this->container['prompt'] = $data['prompt'] ?? null;
        $this->container['confirm_button_label'] = $data['confirm_button_label'] ?? null;
        $this->container['cancel_button_label'] = $data['cancel_button_label'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['prompt'] === null) {
            $invalidProperties[] = "'prompt' can't be null";
        }
        if ($this->container['confirm_button_label'] === null) {
            $invalidProperties[] = "'confirm_button_label' can't be null";
        }
        if ($this->container['cancel_button_label'] === null) {
            $invalidProperties[] = "'cancel_button_label' can't be null";
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
     * Gets prompt
     *
     * @return string
     */
    public function getPrompt()
    {
        return $this->container['prompt'];
    }

    /**
     * Sets prompt
     *
     * @param string $prompt prompt
     *
     * @return self
     */
    public function setPrompt($prompt)
    {
        $this->container['prompt'] = $prompt;

        return $this;
    }

    /**
     * Gets confirm_button_label
     *
     * @return string
     */
    public function getConfirmButtonLabel()
    {
        return $this->container['confirm_button_label'];
    }

    /**
     * Sets confirm_button_label
     *
     * @param string $confirm_button_label confirm_button_label
     *
     * @return self
     */
    public function setConfirmButtonLabel($confirm_button_label)
    {
        $this->container['confirm_button_label'] = $confirm_button_label;

        return $this;
    }

    /**
     * Gets cancel_button_label
     *
     * @return string
     */
    public function getCancelButtonLabel()
    {
        return $this->container['cancel_button_label'];
    }

    /**
     * Sets cancel_button_label
     *
     * @param string $cancel_button_label cancel_button_label
     *
     * @return self
     */
    public function setCancelButtonLabel($cancel_button_label)
    {
        $this->container['cancel_button_label'] = $cancel_button_label;

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


