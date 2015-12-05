$(document).ready(function(){
    $('.likes_link').click(function(){
        var id = $(this).attr('data-id');
        $.post("/likes/add/"+id, {}, function (data) {
            $("#likes_"+id).html(data);
        });

    });
});
/**
 * Created by sett on 05.12.15.
 */
