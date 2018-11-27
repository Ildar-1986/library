-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 27 2018 г., 09:34
-- Версия сервера: 5.7.24-0ubuntu0.18.04.1
-- Версия PHP: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name_author` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `name_author`) VALUES
(1, 'Франк Яна'),
(3, ' Петрочук Ольга Константиновна'),
(4, 'Кассу Жан'),
(5, 'Кустов Виктор'),
(6, 'Хэррис Сара'),
(7, ' Коллектив авторов'),
(8, ' Морозевич Анатолий Николаевич,');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name_book` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `name_book`, `description`, `img`) VALUES
(1, 'Основы информатики', 'Учебное пособие раскрывает основные темы курса, в частности: техническое и программное обеспечение персональных компьютеров, служебные и сервисные программные средства, текстовые и табличные процессоры, локальные сети и Интернет. В него включены главы по ', 'https://www.litmir.me/data/Book/0/260000/260960/BC4_1490777867.jpg'),
(2, 'Руководство администратора баз данных Inrformix.', 'Структура и содержание учебника полностью соответствуют примерной программе дисциплины «Информатика» для студентов вузов, рекомендованной Министерством образования. В главе 1 книги рассматриваются общие вопросы, глава 2 посвящена аппаратному', 'https://www.litmir.me/img/nocover.png'),
(3, 'Сандро Боттичелли', 'Книга в популярной форме рассказывает о жизни и творчества одного из наиболее значительных художников итальянского Возрождения, флорентийского живописца и рисовальщика Сандро Боттичелли. Немногочисленные дошедшие до нашего времени документальные ...', 'https://www.litmir.me/data/Book/0/222000/222690/BC4_1490698141.jpg'),
(4, 'Базы данных: конспект лекций', 'Конспект лекций соответствует требованиям Государственного образовательного стандарта высшего профессионального образования РФ и предназначен для освоения студентами вузов специальной дисциплины «Базы данных». Лаконичное и четкое изложение материала', 'https://www.litmir.me/BookBinary/112163/1333222104/CoverNormal.jpg/0'),
(5, 'Дневник дизайнера-маньяка', 'Это книга о дизайнерах и для дизайнеров — откровенный разговор о наболевшем. Сначала она существовала в виде сетевого дневника, который для издания на бумаге был переписан и снабжен иллюстрациями. Яна Франк делится своими мыслями о профессии, предлагает ...', 'https://www.litmir.me/data/Book/0/202000/202053/BC4_1490641346.jpg'),
(6, 'Век великих экспериментов', 'В книге представлены публицистические статьи, относящиеся как к истории, так и к сегодняшней ситуации в мире. Особое внимание уделено законам циклического развития общества и человеческой цивилизации.', 'https://www.litmir.me/data/Book/0/629000/629599/BC4_1542112349.jpg'),
(7, 'Цифровая схемотехника и архитектура компьютера. Второе издание', 'Независимо от того, как вы настраиваете набор символов MySQL для использования приложения, вы также должны учитывать среду, в которой эти приложения выполняются. Например, если вы отправите заявления, используя текст UTF-8, взятый из файла, который вы создаете в редакторе, ', 'https://www.litmir.me/data/Book/0/253000/253345/BC4_1490773768.jpg'),
(8, 'Справочник современного ландшафтного дизайнера', 'За последние годы профессия ландшафтного дизайнера стала не только востребованной, но и чрезвычайно модной. Однако ландшафтное искусство требует почти энциклопедических знаний: в области архитектуры и строительства, проектирования и ботаники', 'https://www.litmir.me/data/Book/0/154000/154411/BC4_1491157947.jpg'),
(9, 'Муза и чудовище', 'Людям творческим трудно использовать традиционные приемы тайм-менеджмента. Но без порядка в делах и им не обойтись. Эта книга предназначена именно для того, чтобы они могли организовать свой труд самым эффективным и притом не скучным образом. В книге можно писать, рисовать, вырезать и клеить. Здесь можно хранить идеи и сокровенные мысли, шутить и гадать на разворотах в поисках идей. Здесь можно сразу пробовать на практике все описанные автором “рецепты”, а по прочтении книги – начать новую жизнь. ', 'https://www.litmir.me/data/Book/0/158000/158245/BC4_1491160598.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `book_auth`
--

CREATE TABLE `book_auth` (
  `id_auth` int(11) DEFAULT NULL,
  `id_book` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book_auth`
--

INSERT INTO `book_auth` (`id_auth`, `id_book`) VALUES
(7, 4),
(5, 6),
(1, 5),
(1, 9),
(8, 1),
(5, 2),
(3, 3),
(4, 8),
(6, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `book_genre`
--

CREATE TABLE `book_genre` (
  `id_genre` int(11) NOT NULL,
  `id_book` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book_genre`
--

INSERT INTO `book_genre` (`id_genre`, `id_book`) VALUES
(1, 4),
(1, 6),
(2, 5),
(3, 9),
(1, 1),
(1, 2),
(2, 3),
(2, 8),
(1, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

CREATE TABLE `genres` (
  `id_genre` int(11) NOT NULL,
  `name_genre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id_genre`, `name_genre`) VALUES
(1, 'Компьютеры'),
(2, 'Искусство и Дизайн '),
(3, 'Хобби и ремесла');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `authors` ADD FULLTEXT KEY `name_author` (`name_author`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `books` ADD FULLTEXT KEY `name_book` (`name_book`,`description`);

--
-- Индексы таблицы `book_auth`
--
ALTER TABLE `book_auth`
  ADD KEY `id_auth` (`id_auth`),
  ADD KEY `id_book` (`id_book`);

--
-- Индексы таблицы `book_genre`
--
ALTER TABLE `book_genre`
  ADD KEY `id_book` (`id_book`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Индексы таблицы `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id_genre`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `book_auth`
--
ALTER TABLE `book_auth`
  ADD CONSTRAINT `book_auth_ibfk_1` FOREIGN KEY (`id_auth`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `book_auth_ibfk_2` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`);

--
-- Ограничения внешнего ключа таблицы `book_genre`
--
ALTER TABLE `book_genre`
  ADD CONSTRAINT `book_genre_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_genre_ibfk_2` FOREIGN KEY (`id_genre`) REFERENCES `genres` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
