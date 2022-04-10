<?php

namespace App\Entity;

use App\Repository\WalletRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WalletRepository::class)]
class Wallet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $ballance;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBallance(): ?int
    {
        return $this->ballance;
    }

    public function setBallance(int $ballance): self
    {
        $this->ballance = $ballance;

        return $this;
    }
}
