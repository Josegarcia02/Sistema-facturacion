<?php

class Index extends Controllers {

    public function __construct() {

        parent::__construct();
    }

    public function index(){
       $this->view->render($this,"index");
    }
    public function userLogin(){

       if(isset($_POST["email"]) && isset($_POST["password"])){
          echo password_hash($_POST["password"], PASSWORD_DEFAULT);
        //$data=  $this->model->userLogin ($_POST["email"], $_POST["password"]);
         /*if (is_array($data)) {
             echo json_encode($data);
         } else {
             echo $data;
        
         }*/
  
        }
    }
}
?>