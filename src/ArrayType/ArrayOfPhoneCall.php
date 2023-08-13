<?php

namespace Dpd\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhoneCall ArrayType
 * @subpackage Arrays
 */
class ArrayOfPhoneCall extends AbstractStructArrayBase
{
    /**
     * The PhoneCall
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Dpd\StructType\PhoneCall[]
     */
    public $PhoneCall;
    /**
     * Constructor method for ArrayOfPhoneCall
     * @uses ArrayOfPhoneCall::setPhoneCall()
     * @param \Dpd\StructType\PhoneCall[] $phoneCall
     */
    public function __construct(array $phoneCall = array())
    {
        $this
            ->setPhoneCall($phoneCall);
    }
    /**
     * Get PhoneCall value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Dpd\StructType\PhoneCall[]|null
     */
    public function getPhoneCall()
    {
        return isset($this->PhoneCall) ? $this->PhoneCall : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPhoneCall method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneCall method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneCallForArrayConstraintsFromSetPhoneCall(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPhoneCallPhoneCallItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhoneCallPhoneCallItem instanceof \Dpd\StructType\PhoneCall) {
                $invalidValues[] = is_object($arrayOfPhoneCallPhoneCallItem) ? get_class($arrayOfPhoneCallPhoneCallItem) : sprintf('%s(%s)', gettype($arrayOfPhoneCallPhoneCallItem), var_export($arrayOfPhoneCallPhoneCallItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhoneCall property can only contain items of type \Dpd\StructType\PhoneCall, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PhoneCall value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\PhoneCall[] $phoneCall
     * @return \Dpd\ArrayType\ArrayOfPhoneCall
     */
    public function setPhoneCall(array $phoneCall = array())
    {
        // validation for constraint: array
        if ('' !== ($phoneCallArrayErrorMessage = self::validatePhoneCallForArrayConstraintsFromSetPhoneCall($phoneCall))) {
            throw new \InvalidArgumentException($phoneCallArrayErrorMessage, __LINE__);
        }
        if (is_null($phoneCall) || (is_array($phoneCall) && empty($phoneCall))) {
            unset($this->PhoneCall);
        } else {
            $this->PhoneCall = $phoneCall;
        }
        return $this;
    }
    /**
     * Add item to PhoneCall value
     * @throws \InvalidArgumentException
     * @param \Dpd\StructType\PhoneCall $item
     * @return \Dpd\ArrayType\ArrayOfPhoneCall
     */
    public function addToPhoneCall(\Dpd\StructType\PhoneCall $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Dpd\StructType\PhoneCall) {
            throw new \InvalidArgumentException(sprintf('The PhoneCall property can only contain items of type \Dpd\StructType\PhoneCall, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PhoneCall[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Dpd\StructType\PhoneCall|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Dpd\StructType\PhoneCall|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Dpd\StructType\PhoneCall|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Dpd\StructType\PhoneCall|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Dpd\StructType\PhoneCall|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PhoneCall
     */
    public function getAttributeName(): string
    {
        return 'PhoneCall';
    }
}
