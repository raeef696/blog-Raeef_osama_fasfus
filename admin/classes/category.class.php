<?php
class category extends conDB {

    public function getCategorys() {
        $sql = "SELECT * FROM category";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        while($result = $stmt->fetchAll()) {
        return $result;
        };
    }

    public function addcategorys($categorys) {
        //$sql = "INSERT INTO `category`(`name_category`) VALUES ('?')";
        $stmt = $this->connect()->prepare(
        "INSERT INTO `category`(`name_category`) VALUES ('?')"
        );
        $stmt ->execute([$categorys]);
    }

}
?>