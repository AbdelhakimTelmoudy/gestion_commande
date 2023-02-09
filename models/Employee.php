<?php
require_once 'Person.php';
class Employee extends Persone
{

    public function __construct($id, $nom, $prenom, $date_n, $telephone, $email, $salaire, $dateDebut)
    {
        parent::__construct($id, $nom, $prenom, $date_n, $telephone, $email);

        $this->salaire = $salaire;
        $this->dateDebut = $dateDebut;

    }

    public function get_salaire()
    {
        return $this->salaire;
    }

    public function get_dateDebut()
    {
        return $this->dateDebut;
    }

}