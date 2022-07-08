<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSEtatDeclaration
{
    /**
     * @var string
     */
    private $NumeroADS;

    /**
     * @var \DateTimeInterface
     */
    private $Date;

    /**
     * @var string
     */
    private $TypeDeclaration;

    /**
     * @var string
     */
    private $NomInterneEtablissement;

    /**
     * @var string
     */
    private $Destinataire;

    /**
     * @var bool
     */
    private $Obsolete;

    /**
     * @var bool
     */
    private $Test;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEtatDeclarationRetour
     */
    private $Retour;

    /**
     * @return string
     */
    public function getNumeroADS()
    {
        return $this->NumeroADS;
    }

    /**
     * @param string $NumeroADS
     * @return CPAISWSEtatDeclaration
     */
    public function withNumeroADS($NumeroADS)
    {
        $new = clone $this;
        $new->NumeroADS = $NumeroADS;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param \DateTimeInterface $Date
     * @return CPAISWSEtatDeclaration
     */
    public function withDate($Date)
    {
        $new = clone $this;
        $new->Date = $Date;

        return $new;
    }

    /**
     * @return string
     */
    public function getTypeDeclaration()
    {
        return $this->TypeDeclaration;
    }

    /**
     * @param string $TypeDeclaration
     * @return CPAISWSEtatDeclaration
     */
    public function withTypeDeclaration($TypeDeclaration)
    {
        $new = clone $this;
        $new->TypeDeclaration = $TypeDeclaration;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomInterneEtablissement()
    {
        return $this->NomInterneEtablissement;
    }

    /**
     * @param string $NomInterneEtablissement
     * @return CPAISWSEtatDeclaration
     */
    public function withNomInterneEtablissement($NomInterneEtablissement)
    {
        $new = clone $this;
        $new->NomInterneEtablissement = $NomInterneEtablissement;

        return $new;
    }

    /**
     * @return string
     */
    public function getDestinataire()
    {
        return $this->Destinataire;
    }

    /**
     * @param string $Destinataire
     * @return CPAISWSEtatDeclaration
     */
    public function withDestinataire($Destinataire)
    {
        $new = clone $this;
        $new->Destinataire = $Destinataire;

        return $new;
    }

    /**
     * @return bool
     */
    public function getObsolete()
    {
        return $this->Obsolete;
    }

    /**
     * @param bool $Obsolete
     * @return CPAISWSEtatDeclaration
     */
    public function withObsolete($Obsolete)
    {
        $new = clone $this;
        $new->Obsolete = $Obsolete;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTest()
    {
        return $this->Test;
    }

    /**
     * @param bool $Test
     * @return CPAISWSEtatDeclaration
     */
    public function withTest($Test)
    {
        $new = clone $this;
        $new->Test = $Test;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEtatDeclarationRetour
     */
    public function getRetour()
    {
        return $this->Retour;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEtatDeclarationRetour $Retour
     * @return CPAISWSEtatDeclaration
     */
    public function withRetour($Retour)
    {
        $new = clone $this;
        $new->Retour = $Retour;

        return $new;
    }
}

