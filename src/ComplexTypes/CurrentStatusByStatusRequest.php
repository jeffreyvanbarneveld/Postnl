<?php namespace NLiFresh\Postnl\ComplexTypes;

class CurrentStatusByStatusRequest extends BaseType
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
     * @var RequestShipmentStatus $Shipment
     */
    protected $Shipment = null;

    /**
     * @param Message $Message
     * @param RequestCustomer $Customer
     * @param RequestShipmentStatus $Shipment
     */
    public function __construct(
        Message $Message,
        RequestCustomer $Customer,
        RequestShipmentStatus $Shipment
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
     * @return CurrentStatusByStatusRequest
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
     * @return CurrentStatusByStatusRequest
     */
    public function setCustomer($Customer)
    {
        $this->Customer = $Customer;
        return $this;
    }

    /**
     * @return RequestShipmentStatus
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * @param RequestShipmentStatus $Shipment
     * @return CurrentStatusByStatusRequest
     */
    public function setShipment($Shipment)
    {
        $this->Shipment = $Shipment;
        return $this;
    }
}
