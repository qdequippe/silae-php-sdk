<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSEcrituresComptables3Response implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptablesResult
     */
    private $SWS_EcrituresComptables3Result;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptablesResult
     */
    public function getSWS_EcrituresComptables3Result()
    {
        return $this->SWS_EcrituresComptables3Result;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSEcrituresComptablesResult $SWS_EcrituresComptables3Result
     * @return SWSEcrituresComptables3Response
     */
    public function withSWS_EcrituresComptables3Result($SWS_EcrituresComptables3Result)
    {
        $new = clone $this;
        $new->SWS_EcrituresComptables3Result = $SWS_EcrituresComptables3Result;

        return $new;
    }
}

