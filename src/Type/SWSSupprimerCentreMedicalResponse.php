<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSupprimerCentreMedicalResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSupprimerCentreMedicalResult
     */
    private $SWS_SupprimerCentreMedicalResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSupprimerCentreMedicalResult
     */
    public function getSWS_SupprimerCentreMedicalResult()
    {
        return $this->SWS_SupprimerCentreMedicalResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSupprimerCentreMedicalResult $SWS_SupprimerCentreMedicalResult
     * @return SWSSupprimerCentreMedicalResponse
     */
    public function withSWS_SupprimerCentreMedicalResult($SWS_SupprimerCentreMedicalResult)
    {
        $new = clone $this;
        $new->SWS_SupprimerCentreMedicalResult = $SWS_SupprimerCentreMedicalResult;

        return $new;
    }
}

