<?php
session_start();
$nomer = rand("1000","9999");/* �������� ��������� ����� �� 1000 �� 9999*/
$_SESSION['cap_nomer'] = $nomer;
$imge = imagecreate("40", "15"); /*������� ������� � ������ 50 �������� � ������ 15*/
$background_color = imagecolorallocate ($imge, 255, 255, 255);/*������ ������� ���� ����*/
$green = imagecolorallocate($imge,10,110,190);/* ������������� ���� ������ ��� ������ �������*/
imagestring($imge,4,4,0,$nomer,$green);/*������ ����� � ������ �����������: $imge(��� �������),4 (������ ������ (�� 1 �� 5)),4 (������ �� 4 ������� �����),0 (������ � �������� ������),$nomer (�����),$green (���� ������)*/
header("Content-type: image/jpeg");/* �������� ��������� ������� ��� ��, ��� �� �������� ��� ������� ������� jpeg*/
imagejpeg($imge); /*������� �������*/
imagedestroy($imge);/* ����������� ������*/
?> 
