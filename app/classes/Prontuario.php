<?php

class Prontuario
{
    private $id_prontuario;
    private $data_registro;
    private $sintomas;
    private $diagnostico;
    private $tratamento;
    private $observacoes;
    private $id_animal;
    private $id_veterinario;

    public function getIdProntuario()
    {
        return $this->id_prontuario;
    }

    public function setIdProntuario($id_prontuario)
    {
        $this->id_prontuario = $id_prontuario;
    }

    public function getDataRegistro()
    {
        return $this->data_registro;
    }

    public function setDataRegistro($data_registro)
    {
        $this->data_registro = $data_registro;
    }

    public function getSintomas()
    {
        return $this->sintomas;
    }

    public function setSintomas($sintomas)
    {
        $this->sintomas = $sintomas;
    }

    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;
    }

    public function getTratamento()
    {
        return $this->tratamento;
    }

    public function setTratamento($tratamento)
    {
        $this->tratamento = $tratamento;
    }

    public function getObservacoes()
    {
        return $this->observacoes;
    }

    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;
    }

    public function getIdAnimal()
    {
        return $this->id_animal;
    }

    public function setIdAnimal($id_animal)
    {
        $this->id_animal = $id_animal;
    }

    public function getIdVeterinario()
    {
        return $this->id_veterinario;
    }

    public function setIdVeterinario($id_veterinario)
    {
        $this->id_veterinario = $id_veterinario;
    }
}
