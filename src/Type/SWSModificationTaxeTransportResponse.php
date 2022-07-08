<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSModificationTaxeTransportResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSModificationTaxeTransportResult
     */
    private $SWS_ModificationTaxeTransportResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSModificationTaxeTransportResult
     */
    public function getSWS_ModificationTaxeTransportResult()
    {
        return $this->SWS_ModificationTaxeTransportResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSModificationTaxeTransportResult $SWS_ModificationTaxeTransportResult
     * @return SWSModificationTaxeTransportResponse
     */
    public function withSWS_ModificationTaxeTransportResult($SWS_ModificationTaxeTransportResult)
    {
        $new = clone $this;
        $new->SWS_ModificationTaxeTransportResult = $SWS_ModificationTaxeTransportResult;

        return $new;
    }
}

