<?php

namespace App\Entity;

use App\Repository\InventoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InventoryRepository::class)]
class Inventory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $gold = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cp = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sp = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ep = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pp = null;

    #[ORM\OneToMany(targetEntity: InventoryItem::class, mappedBy: 'inventory')]
    private Collection $items;

    #[ORM\OneToOne(inversedBy: 'inventory', cascade: ['persist', 'remove'])]
    private ?Character $characterAssigned = null;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGold(): ?int
    {
        return $this->gold;
    }

    public function setGold(int $gold): static
    {
        $this->gold = $gold;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(?string $cp): static
    {
        $this->cp = $cp;

        return $this;
    }

    public function getSp(): ?string
    {
        return $this->sp;
    }

    public function setSp(?string $sp): static
    {
        $this->sp = $sp;

        return $this;
    }

    public function getEp(): ?string
    {
        return $this->ep;
    }

    public function setEp(?string $ep): static
    {
        $this->ep = $ep;

        return $this;
    }

    public function getPp(): ?string
    {
        return $this->pp;
    }

    public function setPp(?string $pp): static
    {
        $this->pp = $pp;

        return $this;
    }

    /**
     * @return Collection<int, InventoryItem>
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(InventoryItem $item): static
    {
        if (!$this->items->contains($item)) {
            $this->items->add($item);
            $item->setInventory($this);
        }

        return $this;
    }

    public function removeItem(InventoryItem $item): static
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getInventory() === $this) {
                $item->setInventory(null);
            }
        }

        return $this;
    }

    public function getCharacterAssigned(): ?Character
    {
        return $this->characterAssigned;
    }

    public function setCharacterAssigned(?Character $characterAssigned): static
    {
        $this->characterAssigned = $characterAssigned;

        return $this;
    }

}
