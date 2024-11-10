<?php

// Não podem ser instanciados objetos a partir da classe abstrata
abstract class Person
{
    protected $name;
    private $age;
    private $gender;
    private $dateOfBirth;
    private Address $address; // associação "Pesosa tem um endereço"
    private $phoneNumber;
    protected $email;

    private static $isAdult = false;

    public function __construct(string $name, int $age, string $gender, string $dateOfBirth, Address $address, string $phoneNumber, string $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;

        // Faz referência a própria classe
        self::isAdult($age);
        $this->validaIdade($age);
    }

    // Método específico ou especial que é exclusivo da minha classe
    private function validaIdade(int $age): bool
    {
        if ($this->age >= 18 && $this->age < 120) {
            $this->age = $age;
            return true;
        } else {
            throw new InvalidArgumentException('A idade deve ser maior que 18');
        }
    }

    // Método estático para verificar se uma idade é de um adulto
    public static function isAdult(int $age): bool
    {
        if ($age >= 18 && $age < 120) {
            self::$isAdult = true;
            return true;
        } else {
            self::$isAdult = false;
            return false;
        }
    }

    // Método para acessar a propriedade estática $isAdult
    public static function getIsAdultStatus(): bool
    {
        return self::$isAdult;
    }

    protected abstract function identifier(): string;
    
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(string $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

}