<?php namespace NLiFresh\Postnl\ComplexTypes;

class CompleteStatusResponse extends BaseType
{

    /**
     * @var ArrayOfCompleteStatusResponseShipment $Shipments
     */
    protected $Shipments = null;

    /**
     * @param ArrayOfCompleteStatusResponseShipment $Shipments
     */
    public function __construct(ArrayOfCompleteStatusResponseShipment $Shipments)
    {
        $this->setShipments($Shipments);
    }

    /**
     * @return ArrayOfCompleteStatusResponseShipment
     */
    public function getShipments()
    {
        return $this->Shipments;
    }

    /**
     * @param ArrayOfCompleteStatusResponseShipment $Shipments
     * @return CompleteStatusResponse
     */
    public function setShipments($Shipments)
    {
        $this->Shipments = $Shipments;
        return $this;
    }
}
