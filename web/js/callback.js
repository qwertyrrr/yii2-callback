var callbackApp = {
	init: function() {
		$('#callbackSubmit').on('click', this.callbackSubmit);
	},
	callbackSubmit: function( event ) {
		var data = $('#callback-form').serialize();
		$.post('/backend/web/callback/callback/create-ajax', data);
	}
}

callbackApp.init();