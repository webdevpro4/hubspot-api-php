<?php
/**
 * PublicPerformanceResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Performance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CMS Performance API
 *
 * Use these endpoints to get a time series view of your website's performance.
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Cms\Performance\Model;

use \ArrayAccess;
use \HubSpot\Client\Cms\Performance\ObjectSerializer;

/**
 * PublicPerformanceResponse Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Performance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PublicPerformanceResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicPerformanceResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data' => '\HubSpot\Client\Cms\Performance\Model\PerformanceView[]',
        'domain' => 'string',
        'path' => 'string',
        'start_interval' => 'int',
        'end_interval' => 'int',
        'interval' => 'string',
        'period' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'data' => null,
        'domain' => null,
        'path' => null,
        'start_interval' => 'int64',
        'end_interval' => 'int64',
        'interval' => null,
        'period' => null
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
        'data' => 'data',
        'domain' => 'domain',
        'path' => 'path',
        'start_interval' => 'startInterval',
        'end_interval' => 'endInterval',
        'interval' => 'interval',
        'period' => 'period'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data' => 'setData',
        'domain' => 'setDomain',
        'path' => 'setPath',
        'start_interval' => 'setStartInterval',
        'end_interval' => 'setEndInterval',
        'interval' => 'setInterval',
        'period' => 'setPeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data' => 'getData',
        'domain' => 'getDomain',
        'path' => 'getPath',
        'start_interval' => 'getStartInterval',
        'end_interval' => 'getEndInterval',
        'interval' => 'getInterval',
        'period' => 'getPeriod'
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

    const INTERVAL_ONE_MINUTE = 'ONE_MINUTE';
    const INTERVAL_FIVE_MINUTES = 'FIVE_MINUTES';
    const INTERVAL_TEN_MINUTES = 'TEN_MINUTES';
    const INTERVAL_FIFTEEN_MINUTES = 'FIFTEEN_MINUTES';
    const INTERVAL_THIRTY_MINUTES = 'THIRTY_MINUTES';
    const INTERVAL_ONE_HOUR = 'ONE_HOUR';
    const INTERVAL_FOUR_HOURS = 'FOUR_HOURS';
    const INTERVAL_TWELVE_HOURS = 'TWELVE_HOURS';
    const INTERVAL_ONE_DAY = 'ONE_DAY';
    const INTERVAL_ONE_WEEK = 'ONE_WEEK';
    const PERIOD_ONE_MINUTE = 'ONE_MINUTE';
    const PERIOD_FIVE_MINUTES = 'FIVE_MINUTES';
    const PERIOD_TEN_MINUTES = 'TEN_MINUTES';
    const PERIOD_FIFTEEN_MINUTES = 'FIFTEEN_MINUTES';
    const PERIOD_THIRTY_MINUTES = 'THIRTY_MINUTES';
    const PERIOD_ONE_HOUR = 'ONE_HOUR';
    const PERIOD_FOUR_HOURS = 'FOUR_HOURS';
    const PERIOD_TWELVE_HOURS = 'TWELVE_HOURS';
    const PERIOD_ONE_DAY = 'ONE_DAY';
    const PERIOD_ONE_WEEK = 'ONE_WEEK';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntervalAllowableValues()
    {
        return [
            self::INTERVAL_ONE_MINUTE,
            self::INTERVAL_FIVE_MINUTES,
            self::INTERVAL_TEN_MINUTES,
            self::INTERVAL_FIFTEEN_MINUTES,
            self::INTERVAL_THIRTY_MINUTES,
            self::INTERVAL_ONE_HOUR,
            self::INTERVAL_FOUR_HOURS,
            self::INTERVAL_TWELVE_HOURS,
            self::INTERVAL_ONE_DAY,
            self::INTERVAL_ONE_WEEK,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPeriodAllowableValues()
    {
        return [
            self::PERIOD_ONE_MINUTE,
            self::PERIOD_FIVE_MINUTES,
            self::PERIOD_TEN_MINUTES,
            self::PERIOD_FIFTEEN_MINUTES,
            self::PERIOD_THIRTY_MINUTES,
            self::PERIOD_ONE_HOUR,
            self::PERIOD_FOUR_HOURS,
            self::PERIOD_TWELVE_HOURS,
            self::PERIOD_ONE_DAY,
            self::PERIOD_ONE_WEEK,
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
        $this->container['data'] = $data['data'] ?? null;
        $this->container['domain'] = $data['domain'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['start_interval'] = $data['start_interval'] ?? null;
        $this->container['end_interval'] = $data['end_interval'] ?? null;
        $this->container['interval'] = $data['interval'] ?? null;
        $this->container['period'] = $data['period'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
        }
        if ($this->container['start_interval'] === null) {
            $invalidProperties[] = "'start_interval' can't be null";
        }
        if ($this->container['end_interval'] === null) {
            $invalidProperties[] = "'end_interval' can't be null";
        }
        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
        }
        $allowedValues = $this->getIntervalAllowableValues();
        if (!is_null($this->container['interval']) && !in_array($this->container['interval'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'interval', must be one of '%s'",
                $this->container['interval'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPeriodAllowableValues();
        if (!is_null($this->container['period']) && !in_array($this->container['period'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'period', must be one of '%s'",
                $this->container['period'],
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
     * Gets data
     *
     * @return \HubSpot\Client\Cms\Performance\Model\PerformanceView[]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \HubSpot\Client\Cms\Performance\Model\PerformanceView[] $data data
     *
     * @return self
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain domain
     *
     * @return self
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

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
     * @param string|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets start_interval
     *
     * @return int
     */
    public function getStartInterval()
    {
        return $this->container['start_interval'];
    }

    /**
     * Sets start_interval
     *
     * @param int $start_interval start_interval
     *
     * @return self
     */
    public function setStartInterval($start_interval)
    {
        $this->container['start_interval'] = $start_interval;

        return $this;
    }

    /**
     * Gets end_interval
     *
     * @return int
     */
    public function getEndInterval()
    {
        return $this->container['end_interval'];
    }

    /**
     * Sets end_interval
     *
     * @param int $end_interval end_interval
     *
     * @return self
     */
    public function setEndInterval($end_interval)
    {
        $this->container['end_interval'] = $end_interval;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param string $interval interval
     *
     * @return self
     */
    public function setInterval($interval)
    {
        $allowedValues = $this->getIntervalAllowableValues();
        if (!in_array($interval, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'interval', must be one of '%s'",
                    $interval,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string|null $period period
     *
     * @return self
     */
    public function setPeriod($period)
    {
        $allowedValues = $this->getPeriodAllowableValues();
        if (!is_null($period) && !in_array($period, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'period', must be one of '%s'",
                    $period,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['period'] = $period;

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


