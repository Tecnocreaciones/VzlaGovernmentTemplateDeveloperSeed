<?php

namespace Pequiven\SEIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Gerencia
 *
 * @ORM\Table(name="seip_gerencia")
 * @ORM\Entity
 */
class Gerencia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updated_at", type="datetime",nullable=true)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * 
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /** Complejo
     * @var=\Pequiven\SEIPBundle\Entity\Complejo
     * @ORM\ManyToOne(targetEntity="\Pequiven\SEIPBundle\Entity\Complejo")
     * @ORM\JoinColumn(name="fk_complejo", referencedColumnName="id")
     */
    private $fkComplejo;

    /**
     * @var integer
     *
     * @ORM\Column(name="enabled", type="integer")
     */
    private $enabled;


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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Gerencia
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Gerencia
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Gerencia
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Set fkComplejo
     *
     * @param integer $fkComplejo
     * @return Gerencia
     */
    public function setFkComplejo($fkComplejo)
    {
        $this->fkComplejo = $fkComplejo;

        return $this;
    }

    /**
     * Get fkComplejo
     *
     * @return integer 
     */
    public function getFkComplejo()
    {
        return $this->fkComplejo;
    }

    /**
     * Set enabled
     *
     * @param integer $enabled
     * @return Gerencia
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return integer 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}