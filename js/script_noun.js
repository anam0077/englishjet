//-------------------------------------------------------------------------------------
        $(document).ready(function(){
          document.body.onload=function(){
              $('#notif-notif').load('https://www.englishjet.net/ajax/notify_number.php');
          };
        });
// -----------------------------------------------------------------------------------


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
                  if(d<22){
                  $('#uji').load('https://www.englishjet.net/ajax/insert.php?id='+id);
                  }
                   if(d>20)
                {
                    if(d==21){
                    $('#uji3').load('https://www.englishjet.net/ajax/memcounter3.php', function(data){
                        alert('score anda adalah ' + data);
                        $('#start').attr("hidden",false);
                    });
                    }
                
                }
              }
            
            },1000)
        
          }
         
     $('.start').on('click', function(){
         $('#start').attr("hidden",true);
          table=pointer_table + d;
          $(table).attr("hidden", false);
          fiveSecond();
     
     });
     
     function ajax(a,b){
            $('#uji1').load('https://www.englishjet.net/ajax/part3.php?c='+a+'&d='+b, function(data){
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
             $('#bahasa11').html(dataku.data11);
             $('#bahasa12').html(dataku.data12);
             $('#bahasa13').html(dataku.data13);
             $('#bahasa14').html(dataku.data14);
             $('#bahasa15').html(dataku.data15);
             $('#bahasa16').html(dataku.data16);
             $('#bahasa17').html(dataku.data17);
             $('#bahasa18').html(dataku.data18);
             $('#bahasa19').html(dataku.data19);
             $('#bahasa20').html(dataku.data20);
         })  
     }
     $('.part1').on('click', function(){
        ajax(1,'partb1');
        $('#start').attr("hidden",false);
     });
      $('.part2').on('click', function(){
        ajax(21,'partb2');
        $('#start').attr("hidden",false);
     });
      $('.part3').on('click', function(){
         
        ajax(41,'partb3');
        $('#start').attr("hidden",false);
     });
     $('.part4').on('click', function(){
         
        ajax(61,'partb4');
        $('#start').attr("hidden",false);
     });
     $('.part5').on('click', function(){
         
        ajax(81,'partb5');
        $('#start').attr("hidden",false);
     });
 });
 
