<?php

namespace App\Entity;

use App\Entity\Image;
use ApiPlatform\Metadata\Get;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use App\Repository\DetailsSectionImageRepository;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: DetailsSectionImageRepository::class)]
#[ApiResource(
    operations: [
        new Get(normalizationContext: ['groups' => 'detailsImage:item']),
        new GetCollection(normalizationContext: ['groups' => 'detailsImage:list'])
    ],
)]
#[ApiFilter(SearchFilter::class)]
class DetailsSectionImage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['sections:item', 'sections:list','detailsImage:item','detailsImage:list'])]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['detailsImage:item', 'detailsImage:list','sections:item', 'sections:list'])]
    private ?int $position = null;

    /**
     * @var Collection<int, Image>
     */
    #[ORM\OneToMany(targetEntity: Image::class, mappedBy: 'detailsSectionImage')]
    #[Groups(['sections:item', 'sections:list'])]
    private Collection $Image;

    #[ORM\ManyToOne(inversedBy: 'detailsSectionImages')]
    private ?Section $Section = null;

    public function __construct()
    {
        $this->Image = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): static
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return Collection<int, Image>
     */
    public function getImage(): Collection
    {
        return $this->Image;
    }

    public function addImage(Image $image): static
    {
        if (!$this->Image->contains($image)) {
            $this->Image->add($image);
            $image->setDetailsSectionImage($this);
        }

        return $this;
    }

    public function removeImage(Image $image): static
    {
        if ($this->Image->removeElement($image)) {
            if ($image->getDetailsSectionImage() === $this) {
                $image->setDetailsSectionImage(null);
            }
        }

        return $this;
    }

    public function getSection(): ?Section
    {
        return $this->Section;
    }

    public function setSection(?Section $Section): static
    {
        $this->Section = $Section;

        return $this;
    }
}
