<?php

namespace App\Entity;

use App\Entity\Slider;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Link;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use App\Repository\SliderImageRepository;
use Symfony\Component\Serializer\Attribute\Groups;

#[ApiResource(
    operations: [
        new Get(normalizationContext: ['groups' => 'sliderImages:item']),
        new GetCollection(normalizationContext: ['groups' => 'sliderImages:list'])
    ],
)]
#[ORM\Entity(repositoryClass: SliderImageRepository::class)]
class SliderImage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['sections:item', 'sections:list'])]
    private ?int $id = null;

    #[ORM\Column(type: 'integer')]    
    #[Groups(['sliders:item', 'sliders:list'])]
    private int $position = 0;

    #[ORM\ManyToOne(targetEntity: Slider::class, inversedBy: 'images')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Slider $slider = null;

    #[ORM\ManyToOne(targetEntity: Image::class, inversedBy: 'sliderImages')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'RESTRICT')]
    #[Groups(['sliders:item', 'sliders:list'])]
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

    public function getSlider(): ?Slider
    {
        return $this->slider;
    }

    public function setSlider(?Slider $slider): self
    {
        $this->slider = $slider;
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