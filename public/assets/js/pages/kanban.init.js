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

/***/ "./resources/js/pages/kanban.init.js":
/*!*******************************************!*\
  !*** ./resources/js/pages/kanban.init.js ***!
  \*******************************************/
/***/ (() => {

eval("/*\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\nAuthor: CoderThemes\nWebsite: https://coderthemes.com/\nContact: support@coderthemes.com\nFile: Kanban Board init js\n*/\n!function ($) {\n  \"use strict\";\n\n  var KanbanBoard = function KanbanBoard() {\n    this.$body = $(\"body\");\n  }; //initializing various charts and components\n\n\n  KanbanBoard.prototype.init = function () {\n    $('.tasklist').each(function () {\n      Sortable.create($(this)[0], {\n        group: 'shared',\n        animation: 150,\n        ghostClass: 'bg-ghost'\n      });\n    });\n  }, //init KanbanBoard\n  $.KanbanBoard = new KanbanBoard(), $.KanbanBoard.Constructor = KanbanBoard;\n}(window.jQuery), //initializing KanbanBoard\nfunction ($) {\n  \"use strict\";\n\n  $.KanbanBoard.init();\n}(window.jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMva2FuYmFuLmluaXQuanM/MzkwMiJdLCJuYW1lcyI6WyIkIiwiS2FuYmFuQm9hcmQiLCIkYm9keSIsInByb3RvdHlwZSIsImluaXQiLCJlYWNoIiwiU29ydGFibGUiLCJjcmVhdGUiLCJncm91cCIsImFuaW1hdGlvbiIsImdob3N0Q2xhc3MiLCJDb25zdHJ1Y3RvciIsIndpbmRvdyIsImpRdWVyeSJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFFQSxDQUFFLFVBQVNBLENBQVQsRUFBWTtBQUNiOztBQUVBLE1BQUlDLFdBQVcsR0FBRyxTQUFkQSxXQUFjLEdBQVc7QUFDNUIsU0FBS0MsS0FBTCxHQUFhRixDQUFDLENBQUMsTUFBRCxDQUFkO0FBQ0EsR0FGRCxDQUhhLENBT2I7OztBQUNBQyxFQUFBQSxXQUFXLENBQUNFLFNBQVosQ0FBc0JDLElBQXRCLEdBQTZCLFlBQVc7QUFDdkNKLElBQUFBLENBQUMsQ0FBQyxXQUFELENBQUQsQ0FBZUssSUFBZixDQUFvQixZQUFZO0FBQy9CQyxNQUFBQSxRQUFRLENBQUNDLE1BQVQsQ0FBZ0JQLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUSxDQUFSLENBQWhCLEVBQTRCO0FBQzNCUSxRQUFBQSxLQUFLLEVBQUUsUUFEb0I7QUFFM0JDLFFBQUFBLFNBQVMsRUFBRSxHQUZnQjtBQUczQkMsUUFBQUEsVUFBVSxFQUFFO0FBSGUsT0FBNUI7QUFNQSxLQVBEO0FBUUEsR0FURCxFQVdBO0FBQ0FWLEVBQUFBLENBQUMsQ0FBQ0MsV0FBRixHQUFnQixJQUFJQSxXQUFKLEVBWmhCLEVBWWlDRCxDQUFDLENBQUNDLFdBQUYsQ0FBY1UsV0FBZCxHQUNqQ1YsV0FiQTtBQWVBLENBdkJDLENBdUJBVyxNQUFNLENBQUNDLE1BdkJQLENBQUYsRUF5QkE7QUFDQSxVQUFTYixDQUFULEVBQVk7QUFDWDs7QUFDQUEsRUFBQUEsQ0FBQyxDQUFDQyxXQUFGLENBQWNHLElBQWQ7QUFDQSxDQUhELENBR0VRLE1BQU0sQ0FBQ0MsTUFIVCxDQTFCQSIsInNvdXJjZXNDb250ZW50IjpbIi8qXG5UZW1wbGF0ZSBOYW1lOiBVYm9sZCAtIFJlc3BvbnNpdmUgQm9vdHN0cmFwIDQgQWRtaW4gRGFzaGJvYXJkXG5BdXRob3I6IENvZGVyVGhlbWVzXG5XZWJzaXRlOiBodHRwczovL2NvZGVydGhlbWVzLmNvbS9cbkNvbnRhY3Q6IHN1cHBvcnRAY29kZXJ0aGVtZXMuY29tXG5GaWxlOiBLYW5iYW4gQm9hcmQgaW5pdCBqc1xuKi9cblxuISBmdW5jdGlvbigkKSB7XG5cdFwidXNlIHN0cmljdFwiO1xuXG5cdHZhciBLYW5iYW5Cb2FyZCA9IGZ1bmN0aW9uKCkge1xuXHRcdHRoaXMuJGJvZHkgPSAkKFwiYm9keVwiKVxuXHR9O1xuXG5cdC8vaW5pdGlhbGl6aW5nIHZhcmlvdXMgY2hhcnRzIGFuZCBjb21wb25lbnRzXG5cdEthbmJhbkJvYXJkLnByb3RvdHlwZS5pbml0ID0gZnVuY3Rpb24oKSB7XG5cdFx0JCgnLnRhc2tsaXN0JykuZWFjaChmdW5jdGlvbiAoKSB7XG5cdFx0XHRTb3J0YWJsZS5jcmVhdGUoJCh0aGlzKVswXSwge1xuXHRcdFx0XHRncm91cDogJ3NoYXJlZCcsXG5cdFx0XHRcdGFuaW1hdGlvbjogMTUwLFxuXHRcdFx0XHRnaG9zdENsYXNzOiAnYmctZ2hvc3QnXG5cdFx0XHR9KTtcblx0XHRcdFxuXHRcdH0pO1x0XG5cdH0sXG5cblx0Ly9pbml0IEthbmJhbkJvYXJkXG5cdCQuS2FuYmFuQm9hcmQgPSBuZXcgS2FuYmFuQm9hcmQsICQuS2FuYmFuQm9hcmQuQ29uc3RydWN0b3IgPVxuXHRLYW5iYW5Cb2FyZFxuXG59KHdpbmRvdy5qUXVlcnkpLFxuXG4vL2luaXRpYWxpemluZyBLYW5iYW5Cb2FyZFxuZnVuY3Rpb24oJCkge1xuXHRcInVzZSBzdHJpY3RcIjtcblx0JC5LYW5iYW5Cb2FyZC5pbml0KClcbn0od2luZG93LmpRdWVyeSk7Il0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9wYWdlcy9rYW5iYW4uaW5pdC5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/pages/kanban.init.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/pages/kanban.init.js"]();
/******/ 	
/******/ })()
;