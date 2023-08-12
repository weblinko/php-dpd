<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberRangeBcRequest StructType
 * @subpackage Structs
 */
class NumberRangeBcRequest extends NumberRangeBcBaseRequest
{
    /**
     * The NumberType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NumberType;
    /**
     * Constructor method for NumberRangeBcRequest
     * @uses NumberRangeBcRequest::setNumberType()
     * @param string $numberType
     */
    public function __construct($numberType = null)
    {
        $this
            ->setNumberType($numberType);
    }
    /**
     * Get NumberType value
     * @return string|null
     */
    public function getNumberType()
    {
        return $this->NumberType;
    }
    /**
     * Set NumberType value
     * @param string $numberType
     * @return \StructType\NumberRangeBcRequest
     */
    public function setNumberType($numberType = null)
    {
        // validation for constraint: string
        if (!is_null($numberType) && !is_string($numberType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberType, true), gettype($numberType)), __LINE__);
        }
        $this->NumberType = $numberType;
        return $this;
    }
}
