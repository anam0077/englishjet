<html>
<head>
<title><?if(isset($data['judul'])){echo $data['judul'];}null;?></title>
<link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css"> 
<link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= BASEURL;?>/css/home.css?t=<?=time()?>">
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
        
        <?php if($_SESSION['UserData']['public']=="value"):?>
        <li>
          
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle noti" type="button" data-toggle="dropdown">
            Notification <span id="notif-notif" class="badge bg-danger">
                <?php 
                      
                       ?>
            </span>
            </button>
            
            <ul id="here" class="dropdown-menu dropdown-menu-end overflow-auto" >
                
               
            </ul>
        </div>   
        </li>
        <?php endif;?>
        </ul>
    </div>
</nav>
<main>
<div id="contentW" class="container-fluid">
    <div class="row">
        <div class="col-3">
                <div class="mt-5 mb-2 p-2 border bg-light w-100 h-100 overflow-scroll">
                    <article>
                        <h2 id="sucject">Content / Isi</h2>
                        <div class="fs-4 text">	
                            <p><a href="<?=BASEURL;?>/module/sentences">Sentece</a></p>
                            <p><a href="<?=BASEURL;?>/module/pronoun"> Pronoun</a></p>
                            <p><a href="<?=BASEURL;?>/module/tenses">16 Tenses</a></p>
                            <p><a href="<?=BASEURL;?>/module/simpres">Simple Present</a></p>
                            <p><a href="<?=BASEURL;?>/module/prescon">Present Continuous</a></p>
                            <p><a href="<?=BASEURL;?>/module/presfec">Present Perfect</a></p>
                            <p><a href="<?=BASEURL;?>/module/presfecon"> Present Perfect Continuous</a></p>
                            <p><a href="<?=BASEURL;?>/module/simpas">Simple Past</a></p>
                            <p><a href="<?=BASEURL;?>/module/simfut">Simple Future</a></p>
                            <p><a href="<?=BASEURL;?>/module/modal">Modal</a></p>
                            <p><a href="<?=BASEURL;?>/module/pasvoc">Passive Voice</a></p>
                            <p><a href="<?=BASEURL;?>/module/gerund">Gerund</a></p>
                            <hr>
                            <p><a href="<?=BASEURL;?>/module/irverb">Irregular Verb</a></p>
                            <p><a href="<?=BASEURL;?>/module/adj">Adjective</a></p>
                            <p><a href="<?=BASEURL;?>/module/noun">Noun</a></p>
                        </div>		 
                    </article>
                </div>
        </div>
        <div class="col-9">
                <div class="mt-5 mb-2 p-2 border bg-light w-100 h-100 ">
