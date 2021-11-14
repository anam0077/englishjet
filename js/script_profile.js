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
    $('[data-toggle="dropdown"]').dropdown();
});


$(document).ready(function(){
    $('#keyword').on('keyup',function(){$('#showfriends').load('https://www.englishjet.net/ajax/showfriends.php?keyword=' + $('#keyword').val());
    });
});

$(document).ready(function(){
    $(document).on("click","#frnd",function(){$('#friend_rcv').load('https://www.englishjet.net/ajax/friend_rcv.php?')});
});


$(document).ready ( function () {
     var b;
     var c;
     var d;
     var e;
     var f;
     var g;
    $(document).on ("click", ".contoh", function () {
        b=$(this).val();
        $(this).html('Request is sent');
        $(this).attr("disabled",true);
        c='#t'+b;
        e='#ct'+b;
        f='#cr'+b;
        d=$(e).val();
        g=$(f).val();
        $(c).load('https://www.englishjet.net/ajax/friend_req.php?keyword='+d+'&keyword2='+g);
    });
});
$(document).ready(function(){
     var value;
    $(document).on("click",".accept",function(){
        value=$(this).val();
        useradd='#x'+value;
        senderadd='#y'+value;
        username=$(useradd).val();
        sentpos=$(senderadd).val();
        desadd='#des'+value;
        $(desadd).load('https://www.englishjet.net/ajax/save_erase.php?key='+username+'&number='+value+'&sentpos='+sentpos);
        //-----------
         $(document).ready(function(){
            var xml;
            if(window.XMLHttpRequest){
                xml=new XMLHttpRequest();
            }else{}
            xml.onreadystatechange=function(){
                if(this.readyState==4 && this.status == 200){
                    document.getElementById("friend_rcv").innerHTML=this.responseText;
                }
            };
            xml.open("GET","https://www.englishjet.net/ajax/friend_rcv.php",true);
            xml.send();
           }
        );
        //--------------
        $('#friend-list2').attr("hidden",true);
        $('.accept').attr("hidden",true);
        $('.ignore').attr("hidden",true);
        $(document).ready(function(){
            var xml;
            if(window.XMLHttpRequest){
                xml=new XMLHttpRequest();
            }else{}
            xml.onreadystatechange=function(){
                if(this.readyState==4 && this.status == 200){
                    document.getElementById("friend-list").innerHTML=this.responseText;
                }
            };
            xml.open("GET","https://www.englishjet.net/ajax/friend_list.php",true);
            xml.send();
           }
        );
    });
    
});

$(document).ready(function(){
     var value;
    $(document).on("click",".ignore",function(){
        value=$(this).val();
        useradd='#x'+value;
        senderadd='#y'+value;
        username=$(useradd).val();
        sentpos=$(senderadd).val();
        desadd='#des'+value;
        $(desadd).load('https://www.englishjet.net/ajax/ignore.php?key='+username+'&number='+value+'&sentpos='+sentpos);
        $(document).ready(function(){
            var xml;
            if(window.XMLHttpRequest){
                xml=new XMLHttpRequest();
            }else{}
            xml.onreadystatechange=function(){
                if(this.readyState==4 && this.status == 200){
                    document.getElementById("friend_rcv").innerHTML=this.responseText;
                }
            };
            xml.open("GET","https://www.englishjet.net/ajax/friend_rcv.php",true);
            xml.send();
           }
        );
        $('#friend-list2').attr("hidden",true);
        $('.accept').attr("hidden",true);
        $('.ignore').attr("hidden",true);
        //$('#friend-list').load('https://www.englishjet.net/ajax/friend_list.php');
    });
    
});

$(document).on("click",".gmb-3",function(){ 
      var isi=$(this).attr("src");
      $('#gmb-insrt').attr('src',isi);
});
