<?php

namespace App\Entity;

use App\Entity\Image;
use App\Entity\Carousel;
use ApiPlatform\Metadata\Get;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use App\Repository\CarouselImageRepository;
use Symfony\Component\Serializer\Attribute\Groups;

#[ApiResource(
    operations: [
        new Get(normalizationContext: ['groups' => 'carouselImage:item']),
        new GetCollection(normalizationContext: ['groups' => 'carouselImage:list'])
    ],
)]
#[ORM\Entity(repositoryClass: CarouselImageRepository::class)]
class CarouselImage
{
    #[ORM\Id, ORM\GeneratedValue, ORM\Column]
    #[Groups(['carousel:item','carousel:list'])]
    private ?int $id = null;

    #[ORM\Column(type: 'integer')]    
    #[Groups(['carousel:item','carousel:list'])]
    private int $position = 0;

    #[ORM\ManyToOne(targetEntity: Carousel::class, inversedBy: 'images')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Carousel $carousel = null;

    #[ORM\ManyToOne(targetEntity: Image::class, inversedBy: 'carouselImages')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'RESTRICT')]
    #[Groups(['carousel:item','carousel:list'])]
    private ?Image $image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;
        return $this;
    }

    public function getCarousel(): ?Carousel
    {
        return $this->carousel;
    }

    public function setCarousel(?Carousel $carousel): self
    {
        $this->carousel = $carousel;
        return $this;
    }

    public function getImage(): ?Image
    {
        return $this->image;
    }

    public function setImage(?Image $image): self
    {
        $this->image = $image;
        return $this;
    }
}