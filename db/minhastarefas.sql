DROP TABLE IF EXISTS apontamentos;
DROP TABLE IF EXISTS parametros;

CREATE TABLE `apontamentos` (
  `id` bigint unsigned not null auto_increment,
  `datahora` datetime,
  `descricao` text,
  `concluida` boolean default false,
  `prioridade` tinyint unsigned default 0,
  primary key(id)
);

CREATE TABLE `parametros` (
  `id` bigint unsigned not null auto_increment,
  `email` varchar(255),
  primary key(id)
);
