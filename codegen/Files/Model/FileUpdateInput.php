<?php
/**
 * FileUpdateInput
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Files
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Files
 *
 * Upload and manage files.
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

namespace HubSpot\Client\Files\Model;

use \ArrayAccess;
use \HubSpot\Client\Files\ObjectSerializer;

/**
 * FileUpdateInput Class Doc Comment
 *
 * @category Class
 * @description Object for updating files.
 * @package  HubSpot\Client\Files
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FileUpdateInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FileUpdateInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'parent_folder_id' => 'string',
        'parent_folder_path' => 'string',
        'is_usable_in_content' => 'bool',
        'access' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'parent_folder_id' => null,
        'parent_folder_path' => null,
        'is_usable_in_content' => null,
        'access' => null
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
        'parent_folder_id' => 'parentFolderId',
        'parent_folder_path' => 'parentFolderPath',
        'is_usable_in_content' => 'isUsableInContent',
        'access' => 'access'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'parent_folder_id' => 'setParentFolderId',
        'parent_folder_path' => 'setParentFolderPath',
        'is_usable_in_content' => 'setIsUsableInContent',
        'access' => 'setAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'parent_folder_id' => 'getParentFolderId',
        'parent_folder_path' => 'getParentFolderPath',
        'is_usable_in_content' => 'getIsUsableInContent',
        'access' => 'getAccess'
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

    const ACCESS_PUBLIC_INDEXABLE = 'PUBLIC_INDEXABLE';
    const ACCESS_PUBLIC_NOT_INDEXABLE = 'PUBLIC_NOT_INDEXABLE';
    const ACCESS_HIDDEN_INDEXABLE = 'HIDDEN_INDEXABLE';
    const ACCESS_HIDDEN_NOT_INDEXABLE = 'HIDDEN_NOT_INDEXABLE';
    const ACCESS_HIDDEN_PRIVATE = 'HIDDEN_PRIVATE';
    const ACCESS__PRIVATE = 'PRIVATE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessAllowableValues()
    {
        return [
            self::ACCESS_PUBLIC_INDEXABLE,
            self::ACCESS_PUBLIC_NOT_INDEXABLE,
            self::ACCESS_HIDDEN_INDEXABLE,
            self::ACCESS_HIDDEN_NOT_INDEXABLE,
            self::ACCESS_HIDDEN_PRIVATE,
            self::ACCESS__PRIVATE,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['parent_folder_id'] = $data['parent_folder_id'] ?? null;
        $this->container['parent_folder_path'] = $data['parent_folder_path'] ?? null;
        $this->container['is_usable_in_content'] = $data['is_usable_in_content'] ?? null;
        $this->container['access'] = $data['access'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccessAllowableValues();
        if (!is_null($this->container['access']) && !in_array($this->container['access'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'access', must be one of '%s'",
                $this->container['access'],
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
     * @param string|null $name New name for the file.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parent_folder_id
     *
     * @return string|null
     */
    public function getParentFolderId()
    {
        return $this->container['parent_folder_id'];
    }

    /**
     * Sets parent_folder_id
     *
     * @param string|null $parent_folder_id Folder ID where the file should be moved to.  folderId and folderPath cannot be set at the same time.
     *
     * @return self
     */
    public function setParentFolderId($parent_folder_id)
    {
        $this->container['parent_folder_id'] = $parent_folder_id;

        return $this;
    }

    /**
     * Gets parent_folder_path
     *
     * @return string|null
     */
    public function getParentFolderPath()
    {
        return $this->container['parent_folder_path'];
    }

    /**
     * Sets parent_folder_path
     *
     * @param string|null $parent_folder_path Folder path where the file should be moved to. folderId and folderPath cannot be set at the same time.
     *
     * @return self
     */
    public function setParentFolderPath($parent_folder_path)
    {
        $this->container['parent_folder_path'] = $parent_folder_path;

        return $this;
    }

    /**
     * Gets is_usable_in_content
     *
     * @return bool|null
     */
    public function getIsUsableInContent()
    {
        return $this->container['is_usable_in_content'];
    }

    /**
     * Sets is_usable_in_content
     *
     * @param bool|null $is_usable_in_content Mark weather the file should be used in new content or not.
     *
     * @return self
     */
    public function setIsUsableInContent($is_usable_in_content)
    {
        $this->container['is_usable_in_content'] = $is_usable_in_content;

        return $this;
    }

    /**
     * Gets access
     *
     * @return string|null
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param string|null $access NONE: Do not run any duplicate validation. REJECT: Reject the upload if a duplicate is found. RETURN_EXISTING: If a duplicate file is found, do not upload a new file and return the found duplicate instead.
     *
     * @return self
     */
    public function setAccess($access)
    {
        $allowedValues = $this->getAccessAllowableValues();
        if (!is_null($access) && !in_array($access, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'access', must be one of '%s'",
                    $access,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['access'] = $access;

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


