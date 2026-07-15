<?php

class Consulta
{
    private $id_consulta;
    private $data_hora;
    private $motivo;
    private $diagnostico;
    private $observacoes;
    private $status;
    private $id_animal;
    private $id_veterinario;

    public function getIdConsulta()
    {
        return $this->id_consulta;
    }

    public function setIdConsulta($id_consulta)
    {
        $this->id_consulta = $id_consulta;
    }

    public function getDataHora()
    {
        return $this->data_hora;
    }

    public function setDataHora($data_hora)
    {
        $this->data_hora = $data_hora;
    }

    public function getMotivo()
    {
        return $this->motivo;
    }

    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;
    }

    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;
    }

    public function getObservacoes()
    {
        return $this->observacoes;
    }

    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
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
