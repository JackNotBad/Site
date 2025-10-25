<?php

namespace App\Entity;

use ApiPlatform\Metadata\Get;
use App\Entity\CarouselImage;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ImageRepository;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[ApiResource(
    operations: [
        new Get(normalizationContext: ['groups' => 'image:item']),
        new GetCollection(normalizationContext: ['groups' => 'image:list'])
    ],
)]
#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['image:item', 'image:list'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['sliders:item', 'sliders:list','carousel:item','carousel:list','sections:item', 'sections:list'])]
    private ?string $url = null;

    #[ORM\Column(length: 255, nullable: true)]    
    #[Groups(['sliders:item', 'sliders:list','carousel:item','carousel:list','sections:item', 'sections:list'])]
    private ?string $alt = null;

    #[ORM\Column(type: 'datetime_immutable')]
    #[Groups(['image:item', 'image:list'])]
    private \DateTimeImmutable $createdAt;

    #[ORM\OneToMany(mappedBy: 'image', targetEntity: CarouselImage::class, cascade: ['persist', 'remove'])]
    private Collection $carouselImages;

    #[ORM\OneToMany(mappedBy: 'image', targetEntity: SliderImage::class, cascade: ['persist', 'remove'])]
    private Collection $sliderImages;

    #[ORM\ManyToOne(inversedBy: 'Image')]
    private ?DetailsSectionImage $detailsSectionImage = null;

    /**
     *
     * @var UploadedFile|null
     */
    #[Assert\File(
        maxSize: '8M',
        mimeTypes: ['image/png', 'image/jpeg', 'image/webp', 'image/gif'],
        mimeTypesMessage: 'Veuillez uploader une image valide (png, jpg, webp, gif).'
    )]
    private ?UploadedFile $file = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));
        $this->carouselImages = new ArrayCollection();
        $this->carouselImages = new ArrayCollection();
    }

    public function getCarouselImages(): Collection
    {
        return $this->carouselImages;
    }

    public function addCarouselImage(CarouselImage $ci): self
    {
        if (!$this->carouselImages->contains($ci)) {
            $this->carouselImages->add($ci);
            $ci->setImage($this); // maintenir les deux côtés cohérents
        }
        return $this;
    }

    public function removeCarouselImage(CarouselImage $ci): self
    {
        if ($this->carouselImages->removeElement($ci)) {
            if ($ci->getImage() === $this) {
                $ci->setImage(null);
            }
        }
        return $this;
    }

    public function getSliderImages(): Collection
    {
        return $this->carouselImages;
    }

    public function addSliderImage(SliderImage $ci): self
    {
        if (!$this->sliderImages->contains($ci)) {
            $this->sliderImages->add($ci);
            $ci->setImage($this);
        }
        return $this;
    }

    public function removeSliderImage(SliderImage $ci): self
    {
        if ($this->sliderImages->removeElement($ci)) {
            if ($ci->getImage() === $this) {
                $ci->setImage(null);
            }
        }
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(?string $alt): self
    {
        $this->alt = $alt;
        return $this;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setFile(?UploadedFile $file): self
    {
        $this->file = $file;

        if ($file !== null) {
            $this->createdAt = new \DateTimeImmutable();
        }

        return $this;
    }

    public function getFile(): ?UploadedFile
    {
        return $this->file;
    }

    public function __toString(): string
    {
        if ($this->getAlt()) {
            return (string)$this->getAlt();
        }

        if ($this->getUrl()) {
            $parts = explode('/', $this->getUrl());
            return (string)end($parts);
        }

        return (string)($this->getId() ?? '');
    }

    public function getDetailsSectionImage(): ?DetailsSectionImage
    {
        return $this->detailsSectionImage;
    }

    public function setDetailsSectionImage(?DetailsSectionImage $detailsSectionImage): static
    {
        $this->detailsSectionImage = $detailsSectionImage;

        return $this;
    }
}
