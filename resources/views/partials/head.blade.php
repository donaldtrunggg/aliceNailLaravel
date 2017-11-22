<!DOCTYPE html>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<!-- Mirrored from by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2017 04:32:56 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <link rel="stylesheet" type="text/css" href="/minify/29274.default.include.ee467b.html" media="all" />
    <meta charset="utf-8">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>

    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor', {
            height: 500
        } );
    </script>

    <!-- font load -->
    <style type="text/css">
        @font-face {
            font-family: 'iCielBambola';
            font-style: normal;
            font-weight: 400;
            src: url(css/fonts/SVN-Ciao-Bella.otf) format('opentype');
        }
        /* diavlo */
        /* vietnamese */
        @font-face {
            font-family: 'Diavlo_LIGHT';
            font-style: normal;
            font-weight: 400;
            src: url(css/fonts/diavlo/Diavlo_LIGHT.otf) format('opentype');
        }
        @font-face {
            font-family: 'Diavlo_BOOK';
            font-style: normal;
            font-weight: 400;
            src: url(css/fonts/diavlo/Diavlo_BOOK.otf) format('opentype');
        }
        @font-face {
            font-family: 'Diavlo_MEDIUM';
            font-style: normal;
            font-weight: 200;
            src: url(css/fonts/diavlo/Diavlo_MEDIUM.otf) format('opentype');
        }

        /* Rouge Script */
        @font-face {
            font-family: 'Rouge Script';
            font-style: normal;
            font-weight: 400;
            src: local('Rouge Script'), local('RougeScript-Regular'), url(css/fonts/Rouge_Script.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
        }

        /* Open Sans */
        /* cyrillic-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(css/fonts/opensans/v14/K88pR3goAWT7BTt32Z01mxJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+0460-052F, U+20B4, U+2DE0-2DFF, U+A640-A69F;
        }
        /* cyrillic */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(css/fonts/opensans/v14/RjgO7rYTmqiVp7vzi-Q5URJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* greek-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(css/fonts/opensans/v14/LWCjsQkB6EMdfHrEVqA1KRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+1F00-1FFF;
        }
        /* greek */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(css/fonts/pensans/v14/xozscpT2726on7jbcb_pAhJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+0370-03FF;
        }
        /* vietnamese */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(css/fonts/opensans/v14/59ZRklaO5bWGqF5A9baEERJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(css/fonts/opensans/v14/u-WUoqrET9fUeobQW7jkRRJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'), url(css/fonts/opensans/v14/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
        }

        /* Oswald */
        /* cyrillic */
        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 300;
            src: local('Oswald Light'), local('Oswald-Light'), url(css/fonts/oswald/v14/WDQRONh0ieLkzMd4njMkJBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* vietnamese */
        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 300;
            src: local('Oswald Light'), local('Oswald-Light'), url(css/fonts/oswald/v14/qlwg-kjAsZDGqOniRm96VBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 300;
            src: local('Oswald Light'), local('Oswald-Light'), url(css/fonts/oswald/v14/l1cOQ90roY9yC7voEhngDBJtnKITppOI_IvcXXDNrsc.woff2) format('woff2');
            unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 300;
            src: local('Oswald Light'), local('Oswald-Light'), url(css/fonts/oswald/v14/HqHm7BVC_nzzTui2lzQTDVtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
        }
        /* cyrillic */
        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 400;
            src: local('Oswald Regular'), local('Oswald-Regular'), url(css/fonts/oswald/v14/DgBpgaYycijFA8v2hNt7MfesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* vietnamese */
        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 400;
            src: local('Oswald Regular'), local('Oswald-Regular'), url(css/fonts/oswald/v14/peRd8sj511qE2lHtK-QfcPesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+0102-0103, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 400;
            src: local('Oswald Regular'), local('Oswald-Regular'), url(css/fonts/oswald/v14/yg0glPPxXUISnKUejCX4qfesZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
            unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
            font-family: 'Oswald';
            font-style: normal;
            font-weight: 400;
            src: local('Oswald Regular'), local('Oswald-Regular'), url(css/fonts/oswald/v14/pEobIV_lL25TKBpqVI_a2w.woff2) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
        }
    </style>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/stylef2b5.css" rel="stylesheet">
    <link href="/stylenew.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> <![endif]-->


    <title>Alice Nails &amp; Spa - Đẳng Cấp 5* - Uy Tín - Sang Trọng</title>
    <meta name="description" content=""/>
    <meta name="keywords" content="Alice Nails &amp; Spa - Đẳng Cấp 5* - Uy Tín - Sang Trọng"/>
    <link rel="canonical" href="" />
    <link rel="next" href="" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Alice Nail &amp; Spa" />
    <meta property="og:description" content="Alice Nails &amp; Spa - Đẳng Cấp 5* - Uy Tín - Sang Trọng" />
    <meta property="og:url" content="https://alice-nails-spa.herokuapp.com/" />
    <meta property="og:site_name" content="Alice Nail &amp; Spa" />
    <meta property="fb:admins" content="100009766205653" />
    <meta property="og:image" content="https://alice-nails-spa.herokuapp.com/images/header/logofull.jpg" />
    <!-- <meta name="generator" content="" />
    <meta property="fb:app_id" content="" />
    <meta property="article:author" content="" /> -->

    <script type='application/ld+json'>
    	{
        "@context": "http:\/\/schema.org",
        "@type": "WebSite",
        "@id": "#website",
        "url": "https:\/\/alicebeautyandspa.vn\/",
        "name": "",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https:\/\/alicebeautyandspa.vn\/?s={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>

    <link rel='dns-prefetch' href='http://s.w.org/' />

    <script type="text/javascript">/*<![CDATA[*/
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/benhvienaau.vn\/wp-includes\/js\/wp-emoji-release.min.js"
            }
        };
        ! function(a, b, c) {
            function d(a) {
                var b, c, d, e, f = String.fromCharCode;
                if (!k || !k.fillText) return !1;
                switch (k.clearRect(0, 0, j.width, j.height), k.textBaseline = "top", k.font = "600 32px Arial", a) {
                    case "flag":
                        return k.fillText(f(55356, 56826, 55356, 56819), 0, 0), !(j.toDataURL().length < 3e3) && (k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57331, 65039, 8205, 55356, 57096), 0, 0), b = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55356, 57331, 55356, 57096), 0, 0), c = j.toDataURL(), b !== c);
                    case "emoji4":
                        return k.fillText(f(55357, 56425, 55356, 57341, 8205, 55357, 56507), 0, 0), d = j.toDataURL(), k.clearRect(0, 0, j.width, j.height), k.fillText(f(55357, 56425, 55356, 57341, 55357, 56507), 0, 0), e = j.toDataURL(), d !== e
                }
                return !1
            }

            function e(a) {
                var c = b.createElement("script");
                c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
            }

            var f, g, h, i, j = b.createElement("canvas"),
                k = j.getContext && j.getContext("2d");
            for (i = Array("flag", "emoji4"), c.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
            c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
                c.DOMReady = !0
            }, c.supports.everything || (g = function() {
                c.readyCallback()
            }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
                "complete" === b.readyState && c.readyCallback()
            })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
        }(window, document, window._wpemojiSettings);
        /*]]>*/
    </script>

    <style type="text/css">
        img.wp-smiley, img.emoji {
            display:inline !important;
            border:none !important;
            box-shadow:none !important;
            height:1em !important;
            width:1em !important;
            margin:0.07em !important;
            vertical-align:-0.1em !important;
            background:none !important;
            padding:0 !important
        }
    </style>

    <link rel='stylesheet' id='contact-form-7-css'  href='/plugins/contact-form-7/includes/css/stylesef15.css' type='text/css' media='all' />
    <link rel='stylesheet' id='prefix-style-css'  href='/plugins/new-recent-posts-select-categories-by-thao-marky/css/pluginstyle66f2.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'  href='/plugins/revslider/public/assets/css/settings4ee1.css' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='/css/login.css' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        .tp-caption a {
            color:#ff7302;
            text-shadow:none;
            -webkit-transition:all 0.2s ease-out;
            -moz-transition:all 0.2s ease-out;
            -o-transition:all 0.2s ease-out;
            -ms-transition:all 0.2s ease-out
        }
        .tp-caption a:hover {
            color:#ffa902
        }
    </style>

    <link rel='stylesheet' id='colorbox-css'  href='/plugins/simple-colorbox/themes/theme1/colorbox66f2.css' type='text/css' media='screen' />
    <link rel='stylesheet' id='sliderpro-lite-plugin-style-css'  href='/plugins/slider-pro-lite/public/assets/css/slider-pro.min62ea.css' type='text/css' media='all' />

    <script type='text/javascript' src='/js/jquery-3.2.1.min.js'></script>
    <script type='text/javascript' src='/plugins/itro-popup/scripts/itro-scripts66f2.js'></script>
    <script type='text/javascript' src='/plugins/revslider/public/assets/js/jquery.themepunch.tools.min4ee1.js'></script>
    <script type='text/javascript' src='/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min4ee1.js'></script>
    <script type='text/javascript' src='/js/jquery.vticker.min.js'></script>

    <link rel='https://api.w.org/' href='wp-json/index.html' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="/xml/wlwmanifest.xml" />

    <style type="text/css" media="screen">
        .g {
            margin:0px;
            padding:0px;
            overflow:hidden;
            line-height:1;
            zoom:1
        }
        .g img {
            height:auto
        }
        .g-col {
            position:relative;
            float:left
        }
        .g-col:first-child {margin-left:0}
        .g-col:last-child {margin-right:0}

        @media only screen and (max-width: 480px) {
            .g-col,.g-dyn,.g-single {
                width:100%;margin-left:0;margin-right:0
            }
        }
    </style>
</head>

<!-- Facebook chat content -->
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<style>
    #cfacebook {
        position:fixed;
        bottom:0px;
        right:135px;
        z-index:999999999999999;
        width:250px;
        height:auto;
        box-shadow:6px 6px 6px 10px rgba(0,0,0,0.2);
        border-top-left-radius:5px;
        border-top-right-radius:5px;
        overflow:hidden;
    }
    #cfacebook .fchat {
        float:left;
        width:100%;
        height:270px;
        overflow:hidden;
        display:none;
        background-color:#fff;
    }
    #cfacebook .fchat .fb-page {
        margin-top:-130px;
        float:left;
    }
    #cfacebook a.chat_fb {
        float:left;
        padding:0 25px;
        width:250px;
        color:#fff;
        text-decoration:none;
        height:30px;
        line-height:30px;
        text-shadow:0 1px 0 rgba(0,0,0,0.1);
        background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);
        background-repeat:repeat-x;
        background-size:auto;
        background-position:0 0;
        background-color:#3a5795;
        border:0;
        border-bottom:1px solid #133783;
        z-index:9999999;
        margin-right:12px;
        font-size:15px;
    }
    #cfacebook a.chat_fb:hover {
        color:yellow;
        text-decoration:none;
    }
</style>

<script>
    jQuery(document).ready(function() {
        jQuery(".chat_fb").click(function() {
            jQuery('.fchat').toggle('slow');
        });
    });
</script>

<div id="cfacebook">
    <a href="javascript:;" class="chat_fb" onclick="return:false;">
        <i class="fa fa-facebook-square"></i> Liên hệ với chúng tôi</a>
    <div class="fchat">
        <div class="fb-page" data-tabs="messages"
             data-href="https://www.facebook.com/alicenailsspaTK28.6/" data-width="250" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false">
        </div>
    </div>
</div>
<!-- END Facebook chat content -->

<body>

