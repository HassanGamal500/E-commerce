$(function () {

	'use strict';

	// Switch Between Login & Signup

	$('.login-page h1 span').click(function () {

		$(this).addClass('selected').siblings().removeClass('selected');

		$('.login-page form').hide();

		$('.' + $(this).data('class')).fadeIn(200);

	});

	// Trigger The SelectBoxIt

	$("select").selectBoxIt({

		autoWidth: false

	});

	// Hide Placeholder On Form Focus

	$('[placeholder]').focus(function () {

		$(this).attr('data-text', $(this).attr('placeholder'));

		$(this).attr('placeholder', '');

	}).blur(function () {

		$(this).attr('placeholder', $(this).attr('data-text'));

	});

	// Add Asterisk On Required Field

	$('input').each(function () {

		if ($(this).attr('required') === 'required') {

			$(this).after('<span class="asterisk">*</span>');

		}

	});


	$('.confirm').click(function () {

		return confirm('Are You Sure ?');

	});

	$('.live').keyup(function () {

		$($(this).data('class')).text($(this).val());

	});

});