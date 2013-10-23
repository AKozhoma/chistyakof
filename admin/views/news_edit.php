<div class="span-17 last">
    <div class="box-border">
        <div class="box-header">Параметры новости</div>
        <div class="box-content">
            <table>
                <tr>
                    <td class="right">
                        <label for="header">Заголовок</label>
                    </td><td>
                        <input type="text" id="header" value="<?php if (isset($this->news_active['header'])) echo $this->news_active['header']; ?>" name="header" class="span-11">
                    </td>
                </tr>
                <tr><td colspan="2"><hr></td></tr>
                <tr>
                    <td class="right">
                        <label for="show">Опубликовать новость</label>
                    </td><td>
                    <?php
                        if (isset($this->news_active['_show']) and $this->news_active['_show'] == 1) {
                           $show = 'checked';
                        } else {
                           $show = 'unchecked';
                        }
                    ?>
                        <input type="checkbox" id="show" value="1" name="show" <?=$show;?>>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class="box-border">
    		<div class="box-header">
    			Первью
    		</div>
   			<textarea id="preview" name="preview" class="span-17" style="height:100px;"><?php if (isset($this->news_active['preview'])) echo $this->news_active['preview']; ?></textarea>
    </div>
    <br />
    <div class="box-border">
    		<div class="box-header">
    			Новость
    		</div>
   			<textarea id="news" name="news" class="span-17"><?php if (isset($this->news_active['news'])) echo $this->news_active['news']; ?></textarea>
    </div>    
</div>
<hr class="space">
<div class="span-24 last right">
    <input type="hidden" name="id" value="<?=$this->active_page;?>">
	<span id="save_msg" class="hidden"></span>  <a href="index2.php?route=news" class="green bold">« Закрыть</a> <input type='submit' id="save_news" name="save_news" value='Сохранить' class="span-4"> <input type="reset" value="Отменить"> 
</div>