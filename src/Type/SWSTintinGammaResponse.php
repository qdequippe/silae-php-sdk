<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSTintinGammaResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSTintinAdditionalResult
     */
    private $SWS_TintinGammaResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSTintinAdditionalResult
     */
    public function getSWS_TintinGammaResult()
    {
        return $this->SWS_TintinGammaResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSTintinAdditionalResult $SWS_TintinGammaResult
     * @return SWSTintinGammaResponse
     */
    public function withSWS_TintinGammaResult($SWS_TintinGammaResult)
    {
        $new = clone $this;
        $new->SWS_TintinGammaResult = $SWS_TintinGammaResult;

        return $new;
    }
}

