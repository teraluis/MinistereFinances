<?php

namespace AppBundle\Entity;

/**
 * Entreprises
 */
class Entreprises
{
    /**
     * @var integer
     */
    private $siret;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $denomination;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var \DateTime
     */
    private $creation;

    /**
     * @var string
     */
    private $directeur;

    /**
     * @var \DateTime
     */
    private $modification = 'CURRENT_TIMESTAMP';


    /**
     * Get siret
     *
     * @return integer
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Entreprises
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set denomination
     *
     * @param string $denomination
     *
     * @return Entreprises
     */
    public function setDenomination($denomination)
    {
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Get denomination
     *
     * @return string
     */
    public function getDenomination()
    {
        return $this->denomination;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Entreprises
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set creation
     *
     * @param \DateTime $creation
     *
     * @return Entreprises
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get creation
     *
     * @return \DateTime
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Set directeur
     *
     * @param string $directeur
     *
     * @return Entreprises
     */
    public function setDirecteur($directeur)
    {
        $this->directeur = $directeur;

        return $this;
    }

    /**
     * Get directeur
     *
     * @return string
     */
    public function getDirecteur()
    {
        return $this->directeur;
    }

    /**
     * Set modification
     *
     * @param \DateTime $modification
     *
     * @return Entreprises
     */
    public function setModification($modification)
    {
        $this->modification = $modification;

        return $this;
    }

    /**
     * Get modification
     *
     * @return \DateTime
     */
    public function getModification()
    {
        return $this->modification;
    }
}

