<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSRequeteSalarieBulletinLignesFiltres
{
    /**
     * @var string
     */
    private $CodeLibelle;

    /**
     * @var string
     */
    private $Libelle;

    /**
     * @var string
     */
    private $CodeDucs;

    /**
     * @var int
     */
    private $Zone;

    /**
     * @var string
     */
    private $MarqueInterne;

    /**
     * @var string
     */
    private $Marque1;

    /**
     * @var string
     */
    private $Marque2;

    /**
     * @var \DateTimeInterface
     */
    private $MarqueDtDeb;

    /**
     * @var \DateTimeInterface
     */
    private $MarqueDtFin;

    /**
     * @var string
     */
    private $Compte4;

    /**
     * @var string
     */
    private $Compte6;

    /**
     * @var bool
     */
    private $ExclureLignesNeutres;

    /**
     * @var bool
     */
    private $ExclureLignesNonNeutres;

    /**
     * @return string
     */
    public function getCodeLibelle()
    {
        return $this->CodeLibelle;
    }

    /**
     * @param string $CodeLibelle
     * @return CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    public function withCodeLibelle($CodeLibelle)
    {
        $new = clone $this;
        $new->CodeLibelle = $CodeLibelle;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param string $Libelle
     * @return CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    public function withLibelle($Libelle)
    {
        $new = clone $this;
        $new->Libelle = $Libelle;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeDucs()
    {
        return $this->CodeDucs;
    }

    /**
     * @param string $CodeDucs
     * @return CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    public function withCodeDucs($CodeDucs)
    {
        $new = clone $this;
        $new->CodeDucs = $CodeDucs;

        return $new;
    }

    /**
     * @return int
     */
    public function getZone()
    {
        return $this->Zone;
    }

    /**
     * @param int $Zone
     * @return CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    public function withZone($Zone)
    {
        $new = clone $this;
        $new->Zone = $Zone;

        return $new;
    }

    /**
     * @return string
     */
    public function getMarqueInterne()
    {
        return $this->MarqueInterne;
    }

    /**
     * @param string $MarqueInterne
     * @return CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    public function withMarqueInterne($MarqueInterne)
    {
        $new = clone $this;
        $new->MarqueInterne = $MarqueInterne;

        return $new;
    }

    /**
     * @return string
     */
    public function getMarque1()
    {
        return $this->Marque1;
    }

    /**
     * @param string $Marque1
     * @return CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    public function withMarque1($Marque1)
    {
        $new = clone $this;
        $new->Marque1 = $Marque1;

        return $new;
    }

    /**
     * @return string
     */
    public function getMarque2()
    {
        return $this->Marque2;
    }

    /**
     * @param string $Marque2
     * @return CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    public function withMarque2($Marque2)
    {
        $new = clone $this;
        $new->Marque2 = $Marque2;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getMarqueDtDeb()
    {
        return $this->MarqueDtDeb;
    }

    /**
     * @param \DateTimeInterface $MarqueDtDeb
     * @return CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    public function withMarqueDtDeb($MarqueDtDeb)
    {
        $new = clone $this;
        $new->MarqueDtDeb = $MarqueDtDeb;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getMarqueDtFin()
    {
        return $this->MarqueDtFin;
    }

    /**
     * @param \DateTimeInterface $MarqueDtFin
     * @return CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    public function withMarqueDtFin($MarqueDtFin)
    {
        $new = clone $this;
        $new->MarqueDtFin = $MarqueDtFin;

        return $new;
    }

    /**
     * @return string
     */
    public function getCompte4()
    {
        return $this->Compte4;
    }

    /**
     * @param string $Compte4
     * @return CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    public function withCompte4($Compte4)
    {
        $new = clone $this;
        $new->Compte4 = $Compte4;

        return $new;
    }

    /**
     * @return string
     */
    public function getCompte6()
    {
        return $this->Compte6;
    }

    /**
     * @param string $Compte6
     * @return CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    public function withCompte6($Compte6)
    {
        $new = clone $this;
        $new->Compte6 = $Compte6;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExclureLignesNeutres()
    {
        return $this->ExclureLignesNeutres;
    }

    /**
     * @param bool $ExclureLignesNeutres
     * @return CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    public function withExclureLignesNeutres($ExclureLignesNeutres)
    {
        $new = clone $this;
        $new->ExclureLignesNeutres = $ExclureLignesNeutres;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExclureLignesNonNeutres()
    {
        return $this->ExclureLignesNonNeutres;
    }

    /**
     * @param bool $ExclureLignesNonNeutres
     * @return CPAISWSRequeteSalarieBulletinLignesFiltres
     */
    public function withExclureLignesNonNeutres($ExclureLignesNonNeutres)
    {
        $new = clone $this;
        $new->ExclureLignesNonNeutres = $ExclureLignesNonNeutres;

        return $new;
    }
}

