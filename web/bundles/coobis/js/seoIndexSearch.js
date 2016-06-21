$(function(){
	$("#rank-up").change(function(){
		$('#zong').find('.row').hide();
		var jj = $('#zong').find('.row');
		for (var i = 0; i < jj.length; i++) {
			if(eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) < eval($('#rank-up').val()) &&
				eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) > eval($('#rank-down').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) < eval($('#subrank-up').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) > eval($('#subrank-down').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) < eval($('#pageauth-up').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) > eval($('#pageauth-down').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) < eval($('#domainAuth-up').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) > eval($('#domainAuth-down').val())
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
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) > eval($('#subrank-down').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) < eval($('#pageauth-up').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) > eval($('#pageauth-down').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) < eval($('#domainAuth-up').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) > eval($('#domainAuth-down').val())

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
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) > eval($('#subrank-down').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) < eval($('#pageauth-up').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) > eval($('#pageauth-down').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) < eval($('#domainAuth-up').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) > eval($('#domainAuth-down').val())

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
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) > eval($('#subrank-down').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) < eval($('#pageauth-up').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) > eval($('#pageauth-down').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) < eval($('#domainAuth-up').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) > eval($('#domainAuth-down').val())

			)
			{$(jj[i]).show();}
		}
	}).change();
})
$(function(){
	$("#pageauth-down").change(function(){
		$('#zong').find('.row').hide();
		var jj = $('#zong').find('.row');
		for (var i = 0; i < jj.length; i++) {
			if(eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) < eval($('#rank-up').val()) &&
				eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) > eval($('#rank-down').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) < eval($('#subrank-up').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) > eval($('#subrank-down').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) < eval($('#pageauth-up').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) > eval($('#pageauth-down').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) < eval($('#domainAuth-up').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) > eval($('#domainAuth-down').val())
			)
			{$(jj[i]).show();}
		}
	}).change();
})
$(function(){
	$("#pageauth-up").change(function(){
		$('#zong').find('.row').hide();
		var jj = $('#zong').find('.row');
		for (var i = 0; i < jj.length; i++) {
			if(eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) < eval($('#rank-up').val()) &&
				eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) > eval($('#rank-down').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) < eval($('#subrank-up').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) > eval($('#subrank-down').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) < eval($('#pageauth-up').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) > eval($('#pageauth-down').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) < eval($('#domainAuth-up').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) > eval($('#domainAuth-down').val())
			)
			{$(jj[i]).show();}
		}
	}).change();
})
$(function(){
	$("#domainAuth-down").change(function(){
		$('#zong').find('.row').hide();
		var jj = $('#zong').find('.row');
		for (var i = 0; i < jj.length; i++) {
			if(eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) < eval($('#rank-up').val()) &&
				eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) > eval($('#rank-down').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) < eval($('#subrank-up').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) > eval($('#subrank-down').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) < eval($('#pageauth-up').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) > eval($('#pageauth-down').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) < eval($('#domainAuth-up').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) > eval($('#domainAuth-down').val())
			)
			{$(jj[i]).show();}
		}
	}).change();
})
$(function(){
	$("#domainAuth-up").change(function(){
		$('#zong').find('.row').hide();
		var jj = $('#zong').find('.row');
		for (var i = 0; i < jj.length; i++) {
			if(eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) < eval($('#rank-up').val()) &&
				eval($(jj[i]).find('.autoridad_rank').find('.puntuacion_small').text()) > eval($('#rank-down').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) < eval($('#subrank-up').val()) &&
				eval($(jj[i]).find('.subrank').find('.puntuacion_small').text()) > eval($('#subrank-down').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) < eval($('#pageauth-up').val()) &&
				eval($(jj[i]).find('.pageauthority').find('.puntuacion_small').text()) > eval($('#pageauth-down').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) < eval($('#domainAuth-up').val()) &&
				eval($(jj[i]).find('.domainauthority').find('.puntuacion_small').text()) > eval($('#domainAuth-down').val())
			)
			{$(jj[i]).show();}
		}
	}).change();
})