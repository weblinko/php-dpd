<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SlaveRequest StructType
 * @subpackage Structs
 */
class SlaveRequest extends AbstractStructBase
{
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $weight;
    /**
     * The referencenumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $referencenumber;
    /**
     * The reference2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $reference2;
    /**
     * The reference3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $reference3;
    /**
     * The reference4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $reference4;
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SlaveServices
     */
    public $services;
    /**
     * Constructor method for SlaveRequest
     * @uses SlaveRequest::setWeight()
     * @uses SlaveRequest::setReferencenumber()
     * @uses SlaveRequest::setReference2()
     * @uses SlaveRequest::setReference3()
     * @uses SlaveRequest::setReference4()
     * @uses SlaveRequest::setServices()
     * @param string $weight
     * @param string $referencenumber
     * @param string $reference2
     * @param string $reference3
     * @param string $reference4
     * @param \StructType\SlaveServices $services
     */
    public function __construct($weight = null, $referencenumber = null, $reference2 = null, $reference3 = null, $reference4 = null, \StructType\SlaveServices $services = null)
    {
        $this
            ->setWeight($weight)
            ->setReferencenumber($referencenumber)
            ->setReference2($reference2)
            ->setReference3($reference3)
            ->setReference4($reference4)
            ->setServices($services);
    }
    /**
     * Get weight value
     * @return string|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param string $weight
     * @return \StructType\SlaveRequest
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get referencenumber value
     * @return string|null
     */
    public function getReferencenumber()
    {
        return $this->referencenumber;
    }
    /**
     * Set referencenumber value
     * @param string $referencenumber
     * @return \StructType\SlaveRequest
     */
    public function setReferencenumber($referencenumber = null)
    {
        // validation for constraint: string
        if (!is_null($referencenumber) && !is_string($referencenumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencenumber, true), gettype($referencenumber)), __LINE__);
        }
        $this->referencenumber = $referencenumber;
        return $this;
    }
    /**
     * Get reference2 value
     * @return string|null
     */
    public function getReference2()
    {
        return $this->reference2;
    }
    /**
     * Set reference2 value
     * @param string $reference2
     * @return \StructType\SlaveRequest
     */
    public function setReference2($reference2 = null)
    {
        // validation for constraint: string
        if (!is_null($reference2) && !is_string($reference2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference2, true), gettype($reference2)), __LINE__);
        }
        $this->reference2 = $reference2;
        return $this;
    }
    /**
     * Get reference3 value
     * @return string|null
     */
    public function getReference3()
    {
        return $this->reference3;
    }
    /**
     * Set reference3 value
     * @param string $reference3
     * @return \StructType\SlaveRequest
     */
    public function setReference3($reference3 = null)
    {
        // validation for constraint: string
        if (!is_null($reference3) && !is_string($reference3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference3, true), gettype($reference3)), __LINE__);
        }
        $this->reference3 = $reference3;
        return $this;
    }
    /**
     * Get reference4 value
     * @return string|null
     */
    public function getReference4()
    {
        return $this->reference4;
    }
    /**
     * Set reference4 value
     * @param string $reference4
     * @return \StructType\SlaveRequest
     */
    public function setReference4($reference4 = null)
    {
        // validation for constraint: string
        if (!is_null($reference4) && !is_string($reference4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference4, true), gettype($reference4)), __LINE__);
        }
        $this->reference4 = $reference4;
        return $this;
    }
    /**
     * Get services value
     * @return \StructType\SlaveServices|null
     */
    public function getServices()
    {
        return $this->services;
    }
    /**
     * Set services value
     * @param \StructType\SlaveServices $services
     * @return \StructType\SlaveRequest
     */
    public function setServices(\StructType\SlaveServices $services = null)
    {
        $this->services = $services;
        return $this;
    }
}
