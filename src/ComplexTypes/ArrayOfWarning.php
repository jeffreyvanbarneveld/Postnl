<?php namespace NLiFresh\Postnl\ComplexTypes;

class ArrayOfWarning extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'Warning';

    /**
     * @var Warning[] $Warning
     */
    protected $Warning = null;

    /**
     * @param Warning[] $Warning
     */
    public function __construct(array $Warning)
    {
        $this->setWarning($Warning);
    }

    /**
     * @return Warning[]
     */
    public function getWarning()
    {
        return $this->Warning;
    }

    /**
     * @param Warning[] $Warning
     * @return ArrayOfWarning
     */
    public function setWarning(array $Warning)
    {
        $this->Warning = $Warning;
        return $this;
    }
}
