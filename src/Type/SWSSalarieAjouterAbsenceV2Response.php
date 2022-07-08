<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieAjouterAbsenceV2Response implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAbsenceV2Result
     */
    private $SWS_SalarieAjouterAbsence_V2Result;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAbsenceV2Result
     */
    public function getSWS_SalarieAjouterAbsence_V2Result()
    {
        return $this->SWS_SalarieAjouterAbsence_V2Result;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAbsenceV2Result $SWS_SalarieAjouterAbsence_V2Result
     * @return SWSSalarieAjouterAbsenceV2Response
     */
    public function withSWS_SalarieAjouterAbsence_V2Result($SWS_SalarieAjouterAbsence_V2Result)
    {
        $new = clone $this;
        $new->SWS_SalarieAjouterAbsence_V2Result = $SWS_SalarieAjouterAbsence_V2Result;

        return $new;
    }
}

