<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSStatistiquesProductionUtilisateur
{
    /**
     * @var string
     */
    private $IdentifiantUtilisateur;

    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var int
     */
    private $NbBulletins;

    /**
     * @return string
     */
    public function getIdentifiantUtilisateur()
    {
        return $this->IdentifiantUtilisateur;
    }

    /**
     * @param string $IdentifiantUtilisateur
     * @return CPAISWSStatistiquesProductionUtilisateur
     */
    public function withIdentifiantUtilisateur($IdentifiantUtilisateur)
    {
        $new = clone $this;
        $new->IdentifiantUtilisateur = $IdentifiantUtilisateur;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSStatistiquesProductionUtilisateur
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return int
     */
    public function getNbBulletins()
    {
        return $this->NbBulletins;
    }

    /**
     * @param int $NbBulletins
     * @return CPAISWSStatistiquesProductionUtilisateur
     */
    public function withNbBulletins($NbBulletins)
    {
        $new = clone $this;
        $new->NbBulletins = $NbBulletins;

        return $new;
    }
}

