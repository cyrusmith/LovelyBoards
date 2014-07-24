(function ($) {

    $.fn.interositeSlider = function () {
        return this.each(function () {
            var $this = $(this);
            var backBtn = $this.find('.back'),
                fwdbtn = $this.find('.fwd'),
                itemsContainer = $this.find('.items'),
                items = itemsContainer.children(),
                thisWidth = $this.width();

            items.css({
                float: 'left',
                width: thisWidth + 'px'
            });

            itemsContainer.css('width', (thisWidth * items.length) + 'px');

            var currentPos = 0;

            function moveTo(pos) {
                if (pos > items.length - 1) {
                    pos = 0;
                }
                else if (pos < 0) {
                    pos = items.length - 1;
                }
                currentPos = pos;
                itemsContainer.animate({left: (-currentPos * thisWidth) + 'px'});
            }

            backBtn.click(function (e) {

                moveTo(currentPos - 1);
                return false;
            });
            fwdbtn.click(function (e) {
                moveTo(currentPos + 1);
                return false;
            });

        });
    };

    $.fn.interositeToggleAndScroll = function () {
        return this.each(function () {
            var $opener = $(this),
                $dest = null;

            if ($opener[0].tagName == 'A') {
                $dest = $('#' + $opener.attr('href').substr(1));
            }
            else {
                $dest = $('#' + $opener.attr('rel'));
            }

            $opener.data('scrollDest', $dest);

            $dest.hide();

            $opener.click(function () {
                var dest = $(this).data('scrollDest');
                dest.slideDown();
                var pos = dest.offset();
                $('body').animate({scrollTop: pos.top + 'px'}, 500);
            });

        });
    };

    $.fn.interositeReadMore = function (isHideMore) {
        return this.each(function () {
            var $opener = $(this),
                $more = null;

            if ($opener[0].tagName == 'A') {
                $more = $('#' + $opener.attr('href').substr(1));
            }
            else {
                $more = $('#' + $opener.attr('rel'));
            }


            $opener.data('more', $more);

            if (isHideMore) {
                $more.hide();
            }

            $opener.click(function () {
                var dest = $(this).data('more');
                dest.slideDown();
                $(this).parent().hide();
                return false;
            });

        });
    };

    $.fn.interositePopup = function () {

        var $modalPane = null,
            currentPopup = null;

        function createPopup(content) {
            var $popup = $('<div />');
            $popup.addClass('is-popup');
            var $wrapper = $('<div />');
            var $contents = $('<div />');
            $wrapper.addClass('is-popup-wrapper');
            $contents.addClass('is-popup-content');
            $popup.append($wrapper);
            $wrapper.append($contents);
            $contents.html(content);
            var $close = $('<a href="javascript:void(0)"/>');
            $close.text('x');
            $close.addClass('close');
            $close.data('popup', $popup);
            $wrapper.append($close);
            $popup.css({
                'z-index': 2
            });
            $close.click(function () {
                hidePopup($(this).data('popup'));
            });
            $popup.click(function (e) {
                hidePopup(currentPopup);
            });
            $contents.click(function (e) {
                e.stopPropagation();
            });
            return $popup;
        }

        function showPopup($popup) {
            if ($modalPane == null) {
                $modalPane = $('<div />');
                $modalPane.addClass('is-popup-modal');
                $modalPane.css({
                    position: 'fixed',
                    top: 0,
                    left: 0,
                    right: 0,
                    bottom: 0,
                    'z-index': 1
                });
                $(document).on('click', '.is-popup-modal', function () {
                    hidePopup(currentPopup);
                });
            }
            $('body').append($modalPane);
            $popup.show();
            currentPopup = $popup;
        }

        function hidePopup($popup) {
            if ($popup) {
                $popup.hide();
            }
            $modalPane.remove();
            currentPopup = null;
        }

        return this.each(function () {

            var $opener = $(this),
                $dialogContent = $('#' + $opener.attr('href').substr(1));

            if ($dialogContent.length == 0) {
                return;
            }

            var content = $dialogContent.html();
            $dialogContent.remove();

            $opener.data('popup', createPopup(content));
            $('body').append($opener.data('popup'));

            $opener.click(function (e) {
                showPopup($(this).data('popup'));
                return false;
            });

        });
    }

    $.fn.interositeHorizontalPagination = function (action) {

        if (!action) {
            action = 'init';
        }

        return this.each(function () {
            var controller = {
                init: function () {
                    var $pages = $(this).children();
                    var pages = [];
                    $(this).data('pages', $pages);
                    $(this).data('pos', 0);
                    $pages.hide();
                    $pages.eq(0).show();
                },
                next: function () {
                    var pos = $(this).data('pos');
                    var $pages = $(this).data('pages');
                    if ($pages.length < 2 || pos + 1 >= $pages.length) {
                        return;
                    }

                    var prevPage = $pages.eq(pos),
                        nextPage = $pages.eq(pos + 1);

                    $(this).css('height', prevPage.height() + 'px');

                    nextPage.css('position', 'absolute');
                    prevPage.css('position', 'absolute');

                    nextPage.css('left', '3000px');
                    nextPage.show();

                    prevPage.animate({
                        left: '-3000px'
                    }, 500, 'swing', function () {
                        prevPage.css('left', '');
                        prevPage.css('position', '');
                        prevPage.hide();
                    });

                    nextPage.animate({
                        left: 0
                    }, 500, 'swing', $.proxy(function () {
                        nextPage.css('left', '');
                        nextPage.css('position', '');

                    }, this));

                    $(this).animate({
                            height: nextPage.height() + 'px'
                        },
                        500,
                        'swing',
                        $.proxy(function () {
                            $(this).css('height', '')
                        }, this)

                    )

                    $(this).data('pos', pos + 1)
                },
                prev: function () {
                    var pos = $(this).data('pos');
                    var $pages = $(this).data('pages');
                    if ($pages.length < 2 || pos - 1 < 0) {
                        return;
                    }

                    var prevPage = $pages.eq(pos),
                        nextPage = $pages.eq(pos - 1);

                    $(this).css('height', prevPage.height() + 'px');

                    nextPage.css('position', 'absolute');
                    prevPage.css('position', 'absolute');

                    nextPage.css('left', '-3000px');
                    nextPage.show();

                    prevPage.animate({
                        left: '3000px'
                    }, 500, 'swing', function () {
                        prevPage.css('left', '');
                        prevPage.css('position', '');
                        prevPage.hide();
                    });

                    nextPage.animate({
                        left: 0
                    }, 500, 'swing', $.proxy(function () {
                        nextPage.css('left', '');
                        nextPage.css('position', '');
                    }, this));

                    $(this).animate({
                            height: nextPage.height() + 'px'
                        },
                        500,
                        'swing',
                        $.proxy(function () {
                            $(this).css('height', '')
                        }, this)

                    )

                    $(this).data('pos', pos - 1)

                }
            };

            controller[action].call(this);
        });
    }

    $(function () {
        $('.testimonials .scroll').interositeSlider();
        $('.menu li a').interositePopup();
        $('a.cta').interositeToggleAndScroll();
        $('.getdiscount').interositeToggleAndScroll();
        $('a.more').interositeReadMore(true);


        $('.horizontalpages').interositeHorizontalPagination('init');

        $('#anketaPageNext').click(function (e) {
            $('.horizontalpages').interositeHorizontalPagination('next');
            return false;
        });

        $('#anketaPageBack').click(function (e) {
            $('.horizontalpages').interositeHorizontalPagination('prev');
            return false;
        });

    });


})
    (jQuery);