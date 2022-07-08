<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSTintinDeltaResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSTintinAdditionalResult
     */
    private $SWS_TintinDeltaResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSTintinAdditionalResult
     */
    public function getSWS_TintinDeltaResult()
    {
        return $this->SWS_TintinDeltaResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSTintinAdditionalResult $SWS_TintinDeltaResult
     * @return SWSTintinDeltaResponse
     */
    public function withSWS_TintinDeltaResult($SWS_TintinDeltaResult)
    {
        $new = clone $this;
        $new->SWS_TintinDeltaResult = $SWS_TintinDeltaResult;

        return $new;
    }
}

