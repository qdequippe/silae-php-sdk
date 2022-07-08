<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureAxesAnalytiquesSalariesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAxesAnalytiqueSalarie
     */
    private $AxesAnalytiqueSalarie;

    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAxesAnalytiqueSalarie
     */
    public function getAxesAnalytiqueSalarie()
    {
        return $this->AxesAnalytiqueSalarie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAxesAnalytiqueSalarie $AxesAnalytiqueSalarie
     * @return SWSLectureAxesAnalytiquesSalariesResult
     */
    public function withAxesAnalytiqueSalarie($AxesAnalytiqueSalarie)
    {
        $new = clone $this;
        $new->AxesAnalytiqueSalarie = $AxesAnalytiqueSalarie;

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
     * @return SWSLectureAxesAnalytiquesSalariesResult
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }
}

