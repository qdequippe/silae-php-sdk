<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEnregistrerCentreMedicalResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEnregistrerCentreMedicalResult
     */
    private $SWS_EnregistrerCentreMedicalResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEnregistrerCentreMedicalResult
     */
    public function getSWS_EnregistrerCentreMedicalResult()
    {
        return $this->SWS_EnregistrerCentreMedicalResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEnregistrerCentreMedicalResult $SWS_EnregistrerCentreMedicalResult
     * @return SWSEnregistrerCentreMedicalResponse
     */
    public function withSWS_EnregistrerCentreMedicalResult($SWS_EnregistrerCentreMedicalResult)
    {
        $new = clone $this;
        $new->SWS_EnregistrerCentreMedicalResult = $SWS_EnregistrerCentreMedicalResult;

        return $new;
    }
}

