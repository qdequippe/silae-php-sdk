<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationChampSalarie2 implements RequestInterface
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
    private $Matricule;

    /**
     * @var int
     */
    private $IdentifiantEmploi;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSModificationChamp2
     */
    private $ListeChamps;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $Matricule
     * @var int $IdentifiantEmploi
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSModificationChamp2 $ListeChamps
     */
    public function __construct($Token, $NumeroDossier, $Matricule, $IdentifiantEmploi, $ListeChamps)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Matricule = $Matricule;
        $this->IdentifiantEmploi = $IdentifiantEmploi;
        $this->ListeChamps = $ListeChamps;
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
     * @return SWSModificationChampSalarie2
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
     * @return SWSModificationChampSalarie2
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
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * @param string $Matricule
     * @return SWSModificationChampSalarie2
     */
    public function withMatricule($Matricule)
    {
        $new = clone $this;
        $new->Matricule = $Matricule;

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
     * @return SWSModificationChampSalarie2
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSModificationChamp2
     */
    public function getListeChamps()
    {
        return $this->ListeChamps;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSModificationChamp2 $ListeChamps
     * @return SWSModificationChampSalarie2
     */
    public function withListeChamps($ListeChamps)
    {
        $new = clone $this;
        $new->ListeChamps = $ListeChamps;

        return $new;
    }
}

