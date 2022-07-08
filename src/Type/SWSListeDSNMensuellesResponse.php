<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeDSNMensuellesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeDSNMensuellesResult
     */
    private $SWS_ListeDSNMensuellesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeDSNMensuellesResult
     */
    public function getSWS_ListeDSNMensuellesResult()
    {
        return $this->SWS_ListeDSNMensuellesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeDSNMensuellesResult $SWS_ListeDSNMensuellesResult
     * @return SWSListeDSNMensuellesResponse
     */
    public function withSWS_ListeDSNMensuellesResult($SWS_ListeDSNMensuellesResult)
    {
        $new = clone $this;
        $new->SWS_ListeDSNMensuellesResult = $SWS_ListeDSNMensuellesResult;

        return $new;
    }
}

