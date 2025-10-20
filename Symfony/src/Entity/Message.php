<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $subject = null;

    #[ORM\Column(length: 255)]
    private ?string $content = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $sendAt = null;

    #[ORM\Column]
    private ?bool $AlreadyRead = null;

    #[ORM\ManyToOne(inversedBy: 'messages')]
    private ?User $User_Id = null;

    #[ORM\ManyToOne(inversedBy: 'messages')]
    private ?Page $Page_Id = null;

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
}
