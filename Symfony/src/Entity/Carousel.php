<?php

namespace App\Entity;

use App\Repository\CarouselRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ApiResource]
#[ORM\Entity(repositoryClass: CarouselRepository::class)]
class Carousel
{
    #[ORM\Id, ORM\GeneratedValue, ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;
    
    #[ORM\ManyToOne(targetEntity: Page::class, inversedBy: 'carousels')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Page $page = null;

    #[ORM\OneToMany(mappedBy: 'carousel', targetEntity: CarouselImage::class, cascade: ['persist','remove'], orphanRemoval: true)]
    private Collection $images;

    public function __construct()
    {
        $this->images = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getPage(): ?Page
    {
        return $this->page;
    }

    public function setPage(?Page $page): self
    {
        $this->page = $page;
        return $this;
    }

    /** @return Collection|CarouselImage[] */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(CarouselImage $ci): self
    {
        if (!$this->images->contains($ci)) {
            $this->images[] = $ci;
            $ci->setCarousel($this);
        }
        return $this;
    }

    public function removeImage(CarouselImage $ci): self
    {
        if ($this->images->removeElement($ci)) {
            if ($ci->getCarousel() === $this) {
                $ci->setCarousel(null);
            }
        }
        return $this;
    }
}
