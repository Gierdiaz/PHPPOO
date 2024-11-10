<?php

require_once 'Person.php';
require_once 'Address.php';
require_once 'Employee.php';
require_once 'Client.php';

// Criando o objeto Address
$addressRiodeJaneiro = new Address('RJ', '23017-130', 'Rua Olinto da Gama Botelho', '450', 'Rio de Janeiro', 'RJ', 'Brasil');
$addressIraja = new Address('RJ', '21361-360', 'Rua José Machado', '1111', 'Iraja', 'RJ', 'Brasil');

// Criando o objeto Person (Agora não mais possível instanciar por ser uma classe abstrata)
//$person = new Person('John Doe', 20, 'male', '10-11-2004', $addressIraja, '555-555-5555', 'jX3oU@example.com');

// Criando o objeto Employee
$employee = New Employee('Állison', 27, 'male', '01-07-1997', $addressRiodeJaneiro, '+55 (21) 9 9976-55922', 'gierdiaz@example.com', 'Software Developer', 5000);

// Criando o objeto Client
$client = new Client('João', 27, 'male', '01-07-1997', $addressRiodeJaneiro, '+55 (21) 9 9976-55922', 'joao@example.com', 'Gold', '11.111.111/1111-11', '1234-1234-1234-1234');

// echo "<pre>";
// try {
//     var_dump($person);
// } catch (InvalidArgumentException $e) {
//     echo $e->getMessage();
// }
// echo "</pre>";


echo "<pre>";
try {

    $employee->setPassword('123456');
    $employee->login("gierdiaz@example.com", "123456");

    var_dump($employee);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
echo "</pre>";

echo "<pre>";
try {
    var_dump($client);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
echo "</pre>";

echo "<p>Full Address: " . $addressRiodeJaneiro->getFullAddress() . "</p>";

echo "<h1>Is Adult: " . Person::getIsAdultStatus() . "</h1>";

echo "<p>Employee Identifier: " . $employee->identifier() . "</p>";

echo "<p>Client Identifier: " . $client->identifier() . "</p>";

