<?php

namespace Entity;

/**
 * Description of Game
 *
 * @author ETUDIANT
 */
class Game {
    
    /**
    * id game 
    * @var intger;
    */
    private $id;
    
    /**
     * game title
     * @var string 
     */
    
    private $title;
    
    /**
     * game image
     * @var string
     */
    
    private $image;
    
    /**
     * user id
     * @var \Entity\User
     */
    
    private $user;
    
    /**
     * game category
     * @var \Entity\Category
     */
    private $category;
 
    
    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getImage() {
        return $this->image;
    }

    function getUser() {
        return $this->user;
    }

    function getCategory() {
        return $this->category;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setUser(\Entity\User $user) {
        $this->user = $user;
    }

    function setCategory(\Entity\Category $category) {
        $this->category = $category;
    }


}
