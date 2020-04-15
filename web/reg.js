function reg(){
    var user= $('#user').val();
    var psd=$('#psd').val();
    var psd2=$('#psd2').val();
   
    var r=document.getElementById("r");
    if(user==""||psd==""||psd2==""){
       r.innerHTML="fail";
       return false;
    }
    else if(psd!=psd2)
    {
        r.innerHTML="fail2";
        return false;
    }

    $.ajax({
        type: "POST",
        url:"reg.php",
        data:"user="+user+"&psd="+psd,
        success: function(msg){
            r.innerHTML=msg;
            if(msg=="s"){
                location.href="log.html";
            }
        },
        error: function(data){
            var r=document.getElementById("r");
            r.innerHTML="fail222";
        }
    });
}