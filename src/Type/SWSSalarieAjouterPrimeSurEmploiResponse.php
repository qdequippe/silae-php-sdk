<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieAjouterPrimeSurEmploiResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterPrimeResult
     */
    private $SWS_SalarieAjouterPrimeSurEmploiResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterPrimeResult
     */
    public function getSWS_SalarieAjouterPrimeSurEmploiResult()
    {
        return $this->SWS_SalarieAjouterPrimeSurEmploiResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterPrimeResult $SWS_SalarieAjouterPrimeSurEmploiResult
     * @return SWSSalarieAjouterPrimeSurEmploiResponse
     */
    public function withSWS_SalarieAjouterPrimeSurEmploiResult($SWS_SalarieAjouterPrimeSurEmploiResult)
    {
        $new = clone $this;
        $new->SWS_SalarieAjouterPrimeSurEmploiResult = $SWS_SalarieAjouterPrimeSurEmploiResult;

        return $new;
    }
}

