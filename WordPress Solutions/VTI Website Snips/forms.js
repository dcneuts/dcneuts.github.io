$(function () {

//Experimental Script
	// Define new validator
	// Assign keywords for scripting
	FormValidation.Validator.phoneNumber = {
		html5Attributes: {
			message: 'message',
			autoplaceholder: 'autoPlaceholder',
			preferredcountries: 'preferredCountries',
			utilsscript: 'utilsScript'
		},

		// Determine the preferred countries
		init: function(validator, $field, options) {

			let autoPlaceholder    = options.autoPlaceholder === true || options.autoPlaceholder === 'true',
				preferredCountries = options.preferredCountries || 'us, ca, gb, au, mx';
			if ('string' === typeof preferredCountries) {
				preferredCountries = preferredCountries.split(',');
			}

			// Attach the intlTelInput on field
			$field.intlTelInput({
				utilsScript: options.utilsScript || '',
				autoPlaceholder: autoPlaceholder,
				preferredCountries: preferredCountries
			});

			// Revalidate the field when changing the country
			let $form     = validator.getForm(),
				fieldName = $field.attr('data-fv-phonenumber');
			$form.on('click.country.phoneNumber', '.country-list', function() {
				$form.formValidation('revalidateField', fieldName);
			});
		},

		// Destroy input and turn off feature as-needed
		destroy: function(validator, $field, options) {
			$field.intlTelInput('destroy');
			validator.getForm().off('click.country.phoneNumber');
		},

		validate: function(validator, $field, options) {
			return $field.val() === '' || $field.intlTelInput('isValidNumber');
		}
	};

// All Fields Validation Script
	$('#main-contact-form').formValidation({
		framework: 'bootstrap',
		excluded: ':disabled',
		err: {
			container: 'popover'
		},
		icon: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh'
		},
		addOns: {
			reCaptcha2: {
				element: 'captchaContainer',
				language: 'en',
				theme: 'light',
				siteKey: '6Lc8H2QUAAAAAH4GacvfdLtLadp5LaNAa3JSlky6',
				url: 'inc/recaptcha-be.php',
				timeout: 3600,
				message: 'The captcha is not valid.'
			}
		},
		fields: {
			phoneNumber: {
				validators: {
					phoneNumber: {
						utilsScript: 'vendor/intl-tel-input/build/js/utils.js',
						autoPlaceholder: true,
						preferredCountries: 'us,ca,gb,au,mx',
						message: 'The phone number is not valid.'
					}
				}
			},
			name: {
				validators: {
					notEmpty: {
						message: 'Your first and last name is required.'
					},
					stringLength: {
						min: 6,
						max: 40,
						message: 'Your name must be more than 6 and less than 40 chars.'
					}
				}
			},
			title: {
				validators: {
					notEmpty: {
						message: 'Your title is required.'
					},
					stringLength: {
						min: 6,
						max: 40,
						message: 'Your title must be more than 6 and less than 40 chars.'
					}
				}
			},
			company: {
				validators: {
					notEmpty: {
						message: 'Your company is required.'
					},
					stringLength: {
						min: 2,
						max: 40,
						message: 'Your company name must be more than 2 and less than 40 chars.'
					}
				}
			},
			email: {
				validators: {
					notEmpty: {
						message: 'Your email address is required.'
					},
					emailAddress: {
						message: 'Please use a valid email address.'
					}
				}
			},
			message: {
				validators: {
					notEmpty: {
						message: 'Your message is required.'
					},
					stringLength: {
						min: 60,
						max: 600,
						message: 'Your title must be more than 60 and less than 600 chars.'
					}
				}
			},
			'g-recaptcha-response': {
				err: '#captchaMessage'
			}
		}
	}).on('click', '.country-list', function() {
		$('#main-contact-form').formValidation('revalidateField', 'phoneNumber');

		$('#resetButton').on('click', function() {
			// Reset the recaptcha
			FormValidation.AddOn.reCaptcha2.reset('captchaContainer');

			// Reset form
			$('#main-contact-form').formValidation('resetForm', true);
		})
	});

});
