<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieDUEResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieDUEResult
     */
    private $SWS_SalarieDUEResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieDUEResult
     */
    public function getSWS_SalarieDUEResult()
    {
        return $this->SWS_SalarieDUEResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieDUEResult $SWS_SalarieDUEResult
     * @return SWSSalarieDUEResponse
     */
    public function withSWS_SalarieDUEResult($SWS_SalarieDUEResult)
    {
        $new = clone $this;
        $new->SWS_SalarieDUEResult = $SWS_SalarieDUEResult;

        return $new;
    }
}

