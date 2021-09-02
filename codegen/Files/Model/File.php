<?php
/**
 * File
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
 * OpenAPI Generator version: 5.2.1
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
 * File Class Doc Comment
 *
 * @category Class
 * @description File
 * @package  HubSpot\Client\Files
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class File implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'File';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_at' => '\DateTime',
        'archived_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'archived' => 'bool',
        'parent_folder_id' => 'string',
        'name' => 'string',
        'path' => 'string',
        'size' => 'int',
        'height' => 'int',
        'width' => 'int',
        'encoding' => 'string',
        'type' => 'string',
        'extension' => 'string',
        'default_hosting_url' => 'string',
        'url' => 'string',
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
        'id' => null,
        'created_at' => 'date-time',
        'archived_at' => 'date-time',
        'updated_at' => 'date-time',
        'archived' => null,
        'parent_folder_id' => null,
        'name' => null,
        'path' => null,
        'size' => 'int64',
        'height' => 'int32',
        'width' => 'int32',
        'encoding' => null,
        'type' => null,
        'extension' => null,
        'default_hosting_url' => null,
        'url' => null,
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
        'id' => 'id',
        'created_at' => 'createdAt',
        'archived_at' => 'archivedAt',
        'updated_at' => 'updatedAt',
        'archived' => 'archived',
        'parent_folder_id' => 'parentFolderId',
        'name' => 'name',
        'path' => 'path',
        'size' => 'size',
        'height' => 'height',
        'width' => 'width',
        'encoding' => 'encoding',
        'type' => 'type',
        'extension' => 'extension',
        'default_hosting_url' => 'defaultHostingUrl',
        'url' => 'url',
        'is_usable_in_content' => 'isUsableInContent',
        'access' => 'access'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'archived_at' => 'setArchivedAt',
        'updated_at' => 'setUpdatedAt',
        'archived' => 'setArchived',
        'parent_folder_id' => 'setParentFolderId',
        'name' => 'setName',
        'path' => 'setPath',
        'size' => 'setSize',
        'height' => 'setHeight',
        'width' => 'setWidth',
        'encoding' => 'setEncoding',
        'type' => 'setType',
        'extension' => 'setExtension',
        'default_hosting_url' => 'setDefaultHostingUrl',
        'url' => 'setUrl',
        'is_usable_in_content' => 'setIsUsableInContent',
        'access' => 'setAccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'archived_at' => 'getArchivedAt',
        'updated_at' => 'getUpdatedAt',
        'archived' => 'getArchived',
        'parent_folder_id' => 'getParentFolderId',
        'name' => 'getName',
        'path' => 'getPath',
        'size' => 'getSize',
        'height' => 'getHeight',
        'width' => 'getWidth',
        'encoding' => 'getEncoding',
        'type' => 'getType',
        'extension' => 'getExtension',
        'default_hosting_url' => 'getDefaultHostingUrl',
        'url' => 'getUrl',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['archived_at'] = $data['archived_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['archived'] = $data['archived'] ?? null;
        $this->container['parent_folder_id'] = $data['parent_folder_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
        $this->container['encoding'] = $data['encoding'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['extension'] = $data['extension'] ?? null;
        $this->container['default_hosting_url'] = $data['default_hosting_url'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['archived'] === null) {
            $invalidProperties[] = "'archived' can't be null";
        }
        if ($this->container['access'] === null) {
            $invalidProperties[] = "'access' can't be null";
        }
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
     * @param string $id File ID.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Creation time of the file object.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets archived_at
     *
     * @return \DateTime|null
     */
    public function getArchivedAt()
    {
        return $this->container['archived_at'];
    }

    /**
     * Sets archived_at
     *
     * @param \DateTime|null $archived_at Deletion time of the file object.
     *
     * @return self
     */
    public function setArchivedAt($archived_at)
    {
        $this->container['archived_at'] = $archived_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Timestamp of the latest update to the file.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * @param bool $archived If the file is deleted.
     *
     * @return self
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

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
     * @param string|null $parent_folder_id Id of the folder the file is in.
     *
     * @return self
     */
    public function setParentFolderId($parent_folder_id)
    {
        $this->container['parent_folder_id'] = $parent_folder_id;

        return $this;
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
     * @param string|null $name Name of the file.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path Path of the file in the file manager.
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size Size in bytes of the file.
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height For image and video files, the height of the content.
     *
     * @return self
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width For image and video files, the width of the content.
     *
     * @return self
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param string|null $encoding Encoding of the file.
     *
     * @return self
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the file. Can be IMG, DOCUMENT, AUDIO, MOVIE, or OTHER.
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param string|null $extension Extension of the file. For example png.
     *
     * @return self
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets default_hosting_url
     *
     * @return string|null
     */
    public function getDefaultHostingUrl()
    {
        return $this->container['default_hosting_url'];
    }

    /**
     * Sets default_hosting_url
     *
     * @param string|null $default_hosting_url Default hosting URL of the file. This will use one of HubSpot's provided URLs to serve the file.
     *
     * @return self
     */
    public function setDefaultHostingUrl($default_hosting_url)
    {
        $this->container['default_hosting_url'] = $default_hosting_url;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL of the given file. This URL can change depending on the domain settings of the account. Will use the select file hosting domain.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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
     * @param bool|null $is_usable_in_content Previously \"archied\". Indicates if the file should be used when creating new content like web pages.
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
     * @return string
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     *
     * @param string $access File access. Can be PUBLIC_INDEXABLE, PUBLIC_NOT_INDEXABLE, PRIVATE.
     *
     * @return self
     */
    public function setAccess($access)
    {
        $allowedValues = $this->getAccessAllowableValues();
        if (!in_array($access, $allowedValues, true)) {
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


