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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYXBwLnNjc3MiXSwibmFtZXMiOlsiJCIsInJlcXVpcmUiLCJTY3JvbGxSZXZlYWwiLCJvd2xDYXJvdXNlbCIsImxvb3AiLCJtYXJnaW4iLCJpdGVtcyIsIm5hdiIsIm5hdlRleHQiLCJhdXRvcGxheSIsImF1dG9wbGF5VGltZW91dCIsImF1dG9wbGF5SG92ZXJQYXVzZSIsIm9uIiwicmVtb3ZlQ2xhc3MiLCJoaWRlIiwiYWRkQ2xhc3MiLCJzaG93IiwicmVzcG9uc2l2ZSIsImFuaW1hdGVPdXQiLCJhbmltYXRlSW4iXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFFQTtDQUdBOztBQUNBLElBQU1BLENBQUMsR0FBR0MsbUJBQU8sQ0FBQyxvREFBRCxDQUFqQjs7QUFDQUEsbUJBQU8sQ0FBQyxnRUFBRCxDQUFQOztBQUNBQSxtQkFBTyxDQUFDLHNFQUFELENBQVA7O0FBQ0EsSUFBTUMsWUFBWSxHQUFHRCxtQkFBTyxDQUFDLHlFQUFELENBQTVCOztBQUVBRCxDQUFDLENBQUMsV0FBRCxDQUFELENBQWVHLFdBQWYsQ0FBMkI7QUFDdkJDLE1BQUksRUFBRSxJQURpQjtBQUV2QkMsUUFBTSxFQUFFLENBQUMsQ0FGYztBQUd2QkMsT0FBSyxFQUFFLENBSGdCO0FBSXZCQyxLQUFHLEVBQUUsSUFKa0I7QUFLdkJDLFNBQU8sRUFBRSxDQUFDLHVEQUFELEVBQTBELDBEQUExRCxDQUxjO0FBTXZCQyxVQUFRLEVBQUUsSUFOYTtBQU92QkMsaUJBQWUsRUFBRSxJQVBNO0FBUXZCQyxvQkFBa0IsRUFBRTtBQVJHLENBQTNCO0FBV0E7O0FBQ0FYLENBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCWSxFQUFyQixDQUF3Qix3QkFBeEIsRUFBa0QsWUFBVztBQUN6RFosR0FBQyxDQUFDLDZCQUFELENBQUQsQ0FBaUNhLFdBQWpDLENBQTZDLG1DQUE3QyxFQUFrRkMsSUFBbEY7QUFDQWQsR0FBQyxDQUFDLDZCQUFELENBQUQsQ0FBaUNhLFdBQWpDLENBQTZDLHFDQUE3QyxFQUFvRkMsSUFBcEY7QUFDQWQsR0FBQyxDQUFDLDBEQUFELENBQUQsQ0FBOERhLFdBQTlELENBQTBFLG1DQUExRSxFQUErR0MsSUFBL0c7QUFDSCxDQUpEO0FBTUFkLENBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCWSxFQUFyQixDQUF3Qix5QkFBeEIsRUFBbUQsWUFBVztBQUMxRFosR0FBQyxDQUFDLDZCQUFELENBQUQsQ0FBaUNlLFFBQWpDLENBQTBDLG1DQUExQyxFQUErRUMsSUFBL0U7QUFDQWhCLEdBQUMsQ0FBQyw2QkFBRCxDQUFELENBQWlDZSxRQUFqQyxDQUEwQyxxQ0FBMUMsRUFBaUZDLElBQWpGO0FBQ0FoQixHQUFDLENBQUMsMERBQUQsQ0FBRCxDQUE4RGUsUUFBOUQsQ0FBdUUsbUNBQXZFLEVBQTRHQyxJQUE1RztBQUNILENBSkQ7QUFNQTs7QUFDQWhCLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCRyxXQUF4QixDQUFvQztBQUNoQ0MsTUFBSSxFQUFFLElBRDBCO0FBRWhDQyxRQUFNLEVBQUUsRUFGd0I7QUFHaENZLFlBQVUsRUFBRTtBQUNSLE9BQUc7QUFDQ1gsV0FBSyxFQUFFO0FBRFIsS0FESztBQUlSLFNBQUs7QUFDREEsV0FBSyxFQUFFO0FBRE4sS0FKRztBQU9SLFNBQUs7QUFDREEsV0FBSyxFQUFFO0FBRE47QUFQRztBQUhvQixDQUFwQztBQWdCQTs7QUFDQU4sQ0FBQyxDQUFDLDJCQUFELENBQUQsQ0FBK0JHLFdBQS9CLENBQTJDO0FBQ3ZDQyxNQUFJLEVBQUUsSUFEaUM7QUFFdkNDLFFBQU0sRUFBRSxDQUYrQjtBQUd2Q0UsS0FBRyxFQUFFLElBSGtDO0FBSXZDQyxTQUFPLEVBQUUsQ0FBQyx1REFBRCxFQUEwRCwwREFBMUQsQ0FKOEI7QUFLdkNTLFlBQVUsRUFBRTtBQUNSLE9BQUc7QUFDQ1gsV0FBSyxFQUFFO0FBRFI7QUFESztBQUwyQixDQUEzQztBQVlBOztBQUNBTixDQUFDLENBQUMsZUFBRCxDQUFELENBQW1CRyxXQUFuQixDQUErQjtBQUMzQkMsTUFBSSxFQUFFLElBRHFCO0FBRTNCQyxRQUFNLEVBQUUsRUFGbUI7QUFHM0JZLFlBQVUsRUFBRTtBQUNSLE9BQUc7QUFDQ1gsV0FBSyxFQUFFO0FBRFIsS0FESztBQUlSLFNBQUs7QUFDREEsV0FBSyxFQUFFO0FBRE4sS0FKRztBQU9SLFNBQUs7QUFDREEsV0FBSyxFQUFFO0FBRE47QUFQRztBQUhlLENBQS9CO0FBZ0JBOztBQUNBTixDQUFDLENBQUMsdUJBQUQsQ0FBRCxDQUEyQkcsV0FBM0IsQ0FBdUM7QUFDbkNFLFFBQU0sRUFBRSxDQUQyQjtBQUVuQ0ksVUFBUSxFQUFFLElBRnlCO0FBR25DRixLQUFHLEVBQUUsSUFIOEI7QUFJbkNXLFlBQVUsRUFBRSxTQUp1QjtBQUtuQ0MsV0FBUyxFQUFFLFVBTHdCO0FBTW5DWCxTQUFPLEVBQUUsQ0FBQyx1REFBRCxFQUEwRCwwREFBMUQsQ0FOMEI7QUFPbkNFLGlCQUFlLEVBQUUsSUFQa0I7QUFRbkNDLG9CQUFrQixFQUFFLElBUmU7QUFTbkNNLFlBQVUsRUFBRTtBQUNSLE9BQUc7QUFDQ1gsV0FBSyxFQUFFO0FBRFI7QUFESztBQVR1QixDQUF2QyxFOzs7Ozs7Ozs7OztBQ3hGQSx1QyIsImZpbGUiOiJhcHAuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKlxyXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXHJcbiAqXHJcbiAqIFdlIHJlY29tbWVuZCBpbmNsdWRpbmcgdGhlIGJ1aWx0IHZlcnNpb24gb2YgdGhpcyBKYXZhU2NyaXB0IGZpbGVcclxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cclxuICovXHJcblxyXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLnNjc3MgaW4gdGhpcyBjYXNlKVxyXG5pbXBvcnQgJy4vc3R5bGVzL2FwcC5zY3NzJztcclxuXHJcbi8vIHN0YXJ0IHRoZSBTdGltdWx1cyBhcHBsaWNhdGlvblxyXG5jb25zdCAkID0gcmVxdWlyZSgnanF1ZXJ5Jyk7XHJcbnJlcXVpcmUoJ2Jvb3RzdHJhcCcpO1xyXG5yZXF1aXJlKCdvd2wuY2Fyb3VzZWwnKTtcclxuY29uc3QgU2Nyb2xsUmV2ZWFsID0gcmVxdWlyZSgnc2Nyb2xscmV2ZWFsJyk7XHJcblxyXG4kKCcjY2Fyb3VzZWwnKS5vd2xDYXJvdXNlbCh7XHJcbiAgICBsb29wOiB0cnVlLFxyXG4gICAgbWFyZ2luOiAtMSxcclxuICAgIGl0ZW1zOiAxLFxyXG4gICAgbmF2OiB0cnVlLFxyXG4gICAgbmF2VGV4dDogWyc8aSBjbGFzcz1cImlvbi1pb3MtYXJyb3ctYmFja1wiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT4nLCAnPGkgY2xhc3M9XCJpb24taW9zLWFycm93LWZvcndhcmRcIiBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+J10sXHJcbiAgICBhdXRvcGxheTogdHJ1ZSxcclxuICAgIGF1dG9wbGF5VGltZW91dDogMzAwMCxcclxuICAgIGF1dG9wbGF5SG92ZXJQYXVzZTogdHJ1ZVxyXG59KTtcclxuXHJcbi8qLS0vIEFuaW1hdGUgQ2Fyb3VzZWwgLy0tKi9cclxuJCgnLmludHJvLWNhcm91c2VsJykub24oJ3RyYW5zbGF0ZS5vd2wuY2Fyb3VzZWwnLCBmdW5jdGlvbigpIHtcclxuICAgICQoJy5pbnRyby1jb250ZW50IC5pbnRyby10aXRsZScpLnJlbW92ZUNsYXNzKCdhbmltYXRlX196b29tSW4gYW5pbWF0ZV9fYW5pbWF0ZWQnKS5oaWRlKCk7XHJcbiAgICAkKCcuaW50cm8tY29udGVudCAuaW50cm8tcHJpY2UnKS5yZW1vdmVDbGFzcygnYW5pbWF0ZV9fZmFkZUluVXAgYW5pbWF0ZV9fYW5pbWF0ZWQnKS5oaWRlKCk7XHJcbiAgICAkKCcuaW50cm8tY29udGVudCAuaW50cm8tdGl0bGUtdG9wLCAuaW50cm8tY29udGVudCAuc3BhY2lhbCcpLnJlbW92ZUNsYXNzKCdhbmltYXRlX19mYWRlSW4gYW5pbWF0ZV9fYW5pbWF0ZWQnKS5oaWRlKCk7XHJcbn0pO1xyXG5cclxuJCgnLmludHJvLWNhcm91c2VsJykub24oJ3RyYW5zbGF0ZWQub3dsLmNhcm91c2VsJywgZnVuY3Rpb24oKSB7XHJcbiAgICAkKCcuaW50cm8tY29udGVudCAuaW50cm8tdGl0bGUnKS5hZGRDbGFzcygnYW5pbWF0ZV9fem9vbUluIGFuaW1hdGVfX2FuaW1hdGVkJykuc2hvdygpO1xyXG4gICAgJCgnLmludHJvLWNvbnRlbnQgLmludHJvLXByaWNlJykuYWRkQ2xhc3MoJ2FuaW1hdGVfX2ZhZGVJblVwIGFuaW1hdGVfX2FuaW1hdGVkJykuc2hvdygpO1xyXG4gICAgJCgnLmludHJvLWNvbnRlbnQgLmludHJvLXRpdGxlLXRvcCwgLmludHJvLWNvbnRlbnQgLnNwYWNpYWwnKS5hZGRDbGFzcygnYW5pbWF0ZV9fZmFkZUluIGFuaW1hdGVfX2FuaW1hdGVkJykuc2hvdygpO1xyXG59KTtcclxuXHJcbi8qLS0vIFByb3BlcnR5IG93bCAvLS0qL1xyXG4kKCcjcHJvcGVydHktY2Fyb3VzZWwnKS5vd2xDYXJvdXNlbCh7XHJcbiAgICBsb29wOiB0cnVlLFxyXG4gICAgbWFyZ2luOiAzMCxcclxuICAgIHJlc3BvbnNpdmU6IHtcclxuICAgICAgICAwOiB7XHJcbiAgICAgICAgICAgIGl0ZW1zOiAxLFxyXG4gICAgICAgIH0sXHJcbiAgICAgICAgNzY5OiB7XHJcbiAgICAgICAgICAgIGl0ZW1zOiAyLFxyXG4gICAgICAgIH0sXHJcbiAgICAgICAgOTkyOiB7XHJcbiAgICAgICAgICAgIGl0ZW1zOiAzLFxyXG4gICAgICAgIH1cclxuICAgIH1cclxufSk7XHJcblxyXG4vKi0tLyBQcm9wZXJ0eSBvd2wgb3dsIC8tLSovXHJcbiQoJyNwcm9wZXJ0eS1zaW5nbGUtY2Fyb3VzZWwnKS5vd2xDYXJvdXNlbCh7XHJcbiAgICBsb29wOiB0cnVlLFxyXG4gICAgbWFyZ2luOiAwLFxyXG4gICAgbmF2OiB0cnVlLFxyXG4gICAgbmF2VGV4dDogWyc8aSBjbGFzcz1cImlvbi1pb3MtYXJyb3ctYmFja1wiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT4nLCAnPGkgY2xhc3M9XCJpb24taW9zLWFycm93LWZvcndhcmRcIiBhcmlhLWhpZGRlbj1cInRydWVcIj48L2k+J10sXHJcbiAgICByZXNwb25zaXZlOiB7XHJcbiAgICAgICAgMDoge1xyXG4gICAgICAgICAgICBpdGVtczogMSxcclxuICAgICAgICB9XHJcbiAgICB9XHJcbn0pO1xyXG5cclxuLyotLS8gTmV3cyBvd2wgLy0tKi9cclxuJCgnI25ldy1jYXJvdXNlbCcpLm93bENhcm91c2VsKHtcclxuICAgIGxvb3A6IHRydWUsXHJcbiAgICBtYXJnaW46IDMwLFxyXG4gICAgcmVzcG9uc2l2ZToge1xyXG4gICAgICAgIDA6IHtcclxuICAgICAgICAgICAgaXRlbXM6IDEsXHJcbiAgICAgICAgfSxcclxuICAgICAgICA3Njk6IHtcclxuICAgICAgICAgICAgaXRlbXM6IDIsXHJcbiAgICAgICAgfSxcclxuICAgICAgICA5OTI6IHtcclxuICAgICAgICAgICAgaXRlbXM6IDMsXHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG59KTtcclxuXHJcbi8qLS0vIFRlc3RpbW9uaWFscyBvd2wgLy0tKi9cclxuJCgnI3Rlc3RpbW9uaWFsLWNhcm91c2VsJykub3dsQ2Fyb3VzZWwoe1xyXG4gICAgbWFyZ2luOiAwLFxyXG4gICAgYXV0b3BsYXk6IHRydWUsXHJcbiAgICBuYXY6IHRydWUsXHJcbiAgICBhbmltYXRlT3V0OiAnZmFkZU91dCcsXHJcbiAgICBhbmltYXRlSW46ICdmYWRlSW5VcCcsXHJcbiAgICBuYXZUZXh0OiBbJzxpIGNsYXNzPVwiaW9uLWlvcy1hcnJvdy1iYWNrXCIgYXJpYS1oaWRkZW49XCJ0cnVlXCI+PC9pPicsICc8aSBjbGFzcz1cImlvbi1pb3MtYXJyb3ctZm9yd2FyZFwiIGFyaWEtaGlkZGVuPVwidHJ1ZVwiPjwvaT4nXSxcclxuICAgIGF1dG9wbGF5VGltZW91dDogNDAwMCxcclxuICAgIGF1dG9wbGF5SG92ZXJQYXVzZTogdHJ1ZSxcclxuICAgIHJlc3BvbnNpdmU6IHtcclxuICAgICAgICAwOiB7XHJcbiAgICAgICAgICAgIGl0ZW1zOiAxLFxyXG4gICAgICAgIH1cclxuICAgIH1cclxufSk7IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luIl0sInNvdXJjZVJvb3QiOiIifQ==