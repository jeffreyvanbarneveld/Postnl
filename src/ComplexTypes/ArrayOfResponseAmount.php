<?php namespace NLiFresh\Postnl\ComplexTypes;

class ArrayOfResponseAmount extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'ResponseAmount';

    /**
     * @var ResponseAmount[] $ResponseAmount
     */
    protected $ResponseAmount = null;

    /**
     * @param ResponseAmount[] $ResponseAmount
     */
    public function __construct(array $ResponseAmount)
    {
        $this->setResponseAmount($ResponseAmount);
    }

    /**
     * @return ResponseAmount[]
     */
    public function getResponseAmount()
    {
        return $this->ResponseAmount;
    }

    /**
     * @param ResponseAmount[] $ResponseAmount
     * @return ArrayOfResponseAmount
     */
    public function setResponseAmount(array $ResponseAmount)
    {
        $this->ResponseAmount = $ResponseAmount;
        return $this;
    }
}
