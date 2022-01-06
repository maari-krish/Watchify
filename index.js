$(document).ready(function(){
    $("#err1").click(function(event){

event.preventDefault();
var email= document.getElementById("email").value;

if(email ==""){
    $("#emailerr").css('display','inline');
} 
else
{
    $("#emailerr").css('display','none');
} 

var details = {
    'email': email,

};

if(email!=""){
    $.ajax({
        type : 'POST',
        url : 'index.php',
        data : details,
        success :function(info){
            console.log("hello");
            if(info == "signin"){
                window.location.href = "loginn.php";
            }
            else if(info == "signup"){
                window.location.href = "signingup.php";
            }
            else{
                $('#emailerr').html(info);
            }
        }
    })
     $("#err1")[0].reset();
}
});
});


// $('#index').click(function(e){
//     var email= document.getElementById('email').value;
//     var details = {
//         'email':email,
//     };
//         e.preventDefault()
//         if(email==''){
//             $('#emailerr').css('display','inline');
//         }else{
//             $('#emailerr').css('display','none');
// //         }
//         if(email!='' ){
//             $.ajax({
//                 type:'POST',
//                 url:'welcome.php',
//                 data:details,
//                 success:function(datas){
//                     if(datas == "signin"){
//                         window.location.href = "moviesin.html";
//                     }
//                     else if(datas == "signup"){
//                         window.location.href = "moviesup.html";
//                     }
//                     else{
//                         $('#msg').html(datas);
//                     }
//                 }
//             });
//             $(“#js”)[0].reset();
//         }
//     });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    