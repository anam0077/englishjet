<html>
<head>
<title><?=$data[0];?></title>
<link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css"> 
<link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= BASEURL;?>/css/profile.css?t=<?=time()?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"> 
    <a class="navbar-brand" href="<?=BASEURL;?>/home">ENGLISH JET</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse fontSize" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="<?=BASEURL;?>/home">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php if($_SESSION['UserData']['public']=="value"):?>
        <li class="nav-item active">
                <a class="nav-link" href="<?=BASEURL;?>/siswa">Students</a>
        </li>
        <?php endif ;?>
        <li class="nav-item active">
            <a class="nav-link" href="<?=BASEURL;?>/module">Module</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?=BASEURL;?>/vocabs">Vocabularies</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?=BASEURL;?>/about">Profile</a>
        </li>
          
        <li>
          
        <div class="dropdown fontSize">
            <button class="btn btn-primary dropdown-toggle fontSize" type="button" data-toggle="dropdown">
            Notification <span id="notif-notif" class="badge bg-danger">
           <?php 
             $data1['size']--;
            ?>
            </span>
            </button>
            
            <ul class="dropdown-menu dropdown-menu-end overflow-auto fontSize" >
                
                <?php for($c=$data1['size'];$c>=0;$c--):?>
                <li><a class="dropdown-item pl-0" href="<?=BASEURL; echo $data1['content'][$c][2];?>">
                      <div class="container ml-0">
                          <div class="col-3">
                                <img src="<?=BASEURL;?>/img/<?php $a=$data1['content'][$c][1]; if($a==null){ echo 'null.png';} echo $data1['content'][$c][1];?>" alt="Profile" width="100%" class="rounded shadow" >
                          </div>
                          <div class="col-9">
                             <?=$data1['content'][$c][0];?> <?=$data1['content'][$c][3];?>
                             <h6><?php
                                     $time=time()-$data1['content'][$c][4];
                                      if ($time<60)
                                      {
                                          echo $time.' seconds ago';
                                      }
                                    elseif ($time<3600)
                                      {
                                          $time=$time/60;
                                          echo floor($time).' minutes ago';
                                      }
                                    elseif($time<86400) // 3600 x24
                                      {
                                          $time=$time/3600;
                                          echo floor($time).' hours ago';
                                      }
                                     elseif($time<604800) // 86400 x 7
                                      {
                                          $time=$time/86400;
                                          echo floor($time).' days ago';
                                      }
                                     elseif($time<2419200) // 604800x 4
                                      {
                                          $time=$time/604800;
                                          echo floor($time).' weeks ago';
                                      }
 
                                      ?>
                             </h6>
                          </div>
                       </div>
                    </a>
                </li>
                <hr>
                <?php endfor;?>
            </ul>
        </div>   
        </li>
        <?php 
        // endif;
        ?>
        </ul>
    </div>

</nav>

<main>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
                <div class="mt-5 mb-2 p-2 border bg-light w-100 h-100 overflow-scroll">
                    <article>
                        <h2 id="sucject">Profile</h2>
                        <div class="fs-4 text">	
                            <a href="<?=BASEURL;?>/about/changePicture">
                                <img src="<?=BASEURL;?>/img/<?php $a=$data[1]['gambar']; if($a==null){ echo 'null.png';} echo $data[1]['gambar'];?>" alt="Profile" width="150" height="150" class="rounded-circle shadow gmbr2 ml-5" >
                            </a>
                            <h4 class="mt-4"><?=$data[1]['username'];?></h4>
                            <hr>
                            <p><a href="<?=BASEURL;?>/about">FEEDS</a></p>
                            <p><a href="<?=BASEURL;?>/about/basic">SCORES</a></p>
                            <?php 
                            ?>
                            <p><a id="friend-button" href="<?=BASEURL;?>/about/friends">FRIENDS</a></p>
                            <?php 
                           
                            ?>
           <br>
           <br>
           <br>
            <a class="btn btn-danger" href="<?=BASEURL;?>/logout">logout</a>
      
                        </div>		 
                    </article>
                </div>
        </div>
        <div class="col-9 pt-3">
               
