<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commentaires
 *
 * @ORM\Table(name="commentaires")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\commentairesRepository")
 */
class commentaires
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
     * @ORM\Column(name="pseudo", type="string", length=255)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaires", type="text")
     */
    private $commentaires;

    /**
     * @var bool
     *
     * @ORM\Column(name="isvalid", type="boolean")
     */
    private $isvalid;

    /**
     * @var string
     *
     * @ORM\Column(name="idarticle", type="string", length=255)
     */
    private $idarticle;


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
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return commentaires
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set commentaires
     *
     * @param string $commentaires
     *
     * @return commentaires
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Get commentaires
     *
     * @return string
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set isvalid
     *
     * @param boolean $isvalid
     *
     * @return commentaires
     */
    public function setIsvalid($isvalid)
    {
        $this->isvalid = $isvalid;

        return $this;
    }

    /**
     * Get isvalid
     *
     * @return bool
     */
    public function getIsvalid()
    {
        return $this->isvalid;
    }

    /**
     * Set idarticle
     *
     * @param string $idarticle
     *
     * @return commentaires
     */
    public function setIdarticle($idarticle)
    {
        $this->idarticle = $idarticle;

        return $this;
    }

    /**
     * Get idarticle
     *
     * @return string
     */
    public function getIdarticle()
    {
        return $this->idarticle;
    }

    public function __construct()
    {
        $this->isvalid = false;
    }
}

