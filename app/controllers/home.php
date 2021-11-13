<?php

class home extends Controller {

    public function index()
    {
        if(isset($_SESSION['login'])=="value") // give the value 
            {              
                header('Location:'.BASEURL.'/login');
                exit;
            }
        $data['judul']='Home';
        $data['nama']=$this->model('User_model')->getUser();
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}
