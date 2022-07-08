<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEtatSessionResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEtatSessionResult
     */
    private $SWS_EtatSessionResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEtatSessionResult
     */
    public function getSWS_EtatSessionResult()
    {
        return $this->SWS_EtatSessionResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEtatSessionResult $SWS_EtatSessionResult
     * @return SWSEtatSessionResponse
     */
    public function withSWS_EtatSessionResult($SWS_EtatSessionResult)
    {
        $new = clone $this;
        $new->SWS_EtatSessionResult = $SWS_EtatSessionResult;

        return $new;
    }
}

