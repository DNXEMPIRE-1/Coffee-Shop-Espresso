/**
 * Alerts
 */

var alert = (function() {

	// Config
	// ======

	var alertLifetime = 5000;

	// Methods
	// =======

	var generate = function(type, message) {
		var newAlert = $('<div class="alert alert-' + type + ' fade show" id="page-alert" role="alert">' + message + '</div>');

		// Append new alert
		$('body').append(newAlert);

		// Remove new alert
		setTimeout(function() {
			newAlert.alert('close');
		}, alertLifetime);
	};

	// Events
	// ======

	$(document).on('touche.alert.show', function(e, type, message) {
		generate(type, message);
	});

})();