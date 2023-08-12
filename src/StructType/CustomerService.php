<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerService StructType
 * @subpackage Structs
 */
class CustomerService extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Type;
    /**
     * The Attribute
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $Attribute;
    /**
     * The Export
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Export;
    /**
     * The LimitType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $LimitType;
    /**
     * The LimitMin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $LimitMin;
    /**
     * The LimitMax
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $LimitMax;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * Constructor method for CustomerService
     * @uses CustomerService::setType()
     * @uses CustomerService::setAttribute()
     * @uses CustomerService::setExport()
     * @uses CustomerService::setLimitType()
     * @uses CustomerService::setLimitMin()
     * @uses CustomerService::setLimitMax()
     * @uses CustomerService::setName()
     * @param int $type
     * @param int $attribute
     * @param string $export
     * @param string $limitType
     * @param float $limitMin
     * @param float $limitMax
     * @param string $name
     */
    public function __construct($type = null, $attribute = null, $export = null, $limitType = null, $limitMin = null, $limitMax = null, $name = null)
    {
        $this
            ->setType($type)
            ->setAttribute($attribute)
            ->setExport($export)
            ->setLimitType($limitType)
            ->setLimitMin($limitMin)
            ->setLimitMax($limitMax)
            ->setName($name);
    }
    /**
     * Get Type value
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param int $type
     * @return \Dpd\StructType\CustomerService
     */
    public function setType($type = null)
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Attribute value
     * @return int
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }
    /**
     * Set Attribute value
     * @param int $attribute
     * @return \Dpd\StructType\CustomerService
     */
    public function setAttribute($attribute = null)
    {
        // validation for constraint: int
        if (!is_null($attribute) && !(is_int($attribute) || ctype_digit($attribute))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attribute, true), gettype($attribute)), __LINE__);
        }
        $this->Attribute = $attribute;
        return $this;
    }
    /**
     * Get Export value
     * @return string
     */
    public function getExport()
    {
        return $this->Export;
    }
    /**
     * Set Export value
     * @uses \Dpd\EnumType\EExportService::valueIsValid()
     * @uses \Dpd\EnumType\EExportService::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $export
     * @return \Dpd\StructType\CustomerService
     */
    public function setExport($export = null)
    {
        // validation for constraint: enumeration
        if (!\Dpd\EnumType\EExportService::valueIsValid($export)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Dpd\EnumType\EExportService', is_array($export) ? implode(', ', $export) : var_export($export, true), implode(', ', \Dpd\EnumType\EExportService::getValidValues())), __LINE__);
        }
        $this->Export = $export;
        return $this;
    }
    /**
     * Get LimitType value
     * @return string
     */
    public function getLimitType()
    {
        return $this->LimitType;
    }
    /**
     * Set LimitType value
     * @uses \Dpd\EnumType\ELimitTypeService::valueIsValid()
     * @uses \Dpd\EnumType\ELimitTypeService::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $limitType
     * @return \Dpd\StructType\CustomerService
     */
    public function setLimitType($limitType = null)
    {
        // validation for constraint: enumeration
        if (!\Dpd\EnumType\ELimitTypeService::valueIsValid($limitType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Dpd\EnumType\ELimitTypeService', is_array($limitType) ? implode(', ', $limitType) : var_export($limitType, true), implode(', ', \Dpd\EnumType\ELimitTypeService::getValidValues())), __LINE__);
        }
        $this->LimitType = $limitType;
        return $this;
    }
    /**
     * Get LimitMin value
     * @return float
     */
    public function getLimitMin()
    {
        return $this->LimitMin;
    }
    /**
     * Set LimitMin value
     * @param float $limitMin
     * @return \Dpd\StructType\CustomerService
     */
    public function setLimitMin($limitMin = null)
    {
        // validation for constraint: float
        if (!is_null($limitMin) && !(is_float($limitMin) || is_numeric($limitMin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($limitMin, true), gettype($limitMin)), __LINE__);
        }
        $this->LimitMin = $limitMin;
        return $this;
    }
    /**
     * Get LimitMax value
     * @return float
     */
    public function getLimitMax()
    {
        return $this->LimitMax;
    }
    /**
     * Set LimitMax value
     * @param float $limitMax
     * @return \Dpd\StructType\CustomerService
     */
    public function setLimitMax($limitMax = null)
    {
        // validation for constraint: float
        if (!is_null($limitMax) && !(is_float($limitMax) || is_numeric($limitMax))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($limitMax, true), gettype($limitMax)), __LINE__);
        }
        $this->LimitMax = $limitMax;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Dpd\StructType\CustomerService
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
}
