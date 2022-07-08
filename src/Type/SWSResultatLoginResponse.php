<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSResultatLoginResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult
     */
    private $SWS_ResultatLoginResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult
     */
    public function getSWS_ResultatLoginResult()
    {
        return $this->SWS_ResultatLoginResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult $SWS_ResultatLoginResult
     * @return SWSResultatLoginResponse
     */
    public function withSWS_ResultatLoginResult($SWS_ResultatLoginResult)
    {
        $new = clone $this;
        $new->SWS_ResultatLoginResult = $SWS_ResultatLoginResult;

        return $new;
    }
}

