<?php
class module extends Controller
{
    public function cekLogin()
    {
        if(isset($_SESSION['login'])=="value")
            {
                header('Location:'.BASEURL.'/login');
                exit;
            }
    }
    public function index()
    {
        $data['judul']='English Jet';
        $_SESSION['table']='compage';
        $_SESSION['address']='/module/index';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $data=$this->model('Module_model')->loadComment($_SESSION['table']);
        $this->view('module/index');
        $this->view('templates/comment',$data);
        $this->view('templates/footer_module');
    }

    public function simpres()
    {
            $data['judul']='Simple Present';
            $_SESSION['subject']='simpres';
            $_SESSION['table']='comsimpres';
            $_SESSION['table1']='testsimpres';
            $_SESSION['count']=0;
            $_SESSION['address']='/module/simpres';
            $this->cekLogin();
            $this->view('templates/header_module',$data);
            $data=$this->model('Module_model')->loadComment($_SESSION['table']);
            $this->view('module/simpres');
            $this->view('templates/challenges');
            $this->view('templates/comment',$data);
            $this->view('templates/footer_module');
    }

    public function modal()
    {
        $data['judul']='Modal';
        $_SESSION['subject']='modal';
        $_SESSION['table']='commodal';
        $_SESSION['table1']='testmodal';
        $_SESSION['count']=0;
        $_SESSION['address']='/module/modal';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $data=$this->model('Module_model')->loadComment($_SESSION['table']);
        $this->view('module/modal');
        $this->view('templates/challenges');
        $this->view('templates/comment',$data);
        $this->view('templates/footer_module');
    }
    public function prescon()
    {
        $data['judul']='Present Continuous';
        $_SESSION['subject']='prescon';
        $_SESSION['table']='comprescon';
        $_SESSION['table1']='testprescon';
        $_SESSION['count']=0;
        $_SESSION['address']='/module/prescon';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $data=$this->model('Module_model')->loadComment($_SESSION['table']);
        $this->view('module/prescon');
        $this->view('templates/challenges');
        $this->view('templates/comment',$data);
        $this->view('templates/footer_module');
    }
    public function presfec()
    {
        $data['judul']='Present Perfect';
        $_SESSION['subject']='presfec';
        $_SESSION['table']='compresfec';
        $_SESSION['table1']='testpresfec';
        $_SESSION['count']=0;
        $_SESSION['address']='/module/presfec';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $data=$this->model('Module_model')->loadComment($_SESSION['table']);
        $this->view('module/presfec');
        $this->view('templates/challenges');
        $this->view('templates/comment',$data);
        $this->view('templates/footer_module');
    }

    public function presfecon()
    {
        $data['judul']='Present Perfect Continuous';
        $_SESSION['subject']='presfecon';
        $_SESSION['table1']='testpresfecon';
        $_SESSION['table']='compresfecon';
        $_SESSION['count']=0;
        $_SESSION['address']='/module/presfecon';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $data=$this->model('Module_model')->loadComment($_SESSION['table']);
        $this->view('module/presfecon');
        $this->view('templates/challenges');
        $this->view('templates/comment',$data);
        $this->view('templates/footer_module');
    }

    public function pronoun()
    {   
        $data['judul']='Pronoun';
        $_SESSION['subject']='pronoun';
        $_SESSION['table']='compronoun';
        $_SESSION['table1']='testpronoun';
        $_SESSION['count']=0;
        $_SESSION['address']='/module/pronoun';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $data=$this->model('Module_model')->loadComment($_SESSION['table']);
        $this->view('module/pronoun');
        $this->view2('templates/challenges');
        $this->view('templates/comment',$data);
        $this->view('templates/footer_module');
    }

    public function sentences()
    {
        $data['judul']='Sentences';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $this->view('module/sentences');
        $this->view('templates/footer_module');
    }

    public function simfut()
    {
        $data['judul']='Simple Future';
        $_SESSION['subject']='simfut';
        $_SESSION['table']='comsimfut';
        $_SESSION['table1']='testsimfut';
        $_SESSION['count']=0;
        $_SESSION['address']='/module/simfut';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $data=$this->model('Module_model')->loadComment($_SESSION['table']);
        $this->view('module/simfut');
        $this->view('templates/challenges');
        $this->view('templates/comment',$data);
        $this->view('templates/footer_module');
    }
     public function pasvoc()
    {
        $data['judul']='Passive Voice';
        $_SESSION['subject']='pasvoc';
        $_SESSION['table']='compasvoc';
        $_SESSION['table1']='testpasvoc';
        $_SESSION['count']=0;
        $_SESSION['address']='/module/pasvoc';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $data=$this->model('Module_model')->loadComment($_SESSION['table']);
        $this->view('module/pasvoc');
        $this->view('templates/challenges');
        $this->view('templates/comment',$data);
        $this->view('templates/footer_module');
    }

   public function gerund()
    {
        $data['judul']='Gerund';
        $_SESSION['subject']='gerund';
        $_SESSION['table']='comgerund';
        $_SESSION['table1']='testgerund';
        $_SESSION['count']=0;
        $_SESSION['address']='/module/gerund';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $data=$this->model('Module_model')->loadComment($_SESSION['table']);
        $this->view('module/gerund');
        $this->view('templates/challenges');
        $this->view('templates/comment',$data);
        $this->view('templates/footer_module');
    }

    public function simpas()
    {
        $data['judul']='Simple Past';
        $_SESSION['subject']='simpas';
        $_SESSION['table']='comsimpas';
        $_SESSION['table1']='testsimpas';
        $_SESSION['count']=0;
        $_SESSION['address']='/module/simpas';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $data=$this->model('Module_model')->loadComment($_SESSION['table']);
        $this->view('module/simpas');
        $this->view('templates/challenges');
        $this->view('templates/comment',$data);
        $this->view('templates/footer_module');
    }

    public function tenses()
    {
        $data['judul']='16 Tenses';
        $_SESSION['subject']='tenses';
        $_SESSION['table']='comtenses';
        $_SESSION['table1']='testtenses';
        $_SESSION['count']=0;
        $_SESSION['address']='/module/tenses';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $data=$this->model('Module_model')->loadComment($_SESSION['table']);
        $this->view('module/tenses');
        $this->view('templates/challenges');
        $this->view('templates/comment',$data);
        $this->view('templates/footer_module');
    }
    
    public function irverb()
    {
        $data['judul']='Irregular Verb';
        $this->cekLogin();
        $data=$this->model('Module_model')->takeTranVerb();
        $this->view('templates/header_module',$data);
        $this->view('module/Irverb/irverb',$data);
        $this->view('templates/footer_module');
    }
    
    public function memirverb()
    {
        $data['judul']='Irregular Verb';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $this->view('module/Irverb/memIrverb');
        $this->view('templates/footer_module');
    }
 
    
      public function adj()
    {
        $data['judul']='Adjective';
        $this->cekLogin();
        $data=$this->model('Module_model')->takeAdj();
        $this->view('templates/header_module',$data);
        $this->view('module/adj/adj',$data);
        $this->view('templates/footer_module');
    }
      public function memadj()
    {
        $data['judul']='Adjective';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $this->view('module/adj/memadj');
        $this->view('templates/footer_moduleadj');
    }
     public function noun()
    {
        $data['judul']='Noun';
        $this->cekLogin();
        $data=$this->model('Module_model')->takeNoun();
        $this->view('templates/header_module',$data);
        $this->view('module/noun/noun',$data);
        $this->view('templates/footer_module');
    }
      public function memnoun()
    {
        $data['judul']='Noun';
        $this->cekLogin();
        $this->view('templates/header_module',$data);
        $this->view('module/noun/memnoun');
        $this->view('templates/footer_modulenoun');
    }

    public function vocabs()
    {
        $this->cekLogin();
        $this->view('templates/header_module');
        $this->view('module/vocabs');
        $this->view('templates/footer_module');
    }

    public function comment()
    {
      $this->model('Module_model')->addComment();
      header('Location:'.BASEURL.$_SESSION['address']);
    }

    public function test()
    {
      for($c=$_SESSION['count'];$c>0;$c--)
      {
          $_SESSION['test'][$c]=$this->model('Module_model')->loadtest($_SESSION['table1'], $c);
      }
      $data=$this->model('Module_model')->acctest($_SESSION['test'],$_SESSION['answer']);
      $this->model('Module_model')->addScore($data);
      $date=time();
      $this->model('Notification')->input('12','01',$_SESSION['UserData']['username'].'#'.$_SESSION['UserData']['gambar'].'#/siswa/detail_score_basic/'.$_SESSION['UserData']['id'].'# update '.$_SESSION['subject'].' score#'.$date);
      unset($_SESSION['answer']);
      unset($_SESSION['test']);
      $this->view('templates/header');
      $this->view('templates/score',$data);
      $this->view('templates/footer');
    }
  
} 
