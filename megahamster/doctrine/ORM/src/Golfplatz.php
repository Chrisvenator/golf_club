<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="golfplatz")
 */

class Golfplatz {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @var int
     */
    protected $id;
    /**
     *  @ORM\Column(type="string")
     * @var string
     */
    protected $name;
    /**
     *  @ORM\Column(type="string")
     * @var string
     */
    protected $addresse;
    /**
     *  @ORM\Column(type="string")
     * @var string
     */
    protected $eigentuemer;

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
     * @return string
     */
    public function getAddresse(): string {
        return $this->addresse;
    }

    /**
     * @param string $addresse
     */
    public function setAddresse(string $addresse): void {
        $this->addresse = $addresse;
    }

    /**
     * @return string
     */
    public function getEigentuemer(): string {
        return $this->eigentuemer;
    }

    /**
     * @param string $eigentuemer
     */
    public function setEigentuemer(string $eigentuemer): void {
        $this->eigentuemer = $eigentuemer;
    }







}