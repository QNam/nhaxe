$(document).ready(function(){
    $('#myModalPic').on('hidden.bs.modal', function() {
        $('.box-picL #f-video').html('');
    });
});

function contact(){
    $('#btn_contact').hide();
    jQuery.ajax({
        type: "POST",
        url: baseUrl + '/site/contact',
        data: $('#contact-form').serialize(),
        dataType: "json",
        success: function(data){
            if(data.status==0){
                alert(data.error);
            }else{
                alert(data.msg);
            }
            $('#contact-form')[0].reset();
            $('#btn_contact').show();
        }
    });
}

function showPopupDetail(id){
    $('#myModalTour').modal('hide');
    $('#myModalND').modal('show');
    $('#loading_popup').fadeIn();
    jQuery.ajax({
        type: "GET",
        url: baseUrl + '/article/view',
        data: {id: id},
        dataType: "html",
        success: function(data){
            $('#article_content').html(data);
            $('#loading_popup').fadeOut(3000);

        }
    });
    addC();
}

function showPopupList(cid){
    $('#myModalTour').modal('show');
    $('#loading_popup_list').fadeIn();
    jQuery.ajax({
        type: "GET",
        url: baseUrl + '/article/list',
        data: {cid: cid},
        dataType: "html",
        success: function(data){
            $('#list_content').html(data);
            $('#loading_popup_list').fadeOut(3000);
        }
    });
}

function showPopupGallery(id){

    if($('#myModal').hasClass('in')==false){
        $('#myModalPic').modal('show');
    }

    $('#loading_popup_gl').fadeIn();
    jQuery.ajax({
        type: "GET",
        url: baseUrl + '/site/getGallery',
        data: {id: id},
        dataType: "json",
        success: function(data){

            if(data.next > 0){
                $('.gallery-button-next').removeClass('hide');
                $('.gallery-button-next').attr('href','javascript:showPopupGallery('+data.next+')');
            }else{
                $('.gallery-button-next').addClass('hide');
            }

            if(data.prev > 0){
                $('.gallery-button-prev').removeClass('hide');
                $('.gallery-button-prev').attr('href','javascript:showPopupGallery('+data.prev+')');
            }else{
                $('.gallery-button-prev').addClass('hide');
            }

            if(data.title!='' && data.title!=null) {
                $('#current_title').html(data.title);
                $('#current_title').show();
            }else {
                $('#current_title').hide();
            }

            $('#loading_popup_gl').fadeOut(2000);

            if(data.type=='video'){
                $('.box-picL #f-video').html(data.desc);
                $('.box-picL #f-video').removeClass('hide');
                $('.box-picL #f-image').addClass('hide');
            }else{
                $('#current_img').attr('src',data.large);
                $('#current_link').attr('href',data.origin);
                $('.box-picL #f-video').addClass('hide');
                $('.box-picL #f-image').removeClass('hide');
            }
        }
    });
    addC();
}

function bookRoom(){
    window.location.href = baseUrl+'/article/book.html';
}

function bookTour(){
    $('#myModalND').modal('hide');
    $.fn.fullpage.moveTo(9, 0);
}
