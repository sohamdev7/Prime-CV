<?php
session_start();
class Functions{
    public function redirect($address){
    header("Location:".$address);
    }

    public function setError($msg){
      $_SESSION['error']=$msg;
    }
    public function error(){
        if(isset($_SESSION['error'])){
           echo "Swal.fire('','".$_SESSION['error']."','error')";
           unset($_SESSION['error']);
        }
    }
    public function alert(){
        if(isset($_SESSION['alert'])){
           echo "Swal.fire('','".$_SESSION['alert']."','success')";
           unset($_SESSION['alert']);
        }
    }
    public function setAlert($msg){
        $_SESSION['alert']=$msg;
    }
    public function setAuth($data){
      $_SESSION['Auth']=$data;
    }
    public function Auth(){
         if(isset($_SESSION['Auth'])){
           return $_SESSION['Auth'];
        }else{
            return false;
        }
    }
    public function AuthPage(){
         if(!isset($_SESSION['Auth'])){
     $this->redirect('Login.php');       
         }
    }

     public function NonAuthPage(){
         if(isset($_SESSION['Auth'])){
     $this->redirect('landing_page-2.php');       
         }
    }
    public function setSession($key,$value){
        $_SESSION[$key]=$value;
    }
    public function getSession($key){
        return $_SESSION[$key]??'';
    }
}
$fn = new Functions();
?>