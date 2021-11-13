<?php

class About extends Controller{

    public function index($nama='nama',$job='job'){
        if($_SESSION['login']=="value")
            {
                header('Location:'.BASEURL.'/login');
                exit;
            }
      $data[]='account';
      $data1=$this->model('User_model')->getnotify($_SESSION['UserData']['id']);
      $data[]=$this->model('User_model')->getAccount();
      $data[]=$this->model('User_model')->loadFeed();
      $this->view3('templates/header_profile',$data,$data1);
      $this->view('about/index',$data);
      $this->view('templates/footer_profile');
    }
    public function page()
    {
        $data['judul']='page';
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');
    } 
    public function friends()
    {
        if($_SESSION['login']=="value")
            {
                header('Location:'.BASEURL.'/login');
                exit;
            }
        $data[]='Friends';
        $data1=$this->model('User_model')->getnotify($_SESSION['UserData']['id']);
        $data[]=$this->model('User_model')->getAccount();
        $data[]=$this->model('User_model')->loadfriends($data[1]['id']);
        $data[]=$this->model('User_model')->loadfriendreq($_SESSION['UserData']['id']);
        $_SESSION['request']=$data[3];
        $_SESSION['friend']=$data[2];
        $this->view3('templates/header_profile',$data,$data1);
        $this->view('about/friends',$data); 
        $this->view('templates/footer_profile');
    }
     public function basic()
    {
        if($_SESSION['login']=="value")
            {
                // Flasher::setFlash('berhasil','ditambahkan','success');
                header('Location:'.BASEURL.'/login');
                exit;
            }
        $data[]='Basic';
        $data1=$this->model('User_model')->getnotify($_SESSION['UserData']['id']);
        $data[]=$this->model('User_model')->getAccount();
        $this->view3('templates/header_profile',$data,$data1);
        $this->view('about/basic',$data);
        $this->view('templates/footer_profile');
    }
    public function adj()
    {
        if($_SESSION['login']=="value")
            {
                // Flasher::setFlash('berhasil','ditambahkan','success');
                header('Location:'.BASEURL.'/login');
                exit;
            }
        $data[]='Adjective';
        $data1=$this->model('User_model')->getnotify($_SESSION['UserData']['id']);
        $data[]=$this->model('User_model')->getAccount();
        $this->view3('templates/header_profile',$data,$data1);
        $this->view('about/adj',$data);
        $this->view('templates/footer_profile');
    }
    public function irrverb()
    {
        if($_SESSION['login']=="value")
            {
                // Flasher::setFlash('berhasil','ditambahkan','success');
                header('Location:'.BASEURL.'/login');
                exit;
            }
        $data[]='Irregular Verb';
        $data1=$this->model('User_model')->getnotify($_SESSION['UserData']['id']);
        $data[]=$this->model('User_model')->getAccount();
        $this->view3('templates/header_profile',$data,$data1);
        $this->view('about/irrverb',$data);
        $this->view('templates/footer_profile');
    }
    public function noun()
    {
        if($_SESSION['login']=="value")
            {
                // Flasher::setFlash('berhasil','ditambahkan','success');
                header('Location:'.BASEURL.'/login');
                exit;
            }
        $data[]='Noun';
        $data1=$this->model('User_model')->getnotify($_SESSION['UserData']['id']);
        $data[]=$this->model('User_model')->getAccount();
        $this->view3('templates/header_profile',$data,$data1);
        $this->view('about/noun',$data);
        $this->view('templates/footer_profile');
    }

    public function changePicture()
    {
        if($_SESSION['login']=="value")
            {
                // Flasher::setFlash('berhasil','ditambahkan','success');
                header('Location:'.BASEURL.'/login');
                exit;
            }
        $this->view('templates/header');
        $this->view('about/picture');
        $this->view('templates/footer');  
    } 

    public function afterChange()
        {
            if($_SESSION['login']=="value")
            {
                // Flasher::setFlash('berhasil','ditambahkan','success');
                header('Location:'.BASEURL.'/login');
                exit;
            }
             $data=$this->model('User_model')->uploadPic();
             $this->model('User_model')->updatePic($data);
             header('Location:'.BASEURL.'/about/index');
        }
        
}
