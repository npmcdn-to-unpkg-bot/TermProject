$(function(){

    var grid = $('.grid').masonry({
        columnWidth: 200,
        itemSelector: '.grid-item',
        fitWidth: true,
        gutter: 10
        // initLayout: true
    });

    grid.masonry();

    grid.imagesLoaded().progress( function() {
        grid.masonry('layout');
    });
});