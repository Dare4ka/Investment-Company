// window.onload = function () {
//   // document.getElementById('lang').onclick = function () {
//   //   var  x = document.getElementById('lang');
//   //     if (x.value === "en") {
//   //     x.className += " lang";
//   //     } 
//   //     if (x.value === "ru") {
//   //     x.className += " lang-ru";
//   //     } 
//   //     if (x.value === "es") {
//   //     x.className += " lang-es";
//   //     }  
//   // }
//   document.getElementById('arrow').onclick = function () {
//     var  open = document.getElementById('open');
//     var  arrow = document.getElementById('arrow');
//       if (open.className === "clouse", 
//         arrow.className === "down-arrow") {
//           open.className += " open";
//           arrow.className += " up-arrow";
//       } else {
//               open.className = "clouse";
//               arrow.className = "down-arrow";
//               }
//   } 
// }﻿


$(function () {
  

var lang = $('.lang');
var langAll = $('.lang > ul');

lang.click(function langOpen() {
    if(langAll.attr("style") == "display: none;") {
      langAll.attr("style","display: block;");
    }
    else {
      langAll.attr("style","display: none;");
    }
  }
);

$('.en').click(function en() {
  lang.removeClass('lang-ru lang-es');
  lang.addClass('lang-en');
  // langAll.removeClass('lang-open');
  // langAll.addClass('lang-clouse');
  function langOpen() {
    if(langAll.attr("style") == "display: none;") {
      langAll.attr("style","display: block;");
    }
    else {
      langAll.attr("style","display: none;");
    }
  }
}
);

$('.ru').click(function ru() {
  lang.removeClass('lang-en lang-es');
  lang.addClass('lang-ru');
  // langAll.attr("style","display: none;");
  function langOpen() {
    if(langAll.attr("style") == "display: none;") {
      langAll.attr("style","display: block;");
    }
    else {
      langAll.attr("style","display: none;");
    }
  }
}
);

$('.es').click(function es() {
  lang.removeClass('lang-ru lang-en');
  lang.addClass('lang-es');
  function langOpen() {
    if(langAll.attr("style") == "display: none;") {
      langAll.attr("style","display: block;");
    }
    else {
      langAll.attr("style","display: none;");
    }
  }
}
);

var modalCreate = function createAnAccount(event) {
    event.preventDefault();
    $('.create').attr("style","display: flex;");
    if($('.sing').attr("style") == "display: flex;") {
      $('.sing').attr("style","display: none;");
    }
    
};

$('#create-an-account').click(modalCreate);
$('.to-sing-up').click(modalCreate);

var clouseModalCreate = function clouseModalC() {
    
    $('.create').attr("style","display: none;");
  
};
$('.clouse-modal-create').click(clouseModalCreate);


var modalSingIn = function singIn(event) {
    event.preventDefault();
    $('.sing').attr("style","display: flex;");
    if($('.create').attr("style") == "display: flex;") {
      $('.create').attr("style","display: none;");
    }
  
};

var clouseModalSingIn = function clouseModalS() {
  
    $('.sing').attr("style","display: none;");
  
};

$('#sing-in').click(modalSingIn);
$('.to-sing-in').click(modalSingIn);
$('.clouse-modal-sing').click(clouseModalSingIn);
$('.need-to-sing-up').click(modalCreate);

  var block = $('#open');
  var arrow = $('#arrow');
arrow.click(function openBlock() {
  
  if(block.hasClass('clouse') && arrow.hasClass('down-arrow')) {
    block.removeClass('clouse');
    block.addClass('open');
    arrow.removeClass('down-arrow');
    arrow.addClass('up-arrow');
  }
  else {
    block.removeClass('open');
    block.addClass('clouse');
    arrow.removeClass('up-arrow');
    arrow.addClass('down-arrow');
  }
}
);
});