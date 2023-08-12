<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParcelInfoSin StructType
 * @subpackage Structs
 */
class ParcelInfoSin extends ParcelInfo
{
    /**
     * The Sin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Sin;
    /**
     * Constructor method for ParcelInfoSin
     * @uses ParcelInfoSin::setSin()
     * @param string $sin
     */
    public function __construct($sin = null)
    {
        $this
            ->setSin($sin);
    }
    /**
     * Get Sin value
     * @return string|null
     */
    public function getSin()
    {
        return $this->Sin;
    }
    /**
     * Set Sin value
     * @param string $sin
     * @return \StructType\ParcelInfoSin
     */
    public function setSin($sin = null)
    {
        // validation for constraint: string
        if (!is_null($sin) && !is_string($sin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sin, true), gettype($sin)), __LINE__);
        }
        $this->Sin = $sin;
        return $this;
    }
}
