"use strict";

// eslint-disable-next-line no-console
console.log('Common All Page');

(function ($) {
  function ui_matchHeight() {
    $('.featuredPanel_item_content').matchHeight();
  }

  function ratingColor(dom) {
    var $rating = $(dom);
    $rating.each(function (i, val) {
      var score = parseFloat($(val).text());
      if (score < 6) $(val).css({
        backgroundColor: '#ff5a5a'
      });else if (score <= 7 && score >= 6) $(val).css({
        backgroundColor: '#E88100'
      });else if (score < 8 && score > 7) $(val).css({
        backgroundColor: '#DBAB0B'
      });else $(val).css({
        backgroundColor: '#E8E100'
      });
    });
  }

  $(function () {
    var msg = 'This field is required.';
    $('.form-validate').each(function (i, val) {
      $.validator.addMethod('pwcheck', function (value) {
        return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) && /[a-z]/.test(value) && /\d/.test(value);
      }); //Email validation

      $.validator.addMethod('i_mail', function (value, element) {
        return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);
      }, 'Please enter a valid email address.');
      $(val).validate({
        rules: {
          email: {
            required: true,
            email: true,
            i_mail: true
          },
          password: {
            required: true,
            minlength: 8,
            pwcheck: true
          },
          confirmPassword: {
            required: true,
            minlength: 8,
            equalTo: '#password'
          }
        },
        messages: {
          email: {
            required: msg
          },
          password: {
            required: msg,
            minlength: 'Please lengthen this text to 8 or more characters',
            pwcheck: 'Contain upper case, lowercase and either a number or symbol'
          },
          confirmPassword: {
            required: msg,
            minlength: 'Please match to password above',
            equalTo: 'The confirm password is not match'
          }
        }
      });
    });
    new WOW().init();
    ui_matchHeight();
    ratingColor('.customer-rating');
    ratingColor('.featuredPanel_rating');
  });
})(jQuery);
"use strict";

/* global SimpleBar */
function ui() {
  // Select UI
  $.fn.select2.defaults.set('width', '100%');
  $('.select-ui').each(function () {
    var el = $(this);
    var selectUI = el.select2({
      placeholder: el.data('placeholder')
    }); // Update UI Scroll - Open dropdown

    selectUI.on('select2:open', function () {
      var id = $('.select2-results  > .select2-results__options').attr('id');
      $('.select2-results').attr({
        id: id + '-group'
      }).queue(function (next) {
        new SimpleBar($('#' + id + '-group')[0]);
        next();
      });
    });
  }); // Range UI

  $('.range-ui').each(function (key) {
    var el = $(this);
    el.attr({
      id: 'range-ui-' + key
    }).queue(function (next) {
      $('#range-ui-' + key).ionRangeSlider();
      next();
    });
  }); // Scroll

  $('.scroll-ui').each(function (key) {
    var el = $(this);
    el.attr({
      id: 'scroll-ui-' + key
    }).queue(function (next) {
      new SimpleBar($('#' + el.attr('id'))[0]);
      next();
    });
  }); // File Browse UI

  $('.file-ui .file-ui-input').change(function (e) {
    if (typeof e.target.files[0] !== 'undefined') {
      var fileName = e.target.files[0].name;
      $(this).siblings('.file-ui-label').text(fileName);
    }
  }); // Parallax

  $('[data-paroller-factor]').paroller();
} // Image svg


function imgSVG() {
  $('img.svg').each(function () {
    var $img = $(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');
    $.get(imgURL, function (data) {
      // Get the SVG tag, ignore the rest
      var $svg = $(data).find('svg'); // Add replaced image's ID to the new SVG

      if (typeof imgID !== 'undefined') $svg = $svg.attr('id', imgID); // Add replaced image's classes to the new SVG

      if (typeof imgClass !== 'undefined') $svg = $svg.attr('class', imgClass + ' replaced-svg'); // Remove any invalid XML tags as per http://validator.w3.org

      $svg = $svg.removeAttr('xmlns:a'); // Replace image with new SVG

      $img.replaceWith($svg);
    }, 'xml');
  });
}

function gotoTop() {
  var topTop = $('.toTop');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) topTop.addClass('active');else topTop.removeClass('active');
  });
  topTop.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });
}

function init() {
  // Base
  // ui();
  // Image SVG
  imgSVG(); // Go to top

  gotoTop(); // $(window).on("debouncedresize", function (event) {
  //     // ...
  // });

  if (1 == 2) ui();
}

$('body').imagesLoaded(function () {
  init();
  $('body').addClass('loaded');
  $('.pageLoad').fadeOut();
});

(function ($) {
  function scrollMenuHeader() {
    var $navContainer = $('header.nav-menu .container-fluid');
    $(window).on('scroll', function () {
      var scrollDistance = $(window).scrollTop();

      if (scrollDistance > 80) {
        $navContainer.addClass('is-sticky');
      } else $navContainer.removeClass('is-sticky');
    });
  }

  function gridMasonry() {
    $('.gridGallery').masonry({
      itemSelector: '.gridGallery_item',
      // columnWidth: 200,
      gutter: 14,
      percentPosition: true,
      columnWidth: '.gridGallery-sizer',
      resize: true
    });
  }

  $(function () {
    scrollMenuHeader();
    gridMasonry();
  });
})(jQuery);