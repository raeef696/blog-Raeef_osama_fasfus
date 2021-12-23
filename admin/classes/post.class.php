<?php 

class Post extends conDB {
    public function getPost() {
        $sql = "SELECT * FROM posts";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        while($result = $stmt->fetchAll()) {
        return $result;
        };
    }
    public function addPost($title, $body, $img,$create_at) {
        $sql = "INSERT INTO posts(title, body, img) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title, $body, $img,$create_at]);
    }
    public function users(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        while($result = $stmt->fetchAll()) {
            return $result;
        }
    }
    public function loginUser($user,$password){
        $sql = "SELECT * FROM users WHERE username = ? AND passowrd = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user,$password]);
        $cont = $stmt->rowCount();
        
    }

}
?>