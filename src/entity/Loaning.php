<?php

namespace Entity;

/**
 * Description of Loaning
 *
 * @author ETUDIANT
 */
class Loaning {
    
    /**
     * loaning id
     * @var integer
     */
    private $id;
    
    /**
     * loaning date start
     * @var \Datetime
     */
    private $dateStart;
    
    /**
     * loaning date end
     * @var \Datetime
     */
    
    private $dateEnd;
    
    /**
     * 
     * @var \Entity\Game
     */
    
    private $game;
    
    /**
     *
     * @var \Entity\User
     */
    
    private $user;
    
    function getId() {
        return $this->id;
    }

    function getDateStart() {
        return $this->dateStart;
    }

    function getDateEnd() {
        return $this->dateEnd;
    }

    function getGame() {
        return $this->game;
    }

    function getUser() {
        return $this->user;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDateStart($dateStart) {
        if($dateStart instanceof string){
            $dateStart = \Datetime::createFromFormat('Y/m/d', $dateStart);
        }
        $this->dateStart = $dateStart;
    }

    function setDateEnd($dateEnd) {
        if($dateEnd instanceof string){
            $dateEnd = \Datetime::createFromFormat('Y/m/d', $dateEnd);
        }
        $this->dateEnd = $dateEnd;
    }

    function setGame(\Entity\Game $game) {
        $this->game = $game;
    }

    function setUser(\Entity\User $user) {
        $this->user = $user;
    }


    
}
