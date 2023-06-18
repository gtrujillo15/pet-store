(function ($, root, undefined) {
	$(function () {
		'use strict';

        let path = window.location.href;
        $('#primary-menu > li > a').each(function() {
            if (this.href === path) {
            $(this).parent('li').addClass('active');
            }
        });

    });
})(jQuery, this);