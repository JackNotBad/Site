<?php

namespace App\Entity;

use App\Entity\Page;
use App\Entity\Image;
use App\Entity\SliderImage;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Link;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiFilter;
use App\Repository\SliderRepository;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use Symfony\Component\Serializer\Attribute\Groups;

#[ApiResource(
    operations: [
        new Get(normalizationContext: ['groups' => 'sliders:item']),
        new GetCollection(normalizationContext: ['groups' => 'sliders:list'])
    ],
)]
#[ORM\Entity(repositoryClass: SliderRepository::class)]
#[ApiFilter(SearchFilter::class)]
class Slider
{
    #[ORM\Id, ORM\GeneratedValue, ORM\Column]
    #[Groups(['sliders:item', 'sliders:list'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['sections:list','sliders:item','sliders:list'])]
    private ?string $title = null;

    #[ORM\ManyToOne(targetEntity: Page::class, inversedBy: 'sliders')]
    #[Groups(['sliders:item', 'sliders:list'])]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Page $page = null;

    /**
     * @var Collection<int, SliderImage>
     */
    // #[AppAssert\ImagesCount(expectedCount: 5, message: 'Le slider doit contenir exactement %expected% images. Actuellement : %count%.')]
    #[ORM\OneToMany(mappedBy: 'slider', targetEntity: SliderImage::class, cascade: ['persist','remove'], orphanRemoval: true)]
    #[Groups(['sliders:item', 'sliders:list'])]
    private Collection $images;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['sliders:item', 'sliders:list'])]
    private ?string $text = null;

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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): static
    {
        $this->text = $text;

        return $this;
    }
}