<?php
/**
 * ActionHookActionBody
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
 * OpenAPI Generator version: 5.4.0
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
 * ActionHookActionBody Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Extensions\Cards
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ActionHookActionBody implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActionHookActionBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'confirmation' => '\HubSpot\Client\Crm\Extensions\Cards\Model\ActionConfirmationBody',
        'http_method' => 'string',
        'url' => 'string',
        'label' => 'string',
        'property_names_included' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'confirmation' => null,
        'http_method' => null,
        'url' => null,
        'label' => null,
        'property_names_included' => null
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
        'type' => 'type',
        'confirmation' => 'confirmation',
        'http_method' => 'httpMethod',
        'url' => 'url',
        'label' => 'label',
        'property_names_included' => 'propertyNamesIncluded'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'confirmation' => 'setConfirmation',
        'http_method' => 'setHttpMethod',
        'url' => 'setUrl',
        'label' => 'setLabel',
        'property_names_included' => 'setPropertyNamesIncluded'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'confirmation' => 'getConfirmation',
        'http_method' => 'getHttpMethod',
        'url' => 'getUrl',
        'label' => 'getLabel',
        'property_names_included' => 'getPropertyNamesIncluded'
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

    const TYPE_ACTION_HOOK = 'ACTION_HOOK';
    const HTTP_METHOD_CONNECT = 'CONNECT';
    const HTTP_METHOD_DELETE = 'DELETE';
    const HTTP_METHOD_GET = 'GET';
    const HTTP_METHOD_HEAD = 'HEAD';
    const HTTP_METHOD_OPTIONS = 'OPTIONS';
    const HTTP_METHOD_PATCH = 'PATCH';
    const HTTP_METHOD_POST = 'POST';
    const HTTP_METHOD_PUT = 'PUT';
    const HTTP_METHOD_TRACE = 'TRACE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ACTION_HOOK,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHttpMethodAllowableValues()
    {
        return [
            self::HTTP_METHOD_CONNECT,
            self::HTTP_METHOD_DELETE,
            self::HTTP_METHOD_GET,
            self::HTTP_METHOD_HEAD,
            self::HTTP_METHOD_OPTIONS,
            self::HTTP_METHOD_PATCH,
            self::HTTP_METHOD_POST,
            self::HTTP_METHOD_PUT,
            self::HTTP_METHOD_TRACE,
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
        $this->container['type'] = $data['type'] ?? 'ACTION_HOOK';
        $this->container['confirmation'] = $data['confirmation'] ?? null;
        $this->container['http_method'] = $data['http_method'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['property_names_included'] = $data['property_names_included'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['http_method'] === null) {
            $invalidProperties[] = "'http_method' can't be null";
        }
        $allowedValues = $this->getHttpMethodAllowableValues();
        if (!is_null($this->container['http_method']) && !in_array($this->container['http_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'http_method', must be one of '%s'",
                $this->container['http_method'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['property_names_included'] === null) {
            $invalidProperties[] = "'property_names_included' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets confirmation
     *
     * @return \HubSpot\Client\Crm\Extensions\Cards\Model\ActionConfirmationBody|null
     */
    public function getConfirmation()
    {
        return $this->container['confirmation'];
    }

    /**
     * Sets confirmation
     *
     * @param \HubSpot\Client\Crm\Extensions\Cards\Model\ActionConfirmationBody|null $confirmation confirmation
     *
     * @return self
     */
    public function setConfirmation($confirmation)
    {
        $this->container['confirmation'] = $confirmation;

        return $this;
    }

    /**
     * Gets http_method
     *
     * @return string
     */
    public function getHttpMethod()
    {
        return $this->container['http_method'];
    }

    /**
     * Sets http_method
     *
     * @param string $http_method http_method
     *
     * @return self
     */
    public function setHttpMethod($http_method)
    {
        $allowedValues = $this->getHttpMethodAllowableValues();
        if (!in_array($http_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'http_method', must be one of '%s'",
                    $http_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['http_method'] = $http_method;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets property_names_included
     *
     * @return string[]
     */
    public function getPropertyNamesIncluded()
    {
        return $this->container['property_names_included'];
    }

    /**
     * Sets property_names_included
     *
     * @param string[] $property_names_included property_names_included
     *
     * @return self
     */
    public function setPropertyNamesIncluded($property_names_included)
    {
        $this->container['property_names_included'] = $property_names_included;

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


