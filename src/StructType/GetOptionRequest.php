<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionRequest StructType
 * @subpackage Structs
 */
class GetOptionRequest extends AbstractStructBase
{
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\Customer
     */
    public $Customer;
    /**
     * The ProductType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProductType;
    /**
     * The HardwareId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HardwareId;
    /**
     * The Option
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Option;
    /**
     * The Group
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Group;
    /**
     * Constructor method for GetOptionRequest
     * @uses GetOptionRequest::setCustomer()
     * @uses GetOptionRequest::setProductType()
     * @uses GetOptionRequest::setHardwareId()
     * @uses GetOptionRequest::setOption()
     * @uses GetOptionRequest::setGroup()
     * @param \Dpd\StructType\Customer $customer
     * @param string $productType
     * @param string $hardwareId
     * @param string $option
     * @param string $group
     */
    public function __construct(\Dpd\StructType\Customer $customer = null, $productType = null, $hardwareId = null, $option = null, $group = null)
    {
        $this
            ->setCustomer($customer)
            ->setProductType($productType)
            ->setHardwareId($hardwareId)
            ->setOption($option)
            ->setGroup($group);
    }
    /**
     * Get Customer value
     * @return \Dpd\StructType\Customer|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \Dpd\StructType\Customer $customer
     * @return \Dpd\StructType\GetOptionRequest
     */
    public function setCustomer(\Dpd\StructType\Customer $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get ProductType value
     * @return string|null
     */
    public function getProductType()
    {
        return $this->ProductType;
    }
    /**
     * Set ProductType value
     * @param string $productType
     * @return \Dpd\StructType\GetOptionRequest
     */
    public function setProductType($productType = null)
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->ProductType = $productType;
        return $this;
    }
    /**
     * Get HardwareId value
     * @return string|null
     */
    public function getHardwareId()
    {
        return $this->HardwareId;
    }
    /**
     * Set HardwareId value
     * @param string $hardwareId
     * @return \Dpd\StructType\GetOptionRequest
     */
    public function setHardwareId($hardwareId = null)
    {
        // validation for constraint: string
        if (!is_null($hardwareId) && !is_string($hardwareId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardwareId, true), gettype($hardwareId)), __LINE__);
        }
        $this->HardwareId = $hardwareId;
        return $this;
    }
    /**
     * Get Option value
     * @return string|null
     */
    public function getOption()
    {
        return $this->Option;
    }
    /**
     * Set Option value
     * @param string $option
     * @return \Dpd\StructType\GetOptionRequest
     */
    public function setOption($option = null)
    {
        // validation for constraint: string
        if (!is_null($option) && !is_string($option)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($option, true), gettype($option)), __LINE__);
        }
        $this->Option = $option;
        return $this;
    }
    /**
     * Get Group value
     * @return string|null
     */
    public function getGroup()
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param string $group
     * @return \Dpd\StructType\GetOptionRequest
     */
    public function setGroup($group = null)
    {
        // validation for constraint: string
        if (!is_null($group) && !is_string($group)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
        $this->Group = $group;
        return $this;
    }
}
