<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSListeVariablesASaisirResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSListeVariablesASaisirResult
     */
    private $SWS_ListeVariablesASaisirResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSListeVariablesASaisirResult
     */
    public function getSWS_ListeVariablesASaisirResult()
    {
        return $this->SWS_ListeVariablesASaisirResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSListeVariablesASaisirResult $SWS_ListeVariablesASaisirResult
     * @return SWSListeVariablesASaisirResponse
     */
    public function withSWS_ListeVariablesASaisirResult($SWS_ListeVariablesASaisirResult)
    {
        $new = clone $this;
        $new->SWS_ListeVariablesASaisirResult = $SWS_ListeVariablesASaisirResult;

        return $new;
    }
}

