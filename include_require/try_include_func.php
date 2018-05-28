<?php
/**
 * Включение файлов
 * Выражение include
 *
 * @package  edu-php-basic
 * @author   Oleksandr Nykytin <keeper@ninydev.com>
 */


echo '<h2>Включение файлов include ("file_name")</h2>' . PHP_EOL;
echo '<p>результат поиска файлов, согласно настроек сервера:' . PHP_EOL;
echo get_include_path();
echo PHP_EOL . '</p>' . PHP_EOL;

echo '<p>1. первое включение файла func.php:</p>';
include ('func.php');
myFun();

echo '<p>2. второе включение файла func.php:</p>';
echo '<p>Будет отработана ошибка: Fatal error: Cannot redeclare myFun(). Скрипт будет остановлен!</p>';
include ('func.php');

echo '<p>Эта строка не будет выведена</p>';
