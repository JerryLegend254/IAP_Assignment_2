<?php

class article{
    public function add_article($DB){
        if(isset($_POST["add_article"])){
    
            $author_id = $_POST['author_id'];
            $title = $_POST['article_title'];
            $body = $_POST['article_body'];
                
            $data = array("author_id" => $author_id, 'article_title' => $title, 'article_body' => $body);
            $table = "articles_tbl";
            $DB->insert($table, $data);
                
        }
    }

    public function getAllArticles($DB){
        $allArticles = $DB->select_while("SELECT * FROM articles_tbl");
        return $allArticles;
    }
}