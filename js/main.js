

!function (e) {
  "use strict";
  $('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#slides"]')
    .click(function (event) {
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function () {
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) {
              return false;
            } else {
              $target.attr('tabindex', '-1');
              $target.focus();
            };
          });
        }
      }
    });
  var a = function () {
    100 < e("#mainNav").offset().top ? e("#mainNav").addClass("navbar-shrink") : e("#mainNav").removeClass("navbar-shrink")
  };
  a(),
    e(window).scroll(a), window.sr = ScrollReveal(), sr.reveal(".sr-icon-1", { delay: 200, scale: 0 }),
    sr.reveal(".sr-icon-2", { delay: 400, scale: 0 }), sr.reveal(".sr-icon-3", { delay: 600, scale: 0 }),
    sr.reveal(".sr-icon-4", { delay: 800, scale: 0 }), sr.reveal(".sr-button", { delay: 200, distance: "15px", origin: "bottom", scale: .8 }),
    sr.reveal(".sr-contact-1", { delay: 200, scale: 0 }), sr.reveal(".sr-contact-2", { delay: 400, scale: 0 })
}(jQuery);

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    document.getElementById("top").style.display = "block";
  } else {
    document.getElementById("top").style.display = "none";
  }
}


$('.cont').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });


