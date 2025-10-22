<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ImageRepository;
use ApiPlatform\Metadata\ApiResource;

#[ApiResource]
#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $url = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $alt = null;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
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
        $this->url = $url; return $this; 
    }
    public function getAlt(): ?string 
    { 
        return $this->alt; 
    }
    public function setAlt(?string $alt): self 
    { 
        $this->alt = $alt; return $this; 
    }
    public function getCreatedAt(): \DateTimeInterface 
    { 
        return $this->createdAt; 
    }
}
