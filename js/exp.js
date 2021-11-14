//-------------------------------------------------------------------------------------
        $(document).ready(function(){
          document.body.onload=function(){
              $('#notif-notif').load('https://www.englishjet.net/ajax/notify_number.php');
          };
        });
// -----------------------------------------------------------------------------------


//  $(document).ready(function(){
//     $(document).on("click","#dd",function()
//     {
//       const player = document.getElementById('player');

//       const handleSuccess = function(stream) 
//       {
//           if (window.URL) 
//             {
//               player.srcObject = stream;
//             } else 
//                 {
//                 player.src = stream;
//                 }
//         };

//         navigator.mediaDevices.getUserMedia({ audio: true, video: false }).then(handleSuccess);
        
//      });
// });

//  $(document).ready(function(){
//     $(document).on("click","#rekam",function()
//     {
//       const handleSuccess = function(stream) {
//     const context = new AudioContext();
//     const source = context.createMediaStreamSource(stream);
//     const processor = context.createScriptProcessor(1024, 1, 1);

//     source.connect(processor);
//     processor.connect(context.destination);

//     processor.onaudioprocess = function(e) {
//       // Do something with the data, e.g. convert it to WAV
//       console.log(e.inputBuffer);
//     };
//   };

//   navigator.mediaDevices.getUserMedia({ audio: true, video: false })
//       .then(handleSuccess);
//      });
// });





//     const handleSuccess = function(stream) {
//     const context = new AudioContext();
//     const source = context.createMediaStreamSource(stream);
//     const processor = context.createScriptProcessor(1024, 1, 1);

//     source.connect(processor);
//     processor.connect(context.destination);

//     processor.onaudioprocess = function(e) {
//       // Do something with the data, e.g. convert it to WAV
//       console.log(e.inputBuffer);
//     };
//   };
//   navigator.mediaDevices.getUserMedia({ audio: true, video: false }).then(handleSuccess);
//      });

$(document).ready(function(){
    $(document).on("click","#rekam",function()
    {
    let shouldStop = false;
    let stopped = false;
    const downloadLink = document.getElementById('download');
    const stopButton = document.getElementById('stop');
    var duc = document.getElementById("dataUrlcontainer");
                           stopButton.addEventListener('click', function() 
                            {
                                shouldStop = true;
                            });
                            
                            const handleSuccess = function(stream) 
                            {
                                                    const options = {mimeType: 'audio/webm'};
                                                    const recordedChunks = [];
                                                    const mediaRecorder = new MediaRecorder(stream, options);
                                                
                                                    mediaRecorder.addEventListener("dataavailable", function(e) 
                                                    {
                                                              if (e.data.size > 0) 
                                                              {
                                                                recordedChunks.push(e.data);
                                                              }
                                                        
                                                              if(shouldStop === true && stopped === false) 
                                                              {
                                                                    alert('berhenti');
                                                                    mediaRecorder.stop();
                                                                    stopped = true;
                                                              }
                                                    });
                                                
                                                     mediaRecorder.addEventListener("stop", function() 
                                                     {
                                                            //   downloadLink.href = URL.createObjectURL(new Blob(recordedChunks));
                                                            //   downloadLink.download = 'acetest.wav';
                                                            var url=URL.createObjectURL(new Blob(recordedChunks));
                                                         
                                                            var blob=new Blob(recordedChunks);
                                                           
                                                            // duc.innerHTML = blob;
                                                            //   var dataURL = document.getElementById("dataUrlcontainer").innerHTML;
                                                            // $.ajax(
                                                            //     {
                                                            //       type: "POST",
                                                            //       url: "https://www.englishjet.net/ajax/audio.php",
                                                            //       data: { 
                                                            //           dataku: file
                                                            //       },success:function(result) 
                                                            //       {
                                                            //       alert(result); 
                                                            //       }
                                                            //     });
                                        
                                                    var xhr=new XMLHttpRequest();
                                                    xhr.onload=function() {
                                                      if(this.readyState === 4) {
                                                          alert('response dari server: '+this.responseText);
                                                      }
                                                    };
                                                    var fd=new FormData();
                                                    fd.append("audio_data",blob, "filename");
                                                    xhr.open("POST","https://www.englishjet.net/ajax/audio.php",true);
                                                    xhr.send(fd);
                                                    
                                                     });
                                                
                                                    mediaRecorder.start(100);
                          };

        navigator.mediaDevices.getUserMedia({ audio: true, video: false }).then(handleSuccess);
    });
});