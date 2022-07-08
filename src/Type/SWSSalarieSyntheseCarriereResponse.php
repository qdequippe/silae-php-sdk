<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieSyntheseCarriereResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieSyntheseCarriereResult
     */
    private $SWS_SalarieSyntheseCarriereResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieSyntheseCarriereResult
     */
    public function getSWS_SalarieSyntheseCarriereResult()
    {
        return $this->SWS_SalarieSyntheseCarriereResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieSyntheseCarriereResult $SWS_SalarieSyntheseCarriereResult
     * @return SWSSalarieSyntheseCarriereResponse
     */
    public function withSWS_SalarieSyntheseCarriereResult($SWS_SalarieSyntheseCarriereResult)
    {
        $new = clone $this;
        $new->SWS_SalarieSyntheseCarriereResult = $SWS_SalarieSyntheseCarriereResult;

        return $new;
    }
}

