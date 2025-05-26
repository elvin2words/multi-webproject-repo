// script in common
// hide and show icon
      $(function () {
        $('.logo-dark').hide();
        $('.logo-light').show();
      });
// sub -menu
      $(".sub-menu-link").click(function () {
        var target = $(this).parent().children(".nav-submenu");
        $(target).slideToggle();
      });
       
// header scroll
      var prevScrollpos = window.pageYOffset;
      window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (currentScrollPos > 0) {
          $('.header').css('background-color', '#fff');
          $('.header-main .menus .menu>.menu-item>a').css('color', '#000');
          $('.header-main .menu-tools>li>a').css('color', '#000');
          $('.logo-dark').show();
          $('.logo-light').hide();
          $('.fa-bars').css('color', '#333333');

        } else {
           $('.header').css('background-color', 'transparent');
          $('.header-main .menus .menu>.menu-item>a').css('color', '#fff');
          $('.header-main .menus .menu>.menu-item>a.mobile-nav').css('color', '#000');
          $('.header-main .menus .menu .menu-item:hover::before').addClass('dot-color');
          // $('.header-main .menus .menu .menu-item').addClass('dot-color');
          $('.header-main .menu-tools>li>a').css('color', '#fff');
          $('.logo-dark').hide();
          $('.logo-light').show();
          $('.fa-bars').css('color', '#fff');
        }
        if (prevScrollpos > currentScrollPos) {
               $(".header").css("top","0px");
          
        } else {
          $(".header").css("top","-106px");
        }
        prevScrollpos = currentScrollPos;
      }
// opening menu
    
    function open_nav() {
      document.getElementById("sidenav-mobile").style.width = "80%";
      expand = false;
    }

    function close_nav() {
      document.getElementById("sidenav-mobile").style.width = "0";
    }
    //search bar pop up
     $("#search").click(function () {
            $('#menu_ani').removeClass('none'); 
            $('#menu_ani').addClass('show');
            setTimeout(function () {
                $('#menu_ani').removeClass('show'); 
                $('#menu_ani').addClass('none');
                $('#popup_search').modal('show');

            }, 1000);

        });