
$('.btn').click(function() {
    var id = $(this).attr('data-id');
    $('#cat_' + id).addClass('catActive');
    var open = $('#cat_' + id);
    open.addClass('catActive');
    var counter = $(this).attr('data-counter');

    $.post(counter ,{}, function (data) {
        $("#counter_"+id).html(data);
    });


    $('.close').click(function(){
        open.removeClass('catActive');
    });
});


