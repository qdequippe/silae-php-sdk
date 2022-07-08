<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSAnalyseProductionPaieDetailResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieBase
     */
    private $Salaires;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieBase
     */
    public function getSalaires()
    {
        return $this->Salaires;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieBase $Salaires
     * @return SWSAnalyseProductionPaieDetailResult
     */
    public function withSalaires($Salaires)
    {
        $new = clone $this;
        $new->Salaires = $Salaires;

        return $new;
    }
}

