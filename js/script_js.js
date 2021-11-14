//-------------------------------------------------------------------------------------
        // $(document).ready(function(){
        //   document.body.onload=function(){
        //       $('#notif-notif').load('https://www.englishjet.net/ajax/notify_number.php');
        //   };
        // });
        
        //   $(document).ready(function(){
        //     var xml;
        //     if(window.XMLHttpRequest){
        //         xml=new XMLHttpRequest();
        //     }else{}
        //     xml.onreadystatechange=function(){
        //         if(this.readyState==4 && this.status == 200){
        //             document.getElementById("notif-notif").innerHTML=this.responseText;
        //         }
        //     };
        //     xml.open("GET","https://www.englishjet.net/ajax/notify_number.php",true);
        //     xml.send();
        // }
        // );
// -----------------------------------------------------------------------------------

$(document).ready(function(){

    $('.tombolTambahData').on('click',function(){
        $('#formModalLabel').html('Tambah Data Vocab');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        });
    
     $('.ubah').click(function(){
        $('#formModalLabel').html('Ubah Data Vocab');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action','http://www.englishjet.net/vocabs/ubah');
        });

    // $('.tampilModalUbah').on('click', function(){
    //     $('#formModalLabel').html('Ubah Data Vocab');
    //     $('.modal-footer button[type=submit]').html('Ubah Data');
    //     $('.modal-body form').attr('action','http://www.englishjet.net/vocabs/ubah');

    //     // const id=$('#id').data('id');     // mengabil data id 
    //     const id=10;

    //     $.ajax({
    //         url: 'http://www.english.jet/vocabs/getubah',
    //         data:{id:id},
    //         method: 'post',
    //         dataType:'json',
    //         success: function(data){
    //                 $('#english').val(data.english);
    //                 $('#bahasa').val(data.bahasa);
    //                 $('#type').val(data.type);
    //                 $('#id').val(data.id);
    //         }
    //     });

    // });

});

//  function coba(){
//         $('#formModalLabel').html('Ubah Data Vocab');
//         $('.modal-footer button[type=submit]').html('Ubah Data');
//         $('.modal-body form').attr('action','http://www.englishjet.net/vocabs/ubah');
//         }


$(document).ready(function(){

     
        
        // ------------------------------------------------------
        
    // event ketika keyboard ditulis
    $('#keyword').on('keyup',function(){
        $('.list-group').load('ajax/searchData.php?keyword=' + $('#keyword').val());
        
        
    });

});

// ?keyword='+$('#keyword').val()
