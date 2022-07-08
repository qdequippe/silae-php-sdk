<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAjouteCompteRenduEdiResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSAjouteCompteRenduEdiResult
     */
    private $SWS_AjouteCompteRenduEdiResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSAjouteCompteRenduEdiResult
     */
    public function getSWS_AjouteCompteRenduEdiResult()
    {
        return $this->SWS_AjouteCompteRenduEdiResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSAjouteCompteRenduEdiResult $SWS_AjouteCompteRenduEdiResult
     * @return SWSAjouteCompteRenduEdiResponse
     */
    public function withSWS_AjouteCompteRenduEdiResult($SWS_AjouteCompteRenduEdiResult)
    {
        $new = clone $this;
        $new->SWS_AjouteCompteRenduEdiResult = $SWS_AjouteCompteRenduEdiResult;

        return $new;
    }
}

