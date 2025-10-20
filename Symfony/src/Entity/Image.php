<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Url = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Alt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'Image_Id')]
    private ?CarouselImage $carouselImage = null;

    #[ORM\ManyToOne(inversedBy: 'Image_Id')]
    private ?Slider $slider = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->Url;
    }

    public function setUrl(string $Url): static
    {
        $this->Url = $Url;

        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->Alt;
    }

    public function setAlt(?string $Alt): static
    {
        $this->Alt = $Alt;

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

    public function getCarouselImage(): ?CarouselImage
    {
        return $this->carouselImage;
    }

    public function setCarouselImage(?CarouselImage $carouselImage): static
    {
        $this->carouselImage = $carouselImage;

        return $this;
    }

    public function getSlider(): ?Slider
    {
        return $this->slider;
    }

    public function setSlider(?Slider $slider): static
    {
        $this->slider = $slider;

        return $this;
    }
}
