<?php

namespace App\Entity;

use ApiPlatform\Metadata\Get;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use App\Repository\PriceListRepository;
use Symfony\Component\Serializer\Attribute\Groups;

#[ApiResource(
    operations: [
        new Get(normalizationContext: ['groups' => 'priceList:item']),
        new GetCollection(normalizationContext: ['groups' => 'priceList:list'])
    ],
)]
#[ORM\Entity(repositoryClass: PriceListRepository::class)]
class PriceList
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['priceList:item', 'priceList:list'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['priceList:item', 'priceList:list'])]
    private ?string $Title = null;

    #[ORM\Column(length: 255)]
    #[Groups(['priceList:item', 'priceList:list'])]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    #[Groups(['priceList:item', 'priceList:list'])]
    private ?string $Price = null;

    #[ORM\Column(length: 255)]
    #[Groups(['priceList:item', 'priceList:list'])]
    private ?string $Specification1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['priceList:item', 'priceList:list'])]
    private ?string $Specification2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['priceList:item', 'priceList:list'])]
    private ?string $Specification3 = null;

    #[ORM\Column]
    #[Groups(['priceList:item', 'priceList:list'])]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'priceLists')]
    #[ORM\JoinColumn(nullable: true)]
    #[Groups(['priceList:item','priceList:list'])]
    private ?Section $section = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['priceList:item','priceList:list'])]
    private ?string $Titre_Section = null;

    #[ORM\ManyToOne(inversedBy: 'priceLists')]
    #[Groups(['priceList:item', 'priceList:list'])]
    private ?Page $Page_Id = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));
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

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->Price;
    }

    public function setPrice(string $Price): static
    {
        $this->Price = $Price;

        return $this;
    }

    public function getSpecification1(): ?string
    {
        return $this->Specification1;
    }

    public function setSpecification1(string $Specification1): static
    {
        $this->Specification1 = $Specification1;

        return $this;
    }

    public function getSpecification2(): ?string
    {
        return $this->Specification2;
    }

    public function setSpecification2(?string $Specification2): static
    {
        $this->Specification2 = $Specification2;

        return $this;
    }

    public function getSpecification3(): ?string
    {
        return $this->Specification3;
    }

    public function setSpecification3(?string $Specification3): static
    {
        $this->Specification3 = $Specification3;

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

    public function getSection(): ?Section 
    { 
        return $this->section; 
    }

    public function setSection(?Section $section): static
    {
        $this->section = $section;
        $this->Titre_Section = $section ? $section->getTitle() : null;
        return $this;
    }

    public function getTitreSection(): ?string 
    { 
        return $this->Titre_Section; 
    }

    public function setTitreSection(?string $t): static 
    { 
        $this->Titre_Section = $t; return $this; 
    }
}
