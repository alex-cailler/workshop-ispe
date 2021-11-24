(self["webpackChunk"] = self["webpackChunk"] || []).push([["/assets/js/app"],{

/***/ "./src/js/app.js":
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");

__webpack_require__(/*! ./swiper */ "./src/js/swiper.js");

__webpack_require__(/*! ./nav */ "./src/js/nav.js");

/***/ }),

/***/ "./src/js/nav.js":
/*!***********************!*\
  !*** ./src/js/nav.js ***!
  \***********************/
/***/ (() => {

window.addEventListener('scroll', function () {
  var header = document.querySelector('nav.navbar');
  var windowPosition = window.scrollY > 0;
  header.classList.toggle('scrollingActive', windowPosition);
});

/***/ }),

/***/ "./src/js/swiper.js":
/*!**************************!*\
  !*** ./src/js/swiper.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/swiper.esm.js");
/* harmony import */ var swiper_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! swiper/css */ "./node_modules/swiper/swiper.min.css");
/* harmony import */ var swiper_css_navigation__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! swiper/css/navigation */ "./node_modules/swiper/modules/navigation/navigation.min.css");
/* harmony import */ var swiper_css_pagination__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! swiper/css/pagination */ "./node_modules/swiper/modules/pagination/pagination.min.css");




swiper__WEBPACK_IMPORTED_MODULE_0__["default"].use([swiper__WEBPACK_IMPORTED_MODULE_0__.Navigation, swiper__WEBPACK_IMPORTED_MODULE_0__.Pagination]);
var swiper = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.swiper-container', {
  slidesPerView: 3,
  grabCursor: true,
  navigation: {
    nextEl: '.swiper-next',
    prevEl: '.swiper-prev'
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 30,
      slidesPerGroup: 1
    },
    480: {
      slidesPerView: 1,
      spaceBetween: 20,
      slidesPerGroup: 1
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3
    }
  }
});
var swiperContents = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.swiper-contents', {
  slidesPerView: 1,
  slidesPerGroup: 1,
  grabCursor: true,
  controller: {
    control: swiperImages
  }
});
var swiperImages = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.swiper-images', {
  slidesPerView: 1,
  grabCursor: true
});
var swiperAdvantages = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.swiper-advantages', {
  slidesPerView: 1,
  grabCursor: true,
  controller: {
    control: swiperImages
  }
});

/***/ }),

/***/ "./src/scss/app.scss":
/*!***************************!*\
  !*** ./src/scss/app.scss ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["assets/css/app","/assets/js/vendor"], () => (__webpack_exec__("./src/js/app.js"), __webpack_exec__("./src/scss/app.scss")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);