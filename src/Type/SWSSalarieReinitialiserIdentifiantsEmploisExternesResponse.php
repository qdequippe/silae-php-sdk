<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieReinitialiserIdentifiantsEmploisExternesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserIdentifiantsEmploisExternesResult
     */
    private $SWS_SalarieReinitialiserIdentifiantsEmploisExternesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserIdentifiantsEmploisExternesResult
     */
    public function getSWS_SalarieReinitialiserIdentifiantsEmploisExternesResult()
    {
        return $this->SWS_SalarieReinitialiserIdentifiantsEmploisExternesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieReinitialiserIdentifiantsEmploisExternesResult $SWS_SalarieReinitialiserIdentifiantsEmploisExternesResult
     * @return SWSSalarieReinitialiserIdentifiantsEmploisExternesResponse
     */
    public function withSWS_SalarieReinitialiserIdentifiantsEmploisExternesResult($SWS_SalarieReinitialiserIdentifiantsEmploisExternesResult)
    {
        $new = clone $this;
        $new->SWS_SalarieReinitialiserIdentifiantsEmploisExternesResult = $SWS_SalarieReinitialiserIdentifiantsEmploisExternesResult;

        return $new;
    }
}

