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

(function ($) {
  function detail_prop_gallery_banner(img) {
    //facncy-box
    $("[data-fancybox=".concat(img, "]")).fancybox({
      aspectRatio: true,
      width: 900,
      // transitionEffect: "circular",
      // buttons: ['share', 'zoom', 'download', 'close'],
      // btnTpl: {
      //     download:
      //         '<a download data-fancybox-download class="fancybox-button fancybox-button--download" title="{{DOWNLOAD}}" href="javascript:;">' +
      //         '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.62 17.09V19H5.38v-1.91zm-2.97-6.96L17 11.45l-5 4.87-5-4.87 1.36-1.32 2.68 2.64V5h1.92v7.77z"/></svg>' +
      //         '</a>',
      //     zoom:
      //         '<button data-fancybox-zoom class="fancybox-button fancybox-button--zoom" title="{{ZOOM}}">' +
      //         '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.7 17.3l-3-3a5.9 5.9 0 0 0-.6-7.6 5.9 5.9 0 0 0-8.4 0 5.9 5.9 0 0 0 0 8.4 5.9 5.9 0 0 0 7.7.7l3 3a1 1 0 0 0 1.3 0c.4-.5.4-1 0-1.5zM8.1 13.8a4 4 0 0 1 0-5.7 4 4 0 0 1 5.7 0 4 4 0 0 1 0 5.7 4 4 0 0 1-5.7 0z"/></svg>' +
      //         '</button>',
      //     close:
      //         '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}">' +
      //         '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"/></svg>' +
      //         '</button>',
      //     // Arrows
      //     smallBtn: '<button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="{{CLOSE}}">' + '<svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"/></svg>' + '</button>',
      // },
      hash: true,
      share: {
        url: function url(instance, item) {
          if (item.type === 'inline' && item.contentType === 'video') return item.$content.find('source:first').attr('src');
          return item.src;
        }
      },
      thumbs: {
        autoStart: false // Display thumbnails on opening

      }
    });
  }

  function upload_avatar(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('.avatar-upload #imagePreview').css('background-image', 'url(' + e.target.result + ')');
        $('.avatar-upload #imagePreview').hide();
        $('.avatar-upload #imagePreview').fadeIn(650);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }

  $(function () {
    $('.avatar-upload #imageUpload').change(function () {
      upload_avatar(this);
    });
    $('.grid-gallery').masonry();
  });
})(jQuery);