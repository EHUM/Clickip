var isip = returnCitySN["cip"];
// alert(isip);
var num1 = parseInt($('#no').text());
$(document).ready(function (){
    $('#ip').text(isip);
    $.ajax({
        type: "GET",
        url: "num.php",
        beforeSend: LoadFunction,
        error: erryFunction,
        success: succFunction
    })
    // $('#yes').append('1');
    function LoadFunction() {
        $('#yes').html('加载中...');
    }
    function erryFunction() {
        alert('error');
    }
    function succFunction(tt) {
        tt = tt.replace(/\"/g,"");
        $('#yes').html(" "+tt);
        // alert(tt);
    }
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
