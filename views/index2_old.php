<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo stripcslashes($this->title) ?></title>
<meta name="description" content="<?=$this->description;?>">
<meta name="keywords" content="<?=$this->keywords;?>">
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="v3_style.css" />
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
        document.getElementById("textarea").innerHTML = '<textarea cols="45" rows="6" name="text" id="text"></textarea>';
    }
}
$(document).ready(function () {
	$("#text").css({display:'none'});
});
</script>
</head>
<body>
<table cellpadding="0" cellspacing="0" width="100%" height="100%" class="container_table">
  <tr>
    <td class="fucking_td"><table cellpadding="0" cellspacing="0" width="100%" height="100%" class="i_container_table">
        <tr>
          <td class="main_td pngfix" valign="top"><div class="content">
              <div class="phone"><em><?php echo $this->phone ?></em><span class="mail"><a href="/contacts.html" class="pngfix"><img src="/img/mail.png" border="0" alt="" /></a></span></div>
              <div style="margin-right:300px;padding-top:40px;"><a href="/" class="main_link"></a></div>
              <div class="clear"></div>
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
<div id="text">
Профессиональная уборка помещений, уборка офиса или другая уборка (Киев) может понадобиться, когда делать ее собственными силами нет возможности или желания. В этом случае лучше обратиться к услугам клининговых компаний, для которых уборка квартир и уборка офисов – профессиональное занятие. Уборка (Киев), выполненная такими компаниями, позволяет экономить время и деньги, уборка квартиры создаст приятную и уютную атмосферу, а уборка офиса сделает его респектабельным и позитивным. Благодаря применению профессиональных моющих и чистящих средств, уборка (Киев), в которую входит уборка офисов и уборка квартир, сохраняет в них мебель и напольные покрытия в превосходном состоянии. Тщательная уборка офиса делает атмосферу здоровой, уборка офисов способствует повышению работоспособности сотрудников. Сверкающее чистотой и аккуратное помещение – то, что оставляет после себя уборка помещений, в т.ч. уборка квартир или уборка офисов. Уборка (Киев) будет необходима, даже если вы щепетильно поддерживаете чистоту. Очень важна уборка офиса и уборка квартиры – мест, где мы проводим много времени, ведь уборка квартир влияет на сохранение здоровья. Регулярная уборка квартир и уборка помещений подарит им чистоту и свежесть. Если вас интересует уборка (Киев), уборка офиса, уборка квартиры и уборка помещений различного назначения, обращайтесь к нам и забудьте обо всех заботах. С нами уборка офисов, уборка помещений проста и легка.
</div>
<!-- GA -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22601064-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- YM -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter21769105 = new Ya.Metrika({id:21769105,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/21769105" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
