<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSExtraSalarieAjouterVacationsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieAjouterVacationsResult
     */
    private $SWS_ExtraSalarieAjouterVacationsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieAjouterVacationsResult
     */
    public function getSWS_ExtraSalarieAjouterVacationsResult()
    {
        return $this->SWS_ExtraSalarieAjouterVacationsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSExtraSalarieAjouterVacationsResult $SWS_ExtraSalarieAjouterVacationsResult
     * @return SWSExtraSalarieAjouterVacationsResponse
     */
    public function withSWS_ExtraSalarieAjouterVacationsResult($SWS_ExtraSalarieAjouterVacationsResult)
    {
        $new = clone $this;
        $new->SWS_ExtraSalarieAjouterVacationsResult = $SWS_ExtraSalarieAjouterVacationsResult;

        return $new;
    }
}

