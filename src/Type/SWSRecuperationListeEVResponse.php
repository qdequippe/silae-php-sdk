<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSRecuperationListeEVResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSRecuperationListeEVResult
     */
    private $SWS_RecuperationListeEVResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSRecuperationListeEVResult
     */
    public function getSWS_RecuperationListeEVResult()
    {
        return $this->SWS_RecuperationListeEVResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSRecuperationListeEVResult $SWS_RecuperationListeEVResult
     * @return SWSRecuperationListeEVResponse
     */
    public function withSWS_RecuperationListeEVResult($SWS_RecuperationListeEVResult)
    {
        $new = clone $this;
        $new->SWS_RecuperationListeEVResult = $SWS_RecuperationListeEVResult;

        return $new;
    }
}

