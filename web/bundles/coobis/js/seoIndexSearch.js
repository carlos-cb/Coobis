$(function(){
	$("#rank-up").change(function(){
		$('#zong').find('.row').hide();
		var jj = $('#zong').find('.row');
		for (var i = 0; i < jj.length; i++) {
			if(eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) < eval($('#rank-up').val()) &&
				eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) > eval($('#rank-down').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) < eval($('#subrank-up').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) > eval($('#subrank-down').val())
			)
			{$(jj[i]).show();}
		}
	}).change();
})
$(function(){
	$("#rank-down").change(function(){
		$('#zong').find('.row').hide();
		var jj = $('#zong').find('.row');
		for (var i = 0; i < jj.length; i++) {
			if(eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) < eval($('#rank-up').val()) &&
				eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) > eval($('#rank-down').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) < eval($('#subrank-up').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) > eval($('#subrank-down').val())
			)
			{$(jj[i]).show();}
		}
	}).change();
})
$(function(){
	$("#subrank-up").change(function(){
		$('#zong').find('.row').hide();
		var jj = $('#zong').find('.row');
		for (var i = 0; i < jj.length; i++) {
			if(eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) < eval($('#rank-up').val()) &&
				eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) > eval($('#rank-down').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) < eval($('#subrank-up').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) > eval($('#subrank-down').val())
			)
			{$(jj[i]).show();}
		}
	}).change();
})
$(function(){
	$("#subrank-down").change(function(){
		$('#zong').find('.row').hide();
		var jj = $('#zong').find('.row');
		for (var i = 0; i < jj.length; i++) {
			if(eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) < eval($('#rank-up').val()) &&
				eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) > eval($('#rank-down').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) < eval($('#subrank-up').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) > eval($('#subrank-down').val())
			)
			{$(jj[i]).show();}
		}
	}).change();
})