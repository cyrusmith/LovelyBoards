require.config({

    paths: {
        'jquery': '../bower_components/jquery/dist/jquery',
        'twitterbootstrap': '../bower_components/bootstrap/dist/js/bootstrap',
        'photoswipe': '../bower_components/photoswipe/dist/photoswipe',
        'photoswipeui': '../bower_components/photoswipe/dist/photoswipe-ui-default',
        'requireLib': '../bower_components/requirejs/require',
        'collagePlusCore': '../bower_components/collagePlus/jquery.collagePlus',
        'collagePlusCaption': '../bower_components/collagePlus/extras/jquery.collageCaption',
        'collagePlusWhitespace': '../bower_components/collagePlus/extras/jquery.removeWhitespace'
    },

    urlArgs: "bust=" + Date.now(),

    shim: {
        jquery: {
            exports: 'jQuery'
        },
        twitterbootstrap: ['jquery'],
        collagePlusCore: [
            'jquery'
        ],
        photoswipeui: ['photoswipe'],
        collagePlusCaption: ['collagePlusCore'],
        collagePlusWhitespace: ['collagePlusCore']
    },
    include: ['requireLib', 'main']
});

require(['bootstrap']);