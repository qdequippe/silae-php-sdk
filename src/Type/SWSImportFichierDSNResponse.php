<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSImportFichierDSNResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSImportFichierDSNResult
     */
    private $SWS_ImportFichierDSNResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSImportFichierDSNResult
     */
    public function getSWS_ImportFichierDSNResult()
    {
        return $this->SWS_ImportFichierDSNResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSImportFichierDSNResult $SWS_ImportFichierDSNResult
     * @return SWSImportFichierDSNResponse
     */
    public function withSWS_ImportFichierDSNResult($SWS_ImportFichierDSNResult)
    {
        $new = clone $this;
        $new->SWS_ImportFichierDSNResult = $SWS_ImportFichierDSNResult;

        return $new;
    }
}

