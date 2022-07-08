<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationGrilleHoraireSalarie implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationHoraireSalarie
     */
    private $Horaire;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $MatriculeSalarie
     * @var int $IdentifiantEmploi
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationHoraireSalarie $Horaire
     */
    public function __construct($Token, $NumeroDossier, $MatriculeSalarie, $IdentifiantEmploi, $Horaire)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->MatriculeSalarie = $MatriculeSalarie;
        $this->IdentifiantEmploi = $IdentifiantEmploi;
        $this->Horaire = $Horaire;
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
     * @return SWSModificationGrilleHoraireSalarie
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
     * @return SWSModificationGrilleHoraireSalarie
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
     * @return SWSModificationGrilleHoraireSalarie
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
     * @return SWSModificationGrilleHoraireSalarie
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationHoraireSalarie
     */
    public function getHoraire()
    {
        return $this->Horaire;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationHoraireSalarie $Horaire
     * @return SWSModificationGrilleHoraireSalarie
     */
    public function withHoraire($Horaire)
    {
        $new = clone $this;
        $new->Horaire = $Horaire;

        return $new;
    }
}

