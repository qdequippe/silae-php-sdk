<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSiteLoginEx2Response implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult
     */
    private $SWS_SiteLoginEx2Result;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult
     */
    public function getSWS_SiteLoginEx2Result()
    {
        return $this->SWS_SiteLoginEx2Result;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult $SWS_SiteLoginEx2Result
     * @return SWSSiteLoginEx2Response
     */
    public function withSWS_SiteLoginEx2Result($SWS_SiteLoginEx2Result)
    {
        $new = clone $this;
        $new->SWS_SiteLoginEx2Result = $SWS_SiteLoginEx2Result;

        return $new;
    }
}

