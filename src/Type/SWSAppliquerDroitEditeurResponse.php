<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAppliquerDroitEditeurResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSBaseResult
     */
    private $SWS_AppliquerDroitEditeurResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSBaseResult
     */
    public function getSWS_AppliquerDroitEditeurResult()
    {
        return $this->SWS_AppliquerDroitEditeurResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSBaseResult $SWS_AppliquerDroitEditeurResult
     * @return SWSAppliquerDroitEditeurResponse
     */
    public function withSWS_AppliquerDroitEditeurResult($SWS_AppliquerDroitEditeurResult)
    {
        $new = clone $this;
        $new->SWS_AppliquerDroitEditeurResult = $SWS_AppliquerDroitEditeurResult;

        return $new;
    }
}

