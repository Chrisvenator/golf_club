<?php


class room {
    protected $preis = 0;
    protected $bezeichnung = "";

    function __construct(string $bezeichnung, float $preis_in_EUR) {
        $this->preis = $preis_in_EUR;
        $this->bezeichnung = $bezeichnung;
    }

    /**
     * @return float
     */
    public function getPreis(): float {
        return $this->preis;
    }

    /**
     * @param int $preis
     */
    public function setPreis($preis) {
        $this->preis = $preis;
    }

    /**
     * @return string
     */
    public function getBezeichnung(): string {
        return $this->bezeichnung;
    }

    /**
     * @param string $bezeichnung
     */
    public function setBezeichnung($bezeichnung) {
        $this->bezeichnung = $bezeichnung;
    }

    public function __toString() {
        return $this->getBezeichnung() . ":  " . $this->getPreis() . '$';
    }

}

?>