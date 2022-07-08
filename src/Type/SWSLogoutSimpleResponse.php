<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLogoutSimpleResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $SWS_LogoutSimpleResult;

    /**
     * @return string
     */
    public function getSWS_LogoutSimpleResult()
    {
        return $this->SWS_LogoutSimpleResult;
    }

    /**
     * @param string $SWS_LogoutSimpleResult
     * @return SWSLogoutSimpleResponse
     */
    public function withSWS_LogoutSimpleResult($SWS_LogoutSimpleResult)
    {
        $new = clone $this;
        $new->SWS_LogoutSimpleResult = $SWS_LogoutSimpleResult;

        return $new;
    }
}

