<!DOCTYPE html>
<html lang="ru">
  <?
    include_once('./templates/blocks/head.php');
    //modified index php ??
    //very modified
    //index.php
  ?>
  <body>
    <?
      include_once('./templates/blocks/header.php');
      include_once('./templates/blocks/menu.php');
    ?>
    <main>
      <div class="content">
        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="#">Главная</a></li>
            <li><span>Контакты</span></li>
          </ul>
        </div>
        <div class="grid-container">
          <h1>Контакты</h1>
        </div>
        <div class="contacts_block">
          <div class="grid-container">
            <div class="grid-x contacts-wrapper">
              <div class="contacts-info">
                <div class="contacts-info-address">
                  <div>Москва, ул. Молодогвардейская, д. 58, стр. 13, офис 28</div>
                  <p><span class="bold">Схема проезда:</span>Проезд на автомобиле: За МКАДом, поверните направо с Ленинградского ш. на улицу Репина. После переезда железнодорожного разъезда, поверните налево, на Коммунальный пр. С него съезжайте налево на Транспортный пр. В конце проезда, по правую руку, Вы увидите железные ворота. Здесь находится владение 4.</p>
                </div>
                <div class="contacts-info-mail"><a class="mail" href="mailto:5084145@mail.ru">5084145@mail.ru</a></div>
                <div class="contacts-info-phone"><a class="phone" href="tel:+74957895563">+7 (495) 789-55-63</a><a class="phone" href="tel:+74956418568">+7 (495) 641-85-68</a></div>
              </div>
              <div class="contacts-map" id="contact-map"></div>
            </div>
          </div>
        </div>
        <?
          include_once('./templates/blocks/order-form_block.php');
        ?>
      </div>
    </main>
    <?
      include_once('./templates/blocks/footer.php');
      include_once('./templates/blocks/order-form.php');
    ?>
  </body>
</html>