<?php
namespace src\model; 

use libs\system\Model; 
	
class ClientRepository extends Model{
	
	public function __construct(){
		parent::__construct();
    }

    public function getAll()
    {
        return $this->db->getRepository("Client")->findAll();
    }

    public function get($id)
    {
        return $this->db->getRepository("Client")->find(array("id"=>$id));
    }

    public function ajouter($client)
    {
        $this->db->persist($client);
        $this->db->flush($client);
    }

    public function update($client)
    {
        //le client de la base de donnes
        $p = $this->get($client->getId());
        /*modification des donnees de de client avec les infos
        du client passe en parametre cad $client*/
        $p->setNom($client->getNom());
        $p->setPrenom($client->getPrenom());
        $p->setCni($client->getCni());
        //$this->db->merge();
        $this->db->flush();
    }
}

?>