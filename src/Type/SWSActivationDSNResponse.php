<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSActivationDSNResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSActivationDSNResult
     */
    private $SWS_ActivationDSNResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSActivationDSNResult
     */
    public function getSWS_ActivationDSNResult()
    {
        return $this->SWS_ActivationDSNResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSActivationDSNResult $SWS_ActivationDSNResult
     * @return SWSActivationDSNResponse
     */
    public function withSWS_ActivationDSNResult($SWS_ActivationDSNResult)
    {
        $new = clone $this;
        $new->SWS_ActivationDSNResult = $SWS_ActivationDSNResult;

        return $new;
    }
}

