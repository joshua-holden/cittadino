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
}