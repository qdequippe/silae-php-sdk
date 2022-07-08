<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLogoutResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLogoutResult
     */
    private $SWS_LogoutResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLogoutResult
     */
    public function getSWS_LogoutResult()
    {
        return $this->SWS_LogoutResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLogoutResult $SWS_LogoutResult
     * @return SWSLogoutResponse
     */
    public function withSWS_LogoutResult($SWS_LogoutResult)
    {
        $new = clone $this;
        $new->SWS_LogoutResult = $SWS_LogoutResult;

        return $new;
    }
}

