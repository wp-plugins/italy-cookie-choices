var elPos="fixed",infoClass="",closeClass="";!function(a){if(a.cookieChoices)return a.cookieChoices;var b=a.document,c="textContent"in b.body,d=function(){function a(a,c,d,e){var i="position:"+elPos+";width:100%;background-color:#eee;margin:0; left:0; top:0;padding:4px;z-index:9999;text-align:center;",j=b.createElement("div");return j.id=q,j.style.cssText=i,j.appendChild(f(a)),d&&e&&j.appendChild(h(d,e)),j.appendChild(g(c)),j}function d(a,c,d,e){var i="position:fixed;width:100%;height:100%;z-index:999;top:0;left:0;opacity:0.5;filter:alpha(opacity=50);background-color:#ccc;",j="z-index:1000;position:fixed;left:50%;top:50%",k="position:relative;left:-50%;margin-top:-25%;background-color:#fff;padding:20px;box-shadow:4px 4px 25px #888;",l=b.createElement("div");l.id=q;var m=b.createElement("div");m.style.cssText=i;var n=b.createElement("div");n.style.cssText=k;var o=b.createElement("div");o.style.cssText=j;var p=g(c);return p.style.display="block",p.style.textAlign="right",p.style.marginTop="8px",n.appendChild(f(a)),d&&e&&n.appendChild(h(d,e)),n.appendChild(p),o.appendChild(n),l.appendChild(m),l.appendChild(o),l}function e(a,b){c?a.textContent=b:a.innerText=b}function f(a){var c=b.createElement("span");return e(c,a),c}function g(a){var c=b.createElement("a");return e(c,a),c.id=r,c.className=closeClass,c.href="#",c.style.marginLeft="24px",c}function h(a,c){var d=b.createElement("a");return e(d,a),d.className=infoClass,d.href=c,d.target="_blank",d.style.marginLeft="8px",d}function i(){return n(),m(),!1}function j(c,e,f,g,h){if(o()){m();var j=h?d(c,e,f,g):a(c,e,f,g),k=b.createDocumentFragment();k.appendChild(j),b.body.appendChild(k.cloneNode(!0)),b.getElementById(r).onclick=i,b.onscroll=i}}function k(a,b,c,d){j(a,b,c,d,!1)}function l(a,b,c,d){j(a,b,c,d,!0)}function m(){var a=b.getElementById(q);null!==a&&a.parentNode.removeChild(a)}function n(){var a=new Date;a.setFullYear(a.getFullYear()+1),b.cookie=p+"=y; expires="+a.toGMTString()}function o(){return!b.cookie.match(new RegExp(p+"=([^;]+)"))}var p="displayCookieConsent",q="cookieChoiceInfo",r="cookieChoiceDismiss",s={};return s.showCookieConsentBar=k,s.showCookieConsentDialog=l,s}();return a.cookieChoices=d,d}(this);