<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\Backend\Category;
use App\Repository\TicketRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $ticket_content;

    #[ORM\Column(type: 'string', length: 20)]
    private $ticket_priority;



    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'tickets')]
    #[ORM\JoinColumn(nullable: false,name: 'user_id',referencedColumnName: 'id')]
    private $user;

    #[ORM\Column(type: 'string', length: 5)]
    private $status;

    #[ORM\ManyToMany(targetEntity: Category::class, inversedBy: 'tickets')]
    private $category;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $ticket_response;



    public function __construct()
    {
        $this->category = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTicketContent(): ?string
    {
        return $this->ticket_content;
    }

    public function setTicketContent(string $ticket_content): self
    {
        $this->ticket_content = $ticket_content;

        return $this;
    }

    public function getTicketPriority(): ?string
    {
        return $this->ticket_priority;
    }

    public function setTicketPriority(string $ticket_priority): self
    {
        $this->ticket_priority = $ticket_priority;

        return $this;
    }


    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategory(): Collection
    {
        return $this->category;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->category->contains($category)) {
            $this->category[] = $category;
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        $this->category->removeElement($category);

        return $this;
    }

    public function getTicketResponse(): ?string
    {
        return $this->ticket_response;
    }

    public function setTicketResponse(?string $ticket_response): self
    {
        $this->ticket_response = $ticket_response;

        return $this;
    }



}
