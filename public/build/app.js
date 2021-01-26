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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYXBwLnNjc3MiXSwibmFtZXMiOlsiJCIsInJlcXVpcmUiLCJTY3JvbGxSZXZlYWwiLCJvd2xDYXJvdXNlbCIsImxvb3AiLCJtYXJnaW4iLCJpdGVtcyIsIm5hdiIsIm5hdlRleHQiLCJhdXRvcGxheSIsImF1dG9wbGF5VGltZW91dCIsImF1dG9wbGF5SG92ZXJQYXVzZSIsIm9uIiwicmVtb3ZlQ2xhc3MiLCJoaWRlIiwiYWRkQ2xhc3MiLCJzaG93IiwicmVzcG9uc2l2ZSIsImFuaW1hdGVPdXQiLCJhbmltYXRlSW4iXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFFQTtDQUdBOztBQUNBLElBQU1BLENBQUMsR0FBR0MsbUJBQU8sQ0FBQyxvREFBRCxDQUFqQjs7QUFDQUEsbUJBQU8sQ0FBQyxnRUFBRCxDQUFQOztBQUNBQSxtQkFBTyxDQUFDLHNFQUFELENBQVA7O0FBRUEsSUFBTUMsWUFBWSxHQUFHRCxtQkFBTyxDQUFDLHlFQUFELENBQTVCOztBQUVBRCxDQUFDLENBQUMsV0FBRCxDQUFELENBQWVHLFdBQWYsQ0FBMkI7QUFDdkJDLE1BQUksRUFBRSxJQURpQjtBQUV2QkMsUUFBTSxFQUFFLENBQUMsQ0FGYztBQUd2QkMsT0FBSyxFQUFFLENBSGdCO0FBSXZCQyxLQUFHLEVBQUUsSUFKa0I7QUFLdkJDLFNBQU8sRUFBRSxDQUFDLHVEQUFELEVBQTBELDBEQUExRCxDQUxjO0FBTXZCQyxVQUFRLEVBQUUsSUFOYTtBQU92QkMsaUJBQWUsRUFBRSxJQVBNO0FBUXZCQyxvQkFBa0IsRUFBRTtBQVJHLENBQTNCO0FBV0U7O0FBQ0FYLENBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCWSxFQUFyQixDQUF3Qix3QkFBeEIsRUFBa0QsWUFBVztBQUMzRFosR0FBQyxDQUFDLDZCQUFELENBQUQsQ0FBaUNhLFdBQWpDLENBQTZDLG1DQUE3QyxFQUFrRkMsSUFBbEY7QUFDQWQsR0FBQyxDQUFDLDZCQUFELENBQUQsQ0FBaUNhLFdBQWpDLENBQTZDLHFDQUE3QyxFQUFvRkMsSUFBcEY7QUFDQWQsR0FBQyxDQUFDLDBEQUFELENBQUQsQ0FBOERhLFdBQTlELENBQTBFLG1DQUExRSxFQUErR0MsSUFBL0c7QUFDRCxDQUpEO0FBTUFkLENBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCWSxFQUFyQixDQUF3Qix5QkFBeEIsRUFBbUQsWUFBVztBQUM1RFosR0FBQyxDQUFDLDZCQUFELENBQUQsQ0FBaUNlLFFBQWpDLENBQTBDLG1DQUExQyxFQUErRUMsSUFBL0U7QUFDQWhCLEdBQUMsQ0FBQyw2QkFBRCxDQUFELENBQWlDZSxRQUFqQyxDQUEwQyxxQ0FBMUMsRUFBaUZDLElBQWpGO0FBQ0FoQixHQUFDLENBQUMsMERBQUQsQ0FBRCxDQUE4RGUsUUFBOUQsQ0FBdUUsbUNBQXZFLEVBQTRHQyxJQUE1RztBQUNELENBSkQ7QUFNRTs7QUFDQWhCLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCRyxXQUF4QixDQUFvQztBQUNoQ0MsTUFBSSxFQUFFLElBRDBCO0FBRWhDQyxRQUFNLEVBQUUsRUFGd0I7QUFHaENZLFlBQVUsRUFBRTtBQUNWLE9BQUc7QUFDRFgsV0FBSyxFQUFFO0FBRE4sS0FETztBQUlWLFNBQUs7QUFDSEEsV0FBSyxFQUFFO0FBREosS0FKSztBQU9WLFNBQUs7QUFDSEEsV0FBSyxFQUFFO0FBREo7QUFQSztBQUhvQixDQUFwQztBQWdCRTs7QUFDQU4sQ0FBQyxDQUFDLDJCQUFELENBQUQsQ0FBK0JHLFdBQS9CLENBQTJDO0FBQ3pDQyxNQUFJLEVBQUUsSUFEbUM7QUFFekNDLFFBQU0sRUFBRSxDQUZpQztBQUd6Q0UsS0FBRyxFQUFFLElBSG9DO0FBSXpDQyxTQUFPLEVBQUUsQ0FBQyx1REFBRCxFQUEwRCwwREFBMUQsQ0FKZ0M7QUFLekNTLFlBQVUsRUFBRTtBQUNWLE9BQUc7QUFDRFgsV0FBSyxFQUFFO0FBRE47QUFETztBQUw2QixDQUEzQztBQVlBOztBQUNBTixDQUFDLENBQUMsZUFBRCxDQUFELENBQW1CRyxXQUFuQixDQUErQjtBQUM3QkMsTUFBSSxFQUFFLElBRHVCO0FBRTdCQyxRQUFNLEVBQUUsRUFGcUI7QUFHN0JZLFlBQVUsRUFBRTtBQUNWLE9BQUc7QUFDRFgsV0FBSyxFQUFFO0FBRE4sS0FETztBQUlWLFNBQUs7QUFDSEEsV0FBSyxFQUFFO0FBREosS0FKSztBQU9WLFNBQUs7QUFDSEEsV0FBSyxFQUFFO0FBREo7QUFQSztBQUhpQixDQUEvQjtBQWdCQTs7QUFDQU4sQ0FBQyxDQUFDLHVCQUFELENBQUQsQ0FBMkJHLFdBQTNCLENBQXVDO0FBQ3JDRSxRQUFNLEVBQUUsQ0FENkI7QUFFckNJLFVBQVEsRUFBRSxJQUYyQjtBQUdyQ0YsS0FBRyxFQUFFLElBSGdDO0FBSXJDVyxZQUFVLEVBQUUsU0FKeUI7QUFLckNDLFdBQVMsRUFBRSxVQUwwQjtBQU1yQ1gsU0FBTyxFQUFFLENBQUMsdURBQUQsRUFBMEQsMERBQTFELENBTjRCO0FBT3JDRSxpQkFBZSxFQUFFLElBUG9CO0FBUXJDQyxvQkFBa0IsRUFBRSxJQVJpQjtBQVNyQ00sWUFBVSxFQUFFO0FBQ1YsT0FBRztBQUNEWCxXQUFLLEVBQUU7QUFETjtBQURPO0FBVHlCLENBQXZDLEU7Ozs7Ozs7Ozs7O0FDekZOLHVDIiwiZmlsZSI6ImFwcC5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXHJcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcclxuICpcclxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxyXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxyXG4gKi9cclxuXHJcbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuc2NzcyBpbiB0aGlzIGNhc2UpXHJcbmltcG9ydCAnLi9zdHlsZXMvYXBwLnNjc3MnO1xyXG5cclxuLy8gc3RhcnQgdGhlIFN0aW11bHVzIGFwcGxpY2F0aW9uXHJcbmNvbnN0ICQgPSByZXF1aXJlKCdqcXVlcnknKTtcclxucmVxdWlyZSgnYm9vdHN0cmFwJyk7XHJcbnJlcXVpcmUoJ293bC5jYXJvdXNlbCcpO1xyXG5cclxuY29uc3QgU2Nyb2xsUmV2ZWFsID0gcmVxdWlyZSgnc2Nyb2xscmV2ZWFsJyk7XHJcblxyXG4kKCcjY2Fyb3VzZWwnKS5vd2xDYXJvdXNlbCh7XHJcbiAgICBsb29wOiB0cnVlLFxyXG4gICAgbWFyZ2luOiAtMSxcclxuICAgIGl0ZW1zOiAxLFxyXG4gICAgbmF2OiB0cnVlLFxyXG4gICAgbmF2VGV4dDogWyc8aSBjbGFzcz1cImlvbi1pb3MtYXJyb3ctYmFja1wiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT4nLCAnPGkgY2xhc3M9XCJpb24taW9zLWFycm93LWZvcndhcmRcIiBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+J10sXHJcbiAgICBhdXRvcGxheTogdHJ1ZSxcclxuICAgIGF1dG9wbGF5VGltZW91dDogMzAwMCxcclxuICAgIGF1dG9wbGF5SG92ZXJQYXVzZTogdHJ1ZVxyXG4gIH0pO1xyXG5cclxuICAvKi0tLyBBbmltYXRlIENhcm91c2VsIC8tLSovXHJcbiAgJCgnLmludHJvLWNhcm91c2VsJykub24oJ3RyYW5zbGF0ZS5vd2wuY2Fyb3VzZWwnLCBmdW5jdGlvbigpIHtcclxuICAgICQoJy5pbnRyby1jb250ZW50IC5pbnRyby10aXRsZScpLnJlbW92ZUNsYXNzKCdhbmltYXRlX196b29tSW4gYW5pbWF0ZV9fYW5pbWF0ZWQnKS5oaWRlKCk7XHJcbiAgICAkKCcuaW50cm8tY29udGVudCAuaW50cm8tcHJpY2UnKS5yZW1vdmVDbGFzcygnYW5pbWF0ZV9fZmFkZUluVXAgYW5pbWF0ZV9fYW5pbWF0ZWQnKS5oaWRlKCk7XHJcbiAgICAkKCcuaW50cm8tY29udGVudCAuaW50cm8tdGl0bGUtdG9wLCAuaW50cm8tY29udGVudCAuc3BhY2lhbCcpLnJlbW92ZUNsYXNzKCdhbmltYXRlX19mYWRlSW4gYW5pbWF0ZV9fYW5pbWF0ZWQnKS5oaWRlKCk7XHJcbiAgfSk7XHJcblxyXG4gICQoJy5pbnRyby1jYXJvdXNlbCcpLm9uKCd0cmFuc2xhdGVkLm93bC5jYXJvdXNlbCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgJCgnLmludHJvLWNvbnRlbnQgLmludHJvLXRpdGxlJykuYWRkQ2xhc3MoJ2FuaW1hdGVfX3pvb21JbiBhbmltYXRlX19hbmltYXRlZCcpLnNob3coKTtcclxuICAgICQoJy5pbnRyby1jb250ZW50IC5pbnRyby1wcmljZScpLmFkZENsYXNzKCdhbmltYXRlX19mYWRlSW5VcCBhbmltYXRlX19hbmltYXRlZCcpLnNob3coKTtcclxuICAgICQoJy5pbnRyby1jb250ZW50IC5pbnRyby10aXRsZS10b3AsIC5pbnRyby1jb250ZW50IC5zcGFjaWFsJykuYWRkQ2xhc3MoJ2FuaW1hdGVfX2ZhZGVJbiBhbmltYXRlX19hbmltYXRlZCcpLnNob3coKTtcclxuICB9KTtcclxuXHJcbiAgICAvKi0tLyBQcm9wZXJ0eSBvd2wgLy0tKi9cclxuICAgICQoJyNwcm9wZXJ0eS1jYXJvdXNlbCcpLm93bENhcm91c2VsKHtcclxuICAgICAgICBsb29wOiB0cnVlLFxyXG4gICAgICAgIG1hcmdpbjogMzAsXHJcbiAgICAgICAgcmVzcG9uc2l2ZToge1xyXG4gICAgICAgICAgMDoge1xyXG4gICAgICAgICAgICBpdGVtczogMSxcclxuICAgICAgICAgIH0sXHJcbiAgICAgICAgICA3Njk6IHtcclxuICAgICAgICAgICAgaXRlbXM6IDIsXHJcbiAgICAgICAgICB9LFxyXG4gICAgICAgICAgOTkyOiB7XHJcbiAgICAgICAgICAgIGl0ZW1zOiAzLFxyXG4gICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgICAgfSk7XHJcbiAgICBcclxuICAgICAgLyotLS8gUHJvcGVydHkgb3dsIG93bCAvLS0qL1xyXG4gICAgICAkKCcjcHJvcGVydHktc2luZ2xlLWNhcm91c2VsJykub3dsQ2Fyb3VzZWwoe1xyXG4gICAgICAgIGxvb3A6IHRydWUsXHJcbiAgICAgICAgbWFyZ2luOiAwLFxyXG4gICAgICAgIG5hdjogdHJ1ZSxcclxuICAgICAgICBuYXZUZXh0OiBbJzxpIGNsYXNzPVwiaW9uLWlvcy1hcnJvdy1iYWNrXCIgYXJpYS1oaWRkZW49XCJ0cnVlXCI+PC9pPicsICc8aSBjbGFzcz1cImlvbi1pb3MtYXJyb3ctZm9yd2FyZFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT4nXSxcclxuICAgICAgICByZXNwb25zaXZlOiB7XHJcbiAgICAgICAgICAwOiB7XHJcbiAgICAgICAgICAgIGl0ZW1zOiAxLFxyXG4gICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgICAgfSk7XHJcbiAgICBcclxuICAgICAgLyotLS8gTmV3cyBvd2wgLy0tKi9cclxuICAgICAgJCgnI25ldy1jYXJvdXNlbCcpLm93bENhcm91c2VsKHtcclxuICAgICAgICBsb29wOiB0cnVlLFxyXG4gICAgICAgIG1hcmdpbjogMzAsXHJcbiAgICAgICAgcmVzcG9uc2l2ZToge1xyXG4gICAgICAgICAgMDoge1xyXG4gICAgICAgICAgICBpdGVtczogMSxcclxuICAgICAgICAgIH0sXHJcbiAgICAgICAgICA3Njk6IHtcclxuICAgICAgICAgICAgaXRlbXM6IDIsXHJcbiAgICAgICAgICB9LFxyXG4gICAgICAgICAgOTkyOiB7XHJcbiAgICAgICAgICAgIGl0ZW1zOiAzLFxyXG4gICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgICAgfSk7XHJcbiAgICBcclxuICAgICAgLyotLS8gVGVzdGltb25pYWxzIG93bCAvLS0qL1xyXG4gICAgICAkKCcjdGVzdGltb25pYWwtY2Fyb3VzZWwnKS5vd2xDYXJvdXNlbCh7XHJcbiAgICAgICAgbWFyZ2luOiAwLFxyXG4gICAgICAgIGF1dG9wbGF5OiB0cnVlLFxyXG4gICAgICAgIG5hdjogdHJ1ZSxcclxuICAgICAgICBhbmltYXRlT3V0OiAnZmFkZU91dCcsXHJcbiAgICAgICAgYW5pbWF0ZUluOiAnZmFkZUluVXAnLFxyXG4gICAgICAgIG5hdlRleHQ6IFsnPGkgY2xhc3M9XCJpb24taW9zLWFycm93LWJhY2tcIiBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+JywgJzxpIGNsYXNzPVwiaW9uLWlvcy1hcnJvdy1mb3J3YXJkXCIgYXJpYS1oaWRkZW49XCJ0cnVlXCI+PC9pPiddLFxyXG4gICAgICAgIGF1dG9wbGF5VGltZW91dDogNDAwMCxcclxuICAgICAgICBhdXRvcGxheUhvdmVyUGF1c2U6IHRydWUsXHJcbiAgICAgICAgcmVzcG9uc2l2ZToge1xyXG4gICAgICAgICAgMDoge1xyXG4gICAgICAgICAgICBpdGVtczogMSxcclxuICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICAgIH0pOyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=