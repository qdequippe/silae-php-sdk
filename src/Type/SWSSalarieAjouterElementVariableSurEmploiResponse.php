<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieAjouterElementVariableSurEmploiResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterElementVariableResult
     */
    private $SWS_SalarieAjouterElementVariableSurEmploiResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterElementVariableResult
     */
    public function getSWS_SalarieAjouterElementVariableSurEmploiResult()
    {
        return $this->SWS_SalarieAjouterElementVariableSurEmploiResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterElementVariableResult $SWS_SalarieAjouterElementVariableSurEmploiResult
     * @return SWSSalarieAjouterElementVariableSurEmploiResponse
     */
    public function withSWS_SalarieAjouterElementVariableSurEmploiResult($SWS_SalarieAjouterElementVariableSurEmploiResult)
    {
        $new = clone $this;
        $new->SWS_SalarieAjouterElementVariableSurEmploiResult = $SWS_SalarieAjouterElementVariableSurEmploiResult;

        return $new;
    }
}

