<?php

namespace App\Entity;

use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\MessageRepository;
use ApiPlatform\Metadata\GetCollection;
use Symfony\Component\Serializer\Attribute\Groups;

#[ApiResource(
    operations: [
        new Get(normalizationContext: ['groups' => 'message:item']),
        new GetCollection(normalizationContext: ['groups' => 'message:list']),
        new Post(denormalizationContext: ['groups' => 'post:message:item']),
    ],
)]
#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['message:item', 'message:list','post:message:item'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['message:item', 'message:list','post:message:item'])]
    private ?string $subject = null;

    #[ORM\Column(length: 1200)]
    #[Groups(['message:item', 'message:list','post:message:item'])]
    private ?string $content = null;

    #[ORM\Column]
    #[Groups(['message:item', 'message:list','post:message:item'])]
    private ?\DateTimeImmutable $sendAt = null;

    #[ORM\Column]
    #[Groups(['message:item', 'message:list','post:message:item'])]
    private ?bool $AlreadyRead = false;

    #[ORM\ManyToOne(inversedBy: 'messages')]
    #[Groups(['message:item', 'message:list','post:message:item'])]
    private ?User $User_Id = null;

    #[ORM\ManyToOne(inversedBy: 'messages')]
    #[Groups(['message:item', 'message:list','post:message:item'])]
    private ?Page $Page_Id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['message:item', 'message:list','post:message:item'])]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    #[Groups(['message:item', 'message:list','post:message:item'])]
    private ?string $email = null;

    public function __construct()
    {
        $this->sendAt = new \DateTimeImmutable('now', new \DateTimeZone('Europe/Paris'));
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): static
    {
        $this->subject = $subject;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getSendAt(): ?\DateTimeImmutable
    {
        return $this->sendAt;
    }

    public function setSendAt(\DateTimeImmutable $sendAt): static
    {
        $this->sendAt = $sendAt;

        return $this;
    }

    public function isAlreadyRead(): ?bool
    {
        return $this->AlreadyRead;
    }

    public function setAlreadyRead(bool $AlreadyRead): static
    {
        $this->AlreadyRead = $AlreadyRead;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->User_Id;
    }

    public function setUserId(?User $User_Id): static
    {
        $this->User_Id = $User_Id;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }
}
