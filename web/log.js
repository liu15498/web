function log(){
    var user= $('#user').val();
    var psd=$('#psd').val();
    console.log(user);
    var r=document.getElementById("r");
    if(user==""||psd==""){
       r.innerHTML="fail";
       return false;
    }

    $.ajax({
        type: "POST",
        url:"log.php",
        data:"user="+user+"&psd="+psd,
        success: function(msg){
            r.innerHTML=msg;
            if(msg=="s"){
                r.innerHTML="welcome";
            }
        },
        error: function(data){
            var r=document.getElementById("r");
            r.innerHTML="fail222";
        }
    });
}