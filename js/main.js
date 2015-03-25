$(document).ready(function() {
    $('#fullPage').fullpage({
        //Navigation
        menu: '#myMenu',
        navigation: false,
        slidesNavigation: true,

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        scrollBar: false,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        resize : false,
        verticalCentered: false,
        fixedElements: '#header',
        responsive: 0,

        onSlideLeave: function(){
            //Pausing the video
            if ( $('.playing').length ) {
                $('video.playing').get(0).pause();
                $('video.playing').removeClass('playing');
            }
        },
        afterLoad: function(){
            //playing the video
            if ( $('.section.active .slide.active video').css('display') === 'none' ) {
                //do nothing
            } else if ( $('.section.active').is('#welcome') ) {
                //still do nothing
            } else {
                $('.section.active .slide.active video').addClass('playing');
                $('.playing').get(0).play();
            }
        },
        onLeave: function(){
            //Pausing the video
            if ( $('.playing').length ) {
                $('video.playing').get(0).pause();
                $('video.playing').removeClass('playing');
            }
        },
        afterSlideLoad: function(){
            //playing the video
            if ( $('.section.active .slide.active video').css('display') === 'none' ) {
                //do nothing
            } else if ( $('.section.active').is('#welcome') ) {
                //still do nothing
            } else {
                $('.section.active .slide.active video').addClass('playing');
                $('.playing').get(0).play();
            }
        },

    });
});

function imgAspect (){
    $this = $(this);
    $image = $(this).find('img');

    var imageAspect = (2/3);
    var divAspect = $this.width() / $this.height();

    $image.removeClass('fillwidth fillheight');

    if (imageAspect <= divAspect) {
        $image.addClass('fillwidth');
    } else {
        $image.addClass('fillheight');
    }
}

function prepImages (){
    $('#welcome figure').each(imgAspect);
}

function headImgs (){
    $('.img-headshot').each(imgAspect);
}

$(document).ready(prepImages);
$(window).resize(prepImages);

$(document).ready(headImgs);
$(window).resize(headImgs);

$('#fullPage').imagesLoaded( function() {
    $('#fullPage').removeClass('loading');
});