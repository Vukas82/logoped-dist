"use strict";function stickyHeader(){var e=document.getElementById("header"),t=document.querySelector(".slider"),o=e.offsetTop+500;window.pageYOffset>o-200?e.style.opacity=0:e.style.opacity=1,window.pageYOffset>o?(e.classList.add("sticky"),t.style.marginTop="80px"):(e.classList.remove("sticky"),t.style.marginTop="0px")}function stickyHeaderRefense(){var e=document.getElementById("header"),t=document.querySelector(".viewport"),o=e.offsetTop+330;window.pageYOffset>o-150?e.style.opacity=0:e.style.opacity=1,window.pageYOffset>o?(e.classList.add("sticky"),t.style.marginTop="60px"):(e.classList.remove("sticky"),t.style.marginTop="0px")}window.onscroll=function(){stickyHeader(),scrollFunction();var e=document.getElementById("home"),t=document.getElementById("services"),o=document.getElementById("o nama"),s=document.getElementById("usluge"),n=document.getElementById("section_o_nama"),a=document.getElementById("cenovnik__nav"),c=document.getElementById("galerija__nav"),l=document.getElementById("kontakt__nav"),r=document.getElementById("cenovnik"),i=document.getElementById("gallery"),d=document.getElementById("contact"),m=t.offsetTop,u=n.offsetTop,v=r.offsetTop,y=i.offsetTop,g=d.offsetTop,f=document.documentElement.scrollTop;console.log(f),console.log(v),f<m-200&&(e.classList.add("hover"),s.classList.remove("hover")),m-200<f&&(e.classList.remove("hover"),s.classList.add("hover"),o.classList.remove("hover")),u-100<f&&(s.classList.remove("hover"),o.classList.add("hover"),a.classList.remove("hover")),v-100<f&&(console.log("sekcija cenovnik"),o.classList.remove("hover"),a.classList.add("hover"),c.classList.remove("hover")),y-100<f&&(console.log("sekcija galerija"),a.classList.remove("hover"),c.classList.add("hover"),l.classList.remove("hover")),g-100<f&&(console.log("sekcija kontakt"),c.classList.remove("hover"),l.classList.add("hover"))};var tab1Btn=document.querySelector("#tab__1"),tab2Btn=document.querySelector("#tab__2"),tab3Btn=document.querySelector("#tab__3"),toggleBtn=function(){var e=document.querySelector("#tab__1"),t=document.querySelector("#tab__2"),o=document.querySelector("#tab__3"),s=document.querySelector("#tab1"),n=document.querySelector("#tab2"),a=document.querySelector("#tab3");e.setAttribute("data-tabSort","1"),t.setAttribute("data-tabSort","2"),o.setAttribute("data-tabSort","3"),s.setAttribute("data-tabSort","1"),n.setAttribute("data-tabSort","2"),a.setAttribute("data-tabSort","3");var c=this.getAttribute("data-tabSort"),l=s.getAttribute("data-tabSort"),r=n.getAttribute("data-tabSort"),i=a.getAttribute("data-tabSort");c===l&&(this.classList.add("active__2"),s.classList.remove("hidden"),n.classList.add("hidden"),a.classList.add("hidden"),t.classList.remove("active__2"),o.classList.remove("active__2")),c===r&&(this.classList.add("active__2"),n.classList.remove("hidden"),s.classList.add("hidden"),a.classList.add("hidden"),e.classList.remove("active__2"),o.classList.remove("active__2")),c===i&&(this.classList.add("active__2"),a.classList.remove("hidden"),s.classList.add("hidden"),n.classList.add("hidden"),e.classList.remove("active__2"),t.classList.remove("active__2"))},changeTabToActive2=function(){var t=this;Array.from(this.classList).forEach(function(e){"active__2"!==e&&t.classList.toggle("active__2")})};function toggle(e,t){"small-drop-btn"===btn.classList.value?btn.classList.add("is-active"):btn.classList.remove("is-active");var o=document.getElementById(e);"none"!=o.style.display?(o.style.display="none",document.getElementById(t).setAttribute("aria-expanded","true")):(o.style.display="",document.getElementById(t).setAttribute("aria-expanded","false"))}function topFunction(){document.body.scrollTop=0,document.documentElement.scrollTop=0}tab1Btn.addEventListener("click",toggleBtn),tab2Btn.addEventListener("click",toggleBtn),tab3Btn.addEventListener("click",toggleBtn);var mybutton=document.getElementById("myBtn");function scrollFunction(){800<document.body.scrollTop||800<document.documentElement.scrollTop?mybutton.style.display="block":(mybutton.style.display="none",console.log(document.body.scrollTop+"BTN"))}!function(){function o(e){e.preventDefault();var o=e.target,t=function(e){var a=e.elements,t=Object.keys(a).filter(function(e){return"honeypot"!==a[e].name}).map(function(e){return void 0!==a[e].name?a[e].name:0<a[e].length?a[e].item(0).name:void 0}).filter(function(e,t,o){return o.indexOf(e)==t&&e}),c={};return t.forEach(function(e){var t=a[e];if(c[e]=t.value,t.length){for(var o=[],s=0;s<t.length;s++){var n=t.item(s);(n.checked||n.selected)&&o.push(n.value)}c[e]=o.join(", ")}}),c.formDataNameOrder=JSON.stringify(t),c.formGoogleSheetName=e.dataset.sheet||"responses",c.formGoogleSendEmail=e.dataset.email||"",console.log(c),c}(o);if(function(e){if(e)return console.log("Robot Detected!"),!0;console.log("Welcome Human!")}(t.honeypot))return!1;var s=document.querySelector(".agreemment"),n=document.querySelector(".wrongForm");if(s.checked)if(console.log("slozio se sa uslovima"),n.classList.remove("wrong"),t.email&&!function(e){return/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i.test(e)}(t.email)){var a=o.querySelector(".email-invalid");if(a)return!(a.style.display="block")}else{!function(e){for(var t=e.querySelectorAll("button"),o=0;o<t.length;o++)t[o].disabled=!0}(o);var c=o.action,l=new XMLHttpRequest;l.open("POST",c),l.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),l.onreadystatechange=function(){console.log(l.status,l.statusText),console.log(l.responseText);var e=o.querySelector(".form-elements");e&&(e.style.display="none");var t=o.querySelector(".thankyou_message");t&&t.classList.add("show")};var r=Object.keys(t).map(function(e){return encodeURIComponent(e)+"="+encodeURIComponent(t[e])}).join("&");l.send(r)}else n.classList.add("wrong")}document.addEventListener("DOMContentLoaded",function(){console.log("Contact form submission handler loaded successfully.");for(var e=document.querySelectorAll("form.gform"),t=0;t<e.length;t++)e[t].addEventListener("submit",o,!1)},!1)}();