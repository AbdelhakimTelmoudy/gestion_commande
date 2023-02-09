<?php

class Produit
{
    public $id;
    public $libellee;
    public $prix;
    public $id_cat;
    public $min_stock;
    public $max_stock;
    public $qte;
    public $statute;

    public function __construct($id, $libellee, $id_cat, $prix, $min_stock, $max_stock, $qte, $statute)
    {
        $this->id = $id;
        $this->libellee = $libellee;
        $this->prix = $prix;
        $this->id_cat = $id_cat;
        $this->min_stock = $min_stock;
        $this->max_stock = $max_stock;
        $this->qte = $qte;
        $this->statute = $statute;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Get the value of libellee
     */
    public function getLibellee()
    {
        return $this->libellee;
    }

    /**
     * Set the value of libellee
     */
    public function setLibellee($libellee): self
    {
        $this->libellee = $libellee;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     */
    public function setPrix($prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of id_cat
     */
    public function getIdCat()
    {
        return $this->id_cat;
    }

    /**
     * Set the value of id_cat
     */
    public function setIdCat($id_cat): self
    {
        $this->id_cat = $id_cat;

        return $this;
    }

    /**
     * Get the value of min_stock
     */
    public function getMinStock()
    {
        return $this->min_stock;
    }

    /**
     * Set the value of min_stock
     */
    public function setMinStock($min_stock): self
    {
        $this->min_stock = $min_stock;

        return $this;
    }

    /**
     * Get the value of max_stock
     */
    public function getMaxStock()
    {
        return $this->max_stock;
    }

    /**
     * Set the value of max_stock
     */
    public function setMaxStock($max_stock): self
    {
        $this->max_stock = $max_stock;

        return $this;
    }

    /**
     * Get the value of qte
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set the value of qte
     */
    public function setQte($qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get the value of statute
     */
    public function getStatute()
    {
        return $this->statute;
    }

    /**
     * Set the value of statute
     */
    public function setStatute($statute): self
    {
        $this->statute = $statute;

        return $this;
    }
}
