<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSTintinResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSTintinResult
     */
    private $SWS_TintinResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSTintinResult
     */
    public function getSWS_TintinResult()
    {
        return $this->SWS_TintinResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSTintinResult $SWS_TintinResult
     * @return SWSTintinResponse
     */
    public function withSWS_TintinResult($SWS_TintinResult)
    {
        $new = clone $this;
        $new->SWS_TintinResult = $SWS_TintinResult;

        return $new;
    }
}

