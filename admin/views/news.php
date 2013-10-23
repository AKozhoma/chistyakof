<form action="index2.php?route=news/edit" method="post">
<div class="span-7">
    <div class="box-border">
        <div class="box-header">Новости</div>
        <div class="box-content">
            <a href="index2.php?route=news/add" class="positive bold none-border">Добавить новость »</a>
            <hr>
            <?php
               if (isset($this->news[0]['id'])) {
                  $msg = 'Новости на сайте:';
               } else {
                  $msg = 'Добавьте новость!';
               }
            ?>
            <p class="alt center normal-text"><?=$msg;?></p>
            <ul>
            <? foreach($this->news as $value): ?>
                <? if ($this->active_page == $value['id']): ?>
                    <li><a href="index2.php?route=news/show/<?=$value['id'];?>" class="negative bold none-border"><?=$value['header'];?></a> <a href="index2.php?route=news/delete/<?=$value['id'];?>" onclick="return confirmDelete();"><img src="images/arrow_del.jpg" alt="del" title="Удалить новость!"></a></li>
                <? else: ?>
                    <li><a href="index2.php?route=news/show/<?=$value['id'];?>" class="positive none-border"><?=$value['header'];?></a></li>
                <? endif; ?>
            <? endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<?php $this->display($this->view_news); ?>

</form>