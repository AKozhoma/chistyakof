<?php  
  $dblocation = "localhost";  
  $dbname = "skeleton";  
  $dbuser = "root";  
  $dbpasswd = "";  

  $dbcnx = mysql_connect($dblocation, $dbuser, $dbpasswd);  
  if (!$dbcnx)  
  {  
    echo "<p>� ���������, �� �������� ������ mySQL</p>";  
    exit();  
  }  
  if (!mysql_select_db($dbname,$dbcnx) )  
  {  
    echo "<p>� ���������, �� �������� ���� ������</p>";  
    exit();  
  }  
  $ver = mysql_query("SELECT VERSION()");  
  if(!$ver)  
  {  
    echo "<p>������ � �������</p>";  
    exit();  
  }  
  echo mysql_result($ver, 0);  
?> 