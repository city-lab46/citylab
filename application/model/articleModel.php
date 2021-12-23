<?php

class articleModel extends Model{

    function __construct(){
        parent::__construct();
    }
    
    function getArticleDetails($doctor_id){
        $query = "SELECT * FROM article WHERE doctor_id = '$doctor_id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    } 

    function newArticle($doctorId, $title, $content, $filename){
        $query = "INSERT INTO article (doctor_id, title, content, filename)  VALUES ('$doctorId', '$title', '$content', '$filename');";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        //bind
    }

    function getArticle($article_id){
        $query = "SELECT * FROM article WHERE article_id = '$article_id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    } 

    function updateArticle($articleId, $title, $content, $filename){
        $query = "UPDATE article SET title = '$title', content= '$content', filename= '$filename' WHERE article_id = '$articleId'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    } 

    function deleteArticle($articleId){
        $query = "DELETE FROM article WHERE article_id = '$articleId'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }  
}
