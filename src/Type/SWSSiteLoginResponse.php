<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSiteLoginResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLoginResult
     */
    private $SWS_SiteLoginResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLoginResult
     */
    public function getSWS_SiteLoginResult()
    {
        return $this->SWS_SiteLoginResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLoginResult $SWS_SiteLoginResult
     * @return SWSSiteLoginResponse
     */
    public function withSWS_SiteLoginResult($SWS_SiteLoginResult)
    {
        $new = clone $this;
        $new->SWS_SiteLoginResult = $SWS_SiteLoginResult;

        return $new;
    }
}

