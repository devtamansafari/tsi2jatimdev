
    $('#tab_tiket').hover(function() {
        $(this).css('cursor','pointer');
    });

    $('#tab_tiket').click(function() {
        $(this).addClass("active_tab");
        $(this).removeClass("inactive_tab");
        $("#tab_hotel").addClass("inactive_tab");
        $("#tab_hotel").removeClass("active_tab");

        $("#font_tab_hotel").addClass("font_tab_text_inactive");
        $("#font_tab_hotel").removeClass("font_tab_text_active");
        $("#font_tab_tiket").addClass("font_tab_text_active");
        $("#font_tab_tiket").removeClass("font_tab_text_inactive");


        $('#img_tab_tiket').attr("src",base_url+"asset/img/icon/icon_tab_tiket_active.svg");
        $('#img_tab_hotel').attr("src",base_url+"asset/img/icon/icon_tab_hotel_inactive.svg");


        $("#content_tab_hotel").addClass("display_none");
        $("#content_tab_tiket").removeClass("display_none");


    });

    $('#tab_hotel').hover(function() {
        $(this).css('cursor','pointer');
    });

    $('#tab_hotel').click(function() {
        $(this).addClass("active_tab");
        $(this).removeClass("inactive_tab");
        $("#tab_tiket").addClass("inactive_tab");
        $("#tab_tiket").removeClass("active_tab");

        $("#font_tab_hotel").addClass("font_tab_text_active");
        $("#font_tab_hotel").removeClass("font_tab_text_inactive");
        $("#font_tab_tiket").addClass("font_tab_text_inactive");
        $("#font_tab_tiket").removeClass("font_tab_text_active");


        $('#img_tab_tiket').attr("src",base_url+"asset/img/icon/icon_tab_tiket_inactive.svg");
        $('#img_tab_hotel').attr("src",base_url+"asset/img/icon/icon_tab_hotel_active.svg");

        $("#content_tab_tiket").addClass("display_none");
        $("#content_tab_hotel").removeClass("display_none");

    });