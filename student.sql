-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 10 2020 г., 09:21
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `student`
--

-- --------------------------------------------------------

--
-- Структура таблицы `анкета_студента`
--

CREATE TABLE `анкета_студента` (
  `ID_Студента` int(6) NOT NULL COMMENT 'Номер_зачётки',
  `Фамилия` text NOT NULL,
  `Имя` text NOT NULL,
  `Отчество` text NOT NULL,
  `Дата_Рождения` date NOT NULL,
  `№_паспорта` int(6) NOT NULL,
  `№_телефона` int(15) NOT NULL COMMENT 'Без символом, только числа',
  `Факультет` text NOT NULL,
  `Курс` int(1) NOT NULL,
  `№_документа` int(25) NOT NULL COMMENT 'Документ об зачислении в общежитие',
  `№_общежития` int(1) NOT NULL,
  `№_комнаты` int(11) NOT NULL COMMENT 'Где проживает студент'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Анкета для заполнения при поступлении в общежитие.';

--
-- Дамп данных таблицы `анкета_студента`
--

INSERT INTO `анкета_студента` (`ID_Студента`, `Фамилия`, `Имя`, `Отчество`, `Дата_Рождения`, `№_паспорта`, `№_телефона`, `Факультет`, `Курс`, `№_документа`, `№_общежития`, `№_комнаты`) VALUES
(567889, 'Кожевина', 'Екатерина', 'Игоревна', '1999-06-21', 8898988, 892067887, 'Инженерный', 3, 8999, 6, 34),
(567890, 'Фурманчук', 'Юрий', 'Александрович', '2000-02-12', 5687898, 7918674, 'Инженерный', 3, 56778, 4, 56),
(675889, 'Гладыщева', 'Дарья ', 'Сергеевна', '2000-03-18', 5678999, 891976849, 'Инженерный', 3, 56788, 4, 45),
(823428, 'Стоянова ', 'Мария', 'Ивановна', '2000-02-05', 56788999, 891943060, 'Инженерный', 3, 6788, 5, 45);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `анкета_студента`
--
ALTER TABLE `анкета_студента`
  ADD PRIMARY KEY (`ID_Студента`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
