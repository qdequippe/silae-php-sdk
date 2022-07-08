<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSalarieAjouterAbsenceResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAbsenceResult
     */
    private $SWS_SalarieAjouterAbsenceResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAbsenceResult
     */
    public function getSWS_SalarieAjouterAbsenceResult()
    {
        return $this->SWS_SalarieAjouterAbsenceResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSalarieAjouterAbsenceResult $SWS_SalarieAjouterAbsenceResult
     * @return SWSSalarieAjouterAbsenceResponse
     */
    public function withSWS_SalarieAjouterAbsenceResult($SWS_SalarieAjouterAbsenceResult)
    {
        $new = clone $this;
        $new->SWS_SalarieAjouterAbsenceResult = $SWS_SalarieAjouterAbsenceResult;

        return $new;
    }
}

