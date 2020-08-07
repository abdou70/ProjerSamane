  <?php

use libs\system\Controller;
use src\model\ClientRepository;

class ClientController extends Controller
{
           public function __construct()
           {
               parent::__construct();
           }

           public function ajout()
           {
               
            $clientdb = new ClientRepository;
            $data['listeClient'] = $clientdb->getAll();
            return $this->view->load("client/ajout", $data);
           }


           public function ajouter()
           {
               extract($_POST);
               $client = new Client();
               $client->setNom($nomclient);
               $client->setPrenom($prenomclient);
               $client->setAdresseclient($adresseclient);
               $client->setEmailclient($emailclient);
               $client->setTelephoneclient($phoneclient);
               $client->setProfession($professionclient);
               $client->setCni($numident);
               $client->setDatenaissance($datenais);
               $client->setSalaireclient($salaireclient);
               $client->setNomemployeur($moral);
               $client->setRaisonsocial($raismoral);
               $client->setTelephoneemploy($telemoral);
               $client->setAdresseemploy($adresemoral);
               $client->setNinea($ninea);
               $client->setEmailemploy($emailmoral);
               

               $clientdb = new ClientRepository();
               $clientdb->ajouter($client);
               return $this->view->redirect("Client/ajout");
           }


           public function edit($id)
           {

            $clientdb = new ClientRepository;
            $data['client'] = $clientdb->get($id);
            $data['listeClient'] = $clientdb->getAll();
             return $this->view->load("client/edit", $data);
           }

           public function update()
           {
            extract($_POST);
               $client = new Client();
               $client->setId($id);
               $client->setNom($nomclient);
               $client->setPrenom($prenomclient);
               //$client->setAdresseclient($adresseclient);
               //$client->setEmailclient($emailclient);
               //$client->setTelephoneclient($phoneclient);
               //$client->setProfession($professionclient);
               $client->setCni($numident);
               //$client->setDatenaissance($datenais);
               //$client->setSalaireclient($salaireclient);
               //$client->setNomemployeur($moral);
              // $client->setRaisonsocial($raismoral);
              // $client->setTelephoneemploy($telemoral);
              // $client->setAdresseemploy($adresemoral);
              // $client->setNinea($ninea);
              // $client->setEmailemploy($emailmoral);
               

               $clientdb = new ClientRepository();
               $clientdb->update($client);
              return $this->view->redirect("Client/ajout");
           }
}




?>