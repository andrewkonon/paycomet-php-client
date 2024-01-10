<?php
/**
 * CardsPhysicalBody
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PAYCOMET REST API
 *
 * PAYCOMET API REST for customers.
 *
 * OpenAPI spec version: 2.99.0
 * Contact: tecnico@paycomet.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.52
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CardsPhysicalBody Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CardsPhysicalBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'cards_physical_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'terminal' => 'int',
        'provider_id' => 'int',
        'merchant_id' => 'string',
        'terminal_id' => 'string',
        'device_ksn' => 'string',
        'device_dukpt' => 'string',
        'cof_identifier' => 'string',
        'original_ip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'terminal' => null,
        'provider_id' => null,
        'merchant_id' => null,
        'terminal_id' => null,
        'device_ksn' => null,
        'device_dukpt' => null,
        'cof_identifier' => null,
        'original_ip' => null
    ];

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
        'terminal' => 'terminal',
        'provider_id' => 'providerId',
        'merchant_id' => 'merchantId',
        'terminal_id' => 'terminalId',
        'device_ksn' => 'deviceKsn',
        'device_dukpt' => 'deviceDukpt',
        'cof_identifier' => 'cofIdentifier',
        'original_ip' => 'originalIp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terminal' => 'setTerminal',
        'provider_id' => 'setProviderId',
        'merchant_id' => 'setMerchantId',
        'terminal_id' => 'setTerminalId',
        'device_ksn' => 'setDeviceKsn',
        'device_dukpt' => 'setDeviceDukpt',
        'cof_identifier' => 'setCofIdentifier',
        'original_ip' => 'setOriginalIp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terminal' => 'getTerminal',
        'provider_id' => 'getProviderId',
        'merchant_id' => 'getMerchantId',
        'terminal_id' => 'getTerminalId',
        'device_ksn' => 'getDeviceKsn',
        'device_dukpt' => 'getDeviceDukpt',
        'cof_identifier' => 'getCofIdentifier',
        'original_ip' => 'getOriginalIp'
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
        $this->container['terminal'] = isset($data['terminal']) ? $data['terminal'] : null;
        $this->container['provider_id'] = isset($data['provider_id']) ? $data['provider_id'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['terminal_id'] = isset($data['terminal_id']) ? $data['terminal_id'] : null;
        $this->container['device_ksn'] = isset($data['device_ksn']) ? $data['device_ksn'] : null;
        $this->container['device_dukpt'] = isset($data['device_dukpt']) ? $data['device_dukpt'] : null;
        $this->container['cof_identifier'] = isset($data['cof_identifier']) ? $data['cof_identifier'] : null;
        $this->container['original_ip'] = isset($data['original_ip']) ? $data['original_ip'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['terminal'] === null) {
            $invalidProperties[] = "'terminal' can't be null";
        }
        if ($this->container['provider_id'] === null) {
            $invalidProperties[] = "'provider_id' can't be null";
        }
        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
        }
        if ($this->container['terminal_id'] === null) {
            $invalidProperties[] = "'terminal_id' can't be null";
        }
        if ($this->container['device_ksn'] === null) {
            $invalidProperties[] = "'device_ksn' can't be null";
        }
        if ($this->container['device_dukpt'] === null) {
            $invalidProperties[] = "'device_dukpt' can't be null";
        }
        if ($this->container['original_ip'] === null) {
            $invalidProperties[] = "'original_ip' can't be null";
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
     * Gets terminal
     *
     * @return int
     */
    public function getTerminal()
    {
        return $this->container['terminal'];
    }

    /**
     * Sets terminal
     *
     * @param int $terminal Product or terminal Id.
     *
     * @return $this
     */
    public function setTerminal($terminal)
    {
        $this->container['terminal'] = $terminal;

        return $this;
    }

    /**
     * Gets provider_id
     *
     * @return int
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     *
     * @param int $provider_id Provider identifier for physical operations given by PAYCOMET
     *
     * @return $this
     */
    public function setProviderId($provider_id)
    {
        $this->container['provider_id'] = $provider_id;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id Merchant identifier code for physical operations given by PAYCOMET
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets terminal_id
     *
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminal_id'];
    }

    /**
     * Sets terminal_id
     *
     * @param string $terminal_id Terminal identifier
     *
     * @return $this
     */
    public function setTerminalId($terminal_id)
    {
        $this->container['terminal_id'] = $terminal_id;

        return $this;
    }

    /**
     * Gets device_ksn
     *
     * @return string
     */
    public function getDeviceKsn()
    {
        return $this->container['device_ksn'];
    }

    /**
     * Sets device_ksn
     *
     * @param string $device_ksn Card KSN info
     *
     * @return $this
     */
    public function setDeviceKsn($device_ksn)
    {
        $this->container['device_ksn'] = $device_ksn;

        return $this;
    }

    /**
     * Gets device_dukpt
     *
     * @return string
     */
    public function getDeviceDukpt()
    {
        return $this->container['device_dukpt'];
    }

    /**
     * Sets device_dukpt
     *
     * @param string $device_dukpt Card DUKPT info
     *
     * @return $this
     */
    public function setDeviceDukpt($device_dukpt)
    {
        $this->container['device_dukpt'] = $device_dukpt;

        return $this;
    }

    /**
     * Gets cof_identifier
     *
     * @return string
     */
    public function getCofIdentifier()
    {
        return $this->container['cof_identifier'];
    }

    /**
     * Sets cof_identifier
     *
     * @param string $cof_identifier Processor COF identifier
     *
     * @return $this
     */
    public function setCofIdentifier($cof_identifier)
    {
        $this->container['cof_identifier'] = $cof_identifier;

        return $this;
    }

    /**
     * Gets original_ip
     *
     * @return string
     */
    public function getOriginalIp()
    {
        return $this->container['original_ip'];
    }

    /**
     * Sets original_ip
     *
     * @param string $original_ip IP Address of the customer
     *
     * @return $this
     */
    public function setOriginalIp($original_ip)
    {
        $this->container['original_ip'] = $original_ip;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
