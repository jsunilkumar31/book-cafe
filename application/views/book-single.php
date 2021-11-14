<div id="content-page" class="content-page">
    <div class="container-fluid">
    <?php
        $image_url = base_url() . 'assets/uploads/book_covers/' . $book->image;
        if ($book->image == '') {
            $image_url = base_url() . 'assets/uploads/book_covers/no_image.png';
        }
    ?>
        <div class="row">
        <!-- sunilcode -->
        <script>

                ;window.Modernizr=function(a,b,c){function z(a){j.cssText=a}function A(a,b){return z(m.join(a+";")+(b||""))}function B(a,b){return typeof a===b}function C(a,b){return!!~(""+a).indexOf(b)}function D(a,b){for(var d in a){var e=a[d];if(!C(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function E(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:B(f,"function")?f.bind(d||b):f}return!1}function F(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+o.join(d+" ")+d).split(" ");return B(b,"string")||B(b,"undefined")?D(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),E(e,b,c))}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={},r={},s={},t=[],u=t.slice,v,w=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},x={}.hasOwnProperty,y;!B(x,"undefined")&&!B(x.call,"undefined")?y=function(a,b){return x.call(a,b)}:y=function(a,b){return b in a&&B(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=u.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(u.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(u.call(arguments)))};return e}),q.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:w(["@media (",m.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c},q.csstransforms3d=function(){var a=!!F("perspective");return a&&"webkitPerspective"in g.style&&w("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),a};for(var G in q)y(q,G)&&(v=G.toLowerCase(),e[v]=q[G](),t.push((e[v]?"":"no-")+v));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)y(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},z(""),i=k=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.testProp=function(a){return D([a])},e.testAllProps=F,e.testStyles=w,e.prefixed=function(a,b,c){return b?F(a,b,c):F(a,"pfx")},g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+t.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
        </script>
        <style>
            .bk-list {
                    list-style: none;
                    position: relative;
                }

                .bk-list li {
                    position: relative;
                    width: 300px;
                    float: left;
                    z-index: 1;
                    margin: 0px 50px 40px 0;
                    -webkit-perspective: 1800px;
                    perspective: 1800px;
                }

                .bk-list li:last-child {
                    margin-right: 0;
                }

                .bk-info {
                    position: relative;
                    margin-top: 330px;
                }

                .bk-info h3 {
                    padding: 25px 0 10px;
                    margin-bottom: 20px;
                    border-bottom: 1px solid rgba(0,0,0,0.3);
                    font-size: 26px;
                }

                .bk-info h3 span:first-child {
                    font-size: 14px;
                    font-weight: 400;
                    text-transform: uppercase;
                    padding-bottom: 5px;
                    display: block;
                    color: #777;
                }

                .bk-info p {
                    line-height: 24px;
                    color: #444;
                    min-height: 160px;
                }

                .bk-info button {
                    background: #182246;
                    border: none;
                    color: #fff;
                    display: inline-block;
                    padding: 3px 15px;
                    font-weight: 700;
                    font-size: 14px;
                    text-transform: uppercase;
                    cursor: pointer;
                    margin-right: 4px;
                    box-shadow: 1px 1px 1px rgba(0,0,0,0.15);
                }

                .bk-info button.bk-active,
                .bk-info button:active {
                    box-shadow: 
                        0 1px 0 rgba(255, 255, 255, 0.8), 
                        inset 0 -1px 1px rgba(0,0,0,0.2);
                }

                .no-touch .bk-info button:hover,
                .bk-info button.bk-active {
                    background: #fa7c04;
                }

                .bk-list li .bk-book {
                    position: absolute;
                    width: 70%;
                    height: 250px;
                    -webkit-transform-style: preserve-3d;
                    transform-style: preserve-3d;
                    -webkit-transition: -webkit-transform .5s;
                    transition: transform .5s;
                }

                .bk-list li .bk-book.bk-bookdefault:hover {
                    -webkit-transform: rotate3d(0,1,0,35deg);
                    transform: rotate3d(0,1,0,35deg);
                }

                .bk-list li .bk-book > div,
                .bk-list li .bk-front > div {
                    display: block;
                    position: absolute;
                }

                .bk-list li .bk-front {
                    -webkit-transform-style: preserve-3d;
                    transform-style: preserve-3d;
                    -webkit-transform-origin: 0% 50%;
                    transform-origin: 0% 50%;
                    -webkit-transition: -webkit-transform .5s;
                    transition: transform .5s;
                    -webkit-transform: translate3d(0,0,20px);
                    transform: translate3d(0,0,20px);
                    z-index: 10;
                }

                .bk-list li .bk-front > div {
                    z-index: 1;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transform-style: preserve-3d;
                    transform-style: preserve-3d;
                }

                .bk-list li .bk-page {
                    -webkit-transform: translate3d(0,0,19px);
                    transform: translate3d(0,0,19px);
                    display: none;
                    width: 200px;
                    height: 300px;
                    top: 0px;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    z-index: 9;
                }

                .bk-list li .bk-front,
                .bk-list li .bk-back,
                .bk-list li .bk-front > div {
                    width: 200px;
                    height: 300px;
                }

                .bk-list li .bk-left,
                .bk-list li .bk-right {
                    width: 40px;
                    left: -20px;
                }

                .bk-list li .bk-top,
                .bk-list li .bk-bottom {
                    width: 295px;
                    height: 40px;
                    top: -15px;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }

                .bk-list li .bk-back {
                    -webkit-transform: rotate3d(0,1,0,-180deg) translate3d(0,0,20px);
                    transform: rotate3d(0,1,0,-180deg) translate3d(0,0,20px);
                    box-shadow: 10px 10px 30px rgba(0,0,0,0.3);
                    border-radius: 3px 0 0 3px;
                }

                .bk-list li .bk-cover-back {
                    background-color: #000;
                    -webkit-transform: rotate3d(0,1,0,-179deg);
                    transform: rotate3d(0,1,0,-179deg);
                }

                .bk-list li .bk-right {
                    height: 250px;
                    top: 5px;
                    -webkit-transform: rotate3d(0,1,0,90deg) translate3d(0,0,295px);
                    -moz-transform: rotate3d(0,1,0,90deg) translate3d(0,0,295px);
                    transform: rotate3d(0,1,0,90deg) translate3d(0,0,295px);
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }

                .bk-list li .bk-left {
                    height: 300px;
                    -webkit-transform: rotate3d(0,1,0,-90deg);
                    transform: rotate3d(0,1,0,-90deg);
                }

                .bk-list li .bk-top {
                    -webkit-transform: rotate3d(1,0,0,90deg);
                    transform: rotate3d(1,0,0,90deg);
                }

                .bk-list li .bk-bottom {
                    -webkit-transform: rotate3d(1,0,0,-90deg) translate3d(0,0,390px);
                    transform: rotate3d(1,0,0,-90deg) translate3d(0,0,390px);
                }

                /* Transform classes */

                .bk-list li .bk-viewinside .bk-front {
                    -webkit-transform: translate3d(0,0,20px) rotate3d(0,1,0,-160deg);
                    transform: translate3d(0,0,20px) rotate3d(0,1,0,-160deg);
                }

                .bk-list li .bk-book.bk-viewinside {
                    -webkit-transform: translate3d(0,0,150px) rotate3d(0,1,0,0deg);
                    transform: translate3d(0,0,150px) rotate3d(0,1,0,0deg);
                }

                .bk-list li .bk-book.bk-viewback {
                    -webkit-transform: translate3d(0,0,0px) rotate3d(0,1,0,180deg);
                    transform: translate3d(0,0,0px) rotate3d(0,1,0,180deg);
                }

                /* Main colors and content */

                .bk-list li .bk-page,
                .bk-list li .bk-right,
                .bk-list li .bk-top,
                .bk-list li .bk-bottom {
                    background-color: #fff;
                }

                .bk-list li .bk-front > div {
                    border-radius: 0 3px 3px 0;
                    box-shadow: 
                        inset 4px 0 10px rgba(0, 0, 0, 0.1);
                }

                .bk-list li .bk-front:after {
                    content: '';
                    position: absolute;
                    top: 1px;
                    bottom: 1px;
                    left: -1px;
                    width: 1px;
                }

                .bk-list li .bk-cover:after,
                .bk-list li .bk-back:after {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 10px;
                    bottom: 0;
                    width: 3px;
                    background: rgba(0,0,0,0.06);
                    box-shadow: 1px 0 3px rgba(255, 255, 255, 0.1);
                }

                .bk-list li .bk-back:after {
                    left: auto;
                    right: 10px;
                }

                .bk-left h2 {
                    width: 250px;
                    height: 40px;
                    -webkit-transform-origin: 0 0;
                    -moz-transform-origin: 0 0;
                    transform-origin: 0 0;
                    -webkit-transform: rotate(90deg) translateY(-40px);
                    transform: rotate(90deg) translateY(-40px);
                }

                .bk-content {
                    position: absolute;
                    top: 30px;
                    left: 20px;
                    bottom: 20px;
                    right: 20px;
                    padding: 10px;
                    overflow: hidden;
                    background: #fff;
                    opacity: 0;
                    pointer-events: none;
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                    -webkit-transition: opacity 0.3s ease-in-out;
                    transition: opacity 0.3s ease-in-out;
                    cursor: default;
                }

                .bk-content-current {
                    opacity: 1;
                    pointer-events: auto;
                }

                .bk-content p {
                    padding: 0 0 10px;
                    -webkit-font-smoothing: antialiased;
                    color: #000;
                    font-size: 8px;
                    line-height: 20px;
                    text-align: justify;
                    -webkit-touch-callout: none;
                    -webkit-user-select: none;
                    -khtml-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }

                .bk-page nav {
                    display: block;
                    text-align: center;
                    margin-top: 10px;
                    position: relative;
                    z-index: 100;
                    cursor: pointer;
                }

                .bk-page nav span {
                    display: inline-block;
                    width: 20px;
                    height: 25px;
                    color: #aaa;
                    background: #f0f0f0;
                    border-radius: 50%;
                }

                /* Individual style & artwork */

                /* Book 1 */
                .book-1 .bk-front > div,
                .book-1 .bk-back,
                .book-1 .bk-left,
                .book-1 .bk-front:after {
                    background-color: #ff924a;
                }

                .book-1 .bk-cover {
                    background-image: url(<?= $image_url ?>);	
                    background-repeat: no-repeat;
                    background-position: 0px 0px;
                    background-size: cover;
                }

                .book-1 .bk-cover h2 {
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    left: 0;
                    padding: 30px;
                    background: rgba(255,255,255,0.2);
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,0.1);
                }

                .book-1 .bk-cover h2 span:first-child,
                .book-1 .bk-left h2 span:first-child {
                    text-transform: uppercase;
                    font-weight: 400;
                    font-size: 8px;
                    padding-right: 20px;
                }

                .book-1 .bk-cover h2 span:first-child {
                    display: block;
                }

                .book-1 .bk-cover h2 span:last-child,
                .book-1 .bk-left h2 span:last-child {
                    font-family: "Big Caslon", "Book Antiqua", "Palatino Linotype", Georgia, serif;
                } 

                .book-1 .bk-content p {
                    font-family: Georgia, Times, "Times New Roman", serif;
                }

                .book-1 .bk-left h2 {
                    color: #fff;
                    font-size: 8px;
                    line-height: 40px;
                    padding-right: 10px;
                    text-align: right;
                }

                .book-1 .bk-back p {
                    color: #fff;
                    font-size: 10px;
                    padding: 20px;
                    text-align: center;
                    font-weight: 700;
                }

                /* Book 2 */

                .book-2 .bk-front > div,
                .book-2 .bk-back,
                .book-2 .bk-left,
                .book-2 .bk-front:after {
                    background-color: #222;
                }

                .book-2 .bk-cover {
                    background-image: url(../images/2.png);	
                    background-repeat: no-repeat;
                    background-position: 98% 0%;
                }

                .book-2 .bk-cover h2, 
                .book-2 .bk-left h2 {
                    color: #fff;
                    font-family: 'the_godfatherregular', Georgia, serif;
                    font-weight: 400;
                }

                .book-2 .bk-cover h2 {
                    font-size: 138px;
                    line-height: 102px;
                    padding: 30px;
                }

                .book-2 .bk-cover h2 span:first-child {
                    position: relative;
                    display: block;
                }

                .book-2 .bk-cover h2 span:first-child:before {
                    content: 'A novel';
                    font-family: "Big Caslon", "Book Antiqua", "Palatino Linotype", Georgia, serif;
                    text-transform: uppercase;
                    position: absolute;
                    color: red;
                    font-size: 20px;
                    right: -15px;
                    bottom: -60px;
                }

                .book-2 .bk-cover h2 span:last-child {
                    font-size: 100px;
                    line-height: 80px;
                    display: block;
                    position: relative;
                }

                .book-2 .bk-cover h2 span:last-child:before {
                    content: 'by';
                    font-size: 16px;
                    color: red;
                    position: absolute;
                    top: -32px;
                    left: 62px;
                    font-family: "Big Caslon", "Book Antiqua", "Palatino Linotype", Georgia, serif;
                }

                .book-2 .bk-cover h2 span:last-child:after {
                    content: '';
                    width: 20px;
                    height: 20px;
                    border-radius: 50%;
                    background: #f9ed65;
                    position: absolute;
                    top: 5px;
                    left: 101px;
                }

                .book-2 .bk-left h2 {
                    font-size: 20px;
                    line-height: 40px;
                    padding-right: 10px;
                    text-align: right;
                }

                .book-2 .bk-back p {
                    color: red;
                    font-size: 13px;
                    font-family: "Big Caslon", "Book Antiqua", "Palatino Linotype", Georgia, serif;
                    padding: 40px;
                    text-align: center;
                }

                /* Book 3 */

                .book-3 .bk-front > div,
                .book-3 .bk-back,
                .book-3 .bk-left,
                .book-3 .bk-front:after {
                    background-color: #a4c19e;
                }

                .book-3 .bk-cover {
                    background-image: url(../images/3.png);	
                    background-repeat: no-repeat;
                    background-position: 100% 95%;
                }

                .book-3 .bk-cover h2 {
                    position: absolute;
                    top: 40px;
                    right: 40px;
                    left: 40px;
                    padding-top: 15px;
                    color: #fff;
                    text-shadow: 0 -1px 0 rgba(0,0,0,0.1);
                }

                .book-3 .bk-cover h2 span:first-child,
                .book-3 .bk-left h2 span:first-child {
                    text-transform: uppercase;
                    font-weight: 400;
                    font-size: 13px;
                    padding-right: 20px;
                }

                .book-3 .bk-cover h2 span:first-child {
                    display: block;
                }

                .book-3 .bk-cover h2 span:last-child,
                .book-3 .bk-left h2 span:last-child,
                .book-3 .bk-content p  {
                    font-family: Georgia, Times, "Times New Roman", serif;
                } 

                .book-3 .bk-left h2 {
                    color: #fff;
                    font-size: 14px;
                    line-height: 40px;
                    text-align: center;
                }

                .book-3 .bk-back img {
                    width: 200px;
                    display: block;
                    margin: 30px auto 0;
                }

                .book-3 .bk-back p {
                    color: #fff;
                    font-size: 13px;
                    font-family: Georgia, Times, "Times New Roman", serif;
                    padding: 40px;
                    text-align: center;
                    text-shadow: 0 -1px 0 rgba(0,0,0,0.1);
                }

                /* Fallbacks */

                .no-csstransforms3d .bk-list li .bk-book > div,
                .no-csstransforms3d .bk-list li .bk-book .bk-cover-back {
                    display: none;
                }

                .no-csstransforms3d .bk-list li .bk-book > div.bk-front {
                    display: block;
                }

                .no-csstransforms3d .bk-info button,
                .no-js .bk-info button {
                    display: none;
                }

        </style>
        

        <!-- sunilcode -->
            <div class="col-sm-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0 " style="color: #fa7c04;"><i>Book Description</i></h4>
                    </div>
                    <div class="iq-card-body pb-0">
                        <div class="description-contens align-items-top row">
                            <div class="col-md-4">
                            <div class="iq-social d-flexx align-items-center " style="position: absolute;left:5px;">
                                            
                                    <ul class="list-inline  p-0 mb-0 align-items-center">
                                        <li>
                                            <a href="#"
                                                class="avatar-40 rounded-circle bg-primary mb-2 facebook"><i
                                                    class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="avatar-40 rounded-circle bg-primary mb-2 twitter"><i
                                                    class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="avatar-40 rounded-circle bg-primary mb-2 youtube"><i
                                                    class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i
                                                    class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body p-0">
                                        <div class="row align-items-center">
                                            

                                            <div class="col-12">
                                                <ul id="description-sliderx"
                                                    class="list-inlinex d-block mx-auto align-items-center">
                                                    <div class="main">
                                                        <ul id="bk-list" class="bk-list clearfix">
                                                            <li>
                                                                <div class="bk-book book-1 bk-bookdefault">
                                                                    <div class="bk-front">
                                                                        <div class="bk-cover-back"></div>
                                                                        <div class="bk-cover">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="bk-page">
                                                                        <div class="bk-content bk-content-current">
                                                                            <p>Red snapper Kafue pike fangtooth humums slipmouth, salmon cutlassfish; swallower European perch mola mola sunfish, threadfin bream. Billfish hog sucker trout-perch lenok orbicular velvetfish. Delta smelt striped bass, medusafish dragon goby starry flounder cuchia round whitefish northern anchovy spadefish merluccid hake cat shark Black pickerel. Pacific cod.</p>
                                                                        </div>
                                                                        <div class="bk-content">
                                                                            <p>Whale catfish leatherjacket deep sea anglerfish grenadier sawfish pompano dolphinfish carp large-eye bream, squeaker amago. Sandroller; rough scad, tiger shovelnose catfish snubnose parasitic eel? Black bass soldierfish duckbill--Rattail Atlantic saury Blind shark California halibut; false trevally warty angler!</p>
                                                                        </div>
                                                                        <div class="bk-content">
                                                                            <p>Trahira giant wels cutlassfish snapper koi blackchin mummichog mustard eel rock bass whiff murray cod. Bigmouth buffalo ling cod giant wels, sauger pink salmon. Clingfish luderick treefish flatfish Cherubfish oldwife Indian mul gizzard shad hagfish zebra danio. Butterfly ray lizardfish ponyfish muskellunge Long-finned sand diver mullet swordfish limia ghost carp filefish.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="bk-back">
                                                                        <p>In this nightmare vision of cats in revolt, fifteen-year-old Alex and his friends set out on a diabolical orgy of robbery, rape, torture and murder. Alex is jailed for his teenage delinquency and the State tries to reform him - but at what cost?</p>
                                                                    </div>
                                                                    <div class="bk-right"></div>
                                                                    <div class="bk-left">
                                                                        <h2>
                                                                            <span><?php echo $book->book_title; ?></span>
                                                                            
                                                                        </h2>
                                                                    </div>
                                                                    <div class="bk-top"></div>
                                                                    <div class="bk-bottom"></div>
                                                                </div>
                                                                <div class="bk-info">
                                                                    <button class="bk-bookback">Flip</button>
                                                                    <button class="bk-bookview">View inside</button>
                                                                
                                                                </div>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                               
                                                    <!-- <img src="<?php //echo $image_url; ?>"
                                                         class="img-fluid w-75 rounded" alt=""> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 d-blockx ">
                                        <h4>Amazon Ratings : </h4>
                                        
                                        <span class="font-size-20 text-warning">
                                            <?php 
                                                $amazon_ratingmoduleofstart=0;
                                                $amazon_ratingroundvaluestar=0;
                                            if ($book->amazon_rating == "" || $book->amazon_rating == 0)
                                                # code...
                                                echo "Ratings not available";
                                            if($book->amazon_rating!=""){
                                                $amazon_ratingroundvaluestar=floor($book->amazon_rating);
                                                $amazon_ratingmoduleofstart=$book->amazon_rating-$amazon_ratingroundvaluestar;
                                            }
                                            if ($book->amazon_rating > 5) {
                                                # code...
                                                for ($i=0; $i < 5; $i++):
                                                    # code...
                                                    ?>
                                                    <i class="fa fa-star mr-1"></i>
                                                    <?php endfor; ?>
                                                <?php }else{
                                                for ($i=0; $i < $amazon_ratingroundvaluestar; $i++):
                                                    # code...
                                                    ?>
                                                    <i class="fa fa-star mr-1"></i>
                                                    <?php endfor;
                                                    if($amazon_ratingmoduleofstart){
                                                    ?> 
                                                    <i class="fa fa-star-half-o"></i>  
                                                    <?php   
                                                    }
                                                    }
                                            ?>
                                        </span>
                                    </div>
                                    <div class="mb-3 d-blockx ">
                                        <h4>Goodreads Ratings: </h4>
                                        <span class="font-size-20 text-warning">
                                        <?php 
                                        // echo $book->goodreads_rating;
                                        $goodreads_ratingroundvaluestar=0;
                                        $goodreads_ratingmoduleofstart=0;
                                         
                                            if ($book->goodreads_rating == "" || $book->goodreads_rating == 0 )
                                                # code...
                                                echo "Ratings not available";
                                            if($book->goodreads_rating!=""){
                                                $goodreads_ratingroundvaluestar=floor($book->goodreads_rating);
                                                $goodreads_ratingmoduleofstart=$book->goodreads_rating-$goodreads_ratingroundvaluestar;
                                            }
                                            if ($book->goodreads_rating > 5) {
                                                # code...
                                                for ($i=0; $i < 5; $i++):
                                                    # code...
                                                    ?>
                                                    <i class="fa fa-star mr-1"></i>
                                                    <?php endfor; ?>
                                                <?php }else{
                                                for ($i=0; $i < $goodreads_ratingroundvaluestar; $i++):
                                                    # code...
                                                    ?>
                                                   <i class="fa fa-star mr-1"></i>
                                                    <?php endfor;
                                                    if($goodreads_ratingmoduleofstart){
                                                    ?> 
                                                    <i class="fa fa-star-half-o"></i>  
                                                    <?php   
                                                    }
                                                    }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-8">
                               
                                <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body p-0">
                                        <h3 class="mb-3" style="color: #fa7c04;"><i><?php echo $book->book_title; ?></i></h3>
                                        <div class="price d-flex align-items-center font-weight-500 mb-2">
                                            <span class="font-size-20 pr-2 old-price d-none">Rs
                                                <?php echo $book->price; ?></span>
                                            <span class="font-size-24 text-dark">&#8377;. <?php echo $book->price; ?></span>
                                        </div>
                                        <div class="mb-3 d-blockx d-none">
                                            <span class="font-size-20 text-warning">
                                                <i class="fa fa-star mr-1"></i>
                                                <i class="fa fa-star mr-1"></i>
                                                <i class="fa fa-star mr-1"></i>
                                                <i class="fa fa-star mr-1"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <span class="text-dark mb-4 pb-4 iq-border-bottom d-block">
                                            <?php echo $book->description; ?>
                                        </span>
                                        <div class="text-primary mb-4">Author: <span
                                                class="text-body"><?php echo $book->author_name; ?></span></div>
                                        <div class="mb-4 d-flexx align-items-center d-nonex">
                                            <a href="<?php echo base_url('panel');?>" class="btn btn-primary view-more mr-2">Add To Borrow</a>
                                            <!-- <a href="book-pdf.html" class="btn btn-primary view-more mr-2 ">Read
                                                Sample</a> -->
                                        </div>
                                        <div class="mb-3">
                                            <a href="#" class="text-body text-center"><span
                                                    class="avatar-30 rounded-circle bg-primary d-inline-block mr-2"><i
                                                        class="ri-heart-fill"></i></span><span>Add to
                                                    Wishlist</span></a>
                                        </div>
                                        <div class="iq-social d-flexx align-items-center " style="float:right;">
                                            <h5 class="mr-2">Share:</h5>
                                            <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                                <li>
                                                    <a href="#"
                                                       class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i
                                                            class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                       class="avatar-40 rounded-circle bg-primary mr-2 twitter"><i
                                                            class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                       class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i
                                                            class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i
                                                            class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sunil added code -->
            <style>
                
                .progress-label-left
                {
                    /* float: left; */
                    margin-right: 0.5em;
                    line-height: 1em;
                }
                .progress-label-right
                {
                    float: right;
                    margin-left: 0.3em;
                    line-height: 1em;
                }
                .star-light
                {
                    color:#e9ecef;
                }
                .card {
                    border-radius: 5px;
                    background-color: #fff;
                    padding-left: 60px;
                    padding-right: 60px;
                    margin-top: 30px;
                    padding-bottom: 30px
                }

                .rating-box {
                    width: 130px;
                    height: 130px;
                    margin-right: auto;
                    margin-left: auto;
                    background-color: #FBC02D;
                    color: #fff
                }

                .rating-label {
                    font-weight: bold
                }

                .rating-bar {
                    width: 300px;
                    padding: 8px;
                    border-radius: 5px
                }

                .bar-container {
                    width: 100%;
                    background-color: #f1f1f1;
                    text-align: center;
                    color: white;
                    border-radius: 20px;
                    cursor: pointer;
                    margin-bottom: 5px
                }

                .bar-5 {
                    width: 70%;
                    height: 13px;
                    background-color: #FBC02D;
                    border-radius: 20px
                }

                .bar-4 {
                    width: 30%;
                    height: 13px;
                    background-color: #FBC02D;
                    border-radius: 20px
                }

                .bar-3 {
                    width: 20%;
                    height: 13px;
                    background-color: #FBC02D;
                    border-radius: 20px
                }

                .bar-2 {
                    width: 10%;
                    height: 13px;
                    background-color: #FBC02D;
                    border-radius: 20px
                }

                .bar-1 {
                    width: 0%;
                    height: 13px;
                    background-color: #FBC02D;
                    border-radius: 20px
                }

                td {
                    padding-bottom: 10px
                }

                .star-active {
                    /* color: #FBC02D; */
                    margin-top: 10px;
                    margin-bottom: 10px
                }

                .star-active:hover {
                    color: #F9A825;
                    cursor: pointer
                }

                .star-inactive {
                    color: #CFD8DC;
                    margin-top: 10px;
                    margin-bottom: 10px
                }

                .blue-text {
                    color: #0091EA
                }

                .content {
                    font-size: 18px
                }

                .profile-pic {
                    width: 90px;
                    height: 90px;
                    border-radius: 100%;
                    margin-right: 30px
                }

                .pic {
                    width: 80px;
                    height: 80px;
                    margin-right: 10px
                }

                .vote {
                    cursor: pointer
                }
                .timeline-dots {
                    position: absolute;
                    top: 30px;
                    border: 3px solid var(--iq-primary);
                    border-radius: 90px;
                    padding: 5px;
                    background: var(--iq-white);
                    height: 40px;
                    width: 40px;
                    line-height: 25px;
                    text-align: center;
                }
                .timeline-dots h3{
                    line-height: 20px;      
                }
            </style>
            
            <div class="col-lg-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                    <h4 class="card-title mb-0">Reviews </h4>
                        <div class="iq-header-title">
                            
                            <button type="button" name="add_review" id="add_review" class="btn btn-primary" data-toggle="modal" data-target="#myreviewmodal" style="float:right;">ADD Review</button>
                        </div>
                    </div>
                    
                    <div class="q-card-body single-similar-contens" id="review_rating_value_check" style="display:none;">
                        <div class="container-fluid px-1 py-5 mx-auto">
                            <div class="row">
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 text-center">
                                            <h1 class="text-warning mt-4 mb-4">
                                                <b><span id="average_rating">0.0</span> / 5</b>
                                            </h1>
                                            <div class="mb-3">
                                            <span class="fa fa-star star-active main_star mx-1" ></span>
                                            <span class="fa fa-star star-active main_star mx-1" ></span>
                                            <span class="fa fa-star star-active main_star mx-1" ></span>
                                            <span class="fa fa-star star-active main_star mx-1" ></span>
                                            <span class="fa fa-star star-active main_star mx-1" ></span>
                                            <i class="fa fa-star-half-o star-active half_main_star"></i>  
                                            </div>
                                            <h3><span id="total_review">0</span> Review</h3>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>
                                                <div class="progress-label-left"><b>5</b> 
                                                <span class="fa fa-star star-active text-warning mx-1" ></span>
                                                </div>

                                                <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                                                </div>
                                            </p>
                                            <p>
                                                <div class="progress-label-left"><b>4</b> 
                                                <span class="fa fa-star star-active text-warning mx-1" ></span>
                                                </div>
                                                
                                                <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                                                </div>               
                                            </p>
                                            <p>
                                                <div class="progress-label-left"><b>3</b>   <span class="fa fa-star star-active text-warning mx-1" ></span>
                                                </div>
                                                
                                                <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                                                </div>               
                                            </p>
                                            <p>
                                                <div class="progress-label-left"><b>2</b>   <span class="fa fa-star star-active text-warning mx-1" ></span>
                                                </div>
                                                
                                                <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                                                </div>               
                                            </p>
                                            <p>
                                                <div class="progress-label-left"><b>1</b>   <span class="fa fa-star star-active text-warning mx-1" ></span>
                                                </div>
                                                
                                                <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                                                </div>               
                                            </p>
                                        </div>
                                    
                                    </div>
                                    
                                    <div class="col-md-12" id="review_content" style="height: 600px; overflow: auto;">
                                        
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myreviewmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
                <div class="modal-body">
                    <div class="embed-responsive">
                    <h4 class="text-center ">
                    <span class="fa fa-star star-active submit_star mx-1" id="submit_star_1" data-rating="1"></span>
	        		<span class="fa fa-star star-active submit_star mx-1" id="submit_star_2" data-rating="2"></span>
                    <span class="fa fa-star star-active submit_star mx-1" id="submit_star_3" data-rating="3"></span>
                    <span class="fa fa-star star-active submit_star mx-1" id="submit_star_4" data-rating="4"></span>
                    <span class="fa fa-star star-active submit_star mx-1" id="submit_star_5" data-rating="5"></span>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
            <!-- sunil added code -->
            <div class="col-lg-12">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">Similar Books</h4>
                        </div>
                        <!-- <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                        </div> -->
                    </div>
                    <div class="iq-card-body single-similar-contens">
                        <ul id="single-similar-slider1" class="list-inline p-0 mb-0 row">
                        <?php if ($cater): ?>
                            <?php for($i=0;$i < count($cater);$i++): ?>
                                <?php
                                
                                if ($book->book_id!=$cater[$i]->book_id) {
                                    # code...
                                //  echo "<pre>";  print_r($cater[$i]->image);echo"</pre>";
                                $image_url = base_url() . 'assets/uploads/book_covers/' . $cater[$i]->image;
                                if ($cater[$i]->image == '') {
                                    $image_url = base_url() . 'assets/uploads/book_covers/no_image.png';
                                }

                                // -------creator: darshan---------number of copies of book
                                $book_copies = $book->book_copies;
                                if($book_copies == 0){
                                    $book_copies = 'In Circulation';
                                }
                                ?>
                                <li>
                                    <div class="">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                        <div class="iq-card-body p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                    <a href="javascript:void();"><img class="img-fluid rounded w-100" src="<?= $image_url; ?>" alt=""></a>
                                                                <div class="view-book">
                                                        <a href="<?php echo base_url('book/' . $cater[$i]->book_id); ?>" class="btn btn-sm btn-white">View Book</a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1"><?= $cater[$i]->book_title ?></h6>
                                                        <p class="font-size-13 line-height mb-1"><?php //$cater[$i]->author_name ?></p>
                                                        <div class="d-block line-height">
                                                            <span class="font-size-11 text-warning d-none">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>                                             
                                                        </div>
                                                        
                                                    </div>
                                                
                                                    <div class="price d-flex align-items-center">
                                                        <span class="pr-1 old-price d-none">&#8377;. <?= $cater[$i]->price ?></span>
                                                        <h6><b>&#8377;. <?= $cater[$i]->price ?></b></h6>
                                                    </div>

                                                    <!-- -------creator: darshan---------number of copies of book-->
                                                    <div class="">
                                                        <span>Number of Copies: <?=$book_copies;?></span>
                                                    </div>
                                                    <!-- -------creator: darshan---------end number of copies of book-->
                                                    <div class="">
                                                        <a href="<?php echo base_url('book/' . $cater[$i]->book_id); ?>" class="btn btn-sm btn-white" style="background: var(--iq-primary);color: var(--iq-white);border-color: var(--iq-primary);">View Book</a>
                                                        
                                                        
                                                        
                                                    </div>
                                                    <div class="iq-product-action d-none">
                                                        <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>   
                                                    
                                                    </div>
                                                
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                             
                                </li>
                            <?php }else{ } endfor; ?>
                                <?php else: ?>
                                <!-- Creator - Darshan - Just to check for pdf of e book -->
                                <a href="<?php echo base_url('view_ebook/72'); ?>" class="btn btn-sm btn-white">Read Book</a>
                                
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 is-hidden">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div
                        class="iq-card-header d-flex justify-content-between align-items-center position-relative mb-0 trendy-detail">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">Trendy Books</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                        </div>
                    </div>
                    <div class="iq-card-body trendy-contens">
                        <ul id="trendy-slider" class="list-inline p-0 mb-0 row">
                            <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                                          src="images/trendy-books/01.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <h6 class="mb-1">The Word Books Day..</h6>
                                            <p class="font-size-13 line-height mb-1">Paul Molive</p>
                                            <div class="d-block">
                                                <span class="font-size-13 text-warning">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$99</span>
                                            <h6><b>$89</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i
                                                    class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i
                                                    class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                                          src="images/trendy-books/02.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <h6 class="mb-1">The catcher in the Rye</h6>
                                            <p class="font-size-13 line-height mb-1">Anna Sthesia</p>
                                            <div class="d-block">
                                                <span class="font-size-13 text-warning">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$89</span>
                                            <h6><b>$79</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i
                                                    class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i
                                                    class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                                          src="images/trendy-books/03.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <h6 class="mb-1">Little Black Book</h6>
                                            <p class="font-size-13 line-height mb-1">Monty Carlo</p>
                                            <div class="d-block">
                                                <span class="font-size-13 text-warning">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$100</span>
                                            <h6><b>$89</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i
                                                    class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i
                                                    class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                                          src="images/trendy-books/04.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <h6 class="mb-1">Take The Risk Book</h6>
                                            <p class="font-size-13 line-height mb-1">Smith goal</p>
                                            <div class="d-block">
                                                <span class="font-size-13 text-warning">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$120</span>
                                            <h6><b>$99</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i
                                                    class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i
                                                    class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                                          src="images/trendy-books/05.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <h6 class="mb-1">The Raze Night Book </h6>
                                            <p class="font-size-13 line-height mb-1">Paige Turner</p>
                                            <div class="d-block">
                                                <span class="font-size-13 text-warning">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$150</span>
                                            <h6><b>$129</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i
                                                    class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i
                                                    class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                                        <a href="javascript:void();"><img class="img-fluid rounded w-100"
                                                                          src="images/trendy-books/06.jpg" alt=""></a>
                                        <div class="view-book">
                                            <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <h6 class="mb-1">Find the Wave Book..</h6>
                                            <p class="font-size-13 line-height mb-1">Barb Ackue</p>
                                            <div class="d-block">
                                                <span class="font-size-13 text-warning">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="price d-flex align-items-center">
                                            <span class="pr-1 old-price">$120</span>
                                            <h6><b>$100</b></h6>
                                        </div>
                                        <div class="iq-product-action">
                                            <a href="javascript:void();"><i
                                                    class="ri-shopping-cart-2-fill text-primary"></i></a>
                                            <a href="javascript:void();" class="ml-2"><i
                                                    class="ri-heart-fill text-danger"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 is-hidden">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">Favorite Reads</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                        </div>
                    </div>
                    <div class="iq-card-body favorites-contens">
                        <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                            <li class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative">
                                        <a href="javascript:void();">
                                            <img src="images/favorite/01.jpg" class="img-fluid rounded w-100" alt="">
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <h5 class="mb-2">Every Book is a new Wonderful Travel..</h5>
                                        <p class="mb-2">Author : Pedro Araez</p>
                                        <div
                                            class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                            <span>Reading</span>
                                            <span class="mr-4">78%</span>
                                        </div>
                                        <div class="iq-progress-bar-linear d-inline-block w-100">
                                            <div class="iq-progress-bar iq-bg-primary">
                                                <span class="bg-primary" data-percent="78"></span>
                                            </div>
                                        </div>
                                        <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative">
                                        <a href="javascript:void();">
                                            <img src="images/favorite/02.jpg" class="img-fluid rounded w-100" alt="">
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <h5 class="mb-2">Casey Christie night book into find...</h5>
                                        <p class="mb-2">Author : Michael klock</p>
                                        <div
                                            class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                            <span>Reading</span>
                                            <span class="mr-4">78%</span>
                                        </div>
                                        <div class="iq-progress-bar-linear d-inline-block w-100">
                                            <div class="iq-progress-bar iq-bg-danger">
                                                <span class="bg-danger" data-percent="78"></span>
                                            </div>
                                        </div>
                                        <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative">
                                        <a href="javascript:void();">
                                            <img src="images/favorite/03.jpg" class="img-fluid rounded w-100" alt="">
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <h5 class="mb-2">The Secret to English Busy People..</h5>
                                        <p class="mb-2">Author : Daniel Ace</p>
                                        <div
                                            class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                            <span>Reading</span>
                                            <span class="mr-4">78%</span>
                                        </div>
                                        <div class="iq-progress-bar-linear d-inline-block w-100">
                                            <div class="iq-progress-bar iq-bg-info">
                                                <span class="bg-info" data-percent="78"></span>
                                            </div>
                                        </div>
                                        <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative">
                                        <a href="javascript:void();">
                                            <img src="images/favorite/04.jpg" class="img-fluid rounded w-100" alt="">
                                        </a>
                                    </div>
                                    <div class="col-7">
                                        <h5 class="mb-2">The adventures of Robins books...</h5>
                                        <p class="mb-2">Author : Luka Afton</p>
                                        <div
                                            class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                            <span>Reading</span>
                                            <span class="mr-4">78%</span>
                                        </div>
                                        <div class="iq-progress-bar-linear d-inline-block w-100">
                                            <div class="iq-progress-bar iq-bg-success">
                                                <span class="bg-success" data-percent="78"></span>
                                            </div>
                                        </div>
                                        <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>
            
            var Books = (function() {

                var $books = $( '#bk-list > li > div.bk-book' ), booksCount = $books.length;

                function init() {

                    $books.each( function() {
                        
                        var $book = $( this ),
                            $other = $books.not( $book ),
                            $parent = $book.parent(),
                            $page = $book.children( 'div.bk-page' ),
                            $bookview = $parent.find( 'button.bk-bookview' ),
                            $content = $page.children( 'div.bk-content' ), current = 0;

                        $parent.find( 'button.bk-bookback' ).on( 'click', function() {				
                            
                            $bookview.removeClass( 'bk-active' );

                            if( $book.data( 'flip' ) ) {
                                
                                $book.data( { opened : false, flip : false } ).removeClass( 'bk-viewback' ).addClass( 'bk-bookdefault' );

                            }
                            else {
                                
                                $book.data( { opened : false, flip : true } ).removeClass( 'bk-viewinside bk-bookdefault' ).addClass( 'bk-viewback' );

                            }
                                
                        } );

                        $bookview.on( 'click', function() {

                            var $this = $( this );			
                            
                            $other.data( 'opened', false ).removeClass( 'bk-viewinside' ).parent().css( 'z-index', 0 ).find( 'button.bk-bookview' ).removeClass( 'bk-active' );
                            if( !$other.hasClass( 'bk-viewback' ) ) {
                                $other.addClass( 'bk-bookdefault' );
                            }

                            if( $book.data( 'opened' ) ) {
                                $this.removeClass( 'bk-active' );
                                $book.data( { opened : false, flip : false } ).removeClass( 'bk-viewinside' ).addClass( 'bk-bookdefault' );
                            }
                            else {
                                $this.addClass( 'bk-active' );
                                $book.data( { opened : true, flip : false } ).removeClass( 'bk-viewback bk-bookdefault' ).addClass( 'bk-viewinside' );
                                $parent.css( 'z-index', booksCount );
                                current = 0;
                                $content.removeClass( 'bk-content-current' ).eq( current ).addClass( 'bk-content-current' );
                            }

                        } );

                        if( $content.length > 1 ) {

                            var $navPrev = $( '<span class="bk-page-prev">&lt;</span>' ),
                                $navNext = $( '<span class="bk-page-next">&gt;</span>' );
                            
                            $page.append( $( '<nav></nav>' ).append( $navPrev, $navNext ) );

                            $navPrev.on( 'click', function() {
                                if( current > 0 ) {
                                    --current;
                                    $content.removeClass( 'bk-content-current' ).eq( current ).addClass( 'bk-content-current' );
                                }
                                return false;
                            } );

                            $navNext.on( 'click', function() {
                                if( current < $content.length - 1 ) {
                                    ++current;
                                    $content.removeClass( 'bk-content-current' ).eq( current ).addClass( 'bk-content-current' );
                                }
                                return false;
                            } );

                        }
                        
                    } );

                }

                return { init : init };

                })();
        </script>
        <script>
			$(function() {

				Books.init();

			});
		</script>

<script>

$(document).ready(function(){

	var rating_data = 0;

    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

        for(var count = 1; count <= rating; count++)
        {

            $('#submit_star_'+count).addClass('text-warning');

        }

    });

    function reset_background()
    {
        for(var count = 1; count <= 5; count++)
        {

            $('#submit_star_'+count).addClass('star-light');

            $('#submit_star_'+count).removeClass('text-warning');

        }
    }

    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });

    $(document).on('click', '.submit_star', function(){

        rating_data = $(this).data('rating');

    });

    $('#save_review').click(function(){

        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        if(user_name == '' || user_review == '')
        {
            alert("Please Fill Both Field");
            return false;
        }
        else
        {
            $.ajax({
                url:"<?=base_url()?>index.php/Books/submit_reviews",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review, book_id:<?php echo $book->book_id;?>},
                success:function(data)
                {
                    $('#myreviewmodal').modal('hide');

                    load_rating_data();
                    location.reload();
                    // alert(data);
                }
            })
        }

    });

    load_rating_data();

    function load_rating_data()
    {
        $.ajax({
            url:"<?=base_url()?>index.php/Books/load_reviews",
            method:"POST",
            data:{book_id:<?php echo $book->book_id;?>},
            dataType:"JSON",
            success:function(data)
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;
                exact_value_start=Math.floor(data.average_rating);
                dec_of_start=data.average_rating-exact_value_start;
                // console.log(data.average_rating);
                if(data.average_rating != 0 || data.average_rating != ""){
                    
                    // $('#review_rating_value_check').hide();
                    $("#review_rating_value_check").show();
                }
                $('.main_star').each(function(){
                    count_star++;
                    if(exact_value_start >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }else{
                        $(this).removeClass('fa-star');
                        $(this).removeClass('mx-1');
                    }
                    
                });
                $('.half_main_star').each(function(){
                    if(dec_of_start){
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light'); 
                    }else{
                        $(this).removeClass('fa-star-half-o');
                        
                    }
                    
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3 mt-4">';
                        html += '<div class="col-sm-1"></div>';
                        html += '<div class="col-sm-1"><div class="timeline-dots border-primary"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-9">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }
                            
                            html += '<span class="fa fa-star star-active '+class_name+' mr-1"></span>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';
                        html += '<div class="col-sm-1"></div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>