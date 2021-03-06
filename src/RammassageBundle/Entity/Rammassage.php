<?php

namespace RammassageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rammassage
 *
 * @ORM\Table(name="rammassage")
 * @ORM\Entity(repositoryClass="RammassageBundle\Repository\RammassageRepository")
 */
class Rammassage
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;


    /**
     * @ORM\ManyToOne(targetEntity="AuthentificationBundle\Entity\user",inversedBy="ram")
     * @ORM\JoinColumn(name="id_PNC" ,  referencedColumnName="id")
     */
    private $pncs;
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Rammassage
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Rammassage
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
     * Set pncs
     *
     * @param \AuthentificationBundle\Entity\user $pncs
     *
     * @return Rammassage
     */
    public function setPncs(\AuthentificationBundle\Entity\user $pncs = null)
    {
        $this->pncs = $pncs;

        return $this;
    }

    /**
     * Get pncs
     *
     * @return \AuthentificationBundle\Entity\user
     */
    public function getPncs()
    {
        return $this->pncs;
    }
}
