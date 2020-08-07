<?php

use libs\system\Controller;
use src\model\CompteRepository;


class CompteController extends Controller
{
           public function __construct()
           {
               parent::__construct();
           }

           public function ajout()
           {
              // return $this->view->load("compte/ajout");
               $comptedb = new CompteRepository;
            $data['listeCompte'] = $comptedb->getAll();
            return $this->view->load("compte/ajout", $data);
           }

            
          /* public function ajout1()
           {
               
            $comptedb = new CompteRepository;
            $data['listeCompte'] = $comptedb->getAll();
            return $this->view->load("Compte/ajout", $data);
           }*/


           public function ajouter1()
           {
               extract($_POST);
               $compte = new Compte();
               $compte->setNumagence($numagence);
               $compte->setNumcompte($numcompte);
               $compte->setClerib($rib);
               $compte->setDateOuverture($date);
               $compte->setMontantinitial($montant0);
               $compte->setFraisouverture($frais);
               $compte->setAgios($agios);
               $compte->setDatebloquage($date1);
               $compte->setDatedebloquage($date2);
               
               

               $comptedb = new CompteRepository();
               $comptedb->ajouter1($compte);
               return $this->view->redirect("Compte/ajout");
           }

}




?>