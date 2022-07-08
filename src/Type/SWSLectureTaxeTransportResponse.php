<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLectureTaxeTransportResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLectureTaxeTransportResult
     */
    private $SWS_LectureTaxeTransportResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLectureTaxeTransportResult
     */
    public function getSWS_LectureTaxeTransportResult()
    {
        return $this->SWS_LectureTaxeTransportResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLectureTaxeTransportResult $SWS_LectureTaxeTransportResult
     * @return SWSLectureTaxeTransportResponse
     */
    public function withSWS_LectureTaxeTransportResult($SWS_LectureTaxeTransportResult)
    {
        $new = clone $this;
        $new->SWS_LectureTaxeTransportResult = $SWS_LectureTaxeTransportResult;

        return $new;
    }
}

