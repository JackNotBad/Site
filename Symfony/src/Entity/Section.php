<?php

namespace App\Entity;

use App\Entity\Page;
use ApiPlatform\Metadata\Get;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\SectionRepository;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: SectionRepository::class)]
#[ApiResource(
    operations: [
        new Get(normalizationContext: ['groups' => 'sections:item']),
        new GetCollection(normalizationContext: ['groups' => 'sections:list'])
    ],
)]
#[ApiFilter(SearchFilter::class)]
class Section
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['sections:item', 'sections:list'])]
    private ?string $Title = null;

    #[ORM\Column(length: 1000, nullable: true)]
    #[Groups(['sections:item', 'sections:list'])]
    private ?string $Text = null;

    #[ORM\Column]
    #[Groups(['sections:item', 'sections:list'])]
    private ?int $Position = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'sections')]
    private ?Page $Page_Id = null;

    #[ORM\ManyToOne(targetEntity: Image::class, cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: true)]
    #[Groups(['sections:item', 'sections:list'])]
    private ?Image $Image_Id = null;

    /**
     * @var Collection<int, DetailsSectionImage>
     */
    #[ORM\OneToMany(targetEntity: DetailsSectionImage::class, mappedBy: 'Section')]
    #[Groups(['sections:item', 'sections:list'])]
    private Collection $detailsSectionImages;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));
        $this->detailsSectionImages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): static
    {
        $this->Title = $Title;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->Text;
    }

    public function setText(?string $Text): static
    {
        $this->Text = $Text;

        return $this;
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

    public function getPageId(): ?Page
    {
        return $this->Page_Id;
    }

    public function setPageId(?Page $Page_Id): static
    {
        $this->Page_Id = $Page_Id;

        return $this;
    }

    public function getImageId(): ?Image
    {
        return $this->Image_Id;
    }

    public function setImageId(?Image $Image_Id): static
    {
        $this->Image_Id = $Image_Id;

        return $this;
    }

    /**
     * @return Collection<int, DetailsSectionImage>
     */
    public function getDetailsSectionImages(): Collection
    {
        return $this->detailsSectionImages;
    }

    public function addDetailsSectionImage(DetailsSectionImage $detailsSectionImage): static
    {
        if (!$this->detailsSectionImages->contains($detailsSectionImage)) {
            $this->detailsSectionImages->add($detailsSectionImage);
            $detailsSectionImage->setSection($this);
        }

        return $this;
    }

    public function removeDetailsSectionImage(DetailsSectionImage $detailsSectionImage): static
    {
        if ($this->detailsSectionImages->removeElement($detailsSectionImage)) {
            if ($detailsSectionImage->getSection() === $this) {
                $detailsSectionImage->setSection(null);
            }
        }

        return $this;
    }
}
