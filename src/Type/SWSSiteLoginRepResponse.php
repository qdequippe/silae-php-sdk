<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSiteLoginRepResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLoginResult
     */
    private $SWS_SiteLoginRepResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLoginResult
     */
    public function getSWS_SiteLoginRepResult()
    {
        return $this->SWS_SiteLoginRepResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLoginResult $SWS_SiteLoginRepResult
     * @return SWSSiteLoginRepResponse
     */
    public function withSWS_SiteLoginRepResult($SWS_SiteLoginRepResult)
    {
        $new = clone $this;
        $new->SWS_SiteLoginRepResult = $SWS_SiteLoginRepResult;

        return $new;
    }
}

