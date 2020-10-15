<?php

//файл с контентными данными для страниц сайта
$database = array( //все эти данные храняться в массиве $database
  'pages' => array(
    array(
      'url_key' =>'/index.php',
      'tpl' => 'main.php',
      'title' => 'Главная страница сайта бытовок',
      'text' => ''
    ),
    array(
      'url_key' =>'/contacts.php',
      'tpl' => 'contacts.php',
      'title' => 'Контакты',
      'text' => ''
    ),
    array(
      'url_key' =>'/catalog.php',
      'tpl' => 'catalog.php',
      'title' => 'Каталог',
      'text' => ''
    ),
    array(
      'url_key' =>'/bytovka.php',
      'tpl' => 'bytovka.php',
      'title' => 'Бытовка',
      'text' => ''
    ),
    array(
      'url_key' =>'/prices.php',
      'tpl' => 'prices.php',
      'title' => 'Цены',
      'text' => ''
    )
  ),
  'category' => array(
    array(
      'id' => 1,
      'title' => 'Аренда бытовок в Видном',
      'name' => 'Аренда бытовок в Видном'
    ),
    array(
      'id' => 2,
      'title' => 'Аренда бытовок в Домодедово',
      'name' => 'Аренда бытовок в Домодедово'
    )
  ),
  'item' => array(
    array(
      'id' => 1,
      'title' => 'Блок контейнер 2,5 x 6 м',
      'name' => 'Блок контейнер 2,5 x 6 м',
      'price' => '452',
      'otdelka' => 'пластик, деревянная вагонка утепление 50 мм электрика'
    ),
    array(
      'id' => 2,
      'title' => 'Блок контейнер 2 x 3 м',
      'name' => 'Блок контейнер 2 x 3 м',
      'price' => '452345',
      'otdelka' => 'Стенды ДВП, Электропроводка Освещение Выключатели  Металлическая дверь На выходе автомат 16А Стальные решетки на окнах'
    ),
    array(
      'id' => 3,
      'title' => 'Блок контейнер 2 x 7 м',
      'name' => 'Блок контейнер 2 x 7 м',
      'price' => '67',
      'otdelka' => 'отсутствует'
    )
  )
);

?>