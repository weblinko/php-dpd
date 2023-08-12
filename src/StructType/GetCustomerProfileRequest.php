<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerProfileRequest StructType
 * @subpackage Structs
 */
class GetCustomerProfileRequest extends AbstractStructBase
{
    /**
     * The Customers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfCustomer
     */
    public $Customers;
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Language;
    /**
     * Constructor method for GetCustomerProfileRequest
     * @uses GetCustomerProfileRequest::setCustomers()
     * @uses GetCustomerProfileRequest::setLanguage()
     * @param \ArrayType\ArrayOfCustomer $customers
     * @param string $language
     */
    public function __construct(\ArrayType\ArrayOfCustomer $customers = null, $language = null)
    {
        $this
            ->setCustomers($customers)
            ->setLanguage($language);
    }
    /**
     * Get Customers value
     * @return \ArrayType\ArrayOfCustomer|null
     */
    public function getCustomers()
    {
        return $this->Customers;
    }
    /**
     * Set Customers value
     * @param \ArrayType\ArrayOfCustomer $customers
     * @return \StructType\GetCustomerProfileRequest
     */
    public function setCustomers(\ArrayType\ArrayOfCustomer $customers = null)
    {
        $this->Customers = $customers;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \StructType\GetCustomerProfileRequest
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
}
