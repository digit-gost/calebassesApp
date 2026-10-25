<?php

namespace App\Entity;

use App\Repository\MembreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MembreRepository::class)]
class Membre extends User
{
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateInscription = null;

    public function __construct()
    {
        $this->dateInscription = new \DateTime();
    }

    public function getTypeCompte(): string
    {
        return 'membre';
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getDateInscription(): ?\DateTime
    {
        return $this->dateInscription;
    }

    public function setDateInscription(\DateTime $dateInscription): static
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }
}