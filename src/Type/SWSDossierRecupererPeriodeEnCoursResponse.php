<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSDossierRecupererPeriodeEnCoursResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSDossierRecupererPeriodeEnCoursResult
     */
    private $SWS_DossierRecupererPeriodeEnCoursResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSDossierRecupererPeriodeEnCoursResult
     */
    public function getSWS_DossierRecupererPeriodeEnCoursResult()
    {
        return $this->SWS_DossierRecupererPeriodeEnCoursResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSDossierRecupererPeriodeEnCoursResult $SWS_DossierRecupererPeriodeEnCoursResult
     * @return SWSDossierRecupererPeriodeEnCoursResponse
     */
    public function withSWS_DossierRecupererPeriodeEnCoursResult($SWS_DossierRecupererPeriodeEnCoursResult)
    {
        $new = clone $this;
        $new->SWS_DossierRecupererPeriodeEnCoursResult = $SWS_DossierRecupererPeriodeEnCoursResult;

        return $new;
    }
}

