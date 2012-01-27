$(document).ready(function() {
	$('ul#filter a').click(function() {
		$(this).css('outline','none');
		$('ul#filter .current').removeClass('current');
		$(this).parent().addClass('current');
		
		var filterVal = $(this).text().toLowerCase().replace(' ','-');
				
		if(filterVal == 'all') {
			$('ul.products li.hidden').fadeIn('fast').removeClass('hidden');
		} else {
			
			$('ul.products li').each(function() {
				if(!$(this).hasClass(filterVal)) {
					$(this).fadeOut('fast').addClass('hidden');
				} else {
					$(this).fadeIn('fast').removeClass('hidden');
				}
			});
		}
		
		return false;
	});
});