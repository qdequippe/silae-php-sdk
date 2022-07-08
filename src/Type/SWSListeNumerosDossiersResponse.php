<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeNumerosDossiersResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeNumerosDossiersResult
     */
    private $SWS_ListeNumerosDossiersResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeNumerosDossiersResult
     */
    public function getSWS_ListeNumerosDossiersResult()
    {
        return $this->SWS_ListeNumerosDossiersResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeNumerosDossiersResult $SWS_ListeNumerosDossiersResult
     * @return SWSListeNumerosDossiersResponse
     */
    public function withSWS_ListeNumerosDossiersResult($SWS_ListeNumerosDossiersResult)
    {
        $new = clone $this;
        $new->SWS_ListeNumerosDossiersResult = $SWS_ListeNumerosDossiersResult;

        return $new;
    }
}

