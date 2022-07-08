<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEcrituresComptables2Response implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptablesResult
     */
    private $SWS_EcrituresComptables2Result;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptablesResult
     */
    public function getSWS_EcrituresComptables2Result()
    {
        return $this->SWS_EcrituresComptables2Result;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptablesResult $SWS_EcrituresComptables2Result
     * @return SWSEcrituresComptables2Response
     */
    public function withSWS_EcrituresComptables2Result($SWS_EcrituresComptables2Result)
    {
        $new = clone $this;
        $new->SWS_EcrituresComptables2Result = $SWS_EcrituresComptables2Result;

        return $new;
    }
}

