(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.scss */ "./assets/styles/app.scss");
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_styles_app_scss__WEBPACK_IMPORTED_MODULE_0__);
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.scss in this case)
 // start the Stimulus application

var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");

__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");

__webpack_require__(/*! owl.carousel */ "./node_modules/owl.carousel/dist/owl.carousel.js");

var ScrollReveal = __webpack_require__(/*! scrollreveal */ "./node_modules/scrollreveal/dist/scrollreveal.es.js");

$('#carousel').owlCarousel({
  loop: true,
  margin: -1,
  items: 1,
  nav: true,
  navText: ['<i class="ion-ios-arrow-back" aria-hidden="true"></i>', '<i class="ion-ios-arrow-forward" aria-hidden="true"></i>'],
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true
});
/*--/ Animate Carousel /--*/

$('.intro-carousel').on('translate.owl.carousel', function () {
  $('.intro-content .intro-title').removeClass('animate__zoomIn animate__animated').hide();
  $('.intro-content .intro-price').removeClass('animate__fadeInUp animate__animated').hide();
  $('.intro-content .intro-title-top, .intro-content .spacial').removeClass('animate__fadeIn animate__animated').hide();
});
$('.intro-carousel').on('translated.owl.carousel', function () {
  $('.intro-content .intro-title').addClass('animate__zoomIn animate__animated').show();
  $('.intro-content .intro-price').addClass('animate__fadeInUp animate__animated').show();
  $('.intro-content .intro-title-top, .intro-content .spacial').addClass('animate__fadeIn animate__animated').show();
});
/*--/ Property owl /--*/

$('#property-carousel').owlCarousel({
  loop: true,
  margin: 30,
  responsive: {
    0: {
      items: 1
    },
    769: {
      items: 2
    },
    992: {
      items: 3
    }
  }
});
/*--/ Property owl owl /--*/

$('#property-single-carousel').owlCarousel({
  loop: true,
  margin: 0,
  nav: true,
  navText: ['<i class="ion-ios-arrow-back" aria-hidden="true"></i>', '<i class="ion-ios-arrow-forward" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 1
    }
  }
});
/*--/ News owl /--*/

$('#new-carousel').owlCarousel({
  loop: true,
  margin: 30,
  responsive: {
    0: {
      items: 1
    },
    769: {
      items: 2
    },
    992: {
      items: 3
    }
  }
});
/*--/ Testimonials owl /--*/

$('#testimonial-carousel').owlCarousel({
  margin: 0,
  autoplay: true,
  nav: true,
  animateOut: 'fadeOut',
  animateIn: 'fadeInUp',
  navText: ['<i class="ion-ios-arrow-back" aria-hidden="true"></i>', '<i class="ion-ios-arrow-forward" aria-hidden="true"></i>'],
  autoplayTimeout: 4000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    }
  }
});

/***/ }),

/***/ "./assets/styles/app.scss":
/*!********************************!*\
  !*** ./assets/styles/app.scss ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })

},[["./assets/app.js","runtime","vendors~app"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYXBwLnNjc3MiXSwibmFtZXMiOlsiJCIsInJlcXVpcmUiLCJTY3JvbGxSZXZlYWwiLCJvd2xDYXJvdXNlbCIsImxvb3AiLCJtYXJnaW4iLCJpdGVtcyIsIm5hdiIsIm5hdlRleHQiLCJhdXRvcGxheSIsImF1dG9wbGF5VGltZW91dCIsImF1dG9wbGF5SG92ZXJQYXVzZSIsIm9uIiwicmVtb3ZlQ2xhc3MiLCJoaWRlIiwiYWRkQ2xhc3MiLCJzaG93IiwicmVzcG9uc2l2ZSIsImFuaW1hdGVPdXQiLCJhbmltYXRlSW4iXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFFQTtDQUdBOztBQUNBLElBQU1BLENBQUMsR0FBR0MsbUJBQU8sQ0FBQyxvREFBRCxDQUFqQjs7QUFDQUEsbUJBQU8sQ0FBQyxnRUFBRCxDQUFQOztBQUNBQSxtQkFBTyxDQUFDLHNFQUFELENBQVA7O0FBQ0EsSUFBTUMsWUFBWSxHQUFHRCxtQkFBTyxDQUFDLHlFQUFELENBQTVCOztBQUVBRCxDQUFDLENBQUMsV0FBRCxDQUFELENBQWVHLFdBQWYsQ0FBMkI7QUFDdkJDLE1BQUksRUFBRSxJQURpQjtBQUV2QkMsUUFBTSxFQUFFLENBQUMsQ0FGYztBQUd2QkMsT0FBSyxFQUFFLENBSGdCO0FBSXZCQyxLQUFHLEVBQUUsSUFKa0I7QUFLdkJDLFNBQU8sRUFBRSxDQUFDLHVEQUFELEVBQTBELDBEQUExRCxDQUxjO0FBTXZCQyxVQUFRLEVBQUUsSUFOYTtBQU92QkMsaUJBQWUsRUFBRSxJQVBNO0FBUXZCQyxvQkFBa0IsRUFBRTtBQVJHLENBQTNCO0FBV0U7O0FBQ0FYLENBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCWSxFQUFyQixDQUF3Qix3QkFBeEIsRUFBa0QsWUFBVztBQUMzRFosR0FBQyxDQUFDLDZCQUFELENBQUQsQ0FBaUNhLFdBQWpDLENBQTZDLG1DQUE3QyxFQUFrRkMsSUFBbEY7QUFDQWQsR0FBQyxDQUFDLDZCQUFELENBQUQsQ0FBaUNhLFdBQWpDLENBQTZDLHFDQUE3QyxFQUFvRkMsSUFBcEY7QUFDQWQsR0FBQyxDQUFDLDBEQUFELENBQUQsQ0FBOERhLFdBQTlELENBQTBFLG1DQUExRSxFQUErR0MsSUFBL0c7QUFDRCxDQUpEO0FBTUFkLENBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCWSxFQUFyQixDQUF3Qix5QkFBeEIsRUFBbUQsWUFBVztBQUM1RFosR0FBQyxDQUFDLDZCQUFELENBQUQsQ0FBaUNlLFFBQWpDLENBQTBDLG1DQUExQyxFQUErRUMsSUFBL0U7QUFDQWhCLEdBQUMsQ0FBQyw2QkFBRCxDQUFELENBQWlDZSxRQUFqQyxDQUEwQyxxQ0FBMUMsRUFBaUZDLElBQWpGO0FBQ0FoQixHQUFDLENBQUMsMERBQUQsQ0FBRCxDQUE4RGUsUUFBOUQsQ0FBdUUsbUNBQXZFLEVBQTRHQyxJQUE1RztBQUNELENBSkQ7QUFNRTs7QUFDQWhCLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCRyxXQUF4QixDQUFvQztBQUNoQ0MsTUFBSSxFQUFFLElBRDBCO0FBRWhDQyxRQUFNLEVBQUUsRUFGd0I7QUFHaENZLFlBQVUsRUFBRTtBQUNWLE9BQUc7QUFDRFgsV0FBSyxFQUFFO0FBRE4sS0FETztBQUlWLFNBQUs7QUFDSEEsV0FBSyxFQUFFO0FBREosS0FKSztBQU9WLFNBQUs7QUFDSEEsV0FBSyxFQUFFO0FBREo7QUFQSztBQUhvQixDQUFwQztBQWdCRTs7QUFDQU4sQ0FBQyxDQUFDLDJCQUFELENBQUQsQ0FBK0JHLFdBQS9CLENBQTJDO0FBQ3pDQyxNQUFJLEVBQUUsSUFEbUM7QUFFekNDLFFBQU0sRUFBRSxDQUZpQztBQUd6Q0UsS0FBRyxFQUFFLElBSG9DO0FBSXpDQyxTQUFPLEVBQUUsQ0FBQyx1REFBRCxFQUEwRCwwREFBMUQsQ0FKZ0M7QUFLekNTLFlBQVUsRUFBRTtBQUNWLE9BQUc7QUFDRFgsV0FBSyxFQUFFO0FBRE47QUFETztBQUw2QixDQUEzQztBQVlBOztBQUNBTixDQUFDLENBQUMsZUFBRCxDQUFELENBQW1CRyxXQUFuQixDQUErQjtBQUM3QkMsTUFBSSxFQUFFLElBRHVCO0FBRTdCQyxRQUFNLEVBQUUsRUFGcUI7QUFHN0JZLFlBQVUsRUFBRTtBQUNWLE9BQUc7QUFDRFgsV0FBSyxFQUFFO0FBRE4sS0FETztBQUlWLFNBQUs7QUFDSEEsV0FBSyxFQUFFO0FBREosS0FKSztBQU9WLFNBQUs7QUFDSEEsV0FBSyxFQUFFO0FBREo7QUFQSztBQUhpQixDQUEvQjtBQWdCQTs7QUFDQU4sQ0FBQyxDQUFDLHVCQUFELENBQUQsQ0FBMkJHLFdBQTNCLENBQXVDO0FBQ3JDRSxRQUFNLEVBQUUsQ0FENkI7QUFFckNJLFVBQVEsRUFBRSxJQUYyQjtBQUdyQ0YsS0FBRyxFQUFFLElBSGdDO0FBSXJDVyxZQUFVLEVBQUUsU0FKeUI7QUFLckNDLFdBQVMsRUFBRSxVQUwwQjtBQU1yQ1gsU0FBTyxFQUFFLENBQUMsdURBQUQsRUFBMEQsMERBQTFELENBTjRCO0FBT3JDRSxpQkFBZSxFQUFFLElBUG9CO0FBUXJDQyxvQkFBa0IsRUFBRSxJQVJpQjtBQVNyQ00sWUFBVSxFQUFFO0FBQ1YsT0FBRztBQUNEWCxXQUFLLEVBQUU7QUFETjtBQURPO0FBVHlCLENBQXZDLEU7Ozs7Ozs7Ozs7O0FDeEZOLHVDIiwiZmlsZSI6ImFwcC5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXHJcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcclxuICpcclxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxyXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxyXG4gKi9cclxuXHJcbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuc2NzcyBpbiB0aGlzIGNhc2UpXHJcbmltcG9ydCAnLi9zdHlsZXMvYXBwLnNjc3MnO1xyXG5cclxuLy8gc3RhcnQgdGhlIFN0aW11bHVzIGFwcGxpY2F0aW9uXHJcbmNvbnN0ICQgPSByZXF1aXJlKCdqcXVlcnknKTtcclxucmVxdWlyZSgnYm9vdHN0cmFwJyk7XHJcbnJlcXVpcmUoJ293bC5jYXJvdXNlbCcpO1xyXG5jb25zdCBTY3JvbGxSZXZlYWwgPSByZXF1aXJlKCdzY3JvbGxyZXZlYWwnKTtcclxuXHJcbiQoJyNjYXJvdXNlbCcpLm93bENhcm91c2VsKHtcclxuICAgIGxvb3A6IHRydWUsXHJcbiAgICBtYXJnaW46IC0xLFxyXG4gICAgaXRlbXM6IDEsXHJcbiAgICBuYXY6IHRydWUsXHJcbiAgICBuYXZUZXh0OiBbJzxpIGNsYXNzPVwiaW9uLWlvcy1hcnJvdy1iYWNrXCIgYXJpYS1oaWRkZW49XCJ0cnVlXCI+PC9pPicsICc8aSBjbGFzcz1cImlvbi1pb3MtYXJyb3ctZm9yd2FyZFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT4nXSxcclxuICAgIGF1dG9wbGF5OiB0cnVlLFxyXG4gICAgYXV0b3BsYXlUaW1lb3V0OiAzMDAwLFxyXG4gICAgYXV0b3BsYXlIb3ZlclBhdXNlOiB0cnVlXHJcbiAgfSk7XHJcblxyXG4gIC8qLS0vIEFuaW1hdGUgQ2Fyb3VzZWwgLy0tKi9cclxuICAkKCcuaW50cm8tY2Fyb3VzZWwnKS5vbigndHJhbnNsYXRlLm93bC5jYXJvdXNlbCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgJCgnLmludHJvLWNvbnRlbnQgLmludHJvLXRpdGxlJykucmVtb3ZlQ2xhc3MoJ2FuaW1hdGVfX3pvb21JbiBhbmltYXRlX19hbmltYXRlZCcpLmhpZGUoKTtcclxuICAgICQoJy5pbnRyby1jb250ZW50IC5pbnRyby1wcmljZScpLnJlbW92ZUNsYXNzKCdhbmltYXRlX19mYWRlSW5VcCBhbmltYXRlX19hbmltYXRlZCcpLmhpZGUoKTtcclxuICAgICQoJy5pbnRyby1jb250ZW50IC5pbnRyby10aXRsZS10b3AsIC5pbnRyby1jb250ZW50IC5zcGFjaWFsJykucmVtb3ZlQ2xhc3MoJ2FuaW1hdGVfX2ZhZGVJbiBhbmltYXRlX19hbmltYXRlZCcpLmhpZGUoKTtcclxuICB9KTtcclxuXHJcbiAgJCgnLmludHJvLWNhcm91c2VsJykub24oJ3RyYW5zbGF0ZWQub3dsLmNhcm91c2VsJywgZnVuY3Rpb24oKSB7XHJcbiAgICAkKCcuaW50cm8tY29udGVudCAuaW50cm8tdGl0bGUnKS5hZGRDbGFzcygnYW5pbWF0ZV9fem9vbUluIGFuaW1hdGVfX2FuaW1hdGVkJykuc2hvdygpO1xyXG4gICAgJCgnLmludHJvLWNvbnRlbnQgLmludHJvLXByaWNlJykuYWRkQ2xhc3MoJ2FuaW1hdGVfX2ZhZGVJblVwIGFuaW1hdGVfX2FuaW1hdGVkJykuc2hvdygpO1xyXG4gICAgJCgnLmludHJvLWNvbnRlbnQgLmludHJvLXRpdGxlLXRvcCwgLmludHJvLWNvbnRlbnQgLnNwYWNpYWwnKS5hZGRDbGFzcygnYW5pbWF0ZV9fZmFkZUluIGFuaW1hdGVfX2FuaW1hdGVkJykuc2hvdygpO1xyXG4gIH0pO1xyXG5cclxuICAgIC8qLS0vIFByb3BlcnR5IG93bCAvLS0qL1xyXG4gICAgJCgnI3Byb3BlcnR5LWNhcm91c2VsJykub3dsQ2Fyb3VzZWwoe1xyXG4gICAgICAgIGxvb3A6IHRydWUsXHJcbiAgICAgICAgbWFyZ2luOiAzMCxcclxuICAgICAgICByZXNwb25zaXZlOiB7XHJcbiAgICAgICAgICAwOiB7XHJcbiAgICAgICAgICAgIGl0ZW1zOiAxLFxyXG4gICAgICAgICAgfSxcclxuICAgICAgICAgIDc2OToge1xyXG4gICAgICAgICAgICBpdGVtczogMixcclxuICAgICAgICAgIH0sXHJcbiAgICAgICAgICA5OTI6IHtcclxuICAgICAgICAgICAgaXRlbXM6IDMsXHJcbiAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgICB9KTtcclxuICAgIFxyXG4gICAgICAvKi0tLyBQcm9wZXJ0eSBvd2wgb3dsIC8tLSovXHJcbiAgICAgICQoJyNwcm9wZXJ0eS1zaW5nbGUtY2Fyb3VzZWwnKS5vd2xDYXJvdXNlbCh7XHJcbiAgICAgICAgbG9vcDogdHJ1ZSxcclxuICAgICAgICBtYXJnaW46IDAsXHJcbiAgICAgICAgbmF2OiB0cnVlLFxyXG4gICAgICAgIG5hdlRleHQ6IFsnPGkgY2xhc3M9XCJpb24taW9zLWFycm93LWJhY2tcIiBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+JywgJzxpIGNsYXNzPVwiaW9uLWlvcy1hcnJvdy1mb3J3YXJkXCIgYXJpYS1oaWRkZW49XCJ0cnVlXCI+PC9pPiddLFxyXG4gICAgICAgIHJlc3BvbnNpdmU6IHtcclxuICAgICAgICAgIDA6IHtcclxuICAgICAgICAgICAgaXRlbXM6IDEsXHJcbiAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgICB9KTtcclxuICAgIFxyXG4gICAgICAvKi0tLyBOZXdzIG93bCAvLS0qL1xyXG4gICAgICAkKCcjbmV3LWNhcm91c2VsJykub3dsQ2Fyb3VzZWwoe1xyXG4gICAgICAgIGxvb3A6IHRydWUsXHJcbiAgICAgICAgbWFyZ2luOiAzMCxcclxuICAgICAgICByZXNwb25zaXZlOiB7XHJcbiAgICAgICAgICAwOiB7XHJcbiAgICAgICAgICAgIGl0ZW1zOiAxLFxyXG4gICAgICAgICAgfSxcclxuICAgICAgICAgIDc2OToge1xyXG4gICAgICAgICAgICBpdGVtczogMixcclxuICAgICAgICAgIH0sXHJcbiAgICAgICAgICA5OTI6IHtcclxuICAgICAgICAgICAgaXRlbXM6IDMsXHJcbiAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgICB9KTtcclxuICAgIFxyXG4gICAgICAvKi0tLyBUZXN0aW1vbmlhbHMgb3dsIC8tLSovXHJcbiAgICAgICQoJyN0ZXN0aW1vbmlhbC1jYXJvdXNlbCcpLm93bENhcm91c2VsKHtcclxuICAgICAgICBtYXJnaW46IDAsXHJcbiAgICAgICAgYXV0b3BsYXk6IHRydWUsXHJcbiAgICAgICAgbmF2OiB0cnVlLFxyXG4gICAgICAgIGFuaW1hdGVPdXQ6ICdmYWRlT3V0JyxcclxuICAgICAgICBhbmltYXRlSW46ICdmYWRlSW5VcCcsXHJcbiAgICAgICAgbmF2VGV4dDogWyc8aSBjbGFzcz1cImlvbi1pb3MtYXJyb3ctYmFja1wiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT4nLCAnPGkgY2xhc3M9XCJpb24taW9zLWFycm93LWZvcndhcmRcIiBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+J10sXHJcbiAgICAgICAgYXV0b3BsYXlUaW1lb3V0OiA0MDAwLFxyXG4gICAgICAgIGF1dG9wbGF5SG92ZXJQYXVzZTogdHJ1ZSxcclxuICAgICAgICByZXNwb25zaXZlOiB7XHJcbiAgICAgICAgICAwOiB7XHJcbiAgICAgICAgICAgIGl0ZW1zOiAxLFxyXG4gICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgICAgfSk7IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luIl0sInNvdXJjZVJvb3QiOiIifQ==