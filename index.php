<?php
	echo "<h2>Функция приветствия пользователя:</h2>";
	
	function greeting($name, $dayOfWeek)
	{
		switch ($dayOfWeek) {
			case 1:
			case 2:
			case 3:
			case 4:
			case 5:
				echo "Привет, $name! Желаю Вам хорошего и продуктивного рабочего дня!";
				break;
			case 6:
			case 7:
				echo "Привет, $name! Желаю Вам хорошо отдохнуть и набраться сил в этот день!";
				break;
			default:
				echo "Система выдает ошибку. Обратитесь к администратору.";
				break;
		}
	}
	greeting("Tatiana", 20);
?>