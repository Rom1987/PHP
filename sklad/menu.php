<nav>
  <div class="nav-bg"></div>
    <ul>
    <? if ($_SESSION['user_nickname']=='admin' and isset($_SESSION['user_password']) ) { ?>
      <li><a href="table_people.php">Таблица поставщиков</a></li>
      <li><a href="table_orders.php">Продажа</a></li>
      <li><a href="table_products.php">Таблица продуктов</a></li>
      <? } ?>
      <li><a href="products.php">Продукты</a></li>
    </ul>
  </nav>
  <div class="hero">
    <a href="index.php"> <h1>Don Simon</h1> </a> 
  </div>
  <div class="content-wrapper">
    
  </div>