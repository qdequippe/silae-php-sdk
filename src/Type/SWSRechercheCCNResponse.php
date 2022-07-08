<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSRechercheCCNResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSRechercheCCNResult
     */
    private $SWS_RechercheCCNResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSRechercheCCNResult
     */
    public function getSWS_RechercheCCNResult()
    {
        return $this->SWS_RechercheCCNResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSRechercheCCNResult $SWS_RechercheCCNResult
     * @return SWSRechercheCCNResponse
     */
    public function withSWS_RechercheCCNResult($SWS_RechercheCCNResult)
    {
        $new = clone $this;
        $new->SWS_RechercheCCNResult = $SWS_RechercheCCNResult;

        return $new;
    }
}

