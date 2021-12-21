<script>
    function check_comp(){}
     </script>
<form>
<input id="name" type="text" required placeholber="Подскаазка" pattern=".{4,8}" /* маска */
onchange="check_comp()" title="Введи имя от 3 до 8 букв">
<label for="name">ввод</label>
</form>
Сделать чтобы показывала, где находится ошибка. Нет ошибки оставить и подтвердить что всё хорошо