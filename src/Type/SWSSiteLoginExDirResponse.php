<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSiteLoginExDirResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult
     */
    private $SWS_SiteLoginExDirResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult
     */
    public function getSWS_SiteLoginExDirResult()
    {
        return $this->SWS_SiteLoginExDirResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult $SWS_SiteLoginExDirResult
     * @return SWSSiteLoginExDirResponse
     */
    public function withSWS_SiteLoginExDirResult($SWS_SiteLoginExDirResult)
    {
        $new = clone $this;
        $new->SWS_SiteLoginExDirResult = $SWS_SiteLoginExDirResult;

        return $new;
    }
}

