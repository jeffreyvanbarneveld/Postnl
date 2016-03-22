<?php namespace NLiFresh\Postnl\ComplexTypes;

class ArrayOfContact extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'Contact';

    /**
     * @var Contact[] $Contact
     */
    protected $Contact = null;

    /**
     * @param Contact[] $Contact
     */
    public function __construct(array $Contact)
    {
        $this->setContact($Contact);
    }

    /**
     * @return Contact[]
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param Contact[] $Contact
     * @return ArrayOfContact
     */
    public function setContact(array $Contact)
    {
        $this->Contact = $Contact;
        return $this;
    }
}
