<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo stripcslashes($this->title) ?></title>
<meta name="description" content="<?=$this->description;?>">
<meta name="keywords" content="<?=$this->keywords;?>">
<link rel="stylesheet" type="text/css" href="/reset.css" />
<link rel="stylesheet" type="text/css" href="/v3_style.css" />
<script language="javascript" type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" href="ie.css" />
<![endif]-->
<!--[if IE 6]>
<script language="javascript" type="text/javascript" src="DD_belatedPNG_0.0.8a.js"></script>
<script>
DD_belatedPNG.fix('.pngfix');
</script>
<![endif]-->
<script type="text/javascript"> 
window.onload = function () {
    if (document.getElementById(("textarea"))) {
        document.getElementById("textarea").innerHTML = '<textarea cols="45" rows="6" name="text" id="text" style=""></textarea>';
    }
}	
</script>
</head>
<body>
<table cellpadding="0" cellspacing="0" width="100%" height="100%" class="container_table">
  <tr>
    <td valign="bottom"><table cellpadding="0" cellspacing="0" width="100%" height="100%" class="i_container_table">
        <tr>
          <td class="main_td pngfix" valign="top"><div class="content">
              <div class="phone"><em><?php echo $this->phone ?></em><span class="mail"><a href="/contacts.html" class="pngfix"><img src="/img/mail.png" border="0" alt="" /></a></span></div>
              <div style="margin-right:300px;padding-top:40px;"><a href="/" class="main_link"></a></div>
              <div class="clear"></div>
              <div class="txt_outer pngfix">
                <div class="txt">
                  <div class="pagetitle">
                    <table cellpadding="0" cellspacing="0" width="100%">
                      <tr>
                        <td width="1" class="h1_td pngfix"><h1><?php echo stripcslashes($this->header) ?></h1></td>
                        <td><div class="h1_line">&nbsp;</div></td>
                      </tr>
                    </table>
                  </div>
                  <div class="pagetext"> <?php echo stripcslashes($this->page) ?> </div>
                </div>
              </div>
            </div>
            </div></td>
        </tr>
        <tr>
          <td class="footer_td" valign="bottom"><div class="under">
              <div class="menu"><a href="/about.html" class="about inline_block pngfix">о нас</a><a href="/services.html" class="services inline_block pngfix">услуги</a><a href="/price.html" class="price inline_block pngfix">цены</a></div>
              <div class="footer">
                <div class="f_links">
                  <p class="level_1"><?php echo $this->block1 ?></p>
                </div>
                <div class="copyright">©2010 “Чистякоff”. Все права защищены.</div>
                <div class="created_by"><a href="http://stgstudio.com" target="_blank">Разработка сайта</a> - STGstudio</div>
              </div>
            </div></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
