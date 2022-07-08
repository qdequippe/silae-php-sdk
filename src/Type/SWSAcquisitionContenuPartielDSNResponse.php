<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAcquisitionContenuPartielDSNResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSAcquisitionContenuPartielDSNResult
     */
    private $SWS_AcquisitionContenuPartielDSNResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSAcquisitionContenuPartielDSNResult
     */
    public function getSWS_AcquisitionContenuPartielDSNResult()
    {
        return $this->SWS_AcquisitionContenuPartielDSNResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSAcquisitionContenuPartielDSNResult $SWS_AcquisitionContenuPartielDSNResult
     * @return SWSAcquisitionContenuPartielDSNResponse
     */
    public function withSWS_AcquisitionContenuPartielDSNResult($SWS_AcquisitionContenuPartielDSNResult)
    {
        $new = clone $this;
        $new->SWS_AcquisitionContenuPartielDSNResult = $SWS_AcquisitionContenuPartielDSNResult;

        return $new;
    }
}

