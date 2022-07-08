<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSRecupererImageResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSRecupererImageResult
     */
    private $SWS_RecupererImageResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSRecupererImageResult
     */
    public function getSWS_RecupererImageResult()
    {
        return $this->SWS_RecupererImageResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSRecupererImageResult $SWS_RecupererImageResult
     * @return SWSRecupererImageResponse
     */
    public function withSWS_RecupererImageResult($SWS_RecupererImageResult)
    {
        $new = clone $this;
        $new->SWS_RecupererImageResult = $SWS_RecupererImageResult;

        return $new;
    }
}

