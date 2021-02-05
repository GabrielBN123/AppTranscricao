CREATE TABLE messages (
  IdMessage int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT '(PK) ID da mensagem',
  FromNickname varchar(32) NOT NULL COMMENT 'Nickname do remetente',
  Message text COMMENT 'Mensagem',
  MessageDate timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data da mensagem'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Mensagens do chat';




ALTER TABLE `messages`
  MODIFY `IdMessage` int(8) NOT NULL AUTO_INCREMENT COMMENT '(PK) ID da mensagem';

ALTER TABLE `messages`
  ADD PRIMARY KEY (`IdMessage`);

CREATE TABLE `users` (
  `Nickname` varchar(32) NOT NULL COMMENT '(PK) Nickname do utilizador',
  `LoginDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Data do login'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Utilizadores do chat';


ALTER TABLE `users`
  ADD PRIMARY KEY (`Nickname`);
