<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieReinitialiserIdentifiantsEmploisResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserIdentifiantsEmploisResult
     */
    private $SWS_SalarieReinitialiserIdentifiantsEmploisResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserIdentifiantsEmploisResult
     */
    public function getSWS_SalarieReinitialiserIdentifiantsEmploisResult()
    {
        return $this->SWS_SalarieReinitialiserIdentifiantsEmploisResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserIdentifiantsEmploisResult $SWS_SalarieReinitialiserIdentifiantsEmploisResult
     * @return SWSSalarieReinitialiserIdentifiantsEmploisResponse
     */
    public function withSWS_SalarieReinitialiserIdentifiantsEmploisResult($SWS_SalarieReinitialiserIdentifiantsEmploisResult)
    {
        $new = clone $this;
        $new->SWS_SalarieReinitialiserIdentifiantsEmploisResult = $SWS_SalarieReinitialiserIdentifiantsEmploisResult;

        return $new;
    }
}

