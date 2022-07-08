<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieAjouterHeuresResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresResult
     */
    private $SWS_SalarieAjouterHeuresResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresResult
     */
    public function getSWS_SalarieAjouterHeuresResult()
    {
        return $this->SWS_SalarieAjouterHeuresResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresResult $SWS_SalarieAjouterHeuresResult
     * @return SWSSalarieAjouterHeuresResponse
     */
    public function withSWS_SalarieAjouterHeuresResult($SWS_SalarieAjouterHeuresResult)
    {
        $new = clone $this;
        $new->SWS_SalarieAjouterHeuresResult = $SWS_SalarieAjouterHeuresResult;

        return $new;
    }
}

