<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User {
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
    protected $userName;
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $vorName;
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $nachName;
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $addresse;
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $geburtsdatum;
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $password;

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
    public function getVorName(): string {
        return $this->vorName;
    }

    /**
     * @param string $vorName
     */
    public function setVorName(string $vorName): void {
        $this->vorName = $vorName;
    }

    /**
     * @return string
     */
    public function getNachName(): string {
        return $this->nachName;
    }

    /**
     * @param string $nachName
     */
    public function setNachName(string $nachName): void {
        $this->nachName = $nachName;
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
    public function getGeburtsdatum(): string {
        return $this->geburtsdatum;
    }

    /**
     * @param string $geburtsdatum
     */
    public function setGeburtsdatum(string $geburtsdatum): void {
        $this->geburtsdatum = $geburtsdatum;
    }

    /**
     * @return string
     */
    public function getPassword(): string {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUserName(): string {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void {
        $this->userName = $userName;
    }



}