<?php namespace NLiFresh\Postnl\ComplexTypes;

class ArrayOfAddress extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'Address';

    /**
     * @var Address[] $Address
     */
    protected $Address = null;

    /**
     * @param Address[] $Address
     */
    public function __construct(array $Address)
    {
        $this->setAddress($Address);
    }

    /**
     * @return Address[]
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param Address[] $Address
     * @return ArrayOfAddress
     */
    public function setAddress(array $Address)
    {
        $this->Address = $Address;
        return $this;
    }
}
