define(['jquery',
    'photoswipe',
    'photoswipeui'], function ($,
                               PhotoSwipe,
                               PhotoSwipeUI_Default) {


    $(function () {

        function loadSize(item) {
            var img = new Image(),
                _item = item;
            img.onload = function () {
                _item.w = img.width;
                _item.h = img.height;
                _calculated++;
            };
            img.onerror = function () {
                console.log("onerror", _item.src);
                _item.w = 600;
                _item.h = 600;
                _calculated++;
            }
            img.src = _item.src;
        }

        var items = [],
            _calculated = 0;

        $('#collage > .wrapper a').each(function () {
            var $a = $(this);
            items.push({
                src: $a.attr('href')
            });
        });

        for (var i = 0; i < items.length; i++) {
            loadSize(items[i]);
        }

        $(document).on('click', '#collage > .wrapper a', function (e) {
            e.preventDefault();
            e.stopPropagation();
            if (_calculated >= items.length) {
                console.log(_calculated, items.length, items);
                var pos = $(this).parent().index();
                var gallery = new PhotoSwipe($('.pswp:eq(0)').get(0), PhotoSwipeUI_Default, items, {
                    index: pos
                });
                gallery.init();
            }
            return false;
        });

    });


});