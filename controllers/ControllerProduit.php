<?php
require_once('./services/ManagerProduit.php');
class ControllerProduit
{
    public function __construct($url)
    {
        if (isset($url[3])) {
            $method = $url[3] . '_produit';
            if (method_exists("ControllerProduit", $method)) {

                $this->$method();
            }
        } else {
            $this->get_all();
        }
    }
    private function get_all()
    {
        $MP = new ManagerProduit();
        $resl = $MP->get_list_produits();
        require_once('views/ViewProduit.php');
    }

    private function add_produit()
    {
        echo '<h2>add produit </h2>';
        require_once('./views/viewsProduit/ViewFormProduit.php');
    }
    private function edit_produit()
    {
        echo '<h2>edit produit </h2>';
        require_once('./views/viewsProduit/ViewFormProduit.php');
    }
}
