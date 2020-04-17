<?php

namespace venator\Megahamster\Living;

interface Raum {

    /**
     * @return float
     */
    public function getPreis();

    /**
     * @param int $preis
     */
    public function setPreis($preis);

    /**
     * @return string
     */
    public function getBezeichnung();

    /**
     * @param string $bezeichnung
     */
    public function setBezeichnung($bezeichnung);

    /**
     * @param $groesse
     * @return mixed
     */

//    public function berechneFlaeche();

    /**
     * @return mixed
     */

    public function getGrundflaeche();

    /**
     * @param $arr
     * @return mixed
     */
    public function setZusatzausstattung($arr);

    /**
     * @return mixed
     */
    public function getZusatzausstattung();

    /**
     * @return mixed
     */
    public function __toString();

    public function getSeitenlaengen();

}
