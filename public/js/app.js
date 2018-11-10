/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

$('.multiple-items').slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 3
});

$('.carousel').slick({
	infinite: true,
	dots: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false
});

$('.products-container').slick({
	dots: false,
	infinite: true,
	speed: 300,
	slidesToShow: 4,
	slidesToScroll: 4,
	prevArrow: '<button type="button" class="slick-prev"></button>',
	nextArrow: '<button type="button" class="slick-next"></button>',
	responsive: [{
		breakpoint: 992,
		settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true
		}
	}, {
		breakpoint: 768,
		settings: {
			infinite: true,
			slidesToShow: 2,
			slidesToScroll: 2
		}
	}, {
		breakpoint: 480,
		settings: {
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	}]
});

$('#collection-selector').change(function () {
	var selectedcollection = $('#collection-selector').val();
	console.log(selectedcollection);
	$('.colection-container').hide();
	$('.colection-container.' + selectedcollection).show();
});

$('a[href*="#"]').on('click', function (e) {
	e.preventDefault();
	$('html, body').animate({
		scrollTop: $($(this).attr('href')).offset().top
	}, 500, 'linear');
	$('.navbar-toggler').removeClass('collapsed');
	$('.navbar-toggler').attr('aria-expanded', 'false');
	$('.navbar-collapse').removeClass('show');
});

$(window).scroll(function () {
	var scroll = $(window).scrollTop();
	if (scroll >= 420) {
		$('.navbar').addClass('transparent');
	} else {
		$('.navbar').removeClass('transparent');
	}
});

$(function () {
	var formSettings = {
		singleError: function singleError($field, rules) {
			$field.closest('.form-group').removeClass('valid').addClass('error');
			$('.text-danger').fadeIn();
		},
		singleSuccess: function singleSuccess($field, rules) {
			$field.closest('.form-group').removeClass('error').addClass('valid');
			$('.text-danger').fadeOut();
		},
		overallSuccess: function overallSuccess() {
			var form = $('#contactForm'),
			    nombre = form.find("input[name='nombre']").val(),
			    email = form.find("input[name='correo']").val(),
			    telefono = form.find("input[name='telefono']").val(),
			    comentario = form.find("textarea[name='mensaje']").val(),
			    _token = form.find("input[name='_token']").val(),
			    action = form.attr("action"),
			    url = action;

			var posting = $.post(url, { nombre: nombre, telefono: telefono, email: email, _token: _token, comentario: comentario });
			posting.done(function (data) {
				$('#contactForm')[0].reset();
				$('.sent_mail_alert').fadeIn().delay(3000).fadeOut();
				console.log('email sent! \n' + data);
			});
		},
		overallError: function overallError($form, fields) {/*Do nothing, just show the error fields*/},
		autoDetect: true, debug: true
	};
	var $validate = $('#contactForm').validate(formSettings).data('validate');
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);