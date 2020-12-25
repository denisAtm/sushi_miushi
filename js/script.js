var MGB;
$(function(){
	MGB=new MGbox();
	if($('#callmeform').size())
		bindFrmCall($('#callmeform'));

	$('a.call').on("click",function(){
		openCallFrm($(this).data('evnt'));
		return false;
	});

	bindFrmCalc();
});

function openCallFrm(evnt){
	var d=$('<div id="modal"><form id="callmeform" data-event="'+evnt+'" action="/" class="callmeform">'+
			'<button></button>'+
			'<b>узнать подробнее</b>'+
			'<p>оставьте заявку и наш специалист ответит на все ваши вопросы</p>'+
			'<label><input type="text" name="name" placeholder="Ваше имя" /></label>'+
			'<label><input type="text" name="phone" placeholder="Телефон*" required="required" /></label>'+
			'<input class="button" type="submit" value="Оставить заявку" />'+
		'</form></div>');
	bindFrmCall($('form',d),function(){
		$('form',d).slideUp(function(){
			d.remove();
		});
	});
	$('button',d).one("click",function(){
		$('form',d).slideUp(function(){
			d.remove();
		});
		return false;
	});
	$('body').append(d);
	$('form',d).slideDown();
}

function dialThx(){
	var d=$('<div id="modal">'+
		'<div class="dthx"><p>Спасибо, наши менеджеры свяжутся с вами в ближайшее время</p><a href="#" class="button" onClick="return false">ОК</a></div>'+
		'</div>');
	$('.button',d).one("click",function(){
		$('.dthx',d).slideUp(function(){
			d.remove();
		});
	});
	$('body').append(d);
	$('.dthx',d).slideDown();
}
