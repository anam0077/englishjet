//-------------------------------------------------------------------------------------
          $(document).ready(function(){
            var xml;
            if(window.XMLHttpRequest){
                xml=new XMLHttpRequest();
            }else{}
            xml.onreadystatechange=function(){
                if(this.readyState==4 && this.status == 200){
                    document.getElementById("notif-notif").innerHTML=this.responseText;
                }
            };
            xml.open("GET","https://www.englishjet.net/ajax/notify_number.php",true);
            xml.send();
        }
        );
// -----------------------------------------------------------------------------------
$(document).ready(function(){
   $(document).on("click",".noti",function(){
       $('#here').load('https://www.englishjet.net/ajax/notify.php?');
   });
});
$(document).ready(function(){
   $(document).on("click",".cl",function(){
       $('#cl2').load('https://www.englishjet.net/ajax/cl.php?');
       $('#here').load('https://www.englishjet.net/ajax/notify.php');
   });
});