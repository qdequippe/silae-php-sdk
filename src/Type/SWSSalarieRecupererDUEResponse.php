<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieRecupererDUEResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieRecupererDUEResult
     */
    private $SWS_SalarieRecupererDUEResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieRecupererDUEResult
     */
    public function getSWS_SalarieRecupererDUEResult()
    {
        return $this->SWS_SalarieRecupererDUEResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieRecupererDUEResult $SWS_SalarieRecupererDUEResult
     * @return SWSSalarieRecupererDUEResponse
     */
    public function withSWS_SalarieRecupererDUEResult($SWS_SalarieRecupererDUEResult)
    {
        $new = clone $this;
        $new->SWS_SalarieRecupererDUEResult = $SWS_SalarieRecupererDUEResult;

        return $new;
    }
}

