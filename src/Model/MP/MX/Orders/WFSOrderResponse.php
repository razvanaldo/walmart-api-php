<?php

/**
 * WFSOrderResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Model\MP\MX\Orders;
use Walmart\Model\BaseModel;

/**
 * WFSOrderResponse Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class WFSOrderResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'WFSOrderResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'meta' => '\Walmart\Model\MP\MX\Orders\GetAllOrders200ResponseMeta',
        'order' => '\Walmart\Model\MP\MX\Orders\GetAllWFSOrders200ResponseOrderInner[]',
        'error' => '\Walmart\Model\MP\MX\Orders\ShippingUpdates400ResponseError'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'meta' => null,
        'order' => null,
        'error' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'meta' => false,
        'order' => false,
        'error' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'meta' => 'meta',
        'order' => 'order',
        'error' => 'error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'meta' => 'setMeta',
        'order' => 'setOrder',
        'error' => 'setError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'meta' => 'getMeta',
        'order' => 'getOrder',
        'error' => 'getError'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
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
     * Gets meta
     *
     * @return \Walmart\Model\MP\MX\Orders\GetAllOrders200ResponseMeta|null
    
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \Walmart\Model\MP\MX\Orders\GetAllOrders200ResponseMeta|null $meta meta
     *
     * @return self
    
     */
    public function setMeta($meta)
    {
        if (is_null($meta)) {
            throw new \InvalidArgumentException('non-nullable meta cannot be null');
        }

        $this->container['meta'] = $meta;
        return $this;
    }

    /**
     * Gets order
     *
     * @return \Walmart\Model\MP\MX\Orders\GetAllWFSOrders200ResponseOrderInner[]|null
    
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Walmart\Model\MP\MX\Orders\GetAllWFSOrders200ResponseOrderInner[]|null $order order
     *
     * @return self
    
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }

        $this->container['order'] = $order;
        return $this;
    }

    /**
     * Gets error
     *
     * @return \Walmart\Model\MP\MX\Orders\ShippingUpdates400ResponseError|null
    
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \Walmart\Model\MP\MX\Orders\ShippingUpdates400ResponseError|null $error error
     *
     * @return self
    
     */
    public function setError($error)
    {
        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }

        $this->container['error'] = $error;
        return $this;
    }
}

