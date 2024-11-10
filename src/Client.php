<?php

class Client extends Person
{
    private string $membershipLevel;
    private string $cnpj;
    private string $clientId;

    public function __construct(string $name, int $age, string $gender, string $dateOfBirth, Address $address, string $phoneNumber, string $email, string $membershipLevel, string $cnpj, string $clientId)
    {
        parent::__construct($name, $age, $gender, $dateOfBirth, $address, $phoneNumber, $email);
        $this->membershipLevel = $membershipLevel;
        $this->cnpj = $cnpj;
        $this->clientId = $clientId;
    }

    public function getMembershipLevel(): string
    {
        return $this->membershipLevel;
    }

    public function setMembershipLevel(string $membershipLevel): void
    {
        $this->membershipLevel = $membershipLevel;
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): void
    {
        $this->cnpj = $cnpj;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function setClientId(string $clientId): void
    {
        $this->clientId = $clientId;
    }
}