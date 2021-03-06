<?php
/**
 * CatalogDataProductRenderPriceInfoExtensionInterface
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
 * CatalogDataProductRenderPriceInfoExtensionInterface Class Doc Comment
 *
 * @category Class
 * @description ExtensionInterface class for @see \\Magento\\Catalog\\Api\\Data\\ProductRender\\PriceInfoInterface
 * @package  MagentoApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogDataProductRenderPriceInfoExtensionInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'catalog-data-product-render-price-info-extension-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'msrp' => '\MagentoApi\Model\MsrpDataProductRenderMsrpPriceInfoInterface',
'tax_adjustments' => '\MagentoApi\Model\CatalogDataProductRenderPriceInfoInterface',
'weee_attributes' => '\MagentoApi\Model\WeeeDataProductRenderWeeeAdjustmentAttributeInterface[]',
'weee_adjustment' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'msrp' => null,
'tax_adjustments' => null,
'weee_attributes' => null,
'weee_adjustment' => null    ];

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
        'msrp' => 'msrp',
'tax_adjustments' => 'tax_adjustments',
'weee_attributes' => 'weee_attributes',
'weee_adjustment' => 'weee_adjustment'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'msrp' => 'setMsrp',
'tax_adjustments' => 'setTaxAdjustments',
'weee_attributes' => 'setWeeeAttributes',
'weee_adjustment' => 'setWeeeAdjustment'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'msrp' => 'getMsrp',
'tax_adjustments' => 'getTaxAdjustments',
'weee_attributes' => 'getWeeeAttributes',
'weee_adjustment' => 'getWeeeAdjustment'    ];

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
        $this->container['msrp'] = isset($data['msrp']) ? $data['msrp'] : null;
        $this->container['tax_adjustments'] = isset($data['tax_adjustments']) ? $data['tax_adjustments'] : null;
        $this->container['weee_attributes'] = isset($data['weee_attributes']) ? $data['weee_attributes'] : null;
        $this->container['weee_adjustment'] = isset($data['weee_adjustment']) ? $data['weee_adjustment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets msrp
     *
     * @return \MagentoApi\Model\MsrpDataProductRenderMsrpPriceInfoInterface
     */
    public function getMsrp()
    {
        return $this->container['msrp'];
    }

    /**
     * Sets msrp
     *
     * @param \MagentoApi\Model\MsrpDataProductRenderMsrpPriceInfoInterface $msrp msrp
     *
     * @return $this
     */
    public function setMsrp($msrp)
    {
        $this->container['msrp'] = $msrp;

        return $this;
    }

    /**
     * Gets tax_adjustments
     *
     * @return \MagentoApi\Model\CatalogDataProductRenderPriceInfoInterface
     */
    public function getTaxAdjustments()
    {
        return $this->container['tax_adjustments'];
    }

    /**
     * Sets tax_adjustments
     *
     * @param \MagentoApi\Model\CatalogDataProductRenderPriceInfoInterface $tax_adjustments tax_adjustments
     *
     * @return $this
     */
    public function setTaxAdjustments($tax_adjustments)
    {
        $this->container['tax_adjustments'] = $tax_adjustments;

        return $this;
    }

    /**
     * Gets weee_attributes
     *
     * @return \MagentoApi\Model\WeeeDataProductRenderWeeeAdjustmentAttributeInterface[]
     */
    public function getWeeeAttributes()
    {
        return $this->container['weee_attributes'];
    }

    /**
     * Sets weee_attributes
     *
     * @param \MagentoApi\Model\WeeeDataProductRenderWeeeAdjustmentAttributeInterface[] $weee_attributes weee_attributes
     *
     * @return $this
     */
    public function setWeeeAttributes($weee_attributes)
    {
        $this->container['weee_attributes'] = $weee_attributes;

        return $this;
    }

    /**
     * Gets weee_adjustment
     *
     * @return string
     */
    public function getWeeeAdjustment()
    {
        return $this->container['weee_adjustment'];
    }

    /**
     * Sets weee_adjustment
     *
     * @param string $weee_adjustment weee_adjustment
     *
     * @return $this
     */
    public function setWeeeAdjustment($weee_adjustment)
    {
        $this->container['weee_adjustment'] = $weee_adjustment;

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
