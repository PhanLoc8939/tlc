const WindowHeight = window.innerHeight;

$(window).on("load scroll", function () {
    setTimeout(AniScroll, 50);
});

const AniScroll = () => {
    const AniItems = $(".ani");
    let _y = window.pageYOffset;
    let _delay = 0;
    let _posY = _y + WindowHeight * 0.9;

    $.each(AniItems, function (e) {
        if (!$(this).hasClass("none")) {
            if (!$(this).hasClass("act")) {
                if ($(this).offset().top < _posY && $(this).offset().top > _y) {
                    $(this).css("transition-delay", _delay + "s");
                    _delay += 0.1;
                    let _t = $(this);
                    let _a = setTimeout(function () {
                        _t.addClass("act");
                    }, _delay * 1000);
                } else if (
                    $(this).offset().top < _y &&
                    !$(this).hasClass("act")
                ) {
                    $(this).addClass("act");
                }
            }
        } else {
            $(this).addClass("act");
        }
    });
};
