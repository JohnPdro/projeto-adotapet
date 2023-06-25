# projeto-adotapet

Banco de dados - adotapet
 Tabelas: 
     * ongs: essa tabela recebe informações da tela de cadastro e exibe na tela de abrigos.
     (id_ong, nome, telefone, email, cnpj_cpf, foto, endereco, bairro, cidade, estado, senha)

     * animais: essa tabela recebe informações do formulario e exibe na homepage.
     (id_animal, nome, especie, idade, sexo, foto, porte, comportamento, sobre_pet, cidade, estado, id_ong, id_protetor)

     * protetores: essa tabela recebe informações da tela de cadastro
     (id_protetor, nome, email, telefone, data_nascimento, cpf, endereco, bairro, cidade, estado, senha)