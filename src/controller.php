<?php
  if ($_SERVER['SCRIPT_NAME'] == '/index.php'){//если пользователь находится на странице index.php, то
    printPage('/index.php', $database); //вызывается функция для вывода страницы, в которую передается адрес страницы и массив database
  }
  elseif ($_SERVER['SCRIPT_NAME'] == '/bytovka.php'){
    printPage('/bytovka.php', $database);
  }
  elseif ($_SERVER['SCRIPT_NAME'] == '/catalog.php'){
    printPage('/catalog.php', $database);
  }
  elseif ($_SERVER['SCRIPT_NAME'] == '/price.php'){
    printPage('/price.php', $database);
  }

  function printPage($url_key, &$database){//функция для вывода страницы
    $data = searchData($database, $url_key);//в переменную data присвваивается информация о странице url_key
    if (!empty($data) && file_exists(PATH_TPL . $data['tpl'])){//если data не пустая и существует файл-шаблон, соответствующий url_key
      include_once(PATH_TPL . $data['tpl']);//то этот файл-шаблон включается в страницу
    }else{//иначе 
      die('в базе данных нет данных для вызываемой страницы');//скрипт не срабатывает и выводится ошибка из скобок
    }
  }
?>