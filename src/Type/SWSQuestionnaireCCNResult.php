<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSQuestionnaireCCNResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSQCCN
     */
    private $QCCN;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSQCCN
     */
    public function getQCCN()
    {
        return $this->QCCN;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSQCCN $QCCN
     * @return SWSQuestionnaireCCNResult
     */
    public function withQCCN($QCCN)
    {
        $new = clone $this;
        $new->QCCN = $QCCN;

        return $new;
    }
}

