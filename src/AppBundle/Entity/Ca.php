<?php

namespace AppBundle\Entity;

/**
 * Ca
 */
class Ca
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $annee;

    /**
     * @var \DateTime
     */
    private $modification = 'CURRENT_TIMESTAMP';

    /**
     * @var \AppBundle\Entity\Entreprises
     */
    private $siret;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set annee
     *
     * @param \DateTime $annee
     *
     * @return Ca
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return \DateTime
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set modification
     *
     * @param \DateTime $modification
     *
     * @return Ca
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

    /**
     * Set siret
     *
     * @param \AppBundle\Entity\Entreprises $siret
     *
     * @return Ca
     */
    public function setSiret(\AppBundle\Entity\Entreprises $siret = null)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return \AppBundle\Entity\Entreprises
     */
    public function getSiret()
    {
        return $this->siret;
    }
}

