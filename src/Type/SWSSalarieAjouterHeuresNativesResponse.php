<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieAjouterHeuresNativesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresResult
     */
    private $SWS_SalarieAjouterHeuresNativesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresResult
     */
    public function getSWS_SalarieAjouterHeuresNativesResult()
    {
        return $this->SWS_SalarieAjouterHeuresNativesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresResult $SWS_SalarieAjouterHeuresNativesResult
     * @return SWSSalarieAjouterHeuresNativesResponse
     */
    public function withSWS_SalarieAjouterHeuresNativesResult($SWS_SalarieAjouterHeuresNativesResult)
    {
        $new = clone $this;
        $new->SWS_SalarieAjouterHeuresNativesResult = $SWS_SalarieAjouterHeuresNativesResult;

        return $new;
    }
}

