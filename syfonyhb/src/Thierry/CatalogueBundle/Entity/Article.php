<?php

namespace Thierry\CatalogueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Article
 *
 * @ORM\Table(name="cat_article")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Thierry\CatalogueBundle\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     * * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Le titre doit faire au min {{ limit }} carracteres",
     *      maxMessage = "Le titre doit faire au max {{ limit }} carracteres"
     *  )
     */
    private $titre;

    /**
     * @var string
     * @Assert\NotBlank(message = "Contenu Vide")
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="publication", type="boolean")
     */
    private $publication;
    
    /**
     * @var Image()
     * @Assert\valid()
     * @ORM\OneToOne(targetEntity="Image", cascade = {"persist", "remove"})
     */
    private $image;
//Pour rendre la liaison Obligatoire: @ORM\JoinColumn(nullable=false)
    
    /**
     *  @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Categorie", inversedBy="articles")
     * @ORM\JoinTable(name="cat_article_cat_categorie")
     *  
     */
    private $categories;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     *
     * @ORM\OneTomany(targetEntity="Note", mappedBy="article", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false);
     */
    private $notes; 
    
 /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modification", type="datetime")
     */
    private $date_modification; 
    
    private $resume;
    
    function __construct() {
        $this->publication = true;
        $this->date = new \DateTime();
        $this->date_modification = new \DateTime();
        
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->notes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    //Getter & Setter
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set publication
     *
     * @param boolean $publication
     *
     * @return Article
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return boolean
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set image
     *
     * @param \Thierry\CatalogueBundle\Entity\Image $image
     *
     * @return Article
     */
    public function setImage(\Thierry\CatalogueBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Thierry\CatalogueBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
    
    function getPrix() {
        return $this->prix;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    
    /**
     * Add category
     *
     * @param \Thierry\CatalogueBundle\Entity\Categorie $category
     *
     * @return Article
     */
    public function addCategory(\Thierry\CatalogueBundle\Entity\Categorie $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \Thierry\CatalogueBundle\Entity\Categorie $category
     */
    public function removeCategory(\Thierry\CatalogueBundle\Entity\Categorie $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add notes
     *
     * @param \Thierry\CatalogueBundle\Entity\Note $notes
     *
     * @return Article
     */
    public function addNotes(\Thierry\CatalogueBundle\Entity\Note $notes)
    {
        $this->notes[] = $notes;

        return $this;
    }

    /**
     * Remove notes
     *
     * @param \Thierry\CatalogueBundle\Entity\Note $notes
     */
    public function removeNotes(\Thierry\CatalogueBundle\Entity\Note $notes)
    {
        $this->notes->removeElement($notes);
    }

    /**
     * Get notes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set dateModification
     *
     * @param \DateTime $dateModification
     *
     * @return Article
     */
    public function setDateModification($dateModification)
    {
        $this->date_modification = $dateModification;

        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime
     */
    public function getDateModification()
    {
        return $this->date_modification;
    }
    
    //aUTRE METHODES
    
    /**
    * @ORM\PreUpdate
    */
   public function beforeUpdate()
   {        
       $this->setDateModification(new \DateTime());
   }
   
   function getResume() {
       return $this->resume;
   }

   function setResume($resume) {
       $this->resume = $resume;
   }


}
