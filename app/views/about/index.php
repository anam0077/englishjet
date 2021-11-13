<?php
function ld_cont($no1,$no2){
     $c=0;
        $result3=array();
        $add="object/".$no1."/feeds/post/".$no2."/addressing.txt";
        $addcont="object/".$no1."/feeds/post/".$no2."/content.txt";
    
         $size=filesize($add);
         $size=$size/18;
         if($size)
         {
            for ($c;$c<$size;$c++)
            {
            $offset=($c*18)+6;
    // -------------------------------------- gain data lenght
            $file=fopen($add,'r');
            fseek($file,$offset);
            $result=fread($file,6);
            $result=trim($result,"%");
            fclose($file);
    // --------------------------------------- gain data offset
            $file=fopen($add,'r');
            fseek($file,$offset+6);
            $result1=fread($file,6);
            $result1=trim($result1,"%");
            fclose($file);
            // result contains the lenght of the content
            // result1 contains the offset of the content
    // --------------------------------------- get data content
            $file=fopen($addcont,'r');
            fseek($file,intval($result1));
            $result3[$c]=fread($file,intval($result));
            fclose($file);
            }
         }
        return $result3;
}

function db_id($r)
{
                        $command="SELECT * FROM users WHERE id=$r";
                        $connect=mysqli_connect("localhost","englishj_anam","bluCX1993","englishj_php");
                        $ambil=mysqli_query($connect, $command);
                        foreach($ambil as $r){$r;}   
                        return $r;
}

?>
<br> <br>
<div class="mb-5">
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal1">New Space</button> 
</div>

<hr>
<?php 
// if($_SESSION['UserData']['public']==false):
?>
<div  class="ovr-flow"> 
                        <?php $size=sizeof($data[2]); $cntr=$size; $cntr ++; $size--;  $c=$data[2]; for($z=$size;$z>=0;$z--) :?>
                        
                        <?php 
                        
                        $cntr--;
                        $res=explode("#",$data[2][$z]);
                        
                        $command="SELECT * FROM users WHERE id=$res[0]";
                        $connect=mysqli_connect("localhost","englishj_anam","bluCX1993","englishj_php");
                        $ambil=mysqli_query($connect, $command);
                        foreach($ambil as $r){$r;}
                        
                        $j=ld_cont($res[0],$res[1]);
                        $k=explode("#",$j[0]);
    
                        foreach($j as $each){$each;}
                        ?>
            
                                            <div class="container pl-0 ml-0 ">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="../img/<?php $a=$r['gambar']; if($a==null){ echo 'null.png';} echo $r['gambar'];?>" alt="Profile" width="75" height="75" class="rounded-circle shadow gmbr2 ml-0 mr-0">
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="row-2 mt-2 mb-0 pb-0">
                                                                  <div class="pl-3 text-primary"><h5 class"text-primary"><b ><?=$r['username'];?> talks to <?php if($k[2]=="none"){echo "";}else{echo $k[2];};?> <?php if($k[3]=="none"){echo "";}else{echo $k[3];};?> <?php if($k[4]=="none"){echo "";}else{echo $k[4];};?> <?php if($k[5]=="none"){echo "";}else{echo $k[5];};?> <?=$k[11];?></b></h5> </div>
                                                                  <p class="pl-3"><?=$k[10];?></p>
                                                        </div>
                                                        <hr <?php if(!strcmp($k[6],'none')){ echo 'hidden';}else{ echo 'unhidden';}?>>
                                                        
                                                        <div class="row-2 mt-2 mb-2">
                                                         <div id="" class="row mt-2">
                                                         <div class="col-3" id="" <?php if(!strcmp($k[6],'none')){ echo 'hidden';}else{ echo 'unhidden';}?>>
                                                            <img id="" src="<?=$k[6];?>" width="100" height="100" class="rounded shadow gmbr2 ml-0 gmb-dsply" data-toggle="modal" data-target="#myModal3"> 
                                                            <span class="ml-2" id=""></span>
                                                         </div>
                                                         <div class="col-3" id="" <?php if(!strcmp($k[7],'none')){ echo 'hidden';}else{ echo 'unhidden';}?>>
                                                             <img id="" src="<?=$k[7];?>"  width="100" height="100" class="rounded shadow gmbr2 ml-0 gmb-dsply" data-toggle="modal" data-target="#myModal3">
                                                             <span class="ml-2" id=""></span>
                                                         </div>
                                                         <div class="col-3" id="" <?php if(!strcmp($k[8],'none')){ echo 'hidden';}else{ echo 'unhidden';}?>>
                                                             <img id="" src="<?=$k[8];?>"  width="100" height="100" class="rounded shadow gmbr2 ml-0 gmb-dsply" data-toggle="modal" data-target="#myModal3">
                                                            <span class="ml-2" id=""></span>
                                                         </div>
                                                         <div class="col-3" id="" <?php if(!strcmp($k[9],'none')){ echo 'hidden';}else{ echo 'unhidden';}?>>
                                                             <img id="" src="<?=$k[9];?>"  width="100" height="100" class="rounded shadow gmbr2 ml-0 gmb-dsply" data-toggle="modal" data-target="#myModal3">
                                                            <span class="ml-2" id=""></span>
                                                         </div>
                                                        </div>
                                                        </div>
                                                      
                                               <div >
                                                    <a id="" name="<?=$cntr;?>" class=" ml-3 mt-3 lb-3 sh-1" data-toggle="collapse" href="#collapseExample1<?=$cntr;?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                      Voice Chats:
                                                     </a>
                                                </div>         
                                                        
                                           
                                                  
                                                    <div class="collapse" id="collapseExample1<?=$cntr;?>">
                                                          <hr>
                                                         <div id="voice-sh<?=$cntr;?>" class="row-8 pl-0 scrolled-vo">
                                                             
                                                                                     
                                                        </div>
                                                 </div>

                                                         <div id="to1<?=$cntr;?>" hidden ><?=$res[0];?></div>
                                                                     <div id="to2<?=$cntr;?>" hidden><?=$res[1];?></div>
                                                            <?php $f=$_SESSION['UserData']['username']; if($k[2]==$f):?>
                                                            <hr>
                                                                    <button type="button" name="<?=$cntr;?>" class="btn btn-primary tt" data-toggle="modal" data-target="#myModal">
                                                                      speak
                                                                    </button>  
                                                            <?php elseif($k[3]==$f):?>
                                                            <hr>
                                                                    <button type="button" name="<?=$cntr;?>" class="btn btn-primary tt" data-toggle="modal" data-target="#myModal">
                                                                      speak
                                                                    </button> 
                                                            <?php elseif($k[4]==$f):?>
                                                                    <button type="button" name="<?=$cntr;?>" class="btn btn-primary tt" data-toggle="modal" data-target="#myModal">
                                                                      speak
                                                                    </button> 
                                                            <?php elseif($k[5]==$f):?>
                                                            <hr>
                                                            <button type="button" name="<?=$cntr;?>" class="btn btn-primary tt" data-toggle="modal" data-target="#myModal">
                                                                      speak
                                                            </button> 
                                                            <?php elseif($r['username']==$f):?>
                                                            <hr>
                                                            <button type="button" name="<?=$cntr;?>" class="btn btn-primary tt" data-toggle="modal" data-target="#myModal">
                                                                      speak
                                                            </button> 
                                                            <?php endif;?> 
                                                            
                                                            <?php if($r['username']==$_SESSION['UserData']['username']):?>
                                                            
                                                            <button type="button" name="<?=$cntr;?>" id="del<?=$cntr;?>" class="ml-5 btn btn-danger tf">
                                                                      Delete
                                                            </button>
                                                            
                                                            <? endif;?>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                        <?php endfor;?>
</div>
<?php 
// endif;
?>
<?php
//-------------------------------------------------------------------------
?>
<!--modal 4-->
<!-- The Modal -->
<div class="modal" id="myModal5" align="center">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content pb-0 pt-0 pt-3 pb-3">
            <p id="target"></p>
          </div>
        </div>
</div>

<?php
//-------------------------------------------------------------------------
?>

<!--modal 4-->
<!-- The Modal -->
<div class="modal" id="myModal4" align="center">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content pb-0 pt-0 pt-3 pb-3">
            <p>Loading ....</p>
          </div>
        </div>
</div>

<?php
//-------------------------------------------------------------------------
?>

<!--modal 3-->
<!-- The Modal -->
<div class="modal" id="myModal3" align="center">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content pb-0 pt-0">
            <div class="modal-header pt-0 pb-0">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <img id="gmb-insrt" src=""  width="100%" height="100%" class="shadow gmbr2 mb-0">
         
            <p><?php
            // echo trim($k[6],"../");
            ?></p>
          </div>
        </div>
</div>



<?
//------------------------------------------------------------------------------
?>


<!-- Button to Open the Modal -->

<!-- The Modal -->
<div class="modal" id="myModal" align="center">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Record voice</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body"> 
               <div align="center">
                    <audio id="player2" controls hidden></audio>
              </div>
       <p id="cxc3"></p>
       <p id="cxc1"></p>
            
                  <div id="bar1" class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                 </div>
        <hr>
      <!-- Modal footer -->
       <button type="button" class="mb-3 btn btn-danger butrec buttonHold" id="cuk">Press & Hold</button>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="cuk3"hidden>Send</button>
      </div>

    </div>
  </div>
</div>
</div>



<!-- modal 2 -->


<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">New Space</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
           <h6>choose friend</h6>
           <input type="text" class="form-control" placeholder="find friend" name="participant" id="part_src" autocomplete="off">
           
        <div class="mt-3" id="part_dst">
           
        </div>
        <div id="nmls" class="row mt-2" hidden>
             <div class="col-3" id="part1" hidden>
                <img id="img1" src="" alt="Profile" width="30" height="30" class="rounded-circle shadow gmbr2 ml-0"> 
                <span class="ml-2" id="nm1"></span>
             </div>
             <div class="col-3" id="part2" hidden>
                 <img id="img2" src="" alt="Profile" width="30" height="30" class="rounded-circle shadow gmbr2 ml-0">
                 <span class="ml-2" id="nm2"></span>
             </div>
             <div class="col-3" id="part3" hidden>
                 <img id="img3" src="" alt="Profile" width="30" height="30" class="rounded-circle shadow gmbr2 ml-0">
                <span class="ml-2" id="nm3"></span>
             </div>
             <div class="col-3" id="part4" hidden>
                 <img id="img4" src="" alt="Profile" width="30" height="30" class="rounded-circle shadow gmbr2 ml-0">
                <span class="ml-2" id="nm4"></span>
             </div>
        </div>
         <h6 class="mt-3">Upload image</h6>
         <input type="file" id="img-1" class="btn-primary" name="img-1" accept="image/png, image/jpeg" onchange="test()">
         <br>
         <br>
         <img id="img-sh1" src="" alt="satu" width="100" height="100" class="rounded shadow gmbr2 ml-0" hidden>
         <img id="img-sh2" src="" alt="dua" width="100" height="100" class="rounded shadow gmbr2 ml-3" hidden>
         <img id="img-sh3" src="" alt="tiga" width="100" height="100" class="rounded shadow gmbr2 ml-3" hidden>
         <img id="img-sh4" src=""  alt="empat" width="100" height="100" class="rounded shadow gmbr2 ml-3" hidden>
         <h6 class="mt-3">Write something</h6>
         <input type="text" id="txt-ls" name="txt-ls" class="w-100">
      </div>
      <div class="modal-footer">
        <button type="button" id="cr-ps"class="btn btn-primary" data-dismiss="modal">Create</button>
      </div>
    </div
  </div>
</div>














