<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSComptesNumeroIntituleResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSComptesNumeroIntituleResult
     */
    private $SWS_ComptesNumeroIntituleResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSComptesNumeroIntituleResult
     */
    public function getSWS_ComptesNumeroIntituleResult()
    {
        return $this->SWS_ComptesNumeroIntituleResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSComptesNumeroIntituleResult $SWS_ComptesNumeroIntituleResult
     * @return SWSComptesNumeroIntituleResponse
     */
    public function withSWS_ComptesNumeroIntituleResult($SWS_ComptesNumeroIntituleResult)
    {
        $new = clone $this;
        $new->SWS_ComptesNumeroIntituleResult = $SWS_ComptesNumeroIntituleResult;

        return $new;
    }
}

