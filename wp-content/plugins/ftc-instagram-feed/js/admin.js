(function($) {
	$(document).ready(function() {

		/* Dynamicaly change span text based on slider input value  */
		$('body').on("input", '.ftc-instagram-widget-input-slider', function(e) {
			$(this).next().text($(this).val());
		});

	});

})(jQuery);