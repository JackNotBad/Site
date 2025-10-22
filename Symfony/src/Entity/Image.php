<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ImageRepository;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

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

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $createdAt;

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
}
