<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalariesConfirmerSaisiesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalariesConfirmerSaisiesResult
     */
    private $SWS_SalariesConfirmerSaisiesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalariesConfirmerSaisiesResult
     */
    public function getSWS_SalariesConfirmerSaisiesResult()
    {
        return $this->SWS_SalariesConfirmerSaisiesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalariesConfirmerSaisiesResult $SWS_SalariesConfirmerSaisiesResult
     * @return SWSSalariesConfirmerSaisiesResponse
     */
    public function withSWS_SalariesConfirmerSaisiesResult($SWS_SalariesConfirmerSaisiesResult)
    {
        $new = clone $this;
        $new->SWS_SalariesConfirmerSaisiesResult = $SWS_SalariesConfirmerSaisiesResult;

        return $new;
    }
}

