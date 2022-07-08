<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureAxesAnalytiquesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAxeAnalytique
     */
    private $AxesAnalytiques;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAxeAnalytique
     */
    public function getAxesAnalytiques()
    {
        return $this->AxesAnalytiques;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAxeAnalytique $AxesAnalytiques
     * @return SWSLectureAxesAnalytiquesResult
     */
    public function withAxesAnalytiques($AxesAnalytiques)
    {
        $new = clone $this;
        $new->AxesAnalytiques = $AxesAnalytiques;

        return $new;
    }
}

