/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/pages/animation.init.js":
/*!**********************************************!*\
  !*** ./resources/js/pages/animation.init.js ***!
  \**********************************************/
/***/ (() => {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Animation demo only\n*/\nfunction testAnim(x) {\n  $('#animationSandbox').removeClass().addClass('animate__animated animate__' + x).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {\n    $(this).removeClass();\n  });\n}\n\n;\n$(document).ready(function () {\n  $('.js--triggerAnimation').click(function (e) {\n    e.preventDefault();\n    var anim = $('.js--animations').val();\n    testAnim(anim);\n  });\n  $('.js--animations').change(function () {\n    var anim = $(this).val();\n    testAnim(anim);\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvYW5pbWF0aW9uLmluaXQuanM/YmM1YSJdLCJuYW1lcyI6WyJ0ZXN0QW5pbSIsIngiLCIkIiwicmVtb3ZlQ2xhc3MiLCJhZGRDbGFzcyIsIm9uZSIsImRvY3VtZW50IiwicmVhZHkiLCJjbGljayIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImFuaW0iLCJ2YWwiLCJjaGFuZ2UiXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUEsU0FBU0EsUUFBVCxDQUFrQkMsQ0FBbEIsRUFBcUI7QUFDakJDLEVBQUFBLENBQUMsQ0FBQyxtQkFBRCxDQUFELENBQXVCQyxXQUF2QixHQUFxQ0MsUUFBckMsQ0FBOEMsZ0NBQWdDSCxDQUE5RSxFQUFpRkksR0FBakYsQ0FBcUYsOEVBQXJGLEVBQXFLLFlBQVU7QUFDM0tILElBQUFBLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUMsV0FBUjtBQUNILEdBRkQ7QUFHSDs7QUFBQTtBQUVERCxDQUFDLENBQUNJLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVU7QUFDeEJMLEVBQUFBLENBQUMsQ0FBQyx1QkFBRCxDQUFELENBQTJCTSxLQUEzQixDQUFpQyxVQUFTQyxDQUFULEVBQVc7QUFDeENBLElBQUFBLENBQUMsQ0FBQ0MsY0FBRjtBQUNBLFFBQUlDLElBQUksR0FBR1QsQ0FBQyxDQUFDLGlCQUFELENBQUQsQ0FBcUJVLEdBQXJCLEVBQVg7QUFDQVosSUFBQUEsUUFBUSxDQUFDVyxJQUFELENBQVI7QUFDSCxHQUpEO0FBTUFULEVBQUFBLENBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCVyxNQUFyQixDQUE0QixZQUFVO0FBQ2xDLFFBQUlGLElBQUksR0FBR1QsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRVSxHQUFSLEVBQVg7QUFDQVosSUFBQUEsUUFBUSxDQUFDVyxJQUFELENBQVI7QUFDSCxHQUhEO0FBSUgsQ0FYRCIsInNvdXJjZXNDb250ZW50IjpbIi8qXG5UZW1wbGF0ZSBOYW1lOiBVYm9sZCAtIFJlc3BvbnNpdmUgQm9vdHN0cmFwIDQgQWRtaW4gRGFzaGJvYXJkXG5BdXRob3I6IENvZGVyVGhlbWVzXG5XZWJzaXRlOiBodHRwczovL2NvZGVydGhlbWVzLmNvbS9cbkNvbnRhY3Q6IHN1cHBvcnRAY29kZXJ0aGVtZXMuY29tXG5GaWxlOiBBbmltYXRpb24gZGVtbyBvbmx5XG4qL1xuXG5mdW5jdGlvbiB0ZXN0QW5pbSh4KSB7XG4gICAgJCgnI2FuaW1hdGlvblNhbmRib3gnKS5yZW1vdmVDbGFzcygpLmFkZENsYXNzKCdhbmltYXRlX19hbmltYXRlZCBhbmltYXRlX18nICsgeCkub25lKCd3ZWJraXRBbmltYXRpb25FbmQgbW96QW5pbWF0aW9uRW5kIE1TQW5pbWF0aW9uRW5kIG9hbmltYXRpb25lbmQgYW5pbWF0aW9uZW5kJywgZnVuY3Rpb24oKXtcbiAgICAgICAgJCh0aGlzKS5yZW1vdmVDbGFzcygpO1xuICAgIH0pO1xufTtcblxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcbiAgICAkKCcuanMtLXRyaWdnZXJBbmltYXRpb24nKS5jbGljayhmdW5jdGlvbihlKXtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICB2YXIgYW5pbSA9ICQoJy5qcy0tYW5pbWF0aW9ucycpLnZhbCgpO1xuICAgICAgICB0ZXN0QW5pbShhbmltKTtcbiAgICB9KTtcblxuICAgICQoJy5qcy0tYW5pbWF0aW9ucycpLmNoYW5nZShmdW5jdGlvbigpe1xuICAgICAgICB2YXIgYW5pbSA9ICQodGhpcykudmFsKCk7XG4gICAgICAgIHRlc3RBbmltKGFuaW0pO1xuICAgIH0pO1xufSk7ICAgICJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcGFnZXMvYW5pbWF0aW9uLmluaXQuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/pages/animation.init.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/pages/animation.init.js"]();
/******/ 	
/******/ })()
;