<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\SliderRepository;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ApiResource]
#[ORM\Entity(repositoryClass: SliderRepository::class)]
class Slider
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Position = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    /**
     * @var Collection<int, Image>
     */
    #[ORM\OneToMany(targetEntity: Image::class, mappedBy: 'slider')]
    private Collection $Image_Id;

    public function __construct()
    {
        $this->Image_Id = new ArrayCollection();
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

    /**
     * @return Collection<int, Image>
     */
    public function getImageId(): Collection
    {
        return $this->Image_Id;
    }

    public function addImageId(Image $imageId): static
    {
        if (!$this->Image_Id->contains($imageId)) {
            $this->Image_Id->add($imageId);
            $imageId->setSlider($this);
        }

        return $this;
    }

    public function removeImageId(Image $imageId): static
    {
        if ($this->Image_Id->removeElement($imageId)) {
            // set the owning side to null (unless already changed)
            if ($imageId->getSlider() === $this) {
                $imageId->setSlider(null);
            }
        }

        return $this;
    }
}
