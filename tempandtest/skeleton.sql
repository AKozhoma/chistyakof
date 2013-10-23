-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Фев 01 2010 г., 12:54
-- Версия сервера: 5.0.83
-- Версия PHP: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- База данных: `skeleton`
--

-- --------------------------------------------------------

--
-- Структура таблицы `content_en`
--

CREATE TABLE IF NOT EXISTS `content_en` (
  `id` int(11) NOT NULL auto_increment,
  `name` char(64) default NULL,
  `_link` char(255) default NULL,
  `_href` char(255) default NULL,
  `page` text,
  `title` char(255) default NULL,
  `keywords` char(255) default NULL,
  `description` char(255) default NULL,
  `header` char(128) default NULL,
  `parent` int(11) default NULL,
  `weight` int(3) default '5',
  `_show` int(1) default '1',
  `_enabled` int(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `content_en`
--


-- --------------------------------------------------------

--
-- Структура таблицы `content_ru`
--

CREATE TABLE IF NOT EXISTS `content_ru` (
  `id` int(11) NOT NULL auto_increment,
  `name` char(64) default NULL,
  `_link` char(255) default NULL,
  `_href` char(255) default NULL,
  `page` text,
  `title` char(255) default NULL,
  `keywords` char(255) default NULL,
  `description` char(255) default NULL,
  `header` char(128) default NULL,
  `parent` int(11) default NULL,
  `weight` int(3) default '5',
  `_show` int(1) default '1',
  `_enabled` int(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


--
-- Структура таблицы `content_ua`
--

CREATE TABLE IF NOT EXISTS `content_ua` (
  `id` int(11) NOT NULL auto_increment,
  `name` char(64) default NULL,
  `_link` char(255) default NULL,
  `_href` char(255) default NULL,
  `page` text,
  `title` char(255) default NULL,
  `keywords` char(255) default NULL,
  `description` char(255) default NULL,
  `header` char(128) default NULL,
  `parent` int(11) default NULL,
  `weight` int(3) default '5',
  `_show` int(1) default '1',
  `_enabled` int(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Дамп данных таблицы `content_ua`
--


-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL auto_increment,
  `header` text NOT NULL,
  `preview` text NOT NULL,
  `news` text NOT NULL,
  `_show` int(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL auto_increment,
  `username` char(32) default NULL,
  `pass` char(32) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Id`, `username`, `pass`) VALUES
(1, 'admin', 'ee10c315eba2c75b403ea99136f5b48d');
