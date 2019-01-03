<?php
$connection = mysqli_connect('localhost', 'root', '123', 'test');
if ($connection == false)
{
	echo 'не удалось подключиться к базе данных</br>';
	echo mysqli_connect_error();
	die();
}
$result = mysqli_query($connection, 'SELECT * FROM `categories`');
if(mysqli_num_rows($result) == 0)
{
	echo 'Записей не найдено!';
}else{
?><ul><?	
		while ($category = mysqli_fetch_assoc($result))
	{
		echo '<li>' . $category['title'] . '</li>';
	}
?></ul><?}
mysqli_close($connection);
?>