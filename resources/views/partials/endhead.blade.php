    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="/js/bvtmaau.js"></script>
    <script type="text/javascript" src="/js/arrow16.js"></script>
    <script type="text/javascript" src="/js/waypoints.js"></script> 
    <script type="text/javascript" src="/js/tracking_ants.js"></script>

    <script>
     $(window).load(function() {
        $("#support").sticky({
            topSpacing: 15
        });
     });
     $(window).load(function() {
        $("#support").sticky({
            bottomSpacing: 605
        });
     });
    </script>

    <style>
    .float-ck {
        position:fixed;
        bottom:0px;
        z-index:9000
    }

    * html .float-ck {
        position:absolute;
        bottom:auto;
        top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)));
    }
    
    #float_content_left { border:1px solid #01AEF0 }
    #hide_float_left { 
        text-align:left;
        font-size:11px
    }
    #hide_float_left a {
        background:#01AEF0;
        padding:2px 4px;
        color:#FFF
    }
    </style>

    <script>
    $(document).ready(function() {
        $(".buttondk").click(function() {
            $('html, body').animate({
                scrollTop: $('#dangky').position().top + 0
            }, 'slow');
        });
    });
    </script> 
</body>
<!--end body -->

<script type="text/javascript">/*<![CDATA[*/
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
/*]]>*/
</script>

<script type="text/javascript">/*<![CDATA[*/
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
/*]]>*/
</script>

<script type='text/javascript'>
    var wpcf7 = {
    "apiSettings": {
        "root": "https:\/\/benhvienaau.vn\/wp-json\/",
        "namespace": "contact-form-7\/v1"
    },
    "recaptcha": {
        "messages": {
            "empty": "Please verify that you are not a robot."
        }
    },
    "cached": "1"
    };
</script>

<script type='text/javascript' src='/plugins/contact-form-7/includes/js/scriptsef15.js?ver=4.8'></script>

<script type='text/javascript'>
    var colorboxSettings = {
        "rel": "group",
        "maxWidth": "95%",
        "maxHeight": "95%",
        "opacity": "0.6",
        "current": "image {current} of {total}",
        "previous": "previous",
        "next": "next",
        "close": "close",
        "xhrError": "This content failed to load.",
        "imgError": "This image failed to load.",
        "slideshowStart": "start slideshow",
        "slideshowStop": "stop slideshow"
    };
    jQuery(function($) {
        $("a[href$=\'jpg\'],a[href$=\'jpeg\'],a[href$=\'png\'],a[href$=\'bmp\'],a[href$=\'gif\'],a[href$=\'JPG\'],a[href$=\'JPEG\'],a[href$=\'PNG\'],a[href$=\'BMP\'],a[href$=\'GIF\']")
        .colorbox(colorboxSettings);
    });;
</script>

<script type='text/javascript' src='/plugins/simple-colorbox/scripts/jquery.colorbox-min68b3.js?ver=1'></script>
<script type='text/javascript' src='/js/wp-embed.min.js'></script>
<script type="text/javascript">
    jQuery(document).ready(function($){});
</script>

<script>
    jQuery(".wpcf7-submit").click(function(event) {
        jQuery(document).ajaxComplete(function() {
            myclass = jQuery(".wpcf7-response-output").hasClass("wpcf7-validation-errors") ? "alert" : "succes";
            jQuery.colorbox({
                className: myclass,
                opacity: "0.05",
                width: "350px",
                height: "200px",
                html: jQuery(".wpcf7-response-output").html()
            });
            jQuery(".wpcf7-response-output").css("display", "none");
        });
    });
</script>

<style>
.alert, .succes {
    font-size:20px;
    font-weight:bold;
    line-height:1.3em
}
.alert #cboxLoadedContent, .succes #cboxLoadedContent {
    display:table-cell;
    vertical-align:middle;
    text-align:center
}
.alert {color:red}
.succes {color:green}
</style>
</html>