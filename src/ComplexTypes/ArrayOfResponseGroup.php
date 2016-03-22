<?php namespace NLiFresh\Postnl\ComplexTypes;

class ArrayOfResponseGroup extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'ResponseGroup';

    /**
     * @var ResponseGroup[] $ResponseGroup
     */
    protected $ResponseGroup = null;

    /**
     * @param ResponseGroup[] $ResponseGroup
     */
    public function __construct(array $ResponseGroup)
    {
        $this->setResponseGroup($ResponseGroup);
    }

    /**
     * @return ResponseGroup[]
     */
    public function getResponseGroup()
    {
        return $this->ResponseGroup;
    }

    /**
     * @param ResponseGroup[] $ResponseGroup
     * @return ArrayOfResponseGroup
     */
    public function setResponseGroup(array $ResponseGroup)
    {
        $this->ResponseGroup = $ResponseGroup;
        return $this;
    }
}
