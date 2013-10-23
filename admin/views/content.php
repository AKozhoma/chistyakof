<div class="span-6">
	<div class="box-border">
		<div class="box-header">
			Структура сайта
		</div>
        
		<div class="box-content">
        <!-- Многоязычность
			<div class="center">
				<strong><a href="index2.php?lang=ru" class="<? echo (LANG == 'ru')? "negative none-border" : "positive none-border"; ?>">RU</a> | <a href="index2.php?lang=en" class="<? echo (LANG == 'en')? "negative none-border" : "positive none-border"; ?>">EN</a> | <a href="index2.php?lang=ua" class="<? echo (LANG == 'ua')? "negative none-border" : "positive none-border"; ?>">UA</a></strong>
			</div>
            <hr>
        -->
				<a href="modules/action.php?add=0&lang=<?=$this->lang;?>" class="positive bold none-border">Добавить страницу »</a><br />
            <hr>
            <?php $this->display('menu'); ?>
		</div>
	</div>
</div>
<?=$this->display($this->view_content, 'default/content_edit');?>