<?php

namespace Pau\Seur\Model;

class Client extends LabelRequest
{
    private $fullName;
    private $street;
    private $typeStreet;
    private $streetNumber;
    private $streetNumber1;
    private $stairs;
    private $floor;
    private $door;
    private $town;
    private $postalCode;
    private $codeCountry;
    private $email;
    private $phone;

    /**
     * Client constructor.
     * @param $fullName
     * @param $street
     * @param $typeStreet
     * @param $streetNumber
     * @param $streetNumber1
     * @param $stairs
     * @param $floor
     * @param $door
     * @param $town
     * @param $postalCode
     * @param $codeCountry
     * @param $email
     * @param $phone
     */
    public function __construct($fullName, $street, $typeStreet, $streetNumber, $streetNumber1, $stairs, $floor, $door, $town, $postalCode, $codeCountry, $email, $phone)
    {
        $this->fullName = $fullName;
        $this->street = $street;
        $this->typeStreet = $typeStreet;
        $this->streetNumber = $streetNumber;
        $this->streetNumber1 = $streetNumber1;
        $this->stairs = $stairs;
        $this->floor = $floor;
        $this->door = $door;
        $this->town = $town;
        $this->postalCode = $postalCode;
        $this->codeCountry = $codeCountry;
        $this->email = $email;
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getTypeStreet()
    {
        return $this->typeStreet;
    }

    /**
     * @param mixed $typeStreet
     */
    public function setTypeStreet($typeStreet)
    {
        $this->typeStreet = $typeStreet;
    }

    /**
     * @return mixed
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * @param mixed $streetNumber
     */
    public function setStreetNumber($streetNumber)
    {
        $this->streetNumber = $streetNumber;
    }

    /**
     * @return mixed
     */
    public function getStreetNumber1()
    {
        return $this->streetNumber1;
    }

    /**
     * @param mixed $streetNumber1
     */
    public function setStreetNumber1($streetNumber1)
    {
        $this->streetNumber1 = $streetNumber1;
    }

    /**
     * @return mixed
     */
    public function getStairs()
    {
        return $this->stairs;
    }

    /**
     * @param mixed $stairs
     */
    public function setStairs($stairs)
    {
        $this->stairs = $stairs;
    }

    /**
     * @return mixed
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param mixed $floor
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    }

    /**
     * @return mixed
     */
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * @param mixed $door
     */
    public function setDoor($door)
    {
        $this->door = $door;
    }

    /**
     * @return mixed
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @param mixed $town
     */
    public function setTown($town)
    {
        $this->town = $town;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getCodeCountry()
    {
        return $this->codeCountry;
    }

    /**
     * @param mixed $codeCountry
     */
    public function setCodeCountry($codeCountry)
    {
        $this->codeCountry = $codeCountry;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }


}