<?php

namespace Dpd\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressMini StructType
 * @subpackage Structs
 */
class AddressMini extends AbstractStructBase
{
    /**
     * The countryPrefix
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $countryPrefix;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $zipCode;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * The street
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $street;
    /**
     * Constructor method for AddressMini
     * @uses AddressMini::setCountryPrefix()
     * @uses AddressMini::setZipCode()
     * @uses AddressMini::setCity()
     * @uses AddressMini::setStreet()
     * @param string $countryPrefix
     * @param string $zipCode
     * @param string $city
     * @param string $street
     */
    public function __construct($countryPrefix = null, $zipCode = null, $city = null, $street = null)
    {
        $this
            ->setCountryPrefix($countryPrefix)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setStreet($street);
    }
    /**
     * Get countryPrefix value
     * @return string|null
     */
    public function getCountryPrefix()
    {
        return $this->countryPrefix;
    }
    /**
     * Set countryPrefix value
     * @param string $countryPrefix
     * @return \Dpd\StructType\AddressMini
     */
    public function setCountryPrefix($countryPrefix = null)
    {
        // validation for constraint: string
        if (!is_null($countryPrefix) && !is_string($countryPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryPrefix, true), gettype($countryPrefix)), __LINE__);
        }
        $this->countryPrefix = $countryPrefix;
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \Dpd\StructType\AddressMini
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Dpd\StructType\AddressMini
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Dpd\StructType\AddressMini
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        return $this;
    }
}
