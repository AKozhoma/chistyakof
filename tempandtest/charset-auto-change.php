<?php
/* $Id: mysqlupgrade.php,v 1.3 2005/01/31 22:04:02 shimon Exp $ */
// upgrade CHARACTER SET for MySQL 4.1.0 +
//
// Did you export all databases including mysql database before runing this file ?
//
// known bug of this program it dont know to treat FULLTEXT index
//
//by Shimon Doodkin shimon_d@hotmail.com

$conn = mysql_connect("localhost", "root", "stgwww");
$printonly=true; //change this to false to alter on the fly
$charset="cp1251"; 
$collate="utf8_general_ci";
$altertablecharset=true;
$alterdatabasecharser=true;
$db='skeleton';

function PMA_getDbCollation($db)
{
$sq='SHOW CREATE DATABASE `'.$db.'`;';
$res = mysql_query($sq);
if(!$res) echo "\n\n".$sq."\n".mysql_error()."\n\n"; else
if($row = mysql_fetch_assoc($res))
{
  $tokenized = explode(' ', $row[1]);
  unset($row, $res, $sql_query);
  for ($i = 1; $i + 3 < count($tokenized); $i++)
  {
   if ($tokenized[$i] == 'DEFAULT' && $tokenized[$i + 1] == 'CHARACTER' && $tokenized[$i + 2] == 'SET')
   {
    if (isset($tokenized[$i + 5]) && $tokenized[$i + 4] == 'COLLATE')
    {
     return array($tokenized [$i + 3],$tokenized[$i + 5]); // We found the collation!
    }
    else
    {
     return array($tokenized [$i + 3]);
    }
   }
  }
}
return '';
}

?>
<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=windows-1251<? //remember to change it if needed ?>" />
<xmp>
<?

//$rs2 = mysql_query("SHOW DATABASES");
//if(!$rs2) echo "\n\n".$sq."\n".mysql_error()."\n\n"; else
//while ($data2 = mysql_fetch_row($rs2))
//{
//$db=$data2[0];
$db_cha=PMA_getDbCollation($db);
if ( $db!='mysql' /* &&( $db=='mydb_x' || $db=='mydb_y' ) */ ) // limit to database(s) - $db=='mydb_x' || $db=='mydb_y' || $db=='mydb_z'
//if ( substr($db_cha[0],0,4)!='utf8' ) // limit to charset
//{
mysql_select_db($db);
$rs = mysql_query("SHOW TABLES");
if(!$rs) echo "\n\n".$sq."\n".mysql_error()."\n\n"; else
while ($data = mysql_fetch_row($rs))
{
$rs1 = mysql_query("show FULL columns from `$data[0]`");
if(!$rs1) echo "\n\n".$sq."\n".mysql_error()."\n\n"; else
while ($data1 = mysql_fetch_assoc($rs1))
{
  if(in_array(array_shift(split("\\(",$data1['Type'],2)),array(
//'national char',
//'nchar',
//'national varchar',
//'nvarchar',
'char',
'varchar',
'tinytext',
'text',
'mediumtext',
'longtext',
'enum',
'set'
  )))
  {
   //if(substr($data1['Collation'],0,4)!='utf8') // limit to charset
   //{
    $sq="ALTER TABLE `$data[0]` CHANGE `".$data1['Field'].'` `'.$data1['Field'].'` '.$data1['Type'].' CHARACTER SET binary '.($data1['Default']==''?'':($data1['Default']=='NULL'?' DEFAULT NULL':' DEFAULT \''.mysql_escape_string($data1['Default']).'\'')).($data1['Null']=='YES'?' NULL ':' NOT NULL').';';
    if(!$printonly&&!mysql_query($sq)) echo "\n\n".$sq."\n".mysql_error()."\n\n";
    else
    {
     echo ($sq."\n") ;
     $sq="ALTER TABLE `$data[0]` CHANGE `".$data1['Field'].'` `'.$data1['Field'].'` '.$data1['Type']." CHARACTER SET $charset ".($collate==''?'':"COLLATE $collate").($data1['Default']==''?'':($data1['Default']=='NULL'?' DEFAULT NULL':' DEFAULT \''.mysql_escape_string($data1['Default']).'\'')).($data1['Null']=='YES'?' NULL ':' NOT NULL').($data1['Comment']==''?'':' COMMENT \''.mysql_escape_string($data1['Comment']).'\'').';';
     if(!$printonly&&!mysql_query($sq)) echo "\n\n".$sq."\n".mysql_error()."\n\n";
     else echo ($sq."\n") ;
    }
   //}
  }
}
if($altertablecharset)
{
  /*
  $sq='ALTER TABLE `'.$data[0]."` DEFAULT CHARACTER SET binary";
  echo ($sq."\n") ;
  if(!mysql_query($sq)) echo "\n\n".$sq."\n".mysql_error()."\n\n";
  */
  $sq='ALTER TABLE `'.$data[0]."` DEFAULT CHARACTER SET $charset ".($collate==''?'':"COLLATE $collate");
  echo ($sq."\n") ;
    if(!$printonly)
  if(!mysql_query($sq)) echo "\n\n".$sq."\n".mysql_error()."\n\n";
}
}
if($alterdatabasecharser)
{
  /*
  $sq='ALTER DATABASE `'.$data2[0]."` DEFAULT CHARACTER SET binary";
  echo ($sq."\n") ;
  if(!mysql_query($sq)) echo "\n\n".$sq."\n".mysql_error()."\n\n";
  */
  $sq='ALTER DATABASE `'.$db."` DEFAULT CHARACTER SET $charset ".($collate==''?'':"COLLATE $collate");
  echo ($sq."\n") ;
    if(!$printonly)
  if(!mysql_query($sq)) echo "\n\n".$sq."\n".mysql_error()."\n\n";
}
//}
//}
?>
</xmp>
