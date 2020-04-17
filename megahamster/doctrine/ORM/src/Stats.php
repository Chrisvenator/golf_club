<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="stats")
 */

class Stats {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;
    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $fk_User_ID;
    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $fk_Golffeld_ID;
    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $fk_Golfplatz_ID;
    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $score;

    /**
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getFkUserID(): int {
        return $this->fk_User_ID;
    }

    /**
     * @param int $fk_User_ID
     */
    public function setFkUserID(int $fk_User_ID): void {
        $this->fk_User_ID = $fk_User_ID;
    }

    /**
     * @return int
     */
    public function getFkGolffeldID(): int {
        return $this->fk_Golffeld_ID;
    }

    /**
     * @param int $fk_Golffeld_ID
     */
    public function setFkGolffeldID(int $fk_Golffeld_ID): void {
        $this->fk_Golffeld_ID = $fk_Golffeld_ID;
    }

    /**
     * @return int
     */
    public function getScore(): int {
        return $this->score;
    }

    /**
     * @param int $score
     */
    public function setScore(int $score): void {
        $this->score = $score;
    }

    /**
     * @return int
     */
    public function getFkGolfplatzID(): int {
        return $this->fk_Golfplatz_ID;
    }

    /**
     * @param int $fk_Golfplatz_ID
     */
    public function setFkGolfplatzID(int $fk_Golfplatz_ID): void {
        $this->fk_Golfplatz_ID = $fk_Golfplatz_ID;
    }


}