<?php
/**
 * V1subscriptionordereditPayment
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
 * V1subscriptionordereditPayment Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V1subscriptionordereditPayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'v1subscriptionorderedit_payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'terminal' => 'int',
        'amount' => 'string',
        'original_ip' => 'string',
        'method_id' => 'string',
        'id_user' => 'int',
        'token_user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'terminal' => null,
        'amount' => null,
        'original_ip' => null,
        'method_id' => null,
        'id_user' => null,
        'token_user' => null
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
        'amount' => 'amount',
        'original_ip' => 'originalIp',
        'method_id' => 'methodId',
        'id_user' => 'idUser',
        'token_user' => 'tokenUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terminal' => 'setTerminal',
        'amount' => 'setAmount',
        'original_ip' => 'setOriginalIp',
        'method_id' => 'setMethodId',
        'id_user' => 'setIdUser',
        'token_user' => 'setTokenUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terminal' => 'getTerminal',
        'amount' => 'getAmount',
        'original_ip' => 'getOriginalIp',
        'method_id' => 'getMethodId',
        'id_user' => 'getIdUser',
        'token_user' => 'getTokenUser'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['original_ip'] = isset($data['original_ip']) ? $data['original_ip'] : null;
        $this->container['method_id'] = isset($data['method_id']) ? $data['method_id'] : null;
        $this->container['id_user'] = isset($data['id_user']) ? $data['id_user'] : null;
        $this->container['token_user'] = isset($data['token_user']) ? $data['token_user'] : null;
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
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['original_ip'] === null) {
            $invalidProperties[] = "'original_ip' can't be null";
        }
        if ($this->container['method_id'] === null) {
            $invalidProperties[] = "'method_id' can't be null";
        }
        if ($this->container['id_user'] === null) {
            $invalidProperties[] = "'id_user' can't be null";
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
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount Amount of the operation in number format. 1.00 EURO = 100, 4.50 EUROS = 450...
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * @param string $original_ip IP Address of the customer that initiated the payment transaction
     *
     * @return $this
     */
    public function setOriginalIp($original_ip)
    {
        $this->container['original_ip'] = $original_ip;

        return $this;
    }

    /**
     * Gets method_id
     *
     * @return string
     */
    public function getMethodId()
    {
        return $this->container['method_id'];
    }

    /**
     * Sets method_id
     *
     * @param string $method_id PAYCOMET payment method ID. 1 is for card.
     *
     * @return $this
     */
    public function setMethodId($method_id)
    {
        $this->container['method_id'] = $method_id;

        return $this;
    }

    /**
     * Gets id_user
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->container['id_user'];
    }

    /**
     * Sets id_user
     *
     * @param int $id_user Identification of user card given by PAYCOMET. Mandatory if is a card payment.
     *
     * @return $this
     */
    public function setIdUser($id_user)
    {
        $this->container['id_user'] = $id_user;

        return $this;
    }

    /**
     * Gets token_user
     *
     * @return string
     */
    public function getTokenUser()
    {
        return $this->container['token_user'];
    }

    /**
     * Sets token_user
     *
     * @param string $token_user Identification of user card given by PAYCOMET. Mandatory if is a card payment.
     *
     * @return $this
     */
    public function setTokenUser($token_user)
    {
        $this->container['token_user'] = $token_user;

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
