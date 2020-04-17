<?php

namespace venator\Megahamster\Living;
require_once("Raum.php");


class Room implements Raum, \JsonSerializable {
    protected $preis = 0;
    protected $bezeichnung = "";
    protected $greosse = 0;
    protected $zusatzausstattung = [];

    protected $l = 0;
    protected $b = 0;
    protected $h = 0;


    function __construct(string $bezeichnung, float $preis_in_EUR, float $groesse_in_cm2, array $arr) {
        $this->preis = $preis_in_EUR;
        $this->bezeichnung = $bezeichnung;
        $this->greosse = $groesse_in_cm2;
        $this->zusatzausstattung = $arr;
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


    /**
     * @param $groesse
     * @return mixed
     */
    public function berechneFlaeche($laenge, $breite, $hoehe) {
        $this->l = $laenge;
        $this->b = $breite;
        $this->h = $hoehe;
        $this->greosse = $laenge * $breite * $hoehe;
        return $laenge * $breite * $hoehe;
    }

    /**
     * @return mixed
     */
    public function getGrundflaeche() {
        return $this->greosse;
    }

    /**
     * @param $arr
     * @return mixed
     */
    public function setZusatzausstattung($arr) {
        $this->zusatzausstattung = $arr;
    }

    /**
     * @return mixed
     */
    public function getZusatzausstattung() {
        $tmp = "";
        foreach ($this->zusatzausstattung as $item) {
            $tmp .= $item . ", ";
        }
        return $tmp;
    }

    public function __toString() {
        return $this->getBezeichnung() . ":  " . $this->getPreis() . ',' . $this->getGrundflaeche() . ', ' . $this . $this->getZusatzausstattung();
    }

    public function getSeitenlaengen() {
        return $this->l . "x" . $this->b . "x" . $this->h;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize() {

//        return parent::jsonSerializable() + [
//        laenge => $this->l
//        ];
        $rv['preis'] = $this->preis;
        $rv['bezeichnung'] = $this->bezeichnung;
        $rv['greosse'] = $this->greosse;
        $rv['zusatzausstattung'] = $this->zusatzausstattung;

        $rv['laenge'] = $this->l;
        $rv['breite'] = $this->b;
        $rv['hoehe'] = $this->h;
        return $rv;
    }
}
