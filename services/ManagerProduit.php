
<?php

require_once("./models/Produit.php");
include_once 'DB/Database.php';
class ManagerProduit
{

    public static function get_list_produits(): array
    {
        $list_produits = array();

        $db = new Database();
        $req = 'SELECT `id`, `last_name`, `first_name`,`job_title`,`address`, `city`,`country_region` FROM customers ';
        $stmt = $db->get_pages($req, 10, 0);
        $list_produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $numbrePges = $db->get_number_pages();

        return $list_produits;
    }
    public static function add_produit(Produit $produit)
    {
        return $produit;
    }
    public static function get_produit($id) //: Produit
    {
        $produit = null;

        return $produit;
    }

    public static function edit_produit(Produit $produit)
    {

        return $produit;
    }
    public static function delete_produit($id)
    {
    }
}
