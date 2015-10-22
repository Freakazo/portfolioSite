/**
 * Created by freakazo on 17/10/15.
 */


var showcaseIndex = 0;

var showcases = [{img: '/images/lawler.png', caption: 'Developed Lawler Financial Services website.', url: '', col: '#A396D7'},
    {img: '/images/von_nueman.png', caption: 'Created CPU simulator', url: '', col: '#7B7'}];

$.each(showcases, function(i, show) {
    //Ensure each image is fetched.
    var img = new Image();
    img.src=show.img;
});

function switchCaption() {
    showcaseIndex++;
    //Reset showcaseIndex if it is out of bounds.
    if(showcaseIndex < 0 || showcaseIndex >= showcases.length) {
        showcaseIndex = 0;
    }

    $('.showcase img').fadeTo('fast', 0.4, function() {
        $(this).attr('src', showcases[showcaseIndex].img);
        $(this).fadeTo('slow', 1);
    });

    $('.showcase p').fadeTo('fast', 0.1, function() {
        $(this).text(showcases[showcaseIndex].caption);
        $(this).fadeTo('slow', 1);
    });

    $('.showcase').css('background-color', showcases[showcaseIndex].col);
}

setInterval(switchCaption, 5000);