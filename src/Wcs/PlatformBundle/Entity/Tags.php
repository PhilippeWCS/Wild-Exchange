<?php

namespace Wcs\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags
 *
 * @ORM\Table(name="tags")
 * @ORM\Entity(repositoryClass="Wcs\PlatformBundle\Repository\TagsRepository")
 */
class Tags
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
     * @ORM\Column(name="IntituleTag", type="string", length=255)
     */
    private $intituleTag;


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
     * Set intituleTag
     *
     * @param string $intituleTag
     *
     * @return Tags
     */
    public function setIntituleTag($intituleTag)
    {
        $this->intituleTag = $intituleTag;

        return $this;
    }

    /**
     * Get intituleTag
     *
     * @return string
     */
    public function getIntituleTag()
    {
        return $this->intituleTag;
    }
}
