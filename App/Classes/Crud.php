<?php

namespace App\Classes;

class Crud
{
    private $fields;  
    private $tables;
    private $comments = "Visualizando aqui"; 

    public function __construct($fields, $tables)
    {
        $this->fields = $fields;  
        $this->tables = $tables;  
    }

    public function getRead()
    {
        $this->fields;
        return $this;
    }

    public function setRead($fields)
    {
        $this->fields = $fields;
        return $this;
    }

    public function getWrite()
    {
        $this->tables; 
        return $this;
    }

    public function setWrite($tables)
    {
        $this->tables = $tables;
        return $this;
    }

    public function getView()
    {
        return $this->comments; 
    }

    public function setView($comments)
    {
        $this->comments = $comments;
        return $this;
    }
}