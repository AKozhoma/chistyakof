<?php
session_start();
$nomer = rand("1000","9999");/* выбираем случайное число от 1000 до 9999*/
$_SESSION['cap_nomer'] = $nomer;
$imge = imagecreate("40", "15"); /*создаем рисунок в ширину 50 пикселей и высоту 15*/
$background_color = imagecolorallocate ($imge, 255, 255, 255);/*задаем рисунку цвет фона*/
$green = imagecolorallocate($imge,10,110,190);/* устанавливаем цвет текста для нашего рисунка*/
imagestring($imge,4,4,0,$nomer,$green);/*рисуем текст с такими параметрами: $imge(наш рисунок),4 (размер шрифта (от 1 до 5)),4 (отступ на 4 пикселя слева),0 (отступ в пикселях сверху),$nomer (текст),$green (цвет текста)*/
header("Content-type: image/jpeg");/* посылаем заголовок серверу про то, что мы передаем ему рисунок формата jpeg*/
imagejpeg($imge); /*выводим рисунок*/
imagedestroy($imge);/* освобождаем память*/
?> 
