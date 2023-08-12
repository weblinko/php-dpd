<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNoticeRequest StructType
 * @subpackage Structs
 */
class ServiceNoticeRequest extends AbstractStructBase
{
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Customer
     */
    public $customer;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $language;
    /**
     * Constructor method for ServiceNoticeRequest
     * @uses ServiceNoticeRequest::setCustomer()
     * @uses ServiceNoticeRequest::setLanguage()
     * @param \StructType\Customer $customer
     * @param string $language
     */
    public function __construct(\StructType\Customer $customer = null, $language = null)
    {
        $this
            ->setCustomer($customer)
            ->setLanguage($language);
    }
    /**
     * Get customer value
     * @return \StructType\Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * Set customer value
     * @param \StructType\Customer $customer
     * @return \StructType\ServiceNoticeRequest
     */
    public function setCustomer(\StructType\Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \StructType\ServiceNoticeRequest
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
}
