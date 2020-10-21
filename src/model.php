<?php
  function searchData(&$database, $url_key){//функция для поиска информации о страницы из файла database
    foreach ($database['pages'] as $key => $value){//происходит прогон по массиву pages
      if ($value['url_key'] == $url_key){//если в массиве pages есть информация об искомой странице, то 
        return $value; //массив с информацией об этой странице возвращается в программу
      }
    }
    return false;
  }
?>