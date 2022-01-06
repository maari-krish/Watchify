$("#eye").click(function () {

    if ($("#pswd").attr("type") == "password")
    { 
        $("#pswd").attr("type", "text");
    } else
    {
        $("#pswd").attr("type", "password");
    }
});
// $(document).ready(function(){
//     $("#eye").click(function(){
//     var a=$(this).attr('src');
//           if (a=true) {
//           $(this).attr('src','Icon/Non Visible.png');
//           $("#pswd").attr('type','text');
//           }
//           else{
//               $("#pswd").attr('type','password');
//           }
//      $("#eye").click(function(){
//          var b=$(this).attr('src');
//          if (b=true) {
//              $(this).attr('src','Icon/visible.png');
//              $("#pswd").attr('type','password');
//          }
//          else{
//               $("#pswd").attr('type','text');
//          }
//          $("#eye").click(function(){
//              var c=$(this).attr('src');
//              if (c=true) {
//                  $(this).attr('src','Icon/Non Visible.png');
//              $("#pswd").attr('type','text');
//              }
//              else{
//                  $("#pswd").attr('type','password');
//              }
//              $("#eye").click(function(){
//                  var d=$(this).attr('src');
//                  if (d=true) {
//                      $(this).attr('src','Icon/visible.png');
//              $("#pswd").attr('type','password');
//                  }
//              })
//          })
//      })
//     });
//     });
    
    
    
    


$(document).ready(function(){
    $("#login").click(function(event){
    event.preventDefault();
   var email = document.getElementById('emailid').value;
   var password = document.getElementById('pswd').value;

   var info = {
       'email':email,
       'password':password,
   };
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
    // $("#eye").click(function () {

    //     if ($("#password").attr("type") == "password")
    //     { 
    //      $("#password").attr("type", "text");
    //     } else
    //     {
    //         $("#password").attr("type", "password");
    //     }
    // });

   

    if(email!='' && password!=''){
        $.ajax({
            type : 'POST',
            url : 'watchfylogin.php',
            data : info,
            success :function(infos){
                if(infos == "Logged In Successfully"){
                    window.location.href = "home.php";
                }
                else{
                $("#output").html(infos);
                }
            }
        })
        $(forms)[0].reset();
    }

});

});

