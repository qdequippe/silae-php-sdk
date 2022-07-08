<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieAbsenceV2
{
    /**
     * @var \DateTimeInterface
     */
    private $DateDebutAbsence;

    /**
     * @var \DateTimeInterface
     */
    private $DateFinAbsence;

    /**
     * @var string
     */
    private $CodeAbsence;

    /**
     * @var float
     */
    private $DureeEnHeuresSiJourUnique;

    /**
     * @var float
     */
    private $DureeEnJoursSiJourUnique;

    /**
     * @var float
     */
    private $ValeurPourcentage;

    /**
     * @var bool
     */
    private $SansInfluencePSS;

    /**
     * @var string
     */
    private $Commentaire;

    /**
     * @var bool
     */
    private $AbsenceRectificative;

    /**
     * @var float
     */
    private $Valeur1;

    /**
     * @var bool
     */
    private $bValeur1;

    /**
     * @var float
     */
    private $Valeur2;

    /**
     * @var bool
     */
    private $bValeur2;

    /**
     * @var float
     */
    private $Valeur3;

    /**
     * @var bool
     */
    private $bValeur3;

    /**
     * @var float
     */
    private $Valeur4;

    /**
     * @var bool
     */
    private $bValeur4;

    /**
     * @var float
     */
    private $Valeur5;

    /**
     * @var bool
     */
    private $bValeur5;

    /**
     * @return \DateTimeInterface
     */
    public function getDateDebutAbsence()
    {
        return $this->DateDebutAbsence;
    }

    /**
     * @param \DateTimeInterface $DateDebutAbsence
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withDateDebutAbsence($DateDebutAbsence)
    {
        $new = clone $this;
        $new->DateDebutAbsence = $DateDebutAbsence;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateFinAbsence()
    {
        return $this->DateFinAbsence;
    }

    /**
     * @param \DateTimeInterface $DateFinAbsence
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withDateFinAbsence($DateFinAbsence)
    {
        $new = clone $this;
        $new->DateFinAbsence = $DateFinAbsence;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeAbsence()
    {
        return $this->CodeAbsence;
    }

    /**
     * @param string $CodeAbsence
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withCodeAbsence($CodeAbsence)
    {
        $new = clone $this;
        $new->CodeAbsence = $CodeAbsence;

        return $new;
    }

    /**
     * @return float
     */
    public function getDureeEnHeuresSiJourUnique()
    {
        return $this->DureeEnHeuresSiJourUnique;
    }

    /**
     * @param float $DureeEnHeuresSiJourUnique
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withDureeEnHeuresSiJourUnique($DureeEnHeuresSiJourUnique)
    {
        $new = clone $this;
        $new->DureeEnHeuresSiJourUnique = $DureeEnHeuresSiJourUnique;

        return $new;
    }

    /**
     * @return float
     */
    public function getDureeEnJoursSiJourUnique()
    {
        return $this->DureeEnJoursSiJourUnique;
    }

    /**
     * @param float $DureeEnJoursSiJourUnique
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withDureeEnJoursSiJourUnique($DureeEnJoursSiJourUnique)
    {
        $new = clone $this;
        $new->DureeEnJoursSiJourUnique = $DureeEnJoursSiJourUnique;

        return $new;
    }

    /**
     * @return float
     */
    public function getValeurPourcentage()
    {
        return $this->ValeurPourcentage;
    }

    /**
     * @param float $ValeurPourcentage
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withValeurPourcentage($ValeurPourcentage)
    {
        $new = clone $this;
        $new->ValeurPourcentage = $ValeurPourcentage;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSansInfluencePSS()
    {
        return $this->SansInfluencePSS;
    }

    /**
     * @param bool $SansInfluencePSS
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withSansInfluencePSS($SansInfluencePSS)
    {
        $new = clone $this;
        $new->SansInfluencePSS = $SansInfluencePSS;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommentaire()
    {
        return $this->Commentaire;
    }

    /**
     * @param string $Commentaire
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withCommentaire($Commentaire)
    {
        $new = clone $this;
        $new->Commentaire = $Commentaire;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAbsenceRectificative()
    {
        return $this->AbsenceRectificative;
    }

    /**
     * @param bool $AbsenceRectificative
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withAbsenceRectificative($AbsenceRectificative)
    {
        $new = clone $this;
        $new->AbsenceRectificative = $AbsenceRectificative;

        return $new;
    }

    /**
     * @return float
     */
    public function getValeur1()
    {
        return $this->Valeur1;
    }

    /**
     * @param float $Valeur1
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withValeur1($Valeur1)
    {
        $new = clone $this;
        $new->Valeur1 = $Valeur1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBValeur1()
    {
        return $this->bValeur1;
    }

    /**
     * @param bool $bValeur1
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withBValeur1($bValeur1)
    {
        $new = clone $this;
        $new->bValeur1 = $bValeur1;

        return $new;
    }

    /**
     * @return float
     */
    public function getValeur2()
    {
        return $this->Valeur2;
    }

    /**
     * @param float $Valeur2
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withValeur2($Valeur2)
    {
        $new = clone $this;
        $new->Valeur2 = $Valeur2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBValeur2()
    {
        return $this->bValeur2;
    }

    /**
     * @param bool $bValeur2
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withBValeur2($bValeur2)
    {
        $new = clone $this;
        $new->bValeur2 = $bValeur2;

        return $new;
    }

    /**
     * @return float
     */
    public function getValeur3()
    {
        return $this->Valeur3;
    }

    /**
     * @param float $Valeur3
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withValeur3($Valeur3)
    {
        $new = clone $this;
        $new->Valeur3 = $Valeur3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBValeur3()
    {
        return $this->bValeur3;
    }

    /**
     * @param bool $bValeur3
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withBValeur3($bValeur3)
    {
        $new = clone $this;
        $new->bValeur3 = $bValeur3;

        return $new;
    }

    /**
     * @return float
     */
    public function getValeur4()
    {
        return $this->Valeur4;
    }

    /**
     * @param float $Valeur4
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withValeur4($Valeur4)
    {
        $new = clone $this;
        $new->Valeur4 = $Valeur4;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBValeur4()
    {
        return $this->bValeur4;
    }

    /**
     * @param bool $bValeur4
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withBValeur4($bValeur4)
    {
        $new = clone $this;
        $new->bValeur4 = $bValeur4;

        return $new;
    }

    /**
     * @return float
     */
    public function getValeur5()
    {
        return $this->Valeur5;
    }

    /**
     * @param float $Valeur5
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withValeur5($Valeur5)
    {
        $new = clone $this;
        $new->Valeur5 = $Valeur5;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBValeur5()
    {
        return $this->bValeur5;
    }

    /**
     * @param bool $bValeur5
     * @return CPAISWSSalarieAbsenceV2
     */
    public function withBValeur5($bValeur5)
    {
        $new = clone $this;
        $new->bValeur5 = $bValeur5;

        return $new;
    }
}

