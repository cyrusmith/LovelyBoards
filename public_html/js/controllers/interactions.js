define(['jquery',
    'jqplugins'], function ($) {

    $(function () {

        $('.testimonials .scroll').interositeSlider();
        $('a.cta').interositeToggleAndScroll();
        $('.getdiscount').interositeToggleAndScroll();
        $('.order-option').interositeToggleAndScroll();
        $('a.more').interositeReadMore(true);

        $('.horizontalpages').interositeHorizontalPagination('init');

        $('.horizontalpages').find('.anketa-page-next').click(function (e) {
            $(this).parents('.horizontalpages').interositeHorizontalPagination('next');
            return false;
        });

        $('.horizontalpages').find('.anketa-page-back').click(function (e) {
            $(this).parents('.horizontalpages').interositeHorizontalPagination('prev');
            return false;
        });

        $('form').interositeFormValidate();

        $('.order-option').click(function () {
            var val = $(this).attr('opt');

            $('input[name="tarif"][value="' + val + '"]').prop('checked', true);
        });

        $('.navbar-nav.menu a').click(function() {
            $(".navbar-collapse").collapse('hide');
        });

    });

});