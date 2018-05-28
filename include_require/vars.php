<?php
/**
 * Включение файлов
 * файл с выводом некой информации, и обьявлением перемнных
 *
 * @package  edu-php-basic
 * @author   Oleksandr Nykytin <keeper@ninydev.com>
 */

echo '<hr><h3>Интерпретатор обратился к файлу: ' . __FILE__ . '</h3>' . PHP_EOL;

if (isset($incCount)) {
  $incCount++;
  echo '<p> Этот код система уже обрабатывала. Это включение: ' . $incCount . '</p>';
} else {
  echo '<p> Код используется впервые </p>';
  $incCount = 1;
}

echo '<p>Проверяем, видна ли переменная $chekInclude : ';
if (isset($chekInclude)){
  echo '<span class="badge badge-success"> Да - переменная обьявлена и равна ' . $chekInclude .  ' </span>';
} else {
  echo '<span class="badge badge-danger"> Нет - переменной еще нету </span>';
}
echo  '</p>' . PHP_EOL;
