<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSArgumentHMens
{
    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $FiltreSalarie;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSArgumentHMens
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getFiltreSalarie()
    {
        return $this->FiltreSalarie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $FiltreSalarie
     * @return CPAISWSArgumentHMens
     */
    public function withFiltreSalarie($FiltreSalarie)
    {
        $new = clone $this;
        $new->FiltreSalarie = $FiltreSalarie;

        return $new;
    }
}

