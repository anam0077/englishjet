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
$(function(){

    $('.check1').on('click',function(){
        
        $('#check2').prop("checked", false);
        $('#check3').prop("checked", false);
        $('#check4').prop("checked", false);
        // $('#coba').html($('input[name="check1"]:checked').val());
    });
    $('.check2').on('click',function(){
        
        $('#check1').prop("checked", false);
        $('#check3').prop("checked", false);
        $('#check4').prop("checked", false);
    });
    $('.check3').on('click',function(){
        
        $('#check1').prop("checked", false);
        $('#check2').prop("checked", false);
        $('#check4').prop("checked", false);
    });
    $('.check4').on('click',function(){
        
        $('#check1').prop("checked", false);
        $('#check2').prop("checked", false);
        $('#check3').prop("checked", false);
    });
});
let c=0;
$(document).ready(function(){
    
    // event ketika keyboard ditulis
    $('.click1').on('click',function(){
        c++;
        $('#id2').load('https://www.englishjet.net/ajax/inc.php?answer='+($('input[name="check1"]:checked').val()||$('input[name="check2"]:checked').val()||$('input[name="check3"]:checked').val()||$('input[name="check4"]:checked').val()));
        $('#check2').prop("checked", false);
        $('#check3').prop("checked", false);
        $('#check4').prop("checked", false);
        $('#check1').prop("checked", false);
        $('#msg').attr("hidden",true);
        $('#msg1').attr("hidden",false);
        if(c>20)
        {
            $('#msg3').attr("hidden",false);  
            $('#msg2').attr("hidden",true); 
            c=0;
        }
    });
});

	$(document).ready(function(){
	  $('[data-toggle="popover"]').popover();
 	});
 	
 $(document).ready(function(){
        var pointer_counter="#basic-addon";
        var pointer_table="#x";
        var d=1;
        var c=6; // counter
        var f='#a';
        var g='#type';
        function fiveSecond(){
        
          setInterval(function(){
              c--;
              pointer=pointer_counter + d;
              $(pointer).html(c);
              if(c===0)
              {
                  c=6;
                  e=d;
                  d++;
              
                  table=pointer_table + d;
                  $(table).attr("hidden", false);
                  table1=pointer_table + e;
                  table2=f + e;
                  table3=g + e;
                  $(table1).attr("hidden", true);
                 id=$(table3).val();
                  $(table2).html(id);
                  if(d<32){
                  $('#uji').load('https://www.englishjet.net/ajax/insert.php?id='+id);
                  }
                   if(d>30)
                {
                    if(d==31){
                    $('#uji3').load('https://www.englishjet.net/ajax/memcounter.php', function(data){
                        alert('score anda adalah ' + data);
                        $('#start').attr("hidden",false);
                    });
                    }               
                }
              }      
            },1000); 
          }
 
     $('.start').on('click', function(){
         $('#start').attr("hidden",true);
          table=pointer_table + d;
          $(table).attr("hidden", false);
          fiveSecond();
     });
     function ajax(a,b){
            $('#uji1').load('https://www.englishjet.net/ajax/part.php?c='+a+'&d='+b, function(data){
                dataku=JSON.parse(data);
             $('#bahasa1').html(dataku.data1);
             $('#bahasa2').html(dataku.data2);
             $('#bahasa3').html(dataku.data3);
             $('#bahasa4').html(dataku.data4);
             $('#bahasa5').html(dataku.data5);
             $('#bahasa6').html(dataku.data6);
             $('#bahasa7').html(dataku.data7);
             $('#bahasa8').html(dataku.data8);
             $('#bahasa9').html(dataku.data9);
             $('#bahasa10').html(dataku.data10);
         });
     }
     $('.part1').on('click', function(){
        ajax(1,'part1');
         $('#start').attr("hidden",false);
     });
      $('.part2').on('click', function(){
        ajax(11,'part2');
         $('#start').attr("hidden",false);
     });
      $('.part3').on('click', function(){
         
        ajax(21,'part3');
         $('#start').attr("hidden",false);
     });
     $('.part4').on('click', function(){
         
        ajax(31,'part4');
         $('#start').attr("hidden",false);
     });
     $('.part5').on('click', function(){
         
        ajax(41,'part5');
         $('#start').attr("hidden",false);
     });
     $('.part6').on('click', function(){
         
        ajax(51,'part6');
         $('#start').attr("hidden",false);
     });
     $('.part7').on('click', function(){
         
        ajax(61,'part7');
         $('#start').attr("hidden",false);
     });
     $('.part8').on('click', function(){
         
        ajax(71,'part8');
         $('#start').attr("hidden",false);
     });
     $('.part9').on('click', function(){
         
        ajax(81,'part9');
         $('#start').attr("hidden",false);
     });
     $('.part10').on('click', function(){
         
        ajax(91,'part10');
         $('#start').attr("hidden",false);
     });
     $('.part11').on('click', function(){
        ajax(101,'part11');
         $('#start').attr("hidden",false);
     });
      $('.part12').on('click', function(){
        ajax(111,'part12');
         $('#start').attr("hidden",false);
     });
     $('.part13').on('click', function(){
        ajax(121,'part13');
         $('#start').attr("hidden",false);
     });
 });
 
