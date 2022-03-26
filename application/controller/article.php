<?php

class article extends Controller{

    public $doctor_id;
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
       

        if($_SESSION['title'] == "Doctor" ){
            $doctor_id = "D".$_SESSION['user_id'];
            $data = [];
            $result = $this->model->getArticleDetails($doctor_id);
            $data['result'] = $result;

            $this->view->render("doctor/articles", $data);
        }  	
    }

    public function create(){
        $this->view->render("doctor/publication");
    }

    public function new(){
        $doctorId = "D".$_SESSION['user_id'];
		$title =  $_POST['title'];
        $content =  $_POST['content'];
        $target_dir = "../public/assets/img/article/";
        $target_file = $target_dir . basename($_FILES["filename"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $filename =  $_FILES['filename']['name'];
        move_uploaded_file($_FILES["filename"]["tmp_name"], $target_file);
        $result = $this->model->newArticle($doctorId, $title, $content, $filename);
        $this->redirect("article");
        
    }

    public function edit(){
        $articleId =  $_GET['article_id'];

        $data = [];
        $result = $this->model->getArticle($articleId);
        $data['result'] = $result;

        $this->view->render("doctor/editArticle", $data);
    }
    public function update(){
        $articleId =  $_POST['articleId'];
        $title =  $_POST['title'];
        $content =  $_POST['content'];
        
        $target_dir = "../public/assets/img/article/";
        $target_file = $target_dir . basename($_FILES["filename"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $filename =  $_FILES['filename']['name'];
        
        move_uploaded_file($_FILES["filename"]["tmp_name"], $target_file);
       

        $update = $this->model->updateArticle($articleId, $title, $content, $filename);
        echo "<script>alert('Article Updated')</script>";
		echo "<script>window.location.href='index'</script>";
		
    }
    public function delete(){
        $articleId =  $_GET['article_id'];
        $result = $this->model->deleteArticle($articleId);
        echo "<script>alert('Article Removed')</script>";
		echo "<script>window.location.href='index'</script>";

    }
    
}