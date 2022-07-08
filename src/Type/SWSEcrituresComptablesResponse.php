<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEcrituresComptablesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptablesResult
     */
    private $SWS_EcrituresComptablesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptablesResult
     */
    public function getSWS_EcrituresComptablesResult()
    {
        return $this->SWS_EcrituresComptablesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptablesResult $SWS_EcrituresComptablesResult
     * @return SWSEcrituresComptablesResponse
     */
    public function withSWS_EcrituresComptablesResult($SWS_EcrituresComptablesResult)
    {
        $new = clone $this;
        $new->SWS_EcrituresComptablesResult = $SWS_EcrituresComptablesResult;

        return $new;
    }
}

