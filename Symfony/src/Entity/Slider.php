<?php

namespace App\Entity;

use App\Repository\SliderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ApiResource]
#[ORM\Entity(repositoryClass: SliderRepository::class)]
class Slider
{
    #[ORM\Id, ORM\GeneratedValue, ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\ManyToOne(targetEntity: Page::class, inversedBy: 'sliders')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Page $page = null;

    #[ORM\OneToMany(mappedBy: 'slider', targetEntity: SliderImage::class, cascade: ['persist','remove'], orphanRemoval: true)]
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

    /** @return Collection|SliderImage[] */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(SliderImage $si): self
    {
        if (!$this->images->contains($si)) {
            $this->images[] = $si;
            $si->setSlider($this);
        }
        return $this;
    }

    public function removeImage(SliderImage $si): self
    {
        if ($this->images->removeElement($si)) {
            if ($si->getSlider() === $this) {
                $si->setSlider(null);
            }
        }
        return $this;
    }
}