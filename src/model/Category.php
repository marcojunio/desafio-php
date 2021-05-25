<?php

namespace src\model;

class Category
{
    private $code;
    private $name;

    public function __construct()
    {
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setNome($name)
    {
        $this->name = $name;
    }
}

