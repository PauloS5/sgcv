<?php

class Veterinario
{
    private $id_veterinario;
    private $nome;
    private $crmv;
    private $especialidade;
    private $telefone;
    private $email;

    public function getIdVeterinario()
    {
        return $this->id_veterinario;
    }

    public function setIdVeterinario($id_veterinario)
    {
        $this->id_veterinario = $id_veterinario;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCrmv()
    {
        return $this->crmv;
    }

    public function setCrmv($crmv)
    {
        $this->crmv = $crmv;
    }

    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}
