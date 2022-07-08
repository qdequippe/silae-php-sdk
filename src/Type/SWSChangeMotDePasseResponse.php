<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSChangeMotDePasseResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult
     */
    private $SWS_ChangeMotDePasseResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult
     */
    public function getSWS_ChangeMotDePasseResult()
    {
        return $this->SWS_ChangeMotDePasseResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSLoginExResult $SWS_ChangeMotDePasseResult
     * @return SWSChangeMotDePasseResponse
     */
    public function withSWS_ChangeMotDePasseResult($SWS_ChangeMotDePasseResult)
    {
        $new = clone $this;
        $new->SWS_ChangeMotDePasseResult = $SWS_ChangeMotDePasseResult;

        return $new;
    }
}

