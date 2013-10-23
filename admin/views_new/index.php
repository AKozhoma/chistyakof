<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index of</title>
<link rel="stylesheet" type="text/css" href="<?=A_SITE_URL;?>/css/v3_admin_style.css" />
<script type="text/javascript" src="<?=A_SITE_URL;?>/js/jquery.js"></script>
<script type="text/javascript" src="<?=A_SITE_URL;?>/js/admin.js"></script>
<script type="text/javascript" src="<?=A_SITE_URL;?>/fckeditor/fckeditor.js"></script>
</head>
<body>
<table cellpadding="0" cellspacing="0" class="container_table" align="center" height="100%">
  <tr>
    <td height="1" valign="top"><table cellpadding="0" cellspacing="0" width="100%" height="135">
        <tr>
          <td height="44"><div class="upper">
              <div class="upper_left">
                <div class="upper_right">Панель управления сайтом <a href="<?=SITE_URL;?>">smachno.ua</a></div>
              </div>
            </div></td>
        </tr>
        <tr>
          <td class="upper_btns_td" valign="top"><div class="button type_1">
              <div class="btn_left"></div>
              <div>
                <input type="button" value="Контент" onclick="javascript:location.href='index2.php?lang=<?php echo $this->lang; ?>'" />
              </div>
              <div class="btn_right"></div>
            </div>
            <div class="button type_2">
              <div class="btn_left"></div>
              <div>
                <input type="button" value="Настройки" onclick="javascript:location.href='index2.php?route=configs'" />
              </div>
              <div class="btn_right"> </div>
            </div>
            <div class="button type_3">
              <div class="btn_left"></div>
              <div>
                <input onclick="javascript:location.href='index.php?logout=true'" type="button" value="Выход" />
              </div>
              <div class="btn_right"> </div>
            </div>
            <div class="clear"></div>
            <img src="img/ent.gif" height="3" width="950" alt="" border="0" style="margin-top:20px;" /> </td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td class="content_td" valign="top"><div class="left_part">
        <div class="block">
          <div class="block_header">
            <div class="block_header_left">
              <div class="block_header_right">Структура сайта</div>
            </div>
          </div>
          <div class="block_content">
            <ul class="leftmenu">
              <li class="active"><a href="#">Decor Climat</a><b><span><a href="#"><img src="img/arrow_down.jpg" border="0" alt="" /></a></span><span><a href="#"><img src="img/arrow_up.jpg" border="0" alt="" /></a></span><span><a href="#"><img src="img/delete.jpg" border="0" alt="" /></a></span><span><a href="#"><img src="img/add.jpg" border="0" alt="" /></a></span></b></li>
              <li><a href="#">О компании</a></li>
              <li><a href="#">Услуги</a></li>
              <li><a href="#">Прайсы</a></li>
              <li><a href="#">Контакты</a></li>
              <li><a href="#">Преимущества Decor Climat</a></li>
              <li><a href="#">Хиты продаж</a> <br />
                <ul class="submenu">
                  <li><a href="#">Daikin FT / R</a></li>
                  <li><a href="#">Daikin FTXG-E / RXG-E</a></li>
                  <li><a href="#">Daikin FTXS-D,G / RXS-D</a></li>
                  <li><a href="#">Daikin FAQ-B / RZQ-B</a></li>
                  <li><a href="#">Daikin FTXR-E / RXR-E</a></li>
                  <li><a href="#">Mitsubishi MSZ - GC / GB</a></li>
                  <li><a href="#">Daikin FTXR-E / RXR-E</a></li>
                  <li><a href="#">Mitsubishi MSZ - GC / GB</a></li>
                  <li><a href="#">Mitsubishi MSC - GA20VB</a></li>
                </ul>
              </li>
            </ul>
            <div class="add_category"><a href="modules/action.php?add=0&lang=<?=$this->lang;?>">Добавить раздел</a></div>
          </div>
        </div>
        <div class="contacts">(044) 223 01 04<br />
          (063) 223 01 04</div>
      </div>
      <div class="main_part">
        <div class="block">
          <div class="block_header">
            <div class="block_header_left">
              <div class="block_header_right">Параметры</div>
            </div>
          </div>
          <div class="block_content"> </div>
        </div>
      </div>
      <div class="clear"></div></td>
  </tr>
  <tr>
    <td class="footer_td"></td>
  </tr>
</table>
<div class="footer">
  <div class="footer_left">
    <div class="footer_right">
      <div class="copyright">© 2010 “ChipSite”</div>
      <div class="created_by">Developed by ChipSite</div>
      <div class="clear"></div>
    </div>
  </div>
</div>
</body>
</html>
