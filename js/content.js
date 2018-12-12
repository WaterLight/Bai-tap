jQuery(document).ready(function() {

    // inner variables
    var song;

    function initAudio(elem) {
        var url = elem.attr('audiourl');
        var title = elem.attr('name');
        var cover = elem.attr('cover');
        var artist = elem.attr('artist');
        

        $('.player .title').text(title);
        $('.player .artist').text(artist);
        $('.player .cover').css('background-image','url(image/' + cover+')');;

        song = new Audio('image/' + url);

        $('.playlist li').removeClass('active');
        elem.addClass('active');
    }

    // forward click
    $('.fwd').click(function (e) {
        e.preventDefault();

        stopAudio();

        var next = $('.playlist li.active').next();
        if (next.length == 0) {
            next = $('.playlist li:first-child');
        }
        initAudio(next);
        playAudio();
    });

    // rewind click
    $('.rew').click(function (e) {
        e.preventDefault();

        stopAudio();

        var prev = $('.playlist li.active').prev();
        if (prev.length == 0) {
            prev = $('.playlist li:last-child');
        }
        initAudio(prev);
        playAudio();
    });


    // playlist elements - click
    $('.playlist li').click(function () {
        stopAudio();
        initAudio($(this));
        playAudio();
    });

    // initialization - first element in playlist
    initAudio($('.playlist li:first-child'));


});
