<?php

class User {
    protected $id;
    protected $username;
    protected $password;
    protected $firstname;
    protected $lastname;
    protected $email;

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function setUsername($username) {
        $this->username = $username;
    }
    
    public function getUsername() {
        return $this->username;
    }
    
    public function setPassword($password) {
        $this->password = $password;
    }
    
    public function getPassword() {
        return $this->password;
    }

    public function setFirstname($firstname) {
        $this->id = $firstname;
    }
    
    public function getFirstname() {
        return $this->firstname;
    }
    
    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }
    
    public function getLastname() {
        return $this->lastname;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function getEmail() {
        return $this->email;
    }
}
?>