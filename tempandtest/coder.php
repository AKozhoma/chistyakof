<?php
$text = '';
$type = '';
if (isset($_POST['text'])) {
   $text = $_POST['text'];
   if (isset($_POST['md'])) {
      $text = md5($text);
      $type = 'md5:';
   } elseif (isset($_POST['sha'])) {
      $text = sha1($text);
      $type = 'sha1:';
   }
   
}

?>
<!doctype html>
<html>
   <head>
      <title>MD5</title>
   </head>
<body>
   <div>
      <p><?=$type;?><br><?=$text;?></p>
   </div>
   <div>
      <form action="" method="post">
         <input type="text" name="text"> <input type="submit" name="md" value="md5 it!"> <input type="submit" value="sha1 it!" name="sha">
      </form>
   </div>
</body>
</html>