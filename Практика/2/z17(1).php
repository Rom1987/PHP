<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<div class="container">

<?php
$items = ["Материал 1","Материал 2","Материал 3","Материал 4",
"Материал 5","Материал 6","Материал 7","Материал 8","Материал 9",
"Материал 10","Материал 11","Материал 12","Материал 13"];
$count = 3;//Кол-во материалов на странице

$p = isset($_GET["p"]) ? (int) $_GET["p"] : 0;


for($i = $p*$count; $i < ($p+1)*$count; $i++){
 echo "<p>",$items[$i];
}

$len = floor( count($items) / $count);
?>


<nav>
  <ul class="pagination">
  <? for($i = 0; $i <= $len; $i++){ ?>
    <li><a href="?p=<?= $i ?>"><?= $i + 1 ?></a></li>
  <? } ?>
  </ul>
</nav>
</div>



