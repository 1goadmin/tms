//!Toggle mobile menu -------------------------------------------------------------------------------------------------------------------------->
//!I suggest to leave this function for it might break the whole navigation menu
let toggle = document.querySelector('.toggle');
let menu = document.querySelector('.menu');
function toggleMenu() {
    if (menu.classList.contains('active')) {
        menu.classList.remove('active');
        //*adds the menu(burger)
        toggle.querySelector("a").innerHTML = "<i class='fa fa-bars'></i>";
        document.getElementById("div1").removeAttribute("onclick");
        document.on
    } else {
        menu.classList.add("active");
        //*adds the close(x) icon
        document.getElementById("div1").setAttribute("onclick", "return false;");
        toggle.querySelector("a").innerHTML = "<i class='fa fa-times'></i>";
    }
}
//*Event listener
toggle.addEventListener('click', toggleMenu, false);
//!Toggle Mobile Menu -------------------------------------------------------------------------------------------------------------------------->
//!Submenu ------------------------------------------------------------------------------------------->
// ? there ar two choices of navmenu hover properties its either this or the new one
// todo merge the two navigation menu to have thier combined properties

// *Activate submenu --------------------------------------------------------------------------------------------------------------------------->
//!Toggle Mobile Menu -------------------------------------------------------------------------------------------------------------------------->

//!Submenu Toggle Effect Mobile Based ---------------------------------------------------------------------------------------------------------->
let items = document.querySelectorAll('.item');
  function toggleItem() {
    if (document.documentElement.clientWidth < 1100 && this.classList.contains("submenu-active")) {
        this.classList.remove("submenu-active");
    } else if (document.documentElement.clientWidth > 1000 && menu.querySelector(".submenu-active")) {
        menu.querySelector("submenu-active").classList.remove("submenu-active");
        this.classList.add("submenu-active");
    } else if (document.documentElement.clientWidth < 999 ) {
        this.classList.add("submenu-active");
    }
  }
  for (let item of items) {
    if (item.querySelector(".submenu")) {
        item.addEventListener("click", toggleItem, false);
        item.addEventListener("keypress", toggleItem, false);
    }
  }

  // let sol = document.querySelectorAll('.item');
  // function toggleItem2() {
  //   if (document.documentElement.clientWidth < 1100 && this.classList.contains("submenu-active2")) {
  //       this.classList.remove("submenu-active2");
  //   } else if (document.documentElement.clientWidth > 1000 && menu.querySelector(".submenu-active2")) {
  //       menu.querySelector("submenu-active2").classList.remove("submenu-active2");
  //       this.classList.add("submenu-active2");
  //   } else if (document.documentElement.clientWidth < 999 ) {
  //       this.classList.add("submenu-active2");
  //   }
  // }
  // for (let item of sol) {
  //   if (item.querySelector(".submenu2")) {
  //       item.addEventListener("click", toggleItem2, false);
  //       item.addEventListener("keypress", toggleItem2, false);
  //   }
  // }


//*Activate submenu ---------------------------------------------------------------------------------------------------------------------------->
//*Close Submenu From Anywhere  ---------------------------------------------------------------------------------------------------------------->
function closeSubmenu(e) {
  let isClickInside = menu.contains(e.target);

  if (!isClickInside && menu.querySelector(".submenu-active")) {
      menu.querySelector(".submenu-active").classList.remove("submenu-active");
  }
  else if (!isClickInside && menu.querySelector(".submenu-active2")) {
    menu.querySelector(".submenu-active2").classList.remove("submenu-active2");
  }
}
//*Close Submenu From Anywhere  ---------------------------------------------------------------------------------------------------------------->
//*Event listener
document.addEventListener("click", closeSubmenu, false);
//!Submenu Toggle Effect Mobile Based ---------------------------------------------------------------------------------------------------------->

//!Submenu MouseHover Effect Web Based --------------------------------------------------------------------------------------------------------->
//?Menu Hover
$('.item.has-submenu').on({
    mouseenter: function() {
      let self = $(this);
      setTimeout(function() {
        $('.item.has-submenu',).addClass("submenu-active");
      }, 0);
    }
  });
  $('.submenu').on({
    mouseleave: function() {
      let self = $(this);
      setTimeout(function() {
        $('.item.has-submenu').removeClass('submenu-active');
      }, 300);
    }
  });
  $('.submenu.scrolled').on({
    mouseleave: function() {
      var self = $(this);
      setTimeout(function() {
        $('.item.has-submenu.scrolled').removeClass('hover');
      }, 300);
    }
  });

  $('.item.sol.has-submenu2').on({
    mouseenter: function() {
      let self = $(this);
      setTimeout(function() {
        $('.item.sol.has-submenu2',).addClass("submenu-active2");
      }, 0);
    }
  });
  $('.submenu2').on({
    mouseleave: function() {
      let self = $(this);
      setTimeout(function() {
        $('.item.sol.has-submenu2',).removeClass('submenu-active2');
      }, 300);
    }
  });
  $('.submenu2.scrolled').on({
    mouseleave: function() {
      var self = $(this);
      setTimeout(function() {
        $('.item.sol.has-submenu2',).removeClass('submenu-active2');
      }, 300);
    }
  });


//TODO ---------------------------------------------------------------------------------------------------------------------------------------->

//?Menu Hover
//!Submenu MouseHover Effect Web Based -------------------------------------------------------------------------------->

//!MouseScroll Effect -------------------------------------------------------------------------------------------------------------------------->
$( document ).ready(function() {
  // Function to change the nav-bar on scroll
  $(window).scroll(function(){
      ($(window).scrollTop() >= 100) ? (
          // $(".invlogo").attr("src", scrollSrc),
          $('.fixed-nav-bar').addClass('scrolled'),
          $('.menu').addClass('scrolled'),
          $('.submenu').addClass('scrolled'),
          $('.submenu2').addClass('scrolled'),
          $('.item').addClass('scrolled'),
          $('.toggle').addClass('scrolled'),
          $('.son').addClass('scrolled')
      ) : (
          // $(".invlogo").attr("src", initialSrc),
          $('.fixed-nav-bar').removeClass('scrolled'),
          $('.menu').removeClass('scrolled'),
          $('.submenu').removeClass('scrolled'),
          $('.submenu2').removeClass('scrolled'),
          $('.item').removeClass('scrolled'),
          $('.toggle').removeClass('scrolled'),
          $('.son').removeClass('scrolled')
      );
  });
});
//!MouseScroll Effect -------------------------------------------------------------------------------------------------------------------------->

