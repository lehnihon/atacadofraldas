( function( $ ) {
	$(function() {
        $(document).on('ready', function () {
            $('.col-md-3 article').each(function(index){
                $(this).delay(500*index).fadeIn( 400 );   
            });
			
        });
	});
} )( jQuery );