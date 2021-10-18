<?php
/*
class sysController{

    public function views($viewName, $data = []){

        if(file_exists("../application/views/" . $viewFile . ".php")){
            require_once "../application/views/$viewFile.php";
 
        } else {
         echo "<div style='margin:0;padding: 10px;background-color:silver;'>$viewFile.php file not found </div>";
        }

    }
 
    public function model($modelFile){
 
       if(file_exists("../application/model/" . $modelFile . ".php")){
            require_once "../application/model/$modelFile.php";
            return new $modelFile;
 
        } else {
            echo "<div style='margin:0;padding: 10px;background-color:silver;'> $modelFile.php file not found </div>";
        }
    }
 
    //session management

    //set session
    public function setSession($sessionName, $sessionValue){

        if(!empty($sessionName) && !empty($sessionValue)){
            $_SESSION[$sessionName] = $sessionValue;
        }
    }

    // Get session
    public function getSession($sessionName){

        if(!empty($sessionName)){
            return $_SESSION[$sessionName];
        }
    }

    // Unset session
    public function unsetSession($sessionName){

        if(!empty($sessionName)){
            unset($_SESSION[$sessionName]);
        }
    }

    // Destroy sessions
    public function destroy(){
        session_destroy();
    }

    //redirection method
    public function redirect($path){
        header("location:" . BASEURL . "/".$path);
    }

}*/