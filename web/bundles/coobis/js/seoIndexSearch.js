		$(function(){
			$("#filterNameRankUp").keyup(function(){
				$('#zong').find('ul').hide();
				var jj = $('#zong').find('ul');
				for (var i = 0; i < jj.length; i++) {
					if(eval($(jj[i]).find('#rank').text()) < eval($('#filterNameRankUp').val()) &&
							eval($(jj[i]).find('#rank').text()) > eval($("#filterNameRankDown").val()) &&
							eval($(jj[i]).find('#subrank').text()) < eval($('#filterSubdomainRankUp').val()) &&
							eval($(jj[i]).find('#subrank').text()) > eval($("#filterSubdomainRankDown").val())
					)
					{$(jj[i]).show();}
				}

			}).keyup();
		})
		$(function(){
			$("#filterNameRankDown").keyup(function(){
				$('#zong').find('ul').hide();
				var jj = $('#zong').find('ul');
				for (var i = 0; i < jj.length; i++) {
					if(eval($(jj[i]).find('#rank').text()) < eval($('#filterNameRankUp').val()) &&
							eval($(jj[i]).find('#rank').text()) > eval($("#filterNameRankDown").val()) &&
							eval($(jj[i]).find('#subrank').text()) < eval($('#filterSubdomainRankUp').val()) &&
							eval($(jj[i]).find('#subrank').text()) > eval($("#filterSubdomainRankDown").val())
					)
					{$(jj[i]).show();}
				}
			}).keyup();
		})
		$(function(){
			$("#filterSubdomainRankUp").keyup(function(){
				$('#zong').find('ul').hide();
				var jj = $('#zong').find('ul');
				for (var i = 0; i < jj.length; i++) {
					if(eval($(jj[i]).find('#rank').text()) < eval($('#filterNameRankUp').val()) &&
							eval($(jj[i]).find('#rank').text()) > eval($("#filterNameRankDown").val()) &&
							eval($(jj[i]).find('#subrank').text()) < eval($('#filterSubdomainRankUp').val()) &&
							eval($(jj[i]).find('#subrank').text()) > eval($("#filterSubdomainRankDown").val())
					)
					{$(jj[i]).show();}
				}
			}).keyup();
		})
		$(function(){
			$("#filterSubdomainRankDown").keyup(function(){
				$('#zong').find('ul').hide();
				var jj = $('#zong').find('ul');
				for (var i = 0; i < jj.length; i++) {
					if(eval($(jj[i]).find('#rank').text()) < eval($('#filterNameRankUp').val()) &&
							eval($(jj[i]).find('#rank').text()) > eval($("#filterNameRankDown").val()) &&
							eval($(jj[i]).find('#subrank').text()) < eval($('#filterSubdomainRankUp').val()) &&
							eval($(jj[i]).find('#subrank').text()) > eval($("#filterSubdomainRankDown").val())
					)
					{$(jj[i]).show();}
				}
			}).keyup();
		})