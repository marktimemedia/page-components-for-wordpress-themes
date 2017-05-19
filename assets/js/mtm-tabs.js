(function($) {

	$(document).ready(function(){

		// make sure all content shows by default if JS not enabled
		$('li[data-tab!="tab-1"]').removeClass('current');
		$('div.mtm-tabs--content:not(#tab-1)').removeClass('current');
		
		$('ul.mtm-tabs--title-container li').click(function(){
			var tab_id = $(this).attr('data-tab');

			$('ul.mtm-tabs--title-container li').removeClass('current');
			$('.mtm-tabs--content').removeClass('current');

			$(this).addClass('current');
			$("#"+tab_id).addClass('current');
		});

	});

})( jQuery );