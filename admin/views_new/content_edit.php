<script type="text/javascript">
window.onload = function() {
	var oFCKeditor = new FCKeditor('page') ;
	oFCKeditor.BasePath = "fckeditor/" ;
	oFCKeditor.ReplaceTextarea() ;
}
</script>

<form method="post" id="form_content" action="<?=A_SITE_URL;?>/modules/action.php?lang=<?php echo $this->lang; ?>">
  <div class="span-18 last">
    <div class="block">
      <div class="block_header">
        <div class="block_header_left">
          <div class="block_header_right">Настройки страницы</div>
        </div>
      </div>
      <div class="block_content">
        <table>
          <tr>
            <td class="right"><label for="name">Название меню</label></td>
            <td><input type="text" id="name" value='<?php echo stripcslashes($this->name); ?>' name="name" class="span-11"></td>
          </tr>
          <tr>
            <td class="right"><label for="header">Заголовок страницы</label></td>
            <td><input type="text" id="header" value='<?php echo stripslashes($this->header); ?>' name="header" class="span-11"></td>
          </tr>
          <tr>
            <td class="right"><label for="link">Ссылка</label></td>
            <td><input type="text" id="link" value="<?php echo $this->_link; ?>" name="link" class="span-11"></td>
          </tr>
          <tr>
            <td colspan="2"><hr></td>
          </tr>
          <tr>
            <td class="right"><label for="title">Заголовок (tilie)</label></td>
            <td><input type="text" id="title" value='<?php echo stripslashes($this->title); ?>' name="title" class="span-11"></td>
          </tr>
          <tr>
            <td class="right"><label for="keywords">Ключевые слова (keywords)</label></td>
            <td><input type="text" id="keywords" value='<?php echo stripslashes($this->keywords); ?>' name="keywords" class="span-11"></td>
          </tr>
          <tr>
            <td class="right"><label for="description">Описание (description)</label></td>
            <td><input type="text" id="description" value='<?php echo stripslashes($this->description); ?>' name="description" class="span-11"></td>
          </tr>
          <tr>
            <td colspan="2"><hr></td>
          </tr>
          <tr>
            <td class="right"><label for="show">Включить страницу</label></td>
            <td><input type="checkbox" id="show" name="show" <?=$this->checked_show;?>></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="block">
      <div class="block_header">
        <div class="block_header_left">
          <div class="block_header_right">Контент</div>
        </div>
      </div>
      <div class="block_content">
      <textarea id="page" name="page" class="page"><?=$this->page;?>
</textarea>
</div>
    </div>
    <hr class="space">
    <div class="span-18 last right"> <span id="save_msg" class="hidden bold"></span> <a href="<?=A_SITE_URL;?>" class="green bold">« Закрыть</a>
      <input type='submit' id="subm" name="subm" value='Сохранить' class="span-4">
      <input type="reset" value="Отменить">
    </div>
  </div>
  <input type="hidden" id="submit_form" name="submit_form" value="submit">
  <input type="hidden" id="id" name="id" value="<?=$this->active_page;?>">
  <input type="hidden" id="lang" name="lang" value="<?=LANG;?>">
</form>
