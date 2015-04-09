if (document.getElementById('home')) {

    /* 
    Image Panning Effect
    Code modified from malihu.gr
    http://manos.malihu.gr/jquery-image-panning/
    */

    function imageScroll() {
        //$outer_container=$("#intro");
        $imagePan_panning=$("#intro .panning");
        $imagePan=$("#intro");
        $imagePan_container=$("#intro .imagePanner");
        $pseudoImage=$('.welcome');
     
        //$imagePan_panning.css("margin-top",($imagePan.height()-$imagePan_panning.height())/2+"px");
        containerWidth=$imagePan.width();
        containerHeight=$imagePan.height();
        totalContentW=$imagePan_panning.width();
        totalContentH=$imagePan_panning.height();
        $imagePan_container.css("width",totalContentW).css("height",totalContentH).css('left',-((totalContentW-containerWidth)/2.9));
     
        function MouseMove(e){
            var mouseCoordsX=(e.pageX - $imagePan.offset().left);
            var mouseCoordsY=(e.pageY - $imagePan.offset().top);
            var mousePercentX=mouseCoordsX/containerWidth;
            var mousePercentY=mouseCoordsY/containerHeight;
            var destX=-(((totalContentW-(containerWidth))-containerWidth)*(mousePercentX));
            var destY=-(((totalContentH-(containerHeight))-containerHeight)*(mousePercentY));
            var thePosA=mouseCoordsX-destX;
            var thePosB=destX-mouseCoordsX;
            var thePosC=mouseCoordsY-destY;
            var thePosD=destY-mouseCoordsY;
            var marginL=$imagePan_panning.css("marginLeft").replace("px", "");
            var marginT=$imagePan_panning.css("marginTop").replace("px", "");
            var animSpeed=1500; //ease amount
            var easeType="easeOutCubic";
            if(mouseCoordsX>destX || mouseCoordsY>destY){
                $imagePan_container.stop().animate({left: -thePosA-marginL, top: -thePosC-marginT}, animSpeed,easeType); //with easing
            } else if(mouseCoordsX<destX || mouseCoordsY<destY){
                $imagePan_container.stop().animate({left: thePosB-marginL, top: thePosD-marginT}, animSpeed,easeType); //with easing
            } else {
                $imagePan_container.stop();
            }
        }

        //$imagePan_panning.css("margin-left",($imagePan.width()-$imagePan_panning.width())/2).css("margin-top",($imagePan.height()-$imagePan_panning.height())/2);
    
        $pseudoImage.bind("mousemove", function(event){
            MouseMove(event);
        });

    };

    $(window).load(imageScroll);



    // Reset ScrollSpy & imageScroll on Resize
    $(window).resize(
        function () {
            var $spy = $(this).scrollspy('refresh');
            $pseudoImage.unbind("mousemove");
        },
        imageScroll
    );

    $(document).ready( function() {
        //Initialize Parllax
        $('#scene').parallax({
            relativeInput: true,
            clipRelativeInput: true,
            limitY:0
        });

        //Initialize Sticky.js
        $(".top-nav").sticky({
            topSpacing:0,
            getWidthFrom:'#intro',
            responsiveWidth:true
        });

        // Initialize LocalScroll
        $('.top-nav').localScroll({
            duration:500,
            hash:true,
            offset: -65
        });

        //Initialize Morphext
        $(".scrollThrough h3").Morphext({
            animation: "flipInX",
            separator: ",",
            speed: 7500
        });
    });

    /* Make parallax stop once sticky takes effect */
    $('.top-nav').on('sticky-start', function(){
        $('#scene').parallax('disable');
    });
    $('.top-nav').on('sticky-end', function(){
        $('#scene').parallax('enable');
    });

    $('body').imagesLoaded( function() {
        $('body').removeClass('loading');
    });
};


/* 
Set up iFrame on Web Portfolio Pages 
*/
var iframeError;

//Start the iFrame countdown after telling it where to load
function change() {
    var url = $('.viewport').attr('data-url');
    console.log(url);
    $('#web-preview').attr('src', url);
    iframeError = setTimeout('error()', 10000);
}

//What to do if the iframe doesn't load within 10 seconds
function error() {
    $('#web-preview').remove();
    $('.viewport').removeClass('loading');
    $('#web-preview-img-lg').removeClass('sr-only');
}

//Initialize on document ready
$(document).ready(change);

//Stop the countdown when the iframe loads
$('#web-preview').load( function () {
    $('.viewport').removeClass('loading');
    clearTimeout(iframeError);
});

/*
Ask for Device Width
and Iframe width
Divide Device by iframe
apply decimal to transform
*/

function iframeWidth() {
    $device = $('.device');
    $iframe = $('.viewport iframe');

    var deviceWidth = $device.width();
    var frameWidth = $iframe.width();
    var scale = deviceWidth / frameWidth;

    $iframe.css({
        "// zoom": scale,
        "-moz-transform": "scale(" + scale + ")",
        "-o-transform": "scale(" + scale + ")",
        "-webkit-transform": "scale(" + scale + ")",
    });
};

$(document).ready( iframeWidth );
$(window).resize( iframeWidth );

$('#iphone-toggle').click( function(){
    $('.btn-device.active').removeClass('active');
    $(this).addClass('active');

    if ( $device.hasClass('device-desktop') ) {
        $device.removeClass('device-desktop');
        $device.addClass('device-phone');
        iframeWidth();

    } else if ( $device.hasClass('device-tablet') ) {
        $device.removeClass('device-tablet');
        $device.addClass('device-phone');
        iframeWidth();

    }
});

$('#ipad-toggle').click( function(){
    $('.btn-device.active').removeClass('active');
    $(this).addClass('active');
    
    if ( $device.hasClass('device-desktop') ) {
        $device.removeClass('device-desktop');
        $device.addClass('device-tablet');
        iframeWidth();

    } else if ( $device.hasClass('device-phone') ) {
        $device.removeClass('device-phone');
        $device.addClass('device-tablet');
        iframeWidth();

    }
});

$('#mbp-toggle').click( function(){
    $('.btn-device.active').removeClass('active');
    $(this).addClass('active');
    
    if ( $device.hasClass('device-tablet') ) {
        $device.removeClass('device-tablet');
        $device.addClass('device-desktop');
        iframeWidth();

    } else if ( $device.hasClass('device-phone') ) {
        $device.removeClass('device-phone');
        $device.addClass('device-desktop');
        iframeWidth();

    }
});
