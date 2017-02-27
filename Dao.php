<?php
class Dao {
  private $host = "us-cdbr-iron-east-04.cleardb.net";
  private $db = "heroku_e35f1229d52c580";
  private $user = "ba97daeb49e80a";
  private $pass = "64bc3afe";
  public function getConnection () {
    return
      new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
          $this->pass);
  }
  public function getComments () {
    $conn = $this->getConnection();
    return $conn->query("select comment, date_entered from comment order by date_entered desc");
  }
  public function saveComment ($comment) {
    $conn = $this->getConnection();
    $saveQuery = "insert into comment (comment, user_id) values (:comment, 1)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":comment", $comment);
    $q->execute();
  }
}