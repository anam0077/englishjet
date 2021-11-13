<?php

class Controller{

    public function view($view, $data=[]){
        require_once 'app/views/'.$view.'.php';
    }
    public function view2($view, $data1=[]){
        require_once 'app/views/'.$view.'.php';

    }
     public function view3($view, $data=[],$data1=[])
     {
        require_once 'app/views/'.$view.'.php';

    }
    public function model($model)
    {
        require_once 'app/models/'.$model.'.php';
        return new $model; // harus di instansiasi dulu kare manggil sebuah kelas
    }
}
