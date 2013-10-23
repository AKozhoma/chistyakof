<? $count_listnews = count($this->listnews)-1; foreach($this->listnews as $i => $listnews): ?>


<h3 class="sect_text_header"><?=$listnews['header'];?></h3>
<div class="sect_text_descr"><?=$listnews['preview'];?></div>
<div class="sect_text_more"><a href="<?=SITE_URL;?>/content/<?=$this->newswhat;?>/<?=$listnews['id'];?>" class="read_more">&gt;&gt; подробнее</a></div>
<br /><br />

<? if ($i != $count_listnews): ?>
<div class="sect_sep"></div><br /><br />
<? endif; ?>

<? endforeach; ?>