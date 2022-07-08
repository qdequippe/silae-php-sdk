<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSArgumentConfirmerHMens
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfInt
     */
    private $Ar_ID_PAISALARIE;

    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfInt
     */
    public function getAr_ID_PAISALARIE()
    {
        return $this->Ar_ID_PAISALARIE;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfInt $Ar_ID_PAISALARIE
     * @return CPAISWSArgumentConfirmerHMens
     */
    public function withAr_ID_PAISALARIE($Ar_ID_PAISALARIE)
    {
        $new = clone $this;
        $new->Ar_ID_PAISALARIE = $Ar_ID_PAISALARIE;

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
     * @return CPAISWSArgumentConfirmerHMens
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }
}

