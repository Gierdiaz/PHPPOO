<?php

require_once 'Person.php';
require_once 'Address.php';
require_once 'Employee.php';

// Criando o objeto Address
$addressRiodeJaneiro = new Address('RJ', '23017-130', 'Rua Olinto da Gama Botelho', '43', 'Rio de Janeiro', 'RJ', 'Brasil');
$addressIraja = new Address('RJ', '21361-360', 'Rua José Machado', '110', 'Iraja', 'RJ', 'Brasil');

// Criando o objeto Person
$person = new Person('John Doe', 20, 'male', '10-11-2004', $addressIraja, '555-555-5555', 'jX3oU@example.com');

// Criando o objeto Employee
$employee = New Employee('Állison', 27, 'male', '01-07-1997', $addressRiodeJaneiro, '+55 (21) 9 9976-51914', 'gierdiaz@hotmail.com', 'Software Developer', 5000);

echo "<pre>";
try {
    var_dump($person);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
echo "</pre>";


echo "<pre>";
try {
    var_dump($employee);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
echo "</pre>";

echo "<p>Full Address: " . $addressRiodeJaneiro->getFullAddress() . "</p>";

echo "<h1>Is Adult: " . Person::getIsAdultStatus() . "</h1>";

