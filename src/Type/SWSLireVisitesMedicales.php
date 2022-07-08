<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSLireVisitesMedicales implements RequestInterface
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
     * @var int
     */
    private $IdentifiantEmploi;

    /**
     * @var \DateTimeInterface
     */
    private $DateMin;

    /**
     * @var \DateTimeInterface
     */
    private $DateMax;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $MatriculeSalarie
     * @var int $IdentifiantEmploi
     * @var \DateTimeInterface $DateMin
     * @var \DateTimeInterface $DateMax
     */
    public function __construct($Token, $NumeroDossier, $MatriculeSalarie, $IdentifiantEmploi, $DateMin, $DateMax)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeSalarie = $MatriculeSalarie;
        $this->IdentifiantEmploi = $IdentifiantEmploi;
        $this->DateMin = $DateMin;
        $this->DateMax = $DateMax;
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
     * @return SWSLireVisitesMedicales
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
     * @return SWSLireVisitesMedicales
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
     * @return SWSLireVisitesMedicales
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdentifiantEmploi()
    {
        return $this->IdentifiantEmploi;
    }

    /**
     * @param int $IdentifiantEmploi
     * @return SWSLireVisitesMedicales
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateMin()
    {
        return $this->DateMin;
    }

    /**
     * @param \DateTimeInterface $DateMin
     * @return SWSLireVisitesMedicales
     */
    public function withDateMin($DateMin)
    {
        $new = clone $this;
        $new->DateMin = $DateMin;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateMax()
    {
        return $this->DateMax;
    }

    /**
     * @param \DateTimeInterface $DateMax
     * @return SWSLireVisitesMedicales
     */
    public function withDateMax($DateMax)
    {
        $new = clone $this;
        $new->DateMax = $DateMax;

        return $new;
    }
}

