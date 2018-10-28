var isip = returnCitySN["cip"];
// alert(isip);
var num1 = parseInt($('#no').text());
$(document).ready(function (){
    $('#ip').text(isip);
    $.ajax({
        type: "get",
        url: "http://localhost:80/Clickip/num.php",
        success: function (data) {
            alert(data);
        }
    })
    // $('#yes').append('1');

})

$('body').click(function (){
    $.ajax({
        type: "post",
        url: "index.php",
        dataType: 'json',
        data: {ip: isip},
        success: function (msg) {
            $('#no').text(num1+=1);
            // console.log(data);
        },
        error:function (msg) {
            console.log(msg);
        }
    });
})
