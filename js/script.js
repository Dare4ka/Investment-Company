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



var lang = $('.lang');
var langAll = $('.lang > ul');

function langOpen() {
    if(langAll.attr("style") == "display: none;") {
      langAll.attr("style","display: block;");
    }
    else {
      langAll.attr("style","display: none;");
    }
  }


function en() {
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

function ru() {
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
function es() {
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


function openBlock() {
  var block = $('#open');
  var arrow = $('#arrow');
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
