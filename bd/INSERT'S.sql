--
-- Script was generated by Devart dbForge Studio for MySQL, Version 8.0.40.0
-- Product home page: http://www.devart.com/dbforge/mysql/studio
-- Script date 24/07/2018 11:01:30
-- Server version: 5.7.21-log
-- Client version: 4.1
--


SET NAMES '';

INSERT INTO db_hotmilhas.tbl_conta(id_conta, fk_id_usuario, nome_conta, numero_conta, data_conta) VALUES
(1, 1, 'MILHAS TAM', 2, '2018-07-20'),
(2, 1, 'Galera da Azul', 3, '2018-07-20'),
(3, 1, '#LoucosPelaAzul', 4, '2018-07-20'),
(4, 1, '#GOL', 5, '2018-07-20'),
(5, 1, 'Galera da Azul', 6, '2018-07-21'),
(6, 1, 'Galera da Azul', 7, '2018-07-21'),
(7, 2, 'ContaFulano', 8, '2018-07-23'),
(8, 2, 'Teste Trigger', 9, '2018-07-23');


INSERT INTO db_hotmilhas.tbl_conta_vinculo(id_conta_vinculo, fk_id_conta, fk_id_usuario) VALUES
(1, 2, 1),
(3, 8, 2),
(4, 1, 1),
(5, 3, 1),
(6, 4, 1),
(7, 5, 1),
(8, 6, 1),
(9, 3, 2),
(10, 6, 2),
(11, 9, 1),
(12, 5, 2),
(13, 7, 1);


INSERT INTO db_hotmilhas.tbl_linha_aerea(id_linha_aerea, nome_linha_aerea) VALUES
(1, 'TAM'),
(2, 'GOL'),
(3, 'AZUL');


INSERT INTO db_hotmilhas.tbl_milhas(id_milhas, valor_milhas, fk_linha_aerea) VALUES
(1, 0.20, 1),
(2, 0.15, 2),
(3, 0.25, 3);


INSERT INTO db_hotmilhas.tbl_milhas_quantidade(id_milhas_quantidade, quant_milhas_quantidade, desc_milhas_quantidade, fk_id_linha_aerea) VALUES
(1, 10000, 0.10, 1),
(2, 15000, 0.15, 1),
(3, 20000, 0.20, 1),
(4, 10000, 0.15, 2),
(5, 15000, 0.20, 2),
(6, 20000, 0.25, 2),
(7, 13000, 0.05, 3),
(8, 18000, 0.15, 3),
(9, 23000, 0.20, 3);


INSERT INTO db_hotmilhas.tbl_transacao(id_transacao, fk_id_conta, fk_id_usuario, fk_id_milhas_quantidade, valor_transacao, data_prevista_transacao, data_realizada_transacao, status_transacao) VALUES
(1, 2, 1, 1, 1300.00, '2018-07-22', '2018-07-22', 'S'),
(7, 4, 1, 6, 2250.00, '2018-07-22', NULL, 'N'),
(8, 4, 1, 1, 1800.00, '2018-07-22', NULL, 'N'),
(9, 4, 1, 6, 2250.00, '2018-07-22', NULL, 'N'),
(10, 2, 1, 6, 2250.00, '2018-07-23', NULL, 'N'),
(11, 7, 2, 5, 1800.00, '2018-07-24', NULL, 'N'),
(12, 7, 2, 5, 1800.00, '2018-07-24', NULL, 'N'),
(13, 7, 2, 5, 1800.00, '2018-07-24', NULL, 'N'),
(14, 7, 2, 1, 1800.00, '2018-07-24', NULL, 'N'),
(15, 8, 2, 1, 1800.00, '2018-07-24', NULL, 'N'),
(16, 5, 2, 2, 2550.00, '2018-07-24', NULL, 'N'),
(17, 5, 1, 5, 1800.00, '2018-07-25', NULL, 'N');


INSERT INTO db_hotmilhas.tbl_usuario(id_usuario, nome_usuario, login_usuario, email_usuario, senha_usuario) VALUES
(1, 'Carlos Eduardo', 'Eduardo', 'eddfts@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Fulano de Tal', 'Fulano', 'fulano@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');



CREATE 
	DEFINER = 'root'@'localhost'
TRIGGER db_hotmilhas.`trg_ numero_conta`
	BEFORE INSERT
	ON db_hotmilhas.tbl_conta
	FOR EACH ROW
BEGIN
  SET NEW.numero_conta = (select ifnull( max( id_conta ) , 0 ) + 2 from tbl_conta);
  
   INSERT INTO tbl_conta_vinculo (fk_id_conta,fk_id_usuario) VALUES(NEW.id_conta,NEW.fk_id_usuario); 
  
END