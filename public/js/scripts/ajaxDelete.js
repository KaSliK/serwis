$(document).ready(function(){
    var path = window.location.pathname;
    $(".remove").click(function(){
        rowID = $(this).attr('id');
        $.ajax({
            url: path + '/' + rowID,
            type: 'DELETE',
            cache: false,
            data: {
                "_token": tokenCSRF,
            },
            success:function(data){
                if(confirm('Jesteś pewny?'))
                    $("#row-"+rowID).remove()
            }
        });

    });
});
