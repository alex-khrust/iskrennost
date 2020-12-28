$(document).ready(function(){

// accordion

  // $(function() {
  //   var Accordion = function(el, multiple) {
  //     this.el = el || {};
  //     this.multiple = multiple || false;
  //     var links = this.el.find('.submenu-link');
  //     links.on('click', {
  //       el: this.el,
  //       multiple: this.multiple
  //     }, this.dropdown)
  //   }
  //   Accordion.prototype.dropdown = function(e) {
  //     var $el = e.data.el;
  //     $this = $(this),
  //       $next = $this.next();
  //     $next.slideToggle();
  //     $this.parent().toggleClass('open');
  //     if (!e.data.multiple) {
  //       $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
  //     };
  //   }
  //   var accordion = new Accordion($('#accordion'), false);
  // });

// menuRight

  var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
      showRightPush = document.getElementById( 'showRightPush' ),
      body = document.body;

    showRightPush.onclick = function() {
      classie.toggle( this, 'active' );
      classie.toggle( body, 'cbp-spmenu-push-toleft' );
      classie.toggle( menuRight, 'cbp-spmenu-open' );
      disableOther( 'showRightPush' );
    };

    function disableOther( button ) {
      if( button !== 'showRightPush' ) {
        classie.toggle( showRightPush, 'disabled' );
      }
    }

// owl-carousel

  var owl = $('#home-top_slider');
  owl.owlCarousel({
  	items: 1,
    lazyLoad: true,
    margin: 10,
    loop: true,
    autoplay: true,
    smartSpeed: 1500,
  	autoHeight: true,
  	center: true,
    nav: true,
    navText: ["<img src=\"/img/arrow_left.png\" alt=\"Назад\" />","<img src=\"/img/arrow_right.png\" alt=\"Вперёд\" />"]
  });


  var owl = $('#news-slider');
  owl.owlCarousel({
    lazyLoad: true,
    margin:20,
    loop:true,
    autoplay:true,
    smartSpeed:1500,
    responsiveClass:true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });


  var owl = $('#childs-slider');
  owl.owlCarousel({
    lazyLoad: true,
    margin:30,
    loop:true,
    autoplay:true,
    autoplaySpeed:4000,
    smartSpeed:3000,
    responsiveClass:true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });

  var owl = $('#pg-team_mission--slider');
  owl.owlCarousel({
    lazyLoad: true,
    margin:30,
    loop:true,
    autoplay:true,
    autoplaySpeed:4000,
    smartSpeed:3000,
    responsiveClass:true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });

//Галерея masonry

  jQuery('.grid-item').hover(
  function(){
    $(this).find(".cover-grid-item-gallery").fadeIn();
  },
  function(){
    $(this).find(".cover-grid-item-gallery").fadeOut();
  }
  );

  var $container = $(".grid");
  $container.imagesLoaded(function () {
    $container.masonry({
      itemSelector: '.grid-item',
      columnWidth: '.grid-item',
      
      gutter: 10,
      isFitWidth: true
    });
    // плагин для выравнивания картинок по размеру
    // $(".grid-item").imagefill();
  });

  // fancybox



});
