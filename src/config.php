<?php
  define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']); 
  define('PATH_SRC', ROOT_PATH . '/src/'); //подключение папки src в качестве источника исходных файлов
  define('PATH_TPL', ROOT_PATH . '/templates/'); //подключение папки templates в качестве источника шаблонов

  $baseFiles = []; //массив файлов ядра которые нужно подключать в программе

  $baseFiles[] = PATH_SRC . 'database.php'; //в этом файле мы будем хранить контентные данные для страниц сайта
  $baseFiles[] = PATH_SRC . 'model.php'; //этот файл будет иметь функции для поиска нужной информации в database
  $baseFiles[] = PATH_SRC . 'controller.php'; //этот файл будет реализовывать логику, связывать данные и шаблоны

  foreach ($baseFiles as $key => $value){
    include_once($value);
  }
?>