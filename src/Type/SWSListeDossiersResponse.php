<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeDossiersResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeDossiersResult
     */
    private $SWS_ListeDossiersResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeDossiersResult
     */
    public function getSWS_ListeDossiersResult()
    {
        return $this->SWS_ListeDossiersResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeDossiersResult $SWS_ListeDossiersResult
     * @return SWSListeDossiersResponse
     */
    public function withSWS_ListeDossiersResult($SWS_ListeDossiersResult)
    {
        $new = clone $this;
        $new->SWS_ListeDossiersResult = $SWS_ListeDossiersResult;

        return $new;
    }
}

