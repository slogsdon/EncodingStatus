(function (window, document, $, undefined) {
	$(document).ready(function () {
		$('#left nav.mobile select').change(function () {
			var target = $(this).attr('value');
			if (target !== undefined) {
				window.location.href = target;
			}
		});
	});
})(window, document, jQuery);