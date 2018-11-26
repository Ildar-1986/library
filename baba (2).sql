-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 26 2018 г., 03:11
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
-- База данных: `baba`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id_author` int(10) UNSIGNED NOT NULL,
  `auth_fio` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id_author`, `auth_fio`) VALUES
(2, 'Франк Яна'),
(3, ' Гарнизоненко Татьяна Сергеевна'),
(4, ' Петрочук Ольга Константиновна'),
(6, 'Кустов Виктор'),
(7, 'Хэррис Сара'),
(8, ' Коллектив авторов'),
(9, ' Морозевич Анатолий Николаевич,');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id_book` int(10) UNSIGNED NOT NULL,
  `book_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_book` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id_book`, `book_name`, `img_book`, `description`) VALUES
(1, 'Основы информатики', 'https://www.litmir.me/data/Book/0/260000/260960/BC4_1490777867.jpg', 'Учебное пособие раскрывает основные темы курса, в частности: техническое и программное обеспечение персональных компьютеров, служебные и сервисные программные средства, текстовые и табличные процессоры, локальные сети и Интернет. В него включены главы по '),
(2, 'Базы данных: конспект лекций', 'https://www.litmir.me/BookBinary/112163/1333222104/CoverNormal.jpg/0', 'Конспект лекций соответствует требованиям Государственного образовательного стандарта высшего профессионального образования РФ и предназначен для освоения студентами вузов специальной дисциплины «Базы данных». Лаконичное и четкое изложение материала, ...'),
(3, 'Цифровая схемотехника и архитектура компьютера. Второе издание', 'https://www.litmir.me/data/Book/0/253000/253345/BC4_1490773768.jpg', 'Книга закончена'),
(4, 'Руководство администратора баз данных Inrformix.', 'https://www.litmir.me/img/nocover.png', 'Структура и содержание учебника полностью соответствуют примерной программе дисциплины «Информатика» для студентов вузов, рекомендованной Министерством образования. В главе 1 книги рассматриваются общие вопросы, глава 2 посвящена аппаратному, 3 – ...'),
(5, 'Дневник дизайнера-маньяка', 'https://www.litmir.me/data/Book/0/202000/202053/BC4_1490641346.jpg', 'Это книга о дизайнерах и для дизайнеров — откровенный разговор о наболевшем. Сначала она существовала в виде сетевого дневника, который для издания на бумаге был переписан и снабжен иллюстрациями. Яна Франк делится своими мыслями о профессии, предлагает ...'),
(6, 'Сандро Боттичелли', 'https://www.litmir.me/data/Book/0/222000/222690/BC4_1490698141.jpg', 'Книга в популярной форме рассказывает о жизни и творчества одного из наиболее значительных художников итальянского Возрождения, флорентийского живописца и рисовальщика Сандро Боттичелли. Немногочисленные дошедшие до нашего времени документальные ...'),
(7, 'Справочник современного ландшафтного дизайнера', 'https://www.litmir.me/data/Book/0/154000/154411/BC4_1491157947.jpg', 'За последние годы профессия ландшафтного дизайнера стала не только востребованной, но и чрезвычайно модной. Однако ландшафтное искусство требует почти энциклопедических знаний: в области архитектуры и строительства, проектирования и ботаники, ...'),
(8, 'Век великих экспериментов', 'https://www.litmir.me/data/Book/0/629000/629599/BC4_1542112349.jpg', 'В книге представлены публицистические статьи, относящиеся как к истории, так и к сегодняшней ситуации в мире. Особое внимание уделено законам циклического развития общества и человеческой цивилизации.'),
(9, 'Муза и чудовище', 'https://www.litmir.me/data/Book/0/158000/158245/BC4_1491160598.jpg', 'Людям творческим трудно использовать традиционные приемы тайм-менеджмента. Но без порядка в делах и им не обойтись. Эта книга предназначена именно для того, чтобы они могли организовать свой труд самым эффективным и притом не скучным образом. В книге можно писать, рисовать, вырезать и клеить. Здесь можно хранить идеи и сокровенные мысли, шутить и гадать на разворотах в поисках идей. Здесь можно сразу пробовать на практике все описанные автором “рецепты”, а по прочтении книги – начать новую жизнь. В то время как другие художники пытаются не забывать дома тетрадь для важных записей, читателей этой книги будет волновать только один вопрос: “Как жить дальше, когда все странички будут исписаны?”. Эта книга в первую очередь для людей, живущих творчеством дома и на работе, а также для фрилансеров многих профессий и для тех, кому просто нужно навести порядок в делах.');

-- --------------------------------------------------------

--
-- Структура таблицы `books_authors`
--

CREATE TABLE `books_authors` (
  `book_id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) UNSIGNED NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_authors`
--

INSERT INTO `books_authors` (`book_id`, `author_id`, `genre_id`) VALUES
(1, 9, 1),
(2, 8, 1),
(3, 7, 1),
(4, 6, 1),
(5, 2, 2),
(7, 3, 2),
(6, 4, 2),
(8, 6, 1),
(9, 2, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `books_genre`
--

CREATE TABLE `books_genre` (
  `book_id` int(10) UNSIGNED NOT NULL,
  `genre_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

CREATE TABLE `genres` (
  `id_genre` bigint(20) UNSIGNED NOT NULL,
  `genre_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id_genre`, `genre_name`) VALUES
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
  ADD PRIMARY KEY (`id_author`),
  ADD KEY `auth_id` (`id_author`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `book_id` (`id_book`);

--
-- Индексы таблицы `books_authors`
--
ALTER TABLE `books_authors`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `id_book` (`book_id`,`author_id`);

--
-- Индексы таблицы `books_genre`
--
ALTER TABLE `books_genre`
  ADD KEY `book_id` (`book_id`,`genre_id`);

--
-- Индексы таблицы `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id_genre`),
  ADD UNIQUE KEY `genre_id` (`id_genre`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id_author` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id_book` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id_genre` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
