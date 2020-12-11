-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 17 2020 г., 16:24
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dimas128_base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--
-- Создание: Июн 17 2020 г., 13:19
-- Последнее обновление: Июн 17 2020 г., 13:19
--

DROP TABLE IF EXISTS `tovar`;
CREATE TABLE `tovar` (
  `id` int(11) NOT NULL,
  `name_tovar` text NOT NULL,
  `opisanie` text NOT NULL,
  `price` int(11) NOT NULL,
  `dopoln` text NOT NULL,
  `kategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `name_tovar`, `opisanie`, `price`, `dopoln`, `kategoria`) VALUES
(1, 'Тайтсы мужские Craft Warm Train Wind', '<b>Пол</b><br>	\r\nМужской<br>\r\n<b>Возраст</b><br>	\r\nВзрослые<br>\r\n<b>Вид спорта</b><br>	\r\nБег<br>\r\n<b>Сезон</b><br>	\r\nЗима<br>\r\n<b>Гигроскопичность</b><br>\r\nДа', 3999, 'Есть в наличии 11 штук', 1),
(2, 'Толстовка мужская Craft Eaze FZ Sweat Hood', '<b>Пол</b><br>	\r\nМужской<br>\r\n<b>Возраст</b><br>	\r\nВзрослые<br>\r\n<b>Вид спорта</b><br>	\r\nБег<br>\r\n<b>Застежка</b><br>	\r\nМолния<br>\r\n<b>Покрой</b><br>	\r\nПрямой<br>\r\n<b>Размер</b><br>\r\n46-48, 50-52, 54-56', 3699, 'Есть в наличии 20 шт.', 1),
(3, 'Велосипед Stern Extreme BMX Steel 20\"', '<b>Материал рамы</b><br>	\r\nСталь<br>\r\n<b>Материал педалей</b><br>\r\nПластик<br>\r\n<b>Диаметр колеса</b><br>\r\n20\"<br>\r\n<b>Страна производства</b><br>\r\nКитай<br>\r\n<b>Максимальный вес пользователя кг</b><br>\r\n90 кг<br>\r\n<b>Наименование покрышек</b><br>\r\n20 х 2,35<br>', 14999, 'Есть в наличии 5 штук', 1),
(4, 'Тренажер эллиптический PRO-FORM Endurance 520 E', '<b>Система нагружения</b><br>	\r\nЭлектромагнитная<br>\r\n<b>Масса маховика</b><br>	\r\n8 кг<br>\r\n<b>Регулировка нагрузки</b><br>	\r\nЭлектронная<br>\r\n<b>Нагрузка</b><br>	\r\n20 уровней<br>\r\n<b>Длина шага</b><br>	\r\n450-500 мм<br>\r\n<b>Измерение пульса</b><br>	\r\nДатчики на поручнях<br>\r\n<b>Нагрудный кардиодатчик</b><br>	\r\nОпционально<br>\r\n<b>Питание тренажера</b><br>	\r\nСеть: 220В<br>\r\n<b>Максимальный вес пользователя</b><br>\r\n135 кг<br>', 54999, 'Есть в наличии 13 штук', 1),
(5, 'Гиря Reebok 8 кг', '<b>Вес</b><br>\r\n8 кг<br>\r\n<b>Покрытие</b><br>\r\nПластик<br>\r\n<b>Вид спорта</b><br>	\r\nСиловые тренировки, Фитнес<br>\r\n<b>Срок гарантии</b><br>	\r\n2 года\r\n<b>Артикул производителя</b><br>	\r\n7373-870<br>\r\n<b>Страна производства</b><br>	\r\nКитай', 1999, 'Есть в наличии более 50 шт.', 1),
(6, 'Беговые лыжи Atomic Mover XCruise Grip', '<b>Стиль катания</b><br>	\r\nКлассический<br>\r\n<b>Уровень подготовки</b><br>\r\nНачинающий<br>\r\n<b>Возраст</b><br>	\r\nВзрослые<br>\r\n<b>Рекомендуемый вес пользователя</b><br>	\r\n55-70 кг<br>\r\n<b>Геометрия</b><br>	\r\n52-49-55 мм<br>\r\n<b>Скользящая поверхность</b><br>	\r\nBI 1500<br>\r\n<b>Жесткость</b><br>	\r\nСредняя<br>\r\n<b>Вид спорта</b><br>	\r\nБеговые лыжи<br>\r\n<b>Технологии</b><br>	\r\nDENSOLITE<br>\r\n<b>Артикул производителя</b><br>	\r\nAB0020978<br>\r\n<b>Срок гарантии на лыжи</b><br>	\r\n2 года<br>', 8499, 'Есть в наличии 43 шт.', 1),
(7, 'Кроссовки мужские Nike Air Monarch IV', '<b>Пол</b><br>\r\nМужской<br>\r\n<b>Возраст</b><br>	\r\nВзрослые<br>\r\n<b>Вид спорта</b><br>	\r\nСпортивный стиль<br>\r\n<b>Способ застегивания</b><br>	\r\nШнуровка<br>\r\n<b>Материал верха</b><br>	\r\n54 % натуральная кожа, 43 % синтетическая кожа, 3 % текстиль<br>\r\n<b>Материал подкладки</b><br>	\r\n100 % текстиль<br>\r\n<b>Материал стельки</b><br>	\r\n100 % текстиль<br>\r\n<b>Материал подошвы</b><br>	\r\n85 % резина, 15 % пластик<br>\r\n<b>Размер</b><br>\r\n39, 41, 42, 43, 44<br>', 4299, 'Есть в наличии 15 шт', 2),
(8, 'Ветровка женская Outventure', '<b>Пол</b><br>\r\nЖенский<br>\r\n<b>Материал верха</b><br>	\r\n100 % нейлон<br>\r\n<b>Материал подкладки</b><br>	\r\n100 % полиэстер<br>\r\n<b>Покрой</b><br>	\r\nПрямой<br>\r\n<b>Дополнительная вентиляция</b><br>	\r\nНет<br>\r\n<b>Светоотражающие элементы</b><br>	\r\nНет<br>\r\n<b>Длина куртки</b><br>	\r\nСредняя<br>\r\n<b>Количество карманов</b><br>	\r\n3<br>\r\n<b>Застежка</b><br>	\r\nМолния<br>\r\n<b>Мех</b><br>	\r\nОтсутствует<br>\r\n<b>Наличие чехла</b><br>	\r\nНет<br>\r\n<b>Регулируемые манжеты</b><br>	\r\nДа<br>\r\n<b>Наличие утеплителя</b><br>	\r\nНет<br>\r\n<b>Защита от ветра</b><br>	\r\nДа<br>\r\n<b>Артикулируемые локти</b><br>	\r\nДа<br>\r\n<b>Размер</b><br>\r\n42-44, 46-48, 50-52<br>', 4499, 'Есть в наличии 8 шт', 2),
(9, 'Худи женская Nike Sportswear Essential', '<b>Пол</b><br>	\r\nЖенский<br>\r\n<b>Возраст</b><br>\r\nВзрослые<br>\r\n<b>Вид спорта</b><br>	\r\nСпортивный стиль<br>\r\n<b>Застежка</b><br>	\r\nОтсутствует<br>\r\n<b>Капюшон</b><br>\r\nНе отстегивается<br>\r\n<b>Материал верха</b><br>	\r\n80 % хлопок, 20 % полиэстер<br>\r\n<b>Материал подкладки</b><br>	\r\n100 % хлопок', 4199, 'Есть в наличии 16 шт', 2),
(10, 'Футболка мужская Adidas', '<b>Пол</b><br>\r\nМужской<br>\r\n<b>Возраст</b><br>\r\nВзрослые<br>\r\n<b>Защита от УФ</b><br>\r\nНет<br>\r\n<b>Материалы</b><br>	\r\n100 % хлопок<br>\r\n<b>Покрой</b><br>	\r\nПрямой<br>\r\n<b>Светоотражающие элементы</b><br>	\r\nНет<br>\r\n<b>Плоские швы</b><br>	\r\nНет<br>\r\n<b>Размер</b><br>\r\n48-50, 50-52 ,52-54<br>', 899, 'Есть в наличии 20 шт', 2),
(11, 'Бутсы мужские Nike Legend 8 Club TF', '<b>Пол</b><br>	\r\nМужской<br>\r\n<b>Возраст</b><br>	\r\nВзрослые<br>\r\n<b>Вид спорта</b><br>	\r\nФутбол<br>\r\n<b>Тип поверхности</b><br>\r\nПокрытие<br>\r\n<b>Материал верха</b><br>	\r\n100 % синтетическая кожа<br>\r\n<b>Материал подкладки</b><br>	\r\n100 % текстиль<br>\r\n<b>Материал стельки</b><br>	\r\n100 % текстиль<br>\r\n<b>Материал подошвы</b><br>	\r\n100 % резина<br>\r\n<b>Размер</b><br>\r\n39, 40, 41, 42, 43, 45<br>', 3999, 'Есть в наличии 17 шт', 2),
(12, 'Рюкзак Adidas\r\n', '<b>Пол</b><br>	\r\nМужской<br>\r\n<b>Размеры (дл х шир х выс), см</b><br>	\r\n32 х 14 х 47<br>\r\n<b>Вентиляция спины</b><br>	\r\nНет<br>\r\n<b>Водоотталкивающая пропитка</b><br>	\r\nНет<br>\r\n<b>Количество отделений</b><br>\r\n2<br>\r\n<b>Количество карманов</b><br>	\r\n4<br>\r\n<b>Отделение для ноутбука</b><br>	\r\nДа<br>\r\n<b>Регулируемые лямки</b><br>	\r\nДа<br>\r\n<b>Нагрудный ремень</b><br>	\r\nНет<br>\r\n<b>Поясной ремень</b><br>	\r\nНет<br>\r\n<b>Материал верха</b><br>	\r\n100 % полиэстер<br>\r\n<b>Материал подкладки</b><br>	\r\n100 % полиэстер<br>', 2999, 'Есть в наличии 19 шт', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--
-- Создание: Июн 17 2020 г., 13:19
-- Последнее обновление: Июн 17 2020 г., 13:19
--

DROP TABLE IF EXISTS `zakaz`;
CREATE TABLE `zakaz` (
  `id` int(11) NOT NULL,
  `tele` text NOT NULL,
  `tovar` text NOT NULL,
  `FIO` text NOT NULL,
  `number` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `code` int(11) DEFAULT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`id`, `tele`, `tovar`, `FIO`, `number`, `date`, `code`, `name`) VALUES
(42, '+89504460759', 'Худи женское (48)', 'ПОЛЬСКАЯ ЕВА МИХАЙЛОВНА', 4258, 1, 134, 'EVA POLSKAYA'),
(44, '+89504460759', 'Худи женское (48)', 'ПОЛЬСКАЯ ЕВА МИХАЙЛОВНА', 4258, 1, 134, 'EVA POLSKAYA'),
(45, '+89504460759', 'Худи женское (48)', 'ПОЛЬСКАЯ ЕВА МИХАЙЛОВНА', 4258, 1, 134, 'EVA POLSKAYA');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
