<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourShipmentDataBcResponse StructType
 * @subpackage Structs
 */
class GetRetourShipmentDataBcResponse extends AbstractStructBase
{
    /**
     * The GetRetourShipmentDataBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Dpd\StructType\RetourShipmentDataBc
     */
    public $GetRetourShipmentDataBcResult;
    /**
     * Constructor method for GetRetourShipmentDataBcResponse
     * @uses GetRetourShipmentDataBcResponse::setGetRetourShipmentDataBcResult()
     * @param \Dpd\StructType\RetourShipmentDataBc $getRetourShipmentDataBcResult
     */
    public function __construct(\Dpd\StructType\RetourShipmentDataBc $getRetourShipmentDataBcResult = null)
    {
        $this
            ->setGetRetourShipmentDataBcResult($getRetourShipmentDataBcResult);
    }
    /**
     * Get GetRetourShipmentDataBcResult value
     * @return \Dpd\StructType\RetourShipmentDataBc|null
     */
    public function getGetRetourShipmentDataBcResult()
    {
        return $this->GetRetourShipmentDataBcResult;
    }
    /**
     * Set GetRetourShipmentDataBcResult value
     * @param \Dpd\StructType\RetourShipmentDataBc $getRetourShipmentDataBcResult
     * @return \Dpd\StructType\GetRetourShipmentDataBcResponse
     */
    public function setGetRetourShipmentDataBcResult(\Dpd\StructType\RetourShipmentDataBc $getRetourShipmentDataBcResult = null)
    {
        $this->GetRetourShipmentDataBcResult = $getRetourShipmentDataBcResult;
        return $this;
    }
}
