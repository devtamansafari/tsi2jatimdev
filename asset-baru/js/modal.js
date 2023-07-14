

function detail_news_modal(data_news){

    $("#modal_title_news").text(data_news.news_title);


    var html_creator=`
        <div class="font_gotham_light_12px">By `+data_news.editor_name+`</div>
        <div class="mb-2">
            <span class="font_gotham_light_12px">`+data_news.kategori_news_nama+` |</span>
            <span class="font_gotham_light_12px">`+data_news.news_publish_date+`</span>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid" src="`+base_url+`uploads/news/`+data_news.gambar+`">
            </div>
            <div class="col-sm-6">
            `+data_news.news_content+`
            </div>
        </div>
    `;




    $("#modal_body_news").html(html_creator);
}