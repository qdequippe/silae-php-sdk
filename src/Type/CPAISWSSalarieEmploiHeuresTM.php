<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieEmploiHeuresTM
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM
     */
    private $Salarie;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiTM
     */
    private $Emploi;

    /**
     * @var int
     */
    private $TypeBulletin;

    /**
     * @var bool
     */
    private $HeuresAConfirmer;

    /**
     * @var bool
     */
    private $HeuresConfirmees;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInfoSaisieHeureTM
     */
    private $InfosSaisies;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM
     */
    public function getSalarie()
    {
        return $this->Salarie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM $Salarie
     * @return CPAISWSSalarieEmploiHeuresTM
     */
    public function withSalarie($Salarie)
    {
        $new = clone $this;
        $new->Salarie = $Salarie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiTM
     */
    public function getEmploi()
    {
        return $this->Emploi;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieEmploiTM $Emploi
     * @return CPAISWSSalarieEmploiHeuresTM
     */
    public function withEmploi($Emploi)
    {
        $new = clone $this;
        $new->Emploi = $Emploi;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypeBulletin()
    {
        return $this->TypeBulletin;
    }

    /**
     * @param int $TypeBulletin
     * @return CPAISWSSalarieEmploiHeuresTM
     */
    public function withTypeBulletin($TypeBulletin)
    {
        $new = clone $this;
        $new->TypeBulletin = $TypeBulletin;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHeuresAConfirmer()
    {
        return $this->HeuresAConfirmer;
    }

    /**
     * @param bool $HeuresAConfirmer
     * @return CPAISWSSalarieEmploiHeuresTM
     */
    public function withHeuresAConfirmer($HeuresAConfirmer)
    {
        $new = clone $this;
        $new->HeuresAConfirmer = $HeuresAConfirmer;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHeuresConfirmees()
    {
        return $this->HeuresConfirmees;
    }

    /**
     * @param bool $HeuresConfirmees
     * @return CPAISWSSalarieEmploiHeuresTM
     */
    public function withHeuresConfirmees($HeuresConfirmees)
    {
        $new = clone $this;
        $new->HeuresConfirmees = $HeuresConfirmees;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInfoSaisieHeureTM
     */
    public function getInfosSaisies()
    {
        return $this->InfosSaisies;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInfoSaisieHeureTM $InfosSaisies
     * @return CPAISWSSalarieEmploiHeuresTM
     */
    public function withInfosSaisies($InfosSaisies)
    {
        $new = clone $this;
        $new->InfosSaisies = $InfosSaisies;

        return $new;
    }
}

