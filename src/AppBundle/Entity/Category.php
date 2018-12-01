<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="name", type="text")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="stubName", type="text")
     */
    private $stubName;


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
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set projectFk
     *
     * @param \AppBundle\Entity\Project $projectFk
     *
     * @return Category
     */
    public function setProjectFk(\AppBundle\Entity\Project $projectFk = null)
    {
        $this->projectFk = $projectFk;

        return $this;
    }

    /**
     * Get projectFk
     *
     * @return \AppBundle\Entity\Project
     */
    public function getProjectFk()
    {
        return $this->projectFk;
    }


    /**
     * Set stubName
     *
     * @param string $stubName
     *
     * @return Category
     */
    public function setStubName($stubName)
    {
        $this->stubName = $stubName;

        return $this;
    }

    /**
     * Get stubName
     *
     * @return string
     */
    public function getStubName()
    {
        return $this->stubName;
    }
}
