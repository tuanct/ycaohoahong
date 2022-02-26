$(function () {
    /*xử lý nếu có sub menu level 3 thì add thêm class để hiển thị icon more*/
    $(".li-2").each(function () {
        if ($(this).find(".ul-3 li").length > 0) {
            $(this).addClass('hasChild');
        }
    });

    /*xử lý nếu có sub menu level 4 thì add thêm class để hiển thị icon more*/
    $(".li-3").each(function () {
        if ($(this).find(".ul-4 li").length > 0) {
            $(this).addClass('hasChild');
        }
    });

    if (typeof (IsHome) != 'undefined') {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 600) {
                $(".tools").removeClass('hidden');
            } else {
                $(".tools").addClass('hidden');
            }
        });
    } else {
        $(".tools").removeClass('hidden');
    }

    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $("#adv-stick").removeClass('hidden');
        } else {
            $("#adv-stick").addClass('hidden');
        }
    });



});
//setTimeout(UpdateHeightCategory, 100);
function UpdateHeightCategory() {
    $(".cat-home").each(function () {
        var currentHeight = 0;
        $(this).find("ul li").each(function () {
            if ($(this).height() > currentHeight) currentHeight = $(this).height();
        });
        $(this).find("ul li").height(currentHeight);
    });
}
$("#txtFind").on('keydown', function (e) {
    if (e.keyCode === 13 && e.type == "keydown" && $(this).val() != "") {
        window.location = "/tim-kiem.html?q=" + encodeURI($(this).val());
        return false;
    }
})
$("#button-search").click(function () {
    window.location = "/tim-kiem.html?q=" + encodeURI($("#txtFind").val());
    return false;
});