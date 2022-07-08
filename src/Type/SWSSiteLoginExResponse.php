<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSiteLoginExResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult
     */
    private $SWS_SiteLoginExResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult
     */
    public function getSWS_SiteLoginExResult()
    {
        return $this->SWS_SiteLoginExResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult $SWS_SiteLoginExResult
     * @return SWSSiteLoginExResponse
     */
    public function withSWS_SiteLoginExResult($SWS_SiteLoginExResult)
    {
        $new = clone $this;
        $new->SWS_SiteLoginExResult = $SWS_SiteLoginExResult;

        return $new;
    }
}

