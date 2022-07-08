<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSTintinBetaResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSTintinAdditionalResult
     */
    private $SWS_TintinBetaResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSTintinAdditionalResult
     */
    public function getSWS_TintinBetaResult()
    {
        return $this->SWS_TintinBetaResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSTintinAdditionalResult $SWS_TintinBetaResult
     * @return SWSTintinBetaResponse
     */
    public function withSWS_TintinBetaResult($SWS_TintinBetaResult)
    {
        $new = clone $this;
        $new->SWS_TintinBetaResult = $SWS_TintinBetaResult;

        return $new;
    }
}

