<?php

class Vacinacao
{
    private $id_vacinacao;
    private $data_aplicacao;
    private $proxima_dose;
    private $observacoes;
    private $id_animal;
    private $id_vacina;
    private $id_veterinario;

    public function getIdVacinacao()
    {
        return $this->id_vacinacao;
    }

    public function setIdVacinacao($id_vacinacao)
    {
        $this->id_vacinacao = $id_vacinacao;
    }

    public function getDataAplicacao()
    {
        return $this->data_aplicacao;
    }

    public function setDataAplicacao($data_aplicacao)
    {
        $this->data_aplicacao = $data_aplicacao;
    }

    public function getProximaDose()
    {
        return $this->proxima_dose;
    }

    public function setProximaDose($proxima_dose)
    {
        $this->proxima_dose = $proxima_dose;
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

    public function getIdVacina()
    {
        return $this->id_vacina;
    }

    public function setIdVacina($id_vacina)
    {
        $this->id_vacina = $id_vacina;
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
