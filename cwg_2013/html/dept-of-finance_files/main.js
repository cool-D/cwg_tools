$(document).ready(function(){
		
		//$('.alert').animate({opacity: 0.9}, 3000).fadeOut(1000);
		
		$('#time-left-icon').tooltip();
		$('.next-hint-button').tooltip();
				
		$('.flag-hint').popover({ placement: 'bottom', trigger: 'hover' });
		
		$('.modal').on('shown', function() { $('input:text:visible:first', this).focus(); });
	
});
