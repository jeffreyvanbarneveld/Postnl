<?php namespace NLiFresh\Postnl\ComplexTypes;

class ArrayOfContent extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'Content';

    /**
     * @var Content[] $Content
     */
    protected $Content = null;

    /**
     * @param Content[] $Content
     */
    public function __construct(array $Content)
    {
        $this->setContent($Content);
    }

    /**
     * @return Content[]
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * @param Content[] $Content
     * @return ArrayOfContent
     */
    public function setContent(array $Content)
    {
        $this->Content = $Content;
        return $this;
    }
}
