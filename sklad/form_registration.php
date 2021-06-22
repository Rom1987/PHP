<form  action="registration.php"  method="POST">

<table>
<tr>
<td>Никнейм:</td>
<td><input type="text"  name="user_nickname" value="<?= @$_POST['user_nickname']; ?>"></td>
<td></td>
</tr>

<tr>
<td>Пароль:</td>
<td><input type="password"  name="user_password" value="<?= @$_POST['user_password']; ?>"></td>
</tr>

<tr>
<td colspan=3 style="height:20px;"></td>
</tr>

<tr>
<td>Фамилия:</td>
<td><input type="text"  name="user_lname" value="<?= @$_POST['user_lname']; ?>"></td>
<td></td>
</tr>

<tr>
<td>Имя:</td>
<td><input type="text"  name="user_fname" value="<?= @$_POST['user_fname']; ?>"></td>
<td></td>
</tr>

<tr>
<td>Отчество:</td>
<td><input type="text"  name="user_sname" value="<?= @$_POST['user_sname']; ?>"></td>
<td></td>
</tr>

<tr>
<td>Адрес проживания:</td>
<td><input type="text"  name="user_address" value="<?= @$_POST['user_address']; ?>"></td>
<td></td>
</tr>

<tr>
<td>Номер телефона:</td>
<td><input type="number"  name="user_phone" value="<?= @$_POST['user_phone']; ?>"></td>
<td></td>
</tr>

<tr>
<td>E-mail:</td>
<td><input type="email"  name="user_email" value="<?= @$_POST['user_email']; ?>"></td>
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