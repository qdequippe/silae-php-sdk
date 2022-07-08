<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSLoginSimpleResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $SWS_LoginSimpleResult;

    /**
     * @return string
     */
    public function getSWS_LoginSimpleResult()
    {
        return $this->SWS_LoginSimpleResult;
    }

    /**
     * @param string $SWS_LoginSimpleResult
     * @return SWSLoginSimpleResponse
     */
    public function withSWS_LoginSimpleResult($SWS_LoginSimpleResult)
    {
        $new = clone $this;
        $new->SWS_LoginSimpleResult = $SWS_LoginSimpleResult;

        return $new;
    }
}

