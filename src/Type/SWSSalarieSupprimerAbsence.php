<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSalarieSupprimerAbsence implements RequestInterface
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
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $MatriculeSalarie
     * @var \DateTimeInterface $DateDebutAbsence
     * @var \DateTimeInterface $DateFinAbsence
     * @var string $CodeAbsence
     */
    public function __construct($Token, $NumeroDossier, $MatriculeSalarie, $DateDebutAbsence, $DateFinAbsence, $CodeAbsence)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeSalarie = $MatriculeSalarie;
        $this->DateDebutAbsence = $DateDebutAbsence;
        $this->DateFinAbsence = $DateFinAbsence;
        $this->CodeAbsence = $CodeAbsence;
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
     * @return SWSSalarieSupprimerAbsence
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
     * @return SWSSalarieSupprimerAbsence
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
     * @return SWSSalarieSupprimerAbsence
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
     * @return SWSSalarieSupprimerAbsence
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
     * @return SWSSalarieSupprimerAbsence
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
     * @return SWSSalarieSupprimerAbsence
     */
    public function withCodeAbsence($CodeAbsence)
    {
        $new = clone $this;
        $new->CodeAbsence = $CodeAbsence;

        return $new;
    }
}

