<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieAjouterHeuresNativesSurEmploiResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresResult
     */
    private $SWS_SalarieAjouterHeuresNativesSurEmploiResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresResult
     */
    public function getSWS_SalarieAjouterHeuresNativesSurEmploiResult()
    {
        return $this->SWS_SalarieAjouterHeuresNativesSurEmploiResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterHeuresResult $SWS_SalarieAjouterHeuresNativesSurEmploiResult
     * @return SWSSalarieAjouterHeuresNativesSurEmploiResponse
     */
    public function withSWS_SalarieAjouterHeuresNativesSurEmploiResult($SWS_SalarieAjouterHeuresNativesSurEmploiResult)
    {
        $new = clone $this;
        $new->SWS_SalarieAjouterHeuresNativesSurEmploiResult = $SWS_SalarieAjouterHeuresNativesSurEmploiResult;

        return $new;
    }
}

