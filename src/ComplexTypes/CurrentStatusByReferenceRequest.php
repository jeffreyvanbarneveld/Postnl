<?php namespace NLiFresh\Postnl\ComplexTypes;

class CurrentStatusByReferenceRequest extends BaseType
{

    /**
     * @var Message $Message
     */
    protected $Message = null;

    /**
     * @var RequestCustomer $Customer
     */
    protected $Customer = null;

    /**
     * @var RequestShipment $Shipment
     */
    protected $Shipment = null;

    /**
     * @param Message $Message
     * @param RequestCustomer $Customer
     * @param RequestShipment $Shipment
     */
    public function __construct(
        Message $Message,
        RequestCustomer $Customer,
        RequestShipment $Shipment
    ) {
        $this->setMessage($Message);
        $this->setCustomer($Customer);
        $this->setShipment($Shipment);
    }

    /**
     * @return Message
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param Message $Message
     * @return CurrentStatusByReferenceRequest
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;
        return $this;
    }

    /**
     * @return RequestCustomer
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param RequestCustomer $Customer
     * @return CurrentStatusByReferenceRequest
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
        return $this;
    }

    /**
     * @return RequestShipment
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * @param RequestShipment $Shipment
     * @return CurrentStatusByReferenceRequest
     */
    public function setShipment($Shipment)
    {
        $this->Shipment = $Shipment;
        return $this;
    }
}
