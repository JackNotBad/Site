<?php

namespace App\Entity;

use App\Entity\Page;
use ApiPlatform\Metadata\Get;
use App\Entity\CarouselImage;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\CarouselRepository;
use ApiPlatform\Metadata\GetCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: CarouselRepository::class)]
#[ApiResource(
    operations: [
        new Get(normalizationContext: ['groups' => 'carousel:item']),
        new GetCollection(normalizationContext: ['groups' => 'carousel:list'])
    ],
)]
#[ApiFilter(SearchFilter::class)]
class Carousel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['carousel:item', 'carousel:list'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['carousel:item', 'carousel:list'])]
    private ?string $title = null;

    #[ORM\ManyToOne(targetEntity: Page::class, inversedBy: 'carousels')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Groups(['carousel:item', 'carousel:list'])]
    private ?Page $page = null;

    // #[AppAssert\ImagesCount(expectedCount: 7, message: 'Le carousel doit contenir exactement %expected% images. Actuellement : %count%.')]
    #[ORM\OneToMany(mappedBy: 'carousel', targetEntity: CarouselImage::class, cascade: ['persist','remove'], orphanRemoval: true)]
    #[Groups(['carousel:item', 'carousel:list'])]
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
