﻿/** * Инициализация обработчиков событий и функций */$(document).ready(function() {	$('#subm').click(onSubmitContent); // Сохранить данные!});/** * Сохраняет контент ajax`ом * Модуль content */function onSubmitContent() {		/* Показываем сообщение, что мы сохраняем данные */	$('#save_msg').html('<img src="images/loading2.gif">Сохраняю...').show();	/**	 * Отображать страницу?	 */	var show = $('#show').attr('checked')?1:0;	      /**    * Страница включена?    */   var enabled = $('#enabled').attr('checked')?1:0;   	/* Обновляем textarea, когда используем FCKeditor */	var e = FCKeditorAPI.GetInstance('page')	e.UpdateLinkedField();		/* Собираем все данные со страницы и посылаем запрос */	$.ajax({		url: 'modules/action.php',		type: 'post',		dataType: 'text',		data: {			id: $('#id').val(),			lang: $('#lang').val(),			name: $('#name').val(),			header: $('#header').val(),			link: $('#link').val(),			title: $('#title').val(),			keywords: $('#keywords').val(),			description: $('#description').val(),			page: $('#page').val(),			show: show,         enabled: enabled,			subm: true,			ajax: true		},		success: onSubmitContentSuccess,		error: onSubmitContentError	});		return false;}/** * OK! Положительный ответ от сохранения странички ajax`ом */function onSubmitContentSuccess(result) {	/* Если вернулась еденичка, то все ок, если нет - отсылаем форму */	switch (result) {		case '1':			$('#save_msg').html('Окей!').delay(500).fadeOut('slow');			break;		default:			onSubmitContentError();	}      /* А это мы таким не хитрым способом меняем название в меню */   var id_active_href = '#' + $('#id').val() + '-menu';   $(id_active_href).text($('#name').val());   }/** * BAD! Отрицательный ответ от сохранения контента ajax`ом */function onSubmitContentError() {	/*	 Отправляем форму дедовским способом,	 если через ajax не получилось	*/	document.forms[0].submit();}/** * Удалить?! */function confirmDelete() {	 return confirm('Вы действительно хотите это удалить или вы случайно на это клацнули?', 'Удалить?');}