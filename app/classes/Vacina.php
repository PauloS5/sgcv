<?php

class Vacina
{
    private $id_vacina;
    private $nome;
    private $fabricante;
    private $descricao;

    public function getIdVacina()
    {
        return $this->id_vacina;
    }

    public function setIdVacina($id_vacina)
    {
        $this->id_vacina = $id_vacina;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getFabricante()
    {
        return $this->fabricante;
    }

    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
}
