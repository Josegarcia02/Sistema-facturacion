<?php
class Index_model extends Conexion {

    function __construct(){
        parent::__construct();
    
    }
    
    function userLogin($email,$password){
        return $password;
       
    }
}
?>