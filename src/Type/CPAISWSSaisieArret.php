<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSaisieArret
{
    /**
     * @var int
     */
    private $Reference;

    /**
     * @var string
     */
    private $Demandeur;

    /**
     * @var \DateTimeInterface
     */
    private $DateDemande;

    /**
     * @var float
     */
    private $MontantCreance;

    /**
     * @var \DateTimeInterface
     */
    private $DateDebutPrelevement;

    /**
     * @var int
     */
    private $Type;

    /**
     * @var int
     */
    private $Priorite;

    /**
     * @var string
     */
    private $LibelleBulletin;

    /**
     * @var float
     */
    private $MontantsDejaVerses;

    /**
     * @return int
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param int $Reference
     * @return CPAISWSSaisieArret
     */
    public function withReference($Reference)
    {
        $new = clone $this;
        $new->Reference = $Reference;

        return $new;
    }

    /**
     * @return string
     */
    public function getDemandeur()
    {
        return $this->Demandeur;
    }

    /**
     * @param string $Demandeur
     * @return CPAISWSSaisieArret
     */
    public function withDemandeur($Demandeur)
    {
        $new = clone $this;
        $new->Demandeur = $Demandeur;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateDemande()
    {
        return $this->DateDemande;
    }

    /**
     * @param \DateTimeInterface $DateDemande
     * @return CPAISWSSaisieArret
     */
    public function withDateDemande($DateDemande)
    {
        $new = clone $this;
        $new->DateDemande = $DateDemande;

        return $new;
    }

    /**
     * @return float
     */
    public function getMontantCreance()
    {
        return $this->MontantCreance;
    }

    /**
     * @param float $MontantCreance
     * @return CPAISWSSaisieArret
     */
    public function withMontantCreance($MontantCreance)
    {
        $new = clone $this;
        $new->MontantCreance = $MontantCreance;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateDebutPrelevement()
    {
        return $this->DateDebutPrelevement;
    }

    /**
     * @param \DateTimeInterface $DateDebutPrelevement
     * @return CPAISWSSaisieArret
     */
    public function withDateDebutPrelevement($DateDebutPrelevement)
    {
        $new = clone $this;
        $new->DateDebutPrelevement = $DateDebutPrelevement;

        return $new;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param int $Type
     * @return CPAISWSSaisieArret
     */
    public function withType($Type)
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }

    /**
     * @return int
     */
    public function getPriorite()
    {
        return $this->Priorite;
    }

    /**
     * @param int $Priorite
     * @return CPAISWSSaisieArret
     */
    public function withPriorite($Priorite)
    {
        $new = clone $this;
        $new->Priorite = $Priorite;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelleBulletin()
    {
        return $this->LibelleBulletin;
    }

    /**
     * @param string $LibelleBulletin
     * @return CPAISWSSaisieArret
     */
    public function withLibelleBulletin($LibelleBulletin)
    {
        $new = clone $this;
        $new->LibelleBulletin = $LibelleBulletin;

        return $new;
    }

    /**
     * @return float
     */
    public function getMontantsDejaVerses()
    {
        return $this->MontantsDejaVerses;
    }

    /**
     * @param float $MontantsDejaVerses
     * @return CPAISWSSaisieArret
     */
    public function withMontantsDejaVerses($MontantsDejaVerses)
    {
        $new = clone $this;
        $new->MontantsDejaVerses = $MontantsDejaVerses;

        return $new;
    }
}

