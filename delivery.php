<!DOCTYPE html>
<html lang="ru">
  <?
    include_once('./templates/blocks/head.php');
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
            <li><span>Доставка</span></li>
          </ul>
        </div>
        <div class="grid-container">
          <h1>Доставка</h1>
        </div>
        <div class="grid-container">
          <div class="seo_text"><img class="content-img" src="/assets/img/delivery.png" alt="" title="">
            <p>Для того, чтобы избавить своих клиентов от лишних проблем наша компания предлагает такие услуги как: доставка бытовок и блок-контейнеров.</p>
            <p>Доставка бытовок включает в себя не только транспортировку, но и погрузочно-разгрузочные работы, а также их установку. Перевозка бытовок производится в собранном виде при помощи манипулятора. Это значительно сокращает расходы, так как избавляет от необходимости использования грузоподъемной техники.</p>
            <p>Стоимость услуги до 50 км от склада (г. Химки, МО) на сегодняшний день составляет 6 500 рублей. Перевозка бытовок на более дальнее расстояние осуществляется по прейскуранту 50 рублей за каждый дополнительный километр.</p>
            <p>Все разрешения на перевозку бытовок наша компания получает самостоятельно. Вам нужно сделать только заказ и указать начальную и конечную точку перевозки. Остальные формальности наша компания берет на себя. Необходимо учитывать, чтобы на месте погрузки и выгрузки бытовок был свободный подъезд манипулятора.</p>
            <p>Звоните по телефонам:<span class="tel">+7 (495) 789-55-63</span>,<span class="tel">+7 (495) 641-85-68 </span>, и наши консультанты подберут для вас наиболее выгодные условия сотрудничества.</p>
          </div>
        </div>
        
        <?
          include_once('./templates/blocks/calc-delivery.php');
          include_once('./templates/blocks/photos-onpage.php');
          include_once('./templates/blocks/order-form_block.php');
          include_once('./templates/blocks/useful-links_container.php');
        ?>
      </div>
    </main>
    <?
      include_once('./templates/blocks/footer.php');
      include_once('./templates/blocks/order-form.php');
    ?>
  </body>
</html>