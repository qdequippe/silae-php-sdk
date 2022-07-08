<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeDossiersTResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $SWS_ListeDossiersTResult;

    /**
     * @return string
     */
    public function getSWS_ListeDossiersTResult()
    {
        return $this->SWS_ListeDossiersTResult;
    }

    /**
     * @param string $SWS_ListeDossiersTResult
     * @return SWSListeDossiersTResponse
     */
    public function withSWS_ListeDossiersTResult($SWS_ListeDossiersTResult)
    {
        $new = clone $this;
        $new->SWS_ListeDossiersTResult = $SWS_ListeDossiersTResult;

        return $new;
    }
}

