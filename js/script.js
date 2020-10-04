var cursor = true;
var speed = 350;

setInterval(() => {
   if(cursor) {
     document.getElementById('cursor').style.opacity = 0;
     cursor = false;
   }else {
     document.getElementById('cursor').style.opacity = 1;
     cursor = true;
   }
}, speed);

$(document).on('ready',function(){
    
})
$("html").on("keyup", function (e) {
    var handle="echobash@fatalkali:~$"
    if((e.which >=65 && e.which<=90)||(e.which >=48 && e.which<=57)||(e.which==13))
    {
        // alert(String.fromCharCode(e.which))
        if(e.which!=13)
        {
            $('#code_data').append(String.fromCharCode(e.which).toLowerCase())
        }else{
            $('.handle').append("<p>"+handle+"<p>")
                }
    }else{
        alert("Special Characters not permitted")
    }
})