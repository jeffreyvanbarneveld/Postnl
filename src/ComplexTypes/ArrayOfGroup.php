<?php namespace NLiFresh\Postnl\ComplexTypes;

class ArrayOfGroup extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'Group';

    /**
     * @var Group[] $Group
     */
    protected $Group = null;

    /**
     * @param Group[] $Group
     */
    public function __construct(array $Group)
    {
        $this->setGroup($Group);
    }

    /**
     * @return Group[]
     */
    public function getGroup()
    {
        return $this->Group;
    }

    /**
     * @param Group[] $Group
     * @return ArrayOfGroup
     */
    public function setGroup(array $Group)
    {
        $this->Group = $Group;
        return $this;
    }
}
