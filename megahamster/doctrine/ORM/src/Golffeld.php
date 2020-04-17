<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="golffeld")
 */

class Golffeld {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $name;
    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $lochNummer;
    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $parScore;
    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $fk_golfpltz_id;

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
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getLochNummer(): int {
        return $this->lochNummer;
    }

    /**
     * @param int $lochNummer
     */
    public function setLochNummer(int $lochNummer): void {
        $this->lochNummer = $lochNummer;
    }

    /**
     * @return int
     */
    public function getParScore(): int {
        return $this->parScore;
    }

    /**
     * @param int $parScore
     */
    public function setParScore(int $parScore): void {
        $this->parScore = $parScore;
    }

    /**
     * @return int
     */
    public function getFkGolfpltzId(): int {
        return $this->fk_golfpltz_id;
    }

    /**
     * @param int $fk_golfpltz_id
     */
    public function setFkGolfpltzId(int $fk_golfpltz_id): void {
        $this->fk_golfpltz_id = $fk_golfpltz_id;
    }
}