# phpMyAdmin SQL Dump
# version 2.5.6
# http://www.phpmyadmin.net
#
# Servidor: localhost
# Tempo de Generação: Mar 16, 2004 at 05:26 PM
# Versão do Servidor: 3.23.47
# Versão do PHP: 4.3.4
# 
# Banco de Dados : `noticias`
# 

# --------------------------------------------------------

#
# Estrutura da tabela `noticias`
#

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `noticiaid` int(11) NOT NULL auto_increment,
  `titulo` varchar(255) NOT NULL default '',
  `conteudo` text NOT NULL,
  `nivel` int(11),
  `data` DATETIME NOT NULL,
  PRIMARY KEY  (`noticiaid`)
) TYPE=MyISAM AUTO_INCREMENT=4 ;

#
# Extraindo dados da tabela `noticias`
#

INSERT INTO `noticias` VALUES ('', 'Sistema de usuários', 'bla bla bla bla bla', '',14112013);
INSERT INTO `noticias` VALUES ('', 'Pc nao liga', 'Parece que a fonte queimou','', 14112013);
INSERT INTO `noticias` VALUES ('', 'Problema na rede', 'Rede caindo direto', '', 14112013);
INSERT INTO `noticias` VALUES ('', 'Instalacao de Programas', 'Spyware Terminator', '', 10012014);

# --------------------------------------------------------

#
# Estrutura da tabela `aut_usuarios`
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(60) NOT NULL default '',
  `login` varchar(40) NOT NULL default '',
  `senha` varchar(40) NOT NULL default '',
  `postar` enum('S','N') NOT NULL default 'S',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=3 ;

#
# Extraindo dados da tabela `usuarios`
#

INSERT INTO `usuarios` VALUES (1, 'Administrador', 'admin', 'admin', 'N');
INSERT INTO `usuarios` VALUES (2, 'Luciano', 'LukeThomaz', 'luke8859', 'S');
INSERT INTO `usuarios` VALUES (3, 'Linda', 'lindinha', 'linda1234', 'S');
