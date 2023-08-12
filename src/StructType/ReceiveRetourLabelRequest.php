<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiveRetourLabelRequest StructType
 * @subpackage Structs
 */
class ReceiveRetourLabelRequest extends ReceiveRetourLabelRequestBase
{
    /**
     * The countrycode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $countrycode;
    /**
     * The centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $centernumber;
    /**
     * The parcelnumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $parcelnumber;
    /**
     * Constructor method for ReceiveRetourLabelRequest
     * @uses ReceiveRetourLabelRequest::setCountrycode()
     * @uses ReceiveRetourLabelRequest::setCenternumber()
     * @uses ReceiveRetourLabelRequest::setParcelnumber()
     * @param string $countrycode
     * @param string $centernumber
     * @param string $parcelnumber
     */
    public function __construct($countrycode = null, $centernumber = null, $parcelnumber = null)
    {
        $this
            ->setCountrycode($countrycode)
            ->setCenternumber($centernumber)
            ->setParcelnumber($parcelnumber);
    }
    /**
     * Get countrycode value
     * @return string|null
     */
    public function getCountrycode()
    {
        return $this->countrycode;
    }
    /**
     * Set countrycode value
     * @param string $countrycode
     * @return \StructType\ReceiveRetourLabelRequest
     */
    public function setCountrycode($countrycode = null)
    {
        // validation for constraint: string
        if (!is_null($countrycode) && !is_string($countrycode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countrycode, true), gettype($countrycode)), __LINE__);
        }
        $this->countrycode = $countrycode;
        return $this;
    }
    /**
     * Get centernumber value
     * @return string|null
     */
    public function getCenternumber()
    {
        return $this->centernumber;
    }
    /**
     * Set centernumber value
     * @param string $centernumber
     * @return \StructType\ReceiveRetourLabelRequest
     */
    public function setCenternumber($centernumber = null)
    {
        // validation for constraint: string
        if (!is_null($centernumber) && !is_string($centernumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($centernumber, true), gettype($centernumber)), __LINE__);
        }
        $this->centernumber = $centernumber;
        return $this;
    }
    /**
     * Get parcelnumber value
     * @return string|null
     */
    public function getParcelnumber()
    {
        return $this->parcelnumber;
    }
    /**
     * Set parcelnumber value
     * @param string $parcelnumber
     * @return \StructType\ReceiveRetourLabelRequest
     */
    public function setParcelnumber($parcelnumber = null)
    {
        // validation for constraint: string
        if (!is_null($parcelnumber) && !is_string($parcelnumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelnumber, true), gettype($parcelnumber)), __LINE__);
        }
        $this->parcelnumber = $parcelnumber;
        return $this;
    }
}
