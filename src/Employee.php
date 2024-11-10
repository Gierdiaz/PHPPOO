<?php

require_once 'Authentication.php';~
require_once 'Timestamps.php';

class Employee extends Person implements Authentication
{
    use Timestamps;

    private string $jobTitle;
    private float $salary;
    private string $password;

    public function __construct(string $name, int $age, string $gender, string $dateOfBirth, Address $address, string $phoneNumber, string $email, string $jobTitle, float $salary)
    {
        parent::__construct($name, $age, $gender, $dateOfBirth, $address, $phoneNumber, $email);
        $this->jobTitle = $jobTitle;
        $this->salary = $salary;
        $this->updateTimestamps();
    }

    public function login(string $email, string $password): void
    {
        if ($this->email === $email && $this->password === $password) {
            echo "<p>[ LOGIN: Usuário " . $this->name . " logado com sucesso! ]</p>";
        } else {
            echo "<p>[ LOGIN: Usuário " . $this->name . " não logado! ]</p>";
        }
    }
    
    public function identifier(): string
    {
        return "Cargo: {$this->jobTitle}, Salário: R$ {$this->salary}";
    }

    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }

    public function setJobTitle(string $jobTitle): void
    {
        $this->jobTitle = $jobTitle;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}