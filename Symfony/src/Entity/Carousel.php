<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\CarouselRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ApiResource]
#[ORM\Entity(repositoryClass: CarouselRepository::class)]
class Carousel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Position = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'carousels')]
    private ?Page $Page_Name = null;

    /**
     * @var Collection<int, CarouselImage>
     */
    #[ORM\OneToMany(targetEntity: CarouselImage::class, mappedBy: 'Carousel_Id', orphanRemoval: true)]
    private Collection $carouselImages;

    public function __construct()
    {
        $this->carouselImages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosition(): ?int
    {
        return $this->Position;
    }

    public function setPosition(int $Position): static
    {
        $this->Position = $Position;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getPageName(): ?Page
    {
        return $this->Page_Name;
    }

    public function setPageName(?Page $Page_Id): static
    {
        $this->Page_Name = $Page_Id;

        return $this;
    }

    /**
     * @return Collection<int, CarouselImage>
     */
    public function getCarouselImages(): Collection
    {
        return $this->carouselImages;
    }

    public function addCarouselImage(CarouselImage $carouselImage): static
    {
        if (!$this->carouselImages->contains($carouselImage)) {
            $this->carouselImages->add($carouselImage);
            $carouselImage->setCarouselId($this);
        }

        return $this;
    }

    public function removeCarouselImage(CarouselImage $carouselImage): static
    {
        if ($this->carouselImages->removeElement($carouselImage)) {
            // set the owning side to null (unless already changed)
            if ($carouselImage->getCarouselId() === $this) {
                $carouselImage->setCarouselId(null);
            }
        }

        return $this;
    }
}
