<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo stripcslashes($this->title) ?></title>
<meta name="description" content="<?=$this->description;?>">
<meta name="keywords" content="<?=$this->keywords;?>">
<link rel="stylesheet" type="text/css" href="reset.css" />
<link rel="stylesheet" type="text/css" href="v3_style.css" />
<!--<script language="javascript" type="text/javascript" src="js/jquery-1.4.2.min.js"></script>-->
<script language="javascript" type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
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
$(document).ready(function () {
	$("#text").css({display:'none'});
        
    jQuery('#mycarousel').jcarousel({
    	wrap: 'circular',
        scroll: 1
    });
});
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
        <td class="fucking_td front-page">
            <table cellpadding="0" cellspacing="0" width="100%" height="100%" class="i_container_table">
                <tr>
                  <td class="main_td pngfix" valign="top">
                      <div class="content">
                          <div class='contacts'>
                              <div class="logo">
                                 <a href="/" title='Чистякоff' class="main_link"><img src='img/logo.png' /></a> 
                              </div>
                              <div class="menu">
                                  <a href="/about.html" class="about inline_block pngfix">о нас</a>
                                  <a href="/services.html" class="services inline_block pngfix">услуги</a>
                                  <a href="/price.html" class="price inline_block pngfix">цены</a>
                              </div>
                              <div class="phone">
                                  <em><?php echo $this->phone ?></em>
                                  <span class="mail">
                                      <a href="/contacts.html" class="pngfix">
                                          <img src="/img/mail.png" border="0" alt="" />
                                      </a>
                                  </span>
                              </div>
                          </div>
                          <div class="clear"></div>
                          <div class="txt_outer pngfix">
                              <div class="txt">
                                  <div class="pagetitle">
                                    <table cellpadding="0" cellspacing="0" width="100%">
                                      <tr>
                                        <td width="1" class="h1_td pngfix"><h1>Цены и работы</h1></td>
                                        <td><div class="h1_line">&nbsp;</div></td>
                                      </tr>
                                    </table>
                                  </div>
                                  <div class="pagetext">
                                      <ul type="disc">
                                          <li class="MsoNormal" style="line-height: 150%;">
                                              <span class="LeftInfo" style="font-size:18.0pt;line-height:150%;font-family:Arial">
                                                  <a href="http://chistyakoff.com.ua/uborka.html">Уборка помещений, офисов, квартир</a> 
                                              </span>
                                              <span class="RightInfo" style="font-size:18.0pt;line-height:150%;font-family:Arial;color:navy">от 4 грн/м<sup>2</sup></span>
                                              <span style="font-size:18.0pt;line-height:150%;font-family:Arial"><o:p></o:p></span>
                                          </li>
                                          <li class="MsoNormal" style="line-height: 150%;">
                                              <span class="LeftInfo" style="font-size:18.0pt;line-height:150%;font-family:Arial">Мытье окон, промышленный альпинизм </span>
                                              <span class="RightInfo" style="font-size:18.0pt;line-height:150%;font-family:Arial;color:navy">от 3,5 грн/м<sup>2</sup></span>
                                              <span style="font-size:18.0pt;line-height:150%;font-family:Arial"><o:p></o:p></span>
                                          </li>
                                          <li class="MsoNormal" style="line-height: 150%;">
                                              <span class="LeftInfo" style="font-size:18.0pt;line-height:150%;font-family:Arial">
                                                  <a href="/chemical.html">Химчистка      мебели и ковровых покрытий</a>
                                              </span>
                                              <span class="RightInfo" style="font-size:18.0pt;line-height:150%;font-family:Arial;color:navy">от 5 грн/м<sup>2</sup></span>
                                              <span style="font-size:18.0pt;line-height:150%;font-family:Arial"><o:p></o:p></span>
                                          </li>
                                          <li class="MsoNormal" style="line-height: 150%;">
                                              <span class="LeftInfo" style="font-size:18.0pt;line-height:150%;font-family:Arial">Аренда грязезащитных покрытий </span>
                                              <span class="RightInfo" style="font-size:18.0pt;line-height:150%;font-family:Arial;color:navy">от 18 грн/замена</span>
                                              <span style="font-size:18.0pt;line-height:150%;font-family:Arial"><o:p></o:p></span>
                                          </li>
                                          <li class="MsoNormal" style="line-height: 150%;">
                                              <span class="LeftInfo" style="font-size:18.0pt;line-height:150%;font-family:Arial">Вывоз ТБО, мусора, сбор и вывоз снега</span>
                                              <span class="RightInfo" style="font-size:18.0pt;line-height:150%;font-family:Arial;color:navy">от 47 грн/м<sup>3</sup></span>
                                              <span style="font-size:18.0pt;line-height:150%;font-family:Arial"><o:p></o:p></span>
                                          </li>
                                          <li class="MsoNormal" style="line-height: 150%;">
                                              <span class="LeftInfo" style="font-size:18.0pt;line-height:150%;font-family:Arial"><a href="/postconstruction.html">Убока после ремонтных или строительных работ</a></span>
                                              <span class="RightInfo" style="font-size:18.0pt;line-height:150%;font-family:Arial;color:navy">от 7 грн/м<sup>2</sup></span>
                                              <span style="font-size:18.0pt;line-height:150%;font-family:Arial"><o:p></o:p></span>
                                          </li>
                                          <li class="MsoNormal" style="line-height: 150%;">
                                              <span class="LeftInfo" style="font-size:18.0pt;line-height:150%;font-family:Arial">Глубокая очистка и нанесение защитных покрытий</span>
                                              <span class="RightInfo" style="font-size:18.0pt;line-height:150%;font-family:Arial;color:navy">от 22 грн/м<sup>2</sup></span>
                                              <span style="font-size:18.0pt;line-height:150%;font-family:Arial"><o:p></o:p></span>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="klients">
                                  <div class="pagetitle">
                                    <table cellpadding="0" cellspacing="0" width="100%">
                                      <tr id="klientTr">
                                        <td width="1" class="h1_td pngfix"><h1>Наши клиенты</h1></td>
                                        <td><div class="h1_line">&nbsp;</div></td>
                                      </tr>
                                    </table>
                                  </div>
                              <div class=" jcarousel-skin-tango">
                                  <div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
                                      <div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
                                          <ul id="mycarousel" class="jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: -850px; width: 1205px;">
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="float: left; list-style: none;">
                                                  <a href="http://www.eurolab.ua/" target="_blank"><img id="evrolab" src="img/klients/eurolab.png" title="Клиника EUROLAB" /></a>
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="float: left; list-style: none;">
                                                  <img id="subaru" src="img/klients/subaru.png" title="Subaru Украина" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-4 jcarousel-item-4-horizontal" jcarouselindex="4" style="float: left; list-style: none;">
                                                  <img id="mimkiev" src="img/klients/mim kyiv.png" title="МИМ-Киев, Международный Институт Менеджмента" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-3 jcarousel-item-3-horizontal" jcarouselindex="3" style="float: left; list-style: none;">
                                                  <img id="hotelukraine" src="img/klients/hotel ukraine.png" title="Отель 'Украина'" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-7 jcarousel-item-7-horizontal" jcarouselindex="7" style="float: left; list-style: none;">
                                                  <img id="silvercanter" src="img/klients/silver_centre_logo.png" title="БЦ 'Siver Centre'" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-5 jcarousel-item-6-horizontal" jcarouselindex="5" style="float: left; list-style: none;">
                                                  <img id="premierliga" src="img/klients/premer liga.png" title="ОПСКУ 'Премьер-лига'" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-6 jcarousel-item-5-horizontal" jcarouselindex="6" style="float: left; list-style: none;">
                                                  <img id="pernorricard" src="img/klients/pernor ricard ukraine.png" title="Перно Рикар Украина" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-8 jcarousel-item-8-horizontal" jcarouselindex="8" style="float: left; list-style: none;">
                                                  <img id="universalbank" src="img/klients/universalbank.png" title="Universal Bank" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-9 jcarousel-item-9-horizontal" jcarouselindex="9" style="float: left; list-style: none;">
                                                  <img id="man" src="img/klients/man.png" title="Ман Дизель и Турбо Украина" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-10 jcarousel-item-10-horizontal" jcarouselindex="10" style="float: left; list-style: none;">
                                                  <img id="esteelauder" src="img/klients/estee_lauder.png" title="Estee Lauder Украина" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-11 jcarousel-item-31-horizontal" jcarouselindex="11" style="float: left; list-style: none;">
                                                  <img id="avis" src="img/klients/avis.png" title="Avis Украина" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal" jcarouselindex="2" style="float: left; list-style: none;">
                                                  <img id="dzi" src="img/klients/dzi.png" title="ДП 'Держзовнішінформ'" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-12 jcarousel-item-32-horizontal" jcarouselindex="12" style="float: left; list-style: none;">
                                                  <a href="http://www.energetix.com.ua/" target="_blank"><img id="energetix" src="img/klients/energetix.png" title="Energetix Украина" /></a>
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-13 jcarousel-item-33-horizontal" jcarouselindex="13" style="float: left; list-style: none;">
                                                  <img id="dfp" src="img/klients/dfp.png" title="НАЦІОНАЛЬНА КОМІСІЯ, ЩО ЗДІЙСНЮЄ ДЕРЖАВНЕ РЕГУЛЮВАННЯ У СФЕРІ РИНКІВ ФІНАНСОВИХ ПОСЛУГ" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-13 jcarousel-item-33-horizontal" jcarouselindex="14" style="float: left; list-style: none;">
                                                  <img id="nacionalnui" src="img/klients/nationalny.jpg" title="Отель 'Национальный'" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-13 jcarousel-item-33-horizontal" jcarouselindex="14" style="float: left; list-style: none;">
                                                  <img id="krasnoarmeiskaya" src="img/klients/krasnoarmeiskaya1.png" title="БЦ Грушевского, 10" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-13 jcarousel-item-33-horizontal" jcarouselindex="14" style="float: left; list-style: none;">
                                                  <img id="gryshevskogo" src="img/klients/some1.png" title="БЦ Артема, 77" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-13 jcarousel-item-33-horizontal" jcarouselindex="14" style="float: left; list-style: none;">
                                                  <img id="esplanadnaya" src="img/klients/esplanadnaja.png" title="БЦ Эспланадная, 20" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-13 jcarousel-item-33-horizontal" jcarouselindex="14" style="float: left; list-style: none;">
                                                  <img id="artema" src="img/klients/artema1.png" title="БЦ Красноармейская, 23-Б" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="float: left; list-style: none;">
                                                  <img id="yar-val" src="img/klients/yarval13.png" title="Ярославов вал, 13/2Б" />
                                              </li>
                                              <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="float: left; list-style: none;">
                                                  <img id="dennewspaper" src="img/klients/den_newspaper.png" title="Щоденна всеукраїнська газета День" />
                                              </li>
                                          </ul>
                                      </div>
                                      <div class="jcarousel-prev jcarousel-prev-horizontal" style="display: block;"></div>
                                      <div class="jcarousel-next jcarousel-next-horizontal" style="display: block;"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </td>
                </tr>
                <tr>
                  <td class="footer_td" valign="bottom">
                      <div class="under">
                          <div class="footer">
                            <div class="f_links">
                              <p class="level_1"><?php echo $this->block1 ?></p>
                            </div>
                            <div class="copyright">©2010 “Чистякоff”. Все права защищены.</div>
                            <div class="created_by"><a href="http://stgstudio.com" target="_blank">Разработка сайта</a> - STGstudio</div>
                          </div>
                      </div>
                  </td>
                </tr>
            </table>
        </td>
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
