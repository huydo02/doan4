
<!doctype html>
<html lang="vi">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript">(window.NREUM||(NREUM={})).init={ajax:{deny_list:["bam.nr-data.net"]}};(window.NREUM||(NREUM={})).loader_config={licenseKey:"NRJS-75e0f7d19b930a3802e",applicationID:"916304774"};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var i=e[n]={exports:{}};t[n][0].call(i.exports,function(e){var i=t[n][1][e];return r(i||e)},i,i.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(t,e,n){function r(){}function i(t,e,n){return function(){return o(t,[u.now()].concat(f(arguments)),e?null:this,n),e?void 0:this}}var o=t("handle"),a=t(8),f=t(9),c=t("ee").get("tracer"),u=t("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(t,e){s[e]=i(p+e,!0,"api")}),s.addPageAction=i(p+"addPageAction",!0),s.setCurrentRouteName=i(p+"routeName",!0),e.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(t,e){var n={},r=this,i="function"==typeof e;return o(l+"tracer",[u.now(),t,n],r),function(){if(c.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return e.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],n),t}finally{c.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,e){m[e]=i(l+e)}),newrelic.noticeError=function(t,e){"string"==typeof t&&(t=new Error(t)),o("err",[t,u.now(),!1,e])}},{}],2:[function(t,e,n){function r(t){if(NREUM.init){for(var e=NREUM.init,n=t.split("."),r=0;r<n.length-1;r++)if(e=e[n[r]],"object"!=typeof e)return;return e=e[n[n.length-1]]}}e.exports={getConfiguration:r}},{}],3:[function(t,e,n){function r(){return f.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,f=t(10);e.exports=r,e.exports.offset=a,e.exports.getLastTimestamp=i},{}],4:[function(t,e,n){function r(t){return!(!t||!t.protocol||"file:"===t.protocol)}e.exports=r},{}],5:[function(t,e,n){function r(t,e){var n=t.getEntries();n.forEach(function(t){"first-paint"===t.name?d("timing",["fp",Math.floor(t.startTime)]):"first-contentful-paint"===t.name&&d("timing",["fcp",Math.floor(t.startTime)])})}function i(t,e){var n=t.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(t){t.getEntries().forEach(function(t){t.hadRecentInput||d("cls",[t])})}function a(t){if(t instanceof m&&!g){var e=Math.round(t.timeStamp),n={type:t.type};e<=p.now()?n.fid=p.now()-e:e>p.offset&&e<=Date.now()?(e-=p.offset,n.fid=p.now()-e):e=p.now(),g=!0,d("timing",["fi",e,n])}}function f(t){"hidden"===t&&d("pageHide",[p.now()])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var c,u,s,d=t("handle"),p=t("loader"),l=t(7),m=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){c=new PerformanceObserver(r);try{c.observe({entryTypes:["paint"]})}catch(v){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(v){}s=new PerformanceObserver(o);try{s.observe({type:"layout-shift",buffered:!0})}catch(v){}}if("addEventListener"in document){var g=!1,h=["click","keydown","mousedown","pointerdown","touchstart"];h.forEach(function(t){document.addEventListener(t,a,!1)})}l(f)}},{}],6:[function(t,e,n){function r(t,e){if(!i)return!1;if(t!==i)return!1;if(!e)return!0;if(!o)return!1;for(var n=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var f=navigator.userAgent,c=f.match(a);c&&f.indexOf("Chrome")===-1&&f.indexOf("Chromium")===-1&&(i="Safari",o=c[1])}e.exports={agent:i,version:o,match:r}},{}],7:[function(t,e,n){function r(t){function e(){t(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,e,!1)}e.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],8:[function(t,e,n){function r(t,e){var n=[],r="",o=0;for(r in t)i.call(t,r)&&(n[o]=e(r,t[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],9:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,i=n-e||0,o=Array(i<0?0:i);++r<i;)o[r]=t[e+r];return o}e.exports=r},{}],10:[function(t,e,n){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(t,e,n){function r(){}function i(t){function e(t){return t&&t instanceof r?t:t?u(t,c,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){t&&a&&t(n,r,i);for(var f=e(i),c=v(n),u=c.length,s=0;s<u;s++)c[s].apply(f,r);var p=d[w[n]];return p&&p.push([b,n,r,f]),f}}function o(t,e){y[t]=v(t).concat(e)}function m(t,e){var n=y[t];if(n)for(var r=0;r<n.length;r++)n[r]===e&&n.splice(r,1)}function v(t){return y[t]||[]}function g(t){return p[t]=p[t]||i(n)}function h(t,e){l.aborted||s(t,function(t,n){e=e||"feature",w[n]=e,e in d||(d[e]=[])})}var y={},w={},b={on:o,addEventListener:o,removeEventListener:m,emit:n,get:g,listeners:v,context:e,buffer:h,abort:f,aborted:!1};return b}function o(t){return u(t,c,a)}function a(){return new r}function f(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var c="nr@context",u=t("gos"),s=t(8),d={},p={},l=e.exports=i();e.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(t,e,n){function r(t,e,n){if(i.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return t[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){i.buffer([t],r),i.emit(t,e,n)}var i=t("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,o,function(){return i++})}var i=1,o="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!R++){var t=M.info=NREUM.info,e=v.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&e))return u.abort();c(E,function(e,n){t[e]||(t[e]=n)});var n=a();f("mark",["onload",n+M.offset],null,"api"),f("timing",["load",n]);var r=v.createElement("script");0===t.agent.indexOf("http://")||0===t.agent.indexOf("https://")?r.src=t.agent:r.src=l+"://"+t.agent,e.parentNode.insertBefore(r,e)}}function i(){"complete"===v.readyState&&o()}function o(){f("mark",["domContent",a()+M.offset],null,"api")}var a=t(3),f=t("handle"),c=t(8),u=t("ee"),s=t(6),d=t(4),p=t(2),l=p.getConfiguration("ssl")===!1?"http":"https",m=window,v=m.document,g="addEventListener",h="attachEvent",y=m.XMLHttpRequest,w=y&&y.prototype,b=!d(m.location);NREUM.o={ST:setTimeout,SI:m.setImmediate,CT:clearTimeout,XHR:y,REQ:m.Request,EV:m.Event,PR:m.Promise,MO:m.MutationObserver};var x=""+location,E={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1211.min.js"},O=y&&w&&w[g]&&!/CriOS/.test(navigator.userAgent),M=e.exports={offset:a.getLastTimestamp(),now:a,origin:x,features:{},xhrWrappable:O,userAgent:s,disabled:b};if(!b){t(1),t(5),v[g]?(v[g]("DOMContentLoaded",o,!1),m[g]("load",r,!1)):(v[h]("onreadystatechange",i),m[h]("onload",r)),f("mark",["firstbyte",a.getLastTimestamp()],null,"api");var R=0}},{}],"wrap-function":[function(t,e,n){function r(t,e){function n(e,n,r,c,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,c],s],t)}f(n+"start",[o,a,c],s,u);try{return p=e.apply(a,o)}catch(m){throw f(n+"err",[o,a,m],s,u),m}finally{f(n+"end",[o,a,p],s,u)}}return a(e)?e:(n||(n=""),nrWrapper[p]=e,o(e,nrWrapper,t),nrWrapper)}function r(t,e,r,i,o){r||(r="");var f,c,u,s="-"===r.charAt(0);for(u=0;u<e.length;u++)c=e[u],f=t[c],a(f)||(t[c]=n(f,s?c+r:r,i,c,o))}function f(n,r,o,a){if(!m||e){var f=m;m=!0;try{t.emit(n,r,o,e,a)}catch(c){i([c,n,r,o],t)}m=f}}return t||(t=s),n.inPlace=r,n.flag=p,n}function i(t,e){e||(e=s);try{e.emit("internal-error",t)}catch(n){}}function o(t,e,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(t);return r.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(o){i([o],n)}for(var a in t)l.call(t,a)&&(e[a]=t[a]);return e}function a(t){return!(t&&t instanceof Function&&t.apply&&!t[p])}function f(t,e){var n=e(t);return n[p]=t,o(t,n,s),n}function c(t,e,n){var r=t[e];t[e]=f(r,n)}function u(){for(var t=arguments.length,e=new Array(t),n=0;n<t;++n)e[n]=arguments[n];return e}var s=t("ee"),d=t(9),p="nr@original",l=Object.prototype.hasOwnProperty,m=!1;e.exports=r,e.exports.wrapFunction=f,e.exports.wrapInPlace=c,e.exports.argsToArray=u},{}]},{},["loader"]);</script>
    <meta name="google-site-verification" content="OKTck9wDNpRbrEIn_nA3VTYsznd8NcVJlivXJdKGx40"/>
    
    <link rel="shortcut icon" href="/images/favicon-96x96.png"/>
    <title>Thanh toán - Cool Mate</title>
    <meta name="description" content=""/>
    <link rel="canonical" href="https://www.coolmate.me/cart">

        <meta name="_token" content="PQQbnSE60YL7l7HGCNmiIxGF76J2tGcE74so2l0J"/>
    <script>
        var cool_mate_settings = {
            DEVICE_TOKEN: "c9294df9e00125141f235cbe4f3a3980",
            BOX_TOKEN: "874aad61056355d7056e622b2a9ba31d",
            API_URL: 'https://apiv2.coolmate.me/api/v1',
            APP_URL: 'https://www.coolmate.me/',
            MEDIA_URL: 'https://media.coolmate.me',
            _TOKEN: 'PQQbnSE60YL7l7HGCNmiIxGF76J2tGcE74so2l0J',
            _LOGGED: '0',
            RELOAD_AFTER_AJAX_CALLED: '',
            TET_CAMPAIGN: '',
            DISCOUNT_MOMO: '',
            BG_ONE_CAMPAIGN: ''
        }


        function delayLoad(f, timeout) {
            if (typeof (timeout) == undefined) {
                timeout = 4000;
            }

                        setTimeout(function () {
                f();
            }, 4000);
                    }

    </script>
    <script src="https://www.coolmate.me/js/_pre.js?v=6U4E6UFpvBWost25q4"></script>

    <script defer src="https://www.coolmate.me/js/vendors/jquery.min.js?v=6U4E6UFpvBWost25q4"></script>
    <script defer src="https://www.coolmate.me/js/vendors/jquery.lazyload.min.js?v=6U4E6UFpvBWost25q4"></script>

    <link href="https://www.coolmate.me/css/fonts.css?v=6U4E6UFpvBWost25q4"
          rel="stylesheet" type="text/css">
        <link href="https://www.coolmate.me/css/checkout-page.css?v=6U4E6UFpvBWost25q4"
          rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script defer src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script defer src="//unpkg.com/string-similarity/umd/string-similarity.min.js"></script>
    <script type="text/javascript" src="https://www.coolmate.me/js/cart.js?v=6U4E6UFpvBWost25q4"></script>
    <script type="text/javascript" src="https://www.coolmate.me/js/vendor.js?v=6U4E6UFpvBWost25q4"></script>
    <script src="https://unpkg.com/@goongmaps/goong-sdk@1.0.7/umd/goong-sdk.min.js"></script>
    <style>
        .select2-container--default .select2-selection--single {
            height: 55px;
            border-radius: 0 !important;
        }

        .select2-selection__rendered {
            line-height: 55px !important;
            padding-left: 22px !important;
            padding-right: 27px !important;
        }

        .select2-selection__arrow {
            height: 55px !important;
            width: 35px !important;
        }

        .cart-coolclub-badget {
            left: 110px;
            position: absolute;
            margin-top: 20px;
            background: black;
            color: white;
            padding: 2px 7px;
            font-size: 12px;
            font-weight: bold;
            border: #000 solid 1px;
        }

        /* Remove 'powered by Google' logo in address auto Complete */
        .pac-container:after {
            background-image: none !important;
            height: 0;
        }

        .pac-item {
            padding: 7px;
            cursor: pointer;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        .form-control--error {
            border-color: #da5600 !important;
        }

        .help-text {
            color: #da5600 !important;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 99;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: calc(100vh - 500px) auto;
            padding: 20px;
            border: 2px solid #fa6400;
            width: 80vw;
            max-width: 480px;
            text-align: center;
        }

        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            width: 53.05%;
        }

        .autocomplete-items div {
            padding: 10px 20px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }
    </style>

    <script defer src="https://www.coolmate.me/js/vendors/lazysizes.min.js?v=6U4E6UFpvBWost25q4"></script>
    <script defer src="https://www.coolmate.me/js/vendors/ls.rias.min.js?v=6U4E6UFpvBWost25q4"></script>
    <script defer src="https://www.coolmate.me/js/vendors/ls.bgset.min.js?v=6U4E6UFpvBWost25q4"></script>

    <script defer src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Load Facebook SDK for JavaScript -->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <script>
        delayLoad(function () {
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-5039034143125999",
                enable_page_level_ads: true
            });
        })

    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.defer = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            delayLoad(function () {
                s.parentNode.insertBefore(t, s)
            })
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        delayLoad(function () {
            fbq('init', '779490229316202');
            fbq('track', 'PageView');
        })

    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="//www.facebook.com/tr?id=1029117977480178&ev=PageView&noscript=1"
        /></noscript>

    <!-- Google Tag Manager -->
    <script>
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({'frontendversion': 'v2'});
        delayLoad(function () {
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.defer = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-WVDNC2B');
        }, 4000)
    </script>
    <!-- End Google Tag Manager -->

    <script>
        delayLoad(function () {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.src = "//coolmatevn.api.useinsider.com/ins.js?id=10003475";
            document.head.appendChild(s);
        }, 3000)
    </script>

    <script defer type="text/javascript">
        window.insider_object = {
            "user": {
                "email": localStorage.getItem('cart_email') ,
                "name": localStorage.getItem('cart_full_name'),
                "gdpr_optin": true,
                "email_optin": true
            },
            "product": {},
            "basket": {},
            "transaction": {}
        };
    </script>

    
            <script src="https://accounts.google.com/gsi/client" async defer></script>
    
    

    <!-- remove number arrows -->
    <style>

        .product__image--limited:after {
            content: "";
            background-image: url("https://mcdn.coolmate.me/image/March2021/Asset_12x.png");
            background-size: 25%;
            background-repeat: no-repeat;
            background-color: #fff0;
            background-position: top right;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            transform: rotate(0deg);
            pointer-events: none;
        }

        .product__image--new:after {
            content: "";
            background-image: url("https://mcdn.coolmate.me/image/April2021/New_(4)1.png");
            background-size: 25%;
            background-repeat: no-repeat;
            background-color: #fff0;
            background-position: top right;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            transform: rotate(0deg);
            pointer-events: none;
        }

        .product__image--sale:after {
            content: "";
            background-image: url("https://mcdn.coolmate.me/image/March2021/Frame_Website-04.png");
            background-size: 25%;
            background-repeat: no-repeat;
            background-color: #fff0;
            background-position: top right;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            transform: rotate(0deg);
            pointer-events: none;
        }

        .product__image--hot:after {
            content: "";
            background-image: url("https://mcdn.coolmate.me/image/March2021/Frame_Website-05.png");
            background-size: 25%;
            background-repeat: no-repeat;
            background-color: #fff0;
            background-position: top right;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            transform: rotate(0deg);
            pointer-events: none;
        }



        .product__balge--premium {
            position: absolute;
            right: -41px;
            font-size: 14px;
            font-weight: 700;
            -webkit-transform: rotate(45deg);
            border-bottom: 3px solid;
            border-top: 3px solid;
            color: #fff;
            padding: 7px 0 4px;
            letter-spacing: 1px;
            -webkit-box-shadow: 0 0 10px 0 #3333;
            box-shadow: 0 0 10px 0 #3333;
            content: "";
            background-image: url("https://mcdn.coolmate.me/uploads/July2021/pre3_12x(2).png");
            background-size: 25%;
            background-repeat: no-repeat;
            background-color: #fff0;
            background-position: top right;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            transform: rotate(0deg);
            pointer-events: none;
        }

        .product__balge--premium svg{
            display: none;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>

    <style>
        .site-footer__comments {
            background-color: #6f6f6f11;
            border-radius: 10px;
            padding: 15px;
            width: 240px;
            max-width: 100%;
        }
        .site-footer__comments .title {
            font-weight: 700;
            text-transform: uppercase;
            color: #000;
            font-size: 14px;
            margin-top: 0;
            margin-bottom: 0;
        }
        .site-footer__comments .desc {
            font-size: 14px;
            margin-bottom: 10px;
            margin-top: 0;
        }.site-footer__comments .link {
             display: -webkit-box;
             display: -ms-flexbox;
             display: flex;
             -webkit-box-pack: center;
             -ms-flex-pack: center;
             justify-content: center;
             -webkit-box-align: center;
             -ms-flex-align: center;
             align-items: center;
             border: 2px solid #fa6400;
             color: #fa6400;
             border-radius: 3px;
             height: 35px;
             font-weight: 600;
             text-transform: uppercase;
             font-size: 14px;
         }
        .site-footer__comments .link .icon {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 16px;
            height: 16px;
            margin-right: 10px;
        }
        .site-footer__comments .link .icon path {
            fill: currentColor;
        }

        @media  screen and (max-width: 768px) {
            .site-footer__comments {
                width: 100%;
            }
        }


        .site-header__cart .cartlabel{
            position: absolute;
            font-size: 12px;
            bottom: 6px;
            left: 0;
            width: 100%;
            text-align: center;
        }
        @media  screen and (min-width: 1919px) {
            .site-header__cart .cartlabel{
                bottom: 10px;
            }
        }
    </style>


</head>

<body class="cart-page  ">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WVDNC2B"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->


<script>
    delayLoad(function () {
        fbq('track', 'ViewContent');
    });


    // window.addEventListener('grsfReady', function() {
    //     growsurf.open();
    // });
</script>

    <div id="g_id_onload"
         data-client_id="902943331882-9ovkeogfjqv7k0sm6us39cd566nc77bo.apps.googleusercontent.com"
         data-login_uri="https://www.coolmate.me//google/one-tap-callback"
         data-_token="PQQbnSE60YL7l7HGCNmiIxGF76J2tGcE74so2l0J">
    </div>

<div class="site-wrapper has-topbar" id="site-wrapper">
                        <div class="site-header">
            <div class="site-topbar" style="z-index: 1"><a href="https://www.coolmate.me/collection/new-normal-jacket">New Normal Jacket - Chiếc áo khoác đầu tiên tại Việt Nam diệt 99.99% SARS-CoV2 </a></div>
        <div class="site-header__wrapper">
        
        <div class="container">
            <div class="site-header__inner">
                <div class="site-header__logo">
                    <a href="https://www.coolmate.me">
                        <img src="https://www.coolmate.me/images/logo-coolmate.svg"
                             alt="Cool Mate - Everyday Excitement">




                    </a>
                </div>
                <div class="site-header__menu">
                    <div class="site-nav">
    <ul class="no-style">
        <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
            <a href="/lp/coolmate-outlet" class="text--primary">
                SALE
                <span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span>
            </a>
            <ul class="site-nav__submenu no-style">
                <li>
                    <a href="/lp/coolmate-outlet">
                        Outlet ưu đãi 30%
                    </a>
                </li>
            </ul>
        </li>

        <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
            <a href="#">
                BỘ SƯU TẬP
                <span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span>
            </a>
            <ul class="site-nav__submenu no-style">
                <li>
                    <a href="/collection/excool">
                        Excool <span style="background: #fa6400;color: white;padding: 5px;border-radius: 3px;font-size: 10px;font-weight: bold;">HOT</span>
                    </a>
                </li>
                <li>
                    <a href="/page/bo-suu-tap-thu-dong">
                        BST Thu-đông
                    </a>
                </li>
                <li>
                    <a href="/collection/care-and-share">
                        Care & Share
                    </a>
                </li>





                <li>
                    <a href="/lp/bo-suu-tap-coolmate-x-lac-khoi">
                        Lạc Khởi Collection
                    </a>
                </li>
            </ul>
        </li>
        <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
            <a href="/collection/ready-to-use-boxes">
                TỦ ĐỒ
                <span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span>
            </a>
            <ul class="site-nav__submenu no-style">
                <li><a href="/coolsub">Tủ đồ định kỳ - Cool Sub <span style="background: green;color: white;padding: 5px;border-radius: 3px;font-size: 10px;font-weight: bold;">NEW</span></a></li>
                <li><a href="/collection/ready-to-use-boxes">Tủ đồ tạo sẵn</a></li>

            </ul>
        </li>
        <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
            <a href="/collection/ao-thun-nam?sort=bestseller">
                ÁO
                <span class="new">Hot</span>
                <span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span>
            </a>
            <div class="site-megamenu">
                <div class="site-megamenu__container">
                    <div class="site-megamenu__row">
                        <div class="site-megamenu__column">
                            <a href="/collection/ao-so-mi-nam" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon">
                                    <svg width="448" height="480" viewBox="0 0 448 480" xmlns="http://www.w3.org/2000/svg"><path d="M86.168 447.787l136 32a7.99 7.99 0 003.664 0l136-32A7.998 7.998 0 00368 440v-40h40a8 8 0 007.882-6.629l32-184a8.012 8.012 0 00-.338-4.033l-48-136a7.997 7.997 0 00-5.604-5.099l-93.38-23.344-30.313-37.893A8.004 8.004 0 00264.08 0h-80.16a8.004 8.004 0 00-6.167 3.002l-30.314 37.893-93.38 23.344a7.997 7.997 0 00-5.603 5.099l-48 136a8.012 8.012 0 00-.338 4.033l32 184A8 8 0 0040 400h40v40a7.998 7.998 0 006.168 7.787zM224 43.504L201.08 16h45.84L224 43.504zM368 384v-24h37.445l-4.174 24H368zm63.76-175.31L408.228 344H368V160h-16v273.664L232 461.9V75.314l26.343 26.343a8.004 8.004 0 0012.313-1.22l28.873-43.309 86.358 21.59L431.76 208.69zM286.098 48.43l-23.341 35.013-27.934-27.934 29.05-34.86 22.225 27.78zM184.126 20.648l29.05 34.86-27.933 27.935L161.9 48.43l22.225-27.782zM62.112 78.718l86.358-21.59 28.874 43.31a7.999 7.999 0 0012.313 1.22L216 75.313V461.9L96 433.664V160H80v184H39.772L16.24 208.69 62.112 78.718zM42.554 360H80v24H46.728l-4.174-24z" fill="#000" fill-rule="nonzero"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo Sơ mi
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="site-megamenu__column">
                            <a href="/collection/ao-polo-nam" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M486.238 211.926L465.284 86.207c-3.391-20.343-18.568-36.487-38.665-41.125l-80.203-18.508L331.079 3.57a8.016 8.016 0 00-5.615-3.5 7.777 7.777 0 00-1.055-.061V0H187.591v.006a7.79 7.79 0 00-1.055.064 8.017 8.017 0 00-5.615 3.5l-15.336 23.005L85.38 45.084c-20.097 4.638-35.273 20.78-38.665 41.125L25.762 211.926a8.016 8.016 0 004.93 8.762l80.473 32.189v251.107a8.017 8.017 0 008.017 8.017h273.637a8.017 8.017 0 008.017-8.017V252.877l80.473-32.189a8.02 8.02 0 004.929-8.762zM331.971 33.81L297.05 89.683a.501.501 0 01-.363.245.506.506 0 01-.423-.11L268.49 67.599l54.32-47.53 9.161 13.741zm-28.899-17.777L256 57.222l-47.073-41.189h94.145zm-37.986 69.376v76.529a.535.535 0 01-.534.534H247.45a.535.535 0 01-.534-.534V85.409L256 78.14l9.086 7.269zm-75.895-65.341l54.32 47.53-27.773 22.219a.511.511 0 01-.423.11.501.501 0 01-.363-.244L180.031 33.81l9.16-13.742zm-78.026 215.54l-68.526-27.411 2.647-15.877 65.879 26.353v16.935zm273.637 260.359H127.198v-18.171h257.603v18.171zm8.016-350.597a8.017 8.017 0 00-8.017 8.017v308.376H127.198V153.386c0-4.428-3.589-8.017-8.017-8.017s-8.017 3.588-8.017 8.017v48.017l-63.18-25.273L62.53 88.844c2.32-13.919 12.705-24.964 26.455-28.139l77.734-17.939 34.634 55.416a16.583 16.583 0 0014.045 7.785c3.736 0 7.398-1.265 10.354-3.63l5.127-4.1v63.701c0 9.136 7.432 16.568 16.568 16.568h17.102c9.136 0 16.568-7.432 16.568-16.568V98.237l5.127 4.101a16.59 16.59 0 0013.132 3.395 16.579 16.579 0 0011.267-7.551l34.634-55.415 77.735 17.938c13.75 3.175 24.136 14.219 26.455 28.139l14.548 87.286-63.183 25.273v-48.017a8.011 8.011 0 00-8.014-8.016zm8.017 90.238v-16.936l65.88-26.351 2.647 15.877-68.527 27.41z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo Polo
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="site-megamenu__column">
                            <a href="/collection/ao-in-nam" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon">
                                    <svg height="512pt" viewBox="0 -40 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="M506.855 119.652c6.86-6.859 6.86-18.02 0-24.879L414.277 2.191A7.496 7.496 0 00408.984 0H354.52c-14.02 0-26.684 8.348-32.27 21.262-11.434 26.457-37.441 43.554-66.25 43.554s-54.816-17.097-66.25-43.554C184.168 8.344 171.5 0 157.48 0h-54.464a7.48 7.48 0 00-5.29 2.191L5.146 94.773c-6.86 6.86-6.86 18.02 0 24.88l58.543 58.542a7.48 7.48 0 0010.585 0 7.483 7.483 0 000-10.582L15.727 109.07a2.638 2.638 0 010-3.715l90.39-90.386h51.36c8.046 0 15.32 4.8 18.53 12.234C189.818 59.145 221.216 79.79 256 79.79s66.184-20.644 79.992-52.586c3.211-7.433 10.485-12.234 18.528-12.234h51.363l90.387 90.386a2.631 2.631 0 010 3.715l-79.84 79.84v-62.074a7.485 7.485 0 00-14.97 0v89.957h-54.48c-1.027-2.91-3.793-5-7.054-5s-6.031 2.09-7.055 5h-17.086c-11.93 0-22.133 7.523-26.125 18.074L266.625 212l42.04-41.73a7.488 7.488 0 00.042-10.586 7.488 7.488 0 00-10.586-.04L256 201.455l-42.117-41.81a7.488 7.488 0 00-10.586.04 7.488 7.488 0 00.039 10.586L245.379 212l-42.043 41.727a7.488 7.488 0 00-.04 10.585 7.468 7.468 0 005.313 2.211 7.463 7.463 0 005.274-2.171L256 222.543l31.86 31.625v33.191a7.353 7.353 0 00-1.532-.16h-3.992a7.485 7.485 0 000 14.969h3.992c.524 0 1.035-.055 1.531-.156v69.676c0 15.398 12.528 27.925 27.926 27.925H401.5v1.285c0 9.13-7.426 16.555-16.555 16.555h-257.89c-9.125 0-16.551-7.426-16.551-16.555v-65.847h150.16a7.482 7.482 0 007.48-7.485 7.482 7.482 0 00-7.48-7.484h-150.16V126.836a7.485 7.485 0 00-14.969 0v193.246H51.902a7.485 7.485 0 000 14.969h43.633v65.847c0 17.383 14.14 31.524 31.52 31.524h257.89c17.383 0 31.524-14.14 31.524-31.524v-1.289h26.281c15.398 0 27.926-12.523 27.926-27.921v-126.97c0-15.398-12.528-27.921-27.926-27.921h-26.32v-6.715zM455.707 244.72v126.969c0 7.144-5.812 12.957-12.953 12.957H315.785c-7.144 0-12.957-5.813-12.957-12.957v-126.97c0-7.14 5.813-12.956 12.957-12.956h126.969c7.14 0 12.953 5.812 12.953 12.957zm0 0"/><path d="M164.594 230.809a7.483 7.483 0 1014.965 0v-7.965a7.482 7.482 0 10-14.965 0zm0 0M164.594 259.68a7.483 7.483 0 1014.965 0v-7.965a7.482 7.482 0 10-14.965 0zm0 0M207.91 126.836a7.485 7.485 0 00-7.484-7.484h-7.676l-.39.003a7.486 7.486 0 00-7.383 7.586 7.486 7.486 0 007.484 7.38h7.965a7.485 7.485 0 007.484-7.485zm0 0M164.594 201.938a7.483 7.483 0 1014.965 0v-7.965a7.479 7.479 0 00-7.48-7.48 7.48 7.48 0 00-7.485 7.48zm0 0M188.242 294.684a7.482 7.482 0 007.48 7.484h7.965a7.485 7.485 0 000-14.969h-7.964a7.482 7.482 0 00-7.48 7.485zm0 0M178.973 130.395a7.482 7.482 0 00-10.282 2.503 27.961 27.961 0 00-3.738 10.118 7.486 7.486 0 007.399 8.68 7.486 7.486 0 007.378-6.29c.27-1.68.86-3.27 1.747-4.726a7.486 7.486 0 00-2.504-10.285zm0 0M164.594 173.066a7.483 7.483 0 1014.965 0v-7.964a7.479 7.479 0 00-7.48-7.48 7.48 7.48 0 00-7.485 7.48zm0 0M170.77 273.367a7.483 7.483 0 00-4.762 9.453 28.014 28.014 0 005.281 9.395 7.45 7.45 0 005.707 2.64 7.484 7.484 0 005.7-12.328 13.16 13.16 0 01-2.473-4.402 7.483 7.483 0 00-9.453-4.758zm0 0M340.387 128.926a7.482 7.482 0 00-10.563-.676 7.482 7.482 0 00-.676 10.563 13.174 13.174 0 012.555 4.359 7.49 7.49 0 009.54 4.59 7.487 7.487 0 004.589-9.54 28.04 28.04 0 00-5.445-9.296zm0 0M315.91 134.32a7.482 7.482 0 007.48-7.484 7.482 7.482 0 00-7.48-7.484h-7.965a7.483 7.483 0 00-7.484 7.484 7.483 7.483 0 007.484 7.484zm0 0M347.41 161.473a7.485 7.485 0 00-14.969 0v7.96a7.485 7.485 0 0014.97 0zm0 0M287.04 134.32a7.482 7.482 0 007.48-7.484 7.482 7.482 0 00-7.48-7.484h-7.966a7.483 7.483 0 00-7.484 7.484 7.483 7.483 0 007.484 7.484zm0 0M339.926 182.855a7.483 7.483 0 00-7.485 7.485v7.965a7.485 7.485 0 0014.969 0v-7.965a7.485 7.485 0 00-7.484-7.485zm0 0M258.168 134.32a7.482 7.482 0 007.48-7.484 7.482 7.482 0 00-7.48-7.484h-7.965a7.485 7.485 0 000 14.968zm0 0M261.43 302.168a7.485 7.485 0 000-14.969h-7.965a7.485 7.485 0 000 14.969zm0 0M232.559 302.168a7.485 7.485 0 000-14.969h-7.965a7.485 7.485 0 000 14.969zm0 0M221.332 134.32h7.965a7.482 7.482 0 007.48-7.484 7.482 7.482 0 00-7.48-7.484h-7.965a7.485 7.485 0 000 14.968zm0 0M260.664 352.969h-88.586a7.48 7.48 0 00-7.484 7.484 7.48 7.48 0 007.484 7.48h88.586a7.479 7.479 0 007.48-7.48 7.48 7.48 0 00-7.48-7.484zm0 0"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo in
                                    </span><br>
                                    <span class="megamenu__tag megamenu__tag--hot" style="background-color: #00a040">
                                        new
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="site-megamenu__row">
                        <div class="site-megamenu__column">
                            <a href="/collection/ao-the-thao-nam" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon">
                                    <svg width="513" height="512" viewBox="0 0 513 512" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M510.877 219.246L462.27 73.425c-4.985-14.958-16.312-26.711-31.073-32.245C316.485-1.838 322.66.453 321.937.275c-1.57-.381-130.188-.321-131.4-.09-1.014.194 6.004-2.376-109.65 40.994C66.127 46.714 54.8 58.467 49.815 73.424-3.322 232.834.043 221.162.043 226.426c0 11.789 9.207 21.73 20.96 22.635l83.04 6.388V480.04a7.998 7.998 0 005.19 7.49c83.837 31.44 203.67 33.733 293.62 0a7.999 7.999 0 005.19-7.49V255.448l83.039-6.388c14.45-1.11 24.51-15.662 19.795-29.814zM256.043 80.04c35.886 0 65.719-26.392 71.122-60.785l15.219 5.707c-7.975 40.929-44.034 71.078-86.34 71.078-42.306 0-78.364-30.15-86.34-71.08l15.219-5.706c5.4 34.394 35.233 60.786 71.12 60.786zm-55.42-64h110.839c-3.895 27.102-27.257 48-55.42 48-28.161 0-51.524-20.9-55.42-48zm289.232 217.067l-81.813 6.293v-55.361a8 8 0 00-16 0v290.396c-80.313 28.308-189.002 29.254-272 0V184.039a8 8 0 00-16 0v55.36l-81.813-6.292c-3.47-.267-6.188-3.201-6.188-6.682 0-1.693-2.987 7.872 48.95-147.941 3.453-10.355 11.294-18.492 21.514-22.324l68.018-25.507c10.429 47.039 52.426 81.387 101.518 81.387s91.09-34.347 101.519-81.387l68.019 25.508c10.219 3.83 18.06 11.968 21.51 22.323 52.06 156.177 48.953 146.325 48.953 147.94 0 3.482-2.717 6.417-6.187 6.683z" fill="#000" fill-rule="nonzero"/><path stroke="#000" stroke-width="13" stroke-linecap="round" d="M161.672 412.5l187.828-65M161.672 337.5l187.828-65"/></g></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo thể thao
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="site-megamenu__column">
                            <a href="/collection/ao-thun-nam-gioi" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon" style="width: 35px">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.7 407.7"><path d="M405.5 118.021a7.93 7.93 0 00-.29-.29l-84.16-74.8a7.994 7.994 0 00-2.64-1.6l-60.88-21.76a8 8 0 00-10.72 7.12c0 1.76-2.64 42.32-43.2 42.96-40.8-.64-43.36-41.2-43.44-42.96a8 8 0 00-10.64-7.12l-60.8 22c-.976.357-1.872.9-2.64 1.6l-83.6 74.56a8 8 0 000 11.6l66.56 67.28v184a8 8 0 008 8h253.6a8 8 0 008-8v-184l66.56-67.28a8 8 0 00.29-11.31zm-67.09 55.79v-37.12a8 8 0 00-16 0v235.52H84.73v-235.52a8 8 0 00-16 0v37.2l-49.2-49.84 76.16-68.16 50.08-18.08c6.204 31.966 37.147 52.851 69.113 46.647 23.607-4.582 42.065-23.04 46.647-46.647l50.08 18.08 75.92 68.16-49.12 49.76z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo ngắn tay

                                        
                                        
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="site-megamenu__column">
                            <a href="/collection/ao-cotton-compact-dai-tay" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon" style="width: 35px">
                                    <svg height="512" width="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M481.593 52.286c-19.64-22.929-46.824-37.96-76.462-42.312L340.985.171A15.193 15.193 0 0 0 338.72 0H173.28c-.759 0-1.516.058-2.266.172l-64.058 9.79c-29.724 4.364-56.909 19.396-76.548 42.324C10.799 75.18 0 104.45 0 134.707v312.908c0 8.284 6.716 15 15 15h71.805V497c0 8.284 6.716 15 15 15h308.389c8.284 0 15-6.716 15-15v-34.385H497c8.284 0 15-6.716 15-15V134.707c0-30.257-10.799-59.527-30.407-82.421zM322.087 30C315.278 60.72 287.95 83.554 256 83.554c-32.144 0-59.305-22.772-66.081-53.554zM30 432.615v-34.998h56.805v34.998zM395.194 482H116.805V175.796c0-8.284-6.716-15-15-15s-15 6.716-15 15v191.821H30v-232.91c0-23.104 8.236-45.444 23.192-62.905C68.117 54.376 88.758 42.955 111.4 39.631l48.372-7.393c8.113 46.435 48.347 81.315 96.227 81.315 24.876 0 48.579-9.434 66.738-26.563a98.437 98.437 0 0 0 29.475-54.754l48.474 7.408c22.555 3.312 43.196 14.732 58.121 32.158C473.764 89.263 482 111.603 482 134.707v232.91h-56.806V175.796c0-8.284-6.716-15-15-15s-15 6.716-15 15zm30-49.385v-34.998H482v34.998z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo thu đông
                                    </span>
                                    <span class="megamenu__tag megamenu__tag--hot">
                                        hot
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="site-nav__item  mobile--hidden">
            <a href="https://www.coolmate.me/collection/quan-short-nam">QUẦN</a>
        </li>
        <li class="site-nav__item site-nav__item--has-sub  mobile--hidden">
            <a href="/collection/quan-lot-nam">QUẦN LÓT<span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span></a>
            <div class="site-megamenu">
                <div class="site-megamenu__container">
                    <div class="site-megamenu__row">
                        <div class="site-megamenu__column">
                            <a href="/collection/quan-lot-nam/trunk" class="megamenu">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.25 24.27"><defs></defs><title>Trunk</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="np_shorts_3162471_000000-copy-3" data-name="np shorts 3162471 000000-copy-3"><path fill="currentColor" d="M26,24.27a60.81,60.81,0,0,1-7-.46.43.43,0,0,1-.38-.47L18.42,20H16.83v3.34c0,.19-.18.47-.37.47A59.12,59.12,0,0,1,.37,23.53c-.28,0-.37-.28-.37-.46.56-8,1.12-17,.84-22.51A.57.57,0,0,1,.93.19.47.47,0,0,1,1.3,0H33.67c.09,0,.28.09.37.09s.09.19.09.38A185,185,0,0,0,35.25,23c0,.28-.09.47-.37.47a45.11,45.11,0,0,1-8.84.83Zm-6.51-1.39a45.42,45.42,0,0,0,14.7-.37A212.45,212.45,0,0,1,33.11.84H1.77C2,6.32,1.4,14.88.93,22.6a51.21,51.21,0,0,0,15,.28V19.44a.73.73,0,0,1,.19-.37c.09-.1.19-.1.37-.1l2.51.1a.44.44,0,0,1,.47.46Z"/><path fill="currentColor" d="M34.13,5.3H1.39V0H34.13ZM1.65,4.37H33.2V.93H1.65Z"/><path fill="currentColor" d="M18.79,19.62l-2.51-.09c-4-.28-4.47-4.56-4.84-8.65a30.39,30.39,0,0,0-1-6V4.65c0-.09.18-.19.28-.19H24.18a.33.33,0,0,1,.28.1.34.34,0,0,1,.09.28c-.46,2.41-.55,4.65-.74,6.6-.28,4.56-.56,7.81-5,8.18ZM11.16,5.21a27.86,27.86,0,0,1,.93,5.67c.37,4.19.74,7.81,4.19,8l2.51.09c3.81-.28,4-3,4.28-7.44a54.42,54.42,0,0,1,.65-6.23H11.16Z"/></g></g></g></svg>                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Quần lót Trunk
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="site-megamenu__row">
                        <div class="site-megamenu__column">
                            <a href="/collection/quan-lot-nam/brief" class="megamenu">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.55 24.21"><defs></defs><title>brief</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="np_mid-waist-brief_1579244_000000-copy" data-name="np mid-waist-brief 1579244 000000-copy"><path fill="currentColor" d="M9.63,24l.13.1.05,0a.54.54,0,0,0,.22.05h9.49a.54.54,0,0,0,.22-.05s0,0,.05,0l.13-.1h0l9.48-11a.57.57,0,0,0,.14-.37V.56A.56.56,0,0,0,29,0H.56A.56.56,0,0,0,0,.56v12A.62.62,0,0,0,.13,13L9.61,24ZM1.11,4.37H8.73L6,13.85A28.63,28.63,0,0,0,1.11,9.77Zm8.78,0h9.78l3,10.45A14.35,14.35,0,0,0,19,23.1H10.57a14.4,14.4,0,0,0-3.73-8.28Zm18.55,5.4a28.63,28.63,0,0,0-4.85,4.08L20.82,4.37h7.62ZM20.24,22c1-5.19,6.14-9.36,8.2-10.84V12.4Zm8.2-20.85V3.26H1.11V1.11Zm-27.33,10C3.17,12.6,8.34,16.77,9.31,22L1.11,12.4Z"/></g></g></g></svg>                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Quần lót Brief
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="site-megamenu__row">
                        <div class="site-megamenu__column">
                            <a href="/collection/quan-lot-nam/brief-boxer" class="megamenu">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.05 24.18"><defs></defs><title>Brif boxer</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="np_boxer-brief_1579238_000000-copy-2" data-name="np boxer-brief 1579238 000000-copy-2"><path fill="currentColor" d="M13,23.07l1.87-5.56a2.13,2.13,0,0,0,1.29,0L18,23.07a1.65,1.65,0,0,0,1.56,1.11,1.73,1.73,0,0,0,.38-.05l9.89-2.53A1.59,1.59,0,0,0,31,19.72l-3.48-15a.79.79,0,0,0,0-.09.52.52,0,0,0,0-.11v-4A.52.52,0,0,0,27,0H4.05a.53.53,0,0,0-.52.52v4s0,.08,0,.11l0,.09L0,19.72A1.58,1.58,0,0,0,1.18,21.6l9.89,2.53A1.62,1.62,0,0,0,13,23.07ZM11.73,5h7.59c0,6.82-2,11.56-3.8,11.56S11.77,11.83,11.73,5ZM30,20a.53.53,0,0,1-.38.63l-9.89,2.53a.61.61,0,0,1-.7-.38L17.09,17c2.11-1.75,3.25-7,3.28-12h6.17ZM4.57,1h21.9V4H4.57Zm6.76,22.08L1.44,20.59A.55.55,0,0,1,1.05,20L4.51,5h6.17c0,5,1.17,10.23,3.27,12L12,22.74a.61.61,0,0,1-.7.38Z"/></g></g></g></svg>                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Quần lót Boxer Brief
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
            <a href="/collection/tat-nam">PHỤ KIỆN<span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span></a>
            <div class="site-megamenu">
                <div class="site-megamenu__container">
                    <div class="site-megamenu__row">
                        <div class="site-megamenu__column">
                            <a href="/collection/tat-nam" class="megamenu" style="width: 250px">
                                <span class="megamenu__icon">
                                    <svg height="512" viewBox="0 0 52 61" width="512" xmlns="http://www.w3.org/2000/svg"><path d="M41.46 1.47A2 2 0 0039 .08L27.07 3.56c-.62-2.15-.65-2.8-1.57-3.31A2 2 0 0024 .08L8.52 4.6a2 2 0 00-1.39 2.45l7 26.23L3.54 44.35a9.306 9.306 0 0013 13.32L18 56.41a9.36 9.36 0 0013.52 1.26c6.77-5.83 9.24-8.1 14.28-11.61a12.12 12.12 0 004.77-13.31C42.4 4.07 59.2 63.94 41.46 1.47zM11.19 14.4L26.84 10l.61 2.1-15.69 4.42zm18.72-1.06L41.84 10l.61 2.1-11.93 3.4zM39.54 2l1.74 6-11.93 3.4c-.07-.23-1.8-6.21-1.72-5.94zm-15 0c.88 3-1.09-3.78 1.74 6l-15.61 4.47-1.59-6C25.2 1.8 24.44 2 24.54 2zm-8.43 30.75l-3.83-14.3L28 14l4.26 14.68c-7.19 3.79-10.2 10.83-5.5 17.86-3.39 2.56-6 4.9-10.44 8.66a28.67 28.67 0 00-10-10.81l9.31-9.71a2.05 2.05 0 00.48-1.93zm12.28 12.59c-3.87-5.85-1.48-11.34 4.45-14.71l.78 2.68a10.2 10.2 0 01-4 11.11c-.41.3-.82.58-1.23.92zM9.77 58a7.27 7.27 0 01-4.88-12.15 26.67 26.67 0 019.87 10.64A7.31 7.31 0 019.77 58zm9.72-2.87c3.27-2.76 2.49-2.17 5.8-4.87a26.87 26.87 0 014.46 6.27 7.32 7.32 0 01-10.26-1.42zm11.82.08A28.78 28.78 0 0026.85 49c1.28-1 2.59-2 3.93-2.92a12.18 12.18 0 004.76-13.3l-4.46-15.41L43 14l4.26 14.69c-7.16 3.77-10.22 10.8-5.5 17.86-3.94 2.95-5.48 4.45-10.45 8.64zm13.32-10.79c-.42.29-.83.6-1.25.9-3.83-5.8-1.51-11.31 4.46-14.69l.78 2.67a10.19 10.19 0 01-3.99 11.12z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Tất (vớ) + Khẩu Trang
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>















                    <div class="site-megamenu__row">
                        <div class="site-megamenu__column">
                            <a href="https://www.coolmate.me/collection/phu-kien" class="megamenu" style="width: 250px">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" enable-background="new 0 0 512 512"><path fill="currentColor" d="M381.919 107.826l-88.01-10.637c-34.595-4.181-69.702 4.046-98.839 23.169-29.137 19.122-50.654 48.051-60.584 81.459l-24.691 83.059-104.666 57.09a9.843 9.843 0 00-5.091 7.776 9.842 9.842 0 003.655 8.545c44.614 35.691 98.379 55.554 155.481 57.441 2.976.098 5.94.148 8.904.148 53.898 0 105.6-16.234 150.029-47.2l58.407-40.707 124.274 12.747a9.833 9.833 0 007.58-2.469 9.84 9.84 0 003.264-7.272l.366-75.683c.364-75.065-55.559-138.46-130.079-147.466zM306.857 352.53c-83.626 58.284-196.192 57.435-278.876-.615l92.12-50.247 226.413 23.222-39.657 27.64zm185.15-32.499l-361.124-37.038 6.199-20.852 68.574 7.394c.358.038.715.058 1.068.058 4.96 0 9.226-3.741 9.77-8.785.582-5.403-3.325-10.254-8.727-10.838l-64.983-7.007 10.564-35.538c17.858-60.074 75.977-98.217 138.201-90.7l88.01 10.637c64.599 7.807 113.078 62.762 112.763 127.831l-.315 64.838z"/><path fill="currentColor" d="M237.19 253.141l-.076-.008c-5.411-.589-10.216 3.331-10.797 8.734s3.366 10.257 8.769 10.839a9.8 9.8 0 001.065.058c4.961 0 9.227-3.743 9.77-8.787.581-5.403-3.328-10.254-8.731-10.836z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Phụ kiện khác (Mũ, túi,...)
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>



        <li class="site-nav__item mobile--hidden tablet--hidden">
            <a href="/lp/coolxprint-mo-hinh-dat-in-ao-theo-cong-dong">
                COOLXPRINT
                <span class="new">Mới</span>
            </a>
        </li>

        <li class="site-nav__item mobile--hidden tablet--hidden desk--hidden">
            <a href="/blog">COOLBLOG</a>
        </li>
        <li class="site-nav__item mobile--hidden tablet--hidden desk--hidden">
            <a href="/size-chart">CHỌN SIZE</a>
        </li>
    </ul>
</div>
                </div>
                <ul class="no-style site-header__tools">
                    <li class="desk--hidden large--hidden">
                        <a href="#" class="site-header__menubar-tablet" data-active-menu-tablet>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                    <li class="user-menu">
                                                <a href="https://www.coolmate.me/account/login" class="site-header__user">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 18"><defs></defs><title>account</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path fill="currentColor" d="M14,17.18a.78.78,0,1,1-1.56,0A5.59,5.59,0,0,0,7,11.45a5.59,5.59,0,0,0-5.44,5.73A.8.8,0,0,1,.78,18,.8.8,0,0,1,0,17.18,7.18,7.18,0,0,1,7,9.82,7.18,7.18,0,0,1,14,17.18ZM7,9A4.4,4.4,0,0,1,2.72,4.5,4.4,4.4,0,0,1,7,0a4.4,4.4,0,0,1,4.28,4.5A4.4,4.4,0,0,1,7,9ZM7,7.36A2.79,2.79,0,0,0,9.72,4.5,2.79,2.79,0,0,0,7,1.64,2.79,2.79,0,0,0,4.28,4.5,2.79,2.79,0,0,0,7,7.36Z"/></g></g></svg>
                            </span>
                            <span class="site-header__coolclub" style="white-space: nowrap;font-size: 12px;bottom: 6px;">Đăng nhập</span>
                        </a>
                        
                    </li>
                    <li>
                        <button class="site-header__search">
                            <svg height="512" viewBox="0 0 6.35 6.35" width="512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M2.894.511a2.384 2.384 0 00-2.38 2.38 2.386 2.386 0 002.38 2.384c.56 0 1.076-.197 1.484-.523l.991.991a.265.265 0 00.375-.374l-.991-.992a2.37 2.37 0 00.523-1.485C5.276 1.58 4.206.51 2.894.51zm0 .53c1.026 0 1.852.825 1.852 1.85S3.92 4.746 2.894 4.746s-1.851-.827-1.851-1.853.825-1.852 1.851-1.852z" paint-order="stroke fill markers"/></svg>
                        </button>
                    </li>
                    <li class="site-header__mini-cart">
                        <a href="https://www.coolmate.me/cart"
                        class="site-header__cart site-header__cart--active">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M89.5 137.6c-10.2 0-18.4 8.2-18.5 18.3v.2L53.8 480.5c0 10.2 8.2 18.4 18.3 18.5h367.6c10.2 0 18.4-8.2 18.5-18.3v-.1L441 156.1c.1-10.2-8.1-18.4-18.3-18.5H89.5zm18.3 36.8h296.5l17.2 287.8h-331l17.3-287.8z"/><path fill="currentColor" d="M366.5 170.8c10.2-.1 18.3-8.4 18.2-18.6v-.2c0-78-54-137-127.5-137S127.4 73.6 127.4 152c-.2 10.1 7.8 18.6 18 18.8 10.2.2 18.6-7.8 18.8-18v-.8c0-61.9 38.1-100.3 93.1-100.3 55 0 90.7 38 90.7 100.3-.2 10.1 7.9 18.5 18 18.7.1.1.3.1.5.1z"/><path fill="currentColor" d="M172 213.6c-7.7.1-13.9 6.4-13.8 14.1v.1c0 59.3 41.1 104.1 96.9 104.1 55.9 0 98.7-44.6 98.7-104.1.2-7.7-5.9-14.1-13.7-14.3-7.7-.2-14.1 5.9-14.3 13.7v.6c0 47-29 76.2-70.7 76.2-41.8 0-69-28.8-69-76.2.2-7.7-6-14.1-13.7-14.2h-.4z" stroke="currentColor" stroke-width="9" stroke-miterlimit="10"/></svg>
                            </span>
                            <span class="site-header__cartcount site-header__cart--active">
                                1                            </span>
                            <span class="cartlabel">
                                Giỏ hàng
                            </span>
                        </a>
                        <div class="mini-cart">
</div>
                    </li>
                </ul>

                <div class="site-header__menu-tablet">
                    <div class="site-nav">
    <ul class="no-style">
        <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
            <a href="/lp/coolmate-outlet" class="text--primary">
                SALE
                <span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span>
            </a>
            <ul class="site-nav__submenu no-style">
                <li>
                    <a href="/lp/coolmate-outlet">
                        Outlet ưu đãi 30%
                    </a>
                </li>
            </ul>
        </li>

        <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
            <a href="#">
                BỘ SƯU TẬP
                <span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span>
            </a>
            <ul class="site-nav__submenu no-style">
                <li>
                    <a href="/collection/excool">
                        Excool <span style="background: #fa6400;color: white;padding: 5px;border-radius: 3px;font-size: 10px;font-weight: bold;">HOT</span>
                    </a>
                </li>
                <li>
                    <a href="/page/bo-suu-tap-thu-dong">
                        BST Thu-đông
                    </a>
                </li>
                <li>
                    <a href="/collection/care-and-share">
                        Care & Share
                    </a>
                </li>





                <li>
                    <a href="/lp/bo-suu-tap-coolmate-x-lac-khoi">
                        Lạc Khởi Collection
                    </a>
                </li>
            </ul>
        </li>
        <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
            <a href="/collection/ready-to-use-boxes">
                TỦ ĐỒ
                <span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span>
            </a>
            <ul class="site-nav__submenu no-style">
                <li><a href="/coolsub">Tủ đồ định kỳ - Cool Sub <span style="background: green;color: white;padding: 5px;border-radius: 3px;font-size: 10px;font-weight: bold;">NEW</span></a></li>
                <li><a href="/collection/ready-to-use-boxes">Tủ đồ tạo sẵn</a></li>

            </ul>
        </li>
        <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
            <a href="/collection/ao-thun-nam?sort=bestseller">
                ÁO
                <span class="new">Hot</span>
                <span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span>
            </a>
            <div class="site-megamenu">
                <div class="site-megamenu__container">
                    <div class="site-megamenu__row">
                        <div class="site-megamenu__column">
                            <a href="/collection/ao-so-mi-nam" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon">
                                    <svg width="448" height="480" viewBox="0 0 448 480" xmlns="http://www.w3.org/2000/svg"><path d="M86.168 447.787l136 32a7.99 7.99 0 003.664 0l136-32A7.998 7.998 0 00368 440v-40h40a8 8 0 007.882-6.629l32-184a8.012 8.012 0 00-.338-4.033l-48-136a7.997 7.997 0 00-5.604-5.099l-93.38-23.344-30.313-37.893A8.004 8.004 0 00264.08 0h-80.16a8.004 8.004 0 00-6.167 3.002l-30.314 37.893-93.38 23.344a7.997 7.997 0 00-5.603 5.099l-48 136a8.012 8.012 0 00-.338 4.033l32 184A8 8 0 0040 400h40v40a7.998 7.998 0 006.168 7.787zM224 43.504L201.08 16h45.84L224 43.504zM368 384v-24h37.445l-4.174 24H368zm63.76-175.31L408.228 344H368V160h-16v273.664L232 461.9V75.314l26.343 26.343a8.004 8.004 0 0012.313-1.22l28.873-43.309 86.358 21.59L431.76 208.69zM286.098 48.43l-23.341 35.013-27.934-27.934 29.05-34.86 22.225 27.78zM184.126 20.648l29.05 34.86-27.933 27.935L161.9 48.43l22.225-27.782zM62.112 78.718l86.358-21.59 28.874 43.31a7.999 7.999 0 0012.313 1.22L216 75.313V461.9L96 433.664V160H80v184H39.772L16.24 208.69 62.112 78.718zM42.554 360H80v24H46.728l-4.174-24z" fill="#000" fill-rule="nonzero"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo Sơ mi
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="site-megamenu__column">
                            <a href="/collection/ao-polo-nam" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M486.238 211.926L465.284 86.207c-3.391-20.343-18.568-36.487-38.665-41.125l-80.203-18.508L331.079 3.57a8.016 8.016 0 00-5.615-3.5 7.777 7.777 0 00-1.055-.061V0H187.591v.006a7.79 7.79 0 00-1.055.064 8.017 8.017 0 00-5.615 3.5l-15.336 23.005L85.38 45.084c-20.097 4.638-35.273 20.78-38.665 41.125L25.762 211.926a8.016 8.016 0 004.93 8.762l80.473 32.189v251.107a8.017 8.017 0 008.017 8.017h273.637a8.017 8.017 0 008.017-8.017V252.877l80.473-32.189a8.02 8.02 0 004.929-8.762zM331.971 33.81L297.05 89.683a.501.501 0 01-.363.245.506.506 0 01-.423-.11L268.49 67.599l54.32-47.53 9.161 13.741zm-28.899-17.777L256 57.222l-47.073-41.189h94.145zm-37.986 69.376v76.529a.535.535 0 01-.534.534H247.45a.535.535 0 01-.534-.534V85.409L256 78.14l9.086 7.269zm-75.895-65.341l54.32 47.53-27.773 22.219a.511.511 0 01-.423.11.501.501 0 01-.363-.244L180.031 33.81l9.16-13.742zm-78.026 215.54l-68.526-27.411 2.647-15.877 65.879 26.353v16.935zm273.637 260.359H127.198v-18.171h257.603v18.171zm8.016-350.597a8.017 8.017 0 00-8.017 8.017v308.376H127.198V153.386c0-4.428-3.589-8.017-8.017-8.017s-8.017 3.588-8.017 8.017v48.017l-63.18-25.273L62.53 88.844c2.32-13.919 12.705-24.964 26.455-28.139l77.734-17.939 34.634 55.416a16.583 16.583 0 0014.045 7.785c3.736 0 7.398-1.265 10.354-3.63l5.127-4.1v63.701c0 9.136 7.432 16.568 16.568 16.568h17.102c9.136 0 16.568-7.432 16.568-16.568V98.237l5.127 4.101a16.59 16.59 0 0013.132 3.395 16.579 16.579 0 0011.267-7.551l34.634-55.415 77.735 17.938c13.75 3.175 24.136 14.219 26.455 28.139l14.548 87.286-63.183 25.273v-48.017a8.011 8.011 0 00-8.014-8.016zm8.017 90.238v-16.936l65.88-26.351 2.647 15.877-68.527 27.41z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo Polo
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="site-megamenu__column">
                            <a href="/collection/ao-in-nam" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon">
                                    <svg height="512pt" viewBox="0 -40 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="M506.855 119.652c6.86-6.859 6.86-18.02 0-24.879L414.277 2.191A7.496 7.496 0 00408.984 0H354.52c-14.02 0-26.684 8.348-32.27 21.262-11.434 26.457-37.441 43.554-66.25 43.554s-54.816-17.097-66.25-43.554C184.168 8.344 171.5 0 157.48 0h-54.464a7.48 7.48 0 00-5.29 2.191L5.146 94.773c-6.86 6.86-6.86 18.02 0 24.88l58.543 58.542a7.48 7.48 0 0010.585 0 7.483 7.483 0 000-10.582L15.727 109.07a2.638 2.638 0 010-3.715l90.39-90.386h51.36c8.046 0 15.32 4.8 18.53 12.234C189.818 59.145 221.216 79.79 256 79.79s66.184-20.644 79.992-52.586c3.211-7.433 10.485-12.234 18.528-12.234h51.363l90.387 90.386a2.631 2.631 0 010 3.715l-79.84 79.84v-62.074a7.485 7.485 0 00-14.97 0v89.957h-54.48c-1.027-2.91-3.793-5-7.054-5s-6.031 2.09-7.055 5h-17.086c-11.93 0-22.133 7.523-26.125 18.074L266.625 212l42.04-41.73a7.488 7.488 0 00.042-10.586 7.488 7.488 0 00-10.586-.04L256 201.455l-42.117-41.81a7.488 7.488 0 00-10.586.04 7.488 7.488 0 00.039 10.586L245.379 212l-42.043 41.727a7.488 7.488 0 00-.04 10.585 7.468 7.468 0 005.313 2.211 7.463 7.463 0 005.274-2.171L256 222.543l31.86 31.625v33.191a7.353 7.353 0 00-1.532-.16h-3.992a7.485 7.485 0 000 14.969h3.992c.524 0 1.035-.055 1.531-.156v69.676c0 15.398 12.528 27.925 27.926 27.925H401.5v1.285c0 9.13-7.426 16.555-16.555 16.555h-257.89c-9.125 0-16.551-7.426-16.551-16.555v-65.847h150.16a7.482 7.482 0 007.48-7.485 7.482 7.482 0 00-7.48-7.484h-150.16V126.836a7.485 7.485 0 00-14.969 0v193.246H51.902a7.485 7.485 0 000 14.969h43.633v65.847c0 17.383 14.14 31.524 31.52 31.524h257.89c17.383 0 31.524-14.14 31.524-31.524v-1.289h26.281c15.398 0 27.926-12.523 27.926-27.921v-126.97c0-15.398-12.528-27.921-27.926-27.921h-26.32v-6.715zM455.707 244.72v126.969c0 7.144-5.812 12.957-12.953 12.957H315.785c-7.144 0-12.957-5.813-12.957-12.957v-126.97c0-7.14 5.813-12.956 12.957-12.956h126.969c7.14 0 12.953 5.812 12.953 12.957zm0 0"/><path d="M164.594 230.809a7.483 7.483 0 1014.965 0v-7.965a7.482 7.482 0 10-14.965 0zm0 0M164.594 259.68a7.483 7.483 0 1014.965 0v-7.965a7.482 7.482 0 10-14.965 0zm0 0M207.91 126.836a7.485 7.485 0 00-7.484-7.484h-7.676l-.39.003a7.486 7.486 0 00-7.383 7.586 7.486 7.486 0 007.484 7.38h7.965a7.485 7.485 0 007.484-7.485zm0 0M164.594 201.938a7.483 7.483 0 1014.965 0v-7.965a7.479 7.479 0 00-7.48-7.48 7.48 7.48 0 00-7.485 7.48zm0 0M188.242 294.684a7.482 7.482 0 007.48 7.484h7.965a7.485 7.485 0 000-14.969h-7.964a7.482 7.482 0 00-7.48 7.485zm0 0M178.973 130.395a7.482 7.482 0 00-10.282 2.503 27.961 27.961 0 00-3.738 10.118 7.486 7.486 0 007.399 8.68 7.486 7.486 0 007.378-6.29c.27-1.68.86-3.27 1.747-4.726a7.486 7.486 0 00-2.504-10.285zm0 0M164.594 173.066a7.483 7.483 0 1014.965 0v-7.964a7.479 7.479 0 00-7.48-7.48 7.48 7.48 0 00-7.485 7.48zm0 0M170.77 273.367a7.483 7.483 0 00-4.762 9.453 28.014 28.014 0 005.281 9.395 7.45 7.45 0 005.707 2.64 7.484 7.484 0 005.7-12.328 13.16 13.16 0 01-2.473-4.402 7.483 7.483 0 00-9.453-4.758zm0 0M340.387 128.926a7.482 7.482 0 00-10.563-.676 7.482 7.482 0 00-.676 10.563 13.174 13.174 0 012.555 4.359 7.49 7.49 0 009.54 4.59 7.487 7.487 0 004.589-9.54 28.04 28.04 0 00-5.445-9.296zm0 0M315.91 134.32a7.482 7.482 0 007.48-7.484 7.482 7.482 0 00-7.48-7.484h-7.965a7.483 7.483 0 00-7.484 7.484 7.483 7.483 0 007.484 7.484zm0 0M347.41 161.473a7.485 7.485 0 00-14.969 0v7.96a7.485 7.485 0 0014.97 0zm0 0M287.04 134.32a7.482 7.482 0 007.48-7.484 7.482 7.482 0 00-7.48-7.484h-7.966a7.483 7.483 0 00-7.484 7.484 7.483 7.483 0 007.484 7.484zm0 0M339.926 182.855a7.483 7.483 0 00-7.485 7.485v7.965a7.485 7.485 0 0014.969 0v-7.965a7.485 7.485 0 00-7.484-7.485zm0 0M258.168 134.32a7.482 7.482 0 007.48-7.484 7.482 7.482 0 00-7.48-7.484h-7.965a7.485 7.485 0 000 14.968zm0 0M261.43 302.168a7.485 7.485 0 000-14.969h-7.965a7.485 7.485 0 000 14.969zm0 0M232.559 302.168a7.485 7.485 0 000-14.969h-7.965a7.485 7.485 0 000 14.969zm0 0M221.332 134.32h7.965a7.482 7.482 0 007.48-7.484 7.482 7.482 0 00-7.48-7.484h-7.965a7.485 7.485 0 000 14.968zm0 0M260.664 352.969h-88.586a7.48 7.48 0 00-7.484 7.484 7.48 7.48 0 007.484 7.48h88.586a7.479 7.479 0 007.48-7.48 7.48 7.48 0 00-7.48-7.484zm0 0"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo in
                                    </span><br>
                                    <span class="megamenu__tag megamenu__tag--hot" style="background-color: #00a040">
                                        new
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="site-megamenu__row">
                        <div class="site-megamenu__column">
                            <a href="/collection/ao-the-thao-nam" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon">
                                    <svg width="513" height="512" viewBox="0 0 513 512" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M510.877 219.246L462.27 73.425c-4.985-14.958-16.312-26.711-31.073-32.245C316.485-1.838 322.66.453 321.937.275c-1.57-.381-130.188-.321-131.4-.09-1.014.194 6.004-2.376-109.65 40.994C66.127 46.714 54.8 58.467 49.815 73.424-3.322 232.834.043 221.162.043 226.426c0 11.789 9.207 21.73 20.96 22.635l83.04 6.388V480.04a7.998 7.998 0 005.19 7.49c83.837 31.44 203.67 33.733 293.62 0a7.999 7.999 0 005.19-7.49V255.448l83.039-6.388c14.45-1.11 24.51-15.662 19.795-29.814zM256.043 80.04c35.886 0 65.719-26.392 71.122-60.785l15.219 5.707c-7.975 40.929-44.034 71.078-86.34 71.078-42.306 0-78.364-30.15-86.34-71.08l15.219-5.706c5.4 34.394 35.233 60.786 71.12 60.786zm-55.42-64h110.839c-3.895 27.102-27.257 48-55.42 48-28.161 0-51.524-20.9-55.42-48zm289.232 217.067l-81.813 6.293v-55.361a8 8 0 00-16 0v290.396c-80.313 28.308-189.002 29.254-272 0V184.039a8 8 0 00-16 0v55.36l-81.813-6.292c-3.47-.267-6.188-3.201-6.188-6.682 0-1.693-2.987 7.872 48.95-147.941 3.453-10.355 11.294-18.492 21.514-22.324l68.018-25.507c10.429 47.039 52.426 81.387 101.518 81.387s91.09-34.347 101.519-81.387l68.019 25.508c10.219 3.83 18.06 11.968 21.51 22.323 52.06 156.177 48.953 146.325 48.953 147.94 0 3.482-2.717 6.417-6.187 6.683z" fill="#000" fill-rule="nonzero"/><path stroke="#000" stroke-width="13" stroke-linecap="round" d="M161.672 412.5l187.828-65M161.672 337.5l187.828-65"/></g></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo thể thao
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="site-megamenu__column">
                            <a href="/collection/ao-thun-nam-gioi" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon" style="width: 35px">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.7 407.7"><path d="M405.5 118.021a7.93 7.93 0 00-.29-.29l-84.16-74.8a7.994 7.994 0 00-2.64-1.6l-60.88-21.76a8 8 0 00-10.72 7.12c0 1.76-2.64 42.32-43.2 42.96-40.8-.64-43.36-41.2-43.44-42.96a8 8 0 00-10.64-7.12l-60.8 22c-.976.357-1.872.9-2.64 1.6l-83.6 74.56a8 8 0 000 11.6l66.56 67.28v184a8 8 0 008 8h253.6a8 8 0 008-8v-184l66.56-67.28a8 8 0 00.29-11.31zm-67.09 55.79v-37.12a8 8 0 00-16 0v235.52H84.73v-235.52a8 8 0 00-16 0v37.2l-49.2-49.84 76.16-68.16 50.08-18.08c6.204 31.966 37.147 52.851 69.113 46.647 23.607-4.582 42.065-23.04 46.647-46.647l50.08 18.08 75.92 68.16-49.12 49.76z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo ngắn tay

                                        
                                        
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="site-megamenu__column">
                            <a href="/collection/ao-cotton-compact-dai-tay" class="megamenu" style="min-width: 160px">
                                <span class="megamenu__icon" style="width: 35px">
                                    <svg height="512" width="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M481.593 52.286c-19.64-22.929-46.824-37.96-76.462-42.312L340.985.171A15.193 15.193 0 0 0 338.72 0H173.28c-.759 0-1.516.058-2.266.172l-64.058 9.79c-29.724 4.364-56.909 19.396-76.548 42.324C10.799 75.18 0 104.45 0 134.707v312.908c0 8.284 6.716 15 15 15h71.805V497c0 8.284 6.716 15 15 15h308.389c8.284 0 15-6.716 15-15v-34.385H497c8.284 0 15-6.716 15-15V134.707c0-30.257-10.799-59.527-30.407-82.421zM322.087 30C315.278 60.72 287.95 83.554 256 83.554c-32.144 0-59.305-22.772-66.081-53.554zM30 432.615v-34.998h56.805v34.998zM395.194 482H116.805V175.796c0-8.284-6.716-15-15-15s-15 6.716-15 15v191.821H30v-232.91c0-23.104 8.236-45.444 23.192-62.905C68.117 54.376 88.758 42.955 111.4 39.631l48.372-7.393c8.113 46.435 48.347 81.315 96.227 81.315 24.876 0 48.579-9.434 66.738-26.563a98.437 98.437 0 0 0 29.475-54.754l48.474 7.408c22.555 3.312 43.196 14.732 58.121 32.158C473.764 89.263 482 111.603 482 134.707v232.91h-56.806V175.796c0-8.284-6.716-15-15-15s-15 6.716-15 15zm30-49.385v-34.998H482v34.998z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Áo thu đông
                                    </span>
                                    <span class="megamenu__tag megamenu__tag--hot">
                                        hot
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="site-nav__item  mobile--hidden">
            <a href="https://www.coolmate.me/collection/quan-short-nam">QUẦN</a>
        </li>
        <li class="site-nav__item site-nav__item--has-sub  mobile--hidden">
            <a href="/collection/quan-lot-nam">QUẦN LÓT<span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span></a>
            <div class="site-megamenu">
                <div class="site-megamenu__container">
                    <div class="site-megamenu__row">
                        <div class="site-megamenu__column">
                            <a href="/collection/quan-lot-nam/trunk" class="megamenu">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.25 24.27"><defs></defs><title>Trunk</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="np_shorts_3162471_000000-copy-3" data-name="np shorts 3162471 000000-copy-3"><path fill="currentColor" d="M26,24.27a60.81,60.81,0,0,1-7-.46.43.43,0,0,1-.38-.47L18.42,20H16.83v3.34c0,.19-.18.47-.37.47A59.12,59.12,0,0,1,.37,23.53c-.28,0-.37-.28-.37-.46.56-8,1.12-17,.84-22.51A.57.57,0,0,1,.93.19.47.47,0,0,1,1.3,0H33.67c.09,0,.28.09.37.09s.09.19.09.38A185,185,0,0,0,35.25,23c0,.28-.09.47-.37.47a45.11,45.11,0,0,1-8.84.83Zm-6.51-1.39a45.42,45.42,0,0,0,14.7-.37A212.45,212.45,0,0,1,33.11.84H1.77C2,6.32,1.4,14.88.93,22.6a51.21,51.21,0,0,0,15,.28V19.44a.73.73,0,0,1,.19-.37c.09-.1.19-.1.37-.1l2.51.1a.44.44,0,0,1,.47.46Z"/><path fill="currentColor" d="M34.13,5.3H1.39V0H34.13ZM1.65,4.37H33.2V.93H1.65Z"/><path fill="currentColor" d="M18.79,19.62l-2.51-.09c-4-.28-4.47-4.56-4.84-8.65a30.39,30.39,0,0,0-1-6V4.65c0-.09.18-.19.28-.19H24.18a.33.33,0,0,1,.28.1.34.34,0,0,1,.09.28c-.46,2.41-.55,4.65-.74,6.6-.28,4.56-.56,7.81-5,8.18ZM11.16,5.21a27.86,27.86,0,0,1,.93,5.67c.37,4.19.74,7.81,4.19,8l2.51.09c3.81-.28,4-3,4.28-7.44a54.42,54.42,0,0,1,.65-6.23H11.16Z"/></g></g></g></svg>                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Quần lót Trunk
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="site-megamenu__row">
                        <div class="site-megamenu__column">
                            <a href="/collection/quan-lot-nam/brief" class="megamenu">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.55 24.21"><defs></defs><title>brief</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="np_mid-waist-brief_1579244_000000-copy" data-name="np mid-waist-brief 1579244 000000-copy"><path fill="currentColor" d="M9.63,24l.13.1.05,0a.54.54,0,0,0,.22.05h9.49a.54.54,0,0,0,.22-.05s0,0,.05,0l.13-.1h0l9.48-11a.57.57,0,0,0,.14-.37V.56A.56.56,0,0,0,29,0H.56A.56.56,0,0,0,0,.56v12A.62.62,0,0,0,.13,13L9.61,24ZM1.11,4.37H8.73L6,13.85A28.63,28.63,0,0,0,1.11,9.77Zm8.78,0h9.78l3,10.45A14.35,14.35,0,0,0,19,23.1H10.57a14.4,14.4,0,0,0-3.73-8.28Zm18.55,5.4a28.63,28.63,0,0,0-4.85,4.08L20.82,4.37h7.62ZM20.24,22c1-5.19,6.14-9.36,8.2-10.84V12.4Zm8.2-20.85V3.26H1.11V1.11Zm-27.33,10C3.17,12.6,8.34,16.77,9.31,22L1.11,12.4Z"/></g></g></g></svg>                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Quần lót Brief
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="site-megamenu__row">
                        <div class="site-megamenu__column">
                            <a href="/collection/quan-lot-nam/brief-boxer" class="megamenu">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.05 24.18"><defs></defs><title>Brif boxer</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="np_boxer-brief_1579238_000000-copy-2" data-name="np boxer-brief 1579238 000000-copy-2"><path fill="currentColor" d="M13,23.07l1.87-5.56a2.13,2.13,0,0,0,1.29,0L18,23.07a1.65,1.65,0,0,0,1.56,1.11,1.73,1.73,0,0,0,.38-.05l9.89-2.53A1.59,1.59,0,0,0,31,19.72l-3.48-15a.79.79,0,0,0,0-.09.52.52,0,0,0,0-.11v-4A.52.52,0,0,0,27,0H4.05a.53.53,0,0,0-.52.52v4s0,.08,0,.11l0,.09L0,19.72A1.58,1.58,0,0,0,1.18,21.6l9.89,2.53A1.62,1.62,0,0,0,13,23.07ZM11.73,5h7.59c0,6.82-2,11.56-3.8,11.56S11.77,11.83,11.73,5ZM30,20a.53.53,0,0,1-.38.63l-9.89,2.53a.61.61,0,0,1-.7-.38L17.09,17c2.11-1.75,3.25-7,3.28-12h6.17ZM4.57,1h21.9V4H4.57Zm6.76,22.08L1.44,20.59A.55.55,0,0,1,1.05,20L4.51,5h6.17c0,5,1.17,10.23,3.27,12L12,22.74a.61.61,0,0,1-.7.38Z"/></g></g></g></svg>                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Quần lót Boxer Brief
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="site-nav__item site-nav__item--has-sub mobile--hidden">
            <a href="/collection/tat-nam">PHỤ KIỆN<span class="site-nav__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="10.855" height="5.906" viewBox="0 0 10.855 5.906">
    <path id="Path_114" d="M1112.81 1192.869l5.077 4.714 4.778-4.714" fill="none" stroke="currentColor" stroke-linecap="round" data-name="Path 114" transform="translate(-1112.31 -1192.369)"/>
</svg></span></a>
            <div class="site-megamenu">
                <div class="site-megamenu__container">
                    <div class="site-megamenu__row">
                        <div class="site-megamenu__column">
                            <a href="/collection/tat-nam" class="megamenu" style="width: 250px">
                                <span class="megamenu__icon">
                                    <svg height="512" viewBox="0 0 52 61" width="512" xmlns="http://www.w3.org/2000/svg"><path d="M41.46 1.47A2 2 0 0039 .08L27.07 3.56c-.62-2.15-.65-2.8-1.57-3.31A2 2 0 0024 .08L8.52 4.6a2 2 0 00-1.39 2.45l7 26.23L3.54 44.35a9.306 9.306 0 0013 13.32L18 56.41a9.36 9.36 0 0013.52 1.26c6.77-5.83 9.24-8.1 14.28-11.61a12.12 12.12 0 004.77-13.31C42.4 4.07 59.2 63.94 41.46 1.47zM11.19 14.4L26.84 10l.61 2.1-15.69 4.42zm18.72-1.06L41.84 10l.61 2.1-11.93 3.4zM39.54 2l1.74 6-11.93 3.4c-.07-.23-1.8-6.21-1.72-5.94zm-15 0c.88 3-1.09-3.78 1.74 6l-15.61 4.47-1.59-6C25.2 1.8 24.44 2 24.54 2zm-8.43 30.75l-3.83-14.3L28 14l4.26 14.68c-7.19 3.79-10.2 10.83-5.5 17.86-3.39 2.56-6 4.9-10.44 8.66a28.67 28.67 0 00-10-10.81l9.31-9.71a2.05 2.05 0 00.48-1.93zm12.28 12.59c-3.87-5.85-1.48-11.34 4.45-14.71l.78 2.68a10.2 10.2 0 01-4 11.11c-.41.3-.82.58-1.23.92zM9.77 58a7.27 7.27 0 01-4.88-12.15 26.67 26.67 0 019.87 10.64A7.31 7.31 0 019.77 58zm9.72-2.87c3.27-2.76 2.49-2.17 5.8-4.87a26.87 26.87 0 014.46 6.27 7.32 7.32 0 01-10.26-1.42zm11.82.08A28.78 28.78 0 0026.85 49c1.28-1 2.59-2 3.93-2.92a12.18 12.18 0 004.76-13.3l-4.46-15.41L43 14l4.26 14.69c-7.16 3.77-10.22 10.8-5.5 17.86-3.94 2.95-5.48 4.45-10.45 8.64zm13.32-10.79c-.42.29-.83.6-1.25.9-3.83-5.8-1.51-11.31 4.46-14.69l.78 2.67a10.19 10.19 0 01-3.99 11.12z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Tất (vớ) + Khẩu Trang
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>















                    <div class="site-megamenu__row">
                        <div class="site-megamenu__column">
                            <a href="https://www.coolmate.me/collection/phu-kien" class="megamenu" style="width: 250px">
                                <span class="megamenu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" enable-background="new 0 0 512 512"><path fill="currentColor" d="M381.919 107.826l-88.01-10.637c-34.595-4.181-69.702 4.046-98.839 23.169-29.137 19.122-50.654 48.051-60.584 81.459l-24.691 83.059-104.666 57.09a9.843 9.843 0 00-5.091 7.776 9.842 9.842 0 003.655 8.545c44.614 35.691 98.379 55.554 155.481 57.441 2.976.098 5.94.148 8.904.148 53.898 0 105.6-16.234 150.029-47.2l58.407-40.707 124.274 12.747a9.833 9.833 0 007.58-2.469 9.84 9.84 0 003.264-7.272l.366-75.683c.364-75.065-55.559-138.46-130.079-147.466zM306.857 352.53c-83.626 58.284-196.192 57.435-278.876-.615l92.12-50.247 226.413 23.222-39.657 27.64zm185.15-32.499l-361.124-37.038 6.199-20.852 68.574 7.394c.358.038.715.058 1.068.058 4.96 0 9.226-3.741 9.77-8.785.582-5.403-3.325-10.254-8.727-10.838l-64.983-7.007 10.564-35.538c17.858-60.074 75.977-98.217 138.201-90.7l88.01 10.637c64.599 7.807 113.078 62.762 112.763 127.831l-.315 64.838z"/><path fill="currentColor" d="M237.19 253.141l-.076-.008c-5.411-.589-10.216 3.331-10.797 8.734s3.366 10.257 8.769 10.839a9.8 9.8 0 001.065.058c4.961 0 9.227-3.743 9.77-8.787.581-5.403-3.328-10.254-8.731-10.836z"/></svg>
                                </span>
                                <div class="megamenu__title">
                                    <span class="megamenu__text">
                                        Phụ kiện khác (Mũ, túi,...)
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>



        <li class="site-nav__item mobile--hidden tablet--hidden">
            <a href="/lp/coolxprint-mo-hinh-dat-in-ao-theo-cong-dong">
                COOLXPRINT
                <span class="new">Mới</span>
            </a>
        </li>

        <li class="site-nav__item mobile--hidden tablet--hidden desk--hidden">
            <a href="/blog">COOLBLOG</a>
        </li>
        <li class="site-nav__item mobile--hidden tablet--hidden desk--hidden">
            <a href="/size-chart">CHỌN SIZE</a>
        </li>
    </ul>
</div>
                </div>
                
                
            </div>
            <div class="site-header__line-search">
                <form method="post" action="https://www.coolmate.me/search" style="margin: 0;" onsubmit="handleSubmitSearch()">
                    <input type="hidden" name="_token" value="PQQbnSE60YL7l7HGCNmiIxGF76J2tGcE74so2l0J">
                    <div class="spotlight-search__wrapper">
                        <div class="container">
                            <div class="spotlight-search__field">
                                <input name="keyword" id="topbar--search" class="search-field"
                                    placeholder="Tìm sản phẩm..." autocomplete="off">
                                <span class="spotlight__loading spotlight--loading">
                                </span>
                                <button type="submit" id="search--button" class="spotlight-search__submit">
                                    <svg height="512" viewBox="0 0 6.35 6.35" width="512" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M2.894.511a2.384 2.384 0 00-2.38 2.38 2.386 2.386 0 002.38 2.384c.56 0 1.076-.197 1.484-.523l.991.991a.265.265 0 00.375-.374l-.991-.992a2.37 2.37 0 00.523-1.485C5.276 1.58 4.206.51 2.894.51zm0 .53c1.026 0 1.852.825 1.852 1.85S3.92 4.746 2.894 4.746s-1.851-.827-1.851-1.853.825-1.852 1.851-1.852z" paint-order="stroke fill markers"/></svg>
                                </button>
                                <button class="spotlight-search__close spotlight-search--close"></button>
                            </div>
                            <div class="spotlight__search">
                            </div>
                            <div class="spotlight__content spotlight__search--content">
                                                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="testlixi"></div>

                        <div class="site-content" style="position: relative; z-index: 1">
        <div class="checkout__content">
            <div class="checkout__main">
                                    <div class="checkout__information checkout__login">
                        <form method="POST" action="https://www.coolmate.me/account/login" class="login-form">
                            <h3 class="checkout__heading">Đăng nhập tài khoản</h3>
                            <div class="checkout__login-form">
                                <input type="hidden" name="_token" value="PQQbnSE60YL7l7HGCNmiIxGF76J2tGcE74so2l0J">                                
                                <input type="hidden" name="current_url" value="/cart">
                                <input type="hidden" class="form-control" name="from" value="cart">
                                <input type="hidden" name="params" value="">
                                <div class="form__group form__group--inline">
                                    <div class="form__field">
                                        <input type="email" class="form-control" name="email"
                                               placeholder="Email của bạn"
                                               required autofocus>
                                    </div>

                                    <div class="form__field">
                                        <input type="password" class="form-control" name="password"
                                               placeholder="Nhập mật khẩu" required autofocus>
                                    </div>
                                </div>
                                                                <div class="form__field flex justify--between checkout__login-actions">
                                    <div class="flex align--center">
                                        <a href="https://www.coolmate.me/account/forgot">Lấy lại mật khẩu</a>
                                        <a href="https://www.coolmate.me/account/register" class="text--primary">Đăng ký tài
                                            khoản</a>
                                    </div>
                                    <button type="submit"
                                            class="btn btn--primary btn--bold  btn--upper btn--rounded btn-login">Đăng nhập</button>
                                </div>
                            </div>
                        </form>
                    </div>
                                <input type="hidden" id="user-shipping"
                       value="null"/>
                                    <form id="order-info" onsubmit="return false">
                                                        <input type="hidden" name="_token" value="PQQbnSE60YL7l7HGCNmiIxGF76J2tGcE74so2l0J">                                <input type="hidden" name="nhanh_city" value=""/>
                                <input type="hidden" name="nhanh_district" value=""/>
                                <input type="hidden" name="nhanh_ward" value=""/>
                                <div class="checkout__information">
                                    <div class="flex justify--between">
                                        <h3 class="checkout__heading">Thông tin nhận hàng</h3>
                                                                                    <p>Bạn đã có tài khoản? <a href="#" class="toggle-login text--primary">Đăng
                                                    nhập
                                                    ngay</a></p>
                                                                            </div>
                                    <div class="form form-info">
  <div class="form__group form__group--inline">
          <div class="form__field">
        <input type="text" class="cart--data form-control" name="full_name"
               placeholder="Họ tên"
               autofocus
               value=""
               required/>
      </div>
      <div class="form__field form__field--required">
        <input type="number" class="cart--data form-control" name="phone"
               placeholder="Số điện thoại"
               autofocus
               required
               value="">
      </div>
      </div>
  <div class="form__field">
    <input type="email"
           class="cart--data form-control order--email"
                      name="email"
           placeholder="Địa chỉ email"
           autofocus
           value=""
           required>
  </div>
  <div class="form__field">
    <input type="text" class="cart--data form-control" name="address"
           id="address"
           placeholder="Địa chỉ (Ví dụ: 25T2, Hoàng Đạo Thúy, Trung Hòa, Cầu Giấy, Hà Nội)"
            required            autocomplete="off"
           value="">
    <div class="autocomplete-items" style="display: none"></div>
  </div>
  <div class="form__group form__group--inline">
          <div class="form__field">
        <select style="width: 100%; display: none;" id="selectCity">
          <option></option>
        </select>
      </div>
      <div class="form__field">
        <select style="width: 100%; display: none;" id="selectDistrict">
          <option></option>
        </select>
      </div>
      <div class="form__field">
        <select style="width: 100%; display: none;" id="selectWard">
          <option></option>
        </select>
      </div>
      </div>
  <div class="form__field">
    <textarea name="cnote" class="form-control cart--data"
              placeholder="Ghi chú thêm (Ví dụ: Giao hàng giờ hành chính)"></textarea>
  </div>
</div>
<div class="checkout__payment">
  <h3 class="checkout__heading">Chọn hình thức thanh toán</h3>
  <div class="payment-method">
          <div class="payment-method__option">
        <label class="payment-method__item is-active" style="cursor: pointer">
          <div class="radiobox">
            <input type="radio" name="payment_select" value="COD" checked
                   class="cart--data--payment">
            <span class="checkmark"></span>
            <span class="payment-method__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="38.325" height="24.317">
    <g
            id="shipped" transform="translate(.1 .1)">
        <g id="Group_1575"
           data-name="Group 1575">
            <g
                    id="Group_1574" data-name="Group 1574">
                <path
                        id="Path_207"
                        d="M35.457 104.286l-.987-3.949a.6.6 0 0 0 .472-.584v-.637a2.51 2.51 0 0 0-2.507-2.507h-4.5V95.3a1.235 1.235 0 0 0-1.235-1.238H3.781A1.235 1.235 0 0 0 2.547 95.3v10.825a.6.6 0 1 0 1.194 0V95.3a.04.04 0 0 1 .04-.04H26.7a.04.04 0 0 1 .04.04v10.825a.6.6 0 0 0 1.194 0v-.677h7.045a1.953 1.953 0 0 1 1.855 1.353h-1.853a.6.6 0 0 0-.6.6v1.273a1.873 1.873 0 0 0 1.87 1.87h.677v2.627h-1.557a3.78 3.78 0 0 0-7.146 0h-.287v-4.5a.6.6 0 1 0-1.194 0v4.5H14.358a3.78 3.78 0 0 0-7.146 0H3.781a.04.04 0 0 1-.04-.04v-1.313h2.587a.6.6 0 0 0 0-1.194H.6a.6.6 0 0 0 0 1.194h1.95v1.313a1.235 1.235 0 0 0 1.234 1.234h3.221v.04a3.781 3.781 0 1 0 7.561 0v-.04h13.452v.04a3.781 3.781 0 1 0 7.561 0v-.04h1.951a.6.6 0 0 0 .6-.6v-6.367a3.149 3.149 0 0 0-2.673-3.112zm-7.52-6.486h4.5a1.315 1.315 0 0 1 1.313 1.313v.04h-5.81zm0 6.447v-3.9h5.3l.975 3.9zm-17.152 12.738a2.587 2.587 0 1 1 2.587-2.587 2.59 2.59 0 0 1-2.587 2.587zm21.013 0a2.587 2.587 0 1 1 2.587-2.587 2.59 2.59 0 0 1-2.585 2.587zm5.134-7.641h-.677a.677.677 0 0 1-.677-.677v-.677h1.353v1.353z"
                        class="payment-icon"
                        data-name="Path 207"
                        transform="translate(0 -94.062)"/>
            </g>
        </g>
        <g
                id="Group_1577" data-name="Group 1577"
                transform="translate(9.551 19.103)">
            <g id="Group_1576"
               data-name="Group 1576">
                <path
                        id="Path_208"
                        d="M129.5 350.6a1.234 1.234 0 1 0 1.234 1.234 1.235 1.235 0 0 0-1.234-1.234z"
                        class="payment-icon" data-name="Path 208"
                        transform="translate(-128.267 -350.597)"/>
            </g>
        </g>
        <g
                id="Group_1579" data-name="Group 1579"
                transform="translate(30.564 19.103)">
            <g id="Group_1578"
               data-name="Group 1578">
                <path
                        id="Path_209"
                        d="M411.689 350.6a1.234 1.234 0 1 0 1.234 1.234 1.235 1.235 0 0 0-1.234-1.234z"
                        class="payment-icon" data-name="Path 209"
                        transform="translate(-410.455 -350.597)"/>
            </g>
        </g>
        <g
                id="Group_1581" data-name="Group 1581"
                transform="translate(15.282 16.556)">
            <g id="Group_1580"
               data-name="Group 1580">
                <path
                        id="Path_210"
                        d="M214.738 316.393h-8.914a.6.6 0 1 0 0 1.194h8.914a.6.6 0 0 0 0-1.194z"
                        class="payment-icon" data-name="Path 210"
                        transform="translate(-205.227 -316.393)"/>
            </g>
        </g>
        <g
                id="Group_1583" data-name="Group 1583"
                transform="translate(1.273 14.009)">
            <g id="Group_1582"
               data-name="Group 1582">
                <path
                        id="Path_211"
                        d="M25.34 282.188H17.7a.6.6 0 0 0 0 1.194h7.64a.6.6 0 0 0 0-1.194z"
                        class="payment-icon" data-name="Path 211"
                        transform="translate(-17.102 -282.188)"/>
            </g>
        </g>
        <g
                id="Group_1585" data-name="Group 1585"
                transform="translate(10.825 5.731)">
            <g id="Group_1584"
               data-name="Group 1584">
                <path
                        id="Path_212"
                        d="M155.3 171.2a.6.6 0 0 0-.844 0l-5.309 5.309-2.762-2.762a.6.6 0 0 0-.844.844l3.184 3.184a.6.6 0 0 0 .844 0l5.731-5.731a.6.6 0 0 0 0-.844z"
                        class="payment-icon" data-name="Path 212"
                        transform="translate(-145.37 -171.023)"/>
            </g>
        </g>
    </g>
</svg>                        </span>
            <div>
              <h4>Thanh toán khi nhận hàng (COD)</h4>
              <p style="color: #231f20">
                Miễn phí vận chuyển với mọi đơn hàng trên 300k</p>
            </div>
          </div>
        </label>
        <div class="payment-method__content"></div>
      </div>
        <div class="payment-method__option">
      <label class="payment-method__item" style="cursor: pointer">
        <div class="radiobox">
          <input type="radio" name="payment_select" value="zalopay"
                 class="cart--data--payment">
          <span class="checkmark"></span>
          <span class="payment-method__icon"><img width="55"
                                                  src="https://www.coolmate.me/images/logo-zalopay.svg"></span>
          <div>
            <h4>Ví điện tử ZaloPay</h4>
            <h4>Thẻ ATM / Internet Banking</h4>
            <h4>Thẻ tín dụng (Credit card) / Thẻ ghi nợ (Debit
              card)</h4>
          </div>
        </div>
      </label>
    </div>
    <div class="payment-method__option">
      <label class="payment-method__item" style="cursor: pointer">
        <div class="radiobox">
          <input type="radio" name="payment_select" value="momo"
                 class="cart--data--payment">
          <span class="checkmark"></span>
          <span class="payment-method__icon">
                        <img width="35" src="https://www.coolmate.me/images/momo-icon.png">
                    </span>
          <div>
            <h4>Ví MOMO</h4>
                      </div>
        </div>
      </label>
    </div>
        <div class="payment-method__option">
      <label class="payment-method__item">
        <div class="radiobox">
          <input type="radio" name="payment_select" value="shopeepay" class="cart--data--payment">
          <span class="checkmark"></span>
          <span class="payment-method__icon">
              <img width="35" src="https://mcdn.coolmate.me/image/September2021/195dbf69c0ac36f26fbd_(1).png">
          </span>
        </div>
        <div>
          <h4>Ví ShopeePay</h4>
        </div>
      </label>
    </div>
      <div class="payment-method__option">
        <label class="payment-method__item">
          <div class="radiobox">
            <input type="radio" name="payment_select" value="foxpay" class="cart--data--payment">
            <span class="checkmark"></span>
            <span class="payment-method__icon">
              <img width="75" src="https://www.coolmate.me/images/foxpay.png"></span>
          </div>
          <div>
            <h4>FoxPay</h4>
          </div>
        </label>
      </div>
  </div>
</div>                                    <p class="checkout__note">Nếu bạn không hài lòng với sản phẩm của chúng tôi? Bạn
                                        hoàn toàn
                                        có
                                        thể
                                        trả lại sản phẩm. Tìm hiểu thêm <a href="/page/chinh-sach-doi-tra"
                                                                           target="_blank"> tại
                                            đây</a>.
                                    </p>
                                    


                                    <div class="checkout__actions flex justify--end">
                                        <a                                            class="btn btn--primary btn--full btn-checkout"
                                           style="font-size: 18px;text-align: center;height: 70px;line-height: 1em;flex-flow: column">Đặt
                                            hàng
                                            <br>
                                                                                            <span style="font-size: 11px;display: contents;line-height: 1em;">Ship tới không mua không sao.<br> Mua rồi vẫn đổi trả miễn phí.</span>
                                                                                    </a>
                                    </div>
                            </form>
            </div>
        </div>
        <div class="checkout__sidebar">
            <div class="checkout__cart checkout__block">

                                <h3 class="checkout__heading text--primary text--center">Giỏ hàng của bạn</h3>
                    
                                
                
                <div class="cart" >
    
                                                        <div class="cart__item" id="6151256fff171837ef7fa4c25668ca4b">
                    <div class="cart__image">
                                                <img class="lazyload" src="https://mcdn.coolmate.me/uploads/September2021/DSC07107_160x181.jpg" alt="Áo Hoodie nam có mũ trùm Classic">
                                            </div>
                    <div class="cart__title">
                        <h3>
                                                            <a href="https://www.coolmate.me/product/ao-hoodie-nam-co-mu-trum-classic">Áo Hoodie nam có mũ trùm Classic</a>
                                                    </h3>
                        <div class="cart__variant">
                            <form action="https://www.coolmate.me/cart/update" method="POST">
                                <input type="hidden" name="_token" value="PQQbnSE60YL7l7HGCNmiIxGF76J2tGcE74so2l0J">                                                                                                                                                                                    <div class="cart__variant-field" id="variant-option" data-id="6151256fff171837ef7fa4c2"
                                             data-option="option1" data-option-value="Đen">
                                            <span>Màu sắc :</span>
                                            <div class="cart__variant-select">Đen</div>
                                        </div>
                                        <input name="variant_label_6151256fff171837ef7fa4c2" type="hidden" value="Màu sắc"/>
                                        <input name="old_variant_id" type="hidden" value="5668ca4b"/>
                                                                                                                                                                                        <div class="cart__variant-field" id="variant-option" data-id="6151256fff171837ef7fa4c2"
                                             data-option="option2" data-option-value="M">
                                            <span>Kích thước Áo :</span>
                                            <div class="cart__variant-select">M</div>
                                        </div>
                                        <input name="variant_label_6151256fff171837ef7fa4c2" type="hidden" value="Kích thước Áo"/>
                                        <input name="old_variant_id" type="hidden" value="5668ca4b"/>
                                                                                                                                                                                                                                                            <input name="product_id" type="hidden" value="6151256fff171837ef7fa4c2"/>
                                <input name="is_edit_variant" type="hidden" value="true"/>
                            </form>
                        </div>
                                                <div class="cart__variant_action">
                            <a class="cart__button cart__edit" onclick="editItem(this)" style="cursor: pointer;"
                               data-value="Edit" data-options="[{&quot;option_id&quot;:&quot;color&quot;,&quot;title&quot;:&quot;M\u00e0u s\u1eafc&quot;,&quot;values&quot;:[&quot;\u0110en&quot;,&quot;Xanh Navy&quot;,&quot;Xanh R\u00eau Nh\u1ea1t&quot;]},{&quot;option_id&quot;:&quot;tshirt_size&quot;,&quot;title&quot;:&quot;K\u00edch th\u01b0\u1edbc \u00c1o&quot;,&quot;values&quot;:[&quot;S&quot;,&quot;M&quot;,&quot;L&quot;,&quot;XL&quot;,&quot;2XL&quot;]}]">
                                <span class="edit"><svg height="401pt" viewBox="0 -1 401.523 401" width="401pt" xmlns="http://www.w3.org/2000/svg"><path d="M370.59 250.973c-5.524 0-10 4.476-10 10v88.789c-.02 16.562-13.438 29.984-30 30H50c-16.563-.016-29.98-13.438-30-30V89.172c.02-16.559 13.438-29.98 30-30h88.79c5.523 0 10-4.477 10-10 0-5.52-4.477-10-10-10H50c-27.602.031-49.969 22.398-50 50v260.594c.031 27.601 22.398 49.968 50 50h280.59c27.601-.032 49.969-22.399 50-50v-88.793c0-5.524-4.477-10-10-10zm0 0"/><path d="M376.629 13.441c-17.574-17.574-46.067-17.574-63.64 0L134.581 191.848a9.997 9.997 0 00-2.566 4.402l-23.461 84.7a9.997 9.997 0 0012.304 12.308l84.7-23.465a9.997 9.997 0 004.402-2.566l178.402-178.41c17.547-17.587 17.547-46.055 0-63.641zM156.37 198.348L302.383 52.332l47.09 47.09-146.016 146.016zm-9.406 18.875l37.62 37.625-52.038 14.418zM374.223 74.676L363.617 85.28l-47.094-47.094 10.61-10.605c9.762-9.762 25.59-9.762 35.351 0l11.739 11.734c9.746 9.774 9.746 25.59 0 35.36zm0 0"/></svg></span>
                                <span class="cancel"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 475.2 475.2"><path d="M405.6 69.6C360.7 24.7 301.1 0 237.6 0s-123.1 24.7-168 69.6S0 174.1 0 237.6s24.7 123.1 69.6 168 104.5 69.6 168 69.6 123.1-24.7 168-69.6 69.6-104.5 69.6-168-24.7-123.1-69.6-168zm-19.1 316.9c-39.8 39.8-92.7 61.7-148.9 61.7s-109.1-21.9-148.9-61.7c-82.1-82.1-82.1-215.7 0-297.8C128.5 48.9 181.4 27 237.6 27s109.1 21.9 148.9 61.7c82.1 82.1 82.1 215.7 0 297.8z"/><path d="M342.3 132.9c-5.3-5.3-13.8-5.3-19.1 0l-85.6 85.6-85.6-85.6c-5.3-5.3-13.8-5.3-19.1 0-5.3 5.3-5.3 13.8 0 19.1l85.6 85.6-85.6 85.6c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4s6.9-1.3 9.5-4l85.6-85.6 85.6 85.6c2.6 2.6 6.1 4 9.5 4 3.5 0 6.9-1.3 9.5-4 5.3-5.3 5.3-13.8 0-19.1l-85.4-85.6 85.6-85.6c5.3-5.3 5.3-13.8 0-19.1z"/></svg></span>
                                <span class="text">Sửa</span>
                            </a>
                            <a class="cart__button cart__saveVariant" onclick="handleUpdateVariant(this)"
                               style="cursor: pointer; display: none;" data-value="Edit">
                                <span><svg height="512" viewBox="0 0 512.007 512.007" width="512" xmlns="http://www.w3.org/2000/svg"><path d="M511.927 126.537a15.028 15.028 0 00-3.315-8.027c-.747-.913 6.893 6.786-114.006-114.113A15.116 15.116 0 00383.994.003H44.999c-24.813 0-45 20.187-45 45v422c0 24.813 20.187 45 45 45h422c24.813 0 45-20.187 45-45 .001-364.186.041-339.316-.072-340.466zM345 30.003v98c0 8.271-6.729 15-15 15h-19v-113zm-64 0v113H142c-8.271 0-15-6.729-15-15v-98zm64 291H127v-19c0-8.271 6.729-15 15-15h188c8.271 0 15 6.729 15 15zm-218 161v-131h218v131zm355-15c0 8.271-6.729 15-15 15h-92v-180c0-24.813-20.187-45-45-45H142c-24.813 0-45 20.187-45 45v180H45c-8.271 0-15-6.729-15-15v-422c0-8.271 6.729-15 15-15h52v98c0 24.813 20.187 45 45 45h188c24.813 0 45-20.187 45-45v-98h2.787L482 134.217z"/></svg></span>
                                Lưu
                            </a>
                        </div>
                                                                            <div class="quantity">
    <span class="quantity__decrease">-</span>
    <input type="number" name="quantity" value="1" min="1"
           max="42"
           item-id-data="6151256fff171837ef7fa4c2"
           item-type-data=""
           item-variant-data="5668ca4b"
           onchange="updateCart(this)">
    <span class="quantity__increase">+</span>
</div>

                                            </div>
                    <div class="cart__actions">
                        <div class="flex">
                            <a href="https://www.coolmate.me/cart/6151256fff171837ef7fa4c2/5668ca4b"
                               class="cart__remove">Xóa</a>
                        </div>
                        <div class="cart__prices">
                                                                                                                           <span>389.000đ</span>
                                                                                                                    </div>
                    </div>
                </div>
                                    </div>

                                

                                
                <div id="checkout-modal" class="modal">
                    <div class="flex justify--center align--center" style="height: 100%">
                        <div class="modal-content" style="margin: 0">
                            <div class="modal-content-inner">
                                                            </div>
                            <div style="margin-top: 20px; display: flex; justify-content: space-between; flex-wrap: wrap;">
                                <a href="javascript:void(0)" class="btn btn--outline" id="checkout-modal-submit" style="margin-bottom: 7px; width: 100%">Tiếp tục thanh toán</a>
                                <a href="javascript:void(0)" class="btn btn--primary" id="checkout-modal-close" style="width: 100%">Tôi sẽ cân nhắc và đặt hàng sau</a>
                            </div>
                        </div>
                    </div>
                </div>


                
                <span><i>Có <b>4</b> người đang thêm cùng sản phẩm giống bạn vào giỏ hàng. Mua ngay trước khi các sản phẩm này hết hàng nhé! </i></span>


                                <div style="padding: 10px; border: orange dashed 1px;border-radius: 5px;color: orange;font-style: italic;margin-top: 10px;display: none;">
                    <span><b>Thông báo dịp lễ 30/04 - 01/05:</b> Coolmate vẫn tiếp nhận đơn hàng và hỗ trợ khách hàng suốt dịp nghỉ lễ, tuy nhiên các đơn hàng phát sinh trong ngày hôm nay sẽ được giao đi từ ngày 02/05/2021. Chúc bạn kỳ nghỉ lễ vui vẻ và an toàn, nhớ đeo khẩu trang bạn nhé!</span>
                </div>

                            </div>
                        <div class="checkout__block">
                <div class="checkout__block-wrap ">
                    <div class="checkout__block-box">
                                                                            <form action="https://www.coolmate.me/discount" method="post"
                                  class="apply-coupon flex" id="discount">
                                <input type="hidden" name="_token" value="PQQbnSE60YL7l7HGCNmiIxGF76J2tGcE74so2l0J">                                <div class="checkout__coupon">
                                    <input type="text" class="form-control" name="code" placeholder="Mã giảm giá"
                                           autofocus required
                                           value="">
                                    <button class="btn btn--primary btn-discount">Áp dụng</button>
                                </div>
                            </form>
                                            </div>
                </div>
                                                                                
                
                <div class="checkout__summary">
                    <div class="flex justify--between">
                        <label>Tạm tính</label>
                        <span class="checkout__subtotal text--right">389.000đ</span>
                    </div>
                    <!--
                    <div class="flex justify--between" style="padding: 0px;">
                        <label><i style="font-size: 12px;color: orange;">MIỄN PHÍ GIAO HÀNG VỚI TẤT CẢ CÁC ĐƠN HÀNG</i></label>
                    </div>
                    -->
                                        <div class="flex justify--between">
                        <label>Mã giảm giá</label>
                        <span class="checkout__shipping text--right text--primary checkout__discount"
                              data-discount="0"> 0đ</span>
                    </div>
                                                                                                <div class="flex justify--between">
                                <label>Giảm giá khác</label>
                                <span class="checkout__shipping text--right text--primary promotion_price" data-promotion-price="0">0đ</span>
                            </div>
                                                                <div class="flex justify--between">
                        <label>Phí giao hàng
                                                    </label>
                        <span class="checkout__shipping text--right text--primary">Miễn phí</span>
                    </div>
                                                            <div class="flex justify--between">
                                                <label>Tổng cộng</label>
                        <span class="checkout__total text--bold text--right text--primary" data-total="389000">
                            389.000đ                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
                                        <div class="site-footer">
    <div class="container">
        
        
        
        
        
        <div class="site-footer__content">
            <div class="site-footer__logo">
                <img src="https://www.coolmate.me/images/logo.svg" width="158" height="60" alt="Coolmate.me">
            </div>
            <div class="site-footer__info">
                <a href="tel: 1900272737" class="contacts-card">
                    <span class="contacts-card__icon">
                        <svg height="512" width="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <switch>
                                <g>
                                    <path fill="currentColor"
                                        d="M487.5 146.5c-20.9-44.3-54-81.5-95.7-107.6-58-36.2-126.7-47.7-193.3-32.3C131.9 21.9 75.2 62.3 39 120.3 2.7 178.3-8.8 246.9 6.6 313.6s55.8 123.3 113.7 159.5c40.8 25.5 87.6 39 135.5 39h3.1c47.7-.6 94.1-14.4 134.3-39.8 11.7-7.4 15.1-22.8 7.7-34.5s-22.8-15.1-34.5-7.7c-32.3 20.5-69.7 31.6-108.1 32.1-39.4.5-77.9-10.4-111.5-31.3-96.3-60.4-125.7-187.8-65.4-284.1 29.2-46.7 74.8-79.2 128.4-91.5 53.6-12.4 108.8-3.1 155.5 26.1 33.6 21 60.2 50.9 77 86.5 16.4 34.7 22.8 73.2 18.5 111.2-1.5 13.7 8.3 26.1 22.1 27.6 13.7 1.5 26.1-8.3 27.6-22.1 5.3-47.2-2.7-95-23-138.1z" />
                                    <path fill="currentColor"
                                        d="M211.9 151.2c-9.8-9.8-25.6-9.8-35.4 0-13.6 13.6-22 31.7-23.5 51s4 38.5 15.4 54c26 35.3 57.1 66.4 92.4 92.4 13.9 10.2 30.6 15.7 47.7 15.7 2.1 0 4.2-.1 6.3-.2 19.2-1.5 37.3-9.8 51-23.5 9.8-9.8 9.8-25.6 0-35.4s-25.6-9.8-35.4 0c-10.7 10.7-27.9 12.1-40 3.2-31.2-23-58.7-50.5-81.7-81.7-8.9-12.1-7.6-29.3 3.2-40 9.8-9.9 9.8-25.8 0-35.5z" />
                                </g>
                            </switch>
                        </svg>
                    </span>
                    <div class="contacts-card__content">
                        <span class="contacts-card__label">
                            Hotline
                        </span>
                        <span class="contacts-card__title contacts-card__title--phone" style="font-size: 16px;display: block">
                            1900.272737
                        </span>
                        <span class="contacts-card__title contacts-card__title--phone" style="font-size: 16px;display: block">
                            (028.7777.2737)
                        </span>
                    </div>
                </a>
            </div>
            <div class="site-footer__info">
                <a href="mailto: cool@coolmate.me" class="contacts-card" style="height: 89px">
                    <span class="contacts-card__icon">
                        <svg height="512" width="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor"
                                d="M392 418.5H240c-11.046 0-20-8.954-20-20s8.954-20 20-20h152c44.112 0 80-35.888 80-80v-164c0-44.112-35.888-80-80-80H120c-44.112 0-80 35.888-80 80v154c0 5.514 4.486 10 10 10h60c11.046 0 20 8.954 20 20s-8.954 20-20 20H50c-27.57 0-50-22.43-50-50v-154c0-66.168 53.832-120 120-120h272c66.168 0 120 53.832 120 120v164c0 66.168-53.832 120-120 120zm-212-20.021c0-11.046-8.954-20-20-20H20c-11.046 0-20 8.954-20 20s8.954 20 20 20h140c11.046 0 20-8.954 20-20zm60 79.021c0-11.046-8.954-20-20-20H20c-11.046 0-20 8.954-20 20s8.954 20 20 20h200c11.046 0 20-8.954 20-20zm89.236-225.558l96.855-73.512c8.798-6.678 10.518-19.224 3.839-28.022-6.676-8.797-19.223-10.518-28.022-3.839l-96.893 73.54c-28.552 21.774-68.422 21.788-96.981.037l-93.807-72.474c-8.741-6.753-21.303-5.142-28.055 3.6-6.753 8.741-5.142 21.301 3.6 28.055l93.855 72.512.099.075c21.429 16.345 47.109 24.515 72.786 24.515 25.664 0 51.324-8.164 72.724-24.487z" />
                        </svg>
                    </span>
                    <div class="contacts-card__content">
                        <span class="contacts-card__label">
                            Email
                        </span>
                        <span class="contacts-card__title">
                            cool@coolmate.me
                        </span>
                    </div>
                </a>
            </div>
            <div class="site-footer__info">
                <div class="social-grid">
                    <div class="social-grid__item">
                        <a href="https://www.facebook.com/coolmate.me/" target="_blank">
                            <svg height="512" viewBox="0 0 100 100" width="512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40.437 55.166c-.314 0-6.901.002-9.939-.001-1.564-.001-2.122-.563-2.122-2.137a9807.51 9807.51 0 010-12.129c.001-1.554.591-2.147 2.135-2.148 3.038-.002 9.589-.001 9.926-.001v-8.802c.002-3.974.711-7.778 2.73-11.261 2.067-3.565 5.075-6.007 8.93-7.419 2.469-.905 5.032-1.266 7.652-1.268 3.278-.002 6.556.001 9.835.007 1.409.002 2.034.625 2.037 2.044.006 3.803.006 7.606 0 11.408-.002 1.434-.601 2.01-2.042 2.026-2.687.029-5.376.011-8.06.119-2.711 0-4.137 1.324-4.137 4.13-.065 2.968-.027 5.939-.027 9.015.254 0 7.969-.001 11.575 0 1.638 0 2.198.563 2.198 2.21 0 4.021-.001 8.043-.004 12.064-.001 1.623-.527 2.141-2.175 2.142-3.606.002-11.291.001-11.627.001v32.545c0 1.735-.546 2.288-2.258 2.288H42.541c-1.513 0-2.103-.588-2.103-2.101l-.001-32.732z"
                                    fill="#3d6ad6" />
                            </svg>
                        </a>
                    </div>
                    <div class="social-grid__item">
                        <a href="https://www.youtube.com/channel/UCWw8wLlodKBtEvVt1tTAsMA" target="_blank">
                            <svg height="512" viewBox="0 0 100 100" width="512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M74.866 21.411H25.134C16.77 21.411 10 28.191 10 36.546v26.909c0 8.354 6.77 15.134 15.134 15.134h49.731C83.23 78.589 90 71.809 90 63.454V36.546c0-8.355-6.77-15.135-15.134-15.135zM39.461 62.264V37.736l21.077 12.289z"
                                    fill="red" />
                            </svg>
                        </a>
                    </div>
                    <div class="social-grid__item">
                        <a href="https://www.instagram.com/coolmate.me/" target="_blank">
                            <svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
                                <linearGradient id="a123" gradientUnits="userSpaceOnUse" x1="42.966" x2="469.034"
                                    y1="469.03" y2="42.962">
                                    <stop offset="0" stop-color="#ffd600" />
                                    <stop offset=".5" stop-color="#ff0100" />
                                    <stop offset="1" stop-color="#d800b9" />
                                </linearGradient>
                                <linearGradient id="b123" gradientUnits="userSpaceOnUse" x1="163.043" x2="348.954"
                                    y1="348.954" y2="163.043">
                                    <stop offset="0" stop-color="#ff6400" />
                                    <stop offset=".5" stop-color="#ff0100" />
                                    <stop offset="1" stop-color="#fd0056" />
                                </linearGradient>
                                <linearGradient id="c123" gradientUnits="userSpaceOnUse" x1="370.929" x2="414.373"
                                    y1="141.068" y2="97.624">
                                    <stop offset="0" stop-color="#f30072" />
                                    <stop offset="1" stop-color="#e50097" />
                                </linearGradient>
                                <path
                                    d="M510.46 150.453c-1.245-27.25-5.573-45.86-11.901-62.14a125.466 125.466 0 00-29.528-45.344 125.503 125.503 0 00-45.344-29.535c-16.285-6.325-34.89-10.649-62.14-11.887C334.247.297 325.523 0 256 0s-78.246.297-105.547 1.54c-27.25 1.245-45.855 5.573-62.14 11.901A125.466 125.466 0 0042.968 42.97a125.488 125.488 0 00-29.535 45.34c-6.325 16.285-10.649 34.894-11.887 62.14C.297 177.754 0 186.473 0 255.996c0 69.527.297 78.25 1.547 105.55 1.242 27.247 5.57 45.856 11.898 62.142a125.451 125.451 0 0029.528 45.34 125.433 125.433 0 0045.343 29.527c16.282 6.332 34.891 10.656 62.141 11.902 27.305 1.246 36.023 1.54 105.547 1.54 69.523 0 78.246-.294 105.547-1.54 27.25-1.246 45.855-5.57 62.14-11.902a130.879 130.879 0 0074.868-74.868c6.332-16.285 10.656-34.894 11.902-62.14C511.703 334.242 512 325.523 512 256c0-69.527-.297-78.246-1.54-105.547zM464.38 359.45c-1.137 24.961-5.309 38.516-8.813 47.535a84.775 84.775 0 01-48.586 48.586c-9.02 3.504-22.574 7.676-47.535 8.813-26.988 1.234-35.086 1.492-103.445 1.492-68.363 0-76.457-.258-103.45-1.492-24.956-1.137-38.51-5.309-47.534-8.813a79.336 79.336 0 01-29.434-19.152 79.305 79.305 0 01-19.152-29.434c-3.504-9.02-7.676-22.574-8.813-47.535-1.23-26.992-1.492-35.09-1.492-103.445 0-68.36.262-76.453 1.492-103.45 1.14-24.96 5.309-38.515 8.813-47.534a79.367 79.367 0 0119.152-29.438 79.261 79.261 0 0129.438-19.148c9.02-3.508 22.574-7.676 47.535-8.817 26.992-1.23 35.09-1.492 103.445-1.492h-.004c68.356 0 76.453.262 103.45 1.496 24.96 1.137 38.511 5.309 47.534 8.813a79.375 79.375 0 0129.434 19.148 79.261 79.261 0 0119.149 29.438c3.507 9.02 7.68 22.574 8.816 47.535 1.23 26.992 1.492 35.09 1.492 103.445 0 68.36-.258 76.453-1.492 103.45zm0 0"
                                    fill="url(#a123)" />
                                <path
                                    d="M255.996 124.54c-72.601 0-131.457 58.858-131.457 131.46s58.856 131.457 131.457 131.457c72.606 0 131.461-58.855 131.461-131.457s-58.855-131.46-131.46-131.46zm0 216.792c-47.125-.004-85.332-38.207-85.328-85.336 0-47.125 38.203-85.332 85.332-85.332 47.129.004 85.332 38.207 85.332 85.332 0 47.129-38.207 85.336-85.336 85.336zm0 0"
                                    fill="url(#b123)" />
                                <path
                                    d="M423.371 119.348c0 16.965-13.754 30.718-30.719 30.718-16.968 0-30.722-13.754-30.722-30.718 0-16.97 13.754-30.723 30.722-30.723 16.965 0 30.72 13.754 30.72 30.723zm0 0"
                                    fill="url(#c123)" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__page">
        <div class="container">
            <div class="grid grid--four-columns grid--doubling">
                <div class="grid__column">
                    <div class="site-footer__item">
                        <h5 class="site-footer__label" data-tab-open>
                            Địa chỉ Liên hệ
                        </h5>
                        <div class="site-footer__tab" data-tab-content>
                            <p class="site-footer__infomations">
                                <b>HUB Hà Nội:</b> Số 103, Đường Vạn Phúc,
                                Phường Vạn Phúc, Quận Hà Đông,
                                TP. Hà Nội
                            </p>
                            <p class="site-footer__infomations">
                                <b>HUB Tp HCM:</b> Lầu 1, Số 163 Trần Trọng Cung, Phường Tân Thuận Đông, Quận 7, Tp. Hồ Chí Minh
                            </p>
                            <div class="site-footer__comments mobile--hidden tablet--hidden">
                                <h4 class="title">
                                    Coolmate lắng nghe bạn!
                                </h4>
                                <p class="desc">
                                    Chúng tôi luôn trân trọng và mong đợi nhận được mọi ý kiến đóng góp từ khách hàng để có thể nâng cấp trải nghiệm dịch vụ và sản phẩm tốt hơn nữa.
                                </p>
                                <a class="typeform-share button link" href="https://form.typeform.com/to/lU2oprGc?typeform-medium=embed-snippet" data-mode="popup" data-size="70" target="_blank">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999"><path d="M510.156 401.843L480.419 315.3c14.334-29.302 21.909-61.89 21.96-94.679.088-57.013-21.97-110.92-62.112-151.79-40.15-40.878-93.652-63.889-150.652-64.792-59.105-.934-114.661 21.548-156.428 63.314-40.274 40.273-62.612 93.366-63.319 150.102-39.694 29.886-63.123 76.481-63.046 126.25.037 23.29 5.279 46.441 15.212 67.376L1.551 470.689c-3.521 10.247-.949 21.373 6.713 29.035 5.392 5.393 12.501 8.264 19.812 8.264 3.076 0 6.188-.508 9.223-1.551l59.609-20.483c20.935 9.933 44.086 15.175 67.376 15.212h.248c50.51-.002 97.46-24.035 127.237-64.702 30.987-.816 61.646-8.317 89.363-21.876l86.544 29.738a33.696 33.696 0 0010.959 1.843c8.688 0 17.136-3.412 23.545-9.822 9.104-9.105 12.16-22.326 7.976-34.504zM164.53 470.69h-.199c-20.614-.031-41.085-5.113-59.196-14.695a15.244 15.244 0 00-12.078-.942l-61.123 21.003 21.003-61.122a15.24 15.24 0 00-.942-12.078c-9.582-18.112-14.664-38.582-14.696-59.197-.051-33.159 12.848-64.588 35.405-88.122 7.368 44.916 28.775 86.306 61.957 118.898 32.937 32.351 74.339 52.949 119.011 59.683-23.588 23.249-55.384 36.572-89.142 36.572zm316.098-55.893c-.867.867-1.895 1.103-3.051.705l-92.648-31.836a15.232 15.232 0 00-12.077.942c-26.453 13.994-56.345 21.416-86.447 21.462h-.288c-100.863 0-184.176-81.934-185.774-182.773-.805-50.785 18.513-98.514 54.394-134.395 35.881-35.881 83.618-55.192 134.396-54.392 100.936 1.601 182.926 85.068 182.77 186.063-.047 30.102-7.468 59.995-21.461 86.446a15.24 15.24 0 00-.942 12.078l31.835 92.648c.397 1.16.159 2.187-.707 3.052z"/><path d="M376.892 139.512h-181.56c-8.416 0-15.238 6.823-15.238 15.238 0 8.416 6.823 15.238 15.238 15.238h181.56c8.416 0 15.238-6.823 15.238-15.238s-6.822-15.238-15.238-15.238zM376.892 202.183h-181.56c-8.416 0-15.238 6.823-15.238 15.238s6.823 15.238 15.238 15.238h181.56c8.416 0 15.238-6.823 15.238-15.238s-6.822-15.238-15.238-15.238zM307.004 264.852H195.331c-8.416 0-15.238 6.823-15.238 15.238 0 8.416 6.823 15.238 15.238 15.238h111.672c8.416 0 15.238-6.823 15.238-15.238s-6.821-15.238-15.237-15.238z"/></svg>
                                    </span>
                                    Gửi ý kiến
                                </a>
                                <script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm_share", b="https://embed.typeform.com/"; if(!gi.call(d,id)){ js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid__column">
                    <div class="site-footer__item">
                        <h5 class="site-footer__label" data-tab-open>
                            Truy Cập Nhanh
                        </h5>
                        <div class="site-footer__tab" data-tab-content>
                            <ul class="no-style">
                                <li>
                                    <a href="/cau-chuyen-ve-coolmate?itm_source=footer_nav">Câu chuyện về Coolmate</a>
                                </li>
                                <li>
                                    <a
                                        href="/page/chuong-trinh-va-chinh-sach-khuyen-mai-tai-coolmate?itm_source=footer_nav">Chính
                                        sách khuyến mãi</a>
                                </li>
                                <li>
                                    <a href="/page/chinh-sach-doi-tra?itm_source=footer_nav">Đổi trả 60 ngày</a>
                                </li>
                                <li>
                                    <a href="/page/dich-vu-giao-hang-coolmate?itm_source=footer_nav">Chính sách giao
                                        hàng</a>
                                </li>
                                <li>
                                    <a href="/page/dieu-khoan-su-dung?itm_source=footer_nav">Bảo mật và điều khoản sử
                                        dụng</a>
                                </li>
                                <li>
                                    <a href="/page/11-dich-vu-tai-coolmate-co-the-ban-chua-biet?itm_source=footer_nav">Khách
                                        hàng hài lòng 100%</a>
                                </li>
                                <li>
                                    <a
                                        href="/page/coolclub-chuong-trinh-khach-hang-than-thiet-cua-coolmate?itm_source=footer_nav">Thành
                                        viên Coolclub</a>
                                </li>
                                <li>
                                    <a href="/page/san-pham-coolmate-duoc-san-xuat-nhu-the-nao?itm_source=footer_nav">Nhà
                                        máy</a>
                                </li>
                                <li>
                                    <a href="/blog?itm_source=footer_nav">Cool BLOG - Mặc đẹp sống chất</a>
                                </li>
                            </ul>
                            <ul class="no-style desk--hidden large--hidden">
                                <li>
                                    <a href="/collections?itm_source=footer_nav">Sản phẩm</a>
                                </li>
                                <li>
                                    <a href="/collection/ready-to-use-boxes">Tủ đồ tạo sẵn</a>
                                </li>
                                <li>
                                    <a href="/coolsub?itm_source=footer_nav">Tủ đồ định kỳ Coolsub</a>
                                </li>
                                <li>
                                    <a href="/lp/coolxprint-mo-hinh-dat-in-ao-theo-cong-dong?itm_source=footer_nav">
                                        CoolXPrint
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="grid__column mobile--hidden tablet--hidden">
                    <div class="site-footer__item">
                        <h5 class="site-footer__label">Sản phẩm</h5>
                        <div class="site-footer__tab">
                            <ul class="no-style">
                                <li>
                                    <a href="/collection/ready-to-use-boxes?itm_source=footer_nav">Tủ đồ tạo sẵn</a>
                                </li>
                                <li>
                                    <a href="/coolsub?itm_source=footer_nav">Tủ đồ định kỳ Coolsub</a>
                                </li>
                                <li>
                                    <a href="/lp/coolxprint-mo-hinh-dat-in-ao-theo-cong-dong?itm_source=footer_nav">
                                        CoolXPrint
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="grid__column">
                    <div class="site-footer__item">
                        <h5 class="site-footer__label" data-tab-open>
                            Chính sách
                        </h5>
                        <div class="site-footer__tab" data-tab-content>
                            <ul class="no-style">
                                <li>
                                    <a href="/page/lien-he-voi-coolmate?itm_source=footer_nav">Liên hệ</a>
                                </li>
                                <li>
                                    <a href="/page/faqs?itm_source=footer_nav">Hỏi đáp </a>
                                </li>
                                <li>
                                    <a href="/account/info?itm_source=footer_nav">Thông tin tài khoản </a>
                                </li>
                                <li>
                                    <a href="/account/orders?itm_source=footer_nav">Đơn hàng của bạn</a>
                                </li>
                                <li>
                                    <a href="/account/coolsub?itm_source=footer_nav">Tủ đồ định kỳ của bạn </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="site-footer__comments desk--hidden large--hidden">
            <h4 class="title">
                Coolmate lắng nghe bạn!
            </h4>
            <p class="desc">
                Chúng tôi luôn trân trọng và mong đợi nhận được mọi ý kiến đóng góp từ khách hàng để có thể nâng cấp trải nghiệm dịch vụ và sản phẩm tốt hơn nữa.
            </p>
            <a class="typeform-share button link" href="https://form.typeform.com/to/lU2oprGc?typeform-medium=embed-snippet" data-mode="popup" data-size="70" target="_blank">
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999"><path d="M510.156 401.843L480.419 315.3c14.334-29.302 21.909-61.89 21.96-94.679.088-57.013-21.97-110.92-62.112-151.79-40.15-40.878-93.652-63.889-150.652-64.792-59.105-.934-114.661 21.548-156.428 63.314-40.274 40.273-62.612 93.366-63.319 150.102-39.694 29.886-63.123 76.481-63.046 126.25.037 23.29 5.279 46.441 15.212 67.376L1.551 470.689c-3.521 10.247-.949 21.373 6.713 29.035 5.392 5.393 12.501 8.264 19.812 8.264 3.076 0 6.188-.508 9.223-1.551l59.609-20.483c20.935 9.933 44.086 15.175 67.376 15.212h.248c50.51-.002 97.46-24.035 127.237-64.702 30.987-.816 61.646-8.317 89.363-21.876l86.544 29.738a33.696 33.696 0 0010.959 1.843c8.688 0 17.136-3.412 23.545-9.822 9.104-9.105 12.16-22.326 7.976-34.504zM164.53 470.69h-.199c-20.614-.031-41.085-5.113-59.196-14.695a15.244 15.244 0 00-12.078-.942l-61.123 21.003 21.003-61.122a15.24 15.24 0 00-.942-12.078c-9.582-18.112-14.664-38.582-14.696-59.197-.051-33.159 12.848-64.588 35.405-88.122 7.368 44.916 28.775 86.306 61.957 118.898 32.937 32.351 74.339 52.949 119.011 59.683-23.588 23.249-55.384 36.572-89.142 36.572zm316.098-55.893c-.867.867-1.895 1.103-3.051.705l-92.648-31.836a15.232 15.232 0 00-12.077.942c-26.453 13.994-56.345 21.416-86.447 21.462h-.288c-100.863 0-184.176-81.934-185.774-182.773-.805-50.785 18.513-98.514 54.394-134.395 35.881-35.881 83.618-55.192 134.396-54.392 100.936 1.601 182.926 85.068 182.77 186.063-.047 30.102-7.468 59.995-21.461 86.446a15.24 15.24 0 00-.942 12.078l31.835 92.648c.397 1.16.159 2.187-.707 3.052z"/><path d="M376.892 139.512h-181.56c-8.416 0-15.238 6.823-15.238 15.238 0 8.416 6.823 15.238 15.238 15.238h181.56c8.416 0 15.238-6.823 15.238-15.238s-6.822-15.238-15.238-15.238zM376.892 202.183h-181.56c-8.416 0-15.238 6.823-15.238 15.238s6.823 15.238 15.238 15.238h181.56c8.416 0 15.238-6.823 15.238-15.238s-6.822-15.238-15.238-15.238zM307.004 264.852H195.331c-8.416 0-15.238 6.823-15.238 15.238 0 8.416 6.823 15.238 15.238 15.238h111.672c8.416 0 15.238-6.823 15.238-15.238s-6.821-15.238-15.237-15.238z"/></svg>
                </span>
                Gửi ý kiến
            </a>
        </div>
        <div class="site-footer__bottom">
            <div class="site-footer__meta">
                <h3>@ CÔNG TY TNHH FASTECH ASIA</h3>
                <p>
                    Mã số doanh nghiệp: 0108617038. Giấy chứng nhận đăng ký doanh nghiệp do Sở Kế hoạch và Đầu tư TP Hà
                    Nội
                    cấp lần đầu ngày 20/02/2019.
                </p>
            </div>
            <div  class="site-footer__logo flex align--center">
                <svg style="height: 100%" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="6.5" y="11.5" width="487" height="487" rx="8.5" stroke="#000" stroke-width="3"/><path d="M63 208.373c.255-3.061.51-6.122.765-9.438 1.786-23.722 8.163-45.914 19.386-66.575 19.896-36.732 49.23-62.75 86.471-79.33 16.836-7.397 34.691-11.988 52.802-14.029h1.785v52.036l-11.479 2.296c-31.629 7.652-57.137 24.742-75.757 52.291-11.479 16.835-18.111 35.71-19.641 56.372-2.551 33.67 7.652 63.004 29.079 88.257 18.875 21.936 42.853 35.2 70.656 41.067 1.786.255 3.571.765 5.612 1.02 1.785 0 1.785 1.021 1.785 2.296v50.25a662.57 662.57 0 01-11.478-1.53c-23.722-3.826-45.914-11.988-66.575-24.997-35.711-22.447-61.474-53.822-74.993-95.145-4.847-14.794-7.398-30.099-7.908-45.659 0-.765-.255-1.53-.255-2.295-.255-2.296-.255-4.592-.255-6.887zM258.89 385.141v-4.337-118.356-48.975-2.296c.51.511 1.02.766 1.275 1.021 45.404 44.128 91.063 88.257 136.466 132.641 13.52 13.009 26.784 26.018 40.303 39.027.51.51.765.765 1.02 1.275h-77.033l-.511-.51c-15.304-14.54-30.609-28.824-45.914-43.364-.255-.255-.51-.51-1.02-.765V383.1c0 .766 0 1.275-.255 2.041H258.89zM260.189 91.036V39c2.806.255 5.612.51 8.418 1.02 37.752 5.612 70.912 21.427 99.225 48.21 23.978 22.957 40.558 50.506 48.72 83.411 8.418 34.18 6.122 67.595-6.122 100.5-3.316 8.928-7.397 17.346-12.243 25.508-.255.51-.51 1.02-1.021 1.531-3.826-3.572-7.397-7.143-10.968-10.714-9.183-8.928-18.11-17.6-27.293-26.528-1.021-.765-1.021-1.53-.51-2.806 15.049-36.221 13.519-71.677-5.612-105.602-17.856-31.375-44.639-50.505-78.564-59.433-5.102-1.53-9.438-2.296-14.03-3.06zM101.778 472.636v1.276H79.841v-1.276h1.275c1.275 0 2.296-.255 2.806-.765.51-.256 1.02-.766 1.275-1.786.255-.51.256-2.04.256-4.336v-31.375c0-2.551 0-4.081-.256-4.591-.255-.51-.765-1.02-1.275-1.531-.765-.51-1.53-.765-2.806-.765h-1.275v-1.276h21.937v1.276h-1.276c-1.275 0-2.296.255-2.806.765-.51.256-1.02.766-1.275 1.786-.255.51-.255 2.04-.255 4.336v31.375c0 2.551 0 4.081.255 4.591.255.51.765 1.02 1.275 1.531.765.51 1.53.765 2.806.765h1.276zM133.407 474.419c1.02 3.061 2.296 5.357 4.336 7.143 2.041 1.785 4.592 2.295 7.398 2.295.765 0 1.785 0 2.55-.255v2.041c-3.061.765-5.866 1.275-8.417 1.275-3.826 0-7.142-1.02-10.203-3.316-3.061-2.041-5.357-5.357-6.887-9.438-5.102-1.275-9.183-4.081-12.244-8.417-3.061-4.336-4.591-9.693-4.591-15.815 0-7.142 2.04-13.009 6.377-17.856 4.081-4.846 9.437-7.142 15.814-7.142 6.377 0 11.734 2.296 15.815 7.142 4.081 4.847 6.122 10.714 6.122 17.856 0 6.122-1.53 11.479-4.846 16.07-2.551 4.592-6.632 7.397-11.224 8.417zm-5.356-46.678c-3.572 0-6.633 2.295-8.673 6.631-1.786 3.571-2.551 8.928-2.551 15.815 0 8.162 1.275 14.285 3.826 18.111 1.786 2.806 4.082 4.081 7.398 4.081 3.06 0 5.611-1.275 7.397-4.081 2.551-3.826 3.826-9.694 3.826-17.346 0-7.652-.765-13.264-2.296-16.58-2.295-4.336-5.101-6.631-8.927-6.631zM194.371 425.19v16.58h-1.276c-1.02-4.337-2.551-7.653-5.102-9.949-2.55-2.296-5.356-3.571-8.417-3.571-2.551 0-5.102.766-7.142 2.551-2.296 1.786-3.826 3.826-4.847 6.632a34.307 34.307 0 00-2.04 11.734c0 4.336.51 8.162 1.53 11.733 1.02 3.571 2.296 6.122 4.336 7.908 2.041 1.785 4.592 2.805 7.908 2.805 2.551 0 5.101-.765 7.142-2.04 2.296-1.275 4.591-3.571 6.887-6.887v4.081c-2.296 2.806-4.846 4.847-7.397 6.122-2.551 1.275-5.612 1.786-8.928 1.786-4.336 0-8.417-1.021-11.989-3.062-3.571-2.04-6.121-4.846-7.907-8.672-1.785-3.827-2.806-7.907-2.806-12.244 0-4.591 1.021-8.928 3.061-13.009 2.041-4.081 4.847-7.142 8.418-9.438 3.571-2.295 7.397-3.316 11.223-3.316 3.061 0 6.122.765 9.183 2.296 1.785.765 3.061 1.276 3.571 1.276.765 0 1.276-.255 1.786-.765.51-.511.765-1.531 1.02-2.551h1.786zM239.761 473.91h-24.488v-.766c7.653-10.203 11.989-17.091 13.775-20.662 1.53-3.571 2.295-6.886 2.295-10.457 0-2.551-.765-4.592-2.04-6.123-1.276-1.53-3.061-2.55-4.847-2.55-3.061 0-5.611 1.786-7.397 5.357l-1.02-.511c1.02-4.591 2.805-7.907 5.101-9.948 2.296-2.04 4.847-3.316 7.908-3.316 2.04 0 4.081.511 5.867 1.786 1.785 1.02 3.061 2.551 4.081 4.591 1.02 2.041 1.53 3.826 1.53 5.612 0 3.061-.765 6.377-2.296 9.438-2.04 4.336-6.632 10.458-13.519 18.11h8.928c2.296 0 3.571.001 4.336-.254.766-.256 1.276-.511 1.531-1.021.51-.51 1.02-1.53 1.785-3.061h1.021l-2.551 13.775zM274.726 425.19v1.02c-3.826 1.02-6.632 2.551-8.928 4.082-2.295 1.785-4.081 3.826-5.356 6.122-1.276 2.551-2.296 5.356-3.061 8.927 1.02-.765 1.53-1.275 2.296-1.275 1.275-.51 2.55-.765 4.081-.765 3.061 0 5.612 1.275 7.907 3.826 2.041 2.551 3.061 6.122 3.061 10.713 0 3.061-.51 6.122-1.786 8.673-1.02 2.551-2.805 4.591-4.846 6.122-2.04 1.53-4.336 2.041-6.632 2.041-2.551 0-4.846-.766-7.142-2.296-2.296-1.531-3.826-4.082-5.102-7.143-1.275-3.061-1.785-6.377-1.785-10.203 0-5.357 1.02-10.203 3.316-14.794 2.295-4.591 5.357-8.162 9.693-10.968 4.081-2.551 8.927-4.082 14.284-4.082zm-17.6 23.213c-.255 3.316-.255 5.611-.255 7.142 0 3.316.255 6.377.765 9.437.51 3.061 1.275 5.102 2.296 6.377.765.766 1.53 1.276 2.295 1.276 1.02 0 1.786-.511 2.551-1.786.765-1.276 1.02-3.826 1.02-7.652 0-6.377-.765-10.969-2.04-13.519-.766-1.531-2.041-2.296-3.571-2.296-.766 0-1.786.255-3.061 1.021zM285.94 449.932v-1.276c2.296-.765 4.081-1.53 4.847-2.04 1.02-.765 1.785-1.785 2.295-3.061.765-1.275 1.02-2.806 1.02-4.081 0-2.041-.51-3.571-1.785-5.102-1.275-1.275-2.806-2.04-4.592-2.04-2.805 0-5.356 1.785-7.397 5.101l-1.02-.51c1.53-3.826 3.316-6.887 5.612-8.928 2.295-2.04 4.846-3.061 7.652-3.061s5.357 1.021 7.142 3.061c1.786 2.041 2.806 4.336 2.806 7.142 0 1.786-.51 3.572-1.275 5.102-.766 1.531-2.296 3.061-4.081 4.336 2.295 1.275 4.336 3.061 5.611 4.847 1.276 2.04 1.786 4.336 1.786 7.397 0 4.847-1.531 9.183-4.847 12.754-3.061 3.571-7.397 5.102-12.754 5.102-3.571 0-6.122-.766-7.652-2.041-1.276-1.021-1.786-2.04-1.786-3.571 0-1.02.255-2.041 1.021-2.806.765-.765 1.53-1.021 2.296-1.021.765 0 1.275.256 1.785.511.255.255 1.53 1.275 3.571 3.061 2.041 1.785 3.826 2.805 5.612 2.805 1.53 0 2.805-.765 3.826-2.04 1.02-1.275 1.531-3.061 1.531-5.102 0-3.316-1.021-6.121-3.062-8.927-1.53-2.551-4.336-4.591-8.162-5.612zM319.364 474.93l11.479-39.281h-8.673c-3.316 0-5.867.51-7.652 1.53-1.275.766-2.296 2.041-3.061 4.082h-1.275l3.06-14.795h24.743l-14.029 48.72h-4.592v-.256zM347.665 463.196c1.53 0 2.551.511 3.571 1.786 1.02 1.02 1.53 2.551 1.53 4.081 0 1.531-.51 3.061-1.53 4.082-1.02 1.02-2.296 1.785-3.571 1.785-1.531 0-2.551-.51-3.571-1.785-1.02-1.021-1.531-2.551-1.531-4.082 0-1.53.511-3.061 1.531-4.081.765-1.275 2.04-1.786 3.571-1.786zM381.601 473.91h-24.488v-.766c7.653-10.203 11.989-17.091 13.775-20.662 1.53-3.571 2.295-6.886 2.295-10.457 0-2.551-.765-4.592-2.04-6.123-1.276-1.53-3.061-2.55-4.847-2.55-3.061 0-5.611 1.786-7.397 5.357l-1.021-.511c1.021-4.591 2.807-7.907 5.102-9.948 2.296-2.04 4.847-3.316 7.908-3.316 2.04 0 4.081.511 5.866 1.786 1.786 1.02 3.061 2.551 4.082 4.591 1.02 2.041 1.53 3.826 1.53 5.612 0 3.061-.765 6.377-2.295 9.438-2.041 4.336-6.632 10.458-13.52 18.11h8.928c2.296 0 3.571.001 4.336-.254.765-.256 1.276-.511 1.531-1.021.51-.51 1.02-1.53 1.785-3.061h1.02l-2.55 13.775zM407.364 425.19v39.027c0 2.806 0 4.847.255 5.612.255.765.766 1.53 1.531 2.04.765.51 1.785.766 3.315.766h1.021v1.275h-21.937v-1.275h1.02c1.786 0 3.062-.256 3.827-.766.765-.51 1.275-1.02 1.53-2.04.255-.765.511-2.806.511-5.612v-24.742c0-2.296-.001-3.571-.256-4.082-.255-.51-.51-1.02-1.02-1.53s-1.02-.511-1.786-.511c-1.02 0-2.295.256-3.826 1.021l-.51-1.275 15.305-7.908h1.02z" fill="#070000"/></svg>
                <a href="http://online.gov.vn/Home/WebDetails/53184?AspxAutoDetectCookieSupport=1" style="text-align: center">
                    <img class="lazyload" height="52" width="137.45" src="https://www.coolmate.me/images/placeholder-image.png" data-src="https://www.coolmate.me/images/logoSaleNoti.png" alt="logo sale noti"
                        style="max-height: 52px;object-fit: contain">
                </a>
            </div>
        </div>
    </div>
</div>






    </div>


<div class="notify">
    <a class="notify__close">x</a>
    <div class="notify__wrapper">
        <div class="notify__content">
            <h4 class="notify__message">Sản phẩm <a href="#" target="_blank" class="notify__title"></a> đã được thêm
                vào
                giỏ hàng!</h4>
            <a href="https://www.coolmate.me/cart" class="btn btn--outline btn--small">Xem giỏ hàng</a>
        </div>
    </div>
</div>
<div class="loading">
    <img src="https://www.coolmate.me/images/loading.svg" alt="Loading image">
    <span>Loading</span>
</div>

<script defer src="https://www.coolmate.me/js/functions.js?v=6U4E6UFpvBWost25q4"></script>

    <script type="text/javascript">
        function editItem(e) {
            let parent = $(e).closest(".cart__item")[0];
            let options = JSON.parse($(e).attr("data-options"));
            if ($(e).attr("data-value") === "Edit") {
                let variants = $(parent).find(".cart__title .cart__variant #variant-option .cart__variant-select");
                let variantContainer = $(parent).find(".cart__title .cart__variant #variant-option");
                variants.each(function (key, item) {
                    let container = $(`<div class="custom-select" style="width:100px;"></div>`);
                    let selectVariant = $(`<select></select>`);
                    const values = options[parseInt(key)].values;
                    const option = $(variantContainer[parseInt(key)]).data("option");
                    const optionValue = $(variantContainer[parseInt(key)]).data("option-value");
                    values.forEach(function (value, key) {
                        let item = $(`<option></option>`);
                        $(item).html(value);
                        $(item).attr("value", value);
                        if (value === optionValue) $(item).attr("selected", "selected");
                        $(selectVariant).append(item);
                    });
                    $(selectVariant).attr("name", "variants_option[" + option + "]");
                    $(container).html(selectVariant);
                    $(item).html(container);
                    selectBox(container);
                });
                $(e).addClass('is-cancel');
                $(e).children('.text').html("Hủy");
                $(e).attr("data-value", "Cancel");
                $(e).siblings(".cart__remove").hide();
                $(e).siblings(".cart__saveVariant").show();
            } else {
                let variants = $(parent).find(".cart__title .cart__variant .cart__variant-field");
                variants.each(function (key, item) {
                    let oldVariant = $(item).data('option-value');
                    $(item).find(".cart__variant-select").children().remove();
                    let oldVariantEl = $(`<strong></strong>`);
                    $(oldVariantEl).html(oldVariant);
                    $(item).find(".cart__variant-select").append(oldVariantEl);
                });
                $(e).removeClass('is-cancel');
                $(e).children('.text').html("Sửa");
                $(e).attr("data-value", "Edit");
                $(e).siblings(".cart__saveVariant").hide();
                $(e).siblings(".cart__remove").show();
            }
        }

        function handleUpdateVariant(e) {
            let data = $(e).parents(".cart__variant_action").siblings(".cart__variant").children("form").serialize();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "https://www.coolmate.me/cart/update",
                timeout: 5000,
                data: data,
                success: function (data) {
                    if (data.status === 'success') {
                        location.reload();
                    } else {
                        theme.PushNotify({
                            message: data.message,
                            level: 'error'
                        });
                    }
                },
                fail: function (xhr, textStatus, errorThrown) {
                    theme.PushNotify({
                        message: 'Có lỗi xảy ra. Tải lại trang và thử lại',
                        level: 'error'
                    });
                }
            });
        }

        var setTimeOutG;
        var ajax_running = 0;
        var stop = 0;
        setInterval(function () {
            if (ajax_running > 0) {
                ajax_running -= 1;
            }
        }, 1000);

        function updateCart(e) {
            if (ajax_running > 2) {
                stop = 1;
                setTimeout(function () {
                    calling(e);
                }, 9000);
                ajax_running = 1;
            } else if (stop === 0) {
                calling(e);
                ajax_running += 1;
            }
        }

        function calling(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            var box = $(e).attr("item-type-data");
            var quantity = Number($(e).val());
            var max = Number($(e).attr("max"));
            var product_id = $(e).attr("item-id-data");
            var variant_id = $(e).attr("item-variant-data");
            var discount = $('input[name="code"]').val();
            theme.Loading.show();
            $.ajax({
                type: "POST",
                url: "https://www.coolmate.me/cart/update",
                timeout: 5000,
                data: {
                    _token: "PQQbnSE60YL7l7HGCNmiIxGF76J2tGcE74so2l0J",
                    id: product_id,
                    variant_id: variant_id,
                    quantity: quantity,
                    discount: discount,
                    box: box
                },
                success: function (data) {
                    if (data.status !== 'success') {
                        if (data.message) {
                            theme.Loading.hide();
                            alert(data.message);
                            if(quantity > max) {
                                quantity = max;
                                $(e).val(quantity).change();
                            }
                            location.reload();
                            return;
                        }

                        theme.PushNotify({
                            message: 'Có lỗi xảy ra.',
                            level: 'error'
                        });
                    } else {
                        if (data.qty !== 0) {
                            clearTimeout(setTimeOutG);
                            setTimeOutG = setTimeout(function (e) {
                                if ($('#discount').length) {
                                    $('#discount').submit();
                                } else {
                                    location.reload();
                                }
                            }, 1000);
                        }
                    }
                },
                fail: function (xhr, textStatus, errorThrown) {
                    theme.Loading.hide();
                    theme.PushNotify({
                        message: 'Có lỗi xảy ra. Tải lại trang và thử lại',
                        level: 'error'
                    });
                }
            });
            stop = 0;
        }

        function selectBox(x) {
            let i, j, l, ll, selElmnt, a, b, c;
            l = x.length;
            for (i = 0; i < l; i++) {
                selElmnt = x[i].getElementsByTagName("select")[0];
                ll = selElmnt.length;
                /* For each element, create a new DIV that will act as the selected item: */
                a = document.createElement("DIV");
                a.setAttribute("class", "select-selected");
                a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                x[i].appendChild(a);
                /* For each element, create a new DIV that will contain the option list: */
                b = document.createElement("DIV");
                b.setAttribute("class", "select-items select-hide");
                for (j = 0; j < ll; j++) {
                    /* For each option in the original select element,
                    create a new DIV that will act as an option item: */
                    c = document.createElement("DIV");
                    c.innerHTML = selElmnt.options[j].innerHTML;
                    c.addEventListener("click", function (e) {
                        /* When an item is clicked, update the original select box,
                        and the selected item: */
                        var y, i, k, s, h, sl, yl;
                        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                        sl = s.length;
                        h = this.parentNode.previousSibling;
                        $(s).children().removeAttr("selected");
                        for (i = 0; i < sl; i++) {
                            if (s.options[i].innerHTML === this.innerHTML) {
                                s.selectedIndex = i;
                                $(s.options[i]).attr("selected", "selected");
                                h.innerHTML = this.innerHTML;
                                y = this.parentNode.getElementsByClassName("same-as-selected");
                                yl = y.length;
                                for (k = 0; k < yl; k++) {
                                    y[k].removeAttribute("class");
                                }
                                this.setAttribute("class", "same-as-selected");
                                break;
                            }
                        }
                        h.click();
                    });
                    b.appendChild(c);
                }
                x[i].appendChild(b);
                a.addEventListener("click", function (e) {
                    /* When the select box is clicked, close any other select boxes,
                    and open/close the current select box: */
                    e.stopPropagation();
                    closeAllSelect(this);
                    this.nextSibling.classList.toggle("select-hide");
                    this.classList.toggle("select-arrow-active");
                });
            }
        }

        function closeAllSelect(elmnt) {
            /* A function that will close all select boxes in the document,
            except the current select box: */
            var x, y, i, xl, yl, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            xl = x.length;
            yl = y.length;
            for (i = 0; i < yl; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i)
                } else {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < xl; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                }
            }
        }

        document.addEventListener("click", closeAllSelect);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios@0.18.0/dist/axios.min.js"></script>
            <script src="https://static.chaipay.io/chaipay.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            $(document).ready(function () {
                const btncheckout = $('.btn-checkout');
                btncheckout.click(function (e) {
                    setTimeout(function (e){
                        if (!window.checkoutValidate) return;
                        createOrder()
                    },100)
                })

                function createOrder() {
                    let data = getFormData()
                    let url = $('#order-info').attr('action') || "https://www.coolmate.me/checkout/store-new";
                    $.ajax({
                        url,
                        type: 'post',
                        data: data,
                        success: function (result) {
                            data = result.data
                            if (result.status == true) {
                                if (data != undefined) {
                                    chaipayApi(data)
                                }
                            } else {
                                theme.PushNotify({
                                    message: result.message,
                                    level: 'error'
                                });
                            }

                            if (result.redirect_url != undefined) {
                                window.location = result.redirect_url;
                            }
                        }
                    });
                };

                function getFormData() {
                    if (window.orderEmail !== '') {
                        $('.order--email').val(window.orderEmail)
                    }
                    const form = $('#order-info');
                    return form.serialize();
                }
            })
        });

        function chaipayApi(data) {
            const chai_pay_key = `TMprrEfUPhkxzcId`
            const chaipay = new window.ChaiPay({
                chaiPayKey: chai_pay_key
            })
            chaipay.paymentService.payment({
                "pmt_channel": data.pmt_channel,
                "pmt_method": data.pmt_method,
                "merchant_order_id": data.merchant_order_id,
                "amount": data.amount,
                "currency": "VND",
                "description": data.pmt_description,
                "billing_details": {
                    "billing_address": {
                        "city": data.billing_details.billing_address.city,
                        "country_code": "VN",
                        "locale": "en",
                        "line_1": data.billing_details.billing_address.line_1,
                        "line_2": data.billing_details.billing_address.line_1,
                        "postal_code": "400202",
                        "state": "VN"
                    }
                },
                "signature_hash": data.signature_hash,
                "shipping_details": {
                    "shipping_address": {
                        "city": data.shipping_details.shipping_address.city,
                        "country_code": "VN",
                        "locale": "en",
                        "line_1": data.shipping_details.shipping_address.line_1,
                        "line_2": data.shipping_details.shipping_address.line_1,
                        "postal_code": "400202",
                        "state": "VN"
                    }
                },
                "order_details": data.order_details,
                "success_url": data.success_url,
                "failure_url": data.failure_url
            })
        }
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        window.checkoutValidate = false;
        window.orderEmail = "";
        let input_address = "";
        let autocomplete;
        let isPickedGM = false;
        let goongClient = goongSdk({ accessToken: "rKJS9Hx6ztCYyvtzLngE2sa1Naf29xWkDQTFJlHo", more_compound: true });
        let citiesData = {};
        let districtsData = {};
        let userShipping = {};
        let cityInput, districtInput, wardInput;

        function autocompleteItemSelect(el) {
            $("input[name=address]").val($(el).html());
            $(".autocomplete-items").fadeOut(200);
            let dataCompound = $(el).data("compound");
            if(dataCompound.province) {
                cityInput.val(dataCompound.province).trigger("change");
                let districts = citiesData[dataCompound.province];

                if (districts !== undefined && dataCompound.district !== null) {
                    const foundDistrict = window.find(districts, function (item) {
                        return (item.district).toString().includes(dataCompound.district);
                    });
                    if (foundDistrict !== undefined) {
                        districtInput.val(foundDistrict.district);
                        districtInput.trigger("change");
                        let wards = districtsData[foundDistrict.district];
                        if(wards !== undefined && dataCompound.commune) {
                            let foundWards = window.find(wards, function (item) {
                                return (item.ward).toString().includes(dataCompound.commune);
                            });
                            if(foundWards !== undefined) wardInput.val(foundWards.ward).trigger("change");
                        }
                    }
                }
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
                        function setPadding() {
                const el = document.querySelector('.site-header__inner')
                const specs = el.getBoundingClientRect()
                let paddingLeft = specs.x / window.outerWidth * 100
                paddingLeft = paddingLeft + '%'
                document.querySelector('.checkout__main').style.paddingLeft = paddingLeft
            }

            setPadding()
            window.addEventListener('resize', setPadding)
                        
            $('input[name="payment_select"]').bind('click', function () {
                $('.payment-method__item').removeClass('is-active')
                const targetContent = $(this).closest('.payment-method__option').find('.payment-method__content')
                $(this).closest('.payment-method__item').addClass('is-active')
                $('.payment-method__content').not(targetContent).slideUp()
                targetContent.slideDown()
            })

            const btncheckout = $('.btn-checkout')

            const zalopay = {
                zalopayCheckout: function () {
                    $.post("https://www.coolmate.me/checkout/store", getFormData(), function (data) {
                        if (typeof (data.status) != 'undefined' && data.status === 'success') {
                            new QRCode(document.querySelector('#qrcode'), data.order.orderurl);
                        }
                        return false;
                    });
                }
            }

            btncheckout.click(function (e) {
                e.preventDefault();
                if (!validateForm()) {
                    if ($('.form-control--error').length > 0) {
                        let offsetTop = $('.form-control--error').offset().top
                        $('body,html').animate({
                            scrollTop: offsetTop - $('.site-header').height()
                        })
                        return false
                    }
                }

                let form = $(this).closest('form'),
                    valid = true

                $.each(form.find('input[required]'), function (index, value) {
                    if (!$(value).val()) {
                        valid = false;
                    }
                })
                window.checkoutValidate = valid;
                if (valid) {
                    if($("#checkout-modal .modal-content-inner").html().trim().length > 0 && window.checkoutValidate) {
                        $("#checkout-modal").show();
                        window.checkoutValidate = false;
                    } else beginCheckOut(form);
                }
            });

            $('#checkout-modal-submit').click(function () {
                const _this = $(this),
                    html = `<div class="text--center"><img src="https://www.coolmate.me/images/loading.svg" width="30px" height="30px"/></div>`;
                _this.addClass('btn--disabled');
                _this.attr("disabled", true);
                _this.html(html);
                $(".btn-checkout").trigger("click");
                window.checkoutValidate = true;
            });

            $('#checkout-modal-close').click(function () {
                $("#checkout-modal").hide();
            });

            function beginCheckOut(form) {
                btncheckout.attr("disabled", true)
                var addons = $('input.cart-addon-choices');
                form.append(addons)
                gtmCheckout(form);
            }

            const validateEmail = function (email) {
                const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            }

            function validateForm() {
                const required_fields = $('#order-info input[required]');
                let check = true
                required_fields.each(function (i, input) {
                    const thisEle = $(this),
                        value = thisEle.val();


                    thisEle.next('.help-text').remove();

                    thisEle.removeClass('form-control--error');
                    if (value.trim() === '') {
                        thisEle.addClass('form-control--error');
                        const group_error = thisEle.closest('.grouped-error');
                        if (group_error.length > 0) {
                            if (group_error.next('.help-text').length == 0) {
                                group_error.after('<p class="help-text" style="padding-left: 10px">Vui lòng nhập thông tin này</p>');
                            }
                        } else {
                            thisEle.after('<p class="help-text">Vui lòng nhập thông tin này</p>')
                        }

                        check = false
                    }
                    if (thisEle.attr('type') === 'email' && validateEmail(value) == false) {
                        thisEle.next('.help-text').remove();
                        thisEle.addClass('form-control--error')
                        thisEle.after('<p class="help-text">Vui lòng nhập email </p>')
                        check = false
                    }
                });

                try {
                    $('#order-info select[required]').each(function () {
                        const thisEle = $(this);
                        thisEle.next().find(".select2-selection--single").removeClass('form-control--error');
                        thisEle.parent().find(".help-text").remove();
                        if (!thisEle.val()) {
                            thisEle.next().find(".select2-selection--single").addClass('form-control--error');
                            thisEle.parent().append('<p class="help-text">Vui lòng lựa chọn thông tin này</p>');
                            check = false;
                        }
                    });
                    return check;
                } catch (err) {
                    alert(err.message);
                }

            }


            function getFormData() {
                const form = $('#order-info');
                var formData = form.serialize();
                return formData;
            }

            const body = $('body')
            body.on('change', '.form-control--error', function () {

                if ($(this).val() !== '') {
                    $(this).removeClass('form-control--error')
                    $(this).next('.help-text').remove()
                }
            })

            
            // Toggle login form
            $('.toggle-login').click(function (e) {
                e.preventDefault()
                $('.checkout__login').slideToggle('fast')
                $('.login-form [name="email"]').focus();
            })

            $('.cart--data').blur(function (e) {
                e.preventDefault()

                localStorage.setItem('cart_full_name', $('input.cart--data[name="full_name"]').val());
                localStorage.setItem('cart_phone', $('input.cart--data[name="phone"]').val());
                localStorage.setItem('cart_email', $('input.cart--data[name="email"]').val());
                localStorage.setItem('cart_address', $('input.cart--data[name="address"]').val() != "undefined" ? $('input.cart--data[name="address"]').val() : '');
                localStorage.setItem('cart_note', $('textarea.cart--data[name="cnote"]').val());
            })
            // Sét giá trị mặc định cho payment store
            jQuery(document).ready(function ($) {
                let payment_default = localStorage.getItem('cart_payment')
                if (!payment_default) {
                    localStorage.setItem('cart_payment', 'COD');
                    $('input.cart--data--payment[value="COD"]').prop('checked', true);
                } else {
                    if (payment_default == 'vnpay') {
                        payment_default = 'COD'
                        localStorage.setItem('cart_payment', 'COD');
                        $('input.cart--data--payment[value="COD"]').prop('checked', true);
                    }
                    $('.cart--data--payment').removeAttr('checked')
                    let payment_active = $('input.cart--data--payment[value="' + payment_default + '"]').prop('checked', true);
                    $('.payment-method__item').removeClass('is-active')
                    payment_active.parents(".payment-method__item").addClass('is-active')
                    // Đẩy thẻ div lên trên đầu
                    payment_active.parents('.payment-method__option').prependTo(".payment-method");
                }
            });
            $('.cart--data--payment').click(function () {
                let value = $(this).val()
                localStorage.setItem('cart_payment', value);
            })
            // End

            // Discount 5% for payment select momo
            if (window.cool_mate_settings.DISCOUNT_MOMO) {
                // Action : load page
                let payment_active = localStorage.getItem('cart_payment')
                if (payment_active === 'momo') {
                    discountPaymentMomo()
                } else {
                    discountPaymentNotMomo()
                }
                // Action : click
                $('.cart--data--payment').click(function () {
                    let payment_method = this.value
                    if (payment_method === 'momo') {
                        discountPaymentMomo()
                    } else {
                        discountPaymentNotMomo()
                    }
                })

                function discountPaymentMomo() {
                    let total_price = $('.checkout__total').data('total')
                    let discount = $('.promotion_price').data('promotion-price')
                    let percent_5 = total_price * 0.05;
                    total_price = currencyFormat(total_price - percent_5)
                    // Discount  = 7% cool_club + 5% MOMO
                    discount = currencyFormat(discount + percent_5)
                    applyText(total_price, discount)
                }

                function discountPaymentNotMomo() {
                    let total_price = "389000";
                    let discount = "0";
                    // Discount  = 5% cool club only
                    discount = currencyFormat(Number(discount))
                    applyText(total_price, discount)
                }


                function applyText(total_price, discount) {
                    let text_discount = '';
                    if (discount !== '0đ') {
                        text_discount = '-' + discount;
                    } else {
                        text_discount = discount;
                    }
                    $('.checkout__total').text(total_price)
                    $('.promotion_price').text(text_discount)
                }

                function currencyFormat(num) {
                    return num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + 'đ'
                }
            }
            // End

            $('input.cart--data[name="address"]').keydown(function () {
                input_address = $(this).val();
                isPickedGM = false;
            });
            $('input.cart--data[name="address"]').change(function () {
                if (!isPickedGM) {
                    //$('input[name="nhanh_city"]').val('');
                    //$('input[name="nhanh_district"]').val('');
                    //$('input[name="nhanh_ward"]').val('');
                    //cityInput.val(null).trigger('change');
                    //districtInput.val(null).trigger('change');
                    //wardInput.val(null).trigger('change');
                }
                localStorage.setItem("cart_address", $(this).val());
            });
            const form_fullname = $('input[name="full_name"]'),
                form_phone = $('input[name="phone"]'),
                form_email = $('input[name="email"]'),
                form_address = $('input[name="address"]'),
                form_cnote = $('input[name="cnote"]')
            if ($.trim(form_fullname.val()) === '')
                form_fullname.val(localStorage.getItem('cart_full_name'))
            if ($.trim(form_phone.val()) === '')
                form_phone.val(localStorage.getItem('cart_phone'))
            if ($.trim(form_email.val()) === '')
                $('input.cart--data[name="email"]').val(localStorage.getItem('cart_email'))
            if ($.trim(form_address.val()) === '') {
                $('input[name="address"]').val(localStorage.getItem('cart_address'))
            }

            /*Nếu trong database có thông tin địa chỉ thì gán vào giỏ hàng*/
            if (``) localStorage.setItem('nhanh_city', ``)
            if (``) localStorage.setItem('nhanh_district', ``)
            if (``) localStorage.setItem('nhanh_ward', ``)
            /*End*/

            if (localStorage.getItem('formatted_address') == localStorage.getItem('cart_address')) {
                $('input[name="nhanh_city"]').val(localStorage.getItem('nhanh_city') === "undefined" ? '' : localStorage.getItem('nhanh_city'));
                $('input[name="nhanh_district"]').val(localStorage.getItem('nhanh_district') === "undefined" ? '' : localStorage.getItem('nhanh_district'));
                $('input[name="nhanh_ward"]').val(localStorage.getItem('nhanh_ward') === "undefined" ? '' : localStorage.getItem('nhanh_ward'));
            }
            if ($.trim(form_cnote.val()) === '')
                form_cnote.val(localStorage.getItem('cart_note'))
            jQuery(document).ready(function ($) {
                const val = $('.code--error').html();
                if (val) {
                    theme.PushNotify({
                        message: val,
                        level: 'error'
                    });
                }
                let buttonEle = $('.checkout__actions'),
                    covidBlock = $('.checkout__covid'),
                    buttonOffsetTop = buttonEle.offset().top,
                    buttonHeight = buttonEle.height()
                $(window).scroll(function () {
                    const windowScrollTop = $(window).scrollTop() + $(window).height()
                    if (windowScrollTop > buttonOffsetTop + buttonHeight) {
                        buttonEle.addClass('un-fixed')
                        covidBlock.addClass('un-fixed')
                    }
                    else {
                        buttonEle.removeClass('un-fixed')
                        covidBlock.removeClass('un-fixed')
                    }
                })
            });

            function gtmCheckout(form) {
                var products = [];
                $('.cart__item').each(function (i) {
                    var item = $(this);
                    var product_id = item.data('id');
                    var quantity = item.find('[name="quantity"]').val();
                    var price = item.data('product_price');
                    var category = item.data('product_cat');
                    var name = item.data('product_name');
                    var variant = item.data('product_variant');
                    var package_date = item.find('[name="package-date"]').val();
                    products.push({
                        'name': name + '',
                        'id': product_id + '',
                        'price': price + '',
                        'brand': 'Coolmate',
                        'category': category + '',
                        'variant': variant + '',
                        'quantity': parseInt(quantity),
                        'package_date': package_date
                    })
                });

                dataLayer.push({
                    'event': 'checkout',
                    'ecommerce': {
                        'checkout': {
                            'actionField': {'step': 1, 'option': $('[name="payment_select"]:checked').val()},
                            'products': products
                        }
                    },
                    'eventCallback': function () {
                        // form.submit()
                    }
                });
                setTimeout(function () {
                    form.submit()
                }, 1000);
            }

            $(document).on('click', '.checkout__block-wrap', function (e) {
                if ($(e.target).hasClass('is-active')) {
                    $(e.target).removeClass('is-active')
                    $('.checkout__block-box-meta').hide()
                }
            })
            $(document).on('click', '.checkout-coupon__item a', function (e) {
                let coupon = $(this).data('coupon'),
                    eleCoupon = $('.checkout__coupon');
                eleCoupon.find('input[name="code"]').val(coupon);
                eleCoupon.find('button.btn-discount').click();
            })
                        let inputAddress = document.getElementById("address");
            let timeOut;
            $(inputAddress).on("keydown", function () {
                if(timeOut) {
                    clearTimeout(timeOut);
                }
                let _this = $(this);
                if(!$(_this).val()) return;
                timeOut = setTimeout(function() {
                    goongClient.autocomplete.search({
                        limit: 20,
                        more_compound: true,
                        input: $(_this).val()
                    }).send().then(res => {
                        res = res.body;
                        let autocomplete = $(_this).siblings(".autocomplete-items");
                        autocomplete.empty();
                        if(res.status === "OK") {
                            res.predictions.forEach(function (item) {
                                $("<div onclick='autocompleteItemSelect(this)'></div>").html(item.description)
                                    .attr("data-compound", JSON.stringify(item.compound))
                                    .appendTo(autocomplete);
                            });
                            autocomplete.fadeIn(200);
                        } else autocomplete.fadeOut(200);
                    });
                }, 300);
            });
            $(inputAddress).focusout(function () {
                $(".autocomplete-items").fadeOut(200);
            });

            jQuery(document).ready(function ($) {
                cityInput = $("#selectCity");
                districtInput = $("#selectDistrict");
                wardInput = $("#selectWard");
                cityInput.select2({placeholder: "Chọn Tỉnh/Thành"});
                districtInput.select2({placeholder: "Chọn Quận/Huyện"});
                wardInput.select2({placeholder: "Chọn Phường/Xã", language: "vi"});

                $.getJSON("https://www.coolmate.me/json/treeVN.min.json", function (json) {
                    citiesData = window.groupBy(json, "city");
                    citiesDataFiltered = Object.keys(citiesData).sort((a, b) => a.localeCompare(b));
                    citiesDataFiltered = [
                        ...new Set([
                            "Hà Nội", "Hồ Chí Minh",
                            ...citiesDataFiltered
                        ])
                    ];
                    cityInput.select2({placeholder: "Chọn Tỉnh/Thành", data: citiesDataFiltered});
                    districtInput.select2({placeholder: "Chọn Quận/Huyện"}).empty();
                    userShipping = JSON.parse($("#user-shipping").val());
                    if (localStorage.getItem("nhanh_city")) {
                        cityInput.val(localStorage.getItem("nhanh_city")).trigger("change");
                    }
                });

                cityInput.change(function () {
                    districtsData = window.groupBy(citiesData[$(this).val()], "district");
                    $("input[name='nhanh_city']").val($(this).val());
                    $("input[name='nhanh_district']").val(null);
                    $("input[name='nhanh_ward']").val(null);
                    $('.covid-note').remove();
                    localStorage.setItem('nhanh_city', $(this).val());

                    const options = Object.keys(districtsData).sort((a, b) => a.localeCompare(b));
                    options.unshift("");
                    districtInput.select2("destroy").empty().select2({data: options, placeholder: "Chọn Quận/Huyện"});
                    if (localStorage.getItem("nhanh_district")) {
                        districtInput.val(localStorage.getItem("nhanh_district")).trigger("change");
                    }
                });

                districtInput.change(function () {
                    const ward = window.groupBy(districtsData[$(this).val()], "ward");
                    if ($(this).val() !== null) {
                        $("input[name='nhanh_district']").val($(this).val());
                        $("input[name='nhanh_ward']").val(null);
                        localStorage.setItem('nhanh_district', $(this).val());
                    }

                    const options = Object.keys(ward).sort((a, b) => a.localeCompare(b));
                    options.unshift("");
                    wardInput.select2("destroy").empty().select2({data: options, placeholder: "Chọn Phường/Xã"});
                    if (localStorage.getItem("nhanh_ward")) {
                        wardInput.val(localStorage.getItem("nhanh_ward")).trigger("change");
                    }
                });

                wardInput.change(function () {
                    if ($(this).val() !== null) {
                        $("input[name='nhanh_ward']").val($(this).val());
                        localStorage.setItem('nhanh_ward', $(this).val());
                    } else {
                        $("input[name='nhanh_ward']").val(null);
                        localStorage.removeItem('nhanh_ward');
                    }
                });
            });
        });
    </script>
    <script>
        // promotion add item

        document.addEventListener('DOMContentLoaded', function () {
            jQuery(document).ready(function ($) {

                $('a[href="#product-promotion"]').click(function () {
                    $('html, body').animate({
                        scrollTop: $("#product-promotion").offset().top
                    }, 500);
                });

                checkOutPromotionSelected();
                checkOutPromotionAddItem();

                function checkOutPromotionSelected() {
                    const checkout_promotion = $('.checkout-product-promotion');
                    if (checkout_promotion.length <= 0) return;

                    $('.checkout-product-promotion__option select').on('change', function (e) {
                        const $_this = $(this),
                            option_item = $_this.closest('.checkout-product-promotion__item'),
                            button_add = option_item.find('.checkout-product-promotion__add'),
                            option_index = $_this.attr('data-index'),
                            option_value = $_this.val(),
                            option_select = option_item.find('.checkout-product-promotion__options select'),
                            variants_data_json = option_item.attr('data-variants'),
                            variants_data = JSON.parse(variants_data_json);
                        // set mặc định các option
                        let data_selected = button_add.attr('data-option-selected');
                        if (data_selected == undefined) {
                            data_selected = [];
                            option_select.each(function (e) {
                                const s_index = $(this).attr('data-index');
                                data_selected[s_index] = {
                                    option: 'option' + (Number(s_index) + 1),
                                    value: ''
                                };
                            })
                        } else {
                            data_selected = JSON.parse(data_selected);
                        }
                        button_add.attr('data-option-selected', JSON.stringify(data_selected));

                        // lấy option đã được lựa chọn và lưu lại vào button
                        data_selected[option_index] = {
                            option: 'option' + (Number(option_index) + 1),
                            value: option_value
                        };
                        button_add.attr('data-option-selected', JSON.stringify(data_selected));

                        // Thêm id vào button
                        let variants_selected = variants_data.filter(v => {
                            let variant_check = true;
                            data_selected.map(value => {
                                if (v[value.option] != value.value) variant_check = false;
                            });
                            return variant_check;
                        });

                        if (variants_selected.length > 0) {
                            button_add.attr('data-variant', variants_selected[0].id);
                            $(this).siblings('.checkout-product-promotion__options').children('.text--error').remove();
                        } else {
                            button_add.attr('data-variant', '');
                        }
                    })
                }

                function checkOutPromotionAddItem() {
                    const product_promotion_button = $('.checkout-product-promotion__add');
                    if (product_promotion_button.length <= 0) return;

                    $(document).on('click', '.checkout-product-promotion__add', function (e) {
                        let product_id = $(this).attr('data-id'),
                            variant_id = $(this).attr('data-variant'),
                            options = {
                                size: '',
                                color: '',
                                id: variant_id
                            };
                        if (variant_id === "") {
                            e.preventDefault();
                            if ($(this).siblings('.text--error').length <= 0) {
                                $(this).siblings('.checkout-product-promotion__options').after('<span class="text--primary text--error">Vui lòng chọn thông số sản phẩm</span>');
                            }
                            return;
                        }
                        theme.AddItem({
                            product_id: product_id,
                            options: options,
                            quantity: 1,
                            reload: true
                        })
                    })
                }
            })
        });
    </script>
    <script>
        const lineItems = [];
                    product = {
                "id": "6151256fff171837ef7fa4c2",
                "name": "Áo Hoodie nam có mũ trùm Classic",
                "taxonomy": [],
                "currency": "VND",
                "unit_price": 389000,
                "unit_sale_price": 389000,
                "url": "https://www.coolmate.me//product/ao-hoodie-nam-co-mu-trum-classic",
                "product_image_url": "https://mcdn.coolmate.me/image/September2021/DSC07107.jpg"
            };
            lineItems.push({
                "product": product, "quantity": parseInt("1"),
                "subtotal": parseFloat("389000")
            });
                window.insider_object.basket = {
            "currency": "VND",
            "total": 389000,
            "vouchers": [
                
            ],
            "voucher_discount": 0,
            "shipping_cost": 0,
            "line_items": lineItems
        };
        window.insider_object.page = {
            "type": "Basket"
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            jQuery(document).ready(function ($) {
                $('.coolgift').change(function() {
                    theme.Loading.show();
                    $('#coolgift-form').submit();
                });
                $('.coolgift-variant').change(function() {
                    let selected = $("[name='coolgift_variant[]']").serializeArray().map(item => item.value).join(',');
                    if(selected.length === 0) {
                        $(this).prop('checked', true);
                        return false;
                    }
                    $('#coolgift-form input[name="selected"]').val(selected);
                    const form = $('#coolgift-form');
                    const data = form.serializeArray();
                    theme.Loading.show();
                    $.ajax({
                        url: form.attr('action'),
                        method: 'POST',
                        data,
                        success: function(res) {
                            const id = '';
                            const variant = res.cart.products.filter(item => item.id === id)[0];
                            const selector = $('#' + id + variant.options.id);
                            const total = $('.checkout__total').data('total');
                            const oldCoolgift = $('.checkout__coolgift').data('coolgift');
                            const newCoolgift = variant.quantity * 25000;

                            selector.find('.cart__variant-field span').text('x' + variant.quantity);
                            selector.find('.cart__prices span').text(theme.formatMoney(newCoolgift));
                            $('.checkout__coolgift').text('+' + theme.formatMoney(newCoolgift));
                            $('.checkout__total').text(theme.formatMoney(total - oldCoolgift + newCoolgift));
                        },
                        error: function(e) {
                            console.log(e);
                        },
                        complete: function() {
                            theme.Loading.hide();
                        }
                    });
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            jQuery(document).ready(function ($) {
                theme.miniCartItem();
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            jQuery(document).ready(function ($) {

                sportlightSearchShow();
                menuHeaderActive();

                function menuHeaderActive() {
                    $(document).on('click','[data-active-menu-tablet]',function(e){
                        $(this).toggleClass('is-active');
                        $('.site-header__menu-tablet').toggleClass('is-active');
                    })
                }


                function sportlightSearchShow(){
                    $(document).on('click','.site-header__search',function(e){
                        setTimeout(function(e){
                            const search_bar = $('.site-header__line-search');
                            search_bar.addClass('is-active');  
                            $('.site-header').addClass('is-white');
                        })
                    });

                    // $(document).on('click',function(e){
                    //     if(!$(e.target).parents('.site-header__line-search').hasClass('is-active')){
                    //         const search_bar = $('.site-header__line-search');
                    //         search_bar.removeClass('is-active');  
                    //     }
                    // });

                    $(document).on('click','.spotlight-search--close',function(e){
                        const search_bar = $('.site-header__line-search');
                        search_bar.removeClass('is-active');
                        $('.site-header').removeClass('is-white');
                    });

                    $(window).on('scroll',function(e){
                        const search_bar = $('.site-header__line-search');
                        search_bar.removeClass('is-active');
                      $('.site-header').removeClass('is-white');
                    });
                }

                function loadProductsTopbarSearch() {

                    const product_search = $('#topbar--search');
                    const next_page = 1;
                    const filter_values = product_search.val();
                    const API_URL = `${window.location.origin}/load-product?limit=5&page=${next_page}&sort=created_at&type=spotlight&keyword=${filter_values}`;
                    console.log(API_URL)
                    $('.spotlight--loading').addClass('is-loading');
                    $.ajax({
                        url: API_URL,
                        type: "GET",
                        cache: false,
                    }).done(function (res) {
                        if (res.success) {
                            // Append new items to list
                            if (res.html) {
                                $('.spotlight__search').html(res.html);
                                $('.spotlight__search').addClass('is-active');
                            } else {
                                $('.spotlight__search').html('<div class="grid__column">Không tìm thấy sản phẩm!</div>');
                                $('.spotlight__search').addClass('is-active');
                            }
                            $("img.lazyload").lazyload({
                                effect: "fadeIn",
                                data_attribute: "src",
                            });
                            $('.spotlight--loading').removeClass('is-loading');
                        }
                    }).fail(() => {
                        }
                    ).always(() => {
                        }
                    )
                }

                var typingTimer, doneTypingInterval = 500;
                $('#topbar--search').on('keypress keydown', function (e) {
                    if ($(this).val() && $(this).val().length >= 1) {
                        clearTimeout(typingTimer);
                        typingTimer = setTimeout(loadProductsTopbarSearch, doneTypingInterval);
                    } else {
                        $('.spotlight--loading').removeClass('is-loading');
                    }
                });

                $(document).on('click', '.spotlight-search--close', function (e) {
                    e.preventDefault();
                });

            });
        })
        function handleSubmitSearch(e) {
            $(e).submit();
            $('#topbar--search').val($('#topbar--search').val().replace(/[`+><\/\/]/g, ""));
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const buttonFooterClick = function(e) {
                $(document).on('click', '.site-footer__button', function(e) {
                    $(this).toggleClass('is-active')
                })
            }

            jQuery(document).ready(function($) {
                buttonFooterClick()
            });

        });

    </script>
    
<!-- Global site tag (gtag.js) - Google Analytics -->

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        jQuery("img.lazyload").lazyload({
            effect: "show",
            data_attribute: "src",
        });
    })
</script>

<script type="text/javascript">
    var gr_goal_params = {
        param_0: '',
        param_1: '',
        param_2: '',
        param_3: '',
        param_4: '',
        param_5: ''
    };

</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        jQuery(document).ready(function ($) {
            function setTime(time, item,parent) {
                const now = new Date().getTime();
                const distance = time - now;
                let ele_days = item.find('.countdown__days')
                let days = Math.floor(distance / (1000 * 60 * 60 * 24));
                let hours = ele_days.length ? Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)) : Math.floor(distance / (1000 * 60 * 60));
                // let hours = Math.floor(distance / (1000 * 60 * 60));
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);
                if (distance < 0) {
                    item.find('.countdown__days').text('00');
                    item.find('.countdown__hours').text('00');
                    item.find('.countdown__minutes').text('00');
                    item.find('.countdown__seconds').text('00');
                    const parentItem = item.parents('.flashsale__item');
                    parentItem.addClass('filter--disabled');
                    parentItem.find('.btn').html('Đã kết thúc');
                    parentItem.find('.btn').addClass('btn--disabled');
                    const parentSection = item.parents('.flashsale__style--two');
                    parentSection.find('.flashsale__item').addClass('filter--disabled');
                    parentSection.find('.btn').html('Đã kết thúc');
                    parentSection.find('.btn').addClass('btn--disabled');
                    item.parents('.section-flashsales').addClass('hidden');
                    if ($('.campaign__countdown').length > 0) {
                        item.parents('.campaign-hot').find('.grid').removeClass('filter--blur');
                        item.parents('.campaign__countdown').remove();
                    }
                    item.parents('.flashsale__countdown-content').addClass('is-hide');
                    if(parent) item.parents('.' + parent).hide();
                } else {
                    if (days <= 0) {
                        item.find('.countdown__days').parents('.countdown__item').hide();
                    }
                    if (days < 10)
                        item.find('.countdown__days').html('0' + days);
                    else
                        item.find('.countdown__days').html(days);
                    if (hours < 10)
                        item.find('.countdown__hours').html('0' + hours);
                    else
                        item.find('.countdown__hours').html(hours);
                    if (minutes < 10)
                        item.find('.countdown__minutes').html('0' + minutes);
                    else
                        item.find('.countdown__minutes').html(minutes);
                    if (seconds < 10)
                        item.find('.countdown__seconds').html('0' + seconds);
                    else
                        item.find('.countdown__seconds').html(seconds);
                }
                item.parents('.flashsale__countdown-content').addClass('is-show');
            }

            if ($(".flashsale__countdown").length) {
                $(".flashsale__countdown").each(function () {
                    const item = $(this);
                    const timeData = item.attr('data-date');
                    const parent = item.attr('data-parent');
                    const time = timeData.split(/[- :]/);
                    const countDownDate = new Date(time[0], time[1] - 1, time[2], time[3], time[4], time[5]).getTime();
                    setInterval(function () {
                        setTime(countDownDate, item,parent);
                    }, 1000);

                });
            }
            if (localStorage.getItem('cart_phone')) {
                theme.setCookie('cart_phone', localStorage.getItem('cart_phone'));
            }
        });


      // Start of LiveChat (www.livechatinc.com) code
      // delayLoad(function (){
      //   window.__lc = window.__lc || {};
      //   window.__lc.license = 12708357;
      //   ;(function (n, t, c) {
      //     function i(n) {
      //       return e._h ? e._h.apply(null, n) : e._q.push(n)
      //     }
      //
      //     var e = {
      //       _q: [], _h: null, _v: "2.0", on: function () {
      //         i(["on", c.call(arguments)])
      //       }, once: function () {
      //         i(["once", c.call(arguments)])
      //       }, off: function () {
      //         i(["off", c.call(arguments)])
      //       }, get: function () {
      //         if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
      //         return i(["get", c.call(arguments)])
      //       }, call: function () {
      //         i(["call", c.call(arguments)])
      //       }, init: function () {
      //         var n = t.createElement("script");
      //         n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
      //       }
      //     };
      //     !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
      //   }(window, document, [].slice))
      // },3000)
      // End of LiveChat (www.livechatinc.com) code
    })
</script>

<!-- Start of LiveChat (www.livechatinc.com) code -->




<!-- End of LiveChat code -->
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"NRJS-75e0f7d19b930a3802e","applicationID":"916304774","transactionName":"YlFUMkYFD0IHUhULWlsbdwVADQ5fSVIAEEE=","queueTime":0,"applicationTime":375,"atts":"ThZXRA4fHEw=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
