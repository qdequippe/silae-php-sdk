<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAjouteCompteRenduEdi94Response implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSAjouteCompteRenduEdi94Result
     */
    private $SWS_AjouteCompteRenduEdi94Result;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSAjouteCompteRenduEdi94Result
     */
    public function getSWS_AjouteCompteRenduEdi94Result()
    {
        return $this->SWS_AjouteCompteRenduEdi94Result;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSAjouteCompteRenduEdi94Result $SWS_AjouteCompteRenduEdi94Result
     * @return SWSAjouteCompteRenduEdi94Response
     */
    public function withSWS_AjouteCompteRenduEdi94Result($SWS_AjouteCompteRenduEdi94Result)
    {
        $new = clone $this;
        $new->SWS_AjouteCompteRenduEdi94Result = $SWS_AjouteCompteRenduEdi94Result;

        return $new;
    }
}

