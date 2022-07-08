<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSRechercheCCNResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCCN
     */
    private $CCN;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCCN
     */
    public function getCCN()
    {
        return $this->CCN;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCCN $CCN
     * @return SWSRechercheCCNResult
     */
    public function withCCN($CCN)
    {
        $new = clone $this;
        $new->CCN = $CCN;

        return $new;
    }
}

