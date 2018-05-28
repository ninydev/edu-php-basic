<?php
/**
 * Включение файлов
 * Выражение include_once
 *
 * @package  edu-php-basic
 * @author   Oleksandr Nykytin <keeper@ninydev.com>
 */


echo '<h2>Включение файлов include_once ("file_name")</h2>' . PHP_EOL;
echo '<p>результат поиска файлов, согласно настроек сервера:' . PHP_EOL;
echo get_include_path();
echo PHP_EOL . '</p>' . PHP_EOL;

echo '<p>1. первое включение файла func.php:</p>';
include_once ('func.php');
myFun();

echo '<p>2. второе включение файла func.php:</p>';
echo '<p>Ошибок не будет</p>';
include_once ('func.php');
myFun();

echo '<p>Второй раз файл включен не был - строка будет выведена</p>';
