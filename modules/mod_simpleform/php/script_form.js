$(document).ready(function(){
	//выводим нужный текст из php-файла
	$(".scriptzapis").load("/modules/mod_simpleform/php/text.php");
	$(".scriptzapisotkaz").load("/modules/mod_simpleform/php/text_otkaz.php");
	$(".scriptzapisplat").load("/modules/mod_simpleform/php/text_plat.php");
	//перенаправляем на страницу с платной записью при отсутствии направления
	$(".naprav").change(function() {
		var changedValue = $(this).val();
		if (changedValue == 'нет') {
			// Поведение браузера будет подобно HTTP-редиректу:
			//window.location.replace("/index.php?option=com_content&view=article&id=402&Itemid=76");
			// Поведение браузера будет подобно клику по ссылке:
			window.location.href = "/index.php?option=com_content&view=article&id=402&Itemid=76";
		}
	});

    //скрываем выпадающие списки Время, День недели (как для врачей, так и для заведующих отделением), Врач, ЗАведующий отделением.
    $("p.dayzavotd").css({'display':'none'});
    $("p.timezavotd").css({'display':'none'});
    $("p.timevrach").css({'display':'none'});
    $("p.dayvrach").css({'display':'none'});
    $("p.zavotd").css({'display':'none'});
    $("p.vrach").css({'display':'none'});

	//отключаем выбор заведующего отделением при выборе врача и наоборот, а также выдаем разное время для записи в зависимости от того, врач или завотделением выбран.
	$("input.specialist").change(function() {
		var changedValue = $(this).val();
		var zavotd = $("p.zavotd").html();
		
		var changedValue = $(this).val();
		var vrach = $("p.vrach").html();
		
		if (changedValue == 'Врач') {
			$("p.zavotd").css({'display':'none'});
			$("p.vrach").css({'display':'block'});
            $("p.dayzavotd").css({'display':'none'});
            $("p.timezavotd").css({'display':'none'});
            $("p.timevrach").css({'display':'block'});
            $("p.dayvrach").css({'display':'block'});

		} else if (changedValue == 'Заведующий отделением') {
			$("p.vrach").css({'display':'none'});
			$("p.zavotd").css({'display':'block'});
            $("p.dayzavotd").css({'display':'block'});
            $("p.timezavotd").css({'display':'block'});
            $("p.timevrach").css({'display':'none'});
            $("p.dayvrach").css({'display':'none'});
		} else {
			$("p.vrach").css({'display':'block'});
			$("p.zavotd").css({'display':'block'});
            $("p.dayzavotd").css({'display':'none'});
            $("p.timezavotd").css({'display':'none'});
            $("p.timevrach").css({'display':'block'});
            $("p.dayvrach").css({'display':'block'});
		}
	});
});