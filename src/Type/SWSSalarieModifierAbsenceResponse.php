<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieModifierAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieModifierAbsenceResult
     */
    private $SWS_SalarieModifierAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieModifierAbsenceResult
     */
    public function getSWS_SalarieModifierAbsenceResult()
    {
        return $this->SWS_SalarieModifierAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieModifierAbsenceResult $SWS_SalarieModifierAbsenceResult
     * @return SWSSalarieModifierAbsenceResponse
     */
    public function withSWS_SalarieModifierAbsenceResult($SWS_SalarieModifierAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_SalarieModifierAbsenceResult = $SWS_SalarieModifierAbsenceResult;

        return $new;
    }
}

