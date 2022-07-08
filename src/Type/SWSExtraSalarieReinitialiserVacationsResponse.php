<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSExtraSalarieReinitialiserVacationsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieReinitialiserVacationsResult
     */
    private $SWS_ExtraSalarieReinitialiserVacationsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieReinitialiserVacationsResult
     */
    public function getSWS_ExtraSalarieReinitialiserVacationsResult()
    {
        return $this->SWS_ExtraSalarieReinitialiserVacationsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieReinitialiserVacationsResult $SWS_ExtraSalarieReinitialiserVacationsResult
     * @return SWSExtraSalarieReinitialiserVacationsResponse
     */
    public function withSWS_ExtraSalarieReinitialiserVacationsResult($SWS_ExtraSalarieReinitialiserVacationsResult)
    {
        $new = clone $this;
        $new->SWS_ExtraSalarieReinitialiserVacationsResult = $SWS_ExtraSalarieReinitialiserVacationsResult;

        return $new;
    }
}

