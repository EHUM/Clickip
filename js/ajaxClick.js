var isip = returnCitySN["cip"];
// alert(isip);

$(document).ready(function (){
    $('#ip').text(isip);
})

$('body').click(function (){
    $.ajax({
        type: "post",
        url: "index.php",
        dataType: 'json',
        data: {ip: isip},
        success: function (msg) {
            var data = '';;
            if(msg != ''){
                data = eval("("+msg+")");
            }
            if(data.su == 'success'){
                alert('Done');
            }else{
                alert('错误');
            }
            console.log(data);
        },
        error:function (msg) {
            console.log(msg);
        }
    });
})
