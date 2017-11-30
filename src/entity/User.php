<?php

namespace Entity;
/**
 * Description of user
 *
 * @author ETUDIANT
 */
class user {
    
    /**
     * Primary key for User
     * @var integer
     */
    
    private $id;
    
    /**
     * Username of the user
     * @var string
     */
    
    private $username;
    
    /**
     * User email
     * @var string
     */
    
    private $password;
    
    /**
     * User password
     * @var sring
     */
    
    private $email;
    
    /**
     * User firstname
     * @var string
     */
    
    private $firstname;
    
    /**
     * User lastname
     * @var string
     */
    
    private $lastname;
    
    
    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }
    
    public function setPassword($password){
        $this->$password = $password;
    }
    
    public function getPassword($password){
        $this->$password = $password;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }
    
    
}
