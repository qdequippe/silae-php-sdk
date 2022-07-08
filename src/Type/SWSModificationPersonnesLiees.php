<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationPersonnesLiees implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee
     */
    private $Conjoint;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPersonneLiee
     */
    private $PersonnesLiees;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $Matricule
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee $Conjoint
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPersonneLiee $PersonnesLiees
     */
    public function __construct($Token, $NumeroDossier, $Matricule, $Conjoint, $PersonnesLiees)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->Matricule = $Matricule;
        $this->Conjoint = $Conjoint;
        $this->PersonnesLiees = $PersonnesLiees;
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
     * @return SWSModificationPersonnesLiees
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
     * @return SWSModificationPersonnesLiees
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
     * @return SWSModificationPersonnesLiees
     */
    public function withMatricule($Matricule)
    {
        $new = clone $this;
        $new->Matricule = $Matricule;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee
     */
    public function getConjoint()
    {
        return $this->Conjoint;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSPersonneLiee $Conjoint
     * @return SWSModificationPersonnesLiees
     */
    public function withConjoint($Conjoint)
    {
        $new = clone $this;
        $new->Conjoint = $Conjoint;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPersonneLiee
     */
    public function getPersonnesLiees()
    {
        return $this->PersonnesLiees;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPersonneLiee $PersonnesLiees
     * @return SWSModificationPersonnesLiees
     */
    public function withPersonnesLiees($PersonnesLiees)
    {
        $new = clone $this;
        $new->PersonnesLiees = $PersonnesLiees;

        return $new;
    }
}

