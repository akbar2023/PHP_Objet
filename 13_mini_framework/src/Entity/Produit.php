<?php
// src/Entity/Produit.php

namespace Entity;

class Produit {

    private $id_produit;
    private $reference;
    private $categorie;
    private $titre;
    private $description;
    private $couleur;
    private $taille;
    private $public;
    private $photo;
    private $prix;
    private $stock;

    /* setter / getter */

    public function setId_Produit($id) {
        $this -> id_produit = $id;
    }

    public function getId_Produit(){
        return $this -> id_produit;
    }

    /**
    * Get the value of reference
    */
   public function getReference()
   {
       return $this->reference;
   }  

   /**
    * Set the value of reference
    *
    * @return  self
    */

   public function setReference($reference)
   {
       $this->reference = $reference;        return $this;
   }    
   
   /**
    * Get the value of categorie
    */
   public function getCategorie()
   {
       return $this->categorie;
   }    /**

    * Set the value of categorie
    *
    * @return  self
    */

   public function setCategorie($categorie){
       $this->categorie = $categorie;        return $this;
   }    
   
   /**
    * Get the value of titre
    */
   public function getTitre(){
       return $this->titre;
   }    
   
   /**
    * Set the value of titre
    *
    * @return  self
    */

   public function setTitre($titre){
       $this->titre = $titre;        
       return $this;
   }   
   
   /**
    * Get the value of description
    */
    public function getDescription(){
        return $this->description;
   }    
   
   /**
    * Set the value of description
    *
    * @return  self
    */

   public function setDescription($description)

   {

       $this->description = $description;        return $this;

   }    
   
   /**
    * Get the value of couleur
    */
   public function getCouleur(){
       return $this->couleur;
   }    /**

    * Set the value of couleur

    *

    * @return  self

    */

   public function setCouleur($couleur)

   {

       $this->couleur = $couleur;        return $this;

   }    /**

    * Get the value of taille

    */

   public function getTaille()

   {

       return $this->taille;

   }    /**

    * Set the value of taille

    *

    * @return  self

    */

   public function setTaille($taille)

   {

       $this->taille = $taille;        return $this;

   }    /**

    * Get the value of public

    */

   public function getPublic()

   {

       return $this->public;

   }    /**

    * Set the value of public

    *

    * @return  self

    */

   public function setPublic($public)

   {

       $this->public = $public;        return $this;

   }    /**

    * Get the value of photo

    */

   public function getPhoto()

   {

       return $this->photo;

   }    /**

    * Set the value of photo

    *

    * @return  self

    */

   public function setPhoto($photo)

   {

       $this->photo = $photo;        return $this;

   }    /**

    * Get the value of prix

    */

   public function getPrix()

   {

       return $this->prix;

   }    /**

    * Set the value of prix

    *

    * @return  self

    */

   public function setPrix($prix)

   {

       $this->prix = $prix;        return $this;

   }    /**

    * Get the value of stock

    */

   public function getStock()

   {

       return $this->stock;

   }    /**

    * Set the value of stock

    *

    * @return  self

    */

   public function setStock($stock)

   {

       $this->stock = $stock;        return $this;

   }




}