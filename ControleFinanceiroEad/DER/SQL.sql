insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Ana Maria', 'ana@gmail.com', 'senha123', '2021-02-21');

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro)
values
('Carlos Junior', 'carlosjunior@gmail.com', 'senha423', '2021-02-25');

insert into tb_categoria 
(nome_categoria, id_usuario)
values
('alimentação', 1);

insert into tb_categoria 
(nome_categoria, id_usuario)
values
('Viagens', 2);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Colchão', '43999999999', 'Rua dos Colchões', 1);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Comer Bem', '43999999998', 'Rua dos Restaurantes', 2);

insert into tb_conta 
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander', '1122', '112233', 4500.20, 1);

insert into tb_conta 
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Bradesco', '4433', '443322', 5678.89, 2);

insert into tb_movimento 
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2021-01-10', 45, null, 1, 1, 2, 1)