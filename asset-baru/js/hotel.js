$('#btn_cari_hotel').click(function() {
    submit_hotel();
});

function submit_hotel(){
    var hotel=$("#hotel_data").find('option:selected').val();
    var tanggal_checkin=$("#checkIn").val()
    var tanggal_checkout=$("#checkOut").val()
    if(hotel=="accommodation"){
        window.open('https://booking.hotelsafarilodge.com/tamansafaribogor/booking/property/?sfm_form_submitted=yes&checkIn='+tanggal_checkin.split(' ').join('+')+'&checkOut='+tanggal_checkout.split(' ').join('+'), '_blank');
    }
    if(hotel=="rsg"){
        var date_checkin=new Date(tanggal_checkin);
        var date_checkout=new Date(tanggal_checkout);
        var month=["01","02","03","04","05","06","07","08","09","10","11","12"];
        var checkin=month[date_checkin.getMonth()]+"%2f"+date_checkin.getDate()+"%2f"+date_checkin.getFullYear();
        var checkin_parsed=date_checkin.getFullYear()+"-"+month[date_checkin.getMonth()]+"-"+date_checkin.getDate();
        var checkout=month[date_checkout.getMonth()]+"%2f"+date_checkout.getDate()+"%2f"+date_checkout.getFullYear();
        var checkout_parsed=date_checkout.getFullYear()+"-"+month[date_checkout.getMonth()]+"-"+date_checkout.getDate();
        var url="https://reservation.smartbooking-asia.com/booking/portal.aspx?sfm_form_submitted=yes&ci="+checkin+"&sfm_ci_parsed="+checkin_parsed+"&co="+checkout+"&sfm_co_parsed="+checkout_parsed+"&hotelcd=HT18005315";
        window.open(url, '_blank');
    }
    if(hotel=="lodge"){
        window.open('https://booking.hotelsafarilodge.com/tamansafaribogor/booking/property/?sfm_form_submitted=yes&checkIn='+tanggal_checkin.split(' ').join('+')+'&checkOut='+tanggal_checkout.split(' ').join('+'), '_blank');
    }
    if(hotel=="baobab"){
        window.open('https://booking.baobabsafariresort.com/tamansafaribogor/booking/property/?sfm_form_submitted=yes&checkIn='+tanggal_checkin.split(' ').join('+')+'&checkOut='+tanggal_checkout.split(' ').join('+'), '_blank');        
    }
    if(hotel=="mara"){
        var url="https://www.marariversafarilodge.com/rates/room-rates/";
        var form=`
            <form id="form_mara_submit" method="post" action="`+url+`">
                <input type='hidden' name='search_date_from' value="`+tanggal_checkin+`" />
                <input type='hidden' name='search_date_to' value="`+tanggal_checkout+`" />
            </form>
        `;
        $("#form_mara").html(form);
        $("#form_mara_submit").submit();
    }
}
