<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity
 * @Table(name="Client")
*/
class Client
{
    /** @Id 
     * @Column(type="integer") 
     * @GeneratedValue 
    */
    private $id;
    /** 
     * @Column(type="string") 
    */
    private $nom;
    /**
     * @Column(type="string") 
    */
    private $prenom;
    /** 
     * @Column(type="string") 
    */
    private $adresseclient;
    /** 
     * @Column(type="string") 
    */
    private $emailclient;
    /** 
     * @Column(type="string") 
    */
    private $telephoneclient;
    /** 
     * @Column(type="string") 
    */
    private $profession;
    /** 
     * @Column(type="string") 
    */
    private $cni;
    /** 
     * @Column(type="string") 
    */
    private $datenaissance;
    /**
     *  @Column(type="string") 
    */
    private $salaireclient;
    /** 
     * @Column(type="string") 
    */
    private $nomemployeur;
    /** 
     * @Column(type="string") 
    */
    private $raisonsocial;
    /** 
     * @Column(type="string") 
    */
    private $telephoneemploy;
    /** 
     * @Column(type="string")
    */
    private $adresseemploy;
    /** 
     * @Column(type="string") 
    */
    private $ninea;
    /** 
     * @Column(type="string") 
     */
    private $emailemploy;
    /**
     * one Client have many Compte. This is the owning side.
     * @OneToMany(targetEntity="Compte", mappedBy="client")
     */
    private $comptes;
    
    public function __construct()
    {

    }
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of adresseclient
     */ 
    public function getAdresseclient()
    {
        return $this->adresseclient;
    }

    /**
     * Set the value of adresseclient
     *
     * @return  self
     */ 
    public function setAdresseclient($adresseclient)
    {
        $this->adresseclient = $adresseclient;

        return $this;
    }

    /**
     * Get the value of emailclient
     */ 
    public function getEmailclient()
    {
        return $this->emailclient;
    }

    /**
     * Set the value of emailclient
     *
     * @return  self
     */ 
    public function setEmailclient($emailclient)
    {
        $this->emailclient = $emailclient;

        return $this;
    }

    /**
     * Get the value of telephoneclient
     */ 
    public function getTelephoneclient()
    {
        return $this->telephoneclient;
    }

    /**
     * Set the value of telephoneclient
     *
     * @return  self
     */ 
    public function setTelephoneclient($telephoneclient)
    {
        $this->telephoneclient = $telephoneclient;

        return $this;
    }

    /**
     * Get the value of profession
     */ 
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set the value of profession
     *
     * @return  self
     */ 
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get the value of cni
     */ 
    public function getCni()
    {
        return $this->cni;
    }

    /**
     * Set the value of cni
     *
     * @return  self
     */ 
    public function setCni($cni)
    {
        $this->cni = $cni;

        return $this;
    }

    /**
     * Get the value of datenaissance
     */ 
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set the value of datenaissance
     *
     * @return  self
     */ 
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get the value of salaireclient
     */ 
    public function getSalaireclient()
    {
        return $this->salaireclient;
    }

    /**
     * Set the value of salaireclient
     *
     * @return  self
     */ 
    public function setSalaireclient($salaireclient)
    {
        $this->salaireclient = $salaireclient;

        return $this;
    }

    /**
     * Get the value of dnomemployeur
     */ 
    public function getNomemployeur()
    {
        return $this->nomemployeur;
    }

    /**
     * Set the value of dnomemployeur
     *
     * @return  self
     */ 
    public function setNomemployeur($nomemployeur)
    {
        $this->nomemployeur = $nomemployeur;

        return $this;
    }

    /**
     * Get the value of raisonsocial
     */ 
    public function getRaisonsocial()
    {
        return $this->raisonsocial;
    }

    /**
     * Set the value of raisonsocial
     *
     * @return  self
     */ 
    public function setRaisonsocial($raisonsocial)
    {
        $this->raisonsocial = $raisonsocial;

        return $this;
    }

    /**
     * Get the value of telephoneemploy
     */ 
    public function getTelephoneemploy()
    {
        return $this->telephoneemploy;
    }

    /**
     * Set the value of telephoneemploy
     *
     * @return  self
     */ 
    public function setTelephoneemploy($telephoneemploy)
    {
        $this->telephoneemploy = $telephoneemploy;

        return $this;
    }

    /**
     * Get the value of adresseemploy
     */ 
    public function getAdresseemploy()
    {
        return $this->adresseemploy;
    }

    /**
     * Set the value of adresseemploy
     *
     * @return  self
     */ 
    public function setAdresseemploy($adresseemploy)
    {
        $this->adresseemploy = $adresseemploy;

        return $this;
    }

    /**
     * Get the value of ninea
     */ 
    public function getNinea()
    {
        return $this->ninea;
    }

    /**
     * Set the value of ninea
     *
     * @return  self
     */ 
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;

        return $this;
    }

    /**
     * Get the value of emailemploy
     */ 
    public function getEmailemploy()
    {
        return $this->emailemploy;
    }

    /**
     * Set the value of emailemploy
     *
     * @return  self
     */ 
    public function setEmailemploy($emailemploy)
    {
        $this->emailemploy = $emailemploy;

        return $this;
    }

    /**
     * Get the value of duree
     */ 
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @return  self
     */ 
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get one Client have many Compte. This is the owning side.
     */ 
    public function getComptes()
    {
        return $this->comptes;
    }

    /**
     * Set one Client have many Compte. This is the owning side.
     *
     * @return  self
     */ 
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;

        return $this;
    }
}

?>