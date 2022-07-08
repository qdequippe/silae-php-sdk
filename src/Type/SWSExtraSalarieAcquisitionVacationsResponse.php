<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSExtraSalarieAcquisitionVacationsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieAcquisitionVacationsResult
     */
    private $SWS_ExtraSalarieAcquisitionVacationsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieAcquisitionVacationsResult
     */
    public function getSWS_ExtraSalarieAcquisitionVacationsResult()
    {
        return $this->SWS_ExtraSalarieAcquisitionVacationsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieAcquisitionVacationsResult $SWS_ExtraSalarieAcquisitionVacationsResult
     * @return SWSExtraSalarieAcquisitionVacationsResponse
     */
    public function withSWS_ExtraSalarieAcquisitionVacationsResult($SWS_ExtraSalarieAcquisitionVacationsResult)
    {
        $new = clone $this;
        $new->SWS_ExtraSalarieAcquisitionVacationsResult = $SWS_ExtraSalarieAcquisitionVacationsResult;

        return $new;
    }
}

