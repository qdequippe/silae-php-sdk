<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSReponseSalarieSalaireDeBase
{
    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var int
     */
    private $IdentifiantEmploi;

    /**
     * @var float
     */
    private $SalaireDeBase;

    /**
     * @var float
     */
    private $SalaireDeBaseHeuresNormales;

    /**
     * @var float
     */
    private $SalaireDeBaseHeuresMajorees;

    /**
     * @var float
     */
    private $SalaireDeBaseHLibre1;

    /**
     * @var float
     */
    private $SalaireDeBaseHLibre2;

    /**
     * @var float
     */
    private $SalaireDeBaseHLibre3;

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSReponseSalarieSalaireDeBase
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
     * @return CPAISWSReponseSalarieSalaireDeBase
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return float
     */
    public function getSalaireDeBase()
    {
        return $this->SalaireDeBase;
    }

    /**
     * @param float $SalaireDeBase
     * @return CPAISWSReponseSalarieSalaireDeBase
     */
    public function withSalaireDeBase($SalaireDeBase)
    {
        $new = clone $this;
        $new->SalaireDeBase = $SalaireDeBase;

        return $new;
    }

    /**
     * @return float
     */
    public function getSalaireDeBaseHeuresNormales()
    {
        return $this->SalaireDeBaseHeuresNormales;
    }

    /**
     * @param float $SalaireDeBaseHeuresNormales
     * @return CPAISWSReponseSalarieSalaireDeBase
     */
    public function withSalaireDeBaseHeuresNormales($SalaireDeBaseHeuresNormales)
    {
        $new = clone $this;
        $new->SalaireDeBaseHeuresNormales = $SalaireDeBaseHeuresNormales;

        return $new;
    }

    /**
     * @return float
     */
    public function getSalaireDeBaseHeuresMajorees()
    {
        return $this->SalaireDeBaseHeuresMajorees;
    }

    /**
     * @param float $SalaireDeBaseHeuresMajorees
     * @return CPAISWSReponseSalarieSalaireDeBase
     */
    public function withSalaireDeBaseHeuresMajorees($SalaireDeBaseHeuresMajorees)
    {
        $new = clone $this;
        $new->SalaireDeBaseHeuresMajorees = $SalaireDeBaseHeuresMajorees;

        return $new;
    }

    /**
     * @return float
     */
    public function getSalaireDeBaseHLibre1()
    {
        return $this->SalaireDeBaseHLibre1;
    }

    /**
     * @param float $SalaireDeBaseHLibre1
     * @return CPAISWSReponseSalarieSalaireDeBase
     */
    public function withSalaireDeBaseHLibre1($SalaireDeBaseHLibre1)
    {
        $new = clone $this;
        $new->SalaireDeBaseHLibre1 = $SalaireDeBaseHLibre1;

        return $new;
    }

    /**
     * @return float
     */
    public function getSalaireDeBaseHLibre2()
    {
        return $this->SalaireDeBaseHLibre2;
    }

    /**
     * @param float $SalaireDeBaseHLibre2
     * @return CPAISWSReponseSalarieSalaireDeBase
     */
    public function withSalaireDeBaseHLibre2($SalaireDeBaseHLibre2)
    {
        $new = clone $this;
        $new->SalaireDeBaseHLibre2 = $SalaireDeBaseHLibre2;

        return $new;
    }

    /**
     * @return float
     */
    public function getSalaireDeBaseHLibre3()
    {
        return $this->SalaireDeBaseHLibre3;
    }

    /**
     * @param float $SalaireDeBaseHLibre3
     * @return CPAISWSReponseSalarieSalaireDeBase
     */
    public function withSalaireDeBaseHLibre3($SalaireDeBaseHLibre3)
    {
        $new = clone $this;
        $new->SalaireDeBaseHLibre3 = $SalaireDeBaseHLibre3;

        return $new;
    }
}

