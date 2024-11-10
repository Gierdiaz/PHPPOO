<?php

require_once 'Person.php';
require_once 'Address.php';
require_once 'Employee.php';
require_once 'Client.php';

// Criando os objetos Address com os respectivos dados
$addressRiodeJaneiro = new Address(
    'RJ',                    // Estado
    '23017-130',             // CEP
    'Rua Olinto da Gama Botelho', // Nome da rua
    '450',                   // Número
    'Rio de Janeiro',        // Bairro
    'RJ',                    // Estado
    'Brasil'                 // País
);

$addressIraja = new Address(
    'RJ',                    // Estado
    '21361-360',             // CEP
    'Rua José Machado',      // Nome da rua
    '1111',                  // Número
    'Irajá',                 // Bairro
    'RJ',                    // Estado
    'Brasil'                 // País
);


// Criando o objeto Employee
$employee = new Employee(
    'Állison',
    27,
    'male',
    '01-07-1997',
    $addressRiodeJaneiro,
    '+55 (21) 9 9976-55922',
    'gierdiaz@example.com',
    'Software Developer',
    5000
);

// Exibindo as datas de criação e atualização para o Employee
echo 'Employee Created At: ' . $employee->getCreatedAt()->format('Y-m-d H:i:s') . PHP_EOL;
$employee->updateTimestamps();
echo 'Employee Updated At: ' . $employee->getUpdatedAt()->format('Y-m-d H:i:s') . PHP_EOL;


// Criando o objeto Client
$client = new Client(
    'João',
    27,
    'male',
    '01-07-1997',
    $addressRiodeJaneiro,
    '+55 (21) 9 9976-55922',
    'joao@example.com',
    'Gold',
    '11.111.111/1111-11',
    '1234-1234-1234-1234'
);

// Exibindo as datas de criação e atualização para o Client
echo 'Client Created At: ' . $client->getCreatedAt()->format('Y-m-d H:i:s') . PHP_EOL;
$client->updateTimestamps();
echo 'Client Updated At: ' . $client->getUpdatedAt()->format('Y-m-d H:i:s') . PHP_EOL;

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

