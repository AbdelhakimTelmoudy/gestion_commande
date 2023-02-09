<?php
include_once 'DB/Database.php';
class ControllerAccueil
{

    private $_produitManager;
    private $_view;

    public function __construct($url)
    {
        $this->getAll();
    }

    private function getAll()
    {
        require_once("./views/ViewAccueil.php");
    }
}
