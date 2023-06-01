<?php

class Personnage 
{
    private $_nom;
    private $_prenom;
    private $_age;
    private $_sexe;

    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom($_nom)
    {
        return $this->_nom = $_nom;
    } 

    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function setPrenom($_prenom)
    {
        return $this->_prenom = $_prenom;
    }

    public function getAge()
    {
        return $this->_age;
    }
    public function setAge($_age)
    {
        return $this->_age = $_age;
    }

    public function getSexe()
    {
       return $this->_sexe;
    }
    public function setSexe($_sexe)
    {
       return $this->_sexe = $_sexe;
    }
}

?>