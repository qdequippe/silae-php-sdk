<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieAjouterPrimeResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterPrimeResult
     */
    private $SWS_SalarieAjouterPrimeResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterPrimeResult
     */
    public function getSWS_SalarieAjouterPrimeResult()
    {
        return $this->SWS_SalarieAjouterPrimeResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterPrimeResult $SWS_SalarieAjouterPrimeResult
     * @return SWSSalarieAjouterPrimeResponse
     */
    public function withSWS_SalarieAjouterPrimeResult($SWS_SalarieAjouterPrimeResult)
    {
        $new = clone $this;
        $new->SWS_SalarieAjouterPrimeResult = $SWS_SalarieAjouterPrimeResult;

        return $new;
    }
}

