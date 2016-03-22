<?php namespace NLiFresh\Postnl\ComplexTypes;

class ResponseProductOption extends BaseType
{

    /**
     * @var string $Characteristic
     */
    protected $Characteristic = null;

    /**
     * @var string $Option
     */
    protected $Option = null;

    /**
     * @param string $Characteristic
     * @param string $Option
     */
    public function __construct($Characteristic, $Option)
    {
        $this->setCharacteristic($Characteristic);
        $this->setOption($Option);
    }

    /**
     * @return string
     */
    public function getCharacteristic()
    {
        return $this->Characteristic;
    }

    /**
     * @param string $Characteristic
     * @return ResponseProductOption
     */
    public function setCharacteristic($Characteristic)
    {
        $this->Characteristic = $Characteristic;
        return $this;
    }

    /**
     * @return string
     */
    public function getOption()
    {
        return $this->Option;
    }

    /**
     * @param string $Option
     * @return ResponseProductOption
     */
    public function setOption($Option)
    {
        $this->Option = $Option;
        return $this;
    }
}
