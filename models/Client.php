<?php

class Client extends Persone
{

    public function __construct($id, $nom, $prenom, $date_n, $telephone, $email)
    {
        parent::__construct($id, $nom, $prenom, $date_n, $telephone, $email);

    }

}