<?php namespace NLiFresh\Postnl\ComplexTypes;

class ArrayOfAmount extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'Amount';

    /**
     * @var Amount[] $Amount
     */
    protected $Amount = null;

    /**
     * @param Amount[] $Amount
     */
    public function __construct(array $Amount)
    {
        $this->setAmount($Amount);
    }

    /**
     * @return Amount[]
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param Amount[] $Amount
     * @return ArrayOfAmount
     */
    public function setAmount(array $Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }
}
