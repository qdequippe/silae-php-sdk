<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieAjouterElementVariableResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterElementVariableResult
     */
    private $SWS_SalarieAjouterElementVariableResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterElementVariableResult
     */
    public function getSWS_SalarieAjouterElementVariableResult()
    {
        return $this->SWS_SalarieAjouterElementVariableResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterElementVariableResult $SWS_SalarieAjouterElementVariableResult
     * @return SWSSalarieAjouterElementVariableResponse
     */
    public function withSWS_SalarieAjouterElementVariableResult($SWS_SalarieAjouterElementVariableResult)
    {
        $new = clone $this;
        $new->SWS_SalarieAjouterElementVariableResult = $SWS_SalarieAjouterElementVariableResult;

        return $new;
    }
}

