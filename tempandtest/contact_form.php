<script type="text/javascript"> 
window.onload = function () {
    if (document.getElementById(("textarea"))) {
        document.getElementById("textarea").innerHTML = '<textarea cols="45" rows="6" name="text" id="text"></textarea>';
    }
}	
</script>

<p><script type="text/javascript">
function validate_form() {

    var name = document.getElementById('name');
    var text = document.getElementById('text');
    var cap = document.getElementById('cap');
    
    if (name.value == '' || text.value == '' || cap.value == '') {
            alert ('Вы не заполнили обязательные поля!');
            return false;
        }
        return true;
    
}
</script></p>
<form method="post" action="/ua/content/send">
    <table cellpadding="4" cellspacing="4">
            <tr>
                <td class="col">Имя*:</td>
                <td class="col2"><input type="text" name="name" id="name" style="width: 300px;" /></td>
            </tr>
            <tr>
                <td class="col">Телефон:</td>
                <td class="col2"><input type="text" name="phone" id="phone" style="width: 300px;" /></td>
            </tr>
            <tr>
                <td class="col">E-Mail:</td>
                <td class="col2"><input type="text" name="email" id="email" style="width: 300px;" /></td>
            </tr>
            <tr>
                <td class="col">Тема*:</td>
                <td class="col2"><input type="text" name="theme" id="theme" /></td>
            </tr>
            <tr>
                <td>Сообщение*:</td>
                <td>
                <div id="textarea">&nbsp;</div>
                </td>
            </tr>
            <tr>
                <td class="col">Введите код*:</td>
                <td class="col2"><input type="text" name="cap" id="cap" style="width: 50px;" /> <img alt="cap" src="/libraries/cap.php" ilo-full-src="http://test03.chipsite.com.ua/libraries/cap.php" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">
                <div style="margin: 20px; text-align: right;"><!----><input type="submit" value="Отправить &raquo;" name="go" onclick="return validate_form();" /></div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <div style="clear: both; font-size: 11px; margin-bottom: 20px;">
                <p class="hint">Поля отмеченные (*) обязательны для заполнения</p>
                </div>
                </td>
            </tr>
    </table>
</form>