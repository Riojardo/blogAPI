
<?php
require_once('C:\wamp64\www\blogAPI\models\post.php');
class PostsController {
    public function get_all_post() {
        $posts = Posts:: get_all_posts();
        sendJson($posts);

    }
    public function get_posts_by_ID($id) {
        $post = Posts::get_post_by_ID($id);
        sendJson($post);
    }
    public function add_post (){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $title= $_POST['title'] ?? null;
            $body= $_POST['body'] ?? null;
            $author= $_POST['author'] ?? null;

            if ($title && $body && $author !== null){
                $succes = Posts::add_posts($title, $body,$author);
                header("Location: http://localhost/blogAPI/index.php");
                exit();
            }else{
                 echo "veuillez remplir tous les champs du formulaire avec les donnés adéquate <br>";
            }
        }
    }

    public function update_post($id,$title,$author,$body){
        $update = Posts::update_posts($id,$title, $body, $author);
    
        if ($update){
            echo "Update successful";
            // header("Location: http://localhost/blogAPI/index.php");
            exit();
        } else {
            echo "Update failed";
        }
    }

    public function delete_post($id) {
        $deleted = Posts::delete_posts($id); 
        if ($deleted) {
            echo "Post with ID $id deleted successfully.";
        } else {
            echo "Failed to delete post with ID $id.";
        }
    }

}
