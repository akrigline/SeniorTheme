$(document).ready(function() {
    $('#fullPage').fullpage({
    	//Navigation
        menu: '#myMenu',
        anchors:['home', 'ab', 'ch', 'im', 'mp', 'pv', 'vy'],
        navigation: false,
        navigationPosition: 'right',
        slidesNavigation: true,

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: false,
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

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        onSlideLeave: function(anchorLink, index){
            var getValue = index-2;
            //Pausing the video
            $('.slide.active video').get(getValue).pause();
        },
        onLeave: function(index, nextIndex){
            var getValue = index-2;
            //Pausing the video
            $('.slide.active video').get(getValue).pause();
        },
        afterLoad: function(slideAnchor, index){
            var getValue = index-2;
            //playing the video
            if ( $('.slide.active video').css('display') === 'none' ) {

            } else {
                $('.slide.active video').get(getValue).play();
            }
        },
        afterSlideLoad: function(anchorLink, index){
            var getValue = index-2;
            //playing the video
            if ( $('.slide.active video').css('display') === 'none' ) {

            } else {
                $('.slide.active video').get(getValue).play();
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







