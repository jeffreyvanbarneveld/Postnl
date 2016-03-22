<?php namespace NLiFresh\Postnl\ComplexTypes;

class ArrayOfShipment extends BaseArrayOfType
{

    /**
     * The name of the array property this class is a wrapper of.
     */
    const WRAPPED_PROPERTY = 'Shipment';

    /**
     * @var Shipment[] $Shipment
     */
    protected $Shipment = null;

    /**
     * @param Shipment[] $Shipment
     */
    public function __construct(array $Shipment)
    {
        $this->setShipment($Shipment);
    }

    /**
     * @return Shipment[]
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * @param Shipment[] $Shipment
     * @return ArrayOfShipment
     */
    public function setShipment(array $Shipment)
    {
        $this->Shipment = $Shipment;
        return $this;
    }
}
