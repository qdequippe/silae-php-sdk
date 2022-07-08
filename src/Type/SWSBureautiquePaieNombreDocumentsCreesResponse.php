<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSBureautiquePaieNombreDocumentsCreesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSBureautiquePaieNombreDocumentsCreesResult
     */
    private $SWS_BureautiquePaieNombreDocumentsCreesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSBureautiquePaieNombreDocumentsCreesResult
     */
    public function getSWS_BureautiquePaieNombreDocumentsCreesResult()
    {
        return $this->SWS_BureautiquePaieNombreDocumentsCreesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSBureautiquePaieNombreDocumentsCreesResult $SWS_BureautiquePaieNombreDocumentsCreesResult
     * @return SWSBureautiquePaieNombreDocumentsCreesResponse
     */
    public function withSWS_BureautiquePaieNombreDocumentsCreesResult($SWS_BureautiquePaieNombreDocumentsCreesResult)
    {
        $new = clone $this;
        $new->SWS_BureautiquePaieNombreDocumentsCreesResult = $SWS_BureautiquePaieNombreDocumentsCreesResult;

        return $new;
    }
}

