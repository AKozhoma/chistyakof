<div class="span-11">
	<div class="box-border">
		<div class="box-header">
			Смена пароля
		</div>
		<div class="box-content">
			<form name="pass" action="index2.php?route=configs/change_pass" method="POST">
			<table>
				<tr>
				<td><label for="password">Введите ваш старый пароль:</label></label></td>
					<td><input type="password" id="password" name="old_pass" class="span-5" /></td>
				</tr>
				<tr>
					<td><label for="new_password">Введите новый пароль:</label></td>
					<td><input type="password" id="new_password" name="new_pass" class="span-5" /></td>
				</tr>
				<tr>
					<td><label for="rtr_pass">Повторите пароль:</label></td>
					<td><input type="password" id="rtr_pass" name="rtr_pass" class="span-5" /></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><br />
					<input type="submit" name="go_pass" value="Сменить пароль" /></td>
				</tr>
			</table>
			</form>
		</div>
	</div>
</div>