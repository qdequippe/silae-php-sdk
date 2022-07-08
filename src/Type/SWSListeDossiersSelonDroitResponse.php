<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeDossiersSelonDroitResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeDossiersExResult
     */
    private $SWS_ListeDossiersSelonDroitResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeDossiersExResult
     */
    public function getSWS_ListeDossiersSelonDroitResult()
    {
        return $this->SWS_ListeDossiersSelonDroitResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeDossiersExResult $SWS_ListeDossiersSelonDroitResult
     * @return SWSListeDossiersSelonDroitResponse
     */
    public function withSWS_ListeDossiersSelonDroitResult($SWS_ListeDossiersSelonDroitResult)
    {
        $new = clone $this;
        $new->SWS_ListeDossiersSelonDroitResult = $SWS_ListeDossiersSelonDroitResult;

        return $new;
    }
}

