<?php
namespace HTL3R\JSONDemo;


use JsonSerializable;

class Wetterinfo implements JsonSerializable {
    private $grad;
    private $witterung;
    private $stadt;

    /**
     * Wetterinfo constructor.
     * @param $grad
     * @param $witterung
     * @param $stadt
     */
    public function __construct($grad, $witterung, $stadt) {
        $this->grad = $grad;
        $this->witterung = $witterung;
        $this->stadt = $stadt;
    }

    /**
     * @return mixed
     */
    public function getGrad() {
        return $this->grad;
    }

    /**
     * @param mixed $grad
     */
    public function setGrad($grad): void {
        $this->grad = $grad;
    }

    /**
     * @return mixed
     */
    public function getWitterung() {
        return $this->witterung;
    }

    /**
     * @param mixed $witterung
     */
    public function setWitterung($witterung): void {
        $this->witterung = $witterung;
    }

    /**
     * @return mixed
     */
    public function getStadt() {
        return $this->stadt;
    }

    /**
     * @param mixed $stadt
     */
    public function setStadt($stadt): void {
        $this->stadt = $stadt;
    }


    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize() {
        $rv['grad'] = $this->grad;
        $rv['witterung'] = $this->witterung;
        $rv['stadt'] = $this->stadt;
        return $rv;
    }
}
