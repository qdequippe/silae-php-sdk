<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieModifierAbsenceV2 implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var string
     */
    private $MatriculeSalarie;

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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsenceV2
     */
    private $Absence_V2Modif;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $MatriculeSalarie
     * @var \DateTimeInterface $DateDebutAbsence
     * @var \DateTimeInterface $DateFinAbsence
     * @var string $CodeAbsence
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsenceV2 $Absence_V2Modif
     */
    public function __construct($Token, $NumeroDossier, $MatriculeSalarie, $DateDebutAbsence, $DateFinAbsence, $CodeAbsence, $Absence_V2Modif)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeSalarie = $MatriculeSalarie;
        $this->DateDebutAbsence = $DateDebutAbsence;
        $this->DateFinAbsence = $DateFinAbsence;
        $this->CodeAbsence = $CodeAbsence;
        $this->Absence_V2Modif = $Absence_V2Modif;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param string $Token
     * @return SWSSalarieModifierAbsenceV2
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return SWSSalarieModifierAbsenceV2
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return SWSSalarieModifierAbsenceV2
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateDebutAbsence()
    {
        return $this->DateDebutAbsence;
    }

    /**
     * @param \DateTimeInterface $DateDebutAbsence
     * @return SWSSalarieModifierAbsenceV2
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
     * @return SWSSalarieModifierAbsenceV2
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
     * @return SWSSalarieModifierAbsenceV2
     */
    public function withCodeAbsence($CodeAbsence)
    {
        $new = clone $this;
        $new->CodeAbsence = $CodeAbsence;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsenceV2
     */
    public function getAbsence_V2Modif()
    {
        return $this->Absence_V2Modif;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsenceV2 $Absence_V2Modif
     * @return SWSSalarieModifierAbsenceV2
     */
    public function withAbsence_V2Modif($Absence_V2Modif)
    {
        $new = clone $this;
        $new->Absence_V2Modif = $Absence_V2Modif;

        return $new;
    }
}

