<?php
namespace src\model; 

use libs\system\Model; 
	
class CompteRepository extends Model{
	
	
	public function __construct(){
		parent::__construct();
    }



	public function getAll()
    {
        return $this->db->getRepository("Compte")->findAll();
    }

    public function ajouter1($compte)
    {
        $this->db->persist($compte);
        $this->db->flush($compte);
    }


}


?>