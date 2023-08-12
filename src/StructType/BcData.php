<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BcData StructType
 * @subpackage Structs
 */
class BcData extends AbstractStructBase
{
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BarcodeSource;
    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BarcodeId;
    /**
     * Constructor method for BcData
     * @uses BcData::setBarcodeSource()
     * @uses BcData::setBarcodeId()
     * @param int $barcodeSource
     * @param string $barcodeId
     */
    public function __construct($barcodeSource = null, $barcodeId = null)
    {
        $this
            ->setBarcodeSource($barcodeSource)
            ->setBarcodeId($barcodeId);
    }
    /**
     * Get BarcodeSource value
     * @return int
     */
    public function getBarcodeSource()
    {
        return $this->BarcodeSource;
    }
    /**
     * Set BarcodeSource value
     * @param int $barcodeSource
     * @return \StructType\BcData
     */
    public function setBarcodeSource($barcodeSource = null)
    {
        // validation for constraint: int
        if (!is_null($barcodeSource) && !(is_int($barcodeSource) || ctype_digit($barcodeSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcodeSource, true), gettype($barcodeSource)), __LINE__);
        }
        $this->BarcodeSource = $barcodeSource;
        return $this;
    }
    /**
     * Get BarcodeId value
     * @return string|null
     */
    public function getBarcodeId()
    {
        return $this->BarcodeId;
    }
    /**
     * Set BarcodeId value
     * @param string $barcodeId
     * @return \StructType\BcData
     */
    public function setBarcodeId($barcodeId = null)
    {
        // validation for constraint: string
        if (!is_null($barcodeId) && !is_string($barcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), gettype($barcodeId)), __LINE__);
        }
        $this->BarcodeId = $barcodeId;
        return $this;
    }
}
