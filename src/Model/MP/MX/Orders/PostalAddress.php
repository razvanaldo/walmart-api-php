<?php

/**
 * PostalAddress
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
 * PostalAddress Class Doc Comment
 *
 * @category Class

 * @description Elements of the customer's postal address

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PostalAddress extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PostalAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'address3' => 'string',
        'address4' => 'string',
        'address5' => 'string',
        'address6' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postalCode' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'address1' => null,
        'address2' => null,
        'address3' => null,
        'address4' => null,
        'address5' => null,
        'address6' => null,
        'city' => null,
        'state' => null,
        'postalCode' => null,
        'country' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'address1' => false,
        'address2' => false,
        'address3' => false,
        'address4' => false,
        'address5' => false,
        'address6' => false,
        'city' => false,
        'state' => false,
        'postalCode' => false,
        'country' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'name' => 'name',
        'address1' => 'address1',
        'address2' => 'address2',
        'address3' => 'address3',
        'address4' => 'address4',
        'address5' => 'address5',
        'address6' => 'address6',
        'city' => 'city',
        'state' => 'state',
        'postalCode' => 'postalCode',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'name' => 'setName',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'address3' => 'setAddress3',
        'address4' => 'setAddress4',
        'address5' => 'setAddress5',
        'address6' => 'setAddress6',
        'city' => 'setCity',
        'state' => 'setState',
        'postalCode' => 'setPostalCode',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'name' => 'getName',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'address3' => 'getAddress3',
        'address4' => 'getAddress4',
        'address5' => 'getAddress5',
        'address6' => 'getAddress6',
        'city' => 'getCity',
        'state' => 'getState',
        'postalCode' => 'getPostalCode',
        'country' => 'getCountry'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('address1', $data ?? [], null);
        $this->setIfExists('address2', $data ?? [], null);
        $this->setIfExists('address3', $data ?? [], null);
        $this->setIfExists('address4', $data ?? [], null);
        $this->setIfExists('address5', $data ?? [], null);
        $this->setIfExists('address6', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('postalCode', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
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
     * @param string|null $name The name for the shipment
     *
     * @return self
    
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;
        return $this;
    }

    /**
     * Gets address1
     *
     * @return string|null
    
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string|null $address1 The first line of the shipping address
     *
     * @return self
    
     */
    public function setAddress1($address1)
    {
        if (is_null($address1)) {
            throw new \InvalidArgumentException('non-nullable address1 cannot be null');
        }

        $this->container['address1'] = $address1;
        return $this;
    }

    /**
     * Gets address2
     *
     * @return string|null
    
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string|null $address2 The second line of the shipping address
     *
     * @return self
    
     */
    public function setAddress2($address2)
    {
        if (is_null($address2)) {
            throw new \InvalidArgumentException('non-nullable address2 cannot be null');
        }

        $this->container['address2'] = $address2;
        return $this;
    }

    /**
     * Gets address3
     *
     * @return string|null
    
     */
    public function getAddress3()
    {
        return $this->container['address3'];
    }

    /**
     * Sets address3
     *
     * @param string|null $address3 address3
     *
     * @return self
    
     */
    public function setAddress3($address3)
    {
        if (is_null($address3)) {
            throw new \InvalidArgumentException('non-nullable address3 cannot be null');
        }

        $this->container['address3'] = $address3;
        return $this;
    }

    /**
     * Gets address4
     *
     * @return string|null
    
     */
    public function getAddress4()
    {
        return $this->container['address4'];
    }

    /**
     * Sets address4
     *
     * @param string|null $address4 address4
     *
     * @return self
    
     */
    public function setAddress4($address4)
    {
        if (is_null($address4)) {
            throw new \InvalidArgumentException('non-nullable address4 cannot be null');
        }

        $this->container['address4'] = $address4;
        return $this;
    }

    /**
     * Gets address5
     *
     * @return string|null
    
     */
    public function getAddress5()
    {
        return $this->container['address5'];
    }

    /**
     * Sets address5
     *
     * @param string|null $address5 address5
     *
     * @return self
    
     */
    public function setAddress5($address5)
    {
        if (is_null($address5)) {
            throw new \InvalidArgumentException('non-nullable address5 cannot be null');
        }

        $this->container['address5'] = $address5;
        return $this;
    }

    /**
     * Gets address6
     *
     * @return string|null
    
     */
    public function getAddress6()
    {
        return $this->container['address6'];
    }

    /**
     * Sets address6
     *
     * @param string|null $address6 address6
     *
     * @return self
    
     */
    public function setAddress6($address6)
    {
        if (is_null($address6)) {
            throw new \InvalidArgumentException('non-nullable address6 cannot be null');
        }

        $this->container['address6'] = $address6;
        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
    
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city The city of the shipping address
     *
     * @return self
    
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }

        $this->container['city'] = $city;
        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
    
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The state of the shipping address
     *
     * @return self
    
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }

        $this->container['state'] = $state;
        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string|null
    
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string|null $postalCode The zip code of the shipping address
     *
     * @return self
    
     */
    public function setPostalCode($postalCode)
    {
        if (is_null($postalCode)) {
            throw new \InvalidArgumentException('non-nullable postalCode cannot be null');
        }

        $this->container['postalCode'] = $postalCode;
        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
    
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country The country of the shipping address
     *
     * @return self
    
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }

        $this->container['country'] = $country;
        return $this;
    }
}

