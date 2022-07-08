<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSRecupererDeclarationsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSRecupererDeclarationsResult
     */
    private $SWS_RecupererDeclarationsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSRecupererDeclarationsResult
     */
    public function getSWS_RecupererDeclarationsResult()
    {
        return $this->SWS_RecupererDeclarationsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSRecupererDeclarationsResult $SWS_RecupererDeclarationsResult
     * @return SWSRecupererDeclarationsResponse
     */
    public function withSWS_RecupererDeclarationsResult($SWS_RecupererDeclarationsResult)
    {
        $new = clone $this;
        $new->SWS_RecupererDeclarationsResult = $SWS_RecupererDeclarationsResult;

        return $new;
    }
}

