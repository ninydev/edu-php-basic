<?php
/**
 * Включение файлов
 * Выражение require_once
 *
 * @package  edu-php-basic
 * @author   Oleksandr Nykytin <keeper@ninydev.com>
 */


echo '<h2>Включение файлов require_once ("file_name")</h2>' . PHP_EOL;
echo '<p>результат поиска файлов, согласно настроек сервера:' . PHP_EOL;
echo get_include_path();
echo PHP_EOL . '</p>' . PHP_EOL;

echo '<p>1. первое включение файла vars.php:</p>';
require_once ('vars.php');

echo '<p>2. второе включение файла vars.php:</p>';
echo '<p>Ничего не выведет</p>';
require_once ('vars.php');

echo '<p> Объявим переменную </p>';
$chekInclude = 'Эта пемеменная создана в файле: '  .__FILE__ . ' : ' . __LINE__;
echo '<p>3. третье включение файла vars.php:</p>';
echo '<p>Ничего не выведет</p>';
require_once ('vars.php');

echo '<p> Видим ли мы переменную, объявленную внутри vars.php</p>';
if (isset($incCount)) {
  echo '<p> Переменная $incCount видна и равна ' . $incCount . '</p>';
} else {
  echo '<p> Переменной нет </p>';
}
