<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieModifierAbsenceV2Response implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieModifierAbsenceV2Result
     */
    private $SWS_SalarieModifierAbsence_V2Result;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieModifierAbsenceV2Result
     */
    public function getSWS_SalarieModifierAbsence_V2Result()
    {
        return $this->SWS_SalarieModifierAbsence_V2Result;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieModifierAbsenceV2Result $SWS_SalarieModifierAbsence_V2Result
     * @return SWSSalarieModifierAbsenceV2Response
     */
    public function withSWS_SalarieModifierAbsence_V2Result($SWS_SalarieModifierAbsence_V2Result)
    {
        $new = clone $this;
        $new->SWS_SalarieModifierAbsence_V2Result = $SWS_SalarieModifierAbsence_V2Result;

        return $new;
    }
}

