### Descrição das Entidades
* **Cliente:** id_cliente (PK), nome, cpf, telefone, email, endereco
* **Animal:** id_animal (PK), nome, especie, raca, sexo, data_nascimento, peso, cor, id_cliente (FK)
* **Veterinario:** id_veterinario (PK), nome, crmv, especialidade, telefone, email
* **Consulta:** id_consulta (PK), data_hora, motivo, diagnostico, observacoes, status, id_animal (FK), id_veterinario (FK)
* **Vacina:** id_vacina (PK), nome, fabricante, descricao
* **Vacinacao:** id_vacinacao (PK), data_aplicacao, proxima_dose, observacoes, id_animal (FK), id_vacina (FK), id_veterinario (FK)
* **Prontuario:** id_prontuario (PK), data_registro, sintomas, diagnostico, tratamento, observacoes, id_animal (FK), id_veterinario (FK)