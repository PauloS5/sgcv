<?php

class Animal
{
    private $id_animal;
    private $nome;
    private $especie;
    private $raca;
    private $sexo;
    private $data_nascimento;
    private $peso;
    private $cor;
    private $id_cliente;

    public function getIdAnimal()
    {
        return $this->id_animal;
    }

    public function setIdAnimal($id_animal)
    {
        $this->id_animal = $id_animal;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEspecie()
    {
        return $this->especie;
    }

    public function setEspecie($especie)
    {
        $this->especie = $especie;
    }

    public function getRaca()
    {
        return $this->raca;
    }

    public function setRaca($raca)
    {
        $this->raca = $raca;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    public function setIdCliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }
}
