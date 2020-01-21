<?php
/**
 * FrameworkSearchSearchCriteriaInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  MagentoApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Community
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.16
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MagentoApi\Model;

use \ArrayAccess;
use \MagentoApi\ObjectSerializer;

/**
 * FrameworkSearchSearchCriteriaInterface Class Doc Comment
 *
 * @category Class
 * @description Interface SearchCriteriaInterface
 * @package  MagentoApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FrameworkSearchSearchCriteriaInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'framework-search-search-criteria-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'request_name' => 'string',
'filter_groups' => '\MagentoApi\Model\FrameworkSearchFilterGroup[]',
'sort_orders' => '\MagentoApi\Model\FrameworkSortOrder[]',
'page_size' => 'int',
'current_page' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'request_name' => null,
'filter_groups' => null,
'sort_orders' => null,
'page_size' => null,
'current_page' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'request_name' => 'request_name',
'filter_groups' => 'filter_groups',
'sort_orders' => 'sort_orders',
'page_size' => 'page_size',
'current_page' => 'current_page'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_name' => 'setRequestName',
'filter_groups' => 'setFilterGroups',
'sort_orders' => 'setSortOrders',
'page_size' => 'setPageSize',
'current_page' => 'setCurrentPage'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_name' => 'getRequestName',
'filter_groups' => 'getFilterGroups',
'sort_orders' => 'getSortOrders',
'page_size' => 'getPageSize',
'current_page' => 'getCurrentPage'    ];

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
        return self::$swaggerModelName;
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
        $this->container['request_name'] = isset($data['request_name']) ? $data['request_name'] : null;
        $this->container['filter_groups'] = isset($data['filter_groups']) ? $data['filter_groups'] : null;
        $this->container['sort_orders'] = isset($data['sort_orders']) ? $data['sort_orders'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['current_page'] = isset($data['current_page']) ? $data['current_page'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['request_name'] === null) {
            $invalidProperties[] = "'request_name' can't be null";
        }
        if ($this->container['filter_groups'] === null) {
            $invalidProperties[] = "'filter_groups' can't be null";
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
     * Gets request_name
     *
     * @return string
     */
    public function getRequestName()
    {
        return $this->container['request_name'];
    }

    /**
     * Sets request_name
     *
     * @param string $request_name request_name
     *
     * @return $this
     */
    public function setRequestName($request_name)
    {
        $this->container['request_name'] = $request_name;

        return $this;
    }

    /**
     * Gets filter_groups
     *
     * @return \MagentoApi\Model\FrameworkSearchFilterGroup[]
     */
    public function getFilterGroups()
    {
        return $this->container['filter_groups'];
    }

    /**
     * Sets filter_groups
     *
     * @param \MagentoApi\Model\FrameworkSearchFilterGroup[] $filter_groups A list of filter groups.
     *
     * @return $this
     */
    public function setFilterGroups($filter_groups)
    {
        $this->container['filter_groups'] = $filter_groups;

        return $this;
    }

    /**
     * Gets sort_orders
     *
     * @return \MagentoApi\Model\FrameworkSortOrder[]
     */
    public function getSortOrders()
    {
        return $this->container['sort_orders'];
    }

    /**
     * Sets sort_orders
     *
     * @param \MagentoApi\Model\FrameworkSortOrder[] $sort_orders Sort order.
     *
     * @return $this
     */
    public function setSortOrders($sort_orders)
    {
        $this->container['sort_orders'] = $sort_orders;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size Page size.
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets current_page
     *
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     *
     * @param int $current_page Current page.
     *
     * @return $this
     */
    public function setCurrentPage($current_page)
    {
        $this->container['current_page'] = $current_page;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}