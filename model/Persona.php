<?php

class Persona
{
    private $id;
    private $nome;
    private $altura;
    private $verifica;

    public function getId()
    {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getAltura()
    {
        return $this->altura;
    }
    public function getVerifica()
    {
        return $this->verifica;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    public function setVerifica($verifica)
    {
        $this->verifica = $verifica;
    }
}
