<?php

namespace App\Models;

class Address
{
    private string $uf;
    private string $zipCode;
    private string $number;
    private string $street;
    private string $city;
    private string $state;
    private string $country;

    public function __construct(string $uf, string $zipCode, string $number, string $street, string $city, string $state, string $country)
    {
        $this->uf = $uf;
        $this->zipCode = $zipCode;
        $this->number = $number;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    public function getFullAddress(): string
    {
        return "{$this->street}, {$this->number}, {$this->city}, {$this->state}, {$this->country}";
    }

    public function getUf(): string
    {
        return $this->uf;
    }

    public function setUf(string $uf): void
    {
        $this->uf = $uf;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getState(): string
    {
        return $this->state;    
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

}