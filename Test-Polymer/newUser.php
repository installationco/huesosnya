<?php
if (isset($_POST['ID'])) { $id = $_POST['ID']; if ($id == '') { unset($id);} }
include ("connect.php");
$result = mysqli_query($db,"SELECT * FROM users WHERE `id`='$id'");
$myrow = mysqli_fetch_array($result);
if (!empty($myrow['id'])) {
	exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}
$result2 = mysqli_query ($db,"INSERT INTO users (id) VALUES('$id')");
// Проверяем, есть ли ошибки
if ($result2=='TRUE')
{
	echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. ";
}
else {
		echo "Ошибка! Вы не зарегистрированы.";
}
?>