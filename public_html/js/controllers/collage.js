define(['jquery',
    'collagePlusCore',
    'collagePlusCaption',
    'collagePlusWhitespace'], function ($) {

    $(function () {
        function collage() {
            $('#collage').removeWhitespace().collagePlus(
                {
                    //'effect': 'effect-2',
                    'fadeSpeed': 200
                }
            );
        };

        var resizeTimer = null;
        $(window).bind('resize', function () {
            // hide all the images until we resize them
            // set the element you are scaling i.e. the first child nodes of ```.Collage``` to opacity 0
            $('#collage .wrapper').css("opacity", 0);
            // set a timer to re-apply the plugin
            if (resizeTimer) clearTimeout(resizeTimer);
            resizeTimer = setTimeout(collage, 200);
        });

        $('#collage').collageCaption();

        collage();
    });

});