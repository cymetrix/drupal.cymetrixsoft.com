/**
 * tua-body-scroll-lock v1.5.0
 * (c) 2024 Evinma, BuptStEve
 * @license MIT
 */
!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?t(exports):"function"==typeof define&&define.amd?define(["exports"],t):t((e="undefined"!=typeof globalThis?globalThis:e||self).bodyScrollLock={})}(this,(function(e){"use strict";var t=function(){return"undefined"==typeof window},n=function(e){e=e||navigator.userAgent;var t=/(iPad).*OS\s([\d_]+)/.test(e);return{ios:!t&&/(iPhone\sOS)\s([\d_]+)/.test(e)||t,android:/(Android);?[\s/]+([\d.]+)?/.test(e)}};function o(){return"__BSL_PREVENT_DEFAULT__"in window||(window.__BSL_PREVENT_DEFAULT__=function(e){e.cancelable&&e.preventDefault()}),window.__BSL_PREVENT_DEFAULT__}var i={lockedNum:0,lockedElements:[],unLockCallback:null,documentListenerAdded:!1,initialClientPos:{clientX:0,clientY:0}};function l(e){if(t())return i;if(!(null==e?void 0:e.useGlobalLockState))return l.lockState;var n="__BSL_LOCK_STATE__"in window?Object.assign(Object.assign({},i),window.__BSL_LOCK_STATE__):i;return window.__BSL_LOCK_STATE__=n,n}l.lockState=i;var c=function(e){if(t())return!1;if(!e)throw new Error("options must be provided");var n=!1,o={get passive(){n=!0}},i=function(){},l="__TUA_BSL_TEST_PASSIVE__";window.addEventListener(l,i,o),window.removeEventListener(l,i,o);var c=e.capture;return n?e:void 0!==c&&c}({passive:!1});e.clearBodyLocks=function(e){if(!t()){var i=l(e);if(i.lockedNum=0,n().ios||"function"!=typeof i.unLockCallback){if(i.lockedElements.length)for(var d=i.lockedElements.pop();d;)d.ontouchmove=null,d.ontouchstart=null,d=i.lockedElements.pop();i.documentListenerAdded&&(document.removeEventListener("touchmove",o(),c),i.documentListenerAdded=!1)}else i.unLockCallback()}},e.lock=function(e,i){if(!t()){var d,r,s,u,a=l(i);if(n().ios){if(e)(Array.isArray(e)?e:[e]).forEach((function(e){e&&-1===a.lockedElements.indexOf(e)&&(e.ontouchstart=function(e){var t=e.targetTouches[0],n=t.clientX,o=t.clientY;a.initialClientPos={clientX:n,clientY:o}},e.ontouchmove=function(t){1===t.targetTouches.length&&function(e,t,n){if(t){var i=t.scrollTop,l=t.scrollLeft,c=t.scrollWidth,d=t.scrollHeight,r=t.clientWidth,s=t.clientHeight,u=e.targetTouches[0].clientX-n.clientX,a=e.targetTouches[0].clientY-n.clientY,f=Math.abs(a)>Math.abs(u);if(f&&(a>0&&0===i||a<0&&i+s+1>=d)||!f&&(u>0&&0===l||u<0&&l+r+1>=c))return o()(e)}e.stopPropagation()}(t,e,a.initialClientPos)},a.lockedElements.push(e))}));a.documentListenerAdded||(document.addEventListener("touchmove",o(),c),a.documentListenerAdded=!0)}else a.lockedNum<=0&&(a.unLockCallback=n().android?function(e){var t=document.documentElement,n=document.body,o=t.scrollTop||n.scrollTop,i=Object.assign({},t.style),l=Object.assign({},n.style);return t.style.height="100%",t.style.overflow="hidden",n.style.top="-".concat(o,"px"),n.style.width="100%",n.style.height="auto",n.style.position="fixed",n.style.overflow=(null==e?void 0:e.overflowType)||"hidden",function(){t.style.height=i.height||"",t.style.overflow=i.overflow||"",["top","width","height","overflow","position"].forEach((function(e){n.style[e]=l[e]||""})),"scrollBehavior"in document.documentElement.style?window.scrollTo({top:o,behavior:"instant"}):window.scrollTo(0,o)}}(i):(d=document.documentElement,r=Object.assign({},d.style),s=window.innerWidth-d.clientWidth,u=parseInt(window.getComputedStyle(d).paddingRight,10),d.style.overflow="hidden",d.style.boxSizing="border-box",d.style.paddingRight="".concat(s+u,"px"),function(){["overflow","boxSizing","paddingRight"].forEach((function(e){d.style[e]=r[e]||""}))}));a.lockedNum+=1}},e.unlock=function(e,i){if(!t()){var d=l(i);if(d.lockedNum-=1,!(d.lockedNum>0))if(n().ios||"function"!=typeof d.unLockCallback){if(e)(Array.isArray(e)?e:[e]).forEach((function(e){var t=d.lockedElements.indexOf(e);-1!==t&&(e.ontouchmove=null,e.ontouchstart=null,d.lockedElements.splice(t,1))}));d.documentListenerAdded&&(document.removeEventListener("touchmove",o(),c),d.documentListenerAdded=!1)}else d.unLockCallback()}}}));