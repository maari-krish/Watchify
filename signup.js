$("#eye").click(function () {

    if ($("#password").attr("type") == "password")
    { 
        $("#password").attr("type", "text");
    } else
    {
        $("#password").attr("type", "password");
    }
});


$(document).ready(function(){
    $("#signup").click(function(event){
    event.preventDefault();
   var name = document.getElementById('Name').value;
   var email = document.getElementById('emailid').value;
   var password = document.getElementById('password').value;
   var city = document.getElementById('city').value;


   if(name==''){
       $("#nameerr").css('display','inline');
    }
    else{
        $("#nameerr").css('display','none');
    }
    if(email==''){
        $("#emailerr").css('display','inline');
    }
    else{
        $("#emailerr").css('display','none');
    }
    if(password==''){ 
        $("#pswderr").css('display','inline');
    }
    else{
        $("#pswderr").css('display','none');
    }
    if(city==''){
        $("#cityerr").css('display','inline');
    }
    else{
        $("#cityerr").css('display','none');
    }
    var information = {
        'name':name,
        'email':email,
        'password':password,
        'city':city,
    };

    if(name!='' && email!=''&& password!=''&& city!=''){
        $.ajax({
            type : 'POST',
            url : 'sign.php',
            data : information,
            success :function(kissme){
                $('#output').html(kissme);
                setTimeout("window.location.href='loginn.php';",2000);
            }
        })
        $(forms)[0].reset();
    }

});

});

