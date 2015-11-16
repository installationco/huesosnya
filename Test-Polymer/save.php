<?php
if (isset($_POST['url'])) { $id = $_POST['url']; if ($id == '') { unset($id);} }
include ("connect.php");
$result = mysql_query("SELECT * FROM photos WHERE `photo`='$id'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) {
	exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}
$result2 = mysql_query ("INSERT INTO photos (photo) VALUES('$id')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
	echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. ";
}
else {
		echo "Ошибка! Вы не зарегистрированы.";
}
?>