<?php namespace NLiFresh\Postnl\ComplexTypes;

class ArrayOfLabel extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'Label';

    /**
     * @var Label[] $Label
     */
    protected $Label = null;

    /**
     * @param Label[] $Label
     */
    public function __construct(array $Label)
    {
        $this->setLabel($Label);
    }

    /**
     * @return Label[]
     */
    public function getLabel()
    {
        return $this->Label;
    }

    /**
     * @param Label[] $Label
     * @return ArrayOfLabel
     */
    public function setLabel(array $Label)
    {
        $this->Label = $Label;
        return $this;
    }
}
