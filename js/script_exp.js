//-------------------------------------------------------------------------------------
        $(document).ready(function(){
          document.body.onload=function(){
              $('#notif-notif').load('https://www.englishjet.net/ajax/notify_number.php');
          };
        });
// -----------------------------------------------------------------------------------


$(document).ready(function(){       
        $('.exp').on('click', function(){  
            var id=$('#inputexp1a').val();
var id2=$('#inputexp1b').val();
              $('#tempel').load('https://www.englishjet.net/ajax/exp/write.php?code='+id+'&codea='+id2,function(data){
                  $('#showoff').html(data);
              });
        });
         $('.exp1').on('click', function(){  
            var id=$('#inputexp1').val();
              $('#tempel1').load('https://www.englishjet.net/ajax/exp/read.php?code1='+id,function(data){
                  $('#showoff1').html(data);
              });
        });
          $('.exp2').on('click', function(){  
            var id=$('#inputexp1c').val();
              $('#tempel1').load('https://www.englishjet.net/ajax/exp/delete.php?code2='+id,function(data){
                  $('#showoff2').html(data);
              });
        });
 });