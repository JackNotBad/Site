<?php

namespace App\Entity;

use App\Entity\Slider;
use App\Entity\Message;
use App\Entity\Section;
use App\Entity\Carousel;
use App\Entity\PriceList;
use ApiPlatform\Metadata\Get;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PageRepository;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use Symfony\Component\Serializer\Attribute\Groups;

#[ApiResource(
    operations: [
        new Get(normalizationContext: ['groups' => 'page:item']),
        new GetCollection(normalizationContext: ['groups' => 'page:list'])
    ],
)]
#[ApiFilter(SearchFilter::class)]
#[ORM\Entity(repositoryClass: PageRepository::class)]
class Page
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['page:item', 'page:list','carousel:item', 'carousel:list'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['page:item', 'page:list','carousel:item', 'carousel:list'])]
    private ?string $Title = null;

    #[ORM\Column(length: 255)]
    #[Groups(['page:item', 'page:list','carousel:item', 'carousel:list'])]
    private ?string $Name = null;

    /**
     * @var Collection<int, Carousel>
     */
    #[ORM\OneToMany(mappedBy: 'page', targetEntity: Carousel::class, cascade: ['persist','remove'], orphanRemoval: true)]
    private Collection $carousels;

    /**
     * @var Collection<int, Slider>
     */
    #[ORM\OneToMany(mappedBy: 'page', targetEntity: Slider::class, cascade: ['persist','remove'], orphanRemoval: true)]
    private Collection $sliders;

    /**
     * @var Collection<int, Message>
     */
    #[ORM\OneToMany(targetEntity: Message::class, mappedBy: 'Page_Id')]
    private Collection $messages;

    /**
     * @var Collection<int, PriceList>
     */
    #[ORM\OneToMany(targetEntity: PriceList::class, mappedBy: 'Page_Id')]
    private Collection $priceLists;

    /**
     * @var Collection<int, Section>
     */
    #[ORM\OneToMany(targetEntity: Section::class, mappedBy: 'Page_Id')]
    private Collection $sections;

    public function __construct()
    {
        $this->messages = new ArrayCollection();
        $this->priceLists = new ArrayCollection();
        $this->sections = new ArrayCollection();
        $this->carousels = new ArrayCollection();
        $this->sliders = new ArrayCollection();
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

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * @return Collection<int, Message>
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Message $message): static
    {
        if (!$this->messages->contains($message)) {
            $this->messages->add($message);
            $message->setPageId($this);
        }

        return $this;
    }

    public function removeMessage(Message $message): static
    {
        if ($this->messages->removeElement($message)) {
            if ($message->getPageId() === $this) {
                $message->setPageId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PriceList>
     */
    public function getPriceLists(): Collection
    {
        return $this->priceLists;
    }

    public function addPriceList(PriceList $priceList): static
    {
        if (!$this->priceLists->contains($priceList)) {
            $this->priceLists->add($priceList);
            $priceList->setPageId($this);
        }

        return $this;
    }

    public function removePriceList(PriceList $priceList): static
    {
        if ($this->priceLists->removeElement($priceList)) {
            if ($priceList->getPageId() === $this) {
                $priceList->setPageId(null);
            }
        }

        return $this;
    }

    /** @return Collection|Carousel[] */
    public function getCarousels(): Collection
    {
        return $this->carousels;
    }

    public function addCarousel(Carousel $c): self
    {
        if (!$this->carousels->contains($c)) {
            $this->carousels[] = $c;
            $c->setPage($this);
        }
        return $this;
    }

    public function removeCarousel(Carousel $c): self
    {
        if ($this->carousels->removeElement($c)) {
            if ($c->getPage() === $this) {
                $c->setPage(null);
            }
        }
        return $this;
    }

    /** @return Collection|Slider[] */
    public function getSliders(): Collection
    {
        return $this->sliders;
    }

    public function addSlider(Slider $s): self
    {
        if (!$this->sliders->contains($s)) {
            $this->sliders[] = $s;
            $s->setPage($this);
        }
        return $this;
    }

    public function removeSlider(Slider $s): self
    {
        if ($this->sliders->removeElement($s)) {
            if ($s->getPage() === $this) {
                $s->setPage(null);
            }
        }
        return $this;
    }

    /**
     * @return Collection<int, Section>
     */
    public function getSections(): Collection
    {
        return $this->sections;
    }

    public function addSection(Section $section): static
    {
        if (!$this->sections->contains($section)) {
            $this->sections->add($section);
            $section->setPageId($this);
        }

        return $this;
    }

    public function removeSection(Section $section): static
    {
        if ($this->sections->removeElement($section)) {
            if ($section->getPageId() === $this) {
                $section->setPageId(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {

        $title = method_exists($this, 'getTitle') ? $this->getTitle() : null;
        if ($title !== null && $title !== '') {
            return (string) $title;
        }

        $Name = method_exists($this, 'getName') ? $this->getName() : null;
        if ($Name !== null && $Name !== '') {
            return (string) $Name;
        }

        $id = method_exists($this, 'getId') ? $this->getId() : null;
        return $id !== null ? (string) $id : 'Page_Id';
    }
}
