<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieAjouterAcompteResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAcompteResult
     */
    private $SWS_SalarieAjouterAcompteResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAcompteResult
     */
    public function getSWS_SalarieAjouterAcompteResult()
    {
        return $this->SWS_SalarieAjouterAcompteResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAcompteResult $SWS_SalarieAjouterAcompteResult
     * @return SWSSalarieAjouterAcompteResponse
     */
    public function withSWS_SalarieAjouterAcompteResult($SWS_SalarieAjouterAcompteResult)
    {
        $new = clone $this;
        $new->SWS_SalarieAjouterAcompteResult = $SWS_SalarieAjouterAcompteResult;

        return $new;
    }
}

