$(document).ready(function(){
	var burger = 0;
	$(document).on('click', '.burger', function(){
		if(burger == 0){
			$('.admin-menu').addClass('side-in');
			$('.contents').addClass('content-in');
			burger++;
		}else{
			$('.admin-menu').removeClass('side-in');
			$('.contents').removeClass('content-in');
			burger--;
		}
	});

	$(document).on('click' , '.drop-bar', function(){
		$('.navbar-img').append('<div class="drop-hide"></div>');
		$('.dropmenu').addClass('dropmenu-ac');
	});
	$(document).on('click', '.drop-hide', function(){
		$(this).remove();
		$('.dropmenu').removeClass('dropmenu-ac');
	});

	var adminmenu = $('#data').attr('data-id');
	$(adminmenu+' .submenu').css({'max-height':'initial'});
	$(adminmenu+' .admin-menu-first').removeClass('admin-menu-first').addClass('admin-menu-active');

	$(document).on('click', '.admin-menu-first', function(){
		var panel = this.nextElementSibling;
		$('.admin-menu-active').removeClass('admin-menu-active').addClass('admin-menu-first');
		$('.submenu').css({'max-height':'0px'});
		$(this).removeClass('admin-menu-first').addClass('admin-menu-active');
		panel.style.maxHeight = panel.scrollHeight + "px";
	});
	$(document).on('click', '.admin-menu-active', function(){
		$('.submenu').css({'max-height':'0px'});
		$('.admin-menu-active').removeClass('admin-menu-active').addClass('admin-menu-first');
	});

	var checkid = document.getElementsByClassName('check');

	function check(){
	    for(var i = 0; i < checkid.length; i++){
	    	checkid[i].checked=true
	    }
	}
	
	function uncheck(){
	    for(var i = 0; i < checkid.length; i++){
	    	checkid[i].checked=false
	    }
	}

	var inputChecked = document.getElementsByClassName('in-check');

	function inputCheck(){
		var inc = [];
		for(var i = 0; i < inputChecked.length; i++){
			var sinc = inputChecked[i].checked;
			if(sinc != false){
				inc[i] = inputChecked[i].value;
			}
		}

		return inc;
	}

	$(document).on('click', '.check-true', function(){
		$('.check-true').removeClass('check-true').addClass('check-false');
		check();
		$('.in-del').val(inputCheck());
	});

	$(document).on('click', '.check-false', function(){
		$('.check-false').removeClass('check-false').addClass('check-true');
		uncheck();
		$('.in-del').val(inputCheck());
	});

	$('.check', this).click(function(){
		$('.check-false').removeClass('check-false').addClass('check-true');
		document.getElementById('all-check').checked=false
		$('.in-del').val(inputCheck());
	});
});