<form  action="registration_products.php"  method="POST">

<table>
<tr>
<td>Имя продукта:</td>
<td><input type="text"  name="name" value="<?php echo @$_POST['name']; ?>"></td>
<td></td>
</tr>

<tr>
<td>Картинка:</td>
<td><input type="text"  name="img" value="<?php echo @$_POST['img']; ?>"></td>
</tr>

<tr>
<td>Категория:</td>
<td>
    <!-- Выпадающий список -->
    <section>
			<select class='products_form_category' name="categoria_name">
				<option value="Чай">Чай</option>
				<option value="Сок">Сок</option>
				<option value="Кофе">Кофе</option>
			</select>
	  </section>
    <!-- end Выпадающий список -->
    </td>
<td></td>
</tr>

<tr>
<td>Состав:</td>
<td><input type="text"  name="composition" value="<?php echo @$_POST['composition']; ?>"></td>
<td></td>
</tr>

<tr>
<td>Производитель:</td>
<td><input type="text"  name="manufacturer" value="<?php echo @$_POST['manufacturer']; ?>"></td>
<td></td>
</tr>

<tr>
<td>Цена:</td>
<td><input type="number"  name="price" value="<?php echo @$_POST['price']; ?>"></td>
<td></td>
</tr>

<tr>
<td>Количество:</td>
<td><input type="number"  name="quantity" value="<?php echo @$_POST['quantity']; ?>"></td>
<td></td>
</tr>

<tr>
<td colspan=3>
<br>
  <center>
<button type="submit" name="registration_button" value="Зарегистрироваться">Зарегистрироваться</button>
  </center>
</td>
</tr>

</table>

</form>