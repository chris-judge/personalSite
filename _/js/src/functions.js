function initAllFunctions(){
	setTimeout(function(){
		angular.element(document).ready(function() { 
			setTimeout(function(){
				$('.loader-wrap svg').addClass('hide');
				$('.ng-leave.active').removeClass('ng-leave').removeClass('active');
			}, 350);

			if($('.samples').length){
				samplesInit();
			}else{
				elScrollTo('body',0,0)
			}
			if($('.c-form').length){
				console.log('dasdas');
				contactInit();
			}

			anchorInit();
		});
	},500)
}



function elScrollTo(ele,speed,alter){
    $('html, body').animate({
        scrollTop: $(ele).offset().top + alter
    }, speed);
}

function samplesInit(){
	if(window.location.href.indexOf('/work') != -1){
		elScrollTo('.samples', 0, -25);
	}
}


function contactInit(){
      $('.submit-wrap input').unbind('click').bind('click', function(event) {
            event.preventDefault();
            $('.submit-wrap .loading-gif').addClass('active');
            if($('.ng-invalid').length){
                  $('input.ng-invalid').parent().addClass('error');
                  $('.submit-wrap .loading-gif').removeClass('active');
                  $('input.error-here').focus(function(event) {
                        $(this).removeClass('error-here');
                  });
            }else{
                  var grabName = $('.cfName').val();
                  var grabEmail = $('.cfEmail').val();
                  var grabPhone = $('.cfPhone').val();
                  var grabComments = $('.cfComments').val();

                  $('.hidden-form-foot .cfName input').text(grabName).val(grabName);
                  $('.hidden-form-foot .cfEmail input').text(grabEmail).val(grabEmail);
                  $('.hidden-form-foot .cfPhone input').text(grabPhone).val(grabPhone);
                  $('.hidden-form-foot .cfComments textarea').text(grabComments).val(grabComments);

                  $('.hidden-form-foot .gform_footer input[type="submit"]').click();
            }
      });
}

function anchorInit(){
	$('a').unbind().bind('click', function(event) {
		// console.log(event);
		// var saveThis = $(this);
		// if($(this).hasClass('pass')){
		// 	console.log('inside-pass');
		// }else{
		// 	if($(this).attr('target') != 'blank' && $(this).attr('href') != window.location.href){
		// 		event.preventDefault();
		// 		$('.loader-wrap svg').removeClass('hide');
		// 		$('.view-wrap').addClass('ng-leave').addClass('active');
		// 		$(this).addClass('pass');
		// 		setTimeout(function(){
		// 			console.log($('a[href="'+saveThis[0].href+'"].pass').length);
		// 			$('a.pass').click();
		// 		},250)
		// 	}
		// }
	});
}