<?php
   if (isset($this->menu[0]['id'])) {
      $msg = 'Страницы на сайте:';
   } else {
      $msg = 'Добавьте страницу!';
   }
?>

<p class="alt center normal-text"><?=$msg;?></p>


<? foreach ($this->menu as $key => $value): ?>
   <? if ($value['id'] == $this->active_page): /* Активная страница */ ?>
      <span style="margin-left: 0px;">
         
         <a id="<?=$value['id'];?>-menu" href="index2.php?id=<?=$value['id'];?>&lang=<?=$this->lang;?>" class="negative bold none-border"><?=$value['name'];?></a>
         &nbsp;
         <a href="modules/action.php?moveup=<?=$value['id'];?>&id=<?=$this->id;?>&lang=<?=$this->lang;?>"><img src="images/arrow_up.gif" alt="Вверх" title="Переместить вверх" /></a>
         <a href="modules/action.php?movedown=<?=$value['id'];?>&id=<?=$this->id;?>&lang=<?=$this->lang;?>"><img src="images/arrow_down.gif" alt="Вниз" title="Переместить вниз" /></a>
         
         <a href="modules/action.php?add=<?=$value['id'];?>&lang=<?=$this->lang;?>"><img src="images/arrow_add.jpg" alt="Добавить" title="Добавить подменю"/></a>
         
         <a onclick="return confirmDelete()" href="modules/action.php?del=<?=$value['id'];?>&lang=<?=$this->lang;?>"><img src="images/arrow_del.jpg" alt="Удалить" title="Удалить страницу"/></a>
         
      </span>
      <br>
      
   <? else: /* Все пункты неактивного меню */ ?>
   
      <span style="margin-left: 0px;"><a id="<?=$value['id'];?>-menu" href="index2.php?id=<?=$value['id'];?>&lang=<?=$this->lang;?>" class="positive none-border"><?=$value['name'];?></a></span>
      <? if (isset($value['active']) and $value['active'] == 'true'): ?>
      <a href="modules/action.php?add=<?=$value['id'];?>&lang=<?=$this->lang;?>"><img src="images/arrow_add.jpg" alt="Добавить" title="Добавить подменю"/></a>
      <? endif; ?>
      <br>
      
   <? endif; ?>
   
   <? if (isset($value['submenu'])): ?>
   
      <? foreach ($value['submenu'] as $value_sub): ?>
         <? if ($value_sub['id'] == $this->active_page): /* Активная в подменю */?>
            <span style="margin-left: 15px;">
               <img src="images/submenu_angle.gif" alt="submenu">
              
               <a id="<?=$value_sub['id'];?>-menu" href="index2.php?id=<?=$value_sub['id'];?>&lang=<?=$this->lang;?>" class="negative bold none-border"><?=$value_sub['name']?></a>
               &nbsp;
               <a href="modules/action.php?moveup=<?=$value_sub['id'];?>&id=<?=$this->id;?>&lang=<?=$this->lang;?>"><img src="images/arrow_up.gif" alt="Вверх" title="Переместить вверх" /></a>
               <a href="modules/action.php?movedown=<?=$value_sub['id'];?>&id=<?=$this->id;?>&lang=<?=$this->lang;?>"><img src="images/arrow_down.gif" alt="Вниз" title="Переместить вниз" /></a>
               
               
               <a href="modules/action.php?add=<?=$value_sub['id'];?>&lang=<?=$this->lang;?>"><img src="images/arrow_add.jpg" alt="Добавить" title="Добавить подменю"/></a>
               
               <a onclick="return confirmDelete()" href="modules/action.php?del=<?=$value_sub['id'];?>&lang=<?=$this->lang;?>"><img src="images/arrow_del.jpg" alt="Удалить" title="Удалить страницу"/></a>
               
            </span>
            <br>
        
         <? else: ?>
            
            <span style="margin-left: 15px;">
               <img src="images/submenu_angle.gif" alt="submenu">
               <a id="<?=$value_sub['id'];?>-menu" href="index2.php?id=<?=$value_sub['id'];?>&lang=<?=$this->lang;?>" class="positive none-border"><?=$value_sub['name']?></a>
            </span><br>
         
         <? endif; ?>
         
         
         
         
         
         
         <? if (isset($value_sub['submenu'])): ?>
   
              <? foreach ($value_sub['submenu'] as $value_sub_sub): ?>
                 <? if ($value_sub_sub['id'] == $this->active_page): /* Активная в подменю */?>
                    <span style="margin-left: 35px;">
                       <img src="images/submenu_angle.gif" alt="submenu">
                      
                       <a id="<?=$value_sub_sub['id'];?>-menu" href="index2.php?id=<?=$value_sub_sub['id'];?>&lang=<?=$this->lang;?>" class="negative bold none-border"><?=$value_sub_sub['name']?></a>
                       &nbsp;
                       <a href="modules/action.php?moveup=<?=$value_sub_sub['id'];?>&id=<?=$this->id;?>&lang=<?=$this->lang;?>"><img src="images/arrow_up.gif" alt="Вверх" title="Переместить вверх" /></a>
                       <a href="modules/action.php?movedown=<?=$value_sub_sub['id'];?>&id=<?=$this->id;?>&lang=<?=$this->lang;?>"><img src="images/arrow_down.gif" alt="Вниз" title="Переместить вниз" /></a>
                       <a onclick="return confirmDelete()" href="modules/action.php?del=<?=$value_sub_sub['id'];?>&lang=<?=$this->lang;?>"><img src="images/arrow_del.jpg" alt="Удалить" title="Удалить страницу"/></a>
                    </span>
                    <br>
                
                 <? else: ?>
                    
                    <span style="margin-left: 35px;">
                       <img src="images/submenu_angle.gif" alt="submenu">
                       <a id="<?=$value_sub_sub['id'];?>-menu" href="index2.php?id=<?=$value_sub_sub['id'];?>&lang=<?=$this->lang;?>" class="positive none-border"><?=$value_sub_sub['name']?></a>
                    </span><br>
                 
                 <? endif; ?>
                 
                 
              <? endforeach; ?>
      
        <? endif; ?>
   
         
         
         
         
         
         
      <? endforeach; ?>
      
   <? endif; ?>
   
<? endforeach; ?>