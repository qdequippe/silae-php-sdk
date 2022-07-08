<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieEtEmploiTM
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
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM
     */
    public function getSalarie()
    {
        return $this->Salarie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM $Salarie
     * @return CPAISWSSalarieEtEmploiTM
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
     * @return CPAISWSSalarieEtEmploiTM
     */
    public function withEmploi($Emploi)
    {
        $new = clone $this;
        $new->Emploi = $Emploi;

        return $new;
    }
}

