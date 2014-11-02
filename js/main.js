$(document).ready()
{
	$('header .menu a').click(function(e)
	{
		e.preventDefault();
		
		var currentSectionLink = $('header .menu a.active');
		var currentSection = currentSectionLink.data('section');
		var newSection = $(this).data('section');
		
		if(newSection != currentSection)
		{
			$('header .menu a').removeClass('active');
			$(this).addClass('active');
			$('.internalSection').hide();
			
			if(newSection != 'home')
			{
				$('.'+newSection).show();
			}
		}
	});	
};