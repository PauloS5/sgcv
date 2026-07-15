Classes do Sistema
* **Cliente:** id_cliente, nome, cpf, telefone, email, endereco
* **Animal:** id_animal, nome, especie, raca, sexo, data_nascimento, peso, cor, id_cliente
* **Veterinario:** id_veterinario, nome, crmv, especialidade, telefone, email
* **Consulta:** id_consulta, data_hora, motivo, diagnostico, observacoes, status, id_animal, id_veterinario
* **Vacina:** id_vacina, nome, fabricante, descricao
* **Vacinacao:** id_vacinacao, data_aplicacao, proxima_dose, observacoes, id_animal, id_vacina, id_veterinario
* **Prontuario:** id_prontuario, data_registro, sintomas, diagnostico, tratamento, observacoes, id_animal, id_veterinario