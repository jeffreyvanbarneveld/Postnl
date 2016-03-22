<?php namespace NLiFresh\Postnl\ComplexTypes;

class RequestCustomer extends BaseType
{

    /**
     * @var string $CustomerCode
     */
    protected $CustomerCode = null;

    /**
     * @var string $CustomerNumber
     */
    protected $CustomerNumber = null;

    /**
     * @param string $CustomerCode
     * @param string $CustomerNumber
     */
    public function __construct($CustomerCode, $CustomerNumber)
    {
        $this->setCustomerCode($CustomerCode);
        $this->setCustomerNumber($CustomerNumber);
    }

    /**
     * @return string
     */
    public function getCustomerCode()
    {
        return $this->CustomerCode;
    }

    /**
     * @param string $CustomerCode
     * @return RequestCustomer
     */
    public function setCustomerCode($CustomerCode)
    {
        $this->CustomerCode = $CustomerCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return RequestCustomer
     */
    public function setCustomerNumber($CustomerNumber)
    {
        $this->CustomerNumber = $CustomerNumber;
        return $this;
    }
}
