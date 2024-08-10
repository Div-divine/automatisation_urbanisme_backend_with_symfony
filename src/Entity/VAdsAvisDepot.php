<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VAdsAvisDepotRepository")
 * @ORM\Table(name="clicmap_view.v_ads_avis_depot")
 */
#[ORM\Entity(repositoryClass: 'App\Repository\VAdsAvisDepotRepository')]
#[ORM\Table(name: 'clicmap_view.v_ads_avis_depot')]
class VAdsAvisDepot
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    private $srt;

    #[ORM\Column(type: 'date')]
    private $dateenclair;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $bieAdresse;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $bieCadT;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $trsTitre;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $trsNom;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $trsPrenom;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $trsAdresse;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $trsCodepos;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $trsCommune;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $reference;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $dosDrsT;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $dosDdnT;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $dosDpnT;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $dosDadT;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $dosDcpT;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $dosDlcT;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $dosDnmT;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $dpcAnmT;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $dpcApnT;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $dpcAadT;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $dpcAcpT;

    #[ORM\Column(type: 'text', nullable: true)]
    private $nature;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $surfEx;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, nullable: true)]
    private $surfCc;

    #[ORM\Column(type: 'date', nullable: true)]
    private $dateDemande;

    #[ORM\Column(type: 'date', nullable: true)]
    private $dateDepot;

    #[ORM\Column(type: 'date', nullable: true)]
    private $dateComplet;

    #[ORM\Column(type: 'date', nullable: true)]
    private $dateDecision;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $decision;

    #[ORM\Column(name: 'srt_2', type: 'integer', nullable: true)]
    private $srt2;

    #[ORM\Column(name: 'srt_3', type: 'date', nullable: true)]
    private $srt3;

    #[ORM\Column(type: 'string', length: 20, nullable: true)]
    private $insee;

    // Getters and setters for each property

    public function getSrt(): ?int
    {
        return $this->srt;
    }

    public function setSrt(int $srt): self
    {
        $this->srt = $srt;
        return $this;
    }

    public function getDateenclair(): ?\DateTimeInterface
    {
        return $this->dateenclair;
    }

    public function setDateenclair(\DateTimeInterface $dateenclair): self
    {
        $this->dateenclair = $dateenclair;
        return $this;
    }

    public function getBieAdresse(): ?string
    {
        return $this->bieAdresse;
    }

    public function setBieAdresse(?string $bieAdresse): self
    {
        $this->bieAdresse = $bieAdresse;
        return $this;
    }

    public function getBieCadT(): ?string
    {
        return $this->bieCadT;
    }

    public function setBieCadT(?string $bieCadT): self
    {
        $this->bieCadT = $bieCadT;
        return $this;
    }

    public function getTrsTitre(): ?string
    {
        return $this->trsTitre;
    }

    public function setTrsTitre(?string $trsTitre): self
    {
        $this->trsTitre = $trsTitre;
        return $this;
    }

    public function getTrsNom(): ?string
    {
        return $this->trsNom;
    }

    public function setTrsNom(?string $trsNom): self
    {
        $this->trsNom = $trsNom;
        return $this;
    }

    public function getTrsPrenom(): ?string
    {
        return $this->trsPrenom;
    }

    public function setTrsPrenom(?string $trsPrenom): self
    {
        $this->trsPrenom = $trsPrenom;
        return $this;
    }

    public function getTrsAdresse(): ?string
    {
        return $this->trsAdresse;
    }

    public function setTrsAdresse(?string $trsAdresse): self
    {
        $this->trsAdresse = $trsAdresse;
        return $this;
    }

    public function getTrsCodepos(): ?string
    {
        return $this->trsCodepos;
    }

    public function setTrsCodepos(?string $trsCodepos): self
    {
        $this->trsCodepos = $trsCodepos;
        return $this;
    }

    public function getTrsCommune(): ?string
    {
        return $this->trsCommune;
    }

    public function setTrsCommune(?string $trsCommune): self
    {
        $this->trsCommune = $trsCommune;
        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function getDosDrsT(): ?string
    {
        return $this->dosDrsT;
    }

    public function setDosDrsT(?string $dosDrsT): self
    {
        $this->dosDrsT = $dosDrsT;
        return $this;
    }

    public function getDosDdnT(): ?string
    {
        return $this->dosDdnT;
    }

    public function setDosDdnT(?string $dosDdnT): self
    {
        $this->dosDdnT = $dosDdnT;
        return $this;
    }

    public function getDosDpnT(): ?string
    {
        return $this->dosDpnT;
    }

    public function setDosDpnT(?string $dosDpnT): self
    {
        $this->dosDpnT = $dosDpnT;
        return $this;
    }

    public function getDosDadT(): ?string
    {
        return $this->dosDadT;
    }

    public function setDosDadT(?string $dosDadT): self
    {
        $this->dosDadT = $dosDadT;
        return $this;
    }

    public function getDosDcpT(): ?string
    {
        return $this->dosDcpT;
    }

    public function setDosDcpT(?string $dosDcpT): self
    {
        $this->dosDcpT = $dosDcpT;
        return $this;
    }

    public function getDosDlcT(): ?string
    {
        return $this->dosDlcT;
    }

    public function setDosDlcT(?string $dosDlcT): self
    {
        $this->dosDlcT = $dosDlcT;
        return $this;
    }

    public function getDosDnmT(): ?string
    {
        return $this->dosDnmT;
    }

    public function setDosDnmT(?string $dosDnmT): self
    {
        $this->dosDnmT = $dosDnmT;
        return $this;
    }

    public function getDpcAnmT(): ?string
    {
        return $this->dpcAnmT;
    }

    public function setDpcAnmT(?string $dpcAnmT): self
    {
        $this->dpcAnmT = $dpcAnmT;
        return $this;
    }

    public function getDpcApnT(): ?string
    {
        return $this->dpcApnT;
    }

    public function setDpcApnT(?string $dpcApnT): self
    {
        $this->dpcApnT = $dpcApnT;
        return $this;
    }

    public function getDpcAadT(): ?string
    {
        return $this->dpcAadT;
    }

    public function setDpcAadT(?string $dpcAadT): self
    {
        $this->dpcAadT = $dpcAadT;
        return $this;
    }

    public function getDpcAcpT(): ?string
    {
        return $this->dpcAcpT;
    }

    public function setDpcAcpT(?string $dpcAcpT): self
    {
        $this->dpcAcpT = $dpcAcpT;
        return $this;
    }

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function setNature(?string $nature): self
    {
        $this->nature = $nature;
        return $this;
    }

    public function getSurfEx(): ?float
    {
        return $this->surfEx;
    }

    public function setSurfEx(?float $surfEx): self
    {
        $this->surfEx = $surfEx;
        return $this;
    }

    public function getSurfCc(): ?float
    {
        return $this->surfCc;
    }

    public function setSurfCc(?float $surfCc): self
    {
        $this->surfCc = $surfCc;
        return $this;
    }

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->dateDemande;
    }

    public function setDateDemande(?\DateTimeInterface $dateDemande): self
    {
        $this->dateDemande = $dateDemande;
        return $this;
    }

    public function getDateDepot(): ?\DateTimeInterface
    {
        return $this->dateDepot;
    }

    public function setDateDepot(?\DateTimeInterface $dateDepot): self
    {
        $this->dateDepot = $dateDepot;
        return $this;
    }

    public function getDateComplet(): ?\DateTimeInterface
    {
        return $this->dateComplet;
    }

    public function setDateComplet(?\DateTimeInterface $dateComplet): self
    {
        $this->dateComplet = $dateComplet;
        return $this;
    }

    public function getDateDecision(): ?\DateTimeInterface
    {
        return $this->dateDecision;
    }

    public function setDateDecision(?\DateTimeInterface $dateDecision): self
    {
        $this->dateDecision = $dateDecision;
        return $this;
    }

    public function getDecision(): ?string
    {
        return $this->decision;
    }

    public function setDecision(?string $decision): self
    {
        $this->decision = $decision;
        return $this;
    }

    public function getSrt2(): ?int
    {
        return $this->srt2;
    }

    public function setSrt2(?int $srt2): self
    {
        $this->srt2 = $srt2;
        return $this;
    }

    public function getSrt3(): ?\DateTimeInterface
    {
        return $this->srt3;
    }

    public function setSrt3(?\DateTimeInterface $srt3): self
    {
        $this->srt3 = $srt3;
        return $this;
    }

    public function getInsee(): ?string
    {
        return $this->insee;
    }

    public function setInsee(?string $insee): self
    {
        $this->insee = $insee;
        return $this;
    }
}
