(()=>{"use strict";var t={723:t=>{t.exports=window.wp.i18n}},e={};function r(o){var n=e[o];if(void 0!==n)return n.exports;var a=e[o]={exports:{}};return t[o](a,a.exports,r),a.exports}r.n=t=>{var e=t&&t.__esModule?()=>t.default:()=>t;return r.d(e,{a:e}),e},r.d=(t,e)=>{for(var o in e)r.o(e,o)&&!r.o(t,o)&&Object.defineProperty(t,o,{enumerable:!0,get:e[o]})},r.o=(t,e)=>Object.prototype.hasOwnProperty.call(t,e);var o=r(723);const __=o.__;document.addEventListener("DOMContentLoaded",(()=>{document.querySelectorAll(".jetpack-post-list__copy-link-action").forEach((t=>{t.addEventListener("click",function(){let t;return function(e){e.preventDefault(),clearTimeout(t),window.navigator.clipboard.writeText(e.target.getAttribute("href")).then((()=>{e.target.textContent=__("Copied!","jetpack-post-list"),t=setTimeout((()=>{e.target.textContent=__("Copy link","jetpack-post-list")}),2e3)}))}}())}))}))})();