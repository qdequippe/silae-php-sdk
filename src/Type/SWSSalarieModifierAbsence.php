<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieModifierAbsence implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsence
     */
    private $AbsenceModif;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $MatriculeSalarie
     * @var \DateTimeInterface $DateDebutAbsence
     * @var \DateTimeInterface $DateFinAbsence
     * @var string $CodeAbsence
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsence $AbsenceModif
     */
    public function __construct($Token, $NumeroDossier, $MatriculeSalarie, $DateDebutAbsence, $DateFinAbsence, $CodeAbsence, $AbsenceModif)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeSalarie = $MatriculeSalarie;
        $this->DateDebutAbsence = $DateDebutAbsence;
        $this->DateFinAbsence = $DateFinAbsence;
        $this->CodeAbsence = $CodeAbsence;
        $this->AbsenceModif = $AbsenceModif;
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
     * @return SWSSalarieModifierAbsence
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
     * @return SWSSalarieModifierAbsence
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
     * @return SWSSalarieModifierAbsence
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
     * @return SWSSalarieModifierAbsence
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
     * @return SWSSalarieModifierAbsence
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
     * @return SWSSalarieModifierAbsence
     */
    public function withCodeAbsence($CodeAbsence)
    {
        $new = clone $this;
        $new->CodeAbsence = $CodeAbsence;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsence
     */
    public function getAbsenceModif()
    {
        return $this->AbsenceModif;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieAbsence $AbsenceModif
     * @return SWSSalarieModifierAbsence
     */
    public function withAbsenceModif($AbsenceModif)
    {
        $new = clone $this;
        $new->AbsenceModif = $AbsenceModif;

        return $new;
    }
}

