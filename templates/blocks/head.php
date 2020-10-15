<?php
  $url = $_SERVER['REQUEST_URI'];
  switch($_SERVER['REQUEST_URI']){
    case "/":
      $url = 'Главная страница';
    break;
    case "/rent.php":
      $url = 'Аренда бытовки';
    break;
    case "/price.php":
      $url = 'Цены';
    break;
    case "/delivery.php":
      $url = 'Доставка';
    break;
    case "/photogallery.php":
      $url = 'Фотогалерея';
    break;
    case "/contacts.php":
      $url = 'Контакты';
    break;
  }
?>

<head>
  <title><?php if (!empty($data['title'])){ echo $data['title'];} else{ echo $url;} ?></title>
  <meta name="viewport" content="width=device-width">
  <meta charset="utf-8">
  <script src="https://api-maps.yandex.ru/2.1/?apikey=f461f187-b614-45c4-988e-6b214fceb781&amp;lang=ru_RU" type="text/javascript"></script></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css">
  <link rel="stylesheet" href="/assets/css/screen.css">
</head>