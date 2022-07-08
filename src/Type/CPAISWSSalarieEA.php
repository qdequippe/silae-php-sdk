<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieEA
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM
     */
    private $Salarie;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPeriodeActivite
     */
    private $PeriodeActivite;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSContenuEA
     */
    private $Contenu;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM
     */
    public function getSalarie()
    {
        return $this->Salarie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSSalarieTM $Salarie
     * @return CPAISWSSalarieEA
     */
    public function withSalarie($Salarie)
    {
        $new = clone $this;
        $new->Salarie = $Salarie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPeriodeActivite
     */
    public function getPeriodeActivite()
    {
        return $this->PeriodeActivite;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPeriodeActivite $PeriodeActivite
     * @return CPAISWSSalarieEA
     */
    public function withPeriodeActivite($PeriodeActivite)
    {
        $new = clone $this;
        $new->PeriodeActivite = $PeriodeActivite;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSContenuEA
     */
    public function getContenu()
    {
        return $this->Contenu;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSContenuEA $Contenu
     * @return CPAISWSSalarieEA
     */
    public function withContenu($Contenu)
    {
        $new = clone $this;
        $new->Contenu = $Contenu;

        return $new;
    }
}

