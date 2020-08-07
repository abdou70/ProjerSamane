<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="Compte")
 **/
class Compte
{
    /** @Id 
     * @Column(type="integer") 
     * @GeneratedValue 
    */
    private $id;
    /** 
     * @Column(type="string") 
    */
    private $numagence;
    /** 
     * @Column(type="string") 
    */
    private $numcompte;
    /** 
     * @Column(type="string") 
    */
    private $clerib;
    /** 
     * @Column(type="string")
    */
    private $dateOuverture;
    /** 
     * @Column(type="string") 
    */
    private $montantinitial;
    /** 
     * @Column(type="integer") 
    */
    private $fraisouverture;
    /** 
     * @Column(type="string") 
    */
    private $agios;
    /** 
     * @Column(type="string")
    */
    private $datebloquage;
    /** 
     * @Column(type="string")
    */
    private $datedebloquage;
    /**
     * Many Compte have one Client. This is the owning side.
     * @ManyToOne(targetEntity="Client", inversedBy="comptes")
     * @JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;
    
    public function __construct()
    {
        $this->formations = new ArrayCollection();
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
     * Get the value of numagence
     */ 
    public function getNumagence()
    {
        return $this->numagence;
    }

    /**
     * Set the value of numagence
     *
     * @return  self
     */ 
    public function setNumagence($numagence)
    {
        $this->numagence = $numagence;

        return $this;
    }

    /**
     * Get the value of numcompte
     */ 
    public function getNumcompte()
    {
        return $this->numcompte;
    }

    /**
     * Set the value of numcompte
     *
     * @return  self
     */ 
    public function setNumcompte($numcompte)
    {
        $this->numcompte = $numcompte;

        return $this;
    }

    /**
     * Get the value of clerib
     */ 
    public function getClerib()
    {
        return $this->clerib;
    }

    /**
     * Set the value of clerib
     *
     * @return  self
     */ 
    public function setClerib($clerib)
    {
        $this->clerib = $clerib;

        return $this;
    }

    /**
     * Get the value of dateOuverture
     */ 
    public function getDateOuverture()
    {
        return $this->dateOuverture;
    }

    /**
     * Set the value of dateOuverture
     *
     * @return  self
     */ 
    public function setDateOuverture($dateOuverture)
    {
        $this->dateOuverture = $dateOuverture;

        return $this;
    }

    /**
     * Get the value of fraisouverture
     */ 
    public function getFraisouverture()
    {
        return $this->fraisouverture;
    }

    /**
     * Set the value of fraisouverture
     *
     * @return  self
     */ 
    public function setFraisouverture($fraisouverture)
    {
        $this->fraisouverture = $fraisouverture;

        return $this;
    }

    /**
     * Get the value of agios
     */ 
    public function getAgios()
    {
        return $this->agios;
    }

    /**
     * Set the value of agios
     *
     * @return  self
     */ 
    public function setAgios($agios)
    {
        $this->agios = $agios;

        return $this;
    }

    /**
     * Get the value of datebloquage
     */ 
    public function getDatebloquage()
    {
        return $this->datebloquage;
    }

    /**
     * Set the value of datebloquage
     *
     * @return  self
     */ 
    public function setDatebloquage($datebloquage)
    {
        $this->datebloquage = $datebloquage;

        return $this;
    }

    /**
     * Get the value of datedebloquage
     */ 
    public function getDatedebloquage()
    {
        return $this->datedebloquage;
    }

    /**
     * Set the value of datedebloquage
     *
     * @return  self
     */ 
    public function setDatedebloquage($datedebloquage)
    {
        $this->datedebloquage = $datedebloquage;

        return $this;
    }

    /**
     * Get many Compte have one Client. This is the owning side.
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set many Compte have one Client. This is the owning side.
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get the value of montantinitial
     */ 
    public function getMontantinitial()
    {
        return $this->montantinitial;
    }

    /**
     * Set the value of montantinitial
     *
     * @return  self
     */ 
    public function setMontantinitial($montantinitial)
    {
        $this->montantinitial = $montantinitial;

        return $this;
    }
}

?>