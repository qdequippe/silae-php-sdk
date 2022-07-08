<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieAjouterHeuresSurEmploiResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresResult
     */
    private $SWS_SalarieAjouterHeuresSurEmploiResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresResult
     */
    public function getSWS_SalarieAjouterHeuresSurEmploiResult()
    {
        return $this->SWS_SalarieAjouterHeuresSurEmploiResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresResult $SWS_SalarieAjouterHeuresSurEmploiResult
     * @return SWSSalarieAjouterHeuresSurEmploiResponse
     */
    public function withSWS_SalarieAjouterHeuresSurEmploiResult($SWS_SalarieAjouterHeuresSurEmploiResult)
    {
        $new = clone $this;
        $new->SWS_SalarieAjouterHeuresSurEmploiResult = $SWS_SalarieAjouterHeuresSurEmploiResult;

        return $new;
    }
}

