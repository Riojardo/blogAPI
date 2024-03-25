<?php
declare(strict_types=1);

require_once 'connexion.php'; 
class Posts{
    private string $title;
    private string $body;
    private string $author;
    private string $created_at;
    private string $updated_at;
    
public function __construct(string $title, string $body, string $author, string $created_at, string $updated_at) {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
    public static function get_all_posts(){
        $pdo = connect_db();
    
        $query = 'SELECT * FROM  posts';
        $result = $pdo->query($query);
    
        if ($result) {
            $records = $result->fetchAll(PDO::FETCH_ASSOC);
            return $records;
        } else {
            return false;
        }
    }
    public  static function get_post_by_ID($id){
        $pdo = connect_db();

        $query = 'SELECT * FROM posts WHERE id = :id';
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
        $post = $stmt->fetch(PDO::FETCH_ASSOC);
        return $post;
    }
    public static function add_posts($title, $body, $author) {
        $pdo = connect_db();
    
        $query = 'INSERT INTO posts (title, body, author) VALUES (:title, :body, :author)';
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':body', $body, PDO::PARAM_STR);
        $stmt->bindParam(':author', $author, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public static function update_posts($title,$author,$body) {
        $pdo =connect_db();
        $query = 'UPDATE posts Set title = :title , body =:body , author= :author WHERE id = :id';

        $stmt =$pdo->prepare($query);

        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':body', $body, PDO::PARAM_STR);
        $stmt->bindParam(':author', $author, PDO::PARAM_STR);
        return $stmt->execute();
    }
    
    public static function delete_posts($id){
        $pdo = connect_db();

        $query = 'DELETE FROM posts WHERE id = :id';
        $stmt =$pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}


