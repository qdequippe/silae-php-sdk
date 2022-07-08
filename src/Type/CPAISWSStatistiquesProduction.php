<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSStatistiquesProduction
{
    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var int
     */
    private $NbBulletinsOriginaux;

    /**
     * @var int
     */
    private $NbBulletinsOriginauxACalculer;

    /**
     * @var int
     */
    private $NbEntrees;

    /**
     * @var int
     */
    private $NbSorties;

    /**
     * @var int
     */
    private $NbDeclarations;

    /**
     * @var int
     */
    private $NbDUE;

    /**
     * @var int
     */
    private $NbAttestationsPoleEmploi;

    /**
     * @var int
     */
    private $NbIJSS;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSStatistiquesProduction
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
    public function getNbBulletinsOriginaux()
    {
        return $this->NbBulletinsOriginaux;
    }

    /**
     * @param int $NbBulletinsOriginaux
     * @return CPAISWSStatistiquesProduction
     */
    public function withNbBulletinsOriginaux($NbBulletinsOriginaux)
    {
        $new = clone $this;
        $new->NbBulletinsOriginaux = $NbBulletinsOriginaux;

        return $new;
    }

    /**
     * @return int
     */
    public function getNbBulletinsOriginauxACalculer()
    {
        return $this->NbBulletinsOriginauxACalculer;
    }

    /**
     * @param int $NbBulletinsOriginauxACalculer
     * @return CPAISWSStatistiquesProduction
     */
    public function withNbBulletinsOriginauxACalculer($NbBulletinsOriginauxACalculer)
    {
        $new = clone $this;
        $new->NbBulletinsOriginauxACalculer = $NbBulletinsOriginauxACalculer;

        return $new;
    }

    /**
     * @return int
     */
    public function getNbEntrees()
    {
        return $this->NbEntrees;
    }

    /**
     * @param int $NbEntrees
     * @return CPAISWSStatistiquesProduction
     */
    public function withNbEntrees($NbEntrees)
    {
        $new = clone $this;
        $new->NbEntrees = $NbEntrees;

        return $new;
    }

    /**
     * @return int
     */
    public function getNbSorties()
    {
        return $this->NbSorties;
    }

    /**
     * @param int $NbSorties
     * @return CPAISWSStatistiquesProduction
     */
    public function withNbSorties($NbSorties)
    {
        $new = clone $this;
        $new->NbSorties = $NbSorties;

        return $new;
    }

    /**
     * @return int
     */
    public function getNbDeclarations()
    {
        return $this->NbDeclarations;
    }

    /**
     * @param int $NbDeclarations
     * @return CPAISWSStatistiquesProduction
     */
    public function withNbDeclarations($NbDeclarations)
    {
        $new = clone $this;
        $new->NbDeclarations = $NbDeclarations;

        return $new;
    }

    /**
     * @return int
     */
    public function getNbDUE()
    {
        return $this->NbDUE;
    }

    /**
     * @param int $NbDUE
     * @return CPAISWSStatistiquesProduction
     */
    public function withNbDUE($NbDUE)
    {
        $new = clone $this;
        $new->NbDUE = $NbDUE;

        return $new;
    }

    /**
     * @return int
     */
    public function getNbAttestationsPoleEmploi()
    {
        return $this->NbAttestationsPoleEmploi;
    }

    /**
     * @param int $NbAttestationsPoleEmploi
     * @return CPAISWSStatistiquesProduction
     */
    public function withNbAttestationsPoleEmploi($NbAttestationsPoleEmploi)
    {
        $new = clone $this;
        $new->NbAttestationsPoleEmploi = $NbAttestationsPoleEmploi;

        return $new;
    }

    /**
     * @return int
     */
    public function getNbIJSS()
    {
        return $this->NbIJSS;
    }

    /**
     * @param int $NbIJSS
     * @return CPAISWSStatistiquesProduction
     */
    public function withNbIJSS($NbIJSS)
    {
        $new = clone $this;
        $new->NbIJSS = $NbIJSS;

        return $new;
    }
}

