<?php namespace NLiFresh\Postnl\ComplexTypes;

class Shipment extends BaseType
{

    /**
     * @var ArrayOfAddress $Addresses
     */
    protected $Addresses = null;

    /**
     * @var string $Barcode
     */
    protected $Barcode = null;

    /**
     * @var Dimension $Dimension
     */
    protected $Dimension = null;

    /**
     * @var string $ProductCodeDelivery
     */
    protected $ProductCodeDelivery = null;

    /**
     * @var ArrayOfAmount $Amounts
     */
    protected $Amounts = null;

    /**
     * @var string $CollectionTimeStampEnd
     */
    protected $CollectionTimeStampEnd = null;

    /**
     * @var string $CollectionTimeStampStart
     */
    protected $CollectionTimeStampStart = null;

    /**
     * @var ArrayOfContact $Contacts
     */
    protected $Contacts = null;

    /**
     * @var string $Content
     */
    protected $Content = null;

    /**
     * @var string $CostCenter
     */
    protected $CostCenter = null;

    /**
     * @var string $CustomerOrderNumber
     */
    protected $CustomerOrderNumber = null;

    /**
     * @var Customs $Customs
     */
    protected $Customs = null;

    /**
     * @var string $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var string $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var string $DownPartnerBarcode
     */
    protected $DownPartnerBarcode = null;

    /**
     * @var string $DownPartnerID
     */
    protected $DownPartnerID = null;

    /**
     * @var string $DownPartnerLocation
     */
    protected $DownPartnerLocation = null;

    /**
     * @var ArrayOfGroup $Groups
     */
    protected $Groups = null;

    /**
     * @var string $IDExpiration
     */
    protected $IDExpiration = null;

    /**
     * @var string $IDNumber
     */
    protected $IDNumber = null;

    /**
     * @var string $IDType
     */
    protected $IDType = null;

    /**
     * @var string $ProductCodeCollect
     */
    protected $ProductCodeCollect = null;

    /**
     * @var ArrayOfProductOption $ProductOptions
     */
    protected $ProductOptions = null;

    /**
     * @var string $ReceiverDateOfBirth
     */
    protected $ReceiverDateOfBirth = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var string $ReferenceCollect
     */
    protected $ReferenceCollect = null;

    /**
     * @var string $Remark
     */
    protected $Remark = null;

    /**
     * @var string $ReturnBarcode
     */
    protected $ReturnBarcode = null;

    /**
     * @var string $ReturnReference
     */
    protected $ReturnReference = null;

    /**
     * @param ArrayOfAddress $Addresses
     * @param string $Barcode
     * @param Dimension $Dimension
     * @param string $ProductCodeDelivery
     * @param ArrayOfAmount $Amounts
     *     Optional.
     * @param string $CollectionTimeStampEnd
     *     Optional.
     * @param string $CollectionTimeStampStart
     *     Optional.
     * @param ArrayOfContact $Contacts
     *     Optional.
     * @param string $Content
     *     Optional.
     * @param string $CostCenter
     *     Optional.
     * @param string $CustomerOrderNumber
     *     Optional.
     * @param Customs $Customs
     *     Optional.
     * @param string $DeliveryAddress
     *     Optional.
     * @param string $DeliveryDate
     *     Optional.
     * @param string $DownPartnerBarcode
     *     Optional.
     * @param string $DownPartnerID
     *     Optional.
     * @param string $DownPartnerLocation
     *     Optional.
     * @param ArrayOfGroup $Groups
     *     Optional.
     * @param string $IDExpiration
     *     Optional.
     * @param string $IDNumber
     *     Optional.
     * @param string $IDType
     *     Optional.
     * @param string $ProductCodeCollect
     *     Optional.
     * @param ArrayOfProductOption $ProductOptions
     *     Optional.
     * @param string $ReceiverDateOfBirth
     *     Optional.
     * @param string $Reference
     *     Optional.
     * @param string $ReferenceCollect
     *     Optional.
     * @param string $Remark
     *     Optional.
     * @param string $ReturnBarcode
     *     Optional.
     * @param string $ReturnReference
     *     Optional.
     */
    public function __construct(
        ArrayOfAddress $Addresses,
        $Barcode,
        Dimension $Dimension,
        $ProductCodeDelivery,
        ArrayOfAmount $Amounts = null,
        $CollectionTimeStampEnd = null,
        $CollectionTimeStampStart = null,
        ArrayOfContact $Contacts = null,
        $Content = null,
        $CostCenter = null,
        $CustomerOrderNumber = null,
        Customs $Customs = null,
        $DeliveryAddress = null,
        $DeliveryDate = null,
        $DownPartnerBarcode = null,
        $DownPartnerID = null,
        $DownPartnerLocation = null,
        ArrayOfGroup $Groups = null,
        $IDExpiration = null,
        $IDNumber = null,
        $IDType = null,
        $ProductCodeCollect = null,
        ArrayOfProductOption $ProductOptions = null,
        $ReceiverDateOfBirth = null,
        $Reference = null,
        $ReferenceCollect = null,
        $Remark = null,
        $ReturnBarcode = null,
        $ReturnReference = null
    ) {
        $this->setAddresses($Addresses);
        $this->setBarcode($Barcode);
        $this->setDimension($Dimension);
        $this->setProductCodeDelivery($ProductCodeDelivery);

        // Optional parameters.
        $this->setAmounts($Amounts);
        $this->setCollectionTimeStampEnd($CollectionTimeStampEnd);
        $this->setCollectionTimeStampStart($CollectionTimeStampStart);
        $this->setContacts($Contacts);
        $this->setContent($Content);
        $this->setCostCenter($CostCenter);
        $this->setCustomerOrderNumber($CustomerOrderNumber);
        $this->setCustoms($Customs);
        $this->setDeliveryAddress($DeliveryAddress);
        $this->setDeliveryDate($DeliveryDate);
        $this->setDownPartnerBarcode($DownPartnerBarcode);
        $this->setDownPartnerID($DownPartnerID);
        $this->setDownPartnerLocation($DownPartnerLocation);
        $this->setGroups($Groups);
        $this->setIDExpiration($IDExpiration);
        $this->setIDNumber($IDNumber);
        $this->setIDType($IDType);
        $this->setProductCodeCollect($ProductCodeCollect);
        $this->setProductOptions($ProductOptions);
        $this->setReceiverDateOfBirth($ReceiverDateOfBirth);
        $this->setReference($Reference);
        $this->setReferenceCollect($ReferenceCollect);
        $this->setRemark($Remark);
        $this->setReturnBarcode($ReturnBarcode);
        $this->setReturnReference($ReturnReference);
    }

    /**
     * @return ArrayOfAddress
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }

    /**
     * @param ArrayOfAddress $Addresses
     * @return Shipment
     */
    public function setAddresses($Addresses)
    {
        $this->Addresses = $Addresses;
        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * @param string $Barcode
     * @return Shipment
     */
    public function setBarcode($Barcode)
    {
        $this->Barcode = $Barcode;
        return $this;
    }

    /**
     * @return Dimension
     */
    public function getDimension()
    {
        return $this->Dimension;
    }

    /**
     * @param Dimension $Dimension
     * @return Shipment
     */
    public function setDimension($Dimension)
    {
        $this->Dimension = $Dimension;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductCodeDelivery()
    {
        return $this->ProductCodeDelivery;
    }

    /**
     * @param string $ProductCodeDelivery
     * @return Shipment
     */
    public function setProductCodeDelivery($ProductCodeDelivery)
    {
        $this->ProductCodeDelivery = $ProductCodeDelivery;
        return $this;
    }

    /**
     * @return ArrayOfAmount
     */
    public function getAmounts()
    {
        return $this->Amounts;
    }

    /**
     * @param ArrayOfAmount $Amounts
     * @return Shipment
     */
    public function setAmounts($Amounts)
    {
        $this->Amounts = $Amounts;
        return $this;
    }

    /**
     * @return string
     */
    public function getCollectionTimeStampEnd()
    {
        return $this->CollectionTimeStampEnd;
    }

    /**
     * @param string $CollectionTimeStampEnd
     * @return Shipment
     */
    public function setCollectionTimeStampEnd($CollectionTimeStampEnd)
    {
        $this->CollectionTimeStampEnd = $CollectionTimeStampEnd;
        return $this;
    }

    /**
     * @return string
     */
    public function getCollectionTimeStampStart()
    {
        return $this->CollectionTimeStampStart;
    }

    /**
     * @param string $CollectionTimeStampStart
     * @return Shipment
     */
    public function setCollectionTimeStampStart($CollectionTimeStampStart)
    {
        $this->CollectionTimeStampStart = $CollectionTimeStampStart;
        return $this;
    }

    /**
     * @return ArrayOfContact
     */
    public function getContacts()
    {
        return $this->Contacts;
    }

    /**
     * @param ArrayOfContact $Contacts
     * @return Shipment
     */
    public function setContacts($Contacts)
    {
        $this->Contacts = $Contacts;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * @param string $Content
     * @return Shipment
     */
    public function setContent($Content)
    {
        $this->Content = $Content;
        return $this;
    }

    /**
     * @return string
     */
    public function getCostCenter()
    {
        return $this->CostCenter;
    }

    /**
     * @param string $CostCenter
     * @return Shipment
     */
    public function setCostCenter($CostCenter)
    {
        $this->CostCenter = $CostCenter;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerOrderNumber()
    {
        return $this->CustomerOrderNumber;
    }

    /**
     * @param string $CustomerOrderNumber
     * @return Shipment
     */
    public function setCustomerOrderNumber($CustomerOrderNumber)
    {
        $this->CustomerOrderNumber = $CustomerOrderNumber;
        return $this;
    }

    /**
     * @return Customs
     */
    public function getCustoms()
    {
        return $this->Customs;
    }

    /**
     * @param Customs $Customs
     * @return Shipment
     */
    public function setCustoms($Customs)
    {
        $this->Customs = $Customs;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress()
    {
        return $this->DeliveryAddress;
    }

    /**
     * @param string $DeliveryAddress
     * @return Shipment
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
        $this->DeliveryAddress = $DeliveryAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * @param string $DeliveryDate
     * @return Shipment
     */
    public function setDeliveryDate($DeliveryDate)
    {
        $this->DeliveryDate = $DeliveryDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownPartnerBarcode()
    {
        return $this->DownPartnerBarcode;
    }

    /**
     * @param string $DownPartnerBarcode
     * @return Shipment
     */
    public function setDownPartnerBarcode($DownPartnerBarcode)
    {
        $this->DownPartnerBarcode = $DownPartnerBarcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownPartnerID()
    {
        return $this->DownPartnerID;
    }

    /**
     * @param string $DownPartnerID
     * @return Shipment
     */
    public function setDownPartnerID($DownPartnerID)
    {
        $this->DownPartnerID = $DownPartnerID;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownPartnerLocation()
    {
        return $this->DownPartnerLocation;
    }

    /**
     * @param string $DownPartnerLocation
     * @return Shipment
     */
    public function setDownPartnerLocation($DownPartnerLocation)
    {
        $this->DownPartnerLocation = $DownPartnerLocation;
        return $this;
    }

    /**
     * @return ArrayOfGroup
     */
    public function getGroups()
    {
        return $this->Groups;
    }

    /**
     * @param ArrayOfGroup $Groups
     * @return Shipment
     */
    public function setGroups($Groups)
    {
        $this->Groups = $Groups;
        return $this;
    }

    /**
     * @return string
     */
    public function getIDExpiration()
    {
        return $this->IDExpiration;
    }

    /**
     * @param string $IDExpiration
     * @return Shipment
     */
    public function setIDExpiration($IDExpiration)
    {
        $this->IDExpiration = $IDExpiration;
        return $this;
    }

    /**
     * @return string
     */
    public function getIDNumber()
    {
        return $this->IDNumber;
    }

    /**
     * @param string $IDNumber
     * @return Shipment
     */
    public function setIDNumber($IDNumber)
    {
        $this->IDNumber = $IDNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getIDType()
    {
        return $this->IDType;
    }

    /**
     * @param string $IDType
     * @return Shipment
     */
    public function setIDType($IDType)
    {
        $this->IDType = $IDType;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductCodeCollect()
    {
        return $this->ProductCodeCollect;
    }

    /**
     * @param string $ProductCodeCollect
     * @return Shipment
     */
    public function setProductCodeCollect($ProductCodeCollect)
    {
        $this->ProductCodeCollect = $ProductCodeCollect;
        return $this;
    }

    /**
     * @return ArrayOfProductOption
     */
    public function getProductOptions()
    {
        return $this->ProductOptions;
    }

    /**
     * @param ArrayOfProductOption $ProductOptions
     * @return Shipment
     */
    public function setProductOptions($ProductOptions)
    {
        $this->ProductOptions = $ProductOptions;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiverDateOfBirth()
    {
        return $this->ReceiverDateOfBirth;
    }

    /**
     * @param string $ReceiverDateOfBirth
     * @return Shipment
     */
    public function setReceiverDateOfBirth($ReceiverDateOfBirth)
    {
        $this->ReceiverDateOfBirth = $ReceiverDateOfBirth;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return Shipment
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceCollect()
    {
        return $this->ReferenceCollect;
    }

    /**
     * @param string $ReferenceCollect
     * @return Shipment
     */
    public function setReferenceCollect($ReferenceCollect)
    {
        $this->ReferenceCollect = $ReferenceCollect;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
        return $this->Remark;
    }

    /**
     * @param string $Remark
     * @return Shipment
     */
    public function setRemark($Remark)
    {
        $this->Remark = $Remark;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnBarcode()
    {
        return $this->ReturnBarcode;
    }

    /**
     * @param string $ReturnBarcode
     * @return Shipment
     */
    public function setReturnBarcode($ReturnBarcode)
    {
        $this->ReturnBarcode = $ReturnBarcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnReference()
    {
        return $this->ReturnReference;
    }

    /**
     * @param string $ReturnReference
     * @return Shipment
     */
    public function setReturnReference($ReturnReference)
    {
        $this->ReturnReference = $ReturnReference;
        return $this;
    }
}
