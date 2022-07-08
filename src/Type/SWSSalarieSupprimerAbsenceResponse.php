<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieSupprimerAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieSupprimerAbsenceResult
     */
    private $SWS_SalarieSupprimerAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieSupprimerAbsenceResult
     */
    public function getSWS_SalarieSupprimerAbsenceResult()
    {
        return $this->SWS_SalarieSupprimerAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieSupprimerAbsenceResult $SWS_SalarieSupprimerAbsenceResult
     * @return SWSSalarieSupprimerAbsenceResponse
     */
    public function withSWS_SalarieSupprimerAbsenceResult($SWS_SalarieSupprimerAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_SalarieSupprimerAbsenceResult = $SWS_SalarieSupprimerAbsenceResult;

        return $new;
    }
}

