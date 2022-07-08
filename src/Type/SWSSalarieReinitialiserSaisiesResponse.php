<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieReinitialiserSaisiesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserSaisiesResult
     */
    private $SWS_SalarieReinitialiserSaisiesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserSaisiesResult
     */
    public function getSWS_SalarieReinitialiserSaisiesResult()
    {
        return $this->SWS_SalarieReinitialiserSaisiesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserSaisiesResult $SWS_SalarieReinitialiserSaisiesResult
     * @return SWSSalarieReinitialiserSaisiesResponse
     */
    public function withSWS_SalarieReinitialiserSaisiesResult($SWS_SalarieReinitialiserSaisiesResult)
    {
        $new = clone $this;
        $new->SWS_SalarieReinitialiserSaisiesResult = $SWS_SalarieReinitialiserSaisiesResult;

        return $new;
    }
}

