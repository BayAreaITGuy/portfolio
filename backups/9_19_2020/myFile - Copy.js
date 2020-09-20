      // typewriter https://codepen.io/hi-im-si/pen/DHoup
      var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 85 - Math.random() * 100; // higher delta = slower typing

        if (this.isDeleting) { delta /= 3; } // higher delta = quicker deletion

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
  //end of typewriter

        // Scroll to specific values - from https://css-tricks.com/snippets/jquery/smooth-scrolling/
        // scrollTo is the same
        window.scroll({
            top: 0, 
            left: 0, 
            behavior: 'smooth'
        });

        // Scroll certain amounts from current position 
        window.scrollBy({ 
            top: 0, // could be negative value
            left: 0, 
            behavior: 'smooth' 
        });

        // Scroll to a certain element
        document.querySelector('.hello').scrollIntoView({ 
            behavior: 'smooth' 
        });
  // end of scroll code

  // Hamburger menu https://mdbootstrap.com/docs/jquery/navigation/hamburger-menu/
  $(document).ready(function () {

  $('.first-button').on('click', function () {

    $('.animated-icon1').toggleClass('open');
  });
  });
  // end of hamburger code