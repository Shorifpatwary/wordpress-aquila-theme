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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/img/background-image-jsldkjwoei.jpg":
/*!*************************************************!*\
  !*** ./src/img/background-image-jsldkjwoei.jpg ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("data:image/jpeg;base64,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");

/***/ }),

/***/ "./src/img/cats.jpg":
/*!**************************!*\
  !*** ./src/img/cats.jpg ***!
  \**************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (__webpack_require__.p + "src/img/cats6af492b51ecbfc6f063a67cb2ca5bf45.jpg");

/***/ }),

/***/ "./src/js/carousel/index.js":
/*!**********************************!*\
  !*** ./src/js/carousel/index.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

(function ($) {
  var SlickCarousel = /*#__PURE__*/function () {
    function SlickCarousel() {
      _classCallCheck(this, SlickCarousel);

      this.initiateCarousel();
    }

    _createClass(SlickCarousel, [{
      key: "initiateCarousel",
      value: function initiateCarousel() {
        $(".post-carousel").slick({
          autoplay: true,
          autoplaySpeed: 70000,
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          responsive: [{
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }, {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }, {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }]
        });
      }
    }]);

    return SlickCarousel;
  }();

  new SlickCarousel();
})(jQuery);

/***/ }),

/***/ "./src/js/clock/index.js":
/*!*******************************!*\
  !*** ./src/js/clock/index.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

(function ($) {
  var Clock = /*#__PURE__*/function () {
    function Clock() {
      _classCallCheck(this, Clock);

      this.initializeClock();
    }

    _createClass(Clock, [{
      key: "initializeClock",
      value: function initializeClock() {
        var _this = this;

        var t = setInterval(function () {
          return _this.time();
        }, 1000);
      }
    }, {
      key: "numPad",
      value: function numPad(str) {
        var cStr = str.toString();
        if (cStr.length < 2) str = 0 + cStr;
        return str;
      }
    }, {
      key: "time",
      value: function time() {
        var currDate = new Date();
        var currSec = currDate.getSeconds();
        var currMin = currDate.getMinutes();
        var curr24Hr = currDate.getHours();
        var ampm = curr24Hr >= 12 ? 'pm' : 'am';
        var currHr = curr24Hr % 12;
        currHr = currHr ? currHr : 12;
        var stringTime = currHr + ':' + this.numPad(currMin) + ':' + this.numPad(currSec);
        var timeEmojiEl = $('#time-emoji');

        if (curr24Hr >= 5 && curr24Hr <= 17) {
          timeEmojiEl.text('????');
        } else {
          timeEmojiEl.text('????');
        }

        $('#time').text(stringTime);
        $('#ampm').text(ampm);
      }
    }]);

    return Clock;
  }();

  new Clock();
})(jQuery);

/***/ }),

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _clock__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./clock */ "./src/js/clock/index.js");
/* harmony import */ var _clock__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_clock__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _carousel__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./carousel */ "./src/js/carousel/index.js");
/* harmony import */ var _carousel__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_carousel__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _posts_loadmore__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./posts/loadmore */ "./src/js/posts/loadmore.js");
/* harmony import */ var _posts_loadmore__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_posts_loadmore__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../sass/main.scss */ "./src/sass/main.scss");
/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_sass_main_scss__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _img_cats_jpg__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../img/cats.jpg */ "./src/img/cats.jpg");
/* harmony import */ var _img_background_image_jsldkjwoei_jpg__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../img/background-image-jsldkjwoei.jpg */ "./src/img/background-image-jsldkjwoei.jpg");


 // styles

 // Images.




/***/ }),

/***/ "./src/js/posts/loadmore.js":
/*!**********************************!*\
  !*** ./src/js/posts/loadmore.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

(function ($) {
  /**
   * Class Loadmore.
   */
  var LoadMore = /*#__PURE__*/function () {
    /**
     * Contructor.
     */
    function LoadMore() {
      var _siteConfig$ajaxUrl, _siteConfig, _siteConfig$ajax_nonc, _siteConfig2;

      _classCallCheck(this, LoadMore);

      this.ajaxUrl = (_siteConfig$ajaxUrl = (_siteConfig = siteConfig) === null || _siteConfig === void 0 ? void 0 : _siteConfig.ajaxUrl) !== null && _siteConfig$ajaxUrl !== void 0 ? _siteConfig$ajaxUrl : "";
      this.ajaxNonce = (_siteConfig$ajax_nonc = (_siteConfig2 = siteConfig) === null || _siteConfig2 === void 0 ? void 0 : _siteConfig2.ajax_nonce) !== null && _siteConfig$ajax_nonc !== void 0 ? _siteConfig$ajax_nonc : "";
      this.loadMoreBtn = $("#load-more");
      this.loadingTextEl = $("#loading-text");
      this.isRequestProcessing = false;
      this.options = {
        root: null,
        rootMargin: "0px",
        threshold: 1.0 // 1.0 means set isIntersecting to true when element comes in 100% view.

      };
      this.init();
    }

    _createClass(LoadMore, [{
      key: "init",
      value: function init() {
        var _this = this;

        if (!this.loadMoreBtn) {
          return;
        }

        this.totalPagesCount = $("#post-pagination").data("max-pages");
        /**
         * Add the IntersectionObserver api, and listen to the load more intersection status.
         * so that intersectionObserverCallback gets called if the element intersection status changes.
         *
         * @type {IntersectionObserver}
         */

        var observer = new IntersectionObserver(function (entries) {
          return _this.intersectionObserverCallback(entries);
        }, this.options); // This code is showing error when user vesiting from another page .

        observer.observe(this.loadMoreBtn[0]);
      }
      /**
       * Gets called on initial render with status 'isIntersecting' as false and then
       * everytime element intersection status changes.
       *
       * @param {array} entries No of elements under observation.
       *
       */

    }, {
      key: "intersectionObserverCallback",
      value: function intersectionObserverCallback(entries) {
        var _this2 = this;

        // array of observing elements
        // The logic is apply for each entry ( in this case it's just one loadmore button )
        entries.forEach(function (entry) {
          // If load more button in view.
          if (entry !== null && entry !== void 0 && entry.isIntersecting) {
            _this2.handleLoadMorePosts();
          }
        });
      }
      /**
       * Load more posts.
       *
       * 1.Make an ajax request, by incrementing the page no. by one on each request.
       * 2.Append new/more posts to the existing content.
       * 3.If the response is 0 ( which means no more posts available ), remove the load-more button from DOM.
       * Once the load-more button gets removed, the IntersectionObserverAPI callback will not be triggered, which means
       * there will be no further ajax request since there won't be any more posts available.
       *
       * @return null
       */

    }, {
      key: "handleLoadMorePosts",
      value: function handleLoadMorePosts() {
        var _this3 = this;

        // Get page no from data attribute of load-more button.
        var page = this.loadMoreBtn.data("page");

        if (!page || this.isRequestProcessing) {
          return null;
        }

        var newPage = parseInt(page) + 1; // Increment page count by one.

        this.isRequestProcessing = true;
        $.ajax({
          url: this.ajaxUrl,
          type: "post",
          data: {
            page: page,
            action: "load_more",
            ajax_nonce: this.ajaxNonce
          },
          success: function success(response) {
            if (0 === parseInt(response)) {
              _this3.loadMoreBtn.remove();
            } else {
              _this3.loadMoreBtn.data("page", newPage);

              $("#load-more-content").append(response);

              _this3.removeLoadMoreIfOnLastPage(newPage);

              _this3.isRequestProcessing = false;
            }
          },
          error: function error(response) {
            console.log(response);
            _this3.isRequestProcessing = false;
          }
        });
      }
      /**
       * Remove Load more Button If on last page.
       *
       * @param {int} newPage New Page.
       */

    }, {
      key: "removeLoadMoreIfOnLastPage",
      value: function removeLoadMoreIfOnLastPage(newPage) {
        if (newPage + 1 > this.totalPagesCount) {
          this.loadMoreBtn.remove();
        }
      }
    }]);

    return LoadMore;
  }();

  new LoadMore();
})(jQuery);

/***/ }),

/***/ "./src/sass/main.scss":
/*!****************************!*\
  !*** ./src/sass/main.scss ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })

/******/ });
//# sourceMappingURL=main.js.map